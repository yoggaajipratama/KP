<?php include 'connection.php' ?>
<?php 
	$nama = $_POST['nama'];
	$tlp = $_POST['tlp'];
	$gambar = $_POST['image'];
	$insert = mysqli_query($sql, "INSERT INTO dt_stkr VALUES (NULL,'$nama', '$tlp', 'test', 'Tersedia')");
	if (!$insert) {
		echo $sql->error();
	}else{
		header("Location: index.php");
	}
?>