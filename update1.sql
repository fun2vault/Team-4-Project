DELIMITER $$
CREATE TRIGGER order_stock_deduction
AFTER INSERT ON Order_Details
	FOR EACH ROW
	BEGIN
/* CLEAN UP */
DROP TEMPORARY TABLE IF EXISTS BOM;
DROP temporary TABLE IF EXISTS CBOM;
/* create temp table to hold the BoM */
		CREATE TEMPORARY TABLE BOM (
		model_id int(11)
        ,part_id int(11)
        ,model_quantity decimal(5,2)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/* populate with Model_Details */
    INSERT INTO BOM (model_id, part_id, model_quantity)
		SELECT * FROM `Model_Details` WHERE model_id = new.model_id;
        
/* account for order quantity */
	UPDATE BOM 
SET 
    BOM.model_quantity = BOM.model_quantity * new.order_quantity;
/* take model from inventory */
	UPDATE Inventory AS A
        RIGHT JOIN
    BOM AS BOM ON A.part_id = BOM.part_id 
SET 
    A.units = A.units - BOM.model_quantity;
    
IF NEW.custom_id IS NOT NULL THEN 
/* create temp table to hold the CBoM */
			CREATE TEMPORARY TABLE CBOM (
				custom_id int(11)
                ,part_id int(11)
                ,custom_quantity decimal(5,2)
                )ENGINE=MyISAM DEFAULT CHARSET=latin1;
/* fill CBOM */
			INSERT INTO CBOM (custom_id,part_id,custom_quantity)
				SELECT * FROM `Customization_Details` WHERE custom_id = new.custom_id;



    /*account for order quantity */
	UPDATE CBOM 
SET 
    CBOM.custom_quantity = CBOM.custom_quantity * new.order_quantity;
	/* Subtract Custom from inventory*/
	UPDATE Inventory AS A
        RIGHT JOIN
    CBOM AS CBOM ON A.part_id = CBOM.part_id 
SET 
    A.units = A.units - CBOM.custom_quantity;
		END IF;
        
		
	
END$$

DELIMITER ;
