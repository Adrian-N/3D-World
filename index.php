<!DOCTYPE html> 
<!-- 
	#Author: Adrian Nowak (12018991)
	#Project: CTP - 3D Printing World
 -->
<html>
	<head>
		<!-- Meta -->
		<meta charset="UTF-8">
		<meta name="description" content="All About 3D Printing">
		<meta name="keywords" content="3D, Tutorials, Modeling, Printing">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" /><!--Viewport scale for mobile devices.-->

		<!-- Title -->
		<title>3D Printing World &#124; Tutorials, Resources, Help - All About 3D Printing</title> 

		<!-- Icons -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="css/main.css"> <!-- Main Style Sheet. -->
		<link rel="stylesheet" type="text/css" href="css/nav.css"> <!-- Menu Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/spinningCube.css"> <!-- Spinning Cube Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/logo.css"> <!-- Logo Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/mobile.css"> <!-- Mobile Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/mobileNav.css"> <!-- Mobile Navigation -->
        <link rel="stylesheet" type="text/css" href="css/homepageGraphic.css"> <!-- Home Graphic -->
        <link rel="stylesheet" type="text/css" href="css/searchBar.css"> <!-- Google Custom Search Engine -->

        <!-- Scripts -->
        <script src="scripts/jquery-1.11.1.min.js"></script>

		<!--Ensuring HTML5 backwards compatibility with old versions of Internet Explorer-->
		<!--[if lt IE 9]>
		<script src="scripts/html5shiv.min.js"></script>
		<![endif]-->

	</head>
	<body> 
		<header>
            <div id="logo">
				<a href="index.php">
					<img class="bottom" src="img/logo/home.svg" alt="home" />
                    <img class="top" src="img/logo/logo.svg" alt="logo" />
				</a>
            </div>
			<?php
                include('menu.php');
            ?>
            <form id="search">
            	<?php
                include('searchBar.php');
            	?>
            </form>	
		</header>
        <article class="homeEffect">
            <script type="text/javascript">
                //generate random text:
                //original source: http://jsfiddle.net/JZDnv/
                var textToShow = ['We Love 3D Printing!', '3D Printing is the Future!', 'Home of 3D Printing']
                $(document).ready(function() {
                    $("h4").html(textToShow[Math.floor(Math.random()*textToShow.length)]);
                });
            </script>
            <h4 id="homepageText"></h4>
        </article>
        <figure class="spinningCube">
			<a href="start.php">
				<div id="stage">
					<div id="spinner">
						<div class="face1"></div>
						<div class="face2"></div>
						<div class="face3"></div>
						<div class="face4"><p class="invert">3D</p></div>
						<div class="face5"></div>
						<div class="face6"></div>
					</div>
				</div>
			</a>
		</figure>
		<figure>
			<img id="drawingCubes" src="img/other/cubes.png">
		</figure>
        <?php
            include('footer.php');
        ?>
	</body>
</html> 