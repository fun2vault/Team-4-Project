<?php include('../view/header.php'); ?>


          <h2>Employee Login</h2>
		  	<form method="post" action="index.php" id="emp_login_form">
				<input type="hidden" name="action" value="emp_login">
				<label>Username:</label>
				<input name="username" type="text"><br>
				<label>Password:</label>
				<input name="password" type="text"><br>
				<label>&nbsp;</label>
				<input type="submit" value="Login">
			</form>
  
 <?php include('../view/footer.php'); ?>