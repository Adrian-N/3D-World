-- MySQL dump 10.13  Distrib 5.6.21, for Win32 (x86)
--
-- Host: localhost    Database: 3d_world
-- ------------------------------------------------------
-- Server version	5.6.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `printers`
--

DROP TABLE IF EXISTS `printers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `printers` (
  `Printer_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Printer_Name` varchar(180) NOT NULL,
  `Printer_Manufacturer` varchar(180) NOT NULL,
  `Printer_Price` varchar(25) NOT NULL,
  `Printer_BF` varchar(250) NOT NULL,
  `Printer_IMG` varchar(250) NOT NULL,
  `Printer_Info` varchar(999) NOT NULL,
  `Printer_Country` varchar(25) NOT NULL,
  `Website` varchar(250) NOT NULL,
  PRIMARY KEY (`Printer_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `printers`
--

LOCK TABLES `printers` WRITE;
/*!40000 ALTER TABLE `printers` DISABLE KEYS */;
INSERT INTO `printers` VALUES (1,'DIY Prusa i3 XL','Jelwek','449 GBP','Extended Working Area','0001','RepRap printer with extended working area - 200x300x200 [mm]. Design based on Prusa i3, with all it\'s benefits, but with much bigger working area.\r\n\r\nAssembled printer lets You use most kind of materials, like ABS, PLA, Nylon, Laybrick, Laywood, Woodfill, T-Glase and similar. The software does not limit You in parameters of printing, You can for example print with 0.05-0.35 [mm] layers.\r\n\r\nPrusa i3 is the most appreciated amateur 3D printer in the world. Designed by Joseph Prusa, based on years of experience, it proved that it can compete with the proffesional machines, even so it\'s one of the cheapest printers. ','Poland','http://jelwek.pl/en/3d-printers/68-zestaw-diy-prusa-i3-xl.html'),(2,'3Doodler','WobbleWorks','99 GBP','Printing Pen, Portable','0002','The 3Doodler extrudes a thin, flexible filament of heated plastic that quickly hardens, allowing you to draw three dimensional shapes in real time -just as if you were drawing with a pen. There are an infinite number of 3D objects you can create with a little practice - start now and you\'ll soon be creating your own 3D masterpieces. Practice by tracing simple 2D shapes and within hours you will be able to create stunning 3D sculptures, and so much more.','USA','http://the3doodler.com/'),(3,'Asterid 2000','Plastic Scribbler','499 GBP','Open source design','0003','<p>3D Printer Features</p><br />\r\n<ul>\r\n	<li>Fully assembled &amp; tested</li>\r\n	<li>Heater cartridge hot end heating element</li>\r\n	<li>Build volume 8\" x 8\" x 9.5\"</li>\r\n	<li>Uses standard 1.75mm&nbsp;</span><a href=\"http://plasticscribbler.com/tutorial/knowledge/item/102-benefits-of-non-proprietary-3d-printer-filament\" style=\"font-size: 13px;\" target=\"_blank\">NON-proprietary</a><span style=\"font-size: 13px;\">&nbsp;plastic filament (ABS or PLA recommended)</li>\r\n	<li>Strong extruded aluminum and wood frame with built-in filament spool holder</li>\r\n	<li>Plate glass build surface with blue painters tape</li>\r\n	<li>120W power supply&nbsp;</li>\r\n	<li>Open design (no outer cover or door provided)</li>\r\n\r\n</ul>','USA','http://www.plasticscribbler.com/store/Asterid-2000_3D_Printer'),(4,'Form 1+','formlabs','2299 GBP','Easy to Use, Stereolithography Technology','0004','\r\n<p>Easy Set-Up - A printer that just works. No calibration needed. Get set up and printing in as little as 15 minutes.</p>\r\n<p>Quality Materials - High-performance resins engineered by our material scientists for reliable printing with astounding detail.</p>\r\n<p>One-button Operation - Load your model via USB, hit a button, and get on with what\'s important: your design.</p>\r\n<p>Professional Output - Stereolithography is the industry standard in delivering beautiful, functional parts that plastic extrusion printers just can\'t match.</p>\r\n','USA','http://formlabs.com/en/products/form-1-plus/');
/*!40000 ALTER TABLE `printers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(40) NOT NULL,
  `registration_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `lname` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Adrian','admin','','admin','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-02-05 14:44:17
