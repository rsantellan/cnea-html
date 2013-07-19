<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of institucionespecie
 *
 * @author rodrigo
 */
class institucionunidadesdependientes extends MY_Model{
    
    private $id;
    private $intitucion_id;
    private $nombre;

  
    function __construct()
	{
		parent::__construct();
        $this->setTablename('institucionunidadesdependientes');
    }
}


