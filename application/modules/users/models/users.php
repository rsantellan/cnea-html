<?php

/*
 */

/**
 * Description of Users
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class users extends CI_Model{

  function __construct()
  {
      parent::__construct();
  }
  
  /**
   * function SaveForm()
   *
   * insert form data
   * @param $form_data - array
   * @return Bool - TRUE or FALSE
   */
  function SaveForm($form_data) {
    
    $form_data['created'] = date('Y-m-d H:i:s');
    if(isset($form_data['password']))
    {
      $form_data['password'] = md5($form_data['password']);
    }
    
    $this->db->insert('users', $form_data);

    if ($this->db->affected_rows() == '1') {
      return TRUE;
    }

    return FALSE;
  }
  
}

