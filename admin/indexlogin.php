<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a ><b>Login Akun Admin</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masukkan Akun Anda</p>

      <form action="cek.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name='namapengguna' class="form-control" placeholder="Nama Pengguna">
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name='sandi' class="form-control" placeholder="sandi">
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
        <div class="row">
      
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name='login' value='login' class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <form action="regisadmin.php" method="post">
        <div class="input-group mb-3">
          
          <div class="input-group-append">
            
          </div>
        </div>
        <div class="row">
      
      <!-- /.col -->
       
      </form>




      <div class="social-auth-links text-center mb-3">
       
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html"></a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center"></a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

</body>
</html>
<?php
         $con=mysqli_connect ("localhost","root","","db_kesehatan");
         if (isset($_GET['registrasi'])=='regis' )                   
         {
           $sql="INSERT INTO `table_regis` (`namapengguna`, `namalengkap`, `alamat`, `jeniskelamin`, `email`, `sandi`) 
           VALUES ('$_GET[namapengguna]', '$_GET[namalengkap]', '$_GET[alamat]', '$_GET[jeniskelamin]', '$_GET[email]', MD5('$_GET[sandi]'));";
           mysqli_query ($con,$sql);
         }
         if (isset($_GET['registrasi'])=='regis' )
         {
            $sql="INSERT INTO `table_admin` (`namapengguna`, `sandi`, `level`) VALUES ('$_GET[namapengguna]', MD5('$_GET[sandi]'), '2')";
             
             mysqli_query ($con,$sql);
         }
?>
