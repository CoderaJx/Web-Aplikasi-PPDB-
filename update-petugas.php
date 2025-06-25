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


mysqli_query($koneksi, "UPDATE petugas SET nama_petugas = '$nama', alamat = '$alamat', jenis_kel = '$kel', agama = '$agama', ttl = '$ttl', level = '$level', username = '$user', password = '$pass'");

header("location:petugas.php?pesan=edit");

 ?>