<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('pesanan_model');
        $this->load->model('staff_model');
	}

	public function index()
	{
        $data['pemesanan'] = $this->pesanan_model->get_pesanan();
		$this->load->helper('url'); 
		$this->load->view('pesananView',$data);
	}

    function tambah()
	{
        $data['barang'] = $this->staff_model->get_barang();
		$this->load->view('pesanan_tambah',$data);
	}

	function pesanan_post(){

		if (isset($_POST)) {

			$nama_pemesan=$_POST['nama_pemesan'];
            $id_barang=$_POST['id_barang'];
            $jumlah_pesanan=$_POST['jumlah_pesanan'];
            $lead_time=$_POST['lead_time'];


			try {
				$this->db->query("INSERT INTO `pemesanan` (`nama_pemesan`, `id_barang`, `jumlah_pesanan`, `lead_time`) VALUES
				('$nama_pemesan', '$id_barang', '$jumlah_pesanan', '$lead_time')");

				$this->session->set_flashdata('success', 'Tambah data berhasil!');
				redirect('staff/pesanan');
			} catch(Exception $e) {
				$this->session->set_flashdata('error', 'Tambah data Gagal, silahkan dicoba');
				redirect("staff/pesanan");
			}
		} 
	}

	function update($id_pesanan) {
		$data['pemesanan'] = $this->pesanan_model->get_pesanan_id($id_pesanan);
		$data['barang'] = $this->staff_model->get_barang();
		$this->load->helper('url'); 
		$this->load->view('pakai_edit', $data);
	}

	function pakai_update($id_pesanan){

		if (isset($_POST)) {
			$pakai=$_POST['pakai'];
			try {
				$data = [
					'pakai' => $pakai

				];
				$this->db->where('id_pesanan', $id_pesanan);
				$this->db->update('pemesanan', $data);

				$this->session->set_flashdata('success', 'Ubah data berhasil!');
				redirect('staff/pesanan');
			} catch(Exception $e) {
				echo $e;
				$this->session->set_flashdata('error', 'Ubah data gagal, silahkan dicoba');
				redirect("staff/pesanan");
			}
		} 
	}

	// function delete($id_barang) {
	// 	$this->db->where('id_barang', $id_barang);
	// 	$this->db->delete('barang');
	// 	redirect("staff/barang");
	// }
}