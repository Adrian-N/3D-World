<?php
	// $url="index.php";
	$url="sorry.php?error=M00001";
	function redirect($url){
    	$string = '<script type="text/javascript"> window.location = "' . $url . '" </script>';
    	echo $string;
	}//redirect($url);

	//connect
	$conn = mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_errno())
	{ 
		echo "<p class='error'>Sorry, something went wrong. We are now trying to fix it.</p><br />";
		echo "Error Info: " . mysqli_connect_error(); 
		exit;
	} 
	else{
		// query
		$query = "SELECT * FROM materials where m_id=$MATERIAL_ID";

		
		//execute
		$data = mysqli_query($conn, $query);

		//fetch
		$row = mysqli_fetch_array($data);

		//bulletproof
		$quickCheck = $row["m_name"];
		if ($quickCheck == "") {
			redirect($url);
		}

		//output

		echo "<article class='TemplateSide'>";

			//Printer Name
			echo "<h4>". $row["m_name"] ."</h4>";

			//Finish
			echo "<p>Finish: ". $row["m_finish"] ."</p>";

			//Country
			echo "<p>Strenght: ". $row["m_strenght"] ."</p>";

			//Price
			echo "<p>Price: ". $row["m_price"] ."/KG</p>";

			//Website
			echo "<p>Where to Buy: <a target='_blank' href='". $row["m_link"] ."'>" . $row["m_linkDesc"] . "</a></p>";

			//Best Feature
			echo "<p>Best Feature: ". $row["m_feature"] ."</p>";

		echo "</article>";

	}


?>
        			<figure class="TemplateSide TemplateSideRight">

        				<!-- Image -->
        				<?php
        				echo "<img width='190px' height='240px' src='img/materials/". $row["m_img"] .".jpg' alt='Printer Image'>";
        				
        				?>

        			</figure>

        			<!-- More Info -->
        			<p class="moreInfo">
        			<?php
        			echo $row["m_desc"];
        			?>
        			</p>