$con = @mysqli_connect("localhost", "root", "", "nisasekripsi");
	//cek koneksi error atau tidak
	if ($con->connect_error) {
		echo "Error: " . $con->connect_error;
		exit();
	}