<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Regis Akun</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a ><b>Peminjaman Berkas Rekam Medis</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Registrasi Akun</p>

      <form action="login.php" method="get">
        <div class="input-group mb-3">
          <input type="text" name='namapengguna' class="form-control" placeholder="Nama Pengguna">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name='namalengkap' class="form-control" placeholder="Nama Lengkap">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name='jeniskelamin' class="form-control" placeholder="Jenis Kelamin">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name='email' class="form-control" placeholder="E-mail">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="char" name='phone' class="form-control" placeholder="Nomor Handphone">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name='alamat' class="form-control" placeholder="Alamat Sekarang">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name='sandi' class="form-control" placeholder="Sandi Pengguna">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="row">
      
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name='registrasi' value='regis' class="btn btn-primary btn-block">Regis</button>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Lewati</button>
          </div>
          <!-- /.col -->
        </div>
        
      </form>

     
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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>

