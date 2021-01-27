<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store_produk_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function listing(){
		$query = $this->db->query('select * from produk inner join gambar_produk where produk.id_produk=gambar_produk.id_produk;');
		return $query->result();
	}

	public function detail_produk($id_produk){
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where('produk.id_produk', $id_produk);
		$this->db->join('gambar_produk', 'produk.id_produk = gambar_produk.id_produk', 'inner');
		$this->db->order_by('produk.id_produk', 'produk.id_kategori');
		$query = $this->db->get();
		return $query->row();
	}

}