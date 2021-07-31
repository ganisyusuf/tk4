<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('staff_model');
	}

	public function index()
	{
		if (isset($_SESSION['user_id'])) {
			$user_id = $_SESSION['user_id'];

			$data['user'] = $this->staff_model->get_profile($user_id);
			$this->load->helper('url'); 
			$this->load->view('index', $data);	
		}
		else{
			redirect('staff/login');
		}	
	}
}
