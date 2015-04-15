<?php  
// Author:Adrian Nowak (12018991)
// Project: CTP - 3D Printing World
// Info: this script will send email with users question

	if (isset($_GET['type'])) {
		$type = $_GET['type'];
	}else{
		header('Location: ../sorry.php?error=messageEngine003');
		exit;
	}
	
	if ($type == "question") {
		$user_name_01 = $_POST['user_name_01'] ; 
		$user_email_01 = $_POST['user_email_01'] ; 
		$msg_subject_01 = "3D Printing World - User Question";

		if ($user_email_01 == "") {
			header('Location: ../sorry.php?error=messageEngine001');
			exit;
		}
		if ($msg_subject_01 == "") {
			header('Location: ../sorry.php?error=messageEngine002');
			exit;
		}

		$Message = "Name: " .$user_name_01  . " Question: " .$_POST['Message'] ;
		mail("3dprintingworldctp@gmail.com", "$msg_subject_01", $Message, "From:" . $user_email_01);

		header('Location: ../done.php');
		exit;
	} elseif ($type == "team") {
		$user_name_01 = $_POST['user_name_01'] ; 
		$user_email_01 = $_POST['user_email_01'] ; 
		$msg_subject_01 = "3D Printing World - New Team Member";

		if ($user_email_01 == "") {
			header('Location: ../sorry.php?error=messageEngine001');
			exit;
		}
		if ($msg_subject_01 == "") {
			header('Location: ../sorry.php?error=messageEngine002');
			exit;
		}

		$Message = "Name: " .$user_name_01  . " Tell us something about you: " .$_POST['Message'] . " Why do you want to work with us:" . $_POST['Message2'];
		mail("3dprintingworldctp@gmail.com", "$msg_subject_01", $Message, "From:" . $user_email_01);

		header('Location: ../done.php');
		exit;
	}else{
		header('Location: ../sorry.php?error=messageEngine004');
		exit;
	}
?>