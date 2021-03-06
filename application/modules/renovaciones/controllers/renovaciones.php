<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of renovacion
 *
 * @author rodrigo
 */
class renovaciones extends MY_Controller {

  function __construct() {
    parent::__construct();
    $this->data['menu_id'] = 'registros_renovaciones';
      if(!$this->isLogged())
      {
        //Si no esta logeado se tiene que ir a loguear
        $this->session->set_userdata('url_to_direct_on_login', 'renovacion/index');
        redirect('auth/login'); 
      }
	  $this->addJquery();
      $this->load->model('renovaciones/renovacion');
//      $this->output->enable_profiler(TRUE);
  }

  function index()
  {
    
    $this->data['listado'] = $this->renovacion->retrieveList();
    $this->data['content'] = "renovaciones/listado";

    $this->addJquery();
    $this->load->view("admin/layout", $this->data);
    
  }
  
  function add()
  {
    $this->load->model('instituciones/institucion');
    $this->data['instituciones'] = $this->institucion->retrieveRegistros();
    $this->data['content'] = "renovaciones/add";
    $obj = new $this->renovacion;
    $this->data['obj'] = $obj;
    $this->data['use_grid_16'] = false;
    $this->load->view("admin/layout", $this->data);
  }
  
  function show($id)
  {
    $this->loadRenovacionData($id);
  }
  
  private function loadRenovacionData($id)
  {
    $this->addModuleJavascript("registros", "showRenovacion.js");
    $this->addFancyBox();
    $this->load->model('instituciones/institucion');
    $this->load->model('renovaciones/renovacionevento');
    $this->load->model('renovaciones/renovaciontitulo');
    $this->load->model('renovaciones/renovacionprotocolo');
    $this->load->model('acreditaciones/acreditacionarchivo');
    $this->data['instituciones'] = $this->institucion->retrieveRegistros();
    $renovacion = $this->renovacion->getById($id);
    $this->data['renovacion'] = $renovacion;
    $this->data['institucion'] = $this->institucion->getById($renovacion->getInstitucion());
    $estados = $this->renovacion->getEstadoList();
    $this->data['estados'] = $estados;
    $this->data['eventos'] = $this->renovacionevento->retrieveList($renovacion->getId());
    $this->data['titulos'] = $this->renovaciontitulo->retrieveList($renovacion->getId());
    $this->data['protocolos'] = $this->renovacionprotocolo->retrieveList($renovacion->getId(), 1);
    $this->data['protocolootrosfines'] = $this->renovacionprotocolo->retrieveList($renovacion->getId(), 2);
    $this->data['archivos'] = $this->acreditacionarchivo->getByAcreditacionId($renovacion->getId());
    $this->data['content'] = "renovaciones/show";
    $this->load->view("admin/layout", $this->data); 
  }
  
  function acreditacionesSubirArchivo()
  {
    $config['upload_path'] = FCPATH."assets".DIRECTORY_SEPARATOR."protectedfiles";//sys_get_temp_dir();
    $config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|png';
    $this -> load -> library('upload', $config);
    $errores = array();
    $upload_data = array();
    $id = $this->input->post('id', true);
    $type = $this->input->post('type', true);
    if (!$this -> upload -> do_upload('archivo')) {
      switch ($type) {
        case "renovacionfirmainstitucion": 
            $errores['archivo_firmainstitucion'] = $this -> upload -> display_errors();
           break;
        default:
          break;
      }

        $this->upload->clean_errors();
    }else{
        $upload_data['archivo'] = $this->upload->data();
        $this->load->model('acreditaciones/acreditacionarchivo');
        //$this->load->model('acreditaciones/acreditacion');
        //$this->acreditacion->doReplication($id);
        $archivo = new $this->acreditacionarchivo;
        $archivo->setAcreditacion_id($id);
        $archivo->setType($type);
        $archivo->setFilename($upload_data['archivo']['file_name']);
        $archivo->setFilepath($upload_data['archivo']['file_path']);
        $archivo->save();
        redirect('renovaciones/show/'.$id);
    }
    $this->data['errores'] = $errores;
    $this->loadRenovacionData($id);
  }
    
  function edit($id)
  {
    $this->load->model('instituciones/institucion');
    $this->data['instituciones'] = $this->institucion->retrieveRegistros();
    $this->addJqueryUI();
    $this->data['use_grid_16'] = false;
    $this->data['content'] = "renovaciones/edit";
    $this->data['obj'] = $this->renovacion->getById($id);
    $this->load->view("admin/layout", $this->data);    
  }
  
  function save() {
    $id = $this->input->post('id', true);
    $this->load->library('form_validation');
    $this -> load -> helper('form');
    //$this -> load -> library('form_validation');
    $this->form_validation->set_rules('nombre', 'nombre', 'required|trim|max_length[255]');
    $this->form_validation->set_rules('apellido', 'apellido', 'required|trim|max_length[255]');
    $this->form_validation->set_rules('ci', 'ci', 'required|trim|max_length[255]');
    $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|max_length[255]');
    $this->form_validation->set_rules('institucion', 'institucion', 'is_numeric|required');
    $this->form_validation->set_rules('laboratorio', 'laboratorio/unidad', 'max_length[255]');
    $this->form_validation->set_rules('cargo', 'cargo', 'max_length[255]');
    $this->form_validation->set_rules('cargahoraria', 'cargahoraria', 'is_numeric|less_than[61]');
    $this->form_validation->set_rules('jefe', 'jefe', 'max_length[255]');
    $this->form_validation->set_rules('fechaacreditacion', 'fechaacreditacion', 'required');
    $this->form_validation->set_rules('fechasolicitud', 'fechasolicitud', 'required');
    $this->form_validation->set_rules('numregistro', 'numregistro', 'required|max_length[255]');
    $this->form_validation->set_rules('categoriaA', 'Categoria A');			
    $this->form_validation->set_rules('categoriaB', 'Categoria B');
    $this->form_validation->set_rules('categoriaC1', 'Categoria C1');
    $this->form_validation->set_rules('categoriaC2', 'Categoria C2');    
    
    $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
    $this->load->model('instituciones/institucion');
    $this->data['instituciones'] = $this->institucion->retrieveRegistros();
    
    if ($id == "" || is_null($id)) 
    {
      $obj = new $this->renovacion;
    }
    else
    {
      $obj = $this->renovacion->getById($id);
    }
    
    $errores = array();
    $save = false;
    if ($this->form_validation->run() == FALSE) // validation hasn't been passed
    {
        $this -> data['errores'] = $errores;
    }
    else
    {
        $save = true;    
    }
    $form_data = array(
        'nombre' => set_value('nombre'),
        'apellido' => set_value('apellido'),
        'ci' => set_value('ci'),
        'email' => set_value('email'),
        'institucion' => set_value('institucion'),
        'laboratorio' => set_value('laboratorio'),
        'cargo' => set_value('cargo'),
        'cargahoraria' => set_value('cargahoraria'),
        'jefe' => set_value('jefe'),
        'fechaacreditacion' => set_value('fechaacreditacion'),
        'fechasolicitud' => set_value('fechasolicitud'),
        'numregistro' => set_value('numregistro'),
        'categoriaA' => set_value('categoriaA'),
        'categoriaB' => set_value('categoriaB'),
        'categoriaC1' => set_value('categoriaC1'),
        'categoriaC2' => set_value('categoriaC2'),
    );
    $obj->setApellido($form_data['apellido']);
    $obj->setCargahoraria($form_data['cargahoraria']);
    $obj->setCargo($form_data['cargo']);
    $obj->setCategoriaA($form_data['categoriaA']);
    $obj->setCategoriaB($form_data['categoriaB']);
    $obj->setCategoriaC1($form_data['categoriaC1']);
    $obj->setCategoriaC2($form_data['categoriaC2']);
    $obj->setCi($form_data['ci']);
    $obj->setEmail($form_data['email']);
    $obj->setFechaacreditacion($form_data['fechaacreditacion']);
    $obj->setFechasolicitud($form_data['fechasolicitud']);
    $obj->setInstitucion($form_data['institucion']);
    $obj->setJefe($form_data['jefe']);
    $obj->setLaboratorio($form_data['laboratorio']);
    $obj->setNombre($form_data['nombre']);
    $obj->setNumregistro($form_data['numregistro']);
    $obj->setId($id);
    
    $this->addJqueryUI();
    if($save)
    {
        $renovacionId = $obj->save();
        
        redirect('renovaciones/show/'.$renovacionId);
    }
    else
    {
      if($obj->isNew())
      {
        $this->data['use_grid_16'] = false;
        $this->data['content'] = "renovaciones/add";
        $this->data['obj'] = $obj;
        $this->load->view("admin/layout", $this->data);
      }
      else
      {
        $this->data['use_grid_16'] = false;
        $this->data['content'] = "renovaciones/edit";
        $this->data['obj'] = $obj;
        $this->load->view("admin/layout", $this->data);
      }
    }    
  }

  function success() {
    echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
  }

}

