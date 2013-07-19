<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of institucion
 *
 * @author rodrigo
 */
class institucion extends MY_Model{
  
    private $id;
    private $nombreinsititucion;
    private $razonsocial;
    private $rut;
    private $naturaleza;
    private $primernivel;
    private $segundonivel;
    private $tercernivel;
    private $domicilioinstitucional;
    private $domiciliofiscal;
    private $tipoestablecimiento;
    private $observacionescomite;
    private $nombrecontacto;
    private $mailcontacto;
    private $telcontacto;
    private $password;
    private $cvfilename;
    private $cvfilepath;
    private $isActive;
    
    function __construct()
	{
		parent::__construct();
        $this->setTablename('institucion');
    }

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getNombreinsititucion() {
      return $this->nombreinsititucion;
    }

    public function setNombreinsititucion($nombreinsititucion) {
      $this->nombreinsititucion = $nombreinsititucion;
    }

    public function getRazonsocial() {
      return $this->razonsocial;
    }

    public function setRazonsocial($razonsocial) {
      $this->razonsocial = $razonsocial;
    }

    public function getRut() {
      return $this->rut;
    }

    public function setRut($rut) {
      $this->rut = $rut;
    }

    public function getNaturaleza() {
      return $this->naturaleza;
    }

    public function setNaturaleza($naturaleza) {
      $this->naturaleza = $naturaleza;
    }

    public function getPrimernivel() {
      return $this->primernivel;
    }

    public function setPrimernivel($primernivel) {
      $this->primernivel = $primernivel;
    }

    public function getSegundonivel() {
      return $this->segundonivel;
    }

    public function setSegundonivel($segundonivel) {
      $this->segundonivel = $segundonivel;
    }

    public function getTercernivel() {
      return $this->tercernivel;
    }

    public function setTercernivel($tercernivel) {
      $this->tercernivel = $tercernivel;
    }

    public function getDomicilioinstitucional() {
      return $this->domicilioinstitucional;
    }

    public function setDomicilioinstitucional($domicilioinstitucional) {
      $this->domicilioinstitucional = $domicilioinstitucional;
    }

    public function getDomiciliofiscal() {
      return $this->domiciliofiscal;
    }

    public function setDomiciliofiscal($domiciliofiscal) {
      $this->domiciliofiscal = $domiciliofiscal;
    }

    public function getTipoestablecimiento() {
      return $this->tipoestablecimiento;
    }

    public function setTipoestablecimiento($tipoestablecimiento) {
      $this->tipoestablecimiento = $tipoestablecimiento;
    }

    public function getObservacionescomite() {
      return $this->observacionescomite;
    }

    public function setObservacionescomite($observacionescomite) {
      $this->observacionescomite = $observacionescomite;
    }

    public function getNombrecontacto() {
      return $this->nombrecontacto;
    }

    public function setNombrecontacto($nombrecontacto) {
      $this->nombrecontacto = $nombrecontacto;
    }

    public function getMailcontacto() {
      return $this->mailcontacto;
    }

    public function setMailcontacto($mailcontacto) {
      $this->mailcontacto = $mailcontacto;
    }

    public function getTelcontacto() {
      return $this->telcontacto;
    }

    public function setTelcontacto($telcontacto) {
      $this->telcontacto = $telcontacto;
    }

    public function getPassword() {
      return $this->password;
    }

    public function setPassword($password) {
      $this->password = $password;
    }

    public function getCvfilename() {
      return $this->cvfilename;
    }

    public function setCvfilename($cvfilename) {
      $this->cvfilename = $cvfilename;
    }

    public function getCvfilepath() {
      return $this->cvfilepath;
    }

    public function setCvfilepath($cvfilepath) {
      $this->cvfilepath = $cvfilepath;
    }

    public function getIsActive() {
      return $this->isActive;
    }

    public function setIsActive($isActive) {
      $this->isActive = $isActive;
    }

}


