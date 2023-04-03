-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 06:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `crimes`
--

CREATE TABLE `crimes` (
  `user_id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crimes`
--

INSERT INTO `crimes` (`user_id`, `title`, `description`, `location`) VALUES
(1, 'Burglary', 'A house was broken into and several items were stolen.', '123 Main St, Springfield'),
(2, 'Vandalism', 'Graffiti was found on the side of a building.', '456 Oak St, Springfield');

-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

CREATE TABLE `lost` (
  `crime_type` text NOT NULL,
  `crime_location` text NOT NULL,
  `crime_description` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lost`
--

INSERT INTO `lost` (`crime_type`, `crime_location`, `crime_description`, `email`) VALUES
('rfasf', 'fsgf', 'sfadgf', 'sadaf.faizi@outlook.com'),
('rfasf', 'fsgf', 'sfadgf', 'sadaf.faizi@outlook.com'),
('theft', 'maple ridge', 'xxxx', 'someone@example.com'),
('theft', 'maple ridge', 'xxxx', 'someone@example.com'),
('theft', 'maple ridge', 'xxxx', 'someone@example.com'),
('theft', 'maple ridge', 'xxxx', 'someone@example.com'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('theft', 'maple ridge', 'I lost my wallet', 'someone2@example.com'),
('rfasf', 'fsgf', 'I lost my wallet', 'sadaf.faizi@student.ufv.ca'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('rfasf', 'fsgf', 'I lost my wallet', 'sadaf.faizi@student.ufv.ca'),
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lost_and_found`
--

CREATE TABLE `lost_and_found` (
  `Type of crime:` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `missing_persons`
--

CREATE TABLE `missing_persons` (
  `name` char(100) NOT NULL,
  `age` int(100) NOT NULL,
  `last_seen` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_filename` varchar(100) NOT NULL,
  `reported_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `missing_persons`
--

INSERT INTO `missing_persons` (`name`, `age`, `last_seen`, `description`, `image_filename`, `reported_at`) VALUES
('Jane Smith', 28, '2023-02-15', 'Description for Jane Smith', '', '2023-03-24 13:48:44.489223'),
('John Doe', 34, '2023-01-10', 'Description for John Doe', '', '2023-03-24 13:13:06.769806'),
('Robert Brown', 45, '2023-03-01', 'Description for Robert Brown', '', '2023-03-24 13:13:18.004689');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `phonenumber`, `password`) VALUES
(1, 'Sadaf', 'Faizi', '7785127259', 'dgfg412'),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(12345, 'Sadaf', 123),
(47470, 'Brian', 8787);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crimes`
--
ALTER TABLE `crimes`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `missing_persons`
--
ALTER TABLE `missing_persons`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
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
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
