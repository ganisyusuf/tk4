<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengambilan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('staff_model');
		$this->load->model('pengambilan_model');
	}

	public function index()
	{
        $data['pengambilan'] = $this->pengambilan_model->get_pengambilan();
		$this->load->helper('url'); 
		$this->load->view('pengambilanView',$data);
	}
	
    function tambah()
	{
        $data['barang'] = $this->staff_model->get_barang();
		$this->load->view('pengambilan_tambah', $data);
	}


	function pengambilan_post(){

		if (isset($_POST)) {

			$nama_pengambil=$_POST['nama_pengambil'];
            $id_barang=$_POST['id_barang'];
            $jumlah_pengambilan=$_POST['jumlah_pengambilan'];

			try {
				$this->db->query("INSERT INTO `pengambilan` (`nama_pengambil`, `id_barang`, `jumlah_pengambilan`) VALUES
				('$nama_pengambil', '$id_barang', '$jumlah_pengambilan')");

				$this->session->set_flashdata('success', 'Tambah data berhasil!');
				redirect('staff/pengambilan');
			} catch(Exception $e) {
				$this->session->set_flashdata('error', 'Tambah data Gagal, silahkan dicoba');
				redirect("staff/pengambilan");
			}
		} 
	}
    
}