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
                        <th> Edit </th>
                        <th> Delete </th>
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
                        
                        <td> 
                            <a href=<?= base_url().'staff/barang/update/'. $u->id_barang;?>>
                            <!-- <a href="barang_form_edit.php?id=<?php echo $u->id_barang; ?>"> -->
                            <button type="button" class="btn btn-primary">
                                <span class="glyphicon glyphicon-pencil">
                                    Edit
                                </span>
                            </button>
                            </a> 
                        </td>
                        <td> 
                            <a href=<?= base_url().'staff/barang/delete/'. $u->id_barang;?>>
                            <button onclick="return confirm('Hapus data ini?')" type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash">
                                    Delete
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