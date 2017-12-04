/* Monthly Inventory Report */

SELECT I.part_id AS 'Part ID'
		,I.part_name AS 'Part Name'
		,SUM(I.units) AS 'Units on Hand'
        ,SUM(PO.units_received) AS 'Units received'
FROM Part_Orders AS PO
RIGHT JOIN Inventory AS I
ON PO.part_id = I.part_id
WHERE MONTH(PO.received_date) = :month AND YEAR(PO.received_date) = :year
GROUP BY PO.part_id
	,I.part_name
ORDER BY I.part_id
; 


