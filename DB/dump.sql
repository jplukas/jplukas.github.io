-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: vivaleve
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.16.04.1

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
-- Table structure for table `fixos_imagem_pagina`
--

DROP TABLE IF EXISTS `fixos_imagem_pagina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fixos_imagem_pagina` (
  `pagina` varchar(30) NOT NULL,
  `nome_campo` varchar(30) NOT NULL,
  `src` varchar(60) DEFAULT NULL,
  `legenda` varchar(60) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fixos_imagem_pagina`
--

LOCK TABLES `fixos_imagem_pagina` WRITE;
/*!40000 ALTER TABLE `fixos_imagem_pagina` DISABLE KEYS */;
INSERT INTO `fixos_imagem_pagina` VALUES ('/index.php','lead','images/logo.png','logo',1),('/services.php','lead','images/logo-2.png','logo',2),('/planos.php','center wow','images/vivendo_leve.jpg','Garota de braÃ§os abertos-Emagrecimento',3),('/programa_de_emagrecimento.php','center wow','images/vivendo_leve.jpg','Garota de braÃ§os abertos-Emagrecimento',4);
/*!40000 ALTER TABLE `fixos_imagem_pagina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fixos_texto_pagina`
--

DROP TABLE IF EXISTS `fixos_texto_pagina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fixos_texto_pagina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagina` varchar(30) NOT NULL,
  `nome_campo` varchar(30) NOT NULL,
  `valor` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fixos_texto_pagina`
--

LOCK TABLES `fixos_texto_pagina` WRITE;
/*!40000 ALTER TABLE `fixos_texto_pagina` DISABLE KEYS */;
INSERT INTO `fixos_texto_pagina` VALUES (1,'/about-us.php','link fb','https://www.facebook.com/Centro-Viva-Leve-778853302269629/'),(2,'/index.php','link fb','https://www.facebook.com/Centro-Viva-Leve-778853302269629/'),(3,'/services.php','link fb','https://www.facebook.com/Centro-Viva-Leve-778853302269629/'),(4,'/index.php','link fb','https://www.facebook.com/Centro-Viva-Leve-778853302269629/'),(5,'/index.php','link fb','https://www.facebook.com/Centro-Viva-Leve-778853302269629/'),(6,'/about-us.php','link fb','https://www.facebook.com/Centro-Viva-Leve-778853302269629/'),(7,'header','link fb','                                                                ');
/*!40000 ALTER TABLE `fixos_texto_pagina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `login` varchar(20) NOT NULL,
  `senha` varchar(30) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('Administrador','68629');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parceiro`
--

DROP TABLE IF EXISTS `parceiro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parceiro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `link` varchar(60) DEFAULT NULL,
  `logo` varchar(60) DEFAULT NULL,
  `homepage` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parceiro`
--

LOCK TABLES `parceiro` WRITE;
/*!40000 ALTER TABLE `parceiro` DISABLE KEYS */;
INSERT INTO `parceiro` VALUES (1,'Akzo Nobel','https://google.com','images/partners/partner1.png',1),(2,'Alberta Centennial','https://google.com','images/partners/partner2.png',1),(3,'Alamo Water','https://google.com','images/partners/partner3.png',1),(4,'ASTD','https://google.com','images/partners/partner4.png',1),(5,'Health','https://google.com','images/partners/partner5.png',1);
/*!40000 ALTER TABLE `parceiro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plano`
--

DROP TABLE IF EXISTS `plano`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plano` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `descricao` varchar(120) DEFAULT NULL,
  `cor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plano`
--

LOCK TABLES `plano` WRITE;
/*!40000 ALTER TABLE `plano` DISABLE KEYS */;
INSERT INTO `plano` VALUES (1,'BÃ¡sico','3 meses + Periodo de 3 meses de ManutenÃ§Ã£o',1),(2,'IntermediÃ¡rio','3 meses + Periodo de 3 meses de ManutenÃ§Ã£o',2),(3,'Completo','3 meses + Periodo de 3 meses de ManutenÃ§Ã£o',3),(4,'Plus','3 meses + Periodo de 3 meses de ManutenÃ§Ã£o',4);
/*!40000 ALTER TABLE `plano` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'Grupo TerapÃªutico'),(2,'Consulta Nutricionista'),(3,'Consulta Nutricionista a cada 15 dias'),(4,'Studio[Treino funcional;Pilates;YOGA]'),(5,'Grupo de MeditaÃ§Ã£o'),(6,'Acupuntura EstÃ©tica'),(7,'MeditaÃ§Ã£o Relaxante ou Drenagem LinfÃ¡tica'),(8,'Massagem Relaxante ou Drenagem LinfÃ¡tica'),(9,'Coaching Individual'),(10,'Consuta com PsicÃ³logo - Inicial/Final do programa');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos_planos`
--

DROP TABLE IF EXISTS `produtos_planos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos_planos` (
  `cod_plano` int(11) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  PRIMARY KEY (`cod_plano`,`cod_produto`),
  KEY `cod_produto` (`cod_produto`),
  CONSTRAINT `produtos_planos_ibfk_1` FOREIGN KEY (`cod_plano`) REFERENCES `plano` (`id`),
  CONSTRAINT `produtos_planos_ibfk_2` FOREIGN KEY (`cod_produto`) REFERENCES `produtos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos_planos`
--

LOCK TABLES `produtos_planos` WRITE;
/*!40000 ALTER TABLE `produtos_planos` DISABLE KEYS */;
INSERT INTO `produtos_planos` VALUES (1,1),(2,1),(3,1),(4,1),(1,2),(2,2),(3,3),(4,3),(1,4),(2,4),(3,4),(4,4),(1,5),(2,5),(3,5),(4,5),(3,6),(4,6),(4,7),(4,8),(2,9),(3,9),(4,9),(1,10),(2,10),(3,10),(4,10);
/*!40000 ALTER TABLE `produtos_planos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programa_emagrecimento`
--

DROP TABLE IF EXISTS `programa_emagrecimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa_emagrecimento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `descricao` varchar(600) DEFAULT NULL,
  `imagem` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa_emagrecimento`
--

LOCK TABLES `programa_emagrecimento` WRITE;
/*!40000 ALTER TABLE `programa_emagrecimento` DISABLE KEYS */;
INSERT INTO `programa_emagrecimento` VALUES (1,'CrianÃ§as','Considerando que 1 em cada 3 crianÃ§as de 5 a 9 anos estÃ£o acima do peso segundo a OMS. Ensinaremos seu filho a comer adequadamente de maneira lÃºdica e divertida. Segue abaixo o programa personalizado infantil: PsicolÃ³gico (Roda de Conversa, atendimento individual e familiar); - Nutricionista (Oficina LÃºdica de AlimentaÃ§Ã£o); - MeditaÃ§Ã£o e Yoga voltada para Ansiedade infantil auxiliando no emagrecimento.','images/crianÃ§as-saudavel.jpg'),(2,'Melhor Idade','Entendemos que mudanÃ§as que o corpo sofre durante a terceira idade exigem uma alimentaÃ§Ã£o diferente das outras fases da vida. O processo de envelhecimento vem acompanhado de uma sÃ©rie de mudanÃ§as na funÃ§Ã£o hormonal, no metabolismo energÃ©tico e na atividade diÃ¡ria, o que afeta a necessidade de nutrientes.','images/idoso-idade.jpg'),(3,'Cozinhar com Nutricionista','Quer emagrecer e nÃ£o sabe como preparar uma alimentaÃ§Ã£o saborosa e saudÃ¡vel? NÃ³s podemos te ajudar!<br>\r\n                                Formamos grupos para aprender a cozinhar com uma Nutricionista.<br>\r\n                                Parte tÃ©tica e prÃ¡tica 8 horas.','images/cozinhar-com-nutricionista-emagrecer-programa.jpg');
/*!40000 ALTER TABLE `programa_emagrecimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servico`
--

DROP TABLE IF EXISTS `servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `texto_principal` varchar(1000) DEFAULT NULL,
  `imagem_principal` varchar(60) DEFAULT NULL,
  `texto_portfolio` varchar(120) DEFAULT NULL,
  `imagem_portfolio` varchar(60) DEFAULT NULL,
  `homepage` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servico`
--

LOCK TABLES `servico` WRITE;
/*!40000 ALTER TABLE `servico` DISABLE KEYS */;
INSERT INTO `servico` VALUES (1,'Pilates','Todos os exercÃ­cios tÃªm por objetivo fortalecer a musculatura estabilizadora profunda do abdÃ´men, promover mobilidade para as articulaÃ§Ãµes, e tambÃ©m reeducaÃ§Ã£o do movimento. Assim como uma melhor consciÃªncia corporal, melhora da postura e mÃºsculos saudÃ¡veis (alongados e tonificados).','/images/pilates.jpg','Bruna perdeu 10kg em trÃªs semanas com nosso programa Gestante pÃ³s parto. Texto editado.','images/portfolio/recent/item2.png',1),(2,'Grupo Terapeutico','O trabalho em grupo Ã© uma rica experiÃªncia e proporciona aos seus participantes vivÃªncias que nÃ£o seriam possÃ­veis no atendimento individual. O grupo pode ser considerado como uma amostra da vida real, os comportamentos do dia-a-dia podem ser reproduzidos nesse compartilhar entre os participantes.','images/terapia-em-grupo.jpg','Terapia em grupo.','images/portfolio/recent/item3.png',1),(3,'Acupuntura','A acupuntura ajuda a emagrecer porque reduz a ansiedade e a retenÃ§Ã£o de lÃ­quido no organismo. Â· Regula o Apetite, Alivia a prisÃ£o de ventre, Reduz a insÃ³nia. VocÃª nÃ£o sentirÃ¡ mais aqueles impulsos de abrir a geladeira e devorar tudo, conseguindo manter uma dieta equilibrada.','/images/acupuntura.jpg','Acupuntura.','images/portfolio/recent/item4.png',1),(4,'Massagem realaxante','A massagem quando aplicada corretamente auxilia na tonificaÃ§Ã£o e ajuda na recuperaÃ§Ã£o dos mÃºsculos, no equilÃ­brio dos Ã³rgÃ£os internos e sistema nervoso, aumenta a respiraÃ§Ã£o celular e circulaÃ§Ã£o sanguÃ­nea e tambÃ©m provoca uma Ã³tima sensaÃ§Ã£o de repouso e bem estar.','/images/massagem-relaxante.jpg','Massagem relaxante','images/portfolio/recent/item5.png',1),(5,'Drenagem LinfÃ¡tica','Quando o sistema linfÃ¡tico Ã© estimulado, nÃ£o apenas as toxinas sÃ£o eliminadas como tambÃ©m gordura. O acÃºmulo de gordura muitas vezes acontece por certas regiÃµes do corpo estarem obstruÃ­das com toxinas que o linfonodos nÃ£o conseguem eliminar. Se hÃ¡ o estÃ­mulo destas regiÃµes, hÃ¡ a eliminaÃ§Ã£o de gordura e toxina.','images/drenagem-linfatica.jpg','Bruna perdeu 10kg em trÃªs semana como nosso programa Gestante pÃ³s parto.','images/portfolio/recent/item5.png',0),(6,'Treinamento Funcional','O treinamento funcional emagrece e define o corpo, portanto, Ã© uma Ã³tima opÃ§Ã£o para aquelas pessoas que jÃ¡ estÃ£o cansadas de ficar horas e horas fazendo exercÃ­cios chatos. Normalmente quem adere a essa nova moda estÃ¡ em busca de uma atividade fÃ­sica que seja mais dinÃ¢mica, interativa, divertida e realmente eficaz.\r\n\r\nTeste principal.','images/treinamento-funcional.jpg','Bruna perdeu 10kg em trÃªs semana como nosso programa Gestante pÃ³s parto.\r\nTeste desenvolvimento portfolio.','images/portfolio/recent/item6.png',0);
/*!40000 ALTER TABLE `servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slide_SobreNos`
--

DROP TABLE IF EXISTS `slide_SobreNos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slide_SobreNos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(30) NOT NULL,
  `legenda` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slide_SobreNos`
--

LOCK TABLES `slide_SobreNos` WRITE;
/*!40000 ALTER TABLE `slide_SobreNos` DISABLE KEYS */;
INSERT INTO `slide_SobreNos` VALUES (1,'images/slider_one.jpg','Imagem 1');
/*!40000 ALTER TABLE `slide_SobreNos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slide_home`
--

DROP TABLE IF EXISTS `slide_home`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slide_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem_grande` varchar(60) DEFAULT NULL,
  `imagem_pequena` varchar(60) DEFAULT NULL,
  `texto_grande` varchar(100) DEFAULT NULL,
  `texto_pequeno` varchar(100) DEFAULT NULL,
  `link` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slide_home`
--

LOCK TABLES `slide_home` WRITE;
/*!40000 ALTER TABLE `slide_home` DISABLE KEYS */;
INSERT INTO `slide_home` VALUES (1,'images/slider/bg1.jpg','images/slider/img1.png','NÃ³s podemos fazer vocÃª emagrecer de maneira saudÃ¡vel e personalizada...','Um espaÃ§o criado para sua saÃºde, movimento e tranquilidade','https://google.com'),(2,'images/slider/bg2.jpg','images/slider/img2.png','NÃ³s podemos fazer vocÃª emagrecer de maneira saudÃ¡vel e personalizada...','Um espaÃ§o criado para sua saÃºde, movimento e tranquilidade','https://google.com');
/*!40000 ALTER TABLE `slide_home` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-01 17:39:25
