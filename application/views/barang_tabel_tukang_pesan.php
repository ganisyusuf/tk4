<!-- Mulai Tabel -->
<div class="container-fluid">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>
                        <th> Nama Barang </th>
                        <th> Harga Barang </th>
                        <th> Biaya Penyimpanan </th>
                        <th> Periode Permintaan </th>
                        <th> Satuan </th>
                        <th> Konversi </th>                        
  
                    </tr>
                    <tr>
                    <?php 
                        $no = 1;
                        foreach($barang as $u){ 
                        ?>

                        <td align=""> <?php echo $no; ?> </td>
                        <td> <?php echo $u->nama_barang; ?> </td>
              			<td align="center"> <?php echo $u->harga_barang; ?> </td>
                        <td align="center"> <?php echo $u->biaya_penyimpanan; ?> </td>
                        <td align="center"> <?php echo $u->periode_permintaan; ?> </td>
                        <td align="center"> <?php echo $u->satuan; ?> </td>
                        <td align="center"> <?php echo $u->konversi; ?> </td>
                        
                        
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