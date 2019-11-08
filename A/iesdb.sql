-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2019 at 08:34 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `accountid` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `loginname` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `type` varchar(1) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'T',
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountid`, `name`, `loginname`, `password`, `type`, `status`, `date`) VALUES
('58ec8d07b3b0c', 'Drishay ', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 'A', 'T', '11-04-2017 10:00:07 '),
('590d4f4b323b1', 'faculty', 'd561c7c03c1f2831904823a95835ff5f', 'd561c7c03c1f2831904823a95835ff5f', 'F', 'T', '06-05-2017 06:21:31 '),
('590dd0729ce48', 'faculty2', '9095a17ed07b9a53cd951db509606a70', '9095a17ed07b9a53cd951db509606a70', 'F', 'T', '06-05-2017 03:32:34 '),
('5910c3d4ef6e6', 'faculty3', '7001ba9ee8f8fd53a8e3b625c899dd9a', '7001ba9ee8f8fd53a8e3b625c899dd9a', 'F', 'T', '08-05-2017 09:15:32 '),
('5910c3f16e662', 'faculty4', 'c3185f7c7e92a2c34149cc324d30f8ff', 'c3185f7c7e92a2c34149cc324d30f8ff', 'F', 'T', '08-05-2017 09:16:01 '),
('591902b3908b5', 'lol', 'c4ca4238a0b923820dcc509a6f75849b', 'c4ca4238a0b923820dcc509a6f75849b', 'F', 'T', '15-05-2017 03:21:55 '),
('5abcb56e2625c', 'sunny', 'c4ca4238a0b923820dcc509a6f75849b', 'c4ca4238a0b923820dcc509a6f75849b', 'F', 'T', '29-03-2018 11:44:14 '),
('5ae597b3d1cf1', '1', 'c4ca4238a0b923820dcc509a6f75849b', 'c4ca4238a0b923820dcc509a6f75849b', 'F', 'T', '29-04-2018 12:00:19 ');

-- --------------------------------------------------------

--
-- Table structure for table `allotsubject`
--

CREATE TABLE IF NOT EXISTS `allotsubject` (
  `allotid` varchar(50) NOT NULL,
  `facultyname` varchar(50) NOT NULL,
  `subjectname` varchar(50) NOT NULL,
  `subjectcode` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'T',
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allotsubject`
--

INSERT INTO `allotsubject` (`allotid`, `facultyname`, `subjectname`, `subjectcode`, `session`, `stream`, `semester`, `status`, `date`) VALUES
('5910c63cb1f3c', 'faculty', 'Computer Fundamentals', 'BCA-101', '2013-2014', 'BCA', 'Sem-I', 'T', '08-05-2017 09:25:48 pm'),
('5910c6453eec5', 'faculty2', 'General English', 'AA-101', '2014-2015', 'BCA', 'Sem-I', 'T', '08-05-2017 09:25:57 pm'),
('5910c64c84a21', 'faculty3', 'Mathematics', 'MA-101', '2014-2015', 'BCA', 'Sem-I', 'T', '08-05-2017 09:26:04 pm'),
('5910c65b25bf6', 'faculty4', 'Problem solving using C-language', 'BCA-102', '2014-2015', 'BCA', 'Sem-I', 'T', '08-05-2017 09:26:19 pm');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `assignmentid` varchar(50) NOT NULL,
  `rollno` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `stream` varchar(10) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `assignment` varchar(30) NOT NULL,
  `session` varchar(30) NOT NULL,
  `maxmarks` varchar(30) NOT NULL,
  `obtmarks` varchar(30) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'T',
  `date` varchar(30) NOT NULL,
  `refstudentid` varchar(50) NOT NULL,
  `lstatus` varchar(1) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignmentid`, `rollno`, `name`, `stream`, `semester`, `subject`, `assignment`, `session`, `maxmarks`, `obtmarks`, `status`, `date`, `refstudentid`, `lstatus`) VALUES
('591530b4d3857', 1, 'Danish Mehra', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 1', '2014-2015', '5', '5', 'T', '12-05-2017 05:49:08 AM', '58efa9ca112ae', 'U'),
('591530bdb46ec', 2, 'Drishay Gupta ', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 1', '2014-2015', '5', '5', 'T', '12-05-2017 05:49:17 AM', '58ef40ec2ce0d', 'U'),
('591530d40055d', 3, 'Rohit Thakur', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 05:49:40 AM', '58efb06874449', 'U'),
('591530d99b093', 4, 'Rishab Jain', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 1', '2014-2015', '5', '5', 'T', '12-05-2017 05:49:45 AM', '58f263af94cc2', 'U'),
('591530e02c2f6', 5, 'Akshay Dogra', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 1', '2014-2015', '5', '5', 'T', '12-05-2017 05:49:52 AM', '590cc5e255e3c', 'U'),
('591530e991920', 6, 'Sidharth Singh', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 1', '2014-2015', '5', '3', 'T', '12-05-2017 05:50:01 AM', '5910b83d665da', 'U'),
('591530f6bd64e', 7, 'Nittan Kumar', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 1', '2014-2015', '5', '3', 'T', '12-05-2017 05:50:14 AM', '5910b89fc3d94', 'U'),
('5915310252883', 8, 'Tanya Dogra', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 05:50:26 AM', '5910b9179a091', 'U'),
('5915310bbc426', 10, 'Zakir Hussain ', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 05:50:35 AM', '5910ba1c15413', 'U'),
('5915318dbfe31', 1, 'Danish Mehra', 'BCA', 'Sem-I', 'General English', 'Assignment 1', '2014-2015', '5', '5', 'T', '12-05-2017 05:52:45 AM', '58efa9ca112ae', 'U'),
('591531966dd25', 2, 'Drishay Gupta ', 'BCA', 'Sem-I', 'General English', 'Assignment 1', '2014-2015', '5', '5', 'T', '12-05-2017 05:52:54 AM', '58ef40ec2ce0d', 'U'),
('5915319eec672', 3, 'Rohit Thakur', 'BCA', 'Sem-I', 'General English', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 05:53:02 AM', '58efb06874449', 'U'),
('591531b3c5f2d', 4, 'Rishab Jain', 'BCA', 'Sem-I', 'General English', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 05:53:23 AM', '58f263af94cc2', 'U'),
('591531be7fdf5', 5, 'Akshay Dogra', 'BCA', 'Sem-I', 'General English', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 05:53:34 AM', '590cc5e255e3c', 'U'),
('5915321a45448', 6, 'Sidharth Singh', 'BCA', 'Sem-I', 'General English', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 05:55:06 AM', '5910b83d665da', 'U'),
('59153223e525e', 7, 'Nittan Kumar', 'BCA', 'Sem-I', 'General English', 'Assignment 1', '2014-2015', '5', '3', 'T', '12-05-2017 05:55:15 AM', '5910b89fc3d94', 'U'),
('5915322c4e813', 8, 'Tanya Dogra', 'BCA', 'Sem-I', 'General English', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 05:55:24 AM', '5910b9179a091', 'U'),
('59153238acc38', 9, 'Arjun Singh', 'BCA', 'Sem-I', 'General English', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 05:55:36 AM', '5910b98d18ca4', 'U'),
('5915324066775', 10, 'Zakir Hussain ', 'BCA', 'Sem-I', 'General English', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 05:55:44 AM', '5910ba1c15413', 'U'),
('5915328d4e0dd', 1, 'Danish Mehra', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 1', '2014-2015', '5', '5', 'T', '12-05-2017 05:57:01 AM', '58efa9ca112ae', 'U'),
('591532d4bf625', 2, 'Drishay Gupta ', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 05:58:12 AM', '58ef40ec2ce0d', 'U'),
('591532e61b854', 3, 'Rohit Thakur', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 1', '2014-2015', '5', '5', 'T', '12-05-2017 05:58:30 AM', '58efb06874449', 'U'),
('591532efa5930', 4, 'Rishab Jain', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 1', '2014-2015', '5', '5', 'T', '12-05-2017 05:58:39 AM', '58f263af94cc2', 'U'),
('5915331a62b79', 5, 'Akshay Dogra', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 1', '2014-2015', '5', '5', 'T', '12-05-2017 05:59:22 AM', '590cc5e255e3c', 'U'),
('591533222cae0', 6, 'Sidharth Singh', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 05:59:30 AM', '5910b83d665da', 'U'),
('5915332ba196c', 7, 'Nittan Kumar', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 05:59:39 AM', '5910b89fc3d94', 'U'),
('5915333480672', 8, 'Tanya Dogra', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 05:59:48 AM', '5910b9179a091', 'U'),
('5915333c4f19f', 9, 'Arjun Singh', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 1', '2014-2015', '5', '5', 'T', '12-05-2017 05:59:56 AM', '5910b98d18ca4', 'U'),
('5915334449d88', 10, 'Zakir Hussain ', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 06:00:04 AM', '5910ba1c15413', 'U'),
('5915343d9ba8d', 1, 'Danish Mehra', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 1', '2014-2015', '5', '5', 'T', '12-05-2017 06:04:13 AM', '58efa9ca112ae', 'U'),
('59153444d4b4c', 2, 'Drishay Gupta ', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 1', '2014-2015', '5', '5', 'T', '12-05-2017 06:04:20 AM', '58ef40ec2ce0d', 'U'),
('5915344a31c79', 3, 'Rohit Thakur', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 06:04:26 AM', '58efb06874449', 'U'),
('591534507e806', 4, 'Rishab Jain', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 06:04:32 AM', '58f263af94cc2', 'U'),
('5915345639464', 5, 'Akshay Dogra', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 1', '2014-2015', '5', '5', 'T', '12-05-2017 06:04:38 AM', '590cc5e255e3c', 'U'),
('5915345bd42c0', 6, 'Sidharth Singh', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 1', '2014-2015', '5', '3', 'T', '12-05-2017 06:04:43 AM', '5910b83d665da', 'U'),
('59153463bee6a', 7, 'Nittan Kumar', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 1', '2014-2015', '5', '4', 'T', '12-05-2017 06:04:51 AM', '5910b89fc3d94', 'U'),
('5915348d6aabf', 8, 'Tanya Dogra', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 1', '2014-2015', '5', '2', 'T', '12-05-2017 06:05:33 AM', '5910b9179a091', 'U'),
('591534933d467', 9, 'Arjun Singh', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 1', '2014-2015', '5', '3', 'T', '12-05-2017 06:05:39 AM', '5910b98d18ca4', 'U'),
('5915349c2be97', 10, 'Zakir Hussain ', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 1', '2014-2015', '5', '5', 'T', '12-05-2017 06:05:48 AM', '5910ba1c15413', 'U'),
('59153509970da', 1, 'Danish Mehra', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 2', '2014-2015', '5', '5', 'T', '12-05-2017 06:07:37 AM', '58efa9ca112ae', 'U'),
('59153511249e0', 2, 'Drishay Gupta ', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 2', '2014-2015', '5', '5', 'T', '12-05-2017 06:07:45 AM', '58ef40ec2ce0d', 'U'),
('59153516e03b3', 3, 'Rohit Thakur', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:07:50 AM', '58efb06874449', 'U'),
('5915351d444ab', 4, 'Rishab Jain', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:07:57 AM', '58f263af94cc2', 'U'),
('5915352637524', 5, 'Akshay Dogra', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:08:06 AM', '590cc5e255e3c', 'U'),
('591535d01c63f', 6, 'Sidharth Singh', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:10:56 AM', '5910b83d665da', 'U'),
('591535d5f3c8c', 7, 'Nittan Kumar', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:11:01 AM', '5910b89fc3d94', 'U'),
('591535db64bb7', 8, 'Tanya Dogra', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 2', '2014-2015', '5', '3', 'T', '12-05-2017 06:11:07 AM', '5910b9179a091', 'U'),
('591535e18656f', 9, 'Arjun Singh', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 2', '2014-2015', '5', '3', 'T', '12-05-2017 06:11:13 AM', '5910b98d18ca4', 'U'),
('591535e99fb2f', 10, 'Zakir Hussain ', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 2', '2014-2015', '5', '5', 'T', '12-05-2017 06:11:21 AM', '5910ba1c15413', 'U'),
('5915364b626e2', 1, 'Danish Mehra', 'BCA', 'Sem-I', 'General English', 'Assignment 2', '2014-2015', '5', '5', 'T', '12-05-2017 06:12:59 AM', '58efa9ca112ae', 'U'),
('5915365324ad4', 2, 'Drishay Gupta ', 'BCA', 'Sem-I', 'General English', 'Assignment 2', '2014-2015', '5', '5', 'T', '12-05-2017 06:13:07 AM', '58ef40ec2ce0d', 'U'),
('5915365b61566', 3, 'Rohit Thakur', 'BCA', 'Sem-I', 'General English', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:13:15 AM', '58efb06874449', 'U'),
('59153662ae036', 4, 'Rishab Jain', 'BCA', 'Sem-I', 'General English', 'Assignment 2', '2014-2015', '5', '3', 'T', '12-05-2017 06:13:22 AM', '58f263af94cc2', 'U'),
('5915366a1f025', 5, 'Akshay Dogra', 'BCA', 'Sem-I', 'General English', 'Assignment 2', '2014-2015', '5', '5', 'T', '12-05-2017 06:13:30 AM', '590cc5e255e3c', 'U'),
('5915367236bb1', 6, 'Sidharth Singh', 'BCA', 'Sem-I', 'General English', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:13:38 AM', '5910b83d665da', 'U'),
('5915367a0d0be', 7, 'Nittan Kumar', 'BCA', 'Sem-I', 'General English', 'Assignment 2', '2014-2015', '5', '3', 'T', '12-05-2017 06:13:46 AM', '5910b89fc3d94', 'U'),
('59153681d447d', 8, 'Tanya Dogra', 'BCA', 'Sem-I', 'General English', 'Assignment 2', '2014-2015', '5', '3', 'T', '12-05-2017 06:13:53 AM', '5910b9179a091', 'U'),
('591536893ff49', 9, 'Arjun Singh', 'BCA', 'Sem-I', 'General English', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:14:01 AM', '5910b98d18ca4', 'U'),
('59153692b51d2', 10, 'Zakir Hussain ', 'BCA', 'Sem-I', 'General English', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:14:10 AM', '5910ba1c15413', 'U'),
('591536d9e89e1', 1, 'Danish Mehra', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 2', '2014-2015', '5', '5', 'T', '12-05-2017 06:15:21 AM', '58efa9ca112ae', 'U'),
('591536e4b17b7', 2, 'Drishay Gupta ', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 2', '2014-2015', '5', '5', 'T', '12-05-2017 06:15:32 AM', '58ef40ec2ce0d', 'U'),
('591536ec16840', 3, 'Rohit Thakur', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 2', '2014-2015', '5', '5', 'T', '12-05-2017 06:15:40 AM', '58efb06874449', 'U'),
('591536f5a479d', 4, 'Rishab Jain', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 2', '2014-2015', '5', '5', 'T', '12-05-2017 06:15:49 AM', '58f263af94cc2', 'U'),
('591536fce4e57', 5, 'Akshay Dogra', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 2', '2014-2015', '5', '5', 'T', '12-05-2017 06:15:56 AM', '590cc5e255e3c', 'U'),
('59153735f17ce', 6, 'Sidharth Singh', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:16:53 AM', '5910b83d665da', 'U'),
('5915373d011f3', 7, 'Nittan Kumar', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 2', '2014-2015', '5', '3', 'T', '12-05-2017 06:17:01 AM', '5910b89fc3d94', 'U'),
('591537459f95e', 8, 'Tanya Dogra', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:17:09 AM', '5910b9179a091', 'U'),
('5915374c18c91', 9, 'Arjun Singh', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:17:16 AM', '5910b98d18ca4', 'U'),
('5915375362f2b', 10, 'Zakir Hussain ', 'BCA', 'Sem-I', 'Mathematics', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:17:23 AM', '5910ba1c15413', 'U'),
('591537cac43b7', 1, 'Danish Mehra', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 2', '2014-2015', '5', '5', 'T', '12-05-2017 06:19:22 AM', '58efa9ca112ae', 'U'),
('591537d381fda', 2, 'Drishay Gupta ', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 2', '2014-2015', '5', '5', 'T', '12-05-2017 06:19:31 AM', '58ef40ec2ce0d', 'U'),
('591537da47507', 3, 'Rohit Thakur', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:19:38 AM', '58efb06874449', 'U'),
('591537df44a43', 4, 'Rishab Jain', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:19:43 AM', '58f263af94cc2', 'U'),
('591537f59c48a', 5, 'Akshay Dogra', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:20:05 AM', '590cc5e255e3c', 'U'),
('591538109a7a7', 6, 'Sidharth Singh', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:20:32 AM', '5910b83d665da', 'U'),
('59153816dd6ff', 7, 'Nittan Kumar', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 2', '2014-2015', '5', '3', 'T', '12-05-2017 06:20:38 AM', '5910b89fc3d94', 'U'),
('5915381c71d57', 8, 'Tanya Dogra', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:20:44 AM', '5910b9179a091', 'U'),
('5915382225b9b', 9, 'Arjun Singh', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 2', '2014-2015', '5', '2', 'T', '12-05-2017 06:20:50 AM', '5910b98d18ca4', 'U'),
('591538273fab5', 10, 'Zakir Hussain ', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Assignment 2', '2014-2015', '5', '4', 'T', '12-05-2017 06:20:55 AM', '5910ba1c15413', 'U'),
('5915eb9feb0f2', 1, 'Kritika Gupta', 'BCA', 'Sem-III', 'Database Management System', 'Assignment 1', '2013-2014', '5', '5', 'T', '12-05-2017 07:06:39 PM', '5914921a12ceb', 'U'),
('5915eba751751', 2, 'Nisha Raj Pandita', 'BCA', 'Sem-III', 'Database Management System', 'Assignment 1', '2013-2014', '5', '5', 'T', '12-05-2017 07:06:47 PM', '59149912f0316', 'U'),
('5915ebac8f622', 3, 'Palak Mahajan', 'BCA', 'Sem-III', 'Database Management System', 'Assignment 1', '2013-2014', '5', '4', 'T', '12-05-2017 07:06:52 PM', '5914bb4d115eb', 'U'),
('5915ebb5a8146', 4, 'Shahid Kapoor', 'BCA', 'Sem-III', 'Database Management System', 'Assignment 1', '2013-2014', '5', '4', 'T', '12-05-2017 07:07:01 PM', '5914bbff0dcee', 'U'),
('5915ebfc20161', 1, 'Kritika Gupta', 'BCA', 'Sem-III', 'Database Management System', 'Assignment 2', '2013-2014', '5', '4', 'T', '12-05-2017 07:08:12 PM', '5914921a12ceb', 'U'),
('5915ec018518f', 2, 'Nisha Raj Pandita', 'BCA', 'Sem-III', 'Database Management System', 'Assignment 2', '2013-2014', '5', '4', 'T', '12-05-2017 07:08:17 PM', '59149912f0316', 'U'),
('5915ec06be178', 3, 'Palak Mahajan', 'BCA', 'Sem-III', 'Database Management System', 'Assignment 2', '2013-2014', '5', '5', 'T', '12-05-2017 07:08:22 PM', '5914bb4d115eb', 'U'),
('5915ec109cc1b', 4, 'Shahid Kapoor', 'BCA', 'Sem-III', 'Database Management System', 'Assignment 2', '2013-2014', '5', '4', 'T', '12-05-2017 07:08:32 PM', '5914bbff0dcee', 'U'),
('59171ef0aaa1d', 9, 'Arjun Singh', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Assignment 1', '2014-2015', '5', '5', 'T', '13-05-2017 04:57:52 PM', '5910b98d18ca4', 'U'),
('591a9c2117098', 1, 'Tanveer Singh', 'BCA', 'Sem-IV', 'General English', 'Assignment 1', '2011-2012', '5', '4', 'T', '16-05-2017 08:28:49 AM', '591a973c9ba83', 'U'),
('591a9c279570f', 2, 'Rishu', 'BCA', 'Sem-IV', 'General English', 'Assignment 1', '2011-2012', '5', '4', 'T', '16-05-2017 08:28:55 AM', '591a97ba22388', 'U'),
('591a9c7623852', 1, 'Tanveer Singh', 'BCA', 'Sem-IV', 'General English', 'Assignment 2', '2011-2012', '5', '3', 'T', '16-05-2017 08:30:14 AM', '591a973c9ba83', 'U'),
('591a9c7ce52f3', 2, 'Rishu', 'BCA', 'Sem-IV', 'General English', 'Assignment 2', '2011-2012', '5', '5', 'T', '16-05-2017 08:30:20 AM', '591a97ba22388', 'U'),
('591a9cb9d5994', 1, 'Tanveer Singh', 'BCA', 'Sem-IV', 'Hindi', 'Assignment 1', '2011-2012', '5', '4', 'T', '16-05-2017 08:31:21 AM', '591a973c9ba83', 'U'),
('591a9cc0b0806', 2, 'Rishu', 'BCA', 'Sem-IV', 'Hindi', 'Assignment 1', '2011-2012', '5', '3', 'T', '16-05-2017 08:31:28 AM', '591a97ba22388', 'U'),
('591a9cf471de9', 1, 'Tanveer Singh', 'BCA', 'Sem-IV', 'Hindi', 'Assignment 2', '2011-2012', '5', '4', 'T', '16-05-2017 08:32:20 AM', '591a973c9ba83', 'U'),
('591a9cfdb8e17', 2, 'Rishu', 'BCA', 'Sem-IV', 'Hindi', 'Assignment 2', '2011-2012', '5', '4', 'T', '16-05-2017 08:32:29 AM', '591a97ba22388', 'U'),
('591a9d2c6805d', 1, 'Tanveer Singh', 'BCA', 'Sem-IV', 'Mathematics', 'Assignment 1', '2011-2012', '5', '4', 'T', '16-05-2017 08:33:16 AM', '591a973c9ba83', 'U'),
('591a9d33ea22f', 2, 'Rishu', 'BCA', 'Sem-IV', 'Mathematics', 'Assignment 1', '2011-2012', '5', '3', 'T', '16-05-2017 08:33:23 AM', '591a97ba22388', 'U'),
('591a9d67dee8e', 1, 'Tanveer Singh', 'BCA', 'Sem-IV', 'Mathematics', 'Assignment 2', '2011-2012', '5', '4', 'T', '16-05-2017 08:34:15 AM', '591a973c9ba83', 'U'),
('591a9d7001c1e', 2, 'Rishu', 'BCA', 'Sem-IV', 'Mathematics', 'Assignment 2', '2011-2012', '5', '4', 'T', '16-05-2017 08:34:24 AM', '591a97ba22388', 'U'),
('591a9da5ef129', 1, 'Tanveer Singh', 'BCA', 'Sem-IV', 'Science', 'Assignment 1', '2011-2012', '5', '4', 'T', '16-05-2017 08:35:17 AM', '591a973c9ba83', 'U'),
('591a9dae60ec4', 2, 'Rishu', 'BCA', 'Sem-IV', 'Science', 'Assignment 1', '2011-2012', '5', '4', 'T', '16-05-2017 08:35:26 AM', '591a97ba22388', 'U'),
('591a9ded750b6', 1, 'Tanveer Singh', 'BCA', 'Sem-IV', 'Science', 'Assignment 2', '2011-2012', '5', '4', 'T', '16-05-2017 08:36:29 AM', '591a973c9ba83', 'U'),
('591a9df52b59c', 2, 'Rishu', 'BCA', 'Sem-IV', 'Science', 'Assignment 2', '2011-2012', '5', '3', 'T', '16-05-2017 08:36:37 AM', '591a97ba22388', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `attendanceid` varchar(50) NOT NULL,
  `rollno` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `stream` varchar(30) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `session` varchar(20) NOT NULL,
  `totallectures` varchar(20) NOT NULL,
  `lecturesattended` varchar(20) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'T',
  `date` varchar(50) NOT NULL,
  `refstudentid` varchar(50) NOT NULL,
  `lstatus` varchar(1) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendanceid`, `rollno`, `name`, `stream`, `semester`, `subject`, `session`, `totallectures`, `lecturesattended`, `status`, `date`, `refstudentid`, `lstatus`) VALUES
('5914a9cf308eb', 1, 'Danish Mehra', 'BCA', 'Sem-I', 'Computer Fundamentals', '2014-2015', '20', '18', 'T', '11-05-2017 08:13:35 PM', '58efa9ca112ae', 'U'),
('5914a9fc151bc', 2, 'Drishay Gupta ', 'BCA', 'Sem-I', 'Computer Fundamentals', '2014-2015', '20', '20', 'T', '11-05-2017 08:14:20 PM', '58ef40ec2ce0d', 'U'),
('5914aa0b5558d', 3, 'Rohit Thakur', 'BCA', 'Sem-I', 'Computer Fundamentals', '2014-2015', '20', '14', 'T', '11-05-2017 08:14:35 PM', '58efb06874449', 'U'),
('5914aa2ac1491', 4, 'Rishab Jain', 'BCA', 'Sem-I', 'Computer Fundamentals', '2014-2015', '20', '14', 'T', '11-05-2017 08:15:06 PM', '58f263af94cc2', 'U'),
('5914aa3447c50', 5, 'Akshay Dogra', 'BCA', 'Sem-I', 'Computer Fundamentals', '2014-2015', '20', '20', 'T', '11-05-2017 08:15:16 PM', '590cc5e255e3c', 'U'),
('5914aa4c29294', 6, 'Sidharth Singh', 'BCA', 'Sem-I', 'Computer Fundamentals', '2014-2015', '20', '11', 'T', '11-05-2017 08:15:40 PM', '5910b83d665da', 'U'),
('5914aa5293dd1', 7, 'Nittan Kumar', 'BCA', 'Sem-I', 'Computer Fundamentals', '2014-2015', '20', '10', 'T', '11-05-2017 08:15:46 PM', '5910b89fc3d94', 'U'),
('5914aa5b77694', 8, 'Tanya Dogra', 'BCA', 'Sem-I', 'Computer Fundamentals', '2014-2015', '20', '13', 'T', '11-05-2017 08:15:55 PM', '5910b9179a091', 'U'),
('5914aa642af5e', 9, 'Arjun Singh', 'BCA', 'Sem-I', 'Computer Fundamentals', '2014-2015', '20', '17', 'T', '11-05-2017 08:16:04 PM', '5910b98d18ca4', 'U'),
('5914aa69dd003', 10, 'Zakir Hussain ', 'BCA', 'Sem-I', 'Computer Fundamentals', '2014-2015', '20', '20', 'T', '11-05-2017 08:16:09 PM', '5910ba1c15413', 'U'),
('5914aab6ed9a2', 1, 'Danish Mehra', 'BCA', 'Sem-I', 'General English', '2014-2015', '20', '18', 'T', '11-05-2017 08:17:26 PM', '58efa9ca112ae', 'U'),
('5914aabc95876', 2, 'Drishay Gupta ', 'BCA', 'Sem-I', 'General English', '2014-2015', '20', '20', 'T', '11-05-2017 08:17:32 PM', '58ef40ec2ce0d', 'U'),
('5914aac299b19', 3, 'Rohit Thakur', 'BCA', 'Sem-I', 'General English', '2014-2015', '20', '11', 'T', '11-05-2017 08:17:38 PM', '58efb06874449', 'U'),
('5914aacff13ec', 4, 'Rishab Jain', 'BCA', 'Sem-I', 'General English', '2014-2015', '20', '15', 'T', '11-05-2017 08:17:51 PM', '58f263af94cc2', 'U'),
('5914aad83ae31', 5, 'Akshay Dogra', 'BCA', 'Sem-I', 'General English', '2014-2015', '20', '14', 'T', '11-05-2017 08:18:00 PM', '590cc5e255e3c', 'U'),
('5914aae1d759b', 6, 'Sidharth Singh', 'BCA', 'Sem-I', 'General English', '2014-2015', '20', '16', 'T', '11-05-2017 08:18:09 PM', '5910b83d665da', 'U'),
('5914aae8c6a9c', 7, 'Nittan Kumar', 'BCA', 'Sem-I', 'General English', '2014-2015', '20', '12', 'T', '11-05-2017 08:18:16 PM', '5910b89fc3d94', 'U'),
('5914aaef5cab9', 8, 'Tanya Dogra', 'BCA', 'Sem-I', 'General English', '2014-2015', '20', '12', 'T', '11-05-2017 08:18:23 PM', '5910b9179a091', 'U'),
('5914aafe2458c', 9, 'Arjun Singh', 'BCA', 'Sem-I', 'General English', '2014-2015', '20', '19', 'T', '11-05-2017 08:18:38 PM', '5910b98d18ca4', 'U'),
('5914ab08ec448', 10, 'Zakir Hussain ', 'BCA', 'Sem-I', 'General English', '2014-2015', '20', '18', 'T', '11-05-2017 08:18:48 PM', '5910ba1c15413', 'U'),
('5914ad7950f77', 1, 'Danish Mehra', 'BCA', 'Sem-I', 'Mathematics', '2014-2015', '20', '20', 'T', '11-05-2017 08:29:13 PM', '58efa9ca112ae', 'U'),
('5914ad7e8f6d7', 2, 'Drishay Gupta ', 'BCA', 'Sem-I', 'Mathematics', '2014-2015', '20', '18', 'T', '11-05-2017 08:29:18 PM', '58ef40ec2ce0d', 'U'),
('5914ad848ed39', 3, 'Rohit Thakur', 'BCA', 'Sem-I', 'Mathematics', '2014-2015', '20', '19', 'T', '11-05-2017 08:29:24 PM', '58efb06874449', 'U'),
('5914ad8ccb18b', 4, 'Rishab Jain', 'BCA', 'Sem-I', 'Mathematics', '2014-2015', '20', '12', 'T', '11-05-2017 08:29:32 PM', '58f263af94cc2', 'U'),
('5914ad9ca056f', 5, 'Akshay Dogra', 'BCA', 'Sem-I', 'Mathematics', '2014-2015', '20', '12', 'T', '11-05-2017 08:29:48 PM', '590cc5e255e3c', 'U'),
('5914ada38853e', 6, 'Sidharth Singh', 'BCA', 'Sem-I', 'Mathematics', '2014-2015', '20', '15', 'T', '11-05-2017 08:29:55 PM', '5910b83d665da', 'U'),
('5914adaa89ae5', 7, 'Nittan Kumar', 'BCA', 'Sem-I', 'Mathematics', '2014-2015', '20', '16', 'T', '11-05-2017 08:30:02 PM', '5910b89fc3d94', 'U'),
('5914adb3dbd8c', 8, 'Tanya Dogra', 'BCA', 'Sem-I', 'Mathematics', '2014-2015', '20', '11', 'T', '11-05-2017 08:30:11 PM', '5910b9179a091', 'U'),
('5914adbba0b9e', 9, 'Arjun Singh', 'BCA', 'Sem-I', 'Mathematics', '2014-2015', '20', '20', 'T', '11-05-2017 08:30:19 PM', '5910b98d18ca4', 'U'),
('5914adc14f6f9', 10, 'Zakir Hussain ', 'BCA', 'Sem-I', 'Mathematics', '2014-2015', '20', '8', 'T', '11-05-2017 08:30:25 PM', '5910ba1c15413', 'U'),
('5914ae6d0ce0d', 1, 'Danish Mehra', 'BCA', 'Sem-I', 'Problem solving using C-language', '2014-2015', '20', '19', 'T', '11-05-2017 08:33:17 PM', '58efa9ca112ae', 'U'),
('5914ae74164fd', 2, 'Drishay Gupta ', 'BCA', 'Sem-I', 'Problem solving using C-language', '2014-2015', '20', '20', 'T', '11-05-2017 08:33:24 PM', '58ef40ec2ce0d', 'U'),
('5914ae7c1ff78', 3, 'Rohit Thakur', 'BCA', 'Sem-I', 'Problem solving using C-language', '2014-2015', '20', '11', 'T', '11-05-2017 08:33:32 PM', '58efb06874449', 'U'),
('5914ae872234b', 4, 'Rishab Jain', 'BCA', 'Sem-I', 'Problem solving using C-language', '2014-2015', '20', '17', 'T', '11-05-2017 08:33:43 PM', '58f263af94cc2', 'U'),
('5914ae8e4051a', 5, 'Akshay Dogra', 'BCA', 'Sem-I', 'Problem solving using C-language', '2014-2015', '20', '13', 'T', '11-05-2017 08:33:50 PM', '590cc5e255e3c', 'U'),
('5914ae9574e48', 6, 'Sidharth Singh', 'BCA', 'Sem-I', 'Problem solving using C-language', '2014-2015', '20', '17', 'T', '11-05-2017 08:33:57 PM', '5910b83d665da', 'U'),
('5914ae9d75d4a', 7, 'Nittan Kumar', 'BCA', 'Sem-I', 'Problem solving using C-language', '2014-2015', '20', '20', 'T', '11-05-2017 08:34:05 PM', '5910b89fc3d94', 'U'),
('5914aeab6f154', 8, 'Tanya Dogra', 'BCA', 'Sem-I', 'Problem solving using C-language', '2014-2015', '20', '14', 'T', '11-05-2017 08:34:19 PM', '5910b9179a091', 'U'),
('5914aeb149eed', 9, 'Arjun Singh', 'BCA', 'Sem-I', 'Problem solving using C-language', '2014-2015', '20', '20', 'T', '11-05-2017 08:34:25 PM', '5910b98d18ca4', 'U'),
('5914aeb760e46', 10, 'Zakir Hussain ', 'BCA', 'Sem-I', 'Problem solving using C-language', '2014-2015', '20', '18', 'T', '11-05-2017 08:34:31 PM', '5910ba1c15413', 'U'),
('5915e8ed9830e', 1, 'Kritika Gupta', 'BCA', 'Sem-III', 'Computer Fundamentals', '2013-2014', '20', '18', 'T', '12-05-2017 06:55:09 PM', '5914921a12ceb', 'U'),
('5915e8fb9d876', 2, 'Nisha Raj Pandita', 'BCA', 'Sem-III', 'Computer Fundamentals', '2013-2014', '20', '20', 'T', '12-05-2017 06:55:23 PM', '59149912f0316', 'U'),
('5915e9023beee', 3, 'Palak Mahajan', 'BCA', 'Sem-III', 'Computer Fundamentals', '2013-2014', '20', '16', 'T', '12-05-2017 06:55:30 PM', '5914bb4d115eb', 'U'),
('5915e908f2c20', 4, 'Shahid Kapoor', 'BCA', 'Sem-III', 'Computer Fundamentals', '2013-2014', '20', '18', 'T', '12-05-2017 06:55:36 PM', '5914bbff0dcee', 'U'),
('591a9af7e1aed', 1, 'Tanveer Singh', 'BCA', 'Sem-IV', 'General English', '2011-2012', '20', '18', 'T', '16-05-2017 08:23:51 AM', '591a973c9ba83', 'U'),
('591a9b06bbcfe', 2, 'Rishu', 'BCA', 'Sem-IV', 'General English', '2011-2012', '20', '13', 'T', '16-05-2017 08:24:06 AM', '591a97ba22388', 'U'),
('591a9b357984c', 1, 'Tanveer Singh', 'BCA', 'Sem-IV', 'Hindi', '2011-2012', '20', '12', 'T', '16-05-2017 08:24:53 AM', '591a973c9ba83', 'U'),
('591a9b3c372cb', 2, 'Rishu', 'BCA', 'Sem-IV', 'Hindi', '2011-2012', '20', '12', 'T', '16-05-2017 08:25:00 AM', '591a97ba22388', 'U'),
('591a9b6e885c0', 1, 'Tanveer Singh', 'BCA', 'Sem-IV', 'Mathematics', '2011-2012', '20', '12', 'T', '16-05-2017 08:25:50 AM', '591a973c9ba83', 'U'),
('591a9b761ba82', 2, 'Rishu', 'BCA', 'Sem-IV', 'Mathematics', '2011-2012', '20', '12', 'T', '16-05-2017 08:25:58 AM', '591a97ba22388', 'U'),
('591a9bcac8248', 1, 'Tanveer Singh', 'BCA', 'Sem-IV', 'Science', '2011-2012', '20', '12', 'T', '16-05-2017 08:27:22 AM', '591a973c9ba83', 'U'),
('591a9bd0bf12d', 2, 'Rishu', 'BCA', 'Sem-IV', 'Science', '2011-2012', '20', '13', 'T', '16-05-2017 08:27:28 AM', '591a97ba22388', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedbackid` varchar(50) NOT NULL,
  `fromuser` varchar(50) NOT NULL,
  `feedback` text NOT NULL,
  `reply` text NOT NULL,
  `dateofreply` varchar(20) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'T',
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `fromuser`, `feedback`, `reply`, `dateofreply`, `status`, `date`) VALUES
('58ecf985c9ff6', 'Drishay', 'broooooooo', 'Mera Naam Joker', '15-04-2017 08:45:27 ', 'T', '11-04-2017 05:43:01 '),
('58ed04c84c143', 'Rajan', 'Childhood friends. School friends. Neighborhood friends. College friends. Work friends. Best friends. Boyfriends. Girlfriends. \r\n\r\nWe work our entire lives building friendships. From preschool, where we all learn that "it takes a friend to make a friend," through adulthood, where we mingle at bars and water coolers, we crave closeness with other human beings.\r\n\r\nWe just need to know that someone out there "gets us."\r\n\r\nWhether we have a small group of close friends or an expanded group of personalities, each of our friendships brings something new to our lives, inspiring us to see the world a totally different way, giving us a new shoulder to lean on, and a new cheerleader to root us on.', ' your query in under process...', '14-04-2017 06:35:08 ', 'T', '11-04-2017 06:31:04 '),
('58ed1c35c9b83', 'rishu', 'nininionininnnioioin', 'lol', '12-04-2017 05:56:51 ', 'T', '11-04-2017 08:11:01 '),
('58eda626070d0', 'Gautam', 'nice site........', 'Thanks man', '15-04-2017 08:45:58 ', 'T', '12-04-2017 05:59:34 '),
('5912c065be878', 'Nishi Bamba', 'Infor is a multi-national privately held United States-based enterprise software company. Headquartered in New York City, Infor focuses on business applications for organizations and delivered via cloud computing as a service. Wikipedia', '1', '1', 'T', '10-05-2017 09:25:25 '),
('5912c274d9312', 'Rajan', 'A website[1] is a collection of related web pages, including multimedia content, typically identified with a common domain name, and published on at least one web server. A website may be accessible via a public Internet Protocol (IP) network, such as the Internet, or a private local area network (LAN), by referencing a uniform resource locator (URL) that identifies the site.', 'Thanks Rajan Will keep This in mind', '10-05-2017 09:34:53 ', 'T', '10-05-2017 09:34:12 ');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `marksid` varchar(50) NOT NULL,
  `rollno` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `test` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `maxmarks` varchar(20) NOT NULL,
  `obtmarks` varchar(20) NOT NULL,
  `attendancemarks` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'T',
  `date` varchar(20) NOT NULL,
  `refstudentid` varchar(50) NOT NULL,
  `lstatus` varchar(1) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`marksid`, `rollno`, `name`, `stream`, `semester`, `subject`, `test`, `session`, `maxmarks`, `obtmarks`, `attendancemarks`, `total`, `status`, `date`, `refstudentid`, `lstatus`) VALUES
('59149b922497e', 1, 'Danish Mehra', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Internal-1', '2014-2015', '20', '15', '5', '20', 'T', '11-05-2017 07:12:50 ', '58efa9ca112ae', 'U'),
('59149bb5dedb7', 2, 'Drishay Gupta ', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Internal-1', '2014-2015', '20', '15', '5', '20', 'T', '11-05-2017 07:13:25 ', '58ef40ec2ce0d', 'U'),
('59149bc9af801', 3, 'Rohit Thakur', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Internal-1', '2014-2015', '20', '12', '5', '17', 'T', '11-05-2017 07:13:45 ', '58efb06874449', 'U'),
('59149bddcb056', 4, 'Rishab Jain', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Internal-1', '2014-2015', '20', '11', '5', '16', 'T', '11-05-2017 07:14:05 ', '58f263af94cc2', 'U'),
('59149bfc056fd', 5, 'Akshay Dogra', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Internal-1', '2014-2015', '20', '14', '5', '19', 'T', '11-05-2017 07:14:36 ', '590cc5e255e3c', 'U'),
('59149c14f3cf2', 6, 'Sidharth Singh', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Internal-1', '2014-2015', '20', '13', '5', '18', 'T', '11-05-2017 07:15:00 ', '5910b83d665da', 'U'),
('59149c25182fd', 7, 'Nittan Kumar', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Internal-1', '2014-2015', '20', '12', '5', '17', 'T', '11-05-2017 07:15:17 ', '5910b89fc3d94', 'U'),
('59149c36269e8', 8, 'Tanya Dogra', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Internal-1', '2014-2015', '20', '9', '5', '14', 'T', '11-05-2017 07:15:34 ', '5910b9179a091', 'U'),
('59149c4e3518f', 9, 'Arjun Singh', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Internal-1', '2014-2015', '20', '15', '5', '20', 'T', '11-05-2017 07:15:58 ', '5910b98d18ca4', 'U'),
('59149c5e64d45', 10, 'Zakir Hussain ', 'BCA', 'Sem-I', 'Computer Fundamentals', 'Internal-1', '2014-2015', '20', '15', '5', '20', 'T', '11-05-2017 07:16:14 ', '5910ba1c15413', 'U'),
('5914a1294f33c', 1, 'Danish Mehra', 'BCA', 'Sem-I', 'General English', 'Internal-1', '2014-2015', '20', '15', '5', '20', 'T', '11-05-2017 07:36:41 ', '58efa9ca112ae', 'U'),
('5914a135f0d92', 2, 'Drishay Gupta ', 'BCA', 'Sem-I', 'General English', 'Internal-1', '2014-2015', '20', '15', '5', '20', 'T', '11-05-2017 07:36:53 ', '58ef40ec2ce0d', 'U'),
('5914a140e3fb3', 3, 'Rohit Thakur', 'BCA', 'Sem-I', 'General English', 'Internal-1', '2014-2015', '20', '12', '5', '17', 'T', '11-05-2017 07:37:04 ', '58efb06874449', 'U'),
('5914a155b1eab', 4, 'Rishab Jain', 'BCA', 'Sem-I', 'General English', 'Internal-1', '2014-2015', '20', '12', '5', '17', 'T', '11-05-2017 07:37:25 ', '58f263af94cc2', 'U'),
('5914a16c326f0', 5, 'Akshay Dogra', 'BCA', 'Sem-I', 'General English', 'Internal-1', '2014-2015', '20', '14', '5', '19', 'T', '11-05-2017 07:37:48 ', '590cc5e255e3c', 'U'),
('5914a1d4abfe7', 6, 'Sidharth Singh', 'BCA', 'Sem-I', 'General English', 'Internal-1', '2014-2015', '20', '12', '5', '17', 'T', '11-05-2017 07:39:32 ', '5910b83d665da', 'U'),
('5914a35047334', 7, 'Nittan Kumar', 'BCA', 'Sem-I', 'General English', 'Internal-1', '2014-2015', '20', '13', '5', '18', 'T', '11-05-2017 07:45:52 ', '5910b89fc3d94', 'U'),
('5914a39310ccc', 8, 'Tanya Dogra', 'BCA', 'Sem-I', 'General English', 'Internal-1', '2014-2015', '20', '12', '5', '17', 'T', '11-05-2017 07:46:59 ', '5910b9179a091', 'U'),
('5914a3a027684', 9, 'Arjun Singh', 'BCA', 'Sem-I', 'General English', 'Internal-1', '2014-2015', '20', '15', '5', '20', 'T', '11-05-2017 07:47:12 ', '5910b98d18ca4', 'U'),
('5914a3b137fc4', 10, 'Zakir Hussain ', 'BCA', 'Sem-I', 'General English', 'Internal-1', '2014-2015', '20', '15', '5', '20', 'T', '11-05-2017 07:47:29 ', '5910ba1c15413', 'U'),
('5914a42e40bc3', 1, 'Danish Mehra', 'BCA', 'Sem-I', 'Mathematics', 'Internal-1', '2014-2015', '20', '15', '5', '20', 'T', '11-05-2017 07:49:34 ', '58efa9ca112ae', 'U'),
('5914a43c56195', 2, 'Drishay Gupta ', 'BCA', 'Sem-I', 'Mathematics', 'Internal-1', '2014-2015', '20', '15', '5', '20', 'T', '11-05-2017 07:49:48 ', '58ef40ec2ce0d', 'U'),
('5914a44ade67e', 3, 'Rohit Thakur', 'BCA', 'Sem-I', 'Mathematics', 'Internal-1', '2014-2015', '20', '12', '5', '17', 'T', '11-05-2017 07:50:02 ', '58efb06874449', 'U'),
('5914a45e61bff', 4, 'Rishab Jain', 'BCA', 'Sem-I', 'Mathematics', 'Internal-1', '2014-2015', '20', '14', '5', '19', 'T', '11-05-2017 07:50:22 ', '58f263af94cc2', 'U'),
('5914a46d90b31', 5, 'Akshay Dogra', 'BCA', 'Sem-I', 'Mathematics', 'Internal-1', '2014-2015', '20', '15', '5', '20', 'T', '11-05-2017 07:50:37 ', '590cc5e255e3c', 'U'),
('5914a486e81c5', 6, 'Sidharth Singh', 'BCA', 'Sem-I', 'Mathematics', 'Internal-1', '2014-2015', '20', '12', '5', '17', 'T', '11-05-2017 07:51:02 ', '5910b83d665da', 'U'),
('5914a498ae85a', 7, 'Nittan Kumar', 'BCA', 'Sem-I', 'Mathematics', 'Internal-1', '2014-2015', '20', '14', '5', '19', 'T', '11-05-2017 07:51:20 ', '5910b89fc3d94', 'U'),
('5914a4a60e31e', 8, 'Tanya Dogra', 'BCA', 'Sem-I', 'Mathematics', 'Internal-1', '2014-2015', '20', '10', '5', '15', 'T', '11-05-2017 07:51:34 ', '5910b9179a091', 'U'),
('5914a4bde29ce', 9, 'Arjun Singh', 'BCA', 'Sem-I', 'Mathematics', 'Internal-1', '2014-2015', '20', '12', '5', '17', 'T', '11-05-2017 07:51:57 ', '5910b98d18ca4', 'U'),
('5914a4caeab1b', 10, 'Zakir Hussain ', 'BCA', 'Sem-I', 'Mathematics', 'Internal-1', '2014-2015', '20', '15', '5', '20', 'T', '11-05-2017 07:52:10 ', '5910ba1c15413', 'U'),
('5914a879cb26f', 1, 'Danish Mehra', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Internal-1', '2014-2015', '20', '15', '5', '20', 'T', '11-05-2017 08:07:53 ', '58efa9ca112ae', 'U'),
('5914a886d83c4', 2, 'Drishay Gupta ', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Internal-1', '2014-2015', '20', '15', '5', '20', 'T', '11-05-2017 08:08:06 ', '58ef40ec2ce0d', 'U'),
('5914a89292ace', 3, 'Rohit Thakur', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Internal-1', '2014-2015', '20', '12', '5', '17', 'T', '11-05-2017 08:08:18 ', '58efb06874449', 'U'),
('5914a8a05984a', 4, 'Rishab Jain', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Internal-1', '2014-2015', '20', '13', '5', '18', 'T', '11-05-2017 08:08:32 ', '58f263af94cc2', 'U'),
('5914a8cc000ed', 5, 'Akshay Dogra', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Internal-1', '2014-2015', '20', '14', '5', '19', 'T', '11-05-2017 08:09:16 ', '590cc5e255e3c', 'U'),
('5914a8deb3370', 6, 'Sidharth Singh', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Internal-1', '2014-2015', '20', '13', '5', '18', 'T', '11-05-2017 08:09:34 ', '5910b83d665da', 'U'),
('5914a8eeba6b1', 7, 'Nittan Kumar', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Internal-1', '2014-2015', '20', '11', '5', '16', 'T', '11-05-2017 08:09:50 ', '5910b89fc3d94', 'U'),
('5914a90307c32', 8, 'Tanya Dogra', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Internal-1', '2014-2015', '20', '10', '5', '15', 'T', '11-05-2017 08:10:11 ', '5910b9179a091', 'U'),
('5914a9188b63c', 9, 'Arjun Singh', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Internal-1', '2014-2015', '20', '14', '5', '19', 'T', '11-05-2017 08:10:32 ', '5910b98d18ca4', 'U'),
('5914a92767d25', 10, 'Zakir Hussain ', 'BCA', 'Sem-I', 'Problem solving using C-language', 'Internal-1', '2014-2015', '20', '12', '5', '17', 'T', '11-05-2017 08:10:47 ', '5910ba1c15413', 'U'),
('5914bde9d526e', 1, 'Kritika Gupta', 'BCA', 'Sem-III', 'Computer Fundamentals', 'Internal-1', '2013-2014', '20', '10', '5', '15', 'T', '11-05-2017 09:39:21 ', '5914921a12ceb', 'U'),
('5914bdfd866e3', 2, 'Nisha Raj Pandita', 'BCA', 'Sem-III', 'Computer Fundamentals', 'Internal-1', '2013-2014', '20', '9', '5', '14', 'T', '11-05-2017 09:39:41 ', '59149912f0316', 'U'),
('5914be0e7647b', 3, 'Palak Mahajan', 'BCA', 'Sem-III', 'Computer Fundamentals', 'Internal-1', '2013-2014', '20', '10', '5', '15', 'T', '11-05-2017 09:39:58 ', '5914bb4d115eb', 'U'),
('5914be1d09d1b', 4, 'Shahid Kapoor', 'BCA', 'Sem-III', 'Computer Fundamentals', 'Internal-1', '2013-2014', '20', '5', '5', '10', 'T', '11-05-2017 09:40:13 ', '5914bbff0dcee', 'U'),
('591a9975a7345', 1, 'Tanveer Singh', 'BCA', 'Sem-IV', 'General English', 'Internal-1', '2011-2012', '20', '15', '4', '19', 'T', '16-05-2017 08:17:25 ', '591a973c9ba83', 'U'),
('591a9984d81a2', 2, 'Rishu', 'BCA', 'Sem-IV', 'General English', 'Internal-1', '2011-2012', '20', '12', '5', '17', 'T', '16-05-2017 08:17:40 ', '591a97ba22388', 'U'),
('591a9a01ccb6a', 1, 'Tanveer Singh', 'BCA', 'Sem-IV', 'Mathematics', 'Internal-1', '2011-2012', '20', '12', '5', '17', 'T', '16-05-2017 08:19:45 ', '591a973c9ba83', 'U'),
('591a9a0eb4eda', 2, 'Rishu', 'BCA', 'Sem-IV', 'Mathematics', 'Internal-1', '2011-2012', '20', '10', '5', '15', 'T', '16-05-2017 08:19:58 ', '591a97ba22388', 'U'),
('591a9a3732b82', 1, 'Tanveer Singh', 'BCA', 'Sem-IV', 'Hindi', 'Internal-1', '2011-2012', '20', '13', '4', '17', 'T', '16-05-2017 08:20:39 ', '591a973c9ba83', 'U'),
('591a9a418221c', 2, 'Rishu', 'BCA', 'Sem-IV', 'Hindi', 'Internal-1', '2011-2012', '20', '12', '5', '17', 'T', '16-05-2017 08:20:49 ', '591a97ba22388', 'U'),
('591a9ac1c8b29', 1, 'Tanveer Singh', 'BCA', 'Sem-IV', 'Science', 'Internal-1', '2011-2012', '20', '15', '5', '20', 'T', '16-05-2017 08:22:57 ', '591a973c9ba83', 'U'),
('591a9ace92aa2', 2, 'Rishu', 'BCA', 'Sem-IV', 'Science', 'Internal-1', '2011-2012', '20', '13', '5', '18', 'T', '16-05-2017 08:23:10 ', '591a97ba22388', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE IF NOT EXISTS `student_detail` (
  `studentid` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `parentage` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dateofbirth` varchar(50) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `guardiancontactno` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `session` varchar(10) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `classrollno` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'T',
  `date` varchar(50) NOT NULL,
  `lstatus` varchar(1) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`studentid`, `name`, `parentage`, `gender`, `dateofbirth`, `contactno`, `guardiancontactno`, `category`, `session`, `stream`, `subject`, `semester`, `classrollno`, `address`, `picture`, `status`, `date`, `lstatus`) VALUES
('58ef40ec2ce0d', 'Drishay Gupta ', 'Darshan Kumar Gupta', 'Male', '27-05-1996', '9858291130', '9796429388', 'OM', '2014-2015', 'BCA', 'Computer', 'Sem-I', 2, '       House No-260,Adarsh Enclave,Sector-1,Trikuta Nagar,Jammu', '', 'T', '13-04-2017 11:12:12 AM', 'U'),
('58efa9ca112ae', 'Danish Mehra', 'Ravi Mehra', 'Male', '30-08-1996', '9086107068', '9796097960', 'OM', '2014-2015', 'BCA', 'Computer', 'Sem-I', 1, 'Opposit House No-112,Channi,Jammu', '', 'T', '13-04-2017 06:39:38 PM', 'U'),
('58efb06874449', 'Rohit Thakur', 'Rana', 'Male', '17-03-1996', '9859112233', '8719272711', 'OM', '2014-2015', 'BCA', 'Computer', 'Sem-I', 3, '14-B,Railway Colony,Jammu', '', 'T', '13-04-2017 07:07:52 PM', 'U'),
('58f263af94cc2', 'Rishab Jain', 'Sanjay jain', 'Male', '21-05-1996', '9796600201', '9419194191', 'OM', '2014-2015', 'BCA', 'Computer', 'Sem-I', 4, 'Sanik Colony,Jammu\r\n', '', 'T', '15-04-2017 08:17:19 PM', 'U'),
('590cc5e255e3c', 'Akshay Dogra', 'I.K Kumar', 'Male', '04-10-1996', '9859107068', '9697112234', 'OBC', '2014-2015', 'BCA', 'Computer ', 'Sem-I', 5, 'Jaurian,Jammu', '', 'T', '05-05-2017 08:35:14 PM', 'U'),
('5910b83d665da', 'Sidharth Singh', 'Singh Bandral', 'Male', '02-05-1996', '9858112321', '9858112321', 'OM', '2014-2015', 'BCA', 'General English,Mathematics,Computer Fundamentals,', 'Sem-I', 6, 'Samba,Jammu', '', 'T', '08-05-2017 08:26:05 PM', 'U'),
('5910b89fc3d94', 'Nittan Kumar', 'Kumar', 'Male', '04-03-1996', '7766521111', '7766521111', 'OBC', '2014-2015', 'BCA', 'General English,Mathematics,Computer Fundamentals,', 'Sem-I', 7, 'Vijaypur,Jammu', '', 'T', '08-05-2017 08:27:43 PM', 'U'),
('5910b9179a091', 'Tanya Dogra', 'Ram Dogra', 'Female', '16-03-1996', '6671442251', '987856242', 'OBC', '2014-2015', 'BCA', 'General English,Mathematics,Computer Fundamentals,', 'Sem-I', 8, 'Bohri,Jammu', '', 'T', '08-05-2017 08:29:43 PM', 'U'),
('5910b98d18ca4', 'Arjun Singh', 'Ratan Singh', 'Male', '19-03-1996', '9419181122', '9419194191', 'OM', '2014-2015', 'BCA', 'General English,Mathematics,Computer Fundamentals,', 'Sem-I', 9, 'Bantalah,Jammu', '', 'T', '08-05-2017 08:31:41 PM', 'U'),
('5910ba1c15413', 'Zakir Hussain ', 'Nasir Hussain', 'Male', '03-10-1996', '9858114422', '9419123344', 'OM', '2014-2015', 'BCA', 'General English,Mathematics,Computer Fundamentals,', 'Sem-I', 10, 'Karan Nagar,Jammu', '', 'T', '08-05-2017 08:34:04 PM', 'U'),
('5910baed57721', 'Umang Sharma', 'Parihaar Sharma', 'Male', '13-04-1996', '9906112323', '9419176655', 'OM', '2014-2015', 'BCA', 'General English,Mathematics,Computer Fundamentals,Problem solving using C language', 'Sem-I', 11, 'Nagrota,Jammu', '', 'T', '08-05-2017 08:37:33 PM', 'U'),
('5910bc0ed7e28', 'Vishal Dogra', 'Sham Dogra', 'Male', '20-07-1996', '908754321', '887699809', 'OBC', '2014-2015', 'BCA', 'General English,Mathematics,Computer Fundamentals,', 'Sem-I', 12, 'New Plot,Jammu', '', 'T', '08-05-2017 08:42:22 PM', 'U'),
('5910bc76e9ab4', 'Shweta Sharma', 'Ravi Sharma', 'Female', '13-05-1996', '7890554433', '9867112233', 'OM', '2014-2015', 'BCA', 'General English,Mathematics,Computer Fundamentals,', 'Sem-I', 13, 'Shashtri Nagar,Jammu', '', 'T', '08-05-2017 08:44:06 PM', 'U'),
('5910bcf983f54', 'Ankita Chadda', 'Chadda', 'Female', '13-01-1996', '9867554433', '9419123221', 'OM', '2014-2015', 'BCA', 'General English,Mathematics,Computer Fundamentals,', 'Sem-I', 14, 'Jeevan Nagar,Jammu', '', 'T', '08-05-2017 08:46:17 PM', 'U'),
('5910bd3d4897a', 'Rishav Daffara', 'Cmon daffara', 'Male', '14-06-1996', '9878655441', '9878675432', 'OM', '2014-2015', 'BCA', 'General English,Mathematics,Computer Fundamentals,', 'Sem-I', 15, 'Roop Nagar,Jammu', '', 'T', '08-05-2017 08:47:25 PM', 'U'),
('5910bd9b3a1e8', 'Sunny Sharma', 'Lal Sharma', 'Male', '14-08-1996', '9852344211', '678901123', 'OM', '2014-2015', 'BCA', 'General English,Mathematics,Computer Fundamentals,', 'Sem-I', 16, 'Kachi Chawni,Jammu', '', 'T', '08-05-2017 08:48:59 PM', 'U'),
('5910be3d9605a', 'Sumesh Tikkoo', 'I.K Tikkoo', 'Male', '17-03-1996', '897645321', '9858112245', 'OM', '2014-2015', 'BCA', 'General English,Mathematics,Computer Fundamentals,', 'Sem-I', 17, 'Shakti Nagar,Jammu', '', 'T', '08-05-2017 08:51:41 PM', 'U'),
('5910beb2254b5', 'Shiv Dev', 'Narang Singh', 'Male', '09-04-1996', '7890123452', '6722829229', 'OM', '2014-2015', 'BCA', 'General English,Mathematics,Computer Fundamentals,', 'Sem-I', 18, 'Akhnoor.Jammu', '', 'T', '08-05-2017 08:53:38 PM', 'U'),
('5910bf0a7792a', 'Sahil Chadda', 'Sameer Chadda', 'Male', '06-12-1996', '5522417777', '9087562121', 'OM', '2014-2015', 'BCA', 'General English,Mathematics,Computer Fundamentals,', 'Sem-I', 19, 'Residency Road,Jammu', '', 'T', '08-05-2017 08:55:06 PM', 'U'),
('5910bf999cd6f', 'Akal Jot Singh', 'Rehman Jot', 'Male', '16-11-1996', '9856341122', '9055112233', 'OM', '2014-2015', 'BCA', 'General English,Mathematics,Computer Fundamentals,', 'Sem-I', 20, 'Patli Morh,Jammu', '', 'T', '08-05-2017 08:57:29 PM', 'U'),
('5914921a12ceb', 'Kritika Gupta', 'Pawan Kumar Gupta', 'Female', '14-09-1997', '7887878787', '5547647497', 'OM', '2013-2014', 'BCA', 'General English,Mathematics,Fundamentals of Operating System,Database Management System', 'Sem-III', 1, '       Bakshi Nagar,Jammu', '1494520346.jpg', 'T', '11-05-2017 06:32:26 PM', 'U'),
('59149912f0316', 'Nisha Raj Pandita', 'Rajender Kumar', 'Female', '17-12-1997', '7301273312', '1293892121', 'OM', '2013-2014', 'BCA', 'General English,Mathematics,Fundamentals of Operating System,Database Management System', 'Sem-III', 2, 'Gurah Salathia,Samba,Jammu', '1494522130.jpg', 'T', '11-05-2017 07:02:10 PM', 'U'),
('5914bb4d115eb', 'Palak Mahajan', 'Vishab Mahajan', 'Female', '15-03-2002', '7092173091', '91032890921', 'OM', '2013-2014', 'BCA', 'General English,Mathematics,Fundamentals of Operating System,Database Management System', 'Sem-III', 3, 'Ustad Mohalla,Jammu', '1494530893.jpg', 'T', '11-05-2017 09:28:13 PM', 'U'),
('5914bbff0dcee', 'Shahid Kapoor', 'Pankaj Kapoor', 'Male', '13-01-1995', '2983193921', '9128128378', 'OM', '2013-2014', 'BCA', 'General English,Mathematics,Fundamentals of Operating System,Database Management System', 'Sem-III', 4, '  Digyana,Jammu', '1494531071.jpg', 'T', '11-05-2017 09:31:11 PM', 'U'),
('591a973c9ba83', 'Tanveer Singh', 'Manmohan Singh', 'Male', '17-09-1995', '81236896', '71902321', 'OM', '2011-2012', 'BCA', ' General English,Hindi,Mathematics,Science', 'Sem-IV', 1, 'Digiyana Jammu', '1494914876.jpg', 'T', '16-05-2017 08:07:56 AM', 'U'),
('591a97ba22388', 'Rishu', 'knskaln', 'Male', '01-01-1984', '1212', '921924724', 'OM', '2011-2012', 'BCA', 'General English,Hindi,Mathematics,Science', 'Sem-IV', 2, 'VIckram Chowk Jammu ', '1494915002.jpg', 'T', '16-05-2017 08:10:02 AM', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subjectid` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `subjectname` varchar(50) NOT NULL,
  `subjectcode` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'T',
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectid`, `stream`, `subjectname`, `subjectcode`, `semester`, `status`, `date`) VALUES
('5903037e5eddd', 'BCA', 'Computer Fundamentals', 'BCA-101', 'Sem-I', 'T', '28-04-2017 10:55:26 am'),
('590303db169e9', 'BCA', 'General English', 'AA-101', 'Sem-I', 'T', '28-04-2017 10:56:59 am'),
('59062604c2b35', 'BCA', 'Mathematics', 'MA-101', 'Sem-I', 'T', '30-04-2017 07:59:32 pm'),
('5910c29fd1e89', 'BCA', 'Problem solving using C-language', 'BCA-102', 'Sem-I', 'T', '08-05-2017 09:10:23 pm'),
('59149a4ced923', 'BCA', 'Fundamentals of Operating System', 'BCA-301', 'Sem-I', 'T', '11-05-2017 07:07:24 pm'),
('59149a72e15a8', 'BCA', 'Database Management System', 'BCA-302', 'Sem-III', 'T', '11-05-2017 07:08:02 pm'),
('591a97d759301', 'BCA', 'Hindi', 'H-101', 'Sem-IV', 'T', '16-05-2017 08:10:31 am'),
('591a97fae1014', 'BCA', 'Science', 'S-101', 'Sem-IV', 'T', '16-05-2017 08:11:06 am');
