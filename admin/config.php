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
		#admin a{
			color:black;
			width: 200px;
			height: 30px;
			display: inline-block;
			border: solid 1px blue;
			text-decoration: none;
			padding: 3px;
		}
		#admin a:hover{
			background-color: #E6E6FF;
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
				<p>Welcome to configuration area.</p>

				<?php
					//redircet function
					$url="login.php";
					function redirect($url){
				    	$string = '<script type="text/javascript"> window.location = "' . $url . '" </script>';
				    	echo $string;
					}//redirect($url);

					// conn data
					require("../php/data.php");

					//connect to database 
					mysql_connect($host, $user, $password) or die(mysql_error()); 
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

								echo '<p>Hello ' . $username . ', what would you like to do today?</p><br />';
								echo '<p><a href="addPrinter.php"> Add printer to DB</a></p>';
								echo '<p><a href="deletePrinter.php"> Delete printer from DB</a></p>';
								echo '<p><a href="sqlBackup.php"> Create MySQL backup</a></p>';
								echo '<p><a href="errorCodes.php"> Error Codes</a></p>';
								echo '<p><a href="logout.php"> Logout</a></p>';
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