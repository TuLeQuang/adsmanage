-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: TemplateDB
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.17.04.1

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
-- Table structure for table `templates`
--

DROP TABLE IF EXISTS `templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `templates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `config` text COLLATE utf8_unicode_ci,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `template` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `fk_templates_userId_idx` (`user_id`),
  CONSTRAINT `fk_templates_userId` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `templates`
--

LOCK TABLES `templates` WRITE;
/*!40000 ALTER TABLE `templates` DISABLE KEYS */;
INSERT INTO `templates` VALUES (1,2,'template demo 1','{config:{name:\'tem demo 1\',required:true,}}','{title:\"Template demo 1\",name:\"Neko\",url:\"https://soisodep.com\",img:{url:\"http://soisodep.com/images/bai2-1.jpg\",},content:\"Content 1\",author: \"neko\"}','2017-01-03 17:00:00','2017-01-03 17:00:00',1,'<div><div id=\"my_view\"style=\"display:block;float:left;width:49%\"><input type=\"text\" v-model=\"name\" /><br><input type=\"text\" v-model=\"url\" /><br><input type=\"text\" v-model=\"author\"/><br><input type=\"text\" v-model=\"img.url\" /><br><input type=\"text\" v-model=\"content\" /><br><input type=\"text\" v-model=\"title\"/><br></div><div id =\"demo\"style=\"float:right;width:49%\"><h3>{{title}}</h3><img :src=\"img.url\"><span>{{ content }}</span><br><a :href=\"url\" style=\"text-decoration: none\">{{ name }}</a> là website do <span>{{ author }}</span> phát triển.</div></div>'),(2,2,'Template demo 2',NULL,'{users:[{id:\"1\",name:\"kenthoi\",email:\"hien@gmail.com\"},{id:\"2\",name:\"tu\",email:\"neko@gmail.com\"}]}','2017-01-03 17:00:00','2017-01-03 17:00:00',1,'<div class=\"table table-borderless\"><table class=\"table table-borderless\" ><thead><tr><th>Mã</th><th>Tên user</th><th>Email</th></tr></thead><tr v-for=\"user in users\"><td>{{ user.id }}</td><td>{{ user.name }}</td><td>{{ user.email }}</td></tr></table></div>');
/*!40000 ALTER TABLE `templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'kenlyzin','minhngocvu1612@gmail.com','$2y$10$d/52UR7go0b9Lwe4xhbS0OWDsscn3FQ.3g/gQKZxNc6YGk9HwYSuG',1,NULL,0,'gIzHii3E4EmDJdjTcqz0mHbRKKQjACZTAIVJapxPTkK9JS0kLGoGe5SBGV8E','2017-12-27 07:57:32','2017-12-27 19:49:11');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-05 10:09:31
