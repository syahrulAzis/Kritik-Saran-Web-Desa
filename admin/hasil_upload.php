<?php
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";
// tanggal sekarang
$tgl_upload = date("Ymd");
// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=file.php?success">';
  
  // Masukkan informasi file ke database
  include('../php/koneksi.php');


  $query = "INSERT INTO upload (nama_file, deskripsi, tgl_upload)
            VALUES('$nama_file', '$_POST[deskripsi]', '$tgl_upload')";
            
  mysqli_query($conn, $query);
}
else{
  echo "File gagal di upload";
}
?>