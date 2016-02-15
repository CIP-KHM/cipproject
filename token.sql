-- MySQL dump 10.13  Distrib 5.7.10, for osx10.11 (x86_64)
--
-- Host: localhost    Database: token
-- ------------------------------------------------------
-- Server version       5.7.10

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
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `name` varchar(8) NOT NULL DEFAULT '',
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES ('',' karthick',''),('0530621f','okk','f005c373e6'),('083e688b',NULL,'ac0f0ae9a5'),('1a0b6768','karthick','33406975c9'),('1b902147','rkarthick@gmail.com','e17064af93'),('1bcb4246',NULL,'84b2fe2464'),('25ba3eac',NULL,'5a4bd8fc0b'),('25dd5520',NULL,'8e0d6ba4dd'),('2d1abf5b','okokkk',''),('30a7b176','rkar','7f79a5ed27'),('4155ed8c','first','f33c405d48'),('4636d96e','ok','1f5470ac94'),('4ce3dfe9','okk','87bba7e0fd'),('5190b94c',NULL,'ed1bf7422f'),('55d60c25','fine','52dec68cc1'),('5c12a4c1','sd@gm.com','bb9ffeff82'),('6da2c4af','firsttt',''),('6e4b7fca','karthickR','f57520bfdf'),('6e72d143','karthi@gmail.com','b43c5e5641'),('7040455b','kar','c331e1babe'),('7950dd18',NULL,'9cb7f52854'),('7fbc1792','kk@gm.com','3ad7e93624'),('802d7085','sample','12490e7b4e'),('83045979',NULL,'6fa3c809f9'),('a2b9ae54',NULL,'8a7c525ad2'),('b2a0d901','kkakdjak@gm.com','fe7d1b0a54'),('b42a1d41','mohan','f734b061ac'),('bb010f5a','ka@g.com','4d05c6c48b'),('bc54c0f3','pranesh','8e783a7e62'),('bdd5c956','khm','fbe0058ff0'),('bf3961ef','ok','184496a3e4'),('bf58c361',NULL,'bc9fedaec3'),('bfa22c09',NULL,'4ce8f3a203'),('c35b0c64','kae@ggg.com','37764ea726'),('c5d953be','harish','127358c0e2'),('c9d13e85','kkkk','0e2bf9a615'),('d464c205','hellooo',''),('de67952c','harish','bfe74752b4'),('e2ea36d7','okkkk','55234ff196'),('e806673c',NULL,'a982ff0e68'),('e97f0e00','hello',''),('eb094196',NULL,'73427dde9c'),('ec8fced9','ok','d3d28e8e5f'),('ef296f25','karthi@gm.com','d73a58792f'),('f22ae793','sam','1dd20890a8'),('fdcde2de','hmmm','0da11c079b');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menucard`
--

DROP TABLE IF EXISTS `menucard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menucard` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `food` varchar(20) DEFAULT NULL,
  `time` int(5) DEFAULT NULL,
  `choice` int(2) DEFAULT '1',
  `cost` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menucard`
--

LOCK TABLES `menucard` WRITE;
/*!40000 ALTER TABLE `menucard` DISABLE KEYS */;
INSERT INTO `menucard` VALUES (1,'Idly',5,1,10),(2,'Dhosai',10,1,20),(3,'Pongal',5,1,20),(4,'Vadai',5,0,5);
/*!40000 ALTER TABLE `menucard` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-15 14:57:46
