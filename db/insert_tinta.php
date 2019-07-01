<?php 
	include 'connection.php';

	if (isset($_POST['submit'])) {
		$warna = $_POST['warna'];
		$jml = $_POST['jml'];
		$tanggal = date("Y-m-d H:i:s");
		$query = mysqli_query($sql, "UPDATE `sTinta` SET `jml` = jml+'$jml', tgl = '$tanggal' WHERE `sTinta`.`warna_tinta` = '$warna'");
		if ($query) {
			header('Location:../tinta.php');
		}else{
			echo "Gagal";
		}
	}
?>