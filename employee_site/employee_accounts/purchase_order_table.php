<?php include('./view/header.php'); ?>				

		<h2>Purchase Orders</h2>
		<table class="borderedd">
			<tr id="column">
				<td class="bordered">Date Placed</td>
				<td class="bordered">Part ID</td>
				<td class="bordered">Units Ordered</td>
				<td class="bordered">Date Received</td>
				<td class="bordered">Supplier ID</td>
			</tr>
			<?php
			foreach($purchase_orders_view as $po)
			{
			?>
			<tr>
			  <td class="bordered"><?php echo $po['placed_date']; ?></td>
			  <td class="borderedalign"><?php echo $po['part_id']; ?></td>
			  <td class="borderedalign"><?php echo $po['units_received']; ?></td>
			  <td class="bordered"><?php echo $po['received_date']; ?></td>
			  <td class="bordered"><?php echo $po['supplier_id']; ?></td>
			</tr>
			<?php
			}
			?>
		</table><br>
		
		<form method="post" action="index.php" >
			<input type="hidden" name="action" value="<?php echo $emp_dep; ?>">
			<input type="submit" value="Return to Department"><br>
		</form>
				<form method="post" action="index.php" >
			<input type="hidden" name="action" value="logout">
			<input type="submit" value="Log Out"><br>
		</form>
		
<?php include('./view/footer.php'); ?>	