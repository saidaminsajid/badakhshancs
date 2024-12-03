-- MySQL dump 10.13  Distrib 5.1.51, for Win32 (ia32)
--
-- Host: localhost    Database: badakhshancs
-- ------------------------------------------------------
-- Server version	5.1.51-community

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `lastname` varchar(60) DEFAULT NULL,
  `username` varchar(90) DEFAULT NULL,
  `firstpassword` varchar(50) DEFAULT NULL,
  `secondpassword` varchar(50) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `level` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Sayedamin','Sajid','Sayedamin_Sajid','sajid','amin','Sayedamin-Sajid@gmail.com','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `advertise`
--

DROP TABLE IF EXISTS `advertise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `advertise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `lastname` varchar(70) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `class` varchar(60) DEFAULT NULL,
  `titleadvertise` text,
  `advertise` mediumtext,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `advertise`
--

LOCK TABLES `advertise` WRITE;
/*!40000 ALTER TABLE `advertise` DISABLE KEYS */;
INSERT INTO `advertise` VALUES (1,'Syedamin','Sajid','Sayedamin-Sajid@gmail.com','Fourth','Computer','Computer is a machen','2016-02-03');
/*!40000 ALTER TABLE `advertise` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email`
--

DROP TABLE IF EXISTS `email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `lastname` varchar(70) DEFAULT NULL,
  `username` varchar(90) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `country` varchar(70) DEFAULT NULL,
  `province` varchar(60) DEFAULT NULL,
  `destricte` varchar(70) DEFAULT NULL,
  `school` varchar(70) DEFAULT NULL,
  `university` varchar(70) DEFAULT NULL,
  `job` varchar(60) DEFAULT NULL,
  `marid` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email`
--

LOCK TABLES `email` WRITE;
/*!40000 ALTER TABLE `email` DISABLE KEYS */;
INSERT INTO `email` VALUES (1,'Sayedamin','Sajid','Sayedamin-Sajid','sajid','Afghanistan','Badakhshan','Wardooj','Wasiq Shahid','Computer Science of Badakhshan','Student','Single');
/*!40000 ALTER TABLE `email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offer`
--

DROP TABLE IF EXISTS `offer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(90) DEFAULT NULL,
  `address` varchar(90) NOT NULL,
  `titleoffer` text,
  `offer` mediumtext,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offer`
--

LOCK TABLES `offer` WRITE;
/*!40000 ALTER TABLE `offer` DISABLE KEYS */;
INSERT INTO `offer` VALUES (3,'Syedamin','Sajid',798452667,'Sayedamin-Sajid@gmail.com','Wardooj-Badakhshan','Good','Good','2016-02-02');
/*!40000 ALTER TABLE `offer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `lastname` varchar(70) DEFAULT NULL,
  `fathername` varchar(80) DEFAULT NULL,
  `grandfathername` varchar(80) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `username` varchar(90) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `province` varchar(80) DEFAULT NULL,
  `school` varchar(80) DEFAULT NULL,
  `numofconckur` float DEFAULT NULL,
  `department` varchar(70) DEFAULT NULL,
  `numofpassport` int(11) DEFAULT NULL,
  `yearin` float DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `information` mediumtext,
  `photo` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numofpassport` (`numofpassport`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (14578115,'Sayedamin','Sajid','Mohammad Alim','Karim','Sayedamin-Sajid@yahoo.com','Sayedamin_Sajid','sajid','Badakhshan','Wasiq Shahid',241,'IT',630345,1392,'1374-07-04','Sayedamin sajid is a student in the Computer science of faculty at badakhshan university','image/222.jpg');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-14  7:23:45
