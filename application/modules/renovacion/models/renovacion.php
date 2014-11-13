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
  private $categoria;
  private $fechaacreditacion;
  private $fechasolicitud;
  private $numregistro;
  private $protocolos;
  private $protocoloinvestigacion;
  private $protocolootros;

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

  public function getCategoria() {
    return $this->categoria;
  }

  public function setCategoria($categoria) {
    $this->categoria = $categoria;
  }

  public function getFechaacreditacion() {
    return $this->fechaacreditacion;
  }

  public function setFechaacreditacion($fechaacreditacion) {
    $this->fechaacreditacion = $fechaacreditacion;
  }

  public function getFechasolicitud() {
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

  public function getProtocolos() {
    return $this->protocolos;
  }

  public function setProtocolos($protocolos) {
    $this->protocolos = $protocolos;
  }

  public function getProtocoloinvestigacion() {
    return $this->protocoloinvestigacion;
  }

  public function setProtocoloinvestigacion($protocoloinvestigacion) {
    $this->protocoloinvestigacion = $protocoloinvestigacion;
  }

  public function getProtocolootros() {
    return $this->protocolootros;
  }

  public function setProtocolootros($protocolootros) {
    $this->protocolootros = $protocolootros;
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
    $data = array(
    );
    //var_dump($data);die;
    $this->db->where('id', $this->getId());
    $this->db->update($this->getTablename(), $data);
    return $this->getId();
  }

  private function saveNew() {

    $data = array(
    );
    $this->db->insert($this->getTablename(), $data);
    $id = $this->db->insert_id();

    return $id;
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

