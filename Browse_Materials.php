<?php
//Quickly check database connection.
$url="sorry.php?error=db00001";
function redirect($url){
	$string = '<script type="text/javascript"> window.location = "' . $url . '" </script>';
	echo $string;
}
require("php/data.php");
$conn=mysqli_connect($host,$user,$password,$database);
if(mysqli_connect_errno()){
redirect($url);
exit;
}
?>
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
		.browsingBox{
			width: 100%;
			max-width: 700px;
			margin: 0 auto;
			/*background-color: grey;*/
		}

		.printer{
			width: 150px;
			margin: 0 5px;
			float: left;
			overflow: hidden;
			text-align: center;

		}
		.printer p{
			font-family: arial;
			color: #000;
			text-decoration: none;
			margin: 0;
			color: #666666;
		}
		.printer h3{
			margin:0;
			font-family: arial;
			font-weight: normal;
			color: #666666;
			text-decoration: none;
		}
		.printer a{
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
            <h4>Browse 3D Printing Materials</h4>
            <section class="browsingBox">
            	<?php
            	include('php/require_materials.php');
            	?>
            </section>
            
            
        </section>
        <?php
            include('footer.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->