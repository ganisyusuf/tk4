<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagian extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('staff_model');
	}

	public function index()
	{
		$data['bagian'] = $this->staff_model->get_bagian();
		$this->load->helper('url'); 
		$this->load->view('bagianView',$data);
	}

	function tambah()
	{
		$this->load->view('bagian_tambah');
	}


	function bagian_post(){

		if (isset($_POST)) {

			$id_bagian = $_POST['id_bagian'];
			$nama_bagian=$_POST['nama_bagian'];


			try {
				$this->db->query("INSERT INTO `bagian` (`id_bagian`, `nama_bagian`) VALUES
				('$id_bagian', '$nama_bagian')");

				$this->session->set_flashdata('success', 'Selamat Pendaftaran Berhasil!');
				redirect('staff/bagian');
			} catch(Exception $e) {
				$this->session->set_flashdata('error', 'Pendaftaran Gagal, silahkan dicoba');
				redirect("staff/bagian");
			}
		} 
	}

	function update($id_bagian) {
		$data['bagian'] = $this->staff_model->get_bagian_id($id_bagian);
		$this->load->helper('url'); 
		$this->load->view('bagian_edit', $data);
	}

	function bagian_update($id_bagian){

		if (isset($_POST)) {
			$nama_bagian = $_POST['nama_bagian'];

			try {
				$data = [
					'nama_bagian' => $nama_bagian,
				];
				$this->db->where('id_bagian', $id_bagian);
				$this->db->update('bagian', $data);

				$this->session->set_flashdata('success', 'Ubah data berhasil!');
				redirect('staff/bagian');
			} catch(Exception $e) {
				echo $e;
				$this->session->set_flashdata('error', 'Ubah data gagal, silahkan dicoba');
				redirect("staff/bagian");
			}
		} 
	}

	function delete($id_bagian) {
		$this->db->where('id_bagian', $id_bagian);
		$this->db->delete('bagian');
		redirect("staff/bagian");
	}
}