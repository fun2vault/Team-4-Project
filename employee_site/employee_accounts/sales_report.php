<?php include('./view/header.php'); ?>				

		<h2>Sales Report</h2>
		<table class="borderedd">
			<tr id="column">
				<td class="bordered">Date Ordered</td>
				<td class="bordered">Model ID</td>
				<td class="bordered">Custom ID</td>
				<td class="bordered">Quantity Ordered</td>
			</tr>
			<?php
			foreach($sales_report as $sr)
			{
			?>
			<tr>
			  <td class="bordered"><?php echo $sr['Date Ordered']; ?></td>
			  <td class="borderedalign"><?php echo $sr['Model ID']; ?></td>
			  <td class="borderedalign"><?php echo $sr['Custom ID']; ?></td>
			  <td class="bordered"><?php echo $sr['Quantity Ordered']; ?></td>
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