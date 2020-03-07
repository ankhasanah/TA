<?php
	session_start();
	include("../aksi/koneksi.php");
	if (@$_SESSION['userlogin'] == "")
	{
		header("location:user.php?pesan=Belum ada data masuk");
		exit;
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
            <a href="admin.php" class="logo"><b>Data user</b></a>
            <!--logo end-->
        </header>
      <!--header end-->

			<!--sidebar start-->
      
      <!--sidebar end-->

			<section id="main-content">
					<section class="wrapper">
						<br>

						<table width="100%" class="table">
						  <tr>
						    <td height="50" bgcolor="#FFFFFF"><span class="style1">Skrining M-Chat R/F</span></td>
						  </tr>
						  <tr>
						    <td align="center" valign="top" bgcolor="#FFFFFF"><br />
						      <strong>Data Diri</strong><br />
						      <br />
						      <form id="form1" name="form1" method="post" action="">
						        <table width="350" border="0" cellpadding="5" cellspacing="1" bgcolor="#000099">
						          <tr>
						            <td bgcolor="#FFFFFF">Nama</td>
						            <td bgcolor="#FFFFFF"><?php echo $_SESSION['userlogin']; ?></td>
						          </tr>
						          <tr>
						            <td bgcolor="#FFFFFF">Umur</td>
						            <td bgcolor="#FFFFFF"><?php echo $_SESSION['userlogin']; ?></td>
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
