<?php 
	include 'connection.php';
	if (isset($_POST['submit'])) {
		$warna = $_POST['warna'];
		$jml = $_POST['jml'];
		$id = $_POST['id'];

		/*$query = mysqli_query($sql, "UPDATE sKertas SET jml = '$jml' WHERE warna_kertas = '$warna'");*/
		$query = mysqli_query($sql, "UPDATE sKertas SET jml = '$jml' WHERE id = '$id'");
		if ($query) {
			echo "Berhasil";
		}else{
			echo "Gagal";
		}
	}
?>