<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perbaikan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('perbaikan_model');

		//proteksi
		//$this->Login_utilities->cek_login();
	}

	public function index(){
		//untuk memunculkan semua isi database
		$result['perbaikan'] = $this->perbaikan_model->listing();

		$this->load->view('main/perbaikan', $result);

	}

	public function detail_perbaikan($id_perbaikan){

		$result['perbaikan'] = $this->perbaikan_model->detail_perbaikan($id_perbaikan);

		$this->load->view('main/viewonly/detail_perbaikan', $result);

	}

} 
