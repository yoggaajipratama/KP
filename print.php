<?php
	require 'db/connection.php';
	$warna = $_GET['warna'];
	$jk = $_GET['jenis'];
	$tanggal = date("Y-m-d H:i:s");
	$min = 1;
	$fixprint = mysqli_query($sql, "SELECT * FROM dt_stkr WHERE warna_kertas = '$warna' AND jenis_kertas = '$jk' AND status = 'Belum selesai' AND tahap = 'print' ORDER BY tanggal ASC");
	$query = mysqli_query($sql, "UPDATE sKertas SET jml = jml-'$min', tgl = '$tanggal' WHERE warna_kertas = '$warna' AND jenis = '$jk'");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="css/paper.css">
	<title>Halaman Print A4</title>
</head>
<body onload="read()">
	<div class="book">
	    <div class="page" id="page">
	        <div id="sub">
		    	<table border="1">
			    	<?php foreach ($fixprint as $key): ?>
		            	<img src="images/<?= $key['image']; ?>">&nbsp;
					<?php endforeach ?>
		    	</table>
	        </div>
	    </div>
	</div>
	<script type="text/javascript">window.print();</script>
</body>
</html>