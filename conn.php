<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "latihanapi";
	
	$conn = mysql_connect($servername, $username, $password, $databasename)
	if(!$conn){
		die("koneksi tidak berhasil");
	}
?>