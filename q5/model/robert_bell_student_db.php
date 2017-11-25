<?php
// Robert Bell, CSCI 4000, 30JUN17

	function get_students_by_major($major_id)	{		
		global $db;
		
		//get students
		$query = "SELECT * 
					FROM student
					WHERE majorID = :major_id
					ORDER BY studentID;";
		$statement = $db->prepare($query);
		$statement->bindValue(':major_id', $major_id);
		$statement->execute();
		$students = $statement->fetchAll();
		
		return $students;
	}
	
	function delete_student($student_id){
		global $db;
		$query = 'DELETE FROM student WHERE studentID = :student_id';
		$statement = $db->prepare($query);
		$statement->bindValue(':student_id', $student_id);
		$success = $statement->execute();
		$statement->closeCursor();
	}
	
	function add_student($major_id,$firstName, $lastName, $gender){
		global $db;
		$query = 'INSERT INTO student (majorID, firstName, lastName, gender) 
				VALUES (:major_id, :firstName, :lastName, :gender)';

		$statement = $db->prepare($query);
		$statement->bindValue(':major_id',$major_id);
		$statement->bindValue(':firstName',$firstName);
		$statement->bindValue(':lastName',$lastName);
		$statement->bindValue(':gender',$gender);
		$statement->execute();
		$statement->closeCursor();
	}
	
?>