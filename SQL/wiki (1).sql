-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 11, 2024 at 10:13 AM
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
-- Database: `wiki`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `nom_cat` varchar(40) NOT NULL,
  `cat_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`nom_cat`, `cat_date`) VALUES
('javascript', '2024-01-11 19:30:08'),
('programing', '2023-10-20 00:00:01'),
('web', '2024-01-12 19:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `nom_tag` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `email` varchar(60) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `pswd` varchar(50) NOT NULL,
  `role` enum('admin','auteur') NOT NULL DEFAULT 'auteur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`email`, `nom`, `pswd`, `role`) VALUES
('1@test.com', '1', '$2y$10$OWmdtcD/WRdT6LfLwwBVSeKVad1Q7H1jV2HJf64h9Yp', 'auteur'),
('2@test.com', '2', '2', 'admin'),
('admin2@test.com', '', '$2y$10$k1af8psccjbDLk0kN48tj.0Cv8KGSbZmhC.XiunjIXR', 'admin'),
('admin3@test.com', 'wail css', '$2y$10$3faO09/CZPYmArEt2Cgk2ecPnh4F3Pg8C2VW91unXMC', 'auteur'),
('Admin@test.com', 'google', '$2y$10$SnMBY.9WMA/SVT5Ye8LEVeWKwVuH0Pz3a12ct.mwFSe', 'admin'),
('conuwiqyc@mailinator.com', 'Serina Silva', '$2y$10$hwZ9x7YtW2v.ylPg54/K5Oh6orp00RXsIT2V6nTbB6p', 'auteur'),
('gyqo@mailinator.com', '', '$2y$10$kApXTimK9aPn.6W3gZlvkuPpGlj3AwQzeuhATivxikU', 'auteur'),
('imad', 'imadss', 'hhhhhhh', 'auteur'),
('imad@imad.com', 'imads', '$2y$10$7dFuKbCYHTrxXIXHh6kZ6.0u7VuJobcW107I/TEs8Ty', 'auteur'),
('jabug@mailinator.com', 'Pa$$w0rd!', '$2y$10$nmBXKawlWefJiG4j.oYv4.1R3K2b7aa8tuQr5r.m92t', 'auteur'),
('jupodijylu@mailinator.com', 'Pa$$w0rd!', '$2y$10$j2PtI2KDS5U7BfxHh8lXReUDkSinDVjZZIjAKQ.p5EI', 'auteur'),
('kudobu@mailinator.com', 'Barrett Keith', '$2y$10$9hVEFasS1IRj6xO3JWC9l.pM.uhOcAzNS7ER6RNe5g2', 'auteur'),
('ldddogat@mailinator.com', 'Pa$$w0rd!', '$2y$10$DG7ZfQvojd3wfiP2Bop31.8yzvHwR34cViuhm2JvkGo', 'auteur'),
('lezumup@mailinator.com', 'Shelby Ortega', '$2y$10$e.97/Rw6ds4DugaaAMBZBOEzSHwpOe1DcpWqlL/zC/8', 'auteur'),
('libekunex@mailinator.com', '', '$2y$10$IrY/7IMqZPXCEHhiM0tvjeUwg9hCRBBo6df.hetPnC0', 'auteur'),
('mohmmkkkkedlaeh@gmail.com', 'jhjj', '$2y$10$q2C2FUYvhFyjLrrMoOmfvu9mbLaEbDmgg9UV4O0pyYR', 'auteur'),
('najumqejkrgtnsa@mailinator.com', 'Jael Mayosmjoietng', '$2y$10$yVEeJiFlDuzvX/KkA5L6YeE8tzZLWo4nQQJlVhNbIhL', 'auteur'),
('qaviw@mailinator.com', '', '$2y$10$lAc3yAPUmR/akkJsQBpVmey5hh.ejB8LRD.ko0I4foa', 'auteur'),
('teqybiki@mailinator.com', 'Mona Herring', '$2y$10$BAPMub0Q53Th.L2gsDU2a.IO.ved50B3w1QCEqM2Bqm', 'auteur'),
('user123@test.com', 'wail css', '$2y$10$YifB.IiezmAIB4DpvNLz8.69f/RpmSj.FoXwd.XrK9V', 'auteur'),
('user@test.com', '', '$2y$10$tY9OppOU4J3iaqR9btwkIuM.I3zFkht5FaUDoAu6P0f', 'auteur'),
('vehonemul@mailinator.com', 'Randall Stafford', '$2y$10$OtzqUBcYJtIXXHlGWRU//OOz0ttenvanBmxBQadIx3.', 'auteur'),
('wibatexuk@mailinator.com', '', '$2y$10$K4E3bm0fDJCvwc11AsKaf.ZpdL.g2f6EVuzilSU8mGi', 'auteur'),
('zusag@mailinator.com', '', '$2y$10$8j3A/VpKJB5mI1n.8ro0C.Az/eSBlazYQhmFGS/6yWw', 'auteur');

-- --------------------------------------------------------

--
-- Table structure for table `wiki`
--

CREATE TABLE `wiki` (
  `id_w` int(11) NOT NULL,
  `titre` varchar(40) NOT NULL,
  `contenu` text DEFAULT NULL,
  `wiki_date` datetime NOT NULL,
  `isArchive` tinyint(1) NOT NULL DEFAULT 0,
  `img` blob DEFAULT NULL,
  `fk_aut_email` varchar(60) DEFAULT NULL,
  `fk_cat` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wiki`
--

INSERT INTO `wiki` (`id_w`, `titre`, `contenu`, `wiki_date`, `isArchive`, `img`, `fk_aut_email`, `fk_cat`) VALUES
(3, 'Sample Title', 'Sample Content', '2024-01-10 00:00:00', 0, 0x73616d706c655f696d6167652e6a7067, 'admin2@test.com', 'programing'),
(4, 'web 0.3', 'Il y a eu le web 1.0, constitué de pages internet et d hyperliens, le web 2.0, ou web social. Aujourd hui, quelle évolution décrit le web 3.0 ', '2024-01-11 19:30:40', 0, 0x696d6167206973206e6f6e65, 'qaviw@mailinator.com', 'web'),
(5, 'javascript', 'Our JavaScript Tutorial is designed for beginners and professionals both. JavaScript is used to create client-side dynamic pages.\r\n\r\nJavaScript is an object-based scripting language which is lightweight and cross-platform.\r\n\r\nJavaScript is not a compiled language, but it is a translated language. The JavaScript Translator (embedded in the browser) is responsible for translating the JavaScript code for the web browser.', '2024-01-11 19:30:45', 0, 0x69736e7420696d6167, 'admin3@test.com', 'javascript');

-- --------------------------------------------------------

--
-- Table structure for table `wiki_tag`
--

CREATE TABLE `wiki_tag` (
  `fk_nom_tag` varchar(30) NOT NULL,
  `fk_id_w` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`nom_cat`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`nom_tag`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `wiki`
--
ALTER TABLE `wiki`
  ADD PRIMARY KEY (`id_w`),
  ADD KEY `fk_aut_email` (`fk_aut_email`),
  ADD KEY `fk_cat` (`fk_cat`);

--
-- Indexes for table `wiki_tag`
--
ALTER TABLE `wiki_tag`
  ADD PRIMARY KEY (`fk_nom_tag`,`fk_id_w`),
  ADD KEY `fk_id_w` (`fk_id_w`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wiki`
--
ALTER TABLE `wiki`
  MODIFY `id_w` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wiki`
--
ALTER TABLE `wiki`
  ADD CONSTRAINT `wiki_ibfk_1` FOREIGN KEY (`fk_aut_email`) REFERENCES `utilisateur` (`email`),
  ADD CONSTRAINT `wiki_ibfk_2` FOREIGN KEY (`fk_cat`) REFERENCES `categorie` (`nom_cat`);

--
-- Constraints for table `wiki_tag`
--
ALTER TABLE `wiki_tag`
  ADD CONSTRAINT `wiki_tag_ibfk_1` FOREIGN KEY (`fk_nom_tag`) REFERENCES `tag` (`nom_tag`) ON UPDATE CASCADE,
  ADD CONSTRAINT `wiki_tag_ibfk_2` FOREIGN KEY (`fk_id_w`) REFERENCES `wiki` (`id_w`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
