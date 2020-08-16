-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 04:00 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intreprinderi`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(5) NOT NULL,
  `nr_de_persoane` varchar(10) NOT NULL,
  `tip_categorie` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nr_de_persoane`, `tip_categorie`) VALUES
(1, '1-9', 'Micro'),
(2, '10-49', 'Mica'),
(3, '50-249', 'Mijlocie'),
(4, '250-nel.', 'Mare');

-- --------------------------------------------------------

--
-- Table structure for table `intrep_municipii`
--

CREATE TABLE `intrep_municipii` (
  `id_mun` int(5) NOT NULL,
  `den_municipiu` varchar(20) NOT NULL,
  `srl` int(10) NOT NULL,
  `sa` int(10) NOT NULL,
  `snc` int(10) NOT NULL,
  `sc` int(10) NOT NULL,
  `upj` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intrep_municipii`
--

INSERT INTO `intrep_municipii` (`id_mun`, `den_municipiu`, `srl`, `sa`, `snc`, `sc`, `upj`) VALUES
(1, 'Chișinău', 21000, 80, 20, 15, 123),
(2, 'Bălți', 600, 4, 15, 5, 65),
(3, 'Tiraspol', 400, 5, 12, 8, 45),
(4, 'Comrat', 200, 2, 10, 4, 25),
(5, 'Cahul', 154, 5, 16, 9, 32),
(6, 'Ungheni', 162, 3, 20, 10, 30),
(7, 'Soroca', 85, 5, 15, 6, 24),
(8, 'Orhei', 120, 8, 25, 10, 34),
(9, 'Hîncești', 65, 3, 23, 8, 40),
(10, 'Edineț', 24, 5, 12, 6, 25),
(11, 'Strășeni', 46, 3, 14, 4, 14),
(12, 'Ceadîr-Lunga', 12, 2, 10, 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `intrep_sate`
--

CREATE TABLE `intrep_sate` (
  `id_sat` int(5) NOT NULL,
  `nume_sat` varchar(20) NOT NULL,
  `srl` int(5) NOT NULL,
  `sa` int(5) NOT NULL,
  `snc` int(5) NOT NULL,
  `sc` int(5) NOT NULL,
  `upj` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intrep_sate`
--

INSERT INTO `intrep_sate` (`id_sat`, `nume_sat`, `srl`, `sa`, `snc`, `sc`, `upj`) VALUES
(1, 'Congaz', 20, 3, 5, 9, 10),
(2, 'Costești', 15, 1, 4, 6, 5),
(3, 'Cărpineni', 12, 2, 8, 3, 1),
(4, 'Copceac', 10, 2, 4, 5, 1),
(5, 'Baurci', 8, 0, 2, 3, 0),
(6, 'Băcioi', 15, 0, 0, 4, 0),
(7, 'Corjeuți', 10, 0, 0, 2, 1),
(8, 'Trușeni', 5, 0, 3, 4, 0),
(9, 'Pelinia', 4, 0, 2, 3, 0),
(10, 'Peresecina', 5, 0, 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `intrep_tara`
--

CREATE TABLE `intrep_tara` (
  `id_tara` int(5) NOT NULL,
  `nume_tara` varchar(20) NOT NULL,
  `nr_intreprinderi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intrep_tara`
--

INSERT INTO `intrep_tara` (`id_tara`, `nume_tara`, `nr_intreprinderi`) VALUES
(1, 'Republica Moldova', 53000),
(2, 'România', 176500),
(3, 'Italia', 139900),
(4, 'Turcia', 130000),
(5, 'Ucraina', 163000),
(6, 'Rusia', 6560000),
(7, 'Germania', 11231000),
(8, 'S.U.A', 16600000),
(9, 'Israel', 3360000),
(10, 'Cipru', 306000),
(11, 'Franta', 2420000);

-- --------------------------------------------------------

--
-- Table structure for table `nivel_rentabilitate`
--

CREATE TABLE `nivel_rentabilitate` (
  `id_rentabilitate` int(5) NOT NULL,
  `id_risc` int(5) NOT NULL,
  `id_raspundere` int(5) NOT NULL,
  `nivel_rentabilitate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nivel_rentabilitate`
--

INSERT INTO `nivel_rentabilitate` (`id_rentabilitate`, `id_risc`, `id_raspundere`, `nivel_rentabilitate`) VALUES
(1, 1, 1, 'Înalt'),
(2, 1, 2, 'Mediu'),
(3, 2, 1, 'Mediu'),
(4, 2, 3, 'Scăzut'),
(5, 3, 2, 'Scăzut');

-- --------------------------------------------------------

--
-- Table structure for table `raspundere`
--

CREATE TABLE `raspundere` (
  `id_raspundere` int(5) NOT NULL,
  `tip_raspundere` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `raspundere`
--

INSERT INTO `raspundere` (`id_raspundere`, `tip_raspundere`) VALUES
(1, 'Limitat'),
(2, 'Nelimitat'),
(3, 'Ambele');

-- --------------------------------------------------------

--
-- Table structure for table `risc`
--

CREATE TABLE `risc` (
  `id_risc` int(5) NOT NULL,
  `tip_risc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `risc`
--

INSERT INTO `risc` (`id_risc`, `tip_risc`) VALUES
(1, 'Scazut'),
(2, 'Mediu'),
(3, 'Inalt');

-- --------------------------------------------------------

--
-- Table structure for table `tipuri_intreprinderi`
--

CREATE TABLE `tipuri_intreprinderi` (
  `id_intreprindere` int(5) NOT NULL,
  `tip_intreprindere` varchar(100) NOT NULL,
  `nr_fondatori` varchar(10) NOT NULL,
  `id_categorie` int(5) NOT NULL,
  `capital_minim` varchar(20) NOT NULL,
  `id_raspundere` int(5) NOT NULL,
  `id_risc` int(5) NOT NULL,
  `id_rentabilitate` int(5) NOT NULL,
  `nr_pe_sate` int(10) NOT NULL,
  `nr_pe_mun` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipuri_intreprinderi`
--

INSERT INTO `tipuri_intreprinderi` (`id_intreprindere`, `tip_intreprindere`, `nr_fondatori`, `id_categorie`, `capital_minim`, `id_raspundere`, `id_risc`, `id_rentabilitate`, `nr_pe_sate`, `nr_pe_mun`) VALUES
(1, 'Societate cu Răspundere Limitată', '2-50', 3, '5400lei', 1, 1, 1, 104, 22868),
(2, 'Societate pe Acțiuni', '1-nelimita', 4, '20000lei', 1, 2, 2, 8, 125),
(3, 'Societate în Nume Colectiv', '2-20', 2, 'Nelimitat', 2, 3, 5, 27, 192),
(4, 'Societate în Comandită', '1-20', 2, 'Nelimitat', 3, 3, 3, 40, 89),
(5, 'Întrprindere de Stat', '1-nelimita', 3, 'Nelimitat', 1, 1, 1, 20, 467),
(6, 'Cooperativ', '5-nelimita', 2, 'Nelimitat', 2, 2, 2, 0, 0),
(7, 'Uniune de persoane Juridice', '2-nelimita', 4, 'Nelimitat', 1, 2, 2, 0, 0),
(8, 'Întreprindere Municipală', '1-nelimita', 4, 'Nelimitat', 2, 2, 2, 0, 0),
(9, 'Gospodărie Țărănească', '1-nelimita', 1, 'Nelimitat', 2, 3, 5, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Indexes for table `intrep_municipii`
--
ALTER TABLE `intrep_municipii`
  ADD PRIMARY KEY (`id_mun`);

--
-- Indexes for table `intrep_sate`
--
ALTER TABLE `intrep_sate`
  ADD PRIMARY KEY (`id_sat`);

--
-- Indexes for table `intrep_tara`
--
ALTER TABLE `intrep_tara`
  ADD PRIMARY KEY (`id_tara`);

--
-- Indexes for table `nivel_rentabilitate`
--
ALTER TABLE `nivel_rentabilitate`
  ADD PRIMARY KEY (`id_rentabilitate`),
  ADD KEY `id_risc` (`id_risc`,`id_raspundere`);

--
-- Indexes for table `raspundere`
--
ALTER TABLE `raspundere`
  ADD PRIMARY KEY (`id_raspundere`);

--
-- Indexes for table `risc`
--
ALTER TABLE `risc`
  ADD PRIMARY KEY (`id_risc`);

--
-- Indexes for table `tipuri_intreprinderi`
--
ALTER TABLE `tipuri_intreprinderi`
  ADD PRIMARY KEY (`id_intreprindere`),
  ADD KEY `id_categorie` (`id_categorie`,`id_raspundere`,`id_risc`,`id_rentabilitate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `intrep_sate`
--
ALTER TABLE `intrep_sate`
  MODIFY `id_sat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `intrep_tara`
--
ALTER TABLE `intrep_tara`
  MODIFY `id_tara` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nivel_rentabilitate`
--
ALTER TABLE `nivel_rentabilitate`
  MODIFY `id_rentabilitate` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `raspundere`
--
ALTER TABLE `raspundere`
  MODIFY `id_raspundere` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `risc`
--
ALTER TABLE `risc`
  MODIFY `id_risc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipuri_intreprinderi`
--
ALTER TABLE `tipuri_intreprinderi`
  MODIFY `id_intreprindere` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
