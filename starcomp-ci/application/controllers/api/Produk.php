<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Produk extends REST_Controller {

    

	  /**

     * Get All Data from this method.

     *

     * @return Response

    */

    public function __construct() {

       parent::__construct();

      $this->load->database();

    }

       

    /**

     * Get All Data from this method.

     *

     * @return Response

    */

	public function index_get($id_produk = NULL)

	{ 

        if(!empty($id_produk)){

            $data = $this->db->get_where("produk", ['id_produk' => $id_produk])->row_array();

        }else{
            $data['produk'] = $this->db->get("produk")->result();
        }

     
        $this->response($data, REST_Controller::HTTP_OK);

	}

      

    /**

     * Get All Data from this method.

     *

     * @return Response

    */

    public function index_post()

    {

        $input = array(
            'id_produk' => $this->input->post('id_produk'), 
            'nm_produk' => $this->input->post('nm_produk'),
            'id_kategori' => $this->input->post('id_kategori'),
            'nm_kategori' => $this->input->post('nm_kategori'),
            'merk' => $this->input->post('merk'),
            'stok_produk' => $this->input->post('stok_produk'),
            'hrg_produk' => $this->input->post('hrg_produk'),
            'deskripsi' => $this->input->post('deskripsi')
                    );

        $this->db->set($input); 
        $this->db->insert('produk',$input);
     
        $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);

    } 

     

    /**

     * Get All Data from this method.

     *

     * @return Response

    */

    public function index_put($id_produk)

    {

        $input = array(
            'nm_produk' => $this->input->post('nm_produk'),
            'id_kategori' => $this->input->post('id_kategori'),
            'nm_kategori' => $this->input->post('nm_kategori'),
            'merk' => $this->input->post('merk'),
            'stok_produk' => $this->input->post('stok_produk'),
            'hrg_produk' => $this->input->post('hrg_produk'),
            'deskripsi' => $this->input->post('deskripsi')
                    );
        $this->db->set($input);

        $this->db->update('produk', $input, array('id_produk'=>$id_produk));

     

        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);

    }

     

    /**

     * Get All Data from this method.

     *

     * @return Response

    */

    public function index_delete($id_produk)

    {

        $this->db->delete('produk', array('id_produk'=>$id_produk));

       

        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);

    }

    	

}
