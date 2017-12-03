<?php include('../view/header.php'); ?>

        <h2>Purchase Orders</h2>
		<form method="post" action="index.php" id="define_purchase_order">
			<input type="hidden" name="action" value="define_purchase_order">
			&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<label>Part ID:</label>
			<select name="part_id_define">
				<?php foreach($part_id as $part): ?>
				<option value="<?php echo $part['part_id'];?>"><?php echo $part['part_id']; ?></option>
				<?php endforeach; ?>
			</select><br>
			<label>Minimum Allowed Units:</label>
			<input name="m_a_units" type="text"><br>
			<label>Units to Reorder:</label>
			<input name="num_parts" type="text"><br>
			<input type="submit" value="Define Purchase Orders"><br><br>
		</form>
		<form method="post" action="index.php" id="create_purchase_order">
			<input type="hidden" name="action" value="create_purchase_order">
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<label>Part ID:</label>
			<select name="part_id_define">
				<?php foreach($part_id as $part): ?>
				<option value="<?php echo $part['part_id'];?>"><?php echo $part['part_id']; ?></option>
				<?php endforeach; ?>
			</select><br>
			<label>Units to Reorder:</label>
			<input name="num_parts" type="text"><br>
			<input type="submit" value="Create Purchase Order"><br><br>
		</form>
		<form method="post" action="index.php" id="check_purchase_order">
			<input type="hidden" name="action" value="check_purchase_order">
			<label>Start Date:</label>
			<input name="start_date" type="text" placeholder="YYYY-MM-DD"><br>
			<label>End Date:</label>
			<input name="end_date" type="text" placeholder="YYYY-MM-DD"><br>
			<input type="submit" value="Check Purchase Orders"><br><br>
		</form>
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="logout">
			<input type="submit" value="Log Out"><br>
		</form>
		
<?php include('../view/footer.php'); ?>	

	

			