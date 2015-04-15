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
		.listHolder{
			/*border:solid 1px #000;*/

			margin: auto;
			width: 100%;
			max-width: 400px;
			overflow: hidden;
		}
		.listElement{
			width: 100%;
			margin-top: 10px;
			text-align: left;
			/*border:solid 1px red;*/
			overflow: hidden;
		}
		.listElement h5{
			font-family: 'Lato', arial;
			font-size: 22px;
			font-weight: normal;
			padding: 3px;
			
		}
		.listElement p{
			font-family: arial;
			font-weight: normal;
			padding: 3px;
			font-size: 14px;	
			
		}
		.listElement img{
			text-align: right;
			margin:0;
			padding: 0;
		}
		.LSElement{
			float: left;
			overflow: hidden;
			margin-top: 10px;
		}
		.LSElement a{
			color: #191919;
		}
		.LSElement a:hover{
			text-decoration: none;
		}
		.RSElement{
			float: right;
			overflow: hidden;
			margin: 0;
			padding: 0;

			width: 90px;
			height: 90px;
			border-radius: 150px;
			-webkit-border-radius: 150px;
			-moz-border-radius: 150px;
			background: url(img/sampleFiles/samplefile_02.jpg) no-repeat;

		}
		.RSElement2{
			float: right;
			overflow: hidden;
			margin: 0;
			padding: 0;

			width: 90px;
			height: 90px;
			border-radius: 150px;
			-webkit-border-radius: 150px;
			-moz-border-radius: 150px;
			background: url(img/sampleFiles/samplefile_03.jpg) no-repeat;

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
            <h4>3D Sample Files</h4>
            <article class="listHolder">
            	<div class="listElement">
            		<div class="LSElement">
            			<h5>3D Car Model Citroen 3CV STL</h5>
            			<p><a href="#">Download</a> &#124; <a href="sampleFiles/samplefile_01.php">Preview</a></p>
            		</div>
            		<div class="RSElement">
            			<!-- <img width="90px" src="samplefiles/samplefile_01.jpg"> -->
            		</div>
            	</div>
            	<div class="listElement">
            		<div class="LSElement">
            			<h5>3D STL Model - Pick Axe</h5>
            			<p><a href="#">Download</a> &#124; <a href="sampleFiles/samplefile_02.php">Preview</a></p>
            		</div>
            		<div class="RSElement2">
            			<!-- <img width="90px" src="samplefiles/samplefile_02.jpg"> -->
            		</div>
            	</div>
            	
            </article>
           	

            
        </section>
        <?php
            include('footer.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->