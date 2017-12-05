<?php include('./view/header.php'); ?>

        <h2>Purchase Orders</h2>
		<form method="post" action="index.php" id="define_purchase_order">
			<input type="hidden" name="action" value="define_purchase_order">
			<input type="hidden" name="emp_dep" value="<?php echo $emp_dep; ?>">
			<select class="production_submit" name="part_id_define">
				<?php foreach($part_id as $part): ?>
				<option value="<?php echo $part['part_id'];?>"><?php echo $part['part_id']; ?></option>
				<?php endforeach; ?>
			</select>
			<label>: Part ID</label><br>
			<input class="production_submit" name="m_a_units" type="text">
			<label>: Minimum Allowed Units</label><br>
			<input class="production_submit" name="num_parts" type="text">
			<label>: Units to Reorder</label><br>
			<input class="production_submit" type="submit" value="Define Purchase Orders"><br><br>
		</form>
		<form method="post" action="index.php" id="create_purchase_order">
			<input type="hidden" name="action" value="create_purchase_order">
			<input type="hidden" name="emp_dep" value="<?php echo $emp_dep; ?>">
			<select class="production_submit" name="part_id_define">
				<?php foreach($part_id as $part): ?>
				<option value="<?php echo $part['part_id'];?>"><?php echo $part['part_id']; ?></option>
				<?php endforeach; ?>
			</select>
			<label>: Part ID</label><br>
			<input class="production_submit" name="num_parts" type="text">
			<label>: Units to Reorder</label><br>
			<input class="production_submit" type="submit" value="Create Purchase Order"><br><br>
		</form>
		<form method="post" action="index.php" id="check_purchase_order">
			<input type="hidden" name="action" value="check_purchase_order">
			<input type="hidden" name="emp_dep" value="<?php echo $emp_dep; ?>">
			<input class="production_submit" name="start_date" type="text" placeholder="YYYY-MM-DD">
			<label>: Start Date</label><br>
			<input class="production_submit" name="end_date" type="text" placeholder="YYYY-MM-DD">
			<label>: End Date</label><br>
			<input class="production_submit" type="submit" value="Check Purchase Orders"><br><br>
		</form>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="<?php echo $emp_dep; ?>">
			<input class="production_submit" type="submit" value="Return to Department"><br>
		</form>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="logout">
			<input type="submit" value="Log Out"><br>
		</form>
		
<?php include('./view/footer.php'); ?>	

	

			