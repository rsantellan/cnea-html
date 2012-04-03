<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of acreditaciones
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class acreditaciones extends MY_Controller{
  
  function  __construct()  {
	parent::__construct();
    $this->loadI18n("acreditaciones", "", FALSE, TRUE, "", "sitio");
    $this->loadI18n("menu", "", FALSE, TRUE, "", "sitio");
    $this->data['menu_id'] = 'acreditaciones';
  }
  
  function bases()
  {
    $this->data['content'] = 'bases';
    $this->load->view('layout', $this->data);
  }
  
  function registro()
  {
	$this->load->model('registros/registro_persona');
	$this->data['list'] = $this->registro_persona->retrieveRegistros();
    $this->data['content'] = 'registro';
    $this->load->view('layout', $this->data);
  }

  function reglamentacion()
  {
    $this->data['content'] = 'reglamentacion';
    $this->load->view('layout', $this->data);
  }   
}
