<?php 
session_start();

require 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$q = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username' AND password ='$password'");



$cek = mysqli_num_rows($q);

if ($cek > 0){

  $data = mysqli_fetch_assoc($q);


if ($data['level']=='admin'){
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "admin";
  header("location:admin.php?pesan=ok");



}elseif ($data['level']=='petugas'){
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "petugas";
  header("location:homepetu.php?pesan=ok");



}else{
	header("location:login.php?pesan=gagal");

}

}else{
	header("location:login.php?pesan=gagal");
}



 ?>