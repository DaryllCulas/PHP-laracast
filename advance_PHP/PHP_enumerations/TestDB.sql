-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2024 at 12:13 AM
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
-- Database: `TestDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoice_id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`) VALUES
(1, 25, 109),
(2, 25, 113);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `username`) VALUES
('culasdaryll12@gmail.com', 'DaryllCulas'),
('foobar12@gmail.com', 'foobar'),
('foobar13@gmail.com', 'foobar'),
('foobareta16@gmail.com', 'foobar'),
('hesoyam23@gmail.com', 'hesoyamsanandreas'),
('jisasfries33@gmail.com', 'jisasfries'),
('mychecmicelromandsdf2399gmail.com', 'geraldlovekellyQuinn23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userEmail`, `full_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'jaqueline.zboncak@example.com', 'Prof. Luisa O\'Hara V', 1, '2014-08-09 01:33:46', NULL),
(2, 'milo.hettinger@example.net', 'Jazmin Rodriguez V', 0, '1992-05-11 14:34:15', NULL),
(3, 'dickinson.alena@example.net', 'Ms. Colleen Conroy Jr.', 1, '1987-03-24 14:06:46', NULL),
(4, 'yjones@example.com', 'Opal Carroll DDS', 1, '2023-10-27 12:48:43', NULL),
(5, 'shanon62@example.org', 'Hubert Fay', 1, '2000-08-11 20:21:23', NULL),
(6, 'janick.johnson@example.org', 'Prof. Maxime Herzog I', 0, '2000-02-26 20:42:49', NULL),
(7, 'lacy.hirthe@example.org', 'Desmond Turcotte V', 0, '1999-11-02 17:21:42', NULL),
(8, 'aparker@example.com', 'Creola Kessler', 0, '2003-10-17 03:19:16', NULL),
(9, 'jacky.lueilwitz@example.net', 'Rod O\'Hara MD', 0, '2018-12-12 14:20:42', NULL),
(10, 'omaggio@example.com', 'Ara Schneider', 0, '2005-11-29 04:23:01', NULL),
(11, 'ortiz.jenifer@example.com', 'Brittany Bergnaum', 0, '1977-04-18 13:12:53', NULL),
(12, 'austen77@example.com', 'Gage Yundt', 1, '1971-02-14 16:47:27', NULL),
(13, 'mhagenes@example.net', 'Dr. Brenden Upton DVM', 1, '2013-10-31 12:02:14', NULL),
(14, 'vwiza@example.org', 'Una Breitenberg V', 1, '2015-07-06 14:44:31', NULL),
(15, 'xsanford@example.com', 'Jamaal Donnelly', 0, '1977-07-10 16:15:03', NULL),
(16, 'stamm.leila@example.com', 'Mia Breitenberg', 1, '2018-06-10 21:10:18', NULL),
(17, 'bailey.oliver@example.org', 'Izabella Boyle', 1, '1996-04-09 00:44:40', NULL),
(18, 'gthiel@example.net', 'Felicita Cole', 0, '1978-12-31 17:36:33', NULL),
(19, 'sauer.catalina@example.com', 'Grant Shields', 0, '2019-07-21 12:28:23', NULL),
(20, 'dboehm@example.com', 'Antonia Kemmer', 1, '1993-08-01 14:25:58', NULL),
(21, 'kutch.peter@example.com', 'Mr. Vito Willms II', 0, '1993-06-20 16:16:30', NULL),
(22, 'macejkovic.evan@example.com', 'Lolita Rau II', 1, '1975-07-21 00:37:39', NULL),
(23, 'dibbert.arnold@example.org', 'Gerardo Batz II', 1, '2016-12-17 22:05:55', NULL),
(24, 'edd.abshire@example.net', 'Scottie Dare', 1, '2004-07-04 20:34:04', NULL),
(25, 'dejuan.kutch@example.org', 'Dr. Jonathan Hoeger DDS', 0, '2021-03-29 13:10:31', NULL),
(26, 'amani77@example.net', 'Kareem Ortiz', 0, '1986-05-16 00:07:38', NULL),
(27, 'soledad42@example.com', 'Benton Lakin', 1, '1972-12-24 06:13:05', NULL),
(28, 'cgoyette@example.org', 'Arielle Rohan', 1, '2009-07-21 04:18:17', NULL),
(29, 'claudine40@example.net', 'Dr. Erick Jenkins', 0, '2013-09-29 11:37:15', NULL),
(30, 'daphnee84@example.org', 'Hosea Torp', 0, '2015-12-22 00:39:12', NULL),
(31, 'lstroman@example.net', 'Dr. Jordy Wiza I', 0, '1986-05-08 13:50:25', NULL),
(32, 'titus12@example.org', 'Gilberto Goldner I', 0, '2021-11-16 16:42:18', NULL),
(33, 'eloy93@example.org', 'Alexis Hilll', 0, '1992-10-23 05:36:32', NULL),
(34, 'dion32@example.net', 'Jeff Turcotte V', 0, '2007-09-29 02:52:23', NULL),
(35, 'elehner@example.org', 'Emelia Trantow', 1, '1999-04-03 08:29:46', NULL),
(36, 'garrett.pouros@example.com', 'Maritza Schowalter', 1, '1979-10-24 20:32:53', NULL),
(37, 'brain11@example.net', 'Mr. Raleigh Runolfsdottir DDS', 0, '1994-02-13 00:32:33', NULL),
(38, 'myost@example.com', 'Alize Gerlach III', 0, '2018-05-08 12:49:03', NULL),
(39, 'tracey.hettinger@example.com', 'Clementina Satterfield MD', 0, '1996-11-07 13:12:38', NULL),
(40, 'isac54@example.com', 'Violet Zulauf', 0, '2021-03-26 17:06:01', NULL),
(41, 'lschmidt@example.net', 'Prof. Jaqueline Eichmann', 0, '2002-10-24 14:50:32', NULL),
(42, 'weldon.kessler@example.net', 'Dr. Hoyt McLaughlin Jr.', 1, '2008-08-20 11:19:29', NULL),
(43, 'hermiston.herminio@example.com', 'Prof. Madelynn Kunze', 1, '1977-01-29 04:21:39', NULL),
(44, 'walsh.quinn@example.com', 'Dr. Caitlyn Gerlach II', 0, '2023-06-19 14:00:09', NULL),
(45, 'kulas.daija@example.org', 'Helena Dare', 0, '1977-04-27 04:48:14', NULL),
(46, 'hessel.evangeline@example.com', 'Nestor Lebsack', 0, '2014-07-27 16:23:38', NULL),
(47, 'champlin.raquel@example.org', 'Prof. Virginie Howe II', 0, '1974-07-23 13:56:35', NULL),
(48, 'kautzer.amely@example.org', 'Drew Borer', 1, '1974-10-31 00:17:40', NULL),
(49, 'reed.zulauf@example.com', 'Helene Stanton', 0, '1972-11-02 05:10:16', NULL),
(50, 'tromp.ralph@example.com', 'Prof. Aubrey Hoeger Jr.', 0, '1990-05-08 05:42:59', NULL),
(51, 'harrison.ebert@example.com', 'Yadira Casper', 0, '1976-09-16 19:20:05', NULL),
(52, 'austen53@example.net', 'Mrs. Breana Stamm Jr.', 1, '1989-11-20 22:20:01', NULL),
(53, 'adrienne.schumm@example.net', 'Ms. Frida Oberbrunner', 0, '2002-05-28 13:11:56', NULL),
(54, 'qhyatt@example.org', 'Ms. Aylin Considine', 1, '1996-03-19 16:23:29', NULL),
(55, 'mante.lauriane@example.com', 'Dr. Erwin Brakus', 0, '2000-04-09 03:10:01', NULL),
(56, 'rogelio78@example.com', 'Prof. Scarlett Blick II', 0, '1975-11-28 23:44:41', NULL),
(57, 'hansen.yoshiko@example.com', 'Dallin Bergstrom', 0, '1992-06-02 06:45:01', NULL),
(58, 'wbrakus@example.net', 'Cale Torphy', 1, '1996-10-04 03:49:56', NULL),
(59, 'juliet60@example.com', 'Jaleel Bernhard', 0, '1994-11-13 05:35:12', NULL),
(60, 'xdare@example.com', 'Jules Bahringer', 1, '2005-08-04 00:37:21', NULL),
(61, 'sjast@example.net', 'Oren Breitenberg', 1, '2006-03-09 21:20:20', NULL),
(62, 'abbott.eugenia@example.org', 'Damaris Marquardt', 1, '1995-12-22 22:58:27', NULL),
(63, 'lorena81@example.net', 'Greyson Lang', 0, '1971-01-06 10:59:03', NULL),
(64, 'heller.winnifred@example.net', 'Rasheed Shields', 1, '1989-06-23 02:41:13', NULL),
(65, 'bednar.rosetta@example.org', 'Karley Roob', 1, '2002-02-18 03:17:52', NULL),
(66, 'ckoelpin@example.com', 'Dr. Gene Morar', 1, '1973-01-13 19:31:56', NULL),
(67, 'emilia97@example.com', 'Prof. Eladio Schaden DVM', 0, '2016-10-22 09:29:23', NULL),
(68, 'kristopher85@example.com', 'Emiliano Flatley', 1, '1987-05-01 01:04:30', NULL),
(69, 'elias.feil@example.net', 'Frankie Leuschke', 0, '1980-04-20 01:27:20', NULL),
(70, 'kovacek.evelyn@example.com', 'Adriana Weber', 0, '2000-08-19 21:50:10', NULL),
(71, 'thad.ledner@example.com', 'Mrs. Berniece Mayer DDS', 0, '2015-02-13 20:47:49', NULL),
(72, 'julio39@example.net', 'Gardner Kreiger', 1, '1984-06-28 06:43:23', NULL),
(73, 'eudora48@example.net', 'Meggie Franecki', 0, '1970-01-25 10:48:01', NULL),
(74, 'rowe.audie@example.org', 'Rico Gutkowski', 1, '2016-11-21 22:45:50', NULL),
(75, 'jamarcus.stoltenberg@example.com', 'Silas Brown', 1, '1976-05-07 08:25:07', NULL),
(76, 'mayer.eliza@example.com', 'Keeley Toy', 0, '2013-06-23 23:17:35', NULL),
(77, 'fadel.eva@example.net', 'Prof. Madilyn Cormier Jr.', 0, '1991-04-01 19:23:19', NULL),
(78, 'olson.mariane@example.org', 'Mr. Norris Watsica', 1, '1973-12-02 12:15:31', NULL),
(79, 'dorris75@example.net', 'Ricky Cormier', 0, '1974-05-26 00:50:04', NULL),
(80, 'baumbach.hope@example.net', 'Daron Wilkinson', 0, '2009-01-06 01:19:47', NULL),
(81, 'kuvalis.jacinto@example.com', 'Nelle Lockman', 0, '1981-10-24 13:02:20', NULL),
(82, 'xkovacek@example.net', 'Vickie Stracke DVM', 1, '2005-09-24 05:21:53', NULL),
(83, 'jedidiah.yundt@example.com', 'Mrs. Meaghan Ondricka PhD', 0, '2012-01-03 13:15:52', NULL),
(84, 'hzemlak@example.com', 'Osbaldo O\'Hara', 0, '1993-09-12 14:56:35', NULL),
(85, 'natasha.jerde@example.net', 'Kallie Wisoky Jr.', 0, '1978-04-24 11:48:45', NULL),
(86, 'isabella.erdman@example.com', 'Lavonne Wolff', 1, '2010-02-21 22:19:08', NULL),
(87, 'hannah34@example.org', 'Ms. Liliana Marquardt', 1, '2011-08-13 09:36:25', NULL),
(88, 'preston.farrell@example.net', 'Jocelyn Heidenreich', 1, '2002-12-21 05:51:48', NULL),
(89, 'willie27@example.org', 'Scotty Cole', 1, '1999-11-07 08:01:32', NULL),
(90, 'maximus39@example.net', 'Mr. Henry Lynch PhD', 0, '2007-09-30 22:50:47', NULL),
(91, 'kitty.becker@example.org', 'Prof. Nestor Stanton', 0, '1974-04-20 08:56:00', NULL),
(92, 'ratke.zoie@example.net', 'Cole Maggio', 1, '1995-01-14 10:25:41', NULL),
(93, 'friedrich77@example.com', 'Mrs. Mertie Nicolas IV', 0, '1981-03-03 11:11:25', NULL),
(94, 'ethelyn.boyer@example.org', 'Isabella Goodwin', 1, '1997-08-18 09:21:48', NULL),
(95, 'obrown@example.net', 'Mrs. Lori Marvin III', 1, '1974-07-18 07:39:22', NULL),
(96, 'dickinson.kathryn@example.com', 'Elta Lynch II', 1, '2015-08-03 11:31:34', NULL),
(97, 'rherman@example.org', 'Rasheed Greenholt', 0, '1998-03-11 21:37:23', NULL),
(98, 'annalise73@example.net', 'Kali Bernhard', 1, '2018-06-01 18:37:48', NULL),
(99, 'maeve.hauck@example.com', 'Justus Borer', 1, '2014-09-19 09:48:00', NULL),
(100, 'lindsay.huel@example.org', 'Nicklaus Bartell', 1, '2008-02-29 13:19:56', NULL),
(101, 'johnnysins23@gmail.com', 'Johnny sins', 1, '2021-07-11 12:00:00', NULL),
(102, 'johnnysins233@gmail.com', 'Johnny sin', 1, '2021-07-11 12:00:00', NULL),
(103, 'vicfuentes12@gmail.com', 'Vic fuentes', 1, '2021-07-11 12:00:00', NULL),
(104, 'Gerardway2@gmail.com', 'Gerard way', 1, '2021-07-11 12:00:00', '2021-07-11 12:00:00'),
(106, 'Gerardway3@gmail.com', 'Gerard way III', 1, '2021-07-11 12:00:00', '2021-07-11 12:00:00'),
(107, 'hard away4@gmail.com', 'hard away III', 1, '2021-07-11 12:00:00', '2021-07-11 12:00:00'),
(109, 'maydayParade25@gmail.com', 'Derek Sanders', 1, '2024-06-21 05:37:26', NULL),
(113, 'maydayParade27@gmail.com', 'Derek Sanders', 1, '2024-06-21 05:41:36', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userEmail` (`userEmail`),
  ADD KEY `is_active` (`is_active`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
