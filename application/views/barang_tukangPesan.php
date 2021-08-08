<?php
include "../session_admin.php";
include "barang_konek.php";
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
    	include "navbar_tukangPesan.php";
            
        // include "form_2_barang.php";
    ?>
  

  <!-- mulai form -->
  <div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="<?= base_url().'staff/barang/barang_tukang_pesan' ?>">
    			<legend> Form Input Barang </legend>
                <div class="form-group">
                	<label for="nama_barang" class="col-md-2"> Nama Barang  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="nama_barang" placeholder="nama barang" name="nama_barang">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="harga_barang" class="col-md-2"> Harga Barang  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="harga_barang" placeholder="harga barang" name="harga_barang">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="biaya_penyimapan" class="col-md-2"> Biaya Penyimpanan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="biaya_penyimpanan" placeholder="biaya penyimpanan" name="biaya_penyimpanan">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="periode_permintaan" class="col-md-2"> Periode Permintaan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="periode_permintaan" placeholder="periode permintaan" name="periode_permintaan">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="satuan" class="col-md-2"> Satuan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="satuan" placeholder="Satuan Barang" name="satuan">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="satuan" class="col-md-2"> Konversi  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="konversi" placeholder="Konversi Satuan Barang" name="konversi">
                    </div>
                </div>
                <br>
                                               
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">
                		
                    		<input type="submit" class="btn btn-primary" name="simpan" value="simpan">
                        <a class="btn btn-danger" href="<?= base_url().'staff/barang/tukang_pesan' ?>" role="button">Batal</a>

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