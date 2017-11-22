<?php
	$dsn = 'mysql:host=localhost;dbname=b7_20951820_kennelsRus';
	$username = 'b7_20951820';
	$password = 'Group4project';
	
	try {
		$db = new PDO($dsn, $username, $password);
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo $error_message;
		exit();
	}
?>