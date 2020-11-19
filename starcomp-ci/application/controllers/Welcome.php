<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function login(){
		$this->load->view('main/login');
	}

	public function index()
	{
		$this->load->view('main/index');
	}
	public function pembayaran(){
		$this->load->view('main/pembayaran');
	}
	public function produk(){
		$this->load->view('main/produk');
	}
	public function users(){
		$this->load->view('main/users');
	}
	public function pemesanan(){
		$this->load->view('main/pemesanan');
	}
	public function kerusakan(){
		$this->load->view('main/kerusakan');
	}
	public function blank(){
		$this->load->view('errors/blank');
	}
	public function perbaikan(){
		$this->load->view('main/perbaikan');
	}
	public function ganti_produk(){
		$this->load->view('ganti/ganti_produk');
	}
	public function detail_produk(){
		$this->load->view('main/viewonly/detail_produk');
	}
	public function detail_users(){
		$this->load->view('main/viewonly/detail_users');
	}

}
