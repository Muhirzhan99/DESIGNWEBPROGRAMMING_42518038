-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: form
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB

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
-- Table structure for table `biodata`
--

DROP TABLE IF EXISTS `biodata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `biodata` (
  `id_biodata` int(11) NOT NULL AUTO_INCREMENT,
  `namadepan` varchar(100) DEFAULT NULL,
  `namabelakang` varchar(100) DEFAULT NULL,
  `namapanggilan` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `asalnegara` varchar(100) DEFAULT NULL,
  `tempatlahir` varchar(100) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jeniskelamin` varchar(15) DEFAULT NULL,
  `hobi` varchar(100) DEFAULT NULL,
  `nomortelpon` varchar(13) DEFAULT NULL,
  `datamasuk` datetime DEFAULT NULL,
  PRIMARY KEY (`id_biodata`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `biodata`
--

LOCK TABLES `biodata` WRITE;
/*!40000 ALTER TABLE `biodata` DISABLE KEYS */;
INSERT INTO `biodata` VALUES (8,'M.Irzhan','Syah Imran','Irzhan','irzhanaveiro@gmail.com','Jalan Sultan Alauddin No.56','Indonesia','Makassar','1999-12-02','Laki-Laki','Sepak Bola','081354765737','2020-04-11 16:05:33'),(9,'Tubagus','Candra','Bagus','Bagus@gmail.com','Jalan Kita','Indonesia','Solo','1997-10-21','Laki-Laki','Basket','082347648593','2020-04-11 16:22:07'),(10,'Zaenal','Haq','Haq','Zaenal@gmail.com','Jalan Sutarya','Malaysia','Kucing','1996-03-25','Laki-Laki','Gulat dan Tinju','082347648593','2020-04-11 16:23:39'),(15,'Dul','Jaelani','Dul','Dul@gmail.com','Jalan Kirana','Indonesia','Jakarta','1998-05-05','Laki-Laki','Main gitar','081245367283','2020-04-11 23:14:41'),(16,'Leo','Guntara','Guntara','Leo@gmail.com','Jalan Mekar','Indonesia','Padang','1989-07-15','Laki-Laki','Sepak Bola','324467','2020-04-11 23:29:13'),(17,'Nina','Sumarni','Arni','Nina@gmail.com','Jalan Mawar','Indonesia','Bantaeng','1993-11-09','Perempuan','Memasak','087833452122','2020-04-11 23:30:18');
/*!40000 ALTER TABLE `biodata` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-11 23:40:31
