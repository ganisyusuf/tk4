
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
		include "navbar.php";
	?>

    <!-- mulai form -->
    <div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="bagian_simpan.php">
    			<legend> Form Input Bagian </legend>
                <div class="form-group">
                	<label for="nama_bagian" class="col-md-2"> Nama Bagian  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="nama_bagian" placeholder="nama bagian" name="nama_bagian">
                    </div>
                </div>
                <br>
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">

                    <a href="<?= base_url().'staff/bagian/bagian_post' ?>"><input type="submit" class="btn btn-primary" name="simpan" value="simpan">
                        	<a class="btn btn-danger" href="index.php" role="button">Batal</a>
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