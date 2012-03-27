<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of album
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class album extends MY_Model{
  

  function __construct()
  {
    parent::__construct();
    $this->setTablename('albums');
  }
    
  public function retrieveAllObjectAlbums($objectId, $objectClass)
  {
    $this->db->where('obj_id', $objectId);
    $this->db->where('obj_class', $objectClass);
    $query = $this->db->get($this->getTablename());
    return $query->result_array();
    
  }
  
  public function createAlbum($objectId, $objectClass, $albumName = "default")
  {
    
    $data = array(
        'obj_id' => $objectId,
        'obj_class' => $objectClass,
        'name' => $albumName,
    );
    $this->db->insert($this->getTablename(), $data);
    return $this->db->insert_id(); 
  }
}
