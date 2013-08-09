<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of actaadmin
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class registros extends MY_Controller{
  
    function __construct()
    {
      parent::__construct();
      $this->data['menu_id'] = 'registros_personas';
      if(!$this->isLogged())
      {
        //Si no esta logeado se tiene que ir a loguear
        $this->session->set_userdata('url_to_direct_on_login', 'actaadmin/index');
        redirect('auth/login'); 
      }
	  $this->addJquery();
    }
    
    /**
     * 
     * Nuevo cambios dado que se utilizan los formularios completos
     * 
     */
    
    function instituciones(){
      $this->data['menu_id'] = 'registros_instituciones';
      
      $this->load->model('instituciones/institucion');
      $this->data['list'] = $this->institucion->retrieveRegistros();
      $this->data['content'] = "registros/instituciones/list";
      
      $this->addJquery();
      $this->addFancyBox();
      $this->addModuleJavascript("registros", "list.js");
      $this->load->view("admin/layout", $this->data);
    }
    
    function showInstitucion($id)
    {
      //$this->output->enable_profiler(TRUE);
      $this->loadShowInstitucion($id);
    }
    
    private function loadShowInstitucion($id)
    {
      $this->data['menu_id'] = 'registros_instituciones';
      $this->load->model('instituciones/institucion');
      $this->load->model('instituciones/institucionespecie');    
      $this->load->model('instituciones/instituciondocenteinvestigador');
      $this->load->model('instituciones/institucionveterinario');
      $this->load->model('instituciones/institucionsociedadcivil');
      $this->load->model('instituciones/institucionunidadesdependientes');
      $this->load->model('instituciones/institucionarchivos');
      $this->addFancyBox();
      $this->addModuleJavascript("registros", "showInstitucion.js");
      $this->data['institucion'] = $this->institucion->getById($id);
      $this->data['especies'] = $this->institucionespecie->getByInstitucionId($id);
      $this->data['docentesinvestigadores'] = $this->instituciondocenteinvestigador->getByInstitucionId($id);
      $this->data['veterinarios'] = $this->institucionveterinario->getByInstitucionId($id);
      $this->data['sociedadesciviles'] = $this->institucionsociedadcivil->getByInstitucionId($id);
      $this->data['unidadesdependientes'] = $this->institucionunidadesdependientes->getByInstitucionId($id);
      $this->data['archivos'] = $this->institucionarchivos->getByInstitucionId($id);
      
      $this->data['content'] = "registros/instituciones/show";
      
      $this->load->view("admin/layout", $this->data);
    }
    
    function addDocenteInvestigador($id_institucion)
    {
      $this->load->model('instituciones/instituciondocenteinvestigador');
      $obj = new $this->instituciondocenteinvestigador;
      $obj->setIntitucion_id($id_institucion);
      $this->load->view("registros/instituciones/formdocenteinvestigador", array('obj' => $obj));
    }
    
    function editDocenteInvestigador($id)
    {
      $this->load->model('instituciones/instituciondocenteinvestigador');
      $obj = $this->instituciondocenteinvestigador->getById($id);
      $this->load->view("registros/instituciones/formdocenteinvestigador", array('obj' => $obj));
    }
    
    function saveDocenteInvestigador()
    {
      $this->load->library('form_validation');
      $this->load->model('instituciones/instituciondocenteinvestigador');
      // Get ID from form
      $id = $this->input->post('id', true);
      $is_new = true;
      if ($id !== "")
      {
        $is_new = false;
      }
      $this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[255]');			
      $this->form_validation->set_rules('profesion', 'profesion', 'required|max_length[255]');			
      $this->form_validation->set_rules('ocupacion', 'ocupacion', 'required|max_length[255]');
      $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
      $errores = false;
      $return_data = "";
      if ($this->form_validation->run() == FALSE) // validation hasn't been passed
      {
         $errores = true;
         $return_data = $this->form_validation->error_string();
      }
      else
      {
        //Salvo
        $obj = null;
        if(!$is_new)
        {
          $obj = $this->instituciondocenteinvestigador->getById($id);
        }
        else
        {
          //var_dump('aca');
          $obj = new $this->instituciondocenteinvestigador;
          $obj->setIntitucion_id($this->input->post('institucion_id', true));
          
        }
        //var_dump($is_new);
        //var_dump($obj);
        //die;
        $obj->setNombre(set_value('nombre'));
        $obj->setProfesion(set_value('profesion'));
        $obj->setOcupacion(set_value('ocupacion'));
        $id = $obj->save();
        $obj->setId($id);
        $std = new stdClass();
        $std->id = $obj->getId();
        $std->nombre = $obj->getNombre();
        $std->profesion = $obj->getProfesion();
        $std->ocupacion = $obj->getOcupacion();
        $return_data = $this->load->view('registros/instituciones/showdocenteinvestigador', array('doceinve' => $std), true);
      }
      $salida['response'] = ($errores)? "ERROR" :"OK";
      $salida['options'] = array('id' => $id, 'content' => $return_data, 'is_new' => $is_new);
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
    }
    
    
    function removeDocenteInvestigador()
    {
      $this->load->model('instituciones/instituciondocenteinvestigador');
      // Get ID from form
      $id = $this->input->post('id', true);
      $this->instituciondocenteinvestigador->simpleDeleteById($id);
      $salida = array();
      $salida['response'] = "OK";
      $salida['options'] = array('id' => $id);
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
    }
    
    /**
     * 
     * Veterinarios
     * 
     */
    
    function addVeterinario($id_institucion)
    {
      $this->load->model('instituciones/institucionveterinario');
      $obj = new $this->institucionveterinario;
      $obj->setIntitucion_id($id_institucion);
      $this->load->view("registros/instituciones/formveterinario", array('obj' => $obj));
    }
    
    function editVeterinario($id)
    {
      $this->load->model('instituciones/institucionveterinario');
      $obj = $this->institucionveterinario->getById($id);
      $this->load->view("registros/instituciones/formveterinario", array('obj' => $obj));
    }
    
    function saveVeterinario()
    {
      $this->load->library('form_validation');
      $this->load->model('instituciones/institucionveterinario');
      // Get ID from form
      $id = $this->input->post('id', true);
      $is_new = true;
      if ($id !== "")
      {
        $is_new = false;
      }
      $this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[255]');			
      $this->form_validation->set_rules('profesion', 'profesion', 'required|max_length[255]');			
      $this->form_validation->set_rules('ocupacion', 'ocupacion', 'required|max_length[255]');
      $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
      $errores = false;
      $return_data = "";
      if ($this->form_validation->run() == FALSE) // validation hasn't been passed
      {
         $errores = true;
         $return_data = $this->form_validation->error_string();
      }
      else
      {
        //Salvo
        $obj = null;
        if(!$is_new)
        {
          $obj = $this->institucionveterinario->getById($id);
        }
        else
        {
          //var_dump('aca');
          $obj = new $this->institucionveterinario;
          $obj->setIntitucion_id($this->input->post('institucion_id', true));
          
        }
        //var_dump($is_new);
        //var_dump($obj);
        //die;
        $obj->setNombre(set_value('nombre'));
        $obj->setProfesion(set_value('profesion'));
        $obj->setOcupacion(set_value('ocupacion'));
        $id = $obj->save();
        $obj->setId($id);
        $std = new stdClass();
        $std->id = $obj->getId();
        $std->nombre = $obj->getNombre();
        $std->profesion = $obj->getProfesion();
        $std->ocupacion = $obj->getOcupacion();
        $return_data = $this->load->view('registros/instituciones/showveterinario', array('veterinario' => $std), true);
      }
      $salida['response'] = ($errores)? "ERROR" :"OK";
      $salida['options'] = array('id' => $id, 'content' => $return_data, 'is_new' => $is_new);
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
    }
    
    
    function removeVeterinario()
    {
      $this->load->model('instituciones/institucionveterinario');
      // Get ID from form
      $id = $this->input->post('id', true);
      $this->institucionveterinario->simpleDeleteById($id);
      $salida = array();
      $salida['response'] = "OK";
      $salida['options'] = array('id' => $id);
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
    }
    
    /**
     * 
     * Sociedades Civiles
     * 
     */
    
    function addSociedad($id_institucion)
    {
      $this->load->model('instituciones/institucionsociedadcivil');
      $obj = new $this->institucionsociedadcivil;
      $obj->setIntitucion_id($id_institucion);
      $this->load->view("registros/instituciones/formsociedad", array('obj' => $obj));
    }
    
    function editSociedad($id)
    {
      $this->load->model('instituciones/institucionsociedadcivil');
      $obj = $this->institucionsociedadcivil->getById($id);
      $this->load->view("registros/instituciones/formsociedad", array('obj' => $obj));
    }
    
    function saveSociedad()
    {
      $this->load->library('form_validation');
      $this->load->model('instituciones/institucionsociedadcivil');
      // Get ID from form
      $id = $this->input->post('id', true);
      $is_new = true;
      if ($id !== "")
      {
        $is_new = false;
      }
      $this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[255]');			
      $this->form_validation->set_rules('profesion', 'profesion', 'required|max_length[255]');			
      $this->form_validation->set_rules('ocupacion', 'ocupacion', 'required|max_length[255]');
      $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
      $errores = false;
      $return_data = "";
      if ($this->form_validation->run() == FALSE) // validation hasn't been passed
      {
         $errores = true;
         $return_data = $this->form_validation->error_string();
      }
      else
      {
        //Salvo
        $obj = null;
        if(!$is_new)
        {
          $obj = $this->institucionsociedadcivil->getById($id);
        }
        else
        {
          //var_dump('aca');
          $obj = new $this->institucionsociedadcivil;
          $obj->setIntitucion_id($this->input->post('institucion_id', true));
          
        }
        //var_dump($is_new);
        //var_dump($obj);
        //die;
        $obj->setNombre(set_value('nombre'));
        $obj->setProfesion(set_value('profesion'));
        $obj->setOcupacion(set_value('ocupacion'));
        $id = $obj->save();
        $obj->setId($id);
        $std = new stdClass();
        $std->id = $obj->getId();
        $std->nombre = $obj->getNombre();
        $std->profesion = $obj->getProfesion();
        $std->ocupacion = $obj->getOcupacion();
        $return_data = $this->load->view('registros/instituciones/showsociedad', array('sociedadcivil' => $std), true);
      }
      $salida['response'] = ($errores)? "ERROR" :"OK";
      $salida['options'] = array('id' => $id, 'content' => $return_data, 'is_new' => $is_new);
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
    }
    
    
    function removeSociedad()
    {
      $this->load->model('instituciones/institucionsociedadcivil');
      // Get ID from form
      $id = $this->input->post('id', true);
      $this->institucionsociedadcivil->simpleDeleteById($id);
      $salida = array();
      $salida['response'] = "OK";
      $salida['options'] = array('id' => $id);
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
    }
    
    /**
     * 
     * 
     * Unidad dependiente
     * 
     * 
     */
    
    function editUnidadDependiente($id)
    {
      $this->load->model('instituciones/institucionunidadesdependientes');
      $obj = $this->institucionunidadesdependientes->getById($id);
      $this->load->view("registros/instituciones/formunidaddependiente", array('obj' => $obj));
    }
    
    function saveUnidadDependiente()
    {
      $this->load->library('form_validation');
      $this->load->model('instituciones/institucionunidadesdependientes');
      // Get ID from form
      $id = $this->input->post('id', true);
      $this->form_validation->set_rules('nombre', 'nombre', 'max_length[255]');			
      $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
      $errores = false;
      $return_data = "";
      if ($this->form_validation->run() == FALSE) // validation hasn't been passed
      {
         $errores = true;
         $return_data = $this->form_validation->error_string();
      }
      else
      {
        //Salvo
        $obj = $this->institucionunidadesdependientes->getById($id);
        $obj->setNombre(set_value('nombre'));
        $id = $obj->save();
        $obj->setId($id);
        $std = new stdClass();
        $std->id = $obj->getId();
        $std->nombre = $obj->getNombre();
        $return_data = $this->load->view('registros/instituciones/showunidaddependiente', array('unidaddependiente' => $std), true);
      }
      $salida['response'] = ($errores)? "ERROR" :"OK";
      $is_new = false;
      $salida['options'] = array('id' => $id, 'content' => $return_data, 'is_new' => $is_new);
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
    }
    
    function institucionesSubirResolucion()
    {
      $config['upload_path'] = FCPATH."assets".DIRECTORY_SEPARATOR."protectedfiles";//sys_get_temp_dir();
      $config['allowed_types'] = 'pdf|doc|docx';
      $this -> load -> library('upload', $config);
      $errores = array();
      $upload_data = array();
      $id = $this->input->post('id', true);
      if (!$this -> upload -> do_upload('archivo')) {
          $errores['archivo'] = $this -> upload -> display_errors();
          $this->upload->clean_errors();
      }else{
          $upload_data['archivo'] = $this->upload->data();
          $this->load->model('instituciones/institucionarchivos');
          $archivo = new $this->institucionarchivos;
          $archivo->setIntitucion_id($id);
          $archivo->setFilename($upload_data['archivo']['file_name']);
          $archivo->setFilepath($upload_data['archivo']['file_path']);
          $archivo->save();
          redirect('registros/showInstitucion/'.$id);
      }
      $this->data['errores'] = $errores;
      $this->loadShowInstitucion($id);
      
    }
    
    function removeArchivo()
    {
      $this->load->model('instituciones/institucionarchivos');
      // Get ID from form
      $id = $this->input->post('id', true);
      $this->institucionarchivos->deleteAllById($id);
      $salida = array();
      $salida['response'] = "OK";
      $salida['options'] = array('id' => $id);
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
    }
    
    function downloadArchivo($id)
    {
      $this->load->helper('download');
      $this->load->model('instituciones/institucionarchivos');
      $archivo = $this->institucionarchivos->simpleGetById($id);
      
      force_download($archivo->filename, file_get_contents($archivo->filepath.$archivo->filename));
      die;
    }
    
    
    function institucionesCambiarResponsable()
    {
      $config['upload_path'] = FCPATH."assets".DIRECTORY_SEPARATOR."protectedfiles";//sys_get_temp_dir();
      $config['allowed_types'] = 'pdf|doc|docx';
      $this -> load -> library('upload', $config);
      $errores = array();
      $upload_data = array();
      $id = $this->input->post('id', true);
      if (!$this -> upload -> do_upload('archivo')) {
          $errores['responsable'] = $this -> upload -> display_errors();
          $this->upload->clean_errors();
      }else{
          $upload_data['responsable'] = $this->upload->data();
          $this->load->model('instituciones/institucion');
          $institucion = $this->institucion->getById($id);
          unlink($institucion->getCvfilepath().$institucion->getCvfilename());
          $institucion->setCvfilename($upload_data['responsable']['file_name']);
          $institucion->setCvfilepath($upload_data['responsable']['file_path']);
          $institucion->save();
          redirect('registros/showInstitucion/'.$id);
      }
      $this->data['errores'] = $errores;
      $this->loadShowInstitucion($id);
    }
    
    function cambiarPass()
    {
      $id = $this->input->post('id', true);
      $this->load->model('instituciones/institucion');
      $institucion = $this->institucion->getById($id);
      $institucion->setPassword($this->institucion->generatePassword());
      $institucion->save();
      $salida = array();
      $salida['response'] = "OK";
      $salida['options'] = array('id' => $id, 'content' => $institucion->getPassword());
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
    }
    
    function editEspecie($id)
    {
      $this->load->model('instituciones/institucionespecie');
      $obj = $this->institucionespecie->getById($id);
      $this->load->view("registros/instituciones/formespecie", array('obj' => $obj));
    }
    
    
    function addEspecie($id_institucion)
    {
      $this->load->model('instituciones/institucionespecie');
      $obj = new $this->institucionespecie;
      $obj->setIntitucion_id($id_institucion);
      $this->load->view("registros/instituciones/formespecie", array('obj' => $obj));
    }

    function saveEspecie()
    {
      $this->load->library('form_validation');
      $this->load->model('instituciones/institucionespecie');
      // Get ID from form
      $id = $this->input->post('id', true);
      $is_new = true;
      if ($id !== "")
      {
        $is_new = false;
      }
      $this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[255]');
      $this -> form_validation -> set_rules('observacion', 'observacion', 'max_length[255]');
      $this -> form_validation -> set_rules('uso', 'uso', 'max_length[255]');
      $this -> form_validation -> set_rules('cria', 'cria', 'max_length[255]');
      $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
      $errores = false;
      $return_data = "";
      if ($this->form_validation->run() == FALSE) // validation hasn't been passed
      {
         $errores = true;
         $return_data = $this->form_validation->error_string();
      }
      else
      {
        //Salvo
        $obj = null;
        if(!$is_new)
        {
          $obj = $this->institucionespecie->getById($id);
        }
        else
        {
          $obj = new $this->institucionespecie;
          $obj->setIntitucion_id($this->input->post('institucion_id', true));
          
        }
        $obj->setEsCria(set_value('cria'));
        $obj->setEsUso(set_value('uso'));
        $obj->setNombre(set_value('nombre'));
        $obj->setObservacion(set_value('observacion'));
        $id = $obj->save();
        $obj->setId($id);
        $std = new stdClass();
        $std->id = $obj->getId();
        $std->nombre = $obj->getNombre();
        $std->observacion = $obj->getObservacion();
        $std->escria = $obj->getEsCria();
        $std->esuso = $obj->getEsUso();
        $return_data = $this->load->view('registros/instituciones/showespecie', array('especie' => $std), true);
      }
      $salida['response'] = ($errores)? "ERROR" :"OK";
      $salida['options'] = array('id' => $id, 'content' => $return_data, 'is_new' => $is_new);
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
    }
    
    function removeEspecie()
    {
      $this->load->model('instituciones/institucionespecie');
      // Get ID from form
      $id = $this->input->post('id', true);
      $this->institucionespecie->simpleDeleteById($id);
      $salida = array();
      $salida['response'] = "OK";
      $salida['options'] = array('id' => $id);
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
    }
    
    function editMinInstitucion($id)
    {
      $this->loadI18n("instituciones", "", FALSE, TRUE, "", "sitio");
      $this->load->model('instituciones/institucion');
      $institucion = $this->institucion->getById($id);
      $this->load->view("registros/instituciones/forminstitucion", array('obj' => $institucion));
    }
    
    
    function saveMinEdit()
    {
      
        $this->form_validation->set_rules('nombreinsititucion', 'nombreinsititucion', 'required|max_length[255]');			
		$this->form_validation->set_rules('razonsocial', 'razonsocial', 'required|max_length[255]');			
		$this->form_validation->set_rules('rut', 'rut', 'max_length[255]');			
		$this->form_validation->set_rules('naturaleza', 'naturaleza', 'max_length[255]');			
		$this->form_validation->set_rules('primernivel', 'primernivel', 'required|max_length[255]');			
		$this->form_validation->set_rules('segundonivel', 'segundonivel', 'required|max_length[255]');			
		$this->form_validation->set_rules('tercernivel', 'tercernivel', 'required|max_length[255]');			
		$this->form_validation->set_rules('domicilioinstitucional', 'domicilioinstitucional', 'required|max_length[255]');			
		$this->form_validation->set_rules('domiciliofiscal', 'domiciliofiscal', 'max_length[255]');			
		$this->form_validation->set_rules('tipoestablecimiento', 'tipoestablecimiento', 'required|max_length[255]');			
		$this->form_validation->set_rules('observacionescomite', 'observacionescomite', '');			
		$this->form_validation->set_rules('nombrecontacto', 'nombrecontacto', 'required|max_length[255]');			
		$this->form_validation->set_rules('mailcontacto', 'mailcontacto', 'valid_email|max_length[255]');			
		$this->form_validation->set_rules('telcontacto', 'telcontacto', 'max_length[255]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			
		}
    }
    /***
     * 
     * De aca para abajo es Viejo
     * 
     */
    
    function index(){
      $this->load->model('registros/registro_persona');
      $this->data['list'] = $this->registro_persona->retrieveRegistros();
      $this->data['content'] = "registros/personas/list";
      
      $this->addJquery();
      $this->addFancyBox();
      $this->addModuleJavascript("registros", "list.js");
      $this->load->view("admin/layout", $this->data);
    }
    
    function sortPersonas(){
      $this->load->model('registros/registro_persona');
      $this->data['list'] = $this->registro_persona->retriveRegistrosInstitucionesForSort();
      
      $this->load->view('registros/personas/sortable', $this->data);
    }
    
    function sortPersonasEnInstituciones(){
      $this->load->model('registros/registro_persona');
      $this->data['instituciones'] = $this->registro_persona->retriveRegistrosInstitucionesForSort();
      
      $this->load->view('registros/personas/sortableEnInstituciones', $this->data);
    }
    
    function bringPersonaInstitucion()
    {
      $name = $this->input->post('name');
      $this->load->model('registros/registro_persona');
      $data = array();
      $data['list'] = $this->registro_persona->retrievePersonasInstitucion($name);
      $html = $this->load->view('registros/personas/personasLi', $data, true);
      $salida = array();
      $salida['response'] = "OK";
      $salida['html'] = $html;
      echo json_encode($salida);
      die;
    }
    
    function sortInstituciones(){
      $this->data['menu_id'] = 'registros_instituciones';
      
      $this->load->model('registros/registro_institucion');
      $this->data['list'] = $this->registro_institucion->retrieveRegistrosForSort();
      
      $this->load->view('registros/instituciones/sortable', $this->data);
    }
    
    function applySortPersonaInstitucion()
    {
      $lista = $this->input->post('listItem');
      $this->load->model('registros/registro_persona');
      
      
      $maximo = count($lista) - 1;
      $cantidad = 0;
      while($cantidad <= $maximo)
      {
        $this->registro_persona->updateOrderInstitucion($lista[$maximo - $cantidad], $cantidad);
        $cantidad ++;
      }
      $salida = array();
      $salida['response'] = "OK";
      
      echo json_encode($salida);
      die;
    }
    
    function applySortPersona()
    {
      $lista = $this->input->post('listItem');
      $this->load->model('registros/registro_persona');
      
      
      $maximo = count($lista) - 1;
      $cantidad = 0;
      while($cantidad <= $maximo)
      {
        $this->registro_persona->updateOrder($lista[$maximo - $cantidad], $cantidad);
        $cantidad ++;
      }
      $salida = array();
      $salida['response'] = "OK";
      
      echo json_encode($salida);
      die;
    }
    
    function applySortInstitucion()
    {
      $this->data['menu_id'] = 'registros_instituciones';
      
      $lista = $this->input->post('listItem');
      $this->load->model('registros/registro_institucion');
      
      
      $maximo = count($lista) - 1;
      $cantidad = 0;
      while($cantidad <= $maximo)
      {
        $this->registro_institucion->updateOrder($lista[$maximo - $cantidad], $cantidad);
        $cantidad ++;
      }
      /*
      $cantidad = count($lista) - 1;
      while($cantidad >= 0)
      {
        //echo $lista[$cantidad] . " - ".$cantidad;
        $this->registro_institucion->updateOrder($lista[$cantidad], $cantidad);
        $cantidad --;
      }
      */
      $salida = array();
      $salida['response'] = "OK";
      
      echo json_encode($salida);
      die;
    }
    
    function addPersona()
    {
	  //$this->output->enable_profiler(TRUE);
      $this->load->model('registros/registro_persona');
      $this->data['use_grid_16'] = false;
      $this->addJqueryUI();
      $this->addModuleJavascript("registros", "registroPersona.js");
      $this->data['list'] = $this->registro_persona->retrieveInstitucionesForAdmin();
      $this->data['content'] = "registros/personas/add";
      $this->data['object'] = new $this->registro_persona;
      $this->load->view("admin/layout", $this->data);
    }
    
    function addInstitucion()
    {
      $this->data['menu_id'] = 'registros_instituciones';
      
      $this->load->model('registros/registro_institucion');
      $this->data['use_grid_16'] = false;
      $this->data['content'] = "registros/instituciones/add";
      $this->data['object'] = new $this->registro_institucion;
      $this->load->view("admin/layout", $this->data);
    }
    
    function editPersona($id)
    {
      $this->load->model('registros/registro_persona');
      $this->data['use_grid_16'] = false;
      $this->addJqueryUI();
      $this->addModuleJavascript("registros", "registroPersona.js");
      $this->data['list'] = $this->registro_persona->retrieveInstitucionesForAdmin();
      $this->data['content'] = "registros/personas/edit";
      $this->data['object'] = $this->registro_persona->getById($id);
      $this->load->view("admin/layout", $this->data);
    }
    
    function editInstitucion($id)
    {
      $this->data['menu_id'] = 'registros_instituciones';
      
      $this->load->model('registros/registro_institucion');
      $this->data['use_grid_16'] = false;
      $this->data['content'] = "registros/instituciones/edit";
      $this->data['object'] = $this->registro_institucion->getById($id);
      $this->load->view("admin/layout", $this->data);
    }
    
    function savePersona()
    {
	  //$this->output->enable_profiler(TRUE);
      $this->load->library('form_validation');
      $this->load->model('registros/registro_persona');
      // Get ID from form
      $id = $this->input->post('id', true);
      
      //$this->form_validation->set_rules('id', 'id', '');			
      $this->form_validation->set_rules('name', 'name', 'required|xss_clean|max_length[255]');			
	  $this->form_validation->set_rules('code', 'code', 'required|xss_clean|max_length[255]');			
	  $this->form_validation->set_rules('email', 'email', 'valid_email|max_length[255]');  
      $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
      $is_valid = false;
      if (!$this->form_validation->run() == FALSE) 
      {
        $is_valid = true;
      }
      $nombre = set_value('name');
	  $code = set_value('code');
	  $email = set_value('email');
      //var_dump($nombre);
      $obj = new $this->registro_persona;
      $obj->setNombre($nombre);
      $obj->setId($id);
	  $obj->setCode($code);
	  $obj->setEmail($email);
      //var_dump($obj);
      if($is_valid)
      {
		//Como es valido lo salvo
        $id = $obj->save();
        $this->session->set_flashdata("salvado", "ok");
        redirect('registros/editPersona/'.$id);
      }
      else
      {
		if($obj->isNew())
        {
          $this->data['use_grid_16'] = false;
          $this->data['content'] = "registros/personas/add";
          $this->data['object'] = $obj;
          $this->load->view("admin/layout", $this->data);
        }
        else
        {
          $this->data['use_grid_16'] = false;
          $this->data['content'] = "registros/personas/edit";
          $this->data['object'] = $obj;
          $this->load->view("admin/layout", $this->data);
        }
      }
    }
    
    function saveInstitucion()
    {
      $this->data['menu_id'] = 'registros_instituciones';
      
     //$this->output->enable_profiler(TRUE);
      $this->load->library('form_validation');
      $this->load->model('registros/registro_institucion');
      // Get ID from form
      $id = $this->input->post('id', true);
      
      //$this->form_validation->set_rules('id', 'id', '');			
      $this->form_validation->set_rules('name', 'name', 'required|xss_clean|max_length[255]');			
     $this->form_validation->set_rules('code', 'code', 'required|xss_clean|max_length[255]');			
     $this->form_validation->set_rules('url', 'url', 'required|max_length[255]');  
      $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
      $is_valid = false;
      if (!$this->form_validation->run() == FALSE) 
      {
        $is_valid = true;
      }
      $nombre = set_value('name');
     $code = set_value('code');
     $url = set_value('url');
      //var_dump($nombre);
      $obj = new $this->registro_institucion;
      $obj->setNombre($nombre);
      $obj->setId($id);
     $obj->setCode($code);
     $obj->setUrl($url);
      //var_dump($obj);
      if($is_valid)
      {
      //Como es valido lo salvo
        $id = $obj->save();
        $this->session->set_flashdata("salvado", "ok");
        redirect('registros/editInstitucion/'.$id);
      }
      else
      {
      if($obj->isNew())
        {
          $this->data['use_grid_16'] = false;
          $this->data['content'] = "registros/instituciones/add";
          $this->data['object'] = $obj;
          $this->load->view("admin/layout", $this->data);
        }
        else
        {
          $this->data['use_grid_16'] = false;
          $this->data['content'] = "registros/instituciones/edit";
          $this->data['object'] = $obj;
          $this->load->view("admin/layout", $this->data);
        }
      }
    }
    
    function deletePersona($id)
    {
      $this->load->model('registros/registro_persona');
      $result = $this->registro_persona->deleteById($id);
      $salida['response'] = "OK";
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
      //echo json_encode($salida);
      //die;
    }
    
    function deleteInstitucion($id)
    {
      $this->data['menu_id'] = 'registros_instituciones';
      
      $this->load->model('registros/registro_institucion');
      $result = $this->registro_institucion->deleteById($id);
      $salida['response'] = "OK";
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
      //echo json_encode($salida);
      //die;
    }
}
