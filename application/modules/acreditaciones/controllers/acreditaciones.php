<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of acreditaciones
 *
 * @author Rodrigo Santellan
 */
class acreditaciones extends MY_Controller {

  function __construct() {
	parent::__construct();
	$this->loadI18n("acreditaciones", "", FALSE, TRUE, "", "sitio");
	$this->loadI18n("menu", "", FALSE, TRUE, "", "sitio");
	$this->data['menu_id'] = 'acreditaciones';
	//Esto es para cnea
	$this->addJavascript("jquery.js");
	$this->addJavascript("jquery.infieldlabel.min.js");
	$this->addJavascript("busqueda.js");
	$this->addStyleSheet("busqueda.css");
//    $this->output->enable_profiler(TRUE);
  }

  function bases() {
	$this->data['content'] = 'bases';
	$this->load->view('layout', $this->data);
  }

  function verregistros() {
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	  $this->load->model('instituciones/institucion');
	  $institucion_id = $this->input->post('institucion');
	  $password = $this->input->post('password');
	  $institucion = $this->institucion->getById($institucion_id);
	  if ($institucion->getPassword() == $password) {
		$this->load->model('acreditaciones/acreditacion');
		$this->data['acreditaciones'] = $this->acreditacion->retrieveRegistrosByInstitucionId($institucion_id);
		//var_dump($this->data['acreditaciones']);
		//die('aca :)');
		$this->data['content'] = 'registroSecure';
		$this->load->view('layout', $this->data);
	  } else {
		$this->session->set_flashdata('registroError', 'Contraseña equivocada');
		redirect('acreditaciones/registro');
	  }
	} else {
	  $this->session->set_flashdata('registroError', 'No puede acceder a la pagina directamente, llene el formulario');
	  redirect('acreditaciones/registro');
	}
  }

  function registro() {
	$this->load->model('instituciones/institucion');
	$this->data['instituciones'] = $this->institucion->retrieveRegistros(NULL, NULL, FALSE, TRUE, 'nombreinsititucion');
	$this->data['errores'] = $this->session->flashdata('registroError');
	$this->data['content'] = 'registro';
	$this->load->view('layout', $this->data);
  }

  function reglamentacion() {
	$this->data['content'] = 'reglamentacion';
	$this->load->view('layout', $this->data);
  }

  function descargarFormularioPersona() {
	$this->load->helper('download');
	$name = "Acreditaciones_Personales.doc";
	$path = base_url() . "assets/docs/Acreditaciones_Personales.doc";
	$data = file_get_contents($path); // Read the file's contents
	force_download($name, $data);
  }

  function descargarFormularioEmpresa() {
	$this->load->helper('download');
	$name = "HojaFirmas.doc";
	$path = base_url() . "assets/docs/HOJA_DE_FIRMAS.doc";
	$data = file_get_contents($path); // Read the file's contents
	force_download($name, $data);
  }

  function formulario() {
	//$this->addJquery();
	$this->addJavascript("jquery.js");
	
	$this->addStyleSheet("skin1.css");
	$this->addJavascript("jquery.infieldlabel.min.js");
	$this->addJavascript("basicInfieldFormPersonas.js");
	$this->addJavascript("FormAcreditaciones.js");
	$this->addStyleSheet("infieldlabelPersonas.css");

	$this->addJavascript("jquery-ui-1.8.16.custom.min.js");
	$this->addStyleSheet("le-frog/jquery-ui-1.8.16.custom.css");
	
    $this->addJavascript("jquery.cookie.js");
    $this->addJavascript("sayt.jquery.js");
        
    $this->addModuleJavascript('registros', 'createEditAcreditacion.js');
    
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->form_validation->set_rules('fecha', 'Fecha', 'required');
	$this->form_validation->set_rules('nombre', 'Nombre', 'required|trim|max_length[255]');
	$this->form_validation->set_rules('nombreapellido', 'Apellido', 'required|trim|max_length[255]');
	$this->form_validation->set_rules('formacion_primaria', 'formacion primaria', 'max_length[1]');
	$this->form_validation->set_rules('formacion_secundaria', 'formacion secundaria', 'max_length[1]');
	$this->form_validation->set_rules('formacionterciaria', 'formacion terciaria', 'max_length[1]');
    $this->form_validation->set_rules('titulo', 'titulo', 'trim|max_length[255]');
	$this->form_validation->set_rules('documento', 'Documento', 'required|max_length[255]');
	$this->form_validation->set_rules('fechanacimiento', 'fecha nacimiento', 'required');
	$this->form_validation->set_rules('direccionpostal', 'Direccion Postal', 'required|max_length[255]');
	$this->form_validation->set_rules('direccionelectronica', 'Direccion Electronica', 'required|valid_email|max_length[255]');
	$this->form_validation->set_rules('telefonocontacto', 'Telefono Contacto', 'required|max_length[255]');
	$this->form_validation->set_rules('instituciondesempeno', 'Institucion desempeño', 'required|max_length[11]');
	$this->form_validation->set_rules('laboratoriounidad', 'Laboratorio/Unidad', 'required|max_length[255]');
	$this->form_validation->set_rules('cargofuncioninstitucion', 'Cargo/Funcion en la institucion', 'required|max_length[255]');
	$this->form_validation->set_rules('cargahorariasemanal', 'Carga Horaria Semanal', 'required|is_numeric|less_than[61]');
	$this->form_validation->set_rules('nombresupervisor', 'nombre supervisor', 'required|max_length[255]');
	$this->form_validation->set_rules('especiestrabajadas', 'Especies que trabajadas', 'required');
	$this->form_validation->set_rules('describatareas', 'Describa las tareas', 'required');
	$this->form_validation->set_rules('realizocursos', 'Realizo Cursos', 'required|max_length[1]');
	$this->form_validation->set_rules('acrpersonales', 'Acreditaciones Personales', 'required|max_length[1]');
	$this->form_validation->set_rules('categoriaA', 'Categoria A');			
    $this->form_validation->set_rules('categoriaB', 'Categoria B');
    $this->form_validation->set_rules('categoriaC1', 'Categoria C1');
    $this->form_validation->set_rules('categoriaC2', 'Categoria C2');
	//$this->form_validation->set_rules('fechavencimiento', 'fechavencimiento', 'required');

	$this->form_validation->set_rules('curso1', 'curso1', 'max_length[255]');
	$this->form_validation->set_rules('curso2', 'curso2', 'max_length[255]');
	$this->form_validation->set_rules('curso3', 'curso3', 'max_length[255]');
	$this->form_validation->set_rules('cursoobservacion', 'cursoobservacion', 'max_length[1000]');

	$this->form_validation->set_rules('acrorganismo', 'acrorganismo', 'max_length[255]');
	$this->form_validation->set_rules('acrcategoria', 'acrcategoria', 'max_length[255]');
	$this->form_validation->set_rules('acrfecha', 'acrfecha', 'max_length[255]');

	$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	$this->load->model('acreditaciones/acreditacion');
	$this->load->model('instituciones/institucion');
	$this->data['instituciones'] = $this->institucion->retrieveRegistros(NULL, NULL, FALSE, TRUE, 'nombreinsititucion');
	$obj = new $this->acreditacion;
	$errores = array();
	$save = false;
	
    $word = $this->input->post('word');
    $captcha = false;
    //$captcha = true;
    if ($this->input->post() && ($word == $this->session->userdata('word'))) 
    {
      $captcha = true;
    }
    else
    {
      if(!empty($word) || $this->input->post() )
      {
        $errores["captcha"] = "Captcha invalido"; 
      }
        
    }
    if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
       $this->data['errores'] = $errores;
    } else {
        if($captcha)
        {
          $save = true;
        }
    }
    $this->load->helper('captcha');
    $vals = array(
        'img_path'     => './captcha/',
        'img_url'     => $this->config->base_url()."captcha/",
        'img_width'     => '200',
        'img_height' => 30,
        'border' => 0,
        'expiration' => 7200,
        'usecaps' => false
        );

      // create captcha image
     $cap = create_captcha($vals);
     // store image html code in a variable
     $this->data['captchaImage'] = $cap['image'];

    // store the captcha word in a session
     $this->session->set_userdata('word', $cap['word']); 
     //var_dump($cap["word"]);
	//var_dump(set_value('realizocursos'));
  $formacion_data = 'primaria';
  if(isset($_POST['formacion']))
  {
    $formacion_data = $_POST['formacion'];
  }
	$form_data = array(
		'fecha' => set_value('fecha'),
		'nombre' => set_value('nombre'),
		'nombreapellido' => set_value('nombreapellido'),
		'formacion' => $formacion_data,
        'titulo' => set_value('titulo'),
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
		'realizocursos' => set_value('realizocursos'),
		'acrpersonales' => set_value('acrpersonales'),
		'categoriaA' => set_value('categoriaA'),
        'categoriaB' => set_value('categoriaB'),
        'categoriaC1' => set_value('categoriaC1'),
        'categoriaC2' => set_value('categoriaC2'),
		'cvfile' => set_value('cvfile'),
		'cvpath' => set_value('cvpath'),
	);
//var_dump($_POST);var_dump(set_value('formacion'));die;
	$obj->setFecha($form_data['fecha']);
	$obj->setNombre($form_data['nombre']);
	$obj->setNombreapellido($form_data['nombreapellido']);
	//$obj->setFormacion('terciaria');
	$obj->setFormacion($form_data['formacion']);
    $obj->setTitulo($form_data['titulo']);
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
	$obj->setRealizocursos($form_data['realizocursos']);
	$obj->setAcrpersonales($form_data['acrpersonales']);
	$obj->setCategoriaA($form_data['categoriaA']);
    $obj->setCategoriaB($form_data['categoriaB']);
    $obj->setCategoriaC1($form_data['categoriaC1']);
    $obj->setCategoriaC2($form_data['categoriaC2']);

	if ($obj->getRealizocursos() == 1) {
	  $obj->setCurso1(set_value('curso1'));
	  $obj->setCurso2(set_value('curso2'));
	  $obj->setCurso3(set_value('curso3'));
	  $obj->setCursoobservacion(set_value('cursoobservacion'));
	} else {
	  $obj->setCurso1("");
	  $obj->setCurso2("");
	  $obj->setCurso3("");
	  $obj->setCursoobservacion("");
	}
	if ($obj->getAcrpersonales() == 1) {
	  $obj->setAcrorganismo(set_value('acrorganismo'));
	  $obj->setAcrcategoria(set_value('acrcategoria'));
	  $obj->setAcrfecha(set_value('acrfecha'));
	  //$obj->setAcrfecha(date('m/d/Y'));
	} else {
	  $obj->setAcrorganismo("");
	  $obj->setAcrcategoria("");
	  $obj->setAcrfecha("");
	}
	//var_dump('aca_? fsdflsdfs 432423');
	if ($save) {
	  //var_dump('aca_? fsdflsdfs');
	  $config['upload_path'] = FCPATH."assets".DIRECTORY_SEPARATOR."protectedfiles";//sys_get_temp_dir();
      $config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|png';
      $this -> load -> library('upload', $config);
	  $errores = array();
	  $upload_data = array();
	  if ($obj->getRealizocursos() == 1) {
		//cursos_upload
		if (!$this->upload->do_upload('cursos_upload')) {
		  $errores['cursos_upload'] = $this->upload->display_errors();
		  $this->upload->clean_errors();
		  $save = false;
		} else {	
		  $upload_data['cursos_upload'] = $this->upload->data();
		}

		$finish = false;
		$counter = 0;
		while (!$finish) {
		  if (isset($_FILES["cursos_upload_" . $counter])) {
			if (!$this->upload->do_upload('cursos_upload_' . $counter)) {
			  $errores['cursos_upload_' . $counter] = $this->upload->display_errors();
			  $this->upload->clean_errors();
			  $save = false;
			} else {
			  $upload_data['cursos_upload_' . $counter] = $this->upload->data();
			}
		  } else {
			$finish = true;
		  }
		  $counter++;
		}
	  }
	  if ($obj->getAcrpersonales() == 1) {
		//acreditacion_upload
		if (!$this->upload->do_upload('acreditacion_upload')) {
		  $errores['acreditacion_upload'] = $this->upload->display_errors();
		  $this->upload->clean_errors();
		  $save = false;
		} else {
		  $upload_data['acreditacion_upload'] = $this->upload->data();
		}


		$finish = false;
		$counter = 0;
		while (!$finish) {
		  if (isset($_FILES["acreditacion_upload_" . $counter])) {
			if (!$this->upload->do_upload('acreditacion_upload_' . $counter)) {
			  $errores['acreditacion_upload_' . $counter] = $this->upload->display_errors();
			  $this->upload->clean_errors();
			  $save = false;
			} else {
			  $upload_data['acreditacion_upload_' . $counter] = $this->upload->data();
			}
		  } else {
			$finish = true;
		  }
		  $counter++;
		}
	  }

	  //firma_institucion_upload
	  if (!$this->upload->do_upload('firma_institucion_upload')) {
		$errores['firma_institucion_upload'] = $this->upload->display_errors();
		$this->upload->clean_errors();
		$save = false;
	  } else {
		$upload_data['firma_institucion_upload'] = $this->upload->data();
	  }
	  
	  if(isset($_FILES['categoria_upload']))
	  {
		if (!$this->upload->do_upload('categoria_upload')) {
		  $errores['categoria_upload'] = $this->upload->display_errors();
		  $this->upload->clean_errors();
		  $save = false;
		} else {
		  $upload_data['categoria_upload'][] = $this->upload->data();
		}
	  }
	  $finish = false;
	  $counter = 0;
	  while (!$finish) {
		if (isset($_FILES["categoria_upload_" . $counter])) {
		  if (!$this->upload->do_upload('categoria_upload_' . $counter)) {
			$errores['categoria_upload_' . $counter] = $this->upload->display_errors();
			$this->upload->clean_errors();
			$save = false;
		  } else {
			$upload_data['categoria_upload'][] = $this->upload->data();
		  }
		} else {
		  $finish = true;
		}
		$counter++;
	  }
	  
	  if($save)
	  {
		
		$obj->setFechavencimiento(date('m/d/Y'));
		$obj->setEstado('N');
		$acreditacionId = $obj->save();
		
		$this->load->model('acreditaciones/acreditacionarchivo');
		$archivo = new $this->acreditacionarchivo;
		$archivo->setAcreditacion_id($acreditacionId);
		$archivo->setType("firmainstitucion");
		$archivo->setFilename($upload_data['firma_institucion_upload']['file_name']);
		$archivo->setFilepath($upload_data['firma_institucion_upload']['file_path']);
		$archivo->save();
		
        $finish = false;
        if ( (int) $obj->getRealizocursos() == 1) {
          $archivo = new $this->acreditacionarchivo;
          $archivo->setAcreditacion_id($acreditacionId);
          $archivo->setType("curso");
          $archivo->setFilename($upload_data['cursos_upload']['file_name']);
          $archivo->setFilepath($upload_data['cursos_upload']['file_path']);
          $archivo->save();
        }else{
          $finish = true;
        }
		
		
		
		$counter = 0;
		// cursos_upload_
		while (!$finish) {
		  if (isset($upload_data['cursos_upload_' . $counter])) {
			$archivo = new $this->acreditacionarchivo;
			$archivo->setAcreditacion_id($acreditacionId);
			$archivo->setType("curso");
			$archivo->setFilename($upload_data['cursos_upload_' . $counter]['file_name']);
			$archivo->setFilepath($upload_data['cursos_upload_' . $counter]['file_path']);
			$archivo->save();
		  }
		  else
		  {
			$finish = true;
		  }
		  $counter++;
		}
		
        $finish = false;
		if ( (int) $obj->getAcrpersonales() == 1) {
          $archivo = new $this->acreditacionarchivo;
          $archivo->setAcreditacion_id($acreditacionId);
          $archivo->setType("acreditacion");
          $archivo->setFilename($upload_data['acreditacion_upload']['file_name']);
          $archivo->setFilepath($upload_data['acreditacion_upload']['file_path']);
          $archivo->save();
        }else{
          $finish = true;
        }
		
		
		$counter = 0;
		// cursos_upload_
		while (!$finish) {
		  if (isset($upload_data['acreditacion_upload_' . $counter])) {
			$archivo = new $this->acreditacionarchivo;
			$archivo->setAcreditacion_id($acreditacionId);
			$archivo->setType("acreditacion");
			$archivo->setFilename($upload_data['acreditacion_upload_' . $counter]['file_name']);
			$archivo->setFilepath($upload_data['acreditacion_upload_' . $counter]['file_path']);
			$archivo->save();
		  }
		  else
		  {
			$finish = true;
		  }
		  $counter++;
		}
		foreach($upload_data['categoria_upload'] as $categoriaUpload){
		  $archivo = new $this->acreditacionarchivo;
			$archivo->setAcreditacion_id($acreditacionId);
			$archivo->setType("categoria");
			$archivo->setFilename($categoriaUpload['file_name']);
			$archivo->setFilepath($categoriaUpload['file_path']);
			$archivo->save();
		}
        $this->acreditacion->doReplication($acreditacionId);
		$this -> data['content'] = 'formulario_ok';
	  }

	  
	}
	//var_dump($obj);
    $this->data['obj'] = $obj;
	$this->data['errores'] = $errores;
	if(!$save)
	{
	  $this->data['content'] = 'formulario';
	}
	$this->load->view('layout', $this->data);
  }

  function formularioRenovacion() {
	//$this->addJquery();
	$this->addJavascript("jquery.js");
	
	$this->addStyleSheet("skin1.css");
	$this->addJavascript("jquery.infieldlabel.min.js");
	$this->addJavascript("basicInfieldFormPersonas.js");
	$this->addJavascript("FormAcreditaciones.js");
	$this->addStyleSheet("infieldlabelPersonas.css");

	$this->addJavascript("jquery-ui-1.8.16.custom.min.js");
	$this->addStyleSheet("le-frog/jquery-ui-1.8.16.custom.css");
	
    $this->addJavascript("jquery.cookie.js");
    $this->addJavascript("sayt.jquery.js");
        
    $this->addModuleJavascript('registros', 'createEditAcreditacion.js');
    
	$this->load->helper('form');
	$this->load->library('form_validation');
    $this->load->model('renovaciones/renovacion');
    $this->load->model('renovaciones/renovacionevento');
    $this->load->model('renovaciones/renovaciontitulo');
    $this->load->model('renovaciones/renovacionprotocolo');
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
    $obj = new $this->renovacion;
    $errores = array();
    $save = false;
    
    $word = $this->input->post('word');
    $captcha = false;
    //$captcha = true;
    if ($this->input->post() && ($word == $this->session->userdata('word'))) 
    {
      $captcha = true;
    }
    else
    {
      if(!empty($word) || $this->input->post() )
      {
        $errores["captcha"] = "Captcha invalido"; 
      }
    }
    //var_dump($captcha);
    if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
       $this->data['errores'] = $errores;
    } else {
        if($captcha)
        {
          $save = true;
        }
          
        //$save = true;
    }
    $this->load->helper('captcha');
    $vals = array(
        'img_path'     => './captcha/',
        'img_url'     => $this->config->base_url()."captcha/",
        'img_width'     => '200',
        'img_height' => 30,
        'border' => 0,
        'expiration' => 7200,
        'usecaps' => false
        );

      // create captcha image
     $cap = create_captcha($vals);
     // store image html code in a variable
     $this->data['captchaImage'] = $cap['image'];

    // store the captcha word in a session
     $this->session->set_userdata('word', $cap['word']); 
    
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
    
    //Eventos
    $events_lists = array();
    //Titulos
    $titles_list = array();
    foreach ($_POST as $postkey => $postdata)
    {
      if(substr_count($postkey, 'eventname_')){
        $number = explode('_', $postkey);
        $number = $number[1];
        $evento = new $this->renovacionevento;
        $evento->setNombre($_POST['eventname_'.$number]);
        $evento->setFecha($_POST['fechaevento_'.$number]);
        $evento->setLugar($_POST['lugarevento_'.$number]);
        $events_lists[$number] = $evento;
      }
      if(substr_count($postkey, 'titlename_'))
      {
        $number = explode('_', $postkey);
        $number = $number[1];
        $titulo = new $this->renovaciontitulo;
        $titulo->setNombre($_POST['titlename_'.$number]);
        $titulo->setDescription($_POST['titledescription_'.$number]);
        $titles_list[$number] = $titulo;
      }
    }
    if(count($events_lists) == 0)
    {
      $events_lists[] = new $this->renovacionevento;
    }
    if(count($titles_list) == 0)
    {
      $titles_list[] = new $this->renovaciontitulo;
    }
    
    $protocolosotros_post_list = $this->input->post('protocolosotros');
    $protocolosotros_list = array();
    if($protocolosotros_post_list)
    {
      foreach($protocolosotros_post_list as $post_data)
      {
        $auxdata = new $this->renovacionprotocolo;
        $auxdata->setDescription($post_data);
        $protocolosotros_list[] = $auxdata;
      }
    }
    else
    {
      $protocolosotros_list[] = new $this->renovacionprotocolo;
    }
    
    $protocolosotrosfines_post_list = $this->input->post('protocolosotrosfines');
    $protocolosotrosfines_list = array();
    if($protocolosotrosfines_post_list)
    {
      foreach($protocolosotrosfines_post_list as $post_data)
      {
        $auxdata = new $this->renovacionprotocolo;
        $auxdata->setDescription($post_data);
        $protocolosotrosfines_list[] = $auxdata;
      }
    }
    else
    {
      $protocolosotrosfines_list[] = new $this->renovacionprotocolo;
    }
    if(!$save)
	{
	  $this->data['content'] = 'formulariorenovacion';
	}
    else
    {
      $renovacionId = $renovacionId = $obj->save();
      foreach($events_lists as $evento)
      {
        $evento->setRenovacionid($renovacionId);
        $evento->save();
      }      
      foreach($titles_list as $title)
      {
        $title->setRenovacionid($renovacionId);
        $title->save();
      }
      foreach($protocolosotros_list as $protocolo)
      {
	//$isEmpy = empty($protocolo->getDescription());
        if($protocolo->getDescription() != '')
        {
          $protocolo->setRenovacionid($renovacionId);
          $protocolo->setType(1);
          $protocolo->save();
        }
      }
      foreach($protocolosotrosfines_list as $protocolo)
      {
        if($protocolo->getDescription() != '')
        {
          $protocolo->setRenovacionid($renovacionId);
          $protocolo->setType(2);
          $protocolo->save();
        }
      }
      redirect('formulario-renovacion-ok.html');
    }
    $this->data['content'] = 'formulariorenovacion';
    $this->data['obj'] = $obj;
    $this->data['protocolosotros'] = array_shift($protocolosotros_list);
    $this->data['protocolosotros_list'] = $protocolosotros_list;
    $this->data['protocolosotrosfines'] = array_shift($protocolosotrosfines_list);
    $this->data['protocolosotrosfines_list'] = $protocolosotrosfines_list;
    $this->data['evento'] = array_shift($events_lists);
    $this->data['evento_list'] = $events_lists;
    $this->data['titles'] = array_shift($titles_list);
    $this->data['titles_list'] = $titles_list;
    //$this->data['captchaImage'] = 'nada';
    $this->load->view('layout', $this->data);
    //var_dump('here');
  }
  
  public function formularioRenovacionOk()
  {
    $this->data['content'] = 'formulariorenovacionok';
    $this->load->view('layout', $this->data);
    
  }
}
