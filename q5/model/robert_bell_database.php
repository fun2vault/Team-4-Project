<?php
/* Robert Bell, CSCI 4000, 30JUN17 */
	
	$dsn = 'mysql:host=localhost;dbname=robert_bell_student_db';
	$username = 'robertbell1';
	$password = 'robertisgreat';

	try{
		$db = new PDO($dsn, $username, $password);
	}catch(PDOException $e){
		$error_message = $e->getMessage();
		include('../errors/robert_bell_database_error.php');
		exit();
	}
?>