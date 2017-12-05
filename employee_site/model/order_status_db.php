<?php

	function get_status_name($status_id){
		global $db;
		//get name for selected status
		$query = 'SELECT * FROM Order_Status WHERE status_id = :status_id;';
		$statement = $db->prepare($query);
		$statement->bindValue(':status_id', $status_id);
		$statement->execute();
		$order_status = $statement->fetch();
		$status_name = $order_status['status_name'];
		$statement->closeCursor();
		return $status_name;
		
	}
	
	function get_order_status(){
		global $db;
		$query = 'SELECT * FROM Order_Status ORDER BY status_id';
		$statement = $db->prepare($query);
		$statement->execute();
		$order_status = $statement->fetchAll();
		$statement->closeCursor();
		return $order_status;
	}
	
	function update_order_status($order_id, $order_status){
		global $db;
		$query = 'UPDATE Orders
				  SET status_id = :order_status
				  WHERE order_id = :order_id;';

		$statement = $db->prepare($query);
		$statement->bindValue(':order_id',$order_id);
		$statement->bindValue(':order_status',$order_status);
		$statement->execute();
		$statement->closeCursor();
	}
	
	function order_address($order_id){		
		global $db;
		
		$query = "SELECT * 
					FROM Orders
					WHERE order_id = :order_id";
		$statement = $db->prepare($query);
		$statement->bindValue(':order_id',$order_id);
		$statement->execute();
		$order_address = $statement->fetchAll();
		
		return $order_address;
	}
?>