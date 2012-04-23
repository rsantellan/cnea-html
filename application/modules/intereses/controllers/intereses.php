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
class intereses extends MY_Controller{
  
  function  __construct()  {
	parent::__construct();
    $this->loadI18n("intereses", "", FALSE, TRUE, "", "sitio");
    $this->loadI18n("menu", "", FALSE, TRUE, "", "sitio");
    $this->data['menu_id'] = '';
    //Esto es para cnea
      $this -> addJavascript("jquery.js");
      $this -> addJavascript("jquery.infieldlabel.min.js");
      $this->addJavascript("busqueda.js");
      $this->addStyleSheet("busqueda.css");        
  }
  
  function enlaces()
  {
    $this->load->model('interesesadmin/enlaces_intereses');
    $this->data['list'] = $this->enlaces_intereses->retrieveIntereses();
    $this->data['content'] = 'enlaces';
    $this->load->view('layout', $this->data);
  }

  function documentos()
  {
    $this->load->model('interesesadmin/documentos_intereses');
    $this->data['list'] = $this->documentos_intereses->retrieveIntereses();
    $this->data['content'] = 'documentos';
    $this->load->view('layout', $this->data);
  }
}
