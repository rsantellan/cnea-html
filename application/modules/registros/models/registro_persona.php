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
class registro_persona extends MY_Model{
  
    //private $table_name			= 'actas';
  
    private $id;
    private $nombre;
	private $code;
	private $email;
	
    
    function __construct()
	{
		parent::__construct();
        $this->setTablename('registro_persona');
    }

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getNombre() {
      return $this->nombre;
    }

    public function setNombre($nombre) {
      $this->nombre = $nombre;
    }    
    
	public function getCode() {
	  return $this->code;
	}

	public function setCode($code) {
	  $this->code = $code;
	}

	public function getEmail() {
	  return $this->email;
	}

	public function setEmail($email) {
	  $this->email = $email;
	}

	function retrieveRegistros($number = NULL, $offset = NULL, $returnObjects = FALSE)
    {
      $this->db->order_by("ordinal", "desc");
      $query = null;
      if(is_null($number))
      {
        $query = $this->db->get($this->getTablename());
      }
      else
      {
        $query = $this->db->get($this->getTablename(), $number, $offset);
      }
      if(!$returnObjects)
      {
        return $query->result();
      }
      else
      {
        $salida = array();
        foreach($query->result() as $obj)
        {
          $aux = new registro_persona();
          $aux->setId($obj->id);
          $aux->setNombre($obj->name);
          $aux->setCode($obj->code);
		  $aux->setEmail($obj->email);
          $salida[] = $aux;
        }
        return $salida;
      }
    }

    function retrieveRegistrosForSort()
    {
      $this->db->select(array('id', 'name', 'ordinal'));
      $this->db->order_by("ordinal", "desc");
      $query = $this->db->get($this->getTablename());
      
      return $query->result();
    }
    
    function updateOrder($acta_id, $order)
    {
      $data = array(
                'ordinal' => $order
             );
      $this->db->where('id', $acta_id);
      $this->db->update($this->getTablename(), $data);
    }
    
    
    function retrieveLastOrder()
    {
      $this->db->select_max('ordinal');
      $query = $this->db->get($this->getTablename());
      $result = $query->result('array');
      return ((int)$result[0]['ordinal'] + 1);
    }
    
    public function isNew(){
      if($this->getId() == "" || is_null($this->getId()))
      {
        return true;
      }
    }
    
    public function save()
    {
      if($this->isNew())
      {
        return $this->saveNew();
      }
      else
      {
        return $this->edit();
      }
    }
    
    private function saveNew()
    {
      $data = array();
      $data["name"] = $this->getNombre();
      $data["ordinal"] = $this->retrieveLastOrder();
	  $data["code"] = $this->getCode();
	  $data["email"] = $this->getEmail();
      $this->db->insert($this->getTablename(), $data);
      $id = $this->db->insert_id(); 
      return $id;
    }
    
    private function edit()
    {
	  $data = array();
      $data["name"] = $this->getNombre();
      $data["code"] = $this->getCode();
	  $data["email"] = $this->getEmail();
      $this->db->where('id', $this->getId());
      $this->db->update($this->getTablename(), $data);
      
      return $this->getId();
    }
    
    public function getById($id, $return_obj = true)
    {
      $this->db->where('id', $id);
      $this->db->limit('1');
      $query = $this->db->get($this->getTablename());
      if( $query->num_rows() == 1 ){
        // One row, match!
        $obj = $query->row();        
        if($return_obj)
        {
          $aux = new registro_persona();
          $aux->setId($obj->id);
          $aux->setNombre($obj->name);
          $aux->setCode($obj->code);
		  $aux->setEmail($obj->email);
          return $aux;
        }
        return $obj;
      } else {
        // None
        return NULL;
      }
    }
    
    public function getObjectClass()
    {
      return get_class($this);
    }
    
    public function hasAvatar($albumName = "default")
    {
      if(!is_null($this->getId()) && $this->getId() != "")
      {
        $ci = &get_instance();
        $ci->load->model("upload/album");
        return $ci->album->albumHasAvatar($this->getId(), $this->getObjectClass(), $albumName);
      }
      return false;
    }
    
    public function retrieveAvatar($albumName = "default", $id = NULL)
    {
      if(!is_null($id)) $this->setId($id);
      
      if(!is_null($this->getId()) && $this->getId() != "")
      {
        $ci = &get_instance();
        $ci->load->model("upload/album");
        return $ci->album->retrieveAlbumAvatar($this->getId(), $this->getObjectClass(), $albumName);
      }
      return NULL;      
    }
}
