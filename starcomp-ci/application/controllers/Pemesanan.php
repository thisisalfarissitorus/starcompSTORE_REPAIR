<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('pemesanan_model');

		//proteksi
		//$this->Login_utilities->cek_login();
	}

	public function index(){
		//untuk memunculkan semua isi database
		$result['pemesanan'] = $this->pemesanan_model->listing();

		$this->load->view('main/pemesanan', $result);

	}

	public function detail_pemesanan($no_pesan){

		$result['pemesanan'] = $this->pemesanan_model->detail_pemesanan($no_pesan);

		$this->load->view('main/viewonly/detail_pemesanan', $result);

	}

} 
 
