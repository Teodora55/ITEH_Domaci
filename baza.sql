-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 02:14 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domaci`
--
CREATE DATABASE IF NOT EXISTS `domaci`DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `domaci`;

-- --------------------------------------------------------

--
-- Table structure for table `narudzbina`
--

DROP TABLE IF EXISTS `narudzbina`;
CREATE TABLE `narudzbina` (
  `id` int(11) NOT NULL,
  `palacina` varchar(255) NOT NULL,
  `kolicina` int(11) NOT NULL,
  `idkorisnika` int(11) NOT NULL,
  `datum` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `narudzbina`
--

INSERT INTO `narudzbina` (`id`, `palacina`, `kolicina`, `idkorisnika`, `datum`) VALUES
(1, 'Ljubavna palačinka', 2, 1, '2020-12-26'),
(2, 'Proteinska palačinka', 1, 2, '2020-12-12'),
(3, 'Integralna palačinka', 5, 1, '2021-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

DROP TABLE IF EXISTS `korisnik`;
CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `brojtelefona` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `username`, `password`, `ime`, `prezime`, `email`, `brojtelefona`) VALUES
(1, 'milan', 'milan','milan', 'nikolic','milannikolic@gmail.com','0656629988'),
(2,'saraj', 'sara', 'sara', 'jovanovic','jovanovicsara@gmail.com','067442369');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `narudzbina`
--
ALTER TABLE `narudzbina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `narudzbina`
--
ALTER TABLE `narudzbina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

ALTER TABLE `narudzbina`
    ADD CONSTRAINT 'fk_narudzbina'
    FOREIGN KEY (idkorisnika)
    REFERENCES korisnik(id);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
