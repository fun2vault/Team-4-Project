<?php include('./view/header.php'); ?>				

		<h2>Inventory Report</h2>
		<table class="borderedd">
			<tr id="column">
				<td class="bordered">Part ID</td>
				<td class="bordered">Part Name</td>
				<td class="bordered">Units Received</td>
				<td class="bordered">Units on Hand</td>
			</tr>
			<?php
			foreach($inventory_report as $ir)
			{
			?>
			<tr>
			  <td class="bordered"><?php echo $ir['Part ID']; ?></td>
			  <td class="borderedalign"><?php echo $ir['Part Name']; ?></td>
			  <td class="borderedalign"><?php echo $ir['Units received']; ?></td>
			  <td class="bordered"><?php echo $ir['Units on Hand']; ?></td>
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