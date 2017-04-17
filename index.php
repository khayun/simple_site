<?php

	include_once("function/helper.php");
	
	$page = isset ($_GET["page"]) ? $_GET ["page"] : false;
	

?>

<!DOCTYPE html>
<html>

	<head>
		<title> Mining Gate </title>
		<link href="<?php echo BASE_URL, "css/style.css"; ?>" type="text/css" rel="stylesheet"; />
	</head>
	
	<body>
	
	<div id "container">
		<center><div id "header">
			<a href="<?php echo BASE_URL, "index.php"; ?>">
				<img src="<?php echo BASE_URL, "images/lugu.png"; ?>" />
			</a>
			
			<div id "menu">
			</div>
			<div id "user">
				<a href="<?php echo BASE_URL. "index.php?page=login"; ?>">login</a>
				<a href="<?php echo BASE_URL. "index.php?page=register"; ?>">register</a>
			</div>
		</div></center>
		
		<div id "content">
		
			<?php $filename ="$page.php";
			echo $filemaname;
			?>
		
		</div>
		
		<center><div id "footer">
			<p> Mining Gate by Australia and New Zaeland Bank </p>
		</div></center>
	</div>
	
	</body>

</html>