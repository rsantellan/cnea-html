<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of enlaces_intereses
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class enlaces_intereses extends MY_Model{
  
    //private $table_name			= 'enlaces_intereses';
  
    private $id;
    private $nombre;
	private $link;
    
    function __construct()
	{
		parent::__construct();
        $this->setTablename('enlaces_intereses');
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
    
	public function getLink() {
	  return $this->link;
	}

	public function setLink($link) {
	  $this->link = $link;
	}

	function retrieveIntereses()
    {
      $this->db->order_by("ordinal", "desc");
      $query = $this->db->get($this->getTablename());
      
      return $query->result();
    }

    function retrieveInteresesForSort()
    {
      $this->db->select(array('id', 'nombre', 'ordinal'));
      $this->db->order_by("ordinal", "desc");
      $query = $this->db->get($this->getTablename());
      
      return $query->result();
    }
    
    function updateInteresesOrder($interes_id, $order)
    {
      $data = array(
                'ordinal' => $order
             );
      $this->db->where('id', $interes_id);
      $this->db->update($this->getTablename(), $data);
    }
    
    
    function retrieveLastInteresOrder()
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
	  $data["link"] = $this->getLink();
      $data["ordinal"] = $this->retrieveLastInteresOrder();
      $this->db->insert($this->getTablename(), $data);
      $id = $this->db->insert_id();
      return $id;
    }
    
    private function edit()
    {
      $data = array(
          'nombre' => $this->getNombre(),
		  'link' => $this->getLink()
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
          $aux = new enlaces_intereses();
          $aux->setId($obj->id);
          $aux->setNombre($obj->nombre);
		  $aux->setLink($obj->link);
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
}
