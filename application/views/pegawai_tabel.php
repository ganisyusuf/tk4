<!-- Mulai Tabel -->
<div class="container-fluid">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>
                        <th> Username </th>
                        <th> Password </th>
                        <th> Nama Pegawai </th>
                        <th> Alamat </th>
                        <th> Handphone </th>
                        <th> Nama Bagian </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                    <tr>
                    <?php 
                        $no = 1;
                        foreach($pegawai as $u){ 
                        ?>
                        <td> <?php echo $no; ?> </td>
                        <td> <?php echo $u->username; ?> </td>
                        <td> <?php echo $u->password; ?>  </td>
                        <td> <?php echo $u->nama_pegawai; ?>  </td>
                        <td> <?php echo $u->alamat_pegawai; ?>  </td>
                        <td> <?php echo $u->hp_pegawai; ?>  </td>
                        <td> <?php echo $u->nama_bagian; ?>  </td>
	              
                        <td> 
                            <a href=<?= base_url().'staff/pegawai/update/'. $u->id_pegawai;?>>
                            <button type="button" class="btn btn-primary">
                                <span class="glyphicon glyphicon-pencil">
                                    Edit
                                </span>
                            </button>
                            </a> 
                        </td>
                        <td> 
                        <a href=<?= base_url().'staff/pegawai/delete/'. $u->id_pegawai;?>>
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