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
		$this->load->view('loginview',$data);
	}

	function login_post(){

		if (isset($_POST)) {
				$email = $_POST['email'];
				$password= md5($_POST['password']);

				$query = $this->db->query("SELECT * FROM `user` WHERE `email`='$email' AND password='$password'");

				if ($query->num_rows()) {

					$result = $query->result_array();

					$this->session->set_userdata('user_id', $result[0]['id']);

					redirect('staff/dashboard');
				}
				else{
					//invalid credentials
					$this->session->set_flashdata('error', '');
					redirect("staff/login");
				}

		} else {
			die("Invalid Input!");
		}
	}


	function logout(){
		session_destroy();

		redirect('staff/login');
	}
}
