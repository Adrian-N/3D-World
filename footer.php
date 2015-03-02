<footer>
	<?php
		//check for sub folder
		//source: http://stackoverflow.com/questions/9997391/php-get-name-of-current-directory
		$subfolder = explode('\\', getcwd());
		$subfolder = $subfolder[count($subfolder)-1];
		$admin = "admin";

		if ($subfolder == $admin) {
			echo '<p><a href="../index.php">3D Printing World</a>  &squf; Copyright &copy; 2015 &squf; <a href="config.php">Login</a></p>';
		} else {
			echo '<p><a href="index.php">3D Printing World</a>  &squf; Copyright &copy; 2015 &squf; <a href="admin/config.php">Login</a></p>';
		}
	?>
</footer>