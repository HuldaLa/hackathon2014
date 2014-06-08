-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: hackathon2k14
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.14.04.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='Zeiteinheiten';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Buch'),(2,'Serie'),(3,'Staffel'),(4,'Kapitel'),(5,'Episode'),(6,'Level'),(7,'Rollenspiel');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `characters`
--

DROP TABLE IF EXISTS `characters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `characters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='Protagonisten';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `characters`
--

LOCK TABLES `characters` WRITE;
/*!40000 ALTER TABLE `characters` DISABLE KEYS */;
INSERT INTO `characters` VALUES (1,'Don Draper'),(2,'Malfurion Sturmgrimm'),(3,'Harry Potter'),(4,'Peggy Olson');
/*!40000 ALTER TABLE `characters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `characters_events`
--

DROP TABLE IF EXISTS `characters_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `characters_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `character_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Beziehung zwischen Protagonisten und Ereignissen';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `characters_events`
--

LOCK TABLES `characters_events` WRITE;
/*!40000 ALTER TABLE `characters_events` DISABLE KEYS */;
INSERT INTO `characters_events` VALUES (1,1,2),(2,4,2),(3,2,1);
/*!40000 ALTER TABLE `characters_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `characters_universes`
--

DROP TABLE IF EXISTS `characters_universes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `characters_universes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `character_id` int(11) DEFAULT NULL,
  `univers_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Beziehungen zwischen Orte und characteren';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `characters_universes`
--

LOCK TABLES `characters_universes` WRITE;
/*!40000 ALTER TABLE `characters_universes` DISABLE KEYS */;
/*!40000 ALTER TABLE `characters_universes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Ereignisse';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'Schlacht WoW',NULL),(2,'Beförderung','');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `places`
--

DROP TABLE IF EXISTS `places`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `places` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='Orte';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `places`
--

LOCK TABLES `places` WRITE;
/*!40000 ALTER TABLE `places` DISABLE KEYS */;
INSERT INTO `places` VALUES (1,'Mittelerde'),(2,'Hogwards'),(3,'New York City'),(4,'Californien');
/*!40000 ALTER TABLE `places` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `places_events`
--

DROP TABLE IF EXISTS `places_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `places_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Beziehung zwischen Orten und Ereignissen';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `places_events`
--

LOCK TABLES `places_events` WRITE;
/*!40000 ALTER TABLE `places_events` DISABLE KEYS */;
INSERT INTO `places_events` VALUES (1,3,2);
/*!40000 ALTER TABLE `places_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `places_universes`
--

DROP TABLE IF EXISTS `places_universes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `places_universes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place_id` int(11) DEFAULT NULL,
  `universe_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Beziehung zwischen Orte und Universen';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `places_universes`
--

LOCK TABLES `places_universes` WRITE;
/*!40000 ALTER TABLE `places_universes` DISABLE KEYS */;
/*!40000 ALTER TABLE `places_universes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `universes`
--

DROP TABLE IF EXISTS `universes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `universes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Ereignisse';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `universes`
--

LOCK TABLES `universes` WRITE;
/*!40000 ALTER TABLE `universes` DISABLE KEYS */;
INSERT INTO `universes` VALUES (1,'Harry Potter Univers',''),(2,'Mad Men',''),(3,'World of Warcraft',NULL);
/*!40000 ALTER TABLE `universes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `universes_categories`
--

DROP TABLE IF EXISTS `universes_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `universes_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `univers_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Konfiguration von Universen zur Zeiteinteilung';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `universes_categories`
--

LOCK TABLES `universes_categories` WRITE;
/*!40000 ALTER TABLE `universes_categories` DISABLE KEYS */;
INSERT INTO `universes_categories` VALUES (1,1,1),(2,2,2),(3,3,6);
/*!40000 ALTER TABLE `universes_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `universes_categories_events`
--

DROP TABLE IF EXISTS `universes_categories_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `universes_categories_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `univers_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Zurdnung von Events zu Kategorien';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `universes_categories_events`
--

LOCK TABLES `universes_categories_events` WRITE;
/*!40000 ALTER TABLE `universes_categories_events` DISABLE KEYS */;
INSERT INTO `universes_categories_events` VALUES (1,2,3,2);
/*!40000 ALTER TABLE `universes_categories_events` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-08  3:30:17
