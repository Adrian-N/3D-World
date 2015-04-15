<?php
/*
	#Author: Adrian Nowak
	#File: functions.php
	#Notes: -
	#Resources:
	#http://www.w3schools.com/php/func_http_header.asp
*/

//check for localhost returns $localhost true or false
//hosting();
function hosting(){
	$localhostIP = array(
		'127.0.0.1',
	    '::1'
	);
	if(!in_array($_SERVER['REMOTE_ADDR'], $localhostIP)){
	   	$localhost = false;
	   	return $localhost;
	}else{
		$localhost = true;
		return $localhost;
	}
}

//check for cookie
//cookieExist();
function cookieExist(){
	if(isset($_COOKIE['Key_my_site'])) {
		$cookieExist = true;
		return $cookieExist;
	}else{
		$cookieExist = false;
		return $cookieExist;
		header('Location: login.php');
	}
}

//calculate cost of 3D Printing
//calculate();
function calculate($time, $weight, $material, $maxPower, $powerCost){
	$MW; // Material Cost and Weight
    $TP; // Time and Power Cost

    //engine
	$material = $material /1000;
    $MW = $material * $weight;
    $maxPower = $maxPower / 1000;
    $TP = $time * $powerCost;
    $e = $maxPower * $TP;
    $total = $MW + $e;

    //return
    return "<p id='result'>&pound;" . round($total,2) . "</p>";
}
?>