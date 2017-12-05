<?php include('./view/header.php'); ?>

        <h2>Production Supervisor</h2>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="update_orders">
			<input class="production_submit" type="submit" value="Update Order Status"><br><br>
		</form>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="shipping_label">
			<input type="hidden" name="emp_dep" value="production">
			
			<input class="production_submit" name="order_number" type="text">
			<label>: Enter Order Number</label><br>
			<input class="production_submit" type="submit" value="Print Shipping Label"><br><br>
		
		</form>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="inventory_report">
			<input type="hidden" name="emp_dep" value="production">
			<select class="production_submit" name="month">
				<?php for($i = 1; $i <= 12; $i++){ ?>
				<option value="<?php echo $i; ?>"><?php $monthName = date('F', mktime(0, 0, 0, $i, 10)); echo $monthName ?></option>
				<?php } ?>
			</select>
			<label>: Month</label><br>
			<select class="production_submit" name="year">
				<?php for($i = 2000; $i <= 2100; $i++){ ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>
			</select>
			<label>: Year</label><br>
			<input class="production_submit" type="submit" value="Inventory Report"><br><br>
		</form>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="logout">
			<input type="submit" value="Log Out"><br>
		</form>

<?php include('./view/footer.php'); ?>		