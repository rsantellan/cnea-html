<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of actaadmin
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class actaadmin extends MY_Controller{
  
    function __construct()
    {
      parent::__construct();
      $this->data['menu_id'] = 'actas';
      if(!$this->isLogged())
      {
        //Si no esta logeado se tiene que ir a loguear
        $this->session->set_userdata('url_to_direct_on_login', 'actaadmin/index');
        redirect('auth/login'); 
      }

    }
    
    function index(){
      $this->load->model('actaadmin/actas');
      $this->data['actas_list'] = $this->actas->retrieveActas();
      $this->data['content'] = "actaadmin/actas_list";
      
      $this->addJquery();
      $this->addFancyBox();
      $this->addModuleJavascript("actaadmin", "list.js");
      $this->load->view("admin/layout", $this->data);
    }
    
    
    function sort(){
      $this->load->model('actaadmin/actas');
      $this->data['actas_list'] = $this->actas->retrieveActasForSort();
      
      $this->load->view('actaadmin/sortable', $this->data);
    }
    
    function applySort()
    {
      $lista = $this->input->post('listItem');
      $this->load->model('actaadmin/actas');
      
      $cantidad = count($lista) - 1;
      while($cantidad >= 0)
      {
        //echo $lista[$cantidad] . " - ".$cantidad;
        $this->actas->updateActaOrder($lista[$cantidad], $cantidad);
        $cantidad --;
      }
      $salida = array();
      $salida['response'] = "OK";
      
      echo json_encode($salida);
      die;
    }
    
    function add()
    {
      $this->load->model('actas');
      $this->data['use_grid_16'] = false;
      $this->data['content'] = "actaadmin/add";
      $this->data['object'] = new $this->actas;
      $this->load->view("admin/layout", $this->data);
    }
    
    function edit($id)
    {
      $this->addJquery();
      $this->addFancyBox();
      $this->addModuleJavascript("actaadmin", "edit.js");
      $this->load->model('actas');
      $this->data['use_grid_16'] = false;
      $this->data['content'] = "actaadmin/edit";
      $this->data['object'] = $this->actas->getById($id);
      $this->load->view("admin/layout", $this->data);
    }
    
    function save()
    {
      $this->load->library('form_validation');
      $this->load->model('actas');
      // Get ID from form
      $id = $this->input->post('id', true);
      
      //$this->form_validation->set_rules('id', 'id', '');			
      $this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[255]');
        
      $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
      
      $is_valid = false;
      if (!$this->form_validation->run() == FALSE) 
      {
        $is_valid = true;
      }
      $nombre = set_value('nombre');
      //var_dump($nombre);
      $obj = new $this->actas;
      $obj->setNombre($nombre);
      $obj->setId($id);
      //var_dump($obj);
      
      if($is_valid)
      {
        //Como es valido lo salvo
        $id = $obj->save();
        
        redirect('actaadmin/edit/'.$id);
      }
      else
      {
        if($obj->isNew())
        {
          $this->data['use_grid_16'] = false;
          $this->data['content'] = "actaadmin/add";
          $this->data['object'] = $obj;
          $this->load->view("admin/layout", $this->data);
        }
        else
        {
          $this->data['use_grid_16'] = false;
          $this->data['content'] = "actaadmin/edit";
          $this->data['object'] = $obj;
          $this->load->view("admin/layout", $this->data);
        }
      }
    }
    
    function delete($id)
    {
      $this->load->model('actas');
      $result = $this->actas->deleteById($id);
      $salida['response'] = "OK";
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
      //echo json_encode($salida);
      //die;
    }
}
