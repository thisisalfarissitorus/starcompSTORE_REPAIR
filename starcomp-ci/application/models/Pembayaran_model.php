<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function listing(){

		$query = $this->db->query('select * from pembayaran inner join gambar_bayar where pembayaran.id_bayar = gambar_bayar.id_bayar;');
		return $query->result();
	}

	//detail users
	public function detail_pembayaran($id_bayar){
		$this->db->select('*');
		$this->db->from('pembayaran');
		$this->db->where('pembayaran.id_bayar', $id_bayar);
		$this->db->join('gambar_bayar', 'pembayaran.id_bayar = gambar_bayar.id_bayar', 'inner');
		$this->db->order_by('pembayaran.id_bayar');
		$query = $this->db->get();
		return $query->row();
	}

}