<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of institucionespecie
 *
 * @author rodrigo
 */
class institucionespecie extends MY_Model{
    
    private $id;
    private $intitucion_id;
    private $nombre;
    private $observacion;
    private $es_cria;
    private $es_uso;
  
    function __construct()
	{
		parent::__construct();
        $this->setTablename('institucionespecie');
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

    public function getObservacion() {
      return $this->observacion;
    }

    public function setObservacion($observacion) {
      $this->observacion = $observacion;
    }

    public function getEsCria() {
      return $this->es_cria;
    }

    public function setEsCria($es_cria) {
      $this->es_cria = $es_cria;
    }

    public function getEsUso() {
      return $this->es_uso;
    }

    public function setEsUso($es_uso) {
      $this->es_uso = $es_uso;
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
      $data['observacion'] = $this->getObservacion();
      $data['escria'] = $this->getEsCria();
      $data['esuso'] = $this->getEsUso();
      $this->db->insert($this->getTablename(), $data);
      $id = $this->db->insert_id(); 
      return $id;
    }

}


