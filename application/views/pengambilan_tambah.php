<?php
	include "session_gudang.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Thesisku</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
	<?php
		include "navbar_gudang.php";
				
	?>
    
    <!-- mulai form -->

    <div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="<?= base_url().'staff/pengambilan/pengambilan_post' ?>">
    			<legend> Form Input Pengambilan </legend>
                
                <div class="form-group">
                	<label for="nama instansi" class="col-md-3"> Pengambilan Barang  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="nama_pengambil" placeholder="Nama yang Mengambil Pesanan" name="nama_pengambil">
                    </div>
                </div>
                <br>

                <div class="form-group">
                	<label for="nama_barang" class="col-md-3"> Nama Barang  </label>
                	<div class="col-md-7">
                    	<select class="form-control" name="id_barang" id="nama_barang">
                          	<option value="">----- Nama Barang Yang diambil -----</option>


                            <?php 
                                $no = 1;
                                foreach($barang as $u){ 
                                ?>

                                <?php echo '<option value="'.$u->id_barang.'">'.$u->nama_barang.'</option>';
                                } ?>
                            	
                          </select>

                    </div>
                </div>
                <br>

                
                                
                <div class="form-group">
                	<label for="jumlah pesanan" class="col-md-3"> Jumlah Pengambilan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="jumlah_pengambilan" placeholder="Jumlah Pengambilan Barang dalam angka" name="jumlah_pengambilan">
                    </div>
                </div>
                <br>

                
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">
                    		<input type="submit" class="btn btn-primary" name="simpan" value="simpan"> 
                            <a class="btn btn-danger" href="<?= base_url().'staff/pengambilan' ?>" role="button">Batal</a>
                    	</a>
                    </div>
                </div>
    		</form>
        </div>
    </div>
    
    <!-- akhir form -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
  </body>
</html>