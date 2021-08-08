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

    function get() {
        $query =  $this->db->query("SELECT nama_barang, SUM(DISTINCT jumlah_produksi) as total_produksi, SUM(DISTINCT jumlah_pengambilan) as total_pengambilan, (SUM(DISTINCT jumlah_produksi) - SUM(DISTINCT jumlah_pengambilan)) as stock_barang FROM barang JOIN produksi ON barang.id_barang = produksi.id_barang JOIN pengambilan ON produksi.id_barang = pengambilan.id_barang GROUP BY nama_barang");
        return $query->result();
    }

    function get_eoq(){
        $query = $this->db->query("SELECT
        barang.nama_barang,
        barang.harga_barang,
        barang.konversi,
        Sum(pemesanan.pakai) AS D,
        SUM(pemesanan.jumlah_pesanan) AS pesan,
        barang.biaya_penyimpanan AS H,
        ROUND(
            AVG(
                barang.harga_barang * pemesanan.jumlah_pesanan
            ),
            2
        ) AS C,
        ROUND(
            AVG(pemesanan.jumlah_pesanan),
            3
        ) AS R,
        ROUND(
            SQRT(
                (
                    2 * (
                        AVG(
                            barang.harga_barang * pemesanan.jumlah_pesanan
                        )
                    ) * SUM(pemesanan.pakai)
                ) / AVG(barang.biaya_penyimpanan)
            ),
            3
        ) AS EOQ,
        (
            SUM(pemesanan.jumlah_pesanan) * barang.konversi
        ) AS kuantitas,
        ROUND(
            (
                Sum(pemesanan.pakai)
            ) / SQRT(
                (
                    2 * (
                        AVG(
                            barang.harga_barang * pemesanan.jumlah_pesanan
                        )
                    ) * SUM(pemesanan.pakai)
                ) / AVG(barang.biaya_penyimpanan)
            ),
            3
        ) AS pembelian_optimum,
        ROUND(
            (
                360 / (
                    (
                        Sum(pemesanan.pakai)
                    ) / SQRT(
                        (
                            2 * (
                                AVG(
                                    barang.harga_barang * pemesanan.jumlah_pesanan
                                )
                            ) * SUM(pemesanan.pakai)
                        ) / AVG(barang.biaya_penyimpanan)
                    )
                )
            ),
            3
        ) AS daur_pembelian
    FROM
        barang
    INNER JOIN pemesanan ON pemesanan.id_barang = barang.id_barang
    GROUP BY
        barang.nama_barang");

        return $query->result();
    }


    function get_rop() {
        $query =  $this->db->query("SELECT
						barang.nama_barang,
						barang.harga_barang,
						barang.satuan,
						barang.konversi,
						pemesanan.lead_time,
						Sum(pemesanan.jumlah_pesanan) AS pesanan_total,
						(
							konversi * Sum(pemesanan.jumlah_pesanan)
						) AS total_barang,
						(
							(
								(5 / 100) * (SUM(pemesanan.pakai))
							) + (SUM(pemesanan.pakai))
						) AS X,
						SUM(pemesanan.pakai) AS Y,
						(
							(
								(
									(5 / 100) * (SUM(pemesanan.pakai))
								) + (SUM(pemesanan.pakai))
							) - (SUM(pemesanan.pakai))
						) AS 'X-Y',
						POW(
							(
								(
									(
										(5 / 100) * (SUM(pemesanan.pakai))
									) + (SUM(pemesanan.pakai))
								) - (SUM(pemesanan.pakai))
							),
							2
						) AS 'X-Y^2',
						ROUND(
							SQRT(
								POW(
									(
										(
											(
												(5 / 100) * (SUM(pemesanan.pakai))
											) + (SUM(pemesanan.pakai))
										) - (SUM(pemesanan.pakai))
									),
									2
								) / 12
							),
							3
						) AS sigma,
						ROUND(
							(
								1.65 * (
									SQRT(
										POW(
											(
												(
													(
														(5 / 100) * (SUM(pemesanan.pakai))
													) + (SUM(pemesanan.pakai))
												) - (SUM(pemesanan.pakai))
											),
											2
										) / 12
									)
								)
							),
							3
						) AS safety_stock,
						ROUND(
							(
								AVG(pemesanan.lead_time) * (SUM(pemesanan.pakai) / 360)
							),
							3
						) AS LQ,
						ROUND(
							(
								(
									1.65 * (
										SQRT(
											POW(
												(
													(
														(
															(5 / 100) * (SUM(pemesanan.pakai))
														) + (SUM(pemesanan.pakai))
													) - (SUM(pemesanan.pakai))
												),
												2
											) / 12
										)
									)
								) + (
									AVG(pemesanan.lead_time) * (SUM(pemesanan.pakai) / 360)
								)
							),
							3
						) AS ROP
					FROM
						barang
					INNER JOIN pemesanan ON pemesanan.id_barang = barang.id_barang
					GROUP BY
						nama_barang");
        return $query->result();
    }
}