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
		input{
			padding: 3px;
			margin-bottom: 5px;
		}
		/*Footer*/
	footer{
		/*Old*/
		width: 100%;
		margin-bottom: 5px;
		text-align: center;


		/*Reset*/
		bottom:auto;
		position: static;

		/*New*/
		float: left;
		margin-top: 0px;
	}
	.bigInput{


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
								

								$printerID = $_POST['id'];
								$sql = "DELETE FROM printers WHERE Printer_ID=" . $printerID;

								if ($conn->query($sql) === TRUE) {
									echo "<p>3D printer has been successfully deleted from database.</p>";
								} else {
									echo "<p>Error deleting record from database.</p>";
								}
								echo"<p>Redirecting in 5 seconds…</p>";
								echo'<script>setTimeout(function(){window.location.href="config.php"},5000);</script>';
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