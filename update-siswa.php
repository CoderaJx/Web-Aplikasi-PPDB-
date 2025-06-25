<?php 

require 'koneksi.php';

$id = $_POST['no_id'];
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

mysqli_query($koneksi, "UPDATE pendaftaran SET nis = '$nis', nama = '$nama', tanggal_lahir ='$tanggal_lahir', agama = '$agama', status_anak = '$status_anak', anak_ke = '$anak_ke', alamat = '$alamat', no_tlp = '$no_tlp', asal_sekolah = '$asal_sekolah', ayah = '$ayah', ibu = '$ibu', kerja_ayah = '$kerja_ayah', kerja_ibu = '$kerja_ibu', no_ayah = 'no_ayah', no_ibu = '$no_ibu' WHERE no_id = '$id'");

header("location:data_siswa.php?pesan=edit");

 ?>