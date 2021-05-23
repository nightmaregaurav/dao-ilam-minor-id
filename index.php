<?php
    include $_SERVER["DOCUMENT_ROOT"].'/login.php';
if(isset($_POST['submit'])){
        $unfilled = '';
        $valid = TRUE;
        if(isset($_POST['minor_id_no_en']) and strlen(trim($_POST['minor_id_no_en']))>0){
            $minor_id_no_en = trim($_POST['minor_id_no_en']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Minor ID English; ';
        }
        if(isset($_POST['minor_id_no_ne']) and strlen(trim($_POST['minor_id_no_ne']))>0){
            $minor_id_no_ne = trim($_POST['minor_id_no_ne']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Minor ID Nepali; ';
        }
        if(isset($_POST['name_surname_en']) and strlen(trim($_POST['name_surname_en']))>0){
            $name_surname_en = trim($_POST['name_surname_en']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'English name; ';
        }
        if(isset($_POST['name_surname_ne']) and strlen(trim($_POST['name_surname_ne']))>0){
            $name_surname_ne = trim($_POST['name_surname_ne']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Nepali name; ';
        }
        if(isset($_POST['gender']) and strlen(trim($_POST['gender']))>0){
            $gender = trim($_POST['gender']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Gender; ';
        }
        if(isset($_POST['name_surname_father_en']) and strlen(trim($_POST['name_surname_father_en']))>0){
            $name_surname_father_en = trim($_POST['name_surname_father_en']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. "Father's name english; ";
        }
        if(isset($_POST['name_surname_father_ne']) and strlen(trim($_POST['name_surname_father_ne']))>0){
            $name_surname_father_ne = trim($_POST['name_surname_father_ne']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. "Father's name nepali; ";
        }
        if(isset($_POST['address_father_en']) and strlen(trim($_POST['address_father_en']))>0){
            $address_father_en = trim($_POST['address_father_en']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. "Father's address english; ";
        }
        if(isset($_POST['address_father_ne']) and strlen(trim($_POST['address_father_ne']))>0){
            $address_father_ne = trim($_POST['address_father_ne']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. "Father's address nepali; ";
        }
        if(isset($_POST['name_surname_mother_en']) and strlen(trim($_POST['name_surname_mother_en']))>0){
            $name_surname_mother_en = trim($_POST['name_surname_mother_en']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. "Mother's name english; ";
        }
        if(isset($_POST['name_surname_mother_ne']) and strlen(trim($_POST['name_surname_mother_ne']))>0){
            $name_surname_mother_ne = trim($_POST['name_surname_mother_ne']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. "Mother's name english; ";
        }
            if(isset($_POST['address_mother_en']) and strlen(trim($_POST['address_mother_en']))>0){
            $address_mother_en = trim($_POST['address_mother_en']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. "Mother's address english; ";
        }
        if(isset($_POST['address_mother_ne']) and strlen(trim($_POST['address_mother_ne']))>0){
            $address_mother_ne = trim($_POST['address_mother_ne']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. "Mother's address nepali; ";
        }
        if(isset($_POST['ctzn_en']) and strlen(trim($_POST['ctzn_en']))>0){
            $ctzn_en = trim($_POST['ctzn_en']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. "Parent's Citizenship id english; ";
        }
        if(isset($_POST['ctzn_ne']) and strlen(trim($_POST['ctzn_ne']))>0){
            $ctzn_ne = trim($_POST['ctzn_ne']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. "Parent's Citizenship id nepali; ";
        }
        if(isset($_POST['name_add_guardian_en']) and strlen(trim($_POST['name_add_guardian_en']))>0){
            $name_add_guardian_en = trim($_POST['name_add_guardian_en']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. "Guardian's name english; ";
        }
        if(isset($_POST['name_add_guardian_ne']) and strlen(trim($_POST['name_add_guardian_ne']))>0){
            $name_add_guardian_ne = trim($_POST['name_add_guardian_ne']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. "Guardian's name nepalt; ";
        }
        if(isset($_POST['birth_date_en']) and strlen(trim($_POST['birth_date_en']))>0){
            $birth_date_en = trim($_POST['birth_date_en']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Birth date English; ';
        }
        if(isset($_POST['birth_date_ne']) and strlen(trim($_POST['birth_date_ne']))>0){
            $birth_date_ne = trim($_POST['birth_date_ne']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Birth date Nepali; ';
        }
        if(isset($_POST['birth_place_en']) and strlen(trim($_POST['birth_place_en']))>0){
            $birth_place_en = trim($_POST['birth_place_en']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Birth place english; ';
        }
        if(isset($_POST['birth_place_ne']) and strlen(trim($_POST['birth_place_ne']))>0){
            $birth_place_ne = trim($_POST['birth_place_ne']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Birth place nepali; ';
        }
        if(isset($_POST['birth_muni']) and strlen(trim($_POST['birth_muni']))>0){
            $birth_muni = trim($_POST['birth_muni']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Birth Municipality/VDC; ';
        }
        if(isset($_POST['birth_ward']) and strlen(trim($_POST['birth_ward']))>0){
            $birth_ward = trim($_POST['birth_ward']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Birth ward; ';
        }
        if(isset($_POST['place_en']) and strlen(trim($_POST['place_en']))>0){
            $place_en = trim($_POST['place_en']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Permanent address english; ';
        }
        if(isset($_POST['place_ne']) and strlen(trim($_POST['place_ne']))>0){
            $place_ne = trim($_POST['place_ne']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Permanent address nepali; ';
        }
        if(isset($_POST['muni']) and strlen(trim($_POST['muni']))>0){
            $muni = trim($_POST['muni']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Permanent address Municipality/VDC; ';
        }
        if(isset($_POST['ward']) and strlen(trim($_POST['ward']))>0){
            $ward = trim($_POST['ward']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Permanent address ward; ';
        }
        if(isset($_POST['officer_name_en']) and strlen(trim($_POST['officer_name_en']))>0){
            $officer_name_en = trim($_POST['officer_name_en']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Officer Name English; ';
        }
        if(isset($_POST['officer_pos_en']) and strlen(trim($_POST['officer_pos_en']))>0){
            $officer_pos_en = trim($_POST['officer_pos_en']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Officer position English; ';
        }
        if(isset($_POST['officer_name_ne']) and strlen(trim($_POST['officer_name_ne']))>0){
            $officer_name_ne = trim($_POST['officer_name_ne']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Officer Name Nepali; ';
        }
        if(isset($_POST['officer_pos_ne']) and strlen(trim($_POST['officer_pos_ne']))>0){
            $officer_pos_ne = trim($_POST['officer_pos_ne']);
        }
        else{
            $valid = FALSE;
            $unfilled = $unfilled. 'Officer position Nepali';
        }

        if($valid === FALSE){
            $FAILURE_MESSAGE = "Fields Needed to be filled/corrected: '".$unfilled."'";
            include $_SERVER["DOCUMENT_ROOT"].'/views/Failure_message.php';
        }
        else{
            require_once $_SERVER["DOCUMENT_ROOT"].'/models/id.php';
            $flag = set_id_details($minor_id_no_en, $minor_id_no_ne, $name_surname_en, $name_surname_ne, $gender, $name_surname_father_en, $name_surname_father_ne, $address_father_en, $address_father_ne, $name_surname_mother_en, $name_surname_mother_ne, $address_mother_en, $address_mother_ne, $ctzn_en, $ctzn_ne, $name_add_guardian_en, $name_add_guardian_ne, $birth_date_en, $birth_date_ne, $birth_place_en, $birth_place_ne, $birth_muni, $birth_ward, $place_en, $place_ne, $muni, $ward, $officer_name_en, $officer_pos_en, $officer_name_ne, $officer_pos_ne);
            
            if($flag === FALSE){
                $FAILURE_MESSAGE = "Database Error!";
                include $_SERVER["DOCUMENT_ROOT"].'/views/Failure_message.php';
            }
            else{
                header('Location: /view.php?id='.$flag);
            }
        }
    }
    $title = 'Home';
    $body_file = $_SERVER["DOCUMENT_ROOT"].'/views/index.php';
    $script_file = $_SERVER["DOCUMENT_ROOT"].'/views/index_script.php';

    require_once $_SERVER["DOCUMENT_ROOT"].'/models/address.php';
    $districts = get_districts();
    
    include $_SERVER["DOCUMENT_ROOT"].'/views/base.php';
?>