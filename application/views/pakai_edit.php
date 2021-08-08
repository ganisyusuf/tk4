
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
	?>

    <div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">

            <?php
                    foreach($pemesanan as $u){ 
                 ?>
    		<form class="form-horizontal" method="post" action="<?= base_url().'staff/pesanan/pakai_update/'. $u->id_pesanan ?>">

                <legend> Form Pakai Barang </legend>
                <div class="form-group">
                	<label for="nama_bagian" class="col-md-2"> Nama Barang  </label>
                	<div class="col-md-7">
                    	<input type="text" disabled class="form-control" id="id_barang" name="id_barang" value="<?php echo $u->id_barang ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="Harga Barang" class="col-md-2"> Pakai  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="pakai" name="pakai" value="<?php echo $u->pakai; ?>">
                    </div>
                </div>
                <br>
                                                
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">
                		<input type="submit" class="btn btn-md btn-primary" name="update" value="Update" >
                        <a class="btn btn-danger" href="<?= base_url().'staff/pesanan' ?>" role="button">Batal</a>
                    	
                    </div>
                </div>
                <?php
                    }
                    ?>
    		</form>
        </div>
    </div>
    
    <!-- akhir form -->

        <!-- akhir form -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
  </body>
</html>