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
  private $nombre;
  private $nombreapellido;
  private $formacion;
  private $titulo;
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
  private $pctinvestigacion = 0;
  private $pctmedicinaclinica = 0;
  private $pctcirugia = 0;
  private $pctmantenimientocolonias = 0;
  private $pctmanipulacion = 0;
  private $pctdirprojectos = 0;
  private $pctnecropsia = 0;
  private $pctdiaglaboratorio = 0;
  private $pctceua = 0;
  private $pcthistopatologia = 0;
  private $pctentedu = 0;
  private $pctapoyoinvestigadores = 0;
  private $pctsupervision = 0;
  private $pctprodanimal = 0;
  private $pctlegal = 0;
  private $pctotrasfunciones = 0;
  private $pctfuncnorel = 0;
  private $pctobservaciones = "";
  private $realizocursos;
  private $acrpersonales;
  private $categoriaA;
  private $categoriaB;
  private $categoriaC1;
  private $categoriaC2;
  private $cvfile = "";
  private $cvpath = "";
  private $isactive;
  private $fechavencimiento;
  private $curso1;
  private $curso2;
  private $curso3;
  private $cursoobservacion;
  private $acrorganismo;
  private $acrcategoria;
  private $acrfecha;
  private $estado;
  private $historicoId;
 
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

  public function getFecha($format_date = false) {
    if($format_date) return $this->formatDateFromMysql($this->fecha);
    return $this->fecha;
  }

  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }
  
  public function getNombreapellido() {
    return $this->nombreapellido;
  }

  public function setNombreapellido($nombreapellido) {
    $this->nombreapellido = $nombreapellido;
  }

  public function getFormacion() {
    if(empty($this->formacion)) return "primaria";
    return $this->formacion;
  }

  public function setFormacion($formacion) {
    $this->formacion = $formacion;
  }

  public function getTitulo() {
    return $this->titulo;
  }

  public function setTitulo($titulo) {
    $this->titulo = $titulo;
  }

  public function getDocumento() {
    return $this->documento;
  }

  public function setDocumento($documento) {
    $this->documento = $documento;
  }

  public function getFechanacimiento($format_date = false) {
    if($format_date) return $this->formatDateFromMysql($this->fechanacimiento);
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
    if(empty($this->pctinvestigacion)) return 0;
    return $this->pctinvestigacion;
  }

  public function setPctinvestigacion($pctinvestigacion) {
    $this->pctinvestigacion = $pctinvestigacion;
  }

  public function getPctmedicinaclinica() {
    if(empty($this->pctmedicinaclinica)) return 0;
    return $this->pctmedicinaclinica;
  }

  public function setPctmedicinaclinica($pctmedicinaclinica) {
    $this->pctmedicinaclinica = $pctmedicinaclinica;
  }

  public function getPctcirugia() {
    if(empty($this->pctcirugia)) return 0;
    return $this->pctcirugia;
  }

  public function setPctcirugia($pctcirugia) {
    $this->pctcirugia = $pctcirugia;
  }

  public function getPctmantenimientocolonias() {
    if(empty($this->pctmantenimientocolonias)) return 0;
    return $this->pctmantenimientocolonias;
  }

  public function setPctmantenimientocolonias($pctmantenimientocolonias) {
    $this->pctmantenimientocolonias = $pctmantenimientocolonias;
  }

  public function getPctmanipulacion() {
    if(empty($this->pctmanipulacion)) return 0;
    return $this->pctmanipulacion;
  }

  public function setPctmanipulacion($pctmanipulacion) {
    $this->pctmanipulacion = $pctmanipulacion;
  }

  public function getPctdirprojectos() {
    if(empty($this->pctdirprojectos)) return 0;
    return $this->pctdirprojectos;
  }

  public function setPctdirprojectos($pctdirprojectos) {
    $this->pctdirprojectos = $pctdirprojectos;
  }

  public function getPctnecropsia() {
    if(empty($this->pctnecropsia)) return 0;
    return $this->pctnecropsia;
  }

  public function setPctnecropsia($pctnecropsia) {
    $this->pctnecropsia = $pctnecropsia;
  }

  public function getPctdiaglaboratorio() {
    if(empty($this->pctdiaglaboratorio)) return 0;
    return $this->pctdiaglaboratorio;
  }

  public function setPctdiaglaboratorio($pctdiaglaboratorio) {
    $this->pctdiaglaboratorio = $pctdiaglaboratorio;
  }

  public function getPctceua() {
    if(empty($this->pctceua)) return 0;
    return $this->pctceua;
  }

  public function setPctceua($pctceua) {
    $this->pctceua = $pctceua;
  }

  public function getPcthistopatologia() {
    if(empty($this->pcthistopatologia)) return 0;
    return $this->pcthistopatologia;
  }

  public function setPcthistopatologia($pcthistopatologia) {
    $this->pcthistopatologia = $pcthistopatologia;
  }

  public function getPctentedu() {
    if(empty($this->pctentedu)) return 0;
    return $this->pctentedu;
  }

  public function setPctentedu($pctentedu) {
    $this->pctentedu = $pctentedu;
  }

  public function getPctapoyoinvestigadores() {
    if(empty($this->pctapoyoinvestigadores)) return 0;
    return $this->pctapoyoinvestigadores;
  }

  public function setPctapoyoinvestigadores($pctapoyoinvestigadores) {
    $this->pctapoyoinvestigadores = $pctapoyoinvestigadores;
  }

  public function getPctsupervision() {
    if(empty($this->pctsupervision)) return 0;
    return $this->pctsupervision;
  }

  public function setPctsupervision($pctsupervision) {
    $this->pctsupervision = $pctsupervision;
  }

  public function getPctprodanimal() {
    if(empty($this->pctprodanimal)) return 0;
    return $this->pctprodanimal;
  }

  public function setPctprodanimal($pctprodanimal) {
    $this->pctprodanimal = $pctprodanimal;
  }

  public function getPctlegal() {
    if(empty($this->pctlegal)) return 0;
    return $this->pctlegal;
  }

  public function setPctlegal($pctlegal) {
    $this->pctlegal = $pctlegal;
  }

  public function getPctotrasfunciones() {
    if(empty($this->pctotrasfunciones)) return 0;
    return $this->pctotrasfunciones;
  }

  public function setPctotrasfunciones($pctotrasfunciones) {
    $this->pctotrasfunciones = $pctotrasfunciones;
  }

  public function getPctfuncnorel() {
    if(empty($this->pctfuncnorel)) return 0;
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
    if($this->realizocursos == "") return "1";
    return $this->realizocursos;
  }

  public function setRealizocursos($realizocursos) {
    $this->realizocursos = $realizocursos;
  }

  public function getAcrpersonales() {
    if($this->acrpersonales == "") return "1";
    return $this->acrpersonales;
  }

  public function setAcrpersonales($acrpersonales) {
    $this->acrpersonales = $acrpersonales;
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

  public function getFechavencimiento($format_date = false) {
    if($format_date) return $this->formatDateFromMysql($this->fechavencimiento);
    return $this->fechavencimiento;
  }

  public function setFechavencimiento($fechavencimiento) {
    $this->fechavencimiento = $fechavencimiento;
  }
  
  public function getCurso1() {
	return $this->curso1;
  }

  public function setCurso1($curso1) {
	$this->curso1 = $curso1;
  }

  public function getCurso2() {
	return $this->curso2;
  }

  public function setCurso2($curso2) {
	$this->curso2 = $curso2;
  }

  public function getCurso3() {
	return $this->curso3;
  }

  public function setCurso3($curso3) {
	$this->curso3 = $curso3;
  }

  public function getCursoobservacion() {
	return $this->cursoobservacion;
  }

  public function setCursoobservacion($cursoobservacion) {
	$this->cursoobservacion = $cursoobservacion;
  }

  public function getAcrorganismo() {
	return $this->acrorganismo;
  }

  public function setAcrorganismo($acrorganismo) {
	$this->acrorganismo = $acrorganismo;
  }

  public function getAcrcategoria() {
	return $this->acrcategoria;
  }

  public function setAcrcategoria($acrcategoria) {
	$this->acrcategoria = $acrcategoria;
  }

  public function getAcrfecha($format_date = false) {
    if($format_date) return $this->formatDateFromMysql($this->acrfecha);
	return $this->acrfecha;
  }

  public function setAcrfecha($acrfecha) {
	$this->acrfecha = $acrfecha;
  }

  public function getEstado() {
	return $this->estado;
  }

  public function setEstado($estado) {
	$this->estado = $estado;
	if($estado !== 'A'){
	  $this->setIsactive(false);
	}else{
	  $this->setIsactive(true);
	}
  }

  public function getEstadoList(){
	return array(
		'A' => 'Activo',
		'N' => 'Nuevo',
		'V' => 'Vencido no renovo',
		'VR' => 'Vencido en renovacion',
		'R' => 'Rechazado',
	);
  }
  
  public function getEstadoName($estadoCode){
    $list = $this->getEstadoList();
    return $list[$estadoCode];
  }
  
  public function getHistoricoId()
  {
    return $this->historicoId;
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
      $data = array(
            'fecha' => $this->formatDateToMysql($this->getFecha()),
            'nombre' => $this->getNombre(),
            'nombreapellido' => $this->getNombreapellido(),
            'formacion' => $this->getFormacion(),
            'titulo' => $this->getTitulo(),
            'documento' => $this->getDocumento(),
            'fechanacimiento' => $this->formatDateToMysql($this->getFechanacimiento()),
            'direccionpostal' => $this->getDireccionpostal(),
            'direccionelectronica' => $this->getDireccionelectronica(),
            'telefonocontacto' => $this->getTelefonocontacto(),
            'instituciondesempeno' => $this->getInstituciondesempeno(),
            'laboratoriounidad' => $this->getLaboratoriounidad(),
            'cargofuncioninstitucion' => $this->getCargofuncioninstitucion(),
            'cargahorariasemanal' => $this->getCargahorariasemanal(),
            'nombresupervisor' => $this->getNombresupervisor(),
            'especiestrabajadas' => $this->getEspeciestrabajadas(),
            'describatareas' => $this->getDescribatareas(),
            'pctinvestigacion' => $this->getPctinvestigacion(),
            'pctmedicinaclinica' => $this->getPctmedicinaclinica(),
            'pctcirugia' => $this->getPctcirugia(),
            'pctmantenimientocolonias' => $this->getPctmantenimientocolonias(),
            'pctmanipulacion' => $this->getPctmanipulacion(),
            'pctdirprojectos' => $this->getPctdirprojectos(),
            'pctnecropsia' => $this->getPctnecropsia(),
            'pctdiaglaboratorio' => $this->getPctdiaglaboratorio(),
            'pctceua' => $this->getPctceua(),
            'pcthistopatologia' => $this->getPcthistopatologia(),
            'pctentedu' => $this->getPctentedu(),
            'pctapoyoinvestigadores' => $this->getPctapoyoinvestigadores(),
            'pctsupervision' => $this->getPctsupervision(),
            'pctprodanimal' => $this->getPctprodanimal(),
            'pctlegal' => $this->getPctlegal(),
            'pctotrasfunciones' => $this->getPctotrasfunciones(),
            'pctfuncnorel' => $this->getPctfuncnorel(),
            'pctobservaciones' => $this->getPctobservaciones(),
            'realizocursos' => $this->getRealizocursos(),
            'acrpersonales' => $this->getAcrpersonales(),
            'categoriaA' => $this->getCategoriaA(),
            'categoriaB' => $this->getCategoriaB(),
            'categoriaC1' => $this->getCategoriaC1(),
            'categoriaC2' => $this->getCategoriaC2(),
            'cvfile' => $this->getCvfile(),
            'cvpath' => $this->getCvpath(),
            'isactive' => $this->getIsactive(),
            'fechavencimiento' => $this->formatDateToMysql($this->getFechavencimiento()),
			'curso1' => $this->getCurso1(),
			'curso2' => $this->getCurso2(),
			'curso3' => $this->getCurso3(),
			'cursoobservacion' => $this->getCursoobservacion(),
			'acrorganismo' => $this->getAcrorganismo(),
			'acrcategoria' => $this->getAcrcategoria(),
			'acrfecha' => $this->formatDateToMysql($this->getAcrfecha()),
			'estado' => $this->getEstado(),
        );
      //var_dump($data);die;
      $this->db->where('id', $this->getId());
      $this->db->update($this->getTablename(), $data);
      return $this->getId();
    }
    
    public function changeStatus($status)
    {
      $active = 1;
      if($status == 1 || $status == "1")
      {
        $active = 0;
      }
      $data = array('isactive' => $active);
      $this->db->where('id', $this->getId());
      $this->db->update($this->getTablename(), $data);
      $this->doReplication($this->getId());
      return $this->getId();
    }
    
    public function doChangeStatus($id, $estado){
      $returnString = "Sin cambio";
      $listado = $this->getEstadoList();
      if(array_key_exists($estado, $listado)){
        $data = array('estado' => $estado);
        $this->db->where('id', $id);
        $this->db->update($this->getTablename(), $data);
        $this->doReplication($id);
        $returnString = "Nuevo estado es: ".$listado[$estado];
      }
      else
      {
        throw new Exception("Sin cambio");
      }
      return $returnString;
    }
    
    
    private function saveNew()
    {
      $this->setIsactive(0);
      $data = array(
            'fecha' => $this->formatDateToMysql($this->getFecha()),
            'nombre' => $this->getNombre(),
            'nombreapellido' => $this->getNombreapellido(),
            'formacion' => $this->getFormacion(),
            'titulo' => $this->getTitulo(),
            'documento' => $this->getDocumento(),
            'fechanacimiento' => $this->formatDateToMysql($this->getFechanacimiento()),
            'direccionpostal' => $this->getDireccionpostal(),
            'direccionelectronica' => $this->getDireccionelectronica(),
            'telefonocontacto' => $this->getTelefonocontacto(),
            'instituciondesempeno' => $this->getInstituciondesempeno(),
            'laboratoriounidad' => $this->getLaboratoriounidad(),
            'cargofuncioninstitucion' => $this->getCargofuncioninstitucion(),
            'cargahorariasemanal' => $this->getCargahorariasemanal(),
            'nombresupervisor' => $this->getNombresupervisor(),
            'especiestrabajadas' => $this->getEspeciestrabajadas(),
            'describatareas' => $this->getDescribatareas(),
            'pctinvestigacion' => $this->getPctinvestigacion(),
            'pctmedicinaclinica' => $this->getPctmedicinaclinica(),
            'pctcirugia' => $this->getPctcirugia(),
            'pctmantenimientocolonias' => $this->getPctmantenimientocolonias(),
            'pctmanipulacion' => $this->getPctmanipulacion(),
            'pctdirprojectos' => $this->getPctdirprojectos(),
            'pctnecropsia' => $this->getPctnecropsia(),
            'pctdiaglaboratorio' => $this->getPctdiaglaboratorio(),
            'pctceua' => $this->getPctceua(),
            'pcthistopatologia' => $this->getPcthistopatologia(),
            'pctentedu' => $this->getPctentedu(),
            'pctapoyoinvestigadores' => $this->getPctapoyoinvestigadores(),
            'pctsupervision' => $this->getPctsupervision(),
            'pctprodanimal' => $this->getPctprodanimal(),
            'pctlegal' => $this->getPctlegal(),
            'pctotrasfunciones' => $this->getPctotrasfunciones(),
            'pctfuncnorel' => $this->getPctfuncnorel(),
            'pctobservaciones' => $this->getPctobservaciones(),
            'realizocursos' => $this->getRealizocursos(),
            'acrpersonales' => $this->getAcrpersonales(),
            'categoriaA' => $this->getCategoriaA(),
            'categoriaB' => $this->getCategoriaB(),
            'categoriaC1' => $this->getCategoriaC1(),
            'categoriaC2' => $this->getCategoriaC2(),
            'cvfile' => $this->getCvfile(),
            'cvpath' => $this->getCvpath(),
            'isactive' => $this->getIsactive(),
			'fechavencimiento' => $this->formatDateToMysql($this->getFechavencimiento()),
			'curso1' => $this->getCurso1(),
			'curso2' => $this->getCurso2(),
			'curso3' => $this->getCurso3(),
			'cursoobservacion' => $this->getCursoobservacion(),
			'acrorganismo' => $this->getAcrorganismo(),
			'acrcategoria' => $this->getAcrcategoria(),
			'acrfecha' => $this->formatDateToMysql($this->getAcrfecha()),
			'estado' => $this->getEstado(),
        );
      $this->db->insert($this->getTablename(), $data);
      $id = $this->db->insert_id(); 
      $this->setId($id);
      return $id;
    }
    
    function retrieveRegistrosByInstitucionId($institucionId)
    {
      $this->db->where("instituciondesempeno", $institucionId);
      $this->db->where("isactive", 1);
      $this->db->order_by("nombreapellido", "asc");
      return $this->db->get($this->getTablename())->result();
    }
    
    function retrieveRegistrosWithCloseExpireDate($returnObjects = FALSE)
    {
      $this->db->select($this->getTablename().'.*, institucion.nombreinsititucion');
      $this->db->order_by($this->getTablename().".id", "desc");
      $this->db->join('institucion', 'institucion.id = '.$this->getTablename().'.instituciondesempeno', 'left');
      $this->db->where($this->getTablename().'.fechavencimiento <= DATE_ADD(NOW(), INTERVAL 1 MONTH)');
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
          
          $salida[] = $this->createStdObjectFromRow($obj);
        }
        return $salida;
      }
    }
    
    function retrieveRegistrosInactive($returnObjects = FALSE)
    {
      $this->db->select($this->getTablename().'.*, institucion.nombreinsititucion');
      $this->db->order_by($this->getTablename().".id", "desc");
      $this->db->join('institucion', 'institucion.id = '.$this->getTablename().'.instituciondesempeno', 'left');
      $this->db->where($this->getTablename().'.isactive', 0);
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
          
          $salida[] = $this->createStdObjectFromRow($obj);
        }
        return $salida;
      }
    }
    
    
    
    public function retrieveCountBasicData($where, $addIsExpire = false, $isInactive = false, $isNew = false)
    {
      $sql = 'select 
              count(*) as C
            from acreditacion 
            left join institucion on institucion.id = instituciondesempeno ';
      $whereAdded = false;
      $parameteres = array();
      if ($where !== "") {
        $whereAdded = true;
        $sql .= 'where (acreditacion.nombre like ? or acreditacion.nombreapellido like ? or acreditacion.direccionelectronica like ? or institucion.nombreinsititucion like ?)';
        $parameteres[] = '%'.$where.'%';
        $parameteres[] = '%'.$where.'%';
        $parameteres[] = '%'.$where.'%';
        $parameteres[] = '%'.$where.'%';
      }
      if($addIsExpire)
      {
        if(!$whereAdded){
          $sql .= ' where ';
          $whereAdded = true;
        }else{
          $sql .= ' and ';
        }
        $sql .= ' (acreditacion.fechavencimiento <= DATE_ADD(NOW(), INTERVAL 1 MONTH) and acreditacion.fechavencimiento >= DATE_ADD(NOW(), INTERVAL -3 MONTH) ) and acreditacion.estado != ?';
        $parameteres[] = 'N';
      }
      if($isInactive){
        if(!$whereAdded){
          $sql .= ' where ';
          $whereAdded = true;
        }else{
          $sql .= ' and ';
        }
        $sql .= 'acreditacion.estado != ? and acreditacion.estado != ?';
        $parameteres[] = 'A';
        $parameteres[] = 'N';
      }
      if($isNew){
        if(!$whereAdded){
          $sql .= ' where ';
          $whereAdded = true;
        }else{
          $sql .= ' and ';
        }
        $sql .= 'acreditacion.estado = ?';
        $parameteres[] = 'N';
      }
      $query = $this->db->query($sql, $parameteres);
      $row = $query->row();
      return $row->C;
    }
    
    function retrieveTableBasicData($limit = NULL, $offset = NULL, $order = '', $where = '', $addIsExpire = false, $isInactive = false, $isNew = false) 
    {
      $sql = 'select 
              acreditacion.id, 
              acreditacion.estado, 
              acreditacion.nombre, 
              acreditacion.nombreapellido, 
              institucion.nombreinsititucion, 
              acreditacion.direccionelectronica, 
              acreditacion.categoriaA, 
              acreditacion.categoriaB, 
              acreditacion.categoriaC1, 
              acreditacion.categoriaC2,
              DATE_FORMAT(acreditacion.fecha, "%d/%m/%Y") as fecha,
              DATE_FORMAT(acreditacion.fechavencimiento , "%d/%m/%Y") as fechavencimiento
            from acreditacion 
            left join institucion on institucion.id = instituciondesempeno ';
      $whereAdded = false;
      $parameteres = array();
      if ($where !== "") {
        $whereAdded = true;
        $sql .= 'where (acreditacion.nombre like ? or acreditacion.nombreapellido like ? or acreditacion.direccionelectronica like ? or institucion.nombreinsititucion like ?)';
        $parameteres[] = '%'.$where.'%';
        $parameteres[] = '%'.$where.'%';
        $parameteres[] = '%'.$where.'%';
        $parameteres[] = '%'.$where.'%';
      }
      if($addIsExpire)
      {
        if(!$whereAdded){
          $sql .= ' where ';
          $whereAdded = true;
        }else{
          $sql .= ' and ';
        }
        $sql .= ' (acreditacion.fechavencimiento <= DATE_ADD(NOW(), INTERVAL 1 MONTH) and acreditacion.fechavencimiento >= DATE_ADD(NOW(), INTERVAL -3 MONTH) ) and acreditacion.estado != ?';
        $parameteres[] = 'N';
      }
      if($isInactive){
        if(!$whereAdded){
          $sql .= ' where ';
          $whereAdded = true;
        }else{
          $sql .= ' and ';
        }
        $sql .= 'acreditacion.estado != ? and acreditacion.estado != ?';
        $parameteres[] = 'A';
        $parameteres[] = 'N';
      }
      if($isNew){
        if(!$whereAdded){
          $sql .= ' where ';
          $whereAdded = true;
        }else{
          $sql .= ' and ';
        }
        $sql .= 'acreditacion.estado = ?';
        $parameteres[] = 'N';
      }
      
      if ($order !== "") {
        $sql .= ' order by '.$order;
      }
	  if($limit !== null){
		$sql .= sprintf(' LIMIT %s OFFSET %s', $limit, $offset);
	  }
      
      //var_dump($sql);
      $query = $this->db->query($sql, $parameteres);
      return $query->result();
    }
    
    function retrieveRegistros($number = NULL, $offset = NULL, $returnObjects = FALSE)
    {
      //$this->db->order_by("ordinal", "desc");
      $this->db->select($this->getTablename().'.*, institucion.nombreinsititucion');
      $this->db->order_by($this->getTablename().".id", "desc");
      $this->db->join('institucion', 'institucion.id = '.$this->getTablename().'.instituciondesempeno', 'left');
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
      //$this->db->join('institucion', 'institucion.id = '.$this->getTablename().'.instituciondesempeno');
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
    
    public function getByIdHistorico($id, $return_obj = true)
    {
      $this->db->where('id', $id);
      //$this->db->join('institucion', 'institucion.id = '.$this->getTablename().'.instituciondesempeno');
      $this->db->limit('1');
      $query = $this->db->get($this->getTablename().'_historico');
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
    
    private function createStdObjectFromRow($aux, $historico = false)
    {
      $obj = new acreditacion();
      $obj->setId($aux->id);
      $obj->setFecha($aux->fecha);
      $obj->setNombre($aux->nombre);
      $obj->setNombreapellido($aux->nombreapellido);
      $obj->setFormacion($aux->formacion);
      $obj->setTitulo($aux->titulo);
      $obj->setDocumento($aux->documento);
      $obj->setFechanacimiento($aux->fechanacimiento);
      $obj->setDireccionpostal($aux->direccionpostal);
      $obj->setDireccionelectronica($aux->direccionelectronica);
      $obj->setTelefonocontacto($aux->telefonocontacto);
      $obj->setInstituciondesempeno($aux->instituciondesempeno);
      $obj->setLaboratoriounidad($aux->laboratoriounidad);
      $obj->setCargofuncioninstitucion($aux->cargofuncioninstitucion);
      $obj->setCargahorariasemanal($aux->cargahorariasemanal);
      $obj->setNombresupervisor($aux->nombresupervisor);
      $obj->setEspeciestrabajadas($aux->especiestrabajadas);
      $obj->setDescribatareas($aux->describatareas);
      $obj->setPctinvestigacion($aux->pctinvestigacion);
      $obj->setPctmedicinaclinica($aux->pctmedicinaclinica);
      $obj->setPctcirugia($aux->pctcirugia);
      $obj->setPctmantenimientocolonias($aux->pctmantenimientocolonias);
      $obj->setPctmanipulacion($aux->pctmanipulacion);
      $obj->setPctdirprojectos($aux->pctdirprojectos);
      $obj->setPctnecropsia($aux->pctnecropsia);
      $obj->setPctdiaglaboratorio($aux->pctdiaglaboratorio);
      $obj->setPctceua($aux->pctceua);
      $obj->setPcthistopatologia($aux->pcthistopatologia);
      $obj->setPctentedu($aux->pctentedu);
      $obj->setPctapoyoinvestigadores($aux->pctapoyoinvestigadores);
      $obj->setPctsupervision($aux->pctsupervision);
      $obj->setPctprodanimal($aux->pctprodanimal);
      $obj->setPctlegal($aux->pctlegal);
      $obj->setPctotrasfunciones($aux->pctotrasfunciones);
      $obj->setPctfuncnorel($aux->pctfuncnorel);
      $obj->setPctobservaciones($aux->pctobservaciones);
      $obj->setRealizocursos($aux->realizocursos);
      $obj->setAcrpersonales($aux->acrpersonales);
      $obj->setCategoriaA($aux->categoriaA);
      $obj->setCategoriaB($aux->categoriaB);
      $obj->setCategoriaC1($aux->categoriaC1);
      $obj->setCategoriaC2($aux->categoriaC2);
      $obj->setFechavencimiento($aux->fechavencimiento);
      $obj->setIsactive($aux->isactive);
      $obj->setCvfile($aux->cvfile);
      $obj->setCvpath($aux->cvpath);
	  $obj->setCurso1($aux->curso1);
	  $obj->setCurso2($aux->curso2);
	  $obj->setCurso3($aux->curso3);
	  $obj->setCursoobservacion($aux->cursoobservacion);
	  $obj->setAcrorganismo($aux->acrorganismo);
	  $obj->setAcrcategoria($aux->acrcategoria);
	  $obj->setAcrfecha($aux->acrfecha);
	  $obj->setEstado($aux->estado);
	  return $obj;
    }
    
    public function deleteAll()
    {
      @unlink($this->getCvpath().$this->getCvfile());
      $this->simpleDeleteById($this->getId());
    }
    
    public function retrieveAllToAddToMailQueue()
    {
      $sql = "insert into acreditacion_mail (id, nombreapellido, documento, direccionelectronica, nombrecontacto, mailcontacto, categoriaA, categoriaB, categoriaC1, categoriaC2)
        select 
        acreditacion.id, acreditacion.nombreapellido, acreditacion.documento, acreditacion.direccionelectronica, institucion.nombrecontacto, institucion.mailcontacto,
        acreditacion.categoriaA, acreditacion.categoriaB, acreditacion.categoriaC1, acreditacion.categoriaC2
        from acreditacion 
        left join institucion on institucion.id = acreditacion.instituciondesempeno
        where 
        acreditacion.fechavencimiento <= DATE_ADD(NOW(), INTERVAL 1 MONTH) 
        and 
        acreditacion.fechavencimiento >= DATE_ADD(NOW(), INTERVAL -3 MONTH) 
        and 
        acreditacion.estado != 'N'
        and acreditacion.id not in (select acreditacion_mail.id from acreditacion_mail)";
      return $this->db->query($sql);
    }
  
    
    public function doReplication($acreditacionId)
    {
      $sql = 'INSERT INTO acreditacion_historico (acreditacion_id, fecha, nombre, nombreapellido, formacion, titulo, documento, fechanacimiento, direccionpostal, direccionelectronica, telefonocontacto, instituciondesempeno, laboratoriounidad,
cargofuncioninstitucion, cargahorariasemanal,  nombresupervisor, especiestrabajadas, describatareas, pctinvestigacion, pctmedicinaclinica,pctcirugia,pctmantenimientocolonias, pctmanipulacion, pctdirprojectos, pctnecropsia,
 pctdiaglaboratorio, pctceua,  pcthistopatologia, pctentedu, pctapoyoinvestigadores, pctsupervision, pctprodanimal, pctlegal, pctotrasfunciones, pctfuncnorel, pctobservaciones, realizocursos, acrpersonales, curso1, curso2, 
 curso3, cursoobservacion, acrorganismo, acrcategoria, acrfecha, categoria, categoriaA, categoriaB, categoriaC1, categoriaC2, cvfile, cvpath, isactive, estado, fechavencimiento )
SELECT id, fecha, nombre, nombreapellido, formacion, titulo, documento, fechanacimiento, direccionpostal, direccionelectronica, telefonocontacto, instituciondesempeno, laboratoriounidad,
cargofuncioninstitucion, cargahorariasemanal,  nombresupervisor, especiestrabajadas, describatareas, pctinvestigacion, pctmedicinaclinica,pctcirugia,pctmantenimientocolonias, pctmanipulacion, pctdirprojectos, pctnecropsia,
 pctdiaglaboratorio, pctceua,  pcthistopatologia, pctentedu, pctapoyoinvestigadores, pctsupervision, pctprodanimal, pctlegal, pctotrasfunciones, pctfuncnorel, pctobservaciones, realizocursos, acrpersonales, curso1, curso2, 
 curso3, cursoobservacion, acrorganismo, acrcategoria, acrfecha, categoria, categoriaA, categoriaB, categoriaC1, categoriaC2, cvfile, cvpath, isactive, estado, fechavencimiento FROM acreditacion where id = ?';
      
      $ok = $this->db->query($sql, array($acreditacionId));
      
      if($ok){
        $lastId = $this->db->query('SELECT LAST_INSERT_ID() as LASTID');
        $lastIdData = $lastId->row();
        
        $archivosSql = 'INSERT INTO acreditacionarchivo_historico (acreditacion_historico_id, filename, filepath, type ) 
          SELECT '.$lastIdData->LASTID.', filename, filepath, type FROM acreditacionarchivo where acreditacion_id = ?';
        
        $this->db->query($archivosSql, array($acreditacionId));
      }
    }
    
    public function listadoHistorico($acreditacionId){
      $sql = "select id, acreditacion_id, nombre, nombreapellido, DATE_FORMAT(created_at, '%d-%m-%Y %T') AS created_at from acreditacion_historico where acreditacion_id = ? order by created_at desc";
      return $this->db->query($sql, array($acreditacionId))->result();
    }
}


