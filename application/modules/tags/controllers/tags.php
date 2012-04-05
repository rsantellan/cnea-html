<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of actaadmin
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class tags extends MY_Controller{
  
    function __construct()
    {
      parent::__construct();
      //$this->data['menu_id'] = 'actas';
      if(!$this->isLogged())
      {
        //Si no esta logeado se tiene que ir a loguear
        $this->session->set_userdata('url_to_direct_on_login', 'actaadmin/index');
        redirect('auth/login'); 
      }
      
    }
    
    /**
     * 
     * Esto pertenece solo a los tags
     * 
     * 
     */
    
    function index()
    {
      $this->load->model('tags/tag');
      $tags_list = $this->tag->retrieveAllTags(true);
      $table = $this->load->view('tags/list_table', array('list' => $tags_list), true);
      $this->load->view('tags/list', array('table' => $table));
    }
    
    function addTag()
    {
      $this->load->model('tags/tag');
      $data['object'] = new $this->tag;
      $body = $this->load->view('tags/form', $data, true);
      $salida = array();
      $salida['body'] = $body;
      $salida['response'] = "OK";
      $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($salida));
    }
    
    function editTag($id)
    {
      
      $this->load->model('tags/tag');
      $data['object'] = $this->tag->getById($id);
      $body = $this->load->view('tags/form', $data, true);
      $salida = array();
      $salida['body'] = $body;
      $salida['response'] = "OK";
      $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($salida));
    }
    
    function save()
    {
      $this->load->library('form_validation');
      $this->load->model('tags/tag');
      // Get ID from form
      $id = $this->input->post('id', true);
      
      //$this->form_validation->set_rules('id', 'id', '');			
      $this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[255]');
        
      $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
      
      $is_valid = false;
      if (!$this->form_validation->run() == FALSE) 
      {
        $is_valid = true;
      }
      $nombre = set_value('nombre');
      //var_dump($nombre);
      $obj = new $this->tag;
      $obj->setName($nombre);
      $obj->setId($id);
      //var_dump($obj);
      
      if($is_valid)
      {
        //Como es valido lo salvo
        $is_new = $obj->isNew();
        $id = $obj->save();
        $salida['response'] = "OK";
        $salida['id'] = $id;
        $salida['name'] = $nombre;
        $salida['is_new'] = $is_new;
        $tags_list = $this->tag->retrieveAllTags(true);
        $table = $this->load->view('tags/list_table', array('list' => $tags_list), true);
        $salida['table'] = $table;
        $this->output
           ->set_content_type('application/json')
           ->set_output(json_encode($salida));
        //redirect('actaadmin/edit/'.$id);
      }
      else
      {
          $data['object'] = $obj;
          $body = $this->load->view('tags/form', $data, true);
          $salida = array();
          $salida['body'] = $body;
          $salida['response'] = "ERROR";
          $this->output
             ->set_content_type('application/json')
             ->set_output(json_encode($salida));
      }
    }    
    
    
    function deleteTag($id)
    {
      $this->load->model('tags/tag');
      $result = $this->tag->deleteById($id);
      $salida['response'] = "OK";
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
    }
    
    
    /**
     *
     * Esto solo pertenece a las actas
     * 
     * 
     * 
     */
    
    
    function viewActas($parameters)
    {
      //$this->output->enable_profiler(TRUE);
      $this->load->model('tags/tags_actas');
      $this->load->model('tags/tag');
      $id = $parameters["id"];
      $data = $this->retrieveViewActasData($id);
      $this->load->view('tags/actasTags', $data);
    }
    
    private function retrieveViewActasData($id)
    {
      
      $tags_used = $this->tag->retrieveAllTagsOfObject($this->tags_actas->retrieveTableName(), "id_acta", $id, true);
      $tags_list = $this->tag->retrieveAllTags(true);
      $data['tags'] = $this->tag->removeDuplicated($tags_list, $tags_used);
      $data['tags_used'] = $tags_used;
      $data['id'] = $id;
      return $data;
    }
    
    function addActaTag()
    {
      $actaId = $this->input->post("actaId");
      $tagId = $this->input->post("tagId");
      $this->load->model('tags/tags_actas');
      $this->tags_actas->save($actaId, $tagId);
      $this->load->model('tags/tag');
      $data = $this->retrieveViewActasData($actaId);
      $body = $this->load->view('tags/actasTags', $data, true);
      $salida = array();
      $salida['body'] = $body;
      $salida['response'] = "OK";
      $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($salida));
      //echo json_encode($salida);
      //die(0);
    }
    
    function removeActaTag()
    {
      $actaId = $this->input->post("actaId");
      $tagId = $this->input->post("tagId");
      $this->load->model('tags/tags_actas');
      $this->tags_actas->remove($actaId, $tagId);
      $this->load->model('tags/tag');
      $data = $this->retrieveViewActasData($actaId);
      $body = $this->load->view('tags/actasTags', $data, true);
      $salida = array();
      $salida['body'] = $body;
      $salida['response'] = "OK";
      $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($salida));
    }
    
    function refreshActasTags($id)
    {
      $this->load->model('tags/tag');
      $this->load->model('tags/tags_actas');
      $data = $this->retrieveViewActasData($id);
      $body = $this->load->view('tags/actasTags', $data, true);
      $salida = array();
      $salida['body'] = $body;
      $salida['response'] = "OK";
      $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($salida));
    }
    
//    function index(){
//      $this->load->model('actaadmin/actas');
//      $this->data['actas_list'] = $this->actas->retrieveActas();
//      $this->data['content'] = "actaadmin/actas_list";
//      
//      $this->addJquery();
//      $this->addFancyBox();
//      $this->addModuleJavascript("actaadmin", "list.js");
//      $this->load->view("admin/layout", $this->data);
//    }
//    
//    
//    function sort(){
//      $this->load->model('actaadmin/actas');
//      $this->data['actas_list'] = $this->actas->retrieveActasForSort();
//      
//      $this->load->view('actaadmin/sortable', $this->data);
//    }
//    
//    function applySort()
//    {
//      $lista = $this->input->post('listItem');
//      $this->load->model('actaadmin/actas');
//      
//      $cantidad = count($lista) - 1;
//      while($cantidad >= 0)
//      {
//        //echo $lista[$cantidad] . " - ".$cantidad;
//        $this->actas->updateActaOrder($lista[$cantidad], $cantidad);
//        $cantidad --;
//      }
//      $salida = array();
//      $salida['response'] = "OK";
//      
//      echo json_encode($salida);
//      die;
//    }
//    
//    function add()
//    {
//      $this->load->model('actas');
//      $this->data['use_grid_16'] = false;
//      $this->data['content'] = "actaadmin/add";
//      $this->data['object'] = new $this->actas;
//      $this->load->view("admin/layout", $this->data);
//    }
//    
//    function edit($id)
//    {
//      $this->addJquery();
//      $this->addFancyBox();
//      $this->addModuleJavascript("actaadmin", "edit.js");
//      $this->addModuleStyleSheet("upload", "albums.css");
//      $this->addModuleJavascript("upload", "imagesAdmin.js");
//      
//      $this->load->model('actas');
//      $this->data['use_grid_16'] = false;
//      $this->data['content'] = "actaadmin/edit";
//      $this->data['object'] = $this->actas->getById($id);
//      $this->load->view("admin/layout", $this->data);
//    }
//    
//    function save()
//    {
//      $this->load->library('form_validation');
//      $this->load->model('actas');
//      // Get ID from form
//      $id = $this->input->post('id', true);
//      
//      //$this->form_validation->set_rules('id', 'id', '');			
//      $this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[255]');
//        
//      $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
//      
//      $is_valid = false;
//      if (!$this->form_validation->run() == FALSE) 
//      {
//        $is_valid = true;
//      }
//      $nombre = set_value('nombre');
//      //var_dump($nombre);
//      $obj = new $this->actas;
//      $obj->setNombre($nombre);
//      $obj->setId($id);
//      //var_dump($obj);
//      
//      if($is_valid)
//      {
//        //Como es valido lo salvo
//        $id = $obj->save();
//        
//        redirect('actaadmin/edit/'.$id);
//      }
//      else
//      {
//        if($obj->isNew())
//        {
//          $this->data['use_grid_16'] = false;
//          $this->data['content'] = "actaadmin/add";
//          $this->data['object'] = $obj;
//          $this->load->view("admin/layout", $this->data);
//        }
//        else
//        {
//          $this->data['use_grid_16'] = false;
//          $this->data['content'] = "actaadmin/edit";
//          $this->data['object'] = $obj;
//          $this->load->view("admin/layout", $this->data);
//        }
//      }
//    }
//    
//    function delete($id)
//    {
//      $this->load->model('actas');
//      $result = $this->actas->deleteById($id);
//      $salida['response'] = "OK";
//      $this->output
//       ->set_content_type('application/json')
//       ->set_output(json_encode($salida));
//      //echo json_encode($salida);
//      //die;
//    }
}
