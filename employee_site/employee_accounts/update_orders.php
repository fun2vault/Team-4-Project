<?php include('./view/header.php'); ?>

        <h2>Order Status</h2>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="close_orders">
			<input type="hidden" name="emp_dep" value="<?php echo $emp_dep; ?>">
			<input class="production_submit" name="order_id" type="text">
			<label>: Order ID</label><br>
			<select class="production_submit" name="order_status_id">
				<?php foreach($status_id as $status): ?>
				<option value="<?php echo $status['status_id'];?>"><?php echo $status['status_name']; ?></option>
				<?php endforeach; ?>
			</select>
			<label>: Order Status</label><br>
			<input class="production_submit" type="submit" value="Update Order Status"><br><br>
		</form>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="logout">
			<input type="submit" value="Log Out"><br>
		</form>
 
<?php include('./view/footer.php'); ?>