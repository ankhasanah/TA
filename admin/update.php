<?php  
	include("../aksi/koneksi.php");
	$id_mchatrf= $_POST['id_mchatrf'];
	$pertanyaan = $_POST['pertanyaan'];
	$query = mysql_query("UPDATE `mchatr/f` SET id_mchatrf='$id_mchatrf',pertanyaan='$pertanyaan' where id_mchatrf='$id_mchatrf'");
	header('location: gejala.php');
?>