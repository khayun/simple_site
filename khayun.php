<?php

	include_once("function/helper.php");
	include_once("function/konek.php");
	
	
	
	
	$alamat = $_POST['alamat'];
	$sandi = md5($_POST ['sandi']);
	
	$query = mysqli_query($konek "SELECT * FROM user WHERE alamat='$alamat' AND sandi='$sandi'");
	
	if (mysql_num_rows($query) == 0) {
		header("location:".BASE_URL ."login.php?page=login&notif=true");
	} else {
		
		$row = mysql_fetch_assoc($query);
		
		echo $row['alamat'];

?>