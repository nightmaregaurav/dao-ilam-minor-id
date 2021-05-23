<?php
	include $_SERVER["DOCUMENT_ROOT"].'/login.php';
	
	if (!isset($_GET['id'])){
		header("HTTP/1.0 404 Not Found");
		die();
	}
	else if (!is_numeric($_GET['id'])){
		header("HTTP/1.0 404 Not Found");
		die();
	}

	$id = $_GET['id'];

	require_once $_SERVER["DOCUMENT_ROOT"].'/models/id.php';

	$id_details = get_id_details($id);
	if(sizeof($id_details)>0)
		$id_details = $id_details[0];
	else{
		header("HTTP/1.0 404 Not Found");
		die();	
	}
	
	if (isset($_GET['action'])){
		$action = $_GET['action'];
		if($action == 'delete'){
			$flag = remove_id_details($id);
			if($flag != TRUE){
		        $FAILURE_MESSAGE = "Database Error!";
		        include $_SERVER["DOCUMENT_ROOT"].'/views/Failure_message.php';
		    }
		    else{
		    	header('Location: /list_all.php');
		        exit();
		    }
		}
	}

	$title = 'View ID Detail';
	$body_file = $_SERVER["DOCUMENT_ROOT"].'/views/view.php';
    $script_file = $_SERVER["DOCUMENT_ROOT"].'/views/view_script.php';

	include $_SERVER["DOCUMENT_ROOT"].'/views/base.php';
?>