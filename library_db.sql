-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2026 at 02:31 PM
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
-- Database: `library_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `book_id` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `author`, `book_id`, `quantity`) VALUES
(1, 'java basics', 'abc', '', 0),
(2, 'java basics', 'abc', '', 0),
(3, 'java basics', 'abc', '', 0),
(4, 'java basics', 'abc', '', 0),
(5, 'java basics', 'abc', '201', 5),
(6, 'java basics', 'abc', '201', 5),
(7, 'java basics', 'abc', '201', 5),
(8, 'java basics', 'abc', '209', 9),
(9, 'java basics', 'abc', '209', 5),
(10, 'python', 'pari', '12', 2),
(11, 'python', 'abc', '201', 5),
(12, 'python', 'abc', '201', 5),
(13, 'java basics', 'abc', '201', 5);

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE `issue_books` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) DEFAULT NULL,
  `book_name` varchar(100) DEFAULT NULL,
  `issue_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issue_books`
--

INSERT INTO `issue_books` (`id`, `student_name`, `book_name`, `issue_date`) VALUES
(1, 'manish', 'java basics', '2026-04-28'),
(2, 'shivani', 'python', '2026-04-14'),
(3, 'reshma', 'java basics', '2026-05-24'),
(4, 'pari', 'python', '2026-05-20'),
(5, 'saroj', 'java', '2026-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `return_books`
--

CREATE TABLE `return_books` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) DEFAULT NULL,
  `book_name` varchar(100) DEFAULT NULL,
  `return_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `return_books`
--

INSERT INTO `return_books` (`id`, `student_name`, `book_name`, `return_date`) VALUES
(1, 'sneha kaushal', 'java basics', '2026-04-29'),
(2, 'sneha kaushal', 'java basics', '2026-04-29'),
(3, 'manish', 'java basics', '2026-04-23'),
(4, 'shivani', 'python', '2026-04-28'),
(5, 'pari', 'python', '2026-05-27'),
(6, 'pari', 'java basics', '2026-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_name` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `student_id` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `sem` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_name`, `id`, `name`, `class`, `mobile`, `student_id`, `branch`, `sem`, `photo`) VALUES
('Megha', 1, NULL, 'cse', '', NULL, NULL, NULL, NULL),
('Megha', 2, NULL, 'cse', '9926062150', NULL, NULL, NULL, NULL),
('Megha', 3, NULL, 'cse', '930678903', NULL, NULL, NULL, NULL),
('Megha', 4, NULL, 'cs', '9926062149', NULL, NULL, NULL, NULL),
('', 5, 'Megha', NULL, '9926062149', 'STU1465', 'Mechanical', 3, 'butter.jpeg'),
('', 6, 'sneha ', NULL, '9926062150', 'STU4800', 'Civil', 8, 'pose2.jpg'),
('', 7, 'Megha Kaushal', NULL, '9926062150', 'STU9701', 'Mechanical', 5, '20260104_225949.jpg'),
('', 8, 'anjali', NULL, '9926062150', 'STU2657', 'CS', 4, '20260104_230630.jpg'),
('', 9, 'shivani', NULL, '9926062149', 'STU8472', 'CS', 4, '20260104_225935.jpg'),
('', 10, 'shivani', NULL, '9926062150', 'STU8472', 'CS', 4, '20260104_225935.jpg'),
('', 11, 'reshma', NULL, '9926062150', 'STU3444', 'CS', 6, 'IMG-20260104-WA0061.jpg'),
('', 12, 'sneha ', NULL, '9926062150', 'STU4391', 'CS', 4, '20260104_225720.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `mobile`) VALUES
(1, 'sneha', '90', '9926062149'),
(2, 'admin', 'nm', '9926062150'),
(3, 'pari', 'pari', '9926062150'),
(4, 'anjali', '123', '9926062150'),
(5, 'Pari Gangrade', 'pari123', '9926062150'),
(6, 'rv652', '123456', '9617053800'),
(7, 'shivani', '90', '9926062149'),
(8, 'reshma', '90', '9926062150'),
(9, 'pari', '12345', '9926062149');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_books`
--
ALTER TABLE `issue_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_books`
--
ALTER TABLE `return_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `return_books`
--
ALTER TABLE `return_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
