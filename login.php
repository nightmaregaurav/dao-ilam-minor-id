<?php
	session_start();
	
	require_once $_SERVER["DOCUMENT_ROOT"].'/models/account.php';
	
	if(isset($_POST["login_submit"])){
		$validity = is_valid($_POST["username"], $_POST["password"]);
		if($validity != FALSE){
			$_SESSION['login_status'] = TRUE;
			$_SESSION['user_id'] = $validity;
		}
		else{
			$FAILURE_MESSAGE = "Login Failed! Username Password Did not match!";
			include $_SERVER["DOCUMENT_ROOT"].'/views/Failure_message.php';
			showlogin();
			exit();
		}
	}

	if(isset($_SESSION["login_status"]) and isset($_SESSION['user_id'])){
		if(!$_SESSION["login_status"]==TRUE){
			showlogin();
			exit();
		}
		else{
			$validity = is_valid_id($_SESSION['user_id']);
			if($validity == FALSE){
				showlogin();
				exit();		
			}
		}
	}
	else{
		showlogin();
		exit();
	}

	

	function showlogin(){
		$title = 'Login';
		$no_nav_bar = TRUE;
		$no_footer = TRUE;
	    $body_file = $_SERVER["DOCUMENT_ROOT"].'/views/login.php';

	    include $_SERVER["DOCUMENT_ROOT"].'/views/base.php';
	}
?>