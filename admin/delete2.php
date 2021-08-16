<?php
// error_reporting(0);
// Load file koneksi.php
include '../php/koneksi.php';

$nama_file = $_GET['nama_file'];

$query = "DELETE FROM upload WHERE nama_file='".$nama_file."'";
$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

if($sql){ 
	header("location: file.php?success-delete-email");
	// echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dashboard.php?success-delete-email">';
}else{
	// Jika Gagal, Lakukan :
	header("location: file.php?eror-delete-email");
	// echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dashboard.php?eror">';
}
?>
