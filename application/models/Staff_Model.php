<?php 
 
class Staff_Model extends CI_Model{

	function get_profile($id_pegawai) {
        $query = $this->db->select('*')
        ->from('pegawai')
        ->join('bagian','bagian.id_bagian = pegawai.id_bagian')
        ->where('pegawai.id_pegawai', $id_pegawai)
        ->get();

		return $query->result();
	}

	function get_bagian() {
        $query = $this->db->select('*')
        ->from('bagian')
        ->get();

		return $query->result();
	}

    function get_bagian_id($id_bagian) {
        $query = $this->db->select('*')
        ->from('bagian')
        ->where('id_bagian', $id_bagian)
        ->get();

		return $query->result();
	}	

    function get_barang() {
        $query = $this->db->select('*')
        ->from('barang')
        ->get();

		return $query->result();
	}

    function get_barang_id($id_barang) {
        $query = $this->db->select('*')
        ->from('barang')
        ->where('id_barang', $id_barang)
        ->get();

		return $query->result();
	}	

    function get_pegawai() {
        $query = $this->db->select('*')
        ->from('pegawai')
        ->join('bagian','bagian.id_bagian = pegawai.id_bagian')
        ->get();

		return $query->result();
	}
}