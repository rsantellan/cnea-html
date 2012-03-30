<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of mail_db
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class mail_db extends MY_Model{
  
  function __construct()
  {
      parent::__construct();
      $this->setTablename('mail_db');
  }
  
  function retrieveContactMailInfo()
  {
    $this->db->where('funcion', 'contacto');
    $query = $this->db->get($this->getTablename());
    $from = array();
    $to = array();
    $cc = array();
    $bcc = array();
    $reply = array();
    
    foreach($query->result() as $row)
    {
      switch ($row->tipo) {
        case "to":
          $to[] = $row->direccion;
          //$to['nombre'] = $row->nombre;
          break;
        case "from":
          $from['direccion'] = $row->direccion;
          $from['nombre'] = $row->nombre;
          break;
        case "cc":
          $cc[] = $row->direccion;
          break;
        case "bcc":
          $bcc[] = $row->direccion;
          break;
        case "reply":
          $reply['direccion'] = $row->direccion;
          $reply['nombre'] = $row->nombre;
          break;
        default:
          break;
      }
    }
    $return = array();
    $return['from'] = $from;
    $return['to'] = $to;
    $return['cc'] = $cc;
    $return['bcc'] = $bcc;
    $return['reply'] = $reply;
    return $return;
  }
  
  public function retrieveAllMailDbData()
  {
    $this->db->order_by("funcion", "desc");
    $query = $this->db->get($this->getTablename());
    $retorno = array();
    $ultimo = "";
    foreach($query->result() as $row)
    {
      if(!isset($retorno[$row->funcion]))
      {
        $retorno[$row->funcion] = array();
      }
      $retorno[$row->funcion][] = $row;
    }
    return $retorno;
  }
}
