<?php
	session_start();
	include("../aksi/koneksi.php");
	if (@$_SESSION['userlogin'] == "")
	{
		header("location:index.php?pesan=Belum Login");
		exit;
	}
	if (isset($_POST['button']))
	{
		mysql_query("INSERT INTO `mchatr/f` (id_mchatrf, pertanyaan) VALUES('$_POST[id_mchatrf]', '$_POST[pertanyaan]')");
		header("location:gejala.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Dashboard">
	<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
	<!--external css-->
	<link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
	<link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">

	<!-- Custom styles for this template -->
	<link href="../assets/css/style.css" rel="stylesheet">
	<link href="../assets/css/style-responsive.css" rel="stylesheet">

	<script src="../assets/js/chart-master/Chart.js"></script>
</head>
<body>

	<section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="admin.php" class="logo"><b>Panel Admin</b></a>
            <!--logo end-->

            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php" style="color:black;">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->

			<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="#"><img src="../assets/img/default.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION['userlogin']; ?></h5>

                  <li class="mt">
                      <a class="active" href="admin.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
									<li class="menu">
                      <a class="active" href="gejala.php">
                          <i class="fa fa-th"></i>
                          <span>Gejala</span>
                      </a>
                  </li>
                  <li class="menu">
                      <a class="" href="follow.php">
                          <i class="fa-book "></i>
                          <span>Follow</span>
                      </a>
                  	</li>
									<li class="menu">
                      <a href="ganti-password.php">
                          <i class="fa fa-key"></i>
                          <span>Ganti Password</span>
                      </a>
                  </li>

									<li class="menu">
                      <a href="logout.php">
                          <i class="fa fa-power-off"></i>
                          <span>Logout</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

			<section id="main-content">
					<section class="wrapper">
						<br>

						<table width="100%" class="table">
						  <tr>
						    <td height="50" bgcolor="#FFFFFF"><span class="style1">Sistem Pakar </span></td>
						  </tr>
						  <tr>
						    <td align="center" valign="top" bgcolor="#FFFFFF"><br />
						      <strong>Tambah Data Gejala</strong><br />
						      <br />
						      <form id="form1" name="form1" method="post" action="">
						        <table width="350" border="0" cellpadding="5" cellspacing="1" bgcolor="#000099">
						          <tr>
						            <td width="128" bgcolor="#FFFFFF">ID Gejala</td>
						            <td width="249" bgcolor="#FFFFFF"><input type="text" name="id_mchatrf" id="id_mchatrf" class="form-control" required/></td>
						          </tr>
						          <tr>
						            <td bgcolor="#FFFFFF">Nama Gejala</td>
						            <td bgcolor="#FFFFFF"><input type="text" name="pertanyaan" id="pertanyaan" class="form-control" required/></td>
						          </tr>
						          <tr>
						            <td bgcolor="#FFFFFF">&nbsp;</td>
						            <td bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="Simpan" class="btn btn-primary" style="float:right;"/></td>
						          </tr>
						        </table>
						      </form>
						      <br />
						    <br /></td>
						  </tr>
						  <tr>
						    <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">

						    </table></td>
						  </tr>
						</table>

					</section>
			</section>









</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/jquery-1.8.3.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../assets/js/jquery.scrollTo.min.js"></script>
<script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="../assets/js/jquery.sparkline.js"></script>


<!--common script for all pages-->
<script src="../assets/js/common-scripts.js"></script>

<script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="../assets/js/gritter-conf.js"></script>

<!--script for this page-->
<script src="../assets/js/sparkline-chart.js"></script>
<script src="../assets/js/zabuto_calendar.js"></script>



</body>
</html>
