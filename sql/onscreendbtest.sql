-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 07:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onscreendbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `ID` int(11) NOT NULL,
  `Participant1` varchar(50) NOT NULL,
  `Email1` varchar(50) NOT NULL,
  `Participant2` varchar(50) NOT NULL,
  `Email2` varchar(50) NOT NULL,
  `Participant3` varchar(50) NOT NULL,
  `Email3` varchar(50) NOT NULL,
  `TeamName` varchar(50) NOT NULL,
  `TeamLeaderName` varchar(50) NOT NULL,
  `TeamEmail` varchar(50) NOT NULL,
  `ContactNumber` bigint(50) NOT NULL,
  `ParticipantNameclub` varchar(50) NOT NULL,
  `ClubNameP1` varchar(50) NOT NULL,
  `ParticipantNameclub2` varchar(50) NOT NULL,
  `ClubNameP2` varchar(50) NOT NULL,
  `ParticipantNameclub3` varchar(50) NOT NULL,
  `ClubNameP3` varchar(50) NOT NULL,
  `Queries` varchar(1000) NOT NULL,
  `Merchandise` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
