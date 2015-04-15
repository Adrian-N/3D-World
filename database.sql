-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2015 at 06:45 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `3d_world`
--

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
`m_id` int(11) NOT NULL,
  `m_name` varchar(180) NOT NULL,
  `m_feature` varchar(180) NOT NULL,
  `m_strenght` varchar(180) NOT NULL,
  `m_finish` varchar(180) NOT NULL,
  `m_detail` varchar(180) NOT NULL,
  `m_price` varchar(25) NOT NULL,
  `m_desc` varchar(999) NOT NULL,
  `m_link` varchar(250) NOT NULL,
  `m_linkDesc` varchar(250) NOT NULL,
  `m_img` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`m_id`, `m_name`, `m_feature`, `m_strenght`, `m_finish`, `m_detail`, `m_price`, `m_desc`, `m_link`, `m_linkDesc`, `m_img`) VALUES
(1, 'ABS', 'UV resistant', 'Medium', 'Textured', 'Low', '14.00 GBP', 'ABS (Acrylonitrile Butadiene Styrene) - is very useful for functional applications, models are very accurate and quite strong. ABS gives a lot of freedom for the design of models, however the surface quality of the models are rougher compared to other materials. ABS comes closest to the material of real production models.', 'http://www.amazon.co.uk/s/ref=nb_sb_ss_fb_0_7/278-0787978-9126843?url=search-alias%3Dcomputers&field-keywords=abs%20filament&sprefix=ABS+fil%2Cdiy%2C183', 'Amazon', '0001'),
(2, 'PLA', 'Reliable', 'Strong', 'Textured', 'Very High', '20.00 GPB', 'PLA (Polyactic Acid) is weak to high temperatures but still reliable. Recommended for early prototypes and models. Come in variety of colours. PLA biodegrades and smells like a candy during printing.', 'http://www.amazon.co.uk/s/ref=nb_sb_ss_i_0_4/279-3609374-1589126?url=search-alias%3Daps&field-keywords=pla%20filament&sprefix=PLA+%2Caps%2C340', 'Amazon', '0002'),
(3, 'Nylon', 'Functional end Products', 'High', 'Textured', 'Precise', '42.00 GPB', 'Perfect all-rounder. Easy design rules, strong and slightly flexible. Allows for functional end products and complex designs. Surface can be polished and dyed.', 'http://www.amazon.co.uk/s/ref=nb_sb_noss_1?url=search-alias%3Daps&field-keywords=nylon+filament&rh=i%3Aaps%2Ck%3Anylon+filament', 'Amazon', '0003');

-- --------------------------------------------------------

--
-- Table structure for table `printers`
--

CREATE TABLE IF NOT EXISTS `printers` (
`Printer_ID` int(11) NOT NULL,
  `Printer_Name` varchar(180) NOT NULL,
  `Printer_Manufacturer` varchar(180) NOT NULL,
  `Printer_Price` varchar(25) NOT NULL,
  `Printer_BF` varchar(250) NOT NULL,
  `Printer_IMG` varchar(250) NOT NULL,
  `Printer_Info` varchar(999) NOT NULL,
  `Printer_Country` varchar(25) NOT NULL,
  `Website` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printers`
--

INSERT INTO `printers` (`Printer_ID`, `Printer_Name`, `Printer_Manufacturer`, `Printer_Price`, `Printer_BF`, `Printer_IMG`, `Printer_Info`, `Printer_Country`, `Website`) VALUES
(1, 'DIY Prusa i3 XL', 'Jelwek', '449 GBP', 'Extended Working Area', '0001', 'RepRap printer with extended working area - 200x300x200 [mm]. Design based on Prusa i3, with all it''s benefits, but with much bigger working area.\r\n\r\nAssembled printer lets You use most kind of materials, like ABS, PLA, Nylon, Laybrick, Laywood, Woodfill, T-Glase and similar. The software does not limit You in parameters of printing, You can for example print with 0.05-0.35 [mm] layers.\r\n\r\nPrusa i3 is the most appreciated amateur 3D printer in the world. Designed by Joseph Prusa, based on years of experience, it proved that it can compete with the proffesional machines, even so it''s one of the cheapest printers. ', 'Poland', 'http://jelwek.pl/en/3d-printers/68-zestaw-diy-prusa-i3-xl.html'),
(2, '3Doodler', 'WobbleWorks', '99 GBP', 'Printing Pen, Portable', '0002', 'The 3Doodler extrudes a thin, flexible filament of heated plastic that quickly hardens, allowing you to draw three dimensional shapes in real time -just as if you were drawing with a pen. There are an infinite number of 3D objects you can create with a little practice - start now and you''ll soon be creating your own 3D masterpieces. Practice by tracing simple 2D shapes and within hours you will be able to create stunning 3D sculptures, and so much more.', 'USA', 'http://the3doodler.com/'),
(3, 'Asterid 2000', 'Plastic Scribbler', '499 GBP', 'Open source design', '0003', '<p>3D Printer Features</p><br />\r\n<ul>\r\n	<li>Fully assembled &amp; tested</li>\r\n	<li>Heater cartridge hot end heating element</li>\r\n	<li>Build volume 8" x 8" x 9.5"</li>\r\n	<li>Uses standard 1.75mm&nbsp;</span><a href="http://plasticscribbler.com/tutorial/knowledge/item/102-benefits-of-non-proprietary-3d-printer-filament" style="font-size: 13px;" target="_blank">NON-proprietary</a><span style="font-size: 13px;">&nbsp;plastic filament (ABS or PLA recommended)</li>\r\n	<li>Strong extruded aluminum and wood frame with built-in filament spool holder</li>\r\n	<li>Plate glass build surface with blue painters tape</li>\r\n	<li>120W power supply&nbsp;</li>\r\n	<li>Open design (no outer cover or door provided)</li>\r\n\r\n</ul>', 'USA', 'http://www.plasticscribbler.com/store/Asterid-2000_3D_Printer'),
(4, 'Form 1+', 'formlabs', '2299 GBP', 'Easy to Use, Stereolithography Technology', '0004', '\r\n<p>Easy Set-Up - A printer that just works. No calibration needed. Get set up and printing in as little as 15 minutes.</p>\r\n<p>Quality Materials - High-performance resins engineered by our material scientists for reliable printing with astounding detail.</p>\r\n<p>One-button Operation - Load your model via USB, hit a button, and get on with what''s important: your design.</p>\r\n<p>Professional Output - Stereolithography is the industry standard in delivering beautiful, functional parts that plastic extrusion printers just can''t match.</p>\r\n', 'USA', 'http://formlabs.com/en/products/form-1-plus/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` mediumint(6) unsigned NOT NULL,
  `fname` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(40) NOT NULL,
  `registration_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `username`, `email`, `password`, `registration_date`) VALUES
(1, 'Adrian', 'admin', '', 'admin', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
 ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `printers`
--
ALTER TABLE `printers`
 ADD PRIMARY KEY (`Printer_ID`), ADD UNIQUE KEY `Printer_ID` (`Printer_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `lname` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `printers`
--
ALTER TABLE `printers`
MODIFY `Printer_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
