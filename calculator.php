<!DOCTYPE html> <!--html 5-->
<html>
	<head>
		<meta charset="UTF-8">

		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="css/nav.css"> <!-- Menu Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/logo.css"> <!-- Logo Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/mobile.css"> <!-- mobile Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/mobileNav.css"> <!-- Mobile Navigation -->

        <!-- Calculator CSS -->
        <link rel="stylesheet" type="text/css" href="css/calculator/calculatorMain.css"> <!-- Calculator Input CSS -->
        <link rel="stylesheet" type="text/css" href="css/calculator/calculatorInput.css"> <!-- Calculator Input CSS -->
        <link rel="stylesheet" type="text/css" href="css/calculator/calculatorTooltip.css"> <!-- Calculator Tooltip CSS -->
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
            <form action="result.php" method="post">
            	<h5>Estimated time of 3D printing is</h5>

            	
            	 <select name="totalTime" class="listTop">
				  <?php
				    for ($i=1; $i<=72; $i++)
				    {
				        ?>
				            <option value="<?php echo $i;?>"><?php echo $i;?> hours</option>
				        <?php
				    }
				?>
				<option value="96">4 days</option>
				<option value="120">5 days</option>
				<option value="144">6 days</option>
				</select> 
				<a class="tooltips" href="tutorial_01.php" >
            	<img src="img/other/info.png" alt="Website Information" />
            	<span>Find out exact time from modelling software!<br />Click here for more info.</span>
            </a>

				<br />
            	<h5>Estimated weight of finished 3D model is</h5>
            	 <input name="weight" type="number" required><h5>grams.
            	 <a class="tooltips" href="tutorial_01.php">
            	<img src="img/other/info.png" alt="Website Information" />
            	<span>Find out weight from modelling software!<br />Click here for more info.</span>
            </a>

            	 </h5><br />
            	<h5>Material </h5>
            	<select name="materialCost">
            		<option value="50">PLA</option>
            		<!-- <option value="50">Other...</option> -->
            	</select>
            	<br /><br />
            	<h5 class="small">Extra Options:</h5><br />
            	<h5 class="small">Max power usage of 3D printer </h5>
            	<select name="maxPower" class="smallOption">
            		<option  value="90">90 Watts</option>
            		<option  value="110">110 Watts</option>
            		<option  value="130">130 Watts</option>
            		<option selected="selected"  value="150" >150 Watts</option>
            		<option  value="200">200 Watts</option>
            		<option  value="250">250 Watts</option>
            	</select>



            	<br />
            	<h5 class="small">Power cost per KWh &pound;</h5>
            	<select name="powerCost" class="smallOption">
            		<option  value="0.01">Free Power</option>
            		<option  value="0.10">0.10</option>
            		<option selected="selected"  value="0.20" >0.20</option>
            		<option  value="0.30">0.30</option>
            		<option  value="0.40">0.40</option>
            	</select>

            	<br />

            		<br />
            	 <input id="calc" type="submit" value="Calculate">
            	</form>
            	
            </article>
           	

            
        </section>
        <?php
            include('footer.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->