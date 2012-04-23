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
    //Esto es para cnea
      $this -> addJavascript("jquery.js");
      $this -> addJavascript("jquery.infieldlabel.min.js");
      $this->addJavascript("busqueda.js");
      $this->addStyleSheet("busqueda.css");        
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
    $this->output->enable_profiler(TRUE);
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
      foreach($novedades as $key => $aValue)
      {
        if(!isset($novedades_list[$key]))
        {
          $novedades_list[$key] = $aValue;
        }
      }
      $novedades_tags = $this->novedad->retrieveSearchNovedadesTags($value);
      foreach($novedades_tags as $key => $aValue)
      {
        if(!isset($novedades_list[$key]))
        {
          $novedades_list[$key] = $aValue;
        }
      }
    }
    
    // Buscaria las novedades con los tags
    
    $this->load->model('tags/tag');
    //Busco las actas
    $this->load->model('actaadmin/actas');
    $actas_list = array();
    foreach($data_list as $value)
    {
      //Busco por palabras
      $actas = $this->actas->retrieveSearchActas($value);
      foreach($actas as $key => $aValue)
      {
        if(!isset($actas_list[$key]))
        {
          $actas_list[$key] = $aValue;
        }
      }
      //Busco por tags
      $tags_list = $this->actas->retrieveSearchActasTags($value);
      foreach($tags_list as $key => $aValue)
      {
        if(!isset($actas_list[$key]))
        {
          $actas_list[$key] = $aValue;
        }
      }
      
    }
    //Busco las actas con tags
    /*
    foreach($data_list as $value)
    {
      $tags_list = $this->actas->retrieveSearchActasTags($value);
      foreach($tags_list as $key => $aValue)
      {
        if(!isset($actas_list[$key]))
        {
          $actas_list[$key] = $aValue;
        }
      }
    }
    */
    $this->load->helper('text');
    $this->data['actas'] = $actas_list;
    $this->data['novedades'] = $novedades_list;
    $this->data['content'] = 'busqueda';
    $this->data['menu_id'] = '';
    $this->load->view('layout', $this->data);
  }
}
