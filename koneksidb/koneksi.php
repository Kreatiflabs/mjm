<?php
	$con = @mysqli_connect("localhost", "root", "root", "mjmdb");
	//cek koneksi error atau tidak
	if (!$con) {
		echo "Error: " . mysqli_connect_error();
		exit();
	}
?>