<?php 
	/*
	#File: loginEngine.php
	#Author: Adrian Nowak @ UWE
	#Project: CTP
	*/


	//check required fields
		if(!$_POST['username'] | !$_POST['pass']) {
			//JavaScript Alert
			echo '<script>alert("Please fill out required fields.");</script>';

			//Go Back
			echo "<script> window.history.back()</script>";

			//end PHP
			exit;
		}

	//get db data
		require("../php/data.php");

	//connect to database 
		mysql_connect($host, $user, $password) or die(mysql_error()); 
		mysql_select_db($database) or die(mysql_error()); 

	//Check if the username exists. 
		$check = mysql_query("SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());

		while($info = mysql_fetch_array( $check )){

			//Display message and redirect user back if password is wrong.
			if ($_POST['pass'] != $info['password']) {
				//JavaScript Alert
				echo '<script>alert("Wrong Username or Password");</script>';

				//Go Back
				echo "<script> window.history.back()</script>";

				//end PHP
				exit;
			}else{

				//create cookie
				$_POST['username'] = stripslashes($_POST['username']); 
				$hour = time() + 3600;
				setcookie('ID_my_site', $_POST['username'], $hour); 
				setcookie('Key_my_site', $_POST['pass'], $hour);
				$url = "config.php";
				function redirect($url){
					$string='<script type="text/javascript">window.location = "' . $url . '" </script>';
					echo $string;
				}
				redirect($url);
			}
		}

	//Display message if username doesn’t exist.
		$checkUserName = mysql_num_rows($check);
		 if ($checkUserName == 0) {
		 	//JavaScript Alert
			echo '<script>alert("Wrong Username or Password");</script>';

			//Go Back
			echo "<script> window.history.back()</script>";

			//end PHP
			exit;
		}
?>