/* release 1.1
author : ea
*/

/*
Entry 	: 1
Date 	: 26-04-2016
Purpose : get user details based on vtype
*/
/*  */
DROP PROCEDURE usp_getUsers;
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
		SELECT u.userID,u.userName,u.email,d.phone,u.defaultRoleID,u.ipAddress,u.createdDate,u.modifiedDate,u.status,d.firstName, d.lastName, d.profilePic, d.countryID, d.stateID, d.cityID, d.addressLine1, d.addressLine2, d.zipCode, d.secondaryEmail, d.secondaryPhone,UPPER(r.roleName) as roleName,l.location,d.locationID,d.productCategory,c.categoryName,m.manufactureName,d.manufacture,d.authDealer   
        FROM tbl_users u
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
	
END