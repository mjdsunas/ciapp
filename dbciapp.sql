/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : dbciapp

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-08-02 11:30:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tblitem`
-- ----------------------------
DROP TABLE IF EXISTS `tblitem`;
CREATE TABLE `tblitem` (
  `image` varchar(50) DEFAULT 'avatar.png',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `price` float DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tblitem
-- ----------------------------
INSERT INTO `tblitem` VALUES ('4.jpg', '4', 'Banana', ' Yummy     ', '50', '5');
INSERT INTO `tblitem` VALUES ('5.jpg', '5', 'Straberry', 'Red and Sweet', '600', '6');
INSERT INTO `tblitem` VALUES ('8.png', '8', 'Melon', 'Refreshing', '56', '7');
INSERT INTO `tblitem` VALUES ('avatar.png', '10', 'Avocado', 'Loaded with fiber ', '12', '9');
