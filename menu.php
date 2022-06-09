<?php
session_start();
if(empty($_SESSION['namapengguna'])){
	echo"<script language=Javascript>
	Javascript:document.location='login.php';
	</script>";
}else{ 
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Peminjaman | Berkas Rekam Medis</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <p class="brand-link">
      <span class="brand-text font-weight-light">Berkas Rekam Medis</span>
    </p>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a  class="d-block"><?=$_SESSION["namapengguna"];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item has-treeview">
            <a href="menu.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="peminjaman.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Peminjaman
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="logout.php" class="nav-link">
              
              <p>
                Logout
              </p>
            </a>
          </li>

        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Berkas Rekam Medis</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Berkas yang telah dipinjam dan dikembalikan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pengguna</th>
                  <th>Nomor Rekam Medis</th>
                  <th>Nama Peminjam</th>
                  <th>Nama Pasien</th>
                  <th>Nama Petugas</th>
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Kembali</th>
                  <th>Keterangan</th>
                </tr>
                </thead>
                <?php
                 $con=mysqli_connect ("localhost","root","","db_kesehatan");
                 if (isset($_POST['masuk'])=='insert')
                 {
                     $sql="INSERT INTO `table_berkas` (`namapengguna`, `norkm`, `namapeminjam`, `namapasien`, `namapetugas`, `tanggalpinjam`, `tanggalkembali`,`keterangan`)
                     VALUES ('$_POST[namapengguna]', '$_POST[norkm]', '$_POST[namapeminjam]', '$_POST[namapasien]', '$_POST[namapetugas]', '$_POST[tanggalpinjam]', '-', 'belum kembali');";
                     mysqli_query ($con,$sql);
                 }
                 $sql="SELECT * FROM table_berkas where namapengguna='$_SESSION[namapengguna]'";
                 $hasil=mysqli_query ($con,$sql);
                 $i=1;
                 while ($data=mysqli_fetch_row ($hasil))
                  {
                    echo "
                    <tr>
                    <td>$i</td>
                    <td>".$data[0]."</td>
                    <td>".$data[1]."</td>
                    <td>".$data[2]."</td>
                    <td>".$data[3]."</td>
                    <td>".$data[4]."</td>
                    <td>".$data[5]."</td>
                    <td>".$data[6]."</td>
                    <td>".$data[7]."</td>
                    </tr>
                    ";
                    $i++;
                  }
                 ?>
               
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php 
} ?>
