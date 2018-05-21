/*
SQLyog Ultimate v8.32 
MySQL - 5.5.5-10.1.31-MariaDB : Database - appfotos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`appfotos` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `appfotos`;

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `idcli` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idcli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cliente` */

/*Table structure for table `direccion` */

DROP TABLE IF EXISTS `direccion`;

CREATE TABLE `direccion` (
  `iddir` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `lat` varchar(100) DEFAULT NULL,
  `lon` varchar(100) DEFAULT NULL,
  `descripcion` varchar(150) NOT NULL,
  `obs` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`iddir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `direccion` */

/*Table structure for table `pagos` */

DROP TABLE IF EXISTS `pagos`;

CREATE TABLE `pagos` (
  `idrec` int(11) NOT NULL AUTO_INCREMENT,
  `idcli` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `fechapago` datetime NOT NULL,
  `transactionid` varchar(200) NOT NULL,
  `concepto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idrec`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pagos` */

/*Table structure for table `pedido_estados` */

DROP TABLE IF EXISTS `pedido_estados`;

CREATE TABLE `pedido_estados` (
  `idest` int(11) NOT NULL AUTO_INCREMENT,
  `idped` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`idest`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pedido_estados` */

/*Table structure for table `pedidos` */

DROP TABLE IF EXISTS `pedidos`;

CREATE TABLE `pedidos` (
  `idped` int(11) NOT NULL AUTO_INCREMENT,
  `idcli` int(11) NOT NULL,
  `cantfotos` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `iddir` int(11) NOT NULL,
  `carpeta` varchar(250) NOT NULL,
  `idpag` int(11) NOT NULL,
  PRIMARY KEY (`idped`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pedidos` */

/*Table structure for table `politicas` */

DROP TABLE IF EXISTS `politicas`;

CREATE TABLE `politicas` (
  `idpol` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `descripcion` varchar(10000) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`idpol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `politicas` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
