<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store_bayar extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('store_model/Store_bayar_model');
		$this->load->helper(array('url'));
	}

	public function index(){
		$result['produk'] = $this->Store_bayar_model->listing();
		$this->load->view('store/bayar/index', $result);
	}
}