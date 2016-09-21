-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2016 at 04:06 AM
-- Server version: 5.6.31
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attandence`
--

-- --------------------------------------------------------

--
-- Table structure for table `rolltype`
--

CREATE TABLE `rolltype` (
  `roll_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rolltype`
--

INSERT INTO `rolltype` (`roll_id`, `type`) VALUES
(1, 'Guest'),
(2, 'Employee'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `roll_id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `ip` varchar(45) NOT NULL,
  `login` datetime NOT NULL,
  `logout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `created_at`, `roll_id`, `firstname`, `lastname`, `dob`, `address`, `mobile`, `update_date`, `ip`, `login`, `logout`) VALUES
(1, 'admin', '', '$2y$13$fuwzLLiqlxwJvAFv6KQFs.KRxNy27cEgbnK2kJyZXLWCgXbINdQFe', NULL, '', '2016-01-29 22:33:13', 3, 'Akhilesh', 'Singh', '2016-09-01', 'Vpo Matour', '9041638284', '2016-01-30', '127.0.0.1', '2016-09-19 04:36:14', '2016-06-01 03:15:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rolltype`
--
ALTER TABLE `rolltype`
  ADD PRIMARY KEY (`roll_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`roll_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `auth_key_UNIQUE` (`auth_key`),
  ADD KEY `fk_user_rolltype_idx` (`roll_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rolltype`
--
ALTER TABLE `rolltype`
  MODIFY `roll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_rolltype` FOREIGN KEY (`roll_id`) REFERENCES `rolltype` (`roll_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
