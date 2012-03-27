<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_model extends CI_Model {

	// Table name
	private $table_name = 'images';
	
	// Fields
	private $id;
	private $obj_class;
	private $obj_id;
	private $path;
	private $file_name; // Origin file name
	private $album;
	private $order;
	
	// Construct
	function __construct(){
		parent::__construct();
	}
	
	// Getters
	function get_id(){
		return $this->id;
	}
	
	function get_obj_class(){
		return $this->obj_class;
	}
	
	function get_obj_id(){
		return $this->obj_id;
	}
	
	function get_path(){
		return $this->path;
	}
	
	function get_file_name(){
		return $this->file_name;
	}
	
	function get_album(){
		return $this->album;
	}
	
	function get_order(){
		return $this->order;
	}
	
	private function get_table_name(){
		return $this->table_name;
	}
	
	// Setters
	function set_id($v){
		$this->id = $v;
	}
	
	function set_obj_class($v){
		$this->obj_class = $v;
	}
	
	function set_obj_id($v){
		$this->obj_id = $v;
	}
	
	function set_path($v){
		$this->path = $v;
	}
	
	function set_file_name($v){
		$this->file_name = $v;
	}
	
	function set_album($v){
		$this->album = $v;
	}
	
	function set_order($v){
		$this->order = $v;
	}
	
	// Methods
	function save(){
		try{
			$data = array(
						obj_class => $this->obj_class,
						obj_id => $this->obj_id,
						path => $this->path,
						file_name => $this->file_name,
						album => $this->album,
						order => $this->order,
					);
			$this->db->insert($this->get_table_name, $data);
			$this->set_id($this->db->insert_id());
			return true;
		}
		catch(Exception $e){
			return false;
		}
	}
	
}