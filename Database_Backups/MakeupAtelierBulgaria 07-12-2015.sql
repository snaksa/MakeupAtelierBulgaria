-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: makeupatelier
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.8-MariaDB

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
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `gallery_main_image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `gallery_position` int(11) DEFAULT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,'2015ql','/images/portfolioImage3.jpg',1),(2,'2014','images/portfolioImage2.jpg',2),(3,'2013','images/portfolioImage1.jpg',3),(5,'nova galeriq','/images/portfolioImage2.jpg',4),(6,'2012','images/portfolioImage1.jpg',5),(7,'2011','/images/portfolioImage2.jpg',6),(8,'2010','/images/portfolioImage3.jpg',7),(9,'2009','images/portfolioImage1.jpg',8),(10,'2008','/images/portfolioImage3.jpg',9),(11,'2007','images/portfolioImage1.jpg',10);
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_images`
--

DROP TABLE IF EXISTS `gallery_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery_images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_main_gallery_id` int(11) DEFAULT NULL,
  `image_path` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_images`
--

LOCK TABLES `gallery_images` WRITE;
/*!40000 ALTER TABLE `gallery_images` DISABLE KEYS */;
INSERT INTO `gallery_images` VALUES (4,2,'images/testProduct5.jpg'),(5,2,'images/testProduct5.jpg'),(6,2,'images/testProduct5.jpg'),(7,3,'images/testProduct2.jpg'),(8,3,'images/testProduct2.jpg'),(9,3,'images/testProduct2.jpg'),(11,1,'images/szIrzU_wtf.png'),(12,1,'images/Umg5Wu_cover.jpg'),(14,1,'images/K1gmI0_Screenshot from 2015-10-23 17:04:43.png'),(15,1,'images/sj6g4f_cover.jpg'),(17,1,'images/YvjInf_main_image.png'),(18,1,'images/x34VPv_Screenshot from 2015-09-10 19:37:01.png'),(22,1,'images/YGm5sU_Screenshot from 2015-10-16 21:35:40.png'),(23,1,'images/RGcvf1_mab.jpg'),(24,1,'images/U0uFg1_cover2.jpg'),(27,1,'images/yPnCjL_12032395_1161809367182003_109803223_n.jpg'),(28,1,'images/J2BvJq_12064453_1169193079776965_546087327_n.jpg'),(29,1,'images/Pv56W7_12092755_1215278218537078_690768138_n.jpg'),(30,1,'images/I7LBdq_1377367_368271773355434_5731962570341091219_n.png'),(31,1,'images/FkizfW_6935770-free-desktop-backgrounds.jpg'),(32,1,'images/1KdFeV_12047409_1161809863848620_590043092_n.jpg');
/*!40000 ALTER TABLE `gallery_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `important_message`
--

DROP TABLE IF EXISTS `important_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `important_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(400) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `showMessage` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `important_message`
--

LOCK TABLES `important_message` WRITE;
/*!40000 ALTER TABLE `important_message` DISABLE KEYS */;
INSERT INTO `important_message` VALUES (1,'<p>n<strong>ovo suob<em>sh<span style=\"color:#FF0000\">ten</span></em><span style=\"color:#FF0000\">ie</span></strong></p>\r\n',1);
/*!40000 ALTER TABLE `important_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `index_products`
--

DROP TABLE IF EXISTS `index_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `index_products` (
  `index_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`index_product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `index_products`
--

LOCK TABLES `index_products` WRITE;
/*!40000 ALTER TABLE `index_products` DISABLE KEYS */;
INSERT INTO `index_products` VALUES (1,63),(2,2),(3,27),(4,45),(5,9),(6,12);
/*!40000 ALTER TABLE `index_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `most_popular_products`
--

DROP TABLE IF EXISTS `most_popular_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `most_popular_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_category_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `most_popular_products`
--

LOCK TABLES `most_popular_products` WRITE;
/*!40000 ALTER TABLE `most_popular_products` DISABLE KEYS */;
INSERT INTO `most_popular_products` VALUES (1,1,13),(2,1,40),(3,1,39),(4,2,14),(5,2,42),(6,2,43),(7,3,15),(8,3,45),(9,3,46),(10,4,16),(11,4,48),(12,4,49),(13,5,7),(14,5,21),(15,5,22),(16,6,8),(17,6,24),(18,6,25),(19,7,27),(20,7,28),(21,7,29),(22,8,9),(23,8,10),(24,8,30),(25,9,11),(26,9,33),(27,9,34),(28,10,12),(29,10,36),(30,10,37),(31,11,51),(32,11,52),(33,11,53),(34,12,18),(35,12,54),(36,12,55),(37,13,19),(38,13,57),(39,13,58),(40,14,20),(41,14,62),(42,14,61),(43,15,66),(44,16,67),(45,17,68);
/*!40000 ALTER TABLE `most_popular_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_text` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `news_image` varchar(200) DEFAULT NULL,
  `news_publish_date` date DEFAULT NULL,
  `news_author` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (3,'Novo Заглавие !!!','<p><strong>От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти.</strong> Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция!&nbsp;</p>\r\n','/images/0Ymmnu_12047409_1161809863848620_590043092_n.jpg','2015-10-13','Синан'),(4,'Novo Заглавие !!!','<p><strong>От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти.</strong> Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция!&nbsp;</p>\r\n','/images/uDpOPS_12071858_894358583952719_1821043707_n.jpg','2015-10-14','Синан'),(5,'Novo Заглавие !!!','<p><strong>От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти.</strong> Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция!&nbsp;</p>\r\n','/images/uDpOPS_12071858_894358583952719_1821043707_n.jpg','2015-10-11','Синан'),(6,'Novo Заглавие !!!','<p><strong>От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти.</strong> Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция!&nbsp;</p>\r\n','/images/uDpOPS_12071858_894358583952719_1821043707_n.jpg','2015-10-02','Синан'),(7,'Novo Заглавие !!!','<p><strong>От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти.</strong> Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция!&nbsp;</p>\r\n','/images/uDpOPS_12071858_894358583952719_1821043707_n.jpg','2015-10-21','Синан'),(8,'Novo Заглавие !!!','<p><strong>От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти.</strong> Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция! От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция!&nbsp;</p>\r\n','/images/uDpOPS_12071858_894358583952719_1821043707_n.jpg','2015-10-18','Синан');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_header_images`
--

DROP TABLE IF EXISTS `page_header_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_header_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(100) DEFAULT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_header_images`
--

LOCK TABLES `page_header_images` WRITE;
/*!40000 ALTER TABLE `page_header_images` DISABLE KEYS */;
INSERT INTO `page_header_images` VALUES (1,'products','images/productsCover.jpg');
/*!40000 ALTER TABLE `page_header_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_eng_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_categories`
--

LOCK TABLES `product_categories` WRITE;
/*!40000 ALTER TABLE `product_categories` DISABLE KEYS */;
INSERT INTO `product_categories` VALUES (1,'Очи','eyes'),(2,'Лице','face'),(3,'Устни','lips'),(4,'Четки','brushes'),(5,'Аксесоари','accessories'),(6,'Артистик','artistic');
/*!40000 ALTER TABLE `product_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_models`
--

DROP TABLE IF EXISTS `product_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_models` (
  `model_id` int(11) NOT NULL AUTO_INCREMENT,
  `model_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `model_image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`model_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_models`
--

LOCK TABLES `product_models` WRITE;
/*!40000 ALTER TABLE `product_models` DISABLE KEYS */;
INSERT INTO `product_models` VALUES (1,'001','images/testColor1.jpg',1),(2,'002','images/testColor2.jpg',1),(3,'003','images/testColor3.jpg',1),(4,'004','images/testColor4.jpg',1),(5,'005','images/testColor5.jpg',1),(10,'model1','/productModels/lsVXB7_12074556_1706934866203465_5470316295431626205_n.png',73),(11,'model2','/productModels/gKRbX7_12074556_1706934866203465_5470316295431626205_n.png',73),(12,'model3','/productModels/uuKpFp_12074556_1706934866203465_5470316295431626205_n.png',73),(13,'model1','/productModels/Jtfs39_12074556_1706934866203465_5470316295431626205_n.png',74),(14,'model2','/productModels/HylhjY_12074556_1706934866203465_5470316295431626205_n.png',74),(15,'model3','/productModels/j6vG8i_12074556_1706934866203465_5470316295431626205_n.png',74);
/*!40000 ALTER TABLE `product_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_sub_categories`
--

DROP TABLE IF EXISTS `product_sub_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_sub_categories` (
  `sub_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_category_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `main_category_id` int(11) DEFAULT NULL,
  `sub_category_eng_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sub_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_sub_categories`
--

LOCK TABLES `product_sub_categories` WRITE;
/*!40000 ALTER TABLE `product_sub_categories` DISABLE KEYS */;
INSERT INTO `product_sub_categories` VALUES (1,'Основи за грим',2,'primer'),(2,'Коректори',2,'concealer'),(3,'Фон дьо тен',2,'foundation'),(4,'Пудри',2,'powder'),(5,'Сенки',1,'eye_shadow'),(6,'Пигменти',1,'pigments'),(7,'Очни линии',1,'mascara'),(8,'Изкуствени мигли',1,'false_lashes'),(9,'Вежди',1,'eyebrows'),(10,'Моливи за очи',1,'eyeliners'),(11,'Червила',3,'lipstick'),(12,'Гланцове',3,'lip_gloss'),(13,'Дълготрайни червила',3,'lasting_lipstick'),(14,'Моливи за устни',3,'lip_liner'),(15,'Всички',4,'all_brushes'),(16,'Всички',5,'all_accessories'),(17,'Всички',6,'all_artistic');
/*!40000 ALTER TABLE `product_sub_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `product_main_category` int(11) DEFAULT NULL,
  `product_sub_category` int(11) DEFAULT NULL,
  `has_models` varchar(45) DEFAULT NULL,
  `product_date` datetime DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'ба дум тсс','images/testProduct3.jpg','bla bla bla bla bla',12.43,1,1,'0',NULL),(2,'Paco Rabanne Olymp?a Shower Gel 200ml','images/testProduct4.jpg','some_description2',92.12,1,1,'0',NULL),(3,'Paco Rabanne Olymp?a Shower Gel 200ml','images/testProduct5.jpg','some_description3',32.12,1,1,'0',NULL),(7,'Очи -> Сенки2jqGk8','images/testProduct3.jpg','bla bla bla',12.99,1,5,'0',NULL),(8,'Очи -> ПигментиKPFt6n','images/testProduct3.jpg','bla bla bla',12.99,1,6,'0',NULL),(9,'21Очи -> Очни линииpNAK7b','/images/7domdG_cover.jpg','<p>bla<strong> bla bla</strong></p>\r\n',12.22,1,8,'0',NULL),(10,'Очи -> Изкуствени мигли6NmV0c','images/testProduct3.jpg','bla bla bla',12.99,1,8,'0',NULL),(11,'Очи -> ВеждиUTanEr','images/testProduct3.jpg','bla bla bla',12.99,1,9,'0',NULL),(12,'Очи -> Моливи за очиtejzyV','images/testProduct3.jpg','bla bla bla',12.99,1,10,'0',NULL),(13,'Лице -> Основи за гримJRTAkk','/images/w2G925_10897120_369234386592506_7360406790409913202_n.png','<p>bla bla bla</p>\r\n',12.99,2,1,'0',NULL),(14,'Лице -> КоректориXIHjnw','images/testProduct3.jpg','bla bla bla',12.99,2,2,'0',NULL),(15,'Лице -> Фон дьо тенDeQ1FU','images/testProduct3.jpg','bla bla bla',12.99,2,3,'0',NULL),(16,'Лице -> Пудри9XCKDM','images/testProduct3.jpg','bla bla bla',12.99,2,4,'0',NULL),(17,'sdfsdf','images/testProduct3.jpg','<p>bla bla bla</p>\r\n',12,3,11,'0',NULL),(18,'Устни -> ГланцовеXxNzZr','images/testProduct3.jpg','bla bla bla',12.99,3,12,'0',NULL),(19,'Устни -> Дълготрайни червилаLhVrSt','images/testProduct3.jpg','bla bla bla',12.99,3,13,'0',NULL),(20,'Устни -> Моливи за устниZYS7S3','images/testProduct3.jpg','bla bla bla',12.99,3,14,'0',NULL),(21,'Очи -> СенкиrFlERg','images/testProduct3.jpg','bla bla bla',12.99,1,5,'0',NULL),(22,'Очи -> Сенки7KY74o','images/testProduct3.jpg','bla bla bla',12.99,1,5,'0',NULL),(23,'Очи -> СенкиVqiONz','images/testProduct3.jpg','bla bla bla',12.99,1,5,'0',NULL),(24,'Очи -> ПигментиnBz82N','images/testProduct3.jpg','bla bla bla',12.99,1,6,'0',NULL),(25,'Очи -> ПигментиC4WDi2','images/testProduct3.jpg','bla bla bla',12.99,1,6,'0',NULL),(26,'Очи -> ПигментиWo7Fwk','images/testProduct3.jpg','bla bla bla',12.99,1,6,'0',NULL),(27,'Очи -> Очни линииVL9m8i','images/testProduct3.jpg','bla bla bla',12.99,1,7,'0',NULL),(28,'Очи -> Очни линииo7IrKV','images/testProduct3.jpg','bla bla bla',12.99,1,7,'0',NULL),(29,'Очи -> Очни линииpDSuJ8','images/testProduct3.jpg','bla bla bla',12.99,1,7,'0',NULL),(30,'Очи -> Изкуствени миглиAN9b8K','images/testProduct3.jpg','bla bla bla',12.99,1,8,'0',NULL),(31,'Очи -> Изкуствени миглиiNPPhf','images/testProduct3.jpg','bla bla bla',12.99,1,8,'0',NULL),(32,'Очи -> Изкуствени мигли1JFicr','images/testProduct3.jpg','bla bla bla',12.99,1,8,'0',NULL),(33,'Очи -> ВеждиUygyNW','images/testProduct3.jpg','bla bla bla',12.99,1,9,'0',NULL),(34,'Очи -> ВеждиXmqYqI','images/testProduct3.jpg','bla bla bla',12.99,1,9,'0',NULL),(35,'Очи -> ВеждиpslihY','images/testProduct3.jpg','bla bla bla',12.99,1,9,'0',NULL),(36,'Очи -> Моливи за очиYbAU4k','images/testProduct3.jpg','bla bla bla',12.99,1,10,'0',NULL),(37,'Очи -> Моливи за очиh7mGvP','images/testProduct3.jpg','bla bla bla',12.99,1,10,'0',NULL),(38,'Очи -> Моливи за очиiEf3Ho','images/testProduct3.jpg','bla bla bla',12.99,1,10,'0',NULL),(39,'Лице -> Основи за грим9XXJtM','images/testProduct3.jpg','bla bla bla',12.99,2,1,'0',NULL),(40,'Лице -> Основи за гримakdM1c','images/testProduct3.jpg','bla bla bla',12.99,2,1,'0',NULL),(41,'Лице -> Основи за гримL6CC5B','images/testProduct3.jpg','bla bla bla',12.99,2,1,'0',NULL),(42,'Лице -> КоректориgFakLC','images/testProduct3.jpg','bla bla bla',12.99,2,2,'0',NULL),(43,'Лице -> Коректори3hpVVm','images/testProduct3.jpg','bla bla bla',12.99,2,2,'0',NULL),(44,'Лице -> КоректориFTiP4p','images/testProduct3.jpg','bla bla bla',12.99,2,2,'0',NULL),(45,'Лице -> Фон дьо тенhjF1n0','images/testProduct3.jpg','bla bla bla',12.99,2,3,'0',NULL),(46,'Лице -> Фон дьо тенOnngvM','images/testProduct3.jpg','bla bla bla',12.99,2,3,'0',NULL),(47,'Лице -> Фон дьо тенH3FKfk','images/testProduct3.jpg','bla bla bla',12.99,2,3,'0',NULL),(48,'Лице -> ПудриefSDGl','images/testProduct3.jpg','<p>bla bla bla</p>\r\n',12.99,2,4,'0',NULL),(49,'Лице -> Пудриmtb9pA','images/testProduct3.jpg','bla bla bla',12.99,2,4,'0',NULL),(50,'Лице -> Пудри0MNCjG','images/testProduct3.jpg','bla bla bla',12.99,2,4,'0',NULL),(51,'Устни -> ЧервилаeUn644','images/testProduct3.jpg','bla bla bla',12.99,3,11,'0',NULL),(52,'Устни -> ЧервилаSLket0','images/testProduct3.jpg','bla bla bla',12.99,3,11,'0',NULL),(53,'Устни -> Червилаt74CCp','images/testProduct3.jpg','bla bla bla',12.99,3,11,'0',NULL),(54,'Устни -> Гланцове62uQZE','images/testProduct3.jpg','bla bla bla',12.99,3,12,'0',NULL),(55,'Устни -> ГланцовеqMowPN','images/testProduct3.jpg','bla bla bla',12.99,3,12,'0',NULL),(56,'Устни -> ГланцовеARtZCj','images/testProduct3.jpg','bla bla bla',12.99,3,12,'0',NULL),(57,'Устни -> Дълготрайни червилаIQB0VE','images/testProduct3.jpg','bla bla bla',12.99,3,13,'0',NULL),(58,'Устни -> Дълготрайни червилаoLXZJd','images/testProduct3.jpg','bla bla bla',12.99,3,13,'0',NULL),(59,'Устни -> Дълготрайни червила5boE40','images/testProduct3.jpg','bla bla bla',12.99,3,13,'0',NULL),(60,'Устни -> Моливи за устниn4V0GM','images/testProduct3.jpg','bla bla bla',12.99,3,14,'0',NULL),(61,'Устни -> Моливи за устниGeYlcb','images/testProduct3.jpg','bla bla bla',12.99,3,14,'0',NULL),(62,'Устни -> Моливи за устни7HFFMj','images/testProduct3.jpg','bla bla bla',12.99,3,14,'0',NULL),(63,'produkt No. 1','/images/WVEPB9_cvetno.png','<p>malko text</p>\r\n',99.99,3,11,'0',NULL),(64,'sads','/images/FrRNYd_1377367_368271773355434_5731962570341091219_n.png','<p>sdfsdf</p>\r\n',0,3,11,'0',NULL),(65,'sads','/images/M6J2sx_1377367_368271773355434_5731962570341091219_n.png','<p>sdfsdf</p>\r\n',0,1,5,'0',NULL),(66,'prod1','/images/Rt4nzU_12064283_1161809450515328_881790448_n.jpg','<p>asfasfd</p>\r\n',12,4,15,'0',NULL),(67,'prod2','/images/qJmAX3_seaside-sunset_00438746.jpg','<p>sdfsdf</p>\r\n',33,5,16,'0',NULL),(68,'prod3','/images/ijawSH_1377367_368271773355434_5731962570341091219_n.png','<p>dssdf</p>\r\n',332,6,17,'0',NULL),(69,'sdfsdf','/images/NgFubu_cvetno.png','<p>asdasdasd</p>',12,3,11,'0',NULL),(70,'sdfsdf','/images/wTSvva_cvetno.png','<p>asdasdasd</p>\r\n',12,3,11,'0',NULL),(71,'sdfsdf','/images/Umup4q_aa.png','<p>dasdasd</p>\r\n',0,3,11,'0',NULL),(72,'sdfsdf','/images/Ri6k4u_aa.png','<p>dasdasd</p>\r\n',0,3,11,'0',NULL),(73,'sdfsdf','/images/ivuZAN_aa.png','<p>dasdasd</p>\r\n',0,3,11,'1',NULL),(74,'sdfsdf','/images/gFMnit_aa.png','<p>dasdasd</p>\r\n',10.3,3,11,'1',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slideshow_pics`
--

DROP TABLE IF EXISTS `slideshow_pics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slideshow_pics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slideshow_pics`
--

LOCK TABLES `slideshow_pics` WRITE;
/*!40000 ALTER TABLE `slideshow_pics` DISABLE KEYS */;
INSERT INTO `slideshow_pics` VALUES (1,'/images/MLSLfb_slideshow.jpg'),(2,'/images/f0EsG7_slideshow2.jpg'),(3,'/images/BfJKV8_slideshow3.jpg'),(4,'/images/b5eGpW_slideshow4.jpg');
/*!40000 ALTER TABLE `slideshow_pics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video_products`
--

DROP TABLE IF EXISTS `video_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video_products` (
  `vp_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`vp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video_products`
--

LOCK TABLES `video_products` WRITE;
/*!40000 ALTER TABLE `video_products` DISABLE KEYS */;
INSERT INTO `video_products` VALUES (12,62,13),(13,62,41);
/*!40000 ALTER TABLE `video_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_title` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_description` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_link` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'new video title','<p>От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва. Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция!</p>','https://www.youtube.com/embed/8EuDlADqlBc'),(2,'new title','<p>malko description</p>\r\n','https://www.youtube.com/embed/EoI4dN7D7Mc'),(3,'Zaglavie 3','<p>malko description</p>\r\n','https://www.youtube.com/embed/KTIxFfHHqjw'),(62,'Zaglavie 4','<p>asfafda asd asf asf as as&nbsp;asfafda asd asf asf as as&nbsp;asfafda asd asf asf as as&nbsp;asfafda asd asf asf as as&nbsp;asfafda asd asf asf as as&nbsp;asfafda asd asf asf as as&nbsp;asfafda asd asf asf as as&nbsp;asfafda asd asf asf as as&nbsp;asfafda asd asf asf as as&nbsp;</p>\r\n','https://www.youtube.com/embed/sfit8ozR344');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-07 20:41:44
