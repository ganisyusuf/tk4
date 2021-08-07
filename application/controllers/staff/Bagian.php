<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagian extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('staff_model');
	}

	public function index()
	{
		$this->load->view('form_1_bagian');
	}


	function bagian_post(){

		if (isset($_POST)) {

			$id_bagian = $_POST['id_bagian'];
			$nama_bagian=$_POST['nama_bagian'];


			try {
				$this->db->query("INSERT INTO `bagian` (`id_bagian`, `nama_bagian`) VALUES
				('$id_bagian', '$nama_bagian')");

				$this->session->set_flashdata('success', 'Selamat Pendaftaran Berhasil!');
				redirect('staff/bagian_tabel');
			} catch(Exception $e) {
				$this->session->set_flashdata('error', 'Pendaftaran Gagal, silahkan dicoba');
				redirect("staff/register");
			}
		} 
	}
}