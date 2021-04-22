<?php
	//koneksi ke database mysql
	include "conn.php";

	//membuat query/sql untuk mengambil seluruh data pegawai
	$sql = "SELECT * FROM pegawai";
	$query = mysql_query($conn, $sql);
	while($data = mysqli_fetch_array($query)){
		//echo $data["nama_pegawai"]." ";
		
		$item[] = array(
			'nama'=>$data["nama_pegawai"],
			'NIK'=>$data["NIK"],
		
		);
	}	
	
	$response = array(
		'status'=>'OK',
		'data'=>$item
	);
	echo json_encode($response);
?>