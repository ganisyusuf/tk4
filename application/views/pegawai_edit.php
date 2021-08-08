
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

<div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">

      <?php
                    foreach($pegawai as $u){ 
             ?>
    		<form class="form-horizontal" method="post" action="<?= base_url().'staff/pegawai/pegawai_update/'. $u->id_pegawai; ?>">
            

                <legend> Form Edit Pegawai </legend>
                <input type="hidden" name="id_pegawai" value="<?php echo $u->id_pegawai ?>">
                <div class="form-group">
                	<label for="username" class="col-md-2"> Username  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="username" name="username" value="<?php echo $u->username; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="password" class="col-md-2"> Password  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="password" name="password" value="<?php echo $u->password; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="nama_pegawai" class="col-md-2"> Nama Pegawai  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="<?php echo $u->nama_pegawai; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="alamat_pegawai" class="col-md-2"> Alamat Pegawai  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="alamat_pegawai" name="alamat_pegawai" value="<?php echo $u->alamat_pegawai; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="handphone_pegawai" class="col-md-2"> Handphone Pegawai  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="hp_pegawai" name="hp_pegawai" value="<?php echo $u->hp_pegawai; ?>">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="id_bagian" class="col-md-2"> Bagian  </label>
                    <div class="col-md-7">
                	<select class="form-control" name="id_bagian" id="id_bagian">
                            <?php
                                    foreach($bagian as $b){ 
                                     ?>
                                <option <?php echo ($b->id_bagian == $u->id_bagian) ? 'selected' : '' ?> value="<?php echo $b->id_bagian ?>"><?php echo $b->nama_bagian ?></option>
                                <?php
									}
								?>                            	
                          </select>
                          </div>
                </div>
                <br>
                
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">
                		<input type="submit" class="btn btn-md btn-primary" name="update" value="Update" >
                        	
                    <a class="btn btn-danger" href="<?= base_url().'staff/pegawai' ?>" role="button">Batal</a>
                            
                    	
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