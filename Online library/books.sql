-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2020 at 10:27 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

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


CREATE TABLE `books`(
`id` int(11) NOT NULL, 
`title` text NOT NULL, 
`authors` text NOT NULL, 
`pubyear` text NOT NULL, 
`description` text NOT NULL, 
`language` text NOT NULL, 
`isbn` text NOT NULL,
`reviews` text NOT NULL,
`bestseller` text NOT NULL,
`coverphoto` text NOT NULL, 
`category` text NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `authors`, `pubyear`, `description`, `language`,`isbn`,`reviews`,`bestseller`,`coverphoto`,`category`) VALUES
 
(1, 'The Bell Jar', 'Sylvia Plath', '1963', 'The Bell Jar is the only novel written by the American writer and poet Sylvia Plath. ', 'English', '22052102', '390', '3', 'http://localhost:8080/trial/img/belljar.jpg','psychological fiction'),

(2, 'A little life', 'Hanya Yanagihara', '2015', 'Lengthy and tackling difficult subject matter, it garnered critical acclaim and became a best seller. ', 'English', '22052103', '300', '2', 'http://localhost:8080/trial/img/littlelife.jpg','literary fiction'),

(3, 'My year of Rest and Relaxation', 'Ottessa Moshfegh', '2018', 'Moshfeghs second novel follows an unnamed protagonist as she gradually escalates her use of prescription medications in an attempt to sleep for an entire year.', 'English', '22052104', '500', '1', 'http://localhost:8080/trial/img/yearofrestandrelaxation.jpg','psychological fiction'),

(4, 'The 5AM Club', 'Robin Sharma', '2018', 'Part manifesto for mastery, part playbook for genius-grade productivity and part companion for a life lived beautifully, the 5 am club is a work that will transform your life.', 'English', '22052105', '330', '7', 'http://localhost:8080/trial/img/yearofrestandrelaxation.jpg','Self help'),

(5, 'Who will cry when you die?', 'Robin Sharma', '1999', 'The book offers advice on how to live with purpose, passion, and prosperity. ', 'English', '22052106', '230', '6', 'http://localhost:8080/trial/img/whowillcry.jpg','Self help');



--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
