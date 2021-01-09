<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function listing(){

		$query = $this->db->query('select * from produk;');
		//$query = $this->db->query('select * from produk inner join gambar_produk where produk.id_produk=gambar_produk.id_produk;');
		return $query->result();
	}

	//detail users
	public function detail_produk($id_produk){
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where('produk.id_produk', $id_produk);
		$this->db->join('gambar_produk', 'produk.id_produk = gambar_produk.id_produk', 'inner');
		$this->db->order_by('produk.id_produk', 'produk.id_kategori');
		$query = $this->db->get();
		return $query->row();
	}

	public function tambah_produk($data){
		$this->db->insert('produk', $data);
	}

	// tambah gambar
	public function tambah_gambar($data)
	{
		$this->db->insert('gambar_produk', $data);
	}

	public function lastid(){
		$query = $this->db->query("SELECT id_produk FROM produk ORDER BY id_produk DESC LIMIT 1");
		return $query->result();
	}

	public function ganti_produk($data){
		$this->db->where('id_produk', $data['id_produk']);
		$this->db->update('produk', $data);
	}

	public function gambar_produk($id_produk){
		$this->db->select('*');
		$this->db->from('gambar_produk');
		$this->db->where('id_produk', $id_produk);
		$query = $this->db->get();
		return $query->result();
	}

	public function hps_produk($id_produk){
		
		$this->db->from("produk");
		$this->db->join("gambar_produk", "produk.id_produk = gambar_produk.id_produk");
		$this->db->where("produk.id_produk", $id_produk);
		$this->db->delete("produk");
	}


}
