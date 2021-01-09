<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct(){
		$this->CI =& get_instance();
		parent::__construct();

		$this->load->model('Users_model');
	}

	public function index(){
		$this->load->view('main/login');
	}

	public function refresh(){
		echo '<meta http-equiv="refresh" content="300">';
		$this->load->view('main/login');
	}

	public function login_action(){
		// validasi
		$this->form_validation->set_rules('username', 'Username', 'required',
			array(	'required'	=>	'%s harus diisi'));
		$this->form_validation->set_rules('password', 'Password', 'required',
			array(	'required'	=>	'%s harus diisi'));
		if($this->form_validation->run()) 
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			//proses ke simple login
			$this ->login_utilities->login($username,$password);			
		} 
		//end validasi

		redirect(site_url('Dashboard/'), 'refresh');
	
	}

	public function logout(){

		redirect(site_url('Login'), 'refresh');

	}
}
