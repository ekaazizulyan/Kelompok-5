-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Mei 2015 pada 09.04
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `warkop2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_warkop`
--

CREATE TABLE IF NOT EXISTS `daftar_warkop` (
`id` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_warkop`
--

INSERT INTO `daftar_warkop` (`id`, `nama`, `alamat`, `deskripsi`, `lat`, `lng`, `username`) VALUES
(16, 'warkop 333', 'Rukoh', 'sjdaksdaksdaksd', 5.558966, 95.329498, 'kfarhan'),
(17, 'warkop 222', 'Beurawe', '', 5.555079, 95.330063, 'kfarhan'),
(18, 'warkop 444', 'Beurawe', '', 5.555976, 95.331047, 'kfarhan'),
(19, 'chek yuke', 'Lampineung', '', 5.554695, 95.330360, 'kfarhan'),
(20, 'solong mini', 'Lampineung', '', 5.556233, 95.330315, 'kfarhan'),
(21, 'sdfs', 'Ulee Kareng', 'sdfsdfasfaafafafa', 5.559223, 95.335899, 'kfarhan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `nama`, `password`) VALUES
('', '', '123456'),
('khalid12', 'khalid@gmail.com', 'asdasjdkjasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`uid` int(11) NOT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `upass` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `uemail` varchar(70) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(1, 'kfarhan', 'e10adc3949ba59abbe56e057f20f883e', 'khalid', 'k@gmail.com'),
(2, 'ads', '72b4364b2338d34866fd5cfc770286ed', 'khalid', 'sa@gmail.com'),
(4, 'ajs', '794761a765ceca759536a1bf39100142', 'yyyy', 'asasasasa@gmail.com'),
(5, 'tes2', '6e7906b7fb3f8e1c6366c0910050e595', 'tes', 'tes@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_warkop`
--
ALTER TABLE `daftar_warkop`
 ADD PRIMARY KEY (`id`), ADD KEY `daftar_warkop_ibfk_1` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `uname` (`uname`), ADD UNIQUE KEY `uemail` (`uemail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_warkop`
--
ALTER TABLE `daftar_warkop`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_warkop`
--
ALTER TABLE `daftar_warkop`
ADD CONSTRAINT `daftar_warkop_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`uname`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
