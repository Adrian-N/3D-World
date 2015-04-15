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
        <link rel="stylesheet" type="text/css" href="css/searchBar.css"> <!-- Google Custom Search Engine -->

        <!-- Scripts -->
        <script src="scripts/jquery-1.11.1.min.js"></script>

		<title>3D Printing World &#124; Tutorials, Resources, Help - All About 3D Printing</title> 
		<meta name="description" content="All About 3D Printing">
		<meta name="keywords" content="3D, Tutorials, Modeling, Printing">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" /><!--Viewport scale for mobile devices.-->

		<!--Ensuring HTML5 backwards compatibility with old versions of Internet Explorer-->
		<!--[if lt IE 9]>
		<script src="scripts/html5shiv.min.js"></script>
		<![endif]-->
		<style type="text/css">

		.box{
			width: 100%;
			max-width: 800px;
			margin: auto;
			float: none;
			font-family: arial;
		}
		#leftSideLink {
			float: left;
			width: 100%;
			margin-right: 1px;
			max-width: 395px;
			border: solid 2px red;
			background-color:transparent;
			display:inline-block;
			cursor:pointer;
			color:#000000;
			font-family:arial;
			font-size:17px;
			text-decoration:none;
		}
		#leftSideLink:hover {
			background: #FFCCCC;
  			text-decoration: none;
		}
		/*#right{
			float: left;
			width: 100%;
			margin-left: 1px;
			max-width: 395px;
			border: solid 2px blue;
		}*/
		#rightSideLink {
			float: left;
			width: 100%;
			margin-left: 1px;
			max-width: 395px;
			border: solid 2px blue;
			background-color:transparent;
			display:inline-block;
			cursor:pointer;
			color:#000000;
			font-family:arial;
			font-size:17px;
			text-decoration:none;
		}
		#rightSideLink:hover {
			background: #CCE6FF;
  			text-decoration: none;
		}
		.box p{
			margin-top: 10px;
			margin-bottom: 10px;
		}
		</style>

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
        <section class="content">
        <div class="box">
            <h4>Contact</h4>
            
	            <div id="left">
	            <a id="leftSideLink" href="contactLeft.php">
	            	<p>Looking for a hobby/job?</p>
	            	<p>Passionate about 3D Printing?</p>
	            	<p>Want to join 3D Printing World?</p>
	            	<p>Tell us something about you!</p>
	            	<img width="63px" alt="contact" src="img/other/teamwork.png">
	            	<!-- http://www.cerutti.ro/assets/img/teamwork.png -->
	            	</a>
	            </div>
            
            <div id="right">
            <a id="rightSideLink" href="contactRight.php">
            	<p>Tips, comments or suggestions?</p>
            	<p>Found a bug?</p>
            	<p>Questions?</p>
            	<p>We would love to hear from you!</p>
            	<img width="50px" alt="contact" src="img/other/contact.png">
            	</a>
            </div>
            
            
	            <br />
	            <br />
	            <br />
            </div>
        </section>
        <?php
            include('footer.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->