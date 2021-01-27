<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Store_repair extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('store_model/Store_main_model');
		$this->load->helper(array('url'));

	}

	public function index(){
		$this->load->view('store/repair/index');
	}

}