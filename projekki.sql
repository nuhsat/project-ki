-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 02:58 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekki`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_projek` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi_post` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`) VALUES
(1, 'velia', 'velia_aime11', 'veliaaime@gmail.com', '$2y$10$4h.6sj03mHTFwDrCSPck/uGWGpEZImfv2QiwECrErXQ'),
(2, 'velia hehe', 'veliadhe', 'velia_aime11@apps.ipb.ac.id', '$2y$10$vsA2wHw.jUADpEodFnEdaet/a294RGxu/2ajnKCYK8u'),
(3, 'velia hehe', 'veliadhehe', 'velia_aime11@apps.ipb.ac.id', '$2y$10$6lGpqv3VeGJXHU1kvJVWz.6V1pI2cX5szVbJZXdK6Dx'),
(4, 'heheh', 'hehe', 'heheh@gmail.com', '$2y$10$v2n7.zRZuXf2JQ3mXjeXme/oTPz0E1vg5OYsHBTTxH1'),
(5, 'ƒØ’@dD78œ`¬û', 'QtELšÕ1ø-wªWOnÓ', 'ã»ÜªÒ·Hì©Êm…EÌ.8¨TY¶JŸüí’\Z©°\n', 'Lõ|sdóÍí—q×Ýÿ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_projek`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_projek` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
