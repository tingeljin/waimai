-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 12 月 20 日 14:39
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `waimai`
--

-- --------------------------------------------------------

--
-- 表的结构 `wm_cuisine_menu`
--

CREATE TABLE IF NOT EXISTS `wm_cuisine_menu` (
  `cuisine_id` int(11) NOT NULL AUTO_INCREMENT,
  `cuisine_shop_id` int(11) DEFAULT NULL,
  `cuisine_type_id` int(11) DEFAULT NULL,
  `cuisine_name` varchar(50) DEFAULT NULL,
  `cuisine_price` double(5,2) DEFAULT NULL,
  PRIMARY KEY (`cuisine_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wm_cuisine_type`
--

CREATE TABLE IF NOT EXISTS `wm_cuisine_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wm_shops_cuisinetype`
--

CREATE TABLE IF NOT EXISTS `wm_shops_cuisinetype` (
  `shop_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `type_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wm_takeaway_shops`
--

CREATE TABLE IF NOT EXISTS `wm_takeaway_shops` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(50) NOT NULL,
  `shop_tel1` bigint(12) NOT NULL,
  `shop_tel2` bigint(12) DEFAULT NULL,
  `shop_address` varchar(100) DEFAULT NULL,
  `shop_opentime` time DEFAULT NULL,
  `shop_closetime` time DEFAULT NULL,
  `shop_transportationcosts` double(5,0) DEFAULT NULL,
  `shop_deliveryfee` double(5,0) DEFAULT NULL,
  `shop_averagecost` double(5,0) DEFAULT NULL,
  `shop_remark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
