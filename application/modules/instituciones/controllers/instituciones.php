
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
class instituciones extends MY_Controller{
  
  function  __construct()  {
	parent::__construct();
    $this->loadI18n("instituciones", "", FALSE, TRUE, "", "sitio");
    $this->loadI18n("menu", "", FALSE, TRUE, "", "sitio");
    $this->data['menu_id'] = 'instituciones';
  }

  public function bases()
  {
    $this->data['content'] = 'instituciones_bases';
    $this->load->view('layout', $this->data);
  }
  
  public function reglamentacion()
  {
    $this->data['content'] = 'instituciones_reglamentacion';
    $this->load->view('layout', $this->data);
  }
  
  function registro($page = 0)
  {
    $this->load->model('registros/registro_institucion');
    $this->load->library('pagination');
    $this->load->helper('text');
    $quantity = 10;
    $config['base_url'] = base_url().'index.php/instituciones/registro/';
    $config['total_rows'] = $this->registro_institucion->countAllRecords();
    $config['per_page'] = $quantity;
    $config['cur_tag_open'] = '<a href="javascript:void(0)" class="current">';
    $config['cur_tag_close'] = '</a> -';
    $config['prev_link'] = FALSE;
    $config['next_link'] = FALSE;
    $config['num_tag_close'] = ' - ';
    
    $this->pagination->initialize($config);
    
    
    $this->data['list'] = $this->registro_institucion->retrieveRegistros($quantity, $page, true);
    $this->data['page'] = $page;
    $this->data['content'] = 'registro';
    $this->load->view('layout', $this->data);
  }
}
