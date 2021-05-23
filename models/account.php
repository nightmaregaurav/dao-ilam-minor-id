<?php
	function is_valid($uname, $pass){
		include $_SERVER["DOCUMENT_ROOT"].'/models/server_credentials.php';
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
  			die("Connection failed: " . $conn->connect_error);
		}

		$pass = md5($pass);		

		$sql = "SELECT id FROM user WHERE username=? AND passhash=?";
		$statement = $conn->prepare($sql);

		$statement->bind_param("ss", $uname, $pass);

		if($statement->execute()){
			$result = $statement->get_result();
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$id = $row['id'];
				$statement->close();
				$conn->close();
				return $id;
			}
		}
		else{
			header("SQL_ERROR: ".$conn->error);
		}
		$statement->close();
		$conn->close();
		return FALSE;
	}
	function is_valid_id($id){
		include $_SERVER["DOCUMENT_ROOT"].'/models/server_credentials.php';
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
  			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT id FROM user WHERE id=?";
		$statement = $conn->prepare($sql);

		$statement->bind_param("i", $id);

		if($statement->execute()){
			$result = $statement->get_result();
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$id = $row['id'];
				$statement->close();
				$conn->close();
				return $id;
			}
		}
		else{
			header("SQL_ERROR: ".$conn->error);
		}
		$statement->close();
		$conn->close();
		return FALSE;
	}
?>