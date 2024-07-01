-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2022 at 10:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cesny_us`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas_we_serve`
--

DROP TABLE IF EXISTS `areas_we_serve`;
CREATE TABLE `areas_we_serve` (
  `city_id` int(11) NOT NULL,
  `showmap` varchar(3) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zoomlevel` int(2) NOT NULL,
  `reviewcount` int(11) NOT NULL,
  `checkincount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `areas_we_serve`
--

INSERT INTO `areas_we_serve` (`city_id`, `showmap`, `state`, `city`, `zoomlevel`, `reviewcount`, `checkincount`) VALUES
(1, 'yes', 'NY', 'Albany', 11, 10, 10),
(2, 'yes', 'NY', 'Altamont', 11, 10, 10),
(3, 'yes', 'NY', 'Argyle', 11, 10, 10),
(4, 'yes', 'NY', 'Arkville', 11, 10, 10),
(5, 'yes', 'NY', 'Athens', 11, 10, 10),
(6, 'yes', 'NY', 'Averill Park', 11, 10, 10),
(7, 'yes', 'NY', 'Ballston Spa', 11, 10, 10),
(8, 'yes', 'NY', 'Berne', 11, 10, 10),
(9, 'yes', 'NY', 'Bethlehem', 11, 10, 10),
(10, 'yes', 'NY', 'Brant Lake', 11, 10, 10),
(11, 'yes', 'NY', 'Broadalbin', 11, 10, 10),
(12, 'yes', 'NY', 'Cairo', 11, 10, 10),
(13, 'yes', 'NY', 'Cambridge', 11, 10, 10),
(14, 'yes', 'NY', 'Catskill', 11, 10, 10),
(15, 'yes', 'NY', 'Castleton-On-Hudson', 11, 10, 10),
(16, 'yes', 'NY', 'Chestertown', 11, 10, 10),
(17, 'yes', 'NY', 'Clermont', 11, 10, 10),
(18, 'yes', 'NY', 'Clifton Park', 11, 10, 10),
(19, 'yes', 'NY', 'Cobleskill', 11, 10, 10),
(20, 'yes', 'NY', 'Coeymans Hollow', 11, 10, 10),
(21, 'yes', 'NY', 'Cohoes', 11, 10, 10),
(22, 'yes', 'NY', 'Colonie', 11, 10, 10),
(23, 'yes', 'NY', 'Corinth', 11, 10, 10),
(24, 'yes', 'NY', 'Cossayuna', 11, 10, 10),
(25, 'yes', 'NY', 'Delanson', 11, 10, 10),
(26, 'yes', 'NY', 'Delmar', 11, 10, 10),
(27, 'yes', 'NY', 'Durham', 11, 10, 10),
(28, 'yes', 'NY', 'Eagle Bridge', 11, 10, 10),
(29, 'yes', 'NY', 'Earlton', 11, 10, 10),
(30, 'yes', 'NY', 'East Chatham', 11, 10, 10),
(31, 'yes', 'NY', 'East Durham', 11, 10, 10),
(32, 'yes', 'NY', 'East Greenbush', 11, 10, 10),
(33, 'yes', 'NY', 'East Nassau', 11, 10, 10),
(34, 'yes', 'NY', 'Fort Edward', 11, 10, 10),
(35, 'yes', 'NY', 'Freehold', 11, 10, 10),
(36, 'yes', 'NY', 'Gansevoort', 11, 10, 10),
(37, 'yes', 'NY', 'Glenmont', 11, 10, 10),
(38, 'yes', 'NY', 'Glenville', 11, 10, 10),
(39, 'yes', 'NY', 'Gloversville', 11, 10, 10),
(40, 'yes', 'NY', 'Granville', 11, 10, 10),
(41, 'yes', 'NY', 'Greenfield', 11, 10, 10),
(42, 'yes', 'NY', 'Greenfield Center', 11, 10, 10),
(43, 'yes', 'NY', 'Green Island', 11, 10, 10),
(44, 'yes', 'NY', 'Greenville', 11, 10, 10),
(45, 'yes', 'NY', 'Greenwich', 11, 10, 10),
(46, 'yes', 'NY', 'Guilderland', 11, 10, 10),
(47, 'yes', 'NY', 'Halfmoon', 11, 10, 10),
(48, 'yes', 'NY', 'Hannacroix', 11, 10, 10),
(49, 'yes', 'NY', 'Hoosick', 11, 10, 10),
(50, 'yes', 'NY', 'Hoosick Falls', 11, 10, 10),
(51, 'yes', 'NY', 'Hudson', 11, 10, 10),
(52, 'yes', 'NY', 'Johnsonville', 11, 10, 10),
(53, 'yes', 'NY', 'Johnstown', 11, 10, 10),
(54, 'yes', 'NY', 'Kingston', 11, 10, 10),
(55, 'yes', 'NY', 'Lake George', 11, 10, 10),
(56, 'yes', 'NY', 'Lake Katrine', 11, 10, 10),
(57, 'yes', 'NY', 'Latham', 11, 10, 10),
(58, 'yes', 'NY', 'Lebanon Springs', 11, 10, 10),
(59, 'yes', 'NY', 'Loudonville', 11, 10, 10),
(60, 'yes', 'NY', 'Maplecrest', 11, 10, 10),
(61, 'yes', 'NY', 'Mechanicville', 11, 10, 10),
(62, 'yes', 'NY', 'Menands', 11, 10, 10),
(63, 'yes', 'NY', 'Middlefield', 11, 10, 10),
(64, 'yes', 'NY', 'Nassau', 11, 10, 10),
(65, 'yes', 'NY', 'New Baltimore', 11, 10, 10),
(66, 'yes', 'NY', 'New Lebanon', 11, 10, 10),
(67, 'yes', 'NY', 'New Paltz', 11, 10, 10),
(68, 'yes', 'NY', 'Niskayuna', 11, 10, 10),
(69, 'yes', 'NY', 'North Greenbush', 11, 10, 10),
(70, 'yes', 'NY', 'Pattersonville', 11, 10, 10),
(71, 'yes', 'NY', 'Petersburgh', 11, 10, 10),
(72, 'yes', 'NY', 'Pine Plains', 11, 10, 10),
(73, 'yes', 'NY', 'Porter Corners', 11, 10, 10),
(74, 'yes', 'NY', 'Poughkeepsie', 11, 10, 10),
(75, 'yes', 'NY', 'Prattsville', 11, 10, 10),
(76, 'yes', 'NY', 'Queensbury ', 11, 10, 10),
(77, 'yes', 'NY', 'Rensselaer', 11, 10, 10),
(78, 'yes', 'NY', 'Rexford', 11, 10, 10),
(79, 'yes', 'NY', 'Richmondville', 11, 10, 10),
(80, 'yes', 'NY', 'Rotterdam', 11, 10, 10),
(81, 'yes', 'NY', 'Round Lake', 11, 10, 10),
(82, 'yes', 'NY', 'Roxbury', 11, 10, 10),
(83, 'yes', 'NY', 'Salem', 11, 10, 10),
(84, 'yes', 'NY', 'Sand Lake', 11, 10, 10),
(85, 'yes', 'NY', 'Saratoga Springs', 11, 10, 10),
(86, 'yes', 'NY', 'Saugerties', 11, 10, 10),
(87, 'yes', 'NY', 'Schenectady', 11, 10, 10),
(88, 'yes', 'NY', 'Schodack Landing', 11, 10, 10),
(89, 'yes', 'NY', 'Schuylerville', 11, 10, 10),
(90, 'yes', 'NY', 'Sharon Springs', 11, 10, 10),
(91, 'yes', 'NY', 'Slingerlands', 11, 10, 10),
(92, 'yes', 'NY', 'Sloansville', 11, 10, 10),
(93, 'yes', 'NY', 'South Glens Falls', 11, 10, 10),
(94, 'yes', 'NY', 'South Westerlo', 11, 10, 10),
(95, 'yes', 'NY', 'Stephentown', 11, 10, 10),
(96, 'yes', 'NY', 'Summit', 11, 10, 10),
(97, 'yes', 'NY', 'Tannersville', 11, 10, 10),
(98, 'yes', 'NY', 'Ticonderoga', 11, 10, 10),
(99, 'yes', 'NY', 'Troy', 11, 10, 10),
(100, 'yes', 'NY', 'Tupper Lake', 11, 10, 10),
(101, 'yes', 'NY', 'Valatie', 11, 10, 10),
(102, 'yes', 'NY', 'Voorheesville', 11, 10, 10),
(103, 'yes', 'NY', 'Waterford', 11, 10, 10),
(104, 'yes', 'NY', 'Watervliet', 11, 10, 10),
(105, 'yes', 'NY', 'Westerlo', 11, 10, 10),
(106, 'yes', 'NY', 'West Kill', 11, 10, 10),
(107, 'yes', 'NY', 'White Creek', 11, 10, 10),
(108, 'yes', 'NY', 'Woodstock', 11, 10, 10),
(109, 'yes', 'NY', 'Wynantskill', 11, 10, 10),
(110, 'yes', 'NY', 'Manchester', 11, 10, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas_we_serve`
--
ALTER TABLE `areas_we_serve`
  ADD PRIMARY KEY (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas_we_serve`
--
ALTER TABLE `areas_we_serve`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
