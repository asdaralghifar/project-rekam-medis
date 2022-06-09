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
        if ($data["level"]==1)
        {
            echo "<script language=javascript>
            window.alert ('Anda Berhasil Login')
            javascript:document.location='#'
            </script>";
        }
        else if ($data["level"]==2)
        {
            echo "<script language=javascript>
            window.alert ('Anda login sebagai Admin')
            javascript:document.location='menu.php'
            </script>";
        }
        else
        {
            echo "<script language=javascript>
            window.alert ('Anda login sebagai dosen')
            javascript:document.location='menu2.php'
            </script>";
        }
    }
    else
    {
        echo "<script language=javascript>
        window.alert ('Anda belum Login')
        javascript:document.location='indexlogin.php'
        </script>";
    }
}
?>