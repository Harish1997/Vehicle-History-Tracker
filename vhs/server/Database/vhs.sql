-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: vhs
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

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
-- Table structure for table `authority`
--

DROP TABLE IF EXISTS `authority`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authority` (
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `organization_type` varchar(60) DEFAULT NULL,
  `organization_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authority`
--

LOCK TABLES `authority` WRITE;
/*!40000 ALTER TABLE `authority` DISABLE KEYS */;
INSERT INTO `authority` VALUES ('harishananth1997@gmail.com','hello',7338930973,'Harish','Ananth','Manufacturer','Maruti Suzuki'),('harishananth1998765437@gmail.com','hello',7338930973,'Harish','Ananth','Manufacturer','Maruti Suzuki'),('harishananth@gmail.com','hello',7338930973,'Harish','Ananth','Manufacturer','Maruti Suzuki'),('thiru122223@gmail.com','hello',7338930973,'Harish','Ananth','Manufacturer','Maruti Suzuki'),('thiru12@gmail.com','hello',7338930973,'Santhosh','Kumar','Manufacturer','Maruti Suzuki'),('thiru@gmail.com','hello',7338930973,'Harish','Ananth','Manufacturer','Maruti Suzuki');
/*!40000 ALTER TABLE `authority` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `criminal_case`
--

DROP TABLE IF EXISTS `criminal_case`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `criminal_case` (
  `case_id` int(11) NOT NULL,
  `case_date` date NOT NULL,
  `station_id` int(11) NOT NULL,
  `case_type` varchar(100) NOT NULL,
  `case_description` text NOT NULL,
  PRIMARY KEY (`case_id`),
  KEY `station_id` (`station_id`),
  CONSTRAINT `criminal_case_ibfk_1` FOREIGN KEY (`station_id`) REFERENCES `station` (`station_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `criminal_case`
--

LOCK TABLES `criminal_case` WRITE;
/*!40000 ALTER TABLE `criminal_case` DISABLE KEYS */;
/*!40000 ALTER TABLE `criminal_case` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `insurance_companies`
--

DROP TABLE IF EXISTS `insurance_companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `insurance_companies` (
  `ic_id` int(11) NOT NULL AUTO_INCREMENT,
  `ic_name` varchar(100) DEFAULT NULL,
  `naic_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `insurance_companies`
--

LOCK TABLES `insurance_companies` WRITE;
/*!40000 ALTER TABLE `insurance_companies` DISABLE KEYS */;
INSERT INTO `insurance_companies` VALUES (1,'Bajaj Alliance','I201'),(2,'National Insurance','I192'),(3,'ICICI Lombard','I194'),(4,'Bharati AXA','I199');
/*!40000 ALTER TABLE `insurance_companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(60) NOT NULL,
  `state` varchar(60) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `street` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,'India','Tamilnadu','Chennai','Shanti Colony',600010),(2,'India','Tamilnadu','Chennai','Shenoy nagar',600017),(3,'India','Tamilnadu','Chennai','T nagar',600017);
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manufacturer`
--

DROP TABLE IF EXISTS `manufacturer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manufacturer` (
  `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`manufacturer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manufacturer`
--

LOCK TABLES `manufacturer` WRITE;
/*!40000 ALTER TABLE `manufacturer` DISABLE KEYS */;
INSERT INTO `manufacturer` VALUES (1,'Maruti Suzuki'),(2,'Toyota'),(3,'Hyundai'),(4,'Ford'),(5,'BMW'),(6,'Mercedes Benz'),(7,'Honda'),(8,'Mahindra'),(9,'Tata'),(10,'Alfa Romeo'),(11,'Fiat'),(12,'Jeep'),(13,'Lexus'),(14,'Ferrari'),(15,'Lamborghini'),(16,'Aston Martin'),(17,'Porsche'),(18,'Bugatti'),(19,'Lancia'),(20,'Vauxhall'),(21,'Chrysler'),(22,'Nissan'),(23,'TVR');
/*!40000 ALTER TABLE `manufacturer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model` (
  `manufacturer_id` int(11) NOT NULL,
  `model_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `year_of_production` varchar(20) DEFAULT NULL,
  `displacement` int(11) DEFAULT NULL,
  `type` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`manufacturer_id`,`model_name`),
  CONSTRAINT `model_ibfk_1` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`manufacturer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model`
--

LOCK TABLES `model` WRITE;
/*!40000 ALTER TABLE `model` DISABLE KEYS */;
INSERT INTO `model` VALUES (1,'Celerio','2014-present',999,'hatchback'),(1,'Swift Type 1','2005-2011',1299,'hatchback'),(1,'Swift Type 2','2011-2016',1299,'hatchback'),(1,'Swift Type 3','2016-present',1299,'hatchback'),(1,'WagonR','2001',1064,'Hatchback'),(2,'Corolla','1988-present',2399,'sedan'),(3,'Santro Zip','1996-2004',1199,'hatchback');
/*!40000 ALTER TABLE `model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registration` (
  `registration_id` varchar(100) NOT NULL,
  `manufacturer_id` int(11) DEFAULT NULL,
  `model_name` varchar(100) DEFAULT NULL,
  `color` varchar(100) NOT NULL,
  `registration_date` date NOT NULL,
  `rto_id` int(11) NOT NULL,
  PRIMARY KEY (`registration_id`),
  KEY `manufacturer_id` (`manufacturer_id`),
  CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`manufacturer_id`) REFERENCES `model` (`manufacturer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registration`
--

LOCK TABLES `registration` WRITE;
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
INSERT INTO `registration` VALUES ('TN 10 AW 8201',1,'Swift Type 1','red','2009-01-09',94),('TN 12 RR 9999',2,'Corolla','silver','2004-01-01',96);
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_engineers`
--

DROP TABLE IF EXISTS `service_engineers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_engineers` (
  `ws_id` int(11) NOT NULL,
  `service_engineer_id` int(11) NOT NULL,
  `contact` bigint(20) NOT NULL,
  PRIMARY KEY (`ws_id`,`service_engineer_id`),
  CONSTRAINT `service_engineers_ibfk_1` FOREIGN KEY (`ws_id`) REFERENCES `service_station` (`ws_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_engineers`
--

LOCK TABLES `service_engineers` WRITE;
/*!40000 ALTER TABLE `service_engineers` DISABLE KEYS */;
/*!40000 ALTER TABLE `service_engineers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_station`
--

DROP TABLE IF EXISTS `service_station`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_station` (
  `ws_id` int(11) NOT NULL AUTO_INCREMENT,
  `ws_name` varchar(100) DEFAULT NULL,
  `manufacturer_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `manager_name` varchar(100) NOT NULL,
  `ws_contact` bigint(20) NOT NULL,
  PRIMARY KEY (`ws_id`),
  KEY `manufacturer_id` (`manufacturer_id`),
  KEY `location_id` (`location_id`),
  CONSTRAINT `service_station_ibfk_1` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`manufacturer_id`),
  CONSTRAINT `service_station_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_station`
--

LOCK TABLES `service_station` WRITE;
/*!40000 ALTER TABLE `service_station` DISABLE KEYS */;
/*!40000 ALTER TABLE `service_station` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `station`
--

DROP TABLE IF EXISTS `station`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `station` (
  `station_id` int(11) NOT NULL,
  `station_name` varchar(100) NOT NULL,
  `inspector_name` varchar(100) NOT NULL,
  `station_contact` bigint(20) NOT NULL,
  PRIMARY KEY (`station_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `station`
--

LOCK TABLES `station` WRITE;
/*!40000 ALTER TABLE `station` DISABLE KEYS */;
/*!40000 ALTER TABLE `station` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicle` (
  `vin` bigint(20) NOT NULL,
  `manufacturer_id` int(11) DEFAULT NULL,
  `year_of_mfg` int(11) NOT NULL,
  `model_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`vin`),
  KEY `manufacturer_id` (`manufacturer_id`,`model_name`),
  CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`manufacturer_id`, `model_name`) REFERENCES `model` (`manufacturer_id`, `model_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicle`
--

LOCK TABLES `vehicle` WRITE;
/*!40000 ALTER TABLE `vehicle` DISABLE KEYS */;
INSERT INTO `vehicle` VALUES (123,1,2009,'Swift Type 2','red'),(124,2,2004,'Corolla','silver'),(125,1,2012,'Swift Type 3','silver'),(126,3,2001,'Santro Zip','blue');
/*!40000 ALTER TABLE `vehicle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicle_claim`
--

DROP TABLE IF EXISTS `vehicle_claim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicle_claim` (
  `vin` bigint(20) NOT NULL,
  `insurance_id` bigint(20) NOT NULL,
  `claim_date` date NOT NULL,
  `claim_type` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `estimated_cost` bigint(20) NOT NULL,
  `claim_status` varchar(60) NOT NULL,
  PRIMARY KEY (`vin`,`insurance_id`),
  CONSTRAINT `vehicle_claim_ibfk_1` FOREIGN KEY (`vin`, `insurance_id`) REFERENCES `vehicle_insurance` (`vin`, `insurance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicle_claim`
--

LOCK TABLES `vehicle_claim` WRITE;
/*!40000 ALTER TABLE `vehicle_claim` DISABLE KEYS */;
INSERT INTO `vehicle_claim` VALUES (123,111222,'2018-01-01','Major accident','Extensive vehicle frame damage, complete body repair and repainting',300000,'accepted'),(124,111333,'2015-12-10','Flood Damage','Extensive flood damage in both interior as well as exterior',400000,'accepted with limit');
/*!40000 ALTER TABLE `vehicle_claim` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicle_criminal`
--

DROP TABLE IF EXISTS `vehicle_criminal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicle_criminal` (
  `vin` bigint(20) NOT NULL,
  `registration_id` varchar(100) DEFAULT NULL,
  `case_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`vin`),
  KEY `registration_id` (`registration_id`),
  KEY `case_id` (`case_id`),
  CONSTRAINT `vehicle_criminal_ibfk_1` FOREIGN KEY (`vin`) REFERENCES `vehicle` (`vin`),
  CONSTRAINT `vehicle_criminal_ibfk_2` FOREIGN KEY (`registration_id`) REFERENCES `registration` (`registration_id`),
  CONSTRAINT `vehicle_criminal_ibfk_3` FOREIGN KEY (`case_id`) REFERENCES `criminal_case` (`case_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicle_criminal`
--

LOCK TABLES `vehicle_criminal` WRITE;
/*!40000 ALTER TABLE `vehicle_criminal` DISABLE KEYS */;
/*!40000 ALTER TABLE `vehicle_criminal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicle_insurance`
--

DROP TABLE IF EXISTS `vehicle_insurance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicle_insurance` (
  `vin` bigint(20) NOT NULL,
  `registration_id` varchar(100) NOT NULL,
  `ic_id` int(11) DEFAULT NULL,
  `insurance_id` bigint(20) NOT NULL,
  `insurance_type` varchar(100) NOT NULL,
  `validity` date NOT NULL,
  PRIMARY KEY (`vin`,`insurance_id`),
  KEY `ic_id` (`ic_id`),
  KEY `registration_id` (`registration_id`),
  CONSTRAINT `vehicle_insurance_ibfk_1` FOREIGN KEY (`vin`) REFERENCES `vehicle` (`vin`),
  CONSTRAINT `vehicle_insurance_ibfk_2` FOREIGN KEY (`ic_id`) REFERENCES `insurance_companies` (`ic_id`),
  CONSTRAINT `vehicle_insurance_ibfk_3` FOREIGN KEY (`registration_id`) REFERENCES `registration` (`registration_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicle_insurance`
--

LOCK TABLES `vehicle_insurance` WRITE;
/*!40000 ALTER TABLE `vehicle_insurance` DISABLE KEYS */;
INSERT INTO `vehicle_insurance` VALUES (123,'TN 10 AW 8201',1,111222,'comprehensive','2020-01-01'),(124,'TN 12 RR 9999',2,111333,'third party','2019-01-20');
/*!40000 ALTER TABLE `vehicle_insurance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicle_service`
--

DROP TABLE IF EXISTS `vehicle_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicle_service` (
  `vin` bigint(20) NOT NULL,
  `registration_id` varchar(100) DEFAULT NULL,
  `service_date` date NOT NULL,
  `ws_id` int(11) DEFAULT NULL,
  `service_id` int(11) NOT NULL,
  `service_description` text NOT NULL,
  `service_engineer_id` int(11) NOT NULL,
  PRIMARY KEY (`vin`),
  KEY `registration_id` (`registration_id`),
  KEY `ws_id` (`ws_id`),
  CONSTRAINT `vehicle_service_ibfk_1` FOREIGN KEY (`vin`) REFERENCES `vehicle` (`vin`),
  CONSTRAINT `vehicle_service_ibfk_2` FOREIGN KEY (`registration_id`) REFERENCES `registration` (`registration_id`),
  CONSTRAINT `vehicle_service_ibfk_3` FOREIGN KEY (`ws_id`) REFERENCES `service_station` (`ws_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicle_service`
--

LOCK TABLES `vehicle_service` WRITE;
/*!40000 ALTER TABLE `vehicle_service` DISABLE KEYS */;
/*!40000 ALTER TABLE `vehicle_service` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-25 13:02:29
