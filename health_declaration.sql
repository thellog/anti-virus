-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2021 lúc 10:20 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `covid`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `health_declaration`
--

CREATE TABLE `health_declaration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birth` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `district_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ward_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `number_house` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cccd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sot_ho` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dau_hong` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mat_mui` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cam_giac_met` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `kho_tho` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dang_mac_covid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tiep_xuc_gan_ca_nhiem` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `di_tu_quoc_gia` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cach_li` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `xuat_vien` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `health_declaration`
--
ALTER TABLE `health_declaration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `health_declaration`
--
ALTER TABLE `health_declaration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
