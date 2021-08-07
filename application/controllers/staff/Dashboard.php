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
		if (isset($_SESSION['id_pegawai'])) {
			$id_pegawai = $_SESSION['id_pegawai'];

			#Get data user dari class staff model menggunakan fungsi get_profile
			$data['pegawai'] = $this->staff_model->get_profile($id_pegawai);
			$this->load->helper('url'); 
			
			// Get role_id user
			// Jika role_id = 1 maka akan masuk ke dashboard user/karyawan, jika role_id = 2 akan masuk ke dashboard management
			foreach($data['pegawai'] as $u) {
				
				if($u->id_bagian == 7){
					$data['bagian'] = $this->staff_model->get_bagian();
					$this->load->helper('url'); 
					$this->load->view('adminView', $data);
				}elseif($u->id_bagian == 8){
					$this->load->view('manageView', $data);
				}elseif($u->id_bagian == 9){
					$this->load->view('gudangView', $data);
				}elseif($u->id_bagian == 10){
					$this->load->view('tukangPesanView', $data);
				}elseif($u->id_bagian == 11){
					$this->load->view('produksiView', $data);
				}
				else{
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
