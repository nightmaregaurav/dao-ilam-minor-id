<?php
	include $_SERVER["DOCUMENT_ROOT"].'/login.php';
	
	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
		 
		// DB table to use
		$table = 'id_full_detail';
		 
		// Table's primary key
		$primaryKey = 'id';
		 
		// Array of database columns which should be read and sent back to DataTables.
		// The `db` parameter represents the column name in the database, while the `dt`
		// parameter represents the DataTables column identifier. In this case simple
		// indexes
		$columns = array(
		    array( 'db' => 'id', 'dt' => 0 ),
		    array( 'db' => 'name_surname_en',  'dt' => 1 ),
		    array( 'db' => 'name_surname_ne',   'dt' => 2 ),
		    array( 'db' => 'birth_date_en',   'dt' => 3 ),
		    array( 'db' => 'birth_date_ne',   'dt' => 4 ),
		   	
		);
		
		include 'models/server_credentials.php';
		
		// SQL server connection information
		$sql_details = array(
		    'user' => $username,
		    'pass' => $password,
		    'db'   => $dbname,
		    'host' => $servername
		);
		 
		 
		/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
		 * If you just want to use the basic configuration for DataTables with PHP
		 * server-side, there is no need to edit below this line.
		 */
		 
		require($_SERVER["DOCUMENT_ROOT"].'/vendor/ssp.class.php');
		
		header("Content-Type: application/json");
		
		echo json_encode(
		    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
		);
	}
	else{
		header("HTTP/1.0 404 Not Found");
	}
?>