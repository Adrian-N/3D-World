<!DOCTYPE html> <!--html 5-->
<html>
	<head>
		<meta charset="UTF-8">

		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="../css/main.css"> <!-- Main Style Sheet. -->
		<!-- <link rel="stylesheet" type="text/css" href="css/nav.css">  Menu Stylesheet -->
        <link rel="stylesheet" type="text/css" href="../css/spinningCube.css"> <!-- Spinning Cube Stylesheet -->
        <!-- <link rel="stylesheet" type="text/css" href="css/logo.css">  Logo Stylesheet -->
        <link rel="stylesheet" type="text/css" href="login.css"> <!-- Logo Stylesheet -->

		<!--Fonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

        <!-- Scripts -->
        <script src="../scripts/jquery-1.11.1.min.js"></script>

		<title>3D World - Printers, Help, Tutorials</title> 
		<meta name="description" content="All About 3D Printing">
		<meta name="keywords" content="3D, Tutorials, Modeling, Printing">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" /><!--Viewport scale for mobile devices.-->

		<!--Ensuring HTML5 backwards compatibility with old versions of Internet Explorer-->
		<!--[if lt IE 9]>
		<script src="scripts/html5shiv.min.js"></script>
		<![endif]-->
		<style type="text/css">
		select{
			width: 60px;
			height: 40px;
			text-align: center;
		}
		input{
			width: 60px;
			height: 30px;
			margin-top: 10px;
			text-align: center;
			/*background:red;*/
		}
		</style>

	</head>
	<body> 
		<header>
			<figure class="spinningCube">
					<div id="stage">
						<div id="spinner">
							<div class="face1"></div>
							<div class="face2"></div>
							<div class="face3"></div>
							<div class="face4"><p class="invert">Admin</p></div>
							<div class="face5"></div>
							<div class="face6"></div>
						</div>
					</div>
			</figure>
			<div class="mobileH"><h1>Admin Area</h1></div>
			<figure class="login" id="admin">
				<p>Delete 3D printer from database.</p>

				<?php
					//redirect function
					$url="login.php";
					function redirect($url){
				    	$string = '<script type="text/javascript"> window.location = "' . $url . '" </script>';
				    	echo $string;
					}//redirect($url);

					// conn data
					require("../php/data.php");

					//connect to database 
					mysql_connect($host, $user, $password) or die(mysql_error()); 
					$conn = mysqli_connect($host, $user, $password, $database);
					mysql_select_db($database) or die(mysql_error());

					if(isset($_COOKIE['ID_my_site'])) { 
						$username = $_COOKIE['ID_my_site']; 
						$pass = $_COOKIE['Key_my_site']; 
						$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());

						while($info = mysql_fetch_array( $check )) 	 { 

							//if the cookie has the wrong password, they are taken to the login page 
							if ($pass != $info['password']) { 			
								redirect($url);
							}	 
							else { 
								//  ****** BODY GOES HERE *******

								//Get printers IDs
								$query = "SELECT Printer_ID FROM printers ORDER BY Printer_ID ASC";
								$data = mysqli_query($conn, $query);
								echo '<p>Printer ID:</p>';
								echo '<form method="POST" action="deleteByID.php">';
								echo '<select name="id">';
								while ($row = mysqli_fetch_array($data)){
									echo "<option value='" . $row['Printer_ID'] . "'>" .$row['Printer_ID'] ."</option>";
								}
								echo '</select>';
								echo '<br /><input type="submit" name="submit" value="Delete">';
								echo "</form>";

								echo '<p><a target="_blank" href="../Browse_Printers.php">3D Printers</a></p>';
								echo '<p><a href="config.php">Cancel</a></p>';

							} 
						} 
 					} 

					else {			 
						redirect($url);
					}
				?>
			</figure> 
		</header>
        <article class="homeEffect">
            
        </article>
        
        <?php
            include('../footer.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->