-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 05:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhomekashmir_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_role_tbl`
--

CREATE TABLE `user_role_tbl` (
  `ur_id` int(11) NOT NULL COMMENT 'UserRoleId',
  `ur_role` varchar(200) NOT NULL COMMENT 'UserRole',
  `ur_status` int(11) NOT NULL DEFAULT 1 COMMENT 'Status'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role_tbl`
--

INSERT INTO `user_role_tbl` (`ur_id`, `ur_role`, `ur_status`) VALUES
(1, 'admin', 1),
(2, 'agent', 0),
(3, 'client', 0),
(4, 'agency', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `u_id` int(11) NOT NULL COMMENT 'User ID',
  `u_ur_id` int(11) NOT NULL COMMENT 'User Role ID',
  `u_name` varchar(30) NOT NULL COMMENT 'User Name',
  `u_email` varchar(50) NOT NULL COMMENT 'User Email',
  `u_phone` varchar(13) NOT NULL,
  `u_username` varchar(20) NOT NULL,
  `u_password` varchar(500) NOT NULL,
  `u_doc` datetime NOT NULL DEFAULT current_timestamp(),
  `u_dou` datetime NOT NULL,
  `u_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`u_id`, `u_ur_id`, `u_name`, `u_email`, `u_phone`, `u_username`, `u_password`, `u_doc`, `u_dou`, `u_status`) VALUES
(1, 1, 'Zaid', 'zaid@gmail.com', '9419452387', 'zaidjaveed', '9b569f88da56bc5530c11dca4ea52c58', '2022-01-09 21:08:47', '2022-01-09 21:07:03', 1),
(2, 0, 'Aamir Bashir', 'eraamirsofi@gmail.com', '+917006939042', 'fsdfds', 'dfsdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(3, 0, 'Irfan', 'irfan@gmail.com', '7006768825', 'irfan', '1234567', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_role_tbl`
--
ALTER TABLE `user_role_tbl`
  ADD PRIMARY KEY (`ur_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_role_tbl`
--
ALTER TABLE `user_role_tbl`
  MODIFY `ur_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'UserRoleId', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User ID', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
