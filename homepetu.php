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
<body style="background-color: white;">
<div class="wrapper">

 
                <nav class="navbar navbar-expand navbar-primary navbar-dark">
                  <!-- Left navbar links -->
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="homepetu.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="data-siswa2.php" class="nav-link">Data Siswa</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="logout.php" class="nav-link">Logout</a>
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

if (isset($_GET['pesan'])) {
  if ($_GET['pesan']=="ok") {
  echo "
<script>
alert('Berhasil Login');
</script>

  ";
  }
}

 ?>

<div style="background: purple; color : yellow; font-size: 25px; font-weight: bold; letter-spacing: 0,5em;"><h2 align="center">HALAMAN HOME</h2>
</div>

<br>
<br>
<p style="text-align: center;">
  
</p>
<table>
  <tr>
    <td>
      <h1>VISI</h1>
      <p>
        Menjadi Sekolah Menengah Kejuruan Yang Unggul.
        <br>
        Menghasilkan Lulusan Yang Beriman dan Bertaqwa kepada Tuhan YME, Berbudi, Berbudi Pekerti Luhur Dan Berwawasan Lingkungan Serta Meningkatkan Daya Saing Sumber Daya Manusia
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
 
      </p>
    </td>

    <td>
      <h1>MISI</h1>
      <p>
       1. Menerapkan Manajemen standart ISO 9001:2015 dalam manajemen berbasis sekolah untuk meningkatkan muru pelayanan publik.
       <br>
       2. Membekali peserta didik didik dengan keimanan, ketaqwaan, pengetahuan, keterampian dan teknologi untuk meningkatkan daya saing sumber daya manusia.
       <br>
       3. Mengembangkan kerjasama sekolah jejaring industri untuk menghasilkan lulusan yang cerdas, spiritual, emosional dan intelektual serta mampu bersaing di era global.
       <br>
       4. Mewujudkan sekolah berwawasan lingkungan dengan cara: a). Pencegahan pencemaran, b). Pelestarian lingkungan, c). Pengendalian kerusakan lingkungan
       <br>
       1. Teknik Komputer Jaringan
       2. Rekayasa Perangkat Lunak
       3. Multimedia 
      </p>
    </td>
  </tr>
</table>





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
