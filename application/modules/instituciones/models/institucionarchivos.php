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


}


