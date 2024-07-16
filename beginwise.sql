-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 08:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beginwise`
--

-- --------------------------------------------------------

--
-- Table structure for table `child_details`
--

CREATE TABLE `child_details` (
  `ID` int(40) NOT NULL,
  `PARENT_ID_FK` int(40) NOT NULL,
  `D_O_B` int(40) NOT NULL,
  `CHILD_NAME` varchar(50) NOT NULL,
  `GRADE_LEVEL` varchar(15) NOT NULL,
  `GENDER` varchar(20) NOT NULL,
  `CHILD_PICTURE` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `child_details`
--

INSERT INTO `child_details` (`ID`, `PARENT_ID_FK`, `D_O_B`, `CHILD_NAME`, `GRADE_LEVEL`, `GENDER`, `CHILD_PICTURE`) VALUES
(20, 10, 2024, 'abcd', 'nursery', 'Male', 'mypictures/childs/avatar.png'),
(21, 12, 2024, 'abcd', 'nursery', 'Female', 'mypictures/childs/avatar.png'),
(22, 12, 2024, 'rimsha', 'Kindergarden', 'Male', 'mypictures/childs/profile.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `ID` int(11) NOT NULL,
  `ROLE_NAME` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ID`, `ROLE_NAME`) VALUES
(1, 'Admin'),
(2, 'Parent');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(40) NOT NULL,
  `ROLE_ID_FK` int(11) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `CONTACT` int(11) NOT NULL,
  `USER_IMAGE` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `ROLE_ID_FK`, `USERNAME`, `PASSWORD`, `CONTACT`, `USER_IMAGE`) VALUES
(10, 2, 'rimsha', 'Fatiha@123', 2147483647, 'mypictures/users/avatar.png'),
(11, 2, 'fariha', 'Universe@123', 2147483647, 'mypictures/users/avatar.png'),
(12, 2, 'mifrah', 'abcD123@', 2147483647, 'mypictures/users/avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child_details`
--
ALTER TABLE `child_details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `child_details_ibfk_1` (`PARENT_ID_FK`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_role_ibfk_1` (`ROLE_ID_FK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child_details`
--
ALTER TABLE `child_details`
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `child_details`
--
ALTER TABLE `child_details`
  ADD CONSTRAINT `child_details_ibfk_1` FOREIGN KEY (`PARENT_ID_FK`) REFERENCES `users` (`ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`ROLE_ID_FK`) REFERENCES `role` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
