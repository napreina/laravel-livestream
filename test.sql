/*
SQLyog Community v13.1.3  (64 bit)
MySQL - 10.1.28-MariaDB : Database - livestream
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`livestream` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `livestream`;

/*Table structure for table `admin_menu` */

DROP TABLE IF EXISTS `admin_menu`;

CREATE TABLE `admin_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `uri` varchar(50) COLLATE utf8_general_ci DEFAULT NULL,
  `permission` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `admin_menu` */

insert  into `admin_menu`(`id`,`parent_id`,`order`,`title`,`icon`,`uri`,`permission`,`created_at`,`updated_at`) values
(1,0,1,'Dashboard','fa-bar-chart','/',NULL,NULL,NULL),
(2,0,2,'Admin','fa-tasks','',NULL,NULL,NULL),
(3,2,3,'Users','fa-users','auth/users',NULL,NULL,NULL),
(4,2,4,'Roles','fa-user','auth/roles',NULL,NULL,NULL),
(5,2,5,'Permission','fa-ban','auth/permissions',NULL,NULL,NULL),
(6,2,6,'Menu','fa-bars','auth/menu',NULL,NULL,NULL),
(7,2,7,'Operation log','fa-history','auth/logs',NULL,NULL,NULL),
(8,0,0,'LiveChannel','fa-bars','/channel',NULL,NULL,NULL),
(9,0,0,'Gift','fa-gift','/gift',NULL,NULL,NULL),
(10,0,0,'Wallet','fa-money','/wallet',NULL,NULL,NULL),
(11,0,0,'Comment','fa-commenting','/comment',NULL,NULL,NULL),
(12,0,0,'History','fa-history','/history',NULL,NULL,NULL),
(13,0,0,'User','fa-users','/user',NULL,NULL,NULL),
(14,12,0,'PaymentHistory','fa-paypal','/payment_history',NULL,NULL,NULL),
(15,12,0,'Gift_HIstory','fa-magic','/gift_history',NULL,NULL,NULL),
(16,13,0,'Channel_User','fa-user','/channel_user',NULL,NULL,NULL),
(17,13,0,'Channel_Publisher','fa-user-secret','/channel_publisher',NULL,NULL,NULL),
(18,0,0,'Report','fa-warning','/report',NULL,NULL,NULL);

/*Table structure for table `admin_operation_log` */

DROP TABLE IF EXISTS `admin_operation_log`;

CREATE TABLE `admin_operation_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `method` varchar(10) COLLATE utf8_general_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `input` text COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_operation_log_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `admin_operation_log` */

/*Table structure for table `admin_permissions` */

DROP TABLE IF EXISTS `admin_permissions`;

CREATE TABLE `admin_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `http_method` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
  `http_path` text COLLATE utf8_general_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_permissions_name_unique` (`name`),
  UNIQUE KEY `admin_permissions_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `admin_permissions` */

/*Table structure for table `admin_role_menu` */

DROP TABLE IF EXISTS `admin_role_menu`;

CREATE TABLE `admin_role_menu` (
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_menu_role_id_menu_id_index` (`role_id`,`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `admin_role_menu` */

/*Table structure for table `admin_role_permissions` */

DROP TABLE IF EXISTS `admin_role_permissions`;

CREATE TABLE `admin_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_permissions_role_id_permission_id_index` (`role_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `admin_role_permissions` */

/*Table structure for table `admin_role_users` */

DROP TABLE IF EXISTS `admin_role_users`;

CREATE TABLE `admin_role_users` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_users_role_id_user_id_index` (`role_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `admin_role_users` */

/*Table structure for table `admin_roles` */

DROP TABLE IF EXISTS `admin_roles`;

CREATE TABLE `admin_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_roles_name_unique` (`name`),
  UNIQUE KEY `admin_roles_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `admin_roles` */

/*Table structure for table `admin_user_permissions` */

DROP TABLE IF EXISTS `admin_user_permissions`;

CREATE TABLE `admin_user_permissions` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_user_permissions_user_id_permission_id_index` (`user_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `admin_user_permissions` */

/*Table structure for table `admin_users` */

DROP TABLE IF EXISTS `admin_users`;

CREATE TABLE `admin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(190) COLLATE utf8_general_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_users_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `admin_users` */

/*Table structure for table `advert_categories` */

DROP TABLE IF EXISTS `advert_categories`;

CREATE TABLE `advert_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `advert_categories` */

/*Table structure for table `adverts` */

DROP TABLE IF EXISTS `adverts`;

CREATE TABLE `adverts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `alt` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `views` int(11) NOT NULL,
  `clicks` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `advert_category_id` int(10) unsigned NOT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `adverts_advert_category_id_foreign` (`advert_category_id`),
  CONSTRAINT `adverts_advert_category_id_foreign` FOREIGN KEY (`advert_category_id`) REFERENCES `advert_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `adverts` */

/*Table structure for table `buy_histories` */

DROP TABLE IF EXISTS `buy_histories`;

CREATE TABLE `buy_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `stock_type_id` int(10) unsigned NOT NULL,
  `amount` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `cost` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `method` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `before_amount` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `fee` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `buy_histories_user_id_foreign` (`user_id`) USING BTREE,
  KEY `buy_histories_stock_type_id_foreign` (`stock_type_id`) USING BTREE,
  CONSTRAINT `buy_histories_stock_type_id_foreign` FOREIGN KEY (`stock_type_id`) REFERENCES `stock_types` (`id`) ON DELETE CASCADE,
  CONSTRAINT `buy_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `buy_histories` */

/*Table structure for table `deposit_histories` */

DROP TABLE IF EXISTS `deposit_histories`;

CREATE TABLE `deposit_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `amount` double NOT NULL,
  `type` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `status` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `before_amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `deposit_histories_user_id_foreign` (`user_id`) USING BTREE,
  CONSTRAINT `deposit_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `deposit_histories` */

/*Table structure for table `fund_requests` */

DROP TABLE IF EXISTS `fund_requests`;

CREATE TABLE `fund_requests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `money` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `bank` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `fund_requests` */

insert  into `fund_requests`(`id`,`user_id`,`type`,`money`,`bank`,`created_at`,`updated_at`) values
(1,3,'入金','5000','our','2019-07-06 02:44:18','2019-07-06 02:44:18'),
(2,3,'入金','5000','our','2019-07-07 10:32:58','2019-07-07 10:32:58'),
(3,3,'入金','123456789','our','2019-07-10 17:37:03','2019-07-10 17:37:03');

/*Table structure for table `lectures` */

DROP TABLE IF EXISTS `lectures`;

CREATE TABLE `lectures` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lecture_name` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `playing_date` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `playing_time` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `teacher_name` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `description` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `location` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `lectures` */

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thread_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `body` text COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `messages` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values
(1,'2010_01_01_000000_create_money_wallets_table',1),
(2,'2010_01_01_000001_create_stock_wallets_table',1),
(3,'2014_10_12_000000_create_users_table',1),
(4,'2014_10_12_100000_create_password_resets_table',1),
(5,'2014_10_28_175635_create_threads_table',1),
(6,'2014_10_28_175710_create_messages_table',1),
(7,'2014_10_28_180224_create_participants_table',1),
(8,'2014_11_03_154831_add_soft_deletes_to_participants_table',1),
(9,'2014_12_04_124531_add_softdeletes_to_threads_table',1),
(10,'2016_04_06_231711_create_table_stock_types',1),
(11,'2016_06_01_000001_create_oauth_auth_codes_table',1),
(12,'2016_06_01_000002_create_oauth_access_tokens_table',1),
(13,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),
(14,'2016_06_01_000004_create_oauth_clients_table',1),
(15,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),
(16,'2016_11_22_155121_create_table_user_sessions',1),
(17,'2017_03_30_152742_add_soft_deletes_to_messages_table',1),
(18,'2019_04_06_231650_create_table_buy_histories',1),
(19,'2019_04_06_231650_create_table_deposit_histories',1),
(20,'2019_04_06_231650_create_table_sell_histories',1),
(21,'2019_04_06_231650_create_table_withdraw_histories',1),
(22,'2019_04_24_144007_create_online_users_table',1),
(23,'2019_04_26_225631_create_lecture_table',1),
(24,'2019_05_09_015500_create_news_table',1),
(25,'2019_05_09_020427_create_wind_control_table',1),
(26,'2019_05_09_042851_create_settings_table',1),
(27,'2019_05_11_154342_create_table_fund_request',1),
(28,'2019_07_02_062927_laratrust_setup_tables',1);

/*Table structure for table `money_wallets` */

DROP TABLE IF EXISTS `money_wallets`;

CREATE TABLE `money_wallets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `before_amount` double NOT NULL,
  `after_amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `money_wallets` */

insert  into `money_wallets`(`id`,`before_amount`,`after_amount`,`created_at`,`updated_at`) values
(1,0,100000,'2019-07-06 01:25:27','2019-07-06 01:25:27'),
(2,0,100000,'2019-07-06 01:25:27','2019-07-06 01:25:27'),
(3,0,100000,'2019-07-06 01:25:27','2019-07-06 01:25:27');

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `contents` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `news` */

insert  into `news`(`id`,`type`,`subject`,`contents`,`created_at`,`updated_at`) values
(1,'1','welcome','欢迎访问我们的网站','2019-07-06 01:25:28','2019-07-06 01:25:28');

/*Table structure for table `oauth_access_tokens` */

DROP TABLE IF EXISTS `oauth_access_tokens`;

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8_general_ci DEFAULT NULL,
  `scopes` text COLLATE utf8_general_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `oauth_access_tokens_user_id_index` (`user_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `oauth_access_tokens` */

/*Table structure for table `oauth_auth_codes` */

DROP TABLE IF EXISTS `oauth_auth_codes`;

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `scopes` text COLLATE utf8_general_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `oauth_auth_codes` */

/*Table structure for table `oauth_clients` */

DROP TABLE IF EXISTS `oauth_clients`;

CREATE TABLE `oauth_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `redirect` text COLLATE utf8_general_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `oauth_clients_user_id_index` (`user_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `oauth_clients` */

/*Table structure for table `oauth_personal_access_clients` */

DROP TABLE IF EXISTS `oauth_personal_access_clients`;

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `oauth_personal_access_clients` */

/*Table structure for table `oauth_refresh_tokens` */

DROP TABLE IF EXISTS `oauth_refresh_tokens`;

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `oauth_refresh_tokens` */

/*Table structure for table `online_users` */

DROP TABLE IF EXISTS `online_users`;

CREATE TABLE `online_users` (
  `user_id` int(11) NOT NULL,
  `platform` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `ipaddress` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `online_users` */

insert  into `online_users`(`user_id`,`platform`,`ipaddress`,`created_at`,`updated_at`,`deleted_at`) values
(3,'WebKit,Windows','127.0.0.1','2019-07-06 01:51:22','2019-07-06 01:51:22',NULL);

/*Table structure for table `ownstock` */

DROP TABLE IF EXISTS `ownstock`;

CREATE TABLE `ownstock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

/*Data for the table `ownstock` */

insert  into `ownstock`(`id`,`stock_code`) values
(35,'000026'),
(40,'000010'),
(44,'000009');

/*Table structure for table `participants` */

DROP TABLE IF EXISTS `participants`;

CREATE TABLE `participants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thread_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `last_read` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `participants` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`) USING BTREE,
  KEY `password_resets_token_index` (`token`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `password_resets` */

/*Table structure for table `permission_role` */

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`) USING BTREE,
  KEY `permission_role_role_id_foreign` (`role_id`) USING BTREE,
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `permission_role` */

insert  into `permission_role`(`permission_id`,`role_id`) values
(1,1),
(1,2),
(2,1),
(2,2),
(3,1),
(3,2),
(4,1),
(4,2),
(5,1),
(6,1),
(7,1),
(8,1),
(9,1),
(9,2),
(9,3),
(10,1),
(10,2),
(10,3);

/*Table structure for table `permission_user` */

DROP TABLE IF EXISTS `permission_user`;

CREATE TABLE `permission_user` (
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(191) COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`) USING BTREE,
  KEY `permission_user_permission_id_foreign` (`permission_id`) USING BTREE,
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `permission_user` */

insert  into `permission_user`(`permission_id`,`user_id`,`user_type`) values
(9,4,'App\\User'),
(10,4,'App\\User'),
(11,4,'App\\User');

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8_general_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `permissions_name_unique` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`display_name`,`description`,`created_at`,`updated_at`) values
(1,'create-users','Create Users','Create Users','2019-07-06 01:25:29','2019-07-06 01:25:29'),
(2,'read-users','Read Users','Read Users','2019-07-06 01:25:29','2019-07-06 01:25:29'),
(3,'update-users','Update Users','Update Users','2019-07-06 01:25:29','2019-07-06 01:25:29'),
(4,'delete-users','Delete Users','Delete Users','2019-07-06 01:25:29','2019-07-06 01:25:29'),
(5,'create-acl','Create Acl','Create Acl','2019-07-06 01:25:29','2019-07-06 01:25:29'),
(6,'read-acl','Read Acl','Read Acl','2019-07-06 01:25:29','2019-07-06 01:25:29'),
(7,'update-acl','Update Acl','Update Acl','2019-07-06 01:25:29','2019-07-06 01:25:29'),
(8,'delete-acl','Delete Acl','Delete Acl','2019-07-06 01:25:29','2019-07-06 01:25:29'),
(9,'read-profile','Read Profile','Read Profile','2019-07-06 01:25:29','2019-07-06 01:25:29'),
(10,'update-profile','Update Profile','Update Profile','2019-07-06 01:25:29','2019-07-06 01:25:29'),
(11,'create-profile','Create Profile','Create Profile','2019-07-06 01:25:31','2019-07-06 01:25:31');

/*Table structure for table `role_user` */

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(191) COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`) USING BTREE,
  KEY `role_user_role_id_foreign` (`role_id`) USING BTREE,
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `role_user` */

insert  into `role_user`(`role_id`,`user_id`,`user_type`) values
(1,1,'App\\User'),
(2,2,'App\\User'),
(3,3,'App\\User');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8_general_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `roles_name_unique` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`display_name`,`description`,`created_at`,`updated_at`) values
(1,'superadministrator','Superadministrator','Superadministrator','2019-07-06 01:25:29','2019-07-06 01:25:29'),
(2,'administrator','Administrator','Administrator','2019-07-06 01:25:30','2019-07-06 01:25:30'),
(3,'user','User','User','2019-07-06 01:25:30','2019-07-06 01:25:30');

/*Table structure for table `sell_histories` */

DROP TABLE IF EXISTS `sell_histories`;

CREATE TABLE `sell_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `stock_type_id` int(10) unsigned NOT NULL,
  `buy_cost` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `buy_fee` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `sell_fee` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `state_fee` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `buy_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amount` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `sell_cost` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `method` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `before_amount` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `save_fee` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `fee` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `sell_histories_user_id_foreign` (`user_id`) USING BTREE,
  KEY `sell_histories_stock_type_id_foreign` (`stock_type_id`) USING BTREE,
  CONSTRAINT `sell_histories_stock_type_id_foreign` FOREIGN KEY (`stock_type_id`) REFERENCES `stock_types` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sell_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `sell_histories` */

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `open_xitong` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `open_AM_Start` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `open_AM_End` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `open_PM_Start` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `open_PM_End` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `sell_AM_Start` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `sell_AM_End` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `sell_PM_Start` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `sell_PM_End` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `atm_AM_Start` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `atm_AM_End` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `atm_PM_Start` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `atm_PM_End` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `max_tries` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `trust_num` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `system_safeguard` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `system_safeguard_direc` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `user_regex` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `agent_prefix` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `agent_min` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `agent_max` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `user_member_prefix` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `user_member_min` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `user_member_max` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `min_password` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `max_password` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `user_name_min` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `user_name_max` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `cookie_length` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `cost_bull_max` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `cost_sell_max` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `cost_save_max` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `cost_save_day` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `cost_state_max` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `cost_daily_max` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `cost_ret_max` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `sel_max_time` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `cost_sell_limit` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `rest_filter` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `buy_sd` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `st_buy_sd` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `turnover_min` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `minmoney` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `num_max` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `num_min` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `cost_exchange_rate` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `money_percent` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `lower_cash` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `up_float` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `down_float` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `dc5` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `dc6` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `dc7` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `dc8` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `dc9` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `dc_wan` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `dc_wan2` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `dc_wan3` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `dc_tou` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `dc_di` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `baocang_precent` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `settings` */

insert  into `settings`(`id`,`open_xitong`,`open_AM_Start`,`open_AM_End`,`open_PM_Start`,`open_PM_End`,`sell_AM_Start`,`sell_AM_End`,`sell_PM_Start`,`sell_PM_End`,`atm_AM_Start`,`atm_AM_End`,`atm_PM_Start`,`atm_PM_End`,`max_tries`,`trust_num`,`system_safeguard`,`system_safeguard_direc`,`user_regex`,`agent_prefix`,`agent_min`,`agent_max`,`user_member_prefix`,`user_member_min`,`user_member_max`,`min_password`,`max_password`,`user_name_min`,`user_name_max`,`cookie_length`,`cost_bull_max`,`cost_sell_max`,`cost_save_max`,`cost_save_day`,`cost_state_max`,`cost_daily_max`,`cost_ret_max`,`sel_max_time`,`cost_sell_limit`,`rest_filter`,`buy_sd`,`st_buy_sd`,`turnover_min`,`minmoney`,`num_max`,`num_min`,`cost_exchange_rate`,`money_percent`,`lower_cash`,`up_float`,`down_float`,`dc5`,`dc6`,`dc7`,`dc8`,`dc9`,`dc_wan`,`dc_wan2`,`dc_wan3`,`dc_tou`,`dc_di`,`baocang_precent`,`created_at`,`updated_at`) values
(1,'1','09:31','11:25','13:01','14:55','09:31','11:25','13:01','14:55','9:00','12:00','12:00','23:30','60','6','off','系统维护中...','/^[a-zA-Z0-9_x7f-xff]*$/','0','4','12','1','3','15','4','12','1','12','86400','0.0015','0.0015','0','999','0.002','0.003','10','15','0.008','0','7.5','3.5','1','1','10000','1','10','90','800','0.001','0.001','0','0','0','0','0','0','0','0','0','0','80','2019-07-06 01:25:28','2019-07-06 01:25:28');

/*Table structure for table `stock_types` */

DROP TABLE IF EXISTS `stock_types`;

CREATE TABLE `stock_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `option` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `code` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `cn_name` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `stock_types` */

insert  into `stock_types`(`id`,`option`,`code`,`cn_name`,`created_at`,`updated_at`) values
(1,'0','600111','北方稀土','2019-07-06 01:25:27','2019-07-06 01:25:27');

/*Table structure for table `stock_wallets` */

DROP TABLE IF EXISTS `stock_wallets`;

CREATE TABLE `stock_wallets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `before_amount` double(8,2) NOT NULL,
  `after_amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `stock_wallets` */

insert  into `stock_wallets`(`id`,`before_amount`,`after_amount`,`created_at`,`updated_at`) values
(1,10000.00,90000.00,'2019-07-06 01:25:28','2019-07-06 01:25:28'),
(2,10000.00,90000.00,'2019-07-06 01:25:28','2019-07-06 01:25:28'),
(3,10000.00,90000.00,'2019-07-06 01:25:28','2019-07-06 01:25:28');

/*Table structure for table `table_category` */

DROP TABLE IF EXISTS `table_category`;

CREATE TABLE `table_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_general_ci NOT NULL,
  `detail` text COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `table_category` */

insert  into `table_category`(`id`,`name`,`detail`,`created_at`,`updated_at`) values
(1,'popular','The most popular list of live channel.','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(2,'fashion','The most fashion list of live channel.','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(3,'knowhow','The most knowhow list of live channel.','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(4,'music','The music list of live channel.','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(5,'dance','The dance list of live channel.','2019-07-05 15:56:53','2019-07-05 15:56:53');

/*Table structure for table `table_chanel_publisher` */

DROP TABLE IF EXISTS `table_chanel_publisher`;

CREATE TABLE `table_chanel_publisher` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chanel_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `table_chanel_publisher` */

insert  into `table_chanel_publisher`(`id`,`chanel_id`,`publisher_id`,`created_at`,`updated_at`) values
(1,1,1,'2019-07-10 18:43:34','2019-07-17 18:43:38');

/*Table structure for table `table_chanel_users` */

DROP TABLE IF EXISTS `table_chanel_users`;

CREATE TABLE `table_chanel_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chanel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `table_chanel_users` */

insert  into `table_chanel_users`(`id`,`chanel_id`,`user_id`,`created_at`,`updated_at`) values
(1,1,1,'2019-07-05 16:08:14','2019-07-05 16:08:14');

/*Table structure for table `table_chanels` */

DROP TABLE IF EXISTS `table_chanels`;

CREATE TABLE `table_chanels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `table_chanels` */

insert  into `table_chanels`(`id`,`name`,`address`,`status`,`category_id`,`created_at`,`updated_at`) values
(1,'test','2424','1',1,'2019-07-02 18:39:06','2019-07-23 18:39:10');

/*Table structure for table `table_comments` */

DROP TABLE IF EXISTS `table_comments`;

CREATE TABLE `table_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `table_comments` */

/*Table structure for table `table_exchange_histories` */

DROP TABLE IF EXISTS `table_exchange_histories`;

CREATE TABLE `table_exchange_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `table_exchange_histories` */

/*Table structure for table `table_gift_histories` */

DROP TABLE IF EXISTS `table_gift_histories`;

CREATE TABLE `table_gift_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `gift_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `table_gift_histories` */

/*Table structure for table `table_gifts` */

DROP TABLE IF EXISTS `table_gifts`;

CREATE TABLE `table_gifts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `motion_file` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `avartar_file` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `table_gifts` */

insert  into `table_gifts`(`id`,`name`,`amount`,`motion_file`,`avartar_file`,`created_at`,`updated_at`) values
(1,'涩会粽',10,'/images/1.png','/images/1.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(2,'陪你看星星',33440,'/images/2.png','/images/2.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(3,'撩一下',10,'/images/3.png','/images/3.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(4,'撩一下',10,'/images/4.png','/images/4.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(5,'撩一下',10,'/images/5.png','/images/5.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(6,'撩一下',10,'/images/6.png','/images/6.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(7,'撩一下',10,'/images/7.png','/images/7.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(8,'撩一下',10,'/images/8.png','/images/8.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(9,'撩一下',10,'/images/9.png','/images/9.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(10,'撩一下',10,'/images/10.png','/images/10.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(11,'撩一下',10,'/images/11.png','/images/11.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(12,'撩一下',10,'/images/12.png','/images/12.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(13,'撩一下',10,'/images/13.png','/images/13.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(14,'撩一下',10,'/images/14.png','/images/14.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(15,'撩一下',10,'/images/15.png','/images/15.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(16,'撩一下',10,'/images/16.png','/images/16.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(17,'撩一下',10,'/images/17.png','/images/17.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(18,'撩一下',10,'/images/18.png','/images/18.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(19,'撩一下',10,'/images/19.png','/images/19.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(20,'撩一下',10,'/images/20.png','/images/20.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(21,'撩一下',10,'/images/21.png','/images/21.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(22,'撩一下',10,'/images/22.png','/images/22.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(23,'撩一下',10,'/images/23.png','/images/23.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(24,'撩一下',10,'/images/24.png','/images/24.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(25,'撩一下',10,'/images/25.png','/images/25.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(26,'撩一下',10,'/images/26.png','/images/26.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(27,'撩一下',10,'/images/27.png','/images/27.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(28,'撩一下',10,'/images/28.png','/images/28.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(29,'撩一下',10,'/images/29.png','/images/29.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(30,'撩一下',10,'/images/30.png','/images/30.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(31,'撩一下',10,'/images/31.png','/images/31.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(32,'撩一下',10,'/images/32.png','/images/32.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(33,'撩一下',10,'/images/33.png','/images/33.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(34,'撩一下',10,'/images/34.png','/images/34.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(35,'撩一下',10,'/images/35.png','/images/35.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(36,'撩一下',10,'/images/36.png','/images/36.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(37,'撩一下',10,'/images/37.png','/images/37.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(38,'撩一下',10,'/images/38.png','/images/38.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(39,'撩一下',10,'/images/39.png','/images/39.png','2019-07-05 15:56:53','2019-07-05 15:56:53'),
(40,'撩一下',10,'/images/40.png','/images/40.png','2019-07-05 15:56:53','2019-07-05 15:56:53');

/*Table structure for table `table_payment_histories` */

DROP TABLE IF EXISTS `table_payment_histories`;

CREATE TABLE `table_payment_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `method` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `table_payment_histories` */

/*Table structure for table `table_prices` */

DROP TABLE IF EXISTS `table_prices`;

CREATE TABLE `table_prices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `table_prices` */

/*Table structure for table `table_publishers` */

DROP TABLE IF EXISTS `table_publishers`;

CREATE TABLE `table_publishers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `avartar1` varchar(255) COLLATE utf8_general_ci NOT NULL DEFAULT 'default.png',
  `avartar2` varchar(255) COLLATE utf8_general_ci NOT NULL DEFAULT 'default.png',
  `phone` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '0',
  `age` int(11) NOT NULL DEFAULT '0',
  `country` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `table_publishers` */

insert  into `table_publishers`(`id`,`name`,`avartar1`,`avartar2`,`phone`,`password`,`rating`,`age`,`country`,`gender`,`created_at`,`updated_at`) values
(1,'admin','default.png','default.png','2131321321','',0,0,'','','2019-07-13 18:40:18','2019-07-25 18:40:21');

/*Table structure for table `table_report` */

DROP TABLE IF EXISTS `table_report`;

CREATE TABLE `table_report` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `report_message` text COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `table_report` */

/*Table structure for table `table_role_user` */

DROP TABLE IF EXISTS `table_role_user`;

CREATE TABLE `table_role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `table_role_user` */

/*Table structure for table `table_roles` */

DROP TABLE IF EXISTS `table_roles`;

CREATE TABLE `table_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `table_roles` */

/*Table structure for table `table_users` */

DROP TABLE IF EXISTS `table_users`;

CREATE TABLE `table_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `avartar` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `wallet_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `table_users` */

insert  into `table_users`(`id`,`name`,`avartar`,`phone`,`password`,`wallet_id`,`status`,`created_at`,`updated_at`) values
(1,'user1','images/3cc00b31c9abe9ef18cbb205b0fa94d8.png','12345678905','$2y$10$M2iSnHNFoWzKNisbxKy1ce7Jn4pXQBPfex6g9b1cB2bJMi//YhtBy',1,'0','2019-06-14 05:38:37','2019-06-18 21:58:22'),
(2,'user2','images/9e4276a8da1eea09aca42df6d473ad38.png','12345678900','$2y$10$H6/Ga5sQ4a5xbMyFSkarFexT11T/CV1vA1fBZADBlwxdTnLwq6IPu',2,'0','2019-06-14 05:43:50','2019-06-18 04:49:51'),
(3,'user3','images/9cfUyhqKCVTA6iwr1560879345.png','12345678901','$2y$10$5t5sjzIAHYfmx5aci2V55upjUmmp6wMSz/v.u9wvyqkoBLvxHdP5S',3,'0','2019-06-14 05:44:51','2019-06-18 21:53:50'),
(4,'','','+8612345678906','$2y$10$rLoqnFaok2fbuokDxu1UveuSfe4vhWoCnhGNFF6zP7JB8KuCLPs6O',4,'0','2019-06-23 12:41:42','2019-06-23 12:41:42');

/*Table structure for table `table_wallets` */

DROP TABLE IF EXISTS `table_wallets`;

CREATE TABLE `table_wallets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `table_wallets` */

/*Table structure for table `threads` */

DROP TABLE IF EXISTS `threads`;

CREATE TABLE `threads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `threads` */

/*Table structure for table `user_session` */

DROP TABLE IF EXISTS `user_session`;

CREATE TABLE `user_session` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `session_id` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `user_session` */

insert  into `user_session`(`id`,`user_id`,`session_id`,`created_at`,`updated_at`) values
(1,3,'2M5MAqGzIAScNkGWNii9KyPsLb7COGCnBJ1dcCIM','2019-07-06 01:51:21','2019-07-12 12:54:01');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `name` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `idcard` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `kh_bank` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `bank_name` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `bank_card` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `atmpwd` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `status` int(11) NOT NULL,
  `money_wallet_id` int(10) unsigned NOT NULL,
  `stock_wallet_id` int(10) unsigned NOT NULL,
  `forgot_token` varchar(100) COLLATE utf8_general_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `users_money_wallet_id_foreign` (`money_wallet_id`) USING BTREE,
  KEY `users_stock_wallet_id_foreign` (`stock_wallet_id`) USING BTREE,
  CONSTRAINT `users_money_wallet_id_foreign` FOREIGN KEY (`money_wallet_id`) REFERENCES `money_wallets` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_stock_wallet_id_foreign` FOREIGN KEY (`stock_wallet_id`) REFERENCES `stock_wallets` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`name`,`idcard`,`kh_bank`,`bank_name`,`bank_card`,`phone`,`atmpwd`,`image_url`,`status`,`money_wallet_id`,`stock_wallet_id`,`forgot_token`,`remember_token`,`created_at`,`updated_at`) values
(1,'Superadministrator','$2y$10$EygA3o4aZNq9ZOVUEqaP/uma691mc7Y1da9RM/6zbusxexY76hgm.','Superadministrator','12345678932165478','1233445','丹东银行','111111111111','12345678902','1523','/images/upload/superadmin12345678932165478/1.png',1,1,1,NULL,NULL,'2019-07-06 01:25:30','2019-07-06 01:25:30'),
(2,'Administrator','$2y$10$btmBD/ClFfhMaTLBd5Eo7exNMyeCbCS.FwRCPE4w0eecMMTw6bcPW','Administrator','12345678932165478','1233445','丹东银行','111111111111','12345678902','1523','/images/upload/superadmin12345678932165478/1.png',1,1,1,NULL,NULL,'2019-07-06 01:25:30','2019-07-06 01:25:30'),
(3,'User','$2y$10$rBYt7RHEiXcJLgjrK77TQ.OpZSKtVqeTGDTfWghYlQmi1U.m.RLI6','User','12345678932165478','1233445','丹东银行','111111111111','12345678902','1523','/images/upload/superadmin12345678932165478/1.png',1,1,1,NULL,NULL,'2019-07-06 01:25:30','2019-07-06 01:25:30'),
(4,'Cru User','$2y$10$1dZoZo8x1qcf4hSNhmA8kupyVveHn01JKkx7IbLHqDO4Ydb21vONy','Cru User','12345678932165478','1233445','丹东银行','111111111111','12345678902','1523','/images/upload/superadmin12345678932165478/1.png',1,1,1,NULL,'iEkru49D3q','2019-07-06 01:25:31','2019-07-06 01:25:31');

/*Table structure for table `wind_control` */

DROP TABLE IF EXISTS `wind_control`;

CREATE TABLE `wind_control` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `wind_control` */

/*Table structure for table `withdraw_histories` */

DROP TABLE IF EXISTS `withdraw_histories`;

CREATE TABLE `withdraw_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `amount` double NOT NULL,
  `bank` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `bank_name` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `status` varchar(191) COLLATE utf8_general_ci NOT NULL,
  `before_amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `withdraw_histories_user_id_foreign` (`user_id`) USING BTREE,
  CONSTRAINT `withdraw_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

/*Data for the table `withdraw_histories` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
