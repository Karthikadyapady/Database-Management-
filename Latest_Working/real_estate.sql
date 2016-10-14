-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2016 at 08:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `Info_ID` int(65) NOT NULL,
  `Inquiry_ID` int(65) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Profession` varchar(50) NOT NULL,
  `Apt_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`Info_ID`, `Inquiry_ID`, `Age`, `Gender`, `Profession`, `Apt_type`) VALUES
(1, 1, '29', 'male', 'User Experience Designer', '3BHK'),
(4, 4, '23', 'male', 'Student', '2BHK'),
(5, 5, '28', 'male', 'Cricketer', '3BHK'),
(14, 6, '32', 'male', 'Cricketer', 'Studio'),
(18, 11, '23', 'female', 'Student', '1BHK'),
(19, 12, '28', 'male', 'cricketer', 'Studio'),
(21, 14, '18', 'male', 'Tester', '3BHK'),
(23, 16, '18', 'female', 'Chefi', 'Studio'),
(24, 17, '18', 'male', 'p', '2bhk'),
(27, 19, '26', 'male', 'Student', 'Studio'),
(28, 20, '22', 'male', 'Cricketer', 'Studio'),
(29, 21, '25', 'male', 'Student', 'Studio'),
(32, 23, '27', 'male', 'User Experience Designer', '2BHK'),
(34, 24, '42', 'male', 'Cricketer', 'Studio'),
(37, 27, '34', 'male', 'Cricketer', '1BHK'),
(38, 28, '38', 'male', 'Cricketer', '3BHK'),
(40, 30, '29', 'male', 'Cricketer', '2BHK'),
(41, 31, '18', 'male', 'cricketer', '3BHK'),
(43, 32, '34', 'male', 'Senior User Experience Designer', 'Studio'),
(45, 33, '65', 'male', 'Politician', '3BHK'),
(46, 34, '45', 'male', 'Professional &#039;s', '2BHK'),
(47, 35, '25', 'male', 'Visual Designer&#039;s', '1BHK'),
(48, 36, '29', 'males', 'Cricketer&#039;s', 'Studio'),
(50, 38, '56', 'male', 'Chef&#039;s', '2BHK'),
(52, 44, '34', 'male', 'Developer&#039;s', '2BHK');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Inquiry_ID` int(65) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Inquiry_ID`, `First_name`, `Last_name`, `Username`) VALUES
(1, 'Karthik', 'Adyapady Srikrishna Swami', 'ASK'),
(2, 'Suneet', 'Patil', 'SP'),
(3, 'Suneet', 'Patil', '23'),
(4, 'Suneet', 'Patil', 'SP'),
(5, 'Virat', 'Kohli', 'VK'),
(6, 'Mahendra Singh', 'Dhoni', 'MSD'),
(7, 'Ravichandran', 'Ashwin', 'RA'),
(8, 'Virendar', 'Sehwag', 'VS'),
(9, 'Gautham', 'Gambir', 'GG'),
(10, 'Star', 'Bucks', 'SB'),
(11, 'Sabrina', 'St eloi', 'SS'),
(12, 'Mohammad', 'Shami', 'MS'),
(13, 'Form', 'Testing', 'FT'),
(14, 'Php', 'Include', 'Testing'),
(15, 'Sundar', 'Yatil', 'SY'),
(16, 'Hello', 'Again', 'HA'),
(17, 'Is', 'IT', 'Wroking?'),
(18, 'wow', 'working', 'ww'),
(19, 'Sambit', 'Mohanty', 'SM'),
(20, 'Irfan', 'Pathan', 'IP'),
(21, 'Aditya', 'Siva', 'msaditya9'),
(22, 'Bannana', 'Minions', 'bm'),
(23, 'Dheraj', 'Sakpal', 'DS'),
(24, 'Chris', 'Gayle', 'CG'),
(25, 'Vino', 'Pablo', 'VP'),
(26, 'Suhas', 'Reddy', 'sr'),
(27, 'Rohit', 'Sharma', 'RS'),
(28, 'Hashim', 'Amla', 'HA'),
(29, 'Gautham', 'Gambhir', 'GG'),
(30, 'Gautham', 'Gambir', 'ggg'),
(31, 'Kapil', 'Dev', 'KD'),
(32, 'Jason', 'Prutny', 'JP'),
(33, 'Naredra', 'Modi', 'NM'),
(34, 'Hitory', 'Clap', 'HC'),
(35, 'Krishna', 'Prasad', 'KP'),
(36, 'Rahul', 'Kl', 'RKL'),
(37, 'Is', 'IT', 'Working?'),
(38, 'Testing', 'in', 'Mozilla'),
(39, 'Neil', 'Harner', 'NH'),
(40, 'wat', 'the ', 'fuk'),
(41, 'is', 'it', 'working'),
(42, 'Testing', 'jghjglkhj', 'yuyuyu'),
(43, 'abd', 'sdf', 'rtrt'),
(44, 'David', 'Mark', 'DMV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`Info_ID`),
  ADD KEY `Inquiry_ID` (`Inquiry_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Inquiry_ID`),
  ADD KEY `Inquiry_ID` (`Inquiry_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `Info_ID` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Inquiry_ID` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `userinfo_ibfk_1` FOREIGN KEY (`Inquiry_ID`) REFERENCES `users` (`Inquiry_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
