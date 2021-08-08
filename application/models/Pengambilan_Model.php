<?php 
 
class Pengambilan_Model extends CI_Model{

	function get_pengambilan() {
        $query = $this->db->select('*')
        ->from('pengambilan')
        ->join('barang','barang.id_barang = pengambilan.id_barang')
        ->get();

	// 	return $query->result();
	// }

    // function get_bagian_id($id_bagian) {
    //     $query = $this->db->select('*')
    //     ->from('bagian')
    //     ->where('id_bagian', $id_bagian)
    //     ->get();

	// 	return $query->result();
	// }	

   
}