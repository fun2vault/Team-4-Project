<?php
	$cust_password = filter_input(INPUT_POST, 'login_password');
	$email = filter_input(INPUT_POST, 'email');
	
	if ($cust_password == null || $email == null){
		header('Location:login.php');
	} else {
	
		require_once('sign_in_database.php');
		
		$query_user_id = 'SELECT cust_id FROM Customer
					 WHERE cust_email = :email
					 AND cust_password = :cust_password';
					 
		if (!$query_user_id) {
			header('Location:login.php');
		}else{
			$query_name = 'SELECT cust_first_name FROM Customer
					 WHERE cust_email = :email
					 AND cust_password = :cust_password';
					 
			$statement = $db->prepare($query_user_id);
			$statement2 = $db->prepare($query_name);
			
			$statement->bindValue(':cust_password', $cust_password);
			$statement->bindValue(':email', $email);
			$statement2->bindValue(':cust_password', $cust_password);
			$statement2->bindValue(':email', $email);
			
			$statement->execute();
			$statement2->execute();
			
			$customer_id= $statement->fetch();
			$customer_name = $statement2->fetch();
			
			
			session_start();
			
			$_SESSION['cust_id'] = $customer_id['cust_id'];
			$_SESSION['cust_first_name'] = $customer_name['cust_first_name'];
			
			$statement->closeCursor();
			$statement2->closeCursor();
			
			header('Location:index_user.php');
		}
	}
?>