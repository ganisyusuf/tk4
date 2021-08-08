<!-- Mulai Tabel -->

<div class="container-fluid">
	<div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>
                        <th> Nama Pengambilan </th>
                        <th> Nama Barang </th>
                        <th> Jumlah Pengambilan </th>
                        
                        
                    </tr>
                    <tr>
                    <?php 
                        $no = 1;
                        foreach($pengambilan as $u){ 
                        ?>
                        <td> <?php echo $no; ?> </td>
                        <td> <?php echo $u->nama_pengambil; ?> </td>
                        <td> <?php echo $u->nama_barang; ?> </td>
                        <td> <?php echo $u->jumlah_pengambilan; ?> </td>
                                                
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