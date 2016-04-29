/* release 1.3
author : Ea
*/

/*
Entry 	: 1
Date 	: 29-04-2016
Purpose : for get proforma invoice detail
*/
/* usp_insUpdBuylater Procedure Creation */
DROP PROCEDURE IF EXISTS `usp_getProformaInvoice`;
DELIMITER $$
CREATE PROCEDURE `usp_getProformaInvoice`(vType varchar(15),vproformaInvoiceID varchar(36))
BEGIN
if (vType ="ALL") then
select distinct tgpi.fullname,tgpi.phone,tgpi.emailID,tgpi.address,tgpi.invoiceDate,tgpi.billNo,tud.firstName,
	tud.lastName,tud.addressLine1,tud.addressLine2,tud.zipCode,tud.phone as dealerPhone,tdp.exShowroomPrice,tpbd.productName ,tbankd.TIN,tbankd.CIN
	from tbl_getProformaInvoice tgpi 
	inner join tbl_userDetails tud  on tud.userID = tgpi.dealerID 
    inner join tbl_userBankDetails tbankd  on tbankd.userID = tgpi.dealerID 
	inner join tbl_dealerProducts tdp on tdp.variantID=tgpi.variantID and tdp.productID=tgpi.modelID 
	inner join tbl_productBasic tpbd  on tpbd.productID= tgpi.modelID  
where ProformaInvoiceID=vproformaInvoiceID;
end if;
END$$
DELIMITER ;