<?php 
	include 'connection.php';

	if (isset($_POST['submit'])) {
		$warna = $_POST['warna'];
		$jml = $_POST['jml'];
		$query = mysqli_query($sql, "UPDATE `sTinta` SET `jml` = '$jml' WHERE `sTinta`.`warna_tinta` = '$warna'");
		if ($query) {
			header('Location:../tinta.php');
		}else{
			echo "Gagal";
		}
	}
?>