<?php

if (!defined('BASEPATH')) exit ('No direct script access allowed');

/*
 */

/**
 * Description of public
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class sitio extends MY_Controller {
  
  function  __construct()  {
	parent::__construct();
    $this->loadI18n("sitio", "", FALSE, TRUE, "", "sitio");
    $this->data['menu_id'] = '';
  }
  
  public function index()
  {
    $this->data['content'] = 'inicio';
    $this->data['menu_id'] = 'index';
    $this->load->view('layout', $this->data);
  }
  
  public function cneaMision()
  {
    $this->data['content'] = 'cnea_mision';
    $this->data['menu_id'] = 'cnea';
    $this->load->view('layout', $this->data);
  }
  
  public function cneaObjetivos()
  {
    $this->data['content'] = 'cnea_objetivos';
    $this->data['menu_id'] = 'cnea';
    $this->load->view('layout', $this->data);
  }
  
  
  public function cneaIntegrantes()
  {
    $this->data['content'] = 'cnea_integrantes';
    $this->data['menu_id'] = 'cnea';
    $this->load->view('layout', $this->data);
  }
  
  public function leftBar()
  {
    
    $data = array();
    $this->load->view('leftBar', $data);
  }
}
