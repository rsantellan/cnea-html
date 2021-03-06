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
      //$this->output->enable_profiler(TRUE);
      $this->load->model('interesesadmin/enlaces_intereses');
      $this->load->model('interesesadmin/documentos_intereses');
      $this->data['intereses_list'] = $this->enlaces_intereses->retrieveIntereses();
      $this->data['documentos_list'] = $this->documentos_intereses->retrieveIntereses();
      $this->data['content'] = "interesesadmin/enlaces_list";
      
      $this->addJquery();
      $this->addFancyBox();
      $this->addModuleJavascript("interesesadmin", "list.js");
      $this->load->view("admin/layout", $this->data);
    }
    
    
    function sort($type){
      $listado = array();
      if($type == "enlaces_intereses")
	  {
		$this->load->model('interesesadmin/enlaces_intereses');
		$listado  = $this->enlaces_intereses->retrieveInteresesForSort();
	  }
	  else
	  {
		$this->load->model('interesesadmin/documentos_intereses');
        $listado  = $this->documentos_intereses->retrieveInteresesForSort();
	  }
      $this->data['type'] = $type;
      $this->data['list'] = $listado;
      $this->load->view('interesesadmin/sortable', $this->data);
    }
    
    function applySort()
    {
      $lista = $this->input->post('listItem');
      $type = $this->input->post('type', true);
      $cantidad = count($lista) - 1;
      
      $obj = NULL;
      //var_dump($type);die;
	  if($type == "enlaces_intereses")
	  {
		$this->load->model('interesesadmin/enlaces_intereses');
		$obj  = new $this->enlaces_intereses;
	  }
	  else
      {
        $this->load->model('interesesadmin/documentos_intereses');
        $obj  = new $this->documentos_intereses;
      }
      
      
      $maximo = count($lista) - 1;
      $cantidad = 0;
      while($cantidad <= $maximo)
      {
        $obj->updateInteresesOrder($lista[$maximo - $cantidad], $cantidad);
        $cantidad ++;
      }
      /*
      while($cantidad >= 0)
      {
        //echo $lista[$cantidad] . " - ".$cantidad;
        $obj->updateInteresesOrder($lista[$cantidad], $cantidad);
        $cantidad --;
      }
      */
      $salida = array();
      $salida['response'] = "OK";
      
      echo json_encode($salida);
      die;
    }
    
    function add($type)
    {
	  $objecto = null;
      $texto = "";
	  if($type == "enlaces_intereses")
	  {
		$this->load->model('interesesadmin/enlaces_intereses');
		$objecto  = new $this->enlaces_intereses;
        $texto = "enlace";
	  }
	  else
	  {
		$this->load->model('interesesadmin/documentos_intereses');
        $objecto  = new $this->documentos_intereses;
        $texto = "documento";
	  }
      $this->data['texto'] = $texto;
      $this->data['use_grid_16'] = false;
      $this->data['content'] = "interesesadmin/add";
      $this->data['object'] = $objecto;
      $this->load->view("admin/layout", $this->data);
    }
    
    function edit($type, $id)
    {
	  $objecto = null;
      $texto = "";
	  if($type == "enlaces_intereses")
	  {
		$this->load->model('interesesadmin/enlaces_intereses');
		$objecto  = $this->enlaces_intereses->getById($id);
        $texto = "enlace";
	  }
	  else
	  {
		$this->load->model('interesesadmin/documentos_intereses');
        $objecto  = $this->documentos_intereses->getById($id);
        $texto = "documento";
	  }
	  $this->data['texto'] = $texto;
      $this->addJquery();
      $this->addFancyBox();
      //$this->addModuleJavascript("interesesadmin", "edit.js");
      //$this->addModuleStyleSheet("upload", "albums.css");
      //$this->addModuleJavascript("upload", "imagesAdmin.js");
      
      
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
      $texto = "";
	  if($objClass == "enlaces_intereses")
	  {
		$this->load->model('interesesadmin/enlaces_intereses');
		$obj  = new $this->enlaces_intereses;
        $texto = "enlace";
	  }
	  else
      {
        $this->load->model('interesesadmin/documentos_intereses');
        $obj  = new $this->documentos_intereses;
        $texto = "documento";
      }
	  //$this->load->model('actas');
      // Get ID from form
      $id = $this->input->post('id', true);
      
      //$this->form_validation->set_rules('id', 'id', '');			
      $this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[255]');
      $this->form_validation->set_rules('link', 'link', 'required|max_length[255]|valid_url');
	  
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
        $this->session->set_flashdata("salvado", "ok");
        redirect('interesesadmin/edit/'.$obj->getObjectClass().'/'.$id);
      }
      else
      {
        $this->data['texto'] = $texto;
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
    
    function delete($id, $type)
    {
      $result = false;
      if($type == "enlaces_intereses")
	  {
		$this->load->model('interesesadmin/enlaces_intereses');
		$result = $this->enlaces_intereses->deleteById($id);
	  }
	  else
	  {
		$this->load->model('interesesadmin/documentos_intereses');
        $result = $this->documentos_intereses->deleteById($id);
	  }
      $salida['response'] = "OK";
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
      //echo json_encode($salida);
      //die;
    }
}
