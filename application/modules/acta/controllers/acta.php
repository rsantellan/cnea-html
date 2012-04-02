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
class acta extends MY_Controller{
  
  function  __construct()  {
	parent::__construct();
    $this->loadI18n("actas", "", FALSE, TRUE, "", "sitio");
    $this->loadI18n("menu", "", FALSE, TRUE, "", "sitio");
    $this->data['menu_id'] = 'actas';
    $this->load->model("actaadmin/actas");
  }

  public function index($page = 0)
  {
    
    $this->load->library('pagination');
    
    $quantity = 13;
    $config['base_url'] = base_url().'index.php/acta/index/';
    $config['total_rows'] = $this->actas->countAllRecords();
    $config['per_page'] = $quantity;
    $config['cur_tag_open'] = '<a href="javascript:void(0)" class="current">';
    $config['cur_tag_close'] = '</a> -';
    $config['prev_link'] = FALSE;
    $config['next_link'] = FALSE;
    $config['num_tag_close'] = ' - ';
    
    $this->pagination->initialize($config);
    
    $this->data['list'] = $this->actas->retrieveActas($quantity, $page, true);
    
    $this->data['content'] = 'actas';
    $this->load->view('layout', $this->data);
  }
  
  public function descargar($id)
  {
    
    $avatar = $this->actas->retrieveAvatar("default", $id);
    $this->load->helper('download');
    $data = file_get_contents($avatar->getPath()); // Read the file's contents
    $name = $avatar->getName();
    force_download($name, $data);
    
  }
  
}
