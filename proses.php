<?php

	include_once ("function/konek.php");
	include_once ("function/helper.php");
	
	$alamat = $_POST['alamat'];
	$sandi = $_POST ['sandi'];
	$status = $_POST['status'];
	$email = $_POST['email'];
	

	mysqli_query($konek, "INSERT INTO user(alamat, sandi, email, status)
				VALUES ('$alamat', '$sandi', '$email', '$status')");
?>
