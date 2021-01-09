<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('produk_model');
		$this->load->model('users_model');
		$this->load->model('kerusakan_model');

		//proteksi
		//$this->login_utilities->cek_login();
	}

	public function index()
	{
		$result['produk'] 		= $this->produk_model->listing();
		$result['user'] 		= $this->users_model->listing();
		$result['kerusakan'] 	= $this->kerusakan_model->listing();

		$this->load->view('main/index', $result, $result, $result);
	}

}
