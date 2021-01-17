-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 12:06 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `addblood`
--

CREATE TABLE `addblood` (
  `bid` int(11) NOT NULL,
  `a_hospname` varchar(30) DEFAULT NULL,
  `a_hospcont` varchar(10) DEFAULT NULL,
  `a_hospaddr` varchar(30) DEFAULT NULL,
  `a_bldgrp` varchar(5) DEFAULT NULL,
  `a_cap` varchar(10) DEFAULT NULL,
  `a_date` date DEFAULT NULL,
  `hospid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addblood`
--

INSERT INTO `addblood` (`bid`, `a_hospname`, `a_hospcont`, `a_hospaddr`, `a_bldgrp`, `a_cap`, `a_date`, `hospid`) VALUES
(1, 'JK Hospital', '9685744152', '', 'A+', '500ml', '2021-01-13', NULL),
(2, 'JK Hospital', '9685744152', 'Pune', 'A+', '500ml', '2021-01-13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `hospname` varchar(30) DEFAULT NULL,
  `hospcont` varchar(10) DEFAULT NULL,
  `hospaddr` varchar(30) DEFAULT NULL,
  `hospemail` varchar(30) DEFAULT NULL,
  `hosppass` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `hospname`, `hospcont`, `hospaddr`, `hospemail`, `hosppass`) VALUES
(1, 'JK Hospital', '9685744152', 'Pune', 'jkhospital@gmail.com', 'jkhospital'),
(2, 'JK Hospital', '9685744152', 'Pune', 'jkhospital@gmail.com', 'hfvdih'),
(3, 'kk hospital', '7485964569', 'Pune', 'kkhospital@gmail.com', 'kfdkdbbvd');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `rid` int(11) NOT NULL,
  `rec_name` varchar(30) DEFAULT NULL,
  `rec_cont` varchar(10) DEFAULT NULL,
  `rec_addr` varchar(30) DEFAULT NULL,
  `rec_age` varchar(3) DEFAULT NULL,
  `rec_bldgrp` varchar(5) DEFAULT NULL,
  `rec_bdate` date DEFAULT NULL,
  `rec_gender` varchar(10) DEFAULT NULL,
  `rec_email` varchar(30) DEFAULT NULL,
  `rec_pass` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`rid`, `rec_name`, `rec_cont`, `rec_addr`, `rec_age`, `rec_bldgrp`, `rec_bdate`, `rec_gender`, `rec_email`, `rec_pass`) VALUES
(1, 'Abcdef', '9685456987', 'pune', '24', 'A+', '2021-01-01', 'Male', 'abcdef@gmail.com', 'abcdef123');

-- --------------------------------------------------------

--
-- Table structure for table `view_req`
--

CREATE TABLE `view_req` (
  `vid` int(11) NOT NULL,
  `vbid` int(11) DEFAULT NULL,
  `v_hospname` varchar(30) DEFAULT NULL,
  `v_hospcont` varchar(10) DEFAULT NULL,
  `v_hospaddr` varchar(30) DEFAULT NULL,
  `v_bldgrp` varchar(5) DEFAULT NULL,
  `v_cap` varchar(5) DEFAULT NULL,
  `requester_name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view_req`
--

INSERT INTO `view_req` (`vid`, `vbid`, `v_hospname`, `v_hospcont`, `v_hospaddr`, `v_bldgrp`, `v_cap`, `requester_name`) VALUES
(1, 1, 'JK Hospital', '9685744152', '', 'A+', '500ml', ''),
(2, 1, 'JK Hospital', '9685744152', '', 'A+', '500ml', ''),
(3, 1, 'JK Hospital', '9685744152', '', 'A+', '500ml', 'Abcdef'),
(4, 1, 'JK Hospital', '9685744152', '', 'A+', '500ml', 'Abcdef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addblood`
--
ALTER TABLE `addblood`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `hospid` (`hospid`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `view_req`
--
ALTER TABLE `view_req`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addblood`
--
ALTER TABLE `addblood`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `view_req`
--
ALTER TABLE `view_req`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
