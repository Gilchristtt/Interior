-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2024 at 02:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interiorDesign`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `project_type` enum('full_renovation','specific_room','consultation') NOT NULL,
  `project_scope` text NOT NULL,
  `budget` decimal(10,2) NOT NULL,
  `timeline` varchar(255) NOT NULL,
  `consultation_date` date NOT NULL,
  `consultation_time` time NOT NULL,
  `existing_furniture` enum('keep','replace','mix') NOT NULL,
  `specific_requests` text DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `filepaths` text DEFAULT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`project_type`, `project_scope`, `budget`, `timeline`, `consultation_date`, `consultation_time`, `existing_furniture`, `specific_requests`, `client_id`, `filepaths`, `booking_id`) VALUES
('consultation', 'dheduedeidfu4i0[fu4rf4yf4uf4fu4f', '777.00', '2 to weeks', '2024-03-14', '16:57:00', 'mix', 'jiuedheoid3eod', 3, '', 37),
('specific_room', 'ewffcefde', '3445.00', '4 weeks', '2024-03-13', '00:47:00', 'replace', 'wddwd3', 17, '', 41),
('specific_room', 'sqqwdcwqd', '456.00', '9 weeks', '2024-03-06', '00:05:00', 'keep', '', 17, '', 42);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT 1 COMMENT 'User role: 1 means user, 2 means admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `first_name`, `last_name`, `contact_number`, `email`, `password`, `country`, `city`, `user_role`) VALUES
(3, '', 'Mazeze', '064234879299', 'joao@gmail.com', '$2y$10$rrK.4I/P8GN27doLjrd6DuB35sOYCtXbu2d1vpV3nBjrMhgICGA/6', 'Mozambique', 'Maputo', 1),
(17, '', 'Nhauche', '0595189482', 'judercio.nhauche@ashesi.edu.gh', '$2y$10$4C26WUO4m79cvSpWk992fOg2rCgj5njrpAR524j6S5SkxJ1OSJ0fa', 'Ghana', 'Accra', 1),
(18, '', 'Jose', '0595189482', 'chelsea@gmail.com', '$2y$10$W.ZJKtw5Nwe1vtKKzyd5h.bc2Ca4Hkchp4LdyVaVbzg8iLx12RQsu', 'Ghana', 'Accra', 1),
(19, '', 'lekane', '0595189482', 'lekane@gmail.com', '$2y$10$MiS3y7omxNjBtTurbfp5Iu9RfvWWsm/fHvC/v/ibzkqDw4itzWv/y', 'Ghana', 'Accra', 32),
(20, '', 'Jose', '0595189482', 'vin@gmail.com', '$2y$10$8SGYLfVGoZTd/3bxpzYdlOWAvSwYTs12nG55NnianN35MYbkesYKa', 'Ghana', 'Accra', 1),
(22, '', 'Nhauche', '0595189482', 'judercio@gmail.com', '$2y$10$dJnSpg8lYtA42O0AGjm8Hus1pANU6dBur67H8nAnuPVtr44.mPJOS', 'Ghana', 'Accra', 1);

-- --------------------------------------------------------

--
-- Table structure for table `designer_portfolio`
--

CREATE TABLE `designer_portfolio` (
  `Portfolioid` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `PortfolioDescription` text DEFAULT NULL,
  `YearsOfExperience` int(11) DEFAULT NULL,
  `Speciality` varchar(100) DEFAULT NULL,
  `EducationAndCertifications` text DEFAULT NULL,
  `LinkToProjects` text DEFAULT NULL,
  `AwardsAndRecognition` text DEFAULT NULL,
  `Testimonials` text DEFAULT NULL,
  `designer_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designer_portfolio`
--

INSERT INTO `designer_portfolio` (`Portfolioid`, `FirstName`, `LastName`, `PortfolioDescription`, `YearsOfExperience`, `Speciality`, `EducationAndCertifications`, `LinkToProjects`, `AwardsAndRecognition`, `Testimonials`, `designer_image`) VALUES
(26, '3e3e33', 'd3d3d3', 'd3d3d3d3', 122, 'Commercial Design', 'wdlkdkwed', 'wdlwdwd', 'dwdlkwdw', 'dw;ldk;wldw', 'ropa-1710751969.jpeg'),
(27, '3e3e33', 'd3d3d3', 'd3d3d3d3', 122, 'Commercial Design', 'wdlkdkwed', 'wdlwdwd', 'dwdlkwdw', 'dw;ldk;wldw', 'ropa-1710752014.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `fk_client_id` (`client_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `designer_portfolio`
--
ALTER TABLE `designer_portfolio`
  ADD PRIMARY KEY (`Portfolioid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `designer_portfolio`
--
ALTER TABLE `designer_portfolio`
  MODIFY `Portfolioid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_client_id` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
