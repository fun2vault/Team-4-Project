<?php include('./view/header.php'); ?>				

		<h2>Shipping Label</h2><br>
		<table class="borderedd">
			<?php
			foreach($order_address as $oa)
			{
			?>
			<tr>
				<td><?php echo $oa['ship_name']; ?></td>		 
			</tr>
			<tr>
				<td><?php echo $oa['ship_street']; ?></td>
			</tr>
			<tr>
				<td><?php echo $oa['ship_city']; ?></td>
				<td><?php echo $oa['ship_state']; ?></td>
				<td><?php echo $oa['ship_zip']; ?></td>
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