-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 12 Tem 2019, 00:27:11
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bilgiler`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_ogrbilgiler`
--

CREATE TABLE `tbl_ogrbilgiler` (
  `id` int(11) NOT NULL,
  `ograd` varchar(60) NOT NULL,
  `ogrsoyad` varchar(60) NOT NULL,
  `baslangic` varchar(30) NOT NULL,
  `bitis` varchar(30) NOT NULL,
  `cinsiyet` varchar(10) NOT NULL,
  `aciklama` varchar(60) NOT NULL,
  `bolum` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tbl_ogrbilgiler`
--

INSERT INTO `tbl_ogrbilgiler` (`id`, `ograd`, `ogrsoyad`, `baslangic`, `bitis`, `cinsiyet`, `aciklama`, `bolum`) VALUES
(57, 'utku', 'çakar', '2019-07-13', '2019-07-17', 'Erkek', '', 'Masaüstü Tabanlı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

CREATE TABLE `yonetici` (
  `id` int(11) NOT NULL,
  `kadi` varchar(60) NOT NULL,
  `adsoyad` varchar(60) NOT NULL,
  `sifre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`id`, `kadi`, `adsoyad`, `sifre`) VALUES
(1, 'utku', 'Utku Çakar', '123456');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_ogrbilgiler`
--
ALTER TABLE `tbl_ogrbilgiler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yonetici`
--
ALTER TABLE `yonetici`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_ogrbilgiler`
--
ALTER TABLE `tbl_ogrbilgiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- Tablo için AUTO_INCREMENT değeri `yonetici`
--
ALTER TABLE `yonetici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
