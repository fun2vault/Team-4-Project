<?php
	
	session_start();
			
	$_SESSION['cust_id'];
	$_SESSION['cust_first_name'];
	
	session_unset(); 
	session_destroy();
	header('Location:index.html');

?>