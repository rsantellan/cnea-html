<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of interesesadmin
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class interesesadmin extends MY_Controller{
  
    function __construct()
    {
      parent::__construct();
      $this->data['menu_id'] = 'intereses';
      if(!$this->isLogged())
      {
        //Si no esta logeado se tiene que ir a loguear
        $this->session->set_userdata('url_to_direct_on_login', 'interesesadmin/index');
        redirect('auth/login'); 
      }

    }
    
    function index(){
      $this->load->model('interesesadmin/enlaces_intereses');
      $this->data['intereses_list'] = $this->enlaces_intereses->retrieveIntereses();
      $this->data['content'] = "interesesadmin/enlaces_list";
      
      $this->addJquery();
      $this->addFancyBox();
      //$this->addModuleJavascript("interesesadmin", "list.js");
      $this->load->view("admin/layout", $this->data);
    }
    
    
    function sort(){
      $this->load->model('interesesadmin/actas');
      $this->data['actas_list'] = $this->actas->retrieveActasForSort();
      
      $this->load->view('interesesadmin/sortable', $this->data);
    }
    
    function applySort()
    {
      $lista = $this->input->post('listItem');
      $this->load->model('interesesadmin/actas');
      
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
    
    function add($type)
    {
	  $objecto = null;
	  if($type == "enlaces_intereses")
	  {
		$this->load->model('interesesadmin/enlaces_intereses');
		$objecto  = new $this->enlaces_intereses;
	  }
	  else
	  {
		
	  }
      $this->data['use_grid_16'] = false;
      $this->data['content'] = "interesesadmin/add";
      $this->data['object'] = $objecto;
      $this->load->view("admin/layout", $this->data);
    }
    
    function edit($type, $id)
    {
	  $objecto = null;
	  if($type == "enlaces_intereses")
	  {
		$this->load->model('interesesadmin/enlaces_intereses');
		$objecto  = $this->enlaces_intereses->getById($id);
	  }
	  else
	  {
		
	  }
	  
      $this->addJquery();
      $this->addFancyBox();
      $this->addModuleJavascript("interesesadmin", "edit.js");
      $this->addModuleStyleSheet("upload", "albums.css");
      $this->addModuleJavascript("upload", "imagesAdmin.js");
      
      
      $this->data['use_grid_16'] = false;
      $this->data['content'] = "interesesadmin/edit";
      $this->data['object'] = $objecto;
      $this->load->view("admin/layout", $this->data);
    }
    
    function save()
    {
      $this->load->library('form_validation');
      
	  //Obtengo la clase que corresponde.
	  $objClass = $this->input->post('objClass', true);
	  
	  $obj = NULL;
	  if($objClass == "enlaces_intereses")
	  {
		$this->load->model('interesesadmin/enlaces_intereses');
		$obj  = new $this->enlaces_intereses;
	  }
	  
	  //$this->load->model('actas');
      // Get ID from form
      $id = $this->input->post('id', true);
      
      //$this->form_validation->set_rules('id', 'id', '');			
      $this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[255]');
      $this->form_validation->set_rules('link', 'link', 'required|max_length[255]');
	  
      $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
      
      $is_valid = false;
      if (!$this->form_validation->run() == FALSE) 
      {
        $is_valid = true;
      }
      $nombre = set_value('nombre');
	  $link = set_value('link');
      //var_dump($nombre);
      //$obj = new $this->actas;
      $obj->setNombre($nombre);
	  $obj->setLink($link);
      $obj->setId($id);
      //var_dump($obj);
      
      if($is_valid)
      {
        //Como es valido lo salvo
        $id = $obj->save();
        
        redirect('interesesadmin/edit/'.$obj->getObjectClass().'/'.$id);
      }
      else
      {
        if($obj->isNew())
        {
          $this->data['use_grid_16'] = false;
          $this->data['content'] = "interesesadmin/add";
          $this->data['object'] = $obj;
          $this->load->view("admin/layout", $this->data);
        }
        else
        {
          $this->data['use_grid_16'] = false;
          $this->data['content'] = "interesesadmin/edit";
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
