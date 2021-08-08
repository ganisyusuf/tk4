
<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>                        
                        <th> Nama Barang </th>                        
                        <th> Jumlah Pesanan </th>
                        <th> Satuan </th>
                        <th> Konversi </th>
                        <th> Jumlah Total </th>
                        <th> Perkiraan Pemakaian </th>
                        <th> Pemakaian Sebenarnya </th>
                        <th> Waktu Tunggu (Lead Time) </th>                        
                        <th> Safety Stock </th>
                        <th> ROP (ReOrder Point)</th>
                       
                        
                    </tr>
                    <tr>
                    <?php 
                        $no = 1;
                        foreach($rop as $u){ 
                        ?>
                        <td> <?php echo $key+1 ?> </td>
                        <td> <?php echo $u->nama_barang; ?> </td>                       
                        <td align="center"> <?php echo $u->pesanan_total; ?> </td>
                        <td align="center"> <?php echo $u->satuan; ?> </td>
                        <td align="center"> <?php echo $u->konversi; ?> </td>
                        <td align="center"> <?php echo $u->total_barang; ?> </td>                        
                        <td align="center"> <?php echo $u->X; ?> </td>
                        <td align="center"> <?php echo $u->Y; ?> </td>
                        <td align="center"> <?php echo $u->lead_time; ?> </td>
                        <td align="center"> <?php echo $u->safety_stock; ?> </td>
                        <td align="center"> <?php echo $u->ROP; ?> </td>
                                        
                        
                        </tr>
                        <?php
                        }
                    ?>    
                </table>
            </div>
        </div>
	</div>
</div>
