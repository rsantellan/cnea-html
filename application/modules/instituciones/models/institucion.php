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
    private $responsablefilename;
    private $responsablefilepath;
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
      return $this->responsablefilename;
    }

    public function setCvfilename($cvfilename) {
      $this->responsablefilename = $cvfilename;
    }

    public function getResonsablefilepath() {
      return $this->responsablefilepath;
    }

    public function setResonsablefilepath($cvfilepath) {
      $this->responsablefilepath = $cvfilepath;
    }

    public function getCvfilepath() {
      return $this->responsablefilepath;
    }

    public function setCvfilepath($cvfilepath) {
      $this->responsablefilepath = $cvfilepath;
    }

    
    public function getIsActive() {
      return $this->isActive;
    }

    public function setIsActive($isActive) {
      $this->isActive = $isActive;
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
      $data["nombreinsititucion"] = $this->getNombreinsititucion();
      $data["razonsocial"] = $this->getRazonsocial();
      $data["rut"] = $this->getRut();
      $data["naturaleza"] = $this->getNaturaleza();
      $data["primernivel"] = $this->getPrimernivel();
      $data["segundonivel"] = $this->getSegundonivel();
      $data["tercernivel"] = $this->getTercernivel();
      $data["domicilioinstitucional"] = $this->getDomicilioinstitucional();
      $data["domiciliofiscal"] = $this->getDomiciliofiscal();
      $data["tipoestablecimiento"] = $this->getTipoestablecimiento();
      $data["observacionescomite"] = $this->getObservacionescomite();
      $data["nombrecontacto"] = $this->getNombrecontacto();
      $data["mailcontacto"] = $this->getMailcontacto();
      $data["telcontacto"] = $this->getTelcontacto();
      $data["isactive"] = 0;
      $data["responsablefilename"] = $this->getCvfilename();
      $data["responsablefilepath"] = $this->getCvfilepath();
              
      $this->db->insert($this->getTablename(), $data);
      $id = $this->db->insert_id(); 
      
      return $id;
    }
    
    function retrieveRegistros($number = NULL, $offset = NULL, $returnObjects = FALSE)
    {
      //$this->db->order_by("ordinal", "desc");
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
          
          $salida[] = $this->createStdObjectFromRow($obj);
        }
        return $salida;
      }
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
          return $this->createStdObjectFromRow($obj);
        }
        return $obj;
      } else {
        // None
        return NULL;
      }
    }
    
    private function createStdObjectFromRow($obj)
    {
      $aux = new institucion();
      $aux->setId($obj->id);
      $aux->setNombreinsititucion($obj->nombreinsititucion);
      $aux->setRazonsocial($obj->razonsocial);
      $aux->setRut($obj->rut);
      $aux->setNaturaleza($obj->naturaleza);
      $aux->setPrimernivel($obj->primernivel);
      $aux->setSegundonivel($obj->segundonivel);
      $aux->setTercernivel($obj->tercernivel);
      $aux->setDomicilioinstitucional($obj->domicilioinstitucional);
      $aux->setDomiciliofiscal($obj->domiciliofiscal);
      $aux->setTipoestablecimiento($obj->tipoestablecimiento);
      $aux->setObservacionescomite($obj->observacionescomite);
      $aux->setNombrecontacto($obj->nombrecontacto);
      $aux->setMailcontacto($obj->mailcontacto);
      $aux->setTelcontacto($obj->telcontacto);
      $aux->setPassword($obj->password);
      $aux->setIsActive($obj->isactive);
      $aux->setCvfilename($obj->responsablefilename);
      $aux->setCvfilepath($obj->responsablefilepath);
      return $aux;
    }
}


