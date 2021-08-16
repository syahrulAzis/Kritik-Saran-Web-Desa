<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../php/koneksi.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$pwd = $_POST['pwd'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from admin where email='$email' and password='$pwd'");


// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $pwd;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
}else{
	header("location:index.php?message=failed");
}
?>