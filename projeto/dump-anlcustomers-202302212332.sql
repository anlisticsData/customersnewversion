-- MariaDB dump 10.19  Distrib 10.6.5-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: anlcustomers
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `area_sensors`
--

DROP TABLE IF EXISTS `area_sensors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `area_sensors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `area_id` int DEFAULT NULL,
  `floor_id` int DEFAULT NULL,
  `hallway_size` double DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL,
  `reader_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `area_sensors_FK` (`area_id`),
  KEY `area_sensors_FK_1` (`floor_id`),
  KEY `area_sensors_FK_2` (`reader_id`),
  CONSTRAINT `area_sensors_FK` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`),
  CONSTRAINT `area_sensors_FK_1` FOREIGN KEY (`floor_id`) REFERENCES `floors` (`id`),
  CONSTRAINT `area_sensors_FK_2` FOREIGN KEY (`reader_id`) REFERENCES `cut_readers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area_sensors`
--

LOCK TABLES `area_sensors` WRITE;
/*!40000 ALTER TABLE `area_sensors` DISABLE KEYS */;
/*!40000 ALTER TABLE `area_sensors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `areas`
--

DROP TABLE IF EXISTS `areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `disc_code` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL,
  `description_floor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areas`
--

LOCK TABLES `areas` WRITE;
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cut_readers`
--

DROP TABLE IF EXISTS `cut_readers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cut_readers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `type` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cut_readers`
--

LOCK TABLES `cut_readers` WRITE;
/*!40000 ALTER TABLE `cut_readers` DISABLE KEYS */;
/*!40000 ALTER TABLE `cut_readers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `floors`
--

DROP TABLE IF EXISTS `floors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `floors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `floor_map` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `floors`
--

LOCK TABLES `floors` WRITE;
/*!40000 ALTER TABLE `floors` DISABLE KEYS */;
/*!40000 ALTER TABLE `floors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general_readers`
--

DROP TABLE IF EXISTS `general_readers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `general_readers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `description` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `type` int DEFAULT NULL,
  `disc_code` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general_readers`
--

LOCK TABLES `general_readers` WRITE;
/*!40000 ALTER TABLE `general_readers` DISABLE KEYS */;
/*!40000 ALTER TABLE `general_readers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history_general_readers`
--

DROP TABLE IF EXISTS `history_general_readers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history_general_readers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `general_readers_id` int DEFAULT NULL,
  `general_readers` varchar(250) DEFAULT NULL,
  `processed` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `processed_datetime` datetime DEFAULT NULL,
  `reader_response` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `history_general_readers_FK` (`general_readers_id`),
  CONSTRAINT `history_general_readers_FK` FOREIGN KEY (`general_readers_id`) REFERENCES `general_readers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history_general_readers`
--

LOCK TABLES `history_general_readers` WRITE;
/*!40000 ALTER TABLE `history_general_readers` DISABLE KEYS */;
/*!40000 ALTER TABLE `history_general_readers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history_of_movements`
--

DROP TABLE IF EXISTS `history_of_movements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history_of_movements` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `area_sensor_id` int DEFAULT NULL,
  `processed` tinyint(1) DEFAULT NULL,
  `processed_datetime` datetime DEFAULT NULL,
  `reader_response` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `history_of_movements_FK` (`area_sensor_id`),
  CONSTRAINT `history_of_movements_FK` FOREIGN KEY (`area_sensor_id`) REFERENCES `area_sensors` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history_of_movements`
--

LOCK TABLES `history_of_movements` WRITE;
/*!40000 ALTER TABLE `history_of_movements` DISABLE KEYS */;
/*!40000 ALTER TABLE `history_of_movements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moviment_general_readers`
--

DROP TABLE IF EXISTS `moviment_general_readers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moviment_general_readers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `general_reader_id` int DEFAULT NULL,
  `movements_reader_id` int DEFAULT NULL,
  `read` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `moviment_general_readers_FK` (`movements_reader_id`),
  KEY `moviment_general_readers_FK_1` (`general_reader_id`),
  CONSTRAINT `moviment_general_readers_FK` FOREIGN KEY (`movements_reader_id`) REFERENCES `history_of_movements` (`id`),
  CONSTRAINT `moviment_general_readers_FK_1` FOREIGN KEY (`general_reader_id`) REFERENCES `history_general_readers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moviment_general_readers`
--

LOCK TABLES `moviment_general_readers` WRITE;
/*!40000 ALTER TABLE `moviment_general_readers` DISABLE KEYS */;
/*!40000 ALTER TABLE `moviment_general_readers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `setting` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_base`
--

DROP TABLE IF EXISTS `tb_base`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_base` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_base`
--

LOCK TABLES `tb_base` WRITE;
/*!40000 ALTER TABLE `tb_base` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_base` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tokens`
--

DROP TABLE IF EXISTS `tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tokens` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `userID` int DEFAULT NULL,
  `tokenlocal` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tokenremoto` text,
  `limit` int DEFAULT NULL,
  `timestrtotime` varchar(60) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tokens`
--

LOCK TABLES `tokens` WRITE;
/*!40000 ALTER TABLE `tokens` DISABLE KEYS */;
INSERT INTO `tokens` VALUES (95,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2VhZmE0NjZiMzcxIn0=.YSVvzFbtkSNFo8tPeoH44N33aGxvFWQeRlMTfMiwdw4=',NULL,9999,'999999999999','2023-02-14 00:04:38','2023-02-14 03:04:54'),(96,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2VhZmRjMjJjNjRmIn0=.ctY+MsYHUk4LSEMcjDhredjwlroPaXrE0Tsu6INv520=',NULL,60,'1676343750','2023-02-14 00:19:30','2023-02-14 03:19:30'),(97,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2VhZmRkMmJhZTJlIn0=.rTF6Rv1Mi51WkV1vcR4l+oYhznLxEFKQOqsMS+qkTAY=',NULL,60,'1676343773','2023-02-14 00:19:46','2023-02-14 03:19:53'),(98,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2VhZmRlYjJmODc4In0=.KHyBNRvgW/bI0ZLoHIKG4KS4ubxgG0l+knhSnb6+vGI=',NULL,60,'1676343731','2023-02-14 00:20:11','2023-02-14 03:20:11'),(99,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2VhZmUyNmNhNTlhIn0=.Q9uDxQ1rIijSRwvrVH3aFiAHRYoGeBOBzhf1YUtbwxs=',NULL,9999,'1676343738','2023-02-14 00:21:10','2023-02-14 03:21:11'),(100,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2YyMzZlY2NiZTczIn0=.g5QGkB1JtM1N9lbuySebZ/0sRIRBsG/I0GXPER1EBro=',NULL,60,'1676815375','2023-02-19 11:49:16','2023-02-19 11:56:55'),(101,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2YyM2IwNjM0OTVlIn0=.5tbUGJn3t3no0+MtJewIocT58gx3cho0tQQ4Z+HEVxk=',NULL,60,'1676818944','2023-02-19 12:06:46','2023-02-19 12:59:24'),(102,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2YyNDdhOWJjZmY0In0=.coThqYS5A6XMDG9vD/vOJyHp5BdCuXRVRxMLxl+/QxI=',NULL,9999,'1676822546','2023-02-19 13:00:41','2023-02-19 13:35:26'),(103,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2YyNGZkMDc0ZjBhIn0=.y3GxJasWjCq8wknKwkxwBmOTmQI/Z2DwGOLqZVetfx8=',NULL,60,'1676822552','2023-02-19 13:35:28','2023-02-19 13:35:32'),(104,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2YyNGZlODdjNzkxIn0=.G0+Yxae5AsI/ZqGnll7vFm/WvhLIDHUNFEba3+EMIAI=',NULL,60,'1676822562','2023-02-19 13:35:52','2023-02-19 13:36:42'),(105,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2YyNmMyZWFjZmY1In0=.9vjl9vyZkd4I2QJuX4jxNATRAp+1WdReSmKKvtvBY0w=',NULL,60,'1676829765','2023-02-19 15:36:30','2023-02-19 15:36:45'),(106,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2YyNmQxMmM4ODJkIn0=.1Ye/NAxieC/lHIvZiMPJuu2R+FqMDt+9hpunDznaEeM=',NULL,60,'1676829722','2023-02-19 15:40:18','2023-02-19 15:48:02'),(107,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2YyNzViNWVlZjE1In0=.+SsfTtDOCbHZHuSjoOYv2cKZaKoQLpwWhLXBddhlnJ4=',NULL,60,'1676833352','2023-02-19 16:17:10','2023-02-19 16:57:32'),(108,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2YyODAwZThlNjZmIn0=.TuphC1FMlETMj6qD9Hkpve2PSzGaWOj0pcEPd1WQbiw=',NULL,60,'1676836966','2023-02-19 17:01:18','2023-02-19 17:56:46'),(109,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2YyOGRkNWNjZTRkIn0=.HMBBzBePPolm+tT6HF9UmkrYsWc68jcMvaIwF+e7e+A=',NULL,60,'1676840528','2023-02-19 18:00:05','2023-02-19 18:07:08'),(110,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y0ZDljNDAxNWQ1In0=.xx2gUOrFlAVRdTMDSTpA1bNDjjKX2RlE+UrQFuWRFSQ=',NULL,60,'1676988171','2023-02-21 11:48:36','2023-02-21 11:51:51'),(111,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y0ZGQxZjBlNmI2In0=.crWITX0Ii27U93V2sUShsbQvmhki8OwarZhPGsUMzQo=',NULL,60,'1676991720','2023-02-21 12:02:55','2023-02-21 12:03:00'),(112,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y0ZjVkNzdlY2VjIn0=.srZUm9i3hUqQU7P5UJu+cdsnH5gKEUq2ECGU44geFnM=',NULL,60,'1676995372','2023-02-21 13:48:23','2023-02-21 13:51:52'),(113,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y1MDM2YzMzMmMzIn0=.0/ogmt9kk2OKxC53mXLRLNEW4u5APS25ZnEaELyOur0=',NULL,60,'1676998943','2023-02-21 14:46:20','2023-02-21 14:59:23'),(114,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y1MDZmMTM2YzQ3In0=.NW9a5E/4p4NIwkw0FecOYZUDyFl0PuGWOw2w+vRoGDQ=',NULL,9999,'1677002556','2023-02-21 15:01:21','2023-02-21 15:29:36'),(115,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y1MGQ5MmI5NTgxIn0=.7iBWbfv+GSnDvJWBfl70zl3t/U/1dSYlJPU/PtmwGLU=',NULL,60,'1677002564','2023-02-21 15:29:38','2023-02-21 15:50:44'),(116,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y1MTIyZDIxNzYxIn0=.eGm6aC2vmrmJzcTpDU0sj+ievxBjrHVjxRfLVAmZJB4=',NULL,60,'1677002571','2023-02-21 15:49:17','2023-02-21 15:49:51'),(117,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y1MjQ0ZDQzYTFkIn0=.QqRY9P0YLpEPpUNVzKeF0MVW1TuPaIfVBrUnkz8CWwE=',NULL,9999,'1677009775','2023-02-21 17:06:37','2023-02-21 17:39:55'),(118,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y1MmMxYzhlZTMxIn0=.HeGq/eiQk1NLok+gocK6RX0DHTKlf/tMihlheYRoma4=',NULL,60,'1677009722','2023-02-21 17:39:56','2023-02-21 17:59:02'),(119,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y1MzBkNTg4MDBmIn0=.rR19fzpBj3vQGX1ztHDe8DMECkwxwIeXKJoCC7RJD+w=',NULL,9999,'1677013329','2023-02-21 18:00:05','2023-02-21 18:29:09'),(120,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y1MzdhNjg2ZTExIn0=.tIi8wYFAjqhQY65Hqsr/rJKliCC0QqDot7EejKGBKPc=',NULL,9999,'1677013341','2023-02-21 18:29:10','2023-02-21 18:51:21'),(121,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y1M2NlYTRjN2NmIn0=.lneUSusRegBpL+g9EWdeU+yRxVJOWUlEmUrTh3d+jLo=',NULL,60,'1677013341','2023-02-21 18:51:38','2023-02-21 18:58:21'),(122,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y1M2QwMWYwZTg0In0=.qNPrRwA9DED9eQZSfASfmvHSN+s9WzRCyl+cWVuA6WM=',NULL,60,'1677013343','2023-02-21 18:52:01','2023-02-21 18:59:23'),(123,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y1M2VlNWRiZDliIn0=.+jsgrICdmSORJtrWIlhsz+rDFcNXRzuYT7aXiGLr3es=',NULL,60,'1677016976','2023-02-21 19:00:05','2023-02-21 19:58:56'),(124,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y1M2Y1ZjgxODEwIn0=.Gld3+JWlLrr/I6oxYIFGQ+uo7+UM3MzkpWw2N0DsDPo=',NULL,60,'1677016961','2023-02-21 19:02:07','2023-02-21 19:05:41'),(125,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y1NTg5ZGNkZGE3In0=.dTD5LB+pZMdZBEA3n61+9S2QQBz3F4ZcSDgfzDUkhLI=',NULL,60,'1677020569','2023-02-21 20:49:49','2023-02-21 20:56:49'),(126,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y1NWI3ODNmOWQxIn0=.HywvkOnLmSNZlbDcoUJI+gHgE7sbzOVXFuCmyYQBeEM=',NULL,60,'1677024123','2023-02-21 21:02:00','2023-02-21 21:02:03'),(127,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2Y1NzQ1NmEwMDdhIn0=.qEkvWb8llJYfJUuizyoNAzmXm77QisJcP+dD83mIfAw=',NULL,60,'1677027727','2023-02-21 22:48:06','2023-02-21 22:54:07');
/*!40000 ALTER TABLE `tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_sensors`
--

DROP TABLE IF EXISTS `type_sensors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type_sensors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(100) DEFAULT NULL,
  `type` varchar(1) DEFAULT NULL,
  `observation` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_sensors`
--

LOCK TABLES `type_sensors` WRITE;
/*!40000 ALTER TABLE `type_sensors` DISABLE KEYS */;
INSERT INTO `type_sensors` VALUES (11,'Sensor de Corte Analogico','G','Sensor de Corte Analogico                               ','2023-02-21 19:28:46'),(12,'  Sensor de Corte Analogico 11','U','                    dasd                                                                            ','2023-02-21 19:39:21'),(13,'  Sensor de Corte Analogico 12','U',' \r\nSensor de Corte Analogico\r\n11','2023-02-21 19:40:05'),(14,'Sensor de Corte Analogico 2','G','                       Sensor de Corte Analogico\r\n                                                                         ','2023-02-21 19:58:56');
/*!40000 ALTER TABLE `type_sensors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uploads`
--

DROP TABLE IF EXISTS `uploads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uploads` (
  `id` int NOT NULL AUTO_INCREMENT,
  `disc_code` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `original_name` varchar(100) DEFAULT NULL,
  `path` varchar(200) DEFAULT NULL,
  `file_type` varchar(10) DEFAULT NULL,
  `extension` varchar(10) DEFAULT NULL,
  `uuid` varchar(250) DEFAULT NULL,
  `state` bigint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uploads`
--

LOCK TABLES `uploads` WRITE;
/*!40000 ALTER TABLE `uploads` DISABLE KEYS */;
/*!40000 ALTER TABLE `uploads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'anlcustomers'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-21 23:32:34
