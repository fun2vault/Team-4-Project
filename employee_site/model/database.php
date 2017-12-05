<?php
	
	$dsn = 'mysql:host=sv77.ifastnet.com;dbname=kennelsr_kennels';
	$username = 'kennelsr_Manager';
	$password = 'Group4project';

	try{
		$db = new PDO($dsn, $username, $password);
	}catch(PDOException $e){
		$error_message = $e->getMessage();
		include('../error/database_error.php');
		exit();
	}
?>