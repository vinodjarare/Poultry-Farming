-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2022 at 08:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poultry`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus_tbl`
--

CREATE TABLE `contactus_tbl` (
  `ct_id` int(11) NOT NULL,
  `ct_fname` varchar(50) NOT NULL,
  `ct_lname` varchar(55) NOT NULL,
  `ct_email` varchar(50) NOT NULL,
  `ct_mobile` int(15) NOT NULL,
  `ct_comment` varchar(255) NOT NULL,
  `ct_cdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus_tbl`
--

INSERT INTO `contactus_tbl` (`ct_id`, `ct_fname`, `ct_lname`, `ct_email`, `ct_mobile`, `ct_comment`, `ct_cdate`) VALUES
(18, 'mohan', 'shah', 'mohan@gmail.com', 2147483647, 'hii im devil', '2022-02-19 07:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe_tbl`
--

CREATE TABLE `subscribe_tbl` (
  `nl_id` int(11) NOT NULL,
  `nl_fname` varchar(50) NOT NULL,
  `nl_lname` varchar(55) NOT NULL,
  `nl_email` varchar(50) NOT NULL,
  `nl_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe_tbl`
--

INSERT INTO `subscribe_tbl` (`nl_id`, `nl_fname`, `nl_lname`, `nl_email`, `nl_date`) VALUES
(1, 'santosh', 'asole', 'spasole24@gmail.com', '2022-02-17 18:14:27'),
(2, 'santosh', 'asole', 'spasole24@gmail.com', '2022-02-19 07:19:19'),
(3, 'ram', 'kureshi', 'as@gmail.com', '2022-02-19 07:33:59'),
(4, 'farukh', 'shah', 'fs@gmail.com', '2022-02-19 07:38:17'),
(5, 'farukh', 'shah', 'fs@gmail.com', '2022-02-19 07:38:44'),
(6, 'farukh', 'shah', 'fs@gmail.com', '2022-02-19 07:39:00'),
(7, 'farukh', 'shah', 'fs@gmail.com', '2022-02-19 07:40:07'),
(8, 'farukh', 'shah', 'fs@gmail.com', '2022-02-19 07:41:03'),
(9, 'farukh', 'shah', 'fs@gmail.com', '2022-02-19 07:41:31'),
(10, 'ram', 'shah', 'as@gmail.com', '2022-02-19 07:52:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus_tbl`
--
ALTER TABLE `contactus_tbl`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `subscribe_tbl`
--
ALTER TABLE `subscribe_tbl`
  ADD PRIMARY KEY (`nl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus_tbl`
--
ALTER TABLE `contactus_tbl`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `subscribe_tbl`
--
ALTER TABLE `subscribe_tbl`
  MODIFY `nl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
