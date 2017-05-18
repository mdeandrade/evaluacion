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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cargos` */

/*Table structure for table `competencias` */

DROP TABLE IF EXISTS `competencias`;

CREATE TABLE `competencias` (
  `id_competencia` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) DEFAULT NULL,
  `fec_aplicacion` datetime DEFAULT NULL,
  `calificacion` decimal(10,0) DEFAULT NULL,
  `competencias` varchar(1000) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  `revisado_por` int(11) DEFAULT NULL,
  `val_peso` decimal(10,0) DEFAULT NULL,
  `peso_fijo` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_competencia`),
  KEY `id_person` (`id_persona`),
  CONSTRAINT `id_person` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `competencias` */

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
  PRIMARY KEY (`id_competencia`,`id_proc`,`id_nivel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `competencias_niveles` */

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `estatus` */

insert  into `estatus`(`id_estatus`,`nom_estatus`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`) values 
(1,'activo',NULL,NULL,NULL,NULL),
(2,'inactivo',NULL,NULL,NULL,NULL);

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
  KEY `id_evaluacion` (`id_evaluacion`),
  KEY `id_proc` (`id_proc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `evaluacion_resultado` */

/*Table structure for table `evaluaciones` */

DROP TABLE IF EXISTS `evaluaciones`;

CREATE TABLE `evaluaciones` (
  `id_evaluaciones` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) NOT NULL,
  `id_ubicacion` int(11) NOT NULL,
  `id_proc` int(11) DEFAULT NULL,
  `objetivos` varchar(2000) NOT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  `revisado_por` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_evaluaciones`,`id_persona`,`id_ubicacion`),
  KEY `fk_id_personas` (`id_persona`)
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
  CONSTRAINT `fk_id_ubicacion` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicaciones` (`id_ubicacion`),
  CONSTRAINT `id_cargos` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargo`),
  CONSTRAINT `id_per` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `evaluadores` */

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
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `id_proc` int(11) DEFAULT NULL,
  `pri_nom` varchar(45) NOT NULL,
  `seg_nom` varchar(45) DEFAULT NULL,
  `pri_ape` varchar(45) NOT NULL,
  `seg_ape` varchar(45) DEFAULT NULL,
  `tip_documento` varchar(45) NOT NULL,
  `num_documento` varchar(45) NOT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `edo_civil` varchar(45) DEFAULT NULL,
  `fec_nacimiento` date DEFAULT NULL,
  `id_estatus` int(11) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  `id_ubicacion` int(11) DEFAULT NULL,
  `fec_ingreso` datetime DEFAULT NULL,
  `nivel` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_persona`),
  KEY `fk_id_estatu` (`id_estatus`),
  KEY `id_ubicacion` (`id_ubicacion`),
  CONSTRAINT `fk_id_estatu` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`),
  CONSTRAINT `id_ubicacion` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicaciones` (`id_ubicacion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `personas` */

insert  into `personas`(`id_persona`,`id_proc`,`pri_nom`,`seg_nom`,`pri_ape`,`seg_ape`,`tip_documento`,`num_documento`,`sexo`,`edo_civil`,`fec_nacimiento`,`id_estatus`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`,`id_ubicacion`,`fec_ingreso`,`nivel`) values 
(1,NULL,'carlos','eduardo','angulo','astudillo','cedula','25053060','masculino','soltero','1984-05-15',1,NULL,NULL,NULL,NULL,1,NULL,NULL),
(2,NULL,'josselline','alexandra','padilla','fernandez','cedula','25561949','femenino','soltero','1989-06-18',2,NULL,NULL,NULL,NULL,2,NULL,NULL),
(3,NULL,'gitsell','maria','ugueto','romero','cedula','24333157','femenino','soltero','1990-06-06',1,NULL,NULL,NULL,NULL,1,NULL,NULL);

/*Table structure for table `procesos` */

DROP TABLE IF EXISTS `procesos`;

CREATE TABLE `procesos` (
  `id_proc` int(20) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(2000) DEFAULT NULL,
  `fec_desde` date DEFAULT NULL,
  `fec_hasta` date DEFAULT NULL,
  `peso_odi` varchar(10) DEFAULT NULL,
  `peso_competencia` varchar(10) DEFAULT NULL,
  `id_estatus_proc` int(11) DEFAULT NULL,
  `rangos_max_odi` varchar(6) DEFAULT NULL,
  `rangos_max_competencias` varchar(6) DEFAULT NULL,
  `fec_apertura_odi` date DEFAULT NULL,
  `fec_cierre_odi` date DEFAULT NULL,
  `fec_apertura_evaluacion` date DEFAULT NULL,
  `fec_cierre_evaluacion` date DEFAULT NULL,
  `fec_apertura_competencia` date DEFAULT NULL,
  `fec_cierre_competencia` date DEFAULT NULL,
  `max_odis_permitidos` varchar(10) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id_proc`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `procesos` */

insert  into `procesos`(`id_proc`,`descripcion`,`fec_desde`,`fec_hasta`,`peso_odi`,`peso_competencia`,`id_estatus_proc`,`rangos_max_odi`,`rangos_max_competencias`,`fec_apertura_odi`,`fec_cierre_odi`,`fec_apertura_evaluacion`,`fec_cierre_evaluacion`,`fec_apertura_competencia`,`fec_cierre_competencia`,`max_odis_permitidos`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`) values 
(1,'enero',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `rangos` */

DROP TABLE IF EXISTS `rangos`;

CREATE TABLE `rangos` (
  `val_rango` varchar(11) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rangos` */

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
(1,2,2,NULL,NULL,NULL,NULL);

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
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `roles` */

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `ubicaciones` */

insert  into `ubicaciones`(`id_ubicacion`,`nom_ubicacion`,`id_personas`,`id_estatus`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`) values 
(1,'direccion de tecnologia de la informacion',1,1,NULL,NULL,NULL,NULL),
(2,'administracion',2,1,NULL,NULL,NULL,NULL),
(3,'recursos humanos',3,1,NULL,NULL,NULL,NULL);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_persona` int(11) NOT NULL,
  `nom_usuario` varchar(45) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `id_estatus` varchar(10) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id_persona`),
  KEY `id_persona_idx` (`id_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id_persona`,`nom_usuario`,`clave`,`id_estatus`,`creado_por`,`fec_creado`,`actualizado_por`,`fec_actualizado`) values 
(0,'gitsell','8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92','1',NULL,NULL,NULL,NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `usuarios_roles` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
