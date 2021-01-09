<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kerusakan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('kerusakan_model');

		//proteksi
		//$this->Login_utilities->cek_login();
	}

	public function index(){
		//untuk memunculkan semua isi database
		$result['kerusakan'] = $this->kerusakan_model->listing();

		$this->load->view('main/kerusakan', $result);

	}

	public function detail_kerusakan($id_kerusakan){
		
		$result['kerusakan'] = $this->kerusakan_model->detail_kerusakan($id_kerusakan);

		$this->load->view('main/viewonly/detail_kerusakan', $result);

	}

	public function hps_kerusakan($id_kerusakan)
	{
		$this->kerusakan->hps_kerusakan($id_kerusakan);

		header("Refresh:0; url=".site_url('Kerusakan/')."");
	}

} 
