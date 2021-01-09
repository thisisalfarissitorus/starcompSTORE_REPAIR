<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('pembayaran_model');

		//proteksi
		//$this->login_utilities->cek_login();
	}

	public function index(){
		//untuk memunculkan semua isi database
		$result['pembayaran'] = $this->pembayaran_model->listing();

		$this->load->view('main/pembayaran', $result);

	}

	public function detail_pembayaran($id_bayar){

		$result['pembayaran'] = $this->pembayaran_model->detail_pembayaran($id_bayar);

		$this->load->view('main/viewonly/detail_pembayaran', $result);
	}

} 
