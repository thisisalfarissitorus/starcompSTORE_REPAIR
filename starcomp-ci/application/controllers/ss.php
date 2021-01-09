<?php

public function gambar($id_produk)
	{
		$produk = $this->Produk_model->detail_produk($id_produk);
		$gambar = $this->Produk_model->gambar_produk($id_produk);
		$valid 	= $this->form_validation;

		$valid->set_rules('judul_gambar', 'Nama Gambar', 'required',
			array( 'required'	=> '%s harus diisi'));

		if ($valid->run()) {
			
			$config['upload_path'] 		= './assets/img/produk/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '2400';
			$config['max_width'] 		= '2024';
			$config['max_height']  		= '2024';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){	

				// end validasi
		$data = array(	'title' 	=> 'Tambah Gambar Produk: '.$produk->nama_produk,
						'produk'	=> $produk,
						'gambar'	=> $gambar,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/produk/gambar'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		}else{
			$upload_gambar = array('upload_data' => $this->upload->data());
			//create tumbhnail
			$config['image_library'] 	= 'gd2';
			$config['source_image'] 	= './assets/upload/images/'.$upload_gambar['upload_data']['file_name'];
			//lokasi folder thumbnail
			$config['new_image']		= './assets/uploas/images/thumbs/';
			$config['create_thumb'] 	= TRUE;
			$config['maintain_ratio'] 	= TRUE;
			$config['width']         	= 250;//pixel
			$config['height']       	= 250;
			$config['thumb_marker']     = '';

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();
			//end create thumbnail
			$i= $this->input;
			
			$data= array(	'id_produk'		=> $id_produk,
							'judul_gambar'	=> $i->post('judul_gambar'),
							//disimpan nama file gmbarnya
							'gambar' 		=> $upload_gambar['upload_data']['file_name'],
							);
			$this->produk_model->tambah_gambar($data);
			$this->session->set_flashdata('sukses', 'Gambar Telah ditambahkan');
			redirect(base_url('admin/produk/gambar/'.$id_produk),'refresh');

		}}
		// end masuk database
		$data = array(	'title' 	=> 'Tambah Gambar Produk: '.$produk->nama_produk,
						'produk'	=> $produk,
						'gambar'	=> $gambar,
						'isi'		=> 'admin/produk/gambar'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

}
?>