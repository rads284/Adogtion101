-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2017 at 05:38 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CSV_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `DOGACC`
--

CREATE TABLE `DOGACC` (
  `COL 1` varchar(2) DEFAULT NULL,
  `COL 2` varchar(9) DEFAULT NULL,
  `COL 3` varchar(5) DEFAULT NULL,
  `COL 4` varchar(25) DEFAULT NULL,
  `COL 5` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `DOGACC`
--

INSERT INTO `DOGACC` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`) VALUES
('Id', 'Category', 'Price', 'Name', 'Source'),
('1', 'Food', '350', 'Pedigree-Chunky', 'food1.jpeg'),
('2', 'Food', '450', 'Pedigree-Chopped Liver', 'food2.jpeg'),
('3', 'Food', '300', 'Pedigree-Vital', 'food3.jpeg'),
('4', 'Food', '360', 'Kiblle n Bits-small breed', 'food4.jpeg'),
('5', 'Food', '399', 'Baxters', 'food5.jpeg'),
('6', 'Food', '499', 'Arden Grange-large breed', 'food6.jpg'),
('7', 'Food', '299', 'Arden Grange-adult', 'food7.jpg'),
('8', 'Food', '287', 'Acana-Cobb Chicken', 'food8.jpg'),
('9', 'Apparels', '1200', 'Blue Coat', 'dress1.jpeg'),
('10', 'Apparels', '1099', 'Yellow Coat', 'dress2.jpeg'),
('11', 'Apparels', '999', 'Pink Sweater', 'dress3.jpeg'),
('12', 'Apparels', '1019', 'Red Sweater', 'dress4.jpeg'),
('13', 'Apparels', '1020', 'Grey Jacket', 'dress5.jpeg'),
('14', 'Apparels', '1100', 'Blue Sweater', 'dress6.jpg'),
('15', 'Apparels', '650', 'Black Jacket', 'dress7.jpg'),
('16', 'Apparels', '500', 'Brown Sweater', 'dress8.jpg'),
('17', 'Collars', '299', 'Black Collar', 'collar1.jpeg'),
('18', 'Collars', '399', 'Red Collar', 'collar2.jpeg'),
('19', 'Collars', '299', 'Moustache Collar', 'collar3.jpeg'),
('20', 'Collars', '399', 'Brown-Pink Collar', 'collar4.jpeg'),
('21', 'Collars', '299', 'Leash', 'collar5.jpeg'),
('22', 'Collars', '399', 'Red Paw Collar', 'collar6.jpg'),
('23', 'Collars', '299', 'Printed Collar', 'collar7.jpg'),
('24', 'Collars', '399', 'Black-Red Collar', 'collar8.jpg'),
('25', 'Toy', '199', 'Chew Toy', 'toy1.jpeg'),
('26', 'Toy', '250', 'Sqeauky Toy', 'toy2.jpeg'),
('27', 'Toy', '199', 'Chew Toy', 'toy3.jpeg'),
('28', 'Toy', '250', 'Squeaky Toy', 'toy4.jpeg'),
('29', 'Toy', '199', 'Squeaky Toy', 'toy5.jpeg'),
('30', 'Toy', '250', 'Squeaky Toy', 'toy6.jpg'),
('31', 'Toy', '199', 'Rope Toy', 'toy7.jpg'),
('32', 'Toy', '250', 'Jumball', 'toy8.jpg'),
('33', 'Medicines', '899', 'Worming Tablets', 'med1.jpeg'),
('34', 'Medicines', '799', 'BandAids', 'med2.jpg'),
('35', 'Medicines', '899', 'Sentinel', 'med3.jpg'),
('36', 'Medicines', '899', 'Shed No More', 'med4.jpg'),
('37', 'Medicines', '699', 'Optimmune', 'med5.jpg'),
('38', 'Medicines', '799', 'Brush Wipes', 'med6.jpg'),
('39', 'Medicines', '599', 'Injection', 'med7.jpg'),
('40', 'Medicines', '699', 'Bravecto', 'med8.jpeg'),
('41', 'Accessory', '399', 'Dog Safety Muzzle', 'accessory1.jpeg'),
('42', 'Accessory', '399', 'Dog Safety Muzzle', 'accessory2.jpg'),
('43', 'Accessory', '399', 'Dog Safety Muzzle', 'accessory3.jpg'),
('44', 'Accessory', '399', 'Body Belts', 'accessory4.jpg'),
('45', 'Accessory', '299', 'Body Belts', 'accessory5.jpeg'),
('46', 'Accessory', '299', 'Body Belts', 'accessory6.jpg'),
('47', 'Accessory', '299', 'Bandanas', 'accessory7.jpg'),
('48', 'Accessory', '250', 'Bandanas', 'accessory8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `TABLE 2`
--

CREATE TABLE `TABLE 2` (
  `Id` int(2) DEFAULT NULL,
  `Category` varchar(9) DEFAULT NULL,
  `Price` int(4) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Source` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TABLE 2`
--

INSERT INTO `TABLE 2` (`Id`, `Category`, `Price`, `Name`, `Source`) VALUES
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
