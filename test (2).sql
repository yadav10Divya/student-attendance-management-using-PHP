-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2022 at 11:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `assign_subject`
--

CREATE TABLE `assign_subject` (
  `id` int(11) NOT NULL,
  `staffName` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_subject`
--

INSERT INTO `assign_subject` (`id`, `staffName`, `subject`, `year`, `branch`) VALUES
(1, 'Pathak.P.A', 'Machine Design', '4th Year', 'Mechanical'),
(2, 'divya', 'English', '3rd Year', 'Mechanical'),
(3, 'divya', 'computer graphics', '2nd Year', 'E and TC'),
(4, 'Pathak.P.A', 'computer graphics', '4th Year', 'Mechanical');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `student_id` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `attendence` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `student_id`, `student_name`, `subject`, `attendence`, `date`) VALUES
(1, 7, 'pratiksha', 'English', 'Present', '2022-11-24'),
(2, 8, 'divya', 'English', 'Present', '2022-11-21'),
(3, 12, 'Rohit', 'Machine Design', 'Present', '2022-11-21'),
(5, 13, 'suyog', 'Machine Design', 'Present', '2022-11-28'),
(9, 12, 'Rohit', 'Machine Design', 'Present', '2022-11-28'),
(11, 12, 'Rohit', 'Machine Design', 'Present', '2022-12-02'),
(14, 13, 'suyog', 'Machine Design', 'Present', '2022-11-04'),
(16, 13, 'suyog', 'Machine Design', 'Present', '2022-12-05 '),
(18, 13, 'suyog', 'Machine Design', 'Present', '2022-11-24'),
(19, 12, 'Rohit', 'Machine Design', 'Present', '2022-12-08 '),
(68, 8, 'divya', 'English', 'Present', '2022-11-04'),
(69, 8, 'divya', 'English', 'Present', '2022-12-08'),
(70, 13, 'suyog', 'computer graphics', 'Present', '2022-11-24'),
(71, 12, 'Rohit', 'computer graphics', 'Present', '2022-12-08 '),
(85, 12, 'Rohit', 'Machine Design', 'Present', '2022-12-05'),
(88, 13, 'suyog', 'Machine Design', 'Present', '2022-12-12'),
(91, 7, 'pratiksha', 'English', 'Present', '2022-12-11'),
(92, 7, 'pratiksha', 'English', 'Present', '2022-11-29'),
(95, 15, 'suyog', 'computer graphics', 'Present', '2022-12-05'),
(96, 15, 'suyog', 'computer graphics', 'Present', '2022-11-27'),
(97, 23, 'Rohit', 'computer graphics', 'Present', '2022-12-05'),
(98, 23, 'Rohit', 'computer graphics', 'Present', '2022-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(255) NOT NULL,
  `Branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `Branch`) VALUES
(1, 'chemical'),
(2, 'Mechanical'),
(3, 'E and TC'),
(4, 'CSE'),
(5, 'electrical');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobileNo` varchar(25) NOT NULL,
  `branch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `password`, `address`, `mobileNo`, `branch`) VALUES
(1, 'divya', '123', 'karad', '98745964', 1),
(2, 'shri', 'yadav', 'karad', '97646233', 2),
(3, 'Pathak.P.A', 'pathak', 'At/post-Satara', '97646233', 2),
(4, 'Prachi', 'prj123', 'At/post-Kale', '9373837023', 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobileNo` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `password`, `address`, `mobileNo`, `year`, `branch`, `subject`) VALUES
(7, 'pratiksha', 'pratiksha', 'pune', '97646233', '3rd Year', 'Mechanical', 'English'),
(8, 'divya', '123', 'pune', '2343456456', '3rd Year', 'Mechanical', 'English'),
(9, 'akshu', 'ak123', 'sangli', '98745964', '2nd Year', 'chemical', 'Hindi'),
(11, 'Akash', 'ah123', 'Ramnagar', '9076345612', '4th Year', 'CSE', 'computer graphics'),
(12, 'Rohit', 'sukanya', 'wai,satara', '2343456456', '4th Year', 'Mechanical', 'Machine Design'),
(13, 'suyog', 'su', 'kulgjai', '9373837023', '4th Year', 'Mechanical', 'Machine Design'),
(14, 'Gauri', 'kenjale', 'medha', '6753451234', '2nd Year', 'E and TC', 'computer graphics'),
(15, 'suyog', 'su', 'wai', '97646233', '4th Year', 'Mechanical', 'computer graphics'),
(23, 'Rohit', 'sukanya', 'wai,satara', '2343456456', '4th Year', 'Mechanical', 'computer graphics');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject`, `branch`, `year`) VALUES
(1, 'English', '2', '2nd Year'),
(2, 'Hindi', '3', '3rd Year'),
(3, 'Machine Design', '2', '4th Year'),
(4, 'computer graphics', '4', '1st Year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_subject`
--
ALTER TABLE `assign_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_subject`
--
ALTER TABLE `assign_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
