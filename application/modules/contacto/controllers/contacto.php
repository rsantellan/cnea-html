<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of contacto
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class contacto extends MY_Controller{
  
    function __construct()
    {
      parent::__construct();
    }
    
    function index()
    {
      $this->load->library('form_validation');
      $this->load->helper('form');
      $this->load->helper('url');
      
      $this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[255]');			
      $this->form_validation->set_rules('email', 'email', 'required|valid_email|max_length[255]');			
      $this->form_validation->set_rules('telefono', 'telefono', 'max_length[255]');			
      $this->form_validation->set_rules('comentario', 'comentario', 'required|max_length[1000]');

      $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
      
      if ($this->form_validation->run() == FALSE) // validation hasn't been passed
      {
        $this->data['content'] = 'contact_form';
        $this->load->view('layout', $this->data);
      }
      else
      {
        // build array for the model
			
        $form_data = array(
                        'nombre' => set_value('nombre'),
                        'email' => set_value('email'),
                        'telefono' => set_value('telefono'),
                        'comentario' => set_value('comentario')
                    );
        $data['form_data'] = $form_data;
        //Con estos datos preparo un email para enviar.
        $this->load->library('email');

        $this->email->from('rsantellan@gmail.com', 'Your Name');
        $this->email->to('rsantellan@gmail.com'); 
        $this->email->cc('rswibmer@hotmail.com'); 
        $this->email->bcc('rswibmer@hotmail.com'); 

        $this->email->subject('Email Test');
        $message = $this->load->view('memail', $data, true);
        $this->email->message($message); 

        $this->email->send();

        //echo $this->email->print_debugger();
        //redirect('contacto/success');   // or whatever logic needs to occur
        
      }
    }
    
    function success()
	{
      echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
      sessions have not been used and would need to be added in to suit your app';
	}

    
}
