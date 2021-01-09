<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('produk_model');
		$this->load->helper(array('url'));

		//proteksi
		//$this->Login_utilities->cek_login();
	}

	public function index(){
		//untuk memunculkan semua isi database
		$result['produk'] = $this->produk_model->listing();

		$this->load->view('main/produk', $result);

	}

	public function detail_produk($id_produk){
		
		$result['produk'] = $this->produk_model->detail_produk($id_produk);

		$this->load->view('main/viewonly/detail_produk', $result);

	}

	public function ganti_produk($id_produk){
		//tangkap id produk
		$result['produk'] = $this->produk_model->detail_produk($id_produk);
		//buka halaman ganti produk dan memunculkan id produk
		$this->load->view('ganti/ganti_produk', $result);

	}

	public function ganti_action($id_produk){

		$nm_produk = $this->input->post('nm_produk');
		$id_kategori = $this->input->post('id_kategori');
		$nm_kategori = $this->input->post('nm_kategori');
		$merk 		= $this->input->post('merk');
		$stok_produk = $this->input->post('stok_produk');
		$hrg_produk = $this->input->post('hrg_produk');
		$deskripsi = $this->input->post('deskripsi');

		$data = array(
				'id_produk' => $this->input->post('id_produk'), 
				'nm_produk' => $nm_produk,
				'id_kategori' => $id_kategori,
				'nm_kategori' => $nm_kategori,
				'merk' => $merk, 
				'stok_produk' => $stok_produk,
				'hrg_produk' => $hrg_produk, 
				'deskripsi' => $deskripsi
			);
		$this->produk_model->ganti_produk($data);

		header("Refresh:0; url=".site_url('Produk/')."");
	}

	public function tambah_produk(){
		$this->produk_model->lastid();
		$this->load->view('tambah/tambah_produk');
	}


	public function tambah_action(){

		$image_path = realpath(APPPATH . '../assets/img/produk');
        $config['upload_path'] = $image_path;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar_produk')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('tambah/tambah_produk', $error);
        } else {
            $data = array('image_metadata' => $this->upload->data());
        }


		$id_produk = $this->input->post('id_produk');
		$nm_produk = $this->input->post('nm_produk');
		$id_kategori = $this->input->post('id_kategori');
		$nm_kategori = $this->input->post('nm_kategori');
		$merk 		= $this->input->post('merk');
		$stok_produk = $this->input->post('stok_produk');
		$hrg_produk = $this->input->post('hrg_produk');
		$deskripsi = $this->input->post('deskripsi');

		$data = array(
				'id_produk' => $id_produk,
				'nm_produk' => $nm_produk,
				'id_kategori' => $id_kategori,
				'nm_kategori' => $nm_kategori,
				'merk' => $merk, 
				'stok_produk' => $stok_produk,
				'hrg_produk' => $hrg_produk, 
				'deskripsi' => $deskripsi
			);
		$this->produk_model->tambah_produk($data);

		header("Refresh:0; url=".site_url('Produk/')."");
	}

	public function tambah_produk_refresh(){
		header("Refresh:0; url=".site_url('produk/tambah_produk/')."");
	}

	public function gambar_produk($id_produk){
		$produk = $this->Produk_model->detail_produk($id_produk);
		$gambar = $this->Produk_model->gambar_produk($id_produk);

		$valid = $this->form_validation;

		$valid->set_rules('namafilegambar', 'Nama Gambar', 'required', array('required' => '%s harus diisi'));
		if ($valid->run()) {
			$config['upload_path'] 		= '.assets/img/produk/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']			= '2400';
			$config['max_width']		= '2024';
			$config['max_height']		= '2024';

			$this->load->library('upload', $config);

			if (! $this->upload->do_upload('namafilegambar')) {
				$data = array(
					'title'		=> 'Tambah Gambar Produk: '. $produk->nama_produk,
					'produk'    => $produk,
					'gambar'	=> $gambar,
					'error'		=> $this->upload->display_errors()

							);
			}
		}


	}

	public function hps_produk($id_produk){
			$this->produk_model->hps_produk($id_produk);

			header("Refresh:0; url=".site_url('Produk/')."");
	}
}