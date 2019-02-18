-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 18 Feb 2019 pada 07.06
-- Versi Server: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lppm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`) VALUES
('admin', '5650da728f7b9abdba2877140f5daebf', 'Ahmad Emir Alfatah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `username`, `title`, `content`, `post_date`) VALUES
(2, 'admin', 'Third Winner Web Programming Competition', '<p>haiiii kamuuuuuuu</p>', '2019-02-16 17:40:39'),
(3, 'admin', 'First Winner App Development Competition', '<ol><li>halo</li><li>hai</li><li>hei</li></ol>', '2019-02-17 10:02:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_photo`
--

CREATE TABLE `event_photo` (
  `id_event_photo` int(11) NOT NULL,
  `id_event` int(11) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event_photo`
--

INSERT INTO `event_photo` (`id_event_photo`, `id_event`, `filename`) VALUES
(22, 3, '22.jpg'),
(23, 3, '23.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `username`, `title`, `content`, `post_date`, `sumber`) VALUES
(1, 'admin', 'tes1', 'tes kamuuuuuuu', '2019-02-16 17:40:54', 'test1'),
(2, 'admin', 'haloooooo', '<p>haii kamu apakanh kmu sehatt wkwkkw</p>', '2019-02-17 10:45:21', 'www.blabla.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman_files`
--

CREATE TABLE `pengumuman_files` (
  `id_pengumuman_files` int(11) NOT NULL,
  `id_pengumuman` int(11) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman_files`
--

INSERT INTO `pengumuman_files` (`id_pengumuman_files`, `id_pengumuman`, `caption`, `filename`) VALUES
(1, 2, 'license.txt', '1.txt'),
(2, 1, 'license.txt', '2.txt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `FK_reference_4` (`username`);

--
-- Indexes for table `event_photo`
--
ALTER TABLE `event_photo`
  ADD PRIMARY KEY (`id_event_photo`),
  ADD KEY `FK_reference_1` (`id_event`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`),
  ADD KEY `FK_reference_3` (`username`);

--
-- Indexes for table `pengumuman_files`
--
ALTER TABLE `pengumuman_files`
  ADD PRIMARY KEY (`id_pengumuman_files`),
  ADD KEY `FK_reference_2` (`id_pengumuman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `event_photo`
--
ALTER TABLE `event_photo`
  MODIFY `id_event_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengumuman_files`
--
ALTER TABLE `pengumuman_files`
  MODIFY `id_pengumuman_files` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `FK_reference_4` FOREIGN KEY (`username`) REFERENCES `admin` (`username`);

--
-- Ketidakleluasaan untuk tabel `event_photo`
--
ALTER TABLE `event_photo`
  ADD CONSTRAINT `FK_reference_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`);

--
-- Ketidakleluasaan untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `FK_reference_3` FOREIGN KEY (`username`) REFERENCES `admin` (`username`);

--
-- Ketidakleluasaan untuk tabel `pengumuman_files`
--
ALTER TABLE `pengumuman_files`
  ADD CONSTRAINT `FK_reference_2` FOREIGN KEY (`id_pengumuman`) REFERENCES `pengumuman` (`id_pengumuman`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
