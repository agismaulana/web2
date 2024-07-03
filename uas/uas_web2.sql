/*
 Navicat Premium Data Transfer

 Source Server         : Local DB Mysql
 Source Server Type    : MySQL
 Source Server Version : 80030
 Source Host           : localhost:3306
 Source Schema         : uas_web2

 Target Server Type    : MySQL
 Target Server Version : 80030
 File Encoding         : 65001

 Date: 03/07/2024 20:21:33
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for countries
-- ----------------------------
DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of countries
-- ----------------------------
INSERT INTO `countries` VALUES (1, 'Jerman');
INSERT INTO `countries` VALUES (2, 'Swiss');
INSERT INTO `countries` VALUES (3, 'Hongaria');
INSERT INTO `countries` VALUES (4, 'Skotlandia');

-- ----------------------------
-- Table structure for grup
-- ----------------------------
DROP TABLE IF EXISTS `grup`;
CREATE TABLE `grup`  (
  `id` int(0) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of grup
-- ----------------------------
INSERT INTO `grup` VALUES (1, 'Group A');
INSERT INTO `grup` VALUES (2, 'Group B');
INSERT INTO `grup` VALUES (3, 'Group C');
INSERT INTO `grup` VALUES (4, 'Group D');

-- ----------------------------
-- Table structure for klasemens
-- ----------------------------
DROP TABLE IF EXISTS `klasemens`;
CREATE TABLE `klasemens`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `countries_id` int(0) NULL DEFAULT NULL,
  `group_id` int(0) NULL DEFAULT NULL,
  `winner` int(0) NULL DEFAULT NULL,
  `draw` int(0) NULL DEFAULT NULL,
  `lose` int(0) NULL DEFAULT NULL,
  `poin` int(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of klasemens
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
