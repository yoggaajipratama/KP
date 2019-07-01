<?php include 'connection.php' ?>
<?php
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$tlp = $_POST['tlp'];
		$jk = $_POST['jenis_kertas'];
		$warna = $_POST['warna_kertas'];
		$image = $_FILES['image']['name'];
		$format = pathinfo($image, PATHINFO_EXTENSION);
		$id = $nama.$tlp."_".$image;
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date("Y-m-d H:i:s");
		$temp = $_FILES['image']['tmp_name'];
      
		if($format == "jpg" ||$format == "jpeg"||$format == "png"){
			$maxW = 793;
			$maxH = 1122;
			$realsize = GetImageSize($temp);

			if ($realsize[0]>$maxW || $realsize[1]>$maxH) {
				echo '<script type="text/javascript">'; 
				echo 'alert("Ukuran gambar terlalu besar gunakan gambar dengan max 793x1122 pixel!");'; 
				echo 'window.location.href = "../index.php";';
				echo '</script>';
			}
			else{
				$target = "../images/" . basename($image);
				$insert = mysqli_query($sql, "INSERT INTO dt_stkr VALUES ('$id', '$nama', '$tlp', '$jk', '$warna', '$image', 'Belum selesai', '$tanggal', 'pending')");
				
				if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
					session_start();
					$_SESSION['msg'] = "Image uploaded successfully";
					header("Location: ../index.php");
					exit();
				} else {
					$_SESSION['msg'] = "Failed to upload image";
					echo '<script type="text/javascript">'; 
					echo 'alert("Upload yang anda masukkan gagal, silakan ulangi kembali!");'; 
					echo 'window.location.href = "../index.php";';
					echo '</script>';
				}
			}
		}
		else{
			echo '<script type="text/javascript">'; 
			echo 'alert("Format tidak didukung pastikan file anda berformat jpg/jpeg/png!");'; 
			echo 'window.location.href = "../index.php";';
			echo '</script>';
		}
	}
?>