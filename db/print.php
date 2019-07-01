<?php 
	require 'connection.php';
	$warna = $_POST['warna'];
    $jk = $_POST['jenis'];
	$print = mysqli_query($sql, "SELECT * FROM dt_stkr WHERE warna_kertas = '$warna' AND jenis_kertas = '$jk' AND status = 'Belum selesai' AND tahap = 'print' ORDER BY tanggal ASC");
?>