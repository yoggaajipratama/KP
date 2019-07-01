<?php
	require 'connection.php';
	if (isset($_POST['submit'])) {
		$cm = $_POST['cm'];
		$rugi = $_POST['rugi'];
		$hitung = $cm*$rugi;
		$input = "INSERT INTO `kerugian` (`id`, `potongan_kertas`, `kerugian_uang`) VALUES (NULL, '$cm', '$hitung')";
		$query = mysqli_query($sql, $input);
		if ($query) {
			header('Location:../cetak.php');
		}
	}
?>