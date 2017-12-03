DELIMITER $$
CREATE TRIGGER order_stock_update
AFTER INSERT ON Order_Details
	FOR EACH ROW
	BEGIN
/* CLEAN UP */
DROP TEMPORARY TABLE IF EXISTS BOM;
DROP temporary TABLE IF EXISTS CBOM;
/* create temp table to hold the BoM */
	CREATE TEMPORARY TABLE BOM (
		part_id int(11)
        ,model_quantity decimal(5,2)
        ,model_id int(11)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/* populate with Model_Details */
    INSERT INTO BOM (part_id, model_quantity, model_id)
		SELECT 'part_id'
		,'model_quantity'
        ,'model_id'
        FROM Model_Details
        WHERE 'model_id' = NEW.model_id;
        
/* account for order quantity */
	UPDATE BOM 
SET 
    model_quantity = 'model_quantity' * new.order_quantity
WHERE
    model_id = new.model_id;
    
    
    
IF NEW.custom_id IS NOT NULL THEN 
/* create temp table to hold the CBoM */
			CREATE TEMPORARY TABLE CBOM (
				part_id int(11)
                ,custom_quantity decimal(5,2)
                ,custom_id int(11)
                )ENGINE=MyISAM DEFAULT CHARSET=latin1;
/* fill CBOM */
			INSERT INTO CBOM (part_id, model_quantity, custom_id)
				SELECT 'part_id'
                ,'custom_quantity'
                ,'custom_id'
                FROM Customization_Details
                WHERE 'custom_id' = NEW.custom_id;
/*account for order quantity */
	UPDATE CBOM 
SET 
    custom_quantity = custom_quantity * new.order_quantity
WHERE
    custom_id = new.custom_id;
    
	/* Add the two tables */
			
	UPDATE BOM B
        INNER JOIN
    CBOM C ON B.part_id = C.part_id 
SET 
    B.model_quantity = B.model_quantity + C.custom_quantity
WHERE
    B.part_id = C.part_id;
			
		END IF;
        
		
/*Take temp table from the inventory */
	UPDATE Inventory I
        INNER JOIN
    BOM B ON I.part_id = B.part_id 
SET 
    I.units = I.units - B.model_quantity
WHERE
    i.part_id = B.part_id;
	
END$$

DELIMITER ;
