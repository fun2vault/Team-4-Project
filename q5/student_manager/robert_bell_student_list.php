<?php include('../view/robert_bell_header.php'); ?>
<!-- Robert Bell, CSCI 4000, 30JUN17 -->

<main>
			<h1>Student List</h1>
			<aside>
				<h2>Majors</h2>
				<nav>
					<ul>
						<?php foreach($majors as $major): ?>
						<li><a href="?major_id=<?php echo $major['majorID']; ?>"><?php echo $major['majorName']; ?></a></li>
						<?php endforeach; ?>
					</ul>
				</nav>
			</aside>
			<section>
				<h2><?php echo $major_name; ?></h2>
				<table class="borderedd">
					<tr id="column">
						<td class="bordered">Student <br> ID</td>
						<td class="bordered">First <br> Name</td>
						<td class="bordered">Last <br> Name</td>
						<td class="bordered">Gender</td>
						<td class="bordered"></td>
					</tr>
					<?php
					foreach($students as $s)
					{
					?>
					<tr>
					  <td class="bordered"><?php echo $s['studentID']; ?></td>
					  <td class="borderedalign"><?php echo $s['firstName']; ?></td>
					  <td class="borderedalign"><?php echo $s['lastName']; ?></td>
					  <td class="bordered"><?php echo $s['gender']."<br>\n"; ?></td>
					  <td class="bordered">
						<form action="."  method="post">
							<input type="hidden" name="action" value="delete_product">
							<input type="hidden" name="student_id" value="<?php echo $s['studentID']; ?>">
							<input type="hidden" name="major_id" value="<?php echo $s['majorID']; ?>">
							<input type="submit" value="Delete">
						</form>
					  </td>
					</tr>
					<?php
					}
					?>
				</table>
				
				<p>
					<br><br><a href="?action=show_add_form">Add Student</a>
				</p>
				
			</section>
		</main>
		
<?php include('../view/robert_bell_footer.php'); ?>