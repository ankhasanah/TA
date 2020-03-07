<?php
	include("../aksi/koneksi.php");
	if (isset($_POST['button']))
	{
		$querylogin = mysql_query("SELECT * FROM login WHERE username = '$_POST[username]' AND password = '$_POST[password]'");
		if ($datalogin = mysql_fetch_array($querylogin))
		{
			session_start();
			$_SESSION['userlogin'] = $datalogin['username'];
			header("location:admin.php");
		}
		else
		{
			header("location:index.php?pesan=Login Gagal");
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Pakar</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


	    <!-- Navigation -->
	    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="index.php">Login Admin</a>
	            </div>
	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav">
	                    
	                    
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container -->
	    </nav>

	    <!-- Page Content -->
	    <div class="container">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="panel panel-default">
					  <div class="panel-heading"> <strong>Login</strong></div>
					  <div class="panel-body">
							<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000099">
							  <tr>
							    <td align="center" valign="top" bgcolor="#FFFFFF">
							      <br />
							      <form id="form1" name="form1" method="post" action="">
							        <table width="300" border="0" cellpadding="5" cellspacing="1" bgcolor="#000099">
							          <tr>
							            <td bgcolor="#FFFFFF">Username</td>
							            <td bgcolor="#FFFFFF"><input type="text" name="username" id="username"  required class="form-control"/></td>
							          </tr>
							          <tr>
							            <td bgcolor="#FFFFFF">Password</td>
							            <td bgcolor="#FFFFFF"><input type="password"  name="password" id="password" required class="form-control"/></td>
							          </tr>
							          <tr>
							            <td bgcolor="#FFFFFF">&nbsp;</td>
							            <td bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="Login" style="float:right;" class="btn btn-primary"/></td>
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
					  </div>
					</div>
				</div>
	        <!-- Jumbotron Header -->


	        <hr>



	        <!-- Footer -->
	        

	    </div>
	    <!-- /.container -->

	    <!-- jQuery -->
	    <script src="../assets/js/jquery.js"></script>

	    <!-- Bootstrap Core JavaScript -->
	    <script src="../assets/js/bootstrap.min.js"></script>

	</body>

	</html>

</body>
</html>
