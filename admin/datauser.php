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
		mysql_query("INSERT INTO `penyaring` (id, penyaring) VALUES ('$_POST[id]', '$_POST[penyaring]') ");
		header("location:follow.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sistem Pakar Metode CF (Certainty Factor)</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Dashboard">
	<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
	<!--external css-->
	<link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link rel="../stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
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
	<div>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="#"><img src="../assets/img/default.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION['userlogin']; ?></h5>

                  	<li class="mt">
                      <a href="admin.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  	</li>
    			  	<li class="menu">
                      <a href="gejala.php">
                          <i class="fa fa-th"></i>
                          <span>Gejala M-Chat R</span>
                      </a>
                  	</li>
                    <li class="menu">
                      <a class="" href="follow.php">
                          <i class="fa fa-th"></i>
                          <span>Gejala Observasi</span>
                      </a>
                    </li>
                    <li class="menu">
                      <a class="" href="datauser.php">
                          <i class="fa fa-th"></i>
                          <span>Data User</span>
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
						    <td align="center" bgcolor="#FFFFFF"><br />
						      
						       <form id="form1" name="form1" method="post" action="">
						    <strong>Data Gejala</strong><br />
						      <br />
						      </form>
						      <table width="468" class="table table-bordered">
						        <tr>
						          <td width="53" align="center" bgcolor="#FFFFFF"><span class="style1">NIK user</span></td>
						          <td width="80%" align="center" bgcolor="#FFFFFF"><span class="style1">Nama anak</span></td>
						          <td align="center" bgcolor="#FFFFFF"><span class="style1">E-mail</span> </td>
						          <td align="center" bgcolor="#FFFFFF"><span class="style1">Username</span> </td>
						          <td align="center" bgcolor="#FFFFFF"><span class="style1">Umur</span> </td>
						        </tr>
						        <?php
				
									$query = "SELECT * FROM `pengguna`";
									$hasil=mysql_query($query);

									while ($row = mysql_fetch_array($hasil))
									{
								
						        echo "<tr>";
						          echo "<td bgcolor=#FFFFFF align=center>  $row[iduser]</td>";
						          echo"<td bgcolor=#FFFFFF> $row[nama]</td>";
						          echo"<td bgcolor=#FFFFFF> $row[email]</td>";
						          echo"<td bgcolor=#FFFFFF> $row[username]</td>";
						          echo"<td bgcolor=#FFFFFF> $row[umur]</td>";
						       echo "</tr>";
						        
									}
								?>
						      </table>
						      <br />      <table width="100%" border="0" cellspacing="0" cellpadding="0">
						        <tr>
						          <td width="47%" height="35" align="left">&nbsp;</td>
						          <td width="53%" height="35" align="right">&nbsp;</td>
						        </tr>
						      </table></td>
						  </tr>
						</table>

					</section>
			</section>


</div>
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
