<?php
	$dsn = 'mysql:host=localhost;dbname=nazi_dimitrei_final_db';
	$username = 'naziexam';
	$password = 'nazidonut';
	//Tying to connect to database
	try {
		$db = new PDO($dsn, $username, $password);
		//echo "Successful in connecting to database<br>\n";
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo $error_message;
	//	include('nazi_dimitrei_database_error.php');
		exit();
	}
?>