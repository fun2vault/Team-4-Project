<?php
	
	session_start();
			
	$_SESSION['cust_id'];
	$_SESSION['cust_first_name'];
	
	$cust_id = $_SESSION['cust_id'];
	$cust_first_name = $_SESSION['cust_first_name'];
	$my_top = filter_input(INPUT_POST, 'my_top');
    $my_bottom = filter_input(INPUT_POST, 'my_bottom');
	$my_gate = filter_input(INPUT_POST, 'my_gate');
	$model_id = filter_input(INPUT_POST, 'model_id');
	$card_number = filter_input(INPUT_POST, 'card_number');
	$ship_fee = 0;
	$status_id = 1;
	$order_quantity = 1;
	$myDate = date('Y-d-m');
	$custom_id = '';
	
	if ($cust_id == null 			||
		$my_top == null  			||
		$my_bottom == null 			||
		$my_gate == null 			||
		$model_id == null){
		header('Location:order.php');
	} else {
	
		require_once('sign_in_database.php');
		
		$query = 'SELECT cust_last_name, cust_city, cust_state, cust_street, cust_zip FROM Customer
				  WHERE cust_id = :cust_id';
				  
		$statement = $db->prepare($query);
		$statement->bindValue(':cust_id', $cust_id);
		$statement->execute();
		$customer_array = $statement->fetch();
		$statement->closeCursor();
		
		$ship_name = $cust_first_name." ".$customer_array['cust_last_name'];
		
		$query2 = 'INSERT INTO Orders
					 (credit_card, cust_id, order_date, ship_city, ship_date, ship_fee, ship_name, ship_state, ship_street, ship_zip, status_id)
				  VALUES
					 (:credit_card, :cust_id, :order_date, :ship_city, :ship_date, :ship_fee, :ship_name, :ship_state, :ship_street, :ship_zip, :status_id)';
		
		$statement2 = $db->prepare($query2);
		$statement2->bindValue(':credit_card', $card_number);
		$statement2->bindValue(':cust_id', $cust_id);
		$statement2->bindValue(':order_date', $myDate);
		$statement2->bindValue(':ship_city', $customer_array['cust_city']);
		$statement2->bindValue(':ship_date', $myDate);
		$statement2->bindValue(':ship_fee', $ship_fee);
		$statement2->bindValue(':ship_name', $ship_name);
		$statement2->bindValue(':ship_state', $customer_array['cust_state']);
		$statement2->bindValue(':ship_street', $customer_array['cust_street']);
		$statement2->bindValue(':ship_zip', $customer_array['cust_zip']);
		$statement2->bindValue(':status_id', $status_id);
		$statement2->execute();
		$statement2->closeCursor();	
		
		$query3 = 'SELECT MAX(order_id) FROM Orders 
				   WHERE cust_id = :cust_id';
				  
		$statement3 = $db->prepare($query3);
		$statement3->bindValue(':cust_id', $cust_id);
		$statement3->execute();
		$order_id = $statement3->fetch();
		$statement3->closeCursor();
		
		$query4 = 'SELECT COUNT(order_id) FROM Orders 
				   WHERE cust_id = :cust_id';
				  
		$statement4 = $db->prepare($query4);
		$statement4->bindValue(':cust_id', $cust_id);
		$statement4->execute();
		$order_count = $statement4->fetch();
		$statement4->closeCursor();
		
		if($order_count[0] == 2){
			$discount = 25;
		}else{
			$discount = 0;
		}
		
		if($my_top == 1){
			$custom_id .= '1'; 
		}
		
		if($my_bottom == 1){
			$custom_id .= '2'; 
		}
		
		if($my_gate == 1){
			switch ($model_id){
				case 1:
					$custom_id .= '4'; 
					break;
				case 2:
					$custom_id .= '5'; 
					break;
				case 4:
					$custom_id .= '6'; 
					break; 
			}
		}		
	
		$query5 ='INSERT INTO Order_Details(order_id, model_id, custom_id, order_quantity, discount) 
				  VALUES
					 (:order_id, :model_id, :custom_id, :order_quantity, :discount)';
					 
		$statement5 = $db->prepare($query5);
		$statement5->bindValue(':order_id', $order_id[0]);
		$statement5->bindValue(':model_id', $model_id);
		$statement5->bindValue(':custom_id', $custom_id);
		$statement5->bindValue(':order_quantity', $order_quantity);
		$statement5->bindValue(':discount', $discount);
		$statement5->execute();
		$statement5->closeCursor();
	}
		/*session_unset(); 
		session_destroy();*/
		//header('Location:login.php');
?>