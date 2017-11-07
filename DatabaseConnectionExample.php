<?php
$dsn = "sql213.byethost7.com";
$username = "b7_20951820";
$password = "Group4project";

try{
	$db = new PDO("mysql:host=$dsn;dbname=b7_20951820_kennelsRus", $username, $password);
	
} catch (PDOException $e){
	$error_message = $e->getMessage();
	include('database_error.php');
	exit();
}

$query = "SELECT * FROM Customer
			";
$statement = $db->prepare($query);
$statement->execute();
$customers = $statement->fetchAll();
?>
<h3>Customer ID:</h3>
<table>
   <tr>
	  <th>Customer ID</th>
	  <th>Name</th>
	  <th>Price</th>
	   <th>GPA</th>
   </tr>
   <?php
   foreach ($customers as $c)
	{
   ?>
   <tr>
	   
	  <td><?php echo $c['cust_id']; ?></td>
	  <td><?php echo $c['cust_last_name']; ?></td>
	  <td><?php echo $c['cust_first_name']; ?></td> 
	  <td><?php echo $c['cust_phone']; ?></td>
   </tr>
   <?php
   }
   ?>
</table>