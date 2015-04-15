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
		header("location:../sorry.php?error=dbData001");
	}

	//get conn data
	require("data.php");

	//get printer data
	if ($Printers == true) {
		require("show_printer.php");
	}
	//get material data
	if ($Materials == true) {
		require("show_material.php");
	}
?>