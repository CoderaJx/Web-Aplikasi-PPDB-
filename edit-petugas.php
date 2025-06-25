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


        <?php 

  $id = $_GET['id_petugas'];
  $q = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas ='$id'");
  while($d = mysqli_fetch_array($q)){

   ?>



<div style="background: purple; color : yellow; font-size: 25px; font-weight: bold; letter-spacing: 0,5em;"><h2 align="center">EDIT Petugas</h2>
</div>
<br>

<div>
  
  <dir class="card card-warning">
    <div class ="card-header">
      <h1 class="card-title">Edit Data Petugas</h1>
    </div>


    <form action="edit-petugas.php" method="post">
     <div class="card-body">
         <div class="form-group">
        <label for="exampleInputEmail1">Nama Petugas</label>

        <input type="hidden" name="id_petugas" value="<?php echo $d['id_petugas']; ?>">
        <input type="text" class="form-control" name="nama_petugas" value="<?php echo $d['nama_petugas']; ?>">
         </div> 
        
         <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>

        <input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat']; ?>">
        </div>

         <div class="form-group">
        <label for="exampleInputEmail1">Jenis Kelamin</label>

        <input type="text" class="form-control" name="jenis_kel" value="<?php echo $d['jenis_kel']; ?>">
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Agama</label>

        <input type="text" class="form-control" name="agama" value="<?php echo $d['agama']; ?>">
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Tempat Tanggal Lahir</label>

        <input type="text" class="form-control" name="ttl" value="<?php echo $d['ttl']; ?>">
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Level</label>

        <input type="text" class="form-control" name="level" value="<?php echo $d['level']; ?>">
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Username</label>

        <input type="text" class="form-control" name="username" value="<?php echo $d['username']; ?>">
        </div>

<div class="form-group">
        <label for="exampleInputEmail1">Password</label>

        <input type="text" class="form-control" name="password" value="<?php echo $d['password']; ?>">
        </div>

        
        


       
     </div> 

     <div class="card-footer">
      <button type="submit" class="btn btn-warning" name="submit">Ubah</button>
       
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
<?php } ?>
</body>
</html>