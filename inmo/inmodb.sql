-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: inmo
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.12.04.1

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
-- Table structure for table `Apartamentos`
--

DROP TABLE IF EXISTS `Apartamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Apartamentos` (
  `IdInmueble` int(11) NOT NULL,
  `numPiso` int(100) NOT NULL,
  `numApartamento` int(100) NOT NULL,
  `gastosComunes` int(15) NOT NULL,
  `ascensor` tinyint(1) NOT NULL,
  PRIMARY KEY (`IdInmueble`),
  CONSTRAINT `Apartamentos_ibfk_1` FOREIGN KEY (`IdInmueble`) REFERENCES `Inmuebles` (`IdInmueble`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Apartamentos`
--

LOCK TABLES `Apartamentos` WRITE;
/*!40000 ALTER TABLE `Apartamentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `Apartamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `AuthAssignment`
--

DROP TABLE IF EXISTS `AuthAssignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AuthAssignment`
--

LOCK TABLES `AuthAssignment` WRITE;
/*!40000 ALTER TABLE `AuthAssignment` DISABLE KEYS */;
INSERT INTO `AuthAssignment` VALUES ('Administrativo','12345678',NULL,'N;'),('Director','00000000',NULL,'N;');
/*!40000 ALTER TABLE `AuthAssignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `AuthItem`
--

DROP TABLE IF EXISTS `AuthItem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AuthItem`
--

LOCK TABLES `AuthItem` WRITE;
/*!40000 ALTER TABLE `AuthItem` DISABLE KEYS */;
INSERT INTO `AuthItem` VALUES ('Administrativo',2,'',NULL,'N;'),('Agente',2,'',NULL,'N;'),('Director',2,'',NULL,'N;');
/*!40000 ALTER TABLE `AuthItem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `AuthItemChild`
--

DROP TABLE IF EXISTS `AuthItemChild`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AuthItemChild`
--

LOCK TABLES `AuthItemChild` WRITE;
/*!40000 ALTER TABLE `AuthItemChild` DISABLE KEYS */;
INSERT INTO `AuthItemChild` VALUES ('Director','Administrativo'),('Administrativo','Agente');
/*!40000 ALTER TABLE `AuthItemChild` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Barrios`
--

DROP TABLE IF EXISTS `Barrios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Barrios` (
  `nombreBarrio` varchar(20) NOT NULL,
  `calle` varchar(20) NOT NULL,
  `numero` int(11) NOT NULL,
  `idBarrio` int(11) NOT NULL,
  `nombreDepartamento` varchar(20) NOT NULL,
  PRIMARY KEY (`idBarrio`),
  KEY `FK_Departamentos_Barrios` (`nombreDepartamento`),
  CONSTRAINT `Barrios_ibfk_1` FOREIGN KEY (`nombreDepartamento`) REFERENCES `Departamentos` (`nombreDepartamento`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Barrios`
--

LOCK TABLES `Barrios` WRITE;
/*!40000 ALTER TABLE `Barrios` DISABLE KEYS */;
/*!40000 ALTER TABLE `Barrios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Casas`
--

DROP TABLE IF EXISTS `Casas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Casas` (
  `IdInmueble` int(11) NOT NULL,
  `piscina` tinyint(1) NOT NULL,
  `parrillero` tinyint(1) NOT NULL,
  `cantPatios` int(3) NOT NULL,
  PRIMARY KEY (`IdInmueble`),
  CONSTRAINT `Casas_ibfk_1` FOREIGN KEY (`IdInmueble`) REFERENCES `Inmuebles` (`IdInmueble`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Casas`
--

LOCK TABLES `Casas` WRITE;
/*!40000 ALTER TABLE `Casas` DISABLE KEYS */;
/*!40000 ALTER TABLE `Casas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Clientes`
--

DROP TABLE IF EXISTS `Clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Clientes` (
  `cedula` varchar(8) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `cedulaUsuario` varchar(8) NOT NULL,
  PRIMARY KEY (`cedula`),
  KEY `cedulaUsuarioFK` (`cedulaUsuario`) COMMENT 'foreignKey',
  CONSTRAINT `cedulaUsuarioFK` FOREIGN KEY (`cedulaUsuario`) REFERENCES `Usuarios` (`cedula`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Clientes`
--

LOCK TABLES `Clientes` WRITE;
/*!40000 ALTER TABLE `Clientes` DISABLE KEYS */;
INSERT INTO `Clientes` VALUES ('11111111','leo','leo','444','leo@leo','Comprador','12345678'),('22222222','Bruno','befx','32569874','befx@gmail.com','Vendedor','12345678'),('45678933','ElCLiente','Mejorcito','2456987441','elcliente@arroba.com','Vendedor','00000000');
/*!40000 ALTER TABLE `Clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Departamentos`
--

DROP TABLE IF EXISTS `Departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Departamentos` (
  `nombreDepartamento` varchar(20) NOT NULL,
  PRIMARY KEY (`nombreDepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Departamentos`
--

LOCK TABLES `Departamentos` WRITE;
/*!40000 ALTER TABLE `Departamentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `Departamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Imagenes`
--

DROP TABLE IF EXISTS `Imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Imagenes` (
  `idImagen` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(10000) NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `idInmueble` int(11) NOT NULL,
  PRIMARY KEY (`idImagen`),
  KEY `Fk idInmueble Imagenes` (`idInmueble`),
  CONSTRAINT `Imagenes_ibfk_1` FOREIGN KEY (`idInmueble`) REFERENCES `Inmuebles` (`IdInmueble`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Imagenes`
--

LOCK TABLES `Imagenes` WRITE;
/*!40000 ALTER TABLE `Imagenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `Imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Inmuebles`
--

DROP TABLE IF EXISTS `Inmuebles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Inmuebles` (
  `IdInmueble` int(11) NOT NULL AUTO_INCREMENT,
  `coordenadas` varchar(50) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `superficie` int(100) NOT NULL,
  `antiguedad` int(5) NOT NULL,
  `garage` tinyint(1) NOT NULL,
  `precio` int(100) NOT NULL,
  `cantBanio` int(3) NOT NULL,
  `cantDormitorio` int(3) NOT NULL,
  `cantAmbiente` int(3) NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `cedulaUsuario` varchar(8) NOT NULL,
  `idBarrio` int(11) NOT NULL,
  PRIMARY KEY (`IdInmueble`),
  KEY `FK_Usuario_Inmueble` (`cedulaUsuario`) COMMENT 'FK ci Usuario',
  KEY `FK_Barrios_Inmueble` (`idBarrio`),
  CONSTRAINT `Inmuebles_ibfk_2` FOREIGN KEY (`idBarrio`) REFERENCES `Barrios` (`idBarrio`) ON UPDATE CASCADE,
  CONSTRAINT `Inmuebles_ibfk_1` FOREIGN KEY (`cedulaUsuario`) REFERENCES `Usuarios` (`cedula`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Inmuebles`
--

LOCK TABLES `Inmuebles` WRITE;
/*!40000 ALTER TABLE `Inmuebles` DISABLE KEYS */;
/*!40000 ALTER TABLE `Inmuebles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Notificaciones`
--

DROP TABLE IF EXISTS `Notificaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Notificaciones` (
  `IdNotificacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contenido` varchar(250) NOT NULL,
  `cedulaUsuario` varchar(8) NOT NULL,
  PRIMARY KEY (`IdNotificacion`),
  KEY `FK_Usuario_Notificacion` (`cedulaUsuario`) COMMENT 'FK de ci Usuario',
  CONSTRAINT `Notificaciones_ibfk_1` FOREIGN KEY (`cedulaUsuario`) REFERENCES `Usuarios` (`cedula`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Notificaciones`
--

LOCK TABLES `Notificaciones` WRITE;
/*!40000 ALTER TABLE `Notificaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `Notificaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuarios`
--

DROP TABLE IF EXISTS `Usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuarios` (
  `cedula` varchar(8) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(129) NOT NULL,
  PRIMARY KEY (`cedula`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuarios`
--

LOCK TABLES `Usuarios` WRITE;
/*!40000 ALTER TABLE `Usuarios` DISABLE KEYS */;
INSERT INTO `Usuarios` VALUES ('00000000','Admin','Nistrator','admin@admin.com','$2a$13$6LJ6OTT.vYynRAfnNX.5dOTJefUJwJmlQGmQHrhoQIM2SxsoU/m8S'),('12345678','Leito','DelCap','leoleito@hot.com','$2a$13$OWyqMmD6jurFgPWOV3Jng.VPg9gXTiAleWU1ubv53w.rKCwyvdy1W');
/*!40000 ALTER TABLE `Usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Visitas`
--

DROP TABLE IF EXISTS `Visitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Visitas` (
  `cedulaCliente` varchar(8) NOT NULL,
  `cedulaUsuario` varchar(8) NOT NULL,
  `idInmueble` int(11) NOT NULL,
  `fecha` date NOT NULL,
  KEY `Fk ci Usuario` (`cedulaUsuario`),
  KEY `FK ci CLiente` (`cedulaCliente`),
  KEY `Fk idInmueble` (`idInmueble`),
  CONSTRAINT `Visitas_ibfk_3` FOREIGN KEY (`idInmueble`) REFERENCES `Inmuebles` (`IdInmueble`) ON UPDATE CASCADE,
  CONSTRAINT `Visitas_ibfk_1` FOREIGN KEY (`cedulaCliente`) REFERENCES `Clientes` (`cedula`) ON UPDATE CASCADE,
  CONSTRAINT `Visitas_ibfk_2` FOREIGN KEY (`cedulaUsuario`) REFERENCES `Usuarios` (`cedula`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Visitas`
--

LOCK TABLES `Visitas` WRITE;
/*!40000 ALTER TABLE `Visitas` DISABLE KEYS */;
/*!40000 ALTER TABLE `Visitas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-26 14:01:47
