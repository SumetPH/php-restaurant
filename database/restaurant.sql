-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2019 at 04:52 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_ID` varchar(5) NOT NULL COMMENT 'รหัสเมนูอาหาร',
  `menu_Name` varchar(50) NOT NULL COMMENT 'ชื่อเมนูอาหาร',
  `menu_Type` int(2) NOT NULL COMMENT 'ประเภทอาหาร',
  `menu_price` int(4) DEFAULT NULL COMMENT 'ราคาอาหาร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_ID`, `menu_Name`, `menu_Type`, `menu_price`) VALUES
('m0001', 'ข้าวผัดอเมริกัน', 1, 70),
('m0002', 'ไอศครีม', 2, 50),
('m0003', 'ข้าวผัดปู', 1, 80),
('m0004', 'ผัดมักกะโรนีกุ้ง', 1, 100),
('m0005', 'ปอเปี๊ยะสด', 3, 60),
('m0006', 'ปอเปี๊ยะทอด', 3, 60),
('m0007', 'ขนมกล้วย', 2, 30),
('m0011', 'มาม่า', 3, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_ID`);
