<?php
//Инициализируем автозагрузку
define('ROOT_DIR', __DIR__);
require_once ROOT_DIR . '/vendor/autoload.php';

//Загружаем настройки приложения
$app = new \Slim\Slim(include 'config.php');

$host       = $app->config('illuminate_db')['host'];
$dbname     = $app->config('illuminate_db')['database'];
$dbuser     = $app->config('illuminate_db')['username'];
$dbpassword = $app->config('illuminate_db')['password'];
$site       = $app->config('install_config')['site_name'];
$login      = $app->config('install_config')['admin_login'];
$password   = password_hash($app->config('install_config')['admin_password'], PASSWORD_BCRYPT);
$mail       = $app->config('install_config')['admin_email'];

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpassword);
$pdo->exec("set names utf8");

$stmt = $pdo->query("
CREATE TABLE IF NOT EXISTS `kedlek_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `seo_title` varchar(255) NULL,
  `seo_descr` varchar(255) NULL,
  `seo_keywords` varchar(255) NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

CREATE TABLE IF NOT EXISTS `kedlek_category_records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` text NULL,
  `text` text NULL,
  `seo_descr` varchar(255) NULL,
  `seo_keywords` varchar(255) NULL,
  `seo_title` varchar(255) NULL,
  `file` varchar(255) NULL,
  `thumb` varchar(255) NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

CREATE TABLE IF NOT EXISTS `kedlek_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `config` varchar(255) NOT NULL,
  `value` text NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `config` (`config`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

INSERT INTO `kedlek_config` (`id`, `config`, `value`) VALUES
(1, 'admin_title', '". $site ."'),
(2, 'admin_site_url', '/home'),
(3, 'bytehandId', ''),
(4, 'bytehandKey', ''),
(5, 'bytehandFrom', ''),
(6, 'sms_message_question', ''),
(7, 'sms_message_buy', ''),
(8, 'sms_message_call', ''),
(9, 'sms_phone', ''),
(10, 'sms_active', '1'),
(11, 'help_active', '2'),
(12, 'fb_header', ''),
(13, 'fb_footer', ''),
(14, 'vk_header', ''),
(15, 'vk_footer', ''),
(16, 'twitter', ''),
(17, 'gplus_header', ''),
(18, 'gplus_footer', ''),
(19, 'yandex_share', ''),
(20, 'yandex_metrika', ''),
(21, 'google_analytics', ''),
(22, 'other_metrika', ''),
(23, 'contact_phone', ''),
(24, 'contact_adr', ''),
(25, 'contact_mail', ''),
(26, 'contact_map', ''),
(27, 'record_per_page', '10'),
(28, 'gallery_per_page', '10'),
(29, 'contact_html', ''),
(30, 'site_title', ''),
(31, 'site_logo', 'logo.png'),
(32, 'site_favicon', 'favicon.ico'),
(33, 'thumb_gallery_height', '300'),
(34, 'thumb_gallery_width', '400'),
(35, 'thumb_record_height', '400'),
(36, 'thumb_record_width', '600'),
(37, 'theme', 'templates/front/default'),
(38, 'home_html', ''),
(39, 'home_url', '');

CREATE TABLE IF NOT EXISTS `kedlek_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NULL,
  `descr` text,
  `type` int(11) NOT NULL DEFAULT '1',
  `file` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `seo_title` varchar(255) NULL,
  `seo_descr` varchar(255) NULL,
  `seo_keywords` varchar(255) NULL,
  `datetime` date DEFAULT NULL,
  `gallery_list_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`),
  KEY `gallery_list_id` (`gallery_list_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

CREATE TABLE IF NOT EXISTS `kedlek_gallery_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL,
  `ord` int(11) DEFAULT NULL,
  `g_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `g_id` (`g_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

CREATE TABLE IF NOT EXISTS `kedlek_gallery_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `seo_title` varchar(255) NULL,
  `seo_descr` varchar(255) NULL,
  `seo_keywords` varchar(255) NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

CREATE TABLE IF NOT EXISTS `kedlek_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `ord` int(11) NULL DEFAULT '0',
  `target` varchar(255) NULL,
  `active` enum('1','2') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

INSERT INTO `kedlek_menu` (`id`, `parent_id`, `title`, `ord`, `target`, `active`) VALUES
(1, 0, 'Главная', 1, '/home', '2'),
(2, 0, 'Контакты', 2, '/contact', '2');

CREATE TABLE IF NOT EXISTS `kedlek_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('1','2','3') NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `mark_read` enum('1','2') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

CREATE TABLE IF NOT EXISTS `kedlek_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NULL,
  `seo_title` varchar(255) NULL,
  `seo_descr` varchar(255) NULL,
  `seo_keywords` varchar(255) NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

CREATE TABLE IF NOT EXISTS `kedlek_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

INSERT INTO `kedlek_users` (`id`, `login`, `password`, `fio`, `mail`, `role`) VALUES
(1, '" . $login . "', '" . $password . "', 'Администратор', '" . $mail . "', 'admin');

ALTER TABLE `kedlek_gallery`
  ADD CONSTRAINT `kedlek_gallery_ibfk_1` FOREIGN KEY (`gallery_list_id`) REFERENCES `kedlek_gallery_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `kedlek_gallery_items`
  ADD CONSTRAINT `kedlek_gallery_items_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `kedlek_gallery` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

");

header("Location: /admin");
