<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of authAdmin
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class Authadmin extends MX_Controller{
  
  
  	function __construct()
	{
		parent::__construct();
    }
    
    function index()
    {
      
      $this->load->model('auth/users');
      $this->users->listUsers();
    }

}
