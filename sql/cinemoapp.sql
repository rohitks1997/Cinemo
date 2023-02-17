-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 03:44 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemoapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_history`
--

CREATE TABLE `book_history` (
  `book_history_id` int(30) NOT NULL,
  `payment_ID` int(30) NOT NULL,
  `payment_Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_history`
--

INSERT INTO `book_history` (`book_history_id`, `payment_ID`, `payment_Status`) VALUES
(1, 1, 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `cinema_id` int(30) NOT NULL,
  `cinema_name` int(30) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `introduction`
--

CREATE TABLE `introduction` (
  `introduction_id` int(30) NOT NULL,
  `introduction_text` text NOT NULL,
  `object_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `introduction`
--

INSERT INTO `introduction` (`introduction_id`, `introduction_text`, `object_text`) VALUES
(1, 'Cinemo is a web application which used by a particular movie theater business. Cinemo allows the users who want to watch movies at the cinema hall by booking the tickets. The user can give a rating and review the movie that they watched. In addition, Cinemo integrates a social feature which the user can share their booking ticket with their friends.\r\n', 'The main objective of Cinemo is to provide the customers convenience for choosing and booking the movie ticket online via a web application rather than going to the movie theatres physically which is time consuming and impractical.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(30) NOT NULL,
  `title` text NOT NULL,
  `Genre` text NOT NULL,
  `cover_img` text NOT NULL,
  `duration` float NOT NULL,
  `description` text NOT NULL,
  `release_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `Genre`, `cover_img`, `duration`, `description`, `release_date`) VALUES
(1, 'Ant-Man and the Wasp: Quantumania\r\n', 'Superhero', 'Ant-Man_and_the_Wasp_Quantumania_poster.jpg', 2, 'Scott Lang and Hope van Dyne, along with Hope\'s parents, Hank Pym and Janet van Dyne, and Lang\'s daughter, Cassie, go on a new adventure exploring the Quantum Realm that pushes their limits and pits them against Kang the Conqueror.', '2023-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(30) NOT NULL,
  `payer_id` int(30) NOT NULL,
  `room_schedule_id` int(30) NOT NULL,
  `seat_chosen` varchar(255) NOT NULL,
  `total_price` int(30) NOT NULL,
  `payer_name` varchar(255) NOT NULL,
  `payer_email` varchar(255) NOT NULL,
  `payer_card_number` varchar(16) NOT NULL,
  `card_exp` date NOT NULL,
  `CVV` varchar(3) NOT NULL,
  `payment status` enum('completed','pending') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payer_id`, `room_schedule_id`, `seat_chosen`, `total_price`, `payer_name`, `payer_email`, `payer_card_number`, `card_exp`, `CVV`, `payment status`) VALUES
(1, 4, 1, '12', 200, 'James Albert', 'james@gmail.com', '123456789', '2025-02-21', '488', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(30) NOT NULL,
  `book_history_idd` int(30) NOT NULL,
  `user_idd` int(30) NOT NULL,
  `review_stars` int(2) NOT NULL,
  `review_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_schedule`
--

CREATE TABLE `room_schedule` (
  `room_schedule_id` int(30) NOT NULL,
  `theater_room_idd` int(30) NOT NULL,
  `movie_idd` int(30) NOT NULL,
  `movie_showdate` date NOT NULL,
  `movie_showtime` time NOT NULL,
  `seats_booked` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_schedule`
--

INSERT INTO `room_schedule` (`room_schedule_id`, `theater_room_idd`, `movie_idd`, `movie_showdate`, `movie_showtime`, `seats_booked`) VALUES
(1, 1, 1, '2023-02-18', '19:00:00', '21,22');

-- --------------------------------------------------------

--
-- Table structure for table `room_template`
--

CREATE TABLE `room_template` (
  `room_template_id` int(30) NOT NULL,
  `theater_room_id` int(30) NOT NULL,
  `f_row_num` int(30) NOT NULL,
  `f_column_num` int(30) NOT NULL,
  `f_seat_price` int(30) NOT NULL,
  `s_row_num` int(30) NOT NULL,
  `s_column_num` int(30) NOT NULL,
  `s_seat_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_template`
--

INSERT INTO `room_template` (`room_template_id`, `theater_room_id`, `f_row_num`, `f_column_num`, `f_seat_price`, `s_row_num`, `s_column_num`, `s_seat_price`) VALUES
(1, 1, 8, 13, 200, 2, 16, 280);

-- --------------------------------------------------------

--
-- Table structure for table `theater_room`
--

CREATE TABLE `theater_room` (
  `theater_room_id` int(30) NOT NULL,
  `cinema_id` int(30) NOT NULL,
  `room_number` int(30) NOT NULL,
  `room_type` enum('2D','3D','IMAX') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater_room`
--

INSERT INTO `theater_room` (`theater_room_id`, `cinema_id`, `room_number`, `room_type`) VALUES
(1, 1, 1, '2D');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'rohuks97', 'rohit197', 'Rohit'),
(2, 'John', 'john123', 'jonh3455'),
(3, 'Sarah', 'sarahlo34', 'sar12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_history`
--
ALTER TABLE `book_history`
  ADD PRIMARY KEY (`book_history_id`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`cinema_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `room_schedule`
--
ALTER TABLE `room_schedule`
  ADD PRIMARY KEY (`room_schedule_id`);

--
-- Indexes for table `room_template`
--
ALTER TABLE `room_template`
  ADD PRIMARY KEY (`room_template_id`);

--
-- Indexes for table `theater_room`
--
ALTER TABLE `theater_room`
  ADD PRIMARY KEY (`theater_room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_history`
--
ALTER TABLE `book_history`
  MODIFY `book_history_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `cinema_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_schedule`
--
ALTER TABLE `room_schedule`
  MODIFY `room_schedule_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room_template`
--
ALTER TABLE `room_template`
  MODIFY `room_template_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `theater_room`
--
ALTER TABLE `theater_room`
  MODIFY `theater_room_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
