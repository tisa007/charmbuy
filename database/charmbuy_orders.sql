CREATE DATABASE  IF NOT EXISTS `charmbuy` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `charmbuy`;
-- MySQL dump 10.13  Distrib 5.5.9, for Win32 (x86)
--
-- Host: localhost    Database: charmbuy
-- ------------------------------------------------------
-- Server version	5.1.41

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
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `product_count` int(11) DEFAULT '0',
  `total_price` float DEFAULT '0',
  `state` varchar(45) DEFAULT 'processing...',
  `ship_num` varchar(45) DEFAULT NULL,
  `ship_corp` varchar(45) DEFAULT NULL,
  `product_price` float DEFAULT '0',
  `ship_price` float DEFAULT '0',
  `products` text,
  `timeline` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'{\"0\":{\"title\":\"\\r\\n\\t\\r\\n    \\u6d3b\\u529b\\u56db\\u5c04\\u65f6\\u5c1a\\u8fd0\\u52a8\\u77ed\\u88e4-VANCL \\u51e1\\u5ba2\\u8bda\\u54c1\\r\\n\",\"name\":\"\\r\\n    \\u6d3b\\u529b\\u56db\\u5c04\\u65f6\\u5c1a\\u8fd0\\u52a8\\u77ed\\u88e4 \\u5b9d\\u84dd\\u8272\",\"price\":\"39.00\",\"shop\":\"vancl.com\",\"url\":\"http:\\/\\/item.vancl.com\\/0086375.html?ref=dp_History_1_0071093\",\"count\":\"1\"},\"3\":{\"title\":\"\\u65e5\\u7cfb\\u6027\\u611f\\u5c0f\\u80f8\\u6551\\u661f \\u52a0\\u539a\\u6b3e \\u4e0a\\u8584\\u4e0b\\u539a\\u805a\\u62e2\\u6587\\u80f8 \\u7206\\u4e73\\u6587\\u80f8\\u5957\\u88c5 339-\\u6dd8\\u5b9d\\u7f51\",\"name\":\"\\n\\t\\t\\u65e5\\u7cfb\\u6027\\u611f\\u5c0f\\u80f8\\u6551\\u661f \\u52a0\\u539a\\u6b3e \\u4e0a\\u8584\\u4e0b\\u539a\\u805a\\u62e2\\u6587\\u80f8 \\u7206\\u4e73\\u6587\\u80f8\\u5957\\u88c5 339\\t\",\"price\":\"29.90\",\"shop\":\"taobao.com\",\"url\":\"http:\\/\\/item.taobao.com\\/item.htm?id=10538342077&\",\"count\":\"1\"}}',NULL),(2,11,NULL,2,0,'processing...',NULL,NULL,0,0,'[{\"title\":\"\\r\\n\\t\\r\\n    \\u6d3b\\u529b\\u56db\\u5c04\\u65f6\\u5c1a\\u8fd0\\u52a8\\u77ed\\u88e4-VANCL \\u51e1\\u5ba2\\u8bda\\u54c1\\r\\n\",\"name\":\"\\r\\n    \\u6d3b\\u529b\\u56db\\u5c04\\u65f6\\u5c1a\\u8fd0\\u52a8\\u77ed\\u88e4 \\u5b9d\\u84dd\\u8272\",\"price\":\"39.00\",\"shop\":\"vancl.com\",\"url\":\"http:\\/\\/item.vancl.com\\/0086375.html?ref=dp_History_1_0071093\",\"count\":\"1\"},{\"title\":\"\\r\\n\\t\\r\\n    \\u857e\\u4e1d\\u5370\\u82b1\\u4e24\\u4ef6\\u5f0f\\u53e0\\u7a7fT\\u6064-VANCL \\u51e1\\u5ba2\\u8bda\\u54c1\\r\\n\",\"name\":\"\\r\\n    <p id=\\\"productname\\\">\\u857e\\u4e1d\\u5370\\u82b1\\u4e24\\u4ef6\\u5f0f\\u53e0\\u7a7fT\\u6064 \\u7070\\u5e95\\u9ed1\\u82b1+\\u9ed1\\u8272\\u540a\\u5e26<\\/p>\\r\\n    <div style=\\\"position: absolute; right: 5px; top: -1px;\\\">\\r\\n        <a href=\\\"http:\\/\\/www.vancl.com\\/help\\/member_point.htm#hyqy\\\" target=\\\"_blank\\\">\\r\\n            <img src=\\\"http:\\/\\/images.vancl.com\\/NewVancl\\/ProductDetial\\/spe.gif\\\" alt=\\\"\\u7279\\u4f8b\\u54c1\\u4e0d\\u4eab\\u53d7VIP\\/SVIP\\u4ef7\\u4f18\\u60e0\\uff0c\\u70b9\\u51fb\\u67e5\\u770b\\u8be6\\u7ec6\\u89c4\\u5219\\\" \\/><\\/a>\\r\\n    <\\/div>\\r\\n\",\"price\":\"49.00\",\"shop\":\"vancl.com\",\"url\":\"http:\\/\\/item.vancl.com\\/0078795.html?ref=dp_PurchasedAfterWatching_3_0071093\",\"count\":\"1\"}]',1308519120),(3,11,NULL,1,0,'processing...',NULL,NULL,0,0,'[{\"title\":\"\\r\\n\\t\\r\\n    \\u6d3b\\u529b\\u56db\\u5c04\\u65f6\\u5c1a\\u8fd0\\u52a8\\u77ed\\u88e4-VANCL \\u51e1\\u5ba2\\u8bda\\u54c1\\r\\n\",\"name\":\"\\r\\n    \\u6d3b\\u529b\\u56db\\u5c04\\u65f6\\u5c1a\\u8fd0\\u52a8\\u77ed\\u88e4 \\u5b9d\\u84dd\\u8272\",\"price\":\"39.00\",\"shop\":\"vancl.com\",\"url\":\"http:\\/\\/item.vancl.com\\/0086375.html?ref=dp_History_1_0071093\",\"count\":\"1\"}]',1308519535),(4,11,NULL,1,0,'processing...',NULL,NULL,0,0,'[{\"title\":\"\\r\\n\\t\\r\\n    \\u6d3b\\u529b\\u56db\\u5c04\\u65f6\\u5c1a\\u8fd0\\u52a8\\u77ed\\u88e4-VANCL \\u51e1\\u5ba2\\u8bda\\u54c1\\r\\n\",\"name\":\"\\r\\n    \\u6d3b\\u529b\\u56db\\u5c04\\u65f6\\u5c1a\\u8fd0\\u52a8\\u77ed\\u88e4 \\u5b9d\\u84dd\\u8272\",\"price\":\"39.00\",\"shop\":\"vancl.com\",\"url\":\"http:\\/\\/item.vancl.com\\/0086375.html?ref=dp_History_1_0071093\",\"count\":\"1\"}]',1308519639),(5,11,NULL,1,0,'processing...',NULL,NULL,0,0,'[{\"title\":\"\\r\\n\\t\\r\\n    \\u6d3b\\u529b\\u56db\\u5c04\\u65f6\\u5c1a\\u8fd0\\u52a8\\u77ed\\u88e4-VANCL \\u51e1\\u5ba2\\u8bda\\u54c1\\r\\n\",\"name\":\"\\r\\n    \\u6d3b\\u529b\\u56db\\u5c04\\u65f6\\u5c1a\\u8fd0\\u52a8\\u77ed\\u88e4 \\u5b9d\\u84dd\\u8272\",\"price\":\"39.00\",\"shop\":\"vancl.com\",\"url\":\"http:\\/\\/item.vancl.com\\/0086375.html?ref=dp_History_1_0071093\",\"count\":\"1\"}]',1308519670),(6,11,NULL,1,0,'processing...',NULL,NULL,0,0,'{\"3\":{\"title\":\"\\u65e5\\u7cfb\\u6027\\u611f\\u5c0f\\u80f8\\u6551\\u661f \\u52a0\\u539a\\u6b3e \\u4e0a\\u8584\\u4e0b\\u539a\\u805a\\u62e2\\u6587\\u80f8 \\u7206\\u4e73\\u6587\\u80f8\\u5957\\u88c5 339-\\u6dd8\\u5b9d\\u7f51\",\"name\":\"\\n\\t\\t\\u65e5\\u7cfb\\u6027\\u611f\\u5c0f\\u80f8\\u6551\\u661f \\u52a0\\u539a\\u6b3e \\u4e0a\\u8584\\u4e0b\\u539a\\u805a\\u62e2\\u6587\\u80f8 \\u7206\\u4e73\\u6587\\u80f8\\u5957\\u88c5 339\\t\",\"price\":\"29.90\",\"shop\":\"taobao.com\",\"url\":\"http:\\/\\/item.taobao.com\\/item.htm?id=10538342077&\",\"count\":\"1\"}}',1308519685);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-07-06  8:12:47
