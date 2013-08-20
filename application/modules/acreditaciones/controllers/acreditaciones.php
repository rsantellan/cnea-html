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
	$this->data['instituciones'] = $this->institucion->retrieveRegistros();
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
	$this->data['instituciones'] = $this->institucion->retrieveRegistros();
	$obj = new $this->acreditacion;
	$errores = array();
	$save = false;
	/*
	  $this -> load -> library('form_validation');
	  $this -> load -> helper('form');

	  $this -> form_validation -> set_rules('fecha', 'fecha', 'required|max_length[255]');
	  $this -> form_validation -> set_rules('renovacion', 'renovacion', 'required|max_length[255]');
	  $this -> form_validation -> set_rules('nombre', 'nombre', 'required|max_length[255]');
	  $this -> form_validation -> set_rules('postal', 'postal', 'required|max_length[255]');
	  $this -> form_validation -> set_rules('email', 'email', 'required|valid_email|max_length[255]');
	  $this -> form_validation -> set_rules('telefono', 'telefono', 'required|max_length[255]');
	  $this -> form_validation -> set_rules('institucion', 'institucion', 'required|max_length[255]');
	  $this -> form_validation -> set_rules('cargo', 'cargo', 'required|max_length[255]');
	  $this -> form_validation -> set_rules('realizacion', 'realizacion', 'required|max_length[5]');
	  $this -> form_validation -> set_rules('curso_1', 'curso_1', 'max_length[255]');
	  $this -> form_validation -> set_rules('curso_2', 'curso_2', 'max_length[255]');
	  $this -> form_validation -> set_rules('curso_3', 'curso_3', 'max_length[255]');
	  $this -> form_validation -> set_rules('observaciones_curso', 'observaciones_curso', 'max_length[1000]');
	  $this -> form_validation -> set_rules('acreditacion', 'acreditacion', 'max_length[5]');
	  $this -> form_validation -> set_rules('acreditacion_institucion', 'acreditacion_institucion', 'max_length[255]');
	  $this -> form_validation -> set_rules('acreditacion_categoria', 'acreditacion_categoria', 'max_length[255]');
	  $this -> form_validation -> set_rules('acreditacion_fecha', 'acreditacion_fecha', 'max_length[255]');
	  $this -> form_validation -> set_rules('categoria_a', 'categoria_a', 'max_length[255]');
	  $this -> form_validation -> set_rules('categoria_b', 'categoria_b', 'max_length[255]');
	  $this -> form_validation -> set_rules('categoria_c1', 'categoria_c1', 'max_length[255]');
	  $this -> form_validation -> set_rules('categoria_c2', 'categoria_c2', 'max_length[255]');
	  $this -> form_validation -> set_rules('observaciones_institucion_field', 'observaciones_institucion_field', 'max_length[1000]');

	  $this -> form_validation -> set_error_delimiters('<br /><span class="error">', '</span>');

	 */
	if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
	  $this->data['errores'] = $errores;
	} else {
	  $save = true;
	}
	/*
	  if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
	  {
	  $this -> data['errores'] = array();
	  $this -> data['content'] = 'formulario';
	  $this -> load -> view('layout', $this -> data);
	  } else {
	  $send_email = true;

	  //Chequeo los archivos a subir.
	  $config['upload_path'] = sys_get_temp_dir() . "/";
	  $config['allowed_types'] = 'pdf|doc|docx';
	  $this -> load -> library('upload', $config);
	  $errores = array();
	  $upload_data = array();
	  if(set_value('realizacion') == "si"){
	  //cursos_upload
	  if (!$this -> upload -> do_upload('cursos_upload')) {
	  $errores['cursos_upload'] = $this -> upload -> display_errors();
	  $this->upload->clean_errors();
	  $send_email = false;
	  }else{
	  $upload_data['cursos_upload'] = $this->upload->data();
	  }

	  $finish = false;
	  $counter = 0;
	  while(!$finish)
	  {
	  if(isset($_FILES["cursos_upload_".$counter]))
	  {
	  if (!$this -> upload -> do_upload('cursos_upload_'.$counter)) {
	  $errores['cursos_upload_'.$counter] = $this -> upload -> display_errors();
	  $this->upload->clean_errors();
	  $send_email = false;
	  }else{
	  $upload_data['cursos_upload_'.$counter] = $this->upload->data();
	  }
	  }
	  else
	  {
	  $finish = true;
	  }
	  $counter++;
	  }

	  }
	  if(set_value('acreditacion') == "si"){
	  //acreditacion_upload
	  if (!$this -> upload -> do_upload('acreditacion_upload')) {
	  $errores['acreditacion_upload'] = $this -> upload -> display_errors();
	  $this->upload->clean_errors();
	  $send_email = false;
	  }else{
	  $upload_data['acreditacion_upload'] = $this->upload->data();
	  }


	  $finish = false;
	  $counter = 0;
	  while(!$finish)
	  {
	  if(isset($_FILES["acreditacion_upload_".$counter]))
	  {
	  if (!$this -> upload -> do_upload('acreditacion_upload_'.$counter)) {
	  $errores['acreditacion_upload_'.$counter] = $this -> upload -> display_errors();
	  $this->upload->clean_errors();
	  $send_email = false;
	  }else{
	  $upload_data['acreditacion_upload_'.$counter] = $this->upload->data();
	  }
	  }
	  else
	  {
	  $finish = true;
	  }
	  $counter++;
	  }

	  }


	  //firma_institucion_upload
	  if (!$this -> upload -> do_upload('firma_institucion_upload')) {
	  $errores['firma_institucion_upload'] = $this -> upload -> display_errors();
	  $this->upload->clean_errors();
	  $send_email = false;
	  }else{
	  $upload_data['firma_institucion_upload'] = $this->upload->data();
	  }

	  //Esta todo bien, entonces mando el mail
	  if ($send_email) {
	  $form_data = array(
	  'fecha' => set_value('fecha'),
	  'renovacion' => set_value('renovacion'),
	  'nombre' => set_value('nombre'),
	  'postal' => set_value('postal'),
	  'email' => set_value('email'),
	  'telefono' => set_value('telefono'),
	  'institucion' => set_value('institucion'),
	  'cargo' => set_value('cargo'),
	  'realizacion' => set_value('realizacion'),
	  'curso_1' => set_value('curso_1'),
	  'curso_2' => set_value('curso_2'),
	  'curso_3' => set_value('curso_3'),
	  'observaciones_curso' => set_value('observaciones_curso'),
	  'acreditacion' => set_value('acreditacion'),
	  'acreditacion_institucion' => set_value('acreditacion_institucion'),
	  'acreditacion_categoria' => set_value('acreditacion_categoria'),
	  'acreditacion_fecha' => set_value('acreditacion_fecha'),
	  'categoria_a' => set_value('categoria_a'),
	  'categoria_b' => set_value('categoria_b'),
	  'categoria_c1' => set_value('categoria_c1'),
	  'categoria_c2' => set_value('categoria_c2'),
	  'observaciones_institucion_field' => set_value('observaciones_institucion_field')
	  );
	  $message = $this -> load -> view('acreditaciones/email_formulario', $form_data, TRUE);
	  $this->load->model('contacto/mail_db');
	  $return = $this->mail_db->retrieveContactMailInfo();
	  //Con estos datos preparo un email para enviar.
	  $this->load->library('email');

	  $this->email->to($return['to']);
	  if(isset($return['from']))
	  {
	  $this->email->from($return['from']['direccion'], $return['from']['nombre']);
	  }
	  if(isset($return['cc']))
	  $this->email->cc($return['cc']);
	  if(isset($return['cc']))
	  $this->email->bcc($return['cc']);
	  $this->email->reply_to($form_data['email'], $form_data['nombre']);

	  $this->email->subject('Acreditacion de persona pedida');
	  $this->email->message($message);

	  foreach($upload_data as $uploaded){
	  $this->email->attach($uploaded["full_path"]);
	  }

	  $this->email->send();
	  //echo $this->email->print_debugger();
	  //die;
	  $this -> data['content'] = 'formulario_ok';
	  $this -> load -> view('layout', $this -> data);

	  } else {
	  $this -> data['errores'] = $errores;
	  $this -> data['content'] = 'formulario';
	  $this -> load -> view('layout', $this -> data);
	  }

	  }
	 */
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
      $config['allowed_types'] = 'pdf|doc|docx';
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


	  //firma_persona_upload
	  if (!$this->upload->do_upload('firma_persona_upload')) {
		$errores['firma_persona_upload'] = $this->upload->display_errors();
		$this->upload->clean_errors();
		$save = false;
	  } else {
		$upload_data['firma_persona_upload'] = $this->upload->data();
	  }
	  
	  //firma_institucion_upload
	  if (!$this->upload->do_upload('firma_institucion_upload')) {
		$errores['firma_institucion_upload'] = $this->upload->display_errors();
		$this->upload->clean_errors();
		$save = false;
	  } else {
		$upload_data['firma_institucion_upload'] = $this->upload->data();
	  }
	  
//var_dump('aca_?');
	  if($save)
	  {
		$obj->setCvfile($upload_data['firma_persona_upload']['file_name']);
		$obj->setCvpath($upload_data['firma_persona_upload']['file_path']);
		$obj->setFechavencimiento(date('m/d/Y'));
		$acreditacionId = $obj->save();
		
		$this->load->model('acreditaciones/acreditacionarchivo');
		$archivo = new $this->acreditacionarchivo;
		$archivo->setAcreditacion_id($acreditacionId);
		$archivo->setType("firmainstitucion");
		$archivo->setFilename($upload_data['firma_institucion_upload']['file_name']);
		$archivo->setFilepath($upload_data['firma_institucion_upload']['file_path']);
		$archivo->save();
		
		$archivo = new $this->acreditacionarchivo;
		$archivo->setAcreditacion_id($acreditacionId);
		$archivo->setType("curso");
		$archivo->setFilename($upload_data['cursos_upload']['file_name']);
		$archivo->setFilepath($upload_data['cursos_upload']['file_path']);
		$archivo->save();
		
		$finish = false;
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
		
		
		$archivo = new $this->acreditacionarchivo;
		$archivo->setAcreditacion_id($acreditacionId);
		$archivo->setType("acreditacion");
		$archivo->setFilename($upload_data['acreditacion_upload']['file_name']);
		$archivo->setFilepath($upload_data['acreditacion_upload']['file_path']);
		$archivo->save();
		$finish = false;
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
		//$this->output->enable_profiler(TRUE);
		//redirect('registros/index');
		//die('esta aca');
		//redirect('registros/showPersona/' . $acreditacionId);
		$this -> data['content'] = 'formulario_ok';
	  }

	  
	}
	$this->data['obj'] = $obj;
	$this->data['errores'] = $errores;
	if(!$save)
	{
	  $this->data['content'] = 'formulario';
	}
	$this->load->view('layout', $this->data);
  }

}
