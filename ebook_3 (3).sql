-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 11:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookcard`
--

CREATE TABLE `bookcard` (
  `c_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `cart_price` int(11) NOT NULL,
  `cart_ipaddress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookcard`
--

INSERT INTO `bookcard` (`c_id`, `p_id`, `cart_price`, `cart_ipaddress`) VALUES
(50, 14, 0, 0),
(52, 22, 0, 0),
(62, 22, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `book_register`
--

CREATE TABLE `book_register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `role` int(11) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_register`
--

INSERT INTO `book_register` (`id`, `username`, `email`, `role`, `pass`) VALUES
(1, 'haider', 'haider@gmail.com', 0, '12345678'),
(2, 'sheharyar', 'sheharyar@gmail.com', 1, '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `book_table`
--

CREATE TABLE `book_table` (
  `id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_cat` varchar(50) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `book_prize` text NOT NULL,
  `book_img` text NOT NULL,
  `book_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_table`
--

INSERT INTO `book_table` (`id`, `book_name`, `book_cat`, `book_author`, `book_prize`, `book_img`, `book_desc`) VALUES
(10, 'The trails of apollo', 'Young adult fantasy', 'Rick Riordan', '$66', 'book1.jpg', ''),
(12, 'Muhammad Ali Jinnah', 'Jinnah: India-Partition-Independence', 'Jaswant Singh', '$55', 'book9.jpg', '\"Jinnah: India-Partition-Independence\" is a compelling biography written by Jaswant Singh that offers a comprehensive exploration of the life and legacy of Muhammad Ali Jinnah. In this book, Singh delves into the fascinating journey of Jinnah, tracing his rise to prominence as a charismatic leader and his pivotal role in the partition of India.'),
(13, 'Percy Jackson & the Olympians', 'Fantasy literature', 'Rick Riordan', '$88', 'book2.jpg', 'The book series \"Percy Jackson & the Olympians\" falls under the category of fantasy literature. It is primarily targeted towards young adult readers, although it has gained popularity among readers of various age groups. The series, written by Rick Riordan, combines elements of Greek mythology with modern-day settings and follows the adventures of Percy Jackson, a demigod and son of Poseidon, as he navigates a world filled with gods, monsters, and epic quests'),
(14, 'Oxford Junior English Grammar', 'Educational resource', 'Oxford university', '$99', 'book3.jpg', 'The book \"Oxford Junior English Grammar\" is categorized as an educational resource and specifically falls under the category of English language grammar. It is designed to help young learners understand and practice the rules and principles of English grammar. The book may cover topics such as parts of speech, sentence structure, verb tenses, punctuation, and other aspects of grammar. Its intended audience is typically primary school-aged children or learners who are new to studying English gram'),
(15, 'God And Love', 'Religion', 'Ali Riaz', '$33', 'book4.jpg', '\"God and Love\" is a thought-provoking exploration of the profound connection between divinity and the concept of love. Written by an esteemed author, the book delves into the intricate relationship between God and love from a philosophical, theological, or spiritual perspective. It delves into fundamental questions about the nature of love, its role in human existence, and how it relates to our understanding of the divine. Drawing on a wide range of sources and perspectives, the book invites rea'),
(16, ' The Special and General Theory', 'Science', 'Albert Einstein', '$77', 'book5.jpg', '\"The Special and General Theory\" is a seminal scientific work authored by Albert Einstein, first published in 1916. In this book, Einstein presents his revolutionary theories of relativity, which have had a profound impact on our understanding of the universe.'),
(17, 'Divergent', 'Young adult literature', 'Veronica Roth', '$66', 'book6.jpg', ''),
(18, 'Mathematical Principles of Natural Philosophy', 'Mathematics', 'Newton', '$66', 'book7.jpg', '\"Mathematical Principles of Natural Philosophy,\" commonly known as \"Principia,\" is a landmark scientific work written by Sir Isaac Newton and first published in 1687. It revolutionized our understanding of the physical world and laid the foundation for classical mechanics.'),
(19, 'Harry Potter', 'Fantasy literature', 'J.K. Rowling', '$77', 'book8.jpg', 'The Harry Potter book series, written by J.K. Rowling, is a captivating and magical tale that has captured the hearts of millions of readers worldwide. Set in a world where wizards and witches exist alongside ordinary humans, the story follows the life of a young orphan named Harry Potter.'),
(20, 'The Lord of the Rings', 'High Fanatasy', ' J.R.R. Tolkien', '$66', 'book10.jpg', '\"The Lord of the Rings\" is an epic high fantasy trilogy written by J.R.R. Tolkien that takes readers on a breathtaking journey through the mythical world of Middle-earth. The story unfolds across three volumes: \"The Fellowship of the Ring,\" \"The Two Towers,\" and \"The Return of the King.\"'),
(21, 'Liaquat Ali Khan: His Life and Work', 'Biography', 'Waheed Ahmad', '$99', 'book13.jpg', ''),
(22, '\"Imran Khan: The Biography\" ', 'Biography', 'Christopher Sandford', '$78', 'book14.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookcard`
--
ALTER TABLE `bookcard`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `book_register`
--
ALTER TABLE `book_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_table`
--
ALTER TABLE `book_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookcard`
--
ALTER TABLE `bookcard`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `book_register`
--
ALTER TABLE `book_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_table`
--
ALTER TABLE `book_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
