/* release 1.1
author : 
*/

/*
Entry 	: 1
Date 	: 26-04-2016
Purpose : for tracking the source and to note out hit has come from any ADD
*/
/* usp_insUpdBuylater Procedure Creation */

DROP PROCEDURE IF EXISTS `usp_insUpdBuylater`;
DELIMITER $$
CREATE  PROCEDURE `usp_insUpdBuylater`(vType varchar(10),vBuylater blob, OUT vStatus varchar(50))
BEGIN
	DECLARE vbuyLaterID,vbuyLaterCityID,vbuyLaterMakerID,vbuyLaterModelID,vbuyLaterVariantID VARCHAR(36);
	DECLARE vbuyLaterFullname,vbuyLaterPhone,vbuyLateremailID,vbuyLaterAddress,vbuyLaterTermsConditions,vbuyLaterStatus VARCHAR(100);
	DECLARE iCounter INT;
    SET iCounter = 1;
     IF(vType = 'INSERT') THEN
		SET vbuyLaterFullname = EXTRACTVALUE(vBuylater, '/ROOT/HEADER/BUYLATERFULLNAME[$iCounter]');
		SET vbuyLaterPhone = EXTRACTVALUE(vBuylater, '/ROOT/HEADER/BUYLATERPHONE[$iCounter]');
		SET vbuyLaterAddress = EXTRACTVALUE(vBuylater, '/ROOT/HEADER/BUYLATERADDRESS[$iCounter]');
		SET vbuyLateremailID = EXTRACTVALUE(vBuylater, '/ROOT/HEADER/BUYLATEREMAILID[$iCounter]');
		SET vbuyLaterCityID = EXTRACTVALUE(vBuylater, '/ROOT/HEADER/BUYLATERCITYID[$iCounter]');
		SET vbuyLaterMakerID = EXTRACTVALUE(vBuylater, '/ROOT/HEADER/BUYLATERMARKERID[$iCounter]');
		SET vbuyLaterModelID = EXTRACTVALUE(vBuylater, '/ROOT/HEADER/BUYLATERMODELID[$iCounter]');
		SET vbuyLaterVariantID = EXTRACTVALUE(vBuylater, '/ROOT/HEADER/BUYLATERVARIANTID[$iCounter]');        
		SET vbuyLaterTermsConditions = EXTRACTVALUE(vBuylater, '/ROOT/HEADER/BUYLATERTC[$iCounter]');
        SET vbuyLaterStatus = EXTRACTVALUE(vBuylater, '/ROOT/HEADER/BUYLATERSTATUS[$iCounter]');
		SET vbuyLaterID = UUID();
		INSERT INTO tbl_buyLater(buyLaterID,buyLaterFullname,buyLaterPhone,buyLaterAddress,buyLateremailID,buyLaterCity,buyLaterMaker,buyLaterModel,buyLaterVariant,buyLaterTermsConditions,createdDateTime,modifiedDateTime,buyLaterStatus)
		VALUES(vbuyLaterID,vbuyLaterFullname,vbuyLaterPhone,vbuyLaterAddress,vbuyLateremailID,vbuyLaterCityID,vbuyLaterMakerID,vbuyLaterModelID,vbuyLaterVariantID,vbuyLaterTermsConditions,NOW(),NOW(),vbuyLaterStatus);
		SET vStatus = 'Successfully';
    end if;
END$$
DELIMITER ;

DROP PROCEDURE IF EXISTS `usp_userActivationorDelete`;
DELIMITER $$
CREATE  PROCEDURE `usp_userActivationorDelete`(vType varchar(35),vUserId varchar(36),out vStatus varchar(50))
BEGIN
	if(vType='ACTIVATION')then
		update tbl_users set status='P' where userID=vUserId;
		set vStatus="ACTIVATION";
	end if;
    if(vType='DEACTIVATION')then
		update tbl_users set status='D' where userID=vUserId;
		set vStatus="DEACTIVATION";
	end if;
	if(vType='DELETE')then
		delete from tbl_users where userID=vUserId;
        set vStatus="DELETED";
    end if;
END$$
DELIMITER ;
DROP PROCEDURE IF EXISTS `usp_getUsers`;
DELIMITER $$
CREATE  PROCEDURE `usp_getUsers`(IN VXML TEXT)
BEGIN
    DECLARE vUserID,vActionType,vRoleID,vBookingID VARCHAR(36);
	DECLARE vUserName,vEmail VARCHAR(100);
	DECLARE iCounter INT;
    SET iCounter = 1;
	SET vActionType = EXTRACTVALUE(VXML, '/ROOT/HEADER/ACTIONTYPE[$iCounter]');
	SET vUserID = EXTRACTVALUE(VXML, '/ROOT/HEADER/USERID[$iCounter]');
	SET vEmail = EXTRACTVALUE(VXML, '/ROOT/HEADER/EMAIL[$iCounter]');
	SET vRoleID = EXTRACTVALUE(VXML, '/ROOT/HEADER/ROLE[$iCounter]');
     -- Getting Login Information
    IF(vActionType = 'LOGIN') THEN
		SELECT u.userID,u.userName,u.password,u.email,d.phone,u.defaultRoleID,u.ipAddress,u.createdDate,u.modifiedDate,u.status,d.firstName, d.lastName, d.profilePic, d.countryID, d.stateID, d.cityID, d.addressLine1, d.addressLine2, d.zipCode, d.secondaryEmail, d.secondaryPhone,UPPER(r.roleName) as roleName     
        FROM tbl_users u
        INNER JOIN tbl_userDetails d ON d.userID = u.userID 
        INNER JOIN tbl_roles r ON r.roleID = u.defaultRoleID 
        WHERE (u.userName = vEmail OR u.email = vEmail) AND u.status = 'P' limit 1;
    END IF;
    IF(vActionType = 'SP') THEN
		SELECT u.userID,u.userName,u.password,u.email,d.phone,u.defaultRoleID,u.ipAddress,u.createdDate,u.modifiedDate,u.status,d.firstName, d.lastName, d.profilePic, d.countryID, d.stateID, d.cityID, d.addressLine1, d.addressLine2, d.zipCode, d.secondaryEmail, d.secondaryPhone,UPPER(r.roleName) as roleName,d.locationID,d.productCategory,d.manufacture,d.authDealer,m.manufactureName,c.categoryName 
        FROM tbl_users u
        INNER JOIN tbl_userDetails d ON d.userID = u.userID 
        INNER JOIN tbl_roles r ON r.roleID = u.defaultRoleID 
		LEFT JOIN tbl_manufacture m ON d.manufacture=m.manufactureID
		LEFT JOIN tbl_category c ON d.productCategory=c.categoryID
        WHERE u.userID = vUserID AND u.status = 'P' limit 1;
    END IF;
    IF(vActionType = 'RLIST') THEN
		SELECT u.userID,u.userName,u.password,u.email,d.phone,u.defaultRoleID,u.ipAddress,u.createdDate,u.modifiedDate,u.status,d.firstName, d.lastName, d.profilePic, d.countryID, d.stateID, d.cityID, d.addressLine1, d.addressLine2, d.zipCode, d.secondaryEmail, d.secondaryPhone,UPPER(r.roleName) as roleName,l.location,d.locationID,d.productCategory,c.categoryName,m.manufactureName,d.manufacture,d.authDealer   
        FROM tbl_users u
        INNER JOIN tbl_userDetails d ON d.userID = u.userID 
        INNER JOIN tbl_roles r ON r.roleID = u.defaultRoleID 
        INNER JOIN tbl_category c ON c.categoryID = d.productCategory 
        INNER JOIN tbl_manufacture m ON m.manufactureID = d.manufacture 
        INNER JOIN tbl_locations_detail l ON l.locationID = d.locationID 
        WHERE UPPER(r.roleName) = UPPER(vRoleID) AND u.status = 'P';
    END IF;
   IF(vActionType = 'DEALER')THEN
		SELECT u.userID,u.userName,u.password,u.email,d.phone,u.defaultRoleID,u.ipAddress,u.createdDate,u.modifiedDate,u.status,d.firstName, d.lastName, d.profilePic, d.countryID, d.stateID, d.cityID, d.addressLine1, d.addressLine2, d.zipCode, d.secondaryEmail, d.secondaryPhone,UPPER(r.roleName) as roleName,l.location,d.locationID,d.productCategory,c.categoryName,m.manufactureName,d.manufacture,d.authDealer   
        FROM tbl_users u
        INNER JOIN tbl_userDetails d ON d.userID = u.userID 
        INNER JOIN tbl_roles r ON r.roleID = u.defaultRoleID 
        INNER JOIN tbl_category c ON c.categoryID = d.productCategory 
        INNER JOIN tbl_manufacture m ON m.manufactureID = d.manufacture 
        INNER JOIN tbl_locations_detail l ON l.locationID = d.locationID 
        WHERE UPPER(r.roleName) = 'DEALER' AND u.status = 'P';
   END IF;
   IF(vActionType = 'DEALER-O')THEN
		SELECT u.userID,u.userName,u.password,u.email,d.phone,u.defaultRoleID,u.ipAddress,u.createdDate,u.modifiedDate,u.status,d.firstName, d.lastName, d.profilePic, d.countryID, d.stateID, d.cityID, d.addressLine1, d.addressLine2, d.zipCode, d.secondaryEmail, d.secondaryPhone,UPPER(r.roleName) as roleName,l.location,d.locationID,d.productCategory,c.categoryName,m.manufactureName,d.manufacture,d.authDealer   
        FROM tbl_users u
        INNER JOIN tbl_userDetails d ON d.userID = u.userID 
        INNER JOIN tbl_roles r ON r.roleID = u.defaultRoleID 
        INNER JOIN tbl_category c ON c.categoryID = d.productCategory 
        INNER JOIN tbl_manufacture m ON m.manufactureID = d.manufacture 
        INNER JOIN tbl_locations_detail l ON l.locationID = d.locationID 
        WHERE UPPER(r.roleName) = 'DEALER' AND u.status = 'P' AND u.userID=vUserID;
   END IF;
   IF(vActionType = 'DEALER-M')THEN
		SELECT u.userID,u.userName,u.password,u.email,d.phone,u.defaultRoleID,u.ipAddress,u.createdDate,u.modifiedDate,u.status,d.firstName, d.lastName, d.profilePic, d.countryID, d.stateID, d.cityID, d.addressLine1, d.addressLine2, d.zipCode, d.secondaryEmail, d.secondaryPhone,UPPER(r.roleName) as roleName,l.location,d.locationID,d.productCategory,c.categoryName,m.manufactureName,d.manufacture,d.authDealer   
        FROM tbl_users u
        INNER JOIN tbl_userDetails d ON d.userID = u.userID 
        INNER JOIN tbl_roles r ON r.roleID = u.defaultRoleID 
        INNER JOIN tbl_category c ON c.categoryID = d.productCategory 
        INNER JOIN tbl_manufacture m ON m.manufactureID = d.manufacture 
        INNER JOIN tbl_locations_detail l ON l.locationID = d.locationID 
        WHERE UPPER(r.roleName) = 'DEALER' AND u.status = 'P' AND m.manufactureID=vUserID;
   END IF;
   IF(vActionType = 'DEALER-C')THEN
		SELECT u.userID,u.userName,u.email,d.phone,u.defaultRoleID,u.ipAddress,u.createdDate,u.modifiedDate,u.status,d.firstName, d.lastName, d.profilePic, d.countryID, d.stateID, d.cityID, d.addressLine1, d.addressLine2, d.zipCode, d.secondaryEmail, d.secondaryPhone,UPPER(r.roleName) as roleName,l.location,d.locationID,d.productCategory,c.categoryName,m.manufactureName,d.manufacture,d.authDealer FROM tbl_users u
        INNER JOIN tbl_userDetails d ON d.userID = u.userID 
        INNER JOIN tbl_roles r ON r.roleID = u.defaultRoleID 
        INNER JOIN tbl_category c ON c.categoryID = d.productCategory 
        INNER JOIN tbl_manufacture m ON m.manufactureID = d.manufacture 
        INNER JOIN tbl_locations_detail l ON l.locationID = d.locationID 
        WHERE UPPER(r.roleName) = 'DEALER' AND u.status = 'P' AND c.categoryID=vUserID;
   END IF;
   IF(vActionType = 'GETBOOKINGUSER')THEN
   SET vBookingID = EXTRACTVALUE(VXML, '/ROOT/HEADER/BOOKINGID[$iCounter]');
	select B.bookingID,B.userID,U.email,UD.firstName,UD.lastName,UD.addressLine1,UD.addressLine2,
		UD.phone,UD.secondaryEmail,UD.secondaryPhone from tbl_bookings B
		INNER JOIN tbl_users U ON U.userID=B.userID 
		INNER JOIN tbl_userDetails UD ON UD.userID=U.userID WHERE B.bookingID=vUserID;
	END IF;
    IF(vActionType = 'ACTIVATIONDEALER') THEN
		SELECT u.userID,u.userName,u.password,u.email,u.status,d.phone,u.defaultRoleID,u.ipAddress,u.createdDate,u.modifiedDate,u.status,d.firstName, d.lastName, d.profilePic, d.countryID, d.stateID, d.cityID, d.addressLine1, d.addressLine2, d.zipCode, d.secondaryEmail, d.secondaryPhone,UPPER(r.roleName) as roleName,l.location,d.locationID,d.productCategory,c.categoryName,m.manufactureName,d.manufacture,d.authDealer   
        FROM tbl_users u
        INNER JOIN tbl_userDetails d ON d.userID = u.userID 
        INNER JOIN tbl_roles r ON r.roleID = u.defaultRoleID 
        INNER JOIN tbl_category c ON c.categoryID = d.productCategory 
        INNER JOIN tbl_manufacture m ON m.manufactureID = d.manufacture 
        INNER JOIN tbl_locations_detail l ON l.locationID = d.locationID 
        WHERE UPPER(r.roleName) = UPPER(vRoleID) order by u.modifiedDate desc;
    END IF;
END$$
DELIMITER ;
DROP PROCEDURE IF EXISTS `usp_insUpdUsers`;
DELIMITER $$
CREATE  PROCEDURE `usp_insUpdUsers`(IN VXML TEXT ,OUT vID VARCHAR(36),OUT vMessage VARCHAR(50),OUT vStatus BOOLEAN)
BEGIN
	DECLARE vUserID,vIpAddress,vActionType,vPhone,vRole,vRoleID VARCHAR(36);
	DECLARE vName,vUserName,vEmail,vPassword VARCHAR(100);
	DECLARE iCounter INT;
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		SET vMessage = 'An error occured';
        SET vStatus = FALSE;
		ROLLBACK;
	END;
    DECLARE EXIT HANDLER FOR 1062 
	BEGIN
		SET vMessage = 'DUPLICATE';
        SET vStatus = FALSE;
		ROLLBACK;
	END;
	SET iCounter = 1;
	SET vActionType = EXTRACTVALUE(VXML, '/ROOT/HEADER/ACTIONTYPE[$iCounter]');
	SET vName = EXTRACTVALUE(VXML, '/ROOT/HEADER/NAME[$iCounter]');
	SET vUserName = EXTRACTVALUE(VXML, '/ROOT/HEADER/USERNAME[$iCounter]');
	SET vEmail = EXTRACTVALUE(VXML, '/ROOT/HEADER/EMAIL[$iCounter]');
	SET vPassword = EXTRACTVALUE(VXML, '/ROOT/HEADER/PASSWORD[$iCounter]');
	SET vPhone = EXTRACTVALUE(VXML, '/ROOT/HEADER/PHONE[$iCounter]');
	SET vRole = EXTRACTVALUE(VXML, '/ROOT/HEADER/ROLE[$iCounter]');
	SET vUserID = UUID();
	SET vIpAddress = (SELECT SUBSTRING(USER(), LOCATE('@', USER())+1));
	SET vRoleID = (SELECT roleID FROM tbl_roles WHERE LOWER(roleName) = LOWER(vRole));
	SET vStatus = FALSE;
    SET vMessage = 'Initiated';
    
    -- Creating New User
    IF(vActionType = 'INSERT') THEN
        START TRANSACTION;
		if( vRole='Dealer') then
         INSERT INTO tbl_users(userID,userName,password,email,ipAddress,defaultRoleID,createdDate,modifiedDate,status)
		 VALUES(vUserID,vUserName,vPassword,vEmail,vIpAddress,vRoleID,NOW(),NOW(),'D');
        
         INSERT INTO tbl_userDetails (userID, firstName,phone,createdDate, modifiedDate, status) 
         VALUES (vUserID,vName,vPhone,NOW(),NOW(),'D');
		end if;
        if( vRole='User') then
         INSERT INTO tbl_users(userID,userName,password,email,ipAddress,defaultRoleID,createdDate,modifiedDate,status)
		 VALUES(vUserID,vUserName,vPassword,vEmail,vIpAddress,vRoleID,NOW(),NOW(),'P');
         
        INSERT INTO tbl_userDetails (userID, firstName,phone,createdDate, modifiedDate, status) 
        VALUES (vUserID,vName,vPhone,NOW(),NOW(),'P');
        end if;
        INSERT INTO tbl_userRoles (userID, roleID, createdDate) 
        VALUES (vUserID, vRoleID, NOW());
        COMMIT;
        SET vMessage = 'Inserted Successfully';
        SET vID = vUserID;
        SET vStatus = TRUE;
	END IF;
END$$
DELIMITER ;