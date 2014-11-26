<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of MY_Model
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class MY_Model extends CI_Model{
  
  private $table_name;
  
  function __construct()
  {
      parent::__construct();
  }
  
  protected function getTablename() {
    return $this->table_name;
  }
  
  protected function setTablename($tablename)
  {
    $this->table_name = $tablename;
  }

  public function deleteById($id)
  {
    $ci = &get_instance();
    $ci->load->model("upload/album");
    $ci->album->deleteAllOf($id, $this->getObjectClass());
    //die;
    $this->db->where('id', $id);
    return $this->db->delete($this->getTablename());
  }
  
  public function simpleDeleteById($id)
  {
    $this->db->where('id', $id);
    return $this->db->delete($this->getTablename());
  }
  
  public function countAllRecords()
  {
    return $this->db->count_all($this->getTablename());
  }

  public function simpleGetById($id)
    {
      $this->db->where('id', $id);
      $this->db->limit('1');
      $query = $this->db->get($this->getTablename());
      if( $query->num_rows() == 1 ){
        return $query->row();
      } else {
        return NULL;
      }
    }
    
    
    protected function formatDateToMysql($date)
    {
	  //var_dump($date);
	  if(empty($date)) return $date;
      $pieces = explode("/", $date);
      return $pieces[2]."-".$pieces[1]."-".$pieces[0];
    }
    
    protected function formatDateFromMysql($date)
    {
      if(is_null($date)) return $date;
      $pieces = explode("-", $date);
      if(count($pieces) == 1) return $date;
      return $pieces[2]."/".$pieces[1]."/".$pieces[0];
    }
}
