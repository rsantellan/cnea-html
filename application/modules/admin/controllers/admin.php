<?php

/*
 */

/**
 * Description of admin
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class admin extends MY_Controller{
  
  public function __construct() 
  {
    parent::__construct();
    $this->loadI18n(get_class($this), $this->lenguage, FALSE, TRUE, '', strtolower(get_class($this)));

    if(!$this->isLogged() && $this->router->method != "adminLogin")
    {
      //Si no esta logeado se tiene que ir a loguear
      $this->session->set_userdata('url_to_direct_on_login', 'admin/index');
      redirect('auth/login'); 
    }
  }
 
  public function index()
  {
    $this->data['content'] = "admin/welcome";
    $this->data['menu_id'] = 'dashboard';
    
	$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
	$cache_key = 'nextToExpireToSendMails';
	$searchAcreditacionesToExpire = $this->cache->get($cache_key);
    if (!$searchAcreditacionesToExpire && true) {
	  $this->load->model('acreditaciones/acreditacion');
	  $rResult = $this->acreditacion->retrieveTableBasicData(NULL, NULL, '', '', true);
	  var_dump($rResult);
	  // Tengo que insertar aquellos que no estan.
	  // Tengo que verificar aquellos que no se les mando mail esta semana y actualizarlos
	  
	  $this->cache->save($cache_key, true, 86400);
	}
    $this->load->view("admin/layout", $this->data);
  }

  public function sendMails(){
	//Esto va a ser para que desde una llamada de ajax se vayan mandando los mails.
  }
  
  public function sendAllMails(){
	//Esto es para que se manden todos los mails que haya que mandar en ese instante.
  }
  
  public function adminLogin()
  {
    $this->addModuleStyleSheet("admin", "login_admin");
    
    $this->load->view("admin_login");
  }
  
  public function backup()
  {
    //var_dump(FCPATH);die;
    $this->load->dbutil();
    $backup =& $this->dbutil->backup();   
    $this->load->library('zip');
    $path=FCPATH;//'/home/rodrigo/proyectos/code-igniter-shared-project/trunk/';
    $this->zip->read_dir($path); 
    $this->zip->add_data('database.gz', $backup);
    $this->zip->download('my_backup.zip'); 
    die;
  }
}

