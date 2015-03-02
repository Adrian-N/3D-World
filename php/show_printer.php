<?php
	//get ID
	$PRINTER_ID = $_GET['Printer_ID'];

	// conn data
	require("data.php");

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
		$query = "SELECT * FROM printers where Printer_ID=$PRINTER_ID";

		//execute
		$data = mysqli_query($conn, $query);

		//fetch
		$row = mysqli_fetch_array($data);

		//output
		echo "<article class='TemplateSide'>";

			//Printer Name
			echo "<h4>". $row["Printer_Name"] ."</h4>";

			//Manufacturer
			echo "<p>Manufacturer: ". $row["Printer_Manufacturer"] ."</p>";

			//Country
			echo "<p>Country: ". $row["Printer_Country"] ."</p>";

			//Price
			echo "<p>Price: ". $row["Printer_Price"] ."</p>";

			//Website
			echo "<p>Where to Buy: <a target='_blank' href='". $row["Website"] ."'>Website</a></p>";

			//Best Feature
			echo "<p>Best Feature: ". $row["Printer_BF"] ."</p>";

		echo "</article>";

	}


?>
        			<figure class="TemplateSide TemplateSideRight">

        				<!-- Image -->
        				<?php
        				echo "<img src='printers/". $row["Printer_IMG"] .".jpg' alt='Printer Image'>";
        				
        				?>

        			</figure>

        			<!-- More Info -->
        			<p class="moreInfo">
        			<?php
        			echo $row["Printer_Info"];
        			?>
        			</p>