<?php
	session_start();
	include("../aksi/koneksi.php");
	if (@$_SESSION['userlogin'] == "")
	{
		header("location:index.php?pesan=Belum Login");
		exit;
	}
	mysql_query("DELETE FROM `penyaring` WHERE id = '$_GET[id]'");
	header("location:follow.php");
?>