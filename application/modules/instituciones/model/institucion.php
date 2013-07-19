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
    private $nombreinsititucion;
    private $razonsocial;
    private $rut;
    private $naturaleza;
    private $primernivel;
    private $segundonivel;
    private $tercernivel;
    private $domicilioinstitucional;
    private $domiciliofiscal;
    private $tipoestablecimiento;
    private $observacionescomite;
    private $nombrecontacto;
    private $mailcontacto;
    private $telcontacto;
    private $password;
    private $cvfilename;
    private $cvfilepath;
    
    
    function __construct()
	{
		parent::__construct();
        $this->setTablename('institucion');
    }
}


