-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 ديسمبر 2017 الساعة 02:41
-- إصدار الخادم: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpms`
--

-- --------------------------------------------------------

--
-- بنية الجدول `employees`
--

CREATE TABLE `employees` (
  `id_employee` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `employees`
--

INSERT INTO `employees` (`id_employee`, `f_name`, `l_name`, `email`, `password`) VALUES
(1, 'khalled', 'almliki', 'khalledalmliki@gmail.com', '123456'),
(2, 'hammam', 'ali gaber', 'hammamo2010@gmail.com', '123456');

-- --------------------------------------------------------

--
-- بنية الجدول `employee_recive_proposal`
--

CREATE TABLE `employee_recive_proposal` (
  `id_employee` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- بنية الجدول `employee_recive_report`
--

CREATE TABLE `employee_recive_report` (
  `id_employee` int(11) NOT NULL,
  `id_report` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- بنية الجدول `participants_researchers`
--

CREATE TABLE `participants_researchers` (
  `id_researcher` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `id_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- بنية الجدول `projects`
--

CREATE TABLE `projects` (
  `id_project` int(11) NOT NULL,
  `project_title` varchar(50) NOT NULL,
  `budget` varchar(50) NOT NULL,
  `research_domain` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `projects`
--

INSERT INTO `projects` (`id_project`, `project_title`, `budget`, `research_domain`) VALUES
(1, 'internet', '100 M dollars : ) ', 'no thing'),
(2, 'internt 2', '200 M dollars : ) ', 'no thing');

-- --------------------------------------------------------

--
-- بنية الجدول `proposals`
--

CREATE TABLE `proposals` (
  `id_proposal` int(11) NOT NULL,
  `proposal_title` text NOT NULL,
  `state` varchar(50) NOT NULL DEFAULT 'under service',
  `File` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `proposals`
--

INSERT INTO `proposals` (`id_proposal`, `proposal_title`, `state`, `File`) VALUES
(30, 'blockchain tecnology', 'under service', ''),
(31, 'agumnted reality', 'under service', ''),
(32, 'internet', 'accepted', ''),
(33, 'networks', 'rjected', ''),
(34, 'nano tecnology', 'under service', ''),
(35, 'hammam project', 'under service', ''),
(37, '', 'under service', ''),
(38, '', 'under service', ''),
(39, '', 'under service', ''),
(40, '', 'under service', ''),
(41, '', 'under service', ''),
(42, '', 'under service', ''),
(43, '', 'under service', ''),
(44, '', 'under service', ''),
(45, '', 'under service', ''),
(46, 'on line path planning of the multiple mobile system', 'under service', 'mapping project teq.png');

-- --------------------------------------------------------

--
-- بنية الجدول `reports`
--

CREATE TABLE `reports` (
  `id_report` int(11) NOT NULL,
  `report_name` varchar(50) NOT NULL,
  `id_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- بنية الجدول `researchers`
--

CREATE TABLE `researchers` (
  `id_researcher` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `researchers`
--

INSERT INTO `researchers` (`id_researcher`, `f_name`, `l_name`, `email`, `specialization`, `department`, `password`) VALUES
(1, 'khalled', 'almliki', 'khalledalmliki@gmail.com', 'program', 'computer science', '123456'),
(2, 'nasser', 'alnasser', 'nasser2221@gmail.com', 'computer science', 'computer science', '123456'),
(3, 'hammam', 'jaber', 'hammam@gmail.com', 'cs', 'medicine', '123456'),
(4, 'ameen', 'alameen', 'ameen111@gmail.com', 'cs', 'medicine', '123456'),
(5, 'dr-mohammed', 'sirity', 'mfsrirti@imamu.edu', 'networks', 'Mathematics', '123456'),
(6, 'hammam bin', 'gaber', 'hammamo2010@gmail.com', 'artificial inteligance', 'computer science', '123456');

-- --------------------------------------------------------

--
-- بنية الجدول `researcher_has_project`
--

CREATE TABLE `researcher_has_project` (
  `id_researcher` int(11) NOT NULL,
  `id_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `researcher_has_project`
--

INSERT INTO `researcher_has_project` (`id_researcher`, `id_project`) VALUES
(1, 2),
(3, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `researcher_has_proposal`
--

CREATE TABLE `researcher_has_proposal` (
  `id_researcher` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `researcher_has_proposal`
--

INSERT INTO `researcher_has_proposal` (`id_researcher`, `id_proposal`) VALUES
(1, 33),
(1, 34),
(1, 35),
(1, 46),
(2, 32),
(3, 33),
(4, 31),
(5, 30),
(5, 31);

-- --------------------------------------------------------

--
-- بنية الجدول `submit_report`
--

CREATE TABLE `submit_report` (
  `id_researcher` int(11) NOT NULL,
  `id_report` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id_employee`);

--
-- Indexes for table `employee_recive_proposal`
--
ALTER TABLE `employee_recive_proposal`
  ADD PRIMARY KEY (`id_employee`,`id_proposal`),
  ADD KEY `id_proposal` (`id_proposal`);

--
-- Indexes for table `employee_recive_report`
--
ALTER TABLE `employee_recive_report`
  ADD PRIMARY KEY (`id_report`,`id_employee`),
  ADD KEY `id_employee` (`id_employee`);

--
-- Indexes for table `participants_researchers`
--
ALTER TABLE `participants_researchers`
  ADD PRIMARY KEY (`id_researcher`,`id_proposal`,`id_project`),
  ADD KEY `id_proposal` (`id_proposal`),
  ADD KEY `id_project` (`id_project`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id_report`),
  ADD UNIQUE KEY `id_project` (`id_project`);

--
-- Indexes for table `researchers`
--
ALTER TABLE `researchers`
  ADD PRIMARY KEY (`id_researcher`);

--
-- Indexes for table `researcher_has_project`
--
ALTER TABLE `researcher_has_project`
  ADD PRIMARY KEY (`id_researcher`,`id_project`),
  ADD UNIQUE KEY `id_researcher` (`id_researcher`),
  ADD UNIQUE KEY `id_project` (`id_project`);

--
-- Indexes for table `researcher_has_proposal`
--
ALTER TABLE `researcher_has_proposal`
  ADD PRIMARY KEY (`id_researcher`,`id_proposal`),
  ADD KEY `id_proposal` (`id_proposal`);

--
-- Indexes for table `submit_report`
--
ALTER TABLE `submit_report`
  ADD PRIMARY KEY (`id_researcher`,`id_report`),
  ADD KEY `id_report` (`id_report`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `researchers`
--
ALTER TABLE `researchers`
  MODIFY `id_researcher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `employee_recive_proposal`
--
ALTER TABLE `employee_recive_proposal`
  ADD CONSTRAINT `employee_recive_proposal_ibfk_1` FOREIGN KEY (`id_employee`) REFERENCES `employees` (`id_employee`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_recive_proposal_ibfk_2` FOREIGN KEY (`id_proposal`) REFERENCES `proposals` (`id_proposal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `employee_recive_report`
--
ALTER TABLE `employee_recive_report`
  ADD CONSTRAINT `employee_recive_report_ibfk_1` FOREIGN KEY (`id_employee`) REFERENCES `employees` (`id_employee`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_recive_report_ibfk_2` FOREIGN KEY (`id_report`) REFERENCES `reports` (`id_report`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `participants_researchers`
--
ALTER TABLE `participants_researchers`
  ADD CONSTRAINT `participants_researchers_ibfk_1` FOREIGN KEY (`id_researcher`) REFERENCES `researchers` (`id_researcher`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participants_researchers_ibfk_2` FOREIGN KEY (`id_proposal`) REFERENCES `proposals` (`id_proposal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participants_researchers_ibfk_3` FOREIGN KEY (`id_project`) REFERENCES `projects` (`id_project`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`id_project`) REFERENCES `projects` (`id_project`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `researcher_has_project`
--
ALTER TABLE `researcher_has_project`
  ADD CONSTRAINT `researcher_has_project_ibfk_1` FOREIGN KEY (`id_researcher`) REFERENCES `researchers` (`id_researcher`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `researcher_has_project_ibfk_2` FOREIGN KEY (`id_project`) REFERENCES `projects` (`id_project`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `researcher_has_proposal`
--
ALTER TABLE `researcher_has_proposal`
  ADD CONSTRAINT `researcher_has_proposal_ibfk_1` FOREIGN KEY (`id_proposal`) REFERENCES `proposals` (`id_proposal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `researcher_has_proposal_ibfk_2` FOREIGN KEY (`id_researcher`) REFERENCES `researchers` (`id_researcher`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `submit_report`
--
ALTER TABLE `submit_report`
  ADD CONSTRAINT `submit_report_ibfk_1` FOREIGN KEY (`id_researcher`) REFERENCES `researchers` (`id_researcher`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `submit_report_ibfk_2` FOREIGN KEY (`id_report`) REFERENCES `reports` (`id_report`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
