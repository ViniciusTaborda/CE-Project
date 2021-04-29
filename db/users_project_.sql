-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: user_project
-- ------------------------------------------------------
-- Server version	8.0.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `films` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `genre` varchar(64) NOT NULL,
  `year` int NOT NULL,
  `length` time NOT NULL,
  `relevance` varchar(5) NOT NULL,
  `synopsis` text NOT NULL,
  `trailer` text NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films`
--

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` VALUES (20,'As Branquelas','Comédia',2004,'01:54:00','97%','Dois irmãos agentes do FBI, Marcus e Kevin Copeland, acidentalmente evitam que bandidos sejam presos em uma apreensão de drogas. Como castigo, eles são forçados a escoltar um par de socialites nos Hamptons. Porém, quando as meninas descobrem o plano da agência, se recusam a ir. Sem opções, Marcus e Kevin decidem posar como as irmãs, transformando-se de homens afro-americanos em um par de loiras.','https://www.youtube.com/watch?v=aeVkbNka9HM','C:fakepath10.jpeg'),(22,'A Garota no Trem','Suspense',2016,'01:53:00','85%','Rachel (Emily Blunt), uma alcoólatra desempregada e deprimida, sofre pelo seu divórcio recente. Todas as manhãs ela viaja de trem de Ashbury a Londres, fantasiando sobre a vida de um jovem casal que vigia pela janela. Certo dia ela testemunha uma cena chocante e mais tarde descobre que a mulher está desaparecida. Inquieta, Rachel recorre a polícia e se vê completamente envolvida no mistério.','https://www.youtube.com/watch?v=kmQ1WcX425E','C:fakepath1.jpg'),(26,'Coringa','Drama',2019,'02:02:00','95%','Em Coringa, Arthur Fleck (Joaquin Phoenix) trabalha como palhaço para uma agência de talentos e, toda semana, precisa comparecer a uma agente social, devido aos seus conhecidos problemas mentais. Após ser demitido, Fleck reage mal à gozação de três homens em pleno metrô e os mata. Os assassinatos iniciam um movimento popular contra a elite de Gotham City, da qual Thomas Wayne (Brett Cullen) é seu maior representante.','https://www.youtube.com/watch?v=kFCvoTe7huk','C:fakepath2.jpg'),(28,'A Bela e a Fera','Fantasia',2017,'02:09:00','80%','Em A Bela e a Fera, moradora de uma pequena aldeia francesa, Bela (Emma Watson) tem o pai capturado pela Fera (Dan Stevens) e decide entregar sua vida ao estranho ser em troca da liberdade dele. No castelo, ela conhece objetos mágicos e descobre que a Fera é, na verdade, um príncipe que precisa de amor para voltar à forma humana.','https://www.youtube.com/watch?v=yzHuQPgO3Gs','C:fakepath9.jpg'),(30,'Rambo: Até o Fim','Ação',2019,'01:40:00','75%','Rambo: Até o Fim se passa décadas depois de John Rambo (Sylvester Stallone) ter lutado contra seus inimigos. Agora, ele encontrou a paz em um rancho na fronteira entre os Estados Unidos e o México. Lá ele ajuda Maria Beltran (Adriana Barraza) a criar a neta Gabrielle (Yvette Monreal), que o trata com imenso carinho. Decidida a encontrar o pai, que a abandonou ainda criança, ela conta com a ajuda de uma amiga que agora vive no México para localizá-lo. Mesmo contra a vontade da avó e de Rambo, Gabrielle parte escondida para o país vizinho e, após ser dispensada pelo próprio pai, acaba vendida para uma gangue que gerencia prostitutas. Alertado sobre o que aconteceu, Rambo decide ir até o Mèxico para salvá-la.','https://www.youtube.com/watch?v=bk4E0Rl2cns','C:fakepath7.jpg'),(31,'The Avengers','Ficção',2012,'02:23:00','96%','Loki (Tom Hiddleston) retorna à Terra enviado pelos chitauri, uma raça alienígena que pretende dominar os humanos. Com a promessa de que será o soberano do planeta, ele rouba o cubo cósmico dentro de instalações da S.H.I.E.L.D. e, com isso, adquire grandes poderes. Loki os usa para controlar o dr. Erik Selvig (Stellan Skarsgard) e Clint Barton/Gavião Arqueiro (Jeremy Renner), que passam a trabalhar para ele. No intuito de contê-los, Nick Fury (Samuel L. Jackson) convoca um grupo de pessoas com grandes habilidades, mas que jamais haviam trabalhado juntas: Tony Stark/Homem de Ferro (Robert Downey Jr.), Steve Rogers/Capitão América (Chris Evans), Thor (Chris Hemsworth), Bruce Banner/Hulk (Mark Ruffalo) e Natasha Romanoff/Viúva Negra (Scarlett Johansson). Só que, apesar do grande perigo que a Terra corre, não é tão simples assim conter o ego e os interesses de cada um deles para que possam agir em grupo.','https://www.youtube.com/watch?v=6Y6zOSn8ff4','C:fakepath12.jpg');
/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__bookmark`
--

DROP TABLE IF EXISTS `pma__bookmark`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__bookmark` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `dbase` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__bookmark`
--

LOCK TABLES `pma__bookmark` WRITE;
/*!40000 ALTER TABLE `pma__bookmark` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__bookmark` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__central_columns`
--

DROP TABLE IF EXISTS `pma__central_columns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `col_length` text CHARACTER SET utf8 COLLATE utf8_bin,
  `col_collation` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '',
  `col_default` text CHARACTER SET utf8 COLLATE utf8_bin,
  PRIMARY KEY (`db_name`,`col_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__central_columns`
--

LOCK TABLES `pma__central_columns` WRITE;
/*!40000 ALTER TABLE `pma__central_columns` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__central_columns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__column_info`
--

DROP TABLE IF EXISTS `pma__column_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__column_info` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__column_info`
--

LOCK TABLES `pma__column_info` WRITE;
/*!40000 ALTER TABLE `pma__column_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__column_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__designer_settings`
--

DROP TABLE IF EXISTS `pma__designer_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `settings_data` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__designer_settings`
--

LOCK TABLES `pma__designer_settings` WRITE;
/*!40000 ALTER TABLE `pma__designer_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__designer_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__export_templates`
--

DROP TABLE IF EXISTS `pma__export_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__export_templates` (
  `id` int unsigned NOT NULL,
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `template_data` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__export_templates`
--

LOCK TABLES `pma__export_templates` WRITE;
/*!40000 ALTER TABLE `pma__export_templates` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__export_templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__favorite`
--

DROP TABLE IF EXISTS `pma__favorite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__favorite` (
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tables` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__favorite`
--

LOCK TABLES `pma__favorite` WRITE;
/*!40000 ALTER TABLE `pma__favorite` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__favorite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__history`
--

DROP TABLE IF EXISTS `pma__history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__history` (
  `id` bigint unsigned NOT NULL,
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`db`,`table`,`timevalue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__history`
--

LOCK TABLES `pma__history` WRITE;
/*!40000 ALTER TABLE `pma__history` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__navigationhiding`
--

DROP TABLE IF EXISTS `pma__navigationhiding`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__navigationhiding`
--

LOCK TABLES `pma__navigationhiding` WRITE;
/*!40000 ALTER TABLE `pma__navigationhiding` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__navigationhiding` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__pdf_pages`
--

DROP TABLE IF EXISTS `pma__pdf_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int unsigned NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`),
  KEY `db_name` (`db_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__pdf_pages`
--

LOCK TABLES `pma__pdf_pages` WRITE;
/*!40000 ALTER TABLE `pma__pdf_pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__pdf_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__recent`
--

DROP TABLE IF EXISTS `pma__recent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__recent` (
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tables` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__recent`
--

LOCK TABLES `pma__recent` WRITE;
/*!40000 ALTER TABLE `pma__recent` DISABLE KEYS */;
INSERT INTO `pma__recent` VALUES ('root','[{\"db\":\"user_project\",\"table\":\"user\"},{\"db\":\"user_project\",\"table\":\"films\"}]');
/*!40000 ALTER TABLE `pma__recent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__relation`
--

DROP TABLE IF EXISTS `pma__relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__relation` (
  `master_db` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  KEY `foreign_field` (`foreign_db`,`foreign_table`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__relation`
--

LOCK TABLES `pma__relation` WRITE;
/*!40000 ALTER TABLE `pma__relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__savedsearches`
--

DROP TABLE IF EXISTS `pma__savedsearches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__savedsearches` (
  `id` int unsigned NOT NULL,
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__savedsearches`
--

LOCK TABLES `pma__savedsearches` WRITE;
/*!40000 ALTER TABLE `pma__savedsearches` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__savedsearches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__table_coords`
--

DROP TABLE IF EXISTS `pma__table_coords`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__table_coords`
--

LOCK TABLES `pma__table_coords` WRITE;
/*!40000 ALTER TABLE `pma__table_coords` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__table_coords` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__table_info`
--

DROP TABLE IF EXISTS `pma__table_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__table_info`
--

LOCK TABLES `pma__table_info` WRITE;
/*!40000 ALTER TABLE `pma__table_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__table_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__table_uiprefs`
--

DROP TABLE IF EXISTS `pma__table_uiprefs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prefs` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`,`db_name`,`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__table_uiprefs`
--

LOCK TABLES `pma__table_uiprefs` WRITE;
/*!40000 ALTER TABLE `pma__table_uiprefs` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__table_uiprefs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__tracking`
--

DROP TABLE IF EXISTS `pma__tracking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `version` int unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `schema_sql` text CHARACTER SET utf8 COLLATE utf8_bin,
  `data_sql` longtext CHARACTER SET utf8 COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`db_name`,`table_name`,`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__tracking`
--

LOCK TABLES `pma__tracking` WRITE;
/*!40000 ALTER TABLE `pma__tracking` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__tracking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__userconfig`
--

DROP TABLE IF EXISTS `pma__userconfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__userconfig` (
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__userconfig`
--

LOCK TABLES `pma__userconfig` WRITE;
/*!40000 ALTER TABLE `pma__userconfig` DISABLE KEYS */;
INSERT INTO `pma__userconfig` VALUES ('root','2021-04-29 21:40:50','{\"lang\":\"pt\",\"Console\\/Mode\":\"collapse\"}');
/*!40000 ALTER TABLE `pma__userconfig` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__usergroups`
--

DROP TABLE IF EXISTS `pma__usergroups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'N',
  PRIMARY KEY (`usergroup`,`tab`,`allowed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__usergroups`
--

LOCK TABLES `pma__usergroups` WRITE;
/*!40000 ALTER TABLE `pma__usergroups` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__usergroups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__users`
--

DROP TABLE IF EXISTS `pma__users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pma__users` (
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`,`usergroup`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__users`
--

LOCK TABLES `pma__users` WRITE;
/*!40000 ALTER TABLE `pma__users` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(64) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `card_expiration_date` varchar(10) NOT NULL,
  `security_code` varchar(3) NOT NULL,
  `cardholder` varchar(128) NOT NULL,
  `CPF_CNPJ` varchar(15) NOT NULL,
  `is_valid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Vinicius Eduardo Taborda Costa','2001-11-23','vinicius.costa@gmail.com','0cc175b9c0f1b6a831c399e269772661','11122233334444','2030-01-01','123','VINICIUS E. T. COSTA','12427904970',0),(2,'vinicius','2021-03-19','vinicius.taborda.costa@gmail.com','46070d4bf934fb0d4b06d9e2c46e346944e322444900a435d7d9a95e6d7435f5','111111','2002-10-01','','agatha','111111111',0),(3,'Agatha Cristie Batista de Moraes','1990-08-04','agatha_cristie16@hotmail.com','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','1112223339999','2022-10-29','999','Agatha C Moraes','99999999999',0),(59,'Moraes','1990-08-04','agathademoraes@gmail.com','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','1234567891234567','2022-02-01','555','Moraes','99999999999',0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-29 18:45:44
