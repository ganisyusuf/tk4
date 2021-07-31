<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>
		<?php   
            if($this->session->flashdata('error')) {
              $data = $this->session->flashdata('error');
              echo '<div class="alert alert-success" role="alert">';
              echo "$data";
              echo '</div>';
            }
       ?>
<form class="form-signin" action="<?= base_url().'staff/register/register_post' ?>" method="post">
    <h1>Pendaftaran</h1>
    <hr width="20%" align="left">
    <p>Isilah dengan data yang valid</p>
    <table>
    	<tr>
    	    <td valign="top">Nama</td>
    	    <td><input type="text" name="nama" placeholder="Masukan nama"></td>
    	</tr>
    	<tr>
    	    <td valign="top">NIK</td>
    	    <td><input type="text" name="nik" placeholder="Masukan NIK"></td>
    	</tr>
    	<tr>
               <td valign="top">No.HP</td>
               <td><input type="text" name="no_hp" placeholder="Masukan No. HP"></td>
    	</tr>
    	<tr>
    	    <td valign="top">Email</td>
    	    <td><input type="email" name="email" placeholder="Masukan email"></td>
    	</tr>
    	<tr>
    	    <td valign="top">Jenis Kelamin</td>
    	    <td>
    	    	<input type="radio" name="jenis_kelamin" value="Laki">Pria<br />
    	    	<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
    	    </td>
    	</tr>
    	<tr>
    	    <td valign="top">Alamat</td>
    	    <td><input type="text" name="alamat" placeholder="Masukan alamat"></td>
    	</tr>
      <tr>
    	    <td valign="top">Jabatan</td>
    	    <td><input type="text" name="jabatan" placeholder="Masukan jabatan"></td>
    	</tr>
		<tr>
    	    <td valign="top">Password</td>
    	    <td><input type="password" name="password" placeholder="Masukan password"></td>
    	</tr>
    	
    	
    	<tr>
    	    <td colspan="2"><input type="submit" value="Simpan"></td>
    	</tr>
    </table>
  </form>
</body>
</html>