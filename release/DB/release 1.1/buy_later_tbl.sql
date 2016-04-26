/* release 1
author : ea
*/

/*
Entry 	: 1
Date 	: 26-04-2016
Purpose : Create Buy Later Tbl
*/
/*  */
CREATE TABLE `tbl_buyLater` (
  `buyLaterID` varchar(36) NOT NULL,
  `buyLaterFullname` varchar(60) DEFAULT NULL,
  `buyLaterPhone` varchar(12) DEFAULT NULL,
  `buyLaterAddress` varchar(100) DEFAULT NULL,
  `buyLateremailID` varchar(45) DEFAULT NULL,
  `buyLaterCity` varchar(36) DEFAULT NULL,
  `buyLaterMaker` varchar(36) DEFAULT NULL,
  `buyLaterModel` varchar(36) DEFAULT NULL,
  `buyLaterVariant` varchar(36) DEFAULT NULL,
  `buyLaterTermsConditions` varchar(10) DEFAULT NULL,
  `createdDateTime` datetime DEFAULT NULL,
  `modifiedDateTime` datetime DEFAULT NULL,
  `buyLaterStatus` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`buyLaterID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
