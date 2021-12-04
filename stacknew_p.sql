-- MariaDB dump 10.19  Distrib 10.5.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 134.119.190.82    Database: stacknew_p
-- ------------------------------------------------------
-- Server version	10.3.31-MariaDB-cll-lve

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
-- Table structure for table `pb_deposito`
--

DROP TABLE IF EXISTS `pb_deposito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_deposito` (
  `id_deposito` int(11) NOT NULL AUTO_INCREMENT,
  `id_inscripcion_online` int(11) DEFAULT NULL,
  `id_publicacion` int(11) DEFAULT NULL,
  `numero_deposito` int(11) DEFAULT NULL,
  `monto_deposito` int(11) DEFAULT NULL,
  `fecha_deposito` date DEFAULT NULL,
  `fecha_registro` timestamp NULL DEFAULT current_timestamp(),
  `id_usuario_registro` int(11) DEFAULT NULL,
  `id_usuario_verificado` int(11) DEFAULT NULL,
  `id_tipo_pago` int(11) DEFAULT NULL,
  `estado_deposito` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_deposito`),
  KEY `pb_deposito_fk` (`id_inscripcion_online`),
  KEY `psg_deposito_fk1` (`id_tipo_pago`),
  CONSTRAINT `pb_deposito_fk` FOREIGN KEY (`id_inscripcion_online`) REFERENCES `pb_inscripcion_online` (`id_inscripcion_online`),
  CONSTRAINT `psg_deposito_fk1` FOREIGN KEY (`id_tipo_pago`) REFERENCES `pb_tipo_pago` (`id_tipo_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_deposito`
--

LOCK TABLES `pb_deposito` WRITE;
/*!40000 ALTER TABLE `pb_deposito` DISABLE KEYS */;
/*!40000 ALTER TABLE `pb_deposito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_gestion`
--

DROP TABLE IF EXISTS `pb_gestion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_gestion` (
  `id_gestion` int(11) NOT NULL,
  `gestion` int(11) DEFAULT NULL,
  `descripcion_gestion` varchar(100) DEFAULT NULL,
  `estado_gestion` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_gestion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_gestion`
--

LOCK TABLES `pb_gestion` WRITE;
/*!40000 ALTER TABLE `pb_gestion` DISABLE KEYS */;
INSERT INTO `pb_gestion` VALUES (21,2021,NULL,'ACTIVO'),(22,2022,NULL,'ACTIVO');
/*!40000 ALTER TABLE `pb_gestion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_grado_academico`
--

DROP TABLE IF EXISTS `pb_grado_academico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_grado_academico` (
  `id_grado_academico` int(11) NOT NULL AUTO_INCREMENT,
  `jerarquia` int(11) DEFAULT NULL,
  `abreviatura` varchar(12) DEFAULT NULL,
  `descripcion_grado_academico` varchar(40) DEFAULT NULL,
  `categoria_grado` varchar(10) DEFAULT NULL,
  `estado_grado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_grado_academico`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_grado_academico`
--

LOCK TABLES `pb_grado_academico` WRITE;
/*!40000 ALTER TABLE `pb_grado_academico` DISABLE KEYS */;
INSERT INTO `pb_grado_academico` VALUES (1,10,'P.Ph.D.','POST DOCTORADO',NULL,'REGISTRADO'),(2,20,'Ph.D.','DOCTORADO',NULL,'REGISTRADO'),(3,30,'M.Sc.','MAESTRÍA',NULL,'REGISTRADO'),(4,40,'Esp.','ESPECIALIDAD',NULL,'REGISTRADO'),(5,50,'Lic.','DIPLOMADO',NULL,'REGISTRADO');
/*!40000 ALTER TABLE `pb_grado_academico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_grupo`
--

DROP TABLE IF EXISTS `pb_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_grupo` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_grupo` varchar(20) DEFAULT NULL,
  `estado_grupo` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_grupo`
--

LOCK TABLES `pb_grupo` WRITE;
/*!40000 ALTER TABLE `pb_grupo` DISABLE KEYS */;
INSERT INTO `pb_grupo` VALUES (1,'ADMINISTRADOR','ACTIVO'),(2,'SECRETARIA','ACTIVO'),(3,'SECRETARIA','ACTIVO'),(4,'SECRETARIA','ACTIVO'),(5,'SECRETARIA','ACTIVO'),(6,'SECRETARIA','ACTIVO'),(7,'SECRETARIA','ACTIVO'),(8,'SECRETARIA','ACTIVO'),(9,'SECRETARIA','ACTIVO'),(10,'SECRETARIA','ACTIVO');
/*!40000 ALTER TABLE `pb_grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_grupo_usuario`
--

DROP TABLE IF EXISTS `pb_grupo_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_grupo_usuario` (
  `id_grupo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_grupo` int(11) DEFAULT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `id_usuario_registro` int(11) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `ip_usuario` varchar(20) DEFAULT NULL,
  `estado_grupo_usuario` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_grupo_usuario`),
  KEY `pb_grupo_usuario_fk1` (`id_grupo`),
  KEY `pb_grupo_usuario_fk2` (`id_persona`),
  CONSTRAINT `pb_grupo_usuario_fk1` FOREIGN KEY (`id_grupo`) REFERENCES `pb_grupo` (`id_grupo`),
  CONSTRAINT `pb_grupo_usuario_fk2` FOREIGN KEY (`id_persona`) REFERENCES `pb_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_grupo_usuario`
--

LOCK TABLES `pb_grupo_usuario` WRITE;
/*!40000 ALTER TABLE `pb_grupo_usuario` DISABLE KEYS */;
INSERT INTO `pb_grupo_usuario` VALUES (1,1,1,NULL,NULL,1,NULL,NULL,'ACTIVO'),(4,2,17,NULL,NULL,1,NULL,NULL,'ACTIVO'),(5,1,17,NULL,NULL,1,NULL,NULL,'ACTIVO');
/*!40000 ALTER TABLE `pb_grupo_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_inscripcion_online`
--

DROP TABLE IF EXISTS `pb_inscripcion_online`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_inscripcion_online` (
  `id_inscripcion_online` int(11) NOT NULL AUTO_INCREMENT,
  `id_publicacion` int(11) DEFAULT NULL,
  `id_persona_interesado` int(11) DEFAULT NULL,
  `observacion` varchar(300) DEFAULT NULL,
  `fecha_registro` timestamp NULL DEFAULT current_timestamp(),
  `id_usuario_registro` int(11) DEFAULT NULL,
  `id_usuario_validado` int(11) DEFAULT NULL,
  `estado_inscripcion_online` varchar(15) DEFAULT NULL,
  `paralelo` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_inscripcion_online`),
  KEY `pb_inscripcion_online_fk` (`id_publicacion`),
  KEY `pb_inscripcion_online_fk1` (`id_persona_interesado`),
  CONSTRAINT `pb_inscripcion_online_fk` FOREIGN KEY (`id_publicacion`) REFERENCES `pb_publicacion` (`id_publicacion`),
  CONSTRAINT `pb_inscripcion_online_fk1` FOREIGN KEY (`id_persona_interesado`) REFERENCES `pb_persona_externa` (`id_persona_externa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_inscripcion_online`
--

LOCK TABLES `pb_inscripcion_online` WRITE;
/*!40000 ALTER TABLE `pb_inscripcion_online` DISABLE KEYS */;
/*!40000 ALTER TABLE `pb_inscripcion_online` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_multimedia`
--

DROP TABLE IF EXISTS `pb_multimedia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_multimedia` (
  `id_multimedia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_archivo` varchar(150) DEFAULT NULL,
  `extension_archivo` varchar(15) DEFAULT NULL,
  `tamano_archivo` float DEFAULT NULL,
  `ruta_archivo` varchar(300) DEFAULT NULL,
  `etiqueta` varchar(250) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fecha_registro` timestamp NULL DEFAULT current_timestamp(),
  `estado_archivo` varchar(10) DEFAULT 'REGISTRADO',
  PRIMARY KEY (`id_multimedia`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_multimedia`
--

LOCK TABLES `pb_multimedia` WRITE;
/*!40000 ALTER TABLE `pb_multimedia` DISABLE KEYS */;
/*!40000 ALTER TABLE `pb_multimedia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_multimedia_pago_programa`
--

DROP TABLE IF EXISTS `pb_multimedia_pago_programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_multimedia_pago_programa` (
  `id_multimedia_pago_programa` int(11) NOT NULL AUTO_INCREMENT,
  `id_multimedia` int(11) DEFAULT NULL,
  `id_pago_programa` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `observacion` text DEFAULT NULL,
  `fecha_revision` timestamp NULL DEFAULT NULL,
  `estado_multimedia_pago_programa` varchar(10) DEFAULT 'REGISTRADO',
  PRIMARY KEY (`id_multimedia_pago_programa`),
  KEY `pb_pago_multimedia_fk` (`id_multimedia`),
  KEY `pb_multimedia_pago_programa_fk` (`id_pago_programa`),
  CONSTRAINT `pb_multimedia_pago_programa_fk` FOREIGN KEY (`id_pago_programa`) REFERENCES `pb_pago_programa` (`id_pago_programa`),
  CONSTRAINT `pb_pago_multimedia_fk` FOREIGN KEY (`id_multimedia`) REFERENCES `pb_multimedia` (`id_multimedia`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_multimedia_pago_programa`
--

LOCK TABLES `pb_multimedia_pago_programa` WRITE;
/*!40000 ALTER TABLE `pb_multimedia_pago_programa` DISABLE KEYS */;
/*!40000 ALTER TABLE `pb_multimedia_pago_programa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_oficina`
--

DROP TABLE IF EXISTS `pb_oficina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_oficina` (
  `id_oficina` int(11) NOT NULL AUTO_INCREMENT,
  `id_sede` int(11) NOT NULL,
  `descripcion_oficina` varchar(250) DEFAULT NULL,
  `direccion_oficina` varchar(250) DEFAULT NULL,
  `estado_oficina` varchar(100) DEFAULT NULL,
  `celular_oficina` int(8) DEFAULT NULL,
  `telefono_oficina` int(8) DEFAULT NULL,
  PRIMARY KEY (`id_oficina`),
  KEY `pb_oficina_fk1` (`id_sede`),
  CONSTRAINT `pb_oficina_fk1` FOREIGN KEY (`id_sede`) REFERENCES `pb_sede` (`id_sede`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_oficina`
--

LOCK TABLES `pb_oficina` WRITE;
/*!40000 ALTER TABLE `pb_oficina` DISABLE KEYS */;
INSERT INTO `pb_oficina` VALUES (1,1,'EL ALTO: Edificio GENESIS No 100, PISO 5 Of. 502 Calle 1 Av. 6 de Marzo.',NULL,'ACTIVO',NULL,NULL);
/*!40000 ALTER TABLE `pb_oficina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_pago_programa`
--

DROP TABLE IF EXISTS `pb_pago_programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_pago_programa` (
  `id_pago_programa` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) NOT NULL,
  `id_planificacion_programa` int(11) NOT NULL,
  `id_tipo_pago` int(11) NOT NULL,
  `codigo_pago` varchar(30) DEFAULT NULL,
  `monto_deposito` decimal(14,8) DEFAULT NULL,
  `fecha_deposito` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `descripcion_pago` varchar(80) DEFAULT NULL,
  `observacion` text DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_actualizacion` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `estado_pago_programa` varchar(10) NOT NULL DEFAULT 'REGISTRADO',
  PRIMARY KEY (`id_pago_programa`),
  KEY `fk_id_persona_pago_programa` (`id_persona`),
  KEY `fk_id_planificacion_programa_pago_programa` (`id_planificacion_programa`),
  KEY `fk_tipo_pago_programa` (`id_tipo_pago`),
  CONSTRAINT `fk_id_persona_pago_programa` FOREIGN KEY (`id_persona`) REFERENCES `pb_persona` (`id_persona`),
  CONSTRAINT `fk_id_planificacion_programa_pago_programa` FOREIGN KEY (`id_planificacion_programa`) REFERENCES `pb_planificacion_programa` (`id_planificacion_programa`),
  CONSTRAINT `fk_tipo_pago_programa` FOREIGN KEY (`id_tipo_pago`) REFERENCES `pb_tipo_pago` (`id_tipo_pago`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_pago_programa`
--

LOCK TABLES `pb_pago_programa` WRITE;
/*!40000 ALTER TABLE `pb_pago_programa` DISABLE KEYS */;
/*!40000 ALTER TABLE `pb_pago_programa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_persona`
--

DROP TABLE IF EXISTS `pb_persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_persona` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `ci` varchar(20) NOT NULL,
  `expedido` varchar(5) DEFAULT NULL,
  `paterno` varchar(50) DEFAULT NULL,
  `materno` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `genero` varchar(2) DEFAULT NULL,
  `estado_civil` varchar(13) DEFAULT NULL,
  `id_pais_nacionalidad` int(11) DEFAULT NULL,
  `domicilio` varchar(200) DEFAULT NULL,
  `lugar_nacimiento` varchar(100) DEFAULT NULL,
  `imagen_persona` varchar(20) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `fecha_registro` timestamp NULL DEFAULT current_timestamp(),
  `id_usuario_registro` int(11) DEFAULT NULL,
  `estado_persona` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_persona`
--

LOCK TABLES `pb_persona` WRITE;
/*!40000 ALTER TABLE `pb_persona` DISABLE KEYS */;
INSERT INTO `pb_persona` VALUES (1,'3748327','LP','PEREZ','PEREZ','JUAN','2021-10-07','M','1',NULL,'dsfds','fsdfd',NULL,'email@gmail.com',NULL,78877502,'2021-09-09 05:26:51',NULL,NULL),(17,'12606349','LP','CHOQUE','LIPA','ESTHER',NULL,'F',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-10-09 07:55:40',NULL,'REGISTRADO'),(19,'12345678','CB','MAMANI','ALIAGA','APRENDE PYTHON','2021-10-15','M',NULL,NULL,NULL,NULL,NULL,NULL,NULL,12341234,'2021-10-13 18:43:15',NULL,'REGISTRADO');
/*!40000 ALTER TABLE `pb_persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_persona_externa`
--

DROP TABLE IF EXISTS `pb_persona_externa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_persona_externa` (
  `id_persona_externa` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona_posgrado` int(11) DEFAULT NULL,
  `ci` varchar(15) DEFAULT NULL,
  `expedido` varchar(8) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `paterno` varchar(80) DEFAULT NULL,
  `materno` varchar(80) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `genero` varchar(2) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `domicilio` varchar(150) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `detalle` varchar(200) DEFAULT NULL,
  `fecha_registro` timestamp(6) NULL DEFAULT current_timestamp(6),
  `estado_civil` varchar(10) DEFAULT NULL,
  `oficio_trabajo` varchar(100) DEFAULT NULL,
  `estado_persona` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_persona_externa`),
  UNIQUE KEY `ci` (`ci`),
  KEY `pb_persona_externa_fk` (`id_persona_posgrado`),
  CONSTRAINT `pb_persona_externa_fk` FOREIGN KEY (`id_persona_posgrado`) REFERENCES `pb_persona` (`id_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_persona_externa`
--

LOCK TABLES `pb_persona_externa` WRITE;
/*!40000 ALTER TABLE `pb_persona_externa` DISABLE KEYS */;
/*!40000 ALTER TABLE `pb_persona_externa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_persona_grado_academico`
--

DROP TABLE IF EXISTS `pb_persona_grado_academico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_persona_grado_academico` (
  `id_persona_grado_academico` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) NOT NULL,
  `id_profesiones_ocupaciones` int(11) NOT NULL,
  `id_universidades_normales` int(11) NOT NULL,
  `tipo_universidad` varchar(25) NOT NULL,
  `gestion_titulacion` varchar(12) NOT NULL,
  PRIMARY KEY (`id_persona_grado_academico`),
  KEY `fk_id_persona` (`id_persona`),
  KEY `fk_id_profesiones_ocupaciones` (`id_profesiones_ocupaciones`),
  KEY `fk_id_universidades_normales` (`id_universidades_normales`),
  CONSTRAINT `fk_id_persona` FOREIGN KEY (`id_persona`) REFERENCES `pb_persona` (`id_persona`),
  CONSTRAINT `fk_id_profesiones_ocupaciones` FOREIGN KEY (`id_profesiones_ocupaciones`) REFERENCES `pb_profesiones_ocupaciones` (`id_profesiones_ocupaciones`),
  CONSTRAINT `fk_id_universidades_normales` FOREIGN KEY (`id_universidades_normales`) REFERENCES `pb_universidades_normales` (`id_universidades_normales`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_persona_grado_academico`
--

LOCK TABLES `pb_persona_grado_academico` WRITE;
/*!40000 ALTER TABLE `pb_persona_grado_academico` DISABLE KEYS */;
INSERT INTO `pb_persona_grado_academico` VALUES (8,17,25,3,'PRIVADA','2021'),(9,19,11,4,'PÚBLICA','2021');
/*!40000 ALTER TABLE `pb_persona_grado_academico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_personal`
--

DROP TABLE IF EXISTS `pb_personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_personal` (
  `id_personal` int(11) NOT NULL AUTO_INCREMENT,
  `id_oficina` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `estado_personal` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_personal`),
  KEY `pb_personal_fk1` (`id_oficina`),
  KEY `pb_personal_fk2` (`id_usuario`),
  CONSTRAINT `pb_personal_fk1` FOREIGN KEY (`id_oficina`) REFERENCES `pb_oficina` (`id_oficina`),
  CONSTRAINT `pb_personal_fk2` FOREIGN KEY (`id_usuario`) REFERENCES `pb_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_personal`
--

LOCK TABLES `pb_personal` WRITE;
/*!40000 ALTER TABLE `pb_personal` DISABLE KEYS */;
/*!40000 ALTER TABLE `pb_personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_planificacion_programa`
--

DROP TABLE IF EXISTS `pb_planificacion_programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_planificacion_programa` (
  `id_planificacion_programa` int(11) NOT NULL AUTO_INCREMENT,
  `id_programa` int(11) DEFAULT NULL,
  `id_gestion` int(11) DEFAULT NULL,
  `id_sede` int(11) NOT NULL,
  `id_tipo_programa` int(11) DEFAULT NULL,
  `id_grado_academico` int(11) DEFAULT NULL,
  `sigla_programa` varchar(20) DEFAULT NULL,
  `mencion_programa` varchar(100) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `costo_colegiatura` decimal(7,2) DEFAULT NULL,
  `costo_matricula` decimal(6,2) DEFAULT NULL,
  `descuento_individual` decimal(6,2) DEFAULT NULL,
  `descuento_grupal` decimal(6,2) DEFAULT NULL,
  `horario` text DEFAULT NULL,
  `creditaje` int(11) DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `resumen` text DEFAULT NULL,
  `objetivo_programa` text DEFAULT NULL,
  `requisitos` text DEFAULT NULL,
  `contenido` text DEFAULT NULL,
  `titulacion_intermedia` text DEFAULT NULL,
  `celular_ref` text DEFAULT NULL,
  `telefono_ref` text DEFAULT NULL,
  `dirigido_a` text DEFAULT NULL,
  `id_usuario_registro` int(11) DEFAULT NULL,
  `fecha_registro_programa` timestamp NULL DEFAULT NULL,
  `cantidad_minima_paralelo` int(11) DEFAULT NULL,
  `cantidad_maxima_paralelo` int(11) DEFAULT NULL,
  `descripcion_programa` varchar(250) DEFAULT NULL,
  `observacion_programa` varchar(250) DEFAULT NULL,
  `modalidad_graduacion` text DEFAULT NULL,
  `estado_programa` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_planificacion_programa`),
  KEY `pb_planificacion_programa_fk1` (`id_programa`),
  KEY `pb_planificacion_programa_fk2` (`id_gestion`),
  KEY `pb_planificacion_programa_fk3` (`id_sede`),
  KEY `pb_planificacion_programa_fk4` (`id_tipo_programa`),
  KEY `pb_planificacion_programa_fk5` (`id_grado_academico`),
  CONSTRAINT `pb_planificacion_programa_fk1` FOREIGN KEY (`id_programa`) REFERENCES `pb_programa` (`id_programa`),
  CONSTRAINT `pb_planificacion_programa_fk2` FOREIGN KEY (`id_gestion`) REFERENCES `pb_gestion` (`id_gestion`),
  CONSTRAINT `pb_planificacion_programa_fk3` FOREIGN KEY (`id_sede`) REFERENCES `pb_sede` (`id_sede`),
  CONSTRAINT `pb_planificacion_programa_fk4` FOREIGN KEY (`id_tipo_programa`) REFERENCES `pb_tipo_programa` (`id_tipo_programa`),
  CONSTRAINT `pb_planificacion_programa_fk5` FOREIGN KEY (`id_grado_academico`) REFERENCES `pb_grado_academico` (`id_grado_academico`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_planificacion_programa`
--

LOCK TABLES `pb_planificacion_programa` WRITE;
/*!40000 ALTER TABLE `pb_planificacion_programa` DISABLE KEYS */;
INSERT INTO `pb_planificacion_programa` VALUES (1,1,21,1,3,5,'JFDF',NULL,'2021-09-20','2021-12-20',2000.00,200.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,'REGISTRADO'),(2,2,21,1,3,5,'JFDF',NULL,'2021-09-20','2021-12-20',2000.00,200.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,'REGISTRADO'),(5,2,21,2,1,2,'JFDF',NULL,'2021-09-20','2021-12-20',2000.00,200.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,'REGISTRADO');
/*!40000 ALTER TABLE `pb_planificacion_programa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_profesiones_ocupaciones`
--

DROP TABLE IF EXISTS `pb_profesiones_ocupaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_profesiones_ocupaciones` (
  `id_profesiones_ocupaciones` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `estado` varchar(10) DEFAULT 'REGISTRADO',
  PRIMARY KEY (`id_profesiones_ocupaciones`)
) ENGINE=InnoDB AUTO_INCREMENT=757 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_profesiones_ocupaciones`
--

LOCK TABLES `pb_profesiones_ocupaciones` WRITE;
/*!40000 ALTER TABLE `pb_profesiones_ocupaciones` DISABLE KEYS */;
INSERT INTO `pb_profesiones_ocupaciones` VALUES (1,'Abogado','2021-09-10 02:55:41',NULL,'REGISTRADO'),(2,'Acarreadores de agua y recolectores de leña','2021-09-10 02:55:49',NULL,'REGISTRADO'),(3,'Acompañantes y asistentes personales de sus empleadores (cuidadores de ancianos, discapacitados, etc.)','2021-09-10 02:55:49',NULL,'REGISTRADO'),(4,'Actores de cine, teatro y afines','2021-09-10 02:55:49',NULL,'REGISTRADO'),(5,'Acuicultores, pescadores, cazadores y tramperos','2021-09-10 02:55:49',NULL,'REGISTRADO'),(6,'Adivinadores, yatiris, astrólogos y afines','2021-09-10 02:55:50',NULL,'REGISTRADO'),(7,'Administrador de empresas','2021-09-10 02:55:50',NULL,'REGISTRADO'),(8,'Administradores de empresas','2021-09-10 02:55:50',NULL,'REGISTRADO'),(9,'Administradores de sistemas','2021-09-10 02:55:50',NULL,'REGISTRADO'),(10,'Agentes comerciales y corredores','2021-09-10 02:55:50',NULL,'REGISTRADO'),(11,'Agentes de administración tributaria (‘inspectora de impuestos)','2021-09-10 02:55:51',NULL,'REGISTRADO'),(12,'Agentes de aduanas e inspectores de fronteras (agente aduanero)','2021-09-10 02:55:51',NULL,'REGISTRADO'),(13,'Agentes de bolsa, cambio y otros servicios financieros','2021-09-10 02:55:51',NULL,'REGISTRADO'),(14,'Agentes de compras y consignatarios','2021-09-10 02:55:51',NULL,'REGISTRADO'),(15,'Agentes de empleo y contratistas de mano de obra','2021-09-10 02:55:51',NULL,'REGISTRADO'),(16,'Agentes de la administración pública para la aplicación de normas, leyes y afines','2021-09-10 02:55:52',NULL,'REGISTRADO'),(17,'Agentes de seguro','2021-09-10 02:55:52',NULL,'REGISTRADO'),(18,'Agentes de servicios de expedición de licencias y permisos','2021-09-10 02:55:52',NULL,'REGISTRADO'),(19,'Agentes de viajes','2021-09-10 02:55:52',NULL,'REGISTRADO'),(20,'Agentes inmobiliarios','2021-09-10 02:55:52',NULL,'REGISTRADO'),(21,'Agrónomos','2021-09-10 02:55:52',NULL,'REGISTRADO'),(22,'Albañiles, levantadores de paredes, vaciadores de cemento armado y afines','2021-09-10 02:55:53',NULL,'REGISTRADO'),(23,'Alfareros de barro, arcilla y afines (adobero)','2021-09-10 02:55:53',NULL,'REGISTRADO'),(24,'Alfareros, cristaleros y afines','2021-09-10 02:55:53',NULL,'REGISTRADO'),(25,'Analistas de sistemas','2021-09-10 02:55:53',NULL,'REGISTRADO'),(26,'Animadores de espectáculos públicos (discjockey)','2021-09-10 02:55:53',NULL,'REGISTRADO'),(27,'Antropólogos','2021-09-10 02:55:54',NULL,'REGISTRADO'),(28,'Aparejadores y empalmadores de cables','2021-09-10 02:55:54',NULL,'REGISTRADO'),(29,'Apelambradores, pellejeros y curtidores','2021-09-10 02:55:54',NULL,'REGISTRADO'),(30,'Apicultores o criadores de abejas','2021-09-10 02:55:54',NULL,'REGISTRADO'),(31,'Arqueólogos','2021-09-10 02:55:54',NULL,'REGISTRADO'),(32,'Arquitectos y afines','2021-09-10 02:55:54',NULL,'REGISTRADO'),(33,'Arquitectos, urbanistas y afines','2021-09-10 02:55:55',NULL,'REGISTRADO'),(34,'Artesanos de bronce, cobre, peltre y otras aleaciones','2021-09-10 02:55:55',NULL,'REGISTRADO'),(35,'Artesanos de cerámica, yeso y materiales similares (porcelana fría, etc.)','2021-09-10 02:55:55',NULL,'REGISTRADO'),(36,'Artesanos de la madera y otros materiales similares','2021-09-10 02:55:55',NULL,'REGISTRADO'),(37,'Artesanos de la madera, tejidos, cuero y otros materiales','2021-09-10 02:55:55',NULL,'REGISTRADO'),(38,'Artesanos de los tejidos, materiales textiles y materiales similares','2021-09-10 02:55:56',NULL,'REGISTRADO'),(39,'Artesanos de otros materiales n.c.p. (espuma, esponja, papel, corcho, vidrio, plástico, materiales reciclables, etc.)','2021-09-10 02:55:56',NULL,'REGISTRADO'),(40,'Artesanos de paja, palma y otros materiales trenzables (cestería)','2021-09-10 02:55:56',NULL,'REGISTRADO'),(41,'Artesanos del cuero y cuerina','2021-09-10 02:55:56',NULL,'REGISTRADO'),(42,'Artista plástico (escultores, pintores, dibujantes y afines)','2021-09-10 02:55:56',NULL,'REGISTRADO'),(43,'Artistas creativos y ejecutantes profesionales','2021-09-10 02:55:57',NULL,'REGISTRADO'),(44,'Asistentes de venta de tiendas y almacenes','2021-09-10 02:55:57',NULL,'REGISTRADO'),(45,'Atletas, deportistas y afines','2021-09-10 02:55:57',NULL,'REGISTRADO'),(46,'Audiólogos','2021-09-10 02:55:57',NULL,'REGISTRADO'),(47,'Auditores (contaduría pública)','2021-09-10 02:55:57',NULL,'REGISTRADO'),(48,'Auxiliares contables, financieros y afines','2021-09-10 02:55:58',NULL,'REGISTRADO'),(49,'Auxiliares de enfermería (Enfermeras de nivel medio)','2021-09-10 02:55:58',NULL,'REGISTRADO'),(50,'Abogados','2021-09-10 02:55:58',NULL,'REGISTRADO'),(51,'Acarreadores de agua y recolectores de leña','2021-09-10 02:55:58',NULL,'REGISTRADO'),(52,'Acompañantes y asistentes personales de sus empleadores (cuidadores de ancianos, discapacitados, etc.)','2021-09-10 02:55:58',NULL,'REGISTRADO'),(53,'Actores de cine, teatro y afines','2021-09-10 02:55:59',NULL,'REGISTRADO'),(54,'Acuicultores, pescadores, cazadores y tramperos','2021-09-10 02:55:59',NULL,'REGISTRADO'),(55,'Adivinadores, yatiris, astrólogos y afines','2021-09-10 02:55:59',NULL,'REGISTRADO'),(56,'Administrador de empresas','2021-09-10 02:55:59',NULL,'REGISTRADO'),(57,'Administradores de empresas','2021-09-10 02:55:59',NULL,'REGISTRADO'),(58,'Administradores de sistemas','2021-09-10 02:56:00',NULL,'REGISTRADO'),(59,'Agentes comerciales y corredores','2021-09-10 02:56:00',NULL,'REGISTRADO'),(60,'Agentes de administración tributaria (‘inspectora de impuestos)','2021-09-10 02:56:00',NULL,'REGISTRADO'),(61,'Agentes de aduanas e inspectores de fronteras (agente aduanero)','2021-09-10 02:56:00',NULL,'REGISTRADO'),(62,'Agentes de bolsa, cambio y otros servicios financieros','2021-09-10 02:56:00',NULL,'REGISTRADO'),(63,'Agentes de compras y consignatarios','2021-09-10 02:56:01',NULL,'REGISTRADO'),(64,'Agentes de empleo y contratistas de mano de obra','2021-09-10 02:56:01',NULL,'REGISTRADO'),(65,'Agentes de la administración pública para la aplicación de normas, leyes y afines','2021-09-10 02:56:01',NULL,'REGISTRADO'),(66,'Agentes de seguro','2021-09-10 02:56:01',NULL,'REGISTRADO'),(67,'Agentes de servicios de expedición de licencias y permisos','2021-09-10 02:56:01',NULL,'REGISTRADO'),(68,'Agentes de viajes','2021-09-10 02:56:02',NULL,'REGISTRADO'),(69,'Agentes inmobiliarios','2021-09-10 02:56:02',NULL,'REGISTRADO'),(70,'Agrónomos','2021-09-10 02:56:02',NULL,'REGISTRADO'),(71,'Albañiles, levantadores de paredes, vaciadores de cemento armado y afines','2021-09-10 02:56:02',NULL,'REGISTRADO'),(72,'Alfareros de barro, arcilla y afines (adobero)','2021-09-10 02:56:02',NULL,'REGISTRADO'),(73,'Alfareros, cristaleros y afines','2021-09-10 02:56:02',NULL,'REGISTRADO'),(74,'Analistas de sistemas','2021-09-10 02:56:03',NULL,'REGISTRADO'),(75,'Animadores de espectáculos públicos (discjockey)','2021-09-10 02:56:03',NULL,'REGISTRADO'),(76,'Antropólogos','2021-09-10 02:56:03',NULL,'REGISTRADO'),(77,'Aparejadores y empalmadores de cables','2021-09-10 02:56:03',NULL,'REGISTRADO'),(78,'Apelambradores, pellejeros y curtidores','2021-09-10 02:56:04',NULL,'REGISTRADO'),(79,'Apicultores o criadores de abejas','2021-09-10 02:56:04',NULL,'REGISTRADO'),(80,'Arqueólogos','2021-09-10 02:56:04',NULL,'REGISTRADO'),(81,'Arquitectos y afines','2021-09-10 02:56:04',NULL,'REGISTRADO'),(82,'Arquitectos, urbanistas y afines','2021-09-10 02:56:04',NULL,'REGISTRADO'),(83,'Artesanos de bronce, cobre, peltre y otras aleaciones','2021-09-10 02:56:05',NULL,'REGISTRADO'),(84,'Artesanos de cerámica, yeso y materiales similares (porcelana fría, etc.)','2021-09-10 02:56:05',NULL,'REGISTRADO'),(85,'Artesanos de la madera y otros materiales similares','2021-09-10 02:56:05',NULL,'REGISTRADO'),(86,'Artesanos de la madera, tejidos, cuero y otros materiales','2021-09-10 02:56:05',NULL,'REGISTRADO'),(87,'Artesanos de los tejidos, materiales textiles y materiales similares','2021-09-10 02:56:05',NULL,'REGISTRADO'),(88,'Artesanos de otros materiales n.c.p. (espuma, esponja, papel, corcho, vidrio, plástico, materiales reciclables, etc.)','2021-09-10 02:56:05',NULL,'REGISTRADO'),(89,'Artesanos de paja, palma y otros materiales trenzables (cestería)','2021-09-10 02:56:06',NULL,'REGISTRADO'),(90,'Artesanos del cuero y cuerina','2021-09-10 02:56:06',NULL,'REGISTRADO'),(91,'Artista plástico (escultores, pintores, dibujantes y afines)','2021-09-10 02:56:06',NULL,'REGISTRADO'),(92,'Artistas creativos y ejecutantes profesionales','2021-09-10 02:56:06',NULL,'REGISTRADO'),(93,'Asistentes de venta de tiendas y almacenes','2021-09-10 02:56:06',NULL,'REGISTRADO'),(94,'Atletas, deportistas y afines','2021-09-10 02:56:07',NULL,'REGISTRADO'),(95,'Audiólogos','2021-09-10 02:56:07',NULL,'REGISTRADO'),(96,'Auditores (contaduría pública)','2021-09-10 02:56:07',NULL,'REGISTRADO'),(97,'Auxiliares contables, financieros y afines','2021-09-10 02:56:07',NULL,'REGISTRADO'),(98,'Auxiliares de enfermería (Enfermeras de nivel medio)','2021-09-10 02:56:08',NULL,'REGISTRADO'),(99,'Auxiliares laicos de las religiones','2021-09-10 02:56:08',NULL,'REGISTRADO'),(100,'Ayudantes de ambulancias','2021-09-10 02:56:08',NULL,'REGISTRADO'),(101,'Ayudantes de cocina (lavaplatos, peladores de papa, etc.)','2021-09-10 02:56:08',NULL,'REGISTRADO'),(102,'Ayudantes de preparación de alimentos','2021-09-10 02:56:09',NULL,'REGISTRADO'),(103,'Ayudantes de preparación de alimentos','2021-09-10 02:56:09',NULL,'REGISTRADO'),(104,'Azafatas ( servicio de abordo)','2021-09-10 02:56:09',NULL,'REGISTRADO'),(105,'Barnizadores y afines','2021-09-10 02:56:09',NULL,'REGISTRADO'),(106,'Barrenderos y afines','2021-09-10 02:56:09',NULL,'REGISTRADO'),(107,'Bibliotecólogos (documentalista)','2021-09-10 02:56:10',NULL,'REGISTRADO'),(108,'Biólogos, botánicos, zoólogos, entomólogos, ornitólogos y afines','2021-09-10 02:56:10',NULL,'REGISTRADO'),(109,'Bioquímicos y afines','2021-09-10 02:56:10',NULL,'REGISTRADO'),(110,'Bomberos','2021-09-10 02:56:10',NULL,'REGISTRADO'),(111,'Cajeros y afines','2021-09-10 02:56:10',NULL,'REGISTRADO'),(112,'Cajeros, pagadores, cobradores de ventanilla y afines','2021-09-10 02:56:11',NULL,'REGISTRADO'),(113,'Cajistas, tipógrafos y afines','2021-09-10 02:56:11',NULL,'REGISTRADO'),(114,'Cantantes','2021-09-10 02:56:11',NULL,'REGISTRADO'),(115,'Cantantes, (conservatorio)','2021-09-10 02:56:11',NULL,'REGISTRADO'),(116,'Capitanes y oficiales de cubierta','2021-09-10 02:56:11',NULL,'REGISTRADO'),(117,'Carpinteros de armar y de obra blanca (armadores de empotrados de madera)','2021-09-10 02:56:12',NULL,'REGISTRADO'),(118,'Carpinteros, ebanistas y afines (carpintero en muebles de madera)','2021-09-10 02:56:12',NULL,'REGISTRADO'),(119,'Cartógrafos y agrimensores','2021-09-10 02:56:12',NULL,'REGISTRADO'),(120,'Catadores y clasificadores de alimentos y bebidas','2021-09-10 02:56:12',NULL,'REGISTRADO'),(121,'Cazadores y tramperos','2021-09-10 02:56:12',NULL,'REGISTRADO'),(122,'Cesteros, bruceros y afines (fabricantes de artículos diversos de cestería, cepillos, etc.)','2021-09-10 02:56:13',NULL,'REGISTRADO'),(123,'Chapistas y caldereros (hojalatero)','2021-09-10 02:56:13',NULL,'REGISTRADO'),(124,'Chefs','2021-09-10 02:56:13',NULL,'REGISTRADO'),(125,'Clasificadores y/o seleccionadores de desechos','2021-09-10 02:56:13',NULL,'REGISTRADO'),(126,'Cobradores y afines','2021-09-10 02:56:13',NULL,'REGISTRADO'),(127,'Cocineros','2021-09-10 02:56:14',NULL,'REGISTRADO'),(128,'Codificadores de datos, correctores de pruebas de imprenta y afines','2021-09-10 02:56:14',NULL,'REGISTRADO'),(129,'Compositores','2021-09-10 02:56:14',NULL,'REGISTRADO'),(130,'Compositores (conservatorio)','2021-09-10 02:56:14',NULL,'REGISTRADO'),(131,'Compradores','2021-09-10 02:56:15',NULL,'REGISTRADO'),(132,'Conductores de autobuses, góndolas, camionetas y micros','2021-09-10 02:56:15',NULL,'REGISTRADO'),(133,'Conductores de automóviles, taxis y radiotaxis','2021-09-10 02:56:15',NULL,'REGISTRADO'),(134,'Conductores de camiones pesados (camionero, trailero)','2021-09-10 02:56:15',NULL,'REGISTRADO'),(135,'Conductores de camiones pesados y autobuses','2021-09-10 02:56:15',NULL,'REGISTRADO'),(136,'Conductores de embarcaciones','2021-09-10 02:56:16',NULL,'REGISTRADO'),(137,'Conductores de embarcaciones (pontonero, lanchero, etc.)','2021-09-10 02:56:16',NULL,'REGISTRADO'),(138,'Conductores de minibuses y vagonetas','2021-09-10 02:56:16',NULL,'REGISTRADO'),(139,'Conductores de motocicletas, automóviles, taxis, minibuses y vagonetas','2021-09-10 02:56:16',NULL,'REGISTRADO'),(140,'Conductores de mototaxis o motocicletas','2021-09-10 02:56:16',NULL,'REGISTRADO'),(141,'Conductores de otros vehículos livianos n.c.p.','2021-09-10 02:56:17',NULL,'REGISTRADO'),(142,'Conductores de vehículos accionados a pedal o a brazo (conductor de triciclo de carga)','2021-09-10 02:56:17',NULL,'REGISTRADO'),(143,'Conductores de vehículos y máquinas de tracción animal (carretonero)','2021-09-10 02:56:17',NULL,'REGISTRADO'),(144,'Conductores de vehículos y operadores de equipos pesados móviles','2021-09-10 02:56:17',NULL,'REGISTRADO'),(145,'Conserjes','2021-09-10 02:56:17',NULL,'REGISTRADO'),(146,'Constructores de casas con materiales tradicionales (jatata, palma, etc.)','2021-09-10 02:56:18',NULL,'REGISTRADO'),(147,'Constructores de embarcaciones acuáticas','2021-09-10 02:56:18',NULL,'REGISTRADO'),(148,'Contadores','2021-09-10 02:56:18',NULL,'REGISTRADO'),(149,'Controladores de instalaciones de procesamiento de productos químicos','2021-09-10 02:56:18',NULL,'REGISTRADO'),(150,'Controladores de procesos de producción de metales','2021-09-10 02:56:18',NULL,'REGISTRADO'),(151,'Controladores de tráfico aéreo','2021-09-10 02:56:19',NULL,'REGISTRADO'),(152,'Coreógrafos y bailarines','2021-09-10 02:56:19',NULL,'REGISTRADO'),(153,'Coreógrafos y bailarines profesionales','2021-09-10 02:56:19',NULL,'REGISTRADO'),(154,'Costureros, bordadores y afines','2021-09-10 02:56:19',NULL,'REGISTRADO'),(155,'Cría de conejos cuye y castilla','2021-09-10 02:56:19',NULL,'REGISTRADO'),(156,'Criadores de aves (gallinas, patos, pollos, etc.)','2021-09-10 02:56:20',NULL,'REGISTRADO'),(157,'Criadores de ganado camélido o auquénido (llamas, alpacas, etc.)','2021-09-10 02:56:20',NULL,'REGISTRADO'),(158,'Criadores de ganado ovino, caprino y equino (ovejas, cabras, chivas, etc.)','2021-09-10 02:56:20',NULL,'REGISTRADO'),(159,'Criadores de ganado porcino (cerdos)','2021-09-10 02:56:20',NULL,'REGISTRADO'),(160,'Criadores de ganado vacuno (bueyes, vacas, toretes, terneras, búfalos, etc.)','2021-09-10 02:56:20',NULL,'REGISTRADO'),(161,'Criadores de gatos, perros, pericos, loros, canarios, palomas, etc.','2021-09-10 02:56:21',NULL,'REGISTRADO'),(162,'Criadores de lombrices, ranas y cochinillas','2021-09-10 02:56:21',NULL,'REGISTRADO'),(163,'Criadores y trabajadores pecuarios de la cría de animales','2021-09-10 02:56:21',NULL,'REGISTRADO'),(164,'Criadores y trabajadores pecuarios de la cría de animales','2021-09-10 02:56:21',NULL,'REGISTRADO'),(165,'Cristaleros o vidrieros','2021-09-10 02:56:21',NULL,'REGISTRADO'),(166,'Cuidadores de autos','2021-09-10 02:56:22',NULL,'REGISTRADO'),(167,'Cuidadores de niños y auxiliares de maestros','2021-09-10 02:56:22',NULL,'REGISTRADO'),(168,'Cuidadores de niños y auxiliares de maestros (niñeras)','2021-09-10 02:56:22',NULL,'REGISTRADO'),(169,'Cuidadores, peinadores y bañadores de mascotas','2021-09-10 02:56:22',NULL,'REGISTRADO'),(170,'Curanderos, naturistas y acupunturistas (kallawaya, naturópata, herbolario, etc.)','2021-09-10 02:56:22',NULL,'REGISTRADO'),(171,'Declarantes o gestores de aduana','2021-09-10 02:56:23',NULL,'REGISTRADO'),(172,'Demostradores e impulsadores','2021-09-10 02:56:23',NULL,'REGISTRADO'),(173,'Dentistas auxiliares y ayudantes de odontología','2021-09-10 02:56:23',NULL,'REGISTRADO'),(174,'Desarrolladores de software','2021-09-10 02:56:23',NULL,'REGISTRADO'),(175,'Desarrolladores de Web y multimedia','2021-09-10 02:56:23',NULL,'REGISTRADO'),(176,'Desarrolladores y analistas de software y multimedia','2021-09-10 02:56:24',NULL,'REGISTRADO'),(177,'Dinamiteros y pegadores','2021-09-10 02:56:24',NULL,'REGISTRADO'),(178,'Directivos de organizaciones religiosas','2021-09-10 02:56:24',NULL,'REGISTRADO'),(179,'Directores / jefes de almacenes, control de existencias y distribución','2021-09-10 02:56:24',NULL,'REGISTRADO'),(180,'Directores / jefes de área de comercialización y marketing','2021-09-10 02:56:24',NULL,'REGISTRADO'),(181,'Directores / jefes de área de publicidad, relaciones públicas y prensa','2021-09-10 02:56:24',NULL,'REGISTRADO'),(182,'Directores / jefes de área financiera, contabilidad, presupuesto y administrativo','2021-09-10 02:56:25',NULL,'REGISTRADO'),(183,'Directores / jefes de personal, recursos humanos y de relaciones laborales','2021-09-10 02:56:25',NULL,'REGISTRADO'),(184,'Directores / jefes del área de control de calidad','2021-09-10 02:56:25',NULL,'REGISTRADO'),(185,'Directores / jefes del área de investigación y desarrollo','2021-09-10 02:56:25',NULL,'REGISTRADO'),(186,'Directores / jefes del área de planificación','2021-09-10 02:56:25',NULL,'REGISTRADO'),(187,'Directores / jefes del área de transporte','2021-09-10 02:56:26',NULL,'REGISTRADO'),(188,'Directores / jefes del área informática','2021-09-10 02:56:26',NULL,'REGISTRADO'),(189,'Directores / jefes del área jurídica o legal','2021-09-10 02:56:26',NULL,'REGISTRADO'),(190,'Directores de cine, teatro y afines','2021-09-10 02:56:26',NULL,'REGISTRADO'),(191,'Directores generales / gerentes generales de empresas agrícolas, pecuarias, silvicultura, caza y pesca','2021-09-10 02:56:27',NULL,'REGISTRADO'),(192,'Directores generales / gerentes generales de empresas de actividades inmobiliarias, actividades de profesionales y técnicos','2021-09-10 02:56:27',NULL,'REGISTRADO'),(193,'Directores generales / gerentes generales de empresas de alojamiento, servicios de comida y bebida','2021-09-10 02:56:27',NULL,'REGISTRADO'),(194,'Directores generales / gerentes generales de empresas de construcción','2021-09-10 02:56:27',NULL,'REGISTRADO'),(195,'Directores generales / gerentes generales de empresas de explotación de minas y canteras','2021-09-10 02:56:28',NULL,'REGISTRADO'),(196,'Directores generales / gerentes generales de empresas de intermediación financiera y de seguros','2021-09-10 02:56:28',NULL,'REGISTRADO'),(197,'Directores generales / gerentes generales de empresas de la industria manufacturera','2021-09-10 02:56:28',NULL,'REGISTRADO'),(198,'Directores generales / gerentes generales de empresas de la tecnología de la información y las comunicaciones','2021-09-10 02:56:28',NULL,'REGISTRADO'),(199,'Directores generales / gerentes generales de empresas de producción y distribución de agua, alcantarillado, gestión de desechos y actividades de saneamiento','2021-09-10 02:56:28',NULL,'REGISTRADO'),(200,'Directores generales / gerentes generales de empresas de producción y distribución de electricidad, gas, vapor y aire acondicionado','2021-09-10 02:56:29',NULL,'REGISTRADO'),(201,'Directores generales / gerentes generales de empresas de servicios sociales y de salud','2021-09-10 02:56:29',NULL,'REGISTRADO'),(202,'Directores generales / gerentes generales de empresas de transporte y almacenamiento','2021-09-10 02:56:29',NULL,'REGISTRADO'),(203,'Directores generales / gerentes generales de empresas del comercio y reparación de vehículos automotores','2021-09-10 02:56:29',NULL,'REGISTRADO'),(204,'Directores generales / gerentes generales de entidades educativas','2021-09-10 02:56:29',NULL,'REGISTRADO'),(205,'Directores generales / gerentes generales de organizaciones y/o empresas de entretenimiento, recreación y artísticas','2021-09-10 02:56:30',NULL,'REGISTRADO'),(206,'Directores generales y gerentes generales de empresas','2021-09-10 02:56:30',NULL,'REGISTRADO'),(207,'Directores, gerentes y/o jefes de área','2021-09-10 02:56:30',NULL,'REGISTRADO'),(208,'Dirigentes de organizaciones de empresarios y de trabajadores','2021-09-10 02:56:30',NULL,'REGISTRADO'),(209,'Dirigentes de organizaciones humanitarias y de otras organizaciones especializadas','2021-09-10 02:56:30',NULL,'REGISTRADO'),(210,'Dirigentes de partidos políticos','2021-09-10 02:56:30',NULL,'REGISTRADO'),(211,'Diseñadores gráficos y multimedia','2021-09-10 02:56:31',NULL,'REGISTRADO'),(212,'Diseñadores y administradores de base/bancos de datos','2021-09-10 02:56:31',NULL,'REGISTRADO'),(213,'Diseñadores y decoradores de interior; excepto técnicos en diseño gráfico','2021-09-10 02:56:31',NULL,'REGISTRADO'),(214,'Economistas','2021-09-10 02:56:31',NULL,'REGISTRADO'),(215,'Ecónomos y mayordomos','2021-09-10 02:56:31',NULL,'REGISTRADO'),(216,'Educadores para necesidades especiales','2021-09-10 02:56:32',NULL,'REGISTRADO'),(217,'Embaladores o empacadores manuales (fraccionadores, etiquetadores y seleccionadores manuales)','2021-09-10 02:56:32',NULL,'REGISTRADO'),(218,'Empleados de agencia de viajes','2021-09-10 02:56:32',NULL,'REGISTRADO'),(219,'Empleados de archivos y fotocopiadoras','2021-09-10 02:56:32',NULL,'REGISTRADO'),(220,'Empleados de biblioteca (bibliotecario)','2021-09-10 02:56:32',NULL,'REGISTRADO'),(221,'Empleados de centros de llamadas (atención de cabina telefónica)','2021-09-10 02:56:33',NULL,'REGISTRADO'),(222,'Empleados de contabilidad y cálculo de costos','2021-09-10 02:56:33',NULL,'REGISTRADO'),(223,'Empleados de contabilidad y registro de materiales','2021-09-10 02:56:33',NULL,'REGISTRADO'),(224,'Empleados de control de abastecimiento e inventario (almaceneros, inventariador, control de existencias, etc.)','2021-09-10 02:56:33',NULL,'REGISTRADO'),(225,'Empleados de oficina tipo administrativo','2021-09-10 02:56:33',NULL,'REGISTRADO'),(226,'Empleados de servicios de apoyo a la producción','2021-09-10 02:56:34',NULL,'REGISTRADO'),(227,'Empleados de servicios de correos y courrier (seleccionador de correspondencias, cartero)','2021-09-10 02:56:34',NULL,'REGISTRADO'),(228,'Empleados de servicios de información al cliente','2021-09-10 02:56:34',NULL,'REGISTRADO'),(229,'Empleados de servicios de transporte (control de paradas de vehículos, registrador de encomiendas, etc.)','2021-09-10 02:56:34',NULL,'REGISTRADO'),(230,'Empleados de servicios estadísticos, financieros y de seguros','2021-09-10 02:56:35',NULL,'REGISTRADO'),(231,'Empleados de trato directo con el público','2021-09-10 02:56:35',NULL,'REGISTRADO'),(232,'Empleados de ventillas de información','2021-09-10 02:56:35',NULL,'REGISTRADO'),(233,'Empleados encargados de las nóminas','2021-09-10 02:56:35',NULL,'REGISTRADO'),(234,'Encargados del registro de materiales y de transportes','2021-09-10 02:56:35',NULL,'REGISTRADO'),(235,'Encuadernadores, compaginadores y afines','2021-09-10 02:56:35',NULL,'REGISTRADO'),(236,'Enfermeras profesionales','2021-09-10 02:56:36',NULL,'REGISTRADO'),(237,'Enfermeras y parteras de nivel medio','2021-09-10 02:56:36',NULL,'REGISTRADO'),(238,'Enfermeras y parteras profesionales','2021-09-10 02:56:36',NULL,'REGISTRADO'),(239,'Ensambladores','2021-09-10 02:56:36',NULL,'REGISTRADO'),(240,'Ensambladores de equipos eléctricos y electrónicos (equipos de televisión, radio, computación, etc.)','2021-09-10 02:56:36',NULL,'REGISTRADO'),(241,'Ensambladores de maquinaria mecánica (vehículos, tractores, etc.)','2021-09-10 02:56:37',NULL,'REGISTRADO'),(242,'Entrenadores de deportes y aptitudes físicas','2021-09-10 02:56:37',NULL,'REGISTRADO'),(243,'Entrenadores, instructores y árbitros de actividades deportivas','2021-09-10 02:56:37',NULL,'REGISTRADO'),(244,'Entrevistadores de encuestas e investigadores de mercadeo','2021-09-10 02:56:37',NULL,'REGISTRADO'),(245,'Escribientes públicos y afines (llenador de formulario de descargo de impuestos, etc.)','2021-09-10 02:56:37',NULL,'REGISTRADO'),(246,'Escritores','2021-09-10 02:56:38',NULL,'REGISTRADO'),(247,'Especialistas en métodos pedagógicos y materiales didácticos','2021-09-10 02:56:38',NULL,'REGISTRADO'),(248,'Especialistas en tratamientos de belleza y afines (pedicuro, maquillador)','2021-09-10 02:56:38',NULL,'REGISTRADO'),(249,'Estadísticos','2021-09-10 02:56:38',NULL,'REGISTRADO'),(250,'Expendedores en gasolineras','2021-09-10 02:56:38',NULL,'REGISTRADO'),(251,'Fabricantes de jabón','2021-09-10 02:56:39',NULL,'REGISTRADO'),(252,'Fabricantes de moldes y macheros','2021-09-10 02:56:39',NULL,'REGISTRADO'),(253,'Fabricantes de velas','2021-09-10 02:56:39',NULL,'REGISTRADO'),(254,'Fabricantes y afinadores de instrumentos musicales cuerdas (guitarras, charangos, mandolinas, pianos, etc.)','2021-09-10 02:56:39',NULL,'REGISTRADO'),(255,'Fabricantes y afinadores de instrumentos musicales de percusión (bombos, cajas, tambores, baterías, etc.)','2021-09-10 02:56:39',NULL,'REGISTRADO'),(256,'Fabricantes y afinadores de instrumentos musicales de viento (sikus, moseños, pututus, toyos, etc.)','2021-09-10 02:56:40',NULL,'REGISTRADO'),(257,'Farmacéuticos (regente de farmacia)','2021-09-10 02:56:40',NULL,'REGISTRADO'),(258,'Filósofos','2021-09-10 02:56:40',NULL,'REGISTRADO'),(259,'Físicos','2021-09-10 02:56:40',NULL,'REGISTRADO'),(260,'Físicos, químicos y afines','2021-09-10 02:56:40',NULL,'REGISTRADO'),(261,'Fisioterapeutas','2021-09-10 02:56:41',NULL,'REGISTRADO'),(262,'Fontaneros/plomeros e instaladores de tuberías','2021-09-10 02:56:41',NULL,'REGISTRADO'),(263,'Fotógrafos','2021-09-10 02:56:41',NULL,'REGISTRADO'),(264,'Funcionarios de dirección de Gobiernos Departamentales','2021-09-10 02:56:41',NULL,'REGISTRADO'),(265,'Funcionarios de dirección de Gobiernos Municipales','2021-09-10 02:56:41',NULL,'REGISTRADO'),(266,'Funcionarios de dirección de la administración pública (Directores generales, directores regionales)','2021-09-10 02:56:42',NULL,'REGISTRADO'),(267,'Funcionarios de servicios de seguridad social','2021-09-10 02:56:42',NULL,'REGISTRADO'),(268,'Garzones, meseras y afines','2021-09-10 02:56:42',NULL,'REGISTRADO'),(269,'Geógrafos','2021-09-10 02:56:42',NULL,'REGISTRADO'),(270,'Geólogos y geofísicos','2021-09-10 02:56:42',NULL,'REGISTRADO'),(271,'Gerentes / administradores de empresas agrícolas','2021-09-10 02:56:43',NULL,'REGISTRADO'),(272,'Gerentes / administradores de empresas agrícolas, pecuarias, agropecuarias, silvicultura, caza y pesca','2021-09-10 02:56:43',NULL,'REGISTRADO'),(273,'Gerentes / administradores de empresas agropecuarias','2021-09-10 02:56:43',NULL,'REGISTRADO'),(274,'Gerentes / administradores de empresas de captación, depuración y distribución de agua','2021-09-10 02:56:43',NULL,'REGISTRADO'),(275,'Gerentes / administradores de empresas de comercio al por mayor y menor','2021-09-10 02:56:43',NULL,'REGISTRADO'),(276,'Gerentes / administradores de empresas de construcción','2021-09-10 02:56:44',NULL,'REGISTRADO'),(277,'Gerentes / administradores de empresas de cuidados personales, limpieza y servicios similares (salón de belleza, empresa de limpieza)','2021-09-10 02:56:44',NULL,'REGISTRADO'),(278,'Gerentes / administradores de empresas de expendio de comida y bebida (restaurantes, pensiones, wisquerías)','2021-09-10 02:56:44',NULL,'REGISTRADO'),(279,'Gerentes / administradores de empresas de generación, transmisión y distribución de electricidad','2021-09-10 02:56:44',NULL,'REGISTRADO'),(280,'Gerentes / administradores de empresas de hospedaje','2021-09-10 02:56:44',NULL,'REGISTRADO'),(281,'Gerentes / administradores de empresas de hospedaje y expendio de comida y bebida','2021-09-10 02:56:45',NULL,'REGISTRADO'),(282,'Gerentes / administradores de empresas de la industria manufacturera','2021-09-10 02:56:45',NULL,'REGISTRADO'),(283,'Gerentes / administradores de empresas de la industria manufacturera, minería y construcción','2021-09-10 02:56:45',NULL,'REGISTRADO'),(284,'Gerentes / administradores de empresas de pesca','2021-09-10 02:56:45',NULL,'REGISTRADO'),(285,'Gerentes / administradores de empresas de reparación de efectos personales y enseres domésticos','2021-09-10 02:56:45',NULL,'REGISTRADO'),(286,'Gerentes / administradores de empresas de reparación de vehículos automotores y motocicletas','2021-09-10 02:56:46',NULL,'REGISTRADO'),(287,'Gerentes / administradores de empresas de servicios de tecnología de la información y las comunicaciones','2021-09-10 02:56:46',NULL,'REGISTRADO'),(288,'Gerentes / administradores de empresas de servicios inmobiliarios, empresariales y de alquiler','2021-09-10 02:56:46',NULL,'REGISTRADO'),(289,'Gerentes / administradores de empresas de telefonía, Internet y otros servicios de la telecomunicación)','2021-09-10 02:56:46',NULL,'REGISTRADO'),(290,'Gerentes / administradores de empresas de transporte','2021-09-10 02:56:46',NULL,'REGISTRADO'),(291,'Gerentes / administradores de empresas mineras','2021-09-10 02:56:46',NULL,'REGISTRADO'),(292,'Gerentes / administradores de empresas pecuarias','2021-09-10 02:56:47',NULL,'REGISTRADO'),(293,'Gerentes / administradores de empresas silvicultura','2021-09-10 02:56:47',NULL,'REGISTRADO'),(294,'Gerentes / administradores de organizaciones deportivas, de esparcimiento y culturales','2021-09-10 02:56:47',NULL,'REGISTRADO'),(295,'Gerentes / administradores de pequeñas y medianas empresas de hospedaje, expendio de comidas, comercio y otros servicios','2021-09-10 02:56:47',NULL,'REGISTRADO'),(296,'Gerentes / administradores de servicios de asistencia social a niños, jóvenes y adultos','2021-09-10 02:56:47',NULL,'REGISTRADO'),(297,'Gerentes / administradores de servicios de educación','2021-09-10 02:56:48',NULL,'REGISTRADO'),(298,'Gerentes / administradores de servicios de salud','2021-09-10 02:56:48',NULL,'REGISTRADO'),(299,'Gerentes / administradores de servicios financieros y de seguros','2021-09-10 02:56:48',NULL,'REGISTRADO'),(300,'Gerentes / administradores de servicios profesionales','2021-09-10 02:56:48',NULL,'REGISTRADO'),(301,'Gerentes / administradores de servicios profesionales n.c.p.','2021-09-10 02:56:48',NULL,'REGISTRADO'),(302,'Gerentes y administradores de pequeñas y medianas empresas agrícolas, Industria manufacturera,','2021-09-10 02:56:49',NULL,'REGISTRADO'),(303,'Guardafrenos, guardagujas y agentes de maniobras','2021-09-10 02:56:49',NULL,'REGISTRADO'),(304,'Guardianes de prisión','2021-09-10 02:56:49',NULL,'REGISTRADO'),(305,'Guardias de seguridad privada','2021-09-10 02:56:49',NULL,'REGISTRADO'),(306,'Guías de viaje, turismo y otros (guías de museo)','2021-09-10 02:56:49',NULL,'REGISTRADO'),(307,'Herramentistas y afines (fabricantes, reparadores de herramientas, cerraduras, llaves, etc.)','2021-09-10 02:56:50',NULL,'REGISTRADO'),(308,'Herreros y torneros','2021-09-10 02:56:50',NULL,'REGISTRADO'),(309,'Herreros, torneros, herramentistas y afines','2021-09-10 02:56:50',NULL,'REGISTRADO'),(310,'Hilanderos y tejedores con telares y a mano (aguayos, frazadas, alfombras, excepto prendas de vestir)','2021-09-10 02:56:50',NULL,'REGISTRADO'),(311,'Historiadores','2021-09-10 02:56:50',NULL,'REGISTRADO'),(312,'Hombres rana (buzos)','2021-09-10 02:56:51',NULL,'REGISTRADO'),(313,'Impresores','2021-09-10 02:56:51',NULL,'REGISTRADO'),(314,'Ingenieros civiles','2021-09-10 02:56:51',NULL,'REGISTRADO'),(315,'Ingenieros de alimentos','2021-09-10 02:56:51',NULL,'REGISTRADO'),(316,'Ingenieros de minas, petroleros, metalúrgicos y afines','2021-09-10 02:56:51',NULL,'REGISTRADO'),(317,'Ingenieros de sonido','2021-09-10 02:56:52',NULL,'REGISTRADO'),(318,'Ingenieros electricistas','2021-09-10 02:56:52',NULL,'REGISTRADO'),(319,'Ingenieros en electrónica','2021-09-10 02:56:52',NULL,'REGISTRADO'),(320,'Ingeniero en mecánica','2021-09-10 02:56:52',NULL,'REGISTRADO'),(321,'Ingeniero en sistemas','2021-09-10 02:56:52',NULL,'REGISTRADO'),(322,'Ingenieros químicos industriales','2021-09-10 02:56:53',NULL,'REGISTRADO'),(323,'Ingenieros y afines','2021-09-10 02:56:53',NULL,'REGISTRADO'),(324,'Inspectores de la enseñanza','2021-09-10 02:56:53',NULL,'REGISTRADO'),(325,'Inspectores de la salud laboral, medioambiental y afines','2021-09-10 02:56:53',NULL,'REGISTRADO'),(326,'Inspectores de policía y detectives','2021-09-10 02:56:53',NULL,'REGISTRADO'),(327,'Instaladores de electricidad, material aislante y de insonorización (electricista de construcción)','2021-09-10 02:56:54',NULL,'REGISTRADO'),(328,'Instaladores o armadores de sistemas de refrigeración y climatización','2021-09-10 02:56:54',NULL,'REGISTRADO'),(329,'Instaladores y reparadores de equipos eléctricos','2021-09-10 02:56:54',NULL,'REGISTRADO'),(330,'Instaladores y reparadores de equipos electrónicos y de telecomunicaciones','2021-09-10 02:56:54',NULL,'REGISTRADO'),(331,'Instaladores y reparadores de líneas eléctricas','2021-09-10 02:56:54',NULL,'REGISTRADO'),(332,'Instaladores y reparadores de tecnología de la información y las comunicaciones','2021-09-10 02:56:55',NULL,'REGISTRADO'),(333,'Instructores de conducción de vehículos automotores','2021-09-10 02:56:55',NULL,'REGISTRADO'),(334,'Instructores en tecnología de la información (computación, etc.)','2021-09-10 02:56:55',NULL,'REGISTRADO'),(335,'Jardineros viviendas particulares y otros','2021-09-10 02:56:55',NULL,'REGISTRADO'),(336,'Jefes de pequeñas poblaciones (comunidades indígenas y campesinas)','2021-09-10 02:56:55',NULL,'REGISTRADO'),(337,'Joyeros, orfebres y plateros','2021-09-10 02:56:56',NULL,'REGISTRADO'),(338,'Jueces','2021-09-10 02:56:56',NULL,'REGISTRADO'),(339,'Lavadores de ropa, limpiadores de vehículos, ventanas y otro lavado a mano','2021-09-10 02:56:56',NULL,'REGISTRADO'),(340,'Lavadores de vehículos y parabrisas','2021-09-10 02:56:56',NULL,'REGISTRADO'),(341,'Lavadores de ventanas','2021-09-10 02:56:56',NULL,'REGISTRADO'),(342,'Lavanderas y planchadoras manuales','2021-09-10 02:56:57',NULL,'REGISTRADO'),(343,'Lectores de medidores y afines (lector de medidor de agua y energía eléctrica)','2021-09-10 02:56:57',NULL,'REGISTRADO'),(344,'Limpiadores de fachadas y deshollinadores','2021-09-10 02:56:57',NULL,'REGISTRADO'),(345,'Limpiadores de viviendas, oficinas, hoteles y otras edificaciones','2021-09-10 02:56:57',NULL,'REGISTRADO'),(346,'Lingüística e idiomas','2021-09-10 02:56:57',NULL,'REGISTRADO'),(347,'Literatos (profesionales en literatura)','2021-09-10 02:56:58',NULL,'REGISTRADO'),(348,'Locutores de radio, televisión y otros medios de comunicación','2021-09-10 02:56:58',NULL,'REGISTRADO'),(349,'Lustrabotas','2021-09-10 02:56:58',NULL,'REGISTRADO'),(350,'Maquinistas de locomotoras','2021-09-10 02:56:58',NULL,'REGISTRADO'),(351,'Maquinistas de locomotoras y afines','2021-09-10 02:56:58',NULL,'REGISTRADO'),(352,'Matemáticos','2021-09-10 02:56:59',NULL,'REGISTRADO'),(353,'Matemáticos, estadísticos y afines','2021-09-10 02:56:59',NULL,'REGISTRADO'),(354,'Mecánicos de precisión, alfareros, artesanos, trabajadores de las artes gráficas y afines','2021-09-10 02:56:59',NULL,'REGISTRADO'),(355,'Mecánicos de precisión, fabricantes de instrumentos musicales y joyeros','2021-09-10 02:56:59',NULL,'REGISTRADO'),(356,'Mecánicos y ajustadores de máquinas agrícolas e industriales','2021-09-10 02:56:59',NULL,'REGISTRADO'),(357,'Mecánicos y ajustadores de motores de avión','2021-09-10 02:57:00',NULL,'REGISTRADO'),(358,'Mecánicos y ajustadores electricistas','2021-09-10 02:57:00',NULL,'REGISTRADO'),(359,'Mecánicos y reparadores de instrumentos de precisión (fabricantes y reparadores de balanzas, relojes. Etc.)','2021-09-10 02:57:00',NULL,'REGISTRADO'),(360,'Mecánicos y reparadores de máquinas','2021-09-10 02:57:00',NULL,'REGISTRADO'),(361,'Mecánicos y reparadores de vehículos de motor (mecánico de autos, llantero, gomero )','2021-09-10 02:57:00',NULL,'REGISTRADO'),(362,'Mecánicos y reparadores en electrónica (radio técnico)','2021-09-10 02:57:01',NULL,'REGISTRADO'),(363,'Médicos generales y especialistas','2021-09-10 02:57:01',NULL,'REGISTRADO'),(364,'Mensajeros, mandaderos, maleteros y repartidores','2021-09-10 02:57:01',NULL,'REGISTRADO'),(365,'Meteorólogos','2021-09-10 02:57:01',NULL,'REGISTRADO'),(366,'Miembros de los órganos: Ejecutivo, Legislativo, Judicial y Electoral','2021-09-10 02:57:01',NULL,'REGISTRADO'),(367,'Miembros del Órgano Ejecutivo','2021-09-10 02:57:01',NULL,'REGISTRADO'),(368,'Miembros del Órgano Electoral','2021-09-10 02:57:02',NULL,'REGISTRADO'),(369,'Miembros del Órgano Judicial (Magistrado de la Corte Suprema)','2021-09-10 02:57:02',NULL,'REGISTRADO'),(370,'Miembros del Órgano Legislativo','2021-09-10 02:57:02',NULL,'REGISTRADO'),(371,'Mineros y operadores de instalaciones mineras (operador de taladro, compresorista, etc.)','2021-09-10 02:57:02',NULL,'REGISTRADO'),(372,'Mineros y operadores de instalaciones mineras, extracción y procesamiento de minerales','2021-09-10 02:57:02',NULL,'REGISTRADO'),(373,'Modelos de moda, arte y publicidad','2021-09-10 02:57:03',NULL,'REGISTRADO'),(374,'Moldeadores, soldadores, chapistas, caldereros, montadores de estructuras metálicas y afines','2021-09-10 02:57:03',NULL,'REGISTRADO'),(375,'Montadores de estructuras metálicas (cerrajeros)','2021-09-10 02:57:03',NULL,'REGISTRADO'),(376,'Músicos ejecutantes de instrumentos de cuerda','2021-09-10 02:57:03',NULL,'REGISTRADO'),(377,'Músicos ejecutantes de instrumentos de cuerda (conservatorio)','2021-09-10 02:57:03',NULL,'REGISTRADO'),(378,'Músicos ejecutantes de instrumentos de percusión','2021-09-10 02:57:04',NULL,'REGISTRADO'),(379,'Músicos ejecutantes de instrumentos de percusión (conservatorio)','2021-09-10 02:57:04',NULL,'REGISTRADO'),(380,'Músicos ejecutantes de instrumentos de viento','2021-09-10 02:57:04',NULL,'REGISTRADO'),(381,'Músicos ejecutantes de instrumentos de viento (conservatorio)','2021-09-10 02:57:04',NULL,'REGISTRADO'),(382,'Nutricionistas y dietistas','2021-09-10 02:57:04',NULL,'REGISTRADO'),(383,'Ocupaciones relacionadas con la prestación de servicios en lugares públicos','2021-09-10 02:57:05',NULL,'REGISTRADO'),(384,'Odontólogos o dentistas','2021-09-10 02:57:05',NULL,'REGISTRADO'),(385,'Oficiales de las Fuerzas Armadas','2021-09-10 02:57:05',NULL,'REGISTRADO'),(386,'Oficiales de policía','2021-09-10 02:57:05',NULL,'REGISTRADO'),(387,'Oficiales de préstamo y crédito','2021-09-10 02:57:05',NULL,'REGISTRADO'),(388,'Oficiales maquinistas en navegación','2021-09-10 02:57:05',NULL,'REGISTRADO'),(389,'Operadores de carretillas elevadoras (chófer de grúa)','2021-09-10 02:57:06',NULL,'REGISTRADO'),(390,'Operadores de equipos pesados móviles','2021-09-10 02:57:06',NULL,'REGISTRADO'),(391,'Operadores de grúas, aparatos elevadores y afines','2021-09-10 02:57:06',NULL,'REGISTRADO'),(392,'Operadores de incineradores','2021-09-10 02:57:06',NULL,'REGISTRADO'),(393,'Operadores de instalaciones de procesamiento de la madera y fabricación de productos de madera','2021-09-10 02:57:06',NULL,'REGISTRADO'),(394,'Operadores de instalaciones de procesamiento de minerales (quebrantadoras, trituradoras, mezcladoras,','2021-09-10 02:57:07',NULL,'REGISTRADO'),(395,'Operadores de instalaciones de procesamiento de minerales y rocas','2021-09-10 02:57:07',NULL,'REGISTRADO'),(396,'Operadores de instalaciones de procesamiento y recubridoras de metales','2021-09-10 02:57:07',NULL,'REGISTRADO'),(397,'Operadores de instalaciones de producción de energía','2021-09-10 02:57:07',NULL,'REGISTRADO'),(398,'Operadores de instalaciones de refinación de petróleo y gas natural','2021-09-10 02:57:08',NULL,'REGISTRADO'),(399,'Operadores de instalaciones de tratamiento de agua y afines','2021-09-10 02:57:08',NULL,'REGISTRADO'),(400,'Operadores de instalaciones de vidriería y cerámica','2021-09-10 02:57:08',NULL,'REGISTRADO'),(401,'Operadores de instalaciones para la preparación de pasta para papel y papel','2021-09-10 02:57:08',NULL,'REGISTRADO'),(402,'Operadores de instalaciones y máquinas de productos químicos y fotográficos','2021-09-10 02:57:08',NULL,'REGISTRADO'),(403,'Operadores de juegos electromecánicos','2021-09-10 02:57:09',NULL,'REGISTRADO'),(404,'Operadores de maquinaria agrícola y forestal móvil (operador de cosechadora, trilladora, etc.)','2021-09-10 02:57:09',NULL,'REGISTRADO'),(405,'Operadores de máquinas de blanqueo, teñido, lavado y limpieza de tejidos','2021-09-10 02:57:09',NULL,'REGISTRADO'),(406,'Operadores de máquinas de embalaje, embotellamiento y etiquetado','2021-09-10 02:57:09',NULL,'REGISTRADO'),(407,'Operadores de máquinas de fabricación cemento, cal y yeso','2021-09-10 02:57:09',NULL,'REGISTRADO'),(408,'Operadores de máquinas de movimiento de tierras y afines (conductor de apisonadora, asfaltadora, excavadora, etc.)','2021-09-10 02:57:10',NULL,'REGISTRADO'),(409,'Operadores de máquinas de oficina','2021-09-10 02:57:10',NULL,'REGISTRADO'),(410,'Operadores de máquinas de preparación de fibras, hilados y devanado','2021-09-10 02:57:10',NULL,'REGISTRADO'),(411,'Operadores de máquinas de preparación de pasta para papel y de procesamiento de la madera','2021-09-10 02:57:10',NULL,'REGISTRADO'),(412,'Operadores de máquinas de procesamiento de texto y transcriptores','2021-09-10 02:57:10',NULL,'REGISTRADO'),(413,'Operadores de máquinas de tratamiento de pieles y cueros','2021-09-10 02:57:10',NULL,'REGISTRADO'),(414,'Operadores de máquinas de vapor y calderas','2021-09-10 02:57:11',NULL,'REGISTRADO'),(415,'Operadores de máquinas para coser y bordar','2021-09-10 02:57:11',NULL,'REGISTRADO'),(416,'Operadores de máquinas para elaborar alimentos y productos afines','2021-09-10 02:57:11',NULL,'REGISTRADO'),(417,'Operadores de máquinas para elaborar alimentos y productos afines','2021-09-10 02:57:11',NULL,'REGISTRADO'),(418,'Operadores de máquinas para fabricar prefabricados de hormigón, cemento y yeso','2021-09-10 02:57:11',NULL,'REGISTRADO'),(419,'Operadores de máquinas para fabricar productos de caucho','2021-09-10 02:57:12',NULL,'REGISTRADO'),(420,'Operadores de máquinas para fabricar productos de caucho, de papel y material plástico','2021-09-10 02:57:12',NULL,'REGISTRADO'),(421,'Operadores de máquinas para fabricar productos de material plástico','2021-09-10 02:57:12',NULL,'REGISTRADO'),(422,'Operadores de máquinas para fabricar productos de papel','2021-09-10 02:57:12',NULL,'REGISTRADO'),(423,'Operadores de máquinas para fabricar productos fotográficos','2021-09-10 02:57:12',NULL,'REGISTRADO'),(424,'Operadores de máquinas para fabricar productos textiles, artículos de piel y cuero','2021-09-10 02:57:13',NULL,'REGISTRADO'),(425,'Operadores de máquinas para la fabricación de calzados y afines','2021-09-10 02:57:13',NULL,'REGISTRADO'),(426,'Operadores de máquinas pulidoras, galvanizadoras y recubridoras de metales','2021-09-10 02:57:13',NULL,'REGISTRADO'),(427,'Operadores de máquinas y/o instalaciones fijas y afines','2021-09-10 02:57:13',NULL,'REGISTRADO'),(428,'Operadores de otros equipos pesados móviles n.c.p.','2021-09-10 02:57:13',NULL,'REGISTRADO'),(429,'Operadores de plantas y máquinas de fabricación de productos químicos','2021-09-10 02:57:14',NULL,'REGISTRADO'),(430,'Operadores de telares y otras máquinas tejedoras (mantas, frazadas, prendas de vestir, etc.)','2021-09-10 02:57:14',NULL,'REGISTRADO'),(431,'Optometristas','2021-09-10 02:57:14',NULL,'REGISTRADO'),(432,'Organizadores de conferencias y eventos','2021-09-10 02:57:14',NULL,'REGISTRADO'),(433,'Otras ocupaciones de trabajadores no calificados','2021-09-10 02:57:14',NULL,'REGISTRADO'),(434,'Otras ocupaciones de trabajadores no calificados n.c.p.','2021-09-10 02:57:15',NULL,'REGISTRADO'),(435,'Otras ocupaciones en actividades culturales, artísticas n.c.p.','2021-09-10 02:57:15',NULL,'REGISTRADO'),(436,'Otras ocupaciones relacionadas con la prestación de servicios en lugares públicos n.c.p. (rezadores, cebras, etc.)','2021-09-10 02:57:15',NULL,'REGISTRADO'),(437,'Otro personal de apoyo administrativo','2021-09-10 02:57:15',NULL,'REGISTRADO'),(438,'Otro personal de apoyo administrativo n.c.p.','2021-09-10 02:57:15',NULL,'REGISTRADO'),(439,'Otro personal de limpieza n.c.p.','2021-09-10 02:57:16',NULL,'REGISTRADO'),(440,'Otro personal de los servicios de protección y seguridad n.c.p.','2021-09-10 02:57:16',NULL,'REGISTRADO'),(441,'Otros agentes de la administración pública para la aplicación de la ley y afines n.c.p. (gendarme municipal)','2021-09-10 02:57:16',NULL,'REGISTRADO'),(442,'Otros agentes en servicios comerciales n.c.p.','2021-09-10 02:57:16',NULL,'REGISTRADO'),(443,'Otros analistas de software y multimedia y analistas n.c.p.','2021-09-10 02:57:16',NULL,'REGISTRADO'),(444,'Otros artistas creativos e interpretativos n.c.p.','2021-09-10 02:57:17',NULL,'REGISTRADO'),(445,'Otros conductores de vehículos automotores pesados n.c.p.','2021-09-10 02:57:17',NULL,'REGISTRADO'),(446,'Otros criadores de animales n.c.p.','2021-09-10 02:57:17',NULL,'REGISTRADO'),(447,'Otros directores / jefes de área n.c.p.','2021-09-10 02:57:17',NULL,'REGISTRADO'),(448,'Otros directores generales / gerentes generales de empresas u organizaciones n.c.p.','2021-09-10 02:57:17',NULL,'REGISTRADO'),(449,'Otros ensambladores de máquinas, equipos u objetos de otros materiales n.c.p.','2021-09-10 02:57:18',NULL,'REGISTRADO'),(450,'Otros especialistas en organización y administración de empresas n.c.p.','2021-09-10 02:57:18',NULL,'REGISTRADO'),(451,'Otros gerentes / administradores de empresas de servicios','2021-09-10 02:57:18',NULL,'REGISTRADO'),(452,'Otros gerentes / administradores de empresas u organizaciones n.c.p.','2021-09-10 02:57:18',NULL,'REGISTRADO'),(453,'Otros mecánicos y ajustadores de máquinas n.c.p.','2021-09-10 02:57:18',NULL,'REGISTRADO'),(454,'Otros miembros de las Fuerzas Armadas','2021-09-10 02:57:19',NULL,'REGISTRADO'),(455,'Otros oficios','2021-09-10 02:57:19',NULL,'REGISTRADO'),(456,'Otros operadores de máquinas y de instalaciones fijas','2021-09-10 02:57:19',NULL,'REGISTRADO'),(457,'Otros operadores de máquinas y de las instalaciones fijas n.c.p.','2021-09-10 02:57:19',NULL,'REGISTRADO'),(458,'Otros operadores de otras máquinas para fabricar productos textiles y artículos de piel y cuero n.c.p.','2021-09-10 02:57:19',NULL,'REGISTRADO'),(459,'Otros peones agropecuarios, forestales, pesqueros n.c.p.','2021-09-10 02:57:20',NULL,'REGISTRADO'),(460,'Otros peones de la industria manufacturera n.c.p.','2021-09-10 02:57:20',NULL,'REGISTRADO'),(461,'Otros peones del transporte y almacenamiento n.c.p.','2021-09-10 02:57:20',NULL,'REGISTRADO'),(462,'Otros profesionales','2021-09-10 02:57:20',NULL,'REGISTRADO'),(463,'Otros profesionales de la enseñanza','2021-09-10 02:57:20',NULL,'REGISTRADO'),(464,'Otros profesionales de la salud','2021-09-10 02:57:21',NULL,'REGISTRADO'),(465,'Otros profesionales de las ciencias humanas n.c.p.','2021-09-10 02:57:21',NULL,'REGISTRADO'),(466,'Otros profesionales de las ciencias sociales n.c.p.','2021-09-10 02:57:21',NULL,'REGISTRADO'),(467,'Otros profesionales de nivel medio de la salud','2021-09-10 02:57:21',NULL,'REGISTRADO'),(468,'Otros profesionales del derecho n.c.p.','2021-09-10 02:57:21',NULL,'REGISTRADO'),(469,'Otros profesionales en ciencias económicas o financieras y afines n.c.p.','2021-09-10 02:57:22',NULL,'REGISTRADO'),(470,'Otros profesionales en ciencias relativas a los seres orgánicos n.c.p.','2021-09-10 02:57:22',NULL,'REGISTRADO'),(471,'Otros profesionales en redes y equipos de TIC n.c.p.','2021-09-10 02:57:22',NULL,'REGISTRADO'),(472,'Otros profesionales ingenieros y afines n.c.p.','2021-09-10 02:57:22',NULL,'REGISTRADO'),(473,'Otros profesores, instructores y capacitadores n.c.p.','2021-09-10 02:57:22',NULL,'REGISTRADO'),(474,'Otros técnicos de control de procesos n.c.p.','2021-09-10 02:57:23',NULL,'REGISTRADO'),(475,'Otros técnicos de la TIC n.c.p.','2021-09-10 02:57:23',NULL,'REGISTRADO'),(476,'Otros técnicos en biología, agronomía y zootecnia n.c.p.','2021-09-10 02:57:23',NULL,'REGISTRADO'),(477,'Otros técnicos en ingeniería n.c.p.','2021-09-10 02:57:23',NULL,'REGISTRADO'),(478,'Otros técnicos en medicina y salud n.c.p.','2021-09-10 02:57:23',NULL,'REGISTRADO'),(479,'Otros técnicos en navegación y aeronáutica n.c.p.','2021-09-10 02:57:24',NULL,'REGISTRADO'),(480,'Otros técnicos en servicios comerciales n.c.p.','2021-09-10 02:57:24',NULL,'REGISTRADO'),(481,'Otros trabajadores agrícolas n.c.p.','2021-09-10 02:57:24',NULL,'REGISTRADO'),(482,'Otros trabajadores de la construcción de obra gruesa n.c.p.','2021-09-10 02:57:24',NULL,'REGISTRADO'),(483,'Otros trabajadores de la extracción apoyados en herramientas manuales n.c.p.','2021-09-10 02:57:24',NULL,'REGISTRADO'),(484,'Otros trabajadores de la fabricación de calzados y artículos de cuero, piel y afines n.c.p.','2021-09-10 02:57:25',NULL,'REGISTRADO'),(485,'Otros trabajadores de la fabricación de hilados, tejidos y confección de prendas de vestir y afines','2021-09-10 02:57:25',NULL,'REGISTRADO'),(486,'Otros trabajadores de la industria de alimentos n.c.p.','2021-09-10 02:57:25',NULL,'REGISTRADO'),(487,'Otros trabajadores de la terminación de edificios n.c.p.','2021-09-10 02:57:25',NULL,'REGISTRADO'),(488,'Otros trabajadores de las artes gráficas n.c.p.','2021-09-10 02:57:25',NULL,'REGISTRADO'),(489,'Otros trabajadores de los cuidados personales en servicios de salud n.c.p.','2021-09-10 02:57:26',NULL,'REGISTRADO'),(490,'Otros trabajadores de servicios personales','2021-09-10 02:57:26',NULL,'REGISTRADO'),(491,'Otros trabajadores de servicios personales n.c.p.','2021-09-10 02:57:26',NULL,'REGISTRADO'),(492,'Otros trabajadores de tratamiento de la madera, carpinteros, ebanistas n.c.p.','2021-09-10 02:57:26',NULL,'REGISTRADO'),(493,'Otros trabajadores que informan al cliente n.c.p.','2021-09-10 02:57:26',NULL,'REGISTRADO'),(494,'Otros vendedores','2021-09-10 02:57:27',NULL,'REGISTRADO'),(495,'Parqueteros y colocadores de suelos','2021-09-10 02:57:27',NULL,'REGISTRADO'),(496,'Parteras (comadrona, matrona)','2021-09-10 02:57:27',NULL,'REGISTRADO'),(497,'Parteras profesionales','2021-09-10 02:57:27',NULL,'REGISTRADO'),(498,'Patronistas, cortadores de tela, cuero y afines','2021-09-10 02:57:27',NULL,'REGISTRADO'),(499,'Payasos, prestidigitadores, acróbatas y afines (titiritero, mago, etc.)','2021-09-10 02:57:28',NULL,'REGISTRADO'),(500,'Peleteros y afines','2021-09-10 02:57:28',NULL,'REGISTRADO'),(501,'Peluqueros y peinadores','2021-09-10 02:57:28',NULL,'REGISTRADO'),(502,'Peluqueros, especialistas en tratamientos de belleza y afines','2021-09-10 02:57:28',NULL,'REGISTRADO'),(503,'Peones agrícolas (peón de zafra)','2021-09-10 02:57:28',NULL,'REGISTRADO'),(504,'Peones agrícolas, pecuarios, agropecuarios, forestales, pesqueros y afines','2021-09-10 02:57:29',NULL,'REGISTRADO'),(505,'Peones agropecuarios','2021-09-10 02:57:29',NULL,'REGISTRADO'),(506,'Peones agropecuarios, forestales, pesqueros y afines','2021-09-10 02:57:29',NULL,'REGISTRADO'),(507,'Peones de carga (aparapita, cargador, pilotero, estibador, changador, q’ipiri, cargador de escalera en cementerio)','2021-09-10 02:57:29',NULL,'REGISTRADO'),(508,'Peones de la construcción (peón albañil)','2021-09-10 02:57:29',NULL,'REGISTRADO'),(509,'Peones de la industria manufacturera','2021-09-10 02:57:30',NULL,'REGISTRADO'),(510,'Peones de la minería y la construcción','2021-09-10 02:57:30',NULL,'REGISTRADO'),(511,'Peones de la minería, construcción, industria manufacturera y el transporte','2021-09-10 02:57:30',NULL,'REGISTRADO'),(512,'Peones de la pesca y acuicultura','2021-09-10 02:57:30',NULL,'REGISTRADO'),(513,'Peones de minas y canteras','2021-09-10 02:57:30',NULL,'REGISTRADO'),(514,'Peones de obras públicas y mantenimiento (carreteras, presas y obras similares)','2021-09-10 02:57:30',NULL,'REGISTRADO'),(515,'Peones del transporte y almacenamiento','2021-09-10 02:57:31',NULL,'REGISTRADO'),(516,'Peones forestales','2021-09-10 02:57:31',NULL,'REGISTRADO'),(517,'Peones pecuarios','2021-09-10 02:57:31',NULL,'REGISTRADO'),(518,'Perforistas, sondistas de pozos y afines','2021-09-10 02:57:31',NULL,'REGISTRADO'),(519,'Personal de los servicios de protección y seguridad','2021-09-10 02:57:31',NULL,'REGISTRADO'),(520,'Personal de los servicios de protección y seguridad','2021-09-10 02:57:32',NULL,'REGISTRADO'),(521,'Personal de pompas fúnebres y embalsamadores','2021-09-10 02:57:32',NULL,'REGISTRADO'),(522,'Pescadores en lagos, ríos y aguas costeras','2021-09-10 02:57:32',NULL,'REGISTRADO'),(523,'Pilotos de aviación y afines','2021-09-10 02:57:32',NULL,'REGISTRADO'),(524,'Pintores y empapeladores','2021-09-10 02:57:32',NULL,'REGISTRADO'),(525,'Pintores, empapeladores, limpiadores de fachadas y afines','2021-09-10 02:57:33',NULL,'REGISTRADO'),(526,'Porteros y serenos','2021-09-10 02:57:33',NULL,'REGISTRADO'),(527,'Practicantes y asistentes médicos','2021-09-10 02:57:33',NULL,'REGISTRADO'),(528,'Preparadores de fibras','2021-09-10 02:57:33',NULL,'REGISTRADO'),(529,'Prestamistas','2021-09-10 02:57:34',NULL,'REGISTRADO'),(530,'Profesionales de la enseñanza','2021-09-10 02:57:34',NULL,'REGISTRADO'),(531,'Profesionales de la medicina','2021-09-10 02:57:34',NULL,'REGISTRADO'),(532,'Profesionales de la medicina tradicional y alternativa','2021-09-10 02:57:34',NULL,'REGISTRADO'),(533,'Profesionales de la medicina tradicional y alternativa','2021-09-10 02:57:34',NULL,'REGISTRADO'),(534,'Profesionales de las ciencias puras, naturales, geológicas, arquitectura e ingeniería','2021-09-10 02:57:35',NULL,'REGISTRADO'),(535,'Profesionales de las ventas, publicidad y las relaciones públicas','2021-09-10 02:57:35',NULL,'REGISTRADO'),(536,'Profesionales de publicidad y comercialización','2021-09-10 02:57:35',NULL,'REGISTRADO'),(537,'Profesionales de relaciones públicas','2021-09-10 02:57:35',NULL,'REGISTRADO'),(538,'Profesionales de tecnología de la información y las comunicaciones (TIC)','2021-09-10 02:57:35',NULL,'REGISTRADO'),(539,'Profesionales de ventas técnicas','2021-09-10 02:57:35',NULL,'REGISTRADO'),(540,'Profesionales del derecho y ciencias políticas','2021-09-10 02:57:36',NULL,'REGISTRADO'),(541,'Profesionales del derecho, ciencias humanísticas y sociales','2021-09-10 02:57:36',NULL,'REGISTRADO'),(542,'Profesionales en base/banco de datos y administradores de sistemas','2021-09-10 02:57:36',NULL,'REGISTRADO'),(543,'Profesionales en biología, bioquímica y otras relativas a los seres orgánicos','2021-09-10 02:57:36',NULL,'REGISTRADO'),(544,'Profesionales en ciencias de la comunicación (periodistas)','2021-09-10 02:57:37',NULL,'REGISTRADO'),(545,'Profesionales en ciencias económicas y financieras','2021-09-10 02:57:37',NULL,'REGISTRADO'),(546,'Profesionales en ciencias económicas, financieras, ciencias políticas, ciencias sociales y culturales','2021-09-10 02:57:37',NULL,'REGISTRADO'),(547,'Profesionales en ciencias humanas','2021-09-10 02:57:37',NULL,'REGISTRADO'),(548,'Profesionales en ciencias políticas','2021-09-10 02:57:37',NULL,'REGISTRADO'),(549,'Profesionales en ciencias sociales y teología','2021-09-10 02:57:38',NULL,'REGISTRADO'),(550,'Profesionales en ingeniería de las telecomunicaciones','2021-09-10 02:57:38',NULL,'REGISTRADO'),(551,'Profesionales en medicina y salud','2021-09-10 02:57:38',NULL,'REGISTRADO'),(552,'Profesionales en redes de computadoras','2021-09-10 02:57:38',NULL,'REGISTRADO'),(553,'Profesionales en religión y teología','2021-09-10 02:57:38',NULL,'REGISTRADO'),(554,'Profesionales en turismo','2021-09-10 02:57:39',NULL,'REGISTRADO'),(555,'Profesionales relacionados con el medioambiente','2021-09-10 02:57:39',NULL,'REGISTRADO'),(556,'Profesores de canto, baile y otras expresiones artísticas','2021-09-10 02:57:39',NULL,'REGISTRADO'),(557,'Profesores de dibujo, pintura y escultura exteriores al sistema escolar','2021-09-10 02:57:39',NULL,'REGISTRADO'),(558,'Profesores de enseñanza de oficios','2021-09-10 02:57:39',NULL,'REGISTRADO'),(559,'Profesores de enseñanza en el nivel preescolar (prekinder, kinder)','2021-09-10 02:57:39',NULL,'REGISTRADO'),(560,'Profesores de enseñanza en el nivel primario (escuela primaria)','2021-09-10 02:57:40',NULL,'REGISTRADO'),(561,'Profesores de enseñanza en el nivel secundario','2021-09-10 02:57:40',NULL,'REGISTRADO'),(562,'Profesores de enseñanza en el nivel secundario','2021-09-10 02:57:40',NULL,'REGISTRADO'),(563,'Profesores de enseñanza en institutos de costura, peinados, repostería, carpintería, secretariado, etc.','2021-09-10 02:57:40',NULL,'REGISTRADO'),(564,'Profesores de enseñanza primaria y preescolar','2021-09-10 02:57:40',NULL,'REGISTRADO'),(565,'Profesores de lenguas o idiomas exteriores al sistema escolar','2021-09-10 02:57:41',NULL,'REGISTRADO'),(566,'Profesores de música exteriores al sistema escolar','2021-09-10 02:57:41',NULL,'REGISTRADO'),(567,'Profesores de universidades, postgrado y superior no universitario','2021-09-10 02:57:41',NULL,'REGISTRADO'),(568,'Profesores del nivel superior no universitario o técnico superior (Institutos normales)','2021-09-10 02:57:41',NULL,'REGISTRADO'),(569,'Profesores del nivel superior universitario, postgrado, doctorado y afines','2021-09-10 02:57:41',NULL,'REGISTRADO'),(570,'Profesores y/o instructores de gimnasia, artes marciales, yoga, etc.','2021-09-10 02:57:42',NULL,'REGISTRADO'),(571,'Psicólogos','2021-09-10 02:57:42',NULL,'REGISTRADO'),(572,'Pulidores de metales y afiladores de cuchillos y herramientas','2021-09-10 02:57:42',NULL,'REGISTRADO'),(573,'Químicos','2021-09-10 02:57:42',NULL,'REGISTRADO'),(574,'Recepcionistas','2021-09-10 02:57:42',NULL,'REGISTRADO'),(575,'Recepcionistas de hoteles','2021-09-10 02:57:43',NULL,'REGISTRADO'),(576,'Receptores de apuestas y afines','2021-09-10 02:57:43',NULL,'REGISTRADO'),(577,'Recolectores de basura y material reciclable','2021-09-10 02:57:43',NULL,'REGISTRADO'),(578,'Recolectores de desechos','2021-09-10 02:57:43',NULL,'REGISTRADO'),(579,'Recolectores de desechos y otras ocupaciones de no calificados','2021-09-10 02:57:43',NULL,'REGISTRADO'),(580,'Recolectores de dinero en aparatos de venta automática','2021-09-10 02:57:44',NULL,'REGISTRADO'),(581,'Redactores de carteles, pintores decoradores y grabadores','2021-09-10 02:57:44',NULL,'REGISTRADO'),(582,'Regentes de establecimientos educativos','2021-09-10 02:57:44',NULL,'REGISTRADO'),(583,'Reguladores de máquinas herramientas (reparadores y ajustadores de máquinas herramientas)','2021-09-10 02:57:44',NULL,'REGISTRADO'),(584,'Reparadores de bicicletas y afines','2021-09-10 02:57:44',NULL,'REGISTRADO'),(585,'Reponedores de estanterías','2021-09-10 02:57:45',NULL,'REGISTRADO'),(586,'Representantes comerciales y técnicos de ventas (visitador médico, preventista, etc.)','2021-09-10 02:57:45',NULL,'REGISTRADO'),(587,'Revocadores','2021-09-10 02:57:45',NULL,'REGISTRADO'),(588,'Sastres, modistos y otros confeccionistas de prendas de vestir','2021-09-10 02:57:45',NULL,'REGISTRADO'),(589,'Secretarios ejecutivos','2021-09-10 02:57:45',NULL,'REGISTRADO'),(590,'Secretarios en general','2021-09-10 02:57:46',NULL,'REGISTRADO'),(591,'Secretarios especializados','2021-09-10 02:57:46',NULL,'REGISTRADO'),(592,'Secretarios generales','2021-09-10 02:57:46',NULL,'REGISTRADO'),(593,'Secretarios jurídicos','2021-09-10 02:57:46',NULL,'REGISTRADO'),(594,'Secretarios médicos','2021-09-10 02:57:46',NULL,'REGISTRADO'),(595,'Sericicultores o criadores de gusanos de seda','2021-09-10 02:57:47',NULL,'REGISTRADO'),(596,'Sociólogos','2021-09-10 02:57:47',NULL,'REGISTRADO'),(597,'Soldadores y oxicortadores','2021-09-10 02:57:47',NULL,'REGISTRADO'),(598,'Sombrereros','2021-09-10 02:57:47',NULL,'REGISTRADO'),(599,'Sopladores, modeladores, laminadores, cortadores y pulidores de vidrio','2021-09-10 02:57:47',NULL,'REGISTRADO'),(600,'Suboficiales de las Fuerzas Armadas','2021-09-10 02:57:48',NULL,'REGISTRADO'),(601,'Suboficiales de las Fuerzas Armadas','2021-09-10 02:57:48',NULL,'REGISTRADO'),(602,'Suboficiales de las Fuerzas Armadas','2021-09-10 02:57:48',NULL,'REGISTRADO'),(603,'Suboficiales, clases y policías','2021-09-10 02:57:48',NULL,'REGISTRADO'),(604,'Supervisores de explotaciones agrícolas','2021-09-10 02:57:48',NULL,'REGISTRADO'),(605,'Supervisores de explotaciones ganaderas','2021-09-10 02:57:49',NULL,'REGISTRADO'),(606,'Supervisores de industrias manufactureras (supervisor de control de calidad)','2021-09-10 02:57:49',NULL,'REGISTRADO'),(607,'Supervisores de la construcción (inspector de obras de construcción)','2021-09-10 02:57:49',NULL,'REGISTRADO'),(608,'Supervisores de mantenimiento y limpieza de edificios','2021-09-10 02:57:49',NULL,'REGISTRADO'),(609,'Supervisores de mantenimiento y limpieza en oficinas, hoteles y otros establecimientos','2021-09-10 02:57:49',NULL,'REGISTRADO'),(610,'Supervisores de venta de tiendas y almacenes','2021-09-10 02:57:50',NULL,'REGISTRADO'),(611,'Supervisores en ingeniería de minas (inspector de salubridad)','2021-09-10 02:57:50',NULL,'REGISTRADO'),(612,'Supervisores en ingeniería de minas, de industrias manufactureras y de la construcción','2021-09-10 02:57:50',NULL,'REGISTRADO'),(613,'Talabarteros, guarnicioneros, marroquineros y afines','2021-09-10 02:57:50',NULL,'REGISTRADO'),(614,'Tapiceros, colchoneros y afines','2021-09-10 02:57:50',NULL,'REGISTRADO'),(615,'Tasadores y subastadores','2021-09-10 02:57:51',NULL,'REGISTRADO'),(616,'Techadores de edificaciones','2021-09-10 02:57:51',NULL,'REGISTRADO'),(617,'Técnica en ingeniería de alimentos','2021-09-10 02:57:51',NULL,'REGISTRADO'),(618,'Técnica en ingeniería de sonido','2021-09-10 02:57:51',NULL,'REGISTRADO'),(619,'Técnico en dietética y nutrición','2021-09-10 02:57:52',NULL,'REGISTRADO'),(620,'Técnicos administrativos y afines n.c.p.','2021-09-10 02:57:52',NULL,'REGISTRADO'),(621,'Técnicos agropecuarios (promotor agrícola)','2021-09-10 02:57:52',NULL,'REGISTRADO'),(622,'Técnicos de control de procesos','2021-09-10 02:57:52',NULL,'REGISTRADO'),(623,'Técnicos de ingeniería de las telecomunicaciones','2021-09-10 02:57:52',NULL,'REGISTRADO'),(624,'Técnicos de la tecnología de la información y las comunicaciones','2021-09-10 02:57:52',NULL,'REGISTRADO'),(625,'Técnicos de la Web','2021-09-10 02:57:53',NULL,'REGISTRADO'),(626,'Técnicos de laboratorio clínico','2021-09-10 02:57:53',NULL,'REGISTRADO'),(627,'Técnicos de nivel medio de las ciencias puras, naturales, geológicas, arquitectura e ingeniería','2021-09-10 02:57:53',NULL,'REGISTRADO'),(628,'Técnicos de nivel medio en biología, agronomía y zootecnia','2021-09-10 02:57:53',NULL,'REGISTRADO'),(629,'Técnicos de nivel medio en física, química, geología, ingeniería y afines','2021-09-10 02:57:54',NULL,'REGISTRADO'),(630,'Técnicos de nivel medio en medicina y salud','2021-09-10 02:57:54',NULL,'REGISTRADO'),(631,'Técnicos de prótesis médicas y dentales (protesista dental)','2021-09-10 02:57:54',NULL,'REGISTRADO'),(632,'Técnicos de radiodifusión y grabación audio visual (camarógrafos y afines)','2021-09-10 02:57:54',NULL,'REGISTRADO'),(633,'Técnicos de servicios comerciales','2021-09-10 02:57:55',NULL,'REGISTRADO'),(634,'Técnicos de servicios jurídicos, sociales, culturales y afines','2021-09-10 02:57:55',NULL,'REGISTRADO'),(635,'Técnicos de servicios jurídicos, sociales, culturales y religiosos','2021-09-10 02:57:55',NULL,'REGISTRADO'),(636,'Técnicos delineantes y dibujantes','2021-09-10 02:57:55',NULL,'REGISTRADO'),(637,'Técnicos en actividades culturales, artísticas y culinarias','2021-09-10 02:57:55',NULL,'REGISTRADO'),(638,'Técnicos en aparatos de diagnóstico y tratamiento médico (radiólogo)','2021-09-10 02:57:56',NULL,'REGISTRADO'),(639,'Técnicos en asistencia al usuario de tecnología de la información y las comunicaciones (trabajadores de atención de cafés Internet)','2021-09-10 02:57:56',NULL,'REGISTRADO'),(640,'Técnicos en biología y afines','2021-09-10 02:57:56',NULL,'REGISTRADO'),(641,'Técnicos en bioquímica y farmacia','2021-09-10 02:57:56',NULL,'REGISTRADO'),(642,'Técnicos en diseño gráfico','2021-09-10 02:57:56',NULL,'REGISTRADO'),(643,'Técnicos en documentación sanitaria','2021-09-10 02:57:57',NULL,'REGISTRADO'),(644,'Técnicos en electricidad','2021-09-10 02:57:57',NULL,'REGISTRADO'),(645,'Técnicos en electrónica','2021-09-10 02:57:57',NULL,'REGISTRADO'),(646,'Técnicos en estadística, matemática y afines','2021-09-10 02:57:57',NULL,'REGISTRADO'),(647,'Técnicos en finanzas y matemáticas','2021-09-10 02:57:57',NULL,'REGISTRADO'),(648,'Técnicos en física','2021-09-10 02:57:58',NULL,'REGISTRADO'),(649,'Técnicos en galerías de arte, museos y bibliotecas','2021-09-10 02:57:58',NULL,'REGISTRADO'),(650,'Técnicos en geografía','2021-09-10 02:57:58',NULL,'REGISTRADO'),(651,'Técnicos en geología y geofísica','2021-09-10 02:57:58',NULL,'REGISTRADO'),(652,'Técnicos en ingeniería civil (constructor civil, topógrafo, alarife)','2021-09-10 02:57:59',NULL,'REGISTRADO'),(653,'Técnicos en ingeniería de minas, petrolera, metalúrgica','2021-09-10 02:57:59',NULL,'REGISTRADO'),(654,'Técnicos en medicina tradicional y alternativa','2021-09-10 02:57:59',NULL,'REGISTRADO'),(655,'Técnicos en meteorología','2021-09-10 02:57:59',NULL,'REGISTRADO'),(656,'Técnicos en navegación y aeronáutica','2021-09-10 02:57:59',NULL,'REGISTRADO'),(657,'Técnicos en operaciones de tecnología de la información y las comunicaciones (TIC)','2021-09-10 02:57:59',NULL,'REGISTRADO'),(658,'Técnicos en operaciones de tecnología de la información y las comunicaciones (TIC) y asistencia al usuario','2021-09-10 02:58:00',NULL,'REGISTRADO'),(659,'Técnicos en operaciones financieras y administrativas','2021-09-10 02:58:00',NULL,'REGISTRADO'),(660,'Técnicos en optometría y óptica','2021-09-10 02:58:00',NULL,'REGISTRADO'),(661,'Técnicos en química','2021-09-10 02:58:00',NULL,'REGISTRADO'),(662,'Técnicos en química industrial','2021-09-10 02:58:00',NULL,'REGISTRADO'),(663,'Técnicos en redes y sistemas de computadores','2021-09-10 02:58:01',NULL,'REGISTRADO'),(664,'Técnicos en seguridad aeronáutica','2021-09-10 02:58:01',NULL,'REGISTRADO'),(665,'Técnicos en servicios legales y afines (tramitador, diligenciero de juzgado, procurador, etc.)','2021-09-10 02:58:01',NULL,'REGISTRADO'),(666,'Técnicos en telecomunicaciones y radiodifusión','2021-09-10 02:58:01',NULL,'REGISTRADO'),(667,'Técnicos en trabajo social (asistentes sociales, facilitadora social y promotor social)','2021-09-10 02:58:01',NULL,'REGISTRADO'),(668,'Técnicos en vectores o rociadores','2021-09-10 02:58:02',NULL,'REGISTRADO'),(669,'Técnicos forestales','2021-09-10 02:58:02',NULL,'REGISTRADO'),(670,'Técnicos mecánicos','2021-09-10 02:58:02',NULL,'REGISTRADO'),(671,'Técnicos médicos y farmacéuticos','2021-09-10 02:58:02',NULL,'REGISTRADO'),(672,'Técnicos veterinarios','2021-09-10 02:58:02',NULL,'REGISTRADO'),(673,'Técnicos y asistentes farmacéuticos','2021-09-10 02:58:03',NULL,'REGISTRADO'),(674,'Técnicos y asistentes fisioterapeutas','2021-09-10 02:58:03',NULL,'REGISTRADO'),(675,'Técnicos y asistentes veterinarios','2021-09-10 02:58:03',NULL,'REGISTRADO'),(676,'Tecnólogos médicos','2021-09-10 02:58:03',NULL,'REGISTRADO'),(677,'Tejedores de punto de prendas de vestir y accesorios del vestir','2021-09-10 02:58:03',NULL,'REGISTRADO'),(678,'Telefonistas','2021-09-10 02:58:04',NULL,'REGISTRADO'),(679,'Tenedores de libros','2021-09-10 02:58:04',NULL,'REGISTRADO'),(680,'TIC y servicios profesionales','2021-09-10 02:58:04',NULL,'REGISTRADO'),(681,'Trabajadoras del hogar','2021-09-10 02:58:04',NULL,'REGISTRADO'),(682,'Trabajadoras del hogar y limpiadores de edificaciones','2021-09-10 02:58:04',NULL,'REGISTRADO'),(683,'Trabajadoras del hogar, limpiadores de edificaciones y lavadores','2021-09-10 02:58:05',NULL,'REGISTRADO'),(684,'Trabajadores acuicultores (criadores de especies acuáticas)','2021-09-10 02:58:05',NULL,'REGISTRADO'),(685,'Trabajadores agrícolas','2021-09-10 02:58:05',NULL,'REGISTRADO'),(686,'Trabajadores agrícolas de cultivo de café, cacao y té','2021-09-10 02:58:05',NULL,'REGISTRADO'),(687,'Trabajadores agrícolas de cultivo de cereales (arroz, trigo, maíz, etc.)','2021-09-10 02:58:05',NULL,'REGISTRADO'),(688,'Trabajadores agrícolas de cultivo de especias, plantas aromáticas y medicinales','2021-09-10 02:58:06',NULL,'REGISTRADO'),(689,'Trabajadores agrícolas de cultivo de flores y plantas ornamentales','2021-09-10 02:58:06',NULL,'REGISTRADO'),(690,'Trabajadores agrícolas de cultivo de hoja de coca','2021-09-10 02:58:06',NULL,'REGISTRADO'),(691,'Trabajadores agrícolas de cultivo de hortalizas (de raíz, hoja, fruto, flor, bulbo, etc.)','2021-09-10 02:58:06',NULL,'REGISTRADO'),(692,'Trabajadores agrícolas de cultivo de leguminosas secas para grano (fríjol, lentejas, tarwi, etc.)','2021-09-10 02:58:06',NULL,'REGISTRADO'),(693,'Trabajadores agrícolas de cultivo de oleaginosas (soya, girasol, maní, pepas de algodón, etc.)','2021-09-10 02:58:07',NULL,'REGISTRADO'),(694,'Trabajadores agrícolas de cultivo de sacarinos (caña de azúcar, estevia, remolacha azucarera, etc.)','2021-09-10 02:58:07',NULL,'REGISTRADO'),(695,'Trabajadores agrícolas de cultivo de tubérculos y raíces (papa, oca, camote, maca, etc.)','2021-09-10 02:58:07',NULL,'REGISTRADO'),(696,'Trabajadores agrícolas de cultivos de legumbres frescas o verdes (arveja, vainita, etc.)','2021-09-10 02:58:07',NULL,'REGISTRADO'),(697,'Trabajadores agrícolas de cultivos forrajeros (para el pastoreo o la henificación)','2021-09-10 02:58:07',NULL,'REGISTRADO'),(698,'Trabajadores agrícolas de invernaderos y viveros','2021-09-10 02:58:08',NULL,'REGISTRADO'),(699,'Trabajadores agrícolas y pecuarios','2021-09-10 02:58:08',NULL,'REGISTRADO'),(700,'Trabajadores al servicio directo de pasajeros','2021-09-10 02:58:08',NULL,'REGISTRADO'),(701,'Trabajadores comunitarios de la salud (promotor de salud, RPS, vacunadores)','2021-09-10 02:58:08',NULL,'REGISTRADO'),(702,'Trabajadores de corte, tala y acabado de piedra','2021-09-10 02:58:08',NULL,'REGISTRADO'),(703,'Trabajadores de extracción de piedra, grava, arena, yeso, creta y arcilla','2021-09-10 02:58:09',NULL,'REGISTRADO'),(704,'Trabajadores de la construcción','2021-09-10 02:58:09',NULL,'REGISTRADO'),(705,'Trabajadores de la construcción de obra gruesa y afines','2021-09-10 02:58:09',NULL,'REGISTRADO'),(706,'Trabajadores de la elaboración de productos de panadería y pastelería (panadero, pastelero, repostero)','2021-09-10 02:58:09',NULL,'REGISTRADO'),(707,'Trabajadores de la extracción de minerales','2021-09-10 02:58:09',NULL,'REGISTRADO'),(708,'Trabajadores de la extracción de minerales (palliri, lamero, reactivero, chasquiri, chancadorista, etc.)','2021-09-10 02:58:10',NULL,'REGISTRADO'),(709,'Trabajadores de la fabricación de calzados y artículos de cuero, piel y afines','2021-09-10 02:58:10',NULL,'REGISTRADO'),(710,'Trabajadores de la fabricación de hilados, tejidos y confección de prendas de vestir y afines','2021-09-10 02:58:10',NULL,'REGISTRADO'),(711,'Trabajadores de la industria de alimentos, tratamiento de la madera, textiles, confección, cuero y otros oficios','2021-09-10 02:58:10',NULL,'REGISTRADO'),(712,'Trabajadores de la metalurgia, construcción mecánica y afines','2021-09-10 02:58:10',NULL,'REGISTRADO'),(713,'Trabajadores de la producción, conservación de carne y productos cárnicos (matarife, mañazo)','2021-09-10 02:58:11',NULL,'REGISTRADO'),(714,'Trabajadores de las artes gráficas y afines','2021-09-10 02:58:11',NULL,'REGISTRADO'),(715,'Trabajadores de los cuidados personales','2021-09-10 02:58:11',NULL,'REGISTRADO'),(716,'Trabajadores de los cuidados personales en instituciones (camilleros, mucama de hospital, etc.)','2021-09-10 02:58:11',NULL,'REGISTRADO'),(717,'Trabajadores de los cuidados personales en salud a domicilio (cuidador de salud de anciano a domicilio)','2021-09-10 02:58:11',NULL,'REGISTRADO'),(718,'Trabajadores de los cuidados personales en servicios de salud','2021-09-10 02:58:12',NULL,'REGISTRADO'),(719,'Trabajadores de los servicios personales, protección y seguridad','2021-09-10 02:58:12',NULL,'REGISTRADO'),(720,'Trabajadores del servicio de pasanaku','2021-09-10 02:58:12',NULL,'REGISTRADO'),(721,'Trabajadores del tratamiento de la madera','2021-09-10 02:58:12',NULL,'REGISTRADO'),(722,'Trabajadores del tratamiento de la madera, carpinteros, ebanistas y afines','2021-09-10 02:58:12',NULL,'REGISTRADO'),(723,'Trabajadores en la conservación de frutas, hortalizas, tubérculos, cereales, etc. (tostado, insuflado, deshidratado, etc.)','2021-09-10 02:58:12',NULL,'REGISTRADO'),(724,'Trabajadores en la elaboración de bebidas','2021-09-10 02:58:13',NULL,'REGISTRADO'),(725,'Trabajadores en la elaboración de productos del tabaco','2021-09-10 02:58:13',NULL,'REGISTRADO'),(726,'Trabajadores en la elaboración de productos lácteos (elaborador de queso)','2021-09-10 02:58:13',NULL,'REGISTRADO'),(727,'Trabajadores en la industria alimenticia, bebidas y tabaco','2021-09-10 02:58:13',NULL,'REGISTRADO'),(728,'Trabajadores en la terminación o acabado de edificios y obras de ingeniería civil','2021-09-10 02:58:14',NULL,'REGISTRADO'),(729,'Trabajadores especializados en electricidad y la electrotecnología','2021-09-10 02:58:14',NULL,'REGISTRADO'),(730,'Trabajadores forestales','2021-09-10 02:58:14',NULL,'REGISTRADO'),(731,'Trabajadores forestales (siringueros, carboneros y taladores)','2021-09-10 02:58:14',NULL,'REGISTRADO'),(732,'Trabajadores forestales, acuicultores, pescadores y cazadores','2021-09-10 02:58:14',NULL,'REGISTRADO'),(733,'Trabajadores sociales','2021-09-10 02:58:15',NULL,'REGISTRADO'),(734,'Traductores','2021-09-10 02:58:15',NULL,'REGISTRADO'),(735,'tratamiento término, filtración y destilación)','2021-09-10 02:58:15',NULL,'REGISTRADO'),(736,'Vendedores a domicilio (vendedor puerta a puerta)','2021-09-10 02:58:15',NULL,'REGISTRADO'),(737,'Vendedores ambulantes','2021-09-10 02:58:15',NULL,'REGISTRADO'),(738,'Vendedores ambulantes de productos comestibles','2021-09-10 02:58:16',NULL,'REGISTRADO'),(739,'Vendedores ambulantes de productos no comestibles','2021-09-10 02:58:16',NULL,'REGISTRADO'),(740,'Vendedores ambulantes de servicios y afines','2021-09-10 02:58:16',NULL,'REGISTRADO'),(741,'Vendedores de comidas al mostrador','2021-09-10 02:58:16',NULL,'REGISTRADO'),(742,'Vendedores de servicios de telefonía móvil (chalequeros)','2021-09-10 02:58:16',NULL,'REGISTRADO'),(743,'Vendedores en puestos fijos y móviles','2021-09-10 02:58:17',NULL,'REGISTRADO'),(744,'Vendedores en puestos fijos y móviles (vendedores en kioscos, puestos mercado y puestos móviles)','2021-09-10 02:58:17',NULL,'REGISTRADO'),(745,'Vendedores en tiendas y almacenes','2021-09-10 02:58:17',NULL,'REGISTRADO'),(746,'Vendedores en tiendas y almacenes','2021-09-10 02:58:17',NULL,'REGISTRADO'),(747,'Vendedores en vehículo','2021-09-10 02:58:17',NULL,'REGISTRADO'),(748,'Vendedores o expendedores de boletos','2021-09-10 02:58:18',NULL,'REGISTRADO'),(749,'Vendedores o expendedores de boletos (taquilleros)','2021-09-10 02:58:18',NULL,'REGISTRADO'),(750,'Vendedores por teléfono, correo e Internet','2021-09-10 02:58:18',NULL,'REGISTRADO'),(751,'Vendedores, demostradores y modelos','2021-09-10 02:58:18',NULL,'REGISTRADO'),(752,'Veterinarios','2021-09-10 02:58:18',NULL,'REGISTRADO'),(753,'Veterinarios (medicina veterinaria)','2021-09-10 02:58:19',NULL,'REGISTRADO'),(754,'Voceadores y cobradores del transporte público','2021-09-10 02:58:19',NULL,'REGISTRADO'),(755,'Zapateros (fabricante y reparador de calzados)','2021-09-10 02:58:19',NULL,'REGISTRADO'),(756,'Estudiante','2021-09-10 02:58:19',NULL,'REGISTRADO');
/*!40000 ALTER TABLE `pb_profesiones_ocupaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_programa`
--

DROP TABLE IF EXISTS `pb_programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_programa` (
  `id_programa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_programa` varchar(250) DEFAULT NULL,
  `estado_programa` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_programa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_programa`
--

LOCK TABLES `pb_programa` WRITE;
/*!40000 ALTER TABLE `pb_programa` DISABLE KEYS */;
INSERT INTO `pb_programa` VALUES (1,'EDUCACIÓN SUPERIOR','REGISTRADO'),(2,'ROBOTICA','REGISTRADO');
/*!40000 ALTER TABLE `pb_programa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_publicacion`
--

DROP TABLE IF EXISTS `pb_publicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_publicacion` (
  `id_publicacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_gestion` int(11) DEFAULT NULL,
  `id_planificacion_programa` int(11) DEFAULT NULL,
  `nombre_programa` varchar(300) DEFAULT NULL,
  `numero_version` int(11) DEFAULT NULL,
  `id_tipo_programa` int(11) DEFAULT NULL,
  `id_grado_academico` int(11) DEFAULT NULL,
  `id_sede` int(11) DEFAULT NULL,
  `monto_matricula` int(11) DEFAULT NULL,
  `primera_cuota` int(11) DEFAULT NULL,
  `numero_cuotas` int(11) DEFAULT NULL,
  `precio_programa` int(11) DEFAULT NULL,
  `descuento_pago_contado` int(11) DEFAULT NULL,
  `fecha_fin_inscripcion` date DEFAULT NULL,
  `fecha_inicio_publicacion` date DEFAULT NULL,
  `fecha_fin_publicacion` date DEFAULT NULL,
  `observacion` varchar(50) DEFAULT NULL,
  `fecha_registro` timestamp NULL DEFAULT NULL,
  `id_usuario_registro` int(11) DEFAULT NULL,
  `fecha_modificacion` timestamp NULL DEFAULT NULL,
  `id_usuario_modificacion` int(11) DEFAULT NULL,
  `estado_publicacion` varchar(15) DEFAULT NULL,
  `celular_coordinador` varchar(20) DEFAULT NULL,
  `titulacion_intermedia` text DEFAULT NULL,
  `carga_horaria` int(11) DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `descripcion_whatsapp` int(11) DEFAULT NULL,
  `id_responsable_interno` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_publicacion`),
  KEY `pb_publicacion_fk` (`id_gestion`),
  KEY `pb_publicacion_fk1` (`id_responsable_interno`),
  KEY `pb_publicacion_fk2` (`id_grado_academico`),
  KEY `pb_publicacion_fk3` (`id_sede`),
  KEY `pb_publicacion_fk4` (`id_tipo_programa`),
  CONSTRAINT `pb_publicacion_fk` FOREIGN KEY (`id_gestion`) REFERENCES `pb_gestion` (`id_gestion`),
  CONSTRAINT `pb_publicacion_fk1` FOREIGN KEY (`id_responsable_interno`) REFERENCES `pb_persona` (`id_persona`),
  CONSTRAINT `pb_publicacion_fk2` FOREIGN KEY (`id_grado_academico`) REFERENCES `pb_grado_academico` (`id_grado_academico`),
  CONSTRAINT `pb_publicacion_fk3` FOREIGN KEY (`id_sede`) REFERENCES `pb_sede` (`id_sede`),
  CONSTRAINT `pb_publicacion_fk4` FOREIGN KEY (`id_tipo_programa`) REFERENCES `pb_tipo_programa` (`id_tipo_programa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_publicacion`
--

LOCK TABLES `pb_publicacion` WRITE;
/*!40000 ALTER TABLE `pb_publicacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `pb_publicacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_sede`
--

DROP TABLE IF EXISTS `pb_sede`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_sede` (
  `id_sede` int(11) NOT NULL AUTO_INCREMENT,
  `denominacion_sede` varchar(100) DEFAULT NULL,
  `descripcion_sede` varchar(200) DEFAULT NULL,
  `latitud` varchar(50) DEFAULT NULL,
  `longitud` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_sede`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_sede`
--

LOCK TABLES `pb_sede` WRITE;
/*!40000 ALTER TABLE `pb_sede` DISABLE KEYS */;
INSERT INTO `pb_sede` VALUES (1,'EL ALTO',NULL,NULL,NULL),(2,'COCHABAMBA',NULL,NULL,NULL),(3,'LA PAZ',NULL,NULL,NULL);
/*!40000 ALTER TABLE `pb_sede` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_sesion`
--

DROP TABLE IF EXISTS `pb_sesion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_sesion` (
  `id_sesion` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `fecha_registro_sesion` timestamp NULL DEFAULT current_timestamp(),
  `ip` varchar(15) DEFAULT NULL,
  `navegador` varchar(100) DEFAULT NULL,
  `plataforma` varchar(100) DEFAULT NULL,
  `es_movil` tinyint(1) DEFAULT NULL,
  `movil` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_sesion`),
  KEY `pb_sesion_fk1` (`id_usuario`),
  CONSTRAINT `pb_sesion_fk1` FOREIGN KEY (`id_usuario`) REFERENCES `pb_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_sesion`
--

LOCK TABLES `pb_sesion` WRITE;
/*!40000 ALTER TABLE `pb_sesion` DISABLE KEYS */;
INSERT INTO `pb_sesion` VALUES (8,1,'2021-10-13 18:57:40','177.222.61.85','Chrome','Android',1,'Android'),(9,1,'2021-10-17 09:06:06','127.0.0.1','Firefox','Linux',NULL,NULL),(10,1,'2021-10-19 12:19:59','127.0.0.1','Firefox','Linux',NULL,NULL),(11,1,'2021-10-20 09:24:53','127.0.0.1','Chrome','Windows 10',NULL,NULL),(12,1,'2021-10-21 05:50:28','127.0.0.1','Chrome','Windows 10',NULL,NULL),(13,1,'2021-10-22 06:21:59','127.0.0.1','Chrome','Windows 10',NULL,NULL),(14,17,'2021-10-22 15:37:09','127.0.0.1','Firefox','Linux',NULL,NULL),(15,1,'2021-10-23 02:00:58','127.0.0.1','Firefox','Linux',NULL,NULL),(16,1,'2021-10-24 02:27:38','127.0.0.1','Chrome','Windows 10',NULL,NULL),(17,1,'2021-10-26 06:10:25','127.0.0.1','Chrome','Windows 10',NULL,NULL),(18,1,'2021-10-27 07:07:14','127.0.0.1','Chrome','Windows 10',NULL,NULL),(19,1,'2021-10-28 06:57:40','127.0.0.1','Chrome','Windows 10',NULL,NULL),(20,1,'2021-10-29 01:40:22','127.0.0.1','Chrome','Windows 10',NULL,NULL),(21,1,'2021-10-30 01:05:30','127.0.0.1','Firefox','Linux',NULL,NULL),(22,1,'2021-11-04 09:05:52','127.0.0.1','Chrome','Windows 10',NULL,NULL),(23,1,'2021-11-05 12:48:56','127.0.0.1','Firefox','Linux',NULL,NULL);
/*!40000 ALTER TABLE `pb_sesion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_tipo_pago`
--

DROP TABLE IF EXISTS `pb_tipo_pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_tipo_pago` (
  `id_tipo_pago` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_tipo_pago` varchar(100) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `estado_tipo_pago` varchar(10) NOT NULL DEFAULT 'REGISTRADO',
  PRIMARY KEY (`id_tipo_pago`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_tipo_pago`
--

LOCK TABLES `pb_tipo_pago` WRITE;
/*!40000 ALTER TABLE `pb_tipo_pago` DISABLE KEYS */;
INSERT INTO `pb_tipo_pago` VALUES (1,'PAGO POR COLEGIATURA','2021-09-12 20:33:13',NULL,'REGISTRADO'),(2,'PAGO POR MATRICULACIÓN','2021-09-12 20:33:16',NULL,'REGISTRADO'),(3,'PAGO POR MATRICULACIÓN Y COLEGIATURA','2021-09-12 20:33:22',NULL,'REGISTRADO');
/*!40000 ALTER TABLE `pb_tipo_pago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_tipo_programa`
--

DROP TABLE IF EXISTS `pb_tipo_programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_tipo_programa` (
  `id_tipo_programa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_programa` varchar(50) DEFAULT NULL,
  `estado_tipo_programa` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_programa`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_tipo_programa`
--

LOCK TABLES `pb_tipo_programa` WRITE;
/*!40000 ALTER TABLE `pb_tipo_programa` DISABLE KEYS */;
INSERT INTO `pb_tipo_programa` VALUES (1,'PRESENCIAL','REGISTRADO'),(2,'SEMI-PRESENCIAL','REGISTRADO'),(3,'VIRTUAL','REGISTRADO'),(4,'ESCOLARIZADO','REGISTRADO'),(5,'NO ESCOLARIZADO','REGISTRADO'),(6,'OPCIONAL','REGISTRADO');
/*!40000 ALTER TABLE `pb_tipo_programa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_universidades_normales`
--

DROP TABLE IF EXISTS `pb_universidades_normales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_universidades_normales` (
  `id_universidades_normales` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) NOT NULL,
  `acronimo` varchar(15) NOT NULL,
  `id_departamento` int(11) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `estado` varchar(20) NOT NULL DEFAULT 'REGISTRADO',
  PRIMARY KEY (`id_universidades_normales`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_universidades_normales`
--

LOCK TABLES `pb_universidades_normales` WRITE;
/*!40000 ALTER TABLE `pb_universidades_normales` DISABLE KEYS */;
INSERT INTO `pb_universidades_normales` VALUES (1,'Universidad Autónoma del Beni José Ballivián','UABJB',0,'PÚBLICA',NULL,'REGISTRADO'),(2,' Universidad Privada del Valle','UNIVALLE',0,'PRIVADA',NULL,'REGISTRADO'),(3,'Universidad Mayor de San Francisco Xavier','USFX',0,'PÚBLICA',NULL,'REGISTRADO'),(4,'Universidad Andina Simón Bolívar','UASB',0,'PÚBLICA',NULL,'REGISTRADO'),(5,'Universidad Privada del Valle','UNIVALLE',0,'PRIVADA',NULL,'REGISTRADO'),(6,'Universidad Boliviana de Informática','UBI',0,'PRIVADA',NULL,'REGISTRADO');
/*!40000 ALTER TABLE `pb_universidades_normales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pb_usuario`
--

DROP TABLE IF EXISTS `pb_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pb_usuario` (
  `id_usuario` int(11) DEFAULT NULL,
  `nombre_usuario` varchar(30) DEFAULT NULL,
  `clave_usuario` varchar(150) DEFAULT NULL,
  `fecha_modificacion` timestamp NULL DEFAULT NULL,
  `estado_usuario` varchar(10) DEFAULT NULL,
  KEY `pb_usuario_fk1` (`id_usuario`),
  CONSTRAINT `pb_usuario_fk1` FOREIGN KEY (`id_usuario`) REFERENCES `pb_persona` (`id_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pb_usuario`
--

LOCK TABLES `pb_usuario` WRITE;
/*!40000 ALTER TABLE `pb_usuario` DISABLE KEYS */;
INSERT INTO `pb_usuario` VALUES (1,'email@gmail.com','4297f44b13955235245b2497399d7a93',NULL,'ACTIVO'),(17,'esther@gmail.com','4297f44b13955235245b2497399d7a93',NULL,'ACTIVO');
/*!40000 ALTER TABLE `pb_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `pb_view_programas`
--

DROP TABLE IF EXISTS `pb_view_programas`;
/*!50001 DROP VIEW IF EXISTS `pb_view_programas`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `pb_view_programas` (
  `id_planificacion_programa` tinyint NOT NULL,
  `id_programa` tinyint NOT NULL,
  `nombre_programa` tinyint NOT NULL,
  `sigla_programa` tinyint NOT NULL,
  `fecha_inicio` tinyint NOT NULL,
  `fecha_fin` tinyint NOT NULL,
  `costo_matricula` tinyint NOT NULL,
  `costo_colegiatura` tinyint NOT NULL,
  `id_grado_academico` tinyint NOT NULL,
  `abreviatura` tinyint NOT NULL,
  `descripcion_grado_academico` tinyint NOT NULL,
  `id_gestion` tinyint NOT NULL,
  `gestion` tinyint NOT NULL,
  `id_sede` tinyint NOT NULL,
  `denominacion_sede` tinyint NOT NULL,
  `estado_programa` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `pb_view_users`
--

DROP TABLE IF EXISTS `pb_view_users`;
/*!50001 DROP VIEW IF EXISTS `pb_view_users`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `pb_view_users` (
  `id_persona` tinyint NOT NULL,
  `ci` tinyint NOT NULL,
  `expedido` tinyint NOT NULL,
  `paterno` tinyint NOT NULL,
  `materno` tinyint NOT NULL,
  `nombre` tinyint NOT NULL,
  `fecha_nacimiento` tinyint NOT NULL,
  `genero` tinyint NOT NULL,
  `estado_civil` tinyint NOT NULL,
  `id_pais_nacionalidad` tinyint NOT NULL,
  `domicilio` tinyint NOT NULL,
  `lugar_nacimiento` tinyint NOT NULL,
  `imagen_persona` tinyint NOT NULL,
  `correo` tinyint NOT NULL,
  `telefono` tinyint NOT NULL,
  `celular` tinyint NOT NULL,
  `fecha_registro` tinyint NOT NULL,
  `id_usuario_registro` tinyint NOT NULL,
  `estado_persona` tinyint NOT NULL,
  `id_usuario` tinyint NOT NULL,
  `nombre_usuario` tinyint NOT NULL,
  `clave_usuario` tinyint NOT NULL,
  `fecha_modificacion` tinyint NOT NULL,
  `estado_usuario` tinyint NOT NULL,
  `estado_grupo_usuario` tinyint NOT NULL,
  `nombre_grupo` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `pb_view_programas`
--

/*!50001 DROP TABLE IF EXISTS `pb_view_programas`*/;
/*!50001 DROP VIEW IF EXISTS `pb_view_programas`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`stacknew_p`@`%.%.%.%` SQL SECURITY DEFINER */
/*!50001 VIEW `pb_view_programas` AS select `ppp`.`id_planificacion_programa` AS `id_planificacion_programa`,`pp`.`id_programa` AS `id_programa`,`pp`.`nombre_programa` AS `nombre_programa`,`ppp`.`sigla_programa` AS `sigla_programa`,`ppp`.`fecha_inicio` AS `fecha_inicio`,`ppp`.`fecha_fin` AS `fecha_fin`,`ppp`.`costo_matricula` AS `costo_matricula`,`ppp`.`costo_colegiatura` AS `costo_colegiatura`,`pga`.`id_grado_academico` AS `id_grado_academico`,`pga`.`abreviatura` AS `abreviatura`,`pga`.`descripcion_grado_academico` AS `descripcion_grado_academico`,`pg`.`id_gestion` AS `id_gestion`,`pg`.`gestion` AS `gestion`,`ps`.`id_sede` AS `id_sede`,`ps`.`denominacion_sede` AS `denominacion_sede`,`ppp`.`estado_programa` AS `estado_programa` from ((((`pb_programa` `pp` join `pb_planificacion_programa` `ppp` on(`pp`.`id_programa` = `ppp`.`id_programa`)) left join `pb_grado_academico` `pga` on(`ppp`.`id_grado_academico` = `pga`.`id_grado_academico`)) left join `pb_gestion` `pg` on(`ppp`.`id_gestion` = `pg`.`id_gestion`)) left join `pb_sede` `ps` on(`ppp`.`id_sede` = `ps`.`id_sede`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `pb_view_users`
--

/*!50001 DROP TABLE IF EXISTS `pb_view_users`*/;
/*!50001 DROP VIEW IF EXISTS `pb_view_users`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`stacknew_p`@`%.%.%.%` SQL SECURITY DEFINER */
/*!50001 VIEW `pb_view_users` AS select `p`.`id_persona` AS `id_persona`,`p`.`ci` AS `ci`,`p`.`expedido` AS `expedido`,`p`.`paterno` AS `paterno`,`p`.`materno` AS `materno`,`p`.`nombre` AS `nombre`,`p`.`fecha_nacimiento` AS `fecha_nacimiento`,`p`.`genero` AS `genero`,`p`.`estado_civil` AS `estado_civil`,`p`.`id_pais_nacionalidad` AS `id_pais_nacionalidad`,`p`.`domicilio` AS `domicilio`,`p`.`lugar_nacimiento` AS `lugar_nacimiento`,`p`.`imagen_persona` AS `imagen_persona`,`p`.`correo` AS `correo`,`p`.`telefono` AS `telefono`,`p`.`celular` AS `celular`,`p`.`fecha_registro` AS `fecha_registro`,`p`.`id_usuario_registro` AS `id_usuario_registro`,`p`.`estado_persona` AS `estado_persona`,`u`.`id_usuario` AS `id_usuario`,`u`.`nombre_usuario` AS `nombre_usuario`,`u`.`clave_usuario` AS `clave_usuario`,`u`.`fecha_modificacion` AS `fecha_modificacion`,`u`.`estado_usuario` AS `estado_usuario`,`gu`.`estado_grupo_usuario` AS `estado_grupo_usuario`,`g`.`nombre_grupo` AS `nombre_grupo` from (((`pb_persona` `p` join `pb_usuario` `u` on(`p`.`id_persona` = `u`.`id_usuario`)) join `pb_grupo_usuario` `gu` on(`gu`.`id_persona` = `u`.`id_usuario`)) join `pb_grupo` `g` on(`g`.`id_grupo` = `gu`.`id_grupo`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-05 19:05:13
