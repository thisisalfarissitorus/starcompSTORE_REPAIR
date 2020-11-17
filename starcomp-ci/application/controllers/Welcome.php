<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index');
	}
	public function keranjang(){
		$this->load->view('keranjang');
	}
	public function produk(){
		$this->load->view('produk');
	}
	public function users(){
		$this->load->view('users');
	}
	public function pemesanan(){
		$this->load->view('pemesanan');
	}
	public function pembelian(){
		$this->load->view('pembelian');
	}
	public function blank(){
		$this->load->view('blank');
	}

}
