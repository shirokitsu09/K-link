-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 08:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k-link_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `hobby_db`
--

CREATE TABLE `hobby_db` (
  `hID` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `activityName` text NOT NULL,
  `date[]` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `memberCount` int(11) NOT NULL DEFAULT 1,
  `memberMax` int(11) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `detail` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `createBy` int(8) NOT NULL COMMENT 'uID',
  `timeCreate` time NOT NULL,
  `dateCreate` date NOT NULL,
  `header` int(8) NOT NULL COMMENT 'หัวหน้ากลุ่ม(uID)',
  `timeUpdate` time NOT NULL,
  `dateUpdate` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT 'สถานะโพสต์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hobby_db`
--

INSERT INTO `hobby_db` (`hID`, `type`, `activityName`, `date[]`, `time`, `memberCount`, `memberMax`, `location`, `detail`, `image`, `tag`, `createBy`, `timeCreate`, `dateCreate`, `header`, `timeUpdate`, `dateUpdate`, `status`) VALUES
('h022410-001', 'hobby', 'หาเพื่อนไปวิ่งกันเถอะ232...', 'วันจันทร์,อังคาร,พฤหัสบดี,ศุกร์,เสาร์,อาทิตย์', '17:00:00', 1, 10, 'สนามกีฬา', 'ผู้เล่นจะได้รับบทบาทเป็น โกะโจ เพื่อช่วยเหล่าผู้เล่นให้ได้มากที่สุด ขณะเดียวกันผู้เล่นคนอื่น ๆ', NULL, 'กีฬาและการออกกำลังกาย,ชิลๆ', 65010001, '15:00:00', '2024-02-02', 65010001, '15:00:00', '2024-02-02', 1),
('h022410-002', 'hobby', 'หมูกะทะหารสี่', 'จันทร์,อังคาร,พุธ,พฤหัสบดี,ศุกร์,เสาร์,อาทิตย์', '03:00:00', 1, 10, 'หมูกะทะเกกี4', 'มากินหมูกะทะกันหาร 4 คน', NULL, 'อาหารการกิน,ชาบูปิ้งย่าง,ซอยเกกี', 65010002, '17:00:00', '2024-02-02', 65010002, '17:00:00', '2024-02-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `rID` int(3) NOT NULL,
  `rName` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`rID`, `rName`, `status`) VALUES
(100, 'user', 1),
(500, 'Admin', 1),
(900, 'Super Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uID` int(8) NOT NULL,
  `username` text NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `aboutme` text DEFAULT NULL,
  `phoneNumber` varchar(12) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `fID` text NOT NULL,
  `profileImage` varchar(255) DEFAULT NULL,
  `rID` text NOT NULL DEFAULT '100',
  `key` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uID`, `username`, `fullname`, `aboutme`, `phoneNumber`, `email`, `fID`, `profileImage`, `rID`, `key`, `status`) VALUES
(65010001, 'AIJHONG', 'Aijong Jomkan', 'I Love JustiNa_Xie', '087-999-9999', '65010xxx@kmitl.ac.th', '010', NULL, '100', NULL, 1),
(65010002, 'JustiNa_Xie', 'Aichorn Fudfid', 'I Love JustiNa_Xie Fudfid Fudfid', '087-999-9999', '65010xxx@kmitl.ac.th', '010', NULL, '100', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hobby_db`
--
ALTER TABLE `hobby_db`
  ADD PRIMARY KEY (`hID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`rID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uID`),
  ADD UNIQUE KEY `username` (`username`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
