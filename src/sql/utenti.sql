-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 05:58 PM
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
-- Table structure for table `utenti`
--

CREATE TABLE `utenti` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cognome` varchar(255) NOT NULL,
  `ragione_sociale` varchar(255) NOT NULL,
  `partita_iva` varchar(255) NOT NULL,
  `codice_fiscale` varchar(16) NOT NULL,
  `indirizzo` varchar(255) NOT NULL,
  `civico` varchar(50) NOT NULL,
  `cap` varchar(10) NOT NULL,
  `localita` varchar(255) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `nazione` varchar(100) NOT NULL,
  `numero_telefonico` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utenti`
--

INSERT INTO `utenti` (`id`, `nome`, `cognome`, `ragione_sociale`, `partita_iva`, `codice_fiscale`, `indirizzo`, `civico`, `cap`, `localita`, `provincia`, `nazione`, `numero_telefonico`, `email`, `password_hash`) VALUES
(3, 'NomeCasuale', 'CognomeCasuale', 'RagioneSocialeCasuale', '12345678901', 'ABCDE12345F123A', 'IndirizzoCasuale', '123', '12345', 'LocalitaCasuale', 'ProvinciaCasuale', 'NazioneCasuale', '1234567890', 'emailcasuale@example.com', 'hashpasswordcasuale');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
