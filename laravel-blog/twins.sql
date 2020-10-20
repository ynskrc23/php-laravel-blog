-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Ağu 2019, 23:58:12
-- Sunucu sürümü: 10.1.38-MariaDB
-- PHP Sürümü: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `twins`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_08_223111_create_tbl_login_table', 1),
(2, '2019_08_13_135400_create_tbl_urun_table', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(10) UNSIGNED NOT NULL,
  `login_isim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_sifre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `login_isim`, `login_email`, `login_sifre`, `created_at`, `updated_at`) VALUES
(1, 'yunus karaca', 'ynskrc82@gmail.com', '8282', '2019-08-08 21:12:25', '2019-08-08 21:12:25'),
(2, 'emre', 'ynskrc46@gmail.com', '8282', '2019-08-08 21:13:37', '2019-08-08 21:13:37'),
(3, 'damla', 'damlakrc46@gmail.com', '8282', '2019-08-09 10:18:14', '2019-08-09 10:18:14'),
(4, 'müco', 'mdb82@gmail.com', '4646', '2019-08-09 10:32:52', '2019-08-09 10:32:52');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_urun`
--

CREATE TABLE `tbl_urun` (
  `urun_id` int(10) UNSIGNED NOT NULL,
  `urun_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urun_marka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urun_islemci` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urun_ram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urun_disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urun_ekran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urun_garanti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urun_durum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urun_kimden` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urun_adres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urun_resim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `tbl_urun`
--

INSERT INTO `tbl_urun` (`urun_id`, `urun_kategori`, `urun_marka`, `urun_islemci`, `urun_ram`, `urun_disk`, `urun_ekran`, `urun_garanti`, `urun_durum`, `urun_kimden`, `urun_adres`, `urun_resim`, `created_at`, `updated_at`) VALUES
(1, 'Dizüstü', 'acer', 'i3-5050u', '4 gb', '500 hdd', '1 gb', 'Yok', 'İkinci El', 'yunus karaca', 'çiçek mahallesi elbistan', 'public/upload/urun//Zb47UncfppQCUNEAuc5hCZWElYxftCMw2LprO7E8.jpeg', '2019-08-13 12:21:00', '2019-08-13 12:21:00'),
(2, 'Masaüstü', 'samsung', 'i5-5050u', '16 gb', '500 hdd', '2 gb', 'Var', 'İkinci El', 'emre karaca', 'çiçek mahallesi elbistan', 'public/upload/urun//OFbooW5JDS16n0pXpOy79U1fvhbeBSXQNY8MSt33.jpeg', '2019-08-13 12:23:56', '2019-08-13 12:23:56');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Tablo için indeksler `tbl_urun`
--
ALTER TABLE `tbl_urun`
  ADD PRIMARY KEY (`urun_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_urun`
--
ALTER TABLE `tbl_urun`
  MODIFY `urun_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
