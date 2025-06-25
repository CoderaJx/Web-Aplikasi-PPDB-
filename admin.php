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
                      <a href="data_siswa.php" class="nav-link">Data Siswa</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="petugas.php" class="nav-link">Petugas Administrasi</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="logout.php" class="nav-link">Log Out</a>
                    </li>
                  </ul>

                  <!-- SEARCH FORM -->
                  
                </nav>

                
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- ./row -->

<?php 

if(isset($_GET['pesan'])){
  if($_GET['pesan']=="ok"){
    echo"
    <script>
    alert('Anda Berhasil Login');
    </script>
    ";
  }
}


 ?>

<div style="background: purple; color : yellow; font-size: 25px; font-weight: bold; letter-spacing: 0,5em;"><h2 align="center">HALAMAN ADMIN (SELAIN ADMIN DILARANG MASUK)</h2>
</div>


<!-- /.col -->
          <div class="col">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-black"
                   style="background: url('img/people.png') center center;">
                <h3 class="widget-user-username">Admin</h3>
                <h5 class="widget-user-desc">Admin</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="img/img.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">Sidoarjo</h5>
                      <span class="description-text">Alamat</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">admin@gmail.com</h5>
                      <span class="description-text">Email</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">Bimaarya_wp</h5>
                      <span class="description-text">Instagram</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
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
