<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of institucionsociedadcivil
 *
 * @author rodrigo
 */
class institucionsociedadcivil extends MY_Model{
    
    private $id;
    private $intitucion_id;
    private $nombre;
    private $profesion;
    private $ocupacion;
    
    function __construct()
	{
		parent::__construct();
        $this->setTablename('institucionsociedadcivil');
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
    
    public function getByInstitucionId($id)
    {
      $this->db->where('institucion_id', $id);
      $query = $this->db->get($this->getTablename());
      return $query->result();
    }

}


