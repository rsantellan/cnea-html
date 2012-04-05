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
    $this->loadI18n("menu", "", FALSE, TRUE, "", "sitio");
    $this->data['menu_id'] = '';
  }
  
  public function index()
  {
    $this->data['content'] = 'inicio';
    $this->data['menu_id'] = 'index';
    $this->load->view('layout', $this->data);
  }
  
  public function faq()
  {
    $this->data['content'] = 'faq';
    $this->data['menu_id'] = 'faq';
    $this->load->view('layout', $this->data);    
  }
  
  public function leftBar()
  {
    $this->load->model('novedadesadmin/novedad');
    $this->loadI18n("novedades", "", FALSE, TRUE, "", "sitio");
    $novedades = $this->novedad->retrieveNovedades(3, 0, true);
    //$novedades = array();
    $data = array();
    $data['last_novedades'] = $novedades;
    
    
    $this->load->view('leftBar', $data);
  }
  
  public function buscar()
  {
    $data = $this->input->get('t');
    $data_list = explode(" ", $data);
    //var_dump($data_list);
    foreach($data_list as $key => $value)
    {
      if(strlen($value) <= 0)
      {
        unset($data_list[$key]);
      }
    }
    
    //Primero busco las novedades.
    $this->load->model('novedadesadmin/novedad');
    
    $novedades_list = array();
    foreach($data_list as $value)
    {
      $novedades = $this->novedad->retrieveSearchNovedades($value);
      $novedades_list = array_merge($novedades_list, $novedades);
    }
    
    // Buscaria las novedades con los tags
    // SELECT * FROM actas a where a.id IN (SELECT ta.id_acta FROM tags_actas ta where id_tag IN (SELECT t.id FROM tags t where t.name LIKE "%te%"))
    $this->load->model('tags/tag');
    
    //Busco las actas
    $this->load->model('actaadmin/actas');
    $actas_list = array();
    foreach($data_list as $value)
    {
      $novedades = $this->actas->retrieveSearchActas($value);
      $actas_list = array_merge($actas_list, $novedades);
    }
    
    //Busco las actas con tags
    
    
    
    $this->load->helper('text');
    $this->data['actas'] = $actas_list;
    $this->data['novedades'] = $novedades_list;
    $this->data['content'] = 'busqueda';
    $this->data['menu_id'] = '';
    $this->load->view('layout', $this->data);
  }
}
