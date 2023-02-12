-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 11:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stu-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `password` text NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `password`, `type`) VALUES
(1, 'admin', '25d55ad283aa400af464c76d713c07ad', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mark_details`
--

CREATE TABLE `mark_details` (
  `regno` int(11) NOT NULL,
  `sname` varchar(40) NOT NULL,
  `bcode` int(11) NOT NULL,
  `bname` varchar(40) NOT NULL,
  `sem` int(11) NOT NULL,
  `sub_1` varchar(40) NOT NULL,
  `subcode_1` int(11) NOT NULL,
  `sub_2` varchar(40) NOT NULL,
  `subcode_2` int(11) NOT NULL,
  `sub_3` varchar(40) NOT NULL,
  `subcode_3` int(11) NOT NULL,
  `sub_4` varchar(40) NOT NULL,
  `subcode_4` int(11) NOT NULL,
  `mark_1` int(11) NOT NULL,
  `mark_2` int(11) NOT NULL,
  `mark_3` int(11) NOT NULL,
  `mark_4` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `result` varchar(15) NOT NULL,
  `m_per` int(11) NOT NULL,
  `att_per` int(11) NOT NULL,
  `e_type` varchar(40) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `regno` int(11) NOT NULL,
  `sname` text NOT NULL,
  `gender` varchar(15) NOT NULL,
  `bcode` int(11) NOT NULL,
  `bname` varchar(40) NOT NULL,
  `add1` varchar(40) NOT NULL,
  `add2` varchar(40) NOT NULL,
  `add3` varchar(40) NOT NULL,
  `stu_phone` bigint(20) NOT NULL,
  `p_name` varchar(40) NOT NULL,
  `p_phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`regno`, `sname`, `gender`, `bcode`, `bname`, `add1`, `add2`, `add3`, `stu_phone`, `p_name`, `p_phone`) VALUES
(102, 'New User', 'Male', 1020, 'Mech', '125', 'Nehru St', 'Panruti', 9876543210, 'New Parent', 9876543210),
(103, 'Mani', 'Male', 1052, 'CSE', '157', 'Nehru St', 'Neyveli', 9876543210, 'Math', 9876543210);

-- --------------------------------------------------------

--
-- Table structure for table `sub_details`
--

CREATE TABLE `sub_details` (
  `scode` int(11) NOT NULL,
  `sname` text NOT NULL,
  `bcode` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `scheme` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_details`
--

INSERT INTO `sub_details` (`scode`, `sname`, `bcode`, `sem`, `year`, `scheme`) VALUES
(35231, 'Basics of Electrical and Electronics Engineering', 1052, 3, 2, 'N'),
(35241, 'Computer Architecture', 1052, 4, 2, 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mark_details`
--
ALTER TABLE `mark_details`
  ADD PRIMARY KEY (`regno`),
  ADD UNIQUE KEY `regno` (`regno`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`regno`),
  ADD UNIQUE KEY `regno` (`regno`);

--
-- Indexes for table `sub_details`
--
ALTER TABLE `sub_details`
  ADD PRIMARY KEY (`scode`),
  ADD UNIQUE KEY `scode` (`scode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
