<?php 
	include 'connection.php';
	if (isset($_POST['submit'])) {
		$warna = $_POST['warna'];
		$jml = $_POST['jml'];
		$id = $_POST['id'];
		$tanggal = date("Y-m-d H:i:s");

		$query = mysqli_query($sql, "UPDATE sKertas SET jml = jml+'$jml', tgl = '$tanggal' WHERE warna_kertas = '$warna' AND jenis = 'Glossy'");
		if ($query) {
			header('Location:glossy.php');
		}else{
			echo "Gagal";
		}
	}
?>