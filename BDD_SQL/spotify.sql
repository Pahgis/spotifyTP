-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jan 24, 2024 at 03:55 PM
-- Server version: 10.6.12-MariaDB-1:10.6.12+maria~ubu2004-log
-- PHP Version: 8.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spotify`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `name_album` varchar(255) NOT NULL,
  `name_artist` varchar(255) NOT NULL,
  `image_album` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name_album`, `name_artist`, `image_album`) VALUES
(3, 'Mutter', 'Rammstein', './pochette/mutter.jpg'),
(5, 'Legend', 'Bob marley', './pochette/bob.jpeg'),
(7, 'Gods & Nightmares', 'Hollow Knight', './pochette/hollow.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id` int(11) NOT NULL,
  `name_playslist` varchar(255) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id`, `name_playslist`, `id_users`) VALUES
(3, 'Random', 1);

-- --------------------------------------------------------

--
-- Table structure for table `titres`
--

CREATE TABLE `titres` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_album` int(11) NOT NULL,
  `id_playlist` int(11) DEFAULT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `titres`
--

INSERT INTO `titres` (`id`, `name`, `id_album`, `id_playlist`, `link`) VALUES
(8, 'Sonne', 3, 3, './mp3/sonne.mp3'),
(10, 'Amerika', 3, 3, './mp3/amerikaramm.mp3'),
(12, 'Du Hast', 3, 3, './mp3/duhastramm.mp3'),
(14, 'Ich will', 3, 3, './mp3/duhastramm.mp3'),
(16, 'One love', 5, 3, './mp3/onelove.mp3'),
(17, 'Don\'t Worry', 5, 3, './mp3/worry.mp3'),
(18, 'Buffalo soldiers', 5, 3, './mp3/buffalo.mp3'),
(22, 'Dream Battle', 7, 3, './mp3/dreambattle.mp3'),
(23, 'The Grimm Troupe', 7, 3, './mp3/thegrimmtroupe.mp3'),
(24, 'Nightmare King', 7, 3, './mp3/nightmaresking.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`) VALUES
(1, 'willy', '$2y$10$ayDsUoz5XU4VqHAeQ.2Pou8.7Le3Eruqy435pA0cXCwsuK.xwoRLe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `titres`
--
ALTER TABLE `titres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_album` (`id_album`),
  ADD KEY `id_playlist` (`id_playlist`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `titres`
--
ALTER TABLE `titres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Constraints for table `titres`
--
ALTER TABLE `titres`
  ADD CONSTRAINT `titres_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `albums` (`id`),
  ADD CONSTRAINT `titres_ibfk_2` FOREIGN KEY (`id_playlist`) REFERENCES `playlist` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
