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
-- Table structure for table `shopcarts`
--

DROP TABLE IF EXISTS `shopcarts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shopcarts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `products` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shopcarts`
--

LOCK TABLES `shopcarts` WRITE;
/*!40000 ALTER TABLE `shopcarts` DISABLE KEYS */;
INSERT INTO `shopcarts` VALUES (3,11,'[]'),(4,9,'[{\"title\":\"\\u3010\\u6234\\u5c14Studio XPS SX8300-258\\u3011\\u6234\\u5c14Studio XPS SX8300-258\\u53f0\\u5f0f\\u4e3b\\u673a\\uff08\\u56db\\u6838i5-2310 4G 500GB GT420 1GB\\u72ec\\u663e DVDRW WIN7 Premium\\uff09 \\u3010\\u884c\\u60c5 \\u62a5\\u4ef7 \\u4ef7\\u683c \\u8bc4\\u6d4b\\u3011\",\"name\":\"\\u6234\\u5c14Studio XPS SX8300-258\\u53f0\\u5f0f\\u4e3b\\u673a\\uff08\\u56db\\u6838i5-2310 4G 500GB GT420 1GB\\u72ec\\u663e DVDRW WIN7 Premium\\uff09\",\"price\":\"\",\"shop\":\"360buy.com\",\"url\":\"http:\\/\\/www.360buy.com\\/product\\/425254.html\",\"count\":1,\"comment\":\"\"},{\"title\":\"O.SA2011\\u65b0 \\u767d\\u91d1\\u8272\\u62c9\\u94fe \\u4fee\\u8eab\\u5206\\u5272\\u7ebf \\u534a\\u8eab\\u88d9 SQ10585 \\u9ed1\\u8272 XL \\u3010\\u884c\\u60c5 \\u62a5\\u4ef7 \\u4ef7\\u683c \\u8bc4\\u6d4b\\u3011\",\"name\":\"O.SA2011\\u65b0 \\u767d\\u91d1\\u8272\\u62c9\\u94fe \\u4fee\\u8eab\\u5206\\u5272\\u7ebf \\u534a\\u8eab\\u88d9 SQ10585 \\u9ed1\\u8272 XL\",\"price\":\"\",\"shop\":\"360buy.com\",\"url\":\"http:\\/\\/www.360buy.com\\/product\\/1000431883.html\",\"count\":1,\"comment\":\"\"},{\"title\":\"O.SA\\u590f\\u96ea\\u7eba\\u8fde\\u8863\\u88d9\\u77ed\\u8896\\u8fde\\u8863\\u88d9\\u4fee\\u8eab SL00314 \\u8910\\u8272 XL \\u3010\\u884c\\u60c5 \\u62a5\\u4ef7 \\u4ef7\\u683c \\u8bc4\\u6d4b\\u3011\",\"name\":\"O.SA\\u590f\\u96ea\\u7eba\\u8fde\\u8863\\u88d9\\u77ed\\u8896\\u8fde\\u8863\\u88d9\\u4fee\\u8eab SL00314 \\u8910\\u8272 XL\",\"price\":\"\",\"shop\":\"360buy.com\",\"url\":\"http:\\/\\/www.360buy.com\\/product\\/1000145076.html\",\"count\":1,\"comment\":\"\"}]');
/*!40000 ALTER TABLE `shopcarts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-07-06  8:12:54
