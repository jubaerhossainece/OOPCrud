-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 08:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `skill` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `skill`) VALUES
(1, 'Md. Jubaer Hossain', 'jubaercoding123@gmail.com', 'perl, java'),
(2, 'Md. Jubaer Hossain', 'jubaercourse@gmail.com', 'Javascript, php'),
(3, 'sabbir ahmed', 'sabbir@g.com', 'Javascript'),
(4, 'sabbir ahmed zeesan', 'sabbir@example.com', 'php, java, perl'),
(5, 'Md. Jubaer ', 'jubaercoding@gmail.com', 'php, java'),
(6, 'rahat', 'rahat@gmail.com', 'Javascript, php'),
(7, 'rahat zaman', 'rahatzaman@gmail.com', 'php, java, perl'),
(8, 'rahat zaman', 'rahatzaman@gmail.com', 'php, java, perl'),
(9, 'rahat zaman', 'rahatzaman@gmail.com', 'php, java, perl'),
(10, 'rahat zaman', 'rahatzaman@gmail.com', 'php, java, perl'),
(11, 'Md. Jubaer coding', 'jubaercoding@gmail.com', 'Javascript, php'),
(12, 'Md. Jubaer Hossain', 'jubaercoding@gmail.com', 'Javascript, php'),
(13, 'Md. Jubaer Hossain', 'jubaercoding@gmail.com', 'Javascript, php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
