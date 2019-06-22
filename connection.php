<?php 
	$sql = mysqli_connect("localhost", "root", "123", "stiker");
	if (!$sql) {
		echo "Gagal";
	}
	$selesai = "Selesai";
	$bselesai = "Belum Selesai";
	$glossy = "Glossy";
	$matte = "Matte";
	
	$jenis_kertas = mysqli_query($sql, "SELECT * FROM jenis_kertas");
	$warna_kertas = mysqli_query($sql, "SELECT * FROM warna");
	$warna_tinta = mysqli_query($sql, "SELECT * FROM sTinta");
	
	$result = mysqli_query($sql, "SELECT * FROM dt_stkr WHERE status = '$bselesai' ORDER BY id DESC");
	$kertasmatte = mysqli_query($sql, "SELECT * FROM sKertas WHERE jenis = '$matte' ORDER BY tgl DESC");
	
	$kertasglossy = mysqli_query($sql, "SELECT * FROM sKertas WHERE jenis = '$glossy' ORDER BY tgl DESC");
	$status_selesai = mysqli_query($sql, "SELECT * FROM dt_stkr WHERE status = '$selesai' ORDER BY id DESC");
	$status_bselesai = mysqli_query($sql, "SELECT * FROM dt_stkr WHERE status = '$bselesai' ORDER BY id DESC");
 ?>