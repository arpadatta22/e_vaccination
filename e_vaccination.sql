-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2021 at 07:43 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_vaccination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `type` varchar(30) NOT NULL,
  `pass` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `type`, `pass`) VALUES
(0, 'Arpa', 'Admin', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `c_name` varchar(15) NOT NULL,
  `c_gender` varchar(8) DEFAULT NULL,
  `c_city` varchar(30) DEFAULT NULL,
  `c_birth` date DEFAULT NULL,
  `c_age` int(3) DEFAULT NULL,
  `c_weight` int(5) DEFAULT NULL,
  `c_height` int(5) DEFAULT NULL,
  `c_vaccine` varchar(100) DEFAULT NULL,
  `p_username` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`c_name`, `c_gender`, `c_city`, `c_birth`, `c_age`, `c_weight`, `c_height`, `c_vaccine`, `p_username`) VALUES
('Prapti Datta', 'Female', 'Dhaka', '2021-09-02', 1, 1, 1, 'Hepatitis B Birth dose,Dhaka Shishu (Children) Hospital', 'Shupty');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `name` varchar(255) NOT NULL,
  `timing` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`name`, `timing`) VALUES
('Dhaka Shishu (Children) Hospital', 6);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `p_username` varchar(40) NOT NULL,
  `p_lastname` varchar(40) NOT NULL,
  `p_gender` varchar(40) NOT NULL,
  `p_city` varchar(40) NOT NULL,
  `p_birth` int(11) NOT NULL,
  `p_email` varchar(40) NOT NULL,
  `p_pass` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`p_username`, `p_lastname`, `p_gender`, `p_city`, `p_birth`, `p_email`, `p_pass`) VALUES
('Shupty', 'Datta', 'Female', 'Dhaka', 1991, 'shupty@gmail.com', 1234),
('ratri', 'Datta', 'Female', 'Sylhet', 1996, 'ratridatta@gmail.com', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `name` varchar(50) NOT NULL,
  `timing` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`name`, `timing`) VALUES
('', '+9 month'),
('Hepatitis B Birth dose', '+1 day'),
('Pentavelant', '+2 month'),
('Pentavelant', '+2 month'),
('BCG', '+6 month'),
('Vitamin A', '+9 month'),
('Pentavelant', '+2 month'),
('BCG', '+6 month'),
('DPT 1st  booster', '+24 month');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_dates`
--

CREATE TABLE `vaccine_dates` (
  `name` varchar(50) NOT NULL,
  `v_date` date DEFAULT NULL,
  `timing` varchar(20) NOT NULL,
  `c_name` varchar(15) DEFAULT NULL,
  `p_username` varchar(15) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccine_dates`
--

INSERT INTO `vaccine_dates` (`name`, `v_date`, `timing`, `c_name`, `p_username`, `status`) VALUES
('Hepatitis B Birth dose', '2021-09-02', '2021-09-03', 'Prapti Datta', 'Shupty', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD KEY `p_username` (`p_username`);

--
-- Indexes for table `vaccine_dates`
--
ALTER TABLE `vaccine_dates`
  ADD KEY `p_username` (`p_username`),
  ADD KEY `c_name` (`c_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
