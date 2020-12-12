<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function listing(){

		$query = $this->db->query('select * from users inner join gambar_user where users.id_user = gambar_user.id_user;');
		return $query->result();
	}

	//detail users
	public function detail($id_user){

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('users.id_user', $id_user);
		$this->db->join('gambar_user', 'users.id_user = gambar_user.id_user', 'inner');
		$this->db->order_by('users.id_user', 'users.username');
		$query = $this->db->get();
		return $query->row();

	}

	//login
	public function login($username, $password){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('username'	=> $username,
						 	   'password'	=> SHA1($password)));
		$this->db->order_by('id_user', 'username');
		$query = $this->db->get();
		return $query->row();

	}

}