<!DOCTYPE html>
<html>
<head>
	<title> Koneksi Database </title>
</head>
<body>
<h1> Demo Koneksi database MySQL </h1>
	<?php
	$conn = mysqli_connect("localhost","root","","myDB1");

	//check connection
	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
		exit();
	} else {
		echo "<p>Sudah Connect</p>";
	}
	?>
</body>
</html>