<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('staff_model');
	}

	public function index()
	{

		// $this->load->view('stockView');
        $data['stock'] = $this->staff_model->get();
        $this->load->view('stockView',$data);
    }
}