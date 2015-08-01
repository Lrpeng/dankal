/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50137
Source Host           : localhost:3306
Source Database       : dankal

Target Server Type    : MYSQL
Target Server Version : 50137
File Encoding         : 65001

Date: 2015-08-01 02:00:29
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `account`
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `username` char(20) NOT NULL,
  `password` char(16) NOT NULL,
  `head` char(15) NOT NULL,
  `longnum` char(20) NOT NULL,
  `shortnum` char(6) DEFAULT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of account
-- ----------------------------

-- ----------------------------
-- Table structure for `contacts`
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `contacts_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) DEFAULT NULL,
  `phonebook_id` char(255) NOT NULL,
  `name` char(20) NOT NULL,
  `longnum` char(20) NOT NULL,
  `shortnum` char(6) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`contacts_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contacts
-- ----------------------------

-- ----------------------------
-- Table structure for `phonebook`
-- ----------------------------
DROP TABLE IF EXISTS `phonebook`;
CREATE TABLE `phonebook` (
  `phonebook_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(11) NOT NULL,
  `intr` char(32) NOT NULL,
  `logo` char(15) NOT NULL,
  PRIMARY KEY (`phonebook_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of phonebook
-- ----------------------------
