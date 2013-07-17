<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of institucion
 *
 * @author rodrigo
 */
class institucion extends MY_Model{
  
    private $id;
    private $nombreInsititucion;
    private $razonSocial;
    private $rut;
    private $naturaleza;
    private $primernivel;
    private $segundonivel;
    private $tercernivel;
    private $domicilioinstitucional;
    private $domiciliofiscal;
    private $tipoEstablecimiento;
    private $observacionesComite;
    private $nombreContacto;
    private $mailContacto;
    private $telContacto;
    
    function __construct()
	{
		parent::__construct();
        $this->setTablename('institucion');
    }
}


