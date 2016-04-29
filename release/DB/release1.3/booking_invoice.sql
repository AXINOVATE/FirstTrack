DROP PROCEDURE IF EXISTS `usp_insUpdBookings`;
DELIMITER $$
CREATE  PROCEDURE `usp_insUpdBookings`(IN VXML TEXT ,OUT vID VARCHAR(36),OUT vMessage VARCHAR(50),OUT vStatus BOOLEAN,OUT vRequestID varchar(20))
BEGIN
  
	DECLARE vBookingID,vUserID,productID,vActionType,variantID,colorID,dealerID,bookingStatus VARCHAR(36);
	DECLARE s_address1,s_address2,s_city,s_state,s_country,s_zip_code,d_address1,d_address2,d_city,d_state,d_country,d_zip_code,payment_method,shipping_choices,delivery_choices,transactionDetails VARCHAR(500);
    DECLARE qty,unitPrice,shippingCost,totalPrice DECIMAL(11,2);
	DECLARE iCounter INT;
	
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		SET vMessage = 'An error occured';
        SET vStatus = FALSE;
		ROLLBACK;
	END;
    
    SET iCounter = 1;

	SET vActionType = EXTRACTVALUE(VXML, '/ROOT/HEADER/ACTIONTYPE[$iCounter]');
	SET vUserID = EXTRACTVALUE(VXML, '/ROOT/HEADER/USERID[$iCounter]');
	SET productID = EXTRACTVALUE(VXML, '/ROOT/HEADER/PRODUCTID[$iCounter]');
	SET variantID = EXTRACTVALUE(VXML, '/ROOT/HEADER/VARIANTID[$iCounter]');
	SET colorID = EXTRACTVALUE(VXML, '/ROOT/HEADER/COLORID[$iCounter]');
	SET dealerID = EXTRACTVALUE(VXML, '/ROOT/HEADER/DEALERID[$iCounter]');
	SET qty = EXTRACTVALUE(VXML, '/ROOT/HEADER/QUANTITY[$iCounter]');
	SET unitPrice = EXTRACTVALUE(VXML, '/ROOT/HEADER/UNITPRICE[$iCounter]');
	SET shippingCost = EXTRACTVALUE(VXML, '/ROOT/HEADER/SHIPPINGCOST[$iCounter]');
	SET totalPrice = EXTRACTVALUE(VXML, '/ROOT/HEADER/TOTALPRICE[$iCounter]');
	SET s_address1 = EXTRACTVALUE(VXML, '/ROOT/HEADER/SADDRESS1[$iCounter]');
	SET s_address2 = EXTRACTVALUE(VXML, '/ROOT/HEADER/SADDRESS2[$iCounter]');
	SET s_city = EXTRACTVALUE(VXML, '/ROOT/HEADER/SCITY[$iCounter]');
	SET s_state = EXTRACTVALUE(VXML, '/ROOT/HEADER/SSTATE[$iCounter]');
	SET s_country = EXTRACTVALUE(VXML, '/ROOT/HEADER/SCOUNTRY[$iCounter]');
	SET s_zip_code = EXTRACTVALUE(VXML, '/ROOT/HEADER/SZIPCODE[$iCounter]');
	SET d_address1 = EXTRACTVALUE(VXML, '/ROOT/HEADER/DADDRESS1[$iCounter]');
	SET d_address2 = EXTRACTVALUE(VXML, '/ROOT/HEADER/DADDRESS2[$iCounter]');
	SET d_city = EXTRACTVALUE(VXML, '/ROOT/HEADER/DCITY[$iCounter]');
	SET d_state = EXTRACTVALUE(VXML, '/ROOT/HEADER/DSTATE[$iCounter]');
	SET d_country = EXTRACTVALUE(VXML, '/ROOT/HEADER/DCOUNTRY[$iCounter]');
	SET d_zip_code = EXTRACTVALUE(VXML, '/ROOT/HEADER/DZIPCODE[$iCounter]');
	SET payment_method = EXTRACTVALUE(VXML, '/ROOT/HEADER/PAYMENTMETHOD[$iCounter]');
	SET shipping_choices = EXTRACTVALUE(VXML, '/ROOT/HEADER/SHIPPINGCHOICES[$iCounter]');
	SET delivery_choices = EXTRACTVALUE(VXML, '/ROOT/HEADER/DELIVERYCHOICES[$iCounter]');
	SET transactionDetails = EXTRACTVALUE(VXML, '/ROOT/HEADER/TRANSACTIONDETAILS[$iCounter]');
	SET bookingStatus = EXTRACTVALUE(VXML, '/ROOT/HEADER/STATUS[$iCounter]');

	SET vBookingID = UUID();
	
	SET vStatus = FALSE;
    SET vMessage = 'Initiated';
    
    -- Creating New User
    IF(vActionType = 'INSERT') THEN
		SET vRequestID= (SELECT CONCAT('BOR',FLOOR(RAND() * 999999)));
        START TRANSACTION;
        
        INSERT INTO tbl_bookings (bookingID, userID, productID, variantID, colorID, dealerID, quantity, unitPrice, shippingCost, totalPrice, paymentMethod, transactionDetails, shippingChoice, deliveryChoice, acceptance, dateTime, status,reqStatus,requestNo) VALUES (vBookingID, vUserID, productID, variantID, colorID, dealerID, qty, unitPrice, shippingCost, totalPrice, payment_method, transactionDetails, shipping_choices, delivery_choices, 1, NOW(), bookingStatus,'Opened',vRequestID);
        
		INSERT INTO tbl_bookingAddresses (bookingID,userID, shippingAddress1, shippingAddress2, shippingCity, shippingState, shippingCountry, shippingZipCode, deliveryAddress1, deliveryAddress2, deliveryCity, deliveryState, deliveryCountry, deliveryZipCode, dateTime, status) VALUES (vBookingID,vUserID, s_address1, s_address2, s_city, d_state, s_country, s_zip_code, d_address1, d_address2, d_city, d_state, d_country, d_zip_code, NOW(), 'P');
        
        update tbl_cart C set status='B' WHERE C.userID=vUserID and C.productID=productID and C.variantID=variantID and C.colorID=colorID and C.dealerID=dealerID and C.status='P';
        COMMIT;
        
        SET vMessage = 'Inserted Successfully';
        SET vID = vBookingID;
        SET vStatus = TRUE;
        
	END IF;

END$$
DELIMITER ;











