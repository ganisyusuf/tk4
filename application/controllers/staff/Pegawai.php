<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('staff_model');
	}

	public function index()
	{
        $data['pegawai'] = $this->staff_model->get_pegawai();
		$this->load->helper('url'); 
		$this->load->view('pegawaiView', $data);
	}

    function tambah()
	{
        $data['bagian'] = $this->staff_model->get_bagian();
		$this->load->view('pegawai_tambah', $data);
	}


	function pegawai_post(){

		if (isset($_POST)) {

			$id_pegawai=$_POST['id_pegawai'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $nama_pegawai=$_POST['nama_pegawai'];
            $alamat_pegawai = $_POST['alamat_pegawai'];
			$hp_pegawai = $_POST['hp_pegawai'];
            $id_bagian = $_POST['id_bagian'];



			try {
				$this->db->query("INSERT INTO `pegawai` (`id_pegawai`, `username`, `password`, `nama_pegawai`, `alamat_pegawai`, `hp_pegawai`, `id_bagian`) VALUES
				('$id_pegawai', '$username', '$password', '$nama_pegawai', '$alamat_pegawai', '$hp_pegawai', '$id_bagian')");

				$this->session->set_flashdata('success', 'Tambah data berhasil!');
				redirect('staff/pegawai');
			} catch(Exception $e) {
				$this->session->set_flashdata('error', 'Tambah data Gagal, silahkan dicoba');
				redirect("staff/pegawai");
			}
		} 
	}

	function update($id_pegawai) {
		$data['pegawai'] = $this->staff_model->get_profile($id_pegawai);
		$data['bagian'] = $this->staff_model->get_bagian();
		$this->load->helper('url'); 
		$this->load->view('pegawai_edit', $data);
	}

	function pegawai_update($id_pegawai){

		if (isset($_POST)) {
			$username=$_POST['username'];
            $password=$_POST['password'];
            $nama_pegawai=$_POST['nama_pegawai'];
            $alamat_pegawai=$_POST['alamat_pegawai'];
            $hp_pegawai = $_POST['hp_pegawai'];
			$id_bagian = $_POST['id_bagian'];

			try {
				$data = [
					'username' => $username,
                    'password' => $password,
                    'nama_pegawai' => $nama_pegawai,
                    'alamat_pegawai' => $alamat_pegawai,
                    'hp_pegawai' => $hp_pegawai,
                    'id_bagian' => $id_bagian,

				];
				$this->db->where('id_pegawai', $id_pegawai);
				$this->db->update('pegawai', $data);

				$this->session->set_flashdata('success', 'Ubah data berhasil!');
				redirect('staff/pegawai');
			} catch(Exception $e) {
				echo $e;
				$this->session->set_flashdata('error', 'Ubah data gagal, silahkan dicoba');
				redirect("staff/pegawai");
			}
		} 
	}

	function delete($id_pegawai) {
		$this->db->where('id_pegawai', $id_pegawai);
		$this->db->delete('pegawai');
		redirect("staff/pegawai");
	}
}