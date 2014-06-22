<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of acreditaciones
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
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

    $this->addJavascript("jquery.cookie.js");
    $this->addJavascript("sayt.jquery.js");
        
	$this->load->helper('form');
	$this->load->library('form_validation');
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
          $save = true;
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
		'realizocursos' => set_value('realizocursos'),
		'acrpersonales' => set_value('acrpersonales'),
		'categoriaA' => set_value('categoriaA'),
        'categoriaB' => set_value('categoriaB'),
        'categoriaC1' => set_value('categoriaC1'),
        'categoriaC2' => set_value('categoriaC2'),
		'cvfile' => set_value('cvfile'),
		'cvpath' => set_value('cvpath'),
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
      $config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg';
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

}
