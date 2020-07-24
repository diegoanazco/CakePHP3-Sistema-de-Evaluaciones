-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: localhost    Database: sieval
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.18.04.1

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
-- Table structure for table `academics`
--

DROP TABLE IF EXISTS `academics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `academics` (
  `academics_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de academics',
  `coordinators_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un coordinador',
  `schools_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a una escuela',
  `academics_year` int(11) NOT NULL COMMENT 'Año académico.',
  `academics_period` varchar(2) NOT NULL COMMENT 'Periodó del año académico.',
  `academics_start` date NOT NULL,
  `academics_end` date NOT NULL,
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`academics_id`),
  KEY `fk_academics_coordinators1_idx` (`coordinators_id`),
  KEY `fk_academics_schools1_idx` (`schools_id`),
  CONSTRAINT `fk_academics_coordinators1` FOREIGN KEY (`coordinators_id`) REFERENCES `coordinators` (`coordinators_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_academics_schools1` FOREIGN KEY (`schools_id`) REFERENCES `schools` (`schools_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `academics`
--

LOCK TABLES `academics` WRITE;
/*!40000 ALTER TABLE `academics` DISABLE KEYS */;
INSERT INTO `academics` VALUES (1,1,1,2020,'I','2020-07-10','2020-07-10','2020-07-10 20:37:21','2020-07-10 20:37:21');
/*!40000 ALTER TABLE `academics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `annexes`
--

DROP TABLE IF EXISTS `annexes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `annexes` (
  `annexes_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de anexos del examen\n',
  `tests_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un examen',
  `annexes_description` varchar(300) NOT NULL COMMENT 'Descripción de los anexos del examen',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`annexes_id`),
  KEY `fk_annexes_tests1_idx` (`tests_id`),
  CONSTRAINT `fk_annexes_tests1` FOREIGN KEY (`tests_id`) REFERENCES `tests` (`tests_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `annexes`
--

LOCK TABLES `annexes` WRITE;
/*!40000 ALTER TABLE `annexes` DISABLE KEYS */;
INSERT INTO `annexes` VALUES (1,2,'Ayuda de Pregunta 01','2020-07-21 02:37:19','2020-07-21 02:37:19');
/*!40000 ALTER TABLE `annexes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assignments`
--

DROP TABLE IF EXISTS `assignments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assignments` (
  `assignment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de asignación',
  `academics_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un academico',
  `subjects_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un curso',
  `teachers_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un docente',
  `shifts_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un turno',
  `sections_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un sección',
  `created` datetime NOT NULL COMMENT 'Fecha de creación.',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`assignment_id`),
  KEY `fk_assignment_academics1_idx` (`academics_id`),
  KEY `fk_assignment_subjects1_idx` (`subjects_id`),
  KEY `fk_assignment_teachers1_idx` (`teachers_id`),
  KEY `fk_assignment_shifts1_idx` (`shifts_id`),
  KEY `fk_assignment_sections1_idx` (`sections_id`),
  CONSTRAINT `fk_assignment_academics1` FOREIGN KEY (`academics_id`) REFERENCES `academics` (`academics_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_assignment_sections1` FOREIGN KEY (`sections_id`) REFERENCES `sections` (`sections_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_assignment_shifts1` FOREIGN KEY (`shifts_id`) REFERENCES `shifts` (`shifts_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_assignment_subjects1` FOREIGN KEY (`subjects_id`) REFERENCES `subjects` (`subjects_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_assignment_teachers1` FOREIGN KEY (`teachers_id`) REFERENCES `teachers` (`teachers_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assignments`
--

LOCK TABLES `assignments` WRITE;
/*!40000 ALTER TABLE `assignments` DISABLE KEYS */;
INSERT INTO `assignments` VALUES (1,1,1,1,1,1,'2020-07-10 20:39:03','2020-07-10 20:39:03');
/*!40000 ALTER TABLE `assignments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colleges`
--

DROP TABLE IF EXISTS `colleges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colleges` (
  `college_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código Único de college',
  `college_name` varchar(150) NOT NULL COMMENT 'Nombre de la Universidad',
  `college_address` varchar(150) NOT NULL COMMENT 'Dirección de la universidad',
  `college_phone` varchar(10) NOT NULL COMMENT 'Teléfono fijo de la universidad.',
  `college_cellphone` varchar(9) NOT NULL COMMENT 'Teléfono celular de la universidad',
  `college_email` varchar(150) NOT NULL COMMENT 'Correo de la universidad.',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colleges`
--

LOCK TABLES `colleges` WRITE;
/*!40000 ALTER TABLE `colleges` DISABLE KEYS */;
INSERT INTO `colleges` VALUES (1,'Universidad La Salle','Av. Alfonso Ugarte','054444444','999999999','universidad@ulasalle.edu.pe','2020-06-09 18:14:02','2020-06-09 18:14:02');
/*!40000 ALTER TABLE `colleges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coordinators`
--

DROP TABLE IF EXISTS `coordinators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coordinators` (
  `coordinators_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de coordinadores',
  `users_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un usuario\n',
  `schools_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a una escuela',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`coordinators_id`),
  KEY `fk_coordinators_schools1_idx` (`schools_id`),
  KEY `fk_coordinators_users1_idx` (`users_id`),
  CONSTRAINT `fk_coordinators_schools1` FOREIGN KEY (`schools_id`) REFERENCES `schools` (`schools_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_coordinators_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coordinators`
--

LOCK TABLES `coordinators` WRITE;
/*!40000 ALTER TABLE `coordinators` DISABLE KEYS */;
INSERT INTO `coordinators` VALUES (1,6,1,'2020-07-10 20:37:10','2020-07-10 20:37:10');
/*!40000 ALTER TABLE `coordinators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deans`
--

DROP TABLE IF EXISTS `deans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deans` (
  `deans_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de decanos',
  `users_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un usuario',
  `faculties_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a una facultad',
  `created` datetime NOT NULL COMMENT 'Fecha de creación.',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`deans_id`),
  KEY `fk_deans_faculties1_idx` (`faculties_id`),
  KEY `fk_deans_users1_idx` (`users_id`),
  CONSTRAINT `fk_deans_faculties1` FOREIGN KEY (`faculties_id`) REFERENCES `faculties` (`faculties_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_deans_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deans`
--

LOCK TABLES `deans` WRITE;
/*!40000 ALTER TABLE `deans` DISABLE KEYS */;
/*!40000 ALTER TABLE `deans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `degrees`
--

DROP TABLE IF EXISTS `degrees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `degrees` (
  `degrees_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código Unico de grados academicos',
  `degrees_description` varchar(45) NOT NULL COMMENT 'Descripcción del grado academico',
  `degrees_acronym` varchar(45) NOT NULL COMMENT 'Acrónimo del grado academico',
  `created` datetime NOT NULL COMMENT 'Fecha de Creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`degrees_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `degrees`
--

LOCK TABLES `degrees` WRITE;
/*!40000 ALTER TABLE `degrees` DISABLE KEYS */;
INSERT INTO `degrees` VALUES (1,'Doctor','Dr.','2020-06-09 18:14:02','2020-06-09 18:14:02'),(2,'Magister','Msc.','2020-06-09 18:14:02','2020-06-09 18:14:02'),(3,'Licenciado','Lic.','2020-06-09 18:14:02','2020-06-09 18:14:02'),(4,'Secundaria Completa','Sec.','2020-06-09 18:14:02','2020-06-09 18:14:02');
/*!40000 ALTER TABLE `degrees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `departments_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de departamentos',
  `faculties_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a una facultad',
  `departments_name` varchar(150) NOT NULL COMMENT 'Nombre del departamento.',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`departments_id`),
  KEY `fk_departments_faculties1_idx` (`faculties_id`),
  CONSTRAINT `fk_departments_faculties1` FOREIGN KEY (`faculties_id`) REFERENCES `faculties` (`faculties_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,1,'Ingenieria y Matematicas','2020-07-10 20:36:17','2020-07-10 20:36:17');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directors`
--

DROP TABLE IF EXISTS `directors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directors` (
  `directors_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de Directores',
  `users_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un usuario',
  `departments_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un departamento\n',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`directors_id`),
  KEY `fk_directors_departments1_idx` (`departments_id`),
  KEY `fk_directors_users1_idx` (`users_id`),
  CONSTRAINT `fk_directors_departments1` FOREIGN KEY (`departments_id`) REFERENCES `departments` (`departments_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_directors_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directors`
--

LOCK TABLES `directors` WRITE;
/*!40000 ALTER TABLE `directors` DISABLE KEYS */;
/*!40000 ALTER TABLE `directors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faculties`
--

DROP TABLE IF EXISTS `faculties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faculties` (
  `faculties_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de faculties',
  `college_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a una universidad',
  `faculties_name` varchar(150) NOT NULL COMMENT 'Nombre de la facultad',
  `created` datetime NOT NULL COMMENT 'Fecha de creación.',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`faculties_id`),
  KEY `fk_faculties_college1_idx` (`college_id`),
  CONSTRAINT `fk_faculties_college1` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faculties`
--

LOCK TABLES `faculties` WRITE;
/*!40000 ALTER TABLE `faculties` DISABLE KEYS */;
INSERT INTO `faculties` VALUES (1,1,'Ingenierias','2020-07-10 20:35:45','2020-07-10 20:35:45');
/*!40000 ALTER TABLE `faculties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `questions_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de preguntas',
  `tests_id` int(11) NOT NULL COMMENT 'Código que referencia los exámenes',
  `questions_score` int(11) NOT NULL COMMENT 'Puntaje de la pregunta',
  `questions_header` varchar(300) NOT NULL COMMENT 'Encabezado de la pregunta',
  `questions_photo` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de la última modificación.',
  PRIMARY KEY (`questions_id`),
  KEY `fk_questions_tests1_idx` (`tests_id`),
  CONSTRAINT `fk_questions_tests1` FOREIGN KEY (`tests_id`) REFERENCES `tests` (`tests_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,1,5,'Evaluación ID 01 - Primera Pregunt','uploads/files/1.png','2020-07-10 20:39:46','2020-07-21 22:35:51'),(2,1,5,'Evaluación ID 01 - Segunda Pregunta','uploads/files/bonus_cwkpq.png','2020-07-10 20:39:55','2020-07-21 22:35:58');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rectors`
--

DROP TABLE IF EXISTS `rectors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rectors` (
  `rectors_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de un rector.',
  `users_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un usuario',
  `college_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a una Universidad',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`rectors_id`),
  KEY `fk_rectors_college_idx` (`college_id`),
  KEY `fk_rectors_users1_idx` (`users_id`),
  CONSTRAINT `fk_rectors_college` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_rectors_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rectors`
--

LOCK TABLES `rectors` WRITE;
/*!40000 ALTER TABLE `rectors` DISABLE KEYS */;
/*!40000 ALTER TABLE `rectors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `roles_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de los roles',
  `roles_description` varchar(150) NOT NULL COMMENT 'Descripción del rol',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación.',
  PRIMARY KEY (`roles_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Decano','2020-06-09 18:14:02','2020-06-09 18:14:02'),(2,'Coordinador','2020-06-09 18:14:02','2020-06-09 18:14:02'),(3,'Estudiante','2020-06-09 18:14:02','2020-06-09 18:14:02'),(4,'Director','2020-06-09 18:14:02','2020-06-09 18:14:02'),(5,'Rector','2020-06-09 18:14:02','2020-06-09 18:14:02'),(6,'Docente','2020-06-09 18:14:02','2020-06-09 18:14:02'),(7,'Admin','2020-06-09 18:14:13','2020-06-09 18:14:13');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schools`
--

DROP TABLE IF EXISTS `schools`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schools` (
  `schools_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de escuelas',
  `departments_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un departamento',
  `schools_name` varchar(150) NOT NULL COMMENT 'Nombre de la escuela',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`schools_id`),
  KEY `fk_schools_departments1_idx` (`departments_id`),
  CONSTRAINT `fk_schools_departments1` FOREIGN KEY (`departments_id`) REFERENCES `departments` (`departments_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schools`
--

LOCK TABLES `schools` WRITE;
/*!40000 ALTER TABLE `schools` DISABLE KEYS */;
INSERT INTO `schools` VALUES (1,1,'Ing. de Software','2020-07-10 20:36:49','2020-07-10 20:36:49');
/*!40000 ALTER TABLE `schools` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections` (
  `sections_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de secciones.',
  `sections_groups` varchar(10) NOT NULL COMMENT 'Número de grupo del curso.',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`sections_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES (1,'I','2020-06-09 18:14:04','2020-06-09 18:14:04'),(2,'II','2020-06-09 18:14:04','2020-06-09 18:14:04');
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `semesters`
--

DROP TABLE IF EXISTS `semesters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `semesters` (
  `semesters_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Códico único del semestre',
  `study_plans_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un plan de estudio',
  `semesters_number` varchar(5) NOT NULL COMMENT 'Número de semestre',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`semesters_id`),
  KEY `fk_semesters_study_plans1_idx` (`study_plans_id`),
  CONSTRAINT `fk_semesters_study_plans1` FOREIGN KEY (`study_plans_id`) REFERENCES `study_plans` (`study_plans_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `semesters`
--

LOCK TABLES `semesters` WRITE;
/*!40000 ALTER TABLE `semesters` DISABLE KEYS */;
INSERT INTO `semesters` VALUES (1,1,'VIII','2020-07-10 20:38:02','2020-07-10 20:38:02');
/*!40000 ALTER TABLE `semesters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shifts`
--

DROP TABLE IF EXISTS `shifts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shifts` (
  `shifts_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único del turno',
  `shifts_description` varchar(45) NOT NULL COMMENT 'Descripcción del turno (mañana o tarde)',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`shifts_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shifts`
--

LOCK TABLES `shifts` WRITE;
/*!40000 ALTER TABLE `shifts` DISABLE KEYS */;
INSERT INTO `shifts` VALUES (1,'Mañana','2020-06-09 18:14:04','2020-06-09 18:14:04'),(2,'Tarde','2020-06-09 18:14:04','2020-06-09 18:14:04'),(3,'Noche','2020-06-09 18:14:04','2020-06-09 18:14:04');
/*!40000 ALTER TABLE `shifts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `students_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de estudiantes',
  `users_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un usuario',
  `schools_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a una escuela',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`students_id`),
  KEY `fk_students_schools1_idx` (`schools_id`),
  KEY `fk_students_users1_idx` (`users_id`),
  CONSTRAINT `fk_students_schools1` FOREIGN KEY (`schools_id`) REFERENCES `schools` (`schools_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_students_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `study_plans`
--

DROP TABLE IF EXISTS `study_plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `study_plans` (
  `study_plans_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de planes de estudios',
  `schools_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a una escuela',
  `study_plans_year` varchar(10) NOT NULL COMMENT 'Año del plan de estudio.',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`study_plans_id`),
  KEY `fk_study_plans_schools1_idx` (`schools_id`),
  CONSTRAINT `fk_study_plans_schools1` FOREIGN KEY (`schools_id`) REFERENCES `schools` (`schools_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `study_plans`
--

LOCK TABLES `study_plans` WRITE;
/*!40000 ALTER TABLE `study_plans` DISABLE KEYS */;
INSERT INTO `study_plans` VALUES (1,1,'2016','2020-07-10 20:37:54','2020-07-10 20:37:54');
/*!40000 ALTER TABLE `study_plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `subjects_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de subjects',
  `semesters_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un semestre',
  `types_subjects_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un tipo de curso',
  `subjects_name` varchar(50) NOT NULL COMMENT 'Nombre del curso',
  `subjects_credit` int(11) NOT NULL COMMENT 'Número de créditos',
  `subjects_hours` int(11) NOT NULL COMMENT 'Número de horas del curso.',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`subjects_id`),
  KEY `fk_subjects_semesters1_idx` (`semesters_id`),
  KEY `fk_subjects_types_subjects1_idx` (`types_subjects_id`),
  CONSTRAINT `fk_subjects_semesters1` FOREIGN KEY (`semesters_id`) REFERENCES `semesters` (`semesters_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_subjects_types_subjects1` FOREIGN KEY (`types_subjects_id`) REFERENCES `types_subjects` (`types_subjects`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES (1,1,1,'Ingenieria Web',6,6,'2020-07-10 20:38:37','2020-07-10 20:38:37');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers` (
  `teachers_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de profesores',
  `users_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un usuario',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`teachers_id`),
  KEY `fk_teachers_users1_idx` (`users_id`),
  CONSTRAINT `fk_teachers_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (1,7,'2020-07-10 20:38:50','2020-07-10 20:38:50');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tests`
--

DROP TABLE IF EXISTS `tests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tests` (
  `tests_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código Único de evaluaciones.',
  `assignment_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a una asignación',
  `types_test_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un tipo de examen',
  `semesters_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un semestre',
  `schools_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a una escuela',
  `test_date` date NOT NULL COMMENT 'Día de fecha del examen',
  `tests_start` time NOT NULL COMMENT 'Hora de inicio del examen',
  `tests_end` time NOT NULL COMMENT 'Hora de fin del examen',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación.',
  PRIMARY KEY (`tests_id`),
  KEY `fk_tests_assignments1_idx` (`assignment_id`),
  KEY `fk_tests_types_test1_idx` (`types_test_id`),
  KEY `fk_tests_schools1_idx` (`schools_id`),
  KEY `fk_tests_semesters1_idx` (`semesters_id`),
  CONSTRAINT `fk_tests_assignments1` FOREIGN KEY (`assignment_id`) REFERENCES `assignments` (`assignment_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tests_schools1` FOREIGN KEY (`schools_id`) REFERENCES `schools` (`schools_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tests_semesters1` FOREIGN KEY (`semesters_id`) REFERENCES `semesters` (`semesters_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tests_types_test1` FOREIGN KEY (`types_test_id`) REFERENCES `types_test` (`types_test_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tests`
--

LOCK TABLES `tests` WRITE;
/*!40000 ALTER TABLE `tests` DISABLE KEYS */;
INSERT INTO `tests` VALUES (1,1,1,1,1,'2020-07-10','20:39:00','20:39:00','2020-07-10 20:39:14','2020-07-10 20:39:14'),(2,1,1,1,1,'2020-07-10','20:39:00','20:39:00','2020-07-10 20:39:23','2020-07-10 20:39:23');
/*!40000 ALTER TABLE `tests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types_subjects`
--

DROP TABLE IF EXISTS `types_subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `types_subjects` (
  `types_subjects` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de tipos de cursos.',
  `types_subjects_description` varchar(45) NOT NULL COMMENT 'Descripción del tipo de curso.',
  `created` datetime NOT NULL COMMENT 'Fecha de creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`types_subjects`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types_subjects`
--

LOCK TABLES `types_subjects` WRITE;
/*!40000 ALTER TABLE `types_subjects` DISABLE KEYS */;
INSERT INTO `types_subjects` VALUES (1,'Teórico','2020-06-09 18:14:04','2020-06-09 18:14:04'),(2,'Teórico-Práctico','2020-06-09 18:14:04','2020-06-09 18:14:04'),(3,'Práctico','2020-06-09 18:14:04','2020-06-09 18:14:04');
/*!40000 ALTER TABLE `types_subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types_test`
--

DROP TABLE IF EXISTS `types_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `types_test` (
  `types_test_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código único de tipos de exámenes',
  `types_test_description` varchar(45) NOT NULL COMMENT 'Descripción de los tipos de exámenes',
  `types_test_weight` int(11) NOT NULL COMMENT 'Peso del examen',
  `created` datetime NOT NULL COMMENT 'Fecha de Creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`types_test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types_test`
--

LOCK TABLES `types_test` WRITE;
/*!40000 ALTER TABLE `types_test` DISABLE KEYS */;
INSERT INTO `types_test` VALUES (1,'Evidencia 01',10,'2020-06-09 18:14:13','2020-06-09 18:14:13'),(2,'Evidencia 02',10,'2020-06-09 18:14:13','2020-06-09 18:14:13'),(3,'Parcial',30,'2020-06-09 18:14:13','2020-06-09 18:14:13'),(4,'Evidencia 03',10,'2020-06-09 18:14:13','2020-06-09 18:14:13'),(5,'Evidencia 04',10,'2020-06-09 18:14:13','2020-06-09 18:14:13'),(6,'Final',30,'2020-06-09 18:14:13','2020-06-09 18:14:13');
/*!40000 ALTER TABLE `types_test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código Único de usuarios',
  `roles_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un rol',
  `degrees_id` int(11) NOT NULL COMMENT 'Código Unico de referencia a un grado academico',
  `users_name` varchar(150) NOT NULL COMMENT 'Nombre del usuario',
  `users_fathersurname` varchar(150) NOT NULL COMMENT 'Apellido Paterno del usuario',
  `users_mothersurname` varchar(150) NOT NULL COMMENT 'Apellido Materno del usuario',
  `users_email` varchar(150) NOT NULL COMMENT 'Email del usuario',
  `users_password` varchar(150) NOT NULL COMMENT 'Password del usuario',
  `users_birthday` date NOT NULL COMMENT 'Fecha de nacimiento del Usuario',
  `users_cellphone` varchar(9) NOT NULL COMMENT 'Celular del usuario',
  `users_status` tinyint(1) DEFAULT '1' COMMENT 'Estado Activo/Inactivo del usuario.',
  `created` datetime NOT NULL COMMENT 'Fecha de Creación',
  `modified` datetime NOT NULL COMMENT 'Fecha de ultima modificación\n',
  PRIMARY KEY (`users_id`),
  KEY `fk_users_roles1_idx` (`roles_id`),
  KEY `fk_users_degrees1_idx` (`degrees_id`),
  CONSTRAINT `fk_users_degrees1` FOREIGN KEY (`degrees_id`) REFERENCES `degrees` (`degrees_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`roles_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,7,1,'Administrador','Administrador','Administrador','administrador@admin.edu.pe','$2y$10$Zk97UHLcoy2qzvwd2GGbQOHRRoOgu2n1thgZrjSpcjDuYOyt1lD5a','2020-06-19','999935341',1,'2020-06-19 04:22:31','2020-06-19 04:22:31'),(3,5,1,'Patricio','Quintanilla','Paulet','pquintanillap@ulasalle.edu.pe','$2y$10$XuxDeVIN9QRTGB7dx2d.lOKiCd6I3t1m8psXsHlZpd8m5GkK8kV6i','2020-06-19','999999999',1,'2020-06-19 16:05:39','2020-06-19 16:05:39'),(4,1,2,'Paul','Mendoza','del Carpio','pmendozac@ulasalle.edu.pe','$2y$10$ZQvg1XpgEmo/pD5zDGmCr.RQRo8jbnTfkbFLynioeVygA02R2EL5G','2020-06-19','999999999',1,'2020-06-19 16:06:34','2020-06-19 16:06:34'),(5,4,2,'Paul','Mendoza','del Carpio','pmendozac@ulasalle.edu.pe','$2y$10$nIZFV2e8GDXx6KNFNoqMhuZb/IqvN.qkhWm9nI6BhIoV3YT3jTftK','2020-06-19','999999999',1,'2020-06-19 16:06:57','2020-06-19 16:06:57'),(6,2,2,'Yasiel','Perez','Perez','yperez@ulasalle.edu.pe','$2y$10$eYbogg16tscj4yKCLAWkVeAyiAWBcpdvkREbhHAUjGgFdnAZOlLuW','2020-06-19','999999999',1,'2020-06-19 16:07:32','2020-06-19 16:07:32'),(7,6,2,'Richard','Escobedo','Quispe','rescobedoq@ulasalle.edu.pe','$2y$10$9CG9K6lL1UVnaF7FKIEYNe3iI9TszmPHgK6LABKvxZoVw9qSCCHj6','2020-06-19','999999999',1,'2020-06-19 16:08:03','2020-06-19 16:08:03'),(8,7,1,'Jean Manuel','Añazco','Bolívar','janazcob@ulasalle.edu.pe','$2y$10$MnW1EH9FeRlEie96dWvOwOSJx7qFD9pEPw3fzWSi3WDFEYY1Y844a','2020-07-10','999999999',1,'2020-07-10 22:42:26','2020-07-21 02:52:32'),(10,3,4,'Diego','Añazco','Bolívar','danazcob@ulasalle.edu.pe','$2y$10$UAZXP63TdksgPV4ehLFTC.07T.S9CQ7MaG1wDDFVJu1xItP7ynS.m','2020-07-21','999999999',1,'2020-07-21 19:48:14','2020-07-21 19:48:14'),(11,6,2,'Maribel','Quiroz','Quiroz','mquiroz@ulasalle.edu.pe','$2y$10$Wuor7TDLaKAILKXRru3v1uCqEjnqel9aa8/nryakn4znm3n3jX9eK','2020-07-24','999999999',1,'2020-07-24 15:58:09','2020-07-24 15:58:09');
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

-- Dump completed on 2020-07-24 17:20:51
