<?php
	$con = @mysqli_connect("localhost", "root", "root", "mjmdb");
	//cek koneksi error atau tidak
	if (!$con) {
		echo "Error: " . mysqli_connect_error();
		exit();
	}

// //ceking koneksi
// 	$sql    = 'SELECT * FROM produk';
// //menjalankan query
// 	$query  = mysqli_query($con, $sql);
// //membuat table
// 	echo "<table border=1>";
// 	echo "<th>ID Pasien";
// 	echo "<th>Nama Pasien";
// 	echo "<th>Alamat";
// 	echo "<th>No Telpon";
// //menjalankan fungsi perulangan dan mengeluarkan hasil dari query
// 	while ($row = mysqli_fetch_array($query))
// 	{
// 		echo "<tr>";
// 		echo "<td>".$row['idproduk'];
// 		echo "<td>".$row['nama'];
// 		echo "<td>".$row['gambar'];
// 		echo "<br />";
// 	}
?>