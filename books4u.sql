-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 10:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books4u`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('shabbir', 'Niklaus@2005');

-- --------------------------------------------------------

--
-- Table structure for table `authenticate`
--

CREATE TABLE `authenticate` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cno` bigint(12) NOT NULL,
  `eno` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authenticate`
--

INSERT INTO `authenticate` (`id`, `email`, `password`, `cno`, `eno`) VALUES
(1, 'shabbirmarfatiya@gecg28.ac.in', 'Niklaus@2005', 5453436, 545346),
(2, 'vrajeshshah33@gecg28.ac.in', 'chocolate08', 9106755871, 180133116018);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cno` bigint(12) NOT NULL,
  `role` varchar(15) NOT NULL,
  `Book_Image` varchar(50) NOT NULL,
  `Book_Title` varchar(50) NOT NULL,
  `Author_Name` varchar(40) NOT NULL,
  `Edition` varchar(20) NOT NULL,
  `Semester` varchar(30) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Added_On` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Id`, `name`, `cno`, `role`, `Book_Image`, `Book_Title`, `Author_Name`, `Edition`, `Semester`, `Department`, `Added_On`) VALUES
(1, 'Shabbir', 8469741908, 'student', 'java.jpg', ' Java The Complete Reference', 'Herbert Schildt', 'Seventh Edition', ' Sem-1', ' Information Technology', '2020-02-27 21:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) NOT NULL,
  `cono` bigint(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `query` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `cono`, `email`, `query`) VALUES
('Shabbir', 8469741908, 'shabbirmarfatiya@gmail.com', 'Jai hind!'),
('Shabbir', 8469741908, 'shabbirmarfatiya@gmail.com', 'Jai hind!'),
('Shabbir', 8469741908, 'shabbirmarfatiya@gmail.com', 'Jai hind!'),
('Shabbir', 8469741908, 'shabbirmarfatiya@gmail.com', 'Shivam jaldi kaam kar'),
('Hardik', 8758054654, 'hardikjp@gmail.com', 'Hardik potanu kaam kar advice nai aap bija ne');

-- --------------------------------------------------------

--
-- Table structure for table `insert_accessory`
--

CREATE TABLE `insert_accessory` (
  `id` int(11) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `acno` bigint(11) NOT NULL,
  `arole` varchar(22) NOT NULL,
  `toolname` varchar(255) NOT NULL,
  `toolimg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insert_accessory`
--

INSERT INTO `insert_accessory` (`id`, `aname`, `acno`, `arole`, `toolname`, `toolimg`) VALUES
(8, 'Shabbir', 8469741908, 'student', 'Scientific Calculator', 'calc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrate`
--

CREATE TABLE `migrate` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cno` bigint(12) NOT NULL,
  `role` varchar(20) NOT NULL,
  `b_id` int(11) NOT NULL,
  `Book_Title` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migrate`
--

INSERT INTO `migrate` (`id`, `email`, `name`, `cno`, `role`, `b_id`, `Book_Title`, `Department`) VALUES
(26, 'shabbirmarfatiya@gecg28.ac.in', 'Shabbir', 9876543021, 'student', 0, ' Software Engineering', ' Information Technology'),
(27, 'shabbirmarfatiya@gecg28.ac.in', 'Shabbir', 8469741908, 'student', 0, ' Java The Complete Reference', ' Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `migrate_accessories`
--

CREATE TABLE `migrate_accessories` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `acno` bigint(12) NOT NULL,
  `arole` varchar(20) NOT NULL,
  `toolname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migrate_accessories`
--

INSERT INTO `migrate_accessories` (`id`, `email`, `aname`, `acno`, `arole`, `toolname`) VALUES
(1, 'shabbirmarfatiya@gecg28.ac.in', 'Shabbir', 8469741908, 'student', 'Scientific Calculator');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `eno` bigint(12) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `cno` bigint(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `eno`, `dept`, `cno`, `email`, `password`, `status`) VALUES
(79, 'Shabbir', 180133116009, 'IT', 8469741908, 'shabbirmarfatiya@gmail.com', '$2y$10$MIH7Zr21b0KTo1pNh1DwxeagEYZq3OFn2r7dJd0VWPkzV6OycX042', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authenticate`
--
ALTER TABLE `authenticate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `insert_accessory`
--
ALTER TABLE `insert_accessory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrate`
--
ALTER TABLE `migrate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrate_accessories`
--
ALTER TABLE `migrate_accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `eno` (`eno`),
  ADD UNIQUE KEY `cno` (`cno`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authenticate`
--
ALTER TABLE `authenticate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `insert_accessory`
--
ALTER TABLE `insert_accessory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrate`
--
ALTER TABLE `migrate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrate_accessories`
--
ALTER TABLE `migrate_accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
