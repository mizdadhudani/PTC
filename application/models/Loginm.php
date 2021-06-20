<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Loginm extends CI_Model{
	private $table = "tb_user";
	public $id_user;
	public $username;
	public $password;
	public $level;
	function login($username, $password) {
		$this->db->where("username = '$username'");
		$this->db->where("password = '$password'");

		$query=$this->db->get("tb_user");
		return $query->row_array();
	}
	function getdata($id) {
	
		
	}
}