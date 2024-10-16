-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2024 at 11:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vista_toernooi`
--

-- --------------------------------------------------------

--
-- Table structure for table `berichten`
--

CREATE TABLE `berichten` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leerlingen`
--

CREATE TABLE `leerlingen` (
  `id` int(5) NOT NULL,
  `naam` varchar(25) NOT NULL,
  `achternaam` text NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poules`
--

CREATE TABLE `poules` (
  `id` int(11) NOT NULL,
  `naam` text NOT NULL,
  `members` text NOT NULL DEFAULT '[]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prijzen`
--

CREATE TABLE `prijzen` (
  `id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `titel_EN` varchar(255) NOT NULL,
  `description_EN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prijzen`
--

INSERT INTO `prijzen` (`id`, `titel`, `description`, `image_url`, `titel_EN`, `description_EN`) VALUES
(1, 'De winnaar van het toernooi ontvangt', '1000 euro in contanten en de kampioensbeker.', 'img/cup.png', '', ''),
(2, 'De tweede plaats ontvangt', '500 euro in contanten en een zilveren medaille.', 'img/2nd.jpg', '', ''),
(3, 'De derde plaats ontvangt', '250 euro in contanten en een bronzen medaille.', 'img/3.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berichten`
--
ALTER TABLE `berichten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leerlingen`
--
ALTER TABLE `leerlingen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `poules`
--
ALTER TABLE `poules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prijzen`
--
ALTER TABLE `prijzen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berichten`
--
ALTER TABLE `berichten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leerlingen`
--
ALTER TABLE `leerlingen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `poules`
--
ALTER TABLE `poules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prijzen`
--
ALTER TABLE `prijzen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
