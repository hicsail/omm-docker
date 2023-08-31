-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: creditcard
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `confidence1`
--

DROP TABLE IF EXISTS `confidence1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `confidence1` (
  `subid` varchar(15) NOT NULL,
  `confidence` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `confidence1`
--

LOCK TABLES `confidence1` WRITE;
/*!40000 ALTER TABLE `confidence1` DISABLE KEYS */;
INSERT INTO `confidence1` VALUES ('e',10),('e',10),('e',8),('e',1),('Test',1),('Test',8),('Test',6),('Test',7);
/*!40000 ALTER TABLE `confidence1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `confidence2`
--

DROP TABLE IF EXISTS `confidence2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `confidence2` (
  `subid` varchar(15) NOT NULL,
  `confidence` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `confidence2`
--

LOCK TABLES `confidence2` WRITE;
/*!40000 ALTER TABLE `confidence2` DISABLE KEYS */;
INSERT INTO `confidence2` VALUES ('Test',4);
/*!40000 ALTER TABLE `confidence2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `confidence3`
--

DROP TABLE IF EXISTS `confidence3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `confidence3` (
  `subid` varchar(15) NOT NULL,
  `confidence` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `confidence3`
--

LOCK TABLES `confidence3` WRITE;
/*!40000 ALTER TABLE `confidence3` DISABLE KEYS */;
INSERT INTO `confidence3` VALUES ('Test',5);
/*!40000 ALTER TABLE `confidence3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `confidence4`
--

DROP TABLE IF EXISTS `confidence4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `confidence4` (
  `subid` varchar(15) NOT NULL,
  `confidence` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `confidence4`
--

LOCK TABLES `confidence4` WRITE;
/*!40000 ALTER TABLE `confidence4` DISABLE KEYS */;
INSERT INTO `confidence4` VALUES ('Test',7);
/*!40000 ALTER TABLE `confidence4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `confidence5`
--

DROP TABLE IF EXISTS `confidence5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `confidence5` (
  `subid` varchar(15) NOT NULL,
  `confidence` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `confidence5`
--

LOCK TABLES `confidence5` WRITE;
/*!40000 ALTER TABLE `confidence5` DISABLE KEYS */;
INSERT INTO `confidence5` VALUES ('Test',7);
/*!40000 ALTER TABLE `confidence5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `confidence6`
--

DROP TABLE IF EXISTS `confidence6`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `confidence6` (
  `subid` varchar(15) NOT NULL,
  `confidence` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `confidence6`
--

LOCK TABLES `confidence6` WRITE;
/*!40000 ALTER TABLE `confidence6` DISABLE KEYS */;
INSERT INTO `confidence6` VALUES ('Test',3);
/*!40000 ALTER TABLE `confidence6` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logintask`
--

DROP TABLE IF EXISTS `logintask`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logintask` (
  `subid` varchar(15) NOT NULL,
  `clicks` int(4) NOT NULL,
  `time` varchar(15) NOT NULL,
  `response` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logintask`
--

LOCK TABLES `logintask` WRITE;
/*!40000 ALTER TABLE `logintask` DISABLE KEYS */;
INSERT INTO `logintask` VALUES ('tesd',1,'00:00:10','Forgot username/password'),('tesd',1,'00:00:09','Login'),('Test',1,'00:00:08','Login');
/*!40000 ALTER TABLE `logintask` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question1`
--

DROP TABLE IF EXISTS `question1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question1` (
  `subid` varchar(15) NOT NULL,
  `clicks` int(4) NOT NULL,
  `time` varchar(10) NOT NULL,
  `response` varchar(250) NOT NULL,
  `right_ans` int(2) NOT NULL,
  `wrong_ans` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question1`
--

LOCK TABLES `question1` WRITE;
/*!40000 ALTER TABLE `question1` DISABLE KEYS */;
INSERT INTO `question1` VALUES ('Test',1,'00:00:07','10/09/2018',1,0),('Test',2,'00:00:13','Minimum Payment Due $83.72',0,1),('Test',3,'00:00:13','Minimum Payment Due $83.72',0,1),('Test',4,'00:00:15','10/09/2018',1,0);
/*!40000 ALTER TABLE `question1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question2`
--

DROP TABLE IF EXISTS `question2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question2` (
  `subid` varchar(15) NOT NULL,
  `clicks` int(4) NOT NULL,
  `time` varchar(10) NOT NULL,
  `response` varchar(250) NOT NULL,
  `right_ans` int(2) NOT NULL,
  `wrong_ans` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question2`
--

LOCK TABLES `question2` WRITE;
/*!40000 ALTER TABLE `question2` DISABLE KEYS */;
INSERT INTO `question2` VALUES ('Test',1,'00:00:13','Payment Due Date 10/09/2018',0,1);
/*!40000 ALTER TABLE `question2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question3`
--

DROP TABLE IF EXISTS `question3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question3` (
  `subid` varchar(15) NOT NULL,
  `clicks` int(4) NOT NULL,
  `time` varchar(10) NOT NULL,
  `response` varchar(250) NOT NULL,
  `right_ans` int(2) NOT NULL,
  `wrong_ans` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question3`
--

LOCK TABLES `question3` WRITE;
/*!40000 ALTER TABLE `question3` DISABLE KEYS */;
INSERT INTO `question3` VALUES ('Test',1,'00:00:03','Help',0,1),('Test',2,'00:00:10','Aug 5 Aug 6 FIVESTAR COFFEE STORE 073959 New York City NY 4.13',0,1),('Test',3,'00:00:17','Total Interest for this Period 49.51',0,1),('Test',4,'00:00:18','Total Interest for this Period 49.51',0,1),('Test',5,'00:00:19','Total Fees Charged in 2019 $30.00',0,1);
/*!40000 ALTER TABLE `question3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question4`
--

DROP TABLE IF EXISTS `question4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question4` (
  `subid` varchar(15) NOT NULL,
  `clicks` int(4) NOT NULL,
  `time` varchar(10) NOT NULL,
  `response` varchar(250) NOT NULL,
  `right_ans` int(2) NOT NULL,
  `wrong_ans` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question4`
--

LOCK TABLES `question4` WRITE;
/*!40000 ALTER TABLE `question4` DISABLE KEYS */;
INSERT INTO `question4` VALUES ('Test',1,'00:00:04','Help',0,1),('Test',2,'00:00:14','Aug 15 Aug 15 ONLINE AMAZON.COM MZN.COM/BILL NY 14.13 P5D9LL0DF04',0,1),('Test',3,'00:00:29','24.99%',0,1);
/*!40000 ALTER TABLE `question4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question5`
--

DROP TABLE IF EXISTS `question5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question5` (
  `subid` varchar(15) NOT NULL,
  `clicks` int(4) NOT NULL,
  `time` varchar(10) NOT NULL,
  `response` varchar(250) NOT NULL,
  `right_ans` int(2) NOT NULL,
  `wrong_ans` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question5`
--

LOCK TABLES `question5` WRITE;
/*!40000 ALTER TABLE `question5` DISABLE KEYS */;
INSERT INTO `question5` VALUES ('Test',1,'00:00:12','Charge',0,1),('Test',2,'00:00:13','Interest',0,1),('Test',3,'00:00:14','$49.51',0,1),('Test',4,'00:00:14','$0.00',0,1);
/*!40000 ALTER TABLE `question5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question6`
--

DROP TABLE IF EXISTS `question6`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question6` (
  `subid` varchar(15) NOT NULL,
  `clicks` int(4) NOT NULL,
  `time` varchar(10) NOT NULL,
  `response` varchar(250) NOT NULL,
  `right_ans` int(2) NOT NULL,
  `wrong_ans` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question6`
--

LOCK TABLES `question6` WRITE;
/*!40000 ALTER TABLE `question6` DISABLE KEYS */;
INSERT INTO `question6` VALUES ('Test',1,'00:00:13','Rate (APR)',0,1),('Test',2,'00:00:14','Percentage',0,1),('Test',3,'00:00:15','Annual',0,1),('Test',4,'00:00:16','16.99%',0,1),('Test',5,'00:00:17','24.99%',0,1);
/*!40000 ALTER TABLE `question6` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question7`
--

DROP TABLE IF EXISTS `question7`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question7` (
  `subid` varchar(15) NOT NULL,
  `clicks` int(4) NOT NULL,
  `time` varchar(10) NOT NULL,
  `response` varchar(250) NOT NULL,
  `right_ans` int(2) NOT NULL,
  `wrong_ans` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question7`
--

LOCK TABLES `question7` WRITE;
/*!40000 ALTER TABLE `question7` DISABLE KEYS */;
INSERT INTO `question7` VALUES ('Test',1,'00:00:05','Payment Due Date: 10/09/2018',0,1),('Test',2,'00:00:16','Help',0,1),('Test',3,'00:00:18','Help',0,1),('Test',4,'00:00:28','08/16/2018',1,0),('Test',5,'00:00:30','08/16/2018',1,0);
/*!40000 ALTER TABLE `question7` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registration` (
  `userid` varchar(15) NOT NULL,
  `subid` varchar(15) NOT NULL,
  `sessionid` int(15) NOT NULL,
  `formid` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `datetime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registration`
--

LOCK TABLES `registration` WRITE;
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
INSERT INTO `registration` VALUES ('e','e',0,'12345','05/30/1989','2022-09-15 02:22:48.000000'),('tet','tesd',0,'12345','05/30/1989','2022-09-15 02:23:50.000000'),('SAIL','Test',1,'A','09/15/2022','2022-09-15 16:06:58.000000'),('test','Test',1,'A','07/21/2023','2023-07-21 13:04:16.000000'),('1','11',11,'1','11/11/11','2023-07-31 11:58:10.000000');
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statement_download`
--

DROP TABLE IF EXISTS `statement_download`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statement_download` (
  `subid` varchar(15) NOT NULL,
  `clicks` int(4) NOT NULL,
  `time` varchar(10) NOT NULL,
  `response` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statement_download`
--

LOCK TABLES `statement_download` WRITE;
/*!40000 ALTER TABLE `statement_download` DISABLE KEYS */;
INSERT INTO `statement_download` VALUES ('tesd',1,'00:00:07','August 2018 View'),('tesd',1,'00:00:02','August 2019 View'),('tesd',1,'00:00:01','August 2019 Download'),('tesd',1,'00:00:03','August 2018 Download'),('tesd',2,'00:00:16','August 2018 View'),('Test',1,'00:00:09','December 2018 View'),('Test',1,'00:00:02','Help'),('Test',2,'00:00:06','August 2019 View'),('Test',1,'00:00:03','August 2018 Download');
/*!40000 ALTER TABLE `statement_download` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sum_trans_eliminate`
--

DROP TABLE IF EXISTS `sum_trans_eliminate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sum_trans_eliminate` (
  `subid` varchar(15) NOT NULL,
  `response` varchar(250) NOT NULL,
  `count` int(3) NOT NULL,
  `answer` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sum_trans_eliminate`
--

LOCK TABLES `sum_trans_eliminate` WRITE;
/*!40000 ALTER TABLE `sum_trans_eliminate` DISABLE KEYS */;
/*!40000 ALTER TABLE `sum_trans_eliminate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `summary_transaction`
--

DROP TABLE IF EXISTS `summary_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `summary_transaction` (
  `subid` varchar(15) NOT NULL,
  `response` varchar(250) NOT NULL,
  `count` int(3) NOT NULL,
  `answer` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `summary_transaction`
--

LOCK TABLES `summary_transaction` WRITE;
/*!40000 ALTER TABLE `summary_transaction` DISABLE KEYS */;
INSERT INTO `summary_transaction` VALUES ('Test','Help',1,0),('Test','Pat Miller',1,0),('Test','Sep 1 Sep 1 MOTTS HAIRCUTS 9507030021 BROOKLYN NY 3.97',1,1),('Test','Sep 5 Sep 5 BAKE AND EAT NEW YORK NY 90.85',1,0);
/*!40000 ALTER TABLE `summary_transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `summarypage`
--

DROP TABLE IF EXISTS `summarypage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `summarypage` (
  `subid` varchar(15) NOT NULL,
  `clicks` int(4) NOT NULL,
  `time` varchar(10) NOT NULL,
  `response` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `summarypage`
--

LOCK TABLES `summarypage` WRITE;
/*!40000 ALTER TABLE `summarypage` DISABLE KEYS */;
INSERT INTO `summarypage` VALUES ('tesd',1,'00:00:05','Statements'),('Test',1,'00:00:05','Statements');
/*!40000 ALTER TABLE `summarypage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaction_task`
--

DROP TABLE IF EXISTS `transaction_task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaction_task` (
  `subid` varchar(15) NOT NULL,
  `clicks` int(4) NOT NULL,
  `time` varchar(10) NOT NULL,
  `response` varchar(250) NOT NULL,
  `answer` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction_task`
--

LOCK TABLES `transaction_task` WRITE;
/*!40000 ALTER TABLE `transaction_task` DISABLE KEYS */;
INSERT INTO `transaction_task` VALUES ('Test',1,'00:00:04','Pat Miller',0),('Test',2,'00:00:23','Sep 1 Sep 1 MOTTS HAIRCUTS 9507030021 BROOKLYN NY 3.97',1),('Test',3,'00:00:25','Sep 5 Sep 5 BAKE AND EAT NEW YORK NY 90.85',0),('Test',4,'00:00:35','Help',0);
/*!40000 ALTER TABLE `transaction_task` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-31 13:33:44
