<?php 

require 'koneksi.php';

$id = $_GET['no_id'];

mysqli_query($koneksi, "DELETE FROM pendaftaran WHERE no_id = '$id'");

header("location:data_siswa.php?pesan=hapus");

 ?>