<?php
	function get_id_details($id){
		include $_SERVER["DOCUMENT_ROOT"].'/models/server_credentials.php';
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
  			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM id_full_detail where id=?";
		$statement = $conn->prepare($sql);

		$statement->bind_param("i", $id);

		if($statement->execute()){
			$result = $statement->get_result();
			$arr = array();
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
  					array_push($arr, $row);
  				}
			}
		}
		$statement->close();
		$conn->close();
		return $arr;
	}

	function set_id_details($minor_id_no_en, $minor_id_no_ne, $name_surname_en, $name_surname_ne, $gender, $name_surname_father_en, $name_surname_father_ne, $address_father_en, $address_father_ne, $name_surname_mother_en, $name_surname_mother_ne, $address_mother_en, $address_mother_ne, $ctzn_en, $ctzn_ne, $name_add_guardian_en, $name_add_guardian_ne, $birth_date_en, $birth_date_ne, $birth_place_en, $birth_place_ne, $birth_muni, $birth_ward, $place_en, $place_ne, $muni, $ward, $officer_name_en, $officer_pos_en, $officer_name_ne, $officer_pos_ne){
		
		$minor_id_no_en = htmlentities($minor_id_no_en);
		$minor_id_no_ne = htmlentities($minor_id_no_ne);
		$name_surname_en = htmlentities($name_surname_en);
		$name_surname_ne = htmlentities($name_surname_ne);
		$gender = htmlentities($gender);
		$name_surname_father_en = htmlentities($name_surname_father_en);
		$name_surname_father_ne = htmlentities($name_surname_father_ne);
		$address_father_en = htmlentities($address_father_en);
		$address_father_ne = htmlentities($address_father_ne);
		$name_surname_mother_en = htmlentities($name_surname_mother_en);
		$name_surname_mother_ne = htmlentities($name_surname_mother_ne);
		$address_mother_en = htmlentities($address_mother_en);
		$address_mother_ne = htmlentities($address_mother_ne);
		$ctzn_en = htmlentities($ctzn_en);
		$ctzn_ne = htmlentities($ctzn_ne);
		$name_add_guardian_en = htmlentities($name_add_guardian_en);
		$name_add_guardian_ne = htmlentities($name_add_guardian_ne);
		$birth_date_en = htmlentities($birth_date_en);
		$birth_date_ne = htmlentities($birth_date_ne);
		$birth_place_en = htmlentities($birth_place_en);
		$birth_place_ne = htmlentities($birth_place_ne);
		$birth_muni = htmlentities($birth_muni);
		$birth_ward = htmlentities($birth_ward);
		$place_en = htmlentities($place_en);
		$place_ne = htmlentities($place_ne);
		$muni = htmlentities($muni);
		$ward = htmlentities($ward);
		$officer_name_en = htmlentities($officer_name_en);
		$officer_pos_en = htmlentities($officer_pos_en);
		$officer_name_ne = htmlentities($officer_name_ne);
		$officer_pos_ne = htmlentities($officer_pos_ne);

		include $_SERVER["DOCUMENT_ROOT"].'/models/server_credentials.php';
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
  			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT into id_detail
		(minor_id_no_en, minor_id_no_ne, name_surname_en, name_surname_ne, gender, name_surname_father_en, name_surname_father_ne, address_father_en, address_father_ne, name_surname_mother_en, name_surname_mother_ne, address_mother_en, address_mother_ne, ctzn_en, ctzn_ne, name_add_guardian_en, name_add_guardian_ne, birth_date_en, birth_date_ne, birth_place_en, birth_place_ne, birth_muni, birth_ward, place_en, place_ne, muni, ward, officer_name_en, officer_pos_en, officer_name_ne, officer_pos_ne) 
		VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$statement = $conn->prepare($sql);

		$statement->bind_param("sssssssssssssssssssssiissiissss", $minor_id_no_en, $minor_id_no_ne, $name_surname_en, $name_surname_ne, $gender, $name_surname_father_en, $name_surname_father_ne, $address_father_en, $address_father_ne, $name_surname_mother_en, $name_surname_mother_ne, $address_mother_en, $address_mother_ne, $ctzn_en, $ctzn_ne, $name_add_guardian_en, $name_add_guardian_ne, $birth_date_en, $birth_date_ne, $birth_place_en, $birth_place_ne, $birth_muni, $birth_ward, $place_en, $place_ne, $muni, $ward, $officer_name_en, $officer_pos_en, $officer_name_ne, $officer_pos_ne);

		if($statement->execute()){
			$lid = $conn->insert_id;
			$statement->close();
			$conn->close();
			return $lid;
		}
		else{
			header("SQL_ERROR: ".$conn->error);
			$statement->close();
			$conn->close();
			return FALSE;
		}
	}

	function remove_id_details($id){
		include $_SERVER["DOCUMENT_ROOT"].'/models/server_credentials.php';
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
  			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "DELETE FROM id_detail WHERE id=?";		
		$statement = $conn->prepare($sql);

		$statement->bind_param("i", $id);

		if($statement->execute()){
			$afr = $conn->affected_rows;
			$statement->close();
			$conn->close();
			return $afr;
		}
		else{
			header("SQL_ERROR: ".$conn->error);
			$statement->close();
			$conn->close();
			return FALSE;
		}
	}

	function update_id_details($id, $minor_id_no_en, $minor_id_no_ne, $name_surname_en, $name_surname_ne, $gender, $name_surname_father_en, $name_surname_father_ne, $address_father_en, $address_father_ne, $name_surname_mother_en, $name_surname_mother_ne, $address_mother_en, $address_mother_ne, $ctzn_en, $ctzn_ne, $name_add_guardian_en, $name_add_guardian_ne, $birth_date_en, $birth_date_ne, $birth_place_en, $birth_place_ne, $birth_muni, $birth_ward, $place_en, $place_ne, $muni, $ward, $officer_name_en, $officer_pos_en, $officer_name_ne, $officer_pos_ne){
		
		$id = htmlentities($id);
		$minor_id_no_en = htmlentities($minor_id_no_en);
		$minor_id_no_ne = htmlentities($minor_id_no_ne);
		$name_surname_en = htmlentities($name_surname_en);
		$name_surname_ne = htmlentities($name_surname_ne);
		$gender = htmlentities($gender);
		$name_surname_father_en = htmlentities($name_surname_father_en);
		$name_surname_father_ne = htmlentities($name_surname_father_ne);
		$address_father_en = htmlentities($address_father_en);
		$address_father_ne = htmlentities($address_father_ne);
		$name_surname_mother_en = htmlentities($name_surname_mother_en);
		$name_surname_mother_ne = htmlentities($name_surname_mother_ne);
		$address_mother_en = htmlentities($address_mother_en);
		$address_mother_ne = htmlentities($address_mother_ne);
		$ctzn_en = htmlentities($ctzn_en);
		$ctzn_ne = htmlentities($ctzn_ne);
		$name_add_guardian_en = htmlentities($name_add_guardian_en);
		$name_add_guardian_ne = htmlentities($name_add_guardian_ne);
		$birth_date_en = htmlentities($birth_date_en);
		$birth_date_ne = htmlentities($birth_date_ne);
		$birth_place_en = htmlentities($birth_place_en);
		$birth_place_ne = htmlentities($birth_place_ne);
		$birth_muni = htmlentities($birth_muni);
		$birth_ward = htmlentities($birth_ward);
		$place_en = htmlentities($place_en);
		$place_ne = htmlentities($place_ne);
		$muni = htmlentities($muni);
		$ward = htmlentities($ward);
		$officer_name_en = htmlentities($officer_name_en);
		$officer_pos_en = htmlentities($officer_pos_en);
		$officer_name_ne = htmlentities($officer_name_ne);
		$officer_pos_ne = htmlentities($officer_pos_ne);

		include $_SERVER["DOCUMENT_ROOT"].'/models/server_credentials.php';
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
  			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "UPDATE id_detail SET minor_id_no_en = ?, minor_id_no_ne = ?, name_surname_en = ?, name_surname_ne = ?, gender = ?, name_surname_father_en = ?, name_surname_father_ne = ?, address_father_en = ?, address_father_ne = ?, name_surname_mother_en = ?, name_surname_mother_ne = ?, address_mother_en = ?, address_mother_ne = ?, ctzn_en = ?, ctzn_ne = ?, name_add_guardian_en = ?, name_add_guardian_ne = ?, birth_date_en = ?, birth_date_ne = ?, birth_place_en = ?, birth_place_ne = ?, birth_muni = ?, birth_ward = ?, place_en = ?, place_ne = ?, muni = ?, ward = ?, officer_name_en = ?, officer_pos_en = ?, officer_name_ne = ?, officer_pos_ne = ? WHERE id=?";
		$statement = $conn->prepare($sql);
		$statement->bind_param("sssssssssssssssssssssiissiissssi", $minor_id_no_en, $minor_id_no_ne, $name_surname_en, $name_surname_ne, $gender, $name_surname_father_en, $name_surname_father_ne, $address_father_en, $address_father_ne, $name_surname_mother_en, $name_surname_mother_ne, $address_mother_en, $address_mother_ne, $ctzn_en, $ctzn_ne, $name_add_guardian_en, $name_add_guardian_ne, $birth_date_en, $birth_date_ne, $birth_place_en, $birth_place_ne, $birth_muni, $birth_ward, $place_en, $place_ne, $muni, $ward, $officer_name_en, $officer_pos_en, $officer_name_ne, $officer_pos_ne, $id);

		if($statement->execute()){
			$statement->close();
			$conn->close();
			return TRUE;
		}
		else{
			header("SQL_ERROR: ".$conn->error);
			$statement->close();
			$conn->close();
			return FALSE;
		}
	}
?>