<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of images
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class images extends MY_Model{
  
  private $id;
  private $path;
  private $name;
  private $type;
  private $album_id;
    
  function __construct()
  {
    parent::__construct();
    $this->setTablename('images');
  }
  
  public function getId() {
    return $this->id;
  }
  
  public function getPath() {
    return $this->path;
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getType() {
    return $this->type;
  }
  
  public function getAlbumId() {
    return $this->album_id;
  }
  
  public function setId($id) {
    $this->id = $id;
  }
  
  public function setPath($path) {
    $this->path = $path;
  }
  
  public function setName($name) {
    $this->name = $name;
  }
  
  public function setType($type) {
    $this->type = $type;
  }
  
  public function setAlbumId($album_id) {
    $this->album_id = $album_id;
  }
  
  public function isNew(){
    if($this->getId() == "" || is_null($this->getId()))
    {
      return true;
    }
  }
    
  public function save()
  {
    if($this->isNew())
    {
      return $this->saveNew();
    }
    else
    {
      return $this->edit();
    }
  }
    
  private function saveNew()
  {
    $data = array();
    $data["path"] = $this->getPath();
    $data["name"] = $this->getName();
    $data["type"] = $this->getType();
    $data["album_id"] = $this->getAlbumId();
    $this->db->insert($this->getTablename(), $data);
    $id = $this->db->insert_id(); 
    return $id;
  }
  
  private function edit()
  {
    //edit
  }
  
  public function retrieveAlbumImages($albumId)
  {
    $this->db->where('album_id', $albumId);
    $query = $this->db->get($this->getTablename());
    
    $salida = array();
    
    foreach($query->result_object() as $object)
    {
      var_dump($object->path);
      $this->mupload->get_file_of_path($object->path);
    }
    return $query->result_object();
  }
}