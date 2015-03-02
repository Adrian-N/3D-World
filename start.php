<!DOCTYPE html> <!--html 5-->
<html>
	<head>
		<meta charset="UTF-8">

		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="css/main.css"> <!-- Main Style Sheet. -->
		<link rel="stylesheet" type="text/css" href="css/nav.css"> <!-- Menu Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/logo.css"> <!-- Logo Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/mobile.css"> <!-- Mobile Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/mobileNav.css"> <!-- Mobile Navigation -->

		<!--Fonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

        <!-- Scripts -->
        <script src="scripts/jquery-1.11.1.min.js"></script>

		<title>3D World - Printers, Help, Tutorials</title> 
		<meta name="description" content="All About 3D Printing">
		<meta name="keywords" content="3D, Tutorials, Modeling, Printing">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" /><!--Viewport scale for mobile devices.-->

		<link rel="stylesheet" type="text/css" href="sbs_files/main.css" />
		<script type="text/javascript" src="sbs_files/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="sbs_files/faq.js"></script>

		<!--Ensuring HTML5 backwards compatibility with old versions of Internet Explorer-->
		<!--[if lt IE 9]>
		<script src="scripts/html5shiv.min.js"></script>
		<![endif]-->
		<style type="text/css">
		.listHolder{
			/*border:solid 1px #000;*/

			margin: auto;
			width: 100%;
			max-width: 900px;
			overflow: hidden;
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
            <h4>Step by Step</h4>
            <article class="listHolder">
            <section class="tutorialBox">
			<article class="tutorialArticle">
				<div class="articleTitle">
					<h2>From Concept to 3D Model</h2>
				</div>
				<div class="articleContent">
					<div class="articleContentInside">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor velit ex, id ornare justo dapibus eu. Aliquam erat volutpat. Morbi mollis tempus lorem, ut volutpat mi tincidunt id. Vestibulum auctor congue augue quis cursus. Integer varius massa sed facilisis pellentesque. Nunc et mi orci. Mauris venenatis nec nisl sit amet cursus. Phasellus finibus interdum eros, at consequat felis tempor eu. Aenean id lobortis arcu. Maecenas vel molestie ante, eu hendrerit turpis.</p>
					</div>
				</div>
				
			</article>
			<article class="tutorialArticle">
				<div class="articleTitle">
					<h2>Getting the right file.</h2>
				</div>
				<div class="articleContent">
					<div class="articleContentInside">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor velit ex, id ornare justo dapibus eu. Aliquam erat volutpat. Morbi mollis tempus lorem, ut volutpat mi tincidunt id. Vestibulum auctor congue augue quis cursus. Integer varius massa sed facilisis pellentesque. Nunc et mi orci. Mauris venenatis nec nisl sit amet cursus. Phasellus finibus interdum eros, at consequat felis tempor eu. Aenean id lobortis arcu. Maecenas vel molestie ante, eu hendrerit turpis.</p>
					</div>
				</div>
				
			</article>
			<article class="tutorialArticle">
				<div class="articleTitle">
					<h2>Time to print.</h2>
				</div>
				<div class="articleContent">
					<div class="articleContentInside">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor velit ex, id ornare justo dapibus eu. Aliquam erat volutpat. Morbi mollis tempus lorem, ut volutpat mi tincidunt id. Vestibulum auctor congue augue quis cursus. Integer varius massa sed facilisis pellentesque. Nunc et mi orci. Mauris venenatis nec nisl sit amet cursus. Phasellus finibus interdum eros, at consequat felis tempor eu. Aenean id lobortis arcu. Maecenas vel molestie ante, eu hendrerit turpis.</p>
					</div>
				</div>
				
			</article>
		</section>
            	
            
            	
            </article>
           	

            
        </section>
        <?php
            include('footer.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->