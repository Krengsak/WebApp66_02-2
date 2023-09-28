-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 03:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dvdshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `dvd_`
--

CREATE TABLE `dvd_` (
  `member_id` int(3) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telephone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dvd_`
--

INSERT INTO `dvd_` (`member_id`, `first_name`, `last_name`, `email`, `telephone`) VALUES
(1, 'Krengsak', 'Pongprom', 'pond097186@hotmail.com', '0971355917');

-- --------------------------------------------------------

--
-- Table structure for table `dvd_act`
--

CREATE TABLE `dvd_act` (
  `actor_id` int(3) NOT NULL,
  `actor_first_name` varchar(30) NOT NULL,
  `actor_last_name` varchar(30) NOT NULL,
  `actor_age` int(3) NOT NULL,
  `actor_show` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dvd_act`
--

INSERT INTO `dvd_act` (`actor_id`, `actor_first_name`, `actor_last_name`, `actor_age`, `actor_show`) VALUES
(1, 'Jame', 'bond', 47, '007 ภาค 1, 007 ภาค 2, 007 ภาค 3, 007 ภาค 4, 007 ภาค 5 '),
(2, 'Luke', 'Skywalker', 50, 'Star wars 4, Star wars 5, Star wars 6'),
(3, 'Leia', 'Skywalker', 44, 'Star wars 4, Star wars 5, Star wars 6'),
(5, 'Jame', 'Gold', 46, '007 ภาค 1, 007 ภาค 2, 007 ภาค 3');

-- --------------------------------------------------------

--
-- Table structure for table `dvd_history`
--

CREATE TABLE `dvd_history` (
  `member_first_name` varchar(30) NOT NULL,
  `member_last_name` varchar(30) NOT NULL,
  `member_email` varchar(40) NOT NULL,
  `movie_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dvd_history`
--

INSERT INTO `dvd_history` (`member_first_name`, `member_last_name`, `member_email`, `movie_name`) VALUES
('Krengsak', 'Pongprom', 'pond097186@hotmail.com', ''),
('Krengsak', 'Pongprom', 'pond097186@hotmail.com', ''),
('Krengsak', 'Pongprom', 'pond097186@hotmail.com', ''),
('Krengsak', 'Pongprom', 'pond097186@hotmail.com', 'Star Wars 7'),
('Krengsak', 'Pongprom', 'pond097186@hotmail.com', '007 ภาค 1');

-- --------------------------------------------------------

--
-- Table structure for table `dvd_info`
--

CREATE TABLE `dvd_info` (
  `dvd_id` int(3) NOT NULL,
  `dvd_name` varchar(30) NOT NULL,
  `dvd_style` varchar(20) NOT NULL,
  `dvd_since` int(4) NOT NULL,
  `dvd_rate` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dvd_info`
--

INSERT INTO `dvd_info` (`dvd_id`, `dvd_name`, `dvd_style`, `dvd_since`, `dvd_rate`) VALUES
(0, 'Star wars 2', 'Action Fantasy', 2530, '15+'),
(1, 'Star wars 1', 'Action Fantasy', 2526, '15+'),
(2, '007 ภาค 1', 'Action Realife', 2549, '15+'),
(6, 'Star wars 6', 'Action Fantasy', 2542, '15+'),
(7, 'Star wars 7', 'Action Fantasy', 2560, '15+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dvd_`
--
ALTER TABLE `dvd_`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `dvd_act`
--
ALTER TABLE `dvd_act`
  ADD PRIMARY KEY (`actor_id`);

--
-- Indexes for table `dvd_info`
--
ALTER TABLE `dvd_info`
  ADD PRIMARY KEY (`dvd_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
