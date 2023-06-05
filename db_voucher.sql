/*
Navicat MySQL Data Transfer

Source Server         : Kashidota
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_voucher

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-06-05 15:00:13
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `t_game`
-- ----------------------------
DROP TABLE IF EXISTS `t_game`;
CREATE TABLE `t_game` (
  `id_game` int(11) NOT NULL AUTO_INCREMENT,
  `nama_game` varchar(50) DEFAULT NULL,
  `foto_game` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_game`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_game
-- ----------------------------
INSERT INTO `t_game` VALUES ('1', 'Point Blank', null);
INSERT INTO `t_game` VALUES ('2', 'Mobile Legends', null);
INSERT INTO `t_game` VALUES ('3', 'Clash Royale', null);
INSERT INTO `t_game` VALUES ('4', 'Free Fire', null);
INSERT INTO `t_game` VALUES ('5', 'Pubg Mobile', null);
INSERT INTO `t_game` VALUES ('6', 'FIFA Mobile', null);
INSERT INTO `t_game` VALUES ('7', 'Genshin Impact', null);
INSERT INTO `t_game` VALUES ('8', 'Call Of Duty Mobile', null);

-- ----------------------------
-- Table structure for `t_pembayaran`
-- ----------------------------
DROP TABLE IF EXISTS `t_pembayaran`;
CREATE TABLE `t_pembayaran` (
  `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pembayaran` varchar(50) DEFAULT NULL,
  `input_pembayaran` int(11) DEFAULT NULL,
  `foto_pembayaran` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_pembayaran
-- ----------------------------

-- ----------------------------
-- Table structure for `t_struk`
-- ----------------------------
DROP TABLE IF EXISTS `t_struk`;
CREATE TABLE `t_struk` (
  `id_struk` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` datetime DEFAULT NULL,
  `id_voucher` int(11) DEFAULT NULL,
  `id_pembayaran` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_struk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_struk
-- ----------------------------

-- ----------------------------
-- Table structure for `t_voucher`
-- ----------------------------
DROP TABLE IF EXISTS `t_voucher`;
CREATE TABLE `t_voucher` (
  `id_voucher` int(11) NOT NULL AUTO_INCREMENT,
  `nama_voucher` varchar(50) DEFAULT NULL,
  `harga_voucher` varchar(50) DEFAULT NULL,
  `id_game` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_voucher`),
  KEY `fk_game_voucher` (`id_game`),
  CONSTRAINT `fk_game_voucher` FOREIGN KEY (`id_game`) REFERENCES `t_game` (`id_game`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_voucher
-- ----------------------------
INSERT INTO `t_voucher` VALUES ('1', '1200 PB Cash', '9500', '1');
INSERT INTO `t_voucher` VALUES ('2', '2400 PB Cash', '21000', '1');
INSERT INTO `t_voucher` VALUES ('3', '3600 PB Cash', '31000', '1');
