-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: scoping_calculator
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

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
-- Table structure for table `fields`
--

DROP TABLE IF EXISTS `fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fields` (
  `id` char(36) NOT NULL,
  `slide` char(36) NOT NULL,
  `title` varchar(100) NOT NULL,
  `handle` varchar(45) DEFAULT NULL,
  `parent_handle` varchar(45) NOT NULL,
  `position` int(11) DEFAULT NULL,
  `tab_order` int(11) DEFAULT NULL,
  `default_val` int(11) NOT NULL DEFAULT '0',
  `weight` char(36) NOT NULL,
  `required` int(11) NOT NULL DEFAULT '1',
  `function` varchar(100) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fields`
--

LOCK TABLES `fields` WRITE;
/*!40000 ALTER TABLE `fields` DISABLE KEYS */;
INSERT INTO `fields` VALUES ('184f2f22-ff97-11e6-ab9a-000c294bfeac','89aff350-031d-11e7-bf94-000c294bfeac','Domain Users','domain_users','users',1,19,1,'NA',1,'NA',1),('1c3a5eec-ff88-11e6-ab9a-000c294bfeac','bdd87916-ff82-11e6-ab9a-000c294bfeac','Email Server / Exchange Server','mx_servers','servers',2,2,0,'c95ef76c-ff81-11e6-ab9a-000c294bfeac',0,'2 + ( total_users - non_dom_users ) / weight',1),('33f355d7-ff88-11e6-ab9a-000c294bfeac','bdd87916-ff82-11e6-ab9a-000c294bfeac','File Server','file_servers','servers',3,3,0,'c95ef76c-ff81-11e6-ab9a-000c294bfeac',0,'2 + ( total_users - non_dom_users ) / weight',1),('3ce234ba-ff91-11e6-ab9a-000c294bfeac','d3a6b843-ff82-11e6-ab9a-000c294bfeac','Network Firewalls','firewalls','network_devices',1,9,1,'c95ef76c-ff81-11e6-ab9a-000c294bfeac',1,'4 + ( grand_total_devices / 4 ) + ( total_users / weight)',1),('423789a2-ff93-11e6-ab9a-000c294bfeac','d3a6b843-ff82-11e6-ab9a-000c294bfeac','Network Access Control','access_control','network_devices',5,13,0,'c95ef76c-ff81-11e6-ab9a-000c294bfeac',0,'10 + ( total_devices + total_servers ) / weight',1),('47caf5c1-ff88-11e6-ab9a-000c294bfeac','bdd87916-ff82-11e6-ab9a-000c294bfeac','Application Server','application_servers','servers',4,4,0,'c95ef76c-ff81-11e6-ab9a-000c294bfeac',0,'2 + ( total_users - non_dom_users ) / weight',1),('5ff2f6e5-ff88-11e6-ab9a-000c294bfeac','bdd87916-ff82-11e6-ab9a-000c294bfeac','Database Server / MSSQL - MySQL - Oracle','db_servers','servers',5,5,0,'d38bf0d5-ff81-11e6-ab9a-000c294bfeac',0,'2 + ( total_users - non_dom_users ) / weight',1),('608892f7-ff9b-11e6-ab9a-000c294bfeac','fdeab64f-ff82-11e6-ab9a-000c294bfeac','Total Locations with Direct Internet Access','locations','network_data',1,24,1,'NA',1,'NA',1),('6812ac85-ff97-11e6-ab9a-000c294bfeac','89aff350-031d-11e7-bf94-000c294bfeac','External Users / VPN','external_users','users',2,20,0,'NA',0,'NA',1),('6a3b536f-ff9b-11e6-ab9a-000c294bfeac','fdeab64f-ff82-11e6-ab9a-000c294bfeac','Bandwidth in MBPS','bandwidth','network_data',2,25,0,'NA',0,'NA',1),('6bf861b5-05c2-11e7-bf94-000c294bfeac','d6e92d53-05c1-11e7-bf94-000c294bfeac','Virtual or Physical Appliance(s)','virtual_or_physical','misc',5,31,1,'NA',1,'NA',1),('6ef0850c-ff92-11e6-ab9a-000c294bfeac','d3a6b843-ff82-11e6-ab9a-000c294bfeac','Network AntiSpam / Proxy','antispam','network_devices',4,12,0,'c95ef76c-ff81-11e6-ab9a-000c294bfeac',0,'5 + ( grand_total_devices + total_users ) / weight',1),('72fae02a-ff94-11e6-ab9a-000c294bfeac','d3a6b843-ff82-11e6-ab9a-000c294bfeac','NAS - Storage','nas','network_devices',10,18,0,'a9fecf99-ff81-11e6-ab9a-000c294bfeac',0,'5 + ( total_servers / weight )',1),('7b733284-ff93-11e6-ab9a-000c294bfeac','d3a6b843-ff82-11e6-ab9a-000c294bfeac','Network Switches','switches','network_devices',6,14,0,'a9fecf99-ff81-11e6-ab9a-000c294bfeac',0,'1 + ( grand_total_devices / weight )',1),('7cc9c285-ff97-11e6-ab9a-000c294bfeac','89aff350-031d-11e7-bf94-000c294bfeac','Non-Domain Users / Guests','non_dom_users','users',3,21,0,'NA',0,'NA',1),('82537a5d-ff91-11e6-ab9a-000c294bfeac','d3a6b843-ff82-11e6-ab9a-000c294bfeac','Network IPS / IDS','nips_nids','network_devices',2,10,0,'de8d5350-ff81-11e6-ab9a-000c294bfeac',0,'4 + ( grand_total_devices / weight )',1),('83b1aee6-05c2-11e7-bf94-000c294bfeac','d6e92d53-05c1-11e7-bf94-000c294bfeac','Compression Ratio (n:1)','compression_ratio','misc',1,27,1,'NA',1,'NA',1),('86af1764-ff97-11e6-ab9a-000c294bfeac','e117073f-ff82-11e6-ab9a-000c294bfeac','Workstations / Laptop - Desktops','workstations','devices',1,22,1,'NA',1,'NA',1),('8af5ab33-ff97-11e6-ab9a-000c294bfeac','e117073f-ff82-11e6-ab9a-000c294bfeac','Other Network Devices','other_networked_machines','devices',2,23,0,'NA',0,'NA',1),('940bc11a-ff93-11e6-ab9a-000c294bfeac','d3a6b843-ff82-11e6-ab9a-000c294bfeac','Network Routers','routers','network_devices',7,15,0,'a9fecf99-ff81-11e6-ab9a-000c294bfeac',0,'1 + ( grand_total_devices / weight )',1),('949a0ae3-05c2-11e7-bf94-000c294bfeac','d6e92d53-05c1-11e7-bf94-000c294bfeac','Usage Pattern','usage_pattern','misc',6,32,1,'NA',1,'NA',1),('9f48b8d5-ff93-11e6-ab9a-000c294bfeac','d3a6b843-ff82-11e6-ab9a-000c294bfeac','Network Load Balancers','load_balancers','network_devices',8,16,0,'a9fecf99-ff81-11e6-ab9a-000c294bfeac',0,'10 + ( grand_total_devices / weight )',1),('a1c6edef-ff8e-11e6-ab9a-000c294bfeac','bdd87916-ff82-11e6-ab9a-000c294bfeac','Endpoint Protection Server','endpoint_protection','servers',7,7,0,'a9fecf99-ff81-11e6-ab9a-000c294bfeac',0,'1 + ( total_devices + total_users - non_dom_users ) / weight',1),('a4de8370-05c2-11e7-bf94-000c294bfeac','d6e92d53-05c1-11e7-bf94-000c294bfeac','Standard Loggers','standard_loggers','misc',3,29,1,'NA',1,'NA',1),('ac280e27-ff9b-11e6-ab9a-000c294bfeac','fdeab64f-ff82-11e6-ab9a-000c294bfeac','Subset of above that are small branch offices','small_branches','network_data',3,26,0,'NA',0,'NA',1),('b5fdb255-05c2-11e7-bf94-000c294bfeac','d6e92d53-05c1-11e7-bf94-000c294bfeac','Average Message Size (in KB)','avg_msg_size','misc',2,28,1,'NA',1,'NA',1),('b943f9f6-ff8e-11e6-ab9a-000c294bfeac','bdd87916-ff82-11e6-ab9a-000c294bfeac','Mail Archiver','mail_archiver','servers',8,8,0,'c95ef76c-ff81-11e6-ab9a-000c294bfeac',0,'2 + ( total_users - non_dom_users ) / weight',1),('bc8dccb1-05c2-11e7-bf94-000c294bfeac','d6e92d53-05c1-11e7-bf94-000c294bfeac','Other EPS','other_eps','misc',4,30,1,'NA',1,'NA',1),('bdcd6387-ff93-11e6-ab9a-000c294bfeac','d3a6b843-ff82-11e6-ab9a-000c294bfeac','Network Web Filters','web_filters','network_devices',9,17,0,'c95ef76c-ff81-11e6-ab9a-000c294bfeac',0,'5 + ( grand_total_devices / weight )',1),('bf7ee665-ff87-11e6-ab9a-000c294bfeac','bdd87916-ff82-11e6-ab9a-000c294bfeac','Domain Controller / LDAP - AD','domain_controller','servers',1,1,1,'d38bf0d5-ff81-11e6-ab9a-000c294bfeac',1,'2 + ( total_users - non_dom_users ) / weight',1),('d0ea67e7-ff91-11e6-ab9a-000c294bfeac','d3a6b843-ff82-11e6-ab9a-000c294bfeac','Network VPN','vpns','network_devices',3,11,0,'de8d5350-ff81-11e6-ab9a-000c294bfeac',0,'5 + ( external_users / weight )',1),('d8cec26f-ff88-11e6-ab9a-000c294bfeac','bdd87916-ff82-11e6-ab9a-000c294bfeac','Web Server / IIS - Apache','web_servers','servers',6,6,0,'c95ef76c-ff81-11e6-ab9a-000c294bfeac',0,'2 + ( total_users  / weight )',1);
/*!40000 ALTER TABLE `fields` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-28  0:52:36
