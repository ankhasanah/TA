<?php include "aksi/koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" >Admin</a>
        </div>
          <div class="navbar-collapse collapse">
         
          <form class="navbar-form navbar-right">
            <a class="btn btn-success" href="../aksi/logout.php">Log Out</a>
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li ><a href="adminhome.php">Admin</a></li>
            <li><a href="order.php">Order</a></li>
            <li><a href="user.php">User</a></li>
            <li><a href="dataalamat.php">Alamat</a></li>
            <li class="active"><a href="lokasi.php">Lokasi</a></li>
            <li><a href="pinformasi.php">Permintaan Informasi</a></li>
            <li><a href="keluhan.php">Keluhan</a></li>
            <li><a href="hisorder.php">Histori Order</a></li>
          </ul>
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Lokasi</h1>
              <form method="POST" action="aksi/input_loksai.php" enctype="multipart/form-data"> 
                <div >
               <table class="table table-striped">
                 <tr>
                  <td>Id Gejela</td>
                  <td><input class="form-control" type="text" name="id_mchatrf"></td>
                 </tr>
                 <tr>
                  <td>Gejala</td>
                  <td><input class="form-control" type="text" name='pertanyaan' id='pertanyaan'></td>
                 </tr>
                 <tr>
                  <td><input type="submit" value="simpan" name="simpan"></td>
                </tr>
               </table>
               </div>
               </form>
          
            <table class="table table-striped" >
                    <tr>
                      <td align="center">Id Gejala</td>
                      <td align="center">Gejala</td>
                    </tr>
                    
                      <?php
                      $cari = mysql_query("select * from 'mchatr/f' ORDER BY id_mchatrf");
                      
                      while($dapat = mysql_fetch_array($cari)){
                        echo "
                          <tr>
                           <td align=center>$dapat[id_mchatrf]</td>
                           <td align=center>$dapat[pertanyaan]</td>
                          </tr>
                        ";
                      }
                  ?>
                  
                  </table>

          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
