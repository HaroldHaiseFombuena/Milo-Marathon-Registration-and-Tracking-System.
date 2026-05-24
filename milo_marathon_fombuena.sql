/*
SQLyog Community v13.3.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - milo_marathon_fombuena
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`milo_marathon_fombuena` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `milo_marathon_fombuena`;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2026_05_17_010106_create_registration_table',1),
(2,'2026_05_18_131609_create_sessions_table',2);

/*Table structure for table `registrations` */

DROP TABLE IF EXISTS `registrations`;

CREATE TABLE `registrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Full_name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `Jersey_size` varchar(10) NOT NULL,
  `school_organization` varchar(255) NOT NULL,
  `marathon_category` varchar(255) NOT NULL,
  `emergency_contact_name` varchar(255) NOT NULL,
  `emergency_contact_phone` varchar(20) NOT NULL,
  `emergency_contact_relationship` varchar(255) NOT NULL,
  `runner_number` varchar(20) NOT NULL,
  `registration_date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `registration_runner_number_unique` (`runner_number`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `registrations` */

insert  into `registrations`(`id`,`Full_name`,`age`,`gender`,`phone`,`email`,`address`,`Jersey_size`,`school_organization`,`marathon_category`,`emergency_contact_name`,`emergency_contact_phone`,`emergency_contact_relationship`,`runner_number`,`registration_date`) values 
(1,'test',11,'Male','test','test@gmail.com','test','XS','test','3KM','test','test','test','111','2026-05-18'),
(2,'Harold Haise Fombuena',22,'Male','09971333320','fombuenaharoldhasie@gmail.com','San Antonio Barcelona Sorsogon','XL','CCDI','3KM','Wilma Fombuena','09222555100','Parent','1','2026-05-18'),
(3,'John Michael Cruz',20,'Male','09171234561','johncruz@gmail.com','Quezon City','M','CCDI College','5KM','Maria Cruz','09181234561','Mother','RUN001','2026-05-01'),
(4,'Angela Mae Santos',19,'Female','09171234562','angelasantos@gmail.com','Manila City','S','UP Diliman','10KM','Robert Santos','09181234562','Father','RUN002','2026-05-01'),
(5,'Kevin Ramos',22,'Male','09171234563','kevinramos@gmail.com','Pasig City','L','PUP Manila','21KM','Ana Ramos','09181234563','Sister','RUN003','2026-05-02'),
(6,'Sophia Reyes',21,'Female','09171234564','sophiareyes@gmail.com','Makati City','M','FEU Tech','5KM','Carlos Reyes','09181234564','Father','RUN004','2026-05-02'),
(7,'Daniel Torres',24,'Male','09171234565','dtorres@gmail.com','Taguig City','XL','UST','42KM','Liza Torres','09181234565','Mother','RUN005','2026-05-03'),
(8,'Patricia Lim',18,'Female','09171234566','patricialim@gmail.com','Caloocan City','S','NU Manila','5KM','Henry Lim','09181234566','Father','RUN006','2026-05-03'),
(9,'Mark Anthony Lopez',23,'Male','09171234567','marklopez@gmail.com','Antipolo City','L','Mapua University','10KM','Rose Lopez','09181234567','Mother','RUN007','2026-05-04'),
(10,'Christine Dela Cruz',20,'Female','09171234568','christine.dc@gmail.com','Marikina City','M','Adamson University','21KM','Joel Dela Cruz','09181234568','Brother','RUN008','2026-05-04'),
(11,'Joshua Mendoza',25,'Male','09171234569','jmendoza@gmail.com','Pasay City','XL','DLSU','42KM','Rita Mendoza','09181234569','Wife','RUN009','2026-05-05'),
(12,'Nicole Garcia',19,'Female','09171234570','nicolegarcia@gmail.com','Las Piñas City','S','San Beda University','5KM','Mario Garcia','09181234570','Father','RUN010','2026-05-05'),
(13,'Ethan Villanueva',22,'Male','09171234571','ethanv@gmail.com','Parañaque City','M','TIP Manila','10KM','Grace Villanueva','09181234571','Mother','RUN011','2026-05-06'),
(14,'Kimberly Flores',21,'Female','09171234572','kimflores@gmail.com','Valenzuela City','M','Arellano University','21KM','Paul Flores','09181234572','Brother','RUN012','2026-05-06'),
(15,'Ryan Bautista',26,'Male','09171234573','ryanb@gmail.com','Quezon City','L','UE Manila','42KM','Mila Bautista','09181234573','Mother','RUN013','2026-05-07'),
(16,'Jasmine Ortega',20,'Female','09171234574','jasmineo@gmail.com','Muntinlupa City','S','Lyceum University','5KM','Nina Ortega','09181234574','Sister','RUN014','2026-05-07'),
(17,'Carlo Fernandez',23,'Male','09171234575','carlof@gmail.com','Taguig City','XL','CEU Manila','10KM','Pedro Fernandez','09181234575','Father','RUN015','2026-05-08'),
(18,'Bea Navarro',18,'Female','09171234576','beanavarro@gmail.com','Makati City','M','Asia Pacific College','21KM','Lucy Navarro','09181234576','Mother','RUN016','2026-05-08'),
(19,'Nathan Perez',24,'Male','09171234577','nathanp@gmail.com','Pasig City','L','STI College','42KM','Ella Perez','09181234577','Wife','RUN017','2026-05-09'),
(20,'Trisha Aquino',22,'Female','09171234578','trishaa@gmail.com','Manila City','S','Far Eastern University','5KM','Jose Aquino','09181234578','Father','RUN018','2026-05-09'),
(21,'Miguel Santiago',21,'Male','09171234579','miguels@gmail.com','Cainta Rizal','M','AMA University','10KM','Lourdes Santiago','09181234579','Mother','RUN019','2026-05-10'),
(22,'Ella Mae Rivera',19,'Female','09171234580','ellarivera@gmail.com','Quezon City','M','NCBA','21KM','Ramon Rivera','09181234580','Father','RUN020','2026-05-10'),
(23,'John Doe',22,'Male','01234567890','JohnDoe@gmail.com','123 main st. City ville','XL','SSU','5KM','Jana Doe','01234567890','Sister','333','2026-05-23'),
(24,'juan dela cruz',22,'Male','09222555100','juanDelaCruz@gmail.com','Sorsogon city','L','CCDI','3KM','Rose dela cruz','01234567890','parent','222','2026-05-23');

/*Table structure for table `sessions` */

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sessions` */

insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values 
('dq5JEMo9OwB8TfdMO0g9hPthW7MYzXM2rwC0z0yj',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVVp6YlJuR1g2a0Z6d2FZRmRTVmJZNW1wZHljcnhrbVdGSUZIaUNxcSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7czo1OiJyb3V0ZSI7czo4OiJyZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1779516597),
('vsRLGPzPPzR46k8OTbj6uaq0bhZzBnM0w5kdqsPC',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.121.0 Chrome/142.0.7444.265 Electron/39.8.8 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiM050NXN0aG9ua2xuMEZOZFRhcWlFNGdiQkZrS1lUR2VZNldtZDFyUSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RyYXRpb25zIjtzOjU6InJvdXRlIjtzOjE5OiJyZWdpc3RyYXRpb25zLmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1779521330);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
