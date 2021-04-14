-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 05, 2019 at 06:18 AM
-- Server version: 5.7.26
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
-- Database: `qlbh`
--

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

DROP TABLE IF EXISTS `loaisp`;
CREATE TABLE IF NOT EXISTS `loaisp` (
  `Maloai` varchar(10) NOT NULL,
  `Tenloai` varchar(10) NOT NULL,
  `Chuthich` varchar(50) NOT NULL,
  PRIMARY KEY (`Maloai`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`Maloai`, `Tenloai`, `Chuthich`) VALUES
('L01', 'Macbook', ''),
('L02', 'HP', ''),
('L03', 'DELL', ''),
('L04', 'ACER', ''),
('L05', 'ASUS', '');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `IDsp` int(11) NOT NULL AUTO_INCREMENT,
  `Masp` varchar(10) NOT NULL,
  `Tensp` varchar(30) NOT NULL,
  `Dongia` int(11) NOT NULL,
  `Soluong` int(11) NOT NULL,
  `Hinhanh` varchar(50) NOT NULL,
  `Chitiet` varchar(100) NOT NULL,
  `CPU` varchar(50) NOT NULL,
  `RAM` varchar(50) NOT NULL,
  `O_cung` varchar(50) NOT NULL,
  `Manhinh` varchar(50) NOT NULL,
  `Card_manhinh` varchar(50) NOT NULL,
  `Congketnoi` varchar(50) NOT NULL,
  `Hedieuhanh` varchar(50) NOT NULL,
  `Thietke` varchar(50) NOT NULL,
  `Kichthuoc` varchar(50) NOT NULL,
  PRIMARY KEY (`IDsp`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`IDsp`, `Masp`, `Tensp`, `Dongia`, `Soluong`, `Hinhanh`, `Chitiet`, `CPU`, `RAM`, `O_cung`, `Manhinh`, `Card_manhinh`, `Congketnoi`, `Hedieuhanh`, `Thietke`, `Kichthuoc`) VALUES
(1, 'L01', 'Laptop Apple MacBook Air 2017', 21490000, 199, 'apple-macbook-air-2017.jpg', '', 'Intel Core i5 Broadwell, 1.80 GHz', '8 GB, DDR3L(On board), 1600 MHz', 'SSD: 128 GB', '13.3 inch, WXGA+(1440 x 900)', 'Card đồ họa tích hợp, Intel HD Graphics 6000', 'MagSafe 2, 2 x USB 3.0, Thunderbolt 2', 'Mac OS', 'Vỏ kim loại nguyên khối, PIN liền', 'Dày 17 mm, 1.35 Kg'),
(2, 'L01', 'Laptop Apple Macbook Air 2019', 27990000, 189, 'apple-macbook-air-2019.jpg', '', 'Intel Core i5 Coffee Lake, 1.60 GHz', '8 GB, DDR3, 2133 MHz', 'SSD: 128 GB', '13.3 inch, Retina (2560 x 1600)', 'Card đồ họa tích hợp, Intel UHD Graphics 617', '2 x Thunderbolt 3 (USB-C)', 'Mac OS', 'Vỏ kim loại nguyên khối, PIN liền', 'Dày 4.1 đến 15.6 mm, 1.25 kg'),
(3, 'L02', 'Laptop HP 14s', 8990000, 298, 'hp-14s.jpg', '', 'AMD Ryzen 3, 3200U, 2.60 GHz', '4 GB, DDR4 (2 khe), 2400 MHz', 'HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 PCIe', '14 inch, HD (1366 x 768)', 'Card đồ họa tích hợp, AMD Radeon™ Vega 3 Graphics', '2 x USB 3.1, LAN (RJ45), USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 1,99 cm, 1,47 kg'),
(4, 'L02', 'Laptop HP 15', 9990000, 257, 'hp-15.jpg', '', 'Intel Pentium, N4417U, 2.30 GHz', '4 GB, DDR4 (On board +1 khe), 2133 MHz', 'HDD: 500 GB', '15.6 inch, HD (1366 x 768)', 'Card đồ họa tích hợp, Intel® HD Graphics', '2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 225 mm, 1.77 kg'),
(5, 'L02', 'Laptop HP 14', 10390000, 216, 'hp-14.jpg', '', 'Intel Core i3 Kabylake, 7020U, 2.30 GHz', '4 GB, DDR4 (2 khe), 2666 MHz', 'HDD: 500 GB SATA3, Hỗ trợ khe cắm SSD M.2 SATA3', '14 inch, HD (1366 x 768)', 'Card đồ họa tích hợp, Intel® UHD Graphics 620', '2 x USB 3.0, HDMI, LAN (RJ45), USB 2.0', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 19.9 mm, 1.56 kg'),
(6, 'L03', 'Laptop Dell Inspiron 3581', 12890000, 367, 'dell-inspiron-3581.jpg', '', 'Intel Core i3 Kabylake, 7020U, 2.30 GHz', '4 GB, DDR4 (2 khe), 2133 MHz', 'HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 PCIe', '15.6 inch, Full HD (1920 x 1080)', 'Card đồ họa rời, AMD Radeon 520, 2GB', 'HDMI 1.4, USB 3.1, LAN (RJ45), USB 2.0', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 22,7 mm, 2.18 kg'),
(7, 'L03', 'Laptop Dell Vostro 3480', 12890000, 341, 'dell-vostro-3480.jpg', '', 'Intel Core i3, 8145U, 2.10 GHz', '4 GB, DDR4 (2 khe), 2666 MHz', 'HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 PCIe', '14 inch, HD (1366 x 768)', 'Card đồ họa tích hợp, Intel® UHD Graphics 620', 'HDMI 1.4, 2 x USB 3.0, LAN , USB 2.0, VGA ', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 21 mm, 1.79 kg'),
(8, 'L04', 'Acer Nitro AN515-52-53PC', 18490000, 451, 'acer-nitro.jpg', '', 'AMD, Ryzen 5', '8 GB, DDR4', 'SSD, 256 GB', '15.6 inchs, 1920 x 1080 Pixels', 'AMD Radeon™ RX 560X, Card rời và tích hợp', 'LAN : 10/100/1000 Mbps, WIFI : 802.11 ac', 'Windows 10 Home', '2.40 Kg', '390 (W) x 266 (D) x 26.75 (H) mm'),
(9, 'L05', 'Laptop Asus VivoBook X507MA', 6490000, 512, 'asus-x507.jpg', '', 'Intel Celeron, N4000, 1.10 GHz', '4 GB, DDR4 (1 khe), 2400 MHz', 'SSD: 256 GB M2', '15.6 inch, HD (1366 x 768)', 'Card đồ họa tích hợp, Intel® UHD Graphics 600', '2 x USB 3.0, HDMI, USB 2.0', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 21.9 mm, 1.75 kg'),
(10, 'L05', 'Laptop Asus VivoBook X441MA', 7290000, 585, 'asus-x441.jpg', '', 'Intel Pentium, N5000, 1.10 GHz', '4 GB, DDR4 (1 khe), 2133 MHz', 'HDD: 1 TB SATA3', '14 inch, HD (1366 x 768)', 'Card đồ họa tích hợp, Intel® HD Graphics', 'HDMI, LAN,USB 2.0,USB 3.0, USB Type-C, VGA', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 27.6 mm, 1.7 kg'),
(11, 'L05', 'Laptop Asus VivoBook X407UA', 9990000, 556, 'asus-x407.jpg', '', 'Intel Core i3 Kabylake, 7020U, 2.30 GHz', '4 GB, DDR4 (1 khe), 2133 MHz', 'HDD: 1 TB, Hỗ trợ khe cắm SSD M.2', '14 inch, HD (1366 x 768)', 'Card đồ họa tích hợp, Intel® HD Graphics 620', 'HDMI, USB 2.0, USB 3.0', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 21.9 mm, 1.5 kg'),
(12, 'L05', 'Laptop Asus VivoBook X407UF', 16890000, 574, 'asus-x407uf.jpg', '', 'Intel Core i7 , 8550U, 1.80 GHz', '4 GB, DDR4 (2 khe), 2400 MHz', 'HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 SATA3', '14 inch, HD (1366 x 768)', 'Card đồ họa rời, NVIDIA Geforce MX130, 2GB', 'HDMI, USB 2.0, USB 3.0', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 21.9 mm, 1.54 kg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
