-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 12:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `hall_details`
--

CREATE TABLE `hall_details` (
  `id` int(11) NOT NULL,
  `hall_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hall_details`
--

INSERT INTO `hall_details` (`id`, `hall_name`) VALUES
(1, 'LH1'),
(2, 'LH2'),
(3, 'LH4');

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
  `id` int(11) NOT NULL,
  `uniqueid` varchar(200) NOT NULL,
  `regno` int(11) NOT NULL,
  `stname` varchar(40) NOT NULL,
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
  `sub_5` varchar(40) NOT NULL,
  `subcode_5` int(11) NOT NULL,
  `mark_1` int(11) NOT NULL,
  `mark_2` int(11) NOT NULL,
  `mark_3` int(11) NOT NULL,
  `mark_4` int(11) NOT NULL,
  `mark_5` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `result` varchar(15) NOT NULL,
  `m_per` int(11) NOT NULL,
  `att_per` int(11) NOT NULL,
  `att_date` text NOT NULL,
  `e_type` varchar(40) NOT NULL,
  `month` text NOT NULL,
  `year` int(11) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mark_details`
--

INSERT INTO `mark_details` (`id`, `uniqueid`, `regno`, `stname`, `bcode`, `bname`, `sem`, `sub_1`, `subcode_1`, `sub_2`, `subcode_2`, `sub_3`, `subcode_3`, `sub_4`, `subcode_4`, `sub_5`, `subcode_5`, `mark_1`, `mark_2`, `mark_3`, `mark_4`, `mark_5`, `total`, `result`, `m_per`, `att_per`, `att_date`, `e_type`, `month`, `year`, `remarks`) VALUES
(1, '21502408_1052_4_Model_2023', 21502408, 'ARJUN.B', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 50, 52, 45, 47, 0, 194, 'PASS', 49, 87, '2023-03-28', 'Model', 'April', 2023, ''),
(13, '21502409_1052_3_Model_2022', 21502409, 'ARTHI.R', 1052, 'CSE', 3, 'Basics of Electrical and Electronics Eng', 4052310, 'Operating System', 4052320, 'C Programming and Data structures', 4052330, '', 0, '', 0, 45, 65, 48, 0, 0, 158, 'PASS', 53, 78, '2023-03-30', 'Model', 'May', 2022, ''),
(14, '21502409_1052_1_Model_2022', 21502409, 'ARTHI.R', 1052, 'CSE', 1, 'Communicative English - I', 40011, 'Engineering Mathematics - I', 40012, 'Engineering Physics - I', 40013, 'Engineering Chemistry - I', 40014, 'Engineering Graphics - I', 40015, 15, 26, 26, 65, -1, 132, 'FAIL', 26, 54, '2023-03-16', 'Model', 'May', 2022, '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `id` int(11) NOT NULL,
  `staff_id` text NOT NULL,
  `staff_name` text NOT NULL,
  `designation` text NOT NULL,
  `bcode` int(11) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`id`, `staff_id`, `staff_name`, `designation`, `bcode`, `subject`) VALUES
(3, '101', 'Staff1', 'Lecturer', 1052, '[{\"scode\":\"40011\",\"sname\":\"Communicative English - I\",\"bcode\":\"1052\",\"sem\":\"1\",\"year\":\"1\",\"scheme\":\"N\"},{\"scode\":\"40021\",\"sname\":\"Communicative English - II\",\"bcode\":\"1052\",\"sem\":\"2\",\"year\":\"1\",\"scheme\":\"N\"},{\"scode\":\"\",\"sname\":\"\",\"bcode\":\"\",\"sem\":\"\",\"year\":\"\",\"scheme\":\"\"},{\"scode\":\"\",\"sname\":\"\",\"bcode\":\"\",\"sem\":\"\",\"year\":\"\",\"scheme\":\"\"}]'),
(4, '102', 'Staff2', 'Lecturer', 1052, '[{\"scode\":\"40012\",\"sname\":\"Engineering Mathematics - I\",\"bcode\":\"1052\",\"sem\":\"1\",\"year\":\"1\",\"scheme\":\"N\"},{\"scode\":\"40022\",\"sname\":\"Engineering Mathematics - II\",\"bcode\":\"1052\",\"sem\":\"2\",\"year\":\"1\",\"scheme\":\"N\"},{\"scode\":\"40013\",\"sname\":\"Engineering Physics - I\",\"bcode\":\"1052\",\"sem\":\"1\",\"year\":\"1\",\"scheme\":\"N\"},{\"scode\":\"40023\",\"sname\":\"Engineering Physics - II\",\"bcode\":\"1052\",\"sem\":\"2\",\"year\":\"1\",\"scheme\":\"N\"}]'),
(5, '103', 'Staff3', 'Lecturer', 1052, '[{\"scode\":\"40014\",\"sname\":\"Engineering Chemistry - I\",\"bcode\":\"1052\",\"sem\":\"1\",\"year\":\"1\",\"scheme\":\"N\"},{\"scode\":\"40024\",\"sname\":\"Engineering Chemistry - II\",\"bcode\":\"1052\",\"sem\":\"2\",\"year\":\"1\",\"scheme\":\"N\"},{\"scode\":\"40015\",\"sname\":\"Engineering Graphics - I\",\"bcode\":\"1052\",\"sem\":\"1\",\"year\":\"1\",\"scheme\":\"N\"},{\"scode\":\"40025\",\"sname\":\"Engineering Graphics - II\",\"bcode\":\"1052\",\"sem\":\"2\",\"year\":\"1\",\"scheme\":\"N\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `regno` int(11) NOT NULL,
  `stname` text NOT NULL,
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

INSERT INTO `student_details` (`regno`, `stname`, `gender`, `bcode`, `bname`, `add1`, `add2`, `add3`, `stu_phone`, `p_name`, `p_phone`) VALUES
(21502408, 'ARJUN.B', 'Male', 1052, 'CSE', '', '', '', 9790227078, '', 8796543217),
(21502409, 'ARTHI.R', 'Female', 1052, 'CSE', 'V.O.C STREET ', 'SARAVANAPURAM', 'NELLIKUPPAM', 8015220514, 'RAJA.D', 7449209085),
(21502410, 'ARUL JOTHI.P', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(21502412, 'ASHOK KUMAR.B', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(21502414, 'JALIL FASITH.J', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(21502415, 'JOTHI.K', 'Female', 1052, 'CSE', 'SELVA VINAYAGAR', 'KOVIL STREET,VAIDIPAKAM', 'NELLIKUPPAM', 7358994528, 'KALIDOSS.P', 9543403665),
(21502417, 'NATHESHA.J', 'Female', 1052, 'CSE', 'C -32', 'PUGAZENTHI SALAI ', 'BLOCK- 2 NEYVELI -1', 8248098930, 'JAYAKUMAR.J', 9344598303),
(21502418, 'NAVEENKUMAR.M', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(21502424, 'SUBASHINI S', 'Female', 1052, 'CSE', '', '', '', 0, '', 0),
(21502425, 'SYED RASOOL.S', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(21502427, 'THAMIZHVALAVAN.A', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(21502428, 'THIYAGARAJAN.GRS', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(21502429, 'VASANTH.E', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(21590808, 'MOHAMED LUKMAN.S', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(21590877, 'AKASH.A', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(21590878, 'ARUN.M', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(21590879, 'DAISY RANI.A', 'Female', 1052, 'CSE', '', '', '', 0, '', 0),
(21590881, 'NIVASHINI M', 'Female', 1052, 'CSE', '', '', '', 0, '', 0),
(22502599, 'ABITHA.K', 'Female', 1052, 'CSE', '', '', '', 0, '', 0),
(22502600, 'ASHA.G', 'Female', 1052, 'CSE', '', '', '', 0, '', 0),
(22502601, 'DHIVYASRI.G', 'Female', 1052, 'CSE', '', '', '', 0, '', 0),
(22502602, 'GURU VISHNU.C', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(22502603, 'HAVAMA.A', 'Female', 1052, 'CSE', '', '', '', 0, '', 0),
(22502604, 'KEERTHANA.S', 'Female', 1052, 'CSE', '', '', '', 0, '', 0),
(22502605, 'REJINA.A', 'Female', 1052, 'CSE', '', '', '', 0, '', 0),
(22502606, 'SANJAY.R', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(22502607, 'SURESH.S', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(22502608, 'YUVARAJ.V', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(22503542, 'MAGESH.P', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(22591191, 'FELIX ROSAN.A', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(22591192, 'GANGA.N', 'Female', 1052, 'CSE', '', '', '', 0, '', 0),
(22591194, 'KANNADASN.S', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(22591195, 'KEERTHIGA.K', 'Female', 1052, 'CSE', '', '', '', 0, '', 0),
(22591196, 'LAVANYA.R', 'Female', 1052, 'CSE', '', '', '', 0, '', 0),
(22591198, 'PRAVEENRAM.T', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(22591199, 'SAVARIMALAIIYYAPPAN.B', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
(22591201, 'SUBASHINI.A', 'Female', 1052, 'CSE', '', '', '', 0, '', 0),
(225912000, 'SIVAGANESH.S', 'Male', 1052, 'CSE', '', '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_details`
--

CREATE TABLE `sub_details` (
  `id` int(11) NOT NULL,
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

INSERT INTO `sub_details` (`id`, `scode`, `sname`, `bcode`, `sem`, `year`, `scheme`) VALUES
(1, 40011, 'Communicative English - I', 1010, 1, 1, 'N'),
(2, 40011, 'Communicative English - I', 1020, 1, 1, 'N'),
(3, 40011, 'Communicative English - I', 1030, 1, 1, 'N'),
(4, 40011, 'Communicative English - I', 1040, 1, 1, 'N'),
(5, 40011, 'Communicative English - I', 1052, 1, 1, 'N'),
(6, 40012, 'Engineering Mathematics - I', 1010, 1, 1, 'N'),
(7, 40012, 'Engineering Mathematics - I', 1020, 1, 1, 'N'),
(8, 40012, 'Engineering Mathematics - I', 1030, 1, 1, 'N'),
(9, 40012, 'Engineering Mathematics - I', 1040, 1, 1, 'N'),
(10, 40012, 'Engineering Mathematics - I', 1052, 1, 1, 'N'),
(11, 40013, 'Engineering Physics - I', 1010, 1, 1, 'N'),
(12, 40013, 'Engineering Physics - I', 1020, 1, 1, 'N'),
(13, 40013, 'Engineering Physics - I', 1030, 1, 1, 'N'),
(14, 40013, 'Engineering Physics - I', 1040, 1, 1, 'N'),
(15, 40013, 'Engineering Physics - I', 1052, 1, 1, 'N'),
(16, 40014, 'Engineering Chemistry - I', 1010, 1, 1, 'N'),
(17, 40014, 'Engineering Chemistry - I', 1020, 1, 1, 'N'),
(18, 40014, 'Engineering Chemistry - I', 1030, 1, 1, 'N'),
(19, 40014, 'Engineering Chemistry - I', 1040, 1, 1, 'N'),
(20, 40014, 'Engineering Chemistry - I', 1052, 1, 1, 'N'),
(21, 40015, 'Engineering Graphics - I', 1010, 1, 1, 'N'),
(22, 40015, 'Engineering Graphics - I', 1020, 1, 1, 'N'),
(23, 40015, 'Engineering Graphics - I', 1030, 1, 1, 'N'),
(24, 40015, 'Engineering Graphics - I', 1040, 1, 1, 'N'),
(25, 40015, 'Engineering Graphics - I', 1052, 1, 1, 'N'),
(26, 40021, 'Communicative English - II', 1010, 2, 1, 'N'),
(27, 40021, 'Communicative English - II', 1020, 2, 1, 'N'),
(28, 40021, 'Communicative English - II', 1030, 2, 1, 'N'),
(29, 40021, 'Communicative English - II', 1040, 2, 1, 'N'),
(30, 40021, 'Communicative English - II', 1052, 2, 1, 'N'),
(31, 40022, 'Engineering Mathematics - II', 1010, 2, 1, 'N'),
(32, 40022, 'Engineering Mathematics - II', 1020, 2, 1, 'N'),
(33, 40022, 'Engineering Mathematics - II', 1030, 2, 1, 'N'),
(34, 40022, 'Engineering Mathematics - II', 1040, 2, 1, 'N'),
(35, 40022, 'Engineering Mathematics - II', 1052, 2, 1, 'N'),
(36, 40023, 'Engineering Physics - II', 1010, 2, 1, 'N'),
(37, 40023, 'Engineering Physics - II', 1020, 2, 1, 'N'),
(38, 40023, 'Engineering Physics - II', 1030, 2, 1, 'N'),
(39, 40023, 'Engineering Physics - II', 1040, 2, 1, 'N'),
(40, 40023, 'Engineering Physics - II', 1052, 2, 1, 'N'),
(41, 40024, 'Engineering Chemistry - II', 1010, 2, 1, 'N'),
(42, 40024, 'Engineering Chemistry - II', 1020, 2, 1, 'N'),
(43, 40024, 'Engineering Chemistry - II', 1030, 2, 1, 'N'),
(44, 40024, 'Engineering Chemistry - II', 1040, 2, 1, 'N'),
(45, 40024, 'Engineering Chemistry - II', 1052, 2, 1, 'N'),
(46, 40025, 'Engineering Graphics - II', 1010, 2, 1, 'N'),
(47, 40025, 'Engineering Graphics - II', 1020, 2, 1, 'N'),
(48, 40025, 'Engineering Graphics - II', 1030, 2, 1, 'N'),
(49, 40025, 'Engineering Graphics - II', 1040, 2, 1, 'N'),
(50, 40025, 'Engineering Graphics - II', 1052, 2, 1, 'N'),
(51, 4010310, 'Mechanics of Solids', 1010, 3, 2, 'N'),
(52, 4010320, 'Construction Materials and Construction Practice', 1010, 3, 2, 'N'),
(53, 4010330, 'Surveying', 1010, 3, 2, 'N'),
(54, 4010340, 'Building Planning and Drawing', 1010, 3, 2, 'N'),
(55, 4010410, 'Theory of Structures', 1010, 4, 2, 'N'),
(56, 4010420, 'Hydraulics', 1010, 4, 2, 'N'),
(57, 4010430, 'Transportation Engineering', 1010, 4, 2, 'N'),
(58, 4010510, 'Structural Engineering', 1010, 5, 3, 'N'),
(59, 4010520, 'Environmental Engineering', 1010, 5, 3, 'N'),
(60, 4010533, 'Geotechnical Engineering', 1010, 5, 3, 'N'),
(61, 4010610, 'Construction Management', 1010, 6, 3, 'N'),
(62, 4010620, 'Estimation, Costing and Valuation', 1010, 6, 3, 'N'),
(63, 4010633, 'Water Resources Engineering', 1010, 6, 3, 'N'),
(64, 4020310, 'Strength of Materials', 1020, 3, 2, 'N'),
(65, 4020320, 'Manufacturing Technology - I', 1020, 3, 2, 'N'),
(66, 4020330, 'Measurements and Metrology', 1020, 3, 2, 'N'),
(67, 4020340, 'Thermal Engineering – I', 1020, 3, 2, 'N'),
(68, 4020410, 'Fluid Mechanics and Fluid Power', 1020, 4, 2, 'N'),
(69, 4020420, 'Manufacturing Technology II', 1020, 4, 2, 'N'),
(70, 4020430, 'Electrical Drives and Controls', 1020, 4, 2, 'N'),
(71, 4020440, 'Production and Quality Management', 1020, 4, 2, 'N'),
(72, 4020510, 'Design of Machine Elements', 1020, 5, 3, 'N'),
(73, 4020520, 'Thermal Engineering – II', 1020, 5, 3, 'N'),
(74, 4020531, 'Computer Integrated Manufacturing', 1020, 5, 3, 'N'),
(75, 4020610, 'Industrial Engineering and Management', 1020, 6, 3, 'N'),
(76, 4020620, 'E Vehicle Technology & Policy', 1020, 6, 3, 'N'),
(77, 4020632, 'Refrigeration and Air Conditioning', 1020, 6, 3, 'N'),
(78, 4030320, 'Electrical Circuit Theory', 1030, 3, 2, 'N'),
(79, 4030330, 'Electrical Machines -1', 1030, 3, 2, 'N'),
(80, 4030410, 'Electrical Machines -II', 1030, 4, 2, 'N'),
(81, 4030420, 'Measurements, Instruments and Transducers', 1030, 4, 2, 'N'),
(82, 4030510, 'Generation Transmission and Switchgear', 1030, 5, 3, 'N'),
(83, 4030511, 'Elective I Theory- Control of Electrical Machines', 1030, 5, 3, 'N'),
(84, 4030610, 'Distribution and Utilization', 1030, 6, 3, 'N'),
(85, 4030621, 'Elective II Theory - Power Electronics', 1030, 6, 3, 'N'),
(86, 4030630, 'Energy Conservation and Audit', 1030, 6, 3, 'N'),
(87, 4040310, 'Electronic Devices and Circuits', 1030, 3, 2, 'N'),
(88, 4040310, 'Electronic Devices and Circuits ', 1040, 3, 2, 'N'),
(89, 4040320, 'Electrical Circuits and Instrumentation', 1040, 3, 2, 'N'),
(90, 4040330, 'Programming in ‘C’', 1040, 3, 2, 'N'),
(91, 4040410, 'Industrial Electronics', 1040, 4, 2, 'N'),
(92, 4040420, 'Communication Engineering', 1040, 4, 2, 'N'),
(93, 4040430, 'Analog and Digital Electronics', 1040, 4, 2, 'N'),
(94, 4040510, 'Analog and Digital Communication systems', 1040, 5, 3, 'N'),
(95, 4040520, 'Microcontroller and its Applications', 1040, 5, 3, 'N'),
(96, 4040531, 'Elective 1.Very Large Scale Integration', 1040, 5, 3, 'N'),
(97, 4040610, 'Computer Hardware Servicing and Networking', 1040, 6, 3, 'N'),
(98, 4040620, 'Biomedical Instrumentation', 1040, 6, 3, 'N'),
(99, 4040631, 'Television Engineering', 1040, 6, 3, 'N'),
(100, 4052310, 'Basics of Electrical and Electronics Engineering', 1052, 3, 2, 'N'),
(101, 4052320, 'Operating System', 1052, 3, 2, 'N'),
(102, 4052330, 'C Programming and Data structures', 1052, 3, 2, 'N'),
(103, 4052410, 'Computer Architecture', 1052, 4, 2, 'N'),
(104, 4052420, 'Web design and Programming', 1052, 4, 2, 'N'),
(105, 4052430, 'Object Oriented Programming with Java', 1052, 4, 2, 'N'),
(106, 4052440, 'RDBMS', 1052, 4, 2, 'N'),
(107, 4052510, 'Python Programming', 1052, 5, 3, 'N'),
(108, 4052520, 'Cloud Computing and Internet of Things', 1052, 5, 3, 'N'),
(109, 4052531, 'Elective Theory-I -Component Based Technology', 1052, 5, 3, 'N'),
(110, 4052610, 'Computer Hardware and Servicing', 1052, 6, 3, 'N'),
(111, 4052620, 'Computer Networks and Security', 1052, 6, 3, 'N'),
(112, 4052632, 'Elective Theory-II - Multimedia Systems', 1052, 6, 3, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `timetable_details`
--

CREATE TABLE `timetable_details` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(200) NOT NULL,
  `day` text NOT NULL,
  `bcode` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `day_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timetable_details`
--

INSERT INTO `timetable_details` (`id`, `unique_id`, `day`, `bcode`, `sem`, `year`, `day_details`) VALUES
(30, 'Monday_1052_1_2023', 'Monday', 1052, 1, 2023, '{\"1\":{\"hour\":1,\"staff\":\"Staff1\",\"subject\":\"Communicative English - I\",\"hall\":\"LH1\"},\"2\":{\"hour\":2,\"staff\":\"Staff2\",\"subject\":\"Engineering Mathematics - I\",\"hall\":\"LH1\"},\"3\":{\"hour\":3,\"staff\":\"Staff2\",\"subject\":\"Engineering Mathematics - I\",\"hall\":\"LH1\"},\"4\":{\"hour\":4,\"staff\":\"Staff3\",\"subject\":\"Engineering Chemistry - I\",\"hall\":\"LH1\"},\"5\":{\"hour\":5,\"staff\":\"Staff3\",\"subject\":\"Engineering Graphics - I\",\"hall\":\"LH4\"},\"6\":{\"hour\":6,\"staff\":\"Staff3\",\"subject\":\"Engineering Graphics - I\",\"hall\":\"LH4\"},\"7\":{\"hour\":7,\"staff\":\"Staff3\",\"subject\":\"Engineering Graphics - I\",\"hall\":\"LH4\"}}'),
(31, 'Tuesday_1052_1_2023', 'Tuesday', 1052, 1, 2023, '{\"1\":{\"hour\":1,\"staff\":\"Staff2\",\"subject\":\"Engineering Mathematics - I\",\"hall\":\"LH1\"},\"2\":{\"hour\":2,\"staff\":\"Staff2\",\"subject\":\"Engineering Mathematics - I\",\"hall\":\"LH1\"},\"3\":{\"hour\":3,\"staff\":\"Staff3\",\"subject\":\"Engineering Chemistry - I\",\"hall\":\"LH1\"},\"4\":{\"hour\":4,\"staff\":\"Staff3\",\"subject\":\"Engineering Chemistry - I\",\"hall\":\"LH1\"},\"5\":{\"hour\":5,\"staff\":\"Staff1\",\"subject\":\"Communicative English - I\",\"hall\":\"LH1\"},\"6\":{\"hour\":6,\"staff\":\"Staff2\",\"subject\":\"Engineering Physics - I\",\"hall\":\"LH1\"},\"7\":{\"hour\":7,\"staff\":\"Staff2\",\"subject\":\"Engineering Physics - I\",\"hall\":\"LH1\"}}'),
(32, 'Wednesday_1052_1_2023', 'Wednesday', 1052, 1, 2023, '{\"1\":{\"hour\":1,\"staff\":\"Staff1\",\"subject\":\"Communicative English - I\",\"hall\":\"LH1\"},\"2\":{\"hour\":2,\"staff\":\"Staff1\",\"subject\":\"Communicative English - I\",\"hall\":\"LH1\"},\"3\":{\"hour\":3,\"staff\":\"Staff1\",\"subject\":\"Communicative English - I\",\"hall\":\"LH1\"},\"4\":{\"hour\":4,\"staff\":\"Staff1\",\"subject\":\"Communicative English - I\",\"hall\":\"LH1\"},\"5\":{\"hour\":5,\"staff\":\"Staff2\",\"subject\":\"Engineering Mathematics - I\",\"hall\":\"LH1\"},\"6\":{\"hour\":6,\"staff\":\"Staff2\",\"subject\":\"Engineering Physics - I\",\"hall\":\"LH1\"},\"7\":{\"hour\":7,\"staff\":\"Staff3\",\"subject\":\"Engineering Chemistry - I\",\"hall\":\"LH1\"}}'),
(33, 'Thursday_1052_1_2023', 'Thursday', 1052, 1, 2023, '{\"1\":{\"hour\":1,\"staff\":\"Staff3\",\"subject\":\"Engineering Graphics - I\",\"hall\":\"LH4\"},\"2\":{\"hour\":2,\"staff\":\"Staff3\",\"subject\":\"Engineering Graphics - I\",\"hall\":\"LH4\"},\"3\":{\"hour\":3,\"staff\":\"Staff3\",\"subject\":\"Engineering Graphics - I\",\"hall\":\"LH4\"},\"4\":{\"hour\":4,\"staff\":\"Staff1\",\"subject\":\"Communicative English - I\",\"hall\":\"LH1\"},\"5\":{\"hour\":5,\"staff\":\"Staff2\",\"subject\":\"Engineering Mathematics - I\",\"hall\":\"LH1\"},\"6\":{\"hour\":6,\"staff\":\"Staff2\",\"subject\":\"Engineering Physics - I\",\"hall\":\"LH1\"},\"7\":{\"hour\":7,\"staff\":\"Staff3\",\"subject\":\"Engineering Chemistry - I\",\"hall\":\"LH1\"}}'),
(34, 'Friday_1052_1_2023', 'Friday', 1052, 1, 2023, '{\"1\":{\"hour\":1,\"staff\":\"Staff1\",\"subject\":\"Communicative English - I\",\"hall\":\"LH1\"},\"2\":{\"hour\":2,\"staff\":\"Staff2\",\"subject\":\"Engineering Mathematics - I\",\"hall\":\"LH1\"},\"3\":{\"hour\":3,\"staff\":\"Staff3\",\"subject\":\"Engineering Chemistry - I\",\"hall\":\"LH1\"},\"4\":{\"hour\":4,\"staff\":\"Staff2\",\"subject\":\"Engineering Physics - I\",\"hall\":\"LH1\"},\"5\":{\"hour\":5,\"staff\":\"Staff3\",\"subject\":\"Engineering Chemistry - I\",\"hall\":\"LH1\"},\"6\":{\"hour\":6,\"staff\":\"Staff2\",\"subject\":\"Engineering Physics - I\",\"hall\":\"LH1\"},\"7\":{\"hour\":7,\"staff\":\"Staff2\",\"subject\":\"Engineering Mathematics - I\",\"hall\":\"LH1\"}}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hall_details`
--
ALTER TABLE `hall_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mark_details`
--
ALTER TABLE `mark_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueid` (`uniqueid`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable_details`
--
ALTER TABLE `timetable_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hall_details`
--
ALTER TABLE `hall_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mark_details`
--
ALTER TABLE `mark_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff_details`
--
ALTER TABLE `staff_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_details`
--
ALTER TABLE `sub_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `timetable_details`
--
ALTER TABLE `timetable_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
