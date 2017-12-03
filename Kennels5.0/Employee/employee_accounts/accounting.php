<?php include('../view/header.php'); ?>

        <h2>Accounting</h2>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="purchase_orders">
			<input type="submit" value="Purchase Orders"><br>
		</form>
		<form>
			<input type="submit" value="Pay Vendors"><br>
		</form>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="order_status">
			<input type="submit" value="Process Orders"><br><br>
		</form>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="logout">
			<input type="submit" value="Log Out"><br>
		</form>
 
<?php include('../view/footer.php'); ?>