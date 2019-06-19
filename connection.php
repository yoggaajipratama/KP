<?php 
	$sql = mysqli_connect("localhost", "root", "", "stiker");
	if (!$sql) {
		echo "Gagal";
	}
	//$query = mysqli_query($sql, "SELECT * FROM dt_stkr");
	$result = mysqli_query($sql, "SELECT * FROM dt_stkr");		
 ?>