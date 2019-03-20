-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2019 at 11:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeedata`
--

CREATE TABLE `employeedata` (
  `id` int(111) NOT NULL,
  `ename` varchar(321) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `gender` varchar(272) NOT NULL,
  `dob` varchar(60) NOT NULL,
  `doa` varchar(50) NOT NULL,
  `rd` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `maristatus` varchar(222) NOT NULL,
  `disability` varchar(200) NOT NULL,
  `adhar` varchar(200) NOT NULL,
  `pan` varchar(200) NOT NULL,
  `ticketno` varchar(200) NOT NULL,
  `epfno` varchar(20) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `ept` varchar(200) NOT NULL,
  `pe` varchar(200) NOT NULL,
  `ps` varchar(20) NOT NULL,
  `dptname` varchar(222) NOT NULL,
  `scn` varchar(22) NOT NULL,
  `sn` varchar(200) NOT NULL,
  `pc` varchar(200) NOT NULL,
  `bp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeedata`
--

INSERT INTO `employeedata` (`id`, `ename`, `designation`, `gender`, `dob`, `doa`, `rd`, `email`, `mobile`, `maristatus`, `disability`, `adhar`, `pan`, `ticketno`, `epfno`, `catagory`, `ept`, `pe`, `ps`, `dptname`, `scn`, `sn`, `pc`, `bp`) VALUES
(2, 'mkmaurya', 'it', 'Male', '2019-11-01', '2019-02-02', '2019-02-02', 'manish@coderscluster.com', '9145880474', 'Maried', 'Unmaried', '87778878878', 'jghSH28D', 'XSCVCDXV', 'UIUIIBI', 'OBC', 'JBIJB', 'BIJB', 'BIBIB K', 'NKJLNV', 'NIJBNKJN', 'NBJKBKJ', 'NIJBNJKL', '24000');

-- --------------------------------------------------------

--
-- Table structure for table `familydata`
--

CREATE TABLE `familydata` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `relation` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `bpurpose` varchar(200) NOT NULL,
  `eligibility` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `clgname` varchar(555) NOT NULL,
  `course` varchar(222) NOT NULL,
  `bonafidedate` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `familydata`
--

INSERT INTO `familydata` (`id`, `name`, `relation`, `dob`, `bpurpose`, `eligibility`, `gender`, `clgname`, `course`, `bonafidedate`) VALUES
(1, 'MANISH', 'Son', '1994-10-01', 'tour', 'Mca', 'Male', 'Dr R M L A U', 'SSC', '2019-01-20'),
(2, 'mkmaurya', 'Son', '1982-09-12', 'toor', 'bsc', 'Male', 'vbspu', 'B.SC', '1994-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'mkmaurya', 'mkmaurya955@gmail.com', '3b4529368ef24c7221ba5758c672d7e0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeedata`
--
ALTER TABLE `employeedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `familydata`
--
ALTER TABLE `familydata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeedata`
--
ALTER TABLE `employeedata`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `familydata`
--
ALTER TABLE `familydata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
