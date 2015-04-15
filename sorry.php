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
        	<?php 
        	if (isset($_GET['error'])) {
        		$ERROR = $_GET['error'];
        	}else{	
        		$ERROR = "000000";
        	}
        	?>
            <h4>Technical Failure!</h4>
	        <p>Sorry, something went wrong...</p>
	        <br />
	        <p>If this problem persists, please send us a <a href="contactRight.php">message.</a></p>
	        <?php 
	        echo "<p>Please include error code " . $ERROR . ".</p>";
	         ?>
	        
            </div>
        </section>
        <?php
            include('footer.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->