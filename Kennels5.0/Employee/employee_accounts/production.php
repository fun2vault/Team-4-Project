<?php include('../view/header.php'); ?>

        <h2>Production Supervisor</h2>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="update_orders">
			<input type="submit" value="Update Order Status"><br>
		</form>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="shipping_label">
			<input type="submit" value="Print Shipping Label"><br><br>
		</form>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="logout">
			<input type="submit" value="Log Out"><br>
		</form>

<?php include('../view/footer.php'); ?>		