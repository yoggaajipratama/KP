<?php 
    $nama = $_POST['warna'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="css/paper.css">
	<title>Halaman Print A4</title>
</head>
<body>
<div class="book">
    <div class="page">
        <div class="subpage">
            <?php echo $nama; ?>
        </div>    
    </div>
</div>
</body>
</html>

