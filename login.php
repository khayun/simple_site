<div id "container-user-akses">
	<center><form action="<?php echo BASE_URL, "khayun.php"; ?>" method="POST">
		<?php
					
			$notif = isset($_GET['notif']) ? $_GET['notif'] : false;
						
			if ($notif == true) {
				echo "<div class='notif'>Wrong Password Lets singing justin bieber songs</div>";
			}
						
						
		?>
			<input type="text" title="34 characters" maxlength="34" name="alamat" value="" placeholder="Enter Your Bitcoin Address" class="form-control">
			<input type="password" title="20 characters" maxlength="20" name="sandi" value="" placeholder="Enter Password" class="form-control">
			</br>
			<h1><center><span><input type="submit" value="Login" /></span></center></h1>
	</form></center>
</div>