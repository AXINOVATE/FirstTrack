/* release 1.1
author : Ea
*/

/*
Entry 	: 1
Date 	: 26-04-2016
Purpose : for insert dealer based and user based data.
*/
/* usp_insUpdBuylater Procedure Creation */

DROP PROCEDURE `usp_insUpdUsers`;
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