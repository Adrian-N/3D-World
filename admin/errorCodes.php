<?php
include 'functions.php';
cookieExist();
$localhost = hosting();
?>
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

		<style id="Book1_14875_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl6314875
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl6414875
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6514875
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl6614875
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border:1.0pt solid windowtext;
	background:#0D0D0D;
	mso-pattern:black none;
	white-space:normal;}
.xl6714875
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#0D0D0D;
	mso-pattern:black none;
	white-space:normal;}
-->
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
				<p>Error Codes</p>

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


								//html output
								include 'table.php';
								echo "<br /><p><a href='config.php'>Back</a></p>";
								

							} 
						} 
 					} 

					else {			 
						redirect($url);
					}
				?>
			</figure> 
		</header>
        
        <?php
            include('../altFooter.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->