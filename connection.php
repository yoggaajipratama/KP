<?php 
	$sql = mysqli_connect("localhost", "root", "", "stiker");
	if (!$sql) {
		echo "Gagal";
	}
	$selesai = "Selesai";
	$bselesai = "Belum Selesai";
	
	$result = mysqli_query($sql, "SELECT * FROM dt_stkr");
	$jenis_kertas = mysqli_query($sql, "SELECT * FROM jenis_kertas");
	$warna_kertas = mysqli_query($sql, "SELECT * FROM warna");

	$warna_tinta = mysqli_query($sql, "SELECT * FROM warna");
	$status_selesai = mysqli_query($sql, "SELECT * FROM dt_stkr WHERE status = '$selesai'");
	$status_bselesai = mysqli_query($sql, "SELECT * FROM dt_stkr WHERE status = '$bselesai'");
 ?>