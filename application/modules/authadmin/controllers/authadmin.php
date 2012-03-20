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
class Authadmin extends MY_Controller{
  
  
  	function __construct()
	{
		parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
    
    function index()
    {
      
      $this->load->model('auth/users');
      $data['user_list'] = $this->users->listUsers();
      $data['content'] = "authadmin/user_list";
      //$this->load->view('authadmin/user_list', $data);
      $this->load->view("admin/layout", $data);
    }

    /**
	 * Register user on the site
	 *
	 * @return void
	 */
	function register()
	{
      
      $this->config->load('tank_auth', false, false, 'auth');
      $this->load->library('tank_auth', true, NULL, 'auth');
      $use_username = $this->config->item('use_username');
      
		if ($use_username) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length['.$this->config->item('username_min_length').']|max_length['.$this->config->item('username_max_length').']|alpha_dash');
		}
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
        $data['errors'] = array();

        $email_activation = $this->config->item('email_activation');
        $randPassword = "654654654";
        if ($this->form_validation->run()) {								// validation ok
            if (!is_null($data = $this->tank_auth->create_user(
                    $use_username ? $this->form_validation->set_value('username') : '',
                    $this->form_validation->set_value('email'),
                    $randPassword,
                    $email_activation))) {									// success

                $data['site_name'] = $this->config->item('website_name');

                if ($email_activation) {									// send "activate" email
                    $data['activation_period'] = $this->config->item('email_activation_expire') / 3600;

                    $this->_send_email('activate', $data['email'], $data);

                    unset($data['password']); // Clear password (just for any case)

                    $this->_show_message($this->lang->line('auth_message_registration_completed_1'));

                } else {
                    if ($this->config->item('email_account_details')) {	// send "welcome" email

                        $this->_send_email('welcome', $data['email'], $data);
                    }
                    unset($data['password']); // Clear password (just for any case)

                    $this->_show_message($this->lang->line('auth_message_registration_completed_2').' '.anchor('/auth/login/', 'Login'));
                }
            } else {
                $errors = $this->tank_auth->get_error_message();
                foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
            }
        }
        
        
        $data['use_username'] = $use_username;
        $this->load->view('authadmin/register_form', $data);
		
	}
    
	/**
	 * Send email message of given type (activate, forgot_password, etc.)
	 *
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	void
	 */
	function _send_email($type, $email, &$data)
	{
		$this->load->library('email');
		$this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->to($email);
		$this->email->subject(sprintf($this->lang->line('auth_subject_'.$type), $this->config->item('website_name', 'tank_auth')));
		$this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));
		$this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
		$this->email->send();
	}    
  
  
  function activate($user_id)
  {
    $this->load->model('auth/users');
    $return = array();
    $is_ok = $this->users->activateUser($user_id);
    $return["result"] = $is_ok;
    echo json_encode($return);
  }
  
  function deactivate($user_id)
  {
    $this->load->model('auth/users');
    $return = array();
    $is_ok = $this->users->deactivateUser($user_id);
    $return["result"] = $is_ok;
    echo json_encode($return);
  }  
  
  function banUser($user_id)
  {
    $this->load->model('auth/users');
    $return = array();
    $this->users->ban_user($user_id, "Admin deactivated");
    $return["result"] = true;
    echo json_encode($return);
  }
  
  function unbanUser($user_id)
  {
    $this->load->model('auth/users');
    $return = array();
    $this->users->unban_user($user_id);
    $return["result"] = true;
    echo json_encode($return);
  }  
  
  function deleteUser($user_id)
  {
    $this->load->model('auth/users');
    $return = array();
    $this->users->delete_user($user_id);
    $return["result"] = true;
    echo json_encode($return);    
  }
  
  /**
	 * Show info message
	 *
	 * @param	string
	 * @return	void
	 */
	function _show_message($message)
	{
		$this->session->set_flashdata('message', $message);
		redirect('/authadmin/');
	}
}
