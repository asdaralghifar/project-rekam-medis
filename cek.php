<?php
include ("koneksi.php");
if (isset($_POST["login"]))
{
    $namapengguna=$_POST["namapengguna"];
    $sandi=md5($_POST["sandi"]);
    $sql=mysqli_query ($con,"SELECT*FROM table_admin WHERE namapengguna='$namapengguna' AND sandi='$sandi'");
    $jumlah=mysqli_num_rows($sql);
    $data=mysqli_fetch_array($sql);
    if ($jumlah>0)
    {
        session_start();
        $_SESSION["namapengguna"]=$namapengguna;
        if ($data["level"]=='pengguna')
        {
            echo "<script language=javascript>
            window.alert ('Anda Berhasil Login')
            javascript:document.location='menu.php'
            </script>";
        }
    }
    else
    {
        echo "<script language=javascript>
        window.alert ('Login Gagal')
        javascript:document.location='login.php'
        </script>";
    }
}
?>