-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 07:37 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Super Admin', 'admin@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `details` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `image`, `details`, `status`) VALUES
(1, 'demo ', 'asd.png', 'sdasakjbfahkljf \r\nas\r\naf\r\naf\r\nafa\r\nf', 1),
(2, 'demo ', 'asd.png', 'sdasakjbfahkljf \r\nas\r\naf\r\naf\r\nafa\r\nf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(15) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `country_id` int(5) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `gender`, `country_id`, `password`, `status`) VALUES
(7, 'Mohammad Shakil Hossain Shakil', 'sa@gmail.com', 1797587683, 0, 0, '12345678', 1),
(8, 'Mohammad Shakil Hossain Shakil', 'sa@gmail.com', 1797587683, 0, 0, '12345678', 1),
(9, 'Mohammad Shakil Hossain Shakil', 'sa@gmail.com', 1797587683, 0, 0, '12345678', 1),
(10, 'Mohammad Shakil Hossain Shakil', 'sa@gmail.com', 1797587683, 0, 0, '12345678', 1),
(11, 'Mohammad Shakil Hossain Shakil', 'sa@gmail.com', 1797587683, 0, 0, '12345678', 1),
(12, 'Mohammad Shakil Hossain Shakil', 'sa@gmail.com', 1797587683, 0, 0, '12345678', 1),
(13, 'Mohammad Shakil Hossain Shakil', 'sa@gmail.com', 1797587683, 0, 0, '12345678', 1),
(14, 'Mohammad Shakil Hossain Shakil', 'sa@gmail.com', 1797587683, 0, 0, '12345678', 1),
(15, 'Mohammad Shakil Hossain', 'sa@gmail.com', 1797587683, 0, 0, '123456', 1),
(16, 'Mohammad Shakil Hossain Shakil', 'sa@gmail.com', 1797587683, 0, 0, '12345678', 1),
(17, 'Mohammad Shakil Hossain Shakil', 'sa@gmail.coma', 1797587683, 0, 0, '12345678', 0),
(18, 'Mohammad Shakil Hossain Shakil', 'sa@gmail.coma', 1797587683, 0, 0, '12345678', 0),
(19, 'Mohammad Shakil Hossain Shakil', 'saakils@gmail.com', 1797587683, 0, 0, '12345678', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `user_id` int(4) NOT NULL,
  `role_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
