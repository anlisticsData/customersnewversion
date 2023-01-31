-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: anlcustomers
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tokens` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `tokenlocal` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `limit` int unsigned DEFAULT NULL,
  `timestrtotime` double DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tokens`
--

LOCK TABLES `tokens` WRITE;
/*!40000 ALTER TABLE `tokens` DISABLE KEYS */;
INSERT INTO `tokens` VALUES (1,'Application','eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJcL3Zhclwvd3d3XC9odG1sIiwiaXAiOiI6OjEiLCJuYW1lIjoiQXBwbGljYXRpb24iLCJ1dWlkIjoiNjNkNzhhZGRhNGRjMCJ9.jdSpcI6ALuW+3I7CUhc9gAbN1SVrNR2MZ2YJH2mzQig=',9999,999999999999,'2023-01-30 06:16:13','2023-01-30 06:18:04'),(2,'Application','eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJcL3Zhclwvd3d3XC9odG1sIiwiaXAiOiI6OjEiLCJuYW1lIjoiQXBwbGljYXRpb24iLCJ1dWlkIjoiNjNkNzhiNTE0ODA2MCJ9.i2BUfojf+q+q+ZN541j6TwwHz5zu8QD1TGBy47cfuP8=',9999,999999999999,'2023-01-30 06:18:09','2023-01-30 06:19:02'),(3,'Application','eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJcL3Zhclwvd3d3XC9odG1sIiwiaXAiOiI6OjEiLCJuYW1lIjoiQXBwbGljYXRpb24iLCJ1dWlkIjoiNjNkNzhiOGFkNzBiNCJ9.aDPdY+UeuJIN9tVxz8QRWW1+TJBVN9DdovLHk/Dtuv0=',9999,999999999999,'2023-01-30 06:19:06','2023-01-30 06:20:54'),(4,'Application','eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJcL3Zhclwvd3d3XC9odG1sIiwiaXAiOiI6OjEiLCJuYW1lIjoiQXBwbGljYXRpb24iLCJ1dWlkIjoiNjNkNzhjMGYwZmQ0MSJ9.SidqDIGWOSyIx5IvpFDQUWUL/dJtKr3bySk4HVnCNOk=',9999,999999999999,'2023-01-30 06:21:19','2023-01-30 06:21:22'),(5,'Application','eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJcL3Zhclwvd3d3XC9odG1sIiwiaXAiOiI6OjEiLCJuYW1lIjoiQXBwbGljYXRpb24iLCJ1dWlkIjoiNjNkNzhmMGI2NmVjMSJ9.gqEXVm1CaBp/dQ+RWp1Gdl9HT7fdwbUP05tAEf0Jac4=',9999,999999999999,'2023-01-30 06:34:03','2023-01-30 06:34:54'),(6,'Application','eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJcL3Zhclwvd3d3XC9odG1sIiwiaXAiOiI6OjEiLCJuYW1lIjoiQXBwbGljYXRpb24iLCJ1dWlkIjoiNjNkNzhmNDE4ZjM5NCJ9.ZNuoGLALFRH2Lz+Hxak4jnuEY7IHqyCn0ITJM+HbrL8=',9999,999999999999,'2023-01-30 06:34:57','2023-01-30 06:38:23'),(7,'Application','eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJcL3Zhclwvd3d3XC9odG1sIiwiaXAiOiI6OjEiLCJuYW1lIjoiQXBwbGljYXRpb24iLCJ1dWlkIjoiNjNkNzkzNzIxOTVjOCJ9.jhDqLEkBWaQV30DMtY6loeCRvsHpbmlvo0hLU0dkbKE=',9999,999999999999,'2023-01-30 06:52:50','2023-01-30 06:52:53'),(8,'Application','eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJcL3Zhclwvd3d3XC9odG1sIiwiaXAiOiI6OjEiLCJuYW1lIjoiQXBwbGljYXRpb24iLCJ1dWlkIjoiNjNkNzk2OTVkNDI2MCJ9.TDT8iQ7naCBw+CWtEOrCxMWl+VTvjXxTKJ7L29Qi35Y=',9999,999999999999,'2023-01-30 07:06:13','2023-01-30 07:06:17'),(9,'Application','eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJcL3Zhclwvd3d3XC9odG1sIiwiaXAiOiI6OjEiLCJuYW1lIjoiQXBwbGljYXRpb24iLCJ1dWlkIjoiNjNkOGQ4MjFlNTg3NiJ9.JDK04M91JZ+yf3l40VQgI7alWQCusvEbANEWE25ak6A=',9999,999999999999,'2023-01-31 05:58:09','2023-01-31 05:58:14'),(10,'Application','eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJcL3Zhclwvd3d3XC9odG1sIiwiaXAiOiI6OjEiLCJuYW1lIjoiQXBwbGljYXRpb24iLCJ1dWlkIjoiNjNkOGQ4MmFiMjVkOCJ9.2ZvO8xsgF60lZJ7ohMqYULMR8vsenapwaEo6etS9eQw=',60,1675152078,'2023-01-31 05:58:18','2023-01-31 05:58:18');
/*!40000 ALTER TABLE `tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uploads`
--

DROP TABLE IF EXISTS `uploads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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

-- Dump completed on 2023-01-31  6:06:32
