
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
    <link href="<?php echo base_url(); ?>/css/jquery-ui.css" rel="stylesheet">

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
		
		// include "form_1_input_pesanan.php";
	?>
    
<!-- mulai form -->
<div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="<?= base_url().'staff/pesanan/pesanan_post' ?>">
    			<legend> Form Input Pesanan </legend>
                
                <div class="form-group">
                	<label for="nama pemesan" class="col-md-3"> Nama Supplier  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="Nama Pemesan" placeholder="Nama atau Instansi Pemesan" name="nama_pemesan">
                    </div>
                </div>
                <br>

                
                <div class="form-group">
                	<label for="nama_barang" class="col-md-3"> Nama Barang  </label>
                	<div class="col-md-7">
                    	<select class="form-control" name="id_barang" id="nama_barang">
                          	<option value="">----- Pesanan Bahan Baku -----<</option>

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
                	<label for="jumlah pesanan" class="col-md-3"> Jumlah Pesanan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="jumlah pesanan" placeholder="Jumlah Pesanan Barang dalam angka" name="jumlah_pesanan">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="jumlah pesanan" class="col-md-3"> Waktu Tunggu Pesanan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="lead time" placeholder="Waktu Tunggu Pesanan" name="lead_time">
                    </div>
                </div>
                <br>

                
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">
                		
                    		<input type="submit" class="btn btn-primary" name="simpan" value="simpan">
                            <a class="btn btn-danger" href="<?= base_url().'staff/pesanan' ?>" role="button">Batal</a>
                    	
                    </div>
                </div>
    		</form>
        </div>
    </div>
    
    <!-- akhir form -->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>/js/jquery.select-to-autocomplete.js"></script>
	<script>
	  (function($){
	    $(function(){
	      $('#nama_barang').selectToAutocomplete();
	      $('form').submit(function(){
	        //alert( $(this).serialize() );
	        return true;
	      });
	    });
	  })(jQuery);
	</script>

<style>

.ui-autocomplete {
  padding: 0;
  list-style: none;
  background-color: #fff;
  width: 218px;
  border: 1px solid #B0BECA;
  max-height: 350px;
  overflow-x: hidden;
}
.ui-autocomplete .ui-menu-item {
  border-top: 1px solid #B0BECA;
  display: block;
  padding: 4px 6px;
  color: #353D44;
  cursor: pointer;
}
.ui-autocomplete .ui-menu-item:first-child {
  border-top: none;
}
.ui-autocomplete .ui-menu-item.ui-state-focus {
  background-color: #D5E5F4;
  color: #161A1C;
}
</style>

  </body>
</html>