<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$data=[];
		if (isset($_SESSION['error'])) {
			$data['error']=$_SESSION['error'];
		}else{
			$data['error']="NO_ERROR";
		}

		$this->load->helper('url');
		#Menampilkan halaman loginview
		$this->load->view('loginview',$data);
	}

	// Fungsi untuk post login
	function login_post(){

		if (isset($_POST)) {
				$username = $_POST['username'];
				#password di hash dengan md5
				$password= $_POST['password'];

				#query ke tabel user
				$query = $this->db->query("SELECT * FROM `pegawai` WHERE `username`='$username' AND password='$password'");

				// Beri kondisi, jika email dan password ditemukan maka akan masuk ke halaman dashboard
				if ($query->num_rows()) {

					while($result = $query->result_array()) {
					// {
					// 	$data [] = $result;
					// }
					// return $data;

					$this->session->set_userdata('id_pegawai', $result[0]['id_pegawai']);

					redirect('staff/dashboard');
					}
				}
				// jika email dan password salah maka akan gagal login dan menampilkan pesan error
				else{
					//invalid credentials
					$this->session->set_flashdata('error', 'Invalid Email/Password');
					redirect("staff/login");
				}

		} else {
			die("Invalid Input!");
		}
	}

	// Fungsi untuk Logout, jika berhasil logout maka dikembalikan ke halaman login
	function logout(){
		session_destroy();

		redirect('staff/login');
	}
}
