
  <?php
  error_reporting(0); 
  session_start();
  if($_SESSION['admin']=="login"){
    header("location:dashboard.php");
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Menu Login</title>

  <link rel="icon" type="img/png" href="../img/img_logo/favicon.png">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <style>
      .images-logo{
        margin-top: 5px;
        max-height: 200px;
        /* max-width: 100px ; */
        margin-bottom: 3px;
      }
    </style>

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"  align="center"><b>Login</b></div>
      <img src="../img/img_logo/favicon.png" align="center" alt="Logo Aplikasi" class="images-logo">
      <div class="card-body">
        <form method="POST" action="process.php">
          <div class="form-group">
            <div class="form-label-group">
              <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input name="pwd" type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <?php 
  if(isset($_GET['message'])){
    if($_GET['message'] == "failed"){
      echo '<center><div class="alert alert-danger alert-dismissible" role="alert">
          
          <center>Email atau password salah</center>
      </div></center>';
    }else if($_GET['message'] == "logout"){
     echo '<center><center><div class="alert alert-info alert-dismissible" role="alert">
          
          <center>Anda Berhasil Logout</center>
      </div></center></center>';
    }else if($_GET['message'] == "belum_login"){
      echo '<center><div class="alert alert-warning alert-dismissible" role="alert">
          <center>Anda harus login terlebih dahulu</center>
      </div></center>';
    }
  }
  ?>
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
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
