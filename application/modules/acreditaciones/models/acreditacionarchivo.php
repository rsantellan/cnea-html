<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of acreditacionarchivo
 *
 * @author rodrigo
 */
class acreditacionarchivo extends MY_Model{
    
    private $id;
    private $acreditacion_id;
    private $filename;
    private $filepath;
    private $type;

  
    function __construct()
	{
		parent::__construct();
        $this->setTablename('acreditacionarchivo');
    }
    
    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    

    public function getFilename() {
      return $this->filename;
    }

    public function setFilename($filename) {
      $this->filename = $filename;
    }

    public function getFilepath() {
      return $this->filepath;
    }

    public function setFilepath($filepath) {
      $this->filepath = $filepath;
    }
	
	public function getAcreditacion_id() {
	  return $this->acreditacion_id;
	}

	public function setAcreditacion_id($acreditacion_id) {
	  $this->acreditacion_id = $acreditacion_id;
	}

	public function getType() {
	  return $this->type;
	}

	public function setType($type) {
	  $this->type = $type;
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
      $data['acreditacion_id'] = $this->getAcreditacion_id();
      $data['filename'] = $this->getFilename();
      $data['filepath'] = $this->getFilepath();
	  $data["type"] = $this->getType();
      $this->db->insert($this->getTablename(), $data);
      $id = $this->db->insert_id(); 
      return $id;
    }
    
    public function getByAcreditacionId($id)
    {
	  $this->db->order_by('type', 'desc');
      $this->db->where('acreditacion_id', $id);
      $query = $this->db->get($this->getTablename());
      return $query->result();
    }

    public function deleteAllById($id)
    {
      $archivo = $this->simpleGetById($id);
      @unlink($archivo->filepath.$archivo->filename);
      $this->db->where('id', $id);
      return $this->db->delete($this->getTablename());
    }
    

}


