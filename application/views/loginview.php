<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.4/examples/sign-in/signin.css">
    <title>Login</title>
  </head>
  <body>
    <!-- Form login menggunakan method post -->
    <form class="form-signin" action="<?= base_url().'staff/login/login_post' ?>" method="post">
    
      <?php  
            // Jika login gagal akan menampilkan pesan error
            if ($error != "NO_ERROR") {
              echo '<div class="alert alert-danger" role="alert">';
              echo "$error";
              echo '</div>';
            } 
            // Jika login berhasil akan menampilkan pesan sukses
            if($this->session->flashdata('success')) {
              $data = $this->session->flashdata('success');
              echo '<div class="alert alert-success" role="alert">';
              echo "$data";
              echo '</div>';
            }
       ?>
      <!-- Form Login -->
  	  <center><h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1></center>
  	  <label for="inputEmail" class="sr-only">Username</label>
      <!-- Untuk input email -->
  	  <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
        <!-- Untuk input Password -->
  	  <label for="inputPassword" class="sr-only">Password</label>
  	  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
      <!-- button login -->
  	  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <br></br>
	</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>