-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 10:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apni_society`
--

-- --------------------------------------------------------

--
-- Table structure for table `chairman`
--

CREATE TABLE `chairman` (
  `ChairmanID` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNo` bigint(11) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chairman`
--

INSERT INTO `chairman` (`ChairmanID`, `FirstName`, `LastName`, `DateOfBirth`, `Email`, `PhoneNo`, `Salary`, `Password`) VALUES
(1, 'khush', 'jogi', NULL, 'jhaslfh@gmail.com', 2147483647, 6, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `ComplainID` int(11) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `SocietyMemberID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `HouseId` int(11) NOT NULL,
  `BlockNo` varchar(11) NOT NULL,
  `HouseNo` int(11) NOT NULL,
  `SocietyID` int(11) NOT NULL,
  `SocietyMemberID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`HouseId`, `BlockNo`, `HouseNo`, `SocietyID`, `SocietyMemberID`) VALUES
(1, 'asd', 8, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `maintainance`
--

CREATE TABLE `maintainance` (
  `PaymentID` int(11) NOT NULL,
  `PaymentMode` varchar(10) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Date` date NOT NULL,
  `SocietyMemberID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `MeetingID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Place` varchar(20) NOT NULL,
  `ChairmanID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE `society` (
  `SocietyID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Area` varchar(30) NOT NULL,
  `City` varchar(20) NOT NULL,
  `PinCode` int(11) NOT NULL,
  `TotalBlocks` int(11) NOT NULL,
  `TotalFlats` int(11) NOT NULL,
  `ChairmanId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`SocietyID`, `Name`, `Area`, `City`, `PinCode`, `TotalBlocks`, `TotalFlats`, `ChairmanId`) VALUES
(1, 'khush', 'fur', 'dur', 3654, 235, 235, NULL),
(2, 'kavan', 'fur', 'dur', 3654, 235, 235, NULL),
(3, 'tanmay', 'fur', 'dur', 3654, 235, 235, NULL),
(4, 'asd', 'Akhbarnagar', 'Ahmedabad', 6, 6, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `societymember`
--

CREATE TABLE `societymember` (
  `SocietyMemberID` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNo` bigint(11) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `societymember`
--

INSERT INTO `societymember` (`SocietyMemberID`, `FirstName`, `LastName`, `DateOfBirth`, `Email`, `PhoneNo`, `Password`) VALUES
(1, 'khush', 'jogi', NULL, 'jhaslfh@gmail.com', 9173790621, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `VendorId` int(11) NOT NULL,
  `HouseId` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNo` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`VendorId`, `HouseId`, `FirstName`, `LastName`, `DateOfBirth`, `Email`, `PhoneNo`) VALUES
(3, 1, 'sdggs', 'sggg', '2021-04-21', 'sdfg@gmail.com', 9999999999),
(4, 1, 'Khush', 'Jogi', '2021-05-14', 'khushjogi.kj@gmail.com', 9173790621);

-- --------------------------------------------------------

--
-- Table structure for table `watchman`
--

CREATE TABLE `watchman` (
  `WatchmanID` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNo` bigint(10) NOT NULL,
  `Salary` int(11) NOT NULL,
  `SocietyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `watchman`
--

INSERT INTO `watchman` (`WatchmanID`, `FirstName`, `LastName`, `DateOfBirth`, `Email`, `PhoneNo`, `Salary`, `SocietyId`) VALUES
(8, 'zcv', 'zv', '2021-04-18', 'jhaslfh@gmail.com', 6355669504, 3500, 4),
(10, 'zcv', 'jogi', '2021-04-14', 'cjzhk@gmail.com', 6355669504, 2457, 4),
(11, 'khush', 'jogi', '2021-04-24', 'aaf@gmail.com', 6355669504, 45, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chairman`
--
ALTER TABLE `chairman`
  ADD PRIMARY KEY (`ChairmanID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`ComplainID`),
  ADD KEY `SocietyMemberID` (`SocietyMemberID`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`HouseId`),
  ADD UNIQUE KEY `BlockNo` (`BlockNo`,`HouseNo`),
  ADD KEY `SocietyMemberID` (`SocietyMemberID`),
  ADD KEY `SocietyID` (`SocietyID`);

--
-- Indexes for table `maintainance`
--
ALTER TABLE `maintainance`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `SocietyMemberID` (`SocietyMemberID`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`MeetingID`),
  ADD KEY `ChairmanID` (`ChairmanID`);

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`SocietyID`),
  ADD KEY `ChairmanId` (`ChairmanId`);

--
-- Indexes for table `societymember`
--
ALTER TABLE `societymember`
  ADD PRIMARY KEY (`SocietyMemberID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`VendorId`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `HouseId` (`HouseId`);

--
-- Indexes for table `watchman`
--
ALTER TABLE `watchman`
  ADD PRIMARY KEY (`WatchmanID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `SocietyId` (`SocietyId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chairman`
--
ALTER TABLE `chairman`
  MODIFY `ChairmanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `ComplainID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `HouseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `maintainance`
--
ALTER TABLE `maintainance`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `MeetingID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `society`
--
ALTER TABLE `society`
  MODIFY `SocietyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `societymember`
--
ALTER TABLE `societymember`
  MODIFY `SocietyMemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `VendorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `watchman`
--
ALTER TABLE `watchman`
  MODIFY `WatchmanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complain`
--
ALTER TABLE `complain`
  ADD CONSTRAINT `complain_ibfk_1` FOREIGN KEY (`SocietyMemberID`) REFERENCES `societymember` (`SocietyMemberID`);

--
-- Constraints for table `house`
--
ALTER TABLE `house`
  ADD CONSTRAINT `house_ibfk_1` FOREIGN KEY (`SocietyMemberID`) REFERENCES `societymember` (`SocietyMemberID`),
  ADD CONSTRAINT `house_ibfk_2` FOREIGN KEY (`SocietyID`) REFERENCES `society` (`SocietyID`);

--
-- Constraints for table `maintainance`
--
ALTER TABLE `maintainance`
  ADD CONSTRAINT `maintainance_ibfk_1` FOREIGN KEY (`SocietyMemberID`) REFERENCES `societymember` (`SocietyMemberID`);

--
-- Constraints for table `meetings`
--
ALTER TABLE `meetings`
  ADD CONSTRAINT `meetings_ibfk_1` FOREIGN KEY (`ChairmanID`) REFERENCES `chairman` (`ChairmanID`);

--
-- Constraints for table `society`
--
ALTER TABLE `society`
  ADD CONSTRAINT `society_ibfk_2` FOREIGN KEY (`ChairmanId`) REFERENCES `chairman` (`ChairmanID`);

--
-- Constraints for table `vendor`
--
ALTER TABLE `vendor`
  ADD CONSTRAINT `vendor_ibfk_1` FOREIGN KEY (`HouseId`) REFERENCES `house` (`HouseId`);

--
-- Constraints for table `watchman`
--
ALTER TABLE `watchman`
  ADD CONSTRAINT `watchman_ibfk_1` FOREIGN KEY (`SocietyId`) REFERENCES `society` (`SocietyID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
