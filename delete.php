<?php include 'connection.php'; ?>
<?php
	$id = $_GET['id'];
	$delete = "DELETE FROM `dt_stkr` WHERE `dt_stkr`.`id` = '$id'";
	if(mysqli_query($sql, $delete)){
	    header('Location: index.php');
	}else{
	    echo "Hapus data gagal";
	}
?>