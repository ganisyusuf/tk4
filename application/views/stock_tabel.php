<!-- Mulai Tabel -->

<div class="container-fluid">
	<div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>
                        <th> Nama Barang </th>
                        <th> Jumlah Produksi </th>
                        <th> Jumlah Pengambilan </th>
                        <th> Stok Barang </th>
                        
                    </tr>
                    <tr>
                    <?php 
                        $no = 1;
                        foreach($stock as $u){ 
                        ?>
                        <td> <?php echo $no; ?> </td>
                        <td> <?php echo $u->nama_barang; ?> </td>
                        <td> <?php echo $u->total_produksi; ?> </td>
                        <td> <?php echo $u->total_pengambilan; ?> </td>
                        <td> <?php echo $u->stock_barang; ?> </td>
                                                
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