/*
SQLyog Community v12.2.0 (32 bit)
MySQL - 10.1.10-MariaDB : Database - evaluacion
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`evaluacion` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `evaluacion`;

/*Table structure for table `cargos` */

DROP TABLE IF EXISTS `cargos`;

CREATE TABLE `cargos` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cargo` varchar(45) NOT NULL,
  `id_estatus` int(11) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id_cargo`),
  KEY `fk_id_estatus` (`id_estatus`),
  CONSTRAINT `fk_id_estatus` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `cargos` */

insert  into `cargos`(`id_cargo`,`nom_cargo`,`id_estatus`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`) values 
(1,'Tecnico I',1,NULL,NULL,NULL,NULL),
(2,'Ingeniero I',1,NULL,NULL,NULL,NULL),
(3,'Director',1,NULL,NULL,NULL,NULL),
(4,'Coordinador',1,NULL,NULL,NULL,NULL);

/*Table structure for table `competencias` */

DROP TABLE IF EXISTS `competencias`;

CREATE TABLE `competencias` (
  `id_competencia` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) DEFAULT NULL,
  `fec_aplicacion` datetime DEFAULT NULL,
  `calificacion` varchar(5) DEFAULT NULL,
  `competencias` varchar(1000) DEFAULT NULL,
  `peso_fijo` varchar(11) DEFAULT NULL,
  `val_peso` varchar(5) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  `revisado_por` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_competencia`),
  KEY `id_person` (`id_persona`),
  CONSTRAINT `id_person` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

/*Data for the table `competencias` */

insert  into `competencias`(`id_competencia`,`id_persona`,`fec_aplicacion`,`calificacion`,`competencias`,`peso_fijo`,`val_peso`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`,`revisado_por`) values 
(1,NULL,NULL,NULL,'Compromiso de Trabajo: Establecer altos estándares de desempeño, abocarse al logro de metas ambiciosas y trabaja con empeño para lograrlas.','7',NULL,NULL,NULL,NULL,NULL,NULL),
(2,NULL,NULL,NULL,'Auto Desarrollo: Mido la motivación para el mejoramiento continuo a través de estudios, cursos, lecturas y cualquier otra actividad individual u organizacional que aseguren su evolución personal y profesional.','6',NULL,NULL,NULL,NULL,NULL,NULL),
(3,NULL,NULL,NULL,'Creatividad e iniciativa: Mide la capacidad del empleado para aportar y concretar ideas útiles y oportunas que permitan el mejoramiento continuo de los procesos, para alcanzar los objetivos establecidos.','7',NULL,NULL,NULL,NULL,NULL,NULL),
(4,NULL,NULL,NULL,'Comunicación: Mide la habilidad para recibir, comprender y transmitir en forma oral y escrita ideas e información de manera que facilite la rápida comprensión, logrando una actitud positiva en cualquier situación de trabajo.','6',NULL,NULL,NULL,NULL,NULL,NULL),
(5,NULL,NULL,NULL,'Adaptación a las normas de la organización: Mide el grado en que el empleado cumple con las políticas, normas y procedimientos establecidos por el organismo en cuanto a: apariencia personal, puntualidad, asistencia y otras normativas.','5',NULL,NULL,NULL,NULL,NULL,NULL),
(6,NULL,NULL,NULL,'Gestión de procesos: Mide la capacidad que posee el empleado para planificar y dar seguimiento de las actividades emprendidas, enfatizando la consecución de los resultados con una adecuada administración de los recursos','6',NULL,NULL,NULL,NULL,NULL,NULL),
(7,NULL,NULL,NULL,'Capacidad de análisis y síntesis: Mide la habilidad para identificar y jerarquizar los elementos, relaciones y principios que integran un sistema, situación o problema, formulando soluciones concretas y relevantes.','7',NULL,NULL,NULL,NULL,NULL,NULL),
(8,NULL,NULL,NULL,'Trabajo en equipo: Mide la disposición a la unificación de esfuerzos con el resto de los empleados del área, en la consecución de las actividades y objetivos comunes','6',NULL,NULL,NULL,NULL,NULL,NULL),
(9,NULL,NULL,NULL,'Calidad de trabajo: Realiza las tareas asignadas con exigencia, claridad y cuidado, a fin de evitar errores.','15',NULL,NULL,NULL,NULL,NULL,NULL),
(10,NULL,NULL,NULL,'Calidad de trabajo: Volumen de trabajo capaz de ser realizado por el trabajador en su jornada normal de acuerdo a las exigencias del puesto de trabajo.','15',NULL,NULL,NULL,NULL,NULL,NULL),
(11,NULL,NULL,NULL,'Adecuacón de las normas de la Institución: Mide el grado en el que el trabajdor cumple las políticas, normas y procedimientos establecidos por la Institución en cuanto a: apariencia personal, puntualidad, asistencias, limpieza y orden en el lugar de trabajo, entre otras.','10',NULL,NULL,NULL,NULL,NULL,NULL),
(12,NULL,NULL,NULL,'Interes por el trabajo: Esmero y dedicación en la ejecución de las tareas asignadas.',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(13,NULL,NULL,NULL,'Cooperación: Capacidad para trabajar con otros y colaborar en forma armoniosa con sus compañeros y supervisores, sin descuidar el cumplimiento de sus deberes.',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(14,NULL,NULL,NULL,'Manejo de bienes y equipos: Cuidado en el manejo y manenimieno de los equipos, herramientas y maquinas de que le son asignadas al trabajador para realizar el trabajo.',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(15,NULL,NULL,NULL,'Cortesía: Habilidad para tratar con respeto y cordialidad a compañeros y público en general.',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(16,NULL,NULL,NULL,'Discreción: Habilidad para manejar con prudencia, ecuanimidad y precaución la información y los trabajos que le son encomendados.',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(17,NULL,NULL,NULL,'Compromiso con valores organizacionales:mide el grado de identificacion y responsabilidad con los valores y cultura de la institucion. Atiende más a los intereses organizacionales que a los personales',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `competencias_niveles` */

DROP TABLE IF EXISTS `competencias_niveles`;

CREATE TABLE `competencias_niveles` (
  `id_competencia` int(11) NOT NULL,
  `id_proc` int(11) NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id_competencia`,`id_proc`,`id_nivel`),
  KEY `id_n` (`id_nivel`),
  KEY `id_proces` (`id_proc`),
  CONSTRAINT `id_compe` FOREIGN KEY (`id_competencia`) REFERENCES `competencias` (`id_competencia`),
  CONSTRAINT `id_n` FOREIGN KEY (`id_nivel`) REFERENCES `niveles` (`id_estatus`),
  CONSTRAINT `id_proces` FOREIGN KEY (`id_proc`) REFERENCES `procesos` (`id_proc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `competencias_niveles` */

/*Table structure for table `estadisticas` */

DROP TABLE IF EXISTS `estadisticas`;

CREATE TABLE `estadisticas` (
  `id_estadistica` int(11) NOT NULL AUTO_INCREMENT,
  `x` int(11) NOT NULL,
  `y` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_estadistica`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `estadisticas` */

insert  into `estadisticas`(`id_estadistica`,`x`,`y`) values 
(1,3,4),
(2,4,4),
(3,2,4);

/*Table structure for table `estatus` */

DROP TABLE IF EXISTS `estatus`;

CREATE TABLE `estatus` (
  `id_estatus` int(11) NOT NULL AUTO_INCREMENT,
  `nom_estatus` varchar(45) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id_estatus`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `estatus` */

insert  into `estatus`(`id_estatus`,`nom_estatus`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`) values 
(1,'Habilitado',NULL,NULL,0,NULL),
(2,'Deshabilitado',NULL,NULL,NULL,NULL),
(3,'Activo',NULL,NULL,NULL,NULL),
(4,'Inactivo',NULL,NULL,NULL,NULL);

/*Table structure for table `evaluacion_resultado` */

DROP TABLE IF EXISTS `evaluacion_resultado`;

CREATE TABLE `evaluacion_resultado` (
  `id_evaluacion` int(11) NOT NULL,
  `id_proc` int(11) DEFAULT NULL,
  `id_odi` int(11) DEFAULT NULL,
  `id_competencias` int(11) DEFAULT NULL,
  `id_evaluador` int(11) DEFAULT NULL,
  `val_peso` varchar(11) DEFAULT NULL,
  `val_rango` varchar(11) DEFAULT NULL,
  `val_resultado` varchar(11) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  KEY `id_e` (`id_evaluacion`),
  KEY `id_pr` (`id_proc`),
  KEY `id_odi` (`id_odi`),
  KEY `id_c` (`id_competencias`),
  CONSTRAINT `id_c` FOREIGN KEY (`id_competencias`) REFERENCES `competencias` (`id_competencia`),
  CONSTRAINT `id_e` FOREIGN KEY (`id_evaluacion`) REFERENCES `evaluaciones` (`id_evaluacion`),
  CONSTRAINT `id_odi` FOREIGN KEY (`id_odi`) REFERENCES `odis` (`id_odi`),
  CONSTRAINT `id_pr` FOREIGN KEY (`id_proc`) REFERENCES `procesos` (`id_proc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `evaluacion_resultado` */

/*Table structure for table `evaluaciones` */

DROP TABLE IF EXISTS `evaluaciones`;

CREATE TABLE `evaluaciones` (
  `id_evaluacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) NOT NULL,
  `id_ubicacion` int(11) NOT NULL,
  `id_estatus` int(11) DEFAULT NULL,
  `id_proc` int(11) DEFAULT NULL,
  `objetivos` varchar(2000) NOT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  `revisado_por` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_evaluacion`,`id_persona`,`id_ubicacion`),
  KEY `fk_id_personas` (`id_persona`),
  KEY `id_proc` (`id_proc`),
  KEY `id_ubic` (`id_ubicacion`),
  CONSTRAINT `id_pe` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`),
  CONSTRAINT `id_proc` FOREIGN KEY (`id_proc`) REFERENCES `procesos` (`id_proc`),
  CONSTRAINT `id_ubic` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicaciones` (`id_ubicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `evaluaciones` */

/*Table structure for table `evaluadores` */

DROP TABLE IF EXISTS `evaluadores`;

CREATE TABLE `evaluadores` (
  `id_evaluador` int(11) NOT NULL,
  `id_cargo` int(11) DEFAULT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `id_ubicacion` int(11) DEFAULT NULL,
  `id_evaluacion` int(11) DEFAULT NULL,
  `id_proc` int(11) DEFAULT NULL,
  `fec_asignacion` datetime DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actulizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id_evaluador`),
  KEY `id_cargos` (`id_cargo`),
  KEY `id_per` (`id_persona`),
  KEY `fk_id_ubicacion` (`id_ubicacion`),
  KEY `id_proce` (`id_proc`),
  KEY `id_valua` (`id_evaluacion`),
  CONSTRAINT `fk_id_ubicacion` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicaciones` (`id_ubicacion`),
  CONSTRAINT `id_cargos` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargo`),
  CONSTRAINT `id_proce` FOREIGN KEY (`id_proc`) REFERENCES `procesos` (`id_proc`),
  CONSTRAINT `id_valua` FOREIGN KEY (`id_evaluacion`) REFERENCES `evaluaciones` (`id_evaluacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `evaluadores` */

insert  into `evaluadores`(`id_evaluador`,`id_cargo`,`id_persona`,`id_ubicacion`,`id_evaluacion`,`id_proc`,`fec_asignacion`,`creado_por`,`fec_creado`,`actulizado_por`,`fec_actualizado`) values 
(0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id menu` int(11) NOT NULL,
  `id_menu_padre` int(11) NOT NULL,
  `nom_menu` varchar(45) NOT NULL,
  `orden` int(11) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  `id_estatus` int(11) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id menu`),
  KEY `fk_id_menu_padre` (`id_menu_padre`),
  KEY `fk_if_estatus` (`id_estatus`),
  CONSTRAINT `fk_id_menu_padre` FOREIGN KEY (`id_menu_padre`) REFERENCES `menu` (`id menu`),
  CONSTRAINT `fk_if_estatus` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `menu` */

insert  into `menu`(`id menu`,`id_menu_padre`,`nom_menu`,`orden`,`url`,`id_estatus`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`) values 
(0,0,'menu',0,'rrhh/menu.php',1,NULL,NULL,NULL,NULL),
(1,0,'menu_1',1,'rrhh/menu_1.php',1,NULL,NULL,NULL,NULL),
(2,0,'usuarios',2,'rrhh/usuarios/index.php',1,NULL,NULL,NULL,NULL),
(3,0,'procesos',3,'rrhh/procesos/index.php',1,NULL,NULL,NULL,NULL),
(4,0,'personal',4,'rrhh/personal/index.php',1,NULL,NULL,NULL,NULL),
(5,0,'evaluaciones',5,'rrhh/evaluaciones/index.php',1,NULL,NULL,NULL,NULL),
(6,5,'administrativo',6,'rrhh/evaluaciones/evaluacion_admin.php',1,NULL,NULL,NULL,NULL),
(7,5,'profecional',7,'rrhh/evaluaciones/evaluacion_pro_tec.php',1,NULL,NULL,NULL,NULL),
(8,5,'obrero',8,'rrhh/evaluaciones/evaluacion_obrero.php',1,NULL,NULL,NULL,NULL),
(9,0,'estadisticas',9,'rrhh/estadisticas/index.php',1,NULL,NULL,NULL,NULL),
(10,0,'menu',10,'rrhh/menu.php',1,NULL,NULL,NULL,NULL);

/*Table structure for table `menu_rol` */

DROP TABLE IF EXISTS `menu_rol`;

CREATE TABLE `menu_rol` (
  `id_menu` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_estatus` int(11) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id_menu`),
  KEY `id_rol_idx` (`id_rol`),
  KEY `id_estatus_idx` (`id_estatus`),
  CONSTRAINT `id_estatus` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id menu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_rol` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `menu_rol` */

insert  into `menu_rol`(`id_menu`,`id_rol`,`id_estatus`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`) values 
(0,1,1,NULL,NULL,NULL,NULL),
(1,3,1,NULL,NULL,NULL,NULL),
(3,5,1,NULL,NULL,NULL,NULL),
(4,2,1,NULL,NULL,NULL,NULL),
(5,2,1,NULL,NULL,NULL,NULL),
(9,5,1,NULL,NULL,NULL,NULL);

/*Table structure for table `niveles` */

DROP TABLE IF EXISTS `niveles`;

CREATE TABLE `niveles` (
  `id_estatus` int(11) NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `id_proc` int(11) NOT NULL,
  `descripcion` varchar(11) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id_estatus`,`id_nivel`,`id_proc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `niveles` */

insert  into `niveles`(`id_estatus`,`id_nivel`,`id_proc`,`descripcion`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`) values 
(1,0,0,'Nivel Tecni',NULL,NULL,NULL,NULL),
(1,1,0,'Nivel Admin',NULL,NULL,NULL,NULL),
(1,3,0,'Personal ob',NULL,NULL,NULL,NULL);

/*Table structure for table `odis` */

DROP TABLE IF EXISTS `odis`;

CREATE TABLE `odis` (
  `id_odi` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` int(11) NOT NULL,
  `orden` int(3) DEFAULT NULL,
  `val_peso` decimal(3,0) DEFAULT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id_odi`),
  KEY `id_persona` (`id_persona`),
  CONSTRAINT `id_persona` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `odis` */

/*Table structure for table `personas` */

DROP TABLE IF EXISTS `personas`;

CREATE TABLE `personas` (
  `id_proc` int(11) DEFAULT NULL,
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `pri_nom` varchar(45) NOT NULL,
  `seg_nom` varchar(45) DEFAULT NULL,
  `pri_ape` varchar(45) NOT NULL,
  `seg_ape` varchar(45) DEFAULT NULL,
  `tip_documento` varchar(45) DEFAULT NULL,
  `num_documento` varchar(45) NOT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `edo_civil` varchar(45) DEFAULT NULL,
  `fec_nacimiento` date DEFAULT NULL,
  `id_estatus` int(11) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `fec_ingreso` date DEFAULT NULL,
  `nivel` varchar(11) DEFAULT NULL,
  `id_ubicacion` int(11) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  `id_cargo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_persona`),
  KEY `fk_id_estatu` (`id_estatus`),
  KEY `id_ubicacion` (`id_ubicacion`),
  KEY `id_cargo` (`id_cargo`),
  CONSTRAINT `fk_id_estatu` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`),
  CONSTRAINT `id_cargo` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargo`),
  CONSTRAINT `id_ubicacion` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicaciones` (`id_ubicacion`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

/*Data for the table `personas` */

insert  into `personas`(`id_proc`,`id_persona`,`pri_nom`,`seg_nom`,`pri_ape`,`seg_ape`,`tip_documento`,`num_documento`,`sexo`,`edo_civil`,`fec_nacimiento`,`id_estatus`,`correo`,`fec_ingreso`,`nivel`,`id_ubicacion`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`,`id_cargo`) values 
(NULL,1,'carlos','eduardo','angulo','astudillo','cedula','25053060','masculino','soltero','1984-05-15',1,NULL,NULL,'1',1,NULL,NULL,NULL,NULL,1),
(NULL,2,'josselline','alexandra','padilla','fernandez','cedula','25561949','femenino','soltero','1989-06-18',1,NULL,NULL,'2',2,NULL,NULL,NULL,NULL,2),
(NULL,3,'gitsell','maria','ugueto','romero','cedula','24333157','femenino','soltero','1990-06-06',1,NULL,NULL,'3',1,NULL,NULL,NULL,NULL,3),
(NULL,4,'michelle','gisselle','colmenares','rivera','cedula','25899906','femenino','casado','1996-04-10',1,NULL,NULL,NULL,3,NULL,NULL,NULL,NULL,4),
(NULL,5,'oscar','alberto','morales','castillo','cedula','22341555','masculino','casado','1988-07-07',2,NULL,NULL,NULL,2,NULL,NULL,NULL,NULL,2),
(NULL,6,'gabriel','enrique','briceño','perez','cedula','19270900','masculino','casado','1989-06-07',1,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,2),
(NULL,7,'marcel','antonio','romero','zambrano','cedula','10234569','masculino','soltero','1970-02-03',1,NULL,NULL,NULL,2,NULL,NULL,NULL,NULL,2),
(NULL,8,'miriam','alicia','romero','guerra','cedula','6467675','femenino','soltera','1960-04-03',1,NULL,NULL,NULL,2,NULL,NULL,NULL,NULL,2),
(NULL,9,'nancy',NULL,'padilla',NULL,'','24235345','femenino',NULL,'0000-00-00',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,10,'nancy',NULL,'padilla',NULL,'','24235345','femenino',NULL,'0000-00-00',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,11,'nancy',NULL,'padilla',NULL,'','24235345','femenino',NULL,'1984-01-01',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,12,'nancy',NULL,'padilla',NULL,NULL,'24235345','femenino',NULL,'1984-01-01',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,13,'nancy',NULL,'padilla',NULL,NULL,'24235345','femenino',NULL,'1984-01-01',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,14,'carlos',NULL,'angulo',NULL,NULL,'2505360','masculino',NULL,'1984-01-02',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,15,'josselline',NULL,'romero',NULL,NULL,'112543','femenino',NULL,'1984-01-03',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,16,'eduardo',NULL,'ugueto',NULL,NULL,'2543522','masculino',NULL,'1984-01-04',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,17,'mirian',NULL,'carillo',NULL,NULL,'988777','femenino',NULL,'1984-01-05',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,18,'alicia',NULL,'morales',NULL,NULL,'554656','femenino',NULL,'1984-01-06',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,2),
(NULL,19,'maria',NULL,'astudillo',NULL,NULL,'255677','femenino',NULL,'1984-01-07',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,2),
(NULL,20,'nancy',NULL,'angulo',NULL,NULL,'2505360','femenino',NULL,'1984-01-08',1,'fldkjfdjikvs@gmail.com',NULL,NULL,2,NULL,NULL,NULL,NULL,2),
(NULL,21,'nancy',NULL,'padilla',NULL,NULL,'24235345','femenino',NULL,'1984-01-01',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,22,'carlos',NULL,'angulo',NULL,NULL,'2505360','masculino',NULL,'1984-01-02',2,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,23,'josselline',NULL,'romero',NULL,NULL,'112543','femenino',NULL,'1984-01-03',2,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,24,'eduardo',NULL,'ugueto',NULL,NULL,'2543522','masculino',NULL,'1984-01-04',2,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,25,'mirian',NULL,'carillo',NULL,NULL,'988777','femenino',NULL,'1984-01-05',2,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,26,'alicia',NULL,'morales',NULL,NULL,'554656','femenino',NULL,'1984-01-06',2,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,2),
(NULL,27,'maria',NULL,'astudillo',NULL,NULL,'255677','femenino',NULL,'1984-01-07',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,2),
(NULL,28,'nancy',NULL,'angulo',NULL,NULL,'2505360','femenino',NULL,'1984-01-08',1,'fldkjfdjikvs@gmail.com',NULL,NULL,2,NULL,NULL,NULL,NULL,2),
(NULL,29,'nancy',NULL,'padilla',NULL,NULL,'24235345','femenino',NULL,'1984-01-01',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,30,'carlos',NULL,'angulo',NULL,NULL,'2505360','masculino',NULL,'1984-01-02',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,31,'josselline',NULL,'romero',NULL,NULL,'112543','femenino',NULL,'1984-01-03',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,32,'eduardo',NULL,'ugueto',NULL,NULL,'2543522','masculino',NULL,'1984-01-04',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,33,'mirian',NULL,'carillo',NULL,NULL,'988777','femenino',NULL,'1984-01-05',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,34,'alicia',NULL,'morales',NULL,NULL,'554656','femenino',NULL,'1984-01-06',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,2),
(NULL,35,'maria',NULL,'astudillo',NULL,NULL,'255677','femenino',NULL,'1984-01-07',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,2),
(NULL,36,'nancy',NULL,'angulo',NULL,NULL,'2505360','femenino',NULL,'1984-01-08',1,'fldkjfdjikvs@gmail.com',NULL,NULL,2,NULL,NULL,NULL,NULL,2),
(NULL,37,'nancy',NULL,'padilla',NULL,NULL,'24235345','femenino',NULL,'1984-01-01',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,38,'carlos',NULL,'angulo',NULL,NULL,'2505360','masculino',NULL,'1984-01-02',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,39,'josselline',NULL,'romero',NULL,NULL,'112543','femenino',NULL,'1984-01-03',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,40,'eduardo',NULL,'ugueto',NULL,NULL,'2543522','masculino',NULL,'1984-01-04',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,41,'mirian',NULL,'carillo',NULL,NULL,'988777','femenino',NULL,'1984-01-05',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,42,'alicia',NULL,'morales',NULL,NULL,'554656','femenino',NULL,'1984-01-06',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,2),
(NULL,43,'maria',NULL,'astudillo',NULL,NULL,'255677','femenino',NULL,'1984-01-07',1,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,2),
(NULL,44,'nancy',NULL,'angulo',NULL,NULL,'2505360','femenino',NULL,'1984-01-08',1,'fldkjfdjikvs@gmail.com',NULL,NULL,2,NULL,NULL,NULL,NULL,2),
(NULL,45,'nancy',NULL,'padilla',NULL,NULL,'24235345','femenino',NULL,'0000-00-00',1,'fldkjfdjikvs@gmail.com','0000-00-00',NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,46,'carlos',NULL,'angulo',NULL,NULL,'2505360','masculino',NULL,'0000-00-00',1,'fldkjfdjikvs@gmail.com','0000-00-00',NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,47,'josselline',NULL,'romero',NULL,NULL,'112543','femenino',NULL,'0000-00-00',1,'fldkjfdjikvs@gmail.com','0000-00-00',NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,48,'eduardo',NULL,'ugueto',NULL,NULL,'2543522','masculino',NULL,'0000-00-00',1,'fldkjfdjikvs@gmail.com','0000-00-00',NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,49,'mirian',NULL,'carillo',NULL,NULL,'988777','femenino',NULL,'0000-00-00',1,'fldkjfdjikvs@gmail.com','0000-00-00',NULL,1,NULL,NULL,NULL,NULL,1),
(NULL,50,'alicia',NULL,'morales',NULL,NULL,'554656','femenino',NULL,'0000-00-00',1,'fldkjfdjikvs@gmail.com','0000-00-00',NULL,1,NULL,NULL,NULL,NULL,2),
(NULL,51,'maria',NULL,'astudillo',NULL,NULL,'255677','femenino',NULL,'0000-00-00',1,'fldkjfdjikvs@gmail.com','0000-00-00',NULL,1,NULL,NULL,NULL,NULL,2),
(NULL,52,'nancy',NULL,'angulo',NULL,NULL,'2505360','femenino',NULL,'0000-00-00',1,'fldkjfdjikvs@gmail.com','0000-00-00',NULL,2,NULL,NULL,NULL,NULL,2),
(NULL,53,'eduardo',NULL,'ugueto',NULL,NULL,'2543522','masculino',NULL,'1984-01-04',2,'fldkjfdjikvs@gmail.com',NULL,NULL,1,NULL,NULL,NULL,NULL,1);

/*Table structure for table `procesos` */

DROP TABLE IF EXISTS `procesos`;

CREATE TABLE `procesos` (
  `id_proc` int(20) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(2000) DEFAULT NULL,
  `fec_apertura_evaluacion` date DEFAULT NULL,
  `fec_cierre_evaluacion` date DEFAULT NULL,
  `id_estatus_proc` int(11) DEFAULT NULL,
  `fec_apertura_odi` date DEFAULT NULL,
  `fec_cierre_odi` date DEFAULT NULL,
  `peso_odi` varchar(10) DEFAULT NULL,
  `rango_max_odi` varchar(10) DEFAULT NULL,
  `fec_apertura_competencia` date DEFAULT NULL,
  `fec_cierre_competencia` date DEFAULT NULL,
  `peso_competencia` varchar(10) DEFAULT NULL,
  `rango_max_competencia` varchar(10) DEFAULT NULL,
  `max_odis_permitidos` varchar(10) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` date DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` date DEFAULT NULL,
  PRIMARY KEY (`id_proc`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

/*Data for the table `procesos` */

insert  into `procesos`(`id_proc`,`descripcion`,`fec_apertura_evaluacion`,`fec_cierre_evaluacion`,`id_estatus_proc`,`fec_apertura_odi`,`fec_cierre_odi`,`peso_odi`,`rango_max_odi`,`fec_apertura_competencia`,`fec_cierre_competencia`,`peso_competencia`,`rango_max_competencia`,`max_odis_permitidos`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`) values 
(1,'competencia','2017-06-11','2017-10-19',4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(2,'competencia','2017-06-11','2017-06-11',4,'2017-06-11','2017-06-16','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(3,'competencia','2017-06-11','2017-06-11',4,'2017-06-11','2017-06-16','1',NULL,'2017-06-11','2017-06-11','1',NULL,NULL,NULL,NULL,NULL,NULL),
(4,'sadfsadfsdfsd','2017-06-13','2017-06-13',4,'2017-06-13','2017-06-13','1',NULL,'2017-06-13','2017-06-13','1',NULL,NULL,NULL,NULL,NULL,NULL),
(5,'gggggggggggggg','2017-06-11','2017-06-11',4,'2017-06-11','2017-06-11','1',NULL,'2017-06-11','2017-06-11','1',NULL,NULL,NULL,NULL,NULL,NULL),
(6,'competencia','2017-06-11','2017-06-11',4,'2017-06-11','2017-06-13','1',NULL,'2017-06-11','2017-06-11','1',NULL,NULL,NULL,NULL,NULL,NULL),
(7,'competencia','2017-06-13','2017-06-13',3,'2017-06-13','2017-06-13','1',NULL,'2017-06-13','2017-06-13','1',NULL,NULL,NULL,NULL,NULL,NULL),
(8,'competencia','2017-06-11','2017-06-11',3,'2017-06-11','2017-06-11','5',NULL,'2017-06-11','2017-06-11','5',NULL,NULL,NULL,NULL,NULL,NULL),
(9,'competencia','2017-06-13','2017-06-13',3,'2017-06-13','2017-06-13','1',NULL,'2017-06-13','2017-06-13','1',NULL,NULL,NULL,NULL,NULL,NULL),
(10,'competencia','2017-06-13','2017-06-13',3,'2017-06-13','2017-06-13','2',NULL,'2017-06-13','2017-06-13','2',NULL,NULL,NULL,NULL,NULL,NULL),
(11,'competencia','2017-06-13','2017-06-13',3,'2017-06-13','2017-06-13','2','2','2017-06-13','2017-06-13','2',NULL,NULL,NULL,NULL,NULL,NULL),
(12,'competencia','2017-06-13','2017-06-13',3,'2017-06-13','2017-06-13','2','2','2017-06-13','2017-06-13','2',NULL,NULL,NULL,NULL,NULL,NULL),
(13,'competencia','2017-06-13','2017-06-13',3,'2017-06-13','2017-06-13','2','2','2017-06-13','2017-06-13','2',NULL,NULL,NULL,NULL,NULL,NULL),
(14,'competencia','2017-06-21','2017-06-21',3,'2017-06-21','2017-06-21','2','2','2017-06-21','2017-06-21','2','2',NULL,NULL,NULL,NULL,NULL),
(15,'competencia','2017-06-23','2017-06-23',3,'2017-06-23','2017-06-23','5','5','2017-06-23','2017-06-23','5','5',NULL,NULL,NULL,NULL,NULL),
(16,'competencia','2017-06-23','2017-06-23',3,'2017-06-23','2017-06-23','5','5','2017-06-23','2017-06-23','5','5',NULL,NULL,NULL,NULL,NULL),
(17,'competencia','2017-06-23','2017-06-23',3,'2017-06-23','2017-06-23','5','5','2017-06-23','2017-06-23','5','5',NULL,NULL,NULL,NULL,NULL),
(18,'competencia','2017-06-23','2017-06-23',3,'2017-06-23','2017-06-23','4','4','2017-06-23','2017-06-23','4','4',NULL,NULL,NULL,NULL,NULL),
(19,'zxzgggggggg','2017-12-31','2015-01-31',3,'2017-12-31','2017-12-31','1','1','2017-12-31','2017-12-31','2','2',NULL,NULL,NULL,NULL,NULL),
(20,'competencia','2017-06-16','2017-06-16',3,'2017-06-16','2017-06-16','2','3','2017-06-16','2017-06-16','2','3',NULL,NULL,NULL,NULL,NULL),
(21,'fggregrgrdgrgrgf','2017-06-16','2017-06-16',3,'2017-06-16','2017-06-16','5','6','2017-06-16','2017-06-16','5','5',NULL,NULL,NULL,NULL,NULL),
(22,'fgrhgreytrgrdgrd','2017-06-14','2017-06-14',3,'2017-06-14','2017-06-14','50','3','2017-06-14','2017-06-14','50','2',NULL,NULL,NULL,NULL,NULL),
(23,'competencia','2017-06-25','2017-06-25',3,'2017-06-25','2017-06-25','50','4','2017-06-25','2017-06-25','50','3',NULL,NULL,NULL,NULL,NULL),
(24,'competencia','2017-06-23','2017-06-21',3,'2017-06-11','2017-06-21','2','2','2017-06-11','2017-06-21','2','2',NULL,NULL,NULL,NULL,NULL),
(25,'saadefrfrfrfacdxcdv','2017-06-11','2017-06-11',3,'2017-06-11','2017-06-11','2','2','2017-06-11','2017-06-11','2','2',NULL,NULL,NULL,NULL,NULL),
(27,'fgrhgreytrgrdgrd','2017-06-22','2017-06-22',3,'2017-06-22','2017-06-22','5','5','2017-06-22','2017-06-22','5','5',NULL,NULL,NULL,NULL,NULL),
(28,'jfigjkjfckifjfuisvjlkd','2017-07-13','2017-07-13',3,'2017-07-13','2017-07-13','5','5','2017-07-13','2017-07-13','5','5',NULL,NULL,NULL,NULL,NULL),
(29,'11111111111111111','2017-06-16','2017-06-23',3,'2017-06-16','0000-00-00','2','4','2017-06-21','2017-06-16','50','4',NULL,NULL,NULL,NULL,NULL),
(30,'ewrfwerwerwrw','2017-06-22','2017-06-16',3,'2017-06-22','2017-06-16','50','3','2017-06-22','2017-06-23','3','3',NULL,NULL,NULL,NULL,NULL),
(31,'competencia','2017-08-25','2017-08-25',3,'2017-08-25','2017-08-25','1','1','2017-08-25','2017-08-25','1','1',NULL,NULL,NULL,NULL,NULL),
(32,'competencia','2017-08-25','2017-08-25',3,'2017-08-25','2017-08-25','1','1','2017-08-25','2017-08-25','1','1',NULL,NULL,NULL,NULL,NULL),
(33,'competencia','2017-08-25','2017-08-25',3,'2017-08-25','2017-08-25','1','1','2017-08-25','2017-08-25','1','1',NULL,NULL,NULL,NULL,NULL),
(34,'dfsdgfsgtrgtr','2017-08-25','2017-08-25',3,'2017-08-25','2017-08-25','2','2','2017-08-25','2017-08-25','3','3',NULL,NULL,NULL,NULL,NULL),
(35,'cdsjfirehjflka','2017-08-25','2017-08-25',3,'2017-08-25','2017-08-25','1','1','2017-08-25','2017-08-25','1','1',NULL,NULL,NULL,NULL,NULL),
(36,'cdsjfirehjflka','2017-08-25','2017-08-25',3,'2017-08-25','2017-08-25','1','1','2017-08-25','2017-08-25','1','1',NULL,NULL,NULL,NULL,NULL),
(37,'cdsjfirehjflka','2017-08-25','2017-08-25',3,'2017-08-25','2017-08-25','1','1','2017-08-25','2017-08-25','1','1',NULL,NULL,NULL,NULL,NULL),
(38,'cdsjfirehjflka','2017-08-25','2017-08-25',3,'2017-08-25','2017-08-25','1','1','2017-08-25','2017-08-25','1','1',NULL,NULL,NULL,NULL,NULL),
(39,'cdsjfirehjflka','2017-08-25','2017-08-25',3,'2017-08-25','2017-08-25','1','1','2017-08-25','2017-08-25','1','1',NULL,NULL,NULL,NULL,NULL),
(40,'cdsjfirehjflka','2017-08-25','2017-08-25',3,'2017-08-25','2017-08-25','1','1','2017-08-25','2017-08-25','1','1',NULL,NULL,NULL,NULL,NULL),
(41,'cdsjfirehjflka','2017-08-25','2017-08-25',3,'2017-08-25','2017-08-25','1','1','2017-08-25','2017-08-25','1','1',NULL,NULL,NULL,NULL,NULL),
(42,'cddfgrwgfre','2017-08-25','2017-08-25',3,'2017-08-25','2017-08-25','2','2','2017-08-25','2017-08-25','2','2',NULL,NULL,NULL,NULL,NULL),
(43,'cdsjfirehjflka','2017-08-25','2017-08-25',3,'2017-08-25','2017-08-25','2','2','2017-08-25','2017-08-25','3','3',NULL,NULL,NULL,NULL,NULL),
(44,'competencia','2017-08-25','2017-08-25',4,'2017-08-25','2017-08-25','1','1','2017-08-25','2017-08-25','1','1',NULL,NULL,NULL,NULL,NULL),
(45,'competencia','2017-08-25','2017-08-25',4,'2017-08-25','2017-08-25','3','3','2017-08-25','2017-08-25','2','2',NULL,NULL,NULL,NULL,NULL),
(46,'competencia','2017-08-25','2017-08-25',4,'2017-08-25','2017-08-25','3','3','2017-08-25','2017-08-25','2','2',NULL,NULL,NULL,NULL,NULL),
(47,'competencia','2017-08-25','2017-08-25',4,'2017-08-25','2017-08-25','3','3','2017-08-25','2017-08-25','2','2',NULL,NULL,NULL,NULL,NULL),
(70,'competencia','2017-01-25','2017-01-25',4,'2017-01-25','2017-01-25','1','1','2017-01-25','2017-01-25','1','1',NULL,NULL,NULL,NULL,NULL),
(71,'competencia','2017-01-25','2017-01-25',4,'2017-01-25','2017-01-25','1','1','2017-01-25','2017-01-25','1','1',NULL,NULL,NULL,NULL,NULL),
(72,'competencia','2017-01-25','2017-01-25',4,'2017-01-25','2017-01-25','1','1','2017-01-25','2017-01-25','1','1',NULL,NULL,NULL,NULL,NULL),
(73,'competencia','2017-01-25','2017-01-25',3,'2017-01-25','2017-01-25','1','1','2017-01-25','2017-01-25','1','1',NULL,NULL,NULL,NULL,NULL),
(74,'competencia','2017-01-25','2017-01-25',3,'2017-01-25','2017-01-25','1','1','2017-01-25','2017-01-25','1','1',NULL,NULL,NULL,NULL,NULL),
(75,'competencia','2017-08-25','2017-08-25',3,'2017-08-25','2017-08-25','3','3','2017-08-25','2017-08-25','2','2',NULL,NULL,NULL,NULL,NULL),
(76,'gyhjhjkuhyyhuhjy','2017-08-29','2017-08-29',3,'2017-08-29','2017-08-29','2','2','2017-08-29','2017-08-29','3','3',NULL,NULL,NULL,NULL,NULL),
(77,'competencia','2017-08-29','2017-08-29',3,'2017-08-29','2017-08-29','2','2','2017-08-29','2017-08-29','3','3',NULL,NULL,NULL,NULL,NULL),
(78,'cdsjfirehjflka','2017-08-29','2017-08-29',3,'2017-08-29','2017-08-29','2','2','2017-08-29','2017-08-29','2','2',NULL,NULL,NULL,NULL,NULL),
(79,'dfreagterwgtw','2017-08-31','2017-08-31',3,'2017-08-31','2017-08-31','3','4','2017-08-31','2017-08-31','3','3',NULL,NULL,NULL,NULL,NULL),
(80,'cfsdfffwrefwefew','2017-09-03','2017-09-03',3,'2017-09-03','2017-09-03','3','3','2017-09-03','2017-09-03','3','3',NULL,NULL,NULL,NULL,NULL),
(81,'dsfsdgfdgfdg','0000-00-00','0000-00-00',3,'0000-00-00','0000-00-00','45','5','0000-00-00','0000-00-00','50','3',NULL,NULL,NULL,NULL,NULL),
(82,'dsfsdgfdgfdg','0000-00-00','0000-00-00',3,'0000-00-00','0000-00-00','45','5','0000-00-00','0000-00-00','50','3',NULL,NULL,NULL,NULL,NULL),
(83,'gffffffffffffffffffffffffffff','2017-08-25','2017-08-29',3,'2017-06-23','0000-00-00','34','5','2017-06-23','2017-06-22','23','2',NULL,NULL,NULL,NULL,NULL),
(84,'gffffffffffffffffffffffffffff','2017-08-25','2017-08-29',3,'2017-06-23','0000-00-00','34','5','2017-06-23','2017-06-22','23','2',NULL,NULL,NULL,NULL,NULL),
(85,'jdfkmnfjfwejfijewirfwei','0000-00-00','0000-00-00',3,'0000-00-00','0000-00-00','5','5','0000-00-00','0000-00-00','5','5',NULL,NULL,NULL,NULL,NULL),
(86,'123456456qwerwer','0000-00-00','0000-00-00',3,'0000-00-00','0000-00-00','5','5','0000-00-00','0000-00-00','5','5',NULL,NULL,NULL,NULL,NULL),
(87,'123456456qwerwer','0000-00-00','0000-00-00',3,'0000-00-00','0000-00-00','5','5','0000-00-00','0000-00-00','5','5',NULL,NULL,NULL,NULL,NULL),
(88,'123456456qwerwer','0000-00-00','0000-00-00',3,'0000-00-00','0000-00-00','5','5','0000-00-00','0000-00-00','5','5',NULL,NULL,NULL,NULL,NULL),
(89,'123456456qwerwer','0000-00-00','0000-00-00',3,'0000-00-00','0000-00-00','5','5','0000-00-00','0000-00-00','5','5',NULL,NULL,NULL,NULL,NULL),
(90,'dsfsdgfdgfdgfgdgfg','2017-08-29','2017-08-25',3,'2017-08-25','2017-08-25','1','5','2017-08-29','2017-08-29','33','5',NULL,NULL,NULL,NULL,NULL),
(91,'competencia','2017-08-26','2017-08-26',3,'2017-08-26','2017-08-26','3','3','2017-08-26','2017-08-26','5','5',NULL,NULL,NULL,NULL,NULL),
(92,'prueba de funcionarios','2017-10-14','2017-10-14',3,'2017-10-14','2017-10-14','2','5','2017-10-14','2017-10-14','4','4',NULL,NULL,NULL,NULL,NULL),
(93,'Test_documento','2017-08-25','2017-08-25',3,'2017-08-25','2017-08-25','1','1','2017-08-25','2017-08-29','1','1',NULL,NULL,NULL,NULL,NULL),
(94,'dia1gfgfdsfsfsdfsd','0000-00-00','0000-00-00',4,'2017-10-14','2017-08-25','1','4','2017-10-14','2017-10-14','2','1',NULL,NULL,NULL,NULL,NULL),
(95,'testrdgdgfdfdg','2017-08-25','2017-08-25',3,'2017-10-14','2017-08-25','2','3','2017-08-25','2017-08-25','2','3',NULL,NULL,NULL,NULL,NULL),
(96,'1234567890\'','2017-10-25','2017-10-25',4,'2017-10-25','2017-10-25','4','4','2017-10-25','2017-10-25','4','4',NULL,NULL,NULL,NULL,NULL),
(97,'competeciabgf','2017-10-27','2017-10-28',3,'2017-10-27','2017-10-27','8','5','2017-10-27','2017-10-27','5','5',NULL,NULL,NULL,NULL,NULL),
(98,'competeciabgf','2017-10-27','2017-10-28',3,'2017-10-27','2017-10-27','8','5','2017-10-27','2017-10-27','5','5',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `rangos` */

DROP TABLE IF EXISTS `rangos`;

CREATE TABLE `rangos` (
  `nom_rango` varchar(30) DEFAULT NULL,
  `val_rango` int(11) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rangos` */

insert  into `rangos`(`nom_rango`,`val_rango`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`) values 
('Excepcional',NULL,NULL,NULL,NULL,NULL),
('Sobre lo esperado',NULL,NULL,NULL,NULL,NULL),
('Dentro de lo esperado',NULL,NULL,NULL,NULL,NULL),
('Por debajo de lo esperado',NULL,NULL,NULL,NULL,NULL),
('Muy por debajo de lo esperado',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `responsables_ubicacion` */

DROP TABLE IF EXISTS `responsables_ubicacion`;

CREATE TABLE `responsables_ubicacion` (
  `id_proc` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_ubicacion` int(11) NOT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id_proc`,`id_persona`,`id_ubicacion`),
  KEY `id_p` (`id_persona`),
  KEY `id_ubica` (`id_ubicacion`),
  CONSTRAINT `id_p` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`),
  CONSTRAINT `id_procesos` FOREIGN KEY (`id_proc`) REFERENCES `procesos` (`id_proc`),
  CONSTRAINT `id_ubica` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicaciones` (`id_ubicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `responsables_ubicacion` */

insert  into `responsables_ubicacion`(`id_proc`,`id_persona`,`id_ubicacion`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`) values 
(2,1,1,NULL,NULL,NULL,NULL),
(2,2,2,NULL,NULL,NULL,NULL),
(2,3,1,NULL,NULL,NULL,NULL);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nom_rol` varchar(45) NOT NULL,
  `id_estatus` int(11) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id_rol`),
  KEY `id_esta` (`id_estatus`),
  CONSTRAINT `id_esta` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `roles` */

insert  into `roles`(`id_rol`,`nom_rol`,`id_estatus`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`) values 
(1,'Administrador',1,NULL,NULL,NULL,NULL),
(2,'Evaluador',1,NULL,NULL,NULL,NULL),
(3,'Evaluado',1,NULL,NULL,NULL,NULL),
(4,'Contralor',1,NULL,NULL,NULL,NULL),
(5,'RRHH',1,NULL,NULL,NULL,NULL);

/*Table structure for table `ubicaciones` */

DROP TABLE IF EXISTS `ubicaciones`;

CREATE TABLE `ubicaciones` (
  `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ubicacion` varchar(100) NOT NULL,
  `id_personas` int(11) DEFAULT NULL,
  `id_estatus` int(11) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id_ubicacion`),
  KEY `id_personas` (`id_personas`),
  KEY `id_estatu` (`id_estatus`),
  CONSTRAINT `id_estatu` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`),
  CONSTRAINT `id_personas` FOREIGN KEY (`id_personas`) REFERENCES `personas` (`id_persona`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `ubicaciones` */

insert  into `ubicaciones`(`id_ubicacion`,`nom_ubicacion`,`id_personas`,`id_estatus`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`) values 
(1,'Dirección de Consultoría Jurídica',1,1,NULL,NULL,NULL,NULL),
(2,'Dirección de Administración',2,1,NULL,NULL,NULL,NULL),
(3,'Dirección de Recursos Humanos',3,1,NULL,NULL,NULL,NULL),
(4,'Dirección de Planificación y Control de Gestión',4,1,NULL,NULL,NULL,NULL),
(5,'Dirección de Tecnología de la Información',5,1,NULL,NULL,NULL,NULL),
(6,'Dirección de Control de la Administración Centralizada',6,1,NULL,NULL,NULL,NULL),
(7,'Dirección de Control de la Administración Descentralizada',7,1,NULL,NULL,NULL,NULL),
(8,'Dirección de Determinación de Responsabilidades',8,1,NULL,NULL,NULL,NULL);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) NOT NULL,
  `nom_usuario` varchar(45) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `id_estatus` varchar(10) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_persona_idx` (`id_persona`),
  KEY `id_roles` (`id_rol`),
  CONSTRAINT `id_roles` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id_usuario`,`id_persona`,`nom_usuario`,`clave`,`id_estatus`,`id_rol`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`) values 
(1,3,'gitsell','8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92','1',1,NULL,NULL,NULL,NULL),
(2,1,'carlos','8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92','1',2,NULL,NULL,NULL,NULL),
(3,2,'josselline','8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92','1',3,NULL,NULL,NULL,NULL),
(4,4,'adm1','8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92','1',4,NULL,NULL,NULL,NULL),
(5,5,'adm2','8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92','1',5,NULL,NULL,NULL,NULL),
(6,6,'Briceño','8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92','2',3,0,'2017-10-09 14:00:00',0,'2017-10-26 00:00:00'),
(7,7,'who','8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92','2',2,NULL,NULL,NULL,NULL);

/*Table structure for table `usuarios_roles` */

DROP TABLE IF EXISTS `usuarios_roles`;

CREATE TABLE `usuarios_roles` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) NOT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  `id_estatus` int(11) NOT NULL,
  PRIMARY KEY (`id_persona`,`id_rol`),
  KEY `id_rol_idx` (`id_rol`),
  KEY `fk_estatus` (`id_estatus`),
  CONSTRAINT `fk_estatus` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`),
  CONSTRAINT `fk_persona` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`),
  CONSTRAINT `fk_roles` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `usuarios_roles` */

insert  into `usuarios_roles`(`id_persona`,`id_rol`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`,`id_estatus`) values 
(1,3,NULL,NULL,NULL,NULL,1),
(2,2,NULL,NULL,NULL,NULL,1),
(4,4,NULL,NULL,NULL,NULL,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
