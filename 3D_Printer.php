<?php
	//script to find out what data get from db
	$Printers = false; 
	$Materials = false;
	if (isset($_GET['Printer_ID'])) {
		$Printers = true;
		$PRINTER_ID = $_GET['Printer_ID'];
	}elseif (isset($_GET['Material_ID'])) {
		$Materials = true;
		$MATERIAL_ID = $_GET['Material_ID'];
	}else{
		header("location: sorry.php?error=dbData002");
	}

	//get conn data
	require("php/data.php");	
?>
<!DOCTYPE html> <!--html 5-->
<html>
	<head>
		<meta charset="UTF-8">

		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="css/main.css"> <!-- Main Style Sheet. -->
		<link rel="stylesheet" type="text/css" href="css/nav.css"> <!-- Menu Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/logo.css"> <!-- Logo Stylesheet -->
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
        	<section class="printersTemplate">
        			<?php
        				//get printer data
						if ($Printers == true) {
							require("php/show_printer.php");
						}
						//get material data
						if ($Materials == true) {
							require("php/show_material.php");
						}
        			?>
        			<?php
        				//get printer data
						if ($Printers == true) {
							echo "<a href='Browse_Printers.php' class='myButton'>Back</a>";
						}
						//get material data
						if ($Materials == true) {
							echo "<a href='Browse_Materials.php' class='myButton'>Back</a>";
						}
        			?>
        		<!-- <a href="Browse_Materials.php" class="myButton">Back</a>	 -->
        	</section> 
        </section>
        
        <?php
            include('altFooter.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->