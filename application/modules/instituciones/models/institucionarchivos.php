<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of institucionespecie
 *
 * @author rodrigo
 */
class institucionarchivos extends MY_Model{
    
    private $id;
    private $intitucion_id;
    private $filename;
    private $filepath;

  
    function __construct()
	{
		parent::__construct();
        $this->setTablename('institucionarchivos');
    }
    
    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getIntitucion_id() {
      return $this->intitucion_id;
    }

    public function setIntitucion_id($intitucion_id) {
      $this->intitucion_id = $intitucion_id;
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
      $data['institucion_id'] = $this->getIntitucion_id();
      $data['filename'] = $this->getFilename();
      $data['filepath'] = $this->getFilepath();
      $this->db->insert($this->getTablename(), $data);
      $id = $this->db->insert_id(); 
      return $id;
    }
    
    public function getByInstitucionId($id)
    {
      $this->db->where('institucion_id', $id);
      $query = $this->db->get($this->getTablename());
      return $query->result();
    }


}


