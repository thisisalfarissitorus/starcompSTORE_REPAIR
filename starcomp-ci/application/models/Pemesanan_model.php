<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function listing(){

		$query = $this->db->query('select * from pemesanan');
		return $query->result();
	}

	//detail users
	public function detail_pemesanan($no_pesan){
		$this->db->select('*');
		$this->db->from('detail_pemesanan');
		$this->db->where('no_pesan', $no_pesan);
		$this->db->order_by('no_pesan', 'id_produk');
		$query = $this->db->get();
		return $query->row();
	}

}