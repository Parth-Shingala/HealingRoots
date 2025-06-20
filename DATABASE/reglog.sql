-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 07:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reglog`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `u_name` text NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `lang` varchar(10) DEFAULT NULL,
  `dtype` text NOT NULL,
  `a_date` date NOT NULL,
  `a_time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `u_name`, `age`, `gender`, `lang`, `dtype`, `a_date`, `a_time`) VALUES
(1, 'Gaurav', 18, 'Male', 'Hindi', 'Pnuemonia', '2023-05-13', '13:30:00.000000'),
(2, 'Gaurav', 18, 'Male', 'English', 'Covid19', '2023-05-13', '20:15:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `subject`, `message`) VALUES
('gaurav', 'gd@gmail.com', 'kainai', 'aaaaaaaaaaaaa'),
('gaurav', 'gd@gmail.com', 'kainai', 'aaaaaaaaaaaaa'),
('gaurav', 'gd@gmail.com', 'kainai', 'aaaaaaaaaaaaa'),
('gaurav', 'gd@gmail.com', 'kainai', 'aaaaaaaaaaaaa'),
('bb', 'om@gmail.com', 'kainai', 'nnnnnnnn');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Mayuri', 'mjl', 'mayuri@gmail.com', '12345'),
(2, 'ritik', 'ritik', 'ritik@gmail.com', 'ritik'),
(3, 'admin', 'admin', 'admin@gmail.com', 'admin123'),
(4, 'ved', 'ved', 'ved@gmail.com', 'ved'),
(5, 'dev', 'dev', 'ved1@gmail.com', 'ved'),
(6, 'Gaurav', 'GD', 'GD@GMAIL.COM', 'GD');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password_hash` text NOT NULL,
  `login_time` time NOT NULL,
  `login_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `username`, `password_hash`, `login_time`, `login_date`) VALUES
(3, 'admin', '$2y$10$NF6zblKEL9Rs68cBMZ8DguLIVDgsrYccYSLxm7oZ6pKEOK9O/1Rju', '14:09:56', '2023-05-13'),
(6, 'GD', '$2y$10$CiatIfVP0IzX1Q3o/2LGA.pZF1QaFJ8bd7TjsbDlTy/shvhBi4VX2', '14:13:57', '2023-05-13'),
(3, 'admin', '$2y$10$cZT6hDP8eAq1CnxWsZ2mge8N4ss.AiWwIDyyqRWnMVNMVv3d9Ksle', '14:15:51', '2023-05-13'),
(6, 'GD', '$2y$10$kBcPNliLSF9m3V1H179fvOGUArMloooXC2xXF/YcLK07sr1pyr1.S', '16:02:31', '2023-05-14'),
(4, 'ved', '$2y$10$Hf48FoFKtu5VEyZ9s7IQ4OafhOjqaYCn1k13Gdq/29ybUZSEKl09i', '16:16:33', '2023-05-14'),
(4, 'ved', '$2y$10$mKyqE5hf1IEHnIpwzSSgJOpLzHxllTwTotNCkMt8bWRqpThhYqSpq', '16:16:44', '2023-05-14'),
(4, 'ved', '$2y$10$9FqpqD.lviMbDTufl3epAOenK6NVs2fYKfkMoN3qB7WDCbtNMOhPW', '16:17:20', '2023-05-14'),
(4, 'ved', '$2y$10$ugx.E4be/0eyWy7vzB9ie.UbsR1deAWqHNYzeWz6j0RChbxl9p7.S', '16:25:41', '2023-05-14'),
(4, 'ved', '$2y$10$xQj95AInpm2rRBgMKwiY5OtcTMaL0yjF1xVe/UDPXcDPAlnf.7fb2', '16:25:52', '2023-05-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
