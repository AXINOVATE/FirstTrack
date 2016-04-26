/* release 1.1
author : 
*/

/*
Entry 	: 1
Date 	: 26-04-2016
Purpose : for tracking the source and to note out hit has come from any ADD
*/
/* usp_insUpdBuylater Procedure Creation */

DROP PROCEDURE `usp_insUpdBuylater`;
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