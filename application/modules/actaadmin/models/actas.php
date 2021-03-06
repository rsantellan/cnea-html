<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of actas
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class actas extends MY_Model{
  
    //private $table_name			= 'actas';
  
    private $id;
    private $nombre;
    
    function __construct()
	{
		parent::__construct();
        $this->setTablename('actas');
    }

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getNombre() {
      return $this->nombre;
    }

    public function setNombre($nombre) {
      $this->nombre = $nombre;
    }    
    
    function retrieveActas($number = NULL, $offset = NULL, $returnObjects = FALSE)
    {
      $this->db->order_by("ordinal", "desc");
      $query = null;
      if(is_null($number))
      {
        $query = $this->db->get($this->getTablename());
      }
      else
      {
        $query = $this->db->get($this->getTablename(), $number, $offset);
      }
      if(!$returnObjects)
      {
        return $query->result();
      }
      else
      {
        $salida = array();
        foreach($query->result() as $obj)
        {
          $aux = new actas();
          $aux->setId($obj->id);
          $aux->setNombre($obj->nombre);
          
          $salida[] = $aux;
        }
        return $salida;
      }
    }

    function retrieveActasForSort()
    {
      $this->db->select(array('id', 'nombre', 'ordinal'));
      $this->db->order_by("ordinal", "desc");
      $query = $this->db->get($this->getTablename());
      
      return $query->result();
    }
    
    function updateActaOrder($acta_id, $order)
    {
      $data = array(
                'ordinal' => $order
             );
      $this->db->where('id', $acta_id);
      $this->db->update($this->getTablename(), $data);
    }
    
    
    function retrieveLastActaOrder()
    {
      $this->db->select_max('ordinal');
      $query = $this->db->get($this->getTablename());
      $result = $query->result('array');
      return ((int)$result[0]['ordinal'] + 1);
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
      $data["nombre"] = $this->getNombre();
      $data["ordinal"] = $this->retrieveLastActaOrder();
      $this->db->insert($this->getTablename(), $data);
      $id = $this->db->insert_id(); 
      if(!is_null($id) && $id != 0)
      {
        $ci =& get_instance();
        $ci->load->model('upload/album');
        $ci->album->createAlbum($id, $this->getObjectClass()); 
      }
      return $id;
    }
    
    private function edit()
    {
      $data = array(
          'nombre' => $this->getNombre()
       );
      $this->db->where('id', $this->getId());
      $this->db->update($this->getTablename(), $data);
      
      return $this->getId();
    }
    
    public function getById($id, $return_obj = true)
    {
      $this->db->where('id', $id);
      $this->db->limit('1');
      $query = $this->db->get($this->getTablename());
      if( $query->num_rows() == 1 ){
        // One row, match!
        $obj = $query->row();        
        if($return_obj)
        {
          $aux = new actas();
          $aux->setId($obj->id);
          $aux->setNombre($obj->nombre);
          return $aux;
        }
        return $obj;
      } else {
        // None
        return NULL;
      }
    }
    
    public function getObjectClass()
    {
      return get_class($this);
    }
    
    public function hasAvatar($albumName = "default")
    {
      if(!is_null($this->getId()) && $this->getId() != "")
      {
        $ci = &get_instance();
        $ci->load->model("upload/album");
        return $ci->album->albumHasAvatar($this->getId(), $this->getObjectClass(), $albumName);
      }
      return false;
    }
    
    public function retrieveAvatar($albumName = "default", $id = NULL)
    {
      if(!is_null($id)) $this->setId($id);
      
      if(!is_null($this->getId()) && $this->getId() != "")
      {
        $ci = &get_instance();
        $ci->load->model("upload/album");
        return $ci->album->retrieveAlbumAvatar($this->getId(), $this->getObjectClass(), $albumName);
      }
      return NULL;      
    }
    
    public function retrieveSearchActas($text)
    {
      $this->db->like('nombre', $text);
      $query = $this->db->get($this->getTablename());

      $salida = array();
      foreach($query->result() as $obj)
      {
        $aux = new actas();
        $aux->setId($obj->id);
        $aux->setNombre($obj->nombre);
        $salida[$obj->id] = $aux;
      }
      return $salida;
    }
    
    public function retrieveSearchActasTags($text)
    {
      $sql = "SELECT a.id, a.nombre, a.ordinal FROM actas a ";
      $sql.= "where a.id IN (SELECT ta.id_acta FROM tags_actas ta ";
      $sql.= "where id_tag IN (SELECT t.id FROM tags t where t.name LIKE '%".$this->db->escape_like_str($text)."%'))";
      
      $query = $this->db->query($sql);
      $salida = array();
      foreach($query->result() as $obj)
      {
        $aux = new actas();
        $aux->setId($obj->id);
        $aux->setNombre($obj->nombre);
        $salida[$obj->id] = $aux;
      }
      return $salida;      
      
    }
}
