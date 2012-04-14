
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
        $this -> addJavascript("jquery.js");
        $this -> addStyleSheet("skin1.css");
        $this -> addJavascript("jquery.infieldlabel.min.js");
        $this -> addJavascript("basicInfieldFormPersonas.js");
        $this -> addStyleSheet("infieldlabelPersonas.css");
        $this -> load -> library('form_validation');
        $this -> load -> helper('form');

        /*$this -> form_validation -> set_rules('fecha', 'fecha', 'required|max_length[255]');
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
        $this -> form_validation -> set_rules('categoria_c2', 'categoria_c2', 'max_length[255]');*/

        $this -> form_validation -> set_error_delimiters('<br /><span class="error">', '</span>');
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
            }
            
            //firma_persona_upload
            if (!$this -> upload -> do_upload('firma_persona_upload')) {
                $errores['firma_persona_upload'] = $this -> upload -> display_errors();
                $this->upload->clean_errors();
                $send_email = false;
            }else{
                $upload_data['firma_persona_upload'] = $this->upload->data();
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
                    'categoria_c2' => set_value('categoria_c2')
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
                $this -> data['content'] = 'formulario_ok';
                $this -> load -> view('layout', $this -> data);
                
            } else {
                $this -> data['errores'] = $errores;
                $this -> data['content'] = 'formulario';
                $this -> load -> view('layout', $this -> data);
            }

        }

    }
}
