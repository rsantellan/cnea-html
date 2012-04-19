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
class novedadesadmin extends MY_Controller{
  
    function __construct()
    {
      parent::__construct();
      $this->data['menu_id'] = 'novedades';
      if(!$this->isLogged())
      {
        //Si no esta logeado se tiene que ir a loguear
        $this->session->set_userdata('url_to_direct_on_login', 'actaadmin/index');
        redirect('auth/login'); 
      }

    }
    
    function index(){
      $this->load->model('novedadesadmin/novedad');
      $this->data['list'] = $this->novedad->retrieveNovedades();
      $this->data['content'] = "novedadesadmin/list";
      $this->load->helper('text');
      
      $this->addJquery();
      $this->addFancyBox();
      $this->addModuleJavascript("novedadesadmin", "list.js");
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
      $this->load->model('novedadesadmin/novedad');
      $this->data['use_grid_16'] = false;
      $this->data['content'] = "novedadesadmin/add";
      $this->data['object'] = new $this->novedad;
      $this->addJquery();
      $this->addFancyBox();
      $this->addJavascript("tiny_mce/tiny_mce.js");
      $this->addModuleJavascript("novedadesadmin", "edit.js");
      $this->load->view("admin/layout", $this->data);
    }
    
    function edit($id)
    {
      $this->addJquery();
      $this->addFancyBox();
      $this->addJavascript("tiny_mce/tiny_mce.js");
      //$this->addJavascript("jquery.markitup.js");
      $this->addModuleJavascript("novedadesadmin", "edit.js");
      $this->addModuleStyleSheet("upload", "albums.css");
      $this->addModuleJavascript("upload", "imagesAdmin.js");
      $this->addModuleJavascript("tags", "actaTags.js");
      $this->addModuleJavascript("tags", "tagManagement.js");
      $this->addModuleStyleSheet("tags", "actasTags.css");
      
      $this->load->model('novedadesadmin/novedad');
      $this->data['use_grid_16'] = false;
      $this->data['content'] = "novedadesadmin/edit";
      $this->data['object'] = $this->novedad->getById($id);
      $this->load->view("admin/layout", $this->data);
    }
    
    function save()
    {
      $this->load->library('form_validation');
      $this->load->model('novedadesadmin/novedad');
      // Get ID from form
      $id = $this->input->post('id', true);
      
      //$this->form_validation->set_rules('id', 'id', '');			
      $this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[255]');
      $this->form_validation->set_rules('descripcion', 'descripcion', 'required|trim|max_length[65535]');
      $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
      
      $is_valid = false;
      if (!$this->form_validation->run() == FALSE) 
      {
        $is_valid = true;
      }
      $nombre = set_value('nombre');
      $descripcion = html_escape(set_value('descripcion'), ENT_COMPAT | 0, 'UTF-8');
      //var_dump($nombre);
      $obj = new $this->novedad;
      $obj->setNombre($nombre);
      $obj->setDescripcion($descripcion);
      $obj->setId($id);
      
      
      if($is_valid)
      {
        //Como es valido lo salvo
        $id = $obj->save();
        
        redirect('novedadesadmin/edit/'.$id);
      }
      else
      {
        $this->addJquery();
        $this->addFancyBox();
        $this->addJavascript("tiny_mce/tiny_mce.js");
        $this->addModuleJavascript("novedadesadmin", "edit.js");
        $this->addModuleStyleSheet("upload", "albums.css");
        $this->addModuleJavascript("upload", "imagesAdmin.js");
        if($obj->isNew())
        {
          $this->data['use_grid_16'] = false;
          $this->data['content'] = "novedadesadmin/add";
          $this->data['object'] = $obj;
          $this->load->view("admin/layout", $this->data);
        }
        else
        {
          $this->data['use_grid_16'] = false;
          $this->data['content'] = "novedadesadmin/edit";
          $this->data['object'] = $obj;
          $this->load->view("admin/layout", $this->data);
        }
      }
    }
    
    function delete($id)
    {
      $this->load->model('novedadesadmin/novedad');
      $result = $this->novedad->deleteById($id);
      $salida['response'] = "OK";
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
      //echo json_encode($salida);
      //die;
    }
}
