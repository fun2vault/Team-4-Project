<?php
/* Robert Bell, CSCI 4000, 30JUN17 */

	function get_major_name($major_id){
		global $db;
		//get name for selected major
		$query = 'SELECT * FROM major WHERE majorID = :major_id;';
		$statement = $db->prepare($query);
		$statement->bindValue(':major_id', $major_id);
		$statement->execute();
		$major = $statement->fetch();
		$major_name = $major['majorName'];
		$statement->closeCursor();
		return $major_name;
		
	}
	
	function get_majors(){
		global $db;
		//get all majors
		$query = 'SELECT * FROM major ORDER BY majorID';
		$statement = $db->prepare($query);
		$statement->execute();
		$majors = $statement->fetchAll();
		$statement->closeCursor();
		return $majors;
	}
?>