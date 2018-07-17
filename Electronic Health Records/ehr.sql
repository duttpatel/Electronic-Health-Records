-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 04:59 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ehr`
--
CREATE DATABASE IF NOT EXISTS `ehr` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ehr`;

-- --------------------------------------------------------

--
-- Table structure for table `allergy`
--

CREATE TABLE IF NOT EXISTS `allergy` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `AllergyName` varchar(20) NOT NULL,
  `DrugId` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `allergy`
--

INSERT INTO `allergy` (`Id`, `AllergyName`, `DrugId`) VALUES
(1, 'A', 1),
(2, 'B', 2);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `AppoinmentId` int(11) NOT NULL AUTO_INCREMENT,
  `PatientId` varchar(50) NOT NULL,
  `DoctorId` int(11) NOT NULL,
  `HospitalId` int(11) NOT NULL,
  `Purpose` varchar(30) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `ADate` date NOT NULL,
  `ATime` time NOT NULL,
  PRIMARY KEY (`AppoinmentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`AppoinmentId`, `PatientId`, `DoctorId`, `HospitalId`, `Purpose`, `Status`, `ADate`, `ATime`) VALUES
(1, 'PA20173749', 1, 6, 'MEET', 'no', '2017-10-25', '12:00:00'),
(2, 'PA20173749', 6, 5, 'Meet', 'yes', '2017-10-26', '09:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
  `DiseaseId` int(11) NOT NULL AUTO_INCREMENT,
  `DiseaseName` varchar(30) NOT NULL,
  PRIMARY KEY (`DiseaseId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`DiseaseId`, `DiseaseName`) VALUES
(1, 'ABC'),
(2, 'ABCD'),
(3, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `diseasesympton`
--

CREATE TABLE IF NOT EXISTS `diseasesympton` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `DiseaseId` int(11) NOT NULL,
  `SId` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `diseasesympton`
--

INSERT INTO `diseasesympton` (`Id`, `DiseaseId`, `SId`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 3, 1),
(4, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `DoctorId` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `ContactNumber` varchar(10) NOT NULL,
  `Degree` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `HospitalId` int(10) NOT NULL,
  PRIMARY KEY (`DoctorId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DoctorId`, `FirstName`, `LastName`, `Gender`, `DOB`, `ContactNumber`, `Degree`, `Email`, `HospitalId`) VALUES
(1, 'DUTT', 'PATEL', 'M', '1997-04-23', '2147483647', 'MBBS', '', 5),
(6, 'Aashi', 'Pathan', 'F', '1997-04-23', '2147483647', 'Orthopaedic', 'aashi@gmail.com', 6),
(10, 'Dia', 'Parel', 'F', '1997-04-23', '2147483647', 'Dentist', 'dai@gmail.com', 7),
(11, 'jwehd', 'kweyf', 'M', '1998-06-05', '2147483647', 'MBBS', '', 5),
(12, 'ABC', 'ABC', 'FEMALE', '2017-10-01', '1234567890', 'Radiologist', 'abc@gmail.com', 1),
(13, 'RAJ', 'PATEL', 'M', '0000-00-00', '7878717171', 'MBBS', 'raj@gmail.com', 5);

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE IF NOT EXISTS `drug` (
  `DrugId` int(11) NOT NULL AUTO_INCREMENT,
  `DrugName` varchar(100) NOT NULL,
  PRIMARY KEY (`DrugId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`DrugId`, `DrugName`) VALUES
(1, 'cefixime'),
(2, 'Ofloxacin'),
(3, 'Cetrizine'),
(4, 'Paracetamol'),
(8, 'moxifloxacin'),
(9, 'qwer');

-- --------------------------------------------------------

--
-- Table structure for table `genericstore`
--

CREATE TABLE IF NOT EXISTS `genericstore` (
  `GenericstoreId` int(11) NOT NULL AUTO_INCREMENT,
  `GenericstoreName` varchar(20) NOT NULL,
  `House` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `Pincode` varchar(6) NOT NULL,
  PRIMARY KEY (`GenericstoreId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `genericstore`
--

INSERT INTO `genericstore` (`GenericstoreId`, `GenericstoreName`, `House`, `City`, `Street`, `Pincode`) VALUES
(1, 'ABC Medicine', '73', 'Brampton', 'Campwood Cres', 'L6P3S8'),
(3, 'XYZ', '1', '1', '1', '120'),
(4, 'qqq', '1', 'aaaaa', 'aaaaa', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `HospitalId` int(11) NOT NULL AUTO_INCREMENT,
  `HospitalName` varchar(30) NOT NULL,
  `HospitalSpeciality` int(11) NOT NULL,
  `HospitalHouse` int(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `Pincode` varchar(6) NOT NULL,
  PRIMARY KEY (`HospitalId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`HospitalId`, `HospitalName`, `HospitalSpeciality`, `HospitalHouse`, `City`, `Street`, `Pincode`) VALUES
(5, 'Civil Hospital', 2, 0, 'a', 'a', '120'),
(6, 'Vadialal', 2, 12, 'abad', 'skldfj', '234567'),
(7, 'Mahagujarat', 3, 23, 'nadiad', 'jkdfh', '456745'),
(8, 'XUYZ', 2, 1, 'a', 'a', '1');

-- --------------------------------------------------------

--
-- Table structure for table `hospitaladmin`
--

CREATE TABLE IF NOT EXISTS `hospitaladmin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `HospitalId` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `LoginId` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `hospitaladmin`
--

INSERT INTO `hospitaladmin` (`Id`, `HospitalId`, `Username`, `Password`, `LoginId`) VALUES
(6, 5, 'AB', 'AB', 0),
(7, 6, 'ABC', 'ABC', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hspeciality`
--

CREATE TABLE IF NOT EXISTS `hspeciality` (
  `Sid` int(11) NOT NULL AUTO_INCREMENT,
  `SName` varchar(50) NOT NULL,
  PRIMARY KEY (`Sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `hspeciality`
--

INSERT INTO `hspeciality` (`Sid`, `SName`) VALUES
(2, 'General'),
(3, 'TB'),
(18, 'hair loss'),
(19, 'ABCD'),
(20, 'Xyz');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `UserType` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Username`, `Password`, `UserType`) VALUES
(2, 'AB', 'AB', 'HA'),
(5, 'dai@gmail.com', '1234', 'DA'),
(6, 'pia@gmail.com', 'aashi', 'PA'),
(7, 'aashi0727@gmail.com', 'aashi', 'PA'),
(8, 'aashi0727@gmail.com', 'aashi', 'PA'),
(9, 'aashi0727@gmail.com', 'aashi', 'DA'),
(13, 'PA20173749', 'hello', 'PA'),
(14, 'Admin', 'admin@123', 'MAIN'),
(15, 'abc@gmail.com', '1234', 'DA'),
(16, 'aashi@gmail.com', '1234', 'DA'),
(17, 'raj@gmail.com', 'hello', 'DA');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `PatientId` varchar(20) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Weight` float NOT NULL,
  `Height` float NOT NULL,
  `BloodGroup` varchar(10) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `ContactNumber` varchar(12) NOT NULL,
  `EContactNumber` varchar(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Id`, `PatientId`, `FirstName`, `MiddleName`, `LastName`, `DOB`, `Gender`, `Weight`, `Height`, `BloodGroup`, `Address`, `ContactNumber`, `EContactNumber`, `Email`) VALUES
(3, 'PA20173749', 'Meet', 'V', 'Patel', '1994-12-12', 'Male', 56, 5.5, 'B+', '73 campwood cres', '7878717172', '4167283501', 'duttpatel@gmail.com'),
(4, '1', 'Jeet', 'N', 'Pathan', '2017-10-01', 'Female', 50, 5, 'B+', 'Ahmedabad', '7878717171', '416351416', 'a@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `patientallergy`
--

CREATE TABLE IF NOT EXISTS `patientallergy` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `PatientId` varchar(20) NOT NULL,
  `AllergyId` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `patientallergy`
--

INSERT INTO `patientallergy` (`Id`, `PatientId`, `AllergyId`) VALUES
(1, 'PA20173749', 1),
(2, 'PA20173749', 2);

-- --------------------------------------------------------

--
-- Table structure for table `patientdisease`
--

CREATE TABLE IF NOT EXISTS `patientdisease` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `PatientId` varchar(20) NOT NULL,
  `DiseaseId` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `patientdisease`
--

INSERT INTO `patientdisease` (`Id`, `PatientId`, `DiseaseId`) VALUES
(1, 'PA20173749', '1'),
(2, 'PA20173749', '2'),
(3, 'PA20173749', '1'),
(4, 'PA20173749', '2'),
(5, 'PA20173749', '1'),
(6, 'PA20173749', '2'),
(7, 'PA20173749', '1'),
(8, 'PA20173749', '2');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `PrescriptionId` int(11) NOT NULL AUTO_INCREMENT,
  `PrescriptionDate` date NOT NULL,
  `PatientId` varchar(20) NOT NULL,
  `DoctorId` varchar(20) NOT NULL,
  `notes` varchar(255) NOT NULL,
  PRIMARY KEY (`PrescriptionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`PrescriptionId`, `PrescriptionDate`, `PatientId`, `DoctorId`, `notes`) VALUES
(40, '2017-09-14', '1', '1', 'Cold'),
(41, '2017-09-14', '1', '1', 'Fever COLD'),
(42, '2017-10-25', 'PA20173749', '6', 'Cold');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptiondrug`
--

CREATE TABLE IF NOT EXISTS `prescriptiondrug` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `PrescriptionId` int(11) NOT NULL,
  `DrugId` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Dose` varchar(20) NOT NULL,
  `When` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `prescriptiondrug`
--

INSERT INTO `prescriptiondrug` (`Id`, `PrescriptionId`, `DrugId`, `Qty`, `Dose`, `When`) VALUES
(24, 40, 1, 1, 'OID', 'Before Meal'),
(25, 40, 2, 1, 'OID', 'Before Meal'),
(26, 40, 3, 1, 'OID', 'Before Meal'),
(27, 41, 1, 3, 'OID', 'Before Meal'),
(28, 41, 3, 15, 'OID', 'After Meal'),
(29, 41, 4, 10, 'OID', 'Before Meal'),
(30, 41, 8, 22, 'OID', 'After Meal'),
(31, 42, 3, 1, 'OID', 'Before Meal');

-- --------------------------------------------------------

--
-- Table structure for table `sympton`
--

CREATE TABLE IF NOT EXISTS `sympton` (
  `SId` int(30) NOT NULL AUTO_INCREMENT,
  `SName` varchar(30) NOT NULL,
  PRIMARY KEY (`SId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sympton`
--

INSERT INTO `sympton` (`SId`, `SName`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `testresults`
--

CREATE TABLE IF NOT EXISTS `testresults` (
  `TestId` int(11) NOT NULL AUTO_INCREMENT,
  `PatientId` varchar(200) NOT NULL,
  `TestName` varchar(200) NOT NULL,
  `Impression` varchar(200) NOT NULL,
  `Path` varchar(200) NOT NULL,
  PRIMARY KEY (`TestId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `testresults`
--

INSERT INTO `testresults` (`TestId`, `PatientId`, `TestName`, `Impression`, `Path`) VALUES
(7, 'PA20173749', 'AA', 'AA', 'images/0321897536.pdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
