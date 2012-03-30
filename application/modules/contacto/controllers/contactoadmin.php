<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of contactoadmin
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class contactoadmin extends MY_Controller{
  function __construct()
  {
    parent::__construct();
    $this->data['menu_id'] = 'contacto';
    if(!$this->isLogged())
    {
      //Si no esta logeado se tiene que ir a loguear
      $this->session->set_userdata('url_to_direct_on_login', 'contactoadmin/index');
      redirect('auth/login'); 
    }

  }
  
  function index(){
      $this->load->model('contacto/mail_db');
      $this->data['list'] = $this->mail_db->retrieveAllMailDbData();
      
      $funcion_list = array();
      
      foreach($this->data['list'] as $key => $funcion)
      {
        $row_list = array();
        foreach($funcion as $row)
        {
          $row_list[] = $this->load->view('contacto/contacto_admin_row', array('row' => $row), true);
        }
        $funcion_list[$key] = $row_list;
        //var_dump($funcion);
        //var_dump($key);
      }
      
      $this->data['content_rows'] = $funcion_list;
      $this->data['content'] = "contacto/contacto_admin";
      
      $this->addJquery();
      $this->addFancyBox();
      //$this->addModuleJavascript("actaadmin", "list.js");
      $this->load->view("admin/layout", $this->data);
    }
  
}
