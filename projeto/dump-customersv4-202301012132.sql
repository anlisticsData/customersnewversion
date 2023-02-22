-- MariaDB dump 10.19  Distrib 10.6.5-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: customersv4
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
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tokens`
--

LOCK TABLES `tokens` WRITE;
/*!40000 ALTER TABLE `tokens` DISABLE KEYS */;
INSERT INTO `tokens` VALUES (33,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2FmNjQ0OWYwNzQ1In0=.xhK2608J7gDtlpF8QjW6EILW7rDy/R9nZTvOLIP+p+s=',NULL,60,'1672438332','2022-12-30 22:20:57','2022-12-30 22:31:12'),(34,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2FmNjZkY2IzYmYxIn0=.0yAmY109TOixN9gRNA0BYbORQgCpITTOg7yrc078rDs=',NULL,60,'1672438348','2022-12-30 22:31:56','2022-12-30 22:59:28'),(35,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2FmNmQ4MGU5NTBjIn0=.eXASdLUbN/FPEqqy8kAUlUOXgvvk7/wShwMZfo2qu2o=',NULL,60,'1672441966','2022-12-30 23:00:16','2022-12-30 23:59:46'),(36,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2FmN2JhYjQzMTI3In0=.JRpHB1yWEGil0EyPqgnI58Jaq1Bog3XlMnkq7lwKQgI=',NULL,60,'1672445574','2022-12-31 00:00:43','2022-12-31 00:57:54'),(37,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2FmOGEyYTJjNWQxIn0=.uBWbq0ZB1sl4bSkz/Qrnuhw2ah0oQI115DAebZJn7kg=',NULL,60,'1672449170','2022-12-31 01:02:34','2022-12-31 01:59:50'),(38,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2FmOTdiZTM0NzU0In0=.0XfkKFIAmt4sE9ga6rOwaoaq4VvJQDyuPALXm3Qqvy4=',NULL,60,'1672452772','2022-12-31 02:00:30','2022-12-31 02:00:52'),(39,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2FmYWRkMTMxOTFhIn0=.z7msRzkulESroVArsURpqQtKK2X7BbN10/EpFRyJvZU=',NULL,60,'1672456351','2022-12-31 03:34:41','2022-12-31 03:44:31'),(40,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IwNWFlYmQ4ZTNkIn0=.jE0u7tUsmPHhuGIamaBopwMnPcVppKfHyAfdjMzgILk=',NULL,60,'1672499523','2022-12-31 15:53:15','2022-12-31 15:57:03'),(41,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IwNWNjNzM4YWZkIn0=.rwrQML34NxGA9NTHs0lVFW4hFSTBQvOzoAJpIJQB1kU=',NULL,60,'1672503131','2022-12-31 16:01:11','2022-12-31 16:01:11'),(42,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxNDVlNjVmYWUwIn0=.YlMLWMsjsYknucX0RHws4Hk2JLdjd6msonWft+3HY8E=',NULL,9999,'999999999999','2023-01-01 08:35:50','2023-01-01 08:43:55'),(43,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxNDgwZTk2YmE5In0=.Oe1zCAulolKYRDkqRhWPolRf/x4XaHyl/+FZD2mSuVs=',NULL,9999,'999999999999','2023-01-01 08:45:02','2023-01-01 08:45:48'),(44,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxNDg1M2E4ZmFlIn0=.FOVwHvQu4YjrLmtsnyGBeCTNKgDPojlwQxP5eMMXKwI=',NULL,60,'1672560080','2023-01-01 08:46:11','2023-01-01 08:46:20'),(45,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxNDg2ZmE3NWY0In0=.Iu616Rh874OeN9KBy/E+/MiOJLkbOUKVxCsEdue2k28=',NULL,60,'1672560115','2023-01-01 08:46:39','2023-01-01 08:47:55'),(46,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxNGI5YmU4OGQ5In0=.YjUq77/CmlcOGx8bgkv7mGqydvoeai5ZvyagtqDfEHM=',NULL,9999,'999999999999','2023-01-01 09:00:11','2023-01-01 09:00:20'),(47,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxNGJjNTgxNjNkIn0=.Z3mllK1CY28zQTWdBeKGdWPIyWYwCFct3DpiEhcVfGs=',NULL,9999,'999999999999','2023-01-01 09:00:53','2023-01-01 09:00:57'),(48,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxNGJjZjUzNDc5In0=.IMZ3+4AV6oJBDFx5CPh+FspaiNjys3wqo3mcse4qY34=',NULL,9999,'999999999999','2023-01-01 09:01:03','2023-01-01 09:02:25'),(49,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxNzQyOTFlOWM3In0=.e+pahGKaj6SKRkiq+eTOAuq9LvcLGmwHSQTMViFKdLs=',NULL,9999,'999999999999','2023-01-01 11:53:13','2023-01-01 11:59:48'),(50,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxNzViOTY0MmFmIn0=.oFAekBPaNvORYN1vHAC89vhlVk68OVdCE5fwasYZv5o=',NULL,9999,'999999999999','2023-01-01 11:59:53','2023-01-01 12:00:37'),(51,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxNzY4NzE5YzRmIn0=.0uCX4ugN9VCRGSjIpgMa4We0nZq1bT3sFVxkIdhA368=',NULL,60,'1672574495','2023-01-01 12:03:19','2023-01-01 12:25:35'),(52,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxN2IzOTMyMDJjIn0=.zpa6y7VWil7m17FGJeChVC7g9zqQUty36mu4f5w9Jkk=',NULL,9999,'999999999999','2023-01-01 12:23:21','2023-01-01 12:28:47'),(53,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxN2M4MjIzNTE2In0=.nXD95HM+lNNdu6dZFd3K2U6e3cCzcBUdiq0/Tekn2qk=',NULL,9999,'999999999999','2023-01-01 12:28:50','2023-01-01 12:37:37'),(54,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxN2U5NDQ1OTNmIn0=.LYxZaQYnWrOeR+BN3glzbcy/abQkA/25ZR2UAE2JBm4=',NULL,9999,'999999999999','2023-01-01 12:37:40','2023-01-01 12:50:08'),(55,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxODE4MTVhMmZlIn0=.KTL1Bsk29zwj6lHzMUz/bNERGUsm9wUoNob13gmutq4=',NULL,60,'1672574469','2023-01-01 12:50:09','2023-01-01 12:50:09'),(56,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxODFiNzE0YzE5In0=.ErxevNfMpZvS3WX9YwIv23QD90j8H4Hi64xdxSMvV4k=',NULL,9999,'999999999999','2023-01-01 12:51:03','2023-01-01 12:52:56'),(57,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxODIyYTNiMjQyIn0=.UyGsUpa7BEqTzd3YPExI/LuT9JuYNUQN03y19yXQ5JY=',NULL,9999,'999999999999','2023-01-01 12:52:58','2023-01-01 12:58:33'),(58,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxODM3Yjg1ZDAyIn0=.gxOD5wTGT6vinuidNYA7IreOJ0vvvRxlmTBsiSdJ4Fg=',NULL,60,'1672574496','2023-01-01 12:58:35','2023-01-01 12:58:36'),(59,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxODc2NTUyNmFjIn0=.U4C8+GJXY0P7E38pW7G4HcHf09ReJuXKS0L8g4/Ua20=',NULL,9999,'999999999999','2023-01-01 13:15:17','2023-01-01 13:21:13'),(60,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxODhjYWVlOWJjIn0=.D09Tm+zqTneqFeJECcILEDjCKr7cTxh0VdcrQ/wK0qE=',NULL,9999,'999999999999','2023-01-01 13:21:14','2023-01-01 13:23:19'),(61,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxODk0ODc0NDAwIn0=.pplCMTM5C4i3QTEgYUB7JD0zXoLDocYbnmwjPMryr/A=',NULL,9999,'999999999999','2023-01-01 13:23:20','2023-01-01 13:38:52'),(62,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxOGNmOTVlYjZjIn0=.6Yyo3wJmvFyzzlYP8mBZ0W/tdw9qIn8YPazc2jMImBo=',NULL,60,'1672578071','2023-01-01 13:39:05','2023-01-01 13:56:11'),(63,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxOTIxNjI5NDVkIn0=.WnAi7UoG4zEU2/fDwLaHc1405plaRWt5m8ZCo0OB7ZA=',NULL,9999,'999999999999','2023-01-01 14:00:54','2023-01-01 14:04:16'),(64,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxOTJlZTcwMjA5In0=.5wTW+tVbkbTtqVdCTC4VNaIxGqRFVkCiyCtwkuYoeEw=',NULL,9999,'999999999999','2023-01-01 14:04:30','2023-01-01 14:05:38'),(65,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxOTMzNDc4NWQzIn0=.u1zmopffLFCX4K1RB/cNRPnAv6rcGp90KuXEtcCd/Uw=',NULL,9999,'999999999999','2023-01-01 14:05:40','2023-01-01 14:22:07'),(66,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxOTcxMTllM2MyIn0=.4F49NRUya2uB7DLLzC0dLDgt4BlyJLlv1GCagsgWx34=',NULL,9999,'999999999999','2023-01-01 14:22:09','2023-01-01 14:22:35'),(67,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxOTcyZDNlMTU5In0=.mVnY4hToPLD00MxrM6kDZrotvu9vZcrm50DPEOAvpaA=',NULL,9999,'999999999999','2023-01-01 14:22:37','2023-01-01 14:46:09'),(68,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxOWNiYTQ5ODJhIn0=.KytncYpq5tcsURx8BBqIt9ObeRyporeksZS55tA5P6M=',NULL,9999,'999999999999','2023-01-01 14:46:18','2023-01-01 14:46:25'),(69,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxOWNjOTM0Y2ViIn0=.jPzRx8WvirlXK60H1MSiriqX20xyycw/xC2jWBwypDw=',NULL,9999,'999999999999','2023-01-01 14:46:33','2023-01-01 14:46:48'),(70,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxOWNkYWMyOGY4In0=.aiWQiKHrkx476+QObwbfoGoGJ9Uhp+EXlY2VTx0ZVdw=',NULL,9999,'999999999999','2023-01-01 14:46:50','2023-01-01 14:47:03'),(71,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxOWNlYTE1MGY5In0=./PoWhTkgS0BeJfianaBvLANhKxKMv0SAsiMMEs4p4E8=',NULL,9999,'999999999999','2023-01-01 14:47:06','2023-01-01 14:47:10'),(72,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxOWNlZjkyY2YyIn0=.pYNRdPMIOmg48o9mNMkSgUzJEukl/riOzVJ67NXOQRI=',NULL,9999,'999999999999','2023-01-01 14:47:11','2023-01-01 14:48:19'),(73,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxOWQzNGRlYWFmIn0=.mF5TSCfu9FV47Pi6dMVFiq3M19db9bcbBmfnTD7GPw8=',NULL,60,'1672581679','2023-01-01 14:48:20','2023-01-01 14:57:19'),(74,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxYTAyN2FlZTNkIn0=.Zs/v+0bb+GzcwCRPv6iWtiDz0tuegTAOYWa30cFP2E8=',NULL,9999,'999999999999','2023-01-01 15:00:55','2023-01-01 15:01:20'),(75,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxYTA0MmE3OTU3In0=.VFF/lmBXa1EJkbd5KNIr1jFrzlXPmRl85P0ZNalP8fw=',NULL,60,'1672585283','2023-01-01 15:01:22','2023-01-01 15:01:23'),(76,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxZDQ2YmNiMWJkIn0=.2HBx+smO/yoGe8qIB+Him5cCQp24+zomOdsLfwNwnC4=',NULL,9999,'999999999999','2023-01-01 18:43:55','2023-01-01 18:44:49'),(77,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxZDRhMzhlMzk3In0=.mwOQQx5CRvLVLHDu4KlgtgrHoHImBFBIVs+sqwi6NQ4=',NULL,60,'1672596111','2023-01-01 18:44:51','2023-01-01 18:44:51'),(78,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxZGMzNmRhOTYwIn0=.WtqW3nrVg7vtAFsSedopQ0XHAKEafSeGVO2BQLZYUpE=',NULL,60,'1672599679','2023-01-01 19:17:10','2023-01-01 19:17:19'),(79,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IxZTYyYzg0OTk2In0=.VTkPle8yXIKvd7nU/CDWNiJl3c/N4S11zzfjf17MCTg=',NULL,60,'1672599701','2023-01-01 19:59:40','2023-01-01 19:59:41'),(80,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IyMDI4M2JiOTRiIn0=.s10BjkkMX3haX63Oz4ig9EE6bEDcj+Nwsf5KzXBOA/M=',NULL,9999,'999999999999','2023-01-01 22:00:35','2023-01-01 22:00:48'),(81,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IyMDI5YTFhZTE3In0=.RwdX4oqBUg6iGkYvVrLT/LzQCchMn4hx8srjrZrWCo8=',NULL,60,'1672610469','2023-01-01 22:00:58','2023-01-01 22:01:09'),(82,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IyMTg5ZTk1YzE4In0=.W/vSHg0smGA66H6bSudpwT/jNqdWkuqe2CR9RTtCl2w=',NULL,9999,'999999999999','2023-01-01 23:34:54','2023-01-02 00:22:48'),(83,'Application',NULL,'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJDOlwvd2FtcDY0XC93d3ciLCJpcCI6IjEyNy4wLjAuMSIsIm5hbWUiOiJBcHBsaWNhdGlvbiIsInV1aWQiOiI2M2IyMjNkYTdhOGIxIn0=.f5HXCxij0EMlPdS0jk016KFerfYZnPoDiS+i7AqzO3s=',NULL,60,'1672617710','2023-01-02 00:22:50','2023-01-02 00:22:50');
/*!40000 ALTER TABLE `tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'customersv4'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-01 21:32:52
