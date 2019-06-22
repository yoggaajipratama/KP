<?php 
	include 'connection.php';
	if ($_POST['submit']) {
		$id = $_POST['id'];
		$query = "UPDATE `dt_stkr` SET `status` = 'Selesai' WHERE `dt_stkr`.`id` = '$id';";
		$transaksi_selesai = mysqli_query($sql, $query);
		if ($transaksi_selesai) {
			header('Location:../ts.php');
		}else{
			echo "Gagal";
		}
	}
?>