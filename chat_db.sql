-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 10:43 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_detatils`
--

CREATE TABLE `login_detatils` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_active` datetime DEFAULT NULL,
  `login_device` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciver_id` int(11) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `reciver_id`, `msg`, `time`) VALUES
(1, 1, 2, '2323233', '2021-03-15 16:18:05'),
(2, 1, 3, 'hello', '2021-04-09 18:43:23'),
(3, 1, 3, 'hey man', '2021-04-09 18:45:04'),
(4, 3, 1, 'hi', '2021-04-09 19:30:08'),
(5, 3, 1, 'hello', '2021-04-09 19:30:27'),
(6, 1, 3, 'hi', '2021-04-09 19:32:28'),
(7, 1, 3, 'hello', '2021-04-09 19:32:36'),
(8, 1, 3, 'hello', '2021-04-09 19:32:58'),
(9, 3, 1, 'hello', '2021-04-09 19:37:35'),
(10, 3, 1, 'hi', '2021-04-09 19:37:50'),
(11, 3, 1, 'kemon aco', '2021-04-09 19:37:56'),
(12, 1, 3, 'valo aci', '2021-04-09 19:38:20'),
(13, 3, 1, 'ki koros', '2021-04-09 19:43:46'),
(14, 1, 3, 'kicu na', '2021-04-09 19:44:01'),
(15, 3, 1, 'ohh', '2021-04-09 19:44:13'),
(16, 1, 2, 'hi', '2021-04-09 19:45:44'),
(17, 2, 1, 'hello', '2021-04-09 19:46:50'),
(18, 2, 1, 'ki obostha', '2021-04-09 19:46:56'),
(19, 1, 2, 'hey man', '2021-04-09 19:59:05'),
(20, 2, 1, 'how are you', '2021-04-09 19:59:27'),
(21, 1, 2, 'hi', '2021-04-09 20:20:18'),
(22, 2, 2, 'ji', '2021-04-09 20:21:35'),
(23, 2, 1, 'hello', '2021-04-09 20:21:52'),
(24, 1, 5, 'sdsssssssssssssssss', '2021-04-09 20:22:50'),
(25, 1, 5, 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', '2021-04-09 20:24:11'),
(26, 1, 2, 'hi', '2021-04-09 20:30:45'),
(27, 2, 1, 'hello', '2021-04-09 20:31:02'),
(28, 2, 3, 'hi', '2021-04-09 20:32:49'),
(29, 2, 1, 'hi', '2021-04-09 20:44:05'),
(30, 2, 1, 'hello', '2021-04-09 20:44:09'),
(31, 1, 5, 'ok', '2021-04-09 20:44:21'),
(32, 1, 2, 'nise', '2021-04-09 20:44:35'),
(33, 1, 2, 'hello', '2021-04-09 20:44:37'),
(34, 3, 1, 'hi', '2021-04-12 10:30:38'),
(35, 1, 3, 'hello', '2021-04-12 10:31:00'),
(36, 3, 1, 'kemon aco', '2021-04-12 10:31:08'),
(37, 1, 3, 'valo', '2021-04-12 10:31:13'),
(38, 2, 1, 'hi', '2021-04-12 10:50:38'),
(39, 2, 1, 'hi', '2021-04-12 10:50:41'),
(40, 2, 1, 'hi', '2021-04-12 10:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active_status` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `active_status`, `image`, `created_at`, `status`) VALUES
(1, 'Mohammad Shah Alam', '', 'ashah3562@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Active now', '1617786226Screenshot (1).png', '2021-03-21 04:59:40', 1),
(2, 'roven admin', '', 'ashah@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Offline now', '1616324421Screenshot (2).png', '2021-03-21 05:00:21', 1),
(3, 'roven', '', 'saroven@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'Offline now', '1616325513Screenshot (6).png', '2021-03-21 05:18:33', 1),
(5, 'sit', '', 'saroven1@yahoo.com', 'd58e3582afa99040e27b92b13c8f2280', 'Offline now', '1616325620Screenshot (1).png', '2021-03-21 05:20:20', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
