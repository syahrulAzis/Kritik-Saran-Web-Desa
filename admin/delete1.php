<?php
// error_reporting(0);
// Load file koneksi.php
include '../php/koneksi.php';

$email = $_GET['email'];

$query = "DELETE FROM coment WHERE email='".$email."'";
$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

if($sql){ 
	header("location: komentar.php?success-delete-email");
	// echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dashboard.php?success-delete-email">';
}else{
	// Jika Gagal, Lakukan :
	header("location: komentar.php?eror-delete-email");
	// echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dashboard.php?eror">';
}
?>
