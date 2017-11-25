<?php
// Robert Bell, CSCI 4000, 30JUN17

	require('../model/robert_bell_database.php');
	require('../model/robert_bell_major_db.php');
	require('../model/robert_bell_student_db.php');
	

	$action = filter_input(INPUT_POST, 'action');
	if($action == NULL){
		$action = filter_input(INPUT_GET, 'action');
		if($action == NULL){
			$action = 'list_students';
		}
	}

	if($action == 'list_students'){
		$major_id = filter_input(INPUT_GET, 'major_id', FILTER_VALIDATE_INT);
		if ($major_id == NULL ||$major_id == FALSE){
			$major_id=1;
		}
		
		
		
		//echo $major_id."<br>\n";
		$major_name = get_major_name($major_id);
		$majors = get_majors();
		$students = get_students_by_major($major_id);
		//echo $major_name."<br>\n";
		
		include('robert_bell_student_list.php');
		
	}elseif($action == 'delete_product'){
		//get ID
		$student_id = filter_input(INPUT_POST,'student_id', FILTER_VALIDATE_INT);
		$major_id = filter_input(INPUT_POST,'major_id', FILTER_VALIDATE_INT);
		delete_student($student_id);
		header("Location: .?major_id=$major_id");
	}elseif ($action == 'show_add_form'){
		$majors = get_majors();
		include('robert_bell_student_add.php');
	}elseif ($action == 'add_student'){
		$major_id = filter_input(INPUT_POST, 'major_id');
		$firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
		$lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
		$gender = filter_input(INPUT_POST, 'gender');


		if($firstName == NULL || $firstName == FALSE || $lastName == NULL || $lastName == FALSE){
		$error = "Invalid (missing) name. Check all fields and try again.";
		include('../errors/robert_bell_error.php');
		}else{
			add_student($major_id, $firstName, $lastName, $gender);
			header("Location: .?major_id=$major_id");
		}
	}


?>

