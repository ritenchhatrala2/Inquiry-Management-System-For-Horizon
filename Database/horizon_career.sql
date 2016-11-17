-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2014 at 12:46 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `horizon_career`
--
CREATE DATABASE IF NOT EXISTS `horizon_career` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `horizon_career`;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
  `SR_NO` int(100) NOT NULL AUTO_INCREMENT,
  `DATE` date NOT NULL,
  `COURSE` varchar(50) NOT NULL,
  `YEAR` varchar(20) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `GENDER` varchar(20) NOT NULL,
  `P_ADDR` varchar(500) NOT NULL,
  `P_CITY` varchar(100) NOT NULL,
  `P_PIN` varchar(50) NOT NULL,
  `L_ADDR` varchar(500) NOT NULL,
  `L_CITY` varchar(100) NOT NULL,
  `L_PIN` varchar(50) NOT NULL,
  `CONTACT` double NOT NULL,
  `R_CONTACT` double NOT NULL,
  `P_NAME` varchar(100) NOT NULL,
  `P_CONTACT` double NOT NULL,
  `DOB` date NOT NULL,
  `CATEGORY` varchar(20) NOT NULL,
  `GRAD_SCHOOL` varchar(50) NOT NULL,
  `GRAD_YEAR` varchar(10) NOT NULL,
  `PGRAD_SCHOOL` varchar(100) NOT NULL,
  `PGRAD_YEAR` varchar(10) NOT NULL,
  `RESPONSE` varchar(50) NOT NULL,
  `REMARKS` varchar(400) NOT NULL,
  `ALIVE` int(10) NOT NULL,
  `DEAD` int(10) NOT NULL,
  `ENROLLED` int(10) NOT NULL,
  `FOLLOW_UP` date NOT NULL,
  PRIMARY KEY (`SR_NO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`SR_NO`, `DATE`, `COURSE`, `YEAR`, `NAME`, `EMAIL`, `GENDER`, `P_ADDR`, `P_CITY`, `P_PIN`, `L_ADDR`, `L_CITY`, `L_PIN`, `CONTACT`, `R_CONTACT`, `P_NAME`, `P_CONTACT`, `DOB`, `CATEGORY`, `GRAD_SCHOOL`, `GRAD_YEAR`, `PGRAD_SCHOOL`, `PGRAD_YEAR`, `RESPONSE`, `REMARKS`, `ALIVE`, `DEAD`, `ENROLLED`, `FOLLOW_UP`) VALUES
(1, '2014-03-25', 'CAT', '2015', 'Maharshi R Kanabar', 'kanabarmaharshi@gmail.com', 'Male', 'Bakrol Gate,Madhav Gurukul Hostel, VVN', 'VVN', '388120', 'Same as above', 'VVN', '388120', 9033213995, 9426683055, 'NA', 0, '0000-00-00', 'General', 'GCET', '2016', '', '', 'Positive', 'Will Enrollin a day', 0, 1, 0, '2014-03-27'),
(2, '2014-03-26', 'CAT', '2014', 'Kishan D Gajjar', 'gajjar.kishan92@gmail.com', 'Male', 'R', 'R', '360005', 'V', 'Vallabh Vidyanagar', '322180', 8980406078, 2812579687, 'Dineshbhai Gajjar', 9925529518, '1992-08-15', 'General', 'GCET', '2014', 'FMS', '2016', 'Positive', '', 1, 0, 0, '2014-04-30'),
(3, '2014-04-02', 'CAT', '2014', 'kartik vyas', 'kvyas@gmail.com', 'Male', 'Ravi ratna park d-162,\r\nnr.indira circle,\r\nrajkot', 'rajkot', '360005', 'Ravi ratna park d-162,\r\nnr.indira circle,\r\nrajkot', 'rajkot', '360005', 8980406078, 2812579687, 'pravin bhai', 9925529518, '1992-06-30', 'st', 'OTHERS', '2014', 'FMS', '2018', 'Not Sure', 'not sure at all', 1, 0, 0, '2014-03-30'),
(4, '2014-03-26', 'CAT', '2014', 'kishan gajjar ', 'kisnagajjar@gmail.com', 'Male', 'ravi ratna park d-162,\r\nnr. indira circle,\r\nuniversity road ', 'rajkot', '360005', 'ravi ratna park d-162,\r\nnr. indira circle,\r\nuniversity road ', 'rajkot', '360005', 8980406078, 2812579687, 'dineshbhai gajjar', 9925529518, '1992-08-15', 'General', 'GCET', '2014', 'fms', '2016', 'Positive', 'good', 1, 0, 0, '2014-03-30'),
(5, '2014-03-27', 'GRE', '2014', 'kishan gajjar', 'kisnagajjar@gmail.com', 'Male', 'R', 'Rajkot', '360005', 'R', 'Rajkot', '360005', 0, 0, '', 0, '0000-00-00', 'General', 'GCET', '', '', '', 'Positive', '', 0, 1, 0, '0000-00-00'),
(9, '2014-03-26', 'CAT', '2014', 'k', 'k@g.com', 'Male', 'r', 'r', '3', 'r', 'r', '3', 999, 0, 'd', 0, '2014-03-14', 'General', 'GCET', '', '', '', 'Positive', '', 0, 1, 0, '0000-00-00'),
(10, '2014-03-26', 'CAT', '2014', 'kishan', 'k@g.com', 'Male', 'R', 'R', '36005', 'R', 'R', '36005', 123, 0, 'D', 0, '2323-03-15', 'General', 'GCET', '', '', '', 'Positive', '', 1, 0, 0, '0000-00-00'),
(11, '2014-03-26', 'CAT', '2014', 'kishan', 'g', 'Male', 'R', 'R', 'R', 'R', 'R', 'R', 8980406078, 0, 'D', 0, '2014-03-26', 'General', 'GCET', '', '', '', 'Positive', '', 1, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `SR_NO` int(10) NOT NULL,
  `ID` varchar(50) NOT NULL,
  `COURSE` varchar(50) NOT NULL,
  `YEAR` varchar(20) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `GENDER` varchar(20) NOT NULL,
  `P_ADDR` varchar(500) NOT NULL,
  `P_CITY` varchar(100) NOT NULL,
  `P_PIN` varchar(50) NOT NULL,
  `L_ADDR` varchar(500) NOT NULL,
  `L_CITY` varchar(100) NOT NULL,
  `L_PIN` varchar(50) NOT NULL,
  `CONTACT` double NOT NULL,
  `R_CONTACT` double NOT NULL,
  `P_NAME` varchar(100) NOT NULL,
  `P_CONTACT` double NOT NULL,
  `DOB` date NOT NULL,
  `CATEGORY` varchar(20) NOT NULL,
  `SSC_SCHOOL` varchar(50) NOT NULL,
  `SSC_STREAM` varchar(50) NOT NULL,
  `SSC_YEAR` varchar(10) NOT NULL,
  `SSC_PER` varchar(10) NOT NULL,
  `HSC_SCHOOL` varchar(50) NOT NULL,
  `HSC_STREAM` varchar(50) NOT NULL,
  `HSC_YEAR` varchar(10) NOT NULL,
  `HSC_PER` varchar(10) NOT NULL,
  `GRAD_SCHOOL` varchar(50) NOT NULL,
  `GRAD_STREAM` varchar(50) NOT NULL,
  `GRAD_YEAR` varchar(10) NOT NULL,
  `GRAD_PER` varchar(10) NOT NULL,
  `PGRAD_SCHOOL` varchar(100) NOT NULL,
  `PGRAD_STREAM` varchar(50) NOT NULL,
  `PGRAD_YEAR` varchar(10) NOT NULL,
  `PGRAD_PER` varchar(10) NOT NULL,
  `COMPANY_1` varchar(50) NOT NULL,
  `DESIGNATION_1` varchar(50) NOT NULL,
  `PROFILE_1` varchar(50) NOT NULL,
  `FROM_1` date NOT NULL,
  `TO_1` date NOT NULL,
  `COMPANY_2` varchar(50) NOT NULL,
  `DESIGNATION_2` varchar(50) NOT NULL,
  `PROFILE_2` varchar(50) NOT NULL,
  `FROM_2` date NOT NULL,
  `TO_2` date NOT NULL,
  `ENROLLED` int(10) NOT NULL,
  `DAYS` varchar(20) NOT NULL,
  `BATCH` varchar(20) NOT NULL,
  `TIMING` varchar(20) NOT NULL,
  `FULL_FEES` int(10) NOT NULL,
  `INSTALLMENT` int(10) NOT NULL,
  `TOTAL` varchar(20) NOT NULL,
  `DISCOUNT` varchar(20) NOT NULL,
  `INSTALLMENT_1` varchar(20) NOT NULL,
  `DATE_1` date NOT NULL,
  `INSTALLMENT_2` varchar(20) NOT NULL,
  `DATE_2` date NOT NULL,
  `INSTALLMENT_3` varchar(20) NOT NULL,
  `DATE_3` date NOT NULL,
  `FINAL` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`SR_NO`, `ID`, `COURSE`, `YEAR`, `NAME`, `EMAIL`, `GENDER`, `P_ADDR`, `P_CITY`, `P_PIN`, `L_ADDR`, `L_CITY`, `L_PIN`, `CONTACT`, `R_CONTACT`, `P_NAME`, `P_CONTACT`, `DOB`, `CATEGORY`, `SSC_SCHOOL`, `SSC_STREAM`, `SSC_YEAR`, `SSC_PER`, `HSC_SCHOOL`, `HSC_STREAM`, `HSC_YEAR`, `HSC_PER`, `GRAD_SCHOOL`, `GRAD_STREAM`, `GRAD_YEAR`, `GRAD_PER`, `PGRAD_SCHOOL`, `PGRAD_STREAM`, `PGRAD_YEAR`, `PGRAD_PER`, `COMPANY_1`, `DESIGNATION_1`, `PROFILE_1`, `FROM_1`, `TO_1`, `COMPANY_2`, `DESIGNATION_2`, `PROFILE_2`, `FROM_2`, `TO_2`, `ENROLLED`, `DAYS`, `BATCH`, `TIMING`, `FULL_FEES`, `INSTALLMENT`, `TOTAL`, `DISCOUNT`, `INSTALLMENT_1`, `DATE_1`, `INSTALLMENT_2`, `DATE_2`, `INSTALLMENT_3`, `DATE_3`, `FINAL`) VALUES
(15, 'HCS_002', 'CAT', '2014', 'Kishan D Gajjar', 'gajjar.kishan92@gmail.com', 'Male', 'R ', 'Rajkot', '360005', 'V', 'Vallabh Vidyanagar', '322180', 8980406078, 2812579687, 'Dineshbhai Gajjar', 919925529518, '1992-08-15', 'General', '', '', '', '', '', '', '', '', 'GCET', '', '2014', '', 'FMS', '', '2016', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', 1, 'M-W-F', 'HCS-CAT-A', '6 PM to 8:30 PM', 0, 1, '25000', '', '15000', '2014-03-25', '5000', '2014-03-26', '5000', '2014-03-25', ''),
(2, 'HCS_004', 'CAT', '2014', 'Parth J Patel', 'Parth2692@gmail.com', 'Male', 'Patan ', 'Patan', '390087', 'Bakrol Hostel', 'VVN', '388120', 8866643346, 0, 'Jayendrabhai Patel', 0, '1992-09-26', 'General', 'XYZ', 'Gen', '2008', '90', 'ABC', 'SCIENCE', '2010', '95', 'GCET', 'EC', '2014', '7', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', 1, 'M-W-F', 'HCS-CAT-A', '6 PM to 8:30 PM', 0, 1, 'l', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
(14, 'HCS_01', 'CAT', '2014', 'Kishan D Gajjar', 'gajjar.kishan92@gmail.com', 'Male', ' ', '', '', '', '', '', 8980406078, 0, '', 0, '0000-00-00', 'General', '', '', '', '', '', '', '', '', 'GCET', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', 1, 'M-W-F', 'HCS-CAT-A', '6 PM to 8:30 PM', 1, 0, '25000', '5000', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '20000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
