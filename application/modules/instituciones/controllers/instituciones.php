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
    $this->data['content'] = 'instituciones_reglamentacion';
    $this->load->view('layout', $this->data);
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
        $this -> form_validation -> set_rules('ObservacionesComite', 'ObservacionesComite', 'required|max_length[255]');
        $this -> form_validation -> set_rules('NombreContacto', 'NombreContacto', 'required|max_length[255]');
        $this -> form_validation -> set_rules('MailContacto', 'MailContacto', 'required|valid_email|max_length[255]');
        $this -> form_validation -> set_rules('TelContacto', 'TelContacto', 'required|max_length[255]');
        
        //especies
        $post = $_POST;
        $i = 0;
        foreach($post as $k=>$v){
            if(substr_count($k, "NombreEspecie_")>0){
                $i++;
                $this -> form_validation -> set_rules('NombreEspecie_'.$i, 'NombreEspecie_'.$i, 'max_length[255]');
                $this -> form_validation -> set_rules('ObservacionesEspecie_'.$i, 'ObservacionesEspecie_'.$i, 'max_length[255]');
                $this -> form_validation -> set_rules('TipoEspecie_'.$i, 'TipoEspecie_'.$i, 'max_length[255]');
            }
        }
        
        //docente
        $post = $_POST;
        $i = 0;
        foreach($post as $k=>$v){
            if(substr_count($k, "DocenteNombreApellido_")>0){
                $i++;
                $this -> form_validation -> set_rules('DocenteNombreApellido_'.$i, 'DocenteNombreApellido_'.$i, 'max_length[255]');
                $this -> form_validation -> set_rules('DocenteProfesion_'.$i, 'DocenteProfesion_'.$i, 'max_length[255]');
                $this -> form_validation -> set_rules('DocenteOcupacion_'.$i, 'DocenteOcupacion_'.$i, 'max_length[255]');
            }
        }
        
        //veterinario
        $post = $_POST;
        $i = 0;
        foreach($post as $k=>$v){
            if(substr_count($k, "VeterinarioNombreApellido_")>0){
                $i++;
                $this -> form_validation -> set_rules('VeterinarioNombreApellido_'.$i, 'VeterinarioNombreApellido_'.$i, 'max_length[255]');
                $this -> form_validation -> set_rules('VeterinarioProfesion_'.$i, 'VeterinarioProfesion_'.$i, 'max_length[255]');
                $this -> form_validation -> set_rules('VeterinarioOcupacion_'.$i, 'VeterinarioOcupacion_'.$i, 'max_length[255]');
            }
        }
        
        //sociedad
        $post = $_POST;
        $i = 0;
        foreach($post as $k=>$v){
            if(substr_count($k, "SociedadNombreApellido_")>0){
                $i++;
                $this -> form_validation -> set_rules('SociedadNombreApellido_'.$i, 'SociedadNombreApellido_'.$i, 'max_length[255]');
                $this -> form_validation -> set_rules('SociedadProfesion_'.$i, 'SociedadProfesion_'.$i, 'max_length[255]');
                $this -> form_validation -> set_rules('SociedadOcupacion_'.$i, 'SociedadOcupacion_'.$i, 'max_length[255]');
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
            $config['upload_path'] = sys_get_temp_dir();
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
                    $arr_especies[] = array('nombre' => $v, 'observaciones' => $_POST['ObservacionesEspecie_'.$i], 'tipo_especie' => $_POST['TipoEspecie_'.$i]);
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
                 
                $this->email->send();
                
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
      $name = "Registro_Intsituciones.docx";
      $path = base_url()."assets/docs/Registro_Intsituciones.docx";
      $data = file_get_contents($path); // Read the file's contents
      force_download($name, $data);      
    }
}