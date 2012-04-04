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
class registros extends MY_Controller{
  
    function __construct()
    {
      parent::__construct();
      $this->data['menu_id'] = 'registros_personas';
      if(!$this->isLogged())
      {
        //Si no esta logeado se tiene que ir a loguear
        $this->session->set_userdata('url_to_direct_on_login', 'actaadmin/index');
        redirect('auth/login'); 
      }

    }
    
    function index(){
      $this->load->model('registros/registro_persona');
      $this->data['list'] = $this->registro_persona->retrieveRegistros();
      $this->data['content'] = "registros/personas/list";
      
      $this->addJquery();
      $this->addFancyBox();
      $this->addModuleJavascript("registros", "list.js");
      $this->load->view("admin/layout", $this->data);
    }
    
    function instituciones(){
      $this->data['menu_id'] = 'registros_instituciones';
      
      $this->load->model('registros/registro_institucion');
      $this->data['list'] = $this->registro_institucion->retrieveRegistros();
      $this->data['content'] = "registros/instituciones/list";
      
      $this->addJquery();
      $this->addFancyBox();
      $this->addModuleJavascript("registros", "list.js");
      $this->load->view("admin/layout", $this->data);
    }
    
    function sortPersonas(){
      $this->load->model('registros/registro_persona');
      $this->data['list'] = $this->registro_persona->retrieveRegistrosForSort();
      
      $this->load->view('registros/personas/sortable', $this->data);
    }
    
    function sortInstituciones(){
      $this->data['menu_id'] = 'registros_instituciones';
      
      $this->load->model('registros/registro_institucion');
      $this->data['list'] = $this->registro_institucion->retrieveRegistrosForSort();
      
      $this->load->view('registros/instituciones/sortable', $this->data);
    }
    
    function applySortPersona()
    {
      $lista = $this->input->post('listItem');
      $this->load->model('registros/registro_persona');
      
      $cantidad = count($lista) - 1;
      while($cantidad >= 0)
      {
        //echo $lista[$cantidad] . " - ".$cantidad;
        $this->registro_persona->updateOrder($lista[$cantidad], $cantidad);
        $cantidad --;
      }
      $salida = array();
      $salida['response'] = "OK";
      
      echo json_encode($salida);
      die;
    }
    
    function applySortInstitucion()
    {
      $this->data['menu_id'] = 'registros_instituciones';
      
      $lista = $this->input->post('listItem');
      $this->load->model('registros/registro_institucion');
      
      $cantidad = count($lista) - 1;
      while($cantidad >= 0)
      {
        //echo $lista[$cantidad] . " - ".$cantidad;
        $this->registro_institucion->updateOrder($lista[$cantidad], $cantidad);
        $cantidad --;
      }
      $salida = array();
      $salida['response'] = "OK";
      
      echo json_encode($salida);
      die;
    }
    
    function addPersona()
    {
      $this->load->model('registros/registro_persona');
      $this->data['use_grid_16'] = false;
      $this->data['content'] = "registros/personas/add";
      $this->data['object'] = new $this->registro_persona;
      $this->load->view("admin/layout", $this->data);
    }
    
    function addInstitucion()
    {
      $this->data['menu_id'] = 'registros_instituciones';
      
      $this->load->model('registros/registro_institucion');
      $this->data['use_grid_16'] = false;
      $this->data['content'] = "registros/instituciones/add";
      $this->data['object'] = new $this->registro_institucion;
      $this->load->view("admin/layout", $this->data);
    }
    
    function editPersona($id)
    {
      $this->load->model('registros/registro_persona');
      $this->data['use_grid_16'] = false;
      $this->data['content'] = "registros/personas/edit";
      $this->data['object'] = $this->registro_persona->getById($id);
      $this->load->view("admin/layout", $this->data);
    }
    
    function editInstitucion($id)
    {
      $this->data['menu_id'] = 'registros_instituciones';
      
      $this->load->model('registros/registro_institucion');
      $this->data['use_grid_16'] = false;
      $this->data['content'] = "registros/instituciones/edit";
      $this->data['object'] = $this->registro_institucion->getById($id);
      $this->load->view("admin/layout", $this->data);
    }
    
    function savePersona()
    {
	  //$this->output->enable_profiler(TRUE);
      $this->load->library('form_validation');
      $this->load->model('registros/registro_persona');
      // Get ID from form
      $id = $this->input->post('id', true);
      
      //$this->form_validation->set_rules('id', 'id', '');			
      $this->form_validation->set_rules('name', 'name', 'required|xss_clean|max_length[255]');			
	  $this->form_validation->set_rules('code', 'code', 'required|xss_clean|max_length[255]');			
	  $this->form_validation->set_rules('email', 'email', 'valid_email|max_length[255]');  
      $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
      $is_valid = false;
      if (!$this->form_validation->run() == FALSE) 
      {
        $is_valid = true;
      }
      $nombre = set_value('name');
	  $code = set_value('code');
	  $email = set_value('email');
      //var_dump($nombre);
      $obj = new $this->registro_persona;
      $obj->setNombre($nombre);
      $obj->setId($id);
	  $obj->setCode($code);
	  $obj->setEmail($email);
      //var_dump($obj);
      if($is_valid)
      {
		//Como es valido lo salvo
        $id = $obj->save();
        
        redirect('registros/editPersona/'.$id);
      }
      else
      {
		if($obj->isNew())
        {
          $this->data['use_grid_16'] = false;
          $this->data['content'] = "registros/personas/add";
          $this->data['object'] = $obj;
          $this->load->view("admin/layout", $this->data);
        }
        else
        {
          $this->data['use_grid_16'] = false;
          $this->data['content'] = "registros/personas/edit";
          $this->data['object'] = $obj;
          $this->load->view("admin/layout", $this->data);
        }
      }
    }
    
    function saveInstitucion()
    {
      $this->data['menu_id'] = 'registros_instituciones';
      
     //$this->output->enable_profiler(TRUE);
      $this->load->library('form_validation');
      $this->load->model('registros/registro_institucion');
      // Get ID from form
      $id = $this->input->post('id', true);
      
      //$this->form_validation->set_rules('id', 'id', '');			
      $this->form_validation->set_rules('name', 'name', 'required|xss_clean|max_length[255]');			
     $this->form_validation->set_rules('code', 'code', 'required|xss_clean|max_length[255]');			
     $this->form_validation->set_rules('url', 'url', 'required|max_length[255]');  
      $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
      $is_valid = false;
      if (!$this->form_validation->run() == FALSE) 
      {
        $is_valid = true;
      }
      $nombre = set_value('name');
     $code = set_value('code');
     $url = set_value('url');
      //var_dump($nombre);
      $obj = new $this->registro_institucion;
      $obj->setNombre($nombre);
      $obj->setId($id);
     $obj->setCode($code);
     $obj->setUrl($url);
      //var_dump($obj);
      if($is_valid)
      {
      //Como es valido lo salvo
        $id = $obj->save();
        
        redirect('registros/editInstitucion/'.$id);
      }
      else
      {
      if($obj->isNew())
        {
          $this->data['use_grid_16'] = false;
          $this->data['content'] = "registros/instituciones/add";
          $this->data['object'] = $obj;
          $this->load->view("admin/layout", $this->data);
        }
        else
        {
          $this->data['use_grid_16'] = false;
          $this->data['content'] = "registros/instituciones/edit";
          $this->data['object'] = $obj;
          $this->load->view("admin/layout", $this->data);
        }
      }
    }
    
    function deletePersona($id)
    {
      $this->load->model('registros/registro_persona');
      $result = $this->registro_persona->deleteById($id);
      $salida['response'] = "OK";
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
      //echo json_encode($salida);
      //die;
    }
    
    function deleteInstitucion($id)
    {
      $this->data['menu_id'] = 'registros_instituciones';
      
      $this->load->model('registros/registro_institucion');
      $result = $this->registro_institucion->deleteById($id);
      $salida['response'] = "OK";
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
      //echo json_encode($salida);
      //die;
    }
}
