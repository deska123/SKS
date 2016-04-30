<?php
	$namaServer = "localhost";
	$username = "root";
	$password = "";
	$database = "sks";
	
	$koneksi = mysqli_connect($namaServer, $username, $password, $database);
	
	if(!$koneksi) {
		die("Koneksi gagal : " . mysqli_connect_error());
	}
?>