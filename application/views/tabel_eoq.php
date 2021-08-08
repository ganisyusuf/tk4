
<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>                       
                        <th> Nama Barang </th>
                        <th> Harga Barang </th>
                        <th> Jumlah Pesanan </th>
                        <th> Biaya Penyimpanan </th>
                        <th> Permintaan per Periode </th>
                        <th> Biaya Tiap Pemesanan </th>                        
                        <th> EOQ </th>
                        <th> Pembelian Optimum </th>
                        <th> Daur Pembelian </th>
                       
                        
                    </tr>
                    <tr>
                    <?php 
                        $no = 1;
                        foreach($eoq as $u){ 
                        ?>
                        <td> <?php echo $no; ?> </td>                       
                        <td> <?php echo $u->nama_barang; ?> </td>
                        <td align="center"> <?php echo $u->harga_barang; ?> </td>
                        <td align="center"> <?php echo $u->pesan; ?> </td>                        
                        <td align="center"> <?php echo $u->H; ?> </td>
                        <td align="center"> <?php echo $u->R; ?> </td>
                        <td align="center"> <?php echo $u->C; ?> </td>                        
                        <td align="center"> <?php echo $u->EOQ; ?> </td>
                        <td align="center"> <?php echo $u->pembelian_optimum; ?> </td>
                        <td align="center"> <?php echo $u->daur_pembelian; ?> </td>                     
                        

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
