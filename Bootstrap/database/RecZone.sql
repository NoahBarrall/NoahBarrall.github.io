-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2024 at 02:09 AM
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
-- Database: `RecZone`
--

-- --------------------------------------------------------

--
-- Table structure for table `League`
--

CREATE TABLE `League` (
  `LeagueID` int(11) NOT NULL,
  `LeagueName` varchar(50) NOT NULL,
  `RegistrationStart` date DEFAULT NULL,
  `RegistrationEnd` date DEFAULT NULL,
  `SeasonStart` date DEFAULT NULL,
  `SeasonEnd` date DEFAULT NULL,
  `TeamLimit` int(11) DEFAULT NULL,
  `TeamPlayerLimit` int(11) DEFAULT NULL,
  `TeamCost` decimal(10,2) DEFAULT NULL,
  `CreatedAt` datetime DEFAULT current_timestamp(),
  `UpdatedAt` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `League`
--

INSERT INTO `League` (`LeagueID`, `LeagueName`, `RegistrationStart`, `RegistrationEnd`, `SeasonStart`, `SeasonEnd`, `TeamLimit`, `TeamPlayerLimit`, `TeamCost`, `CreatedAt`, `UpdatedAt`) VALUES
(1, '3v3 Basketball Tournament', '2024-10-13', '2024-10-27', '2024-10-28', '2024-11-11', 10, 10, 10.00, '2024-10-18 20:45:37', '2024-10-18 20:45:37'),
(2, '7v7 Flag Football', '2024-10-14', '2024-10-28', '2024-10-28', '2024-11-14', 16, 14, 20.00, '2024-10-18 20:54:17', '2024-10-18 20:54:17'),
(3, 'Co Ed Outdoor Sand Volleyball', '2024-08-26', '2024-09-08', '2024-09-09', '2024-10-10', 20, 12, 10.00, '2024-10-18 21:04:33', '2024-10-18 21:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `Email` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Grade` varchar(50) DEFAULT NULL,
  `Gender` enum('Male','Female') DEFAULT NULL,
  `ProfilePicture` blob DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `CreatedAt` datetime DEFAULT current_timestamp(),
  `UpdatedAt` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`Email`, `FirstName`, `LastName`, `Password`, `Grade`, `Gender`, `ProfilePicture`, `DOB`, `CreatedAt`, `UpdatedAt`) VALUES
('jh1788@messiah.edu', 'Jacob', 'Hamm', '1234', 'Senior', 'Male', NULL, NULL, '2024-10-18 20:05:36', '2024-10-18 20:05:36'),
('mk1457@messiah.edu', 'Michael', 'Keeports', '1234', 'Junior', 'Male', NULL, NULL, '2024-10-17 14:52:10', '2024-10-26 22:07:37'),
('nb1330@messiah.edu', 'Noah', 'Barrall', '1234', 'Senior', 'Male', NULL, NULL, '2024-10-18 20:05:36', '2024-10-18 20:05:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `League`
--
ALTER TABLE `League`
  ADD PRIMARY KEY (`LeagueID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `League`
--
ALTER TABLE `League`
  MODIFY `LeagueID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
