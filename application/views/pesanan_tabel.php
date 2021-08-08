<!-- Mulai Tabel -->

<div class="container-fluid">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>
                        <th> Nama Supplier </th>
                        <th> Nama Barang </th>
                        <th> Pesan Barang </th>                        
                        <th> Satuan </th>
                        <th> Jumlah Total </th>
                        <th> Waktu Tunggu </th>
                        <th> Pemakaian Barang </th>
                        <th> Pakai Barang </th>
                    </tr>
                    <tr>
                    <?php 
                        $no = 1;
                        foreach($pemesanan as $u){ 
                        ?>
                        <td> <?php echo $no; ?> </td>
                        <td> <?php echo $u->nama_pemesan; ?> </td>
                        <td> <?php echo $u->nama_barang; ?> </td>
                        <td align="center"> <?php echo $u->jumlah_pesanan; ?> </td>
                        <td align="center"> <?php echo $u->satuan; ?> </td>
                        <td align="center"> <?php echo $u->jumlah_total; ?> </td>
                        <td align="center"> <?php echo $u->lead_time; ?> </td>
                        <td align="center"> <?php echo $u->pakai; ?> </td>
                        

                        <td> 

                        <a href=<?= base_url().'staff/pesanan/update/'. $u->id_pesanan;?>>
                            <button type="button" class="btn btn-warning">
                                <span class="glyphicon glyphicon-open">
                                    Pakai Barang
                                </span>
                            </button>
                            </a> 
                        </td>
                        
                    </tr>
                        <?php
                        $no += 1;
                        }
                    ?>    
                </table>
            </div>
        </div>
	</div>
</div>
