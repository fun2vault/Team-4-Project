<?php include('../view/header.php'); ?>

        <h2>Sales</h2>
		<form>
			<input type="submit" value="Sales Report"><br>
			<input type="submit" value="Customer Report"><br><br>
		</form>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="logout">
			<input type="submit" value="Log Out"><br>
		</form>

<?php include('../view/footer.php'); ?>		