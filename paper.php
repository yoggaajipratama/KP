<?php 
	require 'db/print.php'; 
	$warna = $_POST['warna'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="css/paper.css">
	<title>Halaman Print A4</title>
</head>
<body onload="read()">
	<nav>
	    <ul>
	        <li><a href="index.php"><b>Home</b></a></li>
	        <li>
	        	<form action="print.php" method="get">
			    	<input type="hidden" name="warna" value="<?= $warna; ?>">
			    	<input type="hidden" name="jenis" value="<?= $jk; ?>">
					<button type="submit" onclick="return confirm('Apakah anda yakin akan melakukan tahap ini? (tahap ini tidak bisa dibatalkan karena akan langsung mengurangi jumlah kertas dari database!)');" class="print"><b>Print</b></button>
				</form>
	        </li>
	        <li><a href="#" id="printh"></a></li>
	  		<!--<li><a href="#" id="printp"></a></li> -->
	        <form action="db/cm_rugi.php" method="post">
	        <li>
	        		<input type="text" name="cm" class="harga" placeholder="0.00 cm">
					<input type="text" name="rugi" class="harga" placeholder="Rp. 0/cm">
	        </li>
			<li>
				<button class="print" type="submit" name="submit">Simpan</button>
			</li>
			</form>
	    </ul>
	</nav>
	<div class="book">
	    <div class="page" id="page" style="background-color: <?= $warna; ?>">
	        <div id="sub">
	        	<div class="nama">
	        		<table border="1">
				    	<?php foreach ($print as $key): ?>
			            	<img src="images/<?= $key['image']; ?>">&nbsp;
						<?php endforeach ?>
		        	</table>
	        	</div>
	        </div>
	    </div>
	</div>
</body>
<script src="dist/js/rugi.js"></script>
</html>