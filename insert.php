<?php include 'connection.php' ?>
<?php
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$tlp = $_POST['tlp'];
		$image = $_FILES['image']['name'];
		$target = "images/" . basename($image);
		$insert = mysqli_query($sql, "INSERT INTO dt_stkr VALUES (NULL,'$nama', '$tlp', '$image', 'Tersedia')");
		
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
			header("Location: index.php");
		} else {
			$msg = "Failed to upload image";
		}
	}
?>