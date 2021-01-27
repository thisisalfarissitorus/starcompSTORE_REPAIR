<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Store_main extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('store_model/Store_main_model');
		$this->load->helper(array('url'));

	}

	public function index(){
		$result['produk'] = $this->Store_main_model->listing();
		$this->load->view('store/store-main/index', $result);
	}

	public function detail_produk($id_produk){
		
		$result['produk'] = $this->Store_main_model->detail_produk($id_produk);

		$this->load->view('store/prod_detail/index.php', $result);

	}

	public function add_to_cart($id_produk){
		
		$data = array(
				'id_produk' => $produk->$id_produk,
				'nm_produk' => $produk->nm_produk,
				'hrg_produk' => $produk->hrg_produk,
				'jml_pesan' => 1
			);
		$this->cart->insert($data);
	}

	public function show_cart(){
		$this->load->view('store/store-main/cart_test');
	}

	public function about(){
		$this->load->view('store/store-main/about');
	}

}