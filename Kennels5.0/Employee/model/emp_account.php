<?php

	function emp_login($emp_id, $emp_password)	{		
		global $db;
		
		$query = "SELECT dept_id 
					FROM employee
					WHERE emp_id = :emp_id
						AND emp_password = :emp_password;";
		$statement = $db->prepare($query);
		$statement->bindValue(':emp_id', $emp_id);
		$statement->bindValue(':emp_password', $emp_password);
		$statement->execute();
		$dept = $statement->fetch();
		$dept_id = $dept['dept_id'];
		$statement->closeCursor();
		
		$query = "SELECT dept_name
				  FROM department
				  WHERE dept_id = :dept_id;";
		$statement = $db->prepare($query);
		$statement->bindValue(':dept_id', $dept_id);
		$statement->execute();
		$department = $statement->fetch();
		$dept_name = $department['dept_name'];
		$statement->closeCursor();
		
		return $dept_name;
		
	}
	
?>