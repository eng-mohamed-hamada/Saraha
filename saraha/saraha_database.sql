-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 08:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saraha_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `themessages`
--

CREATE TABLE `themessages` (
  `id` int(10) NOT NULL,
  `receiver` varchar(100) CHARACTER SET utf8 NOT NULL,
  `message` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `themessages`
--

INSERT INTO `themessages` (`id`, `receiver`, `message`) VALUES
(1, 'mh222@gmail.com', 'welcome sir in saraha account'),
(2, 'bfjbgf@gmail.com', 'fruhue'),
(3, 'mh222@gmail.com', 'nk'),
(4, 'eee@gmail.com', 'ndgugitk'),
(5, 'fgbfg@gmail.com', 'jbjb'),
(6, '1234@gmail.com', 'rttr'),
(7, '1234@gmail.com', 'jnk'),
(8, '1234@gmail.com', 'لانتلا'),
(9, '1234@gmail.com', 'لانتلا'),
(10, '1234@gmail.com', 'welcome'),
(11, 'eee@gmail.com', 'jnknk'),
(12, 'mohamed_hamada@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 NOT NULL,
  `country` varchar(20) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `bdate` date NOT NULL,
  `saraha_email` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `gender`, `country`, `photo`, `bdate`, `saraha_email`) VALUES
(9, 'nnn', '1234@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'nnn', 'Male', 'Egypt', 'default.png', '1996-01-04', '1234@saraha.com'),
(2, 'abdo', 'bfjbgf@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'abdo', 'Male', 'Egypt', '2.png', '2018-02-02', 'bfjbgf@saraha.com'),
(4, 'vnfdkvdf', 'dffd@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'fdknkdf', 'Male', 'Egypt', 'default.png', '2018-02-06', 'dffd@saraha.com'),
(3, 'eslam', 'eee@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'ddd', 'Male', 'Egypt', '3.jpg', '2018-02-19', 'eee@saraha.com'),
(7, 'fbgf', 'fdd@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'fbfg', 'Male', 'Egypt', 'default.png', '1996-03-07', 'fdd@saraha.com'),
(8, 'dgbfb', 'fgbfg@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'fhbf', 'Male', 'Egypt', 'default.png', '0004-02-05', 'fgbfg@saraha.com'),
(6, 'nkfvdf', 'fjnbjfg@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'dfbdfb', 'Male', 'Egypt', 'default.png', '1996-07-01', 'fjnbjfg@saraha.com'),
(10, 'Mahmoudrabie', 'mahmoudabkareno12345@gmail.com', '4c69016cabc850a520801a65a2b9e113', 'Mahmoud  Rabie', 'ذكر', 'مصر', 'default.png', '1996-05-23', 'mahmoudabkareno12345@saraha.com'),
(1, 'mohamed hamada', 'mh222@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'mohamed', 'Male', 'Egypt', '1.PNG', '2018-02-17', 'mh222@saraha.com'),
(11, 'mohamed hamada', 'mohamed_hamada@gmail.com', '7b66e4718a7386529e7f713ae268d8fa', 'mohamed', 'Male', 'ُEgypt', '11.png', '1996-01-02', 'mohamed_hamada@saraha.com'),
(5, 'vnfdkvdf', 'vvvv@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'fdknkdf', 'Male', 'Egypt', 'default.png', '2018-02-06', 'vvvv@saraha.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `themessages`
--
ALTER TABLE `themessages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `receiver` (`receiver`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`,`saraha_email`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `saraha_email` (`saraha_email`),
  ADD UNIQUE KEY `saraha_email_2` (`saraha_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `themessages`
--
ALTER TABLE `themessages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
