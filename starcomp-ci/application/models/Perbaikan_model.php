<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perbaikan_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function listing(){

		$query = $this->db->query('select * from perbaikan_selesai');
		return $query->result();
	}

	public function detail_perbaikan($id_perbaikan){
		$this->db->select('*');
		$this->db->from('perbaikan_selesai');
		$this->db->where('id_perbaikan', $id_perbaikan);
		$this->db->order_by('id_perbaikan', 'id_kerusakan');
		$query = $this->db->get();
		return $query->row();
	}

}