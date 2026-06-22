-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2026 at 05:47 AM
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
-- Database: `dog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `breed` varchar(50) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `height` varchar(30) DEFAULT NULL,
  `weight` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `name`, `breed`, `age`, `address`, `color`, `height`, `weight`) VALUES
(1, 'Max', 'Labrador Retriever', '3', 'Quezon City ', 'Black', '2.0 ft', '30 kg'),
(2, 'Bella', 'Golden Retriever', '2', 'Manila', 'Golden', '1.8 ft', '28 kg'),
(3, 'Rocky ', 'German Shepherd', '4', 'Makati', 'Brown and Black', '2.1 ft', '35 kg'),
(4, 'Luna', 'Siberian Husky', '1', 'Quezon City', 'White and Gray', '1.9 ft', '25 kg'),
(5, 'Daisy', 'Poodle', '5', 'Taguig', 'White', '1.5 ft', '10 kg'),
(6, 'Charlie', 'Beagle', '3', 'Pasig', 'Tri-color', '1.3 ft', '12 kg'),
(7, 'Bruno', 'Rottweiler', '6', 'Caloocan ', 'Black and Tan', '2.2 ft', '50 kg'),
(8, 'Coco', 'Shih Tzu', '2', 'Marikina', 'Brown and White', '0.9 ft', '6 kg'),
(9, 'Milo', 'Dachshund', '4', 'Pasay', 'Brown', '0.8 ft', '8 kg'),
(10, 'Zoe', 'Chihuahua', '1', 'Las Piñas', 'Cream', '0.7 ft', '3 kg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
