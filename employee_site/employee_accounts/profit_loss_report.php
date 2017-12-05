<?php include('./view/header.php'); ?>				

		<h2>Profit/Loss Report</h2>
		<table class="borderedd">
			<tr id="column">
				<td class="bordered">Model ID</td>
				<td class="bordered">Customization ID</td>
				<td class="bordered">Number Ordered</td>
				<td class="bordered">Total Sales</td>
				<td class="bordered">Discount Percent</td>
				<td class="bordered">Total Cost</td>
				<td class="bordered">Profit</td>
			</tr>
			<?php
			foreach($profit_loss_report as $pl)
			{
			?>
			<tr>
			  <td class="bordered"><?php echo $pl['Model ID']; ?></td>
			  <td class="borderedalign"><?php echo $pl['Customization ID']; ?></td>
			  <td class="borderedalign"><?php echo $pl['Total Amount Ordered']; ?></td>
			  <td class="bordered"><?php echo $pl['Total Sales']; ?></td>
			  <td class="bordered"><?php echo $pl['Discount (% of Total Sales)']; ?></td>
			  <td class="bordered"><?php echo $pl['Total Cost']; ?></td>
			  <td class="bordered"><?php echo $pl['Profit']; ?></td>
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