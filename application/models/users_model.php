<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Users_model extends CI_Model{

	function add_user($user){
		$salt="pelmeni";
		$password=md5($salt.$user["password"]);
		$data=array(
			'name'=>$user["name"],
			'surname'=>$user["surname"],
			'email'=>$user["email"],
			'password'=>$password,
			'sex'=>$user["sex"],
			'yearofbirth'=>$user["year_of_birth"]
		);
		$this->db->insert('users', $data); 
	}
	function login($user){
		$salt="pelmeni";
		$password=md5($salt.$user["password"]);
		$data=array('email'=>$user["email"],
			'password'=>$password
		);
		$this->db->select()->from('users')->where($data);
		$query=$this->db->get();
		return $query->first_row('array');
	}
}