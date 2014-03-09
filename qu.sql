/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50613
 Source Host           : localhost
 Source Database       : qu

 Target Server Type    : MySQL
 Target Server Version : 50613
 File Encoding         : utf-8

 Date: 11/15/2013 12:26:28 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `actions`
-- ----------------------------
DROP TABLE IF EXISTS `actions`;
CREATE TABLE `actions` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Название',
  `charity` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Акция благотворительная',
  `mainDesc` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Описание для главной',
  `description` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Описание акции',
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT 'Ключевые слова',
  `shortDesc` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Краткое описание',
  `why` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Почему это надо',
  `say` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Дон купон говорит',
  `start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Старт',
  `end` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Окончание',
  `use` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Использоват до',
  `available` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Сертификат доступен сразу',
  `free` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Бесплатная акция',
  `maxInHead` int(3) NOT NULL DEFAULT '0' COMMENT 'Максимум в одни руки',
  `max` int(3) NOT NULL DEFAULT '0' COMMENT 'Максимум покупок',
  `min` int(3) NOT NULL DEFAULT '1' COMMENT 'Минимум покупок',
  `minActions` int(3) NOT NULL DEFAULT '0' COMMENT 'Минимум участий в акциях ',
  `city` int(11) NOT NULL DEFAULT '1' COMMENT 'Город',
  `category` int(11) NOT NULL DEFAULT '0' COMMENT 'Категория',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Активна',
  `term` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Условия',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE,
  KEY `start` (`start`),
  KEY `end` (`end`),
  KEY `active` (`active`),
  KEY `category` (`category`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

SET FOREIGN_KEY_CHECKS = 1;
