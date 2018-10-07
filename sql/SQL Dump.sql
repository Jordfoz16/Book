-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 09:55 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookID`, `name`, `author`, `pages`, `genre`, `rating`, `picture`) VALUES
(1, 'The Hobbit', 'J. R. R. Tolkien', 305, 'Fantasy', 4.5, 'https://images-na.ssl-images-amazon.com/images/I/91b0C2YNSrL.jpg'),
(2, 'The Silmarillion', 'J. R. R. Tolkien', 366, 'Fantasy', 3.9, 'https://images-na.ssl-images-amazon.com/images/I/41SAdzmroEL._SX327_BO1,204,203,200_.jpg'),
(3, 'The Fellowship of the Ring', 'J. R. R. Tolkien', 448, 'Fantasy', 4.7, 'https://images-eu.ssl-images-amazon.com/images/I/41W%2BRH8kJgL.jpg'),
(4, 'The Two Towers', 'J. R. R. Tolkien', 352, 'Fantasy', 4.7, 'https://images-na.ssl-images-amazon.com/images/I/31mWM3UGoZL._SX310_BO1,204,203,200_.jpg'),
(5, 'The Return of the King', 'J. R. R. Tolkien', 464, 'Fantasy', 4.7, 'https://images-eu.ssl-images-amazon.com/images/I/41fHC5yiRgL.jpg'),
(6, 'Heir of Fire', 'Sarah J. Maas', 557, 'Fantasy', 4.5, 'https://images-na.ssl-images-amazon.com/images/I/51DFcNMdASL._SX324_BO1,204,203,200_.jpg'),
(7, 'The Assassin\'s Blade', 'Sarah J. Maas', 436, 'Fantasy', 4.5, 'https://images-na.ssl-images-amazon.com/images/I/51fu5RcOnZL._SX323_BO1,204,203,200_.jpg'),
(8, 'Queen of Shadows', 'Sarah J. Maas', 648, 'Fantasy', 4.6, 'https://images-na.ssl-images-amazon.com/images/I/510XE3x2xuL._SX324_BO1,204,203,200_.jpg'),
(9, 'Throne of Glass', 'Sarah J. Maas', 421, 'Fantasy', 4.2, 'https://images-na.ssl-images-amazon.com/images/I/51US9dqTOfL._SX323_BO1,204,203,200_.jpg'),
(10, 'Harry Potter and the Chamber of Secrets', 'J.K. Rowling', 359, 'Fantasy', 4.5, 'https://media.bloomsbury.com/rep/bj/9781408855669.jpeg'),
(11, 'Harry Potter and the prisoner of Azkaban', 'J.K. Rowling', 461, 'Fantasy', 4.4, 'https://images-na.ssl-images-amazon.com/images/I/51BXPzy1rpL._SX322_BO1,204,203,200_.jpg'),
(12, 'Harry Potter and the Goblet of Fire', 'J.K. Rowling', 616, 'Fantasy', 4.3, 'https://media.bloomsbury.com/rep/bj/9781408855683.jpeg'),
(13, 'Harry Potter and the Deathly Hallows', 'J.K. Rowling', 619, 'Fantasy', 4.7, 'https://images-na.ssl-images-amazon.com/images/I/51ALWqnWjkL._SX344_BO1,204,203,200_.jpg'),
(14, 'IT', 'Stephen King', 1166, 'Horror', 4.2, 'https://images-na.ssl-images-amazon.com/images/I/51Z-TNaQV%2BL._SX324_BO1,204,203,200_.jpg'),
(15, 'Rosemary\'s Baby', 'Ira Levin', 229, 'Horror', 4, 'https://images-na.ssl-images-amazon.com/images/I/511-6Y0WrlL._SX328_BO1,204,203,200_.jpg'),
(16, 'Psycho', 'Robert Bloch', 185, 'Horror', 4.4, 'https://images-na.ssl-images-amazon.com/images/I/51SCLTqNjZL._SX324_BO1,204,203,200_.jpg'),
(17, '1984', 'George Orwell', 328, 'Science', 4.2, 'https://images-na.ssl-images-amazon.com/images/I/514CVwOrybL._SX333_BO1,204,203,200_.jpg'),
(18, 'Do Androids Dream of Electric Sheep?', 'Philip K. Dick', 244, 'Science', 4, 'https://images.gr-assets.com/books/1519481930l/7082.jpg'),
(19, 'Dune', 'Frank Herbert', 604, 'Science', 4.2, 'https://cdn.waterstones.com/override/v1/large/9780/3409/9780340960196.jpg'),
(20, 'Jane Eyre', 'Charlotte Brontë', 507, 'Drama', 4.1, 'https://images-na.ssl-images-amazon.com/images/I/41Nf%2ByyQq5L._SX297_BO1,204,203,200_.jpg'),
(21, 'Wuthering Heights', 'Emily Brontë', 464, 'Drama', 3.8, 'https://images-na.ssl-images-amazon.com/images/I/51cDFXzDAzL._SX300_BO1,204,203,200_.jpg'),
(22, 'Pride and Prejudice', 'Jane Austen', 279, 'Drama', 4.2, 'https://images.penguinrandomhouse.com/cover/9781415929216'),
(23, 'Me Before You', 'Jojo Moyes', 369, 'Romance', 4.2, 'https://images.gr-assets.com/books/1357108762l/15507958.jpg'),
(24, 'The Notebook', 'Nicholas Sparks', 214, 'Romance', 4.6, 'http://nicholassparks.com/wp-content/uploads/1996/07/201612-notebook.jpg'),
(49, 'A Song of Ice and Fire', 'George R.R. Martin', 848, 'Fantasy', 4.45, 'https://www.booktopia.com.au/http_coversbooktopiacomau/big/9780006479888/a-game-of-thrones.jpg'),
(56, 'A Clash of Kings', 'George R.R. Martin', 761, 'Fantasy', 4.41, 'https://images-na.ssl-images-amazon.com/images/I/51toTzgHGXL._SX324_BO1,204,203,200_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `readlist`
--

CREATE TABLE `readlist` (
  `readID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `bookID` int(11) DEFAULT NULL,
  `progress` float DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `readlist`
--

INSERT INTO `readlist` (`readID`, `userID`, `bookID`, `progress`, `rating`) VALUES
(81, 1, 3, 22.3214, NULL),
(82, 1, 1, 100, NULL),
(84, 1, 9, 83.1354, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `email`, `fullname`, `gender`, `picture`) VALUES
(1, 'jordan', 'password', 'jordfoz@gmail.com', 'Jordan Foster', 'M', 'https://www.wikihow.com/images/thumb/b/b8/Draw-a-Man-Step-16.jpg/aid2543912-v4-728px-Draw-a-Man-Step-16.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `readlist`
--
ALTER TABLE `readlist`
  ADD PRIMARY KEY (`readID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `bookID` (`bookID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `readlist`
--
ALTER TABLE `readlist`
  MODIFY `readID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `readlist`
--
ALTER TABLE `readlist`
  ADD CONSTRAINT `readlist_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `readlist_ibfk_2` FOREIGN KEY (`bookID`) REFERENCES `books` (`bookID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
