<?php
/*
	# Author: Arian Nowak
	# Notes: PHP script: Produce a list of 3D Printers
*/

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

		//query
		$query = "SELECT * FROM printers ORDER BY Printer_Name";

		//execute
		$data = mysqli_query($conn, $query);

		//loop
		while ($row = mysqli_fetch_array($data)){
			$emptyTable = "Table is not empty.";

			echo "<div class='printer'>";
			echo "<a href='3D_Printer.php?Printer_ID=". $row["Printer_ID"] ."'>";
			echo "<img width='120px' alt='image of printer' src='img/printers/". $row["Printer_IMG"] .".jpg'><br />";
			echo "<h3>" .  $row["Printer_Name"] . "</h3>";
			echo "<p>" .  $row["Printer_Price"] . "</p>";
			echo "</a></div>";
		}
		if (isset($emptyTable)) {
		}else{
			echo "<p class='error'>Sorry, something went wrong. We are now trying to fix it.</p><br />";
			exit;
		}
	}
?>