<?php
	include $_SERVER["DOCUMENT_ROOT"].'/login.php';
	
	if (!isset($_GET['id'])){
		header("HTTP/1.0 404 Not Found");
		die();
	}

	$id = $_GET['id'];

	require_once $_SERVER["DOCUMENT_ROOT"].'/models/id.php';

	$i = get_id_details($id);
	
	if(sizeof($i)>0)
		$i = $i[0];
	else{
		header("HTTP/1.0 404 Not Found");
		die();	
	}

	if($i['gender']=='male'){
		$gender='पुरुस';
	}
	else if($i['gender']=='female'){
		$gender='महिला';
	}
	else{
		$gender='अन्य';
	}
	
	$title = 'Print';
	$no_nav_bar = TRUE;
	$no_footer = TRUE;
    $body_file = $_SERVER["DOCUMENT_ROOT"].'/views/print.php';
    $stylesheet_file = $_SERVER["DOCUMENT_ROOT"].'/views/print_style.php';
    $replace_body = True;

    include $_SERVER["DOCUMENT_ROOT"].'/views/base.php';
?>
