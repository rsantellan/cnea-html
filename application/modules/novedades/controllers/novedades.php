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
class novedades extends MY_Controller{
  
  function  __construct()  {
	parent::__construct();
    $this->loadI18n("novedades", "", FALSE, TRUE, "", "sitio");
    $this->loadI18n("menu", "", FALSE, TRUE, "", "sitio");
    $this->data['menu_id'] = 'novedades';
    $this->load->model("novedadesadmin/novedad");
    //Esto es para cnea
      $this -> addJavascript("jquery.js");
      $this -> addJavascript("jquery.infieldlabel.min.js");
      $this->addJavascript("busqueda.js");
      $this->addStyleSheet("busqueda.css");        
  }

  public function index($page = 0)
  {
    
    $this->load->library('pagination');
    $this->load->helper('text');
    $quantity = 3;
    $config['base_url'] = base_url().'index.php/novedades/index/';
    $config['total_rows'] = $this->novedad->countAllRecords();
    $config['per_page'] = $quantity;
    $config['cur_tag_open'] = '<a href="javascript:void(0)" class="current">';
    $config['cur_tag_close'] = '</a> -';
    $config['prev_link'] = FALSE;
    $config['next_link'] = FALSE;
    $config['num_tag_close'] = ' - ';
    
    $this->pagination->initialize($config);
    
    $this->data['list'] = $this->novedad->retrieveNovedades($quantity, $page, true);
    
    $this->data['content'] = 'novedades';
    $this->load->view('layout', $this->data);
  }
  
  public function detalle($id)
  {
    $this->load->helper('upload/mimage');
    $this->load->library('upload/mupload');
    $this->load->model('upload/album');
    $this->load->model('upload/images');
    $novedad = $this->novedad->getById($id);
    if(is_null($novedad))
    {
      show_404('Detalle novedad' , 'No existe una novedad con el id: '.$id);
    }
    $album = $this->album->retrieveObjectAlbum($novedad->getId(), $novedad->getObjectClass(), "default");
    $this->data["images"] = $this->images->retrieveAlbumImages($album->id);
    $this->data['novedad'] = $novedad;
    $this->data['content'] = "detalle";
    $this->load->view('layout', $this->data);
  }
  
  public function archivo($fileId)
  {
    $this->load->model('upload/images');
    $file = $this->images->getFile($fileId);
    $aux = $file[0];
    $this->load->helper('download');
    $data = file_get_contents($aux->path); // Read the file's contents
    $name = $aux->name;
    force_download($name, $data);
  }
  
}
