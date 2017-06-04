-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2016 at 08:33 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mu_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `patient_id` bigint(20) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` varchar(50) NOT NULL,
  `queue_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`patient_id`, `patient_name`, `doctor_name`, `appointment_date`, `appointment_time`, `queue_no`) VALUES
(2287, 'Susnata Paul', 'M.K Biswash', '2016-08-03', '', 3),
(7489, 'Subhranil Chanda', 'M.K Biswash', '2016-08-03', '', 4),
(5029, 'Ranganath Kundu', 'M.K Biswash', '2016-08-03', '', 5),
(7359, 'Pratim Sarkar', 'M.K Biswash', '2016-08-03', '', 6),
(1245, 'Debottam Datta', 'M.K Biswash', '2016-08-03', '', 7),
(7427, 'Rahul Prasad', 'M.K Biswash', '2016-08-03', '', 9),
(9158, 'Mohit Shaw', 'M.K Biswash', '2016-08-03', '', 10),
(2993, 'Rohit Ghosh', 'M.K Biswash', '2016-08-04', '', 1),
(7965, 'Neel Chanda', 'Sidhharth Malhotra', '2016-01-01', '', 1),
(4272, 'Riki Mondal', 'Sidhharth Malhotra', '2016-08-05', '', 1),
(6630, 'Srinath Sheet', 'Sidhharth Malhotra', '2016-08-05', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `field` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `field`, `username`, `password`, `mobile`, `address`) VALUES
(1, 'Sidhharth Malhotra', 'Skin Specialist', 'Sid123', '12345', '9046962544', 'Durgapur'),
(2, 'M.K Biswash', 'Surgen', 'Mk123', '12345', '8768840525', 'Midnapore'),
(3, 'Dr. Soumen Ghosh', 'General Physician ', 'Soumen123', '12345', '9474888521', 'Durgapur');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `username`, `password`, `phone`, `address`) VALUES
(1245, 'Debottam Datta', 'Debottam123', '12345', '89652145', 'Falakata'),
(2287, 'Susnata Paul', 'Ss1234', '12345', '9474068116', 'Krishnanagar'),
(2993, 'Rohit Ghosh', 'Rohit123', '12345', '9474000365', 'Kolkata'),
(4272, 'Riki Mondal', 'Riki123', '12345', '8896521457', 'Kharagpur'),
(5029, 'Ranganath Kundu', 'Ranga123', '12345', '7310056845', 'Durgapur'),
(6630, 'Srinath Sheet', 'Srin1234', '12345', '9046962544', 'Midnapore'),
(7359, 'Pratim Sarkar', 'Pratim123', '12345', '9485632145', 'Raigaunj'),
(7427, 'Rahul Prasad', 'Rahul123', '12345', '9474666851', 'Kharagpur'),
(7489, 'Subhranil Chanda', 'Subhranil123', '12345', '8755964233', 'Kolkata'),
(7965, 'Neel Chanda', 'Neel123', '12345', '9876543210', 'Kolkata'),
(9158, 'Mohit Shaw', 'Mohit123', '12345', '8965214569', 'Hoogly');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history`
--

CREATE TABLE IF NOT EXISTS `patient_history` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `history` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history`
--

INSERT INTO `patient_history` (`id`, `name`, `history`) VALUES
(2287, 'Susnata Paul', 'Headache'),
(6630, 'Srinath Sheet', 'Low pressure');

-- --------------------------------------------------------

--
-- Table structure for table `refer`
--

CREATE TABLE IF NOT EXISTS `refer` (
  `patient_id` bigint(20) NOT NULL,
  `src_doctor_id` int(11) NOT NULL,
  `dest_doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refer`
--

INSERT INTO `refer` (`patient_id`, `src_doctor_id`, `dest_doctor_id`) VALUES
(6630, 2, 1),
(4272, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_history`
--
ALTER TABLE `patient_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
