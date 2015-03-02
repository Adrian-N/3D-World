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
		<style type="text/css">
		.listHolder{
			/*border:solid 1px #000;*/

			margin: auto;
			width: 100%;
			max-width: 600px;
			overflow: hidden;
			text-align: left;
		}
		.listHolder p{
			font-family: arial;
			font-weight: normal;
			padding: 3px;
			font-size: 14px;	
			
		}
		.listHolder a{
			color: #191919;
		}
		.listHolder a:hover{
			text-decoration: none;
		}
		.myButton {
			margin-top: 10px;
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
            <h4>3D Car Model - Citroen 3CV STL</h4>
            <article class="listHolder">
            	<script width="800px" src='https://embed.github.com/view/3d/Adrian-N/3D-World/master/sampleFiles/citroen3cv.stl?height=300&width=600'></script>
            	<p><a href="#">Download</a></p>
            	<a href="sample_files.php" class="myButton">Back</a>
            </article>
           	

            
        </section>
        <?php
            include('footer.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->