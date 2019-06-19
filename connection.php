<?php 
	$sql = mysqli_connect("localhost", "root", "123", "stiker");
	if (!$sql) {
		echo "Gagal";
	}
	$result = mysqli_query($sql, "SELECT * FROM dt_stkr");		
 ?>