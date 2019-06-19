<?php include 'connection.php' ?>
<?php
if (isset($_POST['upload'])) {


	$nama = $_POST['nama'];
	$tlp = $_POST['tlp'];
	$image = $_FILES['image']['name'];
	//$image = $_POST['image'];
	$target = "images/" . basename($image);
	$insert = mysqli_query($sql, "INSERT INTO dt_stkr VALUES (NULL,'$nama', '$tlp', '$image', 'Tersedia')");
	//mysqli_query($db, $sql);
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
		header("Location: index.php");
	} else {
		$msg = "Failed to upload image";
	}
	/*if (!$insert) {
		echo $sql->error();
	}else{
		header("Location: index.php");
	}*/
}
?>