-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 10:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trustudoctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE `city_master` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clinic_master`
--

CREATE TABLE `clinic_master` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `country_master`
--

CREATE TABLE `country_master` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `sp_id`, `name`, `qualification`, `description`, `image`, `email`, `password`, `active`) VALUES
(1, 3, 'Dr. demo', 'Cardiologist', 'Presently working as the director of Interventional Cardiology department at Medanta - The medicity hospital,Gurgaon.Vast experienced in Interventional Cardiology.Prior to joining Medanta, has worked as Senior Consultant at Interventional Cardiologist, Indraprastha Apollo Hospitals,New Delhi and Associate Consultant at Escorts Heart Institute, Delhi. Specialises in all kinds of coronary intervention procedures. Expertises include Angioplasty, Angiography, ICD implantions, Pacemaker implantations, treatment of arrhythmias, Cardiac Electrophysiology Studies etc. Dr. Rajneesh is a member of renowned organisations such as Cardiology Society of India, Associations of Physicians of India, Indian association of Clinical Cardiologists(IACC).', 'doctor-01.jpg', 'demodoctor@demo.com', 'demo@12345', 1),
(2, 2, 'Dr. Demo 2', 'MBBS', 'abc', 'doctor-02.jpg', 'demo2@gmail.com', 'demo2@12345', 1),
(3, 1, 'Dr. Demo 3', 'MD', 'aaaa', 'doctor-03.jpg', 'demo3@demo.com', 'demo3@12345', 1),
(4, 4, 'demo 4', 'demo4', 'ssss', 'doctor-04.jpg', 'demo4@demo.com', 'demo4@12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lab_master`
--

CREATE TABLE `lab_master` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient_master`
--

CREATE TABLE `patient_master` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` int(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_master`
--

INSERT INTO `patient_master` (`id`, `name`, `email`, `password`, `contact`, `dob`, `bloodgroup`, `address`, `city`, `state`, `zipcode`, `country`, `image`) VALUES
(1, 'Demo', 'demo@demo.com', 'demo@12345', '', '', '', '', '', '', 0, '', ''),
(2, 'reva', 'demo12@demo.com', '123456', '9082963663', '', 'B+', 'hadapsar', 'pune', 'maharashtra', 411028, 'India', ''),
(3, 'reva', 'demo12@demo.com', '123456', '9082963663', '', 'B+', 'hadapsar', 'pune', 'maharashtra', 411028, 'India', ''),
(4, 'reva', 'demo12@demo.com', '123456789', '9082963663', '', 'B+', 'hadapsar', 'pune', 'maharashtra', 411028, 'India', 'patient5.jpg'),
(5, 'reva', 'demo12@demo.com', '111', '9082963663', '', 'B+', 'hadapsar', 'pune', 'maharashtra', 411028, 'India', ''),
(7, 'reva', 'demo12@demo.com', '369852147', '9082963663', '', 'B+', 'hadapsar', 'pune', 'maharashtra', 411028, 'India', ''),
(8, 'reva', 'demo12@demo.com', '1111', '9082963663', '', 'B+', 'hadapsar', 'pune', 'maharashtra', 411028, 'India', ''),
(9, 'reva', 'demo12@demo.com', '2222', '9082963663', '', 'B+', 'hadapsar', 'pune', 'maharashtra', 411028, 'India', '');

-- --------------------------------------------------------

--
-- Table structure for table `speciality_master`
--

CREATE TABLE `speciality_master` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `speciality_master`
--

INSERT INTO `speciality_master` (`id`, `name`) VALUES
(1, 'Allergists/Immunologists'),
(2, 'Anesthesiologists'),
(3, 'Cardiologists'),
(4, 'Dermatologists');

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE `state_master` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city_master`
--
ALTER TABLE `city_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_master`
--
ALTER TABLE `country_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_master`
--
ALTER TABLE `lab_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_master`
--
ALTER TABLE `patient_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speciality_master`
--
ALTER TABLE `speciality_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_master`
--
ALTER TABLE `state_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city_master`
--
ALTER TABLE `city_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country_master`
--
ALTER TABLE `country_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lab_master`
--
ALTER TABLE `lab_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_master`
--
ALTER TABLE `patient_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `speciality_master`
--
ALTER TABLE `speciality_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `state_master`
--
ALTER TABLE `state_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
