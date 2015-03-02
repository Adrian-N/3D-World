<?php
$url="config.php";
function redirect($url){
$string = '<script type="text/javascript"> window.location = "' . $url . '" </script>';
echo $string;
}//redirect($url);


// conn data
require("../php/data.php");

//connect to database 
mysql_connect($host, $user, $password) or die(mysql_error()); 
mysql_select_db($database) or die(mysql_error()); 

if(!$_POST['username'] | !$_POST['pass']) {
	echo '<script type = "text/javascript"> alert ("Please fill out all required fields." + goBack());</script>';
	die();
}

		//Check if the username exists. 
		$check = mysql_query("SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());

		//Display message if username doesn’t exist.
		$check2 = mysql_num_rows($check);
		 if ($check2 == 0) {
			echo '<script type = "text/javascript"> alert ("Sorry, wrong username." + goBack());</script>';
		}

		while($info = mysql_fetch_array( $check )) 	{

			//Display message and redirect user back if password is wrong.
			if ($_POST['pass'] != $info['password']) {
				echo '<script type = "text/javascript"> alert ("Sorry, wrong password." + goBack());</script>';
				die();
			}
			 else { 

				//If login data is ok, add data to cookie.
				$_POST['username'] = stripslashes($_POST['username']); 
				$hour = time() + 3600; 


					setcookie(ID_my_site, $_POST['username'], $hour); 
					setcookie(Key_my_site, $_POST['pass'], $hour);

				//Finally redirect user to successful login page.
				//redirect($url);

			}
		}
	?>
<script>
//Declaring the goback function, so in case of error user will go back to login page.
function goBack()
{
window.history.back()
}
</script>