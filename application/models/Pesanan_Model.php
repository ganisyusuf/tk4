<?php 
 
class Pesanan_Model extends CI_Model{

	function get_pesanan() {
        $query = $this->db->select("pemesanan.id_pesanan, 
        pemesanan.nama_pemesan,
        barang.nama_barang,
        pemesanan.jumlah_pesanan,
        barang.satuan,
        barang.konversi,
        pemesanan.lead_time,
        pemesanan.pakai,
        pemesanan.jumlah_pesanan * barang.konversi AS 'jumlah_total'")
        ->from('pemesanan')
        ->join('barang','barang.id_barang = pemesanan.id_barang')
        ->get();
		return $query->result();
	}	
   
    function get_pesanan_id($id_pesanan) {
        $query = $this->db->select('*')
        ->from('pemesanan')
        ->where('id_pesanan', $id_pesanan)
        ->get();

		return $query->result();
	}	

}