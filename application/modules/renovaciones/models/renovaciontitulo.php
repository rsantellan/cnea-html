<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of renovacion
 *
 * @author rodrigo
 */
class renovaciontitulo extends MY_Model {

  private $id;
  private $renovacionid;
  private $nombre;
  private $description;
  
  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getRenovacionid() {
    return $this->renovacionid;
  }

  public function setRenovacionid($renovacionid) {
    $this->renovacionid = $renovacionid;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  public function getDescription() {
    return $this->description;
  }

  public function setDescription($description) {
    $this->description = $description;
  }

  function __construct() {
    parent::__construct();
    $this->setTablename('renovaciontitulo');
  }

  public function isNew() {
    if ($this->getId() == "" || is_null($this->getId())) {
      return true;
    }
  }

  public function save() {
    if ($this->isNew()) {
      return $this->saveNew();
    } else {
      return $this->edit();
    }
  }

  private function edit() {
    $this->db->where('id', $this->getId());
    $this->db->update($this->getTablename(), $this->populateTableData());
    return $this->getId();
  }

  private function populateTableData()
  {
    return array(
        'name' => $this->getNombre(),
        'renovacionid' => $this->getRenovacionid(),
        'description' => $this->getDescription(),
    );
  }
  
  private function saveNew() {

    $this->db->insert($this->getTablename(), $this->populateTableData());
    $id = $this->db->insert_id();

    return $id;
  }

  
  public function retrieveList($renovacionId, $returnObjects = FALSE)
  {
      $this->db->order_by("id", "desc");
      $this->db->where('renovacionid', $renovacionId);
      $query = $this->db->get($this->getTablename());
      if(!$returnObjects)
      {
        return $query->result();
      }
      else
      {
        $salida = array();
        foreach($query->result() as $obj)
        {
          $salida[] = $this->createObjectFromRow($obj);
        }
        return $salida;
      }
  }
  
  private function createObjectFromRow($row)
  {
    $aux = new renovacion();
    $aux->setApellido($row->apellido);
    $aux->setCargahoraria($row->cargahoraria);
    $aux->setCargo($row->cargo);
    $aux->setCategoriaA($row->categoriaA);
    $aux->setCategoriaB($row->categoriaB);
    $aux->setCategoriaC1($row->categoriaC1);
    $aux->setCategoriaC2($row->categoriaC2);
    $aux->setCi($row->ci);
    $aux->setEmail($row->email);
    $aux->setFechaacreditacion($row->fechaacreditacion);
    $aux->setFechasolicitud($row->fechasolicitud);
    $aux->setId($row->id);
    $aux->setInstitucion($row->institucion);
    $aux->setJefe($row->jefe);
    $aux->setLaboratorio($row->laboratorio);
    $aux->setNombre($row->nombre);
    $aux->setNumregistro($row->numregistro);
    return $aux;
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
        return $this->createObjectFromRow($obj);
      }
      return $obj;
    } else {
      // None
      return NULL;
    }
  }  

}

