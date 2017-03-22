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
CREATE DATABASE /*!32312 IF NOT EXISTS*/`evaluacion` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `evaluacion`;

/*Table structure for table `adm` */

DROP TABLE IF EXISTS `adm`;

CREATE TABLE `adm` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) DEFAULT NULL,
  `id_cargo` int(11) DEFAULT NULL,
  `id_estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `adm` */

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

/*Table structure for table `directores` */

DROP TABLE IF EXISTS `directores`;

CREATE TABLE `directores` (
  `id_directores` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) DEFAULT NULL,
  `id_cargo` int(11) DEFAULT NULL,
  `id_estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_directores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `directores` */

/*Table structure for table `empleados` */

DROP TABLE IF EXISTS `empleados`;

CREATE TABLE `empleados` (
  `id_empleados` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) DEFAULT NULL,
  `id_cargo` int(11) DEFAULT NULL,
  `id_estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_empleados`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `empleados` */

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `estatus` */

/*Table structure for table `grupos` */

DROP TABLE IF EXISTS `grupos`;

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `id_estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `grupos` */

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
  `id_menu` int(11) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `id_estatus` int(11) DEFAULT NULL,
  `creado_por` varchar(45) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` varchar(45) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  KEY `id_men` (`id_menu`),
  KEY `id_rol` (`id_rol`),
  KEY `id_esta` (`id_estatus`),
  CONSTRAINT `id_esta` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`),
  CONSTRAINT `id_men` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id menu`),
  CONSTRAINT `id_rol` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `menu_rol` */

/*Table structure for table `obreros` */

DROP TABLE IF EXISTS `obreros`;

CREATE TABLE `obreros` (
  `id_obreros` int(11) NOT NULL AUTO_INCREMENT,
  `id_personas` int(11) DEFAULT NULL,
  `id_cargo` int(11) DEFAULT NULL,
  `id_estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_obreros`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `obreros` */

/*Table structure for table `personas` */

DROP TABLE IF EXISTS `personas`;

CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `personas` */

/*Table structure for table `personas_cargos` */

DROP TABLE IF EXISTS `personas_cargos`;

CREATE TABLE `personas_cargos` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `id_cargo` int(11) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id_persona`),
  KEY `id_cargo_idx` (`id_cargo`),
  KEY `id_estatus_idx` (`id_estatus`),
  CONSTRAINT `id_cargo` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_estatus` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_persona` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `personas_cargos` */

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

/*Table structure for table `rrhh` */

DROP TABLE IF EXISTS `rrhh`;

CREATE TABLE `rrhh` (
  `id_rrhh` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) DEFAULT NULL,
  `id_cargo` int(11) DEFAULT NULL,
  `id_estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_rrhh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `rrhh` */

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nom_usuario` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `id_estatus` varchar(10) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fec_creado` datetime DEFAULT NULL,
  `actualizado_por` int(11) DEFAULT NULL,
  `fec_actualizado` datetime DEFAULT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `id_personas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_persona_idx` (`id_personas`),
  KEY `id_persona` (`id_persona`),
  CONSTRAINT `id_personas` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `usuarios` */

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
  KEY `id_estatus_idx` (`id_estatus`),
  CONSTRAINT `id_estatu` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`),
  CONSTRAINT `id_perso` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`),
  CONSTRAINT `id_roles` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `usuarios_roles` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
