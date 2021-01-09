<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('users_model');

		//proteksi
		//$this->Login_utilities->cek_login();
	}

	public function index(){
		//untuk memunculkan semua isi database
		$result['user'] = $this->users_model->listing();

		$this->load->view('main/users', $result);

	}

	public function detail($id_user){

		$result['user'] = $this->users_model->detail($id_user);

		$this->load->view('main/viewonly/detail_users', $result);

	}

}