SELECT 
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
ORDER BY Profit DESC
;

