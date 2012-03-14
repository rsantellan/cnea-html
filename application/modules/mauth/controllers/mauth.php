<?php 

class mauth extends MY_Controller {

  public function __construct() {
    parent::__construct();

    $this->loadI18n(get_class($this), $this->lenguage, FALSE, TRUE, '', strtolower(get_class($this)));
    //$this->load->library('Session');
  }

  private $errores = false;

  function index() {
    $data['main_content'] = 'login_form';
    $data["errores"] = $this->errores;
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->view('login_form', $data);
  }

  function validate_credentials() {
    //$this->output->enable_profiler(TRUE);
    $this->load->model('users/user_adm_model');
    $this->load->helper('url');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
    $this->errores = false;
    if ($this->form_validation->run() == FALSE) {
      $this->errores = true;
      $this->index();
    } else {
      $user = $this->user_adm_model->validate();

      if (!is_null($user)) { // if the user's credentials validated...

        $data = array(
            'username' => $user->getUserName(),
            'is_logged_in' => true
        );
        $this->session->set_userdata($data);
        $user->autoComplete();
        $this->session->set_userdata('permissions', serialize($user->getPermissions()));
        $this->session->set_userdata('permissions_groups', serialize($user->getPermissionsGroups()));
        redirect('welcome');
      } else { // incorrect username or password
        $this->errores = true;
        $this->index();
      }
    }

    //var_dump('aca');die;
  }

  function signup() {
    $this->load->library('form_validation');
    $this->load->database();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('users/users');
    $this->form_validation->set_rules('name', 'name', 'required|trim|max_length[255]|xss_clean');
    $this->form_validation->set_rules('lastname', 'lastname', 'required|xss_clean|max_length[255]');
    $this->form_validation->set_rules('user', 'user', 'required|xss_clean|max_length[25]');
    $this->form_validation->set_rules('email', 'email', 'required|xss_clean|valid_email|max_length[255]');
    $this->form_validation->set_rules('password', 'password', 'required|xss_clean|max_length[255]|min_length[4]|alpha_dash');
    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean|matches[password]');
    
    $this->form_validation->set_rules('mobile', 'mobile', 'max_length[255]');

    $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

    $this->config->load("mauth/my_auth");
    $email_activation = $this->config->item('email_activation');
    
    if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
      //$this->load->view('users_view');
      $this->load->view("signup");
    } else { // passed validation proceed to post success logic
      // build array for the model

      
      $form_data = array(
          'name' => set_value('name'),
          'lastname' => set_value('lastname'),
          'user' => set_value('user'),
          'email' => set_value('email'),
          'mobile' => set_value('mobile'),
          'password' => set_value('password'),
          'access_key' => md5(set_value('user'))
      );

      // run insert model to write data to db
      $save_user = $this->users->SaveForm($form_data);
      if ($save_user == TRUE) { // the information has therefore been successfully saved in the db
        
        if($email_activation)
        {
          $this->_send_email('welcome', $data['email'], $data);
        }
        redirect('mauth/success');   // or whatever logic needs to occur
      } else {
        echo 'An error occurred saving your information. Please try again later';
        // Or whatever error handling is necessary
      }
    }
    //$this->output->enable_profiler(TRUE);
    
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
      $this->config->load("mauth/my_auth");
      $this->email->from($this->config->item('webmaster_email'), $this->config->item('website_name'));
      $this->email->reply_to($this->config->item('webmaster_email'), $this->config->item('website_name'));
      $this->email->to($email);
      $this->email->subject(sprintf($this->lang->line('auth_subject_'.$type), $this->config->item('website_name')));
      $this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));
      $this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
      $this->email->send();
  }  
  
  
  function success() {
    echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
  }

  function create_member() {
    $this->load->library('form_validation');

    // field name, error message, validation rules
    $this->form_validation->set_rules('first_name', 'Name', 'trim|required');
    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
    $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');


    if ($this->form_validation->run() == FALSE) {
      $this->load->view('signup_form');
    } else {
      $this->load->model('membership_model');

      if ($query = $this->membership_model->create_member()) {
        $data['main_content'] = 'signup_successful';
        $this->load->view('includes/template', $data);
      } else {
        $this->load->view('signup_form');
      }
    }
  }

  function logout() {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('is_logged_in');
    $this->session->sess_destroy();
    $this->index();
  }

  function is_logged_in() {
    $is_logged_in = $this->session->userdata('is_logged_in');
    if (!isset($is_logged_in) || $is_logged_in != true) {
      redirect('login');
      $this->load->helper('url');

      $this->load->view("notLogged");
      die();
    }
    //log_message('MY_USER', $sql);
  }

  function cp() {
    if ($this->session->userdata('username')) {
      // load the model for this controller
      $this->load->model('membership_model');
      // Get User Details from Database
      $user = $this->membership_model->get_member_details();
      if (!$user) {
        // No user found
        return false;
      } else {
        // display our widget
        $this->load->view('user_widget', $user);
      }
    } else {
      // There is no session so we return nothing
      return false;
    }
  }

  function login_form() {
    $data['errores'] = false;
    $this->load->view("login_form", $data);
  }

}