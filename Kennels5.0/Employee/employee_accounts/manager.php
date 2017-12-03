<?php include('../view/header.php'); ?>

        <h2>Manager</h2>
		<form>
			<input type="submit" value="Close Production Orders"><br>
			<input type="submit" value="Prints Shipping Labels"><br>
			<input type="submit" value="Purchase Orders"><br>
			<input type="submit" value="Pay Vendors"><br>
			<input type="submit" value="Process Returns"><br>
			<input type="submit" value="Sales Report"><br>
			<input type="submit" value="Customer Report"><br><br>
			<input type="submit" value="Log Out">
		</form>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="logout">
			<input type="submit" value="Log Out"><br>
		</form>
		
<?php include('../view/footer.php'); ?>
