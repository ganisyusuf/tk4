<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('staff_model');
	}

	public function index()
	{
		#Jika data user ditemukan maka akan masuk ke halaman dashboard
		if (isset($_SESSION['user_id'])) {
			$user_id = $_SESSION['user_id'];

			#Get data user dari class staff model menggunakan fungsi get_profile
			$data['user'] = $this->staff_model->get_profile($user_id);
			$this->load->helper('url'); 
			
			foreach($data['user'] as $u) {
				if($u->role_id == 1){
					$this->load->view('karyawan_view', $data);
				}elseif($u->role_id == 2){
					$this->load->view('index', $data);
				}else{
					redirect('staff/login');
				}
			}
		}
		#Jika data tidak ditemukan akan masuk ke halaman login
		else{
			redirect('staff/login');
		}	
	}
}
