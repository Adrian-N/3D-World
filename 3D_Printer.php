<!DOCTYPE html> <!--html 5-->
<html>
	<head>
		<meta charset="UTF-8">

		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="css/main.css"> <!-- Main Style Sheet. -->
		<link rel="stylesheet" type="text/css" href="css/nav.css"> <!-- Menu Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/logo.css"> <!-- Logo Stylesheet -->
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
		<style type="text/css">
		.printersTemplate {
			margin: auto;
			width: 100%;
			max-width: 600px;
			text-align: left;
		}
			.printersTemplate h4 {
				font-size: 30px;
			}
			.printersTemplate p {
				font-family: arial;
				margin: 10px 0 0 0;
			}
			.TemplateSide{
				float: left;
				overflow: hidden;
				width: 50%;
			}
			.TemplateSideRight{
				text-align: right;
				margin-bottom: 10px;
			}
			.moreInfo{
				font-size: 15px;
			}

			li{
				font-family: arial;
			}
			.printersTemplate a{
				color: #000;
			}
			.printersTemplate a:hover{
				text-decoration: none;
			}
		</style>
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
        	<section class="printersTemplate">
        			<?php
        				require("php/show_printer.php");
        			?>
        		<a href="Browse_Printers.php" class="myButton">Back</a>	
        	</section>
            

            
        </section>
        
        <?php
            include('footer.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->