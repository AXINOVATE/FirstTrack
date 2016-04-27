DROP PROCEDURE IF EXISTS `usp_insUpdUserBankDetails`;
DELIMITER $$
CREATE  PROCEDURE `usp_insUpdUserBankDetails`(IN VXML TEXT , OUT vMessage VARCHAR(50), OUT vStatus BOOLEAN)
BEGIN
  
	DECLARE vActionType,vUserID,vCreatedBy,vCheck,vBankStatus VARCHAR(36);
	DECLARE vBankName,vAccountNumber,vAccountType,vIFSC,vBranch,vTIN,vCIN,vPAN,vAddress,vtermandcondition,vdealerBankAccountName VARCHAR(200);
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
	SET vdealerBankAccountName = EXTRACTVALUE(VXML, '/ROOT/HEADER/DEALERACNAME[$iCounter]');
	SET vBankName = EXTRACTVALUE(VXML, '/ROOT/HEADER/BANKNAME[$iCounter]');
	SET vAccountNumber = EXTRACTVALUE(VXML, '/ROOT/HEADER/ACCOUNTNUMBER[$iCounter]');
	SET vAccountType = EXTRACTVALUE(VXML, '/ROOT/HEADER/ACCOUNTTYPE[$iCounter]');
	SET vIFSC = EXTRACTVALUE(VXML, '/ROOT/HEADER/IFSC[$iCounter]');
	SET vBranch = EXTRACTVALUE(VXML, '/ROOT/HEADER/BRANCH[$iCounter]');
	SET vTIN = EXTRACTVALUE(VXML, '/ROOT/HEADER/TIN[$iCounter]');
	SET vCIN = EXTRACTVALUE(VXML, '/ROOT/HEADER/CIN[$iCounter]');
	SET vPAN = EXTRACTVALUE(VXML, '/ROOT/HEADER/PAN[$iCounter]');
	SET vAddress = EXTRACTVALUE(VXML, '/ROOT/HEADER/ADDRESS[$iCounter]');
	SET vtermandcondition = EXTRACTVALUE(VXML, '/ROOT/HEADER/TERMSANDCONDITIONS[$iCounter]');
	SET vCreatedBy = EXTRACTVALUE(VXML, '/ROOT/HEADER/CREATEDBY[$iCounter]');
	SET vBankStatus = EXTRACTVALUE(VXML, '/ROOT/HEADER/STATUS[$iCounter]');

	SET vCheck = (SELECT userID FROM tbl_userBankDetails WHERE userID = vUserID);
	SET vStatus = FALSE;
    SET vMessage = 'Initiated';
    
    
    IF(vActionType = 'INSERT_UPDATE') THEN
        START TRANSACTION;
        IF(vCheck)THEN
			UPDATE tbl_userBankDetails SET dealerBankAccountName=vdealerBankAccountName, bankName = vBankName, accountNumber = vAccountNumber, accountType = vAccountType, IFSC = vIFSC, branch = vBranch, TIN = vTIN, CIN = vCIN, PAN = vPAN, address = vAddress,termandcondition =vtermandcondition, createdBy = vCreatedBy, modifiedDate = NOW(), status = vBankStatus WHERE userID = vUserID;
            SET vMessage = 'Updated Successfully';
        ELSE
			INSERT INTO tbl_userBankDetails(userID,dealerBankAccountName,bankName,accountNumber,accountType,IFSC,branch,TIN,CIN,PAN,address,termandcondition,createdBy,createdDate,modifiedDate,status)
			VALUES(vUserID,vdealerBankAccountName,vBankName,vAccountNumber,vAccountType,vIFSC,vBranch,vTIN,vCIN,vPAN,vAddress,vtermandcondition,vCreatedBy,NOW(),NOW(),'P');
            SET vMessage = 'Inserted Successfully';
		END IF;
        COMMIT;
        SET vStatus = TRUE;
	END IF;

END$$
DELIMITER ;
DROP PROCEDURE IF EXISTS `usp_getUserBankDetails`;
DELIMITER $$
CREATE  PROCEDURE `usp_getUserBankDetails`(IN VXML TEXT)
BEGIN	
    DECLARE vUserID,vActionType VARCHAR(36);
	DECLARE iCounter INT;	
    SET iCounter = 1;
	SET vActionType = EXTRACTVALUE(VXML, '/ROOT/HEADER/ACTIONTYPE[$iCounter]');
	SET vUserID = EXTRACTVALUE(VXML, '/ROOT/HEADER/USERID[$iCounter]');
	
    IF(vActionType = 'SP') THEN
		SELECT userID,dealerBankAccountName, bankName, accountNumber, accountType, IFSC, branch, TIN, CIN, PAN, address,termandcondition, createdBy, createdDate, modifiedDate, status FROM tbl_userBankDetails WHERE userID = vUserID; 
    END IF;
END$$
DELIMITER ;
