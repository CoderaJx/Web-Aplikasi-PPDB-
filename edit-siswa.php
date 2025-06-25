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

  $id = $_GET['no_id'];
  $q = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE no_id ='$id'");
  while($d = mysqli_fetch_array($q)){

   ?>



<div style="background: purple; color : yellow; font-size: 25px; font-weight: bold; letter-spacing: 0,5em;"><h2 align="center">EDIT SISWA</h2>
</div>
<br>

<div>
  
  <dir class="card card-warning">
    <div class ="card-header">
      <h1 class="card-title">Edit Data Siswa</h1>
    </div>


    <form action="update-siswa.php" method="post">
     <div class="card-body">
         <div class="form-group">
        <label for="exampleInputEmail1">NIS</label>

        <input type="hidden" name="no_id" value="<?php echo $d['no_id']; ?>">
        <input type="text" class="form-control" name="nis" value="<?php echo $d['nis']; ?>">
         </div> 
        
         <div class="form-group">
        <label for="exampleInputEmail1">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>">
        </div>

         <div class="form-group">
        <label for="exampleInputEmail1">Tempat Tanggal Lahir</label>

        <input type="text" class="form-control" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>">
        </div>

         <div class="form-group">
        <label for="exampleInputEmail1">Agama</label>

        <input type="text" class="form-control" name="agama" value="<?php echo $d['agama']; ?>">
        </div>

         <div class="form-group">
        <label for="exampleInputEmail1">Status Dalam Keluarga</label>

        <input type="text" class="form-control" name="status_anak" value="<?php echo $d['status_anak']; ?>">
        </div>

         <div class="form-group">
        <label for="exampleInputEmail1">Anak Ke</label>

        <input type="text" class="form-control" name="anak_ke" value="<?php echo $d['anak_ke']; ?>">
        </div>

		    <div class="form-group">
        <label for="exampleInputEmail1">Alamat Siswa</label>

        <input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat']; ?>">
        </div>
		    <div class="form-group">
        <label for="exampleInputEmail1">No Telepon</label>

        <input type="text" class="form-control" name="no_tlp" value="<?php echo $d['no_tlp']; ?>">
        </div>

		    <div class="form-group">
        <label for="exampleInputEmail1">Asal Sekolah</label>

        <input type="text" class="form-control" name="asal_sekolah" value="<?php echo $d['asal_sekolah']; ?>">
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Nama Ayah</label>

        <input type="text" class="form-control" name="ayah" value="<?php echo $d['ayah']; ?>">
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Nama Ibu</label>

        <input type="text" class="form-control" name="ibu" value="<?php echo $d['ibu']; ?>">
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Pekerjaan Ayah</label>

        <input type="text" class="form-control" name="kerja_ayah" value="<?php echo $d['kerja_ayah']; ?>">
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Pekerjaan Ibu</label>

        <input type="text" class="form-control" name="kerja_ibu" value="<?php echo $d['kerja_ibu']; ?>">
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">No Telepon Ayah</label>

        <input type="text" class="form-control" name="no_ayah" value="<?php echo $d['no_ayah']; ?>">
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">No Telepon Ibu</label>

        <input type="text" class="form-control" name="no_ibu" value="<?php echo $d['no_ibu']; ?>">
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