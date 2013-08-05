<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of instituciondocenteinvestigador
 *
 * @author rodrigo
 */
class institucionveterinario extends MY_Model{
    
    private $id;
    private $intitucion_id;
    private $nombre;
    private $profesion;
    private $ocupacion;
    
    function __construct()
	{
		parent::__construct();
        $this->setTablename('institucionveterinario');
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

    public function getNombre() {
      return $this->nombre;
    }

    public function setNombre($nombre) {
      $this->nombre = $nombre;
    }

    public function getProfesion() {
      return $this->profesion;
    }

    public function setProfesion($profesion) {
      $this->profesion = $profesion;
    }

    public function getOcupacion() {
      return $this->ocupacion;
    }

    public function setOcupacion($ocupacion) {
      $this->ocupacion = $ocupacion;
    }


}


