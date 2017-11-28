<?php

	require('../model/database.php');
	require('../model/emp_account.php');	

	$action = filter_input(INPUT_POST, 'action');
	if($action == NULL){
		$action = filter_input(INPUT_GET, 'action');
		if($action == NULL){
			$action = 'emp_portal';
		}
	}

	if($action == 'emp_portal'){
		
		include('login.php');
		
	}elseif ($action == 'emp_login'){
		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_NUMBER_INT);
		$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);


		if($username == NULL || $username == FALSE){
			$error = "Invalid or missing username.";
			include('../error/error.php');
		}elseif($username == NULL || $username == FALSE){
			$error = "Invalid or missing username.";
			include('../error/error.php');
		}elseif($password == NULL || $password == FALSE){
			$error = "Invalid or missing password.";
			include('../error/error.php');
		}else{
			$dept_name = emp_login($username, $password);
			
			
			if($dept_name == 'Management'){
				include('manager.php');
			}elseif($dept_name == 'Accounting'){
				include('accounting.php');
			}elseif($dept_name == 'Production'){
				include('production.php');
			}elseif($dept_name == 'Sales'){
				include('sales.php');
			}else{
				$error = "Incorrect login credentials";
				include('../error/error.php');
			}
		}
	}


?>