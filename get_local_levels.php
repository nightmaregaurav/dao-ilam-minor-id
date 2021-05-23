<?php
	include $_SERVER["DOCUMENT_ROOT"].'/login.php';
	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
		require_once $_SERVER["DOCUMENT_ROOT"].'/models/address.php';
		$districts = get_locals($_POST['district_id']);
		$districts = json_encode($districts);

		header("Content-Type: application/json");
		echo $districts;
	}
	else{
		header("HTTP/1.0 404 Not Found");
	}
?>