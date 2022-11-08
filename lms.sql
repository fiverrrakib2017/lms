-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 10:46 AM
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
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `email`, `status`, `reg_date`) VALUES
(7, 'Rakib Mahmud', 'rakibas375', 'iloverakib', 'rakibas375@gmail.com', '0', '2022-08-25 06:45:41'),
(8, 'junaid', 'junun434', 'ddddd', 'zunayed@gmail.com', '1', '2022-08-12 11:17:09'),
(9, 'Rakib Mahmud', 'admin', 'admin', 'admin@gmail.com', '1', '2022-08-13 04:32:14'),
(10, 'Shamim', 'user', 'user', 'user@gmail.com', '1', '2022-08-25 06:01:46');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `batch_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `uid`, `batch_name`, `package_id`, `reg_date`) VALUES
(1, 7, 'Batch1', 1, '2022-10-06 09:49:07'),
(2, 7, 'Batch1', 2, '2022-10-07 05:45:22'),
(3, 7, 'Batch1', 3, '2022-10-07 09:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `download_certificate`
--

CREATE TABLE `download_certificate` (
  `id` int(11) NOT NULL,
  `student_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrolment`
--

CREATE TABLE `enrolment` (
  `enrollment_id` int(11) NOT NULL,
  `enrollment_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `from` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `to` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `sid` int(11) NOT NULL,
  `complete_date` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enrolment`
--

INSERT INTO `enrolment` (`enrollment_id`, `enrollment_date`, `from`, `to`, `sid`, `complete_date`, `reg_date`) VALUES
(1, '2022-10-06', '6 AM', '9 AM', 1, '2022-10-06', '2022-10-06 09:57:57'),
(2, '2022-10-07', '6 AM', '6 AM', 2, '2022-10-07', '2022-10-07 09:22:49'),
(3, '2022-10-07', '6 AM', '6 AM', 3, '2023-04-07', '2022-10-07 11:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(55) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=active, 1=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `uid` int(255) NOT NULL,
  `sid` int(255) NOT NULL,
  `add_money` int(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message_template`
--

CREATE TABLE `message_template` (
  `id` int(11) NOT NULL,
  `template_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message_template`
--

INSERT INTO `message_template` (`id`, `template_name`, `description`, `uid`) VALUES
(1, 'welcome message from customer', 'hey thiss asdfasdfahey thiss asdfasdfasvhey thiss asdfasdfashey thiss asdfasdfashey thiss asdfasdfashey thiss asdfasdfashey thiss asdfasdfashey thiss asdfasdfashey thiss asdfasdfass', 2);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `type`, `price`) VALUES
(1, 'Digital Marketing ', 'Professional', 7000),
(2, 'Graphic Design', 'Professional', 15000),
(3, 'Graphic Design', 'Basic', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `study` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_asign` int(11) NOT NULL,
  `reference` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `package` int(255) NOT NULL,
  `batch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paid` int(255) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `due` int(255) NOT NULL,
  `total_amount` int(255) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `mobile`, `address`, `email`, `nid`, `study`, `teacher_asign`, `reference`, `package`, `batch`, `paid`, `discount`, `due`, `total_amount`, `reg_date`, `status`, `uid`) VALUES
(1, 'Rubel Ahmed', '01817940449', 'rangashimulia,daudkandi,cumilla', 'nellpki2@gmail.com', '6904137384', 'Degree 3rd year', 11, 'Pronto saha', 1, '1', 1000, 0, 6000, 7000, '2022-10-06 09:57:57', '1', 7),
(2, 'shajjad', '0193833443', 'gouripur,cumilla', 'sajjad@gmail.com', '038467894673', 'BBA', 0, 'sumon vaii', 3, '2', 5000, 10, 2200, 7200, '2022-10-07 10:38:42', '1', 7),
(3, 'Jihad Hossain', '01757967432', 'kanora,gouripur,daudkandi,cumilla', 'jihad@gmail.com', '038467894673', 'ssc completed', 5, 'Sajjad Hossain', 3, '3', 5000, 5, 2600, 7600, '2022-10-07 11:50:56', '1', 7);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `working_days` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `uid`, `teacher_name`, `designation`, `working_days`, `status`) VALUES
(4, 2, 'Jihad Hasan', 'Graphic designer', '21', '1'),
(5, 2, 'Rakib Mahmud', 'Software Developer', '30', '1'),
(6, 2, 'Jihad Hasan', 'Graphic designer', '21', '0'),
(7, 2, 'Rakib Mahmud', 'Software Developer', '30', '0'),
(10, 9, 'Rakib Mah', 'designer', '43', '0'),
(11, 7, 'Md Hannan ', 'digital marketing', '30', '1');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=active, 1=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download_certificate`
--
ALTER TABLE `download_certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolment`
--
ALTER TABLE `enrolment`
  ADD PRIMARY KEY (`enrollment_id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_template`
--
ALTER TABLE `message_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `download_certificate`
--
ALTER TABLE `download_certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrolment`
--
ALTER TABLE `enrolment`
  MODIFY `enrollment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message_template`
--
ALTER TABLE `message_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
