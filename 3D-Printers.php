<!DOCTYPE html> <!--html 5-->
<html>
	<head>
		<meta charset="UTF-8">

		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="css/main.css"> <!-- Main Style Sheet. -->
		<link rel="stylesheet" type="text/css" href="css/nav.css"> <!-- Menu Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/logo.css"> <!-- Logo Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/mobile.css"> <!-- Logo Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/mobileNav.css"> <!-- Mobile Navigation -->

		<!--Fonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

        <!-- Scripts -->
        <script src="scripts/jquery-1.11.1.min.js"></script>

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
            <div id="logo">
				<a href="index.php">
					<img class="bottom" src="pic/home.svg" alt="home" />
                    <img class="top" src="pic/logo.svg" alt="logo" />
				</a>
            </div>
			<?php
                include('menu.php');
            ?>
            <form id="search">
                <input class="search" type="text" placeholder="Search...">
                <input class="button" type="button" value="Search">
            </form>	
		</header>
        <section class="content">
            <h4>How to choose a 3D printer</h4>
            <section class="artBox">
	            <article class="artSide artSideLeft">
	            	<p class="alignP">COST </p>
	            	<p class="alignP">SIMPLICITY </p>
	            </article>
	            <article class="artSide artSideRight">
	            	<p class="mobSubTitle">COST</p>
	            	<p class="alignP">Expensive doesn’t mean better, choose a printer for your budget and remember about materials.</p>
	            	<p class="mobSubTitle">SIMPLICITY</p>
	            	<p class="alignP">New to 3D printing? Choose a printer that is quick and easy to learn.</p>
	            </article>
	            <figure class="middleButton">
	           		<a href="Browse_Printers.php" class="myButton">Browse 3D Printers</a>
	            </figure>
            </section>

            
        </section>
        <?php
            include('footer.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->