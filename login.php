<?php  

require 'koneksi.php';



 ?>





<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background-image: url(img/womenlibrary.png);">
<div class="login-box">
  <div class="login-logo">
    <b>Login PPBD</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><b style="font-size: 20px;">SMK MAJU BERSAMA</b></p>

<?php 

if(isset($_GET['pesan'])){
  if($_GET['pesan']=="logout"){
    echo"
    <script>
    alert('Anda Berhasil Logout');
    </script>
    ";
  }
}


 ?>

 <?php 

if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
    echo"
    <script>
    alert('Password Yang Anda Masukkan Salah');
    </script>
    ";
  }
}


 ?>



      <form action="cek-login.php" method="post">
        <div class="input-group mb-3">
          <input type="username" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-15">
            <button type="submit" name="login" class="btn btn-danger btn-block btn-flat">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <div class="card-body login-card-body">
      <p class="login-box-msg"><a href="home.php">Kembali Kehalaman Home</a></p>
</div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
