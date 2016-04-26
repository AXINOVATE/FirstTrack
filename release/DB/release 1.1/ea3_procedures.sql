/* release 1.1
author : Ea
*/

/*
Entry 	: 1
Date 	: 26-04-2016
Purpose : for store the userid
*/
ALTER TABLE `tbl_bookingAddresses` 
add COLUMN `userID` VARCHAR(36) NULL DEFAULT NULL AFTER `bookingID`;