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
    private $code;
	private $url;
    private $ordinal;
    
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
    
    public function getCode() {
      return $this->code;
    }

    public function setCode($code) {
      $this->code = $code;
    }

    public function getUrl() {
      return $this->url;
    }

    public function setUrl($url) {
      $this->url = $url;
    }

    public function getOrdinal() {
        return $this->ordinal;
    }

    public function setOrdinal($ordinal) {
        $this->ordinal = $ordinal;
    }

    function retrieveLastOrder()
    {
      $this->db->select_max('ordinal');
      $query = $this->db->get($this->getTablename());
      $result = $query->result('array');
      return ((int)$result[0]['ordinal'] + 1);
    }
    
    function retrieveRegistrosForSort()
    {
      $this->db->select(array('id', 'nombreinsititucion', 'ordinal'));
      $this->db->order_by("ordinal", "desc");
      $query = $this->db->get($this->getTablename());
      
      return $query->result();
    }
    
    function updateOrder($institucion_id, $order)
    {
      $data = array(
                'ordinal' => $order
             );
      $this->db->where('id', $institucion_id);
      $this->db->update($this->getTablename(), $data);
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
      $data["isactive"] = $this->getIsActive();
      $data["responsablefilename"] = $this->getCvfilename();
      $data["responsablefilepath"] = $this->getCvfilepath();
      $data["password"] = $this->getPassword();
      $data["code"] = $this->getCode();
      $data["url"] = $this->getUrl();
      $this->db->where('id', $this->getId());
      $this->db->update($this->getTablename(), $data);
      return $this->getId();
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
      $data["password"] = $this->generatePassword();
      $data["code"] = $this->getCode();
      $data["url"] = $this->getUrl();  
      $data["ordinal"] = $this->retrieveLastOrder();
      $this->db->insert($this->getTablename(), $data);
      $id = $this->db->insert_id(); 
      
      return $id;
    }
    
    function editUploadedFile()
    {
      $data = array();
      $data["responsablefilename"] = $this->getCvfilename();
      $data["responsablefilepath"] = $this->getCvfilepath();
      $this->db->where('id', $this->getId());
      $this->db->update($this->getTablename(), $data);
      return $this->getId();
    }
    
    function countAllActiveRecords()
    {
      $this->db->where('isactive', 1);
      return $this->db->count_all_results($this->getTablename());
    }
    
    function retrieveRegistros($number = NULL, $offset = NULL, $returnObjects = FALSE, $onlyActive = false, $orderby = null)
    {
      if($orderby == null)
      {
        $this->db->order_by("ordinal", "desc");
      }
      else
      {
        $this->db->order_by($orderby, "asc");
      }
      
      //$this->db->order_by("id", "desc");
      $query = null;
      if($onlyActive)
      {
        $this->db->where('isactive', 1);
      }
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
      $aux->setCode($obj->code);
      $aux->setUrl($obj->url);
      $aux->setCvfilename($obj->responsablefilename);
      $aux->setCvfilepath($obj->responsablefilepath);
      return $aux;
    }
    
    function generatePassword ($length = 8)
    {
      // start with a blank password
      $password = "";
      // define possible characters - any character in this string can be
      // picked for use in the password, so if you want to put vowels back in
      // or add special characters such as exclamation marks, this is where
      // you should do it
      $possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";

      // we refer to the length of $possible a few times, so let's grab it now
      $maxlength = strlen($possible);

      // check for length overflow and truncate if necessary
      if ($length > $maxlength) {
        $length = $maxlength;
      }

      // set up a counter for how many characters are in the password so far
      $i = 0; 

      // add random characters to $password until $length is reached
      while ($i < $length) { 

        // pick a random character from the possible ones
        $char = substr($possible, mt_rand(0, $maxlength-1), 1);

        // have we already used this character in $password?
        if (!strstr($password, $char)) { 
          // no, so it's OK to add it onto the end of whatever we've already got...
          $password .= $char;
          // ... and increase the counter by one
          $i++;
        }
      }
      // done!
      return $password;
    }
    
    public function deleteAll()
    {
      @unlink($this->getResonsablefilepath().$this->getCvfilename());
      $this->simpleDeleteById($this->getId());
    }
    
    
}


