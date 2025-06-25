<?php 

require 'koneksi.php';



 ?>






<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Navbar & Tabs</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background-image: url(img/library.png);">
<div class="wrapper">

 
                <nav class="navbar navbar-expand navbar-primary navbar-dark">
                  <!-- Left navbar links -->
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="home.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="login.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="daftar.php" class="nav-link">Pendaftaran</a>
                    </li>
                  </ul>

                  
                  
                </nav>

                
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- ./row -->


<div style="background: purple; color : yellow; font-size: 25px; font-weight: bold; letter-spacing: 0,5em;"><h2 align="center">HALAMAN TAMBAH PETUGAS</h2>
</div>
<br>

<div>
  
  <dir class="card card-warning">
    <div class ="card-header">
      <h1 class="card-title">Tambah Petugas</h1>
    </div>


    <form action="input-petugas.php" method="post">
     <div class="card-body">
         <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>

        <input type="text" class="form-control" name="nama_petugas" >
         </div> 
        

         <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>

        <input type="text" class="form-control" name="alamat">
        </div>

        
         <div class="form-group">
        <label for="exampleInputEmail1">Jenis Kelamin</label>

        <input type="text" class="form-control" name="jenis_kel">
        </div>

 <div class="form-group">
        <label for="exampleInputEmail1">Agama</label>

        <input type="text" class="form-control" name="agama">
        </div>

 <div class="form-group">
        <label for="exampleInputEmail1">Tempat Tanggal Lahir</label>

        <input type="text" class="form-control" name="ttl">
        </div>

 <div class="form-group">
        <label for="exampleInputEmail1">Level</label>

        <input type="text" class="form-control" name="level">
        </div>

 <div class="form-group">
        <label for="exampleInputEmail1">Username</label>

        <input type="text" class="form-control" name="username">
        </div>

         <div class="form-group">
        <label for="exampleInputEmail1">Password</label>

        <input type="text" class="form-control" name="password">
        </div>


         
        




       
     </div> 

     <div class="card-footer">
      <button type="submit" class="btn btn-warning" name="submit">Daftar</button>
       
     </div>
    </form>
  </dir>
</div>






        <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
