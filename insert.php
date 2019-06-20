<?php include 'connection.php' ?>
<?php
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$tlp = $_POST['tlp'];
		$jk = $_POST['jenis_kertas'];
		$warna = $_POST['warna_kertas'];

		$image = $_FILES['image']['name'];
		$target = "images/" . basename($image);
		$insert = mysqli_query($sql, "INSERT INTO dt_stkr VALUES (NULL,'$nama', '$tlp', '$jk', '$warna', '$image', 'Belum selesai')");
		
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
			header("Location: index.php");
		} else {
			$msg = "Failed to upload image";
		}
	}
?>