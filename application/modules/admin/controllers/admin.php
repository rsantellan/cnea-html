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
    
    /*
    var_dump($this->router->class);
    var_dump($this->router->method);
    die;
    */
    if(!$this->isLogged() && $this->router->class != "admin" && $this->router->method != "adminLogin")
    {
      //Si no esta logeado se tiene que ir a loguear
      redirect('admin/adminLogin'); 
    }
  }
 
  public function index()
  {
   
  }
  
  public function adminLogin()
  {
    $this->addModuleStyleSheet("admin", "login_admin");
    
    $this->load->view("admin_login");
  }
}

