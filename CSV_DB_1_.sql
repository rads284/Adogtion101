-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2017 at 08:53 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CSV_DB(1)`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `Dog Breed` varchar(16) DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `Vaccination Status` varchar(1) DEFAULT NULL,
  `Location` varchar(9) DEFAULT NULL,
  `Img Location` varchar(14) DEFAULT NULL,
  `aage` varchar(2) DEFAULT NULL,
  `ID` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`Dog Breed`, `Sex`, `Vaccination Status`, `Location`, `Img Location`, `aage`, `ID`) VALUES
('', '', '', '', '', '', ''),
('Pug', 'M', 'Y', 'Bangalore', 'pug1.jpg', '7', '1'),
('', '', '', '', '', '', ''),
('German Shepherd', 'M', 'Y', 'Bangalore', 'german1.jpg', '5', '2'),
('', '', '', '', '', '', ''),
('Great Dane', 'M', 'N', 'Bangalore', 'gr8dane3.jpg', '1', '3'),
('', '', '', '', '', '', ''),
('Boxer', 'M', 'N', 'Bangalore', 'boxer2.jpg', '3', '4'),
('', '', '', '', '', '', ''),
('Dalmatian', 'F', 'N', 'Bangalore', 'dalmatian2.jpg', '5', '5'),
('', '', '', '', '', '', ''),
('Golden Retriever', 'F', 'N', 'Bangalore', 'gold1.jpg', '11', '6'),
('', '', '', '', '', '', ''),
('Tibetan Mastiff', 'M', 'N', 'Bangalore', 'mastiff1.jpg', '1', '7'),
('', '', '', '', '', '', ''),
('Labrador', 'F', 'N', 'Bangalore', 'lab3.jpg', '1', '8'),
('', '', '', '', '', '', ''),
('Dachshund', 'M', 'Y', 'Hyderabad', 'dachshund2.jpg', '7', '9'),
('', '', '', '', '', '', ''),
('Bull Dog', 'M', 'Y', 'Hyderabad', 'bull2.jpg', '9', '10'),
('', '', '', '', '', '', ''),
('Beagle', 'M', 'N', 'Hyderabad', 'beagle3.jpg', '7', '11'),
('', '', '', '', '', '', ''),
('Pit Bull', 'M', 'N', 'Hyderabad', 'pitbull3.jpg', '9', '12'),
('', '', '', '', '', '', ''),
('Saint Bernard', 'M', 'N', 'Hyderabad', 'bernard4.jpg', '7', '13'),
('', '', '', '', '', '', ''),
('Doberman', 'M', 'N', 'Hyderabad', 'doberman4.jpg', '5', '14'),
('', '', '', '', '', '', ''),
('Rottweiler', 'M', 'N', 'Hyderabad', 'rott4.jpg', '1', '15'),
('', '', '', '', '', '', ''),
('Saint Bernard', 'M', 'Y', 'Hyderabad', 'bernard1.jpg', '3', '16'),
('', '', '', '', '', '', ''),
('Bull Dog', 'F', 'N', 'Pune', 'bull3.jpg', '9', '17'),
('', '', '', '', '', '', ''),
('Beagle', 'M', 'Y', 'Pune', 'beagle4.jpg', '9', '18'),
('', '', '', '', '', '', ''),
('Saint Bernard', 'M', 'N', 'Pune', 'bernard2.jpg', '5', '19'),
('', '', '', '', '', '', ''),
('Pit Bull', 'F', 'N', 'Pune', 'pitbull2.jpg', '1', '20'),
('', '', '', '', '', '', ''),
('Labrador', 'F', 'Y', 'Pune', 'lab2.jpg', '1', '21'),
('', '', '', '', '', '', ''),
('Pug', 'M', 'N', 'Pune', 'pug4.jpg', '7', '22'),
('', '', '', '', '', '', ''),
('German Shepherd', 'F', 'Y', 'Pune', 'german4.jpg', '1', '23'),
('', '', '', '', '', '', ''),
('Dachshund', 'M', 'N', 'Pune', 'dachshund3.jpg', '11', '24'),
('', '', '', '', '', '', ''),
('Boxer', 'M', 'Y', 'Chennai', 'boxer3.jpg', '3', '25'),
('', '', '', '', '', '', ''),
('Saint Bernard', 'M', 'Y', 'Chennai', 'bernard3.jpg', '5', '26'),
('', '', '', '', '', '', ''),
('Doberman', 'F', 'Y', 'Chennai', 'doberman3.jpg', '8', '27'),
('', '', '', '', '', '', ''),
('Rottweiler', 'F', 'Y', 'Chennai', 'rott3.jpg', '9', '28'),
('', '', '', '', '', '', ''),
('Dalmatian', 'M', 'Y', 'Chennai', 'dalmatian4.jpg', '7', '29'),
('', '', '', '', '', '', ''),
('Tibetan Mastiff', 'M', 'N', 'Chennai', 'mastiff3.jpg', '7', '30'),
('', '', '', '', '', '', ''),
('Dachshund', 'F', 'Y', 'Chennai', 'dachshund4.jpg', '7', '31'),
('', '', '', '', '', '', ''),
('Boxer', 'F', 'N', 'Chennai', 'boxer4.jpg', '1', '32'),
('', '', '', '', '', '', ''),
('Golden Retriever', 'M', 'N', 'Mangalore', 'gold3.jpg', '7', '33'),
('', '', '', '', '', '', ''),
('Great Dane', 'F', 'N', 'Mangalore', 'gr8dane2.jpg', '3', '34'),
('', '', '', '', '', '', ''),
('Dalmatian', 'F', 'Y', 'Mangalore', 'dalmatian1.jpg', '11', '35'),
('', '', '', '', '', '', ''),
('Doberman', 'F', 'N', 'Mangalore', 'doberman2.jpg', '1', '36'),
('', '', '', '', '', '', ''),
('Rottweiler', 'M', 'N', 'Mangalore', 'rott2.jpg', '7', '37'),
('', '', '', '', '', '', ''),
('Dalmatian', 'M', 'N', 'Mangalore', 'dalmatian3.jpg', '11', '38'),
('', '', '', '', '', '', ''),
('Tibetan Mastiff', 'F', 'Y', 'Mangalore', 'mastiff2.jpg', '5', '39'),
('', '', '', '', '', '', ''),
('Golden Retriever', 'M', 'Y', 'Mangalore', 'gold2.jpg', '1', '40'),
('', '', '', '', '', '', ''),
('Pit Bull', 'M', 'N', 'Kolkata', 'pitbull4.jpeg', '11', '41'),
('', '', '', '', '', '', ''),
('Pit Bull', 'F', 'N', 'Kolkata', 'pitbull1.jpg', '11', '42'),
('', '', '', '', '', '', ''),
('Bull Dog', 'F', 'Y', 'Kolkata', 'bull4.jpg', '9', '43'),
('', '', '', '', '', '', ''),
('Labrador', 'M', 'N', 'Kolkata', 'lab1.jpg', '1', '44'),
('', '', '', '', '', '', ''),
('Pug', 'F', 'Y', 'Kolkata', 'pug3.jpg', '1', '45'),
('', '', '', '', '', '', ''),
('German Shepherd', 'M', 'N', 'Delhi', 'german3.jpg', '3', '46'),
('', '', '', '', '', '', ''),
('Great Dane', 'F', 'Y', 'Delhi', 'gr8dane1.jpg', '7', '47'),
('', '', '', '', '', '', ''),
('Tibetan Mastiff', 'F', 'Y', 'Delhi', 'mastiff4.jpg', '1', '48'),
('', '', '', '', '', '', ''),
('Dachshund', 'F', 'N', 'Delhi', 'dachshund1.jpg', '7', '49'),
('', '', '', '', '', '', ''),
('Bull Dog', 'F', 'N', 'Delhi', 'bull1.jpg', '7', '50'),
('', '', '', '', '', '', ''),
('Beagle', 'M', 'Y', 'Delhi', 'beagle2.jpg', '11', '51'),
('', '', '', '', '', '', ''),
('Golden Retriever', 'F', 'Y', 'Delhi', 'gold4.jpg', '1', '52'),
('', '', '', '', '', '', ''),
('Boxer', 'M', 'Y', 'Delhi', 'boxer1.jpg', '7', '53'),
('', '', '', '', '', '', ''),
('Doberman', 'F', 'Y', 'Mysore', 'doberman1.jpg', '3', '54'),
('', '', '', '', '', '', ''),
('Rottweiler', 'F', 'Y', 'Mysore', 'rott1.jpg', '9', '55'),
('', '', '', '', '', '', ''),
('Pug', 'M', 'N', 'Mysore', 'pug2.jpg', '7', '56'),
('', '', '', '', '', '', ''),
('German Shepherd', 'F', 'Y', 'Kolkata', 'german2.jpg', '7', '57'),
('', '', '', '', '', '', ''),
('Great Dane', 'F', 'Y', 'Kolkata', 'gr8dane4.jpg', '1', '58'),
('', '', '', '', '', '', ''),
('Beagle', 'M', 'N', 'Kolkata', 'beagle1.jpg', '3', '59'),
('', '', '', '', '', '', ''),
('Labrador', 'M', 'N', 'Mumbai', 'lab4.jpg', '5', '60'),
('', '', '', '', '', '', ''),
('Bull Mastiff', 'F', 'Y', 'Mumbai', 'bullm1.jpg', '1', '61'),
('', '', '', '', '', '', ''),
('Bull Mastiff', 'F', 'N', 'Mumbai', 'bullm2.jpg', '3', '62'),
('', '', '', '', '', '', ''),
('Bull Mastiff', 'M', 'N', 'Mumbai', 'bullm3.jpg', '4', '63'),
('', '', '', '', '', '', ''),
('Bull Mastiff', 'M', 'Y', 'Mumbai', 'bullm4.jpg', '5', '64'),
('', '', '', '', '', '', ''),
('Pomeranian', 'F', 'N', 'Mumbai', 'pom1.jpg', '7', '65'),
('', '', '', '', '', '', ''),
('Pomeranian', 'F', 'N', 'Mumbai', 'pom2.jpg', '2', '66'),
('', '', '', '', '', '', ''),
('Pomeranian', 'M', 'Y', 'Mumbai', 'pom3.jpg', '5', '67'),
('', '', '', '', '', '', ''),
('Pomeranian', 'M', 'N', 'Mysore', 'pom4.jpg', '4', '68'),
('', '', '', '', '', '', ''),
('Indie', 'F', 'N', 'Mysore', 'indie1.jpg', '6', '69'),
('', '', '', '', '', '', ''),
('Indie', 'M', 'Y', 'Mysore', 'indie2.jpg', '4', '70'),
('', '', '', '', '', '', ''),
('Indie', 'M', 'N', 'Mysore', 'indie3.jpg', '3', '71'),
('', '', '', '', '', '', ''),
('Indie', 'F', 'N', 'Mysore', 'indie4.jpg', '0', '72');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `Id` int(2) DEFAULT NULL,
  `Category` varchar(9) DEFAULT NULL,
  `Price` int(4) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Source` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`Id`, `Category`, `Price`, `Name`, `Source`) VALUES
(1, 'Food', 350, 'Pedigree-Chunky', 'food1.jpeg'),
(2, 'Food', 450, 'Pedigree-Chopped Liver', 'food2.jpeg'),
(3, 'Food', 300, 'Pedigree-Vital', 'food3.jpeg'),
(4, 'Food', 360, 'Kiblle n Bits-small breed', 'food4.jpeg'),
(5, 'Food', 399, 'Baxters', 'food5.jpeg'),
(6, 'Food', 499, 'Arden Grange-large breed', 'food6.jpg'),
(7, 'Food', 299, 'Arden Grange-adult', 'food7.jpg'),
(8, 'Food', 287, 'Acana-Cobb Chicken', 'food8.jpg'),
(9, 'Apparels', 1200, 'Blue Coat', 'dress1.jpeg'),
(10, 'Apparels', 1099, 'Yellow Coat', 'dress2.jpeg'),
(11, 'Apparels', 999, 'Pink Sweater', 'dress3.jpeg'),
(12, 'Apparels', 1019, 'Red Sweater', 'dress4.jpeg'),
(13, 'Apparels', 1020, 'Grey Jacket', 'dress5.jpeg'),
(14, 'Apparels', 1100, 'Blue Sweater', 'dress6.jpg'),
(15, 'Apparels', 650, 'Black Jacket', 'dress7.jpg'),
(16, 'Apparels', 500, 'Brown Sweater', 'dress8.jpg'),
(17, 'Collars', 299, 'Black Collar', 'collar1.jpeg'),
(18, 'Collars', 399, 'Red Collar', 'collar2.jpeg'),
(19, 'Collars', 299, 'Moustache Collar', 'collar3.jpeg'),
(20, 'Collars', 399, 'Brown-Pink Collar', 'collar4.jpeg'),
(21, 'Collars', 299, 'Leash', 'collar5.jpeg'),
(22, 'Collars', 399, 'Red Paw Collar', 'collar6.jpg'),
(23, 'Collars', 299, 'Printed Collar', 'collar7.jpg'),
(24, 'Collars', 399, 'Black-Red Collar', 'collar8.jpg'),
(25, 'Toy', 199, 'Chew Toy', 'toy1.jpeg'),
(26, 'Toy', 250, 'Sqeauky Toy', 'toy2.jpeg'),
(27, 'Toy', 199, 'Chew Toy', 'toy3.jpeg'),
(28, 'Toy', 250, 'Squeaky Toy', 'toy4.jpeg'),
(29, 'Toy', 199, 'Squeaky Toy', 'toy5.jpeg'),
(30, 'Toy', 250, 'Squeaky Toy', 'toy6.jpg'),
(31, 'Toy', 199, 'Rope Toy', 'toy7.jpg'),
(32, 'Toy', 250, 'Jumball', 'toy8.jpg'),
(33, 'Medicines', 899, 'Worming Tablets', 'med1.jpeg'),
(34, 'Medicines', 799, 'BandAids', 'med2.jpg'),
(35, 'Medicines', 899, 'Sentinel', 'med3.jpg'),
(36, 'Medicines', 899, 'Shed No More', 'med4.jpg'),
(37, 'Medicines', 699, 'Optimmune', 'med5.jpg'),
(38, 'Medicines', 799, 'Brush Wipes', 'med6.jpg'),
(39, 'Medicines', 599, 'Injection', 'med7.jpg'),
(40, 'Medicines', 699, 'Bravecto', 'med8.jpeg'),
(41, 'Accessory', 399, 'Dog Safety Muzzle', 'accessory1.jpeg'),
(42, 'Accessory', 399, 'Dog Safety Muzzle', 'accessory2.jpg'),
(43, 'Accessory', 399, 'Dog Safety Muzzle', 'accessory3.jpg'),
(44, 'Accessory', 399, 'Body Belts', 'accessory4.jpg'),
(45, 'Accessory', 299, 'Body Belts', 'accessory5.jpeg'),
(46, 'Accessory', 299, 'Body Belts', 'accessory6.jpg'),
(47, 'Accessory', 299, 'Bandanas', 'accessory7.jpg'),
(48, 'Accessory', 250, 'Bandanas', 'accessory8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user1dog`
--

CREATE TABLE `user1dog` (
  `Dog Breed` varchar(20) DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `Vaccination Status` varchar(1) DEFAULT NULL,
  `Location` varchar(20) DEFAULT NULL,
  `Img Location` varchar(20) DEFAULT NULL,
  `aage` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1dog`
--

INSERT INTO `user1dog` (`Dog Breed`, `Sex`, `Vaccination Status`, `Location`, `Img Location`, `aage`, `ID`) VALUES
('Pug', 'M', 'Y', 'Bangalore', 'pug1.jpg', 7, 1),
('German Shepherd', 'M', 'Y', 'Bangalore', 'german1.jpg', 5, 2),
('Great Dane', 'M', 'N', 'Chennai', 'gr8dane3.jpg', 1, 3),
('Boxer', 'M', 'N', 'Bangalore', 'boxer2.jpg', 3, 4),
('Dalmatian', 'F', 'N', 'Delhi', 'dalmatian2.jpg', 5, 5),
('Golden Retriever', 'F', 'N', 'Bangalore', 'gold1.jpg', 11, 6),
('Tibetan Mastiff', 'M', 'N', 'Bangalore', 'mastiff1.jpg', 1, 7),
('German Shepherd', 'F', 'Y', 'Chennai', 'german4.jpg', 1, 23),
('Golden Retriever', 'M', 'Y', 'Mumbai', 'gold2.jpg', 1, 40),
('Pug', 'F', 'Y', 'Delhi', 'pug3.jpg', 1, 45),
('Golden Retriever', 'F', 'Y', 'Mangalore', 'gold4.jpg', 1, 52);

-- --------------------------------------------------------

--
-- Table structure for table `user1shop`
--

CREATE TABLE `user1shop` (
  `ID` int(11) NOT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Source` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1shop`
--

INSERT INTO `user1shop` (`ID`, `Category`, `Price`, `Name`, `Source`) VALUES
(1, 'Food', 350, 'Pedigree-Chunky', 'food1.jpeg'),
(2, 'Food', 450, 'Pedigree-Chopped Liv', 'food2.jpeg'),
(3, 'Food', 300, 'Pedigree-Vital', 'food3.jpeg'),
(4, 'Food', 360, 'Kiblle n Bits-small ', 'food4.jpeg'),
(5, 'Food', 399, 'Baxters', 'food5.jpeg'),
(6, 'Food', 499, 'Arden Grange-large b', 'food6.jpg'),
(7, 'Food', 299, 'Arden Grange-adult', 'food7.jpg'),
(23, 'Collars', 299, 'Printed Collar', 'collar7.jpg'),
(40, 'Medicines', 699, 'Bravecto', 'med8.jpeg'),
(45, 'Accessory', 299, 'Body Belts', 'accessory5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user68dog`
--

CREATE TABLE `user68dog` (
  `Dog Breed` varchar(20) DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `Vaccination Status` varchar(1) DEFAULT NULL,
  `Location` varchar(20) DEFAULT NULL,
  `Img Location` varchar(20) DEFAULT NULL,
  `aage` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user68dog`
--

INSERT INTO `user68dog` (`Dog Breed`, `Sex`, `Vaccination Status`, `Location`, `Img Location`, `aage`, `ID`) VALUES
('German Shepherd', 'M', 'Y', 'Bangalore', 'german1.jpg', 5, 2),
('Great Dane', 'M', 'N', 'Chennai', 'gr8dane3.jpg', 1, 3),
('Boxer', 'M', 'N', 'Bangalore', 'boxer2.jpg', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user68shop`
--

CREATE TABLE `user68shop` (
  `ID` int(11) NOT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Source` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user68shop`
--

INSERT INTO `user68shop` (`ID`, `Category`, `Price`, `Name`, `Source`) VALUES
(2, 'Food', 450, 'Pedigree-Chopped Liv', 'food2.jpeg'),
(3, 'Food', 300, 'Pedigree-Vital', 'food3.jpeg'),
(4, 'Food', 360, 'Kiblle n Bits-small ', 'food4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user73dog`
--

CREATE TABLE `user73dog` (
  `Dog Breed` varchar(20) DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `Vaccination Status` varchar(1) DEFAULT NULL,
  `Location` varchar(20) DEFAULT NULL,
  `Img Location` varchar(20) DEFAULT NULL,
  `aage` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user73dog`
--

INSERT INTO `user73dog` (`Dog Breed`, `Sex`, `Vaccination Status`, `Location`, `Img Location`, `aage`, `ID`) VALUES
('German Shepherd', 'M', 'Y', 'Bangalore', 'german1.jpg', 5, 2),
('Great Dane', 'M', 'N', 'Chennai', 'gr8dane3.jpg', 1, 3),
('Boxer', 'M', 'N', 'Bangalore', 'boxer2.jpg', 3, 4),
('Golden Retriever', 'F', 'N', 'Bangalore', 'gold1.jpg', 11, 6),
('Tibetan Mastiff', 'M', 'N', 'Bangalore', 'mastiff1.jpg', 1, 7),
('Labrador', 'F', 'N', 'Delhi', 'lab3.jpg', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user73shop`
--

CREATE TABLE `user73shop` (
  `ID` int(11) NOT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Source` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user73shop`
--

INSERT INTO `user73shop` (`ID`, `Category`, `Price`, `Name`, `Source`) VALUES
(2, 'Food', 450, 'Pedigree-Chopped Liv', 'food2.jpeg'),
(3, 'Food', 300, 'Pedigree-Vital', 'food3.jpeg'),
(4, 'Food', 360, 'Kiblle n Bits-small ', 'food4.jpeg'),
(6, 'Food', 499, 'Arden Grange-large b', 'food6.jpg'),
(7, 'Food', 299, 'Arden Grange-adult', 'food7.jpg'),
(8, 'Food', 287, 'Acana-Cobb Chicken', 'food8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user109dog`
--

CREATE TABLE `user109dog` (
  `Dog Breed` varchar(20) DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `Vaccination Status` varchar(1) DEFAULT NULL,
  `Location` varchar(20) DEFAULT NULL,
  `Img Location` varchar(20) DEFAULT NULL,
  `aage` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user109dog`
--

INSERT INTO `user109dog` (`Dog Breed`, `Sex`, `Vaccination Status`, `Location`, `Img Location`, `aage`, `ID`) VALUES
('German Shepherd', 'M', 'Y', 'Bangalore', 'german1.jpg', 5, 2),
('Dalmatian', 'F', 'N', 'Delhi', 'dalmatian2.jpg', 5, 5),
('Golden Retriever', 'F', 'N', 'Bangalore', 'gold1.jpg', 11, 6),
('Tibetan Mastiff', 'M', 'N', 'Bangalore', 'mastiff1.jpg', 1, 7),
('Dachshund', 'M', 'Y', 'Mysore', 'dachshund2.jpg', 7, 9),
('Bull Dog', 'M', 'Y', 'Mysore', 'bull2.jpg', 9, 10),
('Beagle', 'M', 'N', 'Chennai', 'beagle3.jpg', 7, 11),
('Pit Bull', 'M', 'N', 'Bangalore', 'pitbull3.jpg', 9, 12),
('Doberman', 'M', 'N', 'Bangalore', 'doberman4.jpg', 5, 14);

-- --------------------------------------------------------

--
-- Table structure for table `user109shop`
--

CREATE TABLE `user109shop` (
  `ID` int(11) NOT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Source` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user109shop`
--

INSERT INTO `user109shop` (`ID`, `Category`, `Price`, `Name`, `Source`) VALUES
(8, 'Food', 287, 'Acana-Cobb Chicken', 'food8.jpg'),
(9, 'Apparels', 1200, 'Blue Coat', 'dress1.jpeg'),
(10, 'Apparels', 1099, 'Yellow Coat', 'dress2.jpeg'),
(11, 'Apparels', 999, 'Pink Sweater', 'dress3.jpeg'),
(15, 'Apparels', 650, 'Black Jacket', 'dress7.jpg'),
(16, 'Apparels', 500, 'Brown Sweater', 'dress8.jpg'),
(45, 'Accessory', 299, 'Body Belts', 'accessory5.jpeg'),
(46, 'Accessory', 299, 'Body Belts', 'accessory6.jpg'),
(47, 'Accessory', 299, 'Bandanas', 'accessory7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userdog`
--

CREATE TABLE `userdog` (
  `Dog Breed` varchar(20) DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `Vaccination Status` varchar(1) DEFAULT NULL,
  `Location` varchar(20) DEFAULT NULL,
  `Img Location` varchar(20) DEFAULT NULL,
  `aage` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usershop`
--

CREATE TABLE `usershop` (
  `ID` int(11) NOT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Source` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user1dog`
--
ALTER TABLE `user1dog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user1shop`
--
ALTER TABLE `user1shop`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user68dog`
--
ALTER TABLE `user68dog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user68shop`
--
ALTER TABLE `user68shop`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user73dog`
--
ALTER TABLE `user73dog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user73shop`
--
ALTER TABLE `user73shop`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user109dog`
--
ALTER TABLE `user109dog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user109shop`
--
ALTER TABLE `user109shop`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userdog`
--
ALTER TABLE `userdog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usershop`
--
ALTER TABLE `usershop`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
