<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of renovacion
 *
 * @author rodrigo
 */
class renovacion extends MY_Model {

  private $id;
  private $nombre;
  private $apellido;
  private $ci;
  private $email;
  private $institucion;
  private $laboratorio;
  private $cargo;
  private $cargahoraria;
  private $jefe;
  private $categoriaA;
  private $categoriaB;
  private $categoriaC1;
  private $categoriaC2;
  private $fechaacreditacion;
  private $fechasolicitud;
  private $numregistro;

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

  public function getApellido() {
    return $this->apellido;
  }

  public function setApellido($apellido) {
    $this->apellido = $apellido;
  }

  public function getCi() {
    return $this->ci;
  }

  public function setCi($ci) {
    $this->ci = $ci;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getInstitucion() {
    return $this->institucion;
  }

  public function setInstitucion($institucion) {
    $this->institucion = $institucion;
  }

  public function getLaboratorio() {
    return $this->laboratorio;
  }

  public function setLaboratorio($laboratorio) {
    $this->laboratorio = $laboratorio;
  }

  public function getCargo() {
    return $this->cargo;
  }

  public function setCargo($cargo) {
    $this->cargo = $cargo;
  }

  public function getCargahoraria() {
    return $this->cargahoraria;
  }

  public function setCargahoraria($cargahoraria) {
    $this->cargahoraria = $cargahoraria;
  }

  public function getJefe() {
    return $this->jefe;
  }

  public function setJefe($jefe) {
    $this->jefe = $jefe;
  }

  public function getFechaacreditacion($format_date = false) {
    if($format_date) return $this->formatDateFromMysql($this->fechaacreditacion);
    return $this->fechaacreditacion;
  }
  
  public function setFechaacreditacion($fechaacreditacion) {
    $this->fechaacreditacion = $fechaacreditacion;
  }

  public function getFechasolicitud($format_date = false) {
    if($format_date) return $this->formatDateFromMysql($this->fechasolicitud);
    return $this->fechasolicitud;
  }
  
  public function setFechasolicitud($fechasolicitud) {
    $this->fechasolicitud = $fechasolicitud;
  }

  public function getNumregistro() {
    return $this->numregistro;
  }

  public function setNumregistro($numregistro) {
    $this->numregistro = $numregistro;
  }

  public function getCategoriaA() {
    return $this->categoriaA;
  }

  public function setCategoriaA($categoriaA) {
    $this->categoriaA = $categoriaA;
  }

  public function getCategoriaB() {
    return $this->categoriaB;
  }

  public function setCategoriaB($categoriaB) {
    $this->categoriaB = $categoriaB;
  }

  public function getCategoriaC1() {
    return $this->categoriaC1;
  }

  public function setCategoriaC1($categoriaC1) {
    $this->categoriaC1 = $categoriaC1;
  }

  public function getCategoriaC2() {
    return $this->categoriaC2;
  }

  public function setCategoriaC2($categoriaC2) {
    $this->categoriaC2 = $categoriaC2;
  }

  function __construct() {
    parent::__construct();
    $this->setTablename('renovacion');
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
        'nombre' => $this->getNombre(),
        'apellido' => $this->getApellido(),
        'ci' => $this->getCi(),
        'email' => $this->getEmail(),
        'institucion' => $this->getInstitucion(),
        'laboratorio' => $this->getLaboratorio(),
        'cargo' => $this->getCargo(),
        'cargahoraria' => $this->getCargahoraria(),
        'jefe' => $this->getJefe(),
        'fechaacreditacion' => $this->formatDateToMysql($this->getFechaacreditacion()),
        'fechasolicitud' => $this->formatDateToMysql($this->getFechasolicitud()),
        'numregistro' => $this->getNumregistro(),
        'categoriaA' => $this->getCategoriaA(),
        'categoriaB' => $this->getCategoriaB(),
        'categoriaC1' => $this->getCategoriaC1(),
        'categoriaC2' => $this->getCategoriaC2(),
    );
  }
  private function saveNew() {

    $this->db->insert($this->getTablename(), $this->populateTableData());
    $id = $this->db->insert_id();

    return $id;
  }

  
  public function retrieveList($number = NULL, $offset = NULL, $returnObjects = FALSE)
  {
      $this->db->order_by("id", "desc");
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
          //$aux = new actas();
          //$aux->setId($obj->id);
          //$aux->setNombre($obj->nombre);
          
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
  // --------------------------------------------------------------------

  /**
   * function SaveForm()
   *
   * insert form data
   * @param $form_data - array
   * @return Bool - TRUE or FALSE
   */
  function SaveForm($form_data) {
    $this->db->insert('renovacion', $form_data);

    if ($this->db->affected_rows() == '1') {
      return TRUE;
    }

    return FALSE;
  }

}

