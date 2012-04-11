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
  
  function registro($page = 0)
  {
    $this->load->model('registros/registro_persona');
    $this->load->library('pagination');
    $this->load->helper('text');
    $quantity = 10;
    $config['base_url'] = base_url().'index.php/acreditaciones/registro/';
    $config['total_rows'] = $this->registro_persona->countAllRecords();
    $config['per_page'] = $quantity;
    $config['cur_tag_open'] = '<a href="javascript:void(0)" class="current">';
    $config['cur_tag_close'] = '</a> -';
    $config['prev_link'] = FALSE;
    $config['next_link'] = FALSE;
    $config['num_tag_close'] = ' - ';
    
    $this->pagination->initialize($config);
    
    
    $this->data['list'] = $this->registro_persona->retrieveRegistros($quantity, $page, true);
    $this->data['page'] = $page;
    $this->data['content'] = 'registro';
    $this->load->view('layout', $this->data);
  }

  function reglamentacion()
  {
    $this->data['content'] = 'reglamentacion';
    $this->load->view('layout', $this->data);
  }
  
  function formulario()
  {
    
    //$this->addJquery();
    $this->addJavascript("jquery.js");
    $this->addStyleSheet("skin1.css");
    $this->addJavascript("jquery.infieldlabel.min.js");
    $this->addJavascript("basicInfieldFormPersonas.js");
	//$this->addJavascript("acreditacion.js");
    $this->addStyleSheet("infieldlabelPersonas.css");
    $this->load->library('form_validation');
    $this->load->helper('form');
    
    $this->form_validation->set_rules('fecha', 'fecha', 'required|max_length[255]');			
    $this->form_validation->set_rules('renovacion', 'renovacion', 'required|max_length[255]');			
    $this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[255]');			
    $this->form_validation->set_rules('postal', 'postal', 'required|max_length[255]');			
    $this->form_validation->set_rules('email', 'email', 'required|valid_email|max_length[255]');			
    $this->form_validation->set_rules('telefono', 'telefono', 'required|max_length[255]');			
    $this->form_validation->set_rules('institucion', 'institucion', 'required|max_length[255]');			
    $this->form_validation->set_rules('cargo', 'cargo', 'required|max_length[255]');			
    $this->form_validation->set_rules('realizacion', 'realizacion', 'required|max_length[5]');			
    $this->form_validation->set_rules('curso_1', 'curso_1', 'max_length[255]');			
    $this->form_validation->set_rules('curso_2', 'curso_2', 'max_length[255]');			
    $this->form_validation->set_rules('curso_3', 'curso_3', 'max_length[255]');			
    $this->form_validation->set_rules('observaciones_curso', 'observaciones_curso', 'max_length[1000]');			
    $this->form_validation->set_rules('acreditacion', 'acreditacion', 'max_length[5]');			
    $this->form_validation->set_rules('acreditacion_institucion', 'acreditacion_institucion', 'max_length[255]');			
    $this->form_validation->set_rules('acreditacion_categoria', 'acreditacion_categoria', 'max_length[255]');			
    $this->form_validation->set_rules('acreditacion_fecha', 'acreditacion_fecha', 'max_length[255]');			
    $this->form_validation->set_rules('categoria_a', 'categoria_a', 'max_length[255]');			
    $this->form_validation->set_rules('categoria_b', 'categoria_b', 'max_length[255]');			
    $this->form_validation->set_rules('categoria_c1', 'categoria_c1', 'max_length[255]');			
    $this->form_validation->set_rules('categoria_c2', 'categoria_c2', 'max_length[255]');
    
    $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
    if ($this->form_validation->run() == FALSE) // validation hasn't been passed
    {
      $this->data['content'] = 'formulario';
      $this->load->view('layout', $this->data);
    }
    else
    {
      $form_data = array(
          'fecha' => set_value('fecha'),
          'renovacion' => set_value('renovacion'),
          'nombre' => set_value('nombre'),
          'postal' => set_value('postal'),
          'email' => set_value('email'),
          'telefono' => set_value('telefono'),
          'institucion' => set_value('institucion'),
          'cargo' => set_value('cargo'),
          'realizacion' => set_value('realizacion'),
          'curso_1' => set_value('curso_1'),
          'curso_2' => set_value('curso_2'),
          'curso_3' => set_value('curso_3'),
          'observaciones_curso' => set_value('observaciones_curso'),
          'acreditacion' => set_value('acreditacion'),
          'acreditacion_institucion' => set_value('acreditacion_institucion'),
          'acreditacion_categoria' => set_value('acreditacion_categoria'),
          'acreditacion_fecha' => set_value('acreditacion_fecha'),
          'categoria_a' => set_value('categoria_a'),
          'categoria_b' => set_value('categoria_b'),
          'categoria_c1' => set_value('categoria_c1'),
          'categoria_c2' => set_value('categoria_c2')
      );
      $this->load->view('acreditaciones/email_formulario', $form_data);
      //die('esta todo ok ;)');
    }
    
    
  }
  
}
