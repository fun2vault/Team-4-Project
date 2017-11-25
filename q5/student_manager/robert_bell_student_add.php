<?php include('../view/robert_bell_header.php'); ?>
<!-- Robert Bell, CSCI 4000, 30JUN17 -->

		<main>
			<h1>Add Student</h1>
			<form method="post" action="index.php" id="add_student_form">
				<input type="hidden" name="action" value="add_student">
				<label>Major:</label>
				<select name="major_id">
					<?php foreach($majors as $major): ?>
					<option value="<?php echo $major['majorID'];?>"><?php echo $major['majorName']; ?></option>
					<?php endforeach; ?>
				</select><br>
				<label>First Name:</label>
				<input name="firstName" type="text"><br>
				<label>Last Name:</label>
				<input name="lastName" type="text"><br>
				<label>Gender:</label>
				<select name="gender">
					<option value="M">Male</option>
					<option value="F">Female</option>
				</select><br>
				<label>&nbsp;</label>
				<input type="submit" value="Add Student">
			</form>
			
			<p>
				<br><a href="index.php?action=list_students">View All Students</a><br><br><br>
			</p>
		</main>	

<?php include('../view/robert_bell_footer.php'); ?>