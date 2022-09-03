-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 18 Haz 2021, 20:34:40
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kahve_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kahve`
--

DROP TABLE IF EXISTS `kahve`;
CREATE TABLE IF NOT EXISTS `kahve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_and_surname` text COLLATE utf8_turkish_ci NOT NULL,
  `subjectt` text COLLATE utf8_turkish_ci NOT NULL,
  `phone` text COLLATE utf8_turkish_ci NOT NULL,
  `e_mail` text COLLATE utf8_turkish_ci NOT NULL,
  `message` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kahve`
--

INSERT INTO `kahve` (`id`, `name_and_surname`, `subjectt`, `phone`, `e_mail`, `message`) VALUES
(15, '0', '0', '0', 'gg@gmail.com', '0'),
(12, '2', 'kÄ±', '0(535) 064 93 09', 'gg@gmail.com', '2'),
(11, '2', 'kÄ±', '0(535) 064 93 09', 'gg@gmail.com', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
