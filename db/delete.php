<?php include 'connection.php'; ?>
<?php
	$id = $_GET['id'];
	$show = mysqli_query($sql, "SELECT image FROM dt_stkr WHERE id ='$id' ");
	$data = mysqli_fetch_array($show);
	$image = $data['image'];
	unlink("images/".$image);
	$delete = mysqli_query($sql, "DELETE FROM `dt_stkr` WHERE `dt_stkr`.`id` = '$id'");


	if($delete){
  		header('Location: ../index.php');
	}else{
	    echo "Hapus data gagal";
	}
?>