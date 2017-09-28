-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2017 at 09:05 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `taskrecord`
--

CREATE TABLE `taskrecord` (
  `id` int(100) NOT NULL,
  `Prof_id` int(100) NOT NULL,
  `Stud_id` int(100) NOT NULL,
  `Task_id` int(100) NOT NULL,
  `Task_desc` varchar(255) NOT NULL,
  `Status` int(10) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taskrecord`
--

INSERT INTO `taskrecord` (`id`, `Prof_id`, `Stud_id`, `Task_id`, `Task_desc`, `Status`, `time_stamp`) VALUES
(0, 10, 3, 1, 'Testing Just testing', 0, '2017-09-28 05:36:08'),
(1, 10, 3, 1, 'Testing Just testing', 0, '2017-09-28 05:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `type` varchar(10) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `fullname`, `type`, `joining_date`) VALUES
(3, 'nishant', 'nis@nis.com', 'nis1998', 'nishant thakur', 's', '2017-08-26 18:30:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `taskrecord`
--
ALTER TABLE `taskrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
