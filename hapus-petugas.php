<?php 

require 'koneksi.php';

$id = $_GET['id_petugas'];
mysqli_query($koneksi,"delete from petugas where id_petugas = '$id'");
header("location:petugas.php?pesan=hapus");

 ?>