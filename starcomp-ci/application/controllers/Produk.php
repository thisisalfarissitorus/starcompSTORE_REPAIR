<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('produk_model');

		//proteksi
		//$this->simple_login->cek_login();
	}

	public function index(){
		//untuk memunculkan semua isi database
		$result['produk'] = $this->produk_model->listing();

		$this->load->view('main/produk', $result);

	}

	public function detail_produk($id_produk){
		
		$result['produk'] = $this->produk_model->detail_produk($id_produk);

		$this->load->view('main/viewonly/detail_produk', $result);

	}

	public function ganti_produk($id_produk){
		//tangkap id produk
		$result['produk'] = $this->produk_model->detail_produk($id_produk);
		//buka halaman ganti produk dan memunculkan id produk
		$this->load->view('ganti/ganti_produk', $result);

		

	}

	public function tambah_produk(){

		$this->load->view('tambah/tambah_produk');
	}

} 
