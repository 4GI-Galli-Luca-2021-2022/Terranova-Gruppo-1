-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 07:18 AM
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
-- Database: `clearpay`
--

-- --------------------------------------------------------

--
-- Table structure for table `contratto`
--

CREATE TABLE `contratto` (
  `id` int(11) NOT NULL,
  `data_inizio` date NOT NULL,
  `data_fine` date DEFAULT NULL,
  `nome_intestatario` varchar(255) NOT NULL,
  `cognome_intestatario` varchar(255) NOT NULL,
  `codice_fiscale` varchar(16) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contratto`
--

INSERT INTO `contratto` (`id`, `data_inizio`, `data_fine`, `nome_intestatario`, `cognome_intestatario`, `codice_fiscale`, `nome`) VALUES
(3, '2024-04-01', '2024-04-04', 'Luca', 'Galli', 'GLLLCU05P30L781L', ''),
(4, '2024-06-05', '2024-11-22', 'Francesco', 'Rossi', 'GLLLCAOUGSDI', ''),
(5, '2024-04-09', '2024-04-19', 'Luca', 'Rossi', 'asdasdsadsad', 'Base Eni');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contratto`
--
ALTER TABLE `contratto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contratto`
--
ALTER TABLE `contratto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
