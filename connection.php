<?php 
	$sql = mysqli_connect("localhost", "root", "", "stiker");
	if (!$sql) {
		echo "Gagal";
	}
	$result = mysqli_query($sql, "SELECT * FROM dt_stkr");		
 ?>