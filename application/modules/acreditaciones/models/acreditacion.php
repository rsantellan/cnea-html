<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of institucion
 *
 * @author rodrigo
 */
class acreditacion extends MY_Model{
  
  private $id;
  private $fecha;
  private $nombreapellido;
  private $formacion_primaria;
  private $formacion_secundaria;
  private $formacionterciaria;
  private $documento;
  private $fechanacimiento;
  private $direccionpostal;
  private $direccionelectronica;
  private $telefonocontacto;
  private $instituciondesempeno;
  private $laboratoriounidad;
  private $cargofuncioninstitucion;
  private $cargahorariasemanal;
  private $nombresupervisor;
  private $especiestrabajadas;
  private $describatareas;
  private $pctinvestigacion;
  private $pctmedicinaclinica;
  private $pctcirugia;
  private $pctmantenimientocolonias;
  private $pctmanipulacion;
  private $pctdirprojectos;
  private $pctnecropsia;
  private $pctdiaglaboratorio;
  private $pctceua;
  private $pcthistopatologia;
  private $pctentedu;
  private $pctapoyoinvestigadores;
  private $pctsupervision;
  private $pctprodanimal;
  private $pctlegal;
  private $pctotrasfunciones;
  private $pctfuncnorel;
  private $pctobservaciones;
  private $realizocursos;
  private $acrpersonales;
  private $categoriaa;
  private $categoriab;
  private $categoria_c1;
  private $categoria_c2;
  private $cvfile;
  private $cvpath;
  private $isactive;
  private $fechavencimiento;
 
  function __construct()
  {
      parent::__construct();
      $this->setTablename('acreditacion');
  }
  
  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getFecha() {
    return $this->fecha;
  }

  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  public function getNombreapellido() {
    return $this->nombreapellido;
  }

  public function setNombreapellido($nombreapellido) {
    $this->nombreapellido = $nombreapellido;
  }

  public function getFormacion_primaria() {
    return $this->formacion_primaria;
  }

  public function setFormacion_primaria($formacion_primaria) {
    $this->formacion_primaria = $formacion_primaria;
  }

  public function getFormacion_secundaria() {
    return $this->formacion_secundaria;
  }

  public function setFormacion_secundaria($formacion_secundaria) {
    $this->formacion_secundaria = $formacion_secundaria;
  }

  public function getFormacionterciaria() {
    return $this->formacionterciaria;
  }

  public function setFormacionterciaria($formacionterciaria) {
    $this->formacionterciaria = $formacionterciaria;
  }

  public function getDocumento() {
    return $this->documento;
  }

  public function setDocumento($documento) {
    $this->documento = $documento;
  }

  public function getFechanacimiento() {
    return $this->fechanacimiento;
  }

  public function setFechanacimiento($fechanacimiento) {
    $this->fechanacimiento = $fechanacimiento;
  }

  public function getDireccionpostal() {
    return $this->direccionpostal;
  }

  public function setDireccionpostal($direccionpostal) {
    $this->direccionpostal = $direccionpostal;
  }

  public function getDireccionelectronica() {
    return $this->direccionelectronica;
  }

  public function setDireccionelectronica($direccionelectronica) {
    $this->direccionelectronica = $direccionelectronica;
  }

  public function getTelefonocontacto() {
    return $this->telefonocontacto;
  }

  public function setTelefonocontacto($telefonocontacto) {
    $this->telefonocontacto = $telefonocontacto;
  }

  public function getInstituciondesempeno() {
    return $this->instituciondesempeno;
  }

  public function setInstituciondesempeno($instituciondesempeno) {
    $this->instituciondesempeno = $instituciondesempeno;
  }

  public function getLaboratoriounidad() {
    return $this->laboratoriounidad;
  }

  public function setLaboratoriounidad($laboratoriounidad) {
    $this->laboratoriounidad = $laboratoriounidad;
  }

  public function getCargofuncioninstitucion() {
    return $this->cargofuncioninstitucion;
  }

  public function setCargofuncioninstitucion($cargofuncioninstitucion) {
    $this->cargofuncioninstitucion = $cargofuncioninstitucion;
  }

  public function getCargahorariasemanal() {
    return $this->cargahorariasemanal;
  }

  public function setCargahorariasemanal($cargahorariasemanal) {
    $this->cargahorariasemanal = $cargahorariasemanal;
  }

  public function getNombresupervisor() {
    return $this->nombresupervisor;
  }

  public function setNombresupervisor($nombresupervisor) {
    $this->nombresupervisor = $nombresupervisor;
  }

  public function getEspeciestrabajadas() {
    return $this->especiestrabajadas;
  }

  public function setEspeciestrabajadas($especiestrabajadas) {
    $this->especiestrabajadas = $especiestrabajadas;
  }

  public function getDescribatareas() {
    return $this->describatareas;
  }

  public function setDescribatareas($describatareas) {
    $this->describatareas = $describatareas;
  }

  public function getPctinvestigacion() {
    return $this->pctinvestigacion;
  }

  public function setPctinvestigacion($pctinvestigacion) {
    $this->pctinvestigacion = $pctinvestigacion;
  }

  public function getPctmedicinaclinica() {
    return $this->pctmedicinaclinica;
  }

  public function setPctmedicinaclinica($pctmedicinaclinica) {
    $this->pctmedicinaclinica = $pctmedicinaclinica;
  }

  public function getPctcirugia() {
    return $this->pctcirugia;
  }

  public function setPctcirugia($pctcirugia) {
    $this->pctcirugia = $pctcirugia;
  }

  public function getPctmantenimientocolonias() {
    return $this->pctmantenimientocolonias;
  }

  public function setPctmantenimientocolonias($pctmantenimientocolonias) {
    $this->pctmantenimientocolonias = $pctmantenimientocolonias;
  }

  public function getPctmanipulacion() {
    return $this->pctmanipulacion;
  }

  public function setPctmanipulacion($pctmanipulacion) {
    $this->pctmanipulacion = $pctmanipulacion;
  }

  public function getPctdirprojectos() {
    return $this->pctdirprojectos;
  }

  public function setPctdirprojectos($pctdirprojectos) {
    $this->pctdirprojectos = $pctdirprojectos;
  }

  public function getPctnecropsia() {
    return $this->pctnecropsia;
  }

  public function setPctnecropsia($pctnecropsia) {
    $this->pctnecropsia = $pctnecropsia;
  }

  public function getPctdiaglaboratorio() {
    return $this->pctdiaglaboratorio;
  }

  public function setPctdiaglaboratorio($pctdiaglaboratorio) {
    $this->pctdiaglaboratorio = $pctdiaglaboratorio;
  }

  public function getPctceua() {
    return $this->pctceua;
  }

  public function setPctceua($pctceua) {
    $this->pctceua = $pctceua;
  }

  public function getPcthistopatologia() {
    return $this->pcthistopatologia;
  }

  public function setPcthistopatologia($pcthistopatologia) {
    $this->pcthistopatologia = $pcthistopatologia;
  }

  public function getPctentedu() {
    return $this->pctentedu;
  }

  public function setPctentedu($pctentedu) {
    $this->pctentedu = $pctentedu;
  }

  public function getPctapoyoinvestigadores() {
    return $this->pctapoyoinvestigadores;
  }

  public function setPctapoyoinvestigadores($pctapoyoinvestigadores) {
    $this->pctapoyoinvestigadores = $pctapoyoinvestigadores;
  }

  public function getPctsupervision() {
    return $this->pctsupervision;
  }

  public function setPctsupervision($pctsupervision) {
    $this->pctsupervision = $pctsupervision;
  }

  public function getPctprodanimal() {
    return $this->pctprodanimal;
  }

  public function setPctprodanimal($pctprodanimal) {
    $this->pctprodanimal = $pctprodanimal;
  }

  public function getPctlegal() {
    return $this->pctlegal;
  }

  public function setPctlegal($pctlegal) {
    $this->pctlegal = $pctlegal;
  }

  public function getPctotrasfunciones() {
    return $this->pctotrasfunciones;
  }

  public function setPctotrasfunciones($pctotrasfunciones) {
    $this->pctotrasfunciones = $pctotrasfunciones;
  }

  public function getPctfuncnorel() {
    return $this->pctfuncnorel;
  }

  public function setPctfuncnorel($pctfuncnorel) {
    $this->pctfuncnorel = $pctfuncnorel;
  }

  public function getPctobservaciones() {
    return $this->pctobservaciones;
  }

  public function setPctobservaciones($pctobservaciones) {
    $this->pctobservaciones = $pctobservaciones;
  }

  public function getRealizocursos() {
    return $this->realizocursos;
  }

  public function setRealizocursos($realizocursos) {
    $this->realizocursos = $realizocursos;
  }

  public function getAcrpersonales() {
    return $this->acrpersonales;
  }

  public function setAcrpersonales($acrpersonales) {
    $this->acrpersonales = $acrpersonales;
  }

  public function getCategoriaa() {
    return $this->categoriaa;
  }

  public function setCategoriaa($categoriaa) {
    $this->categoriaa = $categoriaa;
  }

  public function getCategoriab() {
    return $this->categoriab;
  }

  public function setCategoriab($categoriab) {
    $this->categoriab = $categoriab;
  }

  public function getCategoria_c1() {
    return $this->categoria_c1;
  }

  public function setCategoria_c1($categoria_c1) {
    $this->categoria_c1 = $categoria_c1;
  }

  public function getCategoria_c2() {
    return $this->categoria_c2;
  }

  public function setCategoria_c2($categoria_c2) {
    $this->categoria_c2 = $categoria_c2;
  }

  public function getCvfile() {
    return $this->cvfile;
  }

  public function setCvfile($cvfile) {
    $this->cvfile = $cvfile;
  }

  public function getCvpath() {
    return $this->cvpath;
  }

  public function setCvpath($cvpath) {
    $this->cvpath = $cvpath;
  }

  public function getIsactive() {
    return $this->isactive;
  }

  public function setIsactive($isactive) {
    $this->isactive = $isactive;
  }

  public function getFechavencimiento() {
    return $this->fechavencimiento;
  }

  public function setFechavencimiento($fechavencimiento) {
    $this->fechavencimiento = $fechavencimiento;
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
      die;
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
      $this->db->where('id', $this->getId());
      $this->db->update($this->getTablename(), $data);
      return $this->getId();
    }
    
    private function saveNew()
    {
      die;
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
      $aux = new acreditacion();
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


