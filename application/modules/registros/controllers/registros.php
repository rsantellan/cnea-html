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
    
    /***
     * 
     *  
     * Parte de Instituciones
     * 
     **/
    
    
    function instituciones(){
      $this->data['menu_id'] = 'registros_instituciones';
      
      $this->load->model('instituciones/institucion');
      $this->data['list'] = $this->institucion->retrieveRegistros();
      $this->data['content'] = "registros/instituciones/list";
      
      $this->addJquery();
      $this->addFancyBox();
      $this->addModuleJavascript("registros", "list.js");
      $this->addModuleJavascript("datatable", "jquery.dataTables.js");
      $this->addModuleStyleSheet('datatable', 'jquery.dataTables.css');
      $this->addModuleStyleSheet('datatable', 'data_table_admin.css');
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
      $this -> load -> helper('form');
      $this -> load -> library('form_validation');
      
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
        
      $id = $this->input->post('id', true);
      $this->load->model('instituciones/institucion');
      $obj = $this->institucion->getById($id);
      
      $is_new = false;
      $errores = false;
      $return_data = "";
      
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$errores = true;
            $return_data = $this->form_validation->error_string();
		}
        else
        {
          $obj->setNombreinsititucion(set_value('nombreinsititucion'));
          $obj->setRazonsocial(set_value('razonsocial'));
          $obj->setRut(set_value('rut'));
          $obj->setNaturaleza(set_value('naturaleza'));
          $obj->setPrimernivel(set_value('primernivel'));
          $obj->setSegundonivel(set_value('segundonivel'));
          $obj->setTercernivel(set_value('tercernivel'));
          $obj->setDomicilioinstitucional(set_value('domicilioinstitucional'));
          $obj->setDomiciliofiscal(set_value('domiciliofiscal'));
          $obj->setTipoestablecimiento(set_value('tipoestablecimiento'));
          $obj->setObservacionescomite(set_value('observacionescomite'));
          $obj->setNombrecontacto(set_value('nombrecontacto'));
          $obj->setMailcontacto(set_value('mailcontacto'));
          $obj->setTelcontacto(set_value('telcontacto'));
          $obj->save();
          $return_data = $this->load->view('registros/instituciones/showinstitucion', array('institucion' => $obj), true);
        }
        $salida['response'] = ($errores)? "ERROR" :"OK";
        $salida['options'] = array('id' => $id, 'content' => $return_data, 'is_new' => $is_new);
        $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($salida));
    }
    
    
    function createinstitucion()
    {
        $this -> load -> helper('form');
        $this -> load -> library('form_validation');
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
        $this->load->model('instituciones/institucion');
        $obj = new $this->institucion;
        
        $errores = array();
        $save = false;
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this -> data['errores'] = $errores;
            //$this -> data['content'] = 'formulario';
            //$this -> load -> view('layout', $this -> data);
		}
        else
        {
            $save = true;    
            $config['upload_path'] = FCPATH."assets".DIRECTORY_SEPARATOR."protectedfiles";//sys_get_temp_dir();
            $config['allowed_types'] = 'pdf|doc|docx';
            $this -> load -> library('upload', $config);
            $errores = array();
            $upload_data = array();
            
            if (!$this -> upload -> do_upload('responsable_institucional')) {
                $errores['responsable_institucional'] = $this -> upload -> display_errors();
                $this->upload->clean_errors();
                $save = false;
            }else{
                $upload_data['responsable_institucional'] = $this->upload->data();
            }
        }
        $obj->setNombreinsititucion(set_value('nombreinsititucion'));
        $obj->setRazonsocial(set_value('razonsocial'));
        $obj->setRut(set_value('rut'));
        $obj->setNaturaleza(set_value('naturaleza'));
        $obj->setPrimernivel(set_value('primernivel'));
        $obj->setSegundonivel(set_value('segundonivel'));
        $obj->setTercernivel(set_value('tercernivel'));
        $obj->setDomicilioinstitucional(set_value('domicilioinstitucional'));
        $obj->setDomiciliofiscal(set_value('domiciliofiscal'));
        $obj->setTipoestablecimiento(set_value('tipoestablecimiento'));
        $obj->setObservacionescomite(set_value('observacionescomite'));
        $obj->setNombrecontacto(set_value('nombrecontacto'));
        $obj->setMailcontacto(set_value('mailcontacto'));
        $obj->setTelcontacto(set_value('telcontacto'));
        if($save)
        {
            $obj->setCvfilename($upload_data['responsable_institucional']['file_name']);
            $obj->setCvfilepath($upload_data['responsable_institucional']['file_path']);
            $institucionId = $obj->save();
            redirect('registros/showInstitucion/'.$institucionId);
            
        }
        $this->loadI18n("instituciones", "", FALSE, TRUE, "", "sitio");
        $this->data['menu_id'] = 'registros_instituciones';
        $this -> data['errores'] = $errores;
        //var_dump($obj);
        $this->data['obj'] = $obj;
        $this->data['content'] = "registros/instituciones/createforminstitucion";
      
        $this->load->view("admin/layout", $this->data);
        
    }
    
    
    function actInstitucion($id, $status)
    {
      $this->load->model('instituciones/institucion');
      $institucion = $this->institucion->getById($id);
      if($status == 1 || $status == "1")
      {
        $institucion->setIsActive(0);
      }
      else
      {
        $institucion->setIsActive(1);
      }
      $institucion->save();
      redirect('registros/instituciones');
    }
    
    function dodeleteinstitucion($id)
    {
      $this->load->model('instituciones/institucion');
      $this->load->model('instituciones/institucionespecie');    
      $this->load->model('instituciones/instituciondocenteinvestigador');
      $this->load->model('instituciones/institucionveterinario');
      $this->load->model('instituciones/institucionsociedadcivil');
      $this->load->model('instituciones/institucionunidadesdependientes');
      $this->load->model('instituciones/institucionarchivos');
      
      $institucion = $this->institucion->getById($id);
      $especies = $this->institucionespecie->getByInstitucionId($id, true);
      $docentesinvestigadores = $this->instituciondocenteinvestigador->getByInstitucionId($id, true);
      $veterinarios = $this->institucionveterinario->getByInstitucionId($id, true);
      $sociedadesciviles = $this->institucionsociedadcivil->getByInstitucionId($id, true);
      $unidadesdependientes = $this->institucionunidadesdependientes->getByInstitucionId($id, true);
      $archivos = $this->institucionarchivos->getByInstitucionId($id);
      
      //var_dump($veterinarios);
      foreach($veterinarios as $veterinario)
      {
        $this->institucionveterinario->simpleDeleteById($veterinario->getId());
      }
      //echo '<hr/>';
      //var_dump($unidadesdependientes);
      foreach($unidadesdependientes as $unidaddependiente)
      {
        $this->institucionunidadesdependientes->simpleDeleteById($unidaddependiente->getId());
      }
      //echo '<hr/>';
      //var_dump($sociedadesciviles);
      foreach($sociedadesciviles as $sociedadcivil)
      {
        $this->institucionsociedadcivil->simpleDeleteById($sociedadcivil->getId());
      }
      //echo '<hr/>';
      //var_dump($especies);
      foreach($especies as $especie)
      {
        $this->institucionespecie->simpleDeleteById($especie->getId());
      }
      //echo '<hr/>';
      //var_dump($docentesinvestigadores);
      foreach($docentesinvestigadores as $docenteinvestigador)
      {
        $this->instituciondocenteinvestigador->simpleDeleteById($docenteinvestigador->getId());
      }
      //echo '<hr/>';
      //var_dump($archivos);
      foreach($archivos as $archivo)
      {
        $this->institucionarchivos->deleteAllById($archivo->id);
      }
      //echo '<hr/>';
      //var_dump($institucion);
      $institucion->deleteAll();
      redirect('registros/instituciones');
      
    }
    
    
    /***
     * 
     *  
     * Parte de Acreditaciones personales
     * 
     * 
     **/
    
    function index(){

      $this->load->model('acreditaciones/acreditacion');
      $this->data['list'] = $this->acreditacion->retrieveRegistros();
      $this->data['content'] = "registros/personas/list";
      $this->data['menu_id'] = 'registros_personas';
      $this->addJquery();
      $this->addFancyBox();
      $this->addModuleJavascript("registros", "list.js");
      $this->addModuleJavascript("datatable", "jquery.dataTables.js");
      $this->addModuleStyleSheet('datatable', 'jquery.dataTables.css');
      $this->addModuleStyleSheet('datatable', 'data_table_admin.css');
      
      $this->load->view("admin/layout", $this->data);
    }
    
    function acreditacionNextToExpire(){
      //$this->output->enable_profiler(TRUE);
      $this->load->model('acreditaciones/acreditacion');
      $this->data['list'] = $this->acreditacion->retrieveRegistrosWithCloseExpireDate();
      $this->data['content'] = "registros/personas/list";
      $this->data['menu_id'] = 'registros_personas';
      $this->addJquery();
      $this->addFancyBox();
      $this->addModuleJavascript("registros", "list.js");
      $this->addModuleJavascript("datatable", "jquery.dataTables.js");
      $this->addModuleStyleSheet('datatable', 'jquery.dataTables.css');
      $this->addModuleStyleSheet('datatable', 'data_table_admin.css');
      
      $this->load->view("admin/layout", $this->data);
    }
    
    function acreditacionInactive(){
      //$this->output->enable_profiler(TRUE);
      $this->load->model('acreditaciones/acreditacion');
      $this->data['list'] = $this->acreditacion->retrieveRegistrosInactive();
      $this->data['content'] = "registros/personas/list";
      $this->data['menu_id'] = 'registros_personas';
      $this->addJquery();
      $this->addFancyBox();
      $this->addModuleJavascript("registros", "list.js");
      $this->addModuleJavascript("datatable", "jquery.dataTables.js");
      $this->addModuleStyleSheet('datatable', 'jquery.dataTables.css');
      $this->addModuleStyleSheet('datatable', 'data_table_admin.css');
      
      $this->load->view("admin/layout", $this->data);
    }
    
    
    function createacreditacion()
    {
        $this->data['menu_id'] = 'registros_personas';
        $this -> load -> helper('form');
        $this -> load -> library('form_validation');
        $this->form_validation->set_rules('fecha', 'Fecha', 'required');			
		$this->form_validation->set_rules('nombreapellido', 'Nombre y Apellido', 'required|trim|max_length[255]');			
		$this->form_validation->set_rules('formacion_primaria', 'formacion primaria', 'max_length[1]');			
		$this->form_validation->set_rules('formacion_secundaria', 'formacion secundaria', 'max_length[1]');			
		$this->form_validation->set_rules('formacionterciaria', 'formacion terciaria', 'max_length[1]');			
		$this->form_validation->set_rules('documento', 'Documento', 'required|max_length[255]');			
		$this->form_validation->set_rules('fechanacimiento', 'fecha nacimiento', 'required');			
		$this->form_validation->set_rules('direccionpostal', 'Direccion Postal', 'required|max_length[255]');			
		$this->form_validation->set_rules('direccionelectronica', 'Direccion Electronica', 'required|valid_email|max_length[255]');			
		$this->form_validation->set_rules('telefonocontacto', 'Telefono Contacto', 'required|max_length[255]');			
		$this->form_validation->set_rules('instituciondesempeno', 'Institucion desempeño', 'required|max_length[11]');			
		$this->form_validation->set_rules('laboratoriounidad', 'Laboratorio/Unidad', 'required|max_length[255]');			
		$this->form_validation->set_rules('cargofuncioninstitucion', 'Cargo/Funcion en la institucion', 'required|max_length[255]');			
		$this->form_validation->set_rules('cargahorariasemanal', 'Carga Horaria Semanal', 'required|is_numeric');			
		$this->form_validation->set_rules('nombresupervisor', 'nombre supervisor', 'required|max_length[255]');			
		$this->form_validation->set_rules('especiestrabajadas', 'Especies que trabajadas', 'required');			
		$this->form_validation->set_rules('describatareas', 'Describa las tareas', '');			
		$this->form_validation->set_rules('pctinvestigacion', 'Porcentaje Investigacion', 'is_numeric');			
		$this->form_validation->set_rules('pctmedicinaclinica', 'Porcentaje Medicina Clinica', 'is_numeric');			
		$this->form_validation->set_rules('pctcirugia', 'Porcentaje Cirugia', 'is_numeric');			
		$this->form_validation->set_rules('pctmantenimientocolonias', 'Porcentaje Mantenimiento Colonias', 'is_numeric');			
		$this->form_validation->set_rules('pctmanipulacion', 'Porcentaje Manipulación', 'is_numeric');			
		$this->form_validation->set_rules('pctdirprojectos', 'Porcentaje Dirección de Projectos', 'is_numeric');			
		$this->form_validation->set_rules('pctnecropsia', 'Porcentaje Necropsia', 'is_numeric');			
		$this->form_validation->set_rules('pctdiaglaboratorio', 'Porcentaje Diagnostico Laboratorio', 'is_numeric');			
		$this->form_validation->set_rules('pctceua', 'Porcentaje CEUA', 'is_numeric');			
		$this->form_validation->set_rules('pcthistopatologia', 'Porcentaje Histopatologia', 'is_numeric');			
		$this->form_validation->set_rules('pctentedu', 'Porcentaje Entrenamiento/Educacion', 'is_numeric');			
		$this->form_validation->set_rules('pctapoyoinvestigadores', 'Porcentaje Apoyo Investigadores', 'is_numeric');			
		$this->form_validation->set_rules('pctsupervision', 'Porcentaje Supervision', 'is_numeric');			
		$this->form_validation->set_rules('pctprodanimal', 'Porcentaje Produccion animal', 'is_numeric');			
		$this->form_validation->set_rules('pctlegal', 'Porcentaje Responsabilidad Legal', 'is_numeric');			
		$this->form_validation->set_rules('pctotrasfunciones', 'Porcentaje Otras Funciones', 'is_numeric');			
		$this->form_validation->set_rules('pctfuncnorel', 'Porcentaje Funciones No Relacionadas', 'is_numeric');			
		$this->form_validation->set_rules('pctobservaciones', 'Observaciones de Porcentajes', '');			
		$this->form_validation->set_rules('realizocursos', 'Realizo Cursos', 'required|max_length[1]');			
		$this->form_validation->set_rules('acrpersonales', 'Acreditaciones Personales', 'required|max_length[1]');			
		$this->form_validation->set_rules('categoria', 'Categoria', 'required');			
		$this->form_validation->set_rules('fechavencimiento', 'fechavencimiento', 'required');
		
		$this -> form_validation -> set_rules('curso1', 'curso1', 'max_length[255]');
		$this -> form_validation -> set_rules('curso2', 'curso2', 'max_length[255]');
		$this -> form_validation -> set_rules('curso3', 'curso3', 'max_length[255]');
		$this -> form_validation -> set_rules('cursoobservacion', 'cursoobservacion', 'max_length[1000]');
		
		$this -> form_validation -> set_rules('acrorganismo', 'acrorganismo', 'max_length[255]');
		$this -> form_validation -> set_rules('acrcategoria', 'acrcategoria', 'max_length[255]');
		$this -> form_validation -> set_rules('acrfecha', 'acrfecha', 'max_length[255]');
		
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
        $this->load->model('acreditaciones/acreditacion');
        $this->load->model('instituciones/institucion');
        $this->data['instituciones'] = $this->institucion->retrieveRegistros();
        $obj = new $this->acreditacion;
        $errores = array();
        $save = false;
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this -> data['errores'] = $errores;
		}
        else
        {
            $save = true;    
            $config['upload_path'] = FCPATH."assets".DIRECTORY_SEPARATOR."protectedfiles";//sys_get_temp_dir();
            $config['allowed_types'] = 'pdf|doc|docx';
            $this -> load -> library('upload', $config);
            $errores = array();
            $upload_data = array();
            
            if (!$this -> upload -> do_upload('curriculum')) {
                $errores['curriculum'] = $this -> upload -> display_errors();
                $this->upload->clean_errors();
                $save = false;
            }else{
                $upload_data['curriculum'] = $this->upload->data();
            }
        }
        $form_data = array(
                      'fecha' => set_value('fecha'),
                      'nombreapellido' => set_value('nombreapellido'),
                      'formacion' => set_value('formacion'),
                      'documento' => set_value('documento'),
                      'fechanacimiento' => set_value('fechanacimiento'),
                      'direccionpostal' => set_value('direccionpostal'),
                      'direccionelectronica' => set_value('direccionelectronica'),
                      'telefonocontacto' => set_value('telefonocontacto'),
                      'instituciondesempeno' => set_value('instituciondesempeno'),
                      'laboratoriounidad' => set_value('laboratoriounidad'),
                      'cargofuncioninstitucion' => set_value('cargofuncioninstitucion'),
                      'cargahorariasemanal' => set_value('cargahorariasemanal'),
                      'nombresupervisor' => set_value('nombresupervisor'),
                      'especiestrabajadas' => set_value('especiestrabajadas'),
                      'describatareas' => set_value('describatareas'),
                      'pctinvestigacion' => set_value('pctinvestigacion'),
                      'pctmedicinaclinica' => set_value('pctmedicinaclinica'),
                      'pctcirugia' => set_value('pctcirugia'),
                      'pctmantenimientocolonias' => set_value('pctmantenimientocolonias'),
                      'pctmanipulacion' => set_value('pctmanipulacion'),
                      'pctdirprojectos' => set_value('pctdirprojectos'),
                      'pctnecropsia' => set_value('pctnecropsia'),
                      'pctdiaglaboratorio' => set_value('pctdiaglaboratorio'),
                      'pctceua' => set_value('pctceua'),
                      'pcthistopatologia' => set_value('pcthistopatologia'),
                      'pctentedu' => set_value('pctentedu'),
                      'pctapoyoinvestigadores' => set_value('pctapoyoinvestigadores'),
                      'pctsupervision' => set_value('pctsupervision'),
                      'pctprodanimal' => set_value('pctprodanimal'),
                      'pctlegal' => set_value('pctlegal'),
                      'pctotrasfunciones' => set_value('pctotrasfunciones'),
                      'pctfuncnorel' => set_value('pctfuncnorel'),
                      'pctobservaciones' => set_value('pctobservaciones'),
                      'realizocursos' => set_value('realizocursos'),
                      'acrpersonales' => set_value('acrpersonales'),
                      'categoria' => set_value('categoria'),
                      'cvfile' => set_value('cvfile'),
                      'cvpath' => set_value('cvpath'),
                      'isactive' => set_value('isactive'),
                      'fechavencimiento' => set_value('fechavencimiento')
                  );
        
        
        $obj->setFecha($form_data['fecha']);
        $obj->setNombreapellido($form_data['nombreapellido']);
        $obj->setFormacion($form_data['formacion']);
        $obj->setDocumento($form_data['documento']);
        $obj->setFechanacimiento($form_data['fechanacimiento']);
        $obj->setDireccionpostal($form_data['direccionpostal']);
        $obj->setDireccionelectronica($form_data['direccionelectronica']);
        $obj->setTelefonocontacto($form_data['telefonocontacto']);
        $obj->setInstituciondesempeno($form_data['instituciondesempeno']);
        $obj->setLaboratoriounidad($form_data['laboratoriounidad']);
        $obj->setCargofuncioninstitucion($form_data['cargofuncioninstitucion']);
        $obj->setCargahorariasemanal($form_data['cargahorariasemanal']);
        $obj->setNombresupervisor($form_data['nombresupervisor']);
        $obj->setEspeciestrabajadas($form_data['especiestrabajadas']);
        $obj->setDescribatareas($form_data['describatareas']);
        $obj->setPctinvestigacion($form_data['pctinvestigacion']);
        $obj->setPctmedicinaclinica($form_data['pctmedicinaclinica']);
        $obj->setPctcirugia($form_data['pctcirugia']);
        $obj->setPctmantenimientocolonias($form_data['pctmantenimientocolonias']);
        $obj->setPctmanipulacion($form_data['pctmanipulacion']);
        $obj->setPctdirprojectos($form_data['pctdirprojectos']);
        $obj->setPctnecropsia($form_data['pctnecropsia']);
        $obj->setPctdiaglaboratorio($form_data['pctdiaglaboratorio']);
        $obj->setPctceua($form_data['pctceua']);
        $obj->setPcthistopatologia($form_data['pcthistopatologia']);
        $obj->setPctentedu($form_data['pctentedu']);
        $obj->setPctapoyoinvestigadores($form_data['pctapoyoinvestigadores']);
        $obj->setPctsupervision($form_data['pctsupervision']);
        $obj->setPctprodanimal($form_data['pctprodanimal']);
        $obj->setPctlegal($form_data['pctlegal']);
        $obj->setPctotrasfunciones($form_data['pctotrasfunciones']);
        $obj->setPctfuncnorel($form_data['pctfuncnorel']);
        $obj->setPctobservaciones($form_data['pctobservaciones']);
        $obj->setRealizocursos($form_data['realizocursos']);
        $obj->setAcrpersonales($form_data['acrpersonales']);
        $obj->setCategoria($form_data['categoria']);
        $obj->setFechavencimiento($form_data['fechavencimiento']);
		
		if($obj->getRealizocursos() == 1)
		{
		  $obj->setCurso1(set_value('curso1'));
		  $obj->setCurso2(set_value('curso2'));
		  $obj->setCurso3(set_value('curso3'));
		  $obj->setCursoobservacion(set_value('cursoobservacion'));
		
		}
		else
		{
		  $obj->setCurso1("");
		  $obj->setCurso2("");
		  $obj->setCurso3("");
		  $obj->setCursoobservacion("");
		}
		if($obj->getAcrpersonales() == 1)
		{
		  $obj->setAcrorganismo(set_value('acrorganismo'));
		  $obj->setAcrcategoria(set_value('acrcategoria'));
		  $obj->setAcrfecha(set_value('acrfecha'));
		}
		else
		{
		  $obj->setAcrorganismo("");
		  $obj->setAcrcategoria("");
		  $obj->setAcrfecha("");
		}
        if($save)
        {
            $obj->setCvfile($upload_data['curriculum']['file_name']);
            $obj->setCvpath($upload_data['curriculum']['file_path']);
            $acreditacionId = $obj->save();
            //redirect('registros/index');
            redirect('registros/showPersona/'.$acreditacionId);
            
        }
        $this->loadI18n("acreditaciones", "", FALSE, TRUE, "", "sitio");
        
        $this -> data['errores'] = $errores;
        //var_dump($obj);
        $this->data['obj'] = $obj;
        $this->data['use_grid_16'] = false;
        $this->addJqueryUI();
        $this->data['content'] = "registros/personas/createformacreditacion";
      
        $this->load->view("admin/layout", $this->data);
      
    }
    
    function showPersona($id)
    {
        $this->loadShowAcreditacion($id);
    }
    
    
    function editarPersona($id)
    {
        $this->data['menu_id'] = 'registros_personas';
        $this->load->model('acreditaciones/acreditacion');
        $this->load->model('instituciones/institucion');
        $this->data['instituciones'] = $this->institucion->retrieveRegistros();
        $obj = $this->acreditacion->getById($id);
        $errores = array();
        
        $this->loadI18n("acreditaciones", "", FALSE, TRUE, "", "sitio");
        
        $this -> data['errores'] = $errores;
        //var_dump($obj);
        $this->data['obj'] = $obj;
        $this->data['use_grid_16'] = false;
        $this->addJqueryUI();
        $this->data['content'] = "registros/personas/editformacreditacion";
      
        $this->load->view("admin/layout", $this->data);
    }
    
    function editarSavePersona()
    {
        $this->data['menu_id'] = 'registros_personas';
        $this -> load -> helper('form');
        $this -> load -> library('form_validation');
        $this->form_validation->set_rules('fecha', 'Fecha', 'required');			
		$this->form_validation->set_rules('nombreapellido', 'Nombre y Apellido', 'required|trim|max_length[255]');			
		$this->form_validation->set_rules('formacion_primaria', 'formacion primaria', 'max_length[1]');			
		$this->form_validation->set_rules('formacion_secundaria', 'formacion secundaria', 'max_length[1]');			
		$this->form_validation->set_rules('formacionterciaria', 'formacion terciaria', 'max_length[1]');			
		$this->form_validation->set_rules('documento', 'Documento', 'required|max_length[255]');			
		$this->form_validation->set_rules('fechanacimiento', 'fecha nacimiento', 'required');			
		$this->form_validation->set_rules('direccionpostal', 'Direccion Postal', 'required|max_length[255]');			
		$this->form_validation->set_rules('direccionelectronica', 'Direccion Electronica', 'required|valid_email|max_length[255]');			
		$this->form_validation->set_rules('telefonocontacto', 'Telefono Contacto', 'required|max_length[255]');			
		$this->form_validation->set_rules('instituciondesempeno', 'Institucion desempeño', 'required|max_length[11]');			
		$this->form_validation->set_rules('laboratoriounidad', 'Laboratorio/Unidad', 'required|max_length[255]');			
		$this->form_validation->set_rules('cargofuncioninstitucion', 'Cargo/Funcion en la institucion', 'required|max_length[255]');			
		$this->form_validation->set_rules('cargahorariasemanal', 'Carga Horaria Semanal', 'required|is_numeric');			
		$this->form_validation->set_rules('nombresupervisor', 'nombre supervisor', 'required|max_length[255]');			
		$this->form_validation->set_rules('especiestrabajadas', 'Especies que trabajadas', 'required');			
		$this->form_validation->set_rules('describatareas', 'Describa las tareas', '');			
		$this->form_validation->set_rules('pctinvestigacion', 'Porcentaje Investigacion', 'is_numeric');			
		$this->form_validation->set_rules('pctmedicinaclinica', 'Porcentaje Medicina Clinica', 'is_numeric');			
		$this->form_validation->set_rules('pctcirugia', 'Porcentaje Cirugia', 'is_numeric');			
		$this->form_validation->set_rules('pctmantenimientocolonias', 'Porcentaje Mantenimiento Colonias', 'is_numeric');			
		$this->form_validation->set_rules('pctmanipulacion', 'Porcentaje Manipulación', 'is_numeric');			
		$this->form_validation->set_rules('pctdirprojectos', 'Porcentaje Dirección de Projectos', 'is_numeric');			
		$this->form_validation->set_rules('pctnecropsia', 'Porcentaje Necropsia', 'is_numeric');			
		$this->form_validation->set_rules('pctdiaglaboratorio', 'Porcentaje Diagnostico Laboratorio', 'is_numeric');			
		$this->form_validation->set_rules('pctceua', 'Porcentaje CEUA', 'is_numeric');			
		$this->form_validation->set_rules('pcthistopatologia', 'Porcentaje Histopatologia', 'is_numeric');			
		$this->form_validation->set_rules('pctentedu', 'Porcentaje Entrenamiento/Educacion', 'is_numeric');			
		$this->form_validation->set_rules('pctapoyoinvestigadores', 'Porcentaje Apoyo Investigadores', 'is_numeric');			
		$this->form_validation->set_rules('pctsupervision', 'Porcentaje Supervision', 'is_numeric');			
		$this->form_validation->set_rules('pctprodanimal', 'Porcentaje Produccion animal', 'is_numeric');			
		$this->form_validation->set_rules('pctlegal', 'Porcentaje Responsabilidad Legal', 'is_numeric');			
		$this->form_validation->set_rules('pctotrasfunciones', 'Porcentaje Otras Funciones', 'is_numeric');			
		$this->form_validation->set_rules('pctfuncnorel', 'Porcentaje Funciones No Relacionadas', 'is_numeric');			
		$this->form_validation->set_rules('pctobservaciones', 'Observaciones de Porcentajes', '');			
		$this->form_validation->set_rules('realizocursos', 'Realizo Cursos', 'required|max_length[1]');			
		$this->form_validation->set_rules('acrpersonales', 'Acreditaciones Personales', 'required|max_length[1]');			
		$this->form_validation->set_rules('categoria', 'Categoria', 'required');			
		$this->form_validation->set_rules('fechavencimiento', 'fechavencimiento', 'required');
		
		$this -> form_validation -> set_rules('curso1', 'curso1', 'max_length[255]');
		$this -> form_validation -> set_rules('curso2', 'curso2', 'max_length[255]');
		$this -> form_validation -> set_rules('curso3', 'curso3', 'max_length[255]');
		$this -> form_validation -> set_rules('cursoobservacion', 'cursoobservacion', 'max_length[1000]');
		
		$this -> form_validation -> set_rules('acrorganismo', 'acrorganismo', 'max_length[255]');
		$this -> form_validation -> set_rules('acrcategoria', 'acrcategoria', 'max_length[255]');
		$this -> form_validation -> set_rules('acrfecha', 'acrfecha', 'max_length[255]');
		
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
        $this->load->model('acreditaciones/acreditacion');
        $this->load->model('instituciones/institucion');
        $this->data['instituciones'] = $this->institucion->retrieveRegistros();
        $id = $this->input->post('id', true);
        $obj = $this->acreditacion->getById($id);
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
                      'fecha' => set_value('fecha'),
                      'nombreapellido' => set_value('nombreapellido'),
                      'formacion' => set_value('formacion'),
                      'documento' => set_value('documento'),
                      'fechanacimiento' => set_value('fechanacimiento'),
                      'direccionpostal' => set_value('direccionpostal'),
                      'direccionelectronica' => set_value('direccionelectronica'),
                      'telefonocontacto' => set_value('telefonocontacto'),
                      'instituciondesempeno' => set_value('instituciondesempeno'),
                      'laboratoriounidad' => set_value('laboratoriounidad'),
                      'cargofuncioninstitucion' => set_value('cargofuncioninstitucion'),
                      'cargahorariasemanal' => set_value('cargahorariasemanal'),
                      'nombresupervisor' => set_value('nombresupervisor'),
                      'especiestrabajadas' => set_value('especiestrabajadas'),
                      'describatareas' => set_value('describatareas'),
                      'pctinvestigacion' => set_value('pctinvestigacion'),
                      'pctmedicinaclinica' => set_value('pctmedicinaclinica'),
                      'pctcirugia' => set_value('pctcirugia'),
                      'pctmantenimientocolonias' => set_value('pctmantenimientocolonias'),
                      'pctmanipulacion' => set_value('pctmanipulacion'),
                      'pctdirprojectos' => set_value('pctdirprojectos'),
                      'pctnecropsia' => set_value('pctnecropsia'),
                      'pctdiaglaboratorio' => set_value('pctdiaglaboratorio'),
                      'pctceua' => set_value('pctceua'),
                      'pcthistopatologia' => set_value('pcthistopatologia'),
                      'pctentedu' => set_value('pctentedu'),
                      'pctapoyoinvestigadores' => set_value('pctapoyoinvestigadores'),
                      'pctsupervision' => set_value('pctsupervision'),
                      'pctprodanimal' => set_value('pctprodanimal'),
                      'pctlegal' => set_value('pctlegal'),
                      'pctotrasfunciones' => set_value('pctotrasfunciones'),
                      'pctfuncnorel' => set_value('pctfuncnorel'),
                      'pctobservaciones' => set_value('pctobservaciones'),
                      'realizocursos' => set_value('realizocursos'),
                      'acrpersonales' => set_value('acrpersonales'),
                      'categoria' => set_value('categoria'),
                      'cvfile' => set_value('cvfile'),
                      'cvpath' => set_value('cvpath'),
                      'isactive' => set_value('isactive'),
                      'fechavencimiento' => set_value('fechavencimiento')
                  );
        
        
        $obj->setFecha($form_data['fecha']);
        $obj->setNombreapellido($form_data['nombreapellido']);
        $obj->setFormacion($form_data['formacion']);
        $obj->setDocumento($form_data['documento']);
        $obj->setFechanacimiento($form_data['fechanacimiento']);
        $obj->setDireccionpostal($form_data['direccionpostal']);
        $obj->setDireccionelectronica($form_data['direccionelectronica']);
        $obj->setTelefonocontacto($form_data['telefonocontacto']);
        $obj->setInstituciondesempeno($form_data['instituciondesempeno']);
        $obj->setLaboratoriounidad($form_data['laboratoriounidad']);
        $obj->setCargofuncioninstitucion($form_data['cargofuncioninstitucion']);
        $obj->setCargahorariasemanal($form_data['cargahorariasemanal']);
        $obj->setNombresupervisor($form_data['nombresupervisor']);
        $obj->setEspeciestrabajadas($form_data['especiestrabajadas']);
        $obj->setDescribatareas($form_data['describatareas']);
        $obj->setPctinvestigacion($form_data['pctinvestigacion']);
        $obj->setPctmedicinaclinica($form_data['pctmedicinaclinica']);
        $obj->setPctcirugia($form_data['pctcirugia']);
        $obj->setPctmantenimientocolonias($form_data['pctmantenimientocolonias']);
        $obj->setPctmanipulacion($form_data['pctmanipulacion']);
        $obj->setPctdirprojectos($form_data['pctdirprojectos']);
        $obj->setPctnecropsia($form_data['pctnecropsia']);
        $obj->setPctdiaglaboratorio($form_data['pctdiaglaboratorio']);
        $obj->setPctceua($form_data['pctceua']);
        $obj->setPcthistopatologia($form_data['pcthistopatologia']);
        $obj->setPctentedu($form_data['pctentedu']);
        $obj->setPctapoyoinvestigadores($form_data['pctapoyoinvestigadores']);
        $obj->setPctsupervision($form_data['pctsupervision']);
        $obj->setPctprodanimal($form_data['pctprodanimal']);
        $obj->setPctlegal($form_data['pctlegal']);
        $obj->setPctotrasfunciones($form_data['pctotrasfunciones']);
        $obj->setPctfuncnorel($form_data['pctfuncnorel']);
        $obj->setPctobservaciones($form_data['pctobservaciones']);
        $obj->setRealizocursos($form_data['realizocursos']);
        $obj->setAcrpersonales($form_data['acrpersonales']);
        $obj->setCategoria($form_data['categoria']);
        $obj->setFechavencimiento($form_data['fechavencimiento']);
		if($obj->getRealizocursos() == 1)
		{
		  $obj->setCurso1(set_value('curso1'));
		  $obj->setCurso2(set_value('curso2'));
		  $obj->setCurso3(set_value('curso3'));
		  $obj->setCursoobservacion(set_value('cursoobservacion'));
		}
		else
		{
		  $obj->setCurso1("");
		  $obj->setCurso2("");
		  $obj->setCurso3("");
		  $obj->setCursoobservacion("");
		}
		if($obj->getAcrpersonales() == 1)
		{
		  $obj->setAcrorganismo(set_value('acrorganismo'));
		  $obj->setAcrcategoria(set_value('acrcategoria'));
		  $obj->setAcrfecha(set_value('acrfecha'));
		}
		else
		{
		  $obj->setAcrorganismo("");
		  $obj->setAcrcategoria("");
		  $obj->setAcrfecha("");
		}
        if($save)
        {
            $acreditacionId = $obj->save();
            //redirect('registros/index');
            redirect('registros/showPersona/'.$acreditacionId);
            
        }
        $this->loadI18n("acreditaciones", "", FALSE, TRUE, "", "sitio");
        
        $this -> data['errores'] = $errores;
        //var_dump($obj);
        $this->data['obj'] = $obj;
        $this->data['use_grid_16'] = false;
        $this->addJqueryUI();
        $this->data['content'] = "registros/personas/createformacreditacion";
      
        $this->load->view("admin/layout", $this->data);
    }
    
    
    
    
    function acreditacionesSubirArchivo()
    {
      $config['upload_path'] = FCPATH."assets".DIRECTORY_SEPARATOR."protectedfiles";//sys_get_temp_dir();
      $config['allowed_types'] = 'pdf|doc|docx';
      $this -> load -> library('upload', $config);
      $errores = array();
      $upload_data = array();
      $id = $this->input->post('id', true);
      $type = $this->input->post('type', true);
      if (!$this -> upload -> do_upload('archivo')) {
        switch ($type) {
          case "curso": 
              $errores['archivo_cursos'] = $this -> upload -> display_errors();
             break;
          case "acreditacion": 
              $errores['archivo_acreditacion'] = $this -> upload -> display_errors();
             break;
          case "firmainstitucion":
              $errores['archivo_firmainstitucion'] = $this -> upload -> display_errors();
            break;
          default:
            break;
        }
          
          $this->upload->clean_errors();
      }else{
          $upload_data['archivo'] = $this->upload->data();
          $this->load->model('acreditaciones/acreditacionarchivo');
          $archivo = new $this->acreditacionarchivo;
          $archivo->setAcreditacion_id($id);
          $archivo->setType($type);
          $archivo->setFilename($upload_data['archivo']['file_name']);
          $archivo->setFilepath($upload_data['archivo']['file_path']);
          $archivo->save();
          redirect('registros/showPersona/'.$id);
      }
      $this->data['errores'] = $errores;
      $this->loadShowAcreditacion($id);
    }
    
    
    public function downloadArchivoAcreditacion($id)
    {
      $this->load->helper('download');
      $this->load->model('acreditaciones/acreditacionarchivo');
      $archivo = $this->acreditacionarchivo->simpleGetById($id);
      force_download($archivo->filename, file_get_contents($archivo->filepath.$archivo->filename));
      die;
    }
    
    public function downloadArchivoFirmaAcreditacion($id)
    {
      $this->load->helper('download');
      $this->load->model('acreditaciones/acreditacion');
      $archivo = $this->acreditacion->simpleGetById($id);
      force_download($archivo->cvfile, file_get_contents($archivo->cvpath.$archivo->cvfile));
      die;
    }
    
    public function removeArchivoAcreditacion()
    {
      $this->load->model('acreditaciones/acreditacionarchivo');
      // Get ID from form
      $id = $this->input->post('id', true);
      $this->acreditacionarchivo->deleteAllById($id);
      $salida = array();
      $salida['response'] = "OK";
      $salida['options'] = array('id' => $id);
      $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode($salida));
      
    }
    
    private function loadShowAcreditacion($id)
    {
      $this->data['menu_id'] = 'registros_personas';
      $this->addModuleJavascript("registros", "showInstitucion.js");
      $this->addFancyBox();
      $this->load->model('acreditaciones/acreditacion');
      $this->load->model('acreditaciones/acreditacionarchivo');
      $this->load->model('instituciones/institucion');
      $acreditacion = $this->acreditacion->getById($id);
      $this->data['institucion'] = $this->institucion->getById($acreditacion->getInstituciondesempeno());
      $this->data['acreditacion'] = $acreditacion;
      $this->data['archivos'] = $this->acreditacionarchivo->getByAcreditacionId($acreditacion->getId());
      $this->data['content'] = "registros/personas/show";
      $this->load->view("admin/layout", $this->data);
    }
    
    
    public function acreditacionesSubirFirma()
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
          $this->load->model('acreditaciones/acreditacion');
          $archivo = $this->acreditacion->getById($id);
          unlink($archivo->getCvpath().$archivo->getCvfile());
          $archivo->setCvfile($upload_data['archivo']['file_name']);
          $archivo->setCvpath($upload_data['archivo']['file_path']);
          $archivo->save();
          redirect('registros/showPersona/'.$id);
      }
      $this->data['errores'] = $errores;
      $this->loadShowAcreditacion($id);
    }
    
    function fullDeletePersona($id)
    {
      $this->load->model('acreditaciones/acreditacion');
      $this->load->model('acreditaciones/acreditacionarchivo');
      $acreditacion = $this->acreditacion->getById($id);
      
      $archivos = $this->acreditacionarchivo->getByAcreditacionId($acreditacion->getId());
      foreach($archivos as $archivo)
      {
        $this->acreditacionarchivo->deleteAllById($archivo->id);
      }
      $acreditacion->deleteAll();
      redirect('registros/index');
      
    }
    
    function actPersona($id, $status)
    {
      $this->load->model('acreditaciones/acreditacion');
      $acreditacion = $this->acreditacion->getById($id);
      if($status == 1 || $status == "1")
      {
        $acreditacion->setIsActive(0);
      }
      else
      {
        $acreditacion->setIsActive(1);
      }
      $acreditacion->save();
      redirect('registros/index');
    }
    /***
     * 
     * De aca para abajo es Viejo
     * 
     */
    
    
    
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
