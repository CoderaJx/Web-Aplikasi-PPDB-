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
<body>
<div class="wrapper">

 
                <nav class="navbar navbar-expand navbar-primary navbar-dark">
                  <!-- Left navbar links -->
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="admin.php" class="nav-link">Admin</a>
                    </li>

                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="data_siswa.php" class="nav-link">Daftar Siswa</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="petugas.php" class="nav-link">Petugas Administrasi</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="logout.php" class="nav-link">Log Out</a>
                    </li>
                  </ul>

                  <!-- SEARCH FORM -->
                  <form action="data_siswa.php" method="get">
                    <div class="input-group input-group-sm">
                      <input class="form-control form-control-navbar" type="search" name="cari" placeholder="Search siswa" aria-label="Search">
                      <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </nav>

                
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- ./row -->


<?php 
if (isset($_GET['cari'])){
  $cari=$_GET['cari'];
}






 ?>

 <?php 

 if (isset($_GET['pesan'])) {
   if ($_GET['pesan']=="edit") {
     echo "
     <script>
     alert('data Berhasil Di Edit');
     </script>
     ";
   }elseif ($_GET['pesan']=="hapus") {
     echo "
     <script>
     alert('data Berhasil Di Hapus');
     </script>

    ";
   }
 }

  ?>



 <div class="card-body">
  <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>NO</th>
      <th>NIS</th>
      <th>Nama</th>
      <th>Tempat Tanggal Lahir</th>
      <th>Agama</th>
      <th>Status Anak</th>
      <th>Anak Ke</th>
      <th>Alamat</th>
      <th>NO Telefon</th>
      <th>Asal Sekolah</th>
      <th>Ayah</th>
      <th>Ibu</th>
      <th>Pekerjaan Ayah</th>
      <th>Pekerjaan Ibu</th>
      <th>NO Telefon Ayah</th>
      <th>NO Telefon Ibu</th>
      <th>Opsi</th>
    </tr>
  </thead>
   

<?php 
if (isset($_GET['cari'])){
$cari=$_GET['cari'];
$b = mysqli_query($koneksi,"SELECT * FROM pendaftaran where nis like '%$cari%' OR nama like '%$cari%'");

}else{
  $b = mysqli_query($koneksi,"SELECT * FROM pendaftaran ORDER BY nis");
}


 ?>


 <?php 
$no=1;
while($mek = mysqli_fetch_array($b)){


  ?>

  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $mek['nis']; ?></td>
    <td><?php echo $mek['nama']; ?></td>
    <td><?php echo $mek['tanggal_lahir']; ?></td>
    <td><?php echo $mek['agama']; ?></td>
    <td><?php echo $mek['status_anak']; ?></td>
    <td><?php echo $mek['anak_ke']; ?></td>
    <td><?php echo $mek['alamat']; ?></td>
    <td><?php echo $mek['no_tlp']; ?></td>
    <td><?php echo $mek['asal_sekolah']; ?></td>
    <td><?php echo $mek['ayah']; ?></td>
    <td><?php echo $mek['ibu']; ?></td>
    <td><?php echo $mek['kerja_ayah']; ?></td>
    <td><?php echo $mek['kerja_ibu']; ?></td>
    <td><?php echo $mek['no_ayah']; ?></td>
    <td><?php echo $mek['no_ibu']; ?></td>



    <td>
      <a href="edit-siswa.php?no_id=<?php echo $mek['no_id']; ?>">Edit</a>
      <a href="hapus-siswa.php?no_id=<?php echo $mek['no_id']; ?>">Hapus</a>
    </td>

  </tr>

<?php } ?>

 </div>
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