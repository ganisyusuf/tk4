<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengambilan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('staff_model');
		$this->load->model('pengambilan_model');
	}

	public function index()
	{
        // $data['pengambilan'] = $this->pengambilan_model->get_pengambilan();
		// $this->load->helper('url'); 
		$this->load->view('pengambilanView');
	}

    function tambah()
	{
		$this->load->view('pengambilan_tambah');
	}


	// function barang_post(){

	// 	if (isset($_POST)) {

	// 		$nama_barang=$_POST['nama_barang'];
    //         $harga_barang=$_POST['harga_barang'];
    //         $biaya_penyimpanan=$_POST['biaya_penyimpanan'];
    //         $periode_permintaan=$_POST['periode_permintaan'];
    //         $satuan = $_POST['satuan'];
	// 		$konversi = $_POST['konversi'];


	// 		try {
	// 			$this->db->query("INSERT INTO `barang` (`nama_barang`, `harga_barang`, `biaya_penyimpanan`, `periode_permintaan`, `satuan`, `konversi`) VALUES
	// 			('$nama_barang', '$harga_barang', '$biaya_penyimpanan', '$periode_permintaan', '$satuan', '$konversi')");

	// 			$this->session->set_flashdata('success', 'Tambah barang berhasil!');
	// 			redirect('staff/barang');
	// 		} catch(Exception $e) {
	// 			$this->session->set_flashdata('error', 'Tambah barang Gagal, silahkan dicoba');
	// 			redirect("staff/barang");
	// 		}
	// 	} 
	// }

	// function update($id_barang) {
	// 	$data['barang'] = $this->staff_model->get_barang_id($id_barang);
	// 	$this->load->helper('url'); 
	// 	$this->load->view('barang_edit', $data);
	// }

	// function barang_update($id_barang){

	// 	if (isset($_POST)) {
	// 		$nama_barang=$_POST['nama_barang'];
    //         $harga_barang=$_POST['harga_barang'];
    //         $biaya_penyimpanan=$_POST['biaya_penyimpanan'];
    //         $periode_permintaan=$_POST['periode_permintaan'];
    //         $satuan = $_POST['satuan'];
	// 		$konversi = $_POST['konversi'];

	// 		try {
	// 			$data = [
	// 				'nama_barang' => $nama_barang,
    //                 'harga_barang' => $harga_barang,
    //                 'biaya_penyimpanan' => $biaya_penyimpanan,
    //                 'periode_permintaan' => $periode_permintaan,
    //                 'satuan' => $satuan,
    //                 'konversi' => $konversi,

	// 			];
	// 			$this->db->where('id_barang', $id_barang);
	// 			$this->db->update('barang', $data);

	// 			$this->session->set_flashdata('success', 'Ubah data berhasil!');
	// 			redirect('staff/barang');
	// 		} catch(Exception $e) {
	// 			echo $e;
	// 			$this->session->set_flashdata('error', 'Ubah data gagal, silahkan dicoba');
	// 			redirect("staff/barang");
	// 		}
	// 	} 
	// }

	// function delete($id_barang) {
	// 	$this->db->where('id_barang', $id_barang);
	// 	$this->db->delete('barang');
	// 	redirect("staff/barang");
	// }

    
}