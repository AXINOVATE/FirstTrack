/* release 1.1
author : 
*/

/*
Entry 	: 1
Date 	: 26-04-2016
Purpose : for tracking the source and to note out hit has come from any ADD
*/
/* usp_insUpdBuylater Procedure Creation */
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