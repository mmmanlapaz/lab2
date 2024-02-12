-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2024 at 02:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `mmmanlapaz_myguests` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `gender` enum('female','male','other') NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`id`, `name`, `email`, `website`, `comment`, `gender`, `reg_date`) VALUES
(1, 'James', 'jamesbond@example.com', 'Bond', '', 'female', '2024-02-01 14:32:16'),
(2, 'Tom', 'tomsawyer@example.com', 'Sawyer', '', 'female', '2024-02-01 14:45:08'),
(4, 'David', 'dvdbronsto@gmail.com', 'Bronsto', '', 'female', '2024-02-01 15:08:32'),
(5, 'David', 'dvdbronsto@gmail.com', 'Bronsto', '', 'female', '2024-02-10 11:11:58'),
(6, '', '', '', '', '', '2024-02-10 11:32:00'),
(7, 'Marco Antonio Manlapaz', 'mmmanlapaz@student.apc.edu.ph', 'https://socitcloud.apc.edu.ph/', 'Banana!!!', 'male', '2024-02-10 11:49:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
