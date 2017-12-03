<?php
	$first_name = filter_input(INPUT_POST, 'first_name');
    $last_name = filter_input(INPUT_POST, 'last_name');
	$customer_password = filter_input(INPUT_POST, 'password');
	$phone_number = filter_input(INPUT_POST, 'phone_number');
	$email = filter_input(INPUT_POST, 'email');
	$street = filter_input(INPUT_POST, 'street');
	$city = filter_input(INPUT_POST, 'city');
	$state = filter_input(INPUT_POST, 'state');
	$zip = filter_input(INPUT_POST, 'zip');
	
	if ($first_name == null 			||
		$last_name == null  			||
		$customer_password == null 		||
		$phone_number == null 			||
		$email == null					||
		$city == null					||
		$street == null					||
		$state == null					||
		$zip == null){
		header('Location:register.php');
	} else {
	
			require_once('sign_in_database.php');
		
			$query_user_id = 'SELECT COUNT(cust_id) FROM Customer
					 WHERE cust_email = :email';
					 
			$statement3 = $db->prepare($query_user_id);
			$statement3->bindValue(':email', $email);
			$statement3->execute();
			$cust_id_count= $statement3->fetch();
			$statement3->closeCursor();
			
			if($cust_id_count[0] == 1){
				
				session_start();
				$_SESSION['error'] = 1;
				header('Location:register2.php');
			}else{
				
				$query = 'INSERT INTO Customer
					 (cust_last_name, cust_first_name, cust_phone, cust_email, cust_street, cust_city, cust_state, cust_zip, cust_password)
				  VALUES
					 (:last_name, :first_name, :phone_number, :email, :street, :city, :state, :zip, :customer_password)';
					 
				$statement = $db->prepare($query);
				$statement->bindValue(':last_name', $last_name);
				$statement->bindValue(':first_name', $first_name);
				$statement->bindValue(':phone_number', $phone_number);
				$statement->bindValue(':email', $email);
				$statement->bindValue(':street', $street);
				$statement->bindValue(':city', $city);
				$statement->bindValue(':state', $state);
				$statement->bindValue(':zip', $zip);
				$statement->bindValue(':customer_password', $customer_password);
				$statement->execute();
				$statement->closeCursor();
				
		
			
				header('Location:sign_up_conformation.php');
			}
		}
	
?>