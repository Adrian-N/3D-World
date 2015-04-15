<footer id="altFooter">
<!-- Alternative footer for pages longer than height of screen. -->
	<?php
		/*
		#Author: Adrian Nowak
		#Project: CTP
		#Notes: Footer
		#Resources:
		#http://stackoverflow.com/questions/2053245/how-can-i-detect-if-the-user-is-on-localhost-in-php
		#http://stackoverflow.com/questions/9997391/php-get-name-of-current-directory

		*/

		//produce footer based on three values:
		$cookieExist = false;
		$adminArea = false;
		$localhost = false;

		//detect localhost
		//localhost IPs
		$localhostIP = array(
		    '127.0.0.1',
		    '::1'
		);

		//does the user IP is the same as localhost IP?
		if(!in_array($_SERVER['REMOTE_ADDR'], $localhostIP)){
		   	$localhost = false;
		}else{
			$localhost = true;
		}
		
		//check if cookie exist
		if(isset($_COOKIE['Key_my_site'])) {
			$cookieExist = true;
		}else{
			$cookieExist = false;
		}

		//check for sub folder
		$fullPath = getcwd();
		if ($localhost == true) {
			$arrayPath = explode('\\', $fullPath);
		} else {
			$arrayPath = explode('/', $fullPath);
		}
		$currentFolder = array_pop($arrayPath);
		$admin = "admin";
		if ($currentFolder == $admin) {
			$adminArea = true;
		}else{
			$adminArea = false;
		}

		//for testing only
		// if ($adminArea == false & $cookieExist == false) {
		// 	echo "admin area false AND cookieExist false";
		// } elseif ($adminArea == true & $cookieExist == false) {
		// 	echo "admin area true AND cookieExist false";
		// }elseif ($adminArea == true & $cookieExist == true) {
		// 	echo "admin area true AND cookieExist true";
		// }elseif ($adminArea == false & $cookieExist == true) {
		// 	echo "admin area false AND cookieExist true";
		// }
		

		if ($adminArea == false & $cookieExist == false) {
			echo '<p><a href="index.php">3D Printing World</a>  &squf; Copyright &copy; 2015 &squf; <a href="admin/config.php">Login</a></p>';
		} elseif ($adminArea == true & $cookieExist == false) {
			echo '<p><a href="../index.php">3D Printing World</a>  &squf; Copyright &copy; 2015 &squf; <a href="config.php">Login</a></p>';
		}elseif ($adminArea == true & $cookieExist == true) {
			echo '<p><a href="../index.php">3D Printing World</a>  &squf; Copyright &copy; 2015 &squf; <a href="logout.php">Log Out</a></p>';
		}elseif ($adminArea == false & $cookieExist == true) {
			echo '<p><a href="index.php">3D Printing World</a>  &squf; Copyright &copy; 2015 &squf; <a href="logout.php">Log Out</a></p>';
		}
	?>
</footer>