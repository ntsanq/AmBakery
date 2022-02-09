-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 11:19 AM
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
(14, 33, '2022-01-27 12:45:54', 'Edogawa Conan', '0983259334', 'Tokyo, JP', 'toi dang  làm nhiệm vụ', 1, 20000),
(31, 33, '2022-02-03 06:09:45', 'Edogawa Conan', '0983259334', 'Tokyo, JP', '', 1, 104000),
(32, 0, '2022-02-09 08:29:30', 'Vendy Võ', '0914319328', '123D Mậu Thân, An Hòa, Cần Thơ', 'dw123123', 0, 70000);

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
(14, 18, 1),
(31, 14, 2),
(31, 24, 1),
(32, 5, 1),
(32, 13, 1);

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
(31, 'Mori Ran', 0, '2022-01-05', 'morri@gg.com', '0934293422', '1234 Ssduf, HN', '123123123123', 1),
(33, 'Edogawa Conan', 1, '2021-12-27', 'conan@gmail.com', '0983259334', 'Tokyo, JP', '123123123', 1),
(34, 'Vendy', 0, '2001-08-06', 'vy@gg.com', '0932234342', 'Vĩnh Long', '123123123', 1),
(35, 'Sha Da', 0, '2019-01-15', 'sanda@gg.com', '0923423482', 'Bạc Liêu', '123123123123', 1);

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
(2, 'ESPRESSO', 'Espresso là café được pha bằng máy, sử dụng nước nóng nén bởi áp suất cao qua lớp bột cà phê được xay mịn. Nước dùng để pha chế Espresso là nước tinh khiết, còn café dùng để pha chế theo phương pháp này cũng phải là café rang mộc, không tẩm ướp bất kỳ tạp chất nào.', 'http://img.v3.news.zdn.vn/w660/Uploaded/ngtmns/2016_12_07/italiancoffeexlarge.jpg', 55000, 2),
(5, 'CROISSANT', 'Croissant không dễ làm! Bột nhào đòi hỏi một quy trình chi tiết được gọi là cán mỏng bao gồm gấp và lăn nhiều lần — đông lạnh hoặc làm lạnh giữa các lần gấp — để tạo ra các lớp bơ bên trong bánh ngọt. Nhưng nó hoàn toàn xứng đáng khi bạn cắn vào thành quả béo ngậy, thơm như bơ, giòn tan.', 'http://www.monpetitchouxfrenchbakery.com.au/wp-content/uploads/2017/10/pastrie-menu-tile-1.jpg', 30000, 1),
(10, ' COFFEE FRAPPÉ', 'Frappe là một loại hỗn hợp cà phê đá ngọt xuất phát từ đất nước Hy Lạp, được pha trộn gồm sữa và cà phê espresso, sau đó được xay nhuyễn cùng đá viên nó tạo nên một món cà phê hoàn hảo, được yêu thích khắp nơi trên thế giới.', 'https://shottbeverages.com/wp-content/uploads/2020/10/hazelnut-frappe.jpg', 68000, 2),
(13, 'FRENCH BREAD', 'Chiếc bánh Pháp rộng và dài hơn bánh mì baguette, với lớp vỏ mềm hơn nhiều. Nó không yêu cầu bất kỳ thiết bị đặc biệt nào để làm và nó linh hoạt như một chiếc bánh mì baguette, nhưng bên ngoài mềm mại của nó khiến nó trở nên hoàn hảo cho món bánh mì nướng hoặc bánh mì tỏi.\r\n', 'https://www.tasteofhome.com/wp-content/uploads/2021/02/whole-wheat-baguettes-sliced-895088696.jpg?re', 40000, 1),
(14, 'CARAMEL MACCHIATO', 'Thỏa mãn cơn thèm ngọt! Ly cà phê Caramel Macchiato bắt đầu từ dòng sữa tươi và lớp bọt sữa béo ngậy, sau đó hòa quyện cùng cà phê espresso đậm đà và sốt caramel ngọt ngào. Thông qua bàn tay điêu luyện của các chuyên gia pha chế, mọi thứ hoàn toàn được nâng tầm thành nghệ thuật!', 'https://vietblend.vn/wp-content/uploads/2018/12/caramel-macchiato_830x550.jpg', 89000, 2),
(18, 'FRENCH CAKES', 'Hãy thưởng thức những vị khách của bạn với một trong những chiếc bánh độc đáo này.\r\nMon Petit Choux cung cấp một loạt các loại bánh kỷ niệm lấy cảm hứng từ tiệm bánh thực sự của Pháp.', 'http://www.monpetitchouxfrenchbakery.com.au/wp-content/uploads/2018/06/menu-cake-tilev2.jpg', 150000, 1),
(22, 'CAFÉ MOCHA', 'Cafe Mocha là một loại thức uống với sự kết hợp của Espresso, sữa nóng và hương vị sauce chocolate rất quyến rũ. Chính những thành phần này đã tạo nên một hỗn hợp hoàn hảo nhất, đó là vị đắng của cà phê kết hợp với cảm giác lắng đọng của chocolate.', 'https://file.hstatic.net/1000059704/article/mocha_master.jpg', 70000, 2),
(24, 'FOO FOO', ' Foo Foo vẫn tuyệt vời vì chúng rất lạ mắt, với giá cả phải chăng. Mang hơi hướng cổ điển, nhà bếp chế biến ra những đĩa bánh semifreddo phủ trái cây xinh xắn với đế bánh hạnh nhân, bánh táo kết hợp với kem xoài tiêu đen, bánh tres bí đỏ và bánh tráng trộn với kem cà phê caramel muối.', 'https://media-cdn.tripadvisor.com/media/photo-s/0c/fd/f0/83/foo-foo.jpg', 30000, 16),
(25, 'KIND KONES', ' Kind Kones đi theo con đường lành mạnh với dừa và sữa hạt được làm từ các nguyên liệu tự nhiên, chưa qua chế biến như đường mía và mật mía chưa tinh chế. Bên cạnh việc không có trứng và sữa, nó còn có các lựa chọn không chứa gluten như kem chuối thanh long, bánh khúc bạch bạc hà, chuối óc chó, mè đen và vani than.', 'https://coconuts.co/wp-content/uploads/2019/08/kind-kones-kl.jpg', 25000, 16),
(26, '   MADHATTER', 'Cái tên đằng sau tiệm bánh kỳ lạ này là Marcus Low, còn được gọi là “Vua tráng miệng” trên MasterChef Asia (anh ấy đã về nhì mùa giải đầu tiên năm 2015). Giống như anh ấy đã thổi bay các giám khảo trong cuộc thi nấu ăn trên truyền hình, Low đã nghĩ ra những công thức nấu ăn độc đáo và cải tiến những sáng tạo lấy cảm hứng từ địa phương trong nhà bếp của anh ấy trong hai năm qua.', 'https://coconuts.co/wp-content/uploads/2019/08/madhatter-desserts-kl.jpg', 18000, 16),
(27, 'SOUKA', 'Souka là loại bánh ra đời vào năm 2008. Thành phần \r\ngồm bánh ngọt, chuối caramel, bánh nướng và bánh tart sô cô la caramel mặn và đặc biệt có cả bánh quy', 'https://coconuts.co/wp-content/uploads/2019/08/souka-cakes-kl.jpg', 99000, 16),
(28, 'BRIOCHE', 'Một chiếc bánh brioche thích hợp chắc chắn mang một vị đậm đà như bánh ngọt, với phần vụn và kết cấu của bánh mì ”. Nó có được hương vị và kết cấu từ lớp bột mịn như nhung, có chứa sữa, trứng và rất nhiều bơ. Brioche cuộn là sự lựa chọn hàng đầu của chúng tôi để làm bánh mì kẹp thịt và chúng tôi thích sử dụng một lát dày cho bánh mì nướng kiểu Pháp.', 'https://www.tasteofhome.com/wp-content/uploads/2021/02/french-brioche-175421595.jpg?resize=696,696', 56000, 1),
(29, 'BLACKOUT CHOCOLATE CAKE', 'Bánh kem có hình khúc cây', 'https://assets.bonappetit.com/photos/59c924dc32e4b84f5a9e437a/8:5/w_4279,h_2674,c_limit/1017%20WEB%2', 230000, 16);

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
(1, 'Breads'),
(2, 'Drinks'),
(16, 'Desserts');

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
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
