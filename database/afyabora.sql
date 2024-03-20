-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 20, 2024 at 05:37 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afyabora`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashier_users`
--

CREATE TABLE `cashier_users` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cashier_users`
--

INSERT INTO `cashier_users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`) VALUES
(1, 'Daniel', 'Muasa', 'elmmwas7@gmail.com', '123', '2024-03-20 17:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `counseller`
--

CREATE TABLE `counseller` (
  `id` int NOT NULL,
  `visitor_id` int NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `idNumber` varchar(255) DEFAULT NULL,
  `paymentMethod` varchar(255) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `timeIn` datetime DEFAULT NULL,
  `timeOut` datetime DEFAULT NULL,
  `consultation_report` text,
  `imaging_report` text,
  `counselling_report` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `counseller`
--

INSERT INTO `counseller` (`id`, `visitor_id`, `fullname`, `contact`, `idNumber`, `paymentMethod`, `age`, `timeIn`, `timeOut`, `consultation_report`, `imaging_report`, `counselling_report`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `contact` int NOT NULL,
  `idNumber` int NOT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `timeIn` timestamp(6) NOT NULL,
  `timeOut` timestamp(6) NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  `lab` tinyint(1) NOT NULL,
  `imaging` tinyint(1) NOT NULL,
  `counseller` tinyint(1) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `fullname`, `contact`, `idNumber`, `paymentMethod`, `age`, `timeIn`, `timeOut`, `details`, `lab`, `imaging`, `counseller`, `status`) VALUES
(1, 'Elius Matobi', 733225467, 2345678, 'cash', 42, '2024-03-13 21:00:00.000000', '2024-03-13 21:00:00.000000', '<p><strong>Symptoms</strong></p><p>headache</p><p>neusea</p><p>vomiting</p>', 0, 1, 1, 'red');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_users`
--

CREATE TABLE `doctor_users` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor_users`
--

INSERT INTO `doctor_users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`) VALUES
(1, 'Daniel', 'Muasa', 'elmmwas7@gmail.com', '123', '2024-03-20 17:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `imaging`
--

CREATE TABLE `imaging` (
  `visitor_id` int NOT NULL,
  `id` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `contact` int NOT NULL,
  `idNumber` int NOT NULL,
  `paymentMethod` varchar(20) NOT NULL,
  `age` int NOT NULL,
  `timeIn` timestamp(6) NOT NULL,
  `timeOut` timestamp(6) NOT NULL,
  `details` varchar(1255) NOT NULL,
  `imaging_report` varchar(1255) NOT NULL,
  `lab` tinyint(1) NOT NULL,
  `doctor` tinyint(1) NOT NULL,
  `counseller` tinyint(1) NOT NULL,
  `status` varchar(255) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `imaging`
--

INSERT INTO `imaging` (`visitor_id`, `id`, `fullname`, `contact`, `idNumber`, `paymentMethod`, `age`, `timeIn`, `timeOut`, `details`, `imaging_report`, `lab`, `doctor`, `counseller`, `status`) VALUES
(1, 1, 'Elius Matobi', 733225467, 2345678, 'cash', 42, '2024-03-13 21:00:00.000000', '2024-03-13 21:00:00.000000', '<p><strong>Symptoms</strong></p><p>headache</p><p>neusea</p><p>vomiting</p>', '<p>edu</p>', 0, 1, 1, 'pending'),
(2, 2, 'miss maliti', 743675489, 2145557, 'card', 24, '2024-03-13 21:00:00.000000', '2024-03-13 21:00:00.000000', '', '<p>dasa</p>', 0, 1, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `visitor_id` int NOT NULL,
  `id` int NOT NULL,
  `fullname` text NOT NULL,
  `contact` int NOT NULL,
  `idNumber` int NOT NULL,
  `paymentMethod` text NOT NULL,
  `age` int NOT NULL,
  `timeIn` timestamp(6) NOT NULL,
  `timeOut` timestamp(6) NOT NULL,
  `details` varchar(1255) NOT NULL DEFAULT '',
  `imaging_report` varchar(1255) NOT NULL,
  `doctor` tinyint(1) NOT NULL,
  `counseller` tinyint(1) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `lab` varchar(1255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`visitor_id`, `id`, `fullname`, `contact`, `idNumber`, `paymentMethod`, `age`, `timeIn`, `timeOut`, `details`, `imaging_report`, `doctor`, `counseller`, `status`, `lab`) VALUES
(1, 1, 'Elius Matobi', 733225467, 2345678, 'cash', 42, '2024-03-13 21:00:00.000000', '2024-03-13 21:00:00.000000', '<p><strong>Symptoms</strong></p><p>headache</p><p>neusea</p><p>vomiting</p>', '', 0, 0, 'done', '<p>&lt;p&gt;&amp;lt;p&amp;gt;&amp;amp;lt;p&amp;amp;gt;&amp;amp;amp;lt;p&amp;amp;amp;gt;hghghg&amp;amp;amp;lt;/p&amp;amp;amp;gt;hhhhh&amp;amp;lt;/p&amp;amp;gt;jjjn&amp;lt;/p&amp;gt;ouyyt&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;dasaasaasa</p>');

-- --------------------------------------------------------

--
-- Table structure for table `lab_users`
--

CREATE TABLE `lab_users` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lab_users`
--

INSERT INTO `lab_users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`) VALUES
(1, 'Daniel', 'Muasa', 'elmmwas7@gmail.com', '321', '2024-03-20 17:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_users`
--

CREATE TABLE `pharmacy_users` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `radiation_users`
--

CREATE TABLE `radiation_users` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reception_users`
--

CREATE TABLE `reception_users` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reception_users`
--

INSERT INTO `reception_users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`) VALUES
(1, 'Daniel', 'Muasa', 'elmmwas7@gmail.com', '123', '2024-03-20 15:35:13'),
(3, 'Daniel', 'Muasa', 'admin@mail.com', 'Password@123', '2024-03-20 16:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `contact` int NOT NULL,
  `idNumber` int NOT NULL,
  `attendPurpose` varchar(255) NOT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `role` text NOT NULL,
  `visitPurpose` text NOT NULL,
  `patientVisitedName` text NOT NULL,
  `relationship` text NOT NULL,
  `timeIn` timestamp NOT NULL,
  `timeOut` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `fullname`, `position`, `contact`, `idNumber`, `attendPurpose`, `paymentMethod`, `age`, `role`, `visitPurpose`, `patientVisitedName`, `relationship`, `timeIn`, `timeOut`) VALUES
(1, 'Elius Matobi', 'patient', 733225467, 2345678, 'doctor', 'cash', 42, '', '', '', '', '2024-03-13 21:00:00', '2024-03-13 21:00:00'),
(2, 'miss maliti', 'patient', 743675489, 2145557, 'imaging', 'card', 24, '', '', '', '', '2024-03-13 21:00:00', '2024-03-13 21:00:00'),
(3, 'sasasa', 'patient', 788965543, 565876, 'counseling', 'card', 43, '', '', '', '', '2024-03-18 21:00:00', '2024-03-18 21:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashier_users`
--
ALTER TABLE `cashier_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `counseller`
--
ALTER TABLE `counseller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_users`
--
ALTER TABLE `doctor_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `imaging`
--
ALTER TABLE `imaging`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visitor_id` (`visitor_id`);

--
-- Indexes for table `lab_users`
--
ALTER TABLE `lab_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pharmacy_users`
--
ALTER TABLE `pharmacy_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `radiation_users`
--
ALTER TABLE `radiation_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `reception_users`
--
ALTER TABLE `reception_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashier_users`
--
ALTER TABLE `cashier_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counseller`
--
ALTER TABLE `counseller`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor_users`
--
ALTER TABLE `doctor_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `imaging`
--
ALTER TABLE `imaging`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lab_users`
--
ALTER TABLE `lab_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pharmacy_users`
--
ALTER TABLE `pharmacy_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `radiation_users`
--
ALTER TABLE `radiation_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reception_users`
--
ALTER TABLE `reception_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lab`
--
ALTER TABLE `lab`
  ADD CONSTRAINT `lab_ibfk_1` FOREIGN KEY (`visitor_id`) REFERENCES `visitors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
