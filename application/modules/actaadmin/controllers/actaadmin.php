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
//        $this->load->helper(array('form', 'url'));
//        $this->load->library('form_validation');
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
    }
}
