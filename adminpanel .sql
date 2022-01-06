-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 11:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `charttest`
--

CREATE TABLE `charttest` (
  `id` int(11) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sale` varchar(20) NOT NULL,
  `expenses` varchar(20) NOT NULL,
  `profit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charttest`
--

INSERT INTO `charttest` (`id`, `year`, `sale`, `expenses`, `profit`) VALUES
(1, '2018', '1000', '400', '200'),
(2, '2019', '1170', '460', '250'),
(3, '2020', '660', '100', '800'),
(4, '2021', '1030', '540', '350');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(50) NOT NULL,
  `heading` longtext NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `heading`, `description`) VALUES
(1, 'What is sexual harassment? \r\n', 'Sexual harassment is any kind of unwanted behaviour of a sexual nature that makes you feel humiliated or intimidated, violates your dignity or creates a hostile environment.  \r\n\r\n  \r\n\r\nYou don’t need to have previously objected to someone\'s behaviour for it to be considered unwanted.  \r\n\r\n \r\n\r\nSexual harassment can include:  \r\n\r\nsexual comments or jokes  \r\n\r\nphysical behaviour, including unwelcome sexual advances, touching and various forms of sexual assault  \r\n\r\ndisplaying pictures, photos, or drawings of a sexual nature  \r\n\r\nsending emails or texts with a sexual content   '),
(2, 'What is sexual assault? ', 'If someone intentionally grabs or touch you in a sexual manner which you do not like, or you are forced to kiss someone or do something sexual against your will, this is sexual assault.   \r\n\r\n \r\n\r\nSexual assault includes touching of any part of someone’s body, regardless of clothes.   \r\n\r\n \r\n\r\nIf you have been sexually assaulted by penetration with part of the body excluding the penis, or another object, this is assault by penetration. It is different to rape but would be treated similarly if taken to court.      '),
(3, 'What is rape?', 'Due to rape being penetrative sex with the penis, only men can commit rape.   \r\n\r\nIf a man forces you to have penetrative sex, or has sex with you without consent, this is rape. Rape can be the non-consenting penetration with his penis of the vagina, anus, or mouth.   \r\n\r\n \r\n\r\nNo matter the situation, nobody has the right to force you to have sex or have sex with you without your consent. It is not your fault.');

-- --------------------------------------------------------

--
-- Table structure for table `homepagelinks`
--

CREATE TABLE `homepagelinks` (
  `id` int(20) NOT NULL,
  `info` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepagelinks`
--

INSERT INTO `homepagelinks` (`id`, `info`, `link`) VALUES
(1, 'Info1', 'https://www.testlink.com'),
(2, 'Info1', 'https://www.testlink.com'),
(3, 'Info1', 'https://www.testlink.com'),
(4, 'Info2', 'https://www.testlink.com'),
(5, 'Info2', 'https://www.testlink.com'),
(6, 'Info2', 'https://www.testlink.com'),
(7, 'Info3', 'https://www.testlink.com'),
(8, 'Info3', 'https://www.testlink.com'),
(9, 'Info3', 'https://www.testlink.com');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(4, 'admin', 'admin@gmail.com', 'admin', 'Admin'),
(9, 'test', 'test@gmail.com', 'test', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE `share` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `message` longtext NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `share`
--

INSERT INTO `share` (`id`, `name`, `location`, `message`, `date`, `time`) VALUES
(2, 'Jenna', 'London Road', 'This is a testing message from Jenna', '0000-00-00', '00:00:00'),
(11, 'John', 'Doe', 'john@example.com', '0000-00-00', '00:00:00'),
(13, 'Naimul', 'borough road', 'Hello world', '0000-00-00', '00:00:00'),
(14, 'Naimul', 'borough road', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '0000-00-00', '00:00:00'),
(15, 'Naimul', 'borough road', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '2021-12-07', '00:00:08'),
(16, 'Naimul Hasan', 'borough road', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ', '2021-12-07', '08:39:46'),
(17, 'Naimul Hasan', 'dfdffddf', 'Hello world', '2021-12-07', '22:07:00'),
(18, 'Naimul', 'London rd', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,', '2021-12-07', '22:20:00'),
(19, '', '', '', '2021-12-19', '14:36:00'),
(20, 'dfdf', 'dfdf', 'Hello this is a test of updating the message that shared by the user', '2021-12-19', '14:36:00'),
(21, 'Naimul', 'borough road', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-12-25', '16:22:00'),
(22, 'Naimul Hasan', 'borough road', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,ntially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-12-30', '10:47:00'),
(25, 'London South Bank University', 'borough road', 'here is mys experience shared', '2022-01-02', '20:35:00'),
(26, 'Naimul', '3', 'sdfdgdg', '2022-01-02', '20:42:00'),
(28, 'dfdf', 'On Campus', 'dfdfdfdf', '2022-01-04', '20:16:00'),
(29, 'dfdfdf', 'Outside Campus', 'dfdfdfdfdfdfdfsdfsadertfetf', '2022-01-05', '15:40:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charttest`
--
ALTER TABLE `charttest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepagelinks`
--
ALTER TABLE `homepagelinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charttest`
--
ALTER TABLE `charttest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homepagelinks`
--
ALTER TABLE `homepagelinks`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
