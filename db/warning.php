<?php
	$print= mysqli_query($sql, "SELECT * FROM sKertas");
	foreach ($print as $empty) {
		$wk = $empty['warna_kertas'];
		$jk = $empty['jenis'];
		if ($empty['jml']<=3 && $empty['jml']!=0) {
			echo "<h4 style='color: red;'>Warning kertas ".$wk." ".$jk." hampir habis!</h4>";
		}elseif ($empty['jml']==0) {
			echo "<h4 style='color: red;'>Warning kertas ".$wk." ".$jk." telah habis!</h4>";
		}
	}
?>