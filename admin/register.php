<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="POST">
        <div class="form-group">
            <div class="form-label-group">
              <input name="nama" type="text" id="inputnama" class="form-control" placeholder="Nama Lengkap" required="required">
              <label for="inputnama">Nama Lengkap</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input name="pwd" type="password" id="inputpwd" class="form-control" placeholder="Password" required="required">
              <label for="inputpwd">Password</label>
            </div>
          </div>
          <?php 
  if(isset($_GET['message'])){
    if($_GET['message'] == "success"){
      echo '<center><div class="alert alert-success alert-dismissible" role="alert">         
          <center>Registrasi Berhasil.<br><a href="index.php">Klik disini untuk login</a></center>
      </div></center>';
    }else if($_GET['message'] == "error"){
     echo '<center><center><div class="alert alert-danger alert-dismissible" role="alert">
          <center>Registrasi Gagal</center>
      </div></center></center>';
    }
}
  ?>
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="index.php">Login Page</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

<?php 
// menghubungkan dengan koneksi
include '../php/koneksi.php';

// menangkap data yang dikirim dari form
if(isset($_POST['submit'])){
$email = $_POST['email'];
$nama = $_POST['nama'];
$pwd = $_POST['pwd'];

$sql = "INSERT into admin(nama,email,password) VALUES('$nama','$email','$pwd')";

if (mysqli_query($conn, $sql)){
    header("location:register.php?message=success");
}else{
  //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  header("location:register.php?message=error");
    
  }
mysqli_close($conn);
}
?>
