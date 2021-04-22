<?php
	//koneksi ke database mysql
	include "conn.php";
	
	//Mendapatkan variabel post
	$nama_pegawai = $_POST["nama"];
	echo $nama_pegawai;
	
	
	
	//Query menambahkan data
	$sql =" INSERT INTO `pegawai` (`id_member`, `nama_member`, `no_hp`, `alamat`) 
	VALUES ('003', 'prilly woak', '087987654321', 'jakarta utara , No 23 woakwoak');
	//echo $sql;
	//echo 'test';
?>