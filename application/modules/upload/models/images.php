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
  
  function __construct()
  {
    parent::__construct();
    $this->setTablename('images');
  }
  
  public function retrieveAlbumImages($albumId)
  {
    $this->db->where('id', $albumId);
    $query = $this->db->get($this->getTablename());
    //var_dump(get_class($query));
    return $query->result_object();
  }
}
