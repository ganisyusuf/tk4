<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('staff_model');
	}

	public function index()
	{
        $data['eoq'] = $this->staff_model->get_eoq();
        $this->load->view('managerView',$data);
    }
    function rop()
	{

        $data['rop'] = $this->staff_model->get_rop();
        $this->load->view('ropView',$data);
    }
}