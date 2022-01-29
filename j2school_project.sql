-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 12:36 PM
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
  `ma_cap_do` int(11) NOT NULL,
  `ghi_chu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giam_gia`
--

INSERT INTO `giam_gia` (`phan_tram`, `ma_cap_do`, `ghi_chu`) VALUES
('50', 1, 'khách hàng có tài khoản');

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
  `ghi_chu` text NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `tong_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`ma`, `ma_khach_hang`, `thoi_gian_dat`, `ten_nguoi_nhan`, `sdt_nguoi_nhan`, `dia_chi_giao_hang`, `ghi_chu`, `trang_thai`, `tong_tien`) VALUES
(14, 33, '2022-01-27 12:45:54', 'Edogawa Conan', '0983259334', 'Tokyo, JP', 'toi dang  làm nhiệm vụ', 1, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`ma_hoa_don`, `ma_san_pham`, `so_luong`) VALUES
(14, 18, 1);

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
  `sdt` varchar(12) NOT NULL,
  `dia_chi` varchar(100) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `cap_do` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma`, `ten`, `gioi_tinh`, `ngay_sinh`, `email`, `sdt`, `dia_chi`, `mat_khau`, `cap_do`) VALUES
(30, 'Nguyễn Thị Bích Tuyền', 0, '2006-01-13', 'tuyen@gg.com', '0914319328', '133 Đồng Khởi, Hậu Giang', '123123123', 1),
(31, 'Mori Ran', 0, '2022-01-05', 'morri@gg.com', '0934293422', '1234 Ssduf, HN', '123123123123', 1),
(33, 'Edogawa Conan', 1, '2021-12-27', 'conan@gmail.com', '0983259334', 'Tokyo, JP', '123123123', 1),
(34, 'Vendy Võ', 0, '2001-08-06', 'vy@gg.com', '0932234342', 'Vĩnh Long', '123123123', 1);

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
(7, 'Nguyễn Thanh Sang', 'Cần Thơ', '0966979243', 'sang@gg.com', '123', 0),
(12, 'Nguyễn Nam Long', 'Hà Nội', '0914319328', 'longhacker@gg.com', '123', 1);

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
(2, 'Starbuck fa ke', 'Đây là 1 ly Starbuck nhưng không phải là Starbuck', 'https://images.foody.vn/res/g5/49849/s/201891994310-mf.jpg', 900900, 2),
(5, 'Bánh cua phô mai', 'Bánh mì cua phô mai mềm xốp, thơm phức, có vị mằn mặn, beo béo đặc trưng của phô mai. Món bánh này không những thơm ngon, bổ dưỡng. hihi', 'https://i.ytimg.com/vi/iFIbFH3gucM/maxresdefault.jpg', 500000, 1),
(10, 'Phin sữa đá', 'Cà phê Phin thế hệ mới với chất Phin êm hơn, kết hợp cùng Choco ngọt tan mang đến hương vị mới lạ, không thể hấp dẫn hơn!', 'https://www.highlandscoffee.com.vn/vnt_upload/product/03_2018/thumbs/270_crop_PHIN-SUA-DA.png', 39000, 2),
(13, 'Bánh bắp', 'Chiếc bánh mà được làm từ bắp nhưng không phải hầu hết là bắp mà nó có chưa bắp', 'https://givralbakery.com.vn/vnt_upload/product/TeaBreak/dessert/thumbs/(443x443)_fh_bap_mieng.jpg', 100, 1),
(14, 'Sữa chua nóng', 'Sữa đã được đem đi lên men và làm nóng lên tạo thành sữa chưa nóng cực nóng', 'https://cdn.huongnghiepaau.com/wp-content/uploads/2018/03/cee8d15e533fe0d998594b417925cd58.jpg', 99009, 2),
(15, 'Bánh mỳ nướng quế', 'Một chiếc bánh mỳ quế mang hương vị của Pháp nhưng không phải đang ở Pháp mà nó có hương vị Pháp nhưng nó ở Việt Nam', 'https://thtranphu.edu.vn/wp-content/uploads/2021/08/banh-mi-nuong-que-kieu-phap2-600x400.jpeg', 23000, 1),
(16, 'Cherry', 'Cherry nhập khẩu từ Mỹ với hệ thống sản xuất và chất lượng dây chuyền tại Mỹ rất là thật là Mỹ.', 'https://hoaquafuji.com/storage/app/media/gia-cherry-tren-thi-truong-00.png', 89000000, 16),
(17, 'Mận Hà Nội', 'Mận được trồng ở Hà Nội nhưng không chắc ở Hà Nội. Có thể từ tỉnh khác.', 'https://cafefcdn.com/2020/5/27/photo-1-1590544038027245927332.jpeg', 900200, 16),
(18, 'Butter cake', 'Tên là butter cake thì chỉ biết là nó là cái cake rồi chét bơ lên thôi chứ còn lại chủ shop chưa biết', 'https://cdn.daylambanh.edu.vn/wp-content/uploads/2020/01/butter-cake-hap-dan-600x400.jpg', 20000, 1),
(19, 'Combo cam nho', 'Cam ngọt mướt, nhìn là thèm', 'https://vcdn-vnexpress.vnecdn.net/2015/07/11/fruit-image-7365-1436585539.jpg', 290000, 16),
(21, 'Dưa hấu', 'Dưa hấu ngọt lịm như người yêu của bạn', 'https://hongngochospital.vn/wp-content/uploads/2020/02/loi-ich-cua-dua-hau-2.jpg', 202000, 16);

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
(16, 'Trái cây');

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
  ADD PRIMARY KEY (`ma`);

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
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_giam_gia` (`cap_do`);

--
-- Indexes for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`ma`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `the_loai`
--
ALTER TABLE `the_loai`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

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
  ADD CONSTRAINT `fk_giam_gia` FOREIGN KEY (`cap_do`) REFERENCES `giam_gia` (`ma_cap_do`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `ma_the_loai` FOREIGN KEY (`ma_the_loai`) REFERENCES `the_loai` (`ma`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
