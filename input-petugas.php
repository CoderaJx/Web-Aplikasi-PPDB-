<?php 
require 'koneksi.php';



$id = $_POST['id_petugas'];
$nama = $_POST['nama_petugas'];
$alamat = $_POST['alamat'];
$kel = $_POST['jenis_kel'];
$agama = $_POST['agama'];
$ttl = $_POST['ttl'];
$level = $_POST['level'];
$user = $_POST['username'];
$pass = $_POST['password'];

mysqli_query($koneksi,"INSERT INTO petugas VALUES ('','$nama','$alamat','$kel','$agama','$ttl','$level','$user','$pass') ");
mysqli_query($koneksi,"INSERT INTO login VALUES ('','$user','$pass','$level') ");

header("location:petugas.php?pesan=tambah");


 ?>


