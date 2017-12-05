<?php

	require('model/database.php');
	require('model/emp_account.php');
	require('model/purchase_order_db.php');
	require('model/order_status_db.php');
	require('model/reports_db.php');	

	$action = filter_input(INPUT_POST, 'action');
	$emp_dep = filter_input(INPUT_POST, 'emp_dep');
	if($action == NULL){
		$action = filter_input(INPUT_GET, 'action');
		if($action == NULL){
			$action = 'emp_portal';
		}
	}

	if($action == 'emp_portal' || $action == 'logout'){
		
		include('employee_accounts/login.php');
		
	}elseif ($action == 'emp_login'){
		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_NUMBER_INT);
		$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);


		if($username == NULL || $username == FALSE){
			$error = "Invalid or missing username.";
			include('error/error.php');
		}elseif($username == NULL || $username == FALSE){
			$error = "Invalid or missing username.";
			include('error/error.php');
		}elseif($password == NULL || $password == FALSE){
			$error = "Invalid or missing password.";
			include('error/error.php');
		}else{
			$dept_name = emp_login($username, $password);

			
			if($dept_name == 'Management'){
				include('employee_accounts/manager.php');
			}elseif($dept_name == 'Accounting'){
				include('employee_accounts/accounting.php');
			}elseif($dept_name == 'Production Supervisor'){
				include('employee_accounts/production.php');
			}elseif($dept_name == 'Sales'){
				include('employee_accounts/sales.php');
			}else{
				$error = "Incorrect login credentials";
				include('error/error.php');
			}
		}
	}elseif($action =='purchase_orders'){
		
		$part_id = filter_input(INPUT_POST, 'part_id', FILTER_VALIDATE_INT);
		
		if ($part_id == NULL ||$part_id == FALSE){
			$part_id=1;
		}	
		
		$part_id = get_part_id();

		
		include('employee_accounts/purchase_orders.php');
		
	}elseif ($action == 'define_purchase_order'){
		$part_id = filter_input(INPUT_POST, 'part_id_define');
		$m_a_units = filter_input(INPUT_POST, 'm_a_units', FILTER_VALIDATE_INT);
		$num_parts = filter_input(INPUT_POST, 'num_parts', FILTER_VALIDATE_INT);


		if($m_a_units == NULL || $m_a_units == FALSE){
			
		$error = "Invalid (missing) Minmum Allowed Units.";
		include('error/error.php');
		
		}elseif($num_parts == NULL || $num_parts == FALSE){
			
		$error = "Invalid (missing) Units to Reorder.";
		include('error/error.php');
		
		}else{
			define_purchase_order($part_id, $m_a_units, $num_parts);
			if($emp_dep == 'manager'){
				include('employee_accounts/manager.php');
			}else{
				include('employee_accounts/accounting.php');
			}
		}
	}elseif ($action == 'create_purchase_order'){
		$part_id = filter_input(INPUT_POST, 'part_id_define');
		$num_parts = filter_input(INPUT_POST, 'num_parts', FILTER_VALIDATE_INT);


		if($num_parts == NULL || $num_parts == FALSE){
		$error = "Invalid (missing) Units to Reorder.";
		include('error/error.php');
		}else{
			create_purchase_order($part_id, $num_parts);
			if($emp_dep == 'manager'){
				include('employee_accounts/manager.php');
			}else{
				include('employee_accounts/accounting.php');
			}
		}
	}elseif ($action == 'check_purchase_order'){
		$start_date = filter_input(INPUT_POST, 'start_date', FILTER_SANITIZE_NUMBER_INT);
		$end_date = filter_input(INPUT_POST, 'end_date', FILTER_SANITIZE_NUMBER_INT);

		

		if($start_date == NULL || $start_date == FALSE){
			$error = "Start Date invalid or missing.";
			include('error/error.php');
		}elseif($end_date == NULL || $end_date == FALSE){
			$error = "End Date invalid or missing.";
			include('error/error.php');
		}
		
			$purchase_orders_view = view_purchase_orders($start_date, $end_date);
		
			include('employee_accounts/purchase_order_table.php');
		
	}elseif ($action == 'order_status'){
		
		$status_id = filter_input(INPUT_POST, 'status_id', FILTER_VALIDATE_INT);
		
		if ($status_id == NULL ||$status_id == FALSE){
			$status_id=1;
		}	
		
		$status_name = get_status_name($status_id);
		$status_id = get_order_status();
		
		include('employee_accounts/order_status.php');
			
		
	}elseif ($action == 'process_orders'){
		$order_id = filter_input(INPUT_POST, 'order_id', FILTER_SANITIZE_NUMBER_INT);
		$order_status = filter_input(INPUT_POST, 'order_status_id');

		

		if($order_id == NULL || $order_id == FALSE){
			$error = "Order ID invalid or missing.";
			include('error/error.php');
		}
		
			update_order_status($order_id, $order_status);
			include('employee_accounts/accounting.php');
			
		
	}elseif ($action == 'update_orders'){
		
		$status_id = filter_input(INPUT_POST, 'status_id', FILTER_VALIDATE_INT);
		
		if ($status_id == NULL ||$status_id == FALSE){
			$status_id=1;
		}	
		
		$status_name = get_status_name($status_id);
		$status_id = get_order_status();
		
		include('employee_accounts/update_orders.php');
			
		
	}elseif ($action == 'close_orders'){
		$order_id = filter_input(INPUT_POST, 'order_id', FILTER_SANITIZE_NUMBER_INT);
		$order_status = filter_input(INPUT_POST, 'order_status_id');

		

		if($order_id == NULL || $order_id == FALSE){
			$error = "Order ID invalid or missing.";
			include('error/error.php');
		}
		
			update_order_status($order_id, $order_status);

			if($emp_dep == 'manager'){
				include('employee_accounts/manager.php');
			}else{
				include('employee_accounts/production.php');
			}
			
		
	}elseif ($action == 'production'){
		
		include('employee_accounts/production.php');
			
	}elseif ($action == 'manager'){
		
		include('employee_accounts/manager.php');
			
	}elseif ($action == 'accounting'){
		
		include('employee_accounts/accounting.php');
			
	}
	elseif ($action == 'sales'){
		
		include('employee_accounts/sales.php');
			
	}elseif ($action == 'shipping_label'){
		$order_id = filter_input(INPUT_POST, 'order_number', FILTER_SANITIZE_NUMBER_INT);		

		if($order_id == NULL || $order_id == FALSE){
			$error = "Order ID invalid or missing.";
			include('error/error.php');
		}else{		
			$order_address = order_address($order_id);
			include('employee_accounts/order_address.php');
		}	
		
	}elseif ($action == 'inventory_report'){
		$month = filter_input(INPUT_POST, 'month');
		$year = filter_input(INPUT_POST, 'year');

		
			$inventory_report = inventory_report($month, $year);
			include('employee_accounts/inventory_report.php');
			
	}elseif ($action == 'sales_report'){
		$month = filter_input(INPUT_POST, 'month');
		$year = filter_input(INPUT_POST, 'year');

		
			$sales_report = sales_report($month, $year);
			include('employee_accounts/sales_report.php');
					
	}elseif ($action == 'profit_loss_report'){
		$month = filter_input(INPUT_POST, 'month');
		$year = filter_input(INPUT_POST, 'year');

		
			$profit_loss_report = profit_loss_report($month, $year);
			include('employee_accounts/profit_loss_report.php');
					
	}


?>