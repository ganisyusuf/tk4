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
				$email = $_POST['email'];
				#password di hash dengan md5
				$password= md5($_POST['password']);

				#query ke tabel user
				$query = $this->db->query("SELECT * FROM `user` WHERE `email`='$email' AND password='$password'");

				// Beri kondisi, jika email dan password ditemukan maka akan masuk ke halaman dashboard
				if ($query->num_rows()) {

					$result = $query->result_array();

					$this->session->set_userdata('user_id', $result[0]['id']);

					redirect('staff/dashboard');
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
