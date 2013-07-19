<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of institucionespecie
 *
 * @author rodrigo
 */
class institucionespecie extends MY_Model{
    
    private $id;
    private $intitucion_id;
    private $nombre;
    private $observacion;
    private $es_cria;
    private $es_uso;
  
    function __construct()
	{
		parent::__construct();
        $this->setTablename('institucionespecie');
    }
}


