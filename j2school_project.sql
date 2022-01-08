-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 07:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `j2school_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `giam_gia`
--

CREATE TABLE `giam_gia` (
  `phan_tram` decimal(10,0) NOT NULL,
  `ma_cap_do` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giam_gia`
--

INSERT INTO `giam_gia` (`phan_tram`, `ma_cap_do`) VALUES
('10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `thoi_gian_dat` timestamp NOT NULL DEFAULT current_timestamp(),
  `ten_nguoi_nhan` varchar(100) NOT NULL,
  `sdt_nguoi_nhan` varchar(20) NOT NULL,
  `dia_chi_giao_hang` varchar(100) NOT NULL,
  `ghi_chu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `cap_do` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma`, `ten`, `gioi_tinh`, `ngay_sinh`, `email`, `mat_khau`, `cap_do`) VALUES
(16, 'Nguyễn Thanh Sang', 1, '2011-12-13', 'sangkh@gmail.com', '123', 1),
(18, 'Huỳnh Thị Mai', 0, '2014-10-08', 'chomai@gg.com', '123', 1),
(20, '', 0, '0000-00-00', 'khachhang', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `ma` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `dia_chi` varchar(100) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `cap_do` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhan_vien`
--

INSERT INTO `nhan_vien` (`ma`, `ten`, `dia_chi`, `sdt`, `email`, `mat_khau`, `cap_do`) VALUES
(7, 'Nguyễn Thanh Sang', 'Cần Thơ', '0966979243', 'sang@gmail.com', '123', 0),
(8, 'Phùng Thanh Độ', 'Hà Lội', '0954332432', 'dogamingpro@gg.com', '123', 1),
(12, 'Nguyễn Nam Long', 'Hà Nội', '0914319328', 'longhacker@gg.com', '123', 1),
(15, '', '', '', 'quanly', '123', 1),
(16, '', '', '', 'nhanvien', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `ma` int(11) NOT NULL,
  `ten_san_pham` varchar(100) NOT NULL,
  `mo_ta` text NOT NULL,
  `anh` varchar(100) NOT NULL,
  `gia` int(100) NOT NULL,
  `ma_the_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma`, `ten_san_pham`, `mo_ta`, `anh`, `gia`, `ma_the_loai`) VALUES
(1, 'Doner', 'Là loại bánh mỳ có nguồn gốc từ Thổ Nhĩ Kỳ. Món này phát triển rất mạnh tại Đức rồi lan rộng ra các châu lục khác và có mặt tại Việt Nam và rất được người Việt ưa chuộng. ', 'https://upload.wikimedia.org/wikipedia/commons/f/f9/D%C3%B6ner_kebab.jpg', 600000, 1),
(2, 'Starbuck fa ke', 'Đây là 1 ly Starbuck nhưng không phải là Starbuck', 'https://images.foody.vn/res/g5/49849/s/201891994310-mf.jpg', 900900, 2),
(5, 'Bánh cua phô mai', 'Bánh mì cua phô mai mềm xốp, thơm phức, có vị mằn mặn, beo béo đặc trưng của phô mai. Món bánh này không những thơm ngon, bổ dưỡng.', 'https://i.ytimg.com/vi/iFIbFH3gucM/maxresdefault.jpg', 500000, 1),
(10, 'Phin sữa đá', 'Cà phê Phin thế hệ mới với chất Phin êm hơn, kết hợp cùng Choco ngọt tan mang đến hương vị mới lạ, không thể hấp dẫn hơn!', 'https://www.highlandscoffee.com.vn/vnt_upload/product/03_2018/thumbs/270_crop_PHIN-SUA-DA.png', 39000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `the_loai`
--

CREATE TABLE `the_loai` (
  `ma` int(11) NOT NULL,
  `ten_the_loai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `the_loai`
--

INSERT INTO `the_loai` (`ma`, `ten_the_loai`) VALUES
(1, 'Thức ăn'),
(2, 'Nước uống'),
(4, 'Trái cây');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giam_gia`
--
ALTER TABLE `giam_gia`
  ADD PRIMARY KEY (`ma_cap_do`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`);

--
-- Indexes for table `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD PRIMARY KEY (`ma_hoa_don`,`ma_san_pham`),
  ADD KEY `ma_san_pham` (`ma_san_pham`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma`),
  ADD KEY `giam_gia` (`cap_do`);

--
-- Indexes for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`ma`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma`),
  ADD KEY `ma_the_loai` (`ma_the_loai`);

--
-- Indexes for table `the_loai`
--
ALTER TABLE `the_loai`
  ADD PRIMARY KEY (`ma`),
  ADD UNIQUE KEY `ma` (`ma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `the_loai`
--
ALTER TABLE `the_loai`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `ma_khach_hang` FOREIGN KEY (`ma_khach_hang`) REFERENCES `hoa_don` (`ma`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `ma_hoa_don` FOREIGN KEY (`ma_hoa_don`) REFERENCES `hoa_don` (`ma`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ma_san_pham` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD CONSTRAINT `giam_gia` FOREIGN KEY (`cap_do`) REFERENCES `giam_gia` (`ma_cap_do`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `ma_the_loai` FOREIGN KEY (`ma_the_loai`) REFERENCES `the_loai` (`ma`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
