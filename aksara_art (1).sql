-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 05:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aksara_art`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL,
  `status` tinytext NOT NULL,
  `bukti_transaksi` varchar(200) NOT NULL,
  `kode_unik` int(5) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `jasa_pengiriman` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `id_user`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`, `status`, `bukti_transaksi`, `kode_unik`, `no_telepon`, `jasa_pengiriman`, `bank`, `qty`) VALUES
(3, 2, 'Muhammad Alif Ramadhan', 'kelapa dua', '2021-08-24 22:43:06', '2021-08-26 22:43:06', '1', 'bukti_tf1.jpg', 145, '085155159062', 'JNE', 'BCA - 8691352838 A/N Muhammad Alif Rhamadhan', 0),
(4, 2, 'Ahmad Zaoharudin', 'Pondok Ciliwung, Kelapa Dua, Depok', '2021-08-26 11:43:33', '2021-08-28 11:43:33', '1', 'bukti_tf2.jpg', 795, '085778291643', 'TIKI', 'Mandiri - 752767328866 A/N Muhammad Alif Rhamadhan', 0),
(7, 2, 'fahmi ', 'depok', '2023-01-21 22:39:18', '2023-01-23 22:39:18', '1', 'Screenshot_20230123_163514.png', 251, '081234567891', 'JNE', 'Mandiri - 752767328866 A/N Mohammad Hasan Nurdin', 0),
(8, 2, 'fahmi ', 'depok', '2023-01-21 22:47:18', '2023-01-23 22:47:18', '', '', 578, '081234567891', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(9, 2, 'fahmi ', 'depok', '2023-01-24 13:24:12', '2023-01-26 13:24:12', '1', '4e4e4-logobasarnas.png', 312, '081234567891', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(10, 2, 'muhammad syafiq', 'fatmawati', '2023-02-04 00:15:03', '2023-02-06 00:15:03', '1', '4e4e4-logobasarnas1.png', 569, '089767854567', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(11, 2, 'muhammad syafiq', 'fatmawati', '2023-02-05 22:53:37', '2023-02-07 22:53:37', '', '', 675, '089767854567', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(12, 2, 'muhammad syafiq', 'fatmawati', '2023-02-05 23:46:00', '2023-02-07 23:46:00', '', '', 590, '089767854567', 'GRAB EXPRESS', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(13, 2, 'muhammad syafiq', 'fatmawati', '2023-02-06 14:38:01', '2023-02-08 14:38:01', '', '', 182, '089767854567', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(19, 2, 'fadi', 'jldnnjjdn', '2023-02-06 17:26:54', '2023-02-08 17:26:54', '1', 'Dua_tokoh_kemerdekaan5.png', 695, '08977676', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(20, 2, 'tfhft', 'rdyd', '2023-02-06 17:45:22', '2023-02-08 17:45:22', '1', 'Dua_tokoh_kemerdekaan6.png', 571, '089767854567', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(21, 2, 'fahmi ', 'puri lebak', '2023-02-06 18:57:23', '2023-02-08 18:57:23', '1', '4e4e4-logobasarnas2.png', 371, '089765431234', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(22, 2, 'Novrina', 'depok', '2023-02-06 18:59:55', '2023-02-08 18:59:55', '1', '4e4e4-logobasarnas3.png', 672, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(23, 2, 'fahmi ', 'depok', '2023-02-06 19:02:39', '2023-02-08 19:02:39', '', '', 79, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(24, 2, 'fahmi ', 'puri lebak', '2023-02-06 20:05:54', '2023-02-08 20:05:54', '1', '4e4e4-logobasarnas4.png', 491, '0897665344567', 'GO-SEND', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(25, 2, 'fahmi ', 'depok', '2023-02-06 20:38:05', '2023-02-08 20:38:05', '', '', 479, '089765431234', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(26, 2, 'cendi', 'depok', '2023-02-06 21:08:35', '2023-02-08 21:08:35', '1', '4e4e4-logobasarnas5.png', 654, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(27, 2, 'f', 'afeeed', '2023-02-06 21:30:03', '2023-02-08 21:30:03', '', '', 915, '089767854567', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(28, 2, 'f', 'fatmawati', '2023-02-06 23:56:38', '2023-02-08 23:56:38', '', '', 973, '1234', 'GO-SEND', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(29, 2, 'muhammad syafiq', 'afeeed', '2023-02-07 00:13:03', '2023-02-09 00:13:03', '', '', 342, '089767854567', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(30, 2, 'fahmi ', 'depok', '2023-02-07 23:40:37', '2023-02-09 23:40:37', '1', '4e4e4-logobasarnas6.png', 263, '0815864279', 'GO-SEND', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(31, 2, 'f', 'fatmawati', '2023-02-08 03:31:52', '2023-02-10 03:31:52', '', '', 260, '09797979', 'GO-SEND', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(32, 2, 'muhammad syafiq', 'fatmawati', '2023-02-08 05:13:04', '2023-02-10 05:13:04', '', '', 27, '', 'GO-SEND', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(33, 2, 'muhammad syafiq', 'fatmawati', '2023-02-08 05:19:01', '2023-02-10 05:19:01', '', '', 85, '1', 'Pilih Jasa Pengiriman', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(34, 2, 'muhammad syafiq', 'afeeed', '2023-02-08 05:26:43', '2023-02-10 05:26:43', '', '', 502, '09797979', 'GO-SEND', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(35, 2, 'muhammad syafiq', 'fatmawati', '2023-02-16 22:56:55', '2023-02-18 22:56:55', '', '', 389, '089767854567', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(36, 2, 'f', 'fatmawati', '2023-04-16 15:07:46', '2023-04-18 15:07:46', '', '', 613, '09797979', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(37, 2, 'muhammad syafiq', 'fatmawati', '2023-05-06 17:19:15', '2023-05-08 17:19:15', '', '', 69, '09797979', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(38, 2, 'f', 'fatmawati', '2023-05-06 17:39:18', '2023-05-08 17:39:18', '', '', 247, '1234', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(39, 2, 'jhh', 'gvygv', '2023-06-13 22:12:25', '2023-06-15 22:12:25', '', '', 809, 'h6t76yg', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(40, 2, 'jhh', 'gvygv', '2023-06-13 22:19:05', '2023-06-15 22:19:05', '', '', 681, '', 'GRAB EXPRESS', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(41, 2, 'p', 'p', '2023-06-13 22:24:35', '2023-06-15 22:24:35', '', '', 986, '', 'GRAB EXPRESS', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(42, 2, 'p', 'p', '2023-06-13 22:29:51', '2023-06-15 22:29:51', '', '', 903, '', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(43, 2, 'p', 'p', '2023-06-13 22:34:01', '2023-06-15 22:34:01', '', '', 386, '', 'GO-SEND', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(44, 14, 'p', 'p', '2023-06-13 22:50:09', '2023-06-15 22:50:09', '1', '297198-wallpaper-hd-1920x1080-x-for-full-hd.jpg', 973, '', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(45, 7, 'p', 'p', '2023-06-13 22:52:17', '2023-06-15 22:52:17', '1', '52419162.JPG', 810, 'p', 'TIKI', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(46, 14, 'cendi', 'p', '2023-06-13 23:05:02', '2023-06-15 23:05:02', '1', '297198-wallpaper-hd-1920x1080-x-for-full-hd1.jpg', 250, '', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(47, 7, 'fahmi', 'p', '2023-06-13 23:06:50', '2023-06-15 23:06:50', '1', '524191621.JPG', 185, '', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(48, 7, 'cendi', 'depok', '2023-07-16 23:11:56', '2023-07-18 23:11:56', '1', 'WhatsApp_Image_2023-07-09_at_20_55_08.jpeg', 417, '08161312404', 'TIKI', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(49, 7, 'fahmi ', 'puri lebak', '2023-08-01 13:54:58', '2023-08-03 13:54:58', '1', 'fc.png', 91, '081234567891', 'TIKI', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(50, 7, 'fahmi ', 'depok', '2023-08-04 21:53:18', '2023-08-06 21:53:18', '', '', 627, '43434343434', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(51, 7, 'fahmi ', 'depok', '2023-08-05 03:47:07', '2023-08-07 03:47:07', '', '', 186, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(52, 7, 'Novrina', 'puri lebak', '2023-08-05 03:50:31', '2023-08-07 03:50:31', '', '', 194, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(53, 7, 'Novrina', 'puri lebak', '2023-08-05 03:50:45', '2023-08-07 03:50:45', '', '', 471, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(54, 7, 'Novrina', 'puri lebak', '2023-08-05 03:51:02', '2023-08-07 03:51:02', '', '', 140, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(55, 7, 'fahmi ', 'depok', '2023-08-05 03:51:29', '2023-08-07 03:51:29', '', '', 962, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(56, 7, 'Novrina', 'depok', '2023-08-05 03:53:18', '2023-08-07 03:53:18', '', '', 239, '08161312404', 'TIKI', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(57, 7, 'fahmi ', 'depok', '2023-08-15 01:03:21', '2023-08-17 01:03:21', '', '', 318, '08161312404', 'TIKI', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(58, 7, 'fahmi ', 'bogor', '2023-08-16 00:28:15', '2023-08-18 00:28:15', '', '', 825, '081234567891', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(59, 7, 'fahmi ', 'bogor', '2023-08-16 00:31:24', '2023-08-18 00:31:24', '', '', 562, '081234567891', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(60, 7, 'fahmi ', 'depok', '2023-08-16 00:48:28', '2023-08-18 00:48:28', '', '', 582, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(61, 7, 'fahmi ', 'depok', '2023-08-16 01:09:30', '2023-08-18 01:09:30', '', '', 278, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(62, 7, 'fahmi ', 'depok', '2023-08-16 01:19:14', '2023-08-18 01:19:14', '', '', 291, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(63, 7, 'fahmi ', 'depok', '2023-08-16 01:19:57', '2023-08-18 01:19:57', '', '', 652, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(64, 7, 'fahmi ', 'depok', '2023-08-16 01:20:02', '2023-08-18 01:20:02', '', '', 820, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(65, 7, 'fahmi ', 'depok', '2023-08-16 01:20:20', '2023-08-18 01:20:20', '', '', 596, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(66, 7, 'fahmi ', 'depok', '2023-08-16 01:20:31', '2023-08-18 01:20:31', '', '', 124, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(67, 7, 'fahmi ', 'depok', '2023-08-16 01:20:52', '2023-08-18 01:20:52', '', '', 74, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(68, 7, 'fahmi ', 'depok', '2023-08-16 01:20:56', '2023-08-18 01:20:56', '', '', 794, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(69, 7, 'nanda', 'jambi', '2023-08-16 01:22:02', '2023-08-18 01:22:02', '1', 'Foto_ktp_(1).jpg', 987, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(70, 7, 'Novrina', 'depok', '2023-08-16 01:41:52', '2023-08-18 01:41:52', '', '', 591, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(71, 7, 'fahmi ', 'puri lebak', '2023-08-16 01:57:17', '2023-08-18 01:57:17', '', '', 861, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(72, 7, 'fahmi ', 'puri lebak', '2023-08-16 01:57:40', '2023-08-18 01:57:40', '', '', 645, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(73, 7, 'fahmi ', 'puri lebak', '2023-08-16 02:00:03', '2023-08-18 02:00:03', '', '', 160, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(74, 7, 'Novrina', 'depok', '2023-08-16 02:00:39', '2023-08-18 02:00:39', '', '', 129, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(75, 7, 'fahmi ', 'depok', '2023-08-16 02:14:22', '2023-08-18 02:14:22', '', '', 496, '081234567891', 'GO-SEND', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(76, 7, 'fahmi ', 'puri lebak', '2023-08-16 02:25:28', '2023-08-18 02:25:28', '', '', 19, '08161312404', 'TIKI', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(77, 7, 'fahmi ', 'puri lebak', '2023-08-16 02:26:25', '2023-08-18 02:26:25', '', '', 135, '08161312404', 'TIKI', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(78, 7, 'fahmi ', 'depok', '2023-08-16 02:27:08', '2023-08-18 02:27:08', '', '', 390, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(79, 7, 'fahmi ', 'depok', '2023-08-16 02:30:08', '2023-08-18 02:30:08', '', '', 367, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(80, 7, 'fahmi ', 'depok', '2023-08-16 02:37:49', '2023-08-18 02:37:49', '', '', 486, '08161312404', 'TIKI', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(81, 7, 'fahmi ', 'depok', '2023-08-16 14:44:49', '2023-08-18 14:44:49', '', '', 649, '08161312404', 'JNE', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(82, 7, 'cendi', 'depok', '2023-08-16 21:18:09', '2023-08-18 21:18:09', '', '', 1068189, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(83, 7, 'Novrina', 'depok', '2023-08-16 21:19:18', '2023-08-18 21:19:18', '', '', 1008150, '08161312404', 'tiki', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(84, 7, 'Novrina', 'depok', '2023-08-16 21:27:10', '2023-08-18 21:27:10', '', '', 8968, '08161312404', 'tiki', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(85, 7, 'Novrina', 'depok', '2023-08-16 21:29:24', '2023-08-18 21:29:24', '', '', 1009839, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(86, 7, 'fahmi ', 'depok', '2023-08-16 21:33:37', '2023-08-18 21:33:37', '', '', 103, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(87, 7, 'fahmi ', 'depok', '2023-08-16 21:34:59', '2023-08-18 21:34:59', '', '', 582, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(88, 7, 'fahmi ', 'puri lebak', '2023-08-16 21:36:27', '2023-08-18 21:36:27', '', '', 71, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(89, 7, 'fahmi ', 'puri lebak', '2023-08-16 21:36:47', '2023-08-18 21:36:47', '', '', 351, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(90, 7, 'fahmi ', 'puri lebak', '2023-08-16 21:38:52', '2023-08-18 21:38:52', '', '', 154, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(91, 7, 'fahmi ', 'depok', '2023-08-16 21:40:22', '2023-08-18 21:40:22', '', '', 379, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(92, 7, 'fahmi ', 'depok', '2023-08-16 21:41:58', '2023-08-18 21:41:58', '', '', 289, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(93, 7, 'Novrina', 'depok', '2023-08-16 21:42:55', '2023-08-18 21:42:55', '', '', 96, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(94, 7, 'Novrina', 'depok', '2023-08-16 21:43:17', '2023-08-18 21:43:17', '', '', 312, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(95, 7, 'Novrina', 'depok', '2023-08-16 21:45:06', '2023-08-18 21:45:06', '', '', 382, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(96, 7, 'fahmi ', 'depok', '2023-08-16 21:46:03', '2023-08-18 21:46:03', '', '', 59, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(97, 7, 'fahmi ', 'depok', '2023-08-16 21:51:52', '2023-08-18 21:51:52', '', '', 72, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(98, 7, 'fahmi ', 'depok', '2023-08-16 21:52:44', '2023-08-18 21:52:44', '', '', 249, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(99, 7, 'fahmi ', 'depok', '2023-08-16 21:55:36', '2023-08-18 21:55:36', '', '', 401, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0),
(100, 7, 'Novrina', 'depok', '2023-08-16 22:39:30', '2023-08-18 22:39:30', '1', 'fc1.png', 940, '08161312404', 'jne', 'BCA 1660788740 A/N Fahmi Khoerudin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_item`
--

CREATE TABLE `tb_item` (
  `id_brg` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_brg` varchar(150) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `lokasi` varchar(40) NOT NULL,
  `size` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_item`
--

INSERT INTO `tb_item` (`id_brg`, `id_user`, `nama_brg`, `keterangan`, `kategori`, `lokasi`, `size`, `harga`, `stock`, `gambar`) VALUES
(2, 11, 'Pure Bali', 'Lukisan yang menggambarkan Pure yang ada di Bali untuk Beribadah dan acara-acara adat yang ada di Bali', 'Lukisan', 'Galeri salihara, Jakarta Selatan', '1mx2m', 8000000, 1, 'Pure Bali.jpg'),
(4, 0, 'Pablo Picasso', 'Lukisan orang abstrak yang memiliki banyak artinya lukisan ini termasuk lukisan terkenal yang digambar oleh Pablo Ruiz Picasso dengan menggunakan teknik kubisme dan dikenal sebagai pelukis revolusioner pada abad ke-20 dia terlahir di Málaga, Spanyol', 'Lukisan', 'Hadiprana Gallery, Jakarta Selatan', '1mx50cm', 10000000, 1, 'Pablo Picasso.jpg'),
(110, 0, 'Dua tokoh kunci kemerdekaan Indonesia', 'Momen-momen penting bersejarah seringkali direkam secara visual dengan menarik oleh seniman Yuli Kodo. Sukarno dan Sri Sultan Hamengkubuworo IX adalah dua tokoh kunci kemerdekaan Indonesia.', 'Lukisan', 'Hadiprana Gallery, Jakarta Selatan', '', 15000000, 1, 'Dua_tokoh_kemerdekaan.png'),
(111, 0, 'Dua tokoh kunci kemerdekaan Indonesia', 'hashjav', 'Lukisan', 'Hadiprana Gallery, Jakarta Selatan', '', 1000000, 1, '993545_7201.jpg'),
(112, 0, 'Lukisan Kartun', 'Ini adalah lukisan kartun ', 'Pilih Kategori', 'Pilih Lokasi', '', 0, 0, 'Lukisan3.jpeg'),
(113, 15, 'Lukisan Kartun', 'Lukisan ini adalah lukisan kartun dengan aktor donald bebek ', 'Lukisan', 'Jo and Do Gallery, Depok', '', 1000000, 1, 'Lukisan31.jpeg'),
(114, 0, 'contoh', 'Meja', 'Lukisan', 'Hadiprana Gallery, Jakarta Selatan', '', 10000, 0, 'fc_barang.png'),
(115, 11, 'Lukisan Animasi', 'Lukisan ini karya dari Mohammad Hasan Nurdin, Lukisan ini tentang lukisan abstrak', 'Lukisan', 'Galeri salihara, Jakarta Selatan', '', 700000, 1, 'Gill.jpg'),
(116, 11, 'Lukisan Karakter', 'Meja', 'Lukisan', 'Galeri salihara, Jakarta Selatan', '', 700000, 1, 'Foto_ktp.jpeg'),
(117, 15, 'abc', 'Lukisan ini karya dari Mohammad Hasan Nurdin, Lukisan ini tentang lukisan abstrak', 'Lukisan', 'Jo and Do Gallery, Depok', '', 1000000, 1, 'fc_barang1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(3, 3, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(4, 4, 4, 'Pablo Picasso', 1, 10000000, ''),
(5, 4, 101, 'kanvas', 1, 40000, ''),
(6, 4, 103, 'knife lukis ', 1, 200000, ''),
(7, 4, 104, 'acrylic tesla ', 1, 200000, ''),
(8, 5, 3, 'Motif Dayak', 1, 3000000, ''),
(9, 5, 2, 'Pure Bali', 1, 8000000, ''),
(10, 6, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(11, 7, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(12, 8, 104, 'acrylic tesla ', 1, 200000, ''),
(13, 8, 3, 'Motif Dayak', 1, 3000000, ''),
(14, 8, 101, 'kanvas', 1, 40000, ''),
(15, 9, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(16, 10, 101, 'kanvas', 4, 40000, ''),
(17, 11, 1, 'Ombak Tinggi ', 2, 5000000, ''),
(18, 12, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(19, 12, 2, 'Pure Bali', 1, 8000000, ''),
(20, 14, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(21, 15, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(22, 16, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(23, 17, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(24, 18, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(25, 19, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(26, 20, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(27, 21, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(28, 22, 110, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 15000000, ''),
(29, 23, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(30, 24, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(31, 25, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(32, 26, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(33, 27, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(34, 28, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(35, 28, 2, 'Pure Bali', 1, 8000000, ''),
(36, 29, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(37, 30, 2, 'Pure Bali', 1, 8000000, ''),
(38, 31, 4, 'Pablo Picasso', 1, 10000000, ''),
(39, 32, 1, 'Ombak Tinggi ', 1, 5000000, ''),
(40, 33, 2, 'Pure Bali', 1, 8000000, ''),
(41, 34, 4, 'Pablo Picasso', 1, 10000000, ''),
(42, 35, 111, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 1000000, ''),
(43, 36, 112, 'Lukisan Kartun', 1, 0, ''),
(44, 37, 2, 'Pure Bali', 1, 8000000, ''),
(45, 38, 111, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 1000000, ''),
(46, 39, 110, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 15000000, ''),
(47, 40, 2, 'Pure Bali', 1, 8000000, ''),
(48, 41, 2, 'Pure Bali', 1, 8000000, ''),
(49, 42, 4, 'Pablo Picasso', 1, 10000000, ''),
(50, 43, 4, 'Pablo Picasso', 1, 10000000, ''),
(51, 44, 4, 'Pablo Picasso', 1, 10000000, ''),
(52, 45, 2, 'Pure Bali', 1, 8000000, ''),
(53, 46, 2, 'Pure Bali', 1, 8000000, ''),
(54, 47, 2, 'Pure Bali', 1, 8000000, ''),
(55, 48, 112, 'Lukisan Kartun', 1, 0, ''),
(56, 49, 110, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 15000000, ''),
(57, 50, 115, 'Lukisan Animasi', 1, 700000, ''),
(58, 51, 110, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 15000000, ''),
(59, 52, 114, 'contoh', 1, 10000, ''),
(60, 55, 115, 'Lukisan Animasi', 1, 700000, ''),
(61, 56, 113, 'Lukisan Kartun', 1, 1000000, ''),
(62, 57, 111, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 1000000, ''),
(63, 57, 113, 'Lukisan Kartun', 1, 1000000, ''),
(64, 58, 110, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 15000000, ''),
(65, 60, 111, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 1000000, ''),
(66, 61, 2, 'Pure Bali', 1, 8000000, ''),
(67, 69, 110, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 15000000, ''),
(68, 70, 113, 'Lukisan Kartun', 1, 1000000, ''),
(69, 71, 111, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 1000000, ''),
(70, 73, 112, 'Lukisan Kartun', 1, 0, ''),
(71, 74, 110, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 15000000, ''),
(72, 75, 2, 'Pure Bali', 1, 8000000, ''),
(73, 76, 111, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 1000000, ''),
(74, 78, 113, 'Lukisan Kartun', 1, 1000000, ''),
(75, 79, 111, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 1000000, ''),
(76, 80, 4, 'Pablo Picasso', 1, 10000000, ''),
(77, 81, 114, 'contoh', 1, 10000, ''),
(78, 82, 113, 'Lukisan Kartun', 1, 1000000, ''),
(79, 83, 113, 'Lukisan Kartun', 1, 1000000, ''),
(80, 85, 111, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 1000000, ''),
(81, 86, 113, 'Lukisan Kartun', 1, 1000000, ''),
(82, 88, 115, 'Lukisan Animasi', 1, 700000, ''),
(83, 91, 111, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 1000000, ''),
(84, 93, 113, 'Lukisan Kartun', 1, 1000000, ''),
(85, 96, 111, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 1000000, ''),
(86, 98, 110, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 15000000, ''),
(87, 99, 111, 'Dua tokoh kunci kemerdekaan Indonesia', 1, 1000000, ''),
(88, 100, 114, 'contoh', 1, 10000, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_resi`
--

CREATE TABLE `tb_resi` (
  `id_resi` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `resi` varchar(30) NOT NULL,
  `tgl_resi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_resi`
--

INSERT INTO `tb_resi` (`id_resi`, `id_order`, `resi`, `tgl_resi`) VALUES
(1, 0, '127', '2021-08-26 05:00:37'),
(2, 0, '123456789', '2021-08-26 05:00:37'),
(3, 0, '13244', '2021-08-26 05:00:37'),
(4, 7, '126745', '2023-01-23 09:54:38'),
(5, 9, '126745', '2023-01-24 06:26:13'),
(6, 10, 'jne - 1234', '2023-02-03 17:18:29'),
(7, 14, 'jne - 1234', '2023-02-06 08:15:12'),
(8, 16, 'jne - 1234', '2023-02-06 09:18:57'),
(9, 21, 'JNE - 145243738', '2023-02-06 11:57:58'),
(10, 22, '126745', '2023-02-06 12:00:34'),
(11, 24, 'JNE - 145243738', '2023-02-06 13:06:41'),
(12, 26, '123', '2023-02-06 14:09:35'),
(13, 30, 'JNE - 145243738', '2023-02-07 16:41:34'),
(14, 47, 'JNE - 145243738', '2023-06-16 09:36:59'),
(15, 47, 'JNE - 145243738', '2023-06-16 09:38:08'),
(16, 3, 'JNE - 145243738', '2023-07-09 16:21:08'),
(17, 47, '676384909848756', '2023-07-09 16:23:04'),
(18, 47, 'JNE - 145243738', '2023-07-09 16:23:27'),
(19, 46, 'JNE - 145243738', '2023-07-09 16:23:53'),
(20, 48, 'JNE - 145243738', '2023-07-16 16:14:15'),
(21, 49, 'JNE - 145243738', '2023-08-01 06:56:29'),
(22, 49, 'JNE - 145243738', '2023-08-01 06:56:36'),
(23, 69, '3232', '2023-08-15 18:46:36'),
(24, 100, 'JNE - 145243738', '2023-08-16 15:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `role_id` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `alamat`, `no_telp`, `tgl_daftar`, `role_id`) VALUES
(3, 'Muhammad Alif Ramadhan', 'alif1', 'e277bd9c33d8bf9f928012508c75d22f', 'kelapa dua', '085155159062', '2021-08-24 16:34:41', 'member'),
(5, 'Ahmad Zaoharudin', 'zaohar_', 'c128ad528682e44160e49c7dceccc795', 'kelapa dua', '085778291643', '2021-08-26 06:29:18', ''),
(6, 'Nurlaila', 'laaell', 'b15b664ee8f7f2eb1e834b5afb363f0a', 'Rawa Buaya', '0895706230309', '2021-08-26 06:50:49', ''),
(7, 'fahmi ', 'fahmi123', '41851c2c39e9729d51870dc74e098950', 'depok', '081234567891', '2023-01-21 14:59:09', '2'),
(8, 'fahmi', 'fahmi12', '41851c2c39e9729d51870dc74e098950', 'kost puri lebak', '089648386651', '2023-01-21 00:00:00', '1'),
(10, 'gesit', 'gesit12', '553084c0d35bc9fa818d94340a7f477a', 'cipayung', '0897654478376', '2023-02-08 00:00:00', '3'),
(11, 'galeri', 'galeri12', '0abd488bba3534b19ebe846a464aa9c1', 'jaksel', '089648386651', '2023-02-05 00:00:00', '3'),
(12, 'Novrina', 'novrina', '51d521c7e96f852f61d9cb0a7227aca0', 'novrina', '08161312404', '2023-02-17 15:04:31', '2'),
(13, 'muhammad syafiq', 'syafiq', '87efee97528597dce5b1700136a4cd48', 'fatmawati', '09797979', '2023-02-17 16:36:54', '2'),
(14, 'cendi', 'cendi', 'c276c76998a109d260b5f044284c41fc', 'depok', '0897667', '2023-06-13 17:23:52', '2'),
(15, 'Jo and Do', 'Jojo123', '0abd488bba3534b19ebe846a464aa9c1', 'jaksel', '089648386651', '2023-02-05 00:00:00', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_resi`
--
ALTER TABLE `tb_resi`
  ADD PRIMARY KEY (`id_resi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `tb_resi`
--
ALTER TABLE `tb_resi`
  MODIFY `id_resi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
