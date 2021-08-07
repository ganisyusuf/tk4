
<!-- Mulai Tabel -->
<div class="container-fluid">
	<div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>
                        <th> Nama Bagian </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                    <tr>
                   
                    <?php 
                        $no = 1;
                        foreach($bagian as $u){ 
                        ?>
                        <td> <?php echo $no; ?> </td>
                        <td> <?php echo $u->nama_bagian; ?> </td> 
                        
                        <td> 
                            <a href="<? base_url().'bagian_form_edit.php?id='?><? echo $u->nama_bagian ?>">
                            <button type="button" class="btn btn-primary">
                                <span class="glyphicon glyphicon-pencil">
                                    Edit
                                </span>
                            </button>
                            </a> 
                        </td>
                        <td> 
                            <a href="bagian_delete.php?id=<?php echo $u->id_bagian ?>">
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