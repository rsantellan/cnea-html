<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of institucionsociedadcivil
 *
 * @author rodrigo
 */
class institucionsociedadcivil extends MY_Model{
    
    private $id;
    private $intitucion_id;
    private $nombre;
    private $profesion;
    private $ocupacion;
    
    function __construct()
	{
		parent::__construct();
        $this->setTablename('institucionsociedadcivil');
    }
}


