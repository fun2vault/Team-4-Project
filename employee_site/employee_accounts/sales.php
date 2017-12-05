<?php include('./view/header.php'); ?>

        <h2>Sales</h2>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="sales_report">
			<input type="hidden" name="emp_dep" value="sales">
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
			<input class="production_submit" type="submit" value="Sales Report"><br><br>
		</form>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="logout">
			<input type="submit" value="Log Out"><br>
		</form>

<?php include('./view/footer.php'); ?>		