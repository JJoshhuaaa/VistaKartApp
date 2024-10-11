-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2024 at 12:25 PM
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
-- Table structure for table `leerlingen`
--

CREATE TABLE `leerlingen` (
  `id` int(5) NOT NULL,
  `naam` varchar(25) NOT NULL,
  `achternaam` text NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leerlingen`
--
ALTER TABLE `leerlingen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leerlingen`
--
ALTER TABLE `leerlingen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE prijzen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titel VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    image_url VARCHAR(255),    
    titel_EN VARCHAR(255) NOT NULL,
    description_EN TEXT NOT NULL
);

INSERT INTO prijzen (titel, description, image_url) VALUES 
('De winnaar van het toernooi ontvangt', '1000 euro in contanten en de kampioensbeker.', 'img/cup.png'),
('De tweede plaats ontvangt', '500 euro in contanten en een zilveren medaille.', 'img/2nd.jpg'),
('De derde plaats ontvangt', '250 euro in contanten en een bronzen medaille.', 'img/3.jpg');
