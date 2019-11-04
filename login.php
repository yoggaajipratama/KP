<?php
	include "koneksi.php";
	$id_user		= $_POST['id_user'];
	$password		= $_POST['password'];
	$op 			= $_GET['op'];

	if($op=="in"){
		$sql = mysql_query("SELECT * FROM tb_user WHERE id_user='$id_user' AND password='$password'");
		if(mysql_num_rows($sql)==1){
			$qry = mysql_fetch_array($sql);
			$_SESSION['id_user'] = $qry['id_user'];
			$_SESSION['nama_user'] = $qry['nama_user'];

			if($qry){
				header("location:home.php");
			}
		}
		else{
			echo "Username atau password tidak sesuai ...! &nbsp; <button type='button' onclick=location.href='index.php'>Back</button>";
		}
	}else if($op=="out"){
		unset($_SESSION['id_user']);
		header("location:index.php");
	}
?>