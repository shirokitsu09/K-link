-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2024 at 05:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `agriculturaltechnology`
--

CREATE TABLE `agriculturaltechnology` (
  `fID` varchar(255) NOT NULL DEFAULT '04',
  `mID` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Table agricultural technology major';

--
-- Dumping data for table `agriculturaltechnology`
--

INSERT INTO `agriculturaltechnology` (`fID`, `mID`, `mName`, `status`) VALUES
('04', 'T01', 'เทคโนโลยีการผลิตพืช', 1),
('04', 'T02', 'เทคโนโลยีการผลิตสัตว์และประมง', 1),
('04', 'T03', 'ปฐพีวิทยา', 1),
('04', 'T04', 'เทคโนโลยีการจัดการศัตรูพืช', 1),
('04', 'T05', 'นวัตกรรมการสื่อสารและพัฒนาการเกษตร', 1),
('04', 'T06', 'สำนักงานบริหารหลักสูตรสหวิทยาการเทคโนโลยีการเกษตร', 1);

-- --------------------------------------------------------

--
-- Table structure for table `architecture`
--

CREATE TABLE `architecture` (
  `fID` varchar(255) NOT NULL DEFAULT '02',
  `mID` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Table architecture major';

--
-- Dumping data for table `architecture`
--

INSERT INTO `architecture` (`fID`, `mID`, `mName`, `status`) VALUES
('02', 'I01', 'Bachelor of Science in Architecture', 1),
('02', 'I02', 'Bachelor of Fine Arts in Creative Arts and Curatorial Studies', 1),
('02', 'I03', 'Bachelor of Design Program in Design Intelligence for Creative Economy (International Program)', 1),
('02', 'S05', 'วิศวกรรมศาสตรบัณฑิต (วิศวกรรมโยธา) & วิทยาศาสตรบัณฑิต(สถาปัตยกรรม)', 1),
('02', 'T01', 'สถาปัตยกรรม', 1),
('02', 'T02', 'สถาปัตยกรรมภายใน', 1),
('02', 'T03', 'ศิลปอุตสาหกรรม', 1),
('02', 'T04', 'นิเทศศิลป์', 1),
('02', 'T05', 'วิจิตรศิลป์', 1),
('02', 'T06', 'ศิลปกรรม', 1);

-- --------------------------------------------------------

--
-- Table structure for table `businessadmin`
--

CREATE TABLE `businessadmin` (
  `fID` varchar(255) NOT NULL DEFAULT '14',
  `mID` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Table business administration major';

--
-- Dumping data for table `businessadmin`
--

INSERT INTO `businessadmin` (`fID`, `mID`, `mName`, `status`) VALUES
('14', 'T01', 'การจัดการ', 1),
('14', 'T02', 'บริหารธุรกิจ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dentistry`
--

CREATE TABLE `dentistry` (
  `fID` varchar(255) NOT NULL DEFAULT '20',
  `mID` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Table dentistry major';

--
-- Dumping data for table `dentistry`
--

INSERT INTO `dentistry` (`fID`, `mID`, `mName`, `status`) VALUES
('20', 'T01', 'Dentistry', 1);

-- --------------------------------------------------------

--
-- Table structure for table `educationindustialtech`
--

CREATE TABLE `educationindustialtech` (
  `fID` varchar(255) NOT NULL DEFAULT '03',
  `mID` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Table education Industial & Technology major';

--
-- Dumping data for table `educationindustialtech`
--

INSERT INTO `educationindustialtech` (`fID`, `mID`, `mName`, `status`) VALUES
('03', 'T01', 'ครุศาสตร์สถาปัตยกรรม', 1),
('03', 'T02', 'ครุศาสตร์วิศวกรรม', 1),
('03', 'T03', 'ครุศาสตร์เกษตร', 1),
('03', 'T04', 'ภาษาและสังคม', 1);

-- --------------------------------------------------------

--
-- Table structure for table `engineer`
--

CREATE TABLE `engineer` (
  `fID` varchar(255) NOT NULL DEFAULT '01',
  `mID` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Table engineer major';

--
-- Dumping data for table `engineer`
--

INSERT INTO `engineer` (`fID`, `mID`, `mName`, `status`) VALUES
('01', 'I01', 'Biomedical Engineering', 1),
('01', 'I02', 'Computer Engineering', 1),
('01', 'I03', 'Mechanical Engineering', 1),
('01', 'I04', 'Chemical Engineering', 1),
('01', 'I05', 'Civil Engineering', 1),
('01', 'I06', 'Industrial Engineering', 1),
('01', 'I07', 'Multidisciplinary Engineering', 1),
('01', 'S01', 'วิศวกรรมชีวการแพทย์ & แพทยศาสตรบัณฑิต', 1),
('01', 'S02', 'Bachelor of Engineering in Smart Materials Technology & Bachelor of Engineering in Robotics and AI Engineering', 1),
('01', 'S03', 'วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมระบบไอโอทีและสารสนเทศ & วิทยาศาสตรบัณฑิต สาขาวิชาฟิสิกส์อุตสาหกรรม', 1),
('01', 'S04', 'วิทยาศาสตรบัณฑิต สาขาวิชาวิศวกรรมแปรรูปอาหาร & วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมอุตสาหการ', 1),
('01', 'S05', 'วิศวกรรมศาสตรบัณฑิต (วิศวกรรมโยธา) & วิทยาศาสตรบัณฑิต(สถาปัตยกรรม)', 1),
('01', 'T01', 'วิศวกรรมการวัดและควบคุม', 1),
('01', 'T02', 'วิศวกรรมคอมพิวเตอร์', 1),
('01', 'T03', 'วิศวกรรมเครื่องกล', 1),
('01', 'T04', 'วิศวกรรมเคมี', 1),
('01', 'T05', 'วิศวกรรมไฟฟ้า', 1),
('01', 'T06', 'วิศวกรรมอุตสาหการ', 1),
('01', 'T07', 'วิศวกรรมอาหาร', 1),
('01', 'T08', 'วิศวกรรมอิเล็กทรอนิกส์', 1),
('01', 'T09', 'วิศวกรรมโทรคมนาคม', 1),
('01', 'T10', 'วิศวกรรมโยธา', 1),
('01', 'T11', 'วิศวกรรมเกษตร', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fID` varchar(255) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Tableคณะ';

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fID`, `fName`, `status`) VALUES
('01', 'วิศวกรรมศาสตร์', 1),
('02', 'สถาปัตยกรรมศาสตร์', 1),
('03', 'คณะครุศาสตร์อุตสาหกรรมและเทคโนโลยี', 1),
('04', 'เทคโนโลยีการเกษตร', 1),
('05', 'วิทยาศาสตร์', 1),
('06', 'เทคโนโลยีสารสนเทศ', 1),
('08', 'อุตสาหกรรมอาหาร', 1),
('10', 'วิทยาลัยเทคโนโลยีและนวัตกรรมวัสดุ', 1),
('12', 'วิทยาลัยนวัตกรรมการผลิตขั้นสูง', 1),
('13', 'วิทยาลัยนานาชาติ', 1),
('14', 'บริหารธุรกิจ', 1),
('16', 'ศิลปศาสตร์', 1),
('17', 'แพทยศาสตร์', 1),
('19', 'วิทยาลัยวิศวกรรมสังคีต', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foodindustial`
--

CREATE TABLE `foodindustial` (
  `fID` varchar(255) NOT NULL DEFAULT '08',
  `mID` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Table Food Industial major';

--
-- Dumping data for table `foodindustial`
--

INSERT INTO `foodindustial` (`fID`, `mID`, `mName`, `status`) VALUES
('08', 'S04', 'วิทยาศาสตรบัณฑิต สาขาวิชาวิศวกรรมแปรรูปอาหาร & วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมอุตสาหการ', 1),
('08', 'T01', 'อุตสาหกรรมอาหาร', 1);

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
  `member` varchar(255) NOT NULL,
  `request` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `img` text DEFAULT NULL COMMENT 'img of hobby list',
  `detail` text DEFAULT NULL,
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

INSERT INTO `hobby_db` (`hID`, `type`, `activityName`, `date[]`, `time`, `memberCount`, `memberMax`, `member`, `request`, `location`, `img`, `detail`, `tag`, `createBy`, `timeCreate`, `dateCreate`, `header`, `timeUpdate`, `dateUpdate`, `status`) VALUES
('h022410-001', 'hobby', 'หาเพื่อนไปวิ่งกันเถอะ...', 'จ.,อ.,พฤ.,ศ.,ส.,อา.', '17:00:00', 10, 3, '65010001,65010002,65010003', '65010003,65010002,66030001,66020001', 'สนามกีฬา', '65e0a51bd04153.06608761.png', '                                                            ผู้เล่นจะได้รับบทบาทเป็น โกะโจ เพื่อช่วยเหล่าผู้เล่นให้ได้มากที่สุด ขณะเดียวกันผู้เล่นคนอื่น ๆ                                                                      ', 'กีฬาและการออกกำลังกาย,ชิลๆ', 65010001, '15:00:00', '2024-02-02', 65010003, '22:39:07', '2024-02-29', 1),
('h022410-002', 'hobby', 'หมูกะทะหารสี่', 'จ.,อ.,พ.,พฤ.,ศ.,ส.,อา.', '03:00:00', 1, 10, '65010002,65010001', '65010003,65010002,66030001,66020001', 'หมูกะทะเกกี4', NULL, 'มากินหมูกะทะกันหาร 4 คน', 'อาหารการกิน,ชาบูปิ้งย่าง,ซอยเกกี', 65010002, '17:00:00', '2024-02-02', 65010002, '17:00:00', '2024-02-02', 1),
('h022412-001', 'hobby', 'วิ่งกับจง', 'จ.,พ.,ศ.', '14:05:00', 1, 5, '65010001,65010002', '', 'ห้องชร', NULL, 'วิ่งรอบเตียง', '000,111', 65010001, '22:02:36', '2024-02-12', 65010001, '22:02:36', '2024-02-12', 1),
('h022429-001', 'hobby', 'hfghfh', 'จ.', '02:05:00', 1, 20, '65010001,65010004', '65010003,65010002', 'jjghjghj', NULL, '                                            ', '', 65010001, '21:11:19', '2024-02-29', 65010001, '21:11:32', '2024-02-29', 1),
('h022429-002', 'hobby', '13', 'จ.,ศ.', '07:05:00', 1, NULL, '65010001', '65010003,65010002,66030001,66020001,65010004', '1111', NULL, '11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111                                                                                        ', '', 65010001, '21:20:07', '2024-02-29', 65010001, '10:58:59', '2024-03-04', 1),
('h022429-003', 'hobby', 'test', 'จ.,อ.,พ.', '04:10:00', 1, 15, '65010001', ',65010003', 'test1', NULL, 'test1', 'ว่าง,วิ่ง,เดินทาง,ว่าง,วิ่ง,เดินทาง', 65010001, '22:39:59', '2024-02-29', 65010001, '22:39:59', '2024-02-29', 1),
('h022429-005', 'hobby', 'test', 'จ.,อ.,พ.', '04:10:00', 1, 15, '65010001', '', 'test1', '65e0a58a074bb1.39542723.png', '                        test1                    ', 'เดินทาง,ว่าง,วิ่ง', 65010001, '22:40:58', '2024-02-29', 65010001, '01:36:35', '2024-03-01', 1),
('h032405-001', 'hobby', 'อารบิก', 'จ.,อ.,พ.', '01:15:00', 1, 15, '65010004', '65010003,65010002,66030001,66020001,65010001', 'หน้าตึกโหล', '65e72c9a7111f8.10316175.jpg', 'เต้นตอนเช้า', 'รักแม่', 65010001, '21:30:50', '2024-03-05', 65010004, '21:30:50', '2024-03-05', 1),
('h032406-001', 'hobby', 'หมูกะทะหาร 3', 'พ.', '19:00:00', 1, 3, '65010001', '', 'เก4', NULL, 'ขาด 1 ', 'หมูกระเทะ,ขาด / ', 65010001, '10:00:40', '2024-03-06', 65010001, '10:00:40', '2024-03-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `informationtechnology`
--

CREATE TABLE `informationtechnology` (
  `fID` varchar(255) NOT NULL DEFAULT '06',
  `mID` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Table IT major';

--
-- Dumping data for table `informationtechnology`
--

INSERT INTO `informationtechnology` (`fID`, `mID`, `mName`, `status`) VALUES
('06', 'T01', 'เทคโนโลยีสารสนเทศ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `internationalcollege`
--

CREATE TABLE `internationalcollege` (
  `fID` varchar(255) NOT NULL DEFAULT '13',
  `mID` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Table international college major';

--
-- Dumping data for table `internationalcollege`
--

INSERT INTO `internationalcollege` (`fID`, `mID`, `mName`, `status`) VALUES
('13', 'T01', 'วิศวกรรมซอฟต์แวร์', 1),
('13', 'T02', 'การจัดการวิศวกรรมและเทคโนโลยี', 1);

-- --------------------------------------------------------

--
-- Table structure for table `liberalart`
--

CREATE TABLE `liberalart` (
  `fID` varchar(255) NOT NULL DEFAULT '16',
  `mID` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Table liberal arts major';

--
-- Dumping data for table `liberalart`
--

INSERT INTO `liberalart` (`fID`, `mID`, `mName`, `status`) VALUES
('16', 'T01', 'ศิลปศาสตร์ประยุกต์\r\n', 1),
('16', 'T02', 'ภาษา', 1),
('16', 'T03', 'มนุษยศาสตร์และสังคมศาสตร์', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `fID` varchar(255) NOT NULL DEFAULT '17',
  `mID` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Table medicine major';

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`fID`, `mID`, `mName`, `status`) VALUES
('17', 'T01', 'แพทยศาสตรนานาชาติ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `musicengineering`
--

CREATE TABLE `musicengineering` (
  `fID` varchar(255) NOT NULL DEFAULT '19',
  `mID` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `musicengineering`
--

INSERT INTO `musicengineering` (`fID`, `mID`, `mName`, `status`) VALUES
('19', 'T01', 'วิศวกรรมดนตรีและสื่อประสม', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `notiKey` int(11) NOT NULL,
  `notiType` varchar(2) NOT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `uID(Send)` varchar(8) NOT NULL,
  `uID(Recieve)` text NOT NULL,
  `Notitime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`notiKey`, `notiType`, `detail`, `uID(Send)`, `uID(Recieve)`, `Notitime`) VALUES
(18, '03', 'h022429-001', '65010001', '65010004', '2024-03-05 09:07:48'),
(19, '02', 'h022429-001', '65010001', '65010004', '2024-03-05 14:00:02'),
(20, '02', 'h022429-002', '65010004', '65010001', '2024-03-05 14:27:22'),
(31, '01', 'h022429-001', '65010001', '65010001', '2024-03-06 01:42:52'),
(33, '02', 'h032405-001', '65010001', '65010004', '2024-03-06 03:00:49'),
(34, '01', 'h032406-001', '65010001', '65010001', '2024-03-11 14:54:51'),
(35, '01', 'h032406-001', '65010001', '65010002', '2024-03-11 14:54:53'),
(36, '01', 'h032406-001', '65010001', '65010003', '2024-03-11 14:54:54'),
(37, '01', 'h032406-001', '65010001', '65010004', '2024-03-11 14:54:54'),
(38, '01', 'h032406-001', '65010001', '65010005', '2024-03-11 14:54:55'),
(39, '01', 'h032406-001', '65010001', '65010111', '2024-03-11 14:54:55'),
(40, '01', 'h032406-001', '65010001', '66020001', '2024-03-11 14:54:57'),
(41, '01', 'h032406-001', '65010001', '65010005', '2024-03-11 14:54:58'),
(42, '01', 'h032406-001', '65010001', '66040001', '2024-03-11 14:54:59'),
(43, '01', 'h032406-001', '65010001', '66020002', '2024-03-11 14:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `reported`
--

CREATE TABLE `reported` (
  `reportNumber` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL COMMENT 'อาขาร',
  `Detail` text NOT NULL,
  `reportBy` varchar(255) NOT NULL COMMENT 'uID',
  `reportTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reportID` varchar(255) NOT NULL COMMENT 'hID',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reported`
--

INSERT INTO `reported` (`reportNumber`, `Type`, `Detail`, `reportBy`, `reportTime`, `reportID`, `status`) VALUES
(26, 'Spam', 'spamspamspam', '65010001', '2024-02-26 18:54:22', 'h022410-002', 0),
(27, 'Spam', '', '65010001', '2024-02-26 19:23:57', 'h022410-001', 0),
(28, 'ความรุนแรง', '6666', '65010001', '2024-02-26 19:57:12', 'h022410-001', 0),
(29, 'การก่อการร้าย', 'มีการโพสต์เนื้อหาที่รุนแรง', '65010001', '2024-02-26 20:17:32', 'h022410-002', 0),
(30, 'อนาจาร', 'ไอ่ชรอัลป้าก้า', '65010001', '2024-03-04 11:00:38', 'h022429-001', 0);

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
-- Table structure for table `science`
--

CREATE TABLE `science` (
  `fID` varchar(255) NOT NULL DEFAULT '05',
  `mID` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Table science major';

--
-- Dumping data for table `science`
--

INSERT INTO `science` (`fID`, `mID`, `mName`, `status`) VALUES
('05', 'T01', 'คณิตศาสตร์', 1),
('05', 'T02', 'วิทยาการคอมพิวเตอร์', 1),
('05', 'T03', 'เคมี', 1),
('05', 'T04', 'ชีววิทยา', 1),
('05', 'T05', 'ฟิสิกส์', 1),
('05', 'T06', 'สถิติ', 1),
('05', 'T07', 'ศูนย์วิเคราะห์ข้อมูลดิจิทัลอัจฉริยะพระจอมเกล้าลาดกระบัง', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uID` int(8) NOT NULL,
  `username` text NOT NULL,
  `password` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `aboutme` text DEFAULT NULL,
  `phoneNumber` varchar(12) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `fID` text NOT NULL,
  `mID` varchar(255) NOT NULL,
  `profileImage` varchar(255) DEFAULT NULL,
  `rID` text NOT NULL DEFAULT '100',
  `key` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `bookmark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uID`, `username`, `password`, `fullname`, `aboutme`, `phoneNumber`, `email`, `fID`, `mID`, `profileImage`, `rID`, `key`, `status`, `bookmark`) VALUES
(65010001, 'AIJHONG', 12345678, 'Aijong Jomkan', 'I Love JustiNa_Xie', '087-999-9999', '65010001@kmitl.ac.th', '01', 'I01', NULL, '100', NULL, 1, ',h022410-002'),
(65010002, 'JustiNa_Xie', 12345678, 'Aichorn Fudfid', 'JustiNa_Xie Fudfid Fudfid', '087-999-9999', '65010002@kmitl.ac.th', '02', 'T02', NULL, '100', NULL, 1, NULL),
(65010003, 'Sponge', 12345678, 'SpongBob Square', 'I am Sponge XD', '0212344414', '65010004@kmitl.ac.th', '03', 'T03', NULL, '100', NULL, 1, NULL),
(65010004, 'Patrick', 12345678, 'Starlord XD', 'I am a starfish', '0879949996', '65010004@kmitl.ac.th', '04', 'T04', NULL, '100', NULL, 1, NULL),
(65010005, 'Mr.Crab', 12345678, 'Crispy Crab', 'I\'m just a crab', '0378874569', '65010005@kmitl.ac.th', '05', 'T05', NULL, '100', NULL, 1, NULL),
(65010111, 'Jack', 12345678, 'Slain', NULL, NULL, '65010111@kmitl.ac.th', '', 'T12', NULL, '100', NULL, 1, NULL),
(66020001, 'Mr.John', 12345678, 'Johny Vonkra', 'We are champion', '087-999-9999', '66020001@kmitl.ac.th\r\n', '02', 'T02', NULL, '100', NULL, 1, 'h022412-001,h022410-001'),
(66020002, 'NuNa', 12345678, 'Kasidij Jenpa', 'KingCobra', '087-999-9999', '66020002@kmitl.ac.th\r\n', '02', 'T01', NULL, '100', NULL, 1, NULL),
(66030001, 'Chorn', 12345678, 'Ink Chanakan', 'this is HinLekFai', '087-999-9999', '66030001@kmitl.ac.th\r\n', '03', 'T01', NULL, '100', NULL, 1, NULL),
(66040001, 'Nomy', 12345678, 'Jakgrew Kincum', 'Voranuth', '087-999-9999', '66040001@kmitl.ac.th\r\n', '04', 'T01', NULL, '100', NULL, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agriculturaltechnology`
--
ALTER TABLE `agriculturaltechnology`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `architecture`
--
ALTER TABLE `architecture`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `businessadmin`
--
ALTER TABLE `businessadmin`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `dentistry`
--
ALTER TABLE `dentistry`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `educationindustialtech`
--
ALTER TABLE `educationindustialtech`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `engineer`
--
ALTER TABLE `engineer`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fID`);

--
-- Indexes for table `foodindustial`
--
ALTER TABLE `foodindustial`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `hobby_db`
--
ALTER TABLE `hobby_db`
  ADD PRIMARY KEY (`hID`);

--
-- Indexes for table `informationtechnology`
--
ALTER TABLE `informationtechnology`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `internationalcollege`
--
ALTER TABLE `internationalcollege`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `liberalart`
--
ALTER TABLE `liberalart`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `musicengineering`
--
ALTER TABLE `musicengineering`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`notiKey`);

--
-- Indexes for table `reported`
--
ALTER TABLE `reported`
  ADD PRIMARY KEY (`reportNumber`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`rID`);

--
-- Indexes for table `science`
--
ALTER TABLE `science`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uID`),
  ADD UNIQUE KEY `username` (`username`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `notiKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `reported`
--
ALTER TABLE `reported`
  MODIFY `reportNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
