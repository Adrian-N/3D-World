<!DOCTYPE html> <!--html 5-->
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="All About 3D Printing">
		<meta name="keywords" content="3D, Tutorials, Modeling, Printing">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />

		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="../css/main.css"> <!-- Main Style Sheet. -->
		<link rel="stylesheet" type="text/css" href="../css/nav.css"> <!-- Menu Stylesheet -->
        <link rel="stylesheet" type="text/css" href="../css/logo.css"> <!-- Logo Stylesheet -->
        <link rel="stylesheet" type="text/css" href="../css/mobile.css"> <!-- Logo Stylesheet -->
        <link rel="stylesheet" type="text/css" href="../css/mobileNav.css"> <!-- Mobile Navigation -->
        <link rel="stylesheet" type="text/css" href="../css/sampleFiles/sampleFile.css">
        <link rel="stylesheet" type="text/css" href="../css/searchBar.css"> <!-- Google Custom Search Engine -->


        <!-- Scripts -->
        <script src="../scripts/jquery-1.11.1.min.js"></script>

		<title>3D Printing World &#124; Tutorials, Resources, Help - All About 3D Printing</title> 
		
		<!--Ensuring HTML5 backwards compatibility with old versions of Internet Explorer-->
		<!--[if lt IE 9]>
		<script src="scripts/html5shiv.min.js"></script>
		<![endif]-->

	</head>
	<body> 
		<header>
            <div id="logo">
				<a href="../index.php">
					<img class="bottom" src="../img/logo/home.svg" alt="home" />
                    <img class="top" src="../img/logo/logo.svg" alt="logo" />
				</a>
            </div>
			<?php
                include('menu.php');
            ?>
            <form id="search">
                <?php
                include('../searchBar.php');
            	?>
            </form>	
		</header>
        <section class="content">
            <h4>3D STL Model - Pick Axe</h4>
            <article class="listHolder">
            	<script width="800px" src='https://embed.github.com/view/3d/Adrian-N/3D-World/master/sampleFiles/pick_axe.STL?height=300&width=600'></script>
            	<p><a href="#">Download</a></p>
            	<a href="../sample_files.php" class="myButton">Back</a>
            </article>
           	

            
        </section>
        <?php
            include('../footer.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->