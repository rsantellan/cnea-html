<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of instituciondocenteinvestigador
 *
 * @author rodrigo
 */
class instituciondocenteinvestigador extends MY_Model{
    
    private $id;
    private $intitucion_id;
    private $nombre;
    private $profesion;
    private $ocupacion;
    
    function __construct()
	{
		parent::__construct();
        $this->setTablename('instituciondocenteinvestigador');
    }
}


