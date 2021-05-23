<?php
	function get_provinces(){
		include $_SERVER["DOCUMENT_ROOT"].'/models/server_credentials.php';
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
  			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM province";
		$result = $conn->query($sql);

		$arr = array();

		if ($result->num_rows > 0) {
  			while($row = $result->fetch_assoc()) {
  				array_push($arr, $row);
  			}
		}
		else{
			header("SQL_ERROR: ".$conn->error);
		}

		$conn->close();


		return $arr;
	}

	function get_districts(){
		include $_SERVER["DOCUMENT_ROOT"].'/models/server_credentials.php';
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
  			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT id, english, nepali FROM district";
		
		$result = $conn->query($sql);
		$arr = array();

		if ($result->num_rows > 0) {
  			while($row = $result->fetch_assoc()) {
  				array_push($arr, $row);
  			}
		}
		else{
			header("SQL_ERROR: ".$conn->error);
		}

		$conn->close();
		return $arr;
	}

	function get_locals($district_id){
		include $_SERVER["DOCUMENT_ROOT"].'/models/server_credentials.php';
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
  			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT id, english, nepali FROM local_level where district_id=?";
		$statement = $conn->prepare($sql);

		$statement->bind_param("i", $district_id);

		if($statement->execute()){
			$result = $statement->get_result();
			$arr = array();
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
  					array_push($arr, $row);
  				}
			}
		}
		else{
			header("SQL_ERROR: ".$conn->error);
		}
		$statement->close();
		$conn->close();
		return $arr;
	}
?>