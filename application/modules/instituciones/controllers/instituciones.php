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
class instituciones extends MY_Controller{
  
  function  __construct()  {
	parent::__construct();
    $this->loadI18n("instituciones", "", FALSE, TRUE, "", "sitio");
    $this->loadI18n("menu", "", FALSE, TRUE, "", "sitio");
    $this->data['menu_id'] = 'instituciones';
    //Esto es para cnea
      $this -> addJavascript("jquery.js");
      $this -> addJavascript("jquery.infieldlabel.min.js");
      $this->addJavascript("busqueda.js");
      $this->addStyleSheet("busqueda.css");        
  }

  public function bases()
  {
    $this->data['content'] = 'instituciones_bases';
    $this->load->view('layout', $this->data);
  }
  
  public function reglamentacion()
  {
    $this->load->dbutil();
    $backup =& $this->dbutil->backup();   
    $this->load->library('zip');
    $path='/home/rodrigo/proyectos/code-igniter-shared-project/trunk/';
    $this->zip->read_dir($path); 
    $this->zip->add_data('database.gz', $backup);
    $this->zip->download('my_backup.zip'); 
    die;
    $this->data['content'] = 'instituciones_reglamentacion';
    /*
    $this->load->library('session');
    $this->load->helper('captcha');
    // if form was submitted and given captcha word matches one in session
    //var_dump($this->input->post('word'));
    //var_dump($this->session->userdata('word'));
    if ($this->input->post() && ($this->input->post('word') == $this->session->userdata('word'))) 
    {
        die('funco todo!!');
    }
    else
    {
        // load codeigniter captcha helper
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
    }
    */
    $this->load->view('layout', $this->data);

    //echo $this->config->base_url();
  }
  
  function registro($page = 0)
  {
    $this->load->model('registros/registro_institucion');
    $this->load->library('pagination');
    $this->load->helper('text');
    $quantity = 10;
    $config['base_url'] = base_url().'index.php/instituciones/registro/';
    $config['total_rows'] = $this->registro_institucion->countAllRecords();
    $config['per_page'] = $quantity;
    $config['cur_tag_open'] = '<a href="javascript:void(0)" class="current">';
    $config['cur_tag_close'] = '</a> -';
    $config['prev_link'] = FALSE;
    $config['next_link'] = FALSE;
    $config['num_tag_close'] = ' - ';
    
    $this->pagination->initialize($config);
    
    
    $this->data['list'] = $this->registro_institucion->retrieveRegistros($quantity, $page, true);
    $this->data['page'] = $page;
    $this->data['content'] = 'registro';
    $this->load->view('layout', $this->data);
  }
  
  function formulario() {
        //$this->addJquery();
        $this -> load -> helper('form');
        $this -> load -> library('form_validation');
        $this->load->library('session');
        $this->load->helper('captcha');
        $this -> addJavascript("jquery.js");
        $this -> addStyleSheet("skin1.css");
        $this -> addJavascript("jquery.infieldlabel.min.js");
        $this -> addJavascript("basicInfieldFormInstituciones.js");
        //$this->addJavascript("acreditacion.js");
        $this -> addStyleSheet("infieldlabelInstituciones.css");
        $this -> addJavascript("FormInstituciones.js");

        $this -> form_validation -> set_rules('NombreInsititucion', 'NombreInsititucion', 'required|max_length[255]');
        $this -> form_validation -> set_rules('RazonSocial', 'RazonSocial', 'max_length[255]');
        $this -> form_validation -> set_rules('RUT', 'RUT', 'max_length[255]');
        $this -> form_validation -> set_rules('Naturaleza', 'Naturaleza', 'required');
        $this -> form_validation -> set_rules('PrimerNivel', 'PrimerNivel', 'required|max_length[255]');
        $this -> form_validation -> set_rules('SegundoNivel', 'SegundoNivel', 'required|max_length[255]');
        $this -> form_validation -> set_rules('TercerNivel', 'TercerNivel', 'required|max_length[255]');
        $this -> form_validation -> set_rules('DomicilioInstitucional', 'DomicilioInstitucional', 'required|max_length[255]');        
        $this -> form_validation -> set_rules('DomicilioFiscal', 'DomicilioFiscal', 'max_length[255]');
        $this -> form_validation -> set_rules('Dicose', 'Dicose', 'max_length[255]');
        $this -> form_validation -> set_rules('UnidadesDependientes1', 'UnidadesDependientes1', 'max_length[255]');
        $this -> form_validation -> set_rules('UnidadesDependientes2', 'UnidadesDependientes2', 'max_length[255]');
        $this -> form_validation -> set_rules('UnidadesDependientes3', 'UnidadesDependientes3', 'max_length[255]');
        $this -> form_validation -> set_rules('UnidadesDependientes4', 'UnidadesDependientes4', 'max_length[255]');
        $this -> form_validation -> set_rules('TipoEstablecimiento', 'TipoEstablecimiento', 'required|max_length[255]');
        $this -> form_validation -> set_rules('ObservacionesComite', 'ObservacionesComite', 'max_length[255]');
        $this -> form_validation -> set_rules('NombreContacto', 'NombreContacto', 'required|max_length[255]');
        $this -> form_validation -> set_rules('MailContacto', 'MailContacto', 'required|valid_email|max_length[255]');
        $this -> form_validation -> set_rules('TelContacto', 'TelContacto', 'required|max_length[255]');
        /*
        var_dump(FCPATH);
        var_dump(BASEPATH);
        var_dump(APPPATH);
        var_dump(FCPATH.APPPATH);
        var_dump(sys_get_temp_dir());
        die;
        */
        //especies
        $post = $_POST;
        $i = 0;
        foreach($post as $k=>$v){
            if(substr_count($k, "NombreEspecie_")>0){
                $i++;
                $this -> form_validation -> set_rules('NombreEspecie_'.$i, 'NombreEspecie_'.$i, 'required|max_length[255]');
                $this -> form_validation -> set_rules('ObservacionesEspecie_'.$i, 'ObservacionesEspecie_'.$i, 'max_length[255]');
                $this -> form_validation -> set_rules('TipoEspecie_1_'.$i, 'TipoEspecie_1_'.$i, 'max_length[255]');
                $this -> form_validation -> set_rules('TipoEspecie_2_'.$i, 'TipoEspecie_2_'.$i, 'max_length[255]');
            }
        }
        
        //docente
        $post = $_POST;
        $i = 0;
        foreach($post as $k=>$v){
            if(substr_count($k, "DocenteNombreApellido_")>0){
                $i++;
                $this -> form_validation -> set_rules('DocenteNombreApellido_'.$i, 'DocenteNombreApellido_'.$i, 'required|max_length[255]');
                $this -> form_validation -> set_rules('DocenteProfesion_'.$i, 'DocenteProfesion_'.$i, 'required|max_length[255]');
                $this -> form_validation -> set_rules('DocenteOcupacion_'.$i, 'DocenteOcupacion_'.$i, 'required|max_length[255]');
            }
        }
        
        //veterinario
        $post = $_POST;
        $i = 0;
        foreach($post as $k=>$v){
            if(substr_count($k, "VeterinarioNombreApellido_")>0){
                $i++;
                $this -> form_validation -> set_rules('VeterinarioNombreApellido_'.$i, 'VeterinarioNombreApellido_'.$i, 'required|max_length[255]');
                $this -> form_validation -> set_rules('VeterinarioProfesion_'.$i, 'VeterinarioProfesion_'.$i, 'required|max_length[255]');
                $this -> form_validation -> set_rules('VeterinarioOcupacion_'.$i, 'VeterinarioOcupacion_'.$i, 'required|max_length[255]');
            }
        }
        
        //sociedad
        $post = $_POST;
        $i = 0;
        foreach($post as $k=>$v){
            if(substr_count($k, "SociedadNombreApellido_")>0){
                $i++;
                $this -> form_validation -> set_rules('SociedadNombreApellido_'.$i, 'SociedadNombreApellido_'.$i, 'required|max_length[255]');
                $this -> form_validation -> set_rules('SociedadProfesion_'.$i, 'SociedadProfesion_'.$i, 'required|max_length[255]');
                $this -> form_validation -> set_rules('SociedadOcupacion_'.$i, 'SociedadOcupacion_'.$i, 'required|max_length[255]');
            }
        }
        
        $this -> form_validation -> set_error_delimiters('<br /><span class="error">', '</span>');
        if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
        {
            $this -> data['errores'] = array();
            $this -> data['content'] = 'formulario';
            $this -> load -> view('layout', $this -> data);
        } else {
            $send_email = true;

            //Chequeo los archivos a subir.
            //$config['upload_path'] = sys_get_temp_dir();
            $config['upload_path'] = FCPATH."assets".DIRECTORY_SEPARATOR."protectedfiles";//sys_get_temp_dir();
            $config['allowed_types'] = 'pdf|doc|docx';
            $this -> load -> library('upload', $config);
            $errores = array();
            $upload_data = array();
            
            if (!$this -> upload -> do_upload('copia_resolucion_institucion')) {
                $errores['copia_resolucion_institucion'] = $this -> upload -> display_errors();
                $this->upload->clean_errors();
                $send_email = false;
            }else{
                $upload_data['copia_resolucion_institucion'] = $this->upload->data();
            }
            $finish = false;
            $counter = 0;
            while(!$finish)
            {
              if(isset($_FILES["copia_resolucion_institucion_".$counter]))
              {
                if (!$this -> upload -> do_upload('copia_resolucion_institucion_'.$counter)) {
                $errores['copia_resolucion_institucion_'.$counter] = $this -> upload -> display_errors();
                $this->upload->clean_errors();
                $send_email = false;
              }else{
                  $upload_data['copia_resolucion_institucion_'.$counter] = $this->upload->data();
              }
              }
              else
              {
                $finish = true;
              }
              $counter++;
            }
            
            
            if (!$this -> upload -> do_upload('responsable_institucional')) {
                $errores['responsable_institucional'] = $this -> upload -> display_errors();
                $this->upload->clean_errors();
                $send_email = false;
            }else{
                $upload_data['responsable_institucional'] = $this->upload->data();
            }
            
            //unidades dependientes
            $arr_unidep = array();
            $post = $_POST;
            foreach($post as $k=>$v){
                if(substr_count($k, "UnidadesDependientes")>0){
                    $i = (int)str_replace("UnidadesDependientes","",$k);
                    $arr_unidep[] = $v;
                }
            }
            
            //especies
            $arr_especies = array();
            $post = $_POST;
            foreach($post as $k=>$v){
                if(substr_count($k, "NombreEspecie_")>0){
                    $i = (int)str_replace("NombreEspecie_","",$k);
                    $tipo_especie_1 = "";
                    if(isset($_POST['TipoEspecie_1_'.$i])){
                        $tipo_especie_1 = $_POST['TipoEspecie_1_'.$i];
                    }
                    $tipo_especie_2 = "";
                    if(isset($_POST['TipoEspecie_2_'.$i])){
                        $tipo_especie_2 = $_POST['TipoEspecie_2_'.$i];
                    }
                    $arr_especies[] = array('nombre' => $v, 'observaciones' => $_POST['ObservacionesEspecie_'.$i], 'tipo_especie_1' => $tipo_especie_1, 'tipo_especie_2' => $tipo_especie_2);
                }
            }
            
            //docente
            $arr_comite_docente = array();
            $post = $_POST;
            foreach($post as $k=>$v){
                if(substr_count($k, "DocenteNombreApellido_")>0){
                    $i = (int)str_replace("DocenteNombreApellido_","",$k);
                    $arr_comite_docente[] = array('nombre' => $v, 'profesion' => $_POST['DocenteProfesion_'.$i], 'ocupacion' => $_POST['DocenteOcupacion_'.$i]);
                }
            }
            
            //veterinario
            $arr_comite_veterinario = array();
            $post = $_POST;
            foreach($post as $k=>$v){
                if(substr_count($k, "VeterinarioNombreApellido_")>0){
                    $i = (int)str_replace("VeterinarioNombreApellido_","",$k);
                    $arr_comite_veterinario[] = array('nombre' => $v, 'profesion' => $_POST['VeterinarioProfesion_'.$i], 'ocupacion' => $_POST['VeterinarioOcupacion_'.$i]);
                }
            }
            
            //sociedad
            $arr_comite_sociedad = array();
            $post = $_POST;
            foreach($post as $k=>$v){
                if(substr_count($k, "SociedadNombreApellido_")>0){
                    $i = (int)str_replace("SociedadNombreApellido_","",$k);
                    $arr_comite_sociedad[] = array('nombre' => $v, 'profesion' => $_POST['SociedadProfesion_'.$i], 'ocupacion' => $_POST['SociedadOcupacion_'.$i]);
                }
            }
            
            //Esta todo bien, entonces mando el mail
            if ($send_email) {
                //var_dump(FCPATH);
                //var_dump(BASEPATH);
                //var_dump(APPPATH);
                //var_dump($upload_data['responsable_institucional']);
                //die;
                $form_data = array(
                    'NombreInsititucion' => $_POST['NombreInsititucion'], 
                    'RazonSocial' => $_POST['RazonSocial'],
                    'RUT' => $_POST['RUT'],
                    'Naturaleza' => $_POST['Naturaleza'],
                    'PrimerNivel' => $_POST['PrimerNivel'],
                    'SegundoNivel' => $_POST['SegundoNivel'],
                    'TercerNivel' => $_POST['TercerNivel'],
                    'DomicilioInstitucional' => $_POST['DomicilioInstitucional'],
                    'DomicilioFiscal' => $_POST['DomicilioFiscal'],
                    'Dicose' => $_POST['Dicose'],
                    'UnidadesDependientes' => $arr_unidep,
                    'TipoEstablecimiento' => $_POST['TipoEstablecimiento'],
                    'Especie' => $arr_especies,
                    'ComiteDocente' => $arr_comite_docente,
                    'ComiteVeterinario' => $arr_comite_veterinario,
                    'ComiteSociedad' => $arr_comite_sociedad,
                    'ObservacionesComite' => $_POST['ObservacionesComite'],
                    'NombreContacto' => $_POST['NombreContacto'],
                    'MailContacto' => $_POST['MailContacto'],
                    'TelContacto' => $_POST['TelContacto'],
                    );
                $this->load->model('instituciones/institucion');    
                $this->load->model('instituciones/institucionespecie');    
                $this->load->model('instituciones/instituciondocenteinvestigador');
                $this->load->model('instituciones/institucionveterinario');
                $this->load->model('instituciones/institucionsociedadcivil');
                $this->load->model('instituciones/institucionunidadesdependientes');
                $this->load->model('instituciones/institucionarchivos');
                
                $institucion = new $this->institucion;
                $institucion->setNombreinsititucion($form_data['NombreInsititucion']);
                $institucion->setRazonsocial($form_data['RazonSocial']);
                $institucion->setRut($form_data['RUT']);
                $institucion->setNaturaleza($form_data['Naturaleza']);
                $institucion->setPrimernivel($form_data['PrimerNivel']);
                $institucion->setSegundonivel($form_data['SegundoNivel']);
                $institucion->setTercernivel($form_data['TercerNivel']);
                $institucion->setDomicilioinstitucional($form_data['DomicilioInstitucional']);
                $institucion->setDomiciliofiscal($form_data['DomicilioFiscal']);
                $institucion->setTipoestablecimiento($form_data['TipoEstablecimiento']);
                $institucion->setObservacionescomite($form_data['ObservacionesComite']);
                $institucion->setNombrecontacto($form_data['NombreContacto']);
                $institucion->setMailcontacto($form_data['MailContacto']);
                $institucion->setTelcontacto($form_data['TelContacto']);
                $institucion->setCvfilename($upload_data['responsable_institucional']['file_name']);
                $institucion->setCvfilepath($upload_data['responsable_institucional']['file_path']);
                $institucionId = $institucion->save();
                
                foreach($arr_especies as $auxEspecie)
                {
                  $especie = new $this->institucionespecie;
                  $especie->setIntitucion_id($institucionId);
                  $especie->setNombre($auxEspecie['nombre']);
                  $especie->setObservacion($auxEspecie['observaciones']);
                  if($auxEspecie['tipo_especie_1'] == 'uso')
                  {
                    $especie->setEsUso(true);
                  }
                  else
                  {
                    $especie->setEsUso(false);
                  }
                  if($auxEspecie['tipo_especie_2'] == 'cria')
                  {
                    $especie->setEsCria(true);
                  }
                  else
                  {
                    $especie->setEsCria(false);
                  }
                  $especie->save();
                }
                
                foreach($arr_comite_docente as $auxDocente)
                {
                  $docente = new $this->instituciondocenteinvestigador;
                  $docente->setIntitucion_id($institucionId);
                  $docente->setNombre($auxDocente['nombre']);
                  $docente->setProfesion($auxDocente['profesion']);
                  $docente->setOcupacion($auxDocente['ocupacion']);
                  $docente->save();
                }
                
                foreach($arr_comite_veterinario as $auxVeterinario)
                {
                  $veterinario = new $this->institucionveterinario;
                  $veterinario->setIntitucion_id($institucionId);
                  $veterinario->setNombre($auxVeterinario['nombre']);
                  $veterinario->setProfesion($auxVeterinario['profesion']);
                  $veterinario->setOcupacion($auxVeterinario['ocupacion']);
                  $veterinario->save();
                }
                
                foreach($arr_comite_sociedad as $auxSociedad)
                {
                  $sociedad = new $this->institucionsociedadcivil;
                  $sociedad->setIntitucion_id($institucionId);
                  $sociedad->setNombre($auxSociedad['nombre']);
                  $sociedad->setProfesion($auxSociedad['profesion']);
                  $sociedad->setOcupacion($auxSociedad['ocupacion']);
                  $sociedad->save();
                }
                
                foreach($arr_unidep as $auxUnidep)
                {
                  $unidadDependiente = new $this->institucionunidadesdependientes;
                  $unidadDependiente->setIntitucion_id($institucionId);
                  $unidadDependiente->setNombre($auxUnidep);
                  $unidadDependiente->save();
                }
                
                foreach($upload_data as $keyUpload => $valueUpload)
                {
                  if($keyUpload !== "responsable_institucional")
                  {
                    $archivo = new $this->institucionarchivos;
                    $archivo->setIntitucion_id($institucionId);
                    $archivo->setFilename($valueUpload['file_name']);
                    $archivo->setFilepath($valueUpload['file_path']);
                    $archivo->save();
                  }
                }
                //var_dump($arr_unidep);
                //var_dump($upload_data);
                //die("Todos los parametros bien");
                
                $message = $this -> load -> view('instituciones/email_formulario', $form_data, TRUE);
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
                $this->email->reply_to($form_data['MailContacto'], $form_data['NombreContacto']);
        
                $this->email->subject('Formulario para el registro nacional de instituciones');
                $this->email->message($message);
                
                foreach($upload_data as $uploaded){
                    $this->email->attach($uploaded["full_path"]);
                }
                 
                //$this->email->send();
                
                $this -> data['content'] = 'formulario_ok';
                $this -> load -> view('layout', $this -> data);
                
            } else {
                $this -> data['errores'] = $errores;
                $this -> data['content'] = 'formulario';
                $this -> load -> view('layout', $this -> data);
            }

        }

    }
    
    function descargarFormularioInstitucion()
    {
      $this->load->helper('download');
      $name = "Hoja Firmas.doc";
      $path = base_url()."assets/docs/HojaFirmas_Insitituciones.doc";
      $data = file_get_contents($path); // Read the file's contents
      force_download($name, $data);      
    }

    function descargarFormularioFirmasInstitucion()
    {
      $this->load->helper('download');
      $name = "Registro Instituciones.doc";
      $path = base_url()."assets/docs/Registro_Intsituciones.doc";
      $data = file_get_contents($path); // Read the file's contents
      force_download($name, $data);      
    }
}
