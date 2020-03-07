<?php
	include('../koneksi.php');
      if(isset($_POST['simpan'])){
        $name = $_POST['name'];
		$lat = $_POST['lat'];
		$lng = $_POST['lng']; 
        
    
          $input = mysql_query("INSERT INTO markers (name, lat, lng )
             VALUES('$name','$lat','$lng' )") or die(mysql_error());
            if($input){
              header('location:../admin/lokasi.php');
            }else{
              echo '<div class="alert alert-danger alert-dismissable">Ups, Anda Gagal Melakukan Pendaftaran ! <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
            }
    }
?>