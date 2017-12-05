<?php
	
	function inventory_report($month, $year){		
		global $db;
		
		$query = "SELECT I.part_id AS 'Part ID'
					,I.part_name AS 'Part Name'
					,SUM(I.units) AS 'Units on Hand'
					,SUM(PO.units_received) AS 'Units received'
					FROM Part_Orders AS PO
					RIGHT JOIN Inventory AS I
					ON PO.part_id = I.part_id
					WHERE MONTH(PO.received_date) = :month AND YEAR(PO.received_date) = :year
					GROUP BY PO.part_id
						,I.part_name
					ORDER BY I.part_id; ";
		$statement = $db->prepare($query);
		$statement->bindValue(':month',$month);
		$statement->bindValue(':year',$year);
		$statement->execute();
		$inventory_report = $statement->fetchAll();
		
		return $inventory_report;
	}

	function profit_loss_report($month, $year){		
		global $db;
		
		$query = "SELECT 
					 OD.model_id AS 'Model ID'
					,COALESCE(OD.custom_id,'-') AS 'Customization ID'
					,SUM(OD.order_quantity) AS 'Total Amount Ordered'
					,COALESCE(
							SUM(	IF(
										O.status_id = 4, /* check value for return open*/
										0, /* if true */
										IF(
											O.status_id = 5, /* check value for return closed */
											0, /* if true */
											((M.model_price + COALESCE(C.custom_price,0)) * OD.order_quantity) /*actually do the math */
										)
									)
								),0)  AS 'Total Sales'
					,COALESCE(
						
							SUM(COALESCE(OD.discount,0) / 100)
							*
							SUM(((M.model_price + COALESCE(C.custom_price,0)) * OD.order_quantity))
						
					,0) AS 'Discount (% of Total Sales) '
					,SUM((M.model_cost + COALESCE(C.custom_cost, 0))*OD.order_quantity) AS 'Total Cost'
					
					
					
					
					,COALESCE(
							SUM(	IF(
										O.status_id = 4, /* check value for return open*/
										0, /* if true */
										IF(
											O.status_id = 5, /* check value for return closed */
											0, /* if true */
											((M.model_price + COALESCE(C.custom_price,0)) * OD.order_quantity) /*actually do the math */
										)
									)
								),0) 
					- /* subtract discount*/
					COALESCE(
						
							SUM(COALESCE(OD.discount,0) / 100)
							*
							SUM(((M.model_price + COALESCE(C.custom_price,0)) * OD.order_quantity))
						
					,0)
					- /* subtract cost */
					SUM((M.model_cost + COALESCE(C.custom_cost, 0))*OD.order_quantity) AS Profit
					
				FROM Order_Details AS OD
				LEFT JOIN Model AS M
				ON OD.model_id = M.model_id
				left JOIN Customization AS C 
				ON OD.custom_id = C.custom_id

				JOIN Orders AS O
				ON OD.order_id = O.order_id

				WHERE MONTH(O.order_date) = :month AND YEAR(O.order_date) = :year 

				GROUP BY OD.model_id
					,OD.custom_id
				ORDER BY Profit DESC; ";
		$statement = $db->prepare($query);
		$statement->bindValue(':month',$month);
		$statement->bindValue(':year',$year);
		$statement->execute();
		$profit_loss_report = $statement->fetchAll();
		
		return $profit_loss_report;
	}
	
	function sales_report($month, $year){		
		global $db;
		
		$query = "SELECT O.order_date AS 'Date Ordered'
					,OD.model_id AS 'Model ID'
					,OD.custom_id AS 'Custom ID'
					,OD.order_quantity AS 'Quantity Ordered'
				FROM Orders AS O
				JOIN Order_Details AS OD
				ON O.order_id = OD.order_id
				WHERE MONTH(O.order_date) = :month AND YEAR(O.order_date) = :year
				ORDER BY OD.model_id; ";
		$statement = $db->prepare($query);
		$statement->bindValue(':month',$month);
		$statement->bindValue(':year',$year);
		$statement->execute();
		$sales_report = $statement->fetchAll();
		
		return $sales_report;
	}
	
?>