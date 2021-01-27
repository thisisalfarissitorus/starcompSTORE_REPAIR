<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store_keranjang_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function listing(){
		$query = $this->db->query('select * from produk inner join gambar_produk where produk.id_produk=gambar_produk.id_produk and produk.id_produk = "PRO0001"');
		return $query->result();
	}


}