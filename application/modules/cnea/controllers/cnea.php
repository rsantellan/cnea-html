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
class cnea extends MY_Controller{
  
  function  __construct()  {
	parent::__construct();
    $this->loadI18n("cnea", "", FALSE, TRUE, "", "sitio");
    $this->loadI18n("menu", "", FALSE, TRUE, "", "sitio");
    $this->data['menu_id'] = 'cnea';
  }

  public function mision()
  {
    $this->data['content'] = 'cnea_mision';
    $this->load->view('layout', $this->data);
  }
  
  public function objetivos()
  {
    $this->data['content'] = 'cnea_objetivos';
    $this->load->view('layout', $this->data);
  }
  
  
  public function integrantes()
  {
    $this->data['content'] = 'cnea_integrantes';
    $this->load->view('layout', $this->data);
  }
}
