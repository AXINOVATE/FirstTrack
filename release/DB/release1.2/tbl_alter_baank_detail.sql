ALTER TABLE `tbl_userBankDetails` 
ADD COLUMN `termandcondition` VARCHAR(500) NULL AFTER `address`;

ALTER TABLE `tbl_userBankDetails` 
ADD COLUMN `dealerBankAccountName` VARCHAR(45) NULL AFTER `userID`;



