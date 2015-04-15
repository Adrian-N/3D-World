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
		
		#contactForm {
			width: 100%;
			font-family:arial;
		}
		#contactForm input {
			padding: 5px;
			color: #242424;
			border: solid 1px blue;
		}
		#contactForm p{
			color: #5A5A5A;
			font-size: 13px;
			margin: 5px;
		}
		#contactForm textarea{
			padding: 5px;
			color: #242424;
			border: solid 1px blue;
			font-family: arial;
			font-size: 12px;
		}
		#submit{
			background-color: transparent;
			margin-top: 20px;
			cursor: pointer;
			font-size: 15px;
			padding: 10px !important;
		}
		#submit:hover{
			background-color: #99CCFF;
			
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
	            <form 
	           		id="contactForm" 
	           		name="contact_form" 
					action="php/messageEngine.php?type=question"  
					method="post"
				>
	           	<p>Name</p>
				<input  type="text"  name="user_name_01" autofocus /><br /> 
				<p>Email</p>
				<input  name='user_email_01'  type='email' required /><br /> 
				<p>Message</p> 
				<textarea  name='Message'  rows='4' cols='30' required></textarea> <br />
				<input id="submit" type="submit" value="Submit">
	           </form>
            </div>
        </section>
        <?php
            include('footer.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->