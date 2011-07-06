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
-- Table structure for table `strings`
--

DROP TABLE IF EXISTS `strings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `strings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_key` varchar(255) NOT NULL,
  `s_value` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `strings`
--

LOCK TABLES `strings` WRITE;
/*!40000 ALTER TABLE `strings` DISABLE KEYS */;
INSERT INTO `strings` VALUES (1,'working_time','9:00-21:00'),(2,'rmb_rate','1cny=0.66usd'),(3,'email_01','tisa007@163.com'),(4,'email_02','wp.tisa@gmail.com'),(5,'skype','skype:asdf'),(6,'qq','516421629'),(7,'home_intro_img_01',NULL),(8,'home_intro_img_02',NULL),(9,'home_intro_img_03',NULL),(10,'news_01',NULL),(11,'news_02',NULL),(12,'news_03','我明天去天上人间'),(13,'news_04','我今天回家了'),(14,'news_05','阿斯多夫'),(15,'sadf','asdf'),(16,'gen_order_title','Order result'),(17,'gen_order_success','Order success!\r\nwe will contact with you in 24 hours.'),(18,'step_cart','/upload/85361fbb21d886718bb3e4e88c9fa45e.jpg'),(19,'home_intro_01','/upload/3843007a7f19e2eadb9f8d9ab0cdac88.png'),(20,'home_intro_02','/upload/dec51f3c7927900b5229f05fd8d6f7b9.png'),(21,'home_intro_03','/upload/362ac36d346c12b7b5949502a7d180de.png'),(22,'home_ad','/upload/c415ed98540d978996eed39921c7d76f.png'),(23,'contact_qq','516421629|348118794'),(24,'contact_email','tisa007@163.com|brilliantwang@126.com'),(25,'contact_msn','tisa@live.cn'),(26,'side_rate','1RMB=1000$'),(27,'site_name','charmbuy\'s demo'),(28,'contact_skype','tisa@skype.cn');
/*!40000 ALTER TABLE `strings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-07-06  8:12:56
