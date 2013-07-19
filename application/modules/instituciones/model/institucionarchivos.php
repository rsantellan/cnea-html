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
}


