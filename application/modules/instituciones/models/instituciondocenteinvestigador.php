<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of instituciondocenteinvestigador
 *
 * @author rodrigo
 */
class instituciondocenteinvestigador extends MY_Model{
    
    private $id;
    private $intitucion_id;
    private $nombre;
    private $profesion;
    private $ocupacion;
    
    function __construct()
	{
		parent::__construct();
        $this->setTablename('instituciondocenteinvestigador');
    }
    
    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getIntitucion_id() {
      return $this->intitucion_id;
    }

    public function setIntitucion_id($intitucion_id) {
      $this->intitucion_id = $intitucion_id;
    }

    public function getNombre() {
      return $this->nombre;
    }

    public function setNombre($nombre) {
      $this->nombre = $nombre;
    }

    public function getProfesion() {
      return $this->profesion;
    }

    public function setProfesion($profesion) {
      $this->profesion = $profesion;
    }

    public function getOcupacion() {
      return $this->ocupacion;
    }

    public function setOcupacion($ocupacion) {
      $this->ocupacion = $ocupacion;
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
    
    private function edit()
    {
      $data = array();
      $data['institucion_id'] = $this->getIntitucion_id();
      $data['nombre'] = $this->getNombre();
      $data['profesion'] = $this->getProfesion();
      $data['ocupacion'] = $this->getOcupacion();
      $this->db->where('id', $this->getId());
      $this->db->update($this->getTablename(), $data);
      return $this->getId();
    }
    
    private function saveNew()
    {
      $data = array();
      $data['institucion_id'] = $this->getIntitucion_id();
      $data['nombre'] = $this->getNombre();
      $data['profesion'] = $this->getProfesion();
      $data['ocupacion'] = $this->getOcupacion();
      $this->db->insert($this->getTablename(), $data);
      $id = $this->db->insert_id(); 
      return $id;
   }

   public function getByInstitucionId($id, $return_objects = false)
   {
      $this->db->where('institucion_id', $id);
      $query = $this->db->get($this->getTablename());
      if($return_objects)
      {
        $salida = array();
        foreach($query->result() as $obj)
        {
          $salida[] = $this->populateObject($obj);
        }
        return $salida;
        
      }
      return $query->result();
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
          //return $this->createStdObjectFromRow($obj);
          return $this->populateObject($obj);
        }
        return $obj;
      } else {
        // None
        return NULL;
      }
    }
    
    private function populateObject($obj)
    {
      $aux = new instituciondocenteinvestigador();
      $aux->setId($obj->id);
      $aux->setIntitucion_id($obj->institucion_id);
      $aux->setNombre($obj->nombre);
      $aux->setOcupacion($obj->ocupacion);
      $aux->setProfesion($obj->profesion);
      return $aux;
    }

}


