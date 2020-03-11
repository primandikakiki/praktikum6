<?php
include "connect.php";

//Create Database
$sql = "INSERT INTO buku_tamu (nama, email, isi)
VALUES ('Kiki', 'primandika@gmail.com', 'VVIP')";
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>