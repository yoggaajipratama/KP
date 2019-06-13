<?php 
	$sql = mysqli_connect("localhost", "root", "123", "stiker");
	if (!$sql) {
		echo "Gagal";
	}
	$query = mysqli_query($sql, "SELECT * FROM dt_stkr");	
 ?>