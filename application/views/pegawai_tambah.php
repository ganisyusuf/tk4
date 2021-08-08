
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
            
        // include "form_3_pegawai.php";
    ?>
  
  <!-- mulai form -->
  <div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="<?= base_url().'staff/pegawai/pegawai_post' ?>">
    			<legend> Form Input Pegawai </legend>
                <div class="form-group">
                	<label for="id pegawai" class="col-md-3"> No. Pegawai  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="id pegawai" placeholder="nomor pegawai input disini" name="id_pegawai">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="username" class="col-md-3"> Username  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="username" placeholder="username input disini" name="username">
                    </div>
                </div>
                <br>

				<div class="form-group">
                	<label for="password" class="col-md-3"> Password  </label>
                	<div class="col-md-7">
                    	<input type="password" class="form-control" id="password" placeholder="password input disini" name="password">
                    </div>
                </div>
                <br>

				<div class="form-group">
                	<label for="nama pegawai" class="col-md-3"> Nama Pegawai  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="nama pegawai" placeholder="nama pegawai input disini" name="nama_pegawai">
                    </div>
                </div>
                <br>

				<div class="form-group">
                	<label for="alamat pegawai" class="col-md-3"> Alamat Pegawai  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="alamat pegawai" placeholder="alamat pegawai input disini" name="alamat_pegawai">
                    </div>
                </div>
                <br>

				<div class="form-group">
                	<label for="hp pegawai" class="col-md-3"> Handphone Pegawai  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="handphone pegawai" placeholder="nomor handphone pegawai input disini" name="hp_pegawai">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="nama pegawai" class="col-md-3"> Nama Bagian  </label>
                	<div class="col-md-7">
                    	<select class="form-control" name="id_bagian" id="id_bagian">
                          	<option value="">----- Berada di Bagian -----</option>
                              <?php 
                                $no = 1;
                                foreach($bagian as $u){ 
                                ?>

                                <?php echo '<option value="'.$u->id_bagian.'">'.$u->nama_bagian.'</option>';
                                } ?>
                            	
                          </select>

                    </div>
                </div>
                <br>

                                                                              
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">
                		
                    		<input type="submit" class="btn btn-primary" name="simpan" value="simpan">
                        <a class="btn btn-danger" href="<?= base_url().'staff/pegawai' ?>" role="button">Batal</a>
                    	
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