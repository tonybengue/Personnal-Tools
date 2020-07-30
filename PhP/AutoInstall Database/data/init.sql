-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `auto_creation`;
CREATE DATABASE `auto_creation` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `auto_creation`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `age`, `location`, `date`) VALUES
(1,	'Toto',	'BenguÃ©',	'tonybengue@hotmail.fr',	26,	'France',	'2020-05-17 20:39:41');

-- 2020-05-17 20:42:20
