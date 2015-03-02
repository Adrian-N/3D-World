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

		<!--Fonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

        <!-- Scripts -->
        <script src="scripts/jquery-1.11.1.min.js"></script>

		<title>3D World - Printers, Help, Tutorials</title> 
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
			max-width: 450px;
			overflow: hidden;
			font-family: arial;
		}
		.listHolder h5{
			font-weight: normal;
			font-family: arial;
			font-size: 17px;
			margin-top: 30px;
			display: inline;

		}
		.small{
			font-size: 12px !important;
		}
		select{
			width:110px;
			height: 35px;
			margin: 5px;
			display: inline;
			/*float: right;*/
		}
		.listTop{
			width: 75px;
		}
		option{
			padding:2px;
		}
		input{
			width:60px;
			padding: 5px;
			margin: 5px;
			display: inline;

		}
		#calc{
			width: 100px;
			background-color: #0066FF;
			border: 0px;
			color: #fff;
			font-size: 15px;
		}
		.smallOption{
			padding: 0;
			margin: 0;
			height: 16px;
			font-size: 10px;
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
				</select> <br />
            	<h5>Estimated weight of finished 3D model is</h5>
            	 <input name="weight" type="number" required><h5>grams.</h5><br />
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