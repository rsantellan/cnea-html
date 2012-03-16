<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

  
  
  function  __construct()  {
	parent::__construct();
	//modules::run('login/is_logged_in'); 
	$this->loadI18n(get_class($this), $this->lenguage, FALSE, TRUE, '', strtolower(get_class($this)));
	//$this->data['myLang'] = array('a', 'b');
  }
		
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	  
	   //$this->load->model('user_adm_model');
	   
	   //$this->data['resultados'] = $this->user_adm_model->getUserAdm();
	   /*
		$this->load->model("permission_model");	
	  
	   $this->adodb->connect();

	   $permission = new Permission();
	   var_dump($permission);
		$sql = "select * from permission";
		$resultset = $this->adodb->execute($sql);


		$this->adodb->disconnect();
		//var_dump($resultset);
		*/
	    /*
        $this->data["content"] = 'welcome';
		$this->data["dashboard"] = false;
		$this->load->view('layout', $this->data);
		*/
      
        /*
        $this->load->library('mimagick', true, NULL, 'mImagick');
      
        $this->mimagick->thumbnailWithBackground('/home/rodrigo/proyectos/www/1024-768-61910.jpg', '/tmp/thumbWithBackgroud.jpg', 100, 100);
        $this->mimagick->resizeAndCreteReflection('/home/rodrigo/proyectos/www/1024-768-61910.jpg', '/tmp/resizeAndCreteReflection.jpg');
        
        $this->mimagick->thumbnailWithRoundCorners('/home/rodrigo/proyectos/www/1024-768-61910.jpg', '/tmp/thumbnailWithRoundCorners.jpg', 250);
      
        $this->mimagick->simpleEnaceImage('/home/rodrigo/proyectos/www/1024-768-61910.jpg', '/tmp/simpleEnaceImage.jpg');
        
        $this->mimagick->polaroidImage('/home/rodrigo/proyectos/www/1024-768-61910.jpg', '/tmp/polaroidImage.jpg');
      
      
        $this->mimagick->basicThumbnail('/home/rodrigo/proyectos/www/1024-768-61910.jpg', '/tmp/basicThumbnail1.jpg', imagickThumbnailTypes::NORMAL, 200, 200);
        
        $this->mimagick->basicThumbnail('/home/rodrigo/proyectos/www/1024-768-61910.jpg', '/tmp/basicThumbnail2.jpg', imagickThumbnailTypes::FIT, 200, 200);
        
        $this->mimagick->basicThumbnail('/home/rodrigo/proyectos/www/1024-768-61910.jpg', '/tmp/basicThumbnail3.jpg', imagickThumbnailTypes::FIXED, 200, 200);
        
        $this->mimagick->basicThumbnail('/home/rodrigo/proyectos/www/1024-768-61910.jpg', '/tmp/basicThumbnail4.jpg', imagickThumbnailTypes::CROP, 200, 200);
        
        $this->mimagick->watermarking('/home/rodrigo/proyectos/www/1024-768-61910.jpg', '/tmp/watermarking.jpg');
        */
        
        $this->load->helper('url');
        $this->load->view("welcome_message");
	}
	
	public function newForm()
	{
	  
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
