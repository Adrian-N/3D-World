<!DOCTYPE html> <!--html 5-->
<html>
	<head>
		<meta charset="UTF-8">

		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="css/main.css"> 
		<link rel="stylesheet" type="text/css" href="css/nav.css"> <!-- Menu Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/logo.css"> <!-- Logo Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/mobile.css"> <!-- mobile Stylesheet -->
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

		<script type='text/javascript' src='https://ssl-webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/jquery.min.js'></script>
		<script type="text/javascript">
		<!--
		var unityObjectUrl = "http://webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/UnityObject2.js";
		if (document.location.protocol == 'https:')
			unityObjectUrl = unityObjectUrl.replace("http://", "https://ssl-");
		document.write('<script type="text\/javascript" src="' + unityObjectUrl + '"><\/script>');
		-->
		</script>
		<script type="text/javascript">
		<!--
			var config = {
				width: 960, 
				height: 600,
				params: { enableDebugging:"0" }
				
			};
			var u = new UnityObject2(config);

			jQuery(function() {

				var $missingScreen = jQuery("#unityPlayer").find(".missing");
				var $brokenScreen = jQuery("#unityPlayer").find(".broken");
				$missingScreen.hide();
				$brokenScreen.hide();
				
				u.observeProgress(function (progress) {
					switch(progress.pluginStatus) {
						case "broken":
							$brokenScreen.find("a").click(function (e) {
								e.stopPropagation();
								e.preventDefault();
								u.installPlugin();
								return false;
							});
							$brokenScreen.show();
						break;
						case "missing":
							$missingScreen.find("a").click(function (e) {
								e.stopPropagation();
								e.preventDefault();
								u.installPlugin();
								return false;
							});
							$missingScreen.show();
						break;
						case "installed":
							$missingScreen.remove();
						break;
						case "first":
						break;
					}
				});
				u.initPlugin(jQuery("#unityPlayer")[0], "unityFast.unity3d");
			});
		-->
		</script>
		<style type="text/css">
		.box{
			width: 100%;
			max-width: 670px;
			margin: auto;
			font-family: arial;

		}
		.article{
			float: left;
			width: 500px;
			text-align: justify;
			margin: 5px;
		}
		.article a{
			color: black;

		}
		.img{
			float: left;
			width: 150px;
		}
		.img img{
			width: 100px;
		}
		.bigSearch{
			width: 80%;
			height:30px;
			padding: 10px;
			margin: 0px;
			font-size: 17px;
			border: solid 1px blue;
			text-align: center;
			color: #4C4C4C;
			margin-top: 50px;
		}
		#player{
			/*overflow: hidden;*/
			width: 100%;
			text-align: center;
			height: 200px;
			margin-top: 25px;
			float: left;
			overflow: hidden;
			border: solid 1px blue;
			margin-bottom: 30px;

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
            <h4>3D Printing World</h4>
            <div class="box">
            	<article class="article">
            		<p>3D Printing World connects you with 3D Printing. A leading source for news, information and resources for anyone who is interested in 3D Printing. We will help you make the first steps into 3D Printing and show you how to turn an idea into physical product.</p>
            	</article>
            	<div class="img"><img src="img/other/about_1.png"></div>
            	<div class="img"><img src="img/other/about_2.png"></div>
            	<article class="article">
            	<p>Go to resources section to browse printers and materials.  Use search bar on the top right to find what you are looking for. You can also contact us via <a href="contact.php">contact</a> page.</p>
            	</article>
            	<a href="tutorials.php">
            	<div id="player">
            		<div id="unityPlayer">
				<div class="missing">
					<a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now!">
						<img alt="Unity Web Player. Install now!" src="http://webplayer.unity3d.com/installation/getunity.png" width="193" height="63" />
					</a>
				</div>
				<div class="broken">
					<a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now! Restart your browser after install.">
						<img alt="Unity Web Player. Install now! Restart your browser after install." src="http://webplayer.unity3d.com/installation/getunityrestart.png" width="193" height="63" />
					</a>
				</div>
			</div>

				</div>
				</a>
            	
            </div>
        </section>
        <?php
            include('altFooter.php');
        ?>
	</body> <!-- End of body content. -->
</html> <!--By Adrian Nowak-->