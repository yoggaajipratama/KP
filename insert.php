<?php include 'connection.php' ?>
<?php
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$tlp = $_POST['tlp'];
		$jk = $_POST['jenis_kertas'];
		$warna = $_POST['warna_kertas'];
		$image = $_FILES['image']['name'];
		$id = $nama.$tlp."_".$image;
		$tanggal = date("Y-m-d H:i:s");

		$target = "images/" . basename($image);
		$insert = mysqli_query($sql, "INSERT INTO dt_stkr VALUES ('$id', '$nama', '$tlp', '$jk', '$warna', '$image', 'Belum selesai', '$tanggal')");
		
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
			header("Location: index.php");
		} else {
			$msg = "Failed to upload image";
		}
	}

	if (isset($_POST['kertas_glossy']) {
		$tanggal = date("Y-m-d H:i:s");
		$jml = $_POST['jml'];
		$warna = $_POST['warna'];

		$kirim = mysqli_query($sql, "");
	}
?>