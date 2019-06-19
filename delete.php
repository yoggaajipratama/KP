<?php include 'connection.php'; ?>
<?php
	$id = $_GET['id'];
	$query = "DELETE FROM dt_stkr WHERE id = $id";
	if(mysqli_query($sql, $query)){
	    header('Location: index.php');
	}else{
	    echo "Hapus data gagal";
	}
?>