<?php

	require('../model/database.php');
	require('../model/emp_account.php');
	require('../model/purchase_order_db.php');
	require('../model/order_status_db.php');	

	$action = filter_input(INPUT_POST, 'action');
	if($action == NULL){
		$action = filter_input(INPUT_GET, 'action');
		if($action == NULL){
			$action = 'emp_portal';
		}
	}

	if($action == 'emp_portal' || $action == 'logout'){
		
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
	}elseif($action =='purchase_orders'){
		
		$part_id = filter_input(INPUT_GET, 'part_id', FILTER_VALIDATE_INT);
		
		if ($part_id == NULL ||$part_id == FALSE){
			$part_id=1;
		}	
		
		$part_id = get_part_id();

		
		include('purchase_orders.php');
		
	}elseif ($action == 'define_purchase_order'){
		$part_id = filter_input(INPUT_POST, 'part_id_define');
		$m_a_units = filter_input(INPUT_POST, 'm_a_units', FILTER_VALIDATE_INT);
		$num_parts = filter_input(INPUT_POST, 'num_parts', FILTER_VALIDATE_INT);


		if($m_a_units == NULL || $m_a_units == FALSE){
			
		$error = "Invalid (missing) Minmum Allowed Units.";
		include('../error/error.php');
		
		}elseif($num_parts == NULL || $num_parts == FALSE){
			
		$error = "Invalid (missing) Units to Reorder.";
		include('../error/error.php');
		
		}else{
			define_purchase_order($part_id, $m_a_units, $num_parts);
			include('accounting.php');
		}
	}elseif ($action == 'create_purchase_order'){
		$part_id = filter_input(INPUT_POST, 'part_id_define');
		$num_parts = filter_input(INPUT_POST, 'num_parts', FILTER_VALIDATE_INT);


		if($num_parts == NULL || $num_parts == FALSE){
		$error = "Invalid (missing) Units to Reorder.";
		include('../error/error.php');
		}else{
			create_purchase_order($part_id, $num_parts);
			include('accounting.php');
		}
	}elseif ($action == 'check_purchase_order'){
		$start_date = filter_input(INPUT_POST, 'start_date', FILTER_SANITIZE_NUMBER_INT);
		$end_date = filter_input(INPUT_POST, 'end_date', FILTER_SANITIZE_NUMBER_INT);

		

		if($start_date == NULL || $start_date == FALSE){
			$error = "Start Date invalid or missing.";
			include('../error/error.php');
		}elseif($end_date == NULL || $end_date == FALSE){
			$error = "End Date invalid or missing.";
			include('../error/error.php');
		}
		
			$purchase_orders_view = view_purchase_orders($start_date, $end_date);
		
			include('purchase_order_table.php');
		
	}elseif ($action == 'order_status'){
		
		$status_id = filter_input(INPUT_GET, 'status_id', FILTER_VALIDATE_INT);
		
		if ($status_id == NULL ||$status_id == FALSE){
			$status_id=1;
		}	
		
		$status_name = get_status_name($status_id);
		$status_id = get_order_status();
		
		include('order_status.php');
			
		
	}elseif ($action == 'process_orders'){
		$order_id = filter_input(INPUT_POST, 'order_id', FILTER_SANITIZE_NUMBER_INT);
		$order_status = filter_input(INPUT_POST, 'order_status_id');

		

		if($order_id == NULL || $order_id == FALSE){
			$error = "Order ID invalid or missing.";
			include('../error/error.php');
		}
		
			update_order_status($order_id, $order_status);
			include('accounting.php');
			
		
	}elseif ($action == 'update_orders'){
		
		$status_id = filter_input(INPUT_GET, 'status_id', FILTER_VALIDATE_INT);
		
		if ($status_id == NULL ||$status_id == FALSE){
			$status_id=1;
		}	
		
		$status_name = get_status_name($status_id);
		$status_id = get_order_status();
		
		include('update_orders.php');
			
		
	}elseif ($action == 'close_orders'){
		$order_id = filter_input(INPUT_POST, 'order_id', FILTER_SANITIZE_NUMBER_INT);
		$order_status = filter_input(INPUT_POST, 'order_status_id');

		

		if($order_id == NULL || $order_id == FALSE){
			$error = "Order ID invalid or missing.";
			include('../error/error.php');
		}
		
			update_order_status($order_id, $order_status);
			include('production.php');
			
		
	}


?>