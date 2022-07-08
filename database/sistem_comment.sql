/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.13-MariaDB : Database - sistem_comment
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sistem_comment` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

/*Table structure for table `table_comment` */

DROP TABLE IF EXISTS `table_comment`;

CREATE TABLE `table_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_status` int(11) DEFAULT NULL,
  `comment_nama` varchar(100) DEFAULT NULL,
  `comment_email` varchar(100) DEFAULT NULL,
  `comment_isi` text DEFAULT NULL,
  `comment_content_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

/*Data for the table `table_comment` */

insert  into `table_comment`(`comment_id`,`comment_status`,`comment_nama`,`comment_email`,`comment_isi`,`comment_content_id`) values 
(23,0,'Ahmad Dahlan','ahmat@mail.com','Artikel yang sangat bagus !',3),
(24,23,'Admin','adit@mail.com','Terimakasih pah Ahmad !',3),
(25,0,'Cut Nyak Dhien','dazelpro@gmail.com','Hai, artikelnya sangat bermanfaat',3),
(26,25,'Admin','dazelpro@gmail.com','Hi, terimakasih telah berkunjung :)',3),
(27,25,'Cut Nyak Dhien','dazelpro@gmail.com','Sama2 :)',3),
(28,0,'Tuanku Imam Bonjol','adit@mail.com','Bagus, Lanjutkan !',3);

/*Table structure for table `table_content` */

DROP TABLE IF EXISTS `table_content`;

CREATE TABLE `table_content` (
  `content_id` int(11) NOT NULL,
  `content_title` varchar(100) DEFAULT NULL,
  `content_body` text DEFAULT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `table_content` */

insert  into `table_content`(`content_id`,`content_title`,`content_body`) values 
(1,'Content Pertama','<h2>Hallo,</h2><p>Ini adalah konten <b>pertama</b>. Silahkan berkomentar sepuasnya</p>'),
(2,'Content Kedua','<h2>Hallo,</h2><p>Ini adalah konten <b>pertama</b>. Silahkan berkomentar sepuasnya</p>'),
(3,'Content Ketiga','<h2>Hallo,</h2><p>Ini adalah konten <b>pertama</b>. Silahkan berkomentar sepuasnya</p>');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
