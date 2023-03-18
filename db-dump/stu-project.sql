-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2023 at 12:06 PM
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
  `id` int(11) NOT NULL,
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

INSERT INTO `mark_details` (`id`, `regno`, `stname`, `bcode`, `bname`, `sem`, `sub_1`, `subcode_1`, `sub_2`, `subcode_2`, `sub_3`, `subcode_3`, `sub_4`, `subcode_4`, `sub_5`, `subcode_5`, `mark_1`, `mark_2`, `mark_3`, `mark_4`, `mark_5`, `total`, `result`, `m_per`, `att_per`, `att_date`, `e_type`, `month`, `year`, `remarks`) VALUES
(1, 777, 'MUTHU K', 1052, 'CSE', 3, 'C PROGRAMMING', 35233, 'Basics of Electrical and Electronics Eng', 35231, 'C PROGRAMMING', 35233, 'Basics of Electrical and Electronics Eng', 35231, '', 0, 25, 35, 36, 34, 0, 130, 'FAIL', 0, 75, '2023-02-04', 'Internal Assesment Test 1', 'February', 2021, 'GOOD'),
(2, 772, 'JANA', 1030, 'EEE', 3, 'EDC', 33031, 'EDC', 33031, 'EDC', 33031, 'EDC', 33031, '', 0, 45, 12, 36, 45, 0, 138, 'FAIL', 35, 78, '2023-02-09', 'IA1', 'February', 2023, 'GOOD'),
(3, 777, 'MUTHU K', 1052, 'CSE', 3, 'C PROGRAMMING', 35233, 'C PROGRAMMING', 35233, 'C PROGRAMMING', 35233, 'C PROGRAMMING', 35233, '', 0, 45, 25, 45, 44, 0, 159, 'PASS', 40, 89, '2023-02-15', 'IA1', 'February', 2023, 'GOOD'),
(4, 701, 'MUTHU K', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 44, 25, 48, 46, 0, 163, 'FAIL', 0, 89, '2023-02-10', '', '', 0, 'தங்கள் கல்வி நிலைய  அறிய 1-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவம் .'),
(5, 701, 'MUTHU K', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 45, 46, 35, 39, 0, 165, 'PASS', 41, 46, '2023-02-08', 'IA1', 'February', 2023, 'வருகை பதிவு 80% குறைவாக இருந்தால் வாரிய தேர்வு எழுத இயலாது என்பதை தெரிவிக்கின்றோம் ,துறை தலைவரை நேரில் அனுகவும் .'),
(6, 21590881, 'NIVASHINI M', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 48, 45, 48, 48, 0, 189, 'PASS', 47, 85, '2023-02-28', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(7, 21502424, 'SUBASHINI S', 1052, 'CSE', 6, 'Computer Networks and Security', 4052620, 'Computer Hardware and Servicing', 4052610, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Networks and Security', 4052620, '', 0, 33, 33, 45, 33, 0, 144, 'PASS', 36, 90, '2023-02-22', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(8, 22502599, 'ABITHA.K', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 42, 25, 49, 31, 0, 147, 'PASS', 37, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(9, 22502600, 'ASHA.G', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 18, 23, 28, 20, 0, 89, 'FAIL', 22, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(10, 22502601, 'DHIVYASRI.G', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 42, 24, 49, 39, 0, 154, 'PASS', 39, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(11, 22502602, 'GURU VISHNU.C', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 15, 10, 32, 24, 0, 81, 'FAIL', 20, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(12, 22502603, 'HAVAMA.A', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 37, 17, 47, 33, 0, 134, 'FAIL', 34, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(13, 22502604, 'KEERTHANA.S', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 29, 18, 36, 17, 0, 100, 'FAIL', 25, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(14, 22502605, 'REJINA.A', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 37, 25, 34, 30, 0, 126, 'PASS', 32, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(15, 22502606, 'SANJAY.R', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 16, 5, 20, 6, 0, 47, 'FAIL', 12, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(16, 22502607, 'SURESH.S', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, '', 0, 15, 4, 35, 24, 0, 78, 'FAIL', 20, 0, '', 'IA1', 'February', 2023, ''),
(17, 22502608, 'YUVARAJ.V', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 21, 14, 24, 20, 0, 79, 'FAIL', 20, 0, '', 'IA1', 'February', -2023, ''),
(18, 22503542, 'MAGESH.P', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 27, 20, 24, 22, 0, 93, 'PASS', 23, 0, '', 'IA1', 'February', 2023, ''),
(19, 22591191, 'FELIX ROSAN.A', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 9, 0, 11, 1, 0, 21, 'FAIL', 5, 0, '', 'IA1', 'February', 2023, ''),
(20, 22591192, 'GANGA.N', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 29, 25, 30, 23, 0, 107, 'PASS', 27, 0, '', 'IA1', 'February', 2023, ''),
(21, 22591194, 'KANNADASN.S', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 27, 16, 35, 23, 0, 101, 'FAIL', 25, 0, '', 'IA1', 'February', 2023, ''),
(22, 22591195, 'KEERTHIGA.K', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 26, 24, 43, 29, 0, 122, 'PASS', 31, 0, '', 'IA1', 'February', 2023, ''),
(23, 22591196, 'LAVANYA.R', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 40, 21, 35, 0, 0, 96, 'FAIL', 24, 0, '', 'IA1', 'February', 2023, ''),
(24, 22591198, 'PRAVEENRAM.T', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 33, 20, 39, 24, 0, 116, 'PASS', 29, 0, '', 'IA1', 'February', 2023, ''),
(25, 22591199, 'SAVARIMALAIIYYAPPAN.B', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 26, 26, 20, 20, 0, 92, 'PASS', 23, 0, '', 'IA1', 'February', 2023, ''),
(26, 22591200, 'SIVAGANESH.S', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 27, 27, 30, 21, 0, 105, 'PASS', 26, 0, '', 'IA1', 'February', 2023, ''),
(27, 22591201, 'SUBASHINI.A', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 25, 0, 39, 13, 0, 77, 'FAIL', 19, 0, '', 'IA1', 'February', 2023, ''),
(28, 21502408, 'ARJUN.B', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 0, 2, 20, 0, 0, 22, 'FAIL', 6, 0, '', 'IA1', 'February', 2023, ''),
(29, 21502409, 'ARTHI.R', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 40, 44, 48, 0, 0, 132, 'FAIL', 33, 0, '', 'IA1', 'February', 2023, ''),
(30, 21502410, 'ARUL JOTHI.P', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 23, 5, 23, 0, 0, 51, 'FAIL', 13, 0, '', 'IA1', 'February', 2023, ''),
(31, 21502412, 'ASHOK KUMAR.B', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 4, 1, 13, 0, 0, 18, 'FAIL', 5, 0, '', 'IA1', 'February', 2023, ''),
(32, 21502414, 'JALIL FASITH.J', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 25, 0, 24, 0, 0, 49, 'FAIL', 12, 0, '', 'IA1', 'February', 2023, ''),
(33, 21502415, 'JOTHI.K', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 32, 44, 48, 0, 0, 124, 'FAIL', 31, 0, '', 'IA1', 'February', 2023, ''),
(34, 21502417, 'NATHESHA.J', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 26, 16, 30, 0, 0, 72, 'FAIL', 18, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(35, 21502418, 'NAVEENKUMAR.M', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 15, 3, 22, 0, 0, 40, 'FAIL', 10, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(36, 21502424, 'SUBASHINI S', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 33, 33, 45, 0, 0, 111, 'FAIL', 28, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(37, 21502425, 'SYED RASOOL.S', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 11, 0, 7, 0, 0, 18, 'FAIL', 5, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(38, 21502427, 'THAMIZHVALAVAN.A', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 16, 14, 20, 0, 0, 50, 'FAIL', 13, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(39, 21502428, 'THIYAGARAJAN.GRS', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 0, 0, 0, 0, 0, 0, 'FAIL', 0, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(40, 21502429, 'VASANTH.E', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 19, 0, 12, 0, 0, 31, 'FAIL', 8, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(41, 21590879, 'DAISY RANI.A', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 44, 46, 47, 0, 0, 137, 'FAIL', 34, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(42, 21590808, 'MOHAMED LUKMAN.S', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 26, 15, 22, 0, 0, 63, 'FAIL', 16, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(43, 21590881, 'NIVASHINI M', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 48, 45, 48, 0, 0, 141, 'FAIL', 35, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(44, 21590878, 'ARUN.M', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 0, 2, 14, 0, 0, 16, 'FAIL', 4, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(45, 21590877, 'AKASH.A', 1052, 'CSE', 6, 'Computer Hardware and Servicing', 4052610, 'Computer Networks and Security', 4052620, 'Elective Theory-II - Multimedia Systems', 4052632, 'Computer Hardware and Servicing', 4052610, '', 0, 3, 2, 8, 0, 0, 13, 'FAIL', 3, 0, '', 'IA1', 'February', 2023, 'தங்கள்  மகள்  கல்வி நிலைய  அறிய வருகின்ற 14-03-2023 அன்று துறை தலைவரை நேரில் சந்திக்கவும் '),
(46, 21502409, 'ARTHI.R', 1052, 'CSE', 6, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 45, 34, 47, 40, 0, 166, 'FAIL', 0, 89, '2023-03-21', '', '', 0, 'good'),
(47, 21502408, 'ARJUN.B', 1052, 'CSE', 4, 'Computer Architecture', 4052410, 'Web design and Programming', 4052420, 'Object Oriented Programming with Java', 4052430, 'RDBMS', 4052440, '', 0, 45, 23, 42, 37, -1, 147, 'PASS', 37, 89, '2023-03-15', 'IA1', 'January', 2023, 'good'),
(48, 21502408, 'ARJUN.B', 1052, 'CSE', 1, 'Communicative English - I', 40011, 'Engineering Mathematics - I', 40012, 'Engineering Physics - I', 40013, 'Engineering Chemistry - I', 40014, 'Engineering Graphics - I', 40015, 25, 40, 37, 41, 28, 171, 'PASS', 34, 87, '2023-03-17', 'IA1', 'February', 2023, 'Good'),
(49, 21502409, 'ARTHI.R', 1052, 'CSE', 2, 'Communicative English - II', 40021, 'Engineering Mathematics - II', 40022, 'Engineering Physics - II', 40023, 'Engineering Chemistry - II', 40024, 'Engineering Graphics - II', 40025, -1, 45, 56, 25, 25, 210, 'FAIL', 42, 87, '2023-03-17', 'Model', 'March', 2023, '');

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
(21502408, 'ARJUN.B', 'Male', 1052, 'CSE', '', '', '', 0, '', 0),
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mark_details`
--
ALTER TABLE `mark_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `sub_details`
--
ALTER TABLE `sub_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
