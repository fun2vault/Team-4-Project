/* Monthly Sales Reports */
SELECT O.order_date AS 'Date Ordered'
	,OD.model_id AS 'Model ID'
    ,OD.custom_id AS 'Custom ID'
    ,OD.order_quantity AS 'Quantity Ordered'
FROM Orders AS O
JOIN Order_Details AS OD
ON O.order_id = OD.order_id
WHERE MONTH(O.order_date) = :month AND YEAR(O.order_date) = :year
ORDER BY OD.model_id 
;