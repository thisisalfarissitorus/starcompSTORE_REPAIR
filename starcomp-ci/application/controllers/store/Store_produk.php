<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Store_produk extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('store_model/Store_produk_model');
		$this->load->helper(array('url'));

	}

	public function index(){
		$result['produk'] = $this->Store_produk_model->listing();
		$this->load->view('store/produk/index', $result);
	}

	public function detail_produk($id_produk){
		
		$result['produk'] = $this->Store_produk_model->detail_produk($id_produk);

		$this->load->view('store/prod_detail/index.php', $result);

	}

}