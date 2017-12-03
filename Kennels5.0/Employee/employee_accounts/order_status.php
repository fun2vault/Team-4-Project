<?php include('../view/header.php'); ?>

        <h2>Order Status</h2>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="process_orders">
			<label>Order ID:</label>
			<input name="order_id" type="text"><br>
			<label>Order Status:</label>
			<select name="order_status_id">
				<?php foreach($status_id as $status): ?>
				<option value="<?php echo $status['status_id'];?>"><?php echo $status['status_name']; ?></option>
				<?php endforeach; ?>
			</select><br>
			<input type="submit" value="Update Order Status"><br><br>
		</form>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="logout">
			<input type="submit" value="Log Out"><br>
		</form>
 
<?php include('../view/footer.php'); ?>