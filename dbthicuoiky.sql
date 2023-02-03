-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2021 at 04:09 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbthicuoiky`
--

-- --------------------------------------------------------

--
-- Table structure for table `congty`
--

CREATE TABLE `congty` (
  `id_congty` int(11) NOT NULL,
  `tencongty` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `fax` varchar(10) NOT NULL,
  PRIMARY KEY  (`id_congty`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `congty`
--

INSERT INTO `congty` (`id_congty`, `tencongty`, `diachi`, `dienthoai`, `fax`) VALUES
(1, 'Apple', 'Khu công nghiệp Sóng Thần Bình Dương', '0685355', '056696'),
(2, 'SamSung', 'Khu công nghiệp Sóng Thần 2 Đồng Nai', '0699666', '066655');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL auto_increment,
  `tensanpham` varchar(50) NOT NULL,
  `gia` varchar(50) NOT NULL,
  `mota` varchar(50) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `id_congty` int(11) NOT NULL,
  PRIMARY KEY  (`id_sanpham`),
  KEY `id_congty` (`id_congty`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensanpham`, `gia`, `mota`, `hinh`, `id_congty`) VALUES
(1, 'IPhone 11 Pro', '25000000', 'điện thoại thông minh', 'iphone11.jpg', 1),
(2, 'SamSung S21', '31000000', 'điện thoại chơi game', 'S21.png', 2);
