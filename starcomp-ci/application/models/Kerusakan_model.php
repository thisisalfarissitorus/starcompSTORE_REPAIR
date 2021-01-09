<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kerusakan_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function listing(){

		$query = $this->db->query('select * from kerusakan inner join gambar_kerusakan where kerusakan.id_kerusakan = gambar_kerusakan.id_kerusakan;');
		return $query->result();
	}

	//detail users
	public function detail_kerusakan($id_kerusakan){
		$this->db->select('*');
		$this->db->from('kerusakan');
		$this->db->where('kerusakan.id_kerusakan', $id_kerusakan);
		$this->db->join('gambar_kerusakan', 'kerusakan.id_kerusakan = gambar_kerusakan.id_kerusakan', 'inner');
		$this->db->order_by('kerusakan.id_kerusakan', 'kerusakan.id_user');
		$query = $this->db->get();
		return $query->row();
	}

	public function hps_kerusakan($id_kerusakan)
	{
		$this->db->from("kerusakan");
		$this->db->join("gambar_kerusakan", "kerusakan.id_kerusakan
		 = gambar_kerusakan.id_kerusakan");
		$this->db->where("kerusakan.id_kerusakan", $id_kerusakan);
		$this->db->delete("kerusakan");
	}

}