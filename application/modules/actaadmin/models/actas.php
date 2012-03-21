<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of actas
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class actas extends CI_Model{
  
    private $table_name			= 'actas';
  
  	function __construct()
	{
		parent::__construct();
    }
    
    function retrieveActas()
    {
      $this->db->order_by("ordinal", "desc");
      $query = $this->db->get($this->table_name);
      
      return $query->result();
    }

    function retrieveActasForSort()
    {
      $this->db->select(array('id', 'nombre', 'ordinal'));
      $this->db->order_by("ordinal", "desc");
      $query = $this->db->get($this->table_name);
      
      return $query->result();
    }
    
    function updateActaOrder($acta_id, $order)
    {
      $data = array(
                'ordinal' => $order
             );
      $this->db->where('id', $acta_id);
      $this->db->update($this->table_name, $data);
    }
}
