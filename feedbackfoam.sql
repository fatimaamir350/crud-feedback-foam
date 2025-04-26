-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2025 at 08:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbackfoam`
--

CREATE TABLE `feedbackfoam` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(50) NOT NULL,
  `stu_email` varchar(50) NOT NULL,
  `stu_phone` int(11) NOT NULL,
  `stu_center` varchar(50) NOT NULL,
  `stu_batch` varchar(50) NOT NULL,
  `stu_desciption` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbackfoam`
--

INSERT INTO `feedbackfoam` (`stu_id`, `stu_name`, `stu_email`, `stu_phone`, `stu_center`, `stu_batch`, `stu_desciption`) VALUES
(15, 'fatima', 'fatima@gmail.com', 2147483647, 'aptechmalir', 'PR2-202407G', 'good'),
(16, 'amna', 'amna@gmail.com', 2147483647, 'global', 'B123', 'Very helpful classes!'),
(17, 'maha', 'maha@gmail.com', 2147483647, 'aptechmalir', 'K789', 'Great experience with teachers.'),
(18, 'ayesha', 'ayesha@gmail.com', 2147483647, 'kinginstitute', 'M321', 'Good management and support.'),
(19, 'hassan', 'hassan@gmail.com', 2147483647, 'aptechmetro', 'F654', 'Best center for IT courses!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbackfoam`
--
ALTER TABLE `feedbackfoam`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbackfoam`
--
ALTER TABLE `feedbackfoam`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
