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
-- Table structure for table `they_buy`
--

DROP TABLE IF EXISTS `they_buy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `they_buy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  `img` varchar(1024) DEFAULT NULL,
  `img_2` varchar(1024) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `shop_name` varchar(45) DEFAULT NULL,
  `shop_url` varchar(45) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `they_buy`
--

LOCK TABLES `they_buy` WRITE;
/*!40000 ALTER TABLE `they_buy` DISABLE KEYS */;
INSERT INTO `they_buy` VALUES (13,'异域风情花开朵朵比基尼套装 粉红','http://item.vancl.com/0055773.html','/upload/39e5c43e05077193c83ce76b825e10a0.jpg',NULL,99,NULL,NULL,NULL),(12,'青春活力沙滩比基尼套装 宝石蓝','http://item.vancl.com/0055749.html','/upload/186ae5cd27b81636ac5597a4b5f0c4df.jpg',NULL,79,NULL,NULL,NULL),(11,'Colourful性感缤纷比基尼 亮色彩条','http://item.vancl.com/0086883.html','/upload/5aea8a1ce1379af3e45fd608ec744bbf.jpg',NULL,89,NULL,NULL,NULL),(14,'Colourful花朵裙式分体泳衣 粉色印花','http://item.vancl.com/0126941.html','/upload/5f1ff0e6f1ed93dac4c09a15088e4e26.jpg',NULL,149,NULL,NULL,NULL),(15,'军旅风刺绣肩章T恤 米黄色','http://item.vancl.com/0102452.html','/upload/4b17972cb07c4a626e3beb0b692d14f3.jpg',NULL,69,NULL,NULL,NULL),(16,'路伊梵Lulifama2011春夏新款健美服单件上衣7222','http://www.360buy.com/product/1000311877.html','/upload/d5b8b3e9bc8971aa90a975b00e71a121.jpg',NULL,65,NULL,NULL,NULL),(17,'三蒂东子2011春夏新款运动健身瑜伽服上衣1013T休闲服 运动装含胸垫','http://www.360buy.com/product/1000280040.html','/upload/a433e5051604c16b671500760cb6c0ad.jpg',NULL,65,NULL,NULL,NULL),(18,'梵歌纳 春夏新款瑜伽服上衣 舞蹈服 健身服 瑜珈服','http://www.360buy.com/product/1000531066.html','/upload/e9dba1fc543e23494de5ceb56b567fd0.jpg',NULL,138,NULL,NULL,NULL);
/*!40000 ALTER TABLE `they_buy` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-07-06  8:12:48
