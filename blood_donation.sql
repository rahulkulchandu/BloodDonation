-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2021 at 11:12 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mobile_number` varchar(14) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_message` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`user_id`, `username`, `mobile_number`, `user_email`, `user_message`, `datetime`) VALUES
(2, 'RAHUL Saini', '9588103862', 'rahulkulchandu2@gmail.com', 'this is by mistake\n', '2021-12-26 15:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `donorsdetails`
--

CREATE TABLE `donorsdetails` (
  `donor_id` int(20) NOT NULL,
  `donor_name` varchar(255) NOT NULL,
  `donor_mobile` varchar(14) NOT NULL,
  `donor_email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `donor_age` varchar(20) NOT NULL,
  `donor_gender` varchar(10) NOT NULL,
  `donor_bgroup` varchar(10) NOT NULL,
  `donor_address` varchar(500) NOT NULL,
  `donor_status` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donorsdetails`
--

INSERT INTO `donorsdetails` (`donor_id`, `donor_name`, `donor_mobile`, `donor_email`, `token`, `donor_age`, `donor_gender`, `donor_bgroup`, `donor_address`, `donor_status`, `date_time`) VALUES
(4, 'RAHUL saini', '8607717690', 'rahulkulchandu2@gmail.com', 'a17099769b4db1a23d9aff3787f76c', '21', 'Male', 'AB+', '123456, kulchandu,yamunanagar 133103', 'active', '2021-12-19 11:38:58'),
(15, 'sumit kumar', '7474078996', 'sumit132@gmail.com', '16fb478cd2258d21f4f6e8e53e8567', '19', 'Male', 'A+', 'village damla dist yamunanagar', 'active', '2021-12-26 15:10:51'),
(17, 'nikhil', '9992212109', 'nikhilvelly@gmail.com', '76a87ff601b35d943175e57b282818', '22', 'Male', 'A-', 'udhamgarh ki majri jagadhri , yamunanagar 135001', 'active', '2021-12-26 15:25:32'),
(18, 'udit', '8607280819', 'uditsaini86072@gmail.com', '96ea4e5362e7de3b035a09dc27df68', '19', 'Male', 'O+', 'safilpur sadhora yamunangar', 'active', '2021-12-26 15:26:34');

-- --------------------------------------------------------

--
-- Table structure for table `xhrdata`
--

CREATE TABLE `xhrdata` (
  `id` int(20) NOT NULL,
  `aboutus` varchar(10000) NOT NULL,
  `why_become_donor` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xhrdata`
--

INSERT INTO `xhrdata` (`id`, `aboutus`, `why_become_donor`) VALUES
(1, 'Meet other expatriates like you. Join exciting Groups and Events in Lima. The Number 1 Expat Community. InterNations Helps you feel at home around the world! Local Events & Activities. Local Forums. Jobs & Housing Listings. 420 Global Communities.', 'rahul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `donorsdetails`
--
ALTER TABLE `donorsdetails`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `xhrdata`
--
ALTER TABLE `xhrdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donorsdetails`
--
ALTER TABLE `donorsdetails`
  MODIFY `donor_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `xhrdata`
--
ALTER TABLE `xhrdata`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
