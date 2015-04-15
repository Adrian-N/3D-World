<?php
include 'admin/functions.php';
?>
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
        <link rel="stylesheet" type="text/css" href="css/calculator/calculatorOutput.css"> <!-- Mobile Navigation -->
        <link rel="stylesheet" type="text/css" href="css/searchBar.css"> <!-- Google Custom Search Engine -->


        <!-- Scripts -->
        <script src="scripts/jquery-1.11.1.min.js"></script>

		<title>3D Printing World &#124; Tutorials, Resources, Help - All About 3D Printings</title> 
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
            <h4>3D Printing Cost Calculator</h4>
            <article class="listHolder">
            	<h5>Total cost including materials and power:</h5>
            	<?php
            		//variables
            		$time = $_POST['totalTime'];
            		$weight = $_POST['weight'];
            		$material = $_POST['materialCost'];
            		$maxPower = $_POST['maxPower'];
            		$powerCost = $_POST['powerCost'];

            		if ($weight == "") {
            			//just in case user is using older browser
            			echo "Sorry, something went wrong...<br />";
            		} else {
            			//call to function and output
            			echo $total = calculate($time, $weight, $material, $maxPower, $powerCost);
            		}
            	?>
            	<a href="calculator.php" class="myButton">Back</a>

            </article>
           	

            
        </section>
        <?php
            include('footer.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->