-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 14 Tem 2019, 18:31:30
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
(79, 'utku', 'çakar', '02/07/2019', '15/07/2019', 'Erkek', 'Stajyer', 'Web Tabanlı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

CREATE TABLE `yonetici` (
  `id` int(11) NOT NULL,
  `kadi` varchar(60) NOT NULL,
  `adsoyad` varchar(60) NOT NULL,
  `sifre` varchar(60) NOT NULL,
  `yetki` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`id`, `kadi`, `adsoyad`, `sifre`, `yetki`) VALUES
(1, 'utku', 'Utku Çakar', '123456', '0'),
(2, 'umut', 'Umut Çakar', '123456', '1'),
(3, 'mehmet', 'mehmet dağ', '1234567', '1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- Tablo için AUTO_INCREMENT değeri `yonetici`
--
ALTER TABLE `yonetici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
