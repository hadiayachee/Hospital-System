-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 11:05 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` varchar(11) NOT NULL,
  `adminpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `adminpassword`) VALUES
('1', '123456'),
('2', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `FirstName` varchar(10) NOT NULL,
  `LasttName` varchar(10) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Datebirth` date NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `NumberBed` varchar(20) NOT NULL,
  `Cause` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`FirstName`, `LasttName`, `Address`, `Datebirth`, `ContactNumber`, `StartDate`, `EndDate`, `NumberBed`, `Cause`) VALUES
('mostafa', 'ayache', 'HAROUF', '2022-05-18', '55555', '2022-05-25', '2022-06-11', ' saab', 'krjklflgrj'),
('mostafa', 'ayache', 'NABTIEH', '2022-05-31', '76128563', '2022-05-18', '2022-06-03', ' volvo', 'efjelfkefkjejlekf'),
('hadi', 'ayache', 'HAROUF', '2022-06-02', '76128563', '2022-05-12', '2022-06-09', ' saab', 'heloo'),
('mostafa', 'ayache', 'harouf', '2022-06-16', '76128563', '2022-06-01', '2022-06-20', ' saab', 'heloo');

-- --------------------------------------------------------

--
-- Table structure for table `bookapp`
--

CREATE TABLE `bookapp` (
  `AppoID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `patientID` int(11) NOT NULL,
  `docID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookapp`
--

INSERT INTO `bookapp` (`AppoID`, `Date`, `Time`, `patientID`, `docID`) VALUES
(1, '2022-04-23', '18:16:00', 13, 1),
(2, '2022-04-23', '20:17:00', 13, 6),
(3, '2022-04-23', '18:18:00', 14, 1),
(31, '2022-04-30', '12:18:00', 15, 2),
(32, '2022-04-30', '12:30:00', 15, 2),
(33, '2022-06-04', '15:30:00', 15, 1),
(37, '2022-06-04', '16:00:00', 15, 1),
(39, '2022-06-20', '16:30:00', 15, 4),
(41, '2022-06-13', '15:00:00', 16, 7);

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `X` int(11) NOT NULL,
  `descID` int(11) NOT NULL,
  `descName` varchar(30) NOT NULL,
  `treatment` varchar(50) NOT NULL,
  `Note` varchar(200) NOT NULL,
  `doctorIDdesc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`X`, `descID`, `descName`, `treatment`, `Note`, `doctorIDdesc`) VALUES
(5, 5, 'hadi', 'test', 'tott', 9),
(11, 15, 'hadi', 'fgjbkj,', 'helosjfjf', 6),
(12, 13, 'hadi', 'jdjd', 'xkxk', 6),
(13, 14, 'mostafa', 'mostafaaa', '1 pandol', 1),
(14, 14, 'mostafa', 'jdjd', 'xkxk', 1),
(18, 13, 'hadi', 'mostafaaa', '1 pandol', 1),
(19, 13, 'hadi', 'test5', 'please wait me', 1),
(20, 16, 'ali al hadi', 'mostafaaa', '1 pandol', 7);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DoctorID` int(11) NOT NULL,
  `Doctorname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `categorey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DoctorID`, `Doctorname`, `email`, `Address`, `ContactNumber`, `password`, `categorey`) VALUES
(1, 'DR-ALI-HASAN', 'ali.ayache@hotmail.it', 'HAROUF', '76141368', '123456', 'bone'),
(2, 'DR-SALEM', 'HADI@HOTMAIL.COM', 'SAIDA', '03036275', '123456', 'bone'),
(3, 'ali mazeh', '@gmail.com', 'SAIDA', '76141368', '123456', 'heart'),
(4, 'mohamed ayache', 'ali.ayache@hotmail.it', 'bayrot', '76141368', '123456', 'bone'),
(5, 'MOSTAFA', '@gmail.com', 'SA', '5555', '123456', 'MentalHealth'),
(6, 'abadalah', 'ali.ayache@hotmail.it', 'saida', '522', '123456', 'heart'),
(7, 'DR-SALLY', 'SALY@hotmail.com', 'HAROUF', '85555', '123456', 'Surgery'),
(8, 'DR-FATIMAH', 'ali@hotmail.com', 'HADOURFLEBANON', '755523', '123456', 'Surgery');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donarID` int(11) NOT NULL,
  `donarname` varchar(50) NOT NULL,
  `donaraddress` varchar(50) NOT NULL,
  `donarnumber` varchar(40) NOT NULL,
  `donaremail` varchar(50) NOT NULL,
  `donarblood` varchar(11) NOT NULL,
  `organ` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donarID`, `donarname`, `donaraddress`, `donarnumber`, `donaremail`, `donarblood`, `organ`) VALUES
(1, 'hadi ', 'HAROUF', ' 76141368', 'malak@hotmail.com', 'A+', 'kidney'),
(2, 'charefd', 'saidaa', ' 761285635', '@', 'A-', 'Heart');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `pID` int(11) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(40) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Bloodtype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`UserID`, `Name`, `Address`, `ContactNumber`, `Email`, `Password`, `Bloodtype`) VALUES
(13, 'hadi', 'HAROUF', '76141368', 'malak@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'A+'),
(14, 'mostafa', 'NABTIEH', '76141368', 'charef@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'b+'),
(15, 'charef', 'saida', '76128563', '@', 'e10adc3949ba59abbe56e057f20f883e', 'A-'),
(16, 'ali al hadi', 'saida', '76141368', 'ali.ayache@hotmail.fr', 'e10adc3949ba59abbe56e057f20f883e', 'A-');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `FirstName` varchar(30) NOT NULL,
  `LasttName` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `ContactNumber` int(30) NOT NULL,
  `EmailAddress` varchar(30) NOT NULL,
  `YearinUniversity` varchar(30) NOT NULL,
  `NameofUniversity` varchar(30) NOT NULL,
  `BloodType` varchar(30) NOT NULL,
  `DateofBirth` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`FirstName`, `LasttName`, `Address`, `ContactNumber`, `EmailAddress`, `YearinUniversity`, `NameofUniversity`, `BloodType`, `DateofBirth`) VALUES
('mostafa', 'ayache', 'saida', 76141368, ' @hotmail.com', ' 2', ' iut', 'b+', '2022-04-23'),
('hadi', 'ayache', 'HAROUF', 76128563, ' malak@hotmail.com', ' 2', ' iut', 'A-', '2022-06-17'),
('mostafa', 'ayache', 'HAROUF', 55555, ' @hotmail.com', ' 2', ' iut', 'A-', '2022-05-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `AdminID` (`AdminID`);

--
-- Indexes for table `bookapp`
--
ALTER TABLE `bookapp`
  ADD PRIMARY KEY (`AppoID`),
  ADD UNIQUE KEY `Time` (`Time`),
  ADD KEY `patientoapp` (`patientID`),
  ADD KEY `doctopatient` (`docID`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`X`),
  ADD KEY `descpatientID` (`descID`),
  ADD KEY `descDoctorID` (`doctorIDdesc`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DoctorID`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donarID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `feedback_2` (`feedback`),
  ADD KEY `feedback` (`pID`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookapp`
--
ALTER TABLE `bookapp`
  MODIFY `AppoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `X` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `DoctorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookapp`
--
ALTER TABLE `bookapp`
  ADD CONSTRAINT `doctopatient` FOREIGN KEY (`docID`) REFERENCES `doctor` (`DoctorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patientoapp` FOREIGN KEY (`patientID`) REFERENCES `patients` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `description`
--
ALTER TABLE `description`
  ADD CONSTRAINT `descDoctorID` FOREIGN KEY (`doctorIDdesc`) REFERENCES `doctor` (`DoctorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `descpatientID` FOREIGN KEY (`descID`) REFERENCES `patients` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback` FOREIGN KEY (`pID`) REFERENCES `patients` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
