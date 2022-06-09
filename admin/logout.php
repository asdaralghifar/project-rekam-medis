<?php
session_start();
unset($_SESSION['namapengguna']);
session_destroy();

echo"<script language=javascript>
	window.alert('Anda sudah logout');
	javascript:document.location='indexlogin.php';
	</script>";

?>