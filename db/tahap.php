<?php 
	require 'connection.php';
	$id = $_GET['id'];
    $show = mysqli_query($sql, "UPDATE dt_stkr SET tahap='print' WHERE id = '$id'");
    header('Location:../index.php');
    
?>