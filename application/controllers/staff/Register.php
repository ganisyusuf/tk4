<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function index()
	{
		$this->load->view('staffPanel/registrasi');
	}

    function register_post(){

		if (isset($_POST)) {

			function generateRandomString($length = 10) {
				return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
			}

			$nama=$_POST['nama'];
			$nik=$_POST['nik'];
			$hp=$_POST['no_hp'];
			$email=$_POST['email'];
			$alamat=$_POST['alamat'];
			$jabatan=$_POST['jabatan'];
			$jenisKelamin=$_POST['jenis_kelamin'];
			$id = generateRandomString(10);


			$password = md5($this->input->post('password'));

			try {
				$this->db->query("INSERT INTO `user` (`id`, `name`, `phone_number`, `email`, `password`, `is_active`, `role_id`,`alamat`, `jabatan`, `nik`, `jenis_kelamin`) VALUES
				('$id', '$nama', '$hp', '$email', '$password', '1', '1', '$alamat', '$jabatan', '$nik', '$jenisKelamin')");

				$this->session->set_flashdata('success', 'Selamat Pendaftaran Berhasil!');
				redirect('staff/login');
			} catch(Exception $e) {
				$this->session->set_flashdata('error', 'Pendaftaran Gagal, silahkan dicoba');
				redirect("staff/register");
			}
		} 
	}
}

