-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 10:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawpoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `image`, `password`, `role_id`) VALUES
(1, 'Ali', 'ali@gmail.com', 'shaheen.jfif', '$2y$10$mSK52O3hKhWR15l4ZHEd.eZ0UB2r9DHj8/et7tbfu4yl6g15DqTzC', 1),
(2, 'bilal', 'bilal@gmail.com', 'babar.jfif', '$2y$10$q5KP6UUWbc12Io0SubxyJeGBZRK3xnK3IiX06I.5mZvdKmhFSwUlC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `customer_id`, `lawyer_id`, `appointment_date`, `appointment_time`, `status`) VALUES
(1, 4, 13, '2024-12-31', '19:56:00', 'Pending'),
(2, 4, 14, '2025-01-04', '10:00:00', 'Pending'),
(4, 4, 14, '2025-01-23', '03:05:00', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `appointments_scheduled`
--

CREATE TABLE `appointments_scheduled` (
  `appointment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments_scheduled`
--

INSERT INTO `appointments_scheduled` (`appointment_id`, `customer_id`, `lawyer_id`, `appointment_date`, `appointment_time`) VALUES
(1, 9, 15, '2025-01-24', '15:42:00'),
(2, 9, 15, '2025-01-24', '15:42:00'),
(3, 9, 15, '2025-01-24', '15:42:00'),
(4, 9, 15, '2025-01-24', '15:42:00'),
(5, 9, 15, '2025-01-24', '15:42:00'),
(6, 9, 15, '2025-01-24', '15:42:00'),
(7, 9, 15, '2025-01-31', '17:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Criminal'),
(2, 'Divorce'),
(3, 'Business'),
(4, 'Civil');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `contact_form_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `message` text NOT NULL,
  `date_submitted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`contact_form_id`, `name`, `email`, `subject`, `contact`, `message`, `date_submitted`) VALUES
(2, 'ali', 'ali@gmail.com', 'information', 2147483647, 'information\r\n required about lawyer', '2025-01-01 13:52:16'),
(3, 'ameer', 'ameer@gmail.com', 'need help', 2147483647, 'need help to go through website', '2025-01-01 13:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `customer_pic` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `gender`, `date_of_birth`, `email`, `customer_pic`, `password`, `role_id`) VALUES
(1, 'muhammmad_ali', 'M', '2004-08-25', 'ali@gmail.com', '', '123', 2),
(3, 'ameer', 'M', '2004-08-25', 'ameer@gmail.com', '', '789', 2),
(4, 'shahmeer', 'M', '2016-03-24', 'shahmeer@gmail.com', '', 'shah', 2),
(6, 'hussain', 'M', '2021-06-18', 'hussain@gmail.com', '', '$2y$10$ZfzvbNJdcSkuRD9O/5RFweOsqCKw.66kJxAa5tNstuOr1M7M81ETO', 2),
(7, 'affan', 'M', '2012-06-14', 'affan@gmail.com', 'NO Image', '$2y$10$rlY.e2tEf5Mq6P1f6Rb6euFNX6cd794D0/tRkJsdoiZ9AszjY0bv6', 2),
(9, 'haider', 'M', '2006-07-06', 'haider@gmail.com', 'NO Image', '$2y$10$GU.DrjoP46ftt3Dst6Uc5OFbQYyZByBvY11r8w0zEAaZHgWQ.HHNm', 2),
(10, 'danish', 'M', '2001-06-14', 'danish@gmail.com', 'msd.jfif', '$2y$10$91MIDddGh79TM2ZhcDEd1uQqVAEZXft5CzA.xeaCmFHWLcYFMQrjG', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `lawyer_id` int(11) NOT NULL,
  `lawyer_name` varchar(255) NOT NULL,
  `specialization` int(11) NOT NULL,
  `experience_years` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`lawyer_id`, `lawyer_name`, `specialization`, `experience_years`, `profile_image`, `description`, `contact_number`, `email`, `password`, `role_id`) VALUES
(13, 'owais', 3, 'two years', 'kohli2.jfif', 'graduated from best law college', 2147483647, 'owais@gmail.com', '456', 3),
(14, 'shahzaib', 1, 'two years', 'babar.jfif', 'two years of experience in sindh high court', 2147483647, 'shah@gmail.com', '$2y$10$7naAmHxlG/WZCViuA.wOl.ekWJhG1JQTqFHNvuNrUPYy5ii6sgjMO', 3),
(15, 'umer', 2, 'seven years', 'riwan.jfif', 'five years of experience in sindh high court', 2147483647, 'umer@gmail.com', '$2y$10$DpjrEref6f7JqS8h/YJtAOsKWRjRIf.uI2/7Bw8UJYDCGJLcFmH72', 3);

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_contact_request`
--

CREATE TABLE `lawyer_contact_request` (
  `contact_form_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_submitted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyer_contact_request`
--

INSERT INTO `lawyer_contact_request` (`contact_form_id`, `name`, `email`, `contact`, `subject`, `message`, `date_submitted`) VALUES
(1, 'kashif', 'kashif@gmail.com', 2147483647, 'no appointmnets', 'why am i not getting appointments', '2025-01-04 13:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `pending_requests`
--

CREATE TABLE `pending_requests` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `specialization` int(11) NOT NULL,
  `experience_years` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Customer'),
(3, 'Lawyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `lawyer_id` (`lawyer_id`);

--
-- Indexes for table `appointments_scheduled`
--
ALTER TABLE `appointments_scheduled`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `lawyer_id` (`lawyer_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`contact_form_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`lawyer_id`),
  ADD KEY `specialization` (`specialization`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `lawyer_contact_request`
--
ALTER TABLE `lawyer_contact_request`
  ADD PRIMARY KEY (`contact_form_id`);

--
-- Indexes for table `pending_requests`
--
ALTER TABLE `pending_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specialization` (`specialization`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `appointments_scheduled`
--
ALTER TABLE `appointments_scheduled`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `contact_form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `lawyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lawyer_contact_request`
--
ALTER TABLE `lawyer_contact_request`
  MODIFY `contact_form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pending_requests`
--
ALTER TABLE `pending_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD CONSTRAINT `admin_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`lawyer_id`) REFERENCES `lawyers` (`lawyer_id`);

--
-- Constraints for table `appointments_scheduled`
--
ALTER TABLE `appointments_scheduled`
  ADD CONSTRAINT `appointments_scheduled_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `appointments_scheduled_ibfk_2` FOREIGN KEY (`lawyer_id`) REFERENCES `lawyers` (`lawyer_id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

--
-- Constraints for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD CONSTRAINT `lawyers_ibfk_1` FOREIGN KEY (`specialization`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `lawyers_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

--
-- Constraints for table `pending_requests`
--
ALTER TABLE `pending_requests`
  ADD CONSTRAINT `pending_requests_ibfk_1` FOREIGN KEY (`specialization`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
