<?php
	session_start();
	include("../aksi/koneksi.php");
	if (@$_SESSION['userlogin'] == "")
	{
		header("location:index.php?pesan=Belum Login");
		exit;
	}
	mysql_query("DELETE FROM `mchatr/f` WHERE id_mchatrf = '$_GET[id_mchatrf]'");
	header("location:gejala.php");
?>