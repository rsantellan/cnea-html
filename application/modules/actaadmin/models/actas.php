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
    
    function retrieveActas()
    {
      $this->db->order_by("ordinal", "desc");
      $query = $this->db->get($this->getTablename());
      
      return $query->result();
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
      return $this->db->insert_id(); 
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
}
