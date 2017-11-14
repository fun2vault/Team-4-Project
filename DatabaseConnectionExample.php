<?php
$servername = "sv77.ifastnet.com";
$username = "kennelsr_Manager";
$password = "Group4project";
$dbname = "kennelsr_kennels";

try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
} catch (PDOException $e){
	$error_message = $e->getMessage();
	include('database_error.php');
	exit();
}


$query = "SELECT * FROM Customer
			";
$statement = $conn->prepare($query);
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
