-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 04:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muchhad`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_info`
--

CREATE TABLE `main_info` (
  `sr_no` int(20) NOT NULL,
  `song_title` varchar(200) NOT NULL,
  `album_name` varchar(200) NOT NULL,
  `singer_name` varchar(200) NOT NULL,
  `lyrics` varchar(200) NOT NULL,
  `music` varchar(200) NOT NULL,
  `label` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `released` date NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `cover_pic` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL,
  `audio` varchar(200) NOT NULL,
  `song_type` int(10) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 1,
  `create_modify` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_info`
--

INSERT INTO `main_info` (`sr_no`, `song_title`, `album_name`, `singer_name`, `lyrics`, `music`, `label`, `category`, `duration`, `released`, `file_path`, `cover_pic`, `video`, `audio`, `song_type`, `active`, `create_modify`) VALUES
(1, 'Song Title', 'Album Name', 'Singer Name', 'Lyrics', 'Music', 'Label', 'Category', '3:30', '2019-08-18', 'upload/haryanvi_songs/', 'client-image.jpg', 'Chammak Challo (Official Video) _ Navv Inder _ Pranjal Dahiya _ Simar Kaur _ New Punjabi Song.mp4', 'Chammak Challo Mp3 Song Navv Inder-(PagalWorld.uk).mp3', 1, 1, '2022-09-11 04:41:13'),
(2, 'Song Title1', 'Album Name1', 'Singer Name1', 'Lyrics 1', 'Music 1', 'Label 1', 'Category 1', '3:31', '2019-08-19', 'upload/haryanvi_ragini/', 'client-bg.png', 'Chammak Challo (Official Video) _ Navv Inder _  Pranjal Dahiya _ Simar Kaur _ New Punjabi Song.mp4', '18 Lakh Ka Mp3 Song Raj Mawar-(PagalWorld.uk).mp3', 2, 1, '2022-09-11 04:43:43'),
(3, 'ASLA', 'ASLA', 'Pranjal Dahiya ,Vishvajeet Choudhary ,Ashu Twinkle', '..........', '.........', '......................', 'New Haryanvi Songs 2022', 'Duration: 02:47 Min', '0000-00-00', 'upload/haryanvi_songs/', 'thumb_6308b1cc7a00c.jpg', 'ASLA (Official Video) - Pranjal Dahiya - Vishvajeet Choudhary - New Haryanvi Songs Haryanavi 2022.mp4', 'ASLA (Official Video) - Pranjal Dahiya - Vishvajeet Choudhary - New Haryanvi Songs Haryanavi 2022.mp3', 1, 1, '2022-09-12 07:48:58'),
(4, 'ASLA', 'ASLA', 'Pranjal Dahiya ,Vishvajeet Choudhary ,Ashu Twinkle', '..........', '.........', '......................', 'New Haryanvi Songs 2022', 'Duration: 02:47 Min', '0000-00-00', 'upload/haryanvi_songs/', 'thumb_6308b1cc7a00c.jpg', 'ASLA (Official Video) - Pranjal Dahiya - Vishvajeet Choudhary - New Haryanvi Songs Haryanavi 2022.mp4', 'ASLA (Official Video) - Pranjal Dahiya - Vishvajeet Choudhary - New Haryanvi Songs Haryanavi 2022.mp3', 1, 1, '2022-09-12 07:49:13'),
(5, '295', '295 sidhu moosewala', 'sidhu moosewala', 'sidhu moosewala', 'The kid', 'Moosetape', 'punjabi song', '3:12', '0000-00-00', 'upload/punjabi_songs/', 'download.jpg', '295 (Official Audio) - Sidhu Moose Wala - The Kidd - Moosetape.mp4', '295 (Official Audio) - Sidhu Moose Wala - The Kidd - Moosetape.mp3', 3, 1, '2022-09-12 07:56:05'),
(6, '295', '295 sidhu moosewala', 'sidhu moosewala', 'sidhu moosewala', 'The kid', 'Moosetape', 'punjabi song', '3:12', '0000-00-00', 'upload/punjabi_songs/', 'download.jpg', '295 (Official Audio) - Sidhu Moose Wala - The Kidd - Moosetape.mp4', '295 (Official Audio) - Sidhu Moose Wala - The Kidd - Moosetape.mp3', 3, 1, '2022-09-12 08:26:36'),
(7, '295', '295 sidhu moosewala', 'sidhu moosewala', 'sidhu moosewala', 'The kid', 'Moosetape', 'punjabi song', '3:12', '0000-00-00', 'upload/punjabi_songs/', 'download.jpg', '295 (Official Audio) - Sidhu Moose Wala - The Kidd - Moosetape.mp4', '295 (Official Audio) - Sidhu Moose Wala - The Kidd - Moosetape.mp3', 3, 1, '2022-09-12 08:26:36'),
(8, '295', '295 sidhu moosewala', 'sidhu moosewala', 'sidhu moosewala', 'The kid', 'Moosetape', 'punjabi song', '3:12', '0000-00-00', 'upload/punjabi_songs/', 'download.jpg', '295 (Official Audio) - Sidhu Moose Wala - The Kidd - Moosetape.mp4', '295 (Official Audio) - Sidhu Moose Wala - The Kidd - Moosetape.mp3', 3, 1, '2022-09-12 08:26:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_info`
--
ALTER TABLE `main_info`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_info`
--
ALTER TABLE `main_info`
  MODIFY `sr_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
