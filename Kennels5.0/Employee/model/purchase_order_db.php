<?php

	function get_part_id(){
		global $db;
		//get all part id
		$query = 'SELECT * FROM inventory ORDER BY part_id';
		$statement = $db->prepare($query);
		$statement->execute();
		$part_ids = $statement->fetchAll();
		$statement->closeCursor();
		return $part_ids;
	}
	
	function define_purchase_order($part_id, $m_a_units, $num_parts){
		global $db;
		$query = 'DROP TRIGGER IF EXISTS kennel.insert_trigger:part_id;
				  DELIMITER //
				  CREATE TRIGGER insert_trigger:part_id
				  AFTER INSERT ON inventory
				  FOR EACH ROW
				  BEGIN
					IF(:m_a_units > (SELECT units FROM inventory WHERE part_id = :part_id;)) THEN
						CALL create_part_order(:part_id, :num_parts);
					END IF; 
				  END;//
				  DELIMITER ;
			  
				  DROP TRIGGER IF EXISTS kennel.update_trigger:part_id;
				  DELIMITER //
				  CREATE TRIGGER update_trigger:part_id
				  AFTER UPDATE ON inventory
				  FOR EACH ROW
				  BEGIN
					IF(:m_a_units > (SELECT units FROM inventory WHERE part_id = :part_id;)) THEN
						CALL create_part_order(:part_id, :num_parts);
					END IF; 
				  END;//
				  DELIMITER ;';


		$statement = $db->prepare($query);
		$statement->bindValue(':part_id',$part_id);
		$statement->bindValue(':m_a_units',$m_a_units);
		$statement->bindValue(':num_parts',$num_parts);
		$statement->execute();
		$statement->closeCursor();
	}
	
	function create_purchase_order($part_id, $num_parts){
		global $db;
		$query = 'INSERT INTO part_orders (placed_date, part_id, units_received, received_date, supplier_id)
					SELECT 
					SYSDATE() AS placed_date,
					:part_id AS part_id,
					:num_parts AS units_received,
					NULL AS received_date,
					supplier_id FROM inventory WHERE part_id = :part_id;';


		$statement = $db->prepare($query);
		$statement->bindValue(':part_id',$part_id);
		$statement->bindValue(':num_parts',$num_parts);
		$statement->execute();
		$statement->closeCursor();
	}
	
	function view_purchase_orders($start_date, $end_date){		
		global $db;
		
		$query = "SELECT * 
					FROM part_orders
					WHERE placed_date BETWEEN :start_date AND :end_date
					ORDER BY part_id";
		$statement = $db->prepare($query);
		$statement->bindValue(':end_date',$end_date);
		$statement->bindValue(':start_date',$start_date);
		$statement->execute();
		$purchase_orders_view = $statement->fetchAll();
		
		return $purchase_orders_view;
	}
	
?>