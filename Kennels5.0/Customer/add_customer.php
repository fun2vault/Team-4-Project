<?php
	$first_name = filter_input(INPUT_POST, 'first_name');
    $last_name = filter_input(INPUT_POST, 'last_name');
	$password = filter_input(INPUT_POST, 'password');
	$phone_number = filter_input(INPUT_POST, 'phone_number');
	$email = filter_input(INPUT_POST, 'email');
	$street = filter_input(INPUT_POST, 'street');
	$city = filter_input(INPUT_POST, 'city');
	$state = filter_input(INPUT_POST, 'state');
	$zip = filter_input(INPUT_POST, 'zip');
	
	if ($first_name == null 	||
		$last_name == null  	||
		$password == null 		||
		$phone_number == null 	||
		$email == null			||
		$city == null			||
		$state == null			||
		$zip == null){
			echo "Missed Up";
	} else {
		require_once('sign_in_database.php');
		$query = 'INSERT INTO customer
					 (cust_last_name, cust_first_name, cust_phone, cust_email, cust_street, cust_city, cust_state, cust_zip, cust_passsword)
				  VALUES
					 (:last_name, :first_name, :phone_number, :email, :street, :city, :state, :zip, :password)';
		$statement = $db->prepare($query);
		$statement->bindValue(':last_name', $last_name);
		$statement->bindValue(':first_name', $first_name);
		$statement->bindValue(':phone_number', $phone_number);
		$statement->bindValue(':email', $email);
		$statement->bindValue(':street', $street);
		$statement->bindValue(':city', $city);
		$statement->bindValue(':state', $state);
		$statement->bindValue(':zip', $zip);
		$statement->bindValue(':password', $password);
		$statement->execute();
		$statement->closeCursor();
		echo "Working";
	
	/*	header('Location:index.php');
	echo $first_name;
	echo $last_name ;
	echo $password ;
    echo $phone_number; 
    echo $email;
    echo $street;
    echo $city;
    echo $state;
    echo $zip;*/
	}
	?>