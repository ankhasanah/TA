<?php  
	include("../aksi/koneksi.php");
	$id= $_POST['id'];
	$penyaring = $_POST['penyaring'];
	$query = mysql_query("UPDATE `penyaring` SET id='$id', penyaring='$penyaring' where id='$id'");
	header('location: follow.php');
?>