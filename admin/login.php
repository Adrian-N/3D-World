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

	</head>
	<body> 
		<header>
			<figure class="spinningCube">
					<div id="stage">
						<div id="spinner">
							<div class="face1"></div>
							<div class="face2"></div>
							<div class="face3"></div>
							<div class="face4"><p class="invert">Login</p></div>
							<div class="face5"></div>
							<div class="face6"></div>
						</div>
					</div>
			</figure>
			<div class="mobileH"><h1>Login</h1></div>
			<figure class="login">
				<form method="POST" action="loginEngine.php">
					<div id="leftColumn">
						<p>Username:</p>
						<p>Password:</p>
					</div>
					<div id="rightColumn">
						<input class="input" type="text" name="username" maxlength="40"> 
						<input class="input" type="password" name="pass" maxlength="50"> 
					</div>

					<div id="loginButtons">
						<input class="logB" type="submit" name="submit" value="Login"> 
						<button class="logB" type="reset" value="Reset">Reset</button>
					</div>
				</form> 
			</figure> 
		</header>
        <article class="homeEffect">
            
        </article>
        
        <?php
            include('../footer.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->