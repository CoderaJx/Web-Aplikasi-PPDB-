<?php 

require 'koneksi.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$status_anak = $_POST['status_anak'];
$anak_ke = $_POST['anak_ke'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$asal_sekolah = $_POST['asal_sekolah'];
$ayah = $_POST['ayah'];
$ibu = $_POST['ibu'];
$kerja_ayah = $_POST['kerja_ayah'];
$kerja_ibu = $_POST['kerja_ibu'];
$no_ayah = $_POST['no_ayah'];
$no_ibu = $_POST['no_ibu'];


mysqli_query($koneksi,"INSERT INTO pendaftaran VALUES('','$nis','$nama','$tanggal_lahir','$agama','$status_anak','$anak_ke','$alamat','$no_tlp','$asal_sekolah','$ayah','ibu','$kerja_ayah','$kerja_ibu','$no_ayah','$no_ibu' ) ");



header("location:home.php?pesan=ok");


?>


