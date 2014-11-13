<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of renovacion
 *
 * @author rodrigo
 */
class renovacion extends MY_Controller {

  function __construct() {
    parent::__construct();
  }

  function index() {
    $this->load->library('form_validation');
    $this->load->database();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('renovacion');
    $this->form_validation->set_rules('nombre', 'nombre', 'required|trim|max_length[255]');
    $this->form_validation->set_rules('apellido', 'apellido', 'required|trim|max_length[255]');
    $this->form_validation->set_rules('ci', 'ci', 'required|trim|max_length[255]');
    $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|max_length[255]');
    $this->form_validation->set_rules('institucion', 'institucion', 'required');
    $this->form_validation->set_rules('laboratorio', 'laboratorio/unidad', 'max_length[255]');
    $this->form_validation->set_rules('cargo', 'cargo', 'max_length[255]');
    $this->form_validation->set_rules('cargahoraria', 'cargahoraria', 'is_numeric');
    $this->form_validation->set_rules('jefe', 'jefe', 'max_length[255]');
    $this->form_validation->set_rules('categoria', 'categoria', 'required|max_length[255]');
    $this->form_validation->set_rules('fechaacreditacion', 'fechaacreditacion', 'required');
    $this->form_validation->set_rules('fechasolicitud', 'fechasolicitud', 'required');
    $this->form_validation->set_rules('numregistro', 'numregistro', 'required|max_length[255]');
    $this->form_validation->set_rules('protocolos', 'protocolos', '');
    $this->form_validation->set_rules('protocoloinvestigacion', 'protocoloinvestigacion', '');
    $this->form_validation->set_rules('protocolootros', 'protocolootros', '');

    $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

    if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
      $this->load->view('renovacion_view');
    } else { // passed validation proceed to post success logic
      // build array for the model

      $form_data = array(
          'nombre' => set_value('nombre'),
          'apellido' => set_value('apellido'),
          'ci' => set_value('ci'),
          'email' => set_value('email'),
          'institucion' => set_value('institucion'),
          'laboratorio' => set_value('laboratorio'),
          'cargo' => set_value('cargo'),
          'cargahoraria' => set_value('cargahoraria'),
          'jefe' => set_value('jefe'),
          'categoria' => set_value('categoria'),
          'fechaacreditacion' => set_value('fechaacreditacion'),
          'fechasolicitud' => set_value('fechasolicitud'),
          'numregistro' => set_value('numregistro'),
          'protocolos' => set_value('protocolos'),
          'protocoloinvestigacion' => set_value('protocoloinvestigacion'),
          'protocolootros' => set_value('protocolootros')
      );

      // run insert model to write data to db

      if ($this->renovacion->SaveForm($form_data) == TRUE) { // the information has therefore been successfully saved in the db
        redirect('renovacion/success');   // or whatever logic needs to occur
      } else {
        echo 'An error occurred saving your information. Please try again later';
        // Or whatever error handling is necessary
      }
    }
  }

  function success() {
    echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
  }

}

