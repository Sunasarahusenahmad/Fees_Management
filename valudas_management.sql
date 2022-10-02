-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 02:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `valudas_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmission`
--

CREATE TABLE `addmission` (
  `register_no` int(4) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `father_contact_no` varchar(10) NOT NULL,
  `father_contact_no_2` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `student_address` varchar(50) NOT NULL,
  `village_city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `courses` varchar(50) NOT NULL,
  `joining_date` varchar(50) NOT NULL,
  `addmission_fees` int(11) NOT NULL,
  `addmission_type` varchar(50) NOT NULL,
  `student_image` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addmission`
--

INSERT INTO `addmission` (`register_no`, `roll_no`, `student_name`, `father_name`, `surname`, `mother_name`, `father_contact_no`, `father_contact_no_2`, `date_of_birth`, `student_address`, `village_city`, `district`, `state`, `pincode`, `gender`, `courses`, `joining_date`, `addmission_fees`, `addmission_type`, `student_image`, `status`) VALUES
(1004, 1, 'Aahil', 'Aamin Bhai', 'Sunasara', 'Aamena Ben', '1234567894', '4359985435', '2022-08-09', 'Teniwada', 'Teniwada / Chhapi', 'Banaskantha', 'Gujarat', '385210', 'Male', 'Mobile Application Development', '2022-08-09', 50000, 'Regular Addmission', 'studen2.png', 1),
(1009, 6, 'Aadil', 'Irshad Bhai', 'Machaliya', 'Rijvana Ben', '2343918242', '1234536748', '2022-07-22', 'Kamalpur', 'Kamalpur / Palanpur', 'Banaskantha', 'Gujarat', '385001', 'Male', 'Opencart Development', '2022-07-22', 50000, 'Unregular Addmission', 'studen2.png', 0),
(1011, 8, 'Rajesh', 'Pravin Bhai', 'Suthar', 'Namrata Ben', '2342323471', '1231312674', '2022-08-28', 'Chandigadh', 'Chandigadh / Palanpur', 'Banaskantha', 'Gujarat', '385001', 'Male', 'Wordpress Development', '2022-08-12', 50000, 'Unregular Addmission', 'studen8.png', 2),
(1012, 9, 'Ramesh', 'Bhikha Bhai', 'Chauhan', 'Bhikhi Ben', '1234567894', '5723423784', '2001-11-23', 'Changa', 'Changa / Mahi', 'Banaskantha', 'Gujarat', '385210', 'Male', 'Wordpress Development', '2022-08-20', 50000, 'Regular Addmission', 'student7.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `addmission_fees`
--

CREATE TABLE `addmission_fees` (
  `roll_no` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `courses` varchar(50) NOT NULL,
  `payment_date` varchar(50) NOT NULL,
  `recieve_by` varchar(50) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `pay_fees` int(11) NOT NULL,
  `student_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addmission_fees`
--

INSERT INTO `addmission_fees` (`roll_no`, `student_name`, `surname`, `courses`, `payment_date`, `recieve_by`, `payment_mode`, `pay_fees`, `student_image`) VALUES
(1, 'Aahil', 'Sunasara', 'Wordpress Development', '2022-08-17', 'Valuda Noman', 'Check', 10000, 'studen2.png'),
(6, 'Aadil', 'Machaliya', 'Opencart Development', '2022-08-15', 'Valuda Aakib', 'Cash', 6000, 'studen2.png'),
(8, 'Rajesh', 'Suthar', 'Wordpress Development', '2022-08-15', 'Valuda Noman', 'Online Transfer', 15000, 'studen8.png'),
(1, 'Aahil', 'Sunasara', 'Mobile Application Development', '2022-08-15', 'Valuda Aakib', 'Cash', 6000, 'studen2.png'),
(1, 'Aahil', 'Sunasara', 'Wordpress Development', '2022-08-17', 'Valuda Noman', 'Check', 10000, 'studen2.png'),
(8, 'Rajesh', 'Suthar', 'Wordpress Development', '2022-08-17', 'Valuda Aakib', 'Check', 22000, 'studen8.png'),
(6, 'Aadil', 'Machaliya', 'Opencart Development', '2022-08-17', 'Valuda Aakib', 'Cash', 8800, 'studen2.png'),
(9, 'Ramesh', 'Chauhan', 'Wordpress Development', '2022-08-20', 'Valuda Noman', 'Cash', 2500, 'student7.png'),
(9, 'Ramesh', 'Chauhan', 'Wordpress Development', '2022-08-27', 'Bhoraniya Mujahid', 'Check', 16500, 'student7.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `contact_no_2` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `courses` varchar(50) NOT NULL,
  `inquiry_type` varchar(50) NOT NULL,
  `reference` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `student_name`, `father_name`, `surname`, `contact_no`, `contact_no_2`, `address`, `date_of_birth`, `email`, `courses`, `inquiry_type`, `reference`) VALUES
(3, 'Salim', 'Sabbir', 'Nagori', '4534534534', '4234234235', 'Changvada', '2005-06-17', 'nagorisalim@yahoo.in', 'Wordpress Development', 'Addmission', 'Valuda Noman'),
(4, 'Aaman', 'Siddik', 'Vagadiya', '2131312319', '2342342384', 'Teniwada', '2003-11-10', 'vagadiyaaaman@yahoo.in', 'Wordpress Development', 'Addmission', 'Bhoraniya Mujahid'),
(5, 'Nofal', 'Hasan', 'Basan', '1234567895', '2345678965', 'Rajosana', '2022-08-28', 'basannofal@gmail.com', 'Mobile Application Development', 'Addmission', 'Valuda Aakib');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmission`
--
ALTER TABLE `addmission`
  ADD PRIMARY KEY (`register_no`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
