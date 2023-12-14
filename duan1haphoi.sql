-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 08:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1haphoi`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `ngaybinhluan` date DEFAULT NULL,
  `nameuser` text NOT NULL,
  `img` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `idsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `ngaybinhluan`, `nameuser`, `img`, `iduser`, `idsp`) VALUES
(76, 'aamammamamam', '2023-12-10', 'duytinh2110', './upload/_90_25.jpg', 33, 51);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(11, 'Áo Nữ'),
(12, 'Quần Nam'),
(13, 'Quần Áo Nữ'),
(14, 'Váy');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `namesp` text NOT NULL,
  `price` float NOT NULL,
  `tongprice` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `img` text NOT NULL,
  `color` text NOT NULL,
  `size` text NOT NULL,
  `idsp` int(11) NOT NULL,
  `idtk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `hoten` text NOT NULL,
  `mahoadon` varchar(50) NOT NULL,
  `sdt` int(15) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `PT_TT` tinytext DEFAULT '1' COMMENT '0.Thanh toán khi nhận hàng 1.Thanh toán qua ứng dụng ngân hàng',
  `datebuy` date DEFAULT NULL,
  `soluonghh` int(11) NOT NULL,
  `tongprice` float NOT NULL,
  `trangthai` tinytext DEFAULT '0' COMMENT '0.Chờ xác nhận 1.Đang xử lí 2.Đang giao hàng 3.Đã giao hàng '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `iduser`, `hoten`, `mahoadon`, `sdt`, `email`, `address`, `PT_TT`, `datebuy`, `soluonghh`, `tongprice`, `trangthai`) VALUES
(120, 1, 'admin', '424694', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '0', '2023-12-09', 2, 240000, '0'),
(121, 1, 'admin', '292908', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '2', '2023-12-09', 2, 240000, '0'),
(122, 1, 'admin', '426986', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '2', '2023-12-09', 2, 280000, '0'),
(123, 1, 'admin', '382963', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '2', '2023-12-09', 0, 280000, '0'),
(124, 1, 'admin', '915615', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '2', '2023-12-09', 0, 280000, '0'),
(125, 1, 'admin', '59960', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '2', '2023-12-09', 2, 203000, '0'),
(126, 1, 'admin', '717783', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '1', '2023-12-09', 2, 290000, '0'),
(127, 1, 'admin', '483435', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '2', '2023-12-09', 2, 182000, '0'),
(128, 1, 'admin', '395753', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '2', '2023-12-09', 1, 98000, '0'),
(129, 1, 'admin', '731391', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '2', '2023-12-09', 2, 203000, '0'),
(130, 1, 'admin', '524906', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '2', '2023-12-09', 1, 98000, '0'),
(131, 1, 'admin', '362135', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '2', '2023-12-09', 3, 207900, '0'),
(132, 1, 'admin', '399472', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '0', '2023-12-09', 3, 390600, '0'),
(133, 1, 'admin', '322791', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '2', '2023-12-09', 2, 223200, '0'),
(134, 1, 'admin', '481478', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '1', '2023-12-09', 2, 223200, '0'),
(135, 1, 'admin', '275791', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '2', '2023-12-09', 2, 238000, '0'),
(136, 1, 'admin', '506413', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '0', '2023-12-09', 2, 176000, '0'),
(137, 1, 'admin', '94075', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '2', '2023-12-09', 2, 330000, '1'),
(138, 1, 'admin', '186489', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '0', '2023-12-09', 1, 61600, '0'),
(139, 1, 'admin', '14218', 329500240, 'haildnph31607@fpt.edu.vn', 'Ninh Binh', '1', '2023-12-09', 1, 115500, '1'),
(140, 1, 'admin', '304905', 394562068, 'haduytinh21102004@gmail.com', 'Nam ddinh', '0', '2023-12-10', 4, 570000, '0'),
(141, 1, 'admin', '621136', 394562068, 'haduytinh21102004@gmail.com', 'Nam ddinh', '0', '2023-12-10', 2, 290000, '0'),
(142, 1, 'admin', '761001', 394562068, 'haduytinh21102004@gmail.com', 'Nam ddinh', '0', '2023-12-10', 2, 280000, '4'),
(143, 1, 'admin', '170826', 394562068, 'haduytinh21102004@gmail.com', 'Nam ddinh', '1', '2023-12-10', 3, 375000, '4'),
(144, 1, 'admin', '988445', 394562068, 'haduytinh21102004@gmail.com', 'Nam ddinh', '2', '2023-12-10', 1, 95000, '1'),
(145, 1, 'admin', '48405', 394562068, 'haduytinh21102004@gmail.com', 'Nam ddinh', '0', '2023-12-10', 3, 409000, '3');

-- --------------------------------------------------------

--
-- Table structure for table `hoadonchitiet`
--

CREATE TABLE `hoadonchitiet` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `price` float NOT NULL,
  `tongprice` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `idhoadon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadonchitiet`
--

INSERT INTO `hoadonchitiet` (`id`, `name`, `img`, `size`, `color`, `price`, `tongprice`, `soluong`, `idhoadon`) VALUES
(56, 'Áo Hoodie Unisex ', '../upload/_98_baoviec1.jpg', 'M', 'red', 145000, 290000, 2, 129),
(57, 'Áo Hoodie Unisex ', '../upload/_98_baoviec1.jpg', 'S', 'red', 140000, 140000, 1, 130),
(58, 'Áo Thun Tay Dài Giả', '../upload/_66_thun.jpg', 'S', 'black', 99000, 297000, 3, 131),
(59, 'Áo Hoodie Unisex ', '../upload/_98_baoviec1.jpg', 'S', 'red', 140000, 420000, 3, 132),
(60, 'ÁO MĂNG TÔ ', '../upload/_61_aomangto.jpg', 'S', 'black', 120000, 240000, 2, 133),
(61, 'ÁO MĂNG TÔ ', '../upload/_61_aomangto.jpg', 'S', 'black', 120000, 240000, 2, 134),
(62, 'Quần tây nam', '../upload/_74_quantay.jpg', 'M', 'black', 170000, 340000, 2, 135),
(63, 'Áo Nỉ Nam Nữ Unisex', '../upload/_74_uni1.jpg', 'S', 'white', 88000, 176000, 2, 136),
(64, 'Quần tây nam', '../upload/_74_quantay.jpg', 'S', 'black', 165000, 330000, 2, 137),
(65, 'Áo Nỉ Nam Nữ Unisex', '../upload/_74_uni1.jpg', 'S', 'white', 88000, 88000, 1, 138),
(66, 'Quần tây nam', '../upload/_74_quantay.jpg', 'S', 'black', 165000, 165000, 1, 139),
(67, 'Quần dài nam thu đông ', '../upload/_70_thu.jpg', 'S', 'black', 125000, 250000, 4, 140),
(68, 'Áo Hoodie Unisex ', '../upload/_98_baoviec1.jpg', 'M', 'white', 145000, 145000, 4, 140),
(69, 'Quần tây nam', '../upload/_74_quantay.jpg', 'L', 'white', 175000, 175000, 4, 140),
(70, 'Áo Hoodie Unisex ', '../upload/_98_baoviec1.jpg', 'M', 'red', 145000, 290000, 2, 141),
(71, 'ÁO MĂNG TÔ ', '../upload/_61_aomangto.jpg', 'M', 'black', 140000, 280000, 2, 142),
(72, 'Áo Hoodie Unisex ', '../upload/_98_baoviec1.jpg', 'M', 'white', 145000, 145000, 3, 143),
(73, 'Quần Baggy Nam', '../upload/_21_bagi.jpg', 'XL', 'blue', 115000, 230000, 3, 143),
(74, 'Áo Nỉ Nam Nữ Unisex', '../upload/_74_uni1.jpg', 'M', 'white', 95000, 95000, 1, 144),
(75, 'ÁO KHOÁC  NỈ', '../upload/_3_aoni.jpg', 'S', 'black', 99000, 99000, 3, 145),
(76, 'Áo Hoodie Unisex ', '../upload/_98_baoviec1.jpg', 'S', 'white', 140000, 140000, 3, 145),
(77, 'Quần tây nam', '../upload/_74_quantay.jpg', 'M', 'black', 170000, 170000, 3, 145),
(78, 'Quần tây nam', '../upload/_74_quantay.jpg', 'M', 'black', 170000, 170000, 1, 146),
(79, 'ÁO KHOÁC  NỈ', '../upload/_3_aoni.jpg', 'M', 'black', 110000, 110000, 1, 147);

-- --------------------------------------------------------

--
-- Table structure for table `replybinhluan`
--

CREATE TABLE `replybinhluan` (
  `id` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `ngaybinhluan` date DEFAULT NULL,
  `username` text NOT NULL,
  `img` text NOT NULL,
  `idsp` int(11) NOT NULL,
  `idbl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `color` varchar(50) NOT NULL,
  `color1` varchar(50) NOT NULL,
  `color2` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  `dateup` date DEFAULT NULL,
  `luotmua` int(11) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `img`, `img1`, `img2`, `img3`, `color`, `color1`, `color2`, `mota`, `dateup`, `luotmua`, `iddm`) VALUES
(34, 'ÁO MĂNG TÔ ', '../upload/_61_aomangto.jpg', '../upload/_61_mangto1.jpg', '../upload/_61_mangto2.jpg', '../upload/_61_mangto3.jpg', 'black', '', '', 'ÁO MĂNG TÔ CHẤT LƯỢNG CAOOOO', '2023-12-06', 0, 11),
(35, 'ÁO KHOÁC  NỈ', '../upload/_3_aoni.jpg', '../upload/_3_aoni1.jpg', '../upload/_3_aoni2.jpg', '../upload/_3_aoni3.jpg', 'black', 'yellow', '', 'ÁO KHOÁC NỈ CHẤT LƯỢNG CAOO', '2023-12-06', 0, 11),
(36, 'Quần Baggy Nam', '../upload/_21_bagi.jpg', '../upload/_21_bagi1.jpg', '../upload/_21_bagi2.jpg', '../upload/_21_bagi3.jpg', 'blue', 'black', '', 'Quần Baggy Nam Chất Lượng Cao !', '2023-12-08', 0, 12),
(37, 'Áo Khoác Gió', '../upload/_2_aokhoac.jpg', '../upload/_2_aokhoac1.jpg', '../upload/_2_aokhoac2.jpg', '../upload/_2_aohoac3.jpg', 'white', 'yellow', '', 'Áo Khoác Gió Chất Lượng Caooo!', '2023-12-08', 0, 11),
(38, 'Quần Jean Nam', '../upload/_28_jean.jpg', '../upload/_28_jean1.jpg', '../upload/_28_jean2.jpg', '../upload/_28_jean3.jpg', 'blue', '', '', 'Quần Jean Nam Chất Lượng Cao !!', '2023-12-08', 0, 12),
(39, 'Áo Hoodie Nam', '../upload/_68_hodie.jpg', '../upload/_68_hòie.jpg', '../upload/_68_hodie2.jpg', '../upload/_68_hodie3.jpg', 'green', 'black', 'gray', 'Áo Hoodie Nam Chất Lượng cao', '2023-12-08', 0, 11),
(40, 'Quần Jogger Nam ', '../upload/_65_quạnoger.jpg', '../upload/_65_quạnoger1.jpg', '../upload/_65_quạnoger2.jpg', '../upload/_65_quạnoger3.jpg', 'black', 'gray', '', 'Quần Jogger Nam Kiểu Dáng Thời Trang Tinh Tế Bo Chun Ống Chân Zenkocs3 MEN QUAN 068', '2023-12-08', 0, 12),
(41, 'Quần Dài Ống Rộng ', '../upload/_13_quanvaiomnhrong.jpg', '../upload/_13_quanvaiongrong1.jpg', '../upload/_13_quanvaiongrong2.jpg', '../upload/_13_quanvaiongrong3.jpg', 'black', 'bisque', 'green', 'Quần Dài Ống Rộng Màu Sắc Thời Trang Mùa Hè Cho Nam', '2023-12-08', 0, 12),
(43, ' Quần đũi dài nam', '../upload/_40_quandui.jpg', '../upload/_40_quandui1.jpg', '../upload/_40_quandui3.jpg', '../upload/_40_quandui2.jpg', 'black', 'white', 'gray', 'Quần nam Quần đũi dài nam ống suông Form Slimfit dáng âu', '2023-12-08', 0, 12),
(44, 'Áo Sweater nỉ nam ', '../upload/_96_switer.jpg', '../upload/_96_switer1.jpg', '../upload/_96_sswiter2.jpg', '../upload/_96_swier3.jpg', 'black', 'white', '', 'Áo Sweater nỉ nam nữ,áo nỉ cổ tròn in hình mặt cười nam nữ mặc cực chất-SWEATER', '2023-12-08', 0, 11),
(45, 'Áo POLO thêu chữ S', '../upload/_7_polos.jpg', '../upload/_7_polos2.jpg', '../upload/_7_polos1.jpg', '../upload/_7_polos2.jpg', 'black', 'white', '', 'Áo POLO thêu chữ S phối tương phản , áo Sweater dài tay nam mùa thu đông đẹp phong cách thời trang Hàn quốc', '2023-12-08', 0, 11),
(46, 'Áo Khoác Nhẹ Nỉ ', '../upload/_84_khoacni.jpg', '../upload/_84_khoacni1.jpg', '../upload/_84_khoacni2.jpg', '../upload/_84_khoacni3.jpg', 'aqua', 'white', 'red', 'Áo Khoác Nhẹ Nỉ Nam Khóa Kéo Tay Dài Có Mũ Họa Tiết Vảy Sơn Phối Màu Loang Zenkonam MEN JK 036', '2023-12-08', 0, 11),
(47, 'Quần ống rộng', '../upload/_42_quyandp.jpg', '../upload/_42_quandp1.jpg', '../upload/_42_1uansp2.jpg', '../upload/_42_quandp3.jpg', 'black', 'bisque', '', 'Quần ống rộng Phong Cách Đường Phố Thời Trang Cho Nam', '2023-12-08', 0, 12),
(48, 'Áo Thun Tay Dài Giả', '../upload/_66_thun.jpg', '../upload/_66_thun1.jpg', '../upload/_66_thun2.jpg', '../upload/_66_thun3.jpg', 'black', 'white', '', '\r\nÁo Thun Tay Dài Giả Hai Lớp Plus Size Cho Nam', '2023-12-08', 0, 11),
(49, 'Quần dài nam thu đông ', '../upload/_70_thu.jpg', '../upload/_70_thu1.jpg', '../upload/_70_thu2.jpg', '../upload/_70_thu4.jpg', 'black', 'white', '', '\r\nQuần dài nam thu đông chất thun khóa kéo chống nước thể thao quần jogger nỉ nam nữ Zenkocs3 MQU 012', '2023-12-08', 0, 12),
(50, 'Áo Hoodie Unisex ', '../upload/_98_baoviec1.jpg', '../upload/_98_baoviec3.jpg', '../upload/_98_baocive2.jpg', '../upload/_98_baoviec1.jpg', 'red', 'white', 'black', 'Áo Hoodie Unisex Dài Tay Cổ Tròn In Slogan Nhà Bao Việc Thời Trang Zenkonam MEN TOP 178', '2023-12-08', 0, 11),
(52, 'Áo Nỉ Nữ ', '../upload/_74_uni1.jpg', '../upload/_74_uni3.jpg', '../upload/_74_uni2.jpg', '../upload/_74_uni.jpg', 'white', '', '', 'Áo Nỉ Nam Nữ Unisex Tay Dài Cổ Tròn In Họa Tiết Chữ OEO Phong Cách Trẻ Trung Cá Tính Năng Động Zenkocs3 MEN TOP 229', '2023-12-10', 0, 11),
(53, 'quần nữ siêu đẹp và tinh tế', '../upload/_44_6.jpg', '../upload/_44_', '../upload/_44_', '../upload/_44_', 'xanh ', 'vang', 'hong', 'ssssssssssssssssssss', '2023-12-09', 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham_shared`
--

CREATE TABLE `sanpham_shared` (
  `id` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `idsize` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham_shared`
--

INSERT INTO `sanpham_shared` (`id`, `idsp`, `idsize`, `price`, `quantity`) VALUES
(5, 34, 3, 120000, 24),
(6, 34, 4, 140000, 26),
(7, 34, 5, 160000, 29),
(8, 34, 6, 180000, 30),
(9, 35, 3, 99000, 21),
(10, 35, 4, 110000, 22),
(11, 35, 5, 120000, 24),
(12, 35, 6, 140000, 0),
(13, 36, 3, 150000, 17),
(14, 36, 4, 100000, 19),
(15, 36, 5, 105000, 22),
(16, 36, 6, 115000, 25),
(17, 37, 3, 120000, 18),
(18, 37, 4, 130000, 22),
(19, 37, 5, 140000, 27),
(20, 37, 6, 150000, 29),
(21, 38, 3, 140000, 44),
(22, 38, 4, 150000, 22),
(23, 38, 5, 160000, 47),
(24, 38, 6, 170000, 78),
(25, 39, 3, 130000, 45),
(26, 39, 4, 140000, 45),
(27, 39, 5, 150000, 66),
(28, 39, 6, 160000, 78),
(29, 40, 3, 120000, 55),
(30, 40, 4, 130000, 234),
(31, 40, 5, 140000, 12),
(32, 40, 6, 150000, 987),
(33, 41, 3, 170000, 44),
(34, 41, 4, 175000, 22),
(35, 41, 5, 180000, 34),
(36, 41, 6, 185000, 32),
(41, 43, 3, 110000, 34),
(42, 43, 4, 115000, 45),
(43, 43, 5, 120000, 66),
(44, 43, 6, 125000, 78),
(45, 44, 3, 89000, 44),
(46, 44, 4, 96000, 55),
(47, 44, 5, 10000, 33),
(48, 44, 6, 110000, 22),
(49, 45, 3, 120000, 34),
(50, 45, 4, 125000, 56),
(51, 45, 5, 130000, 77),
(52, 45, 6, 140000, 89),
(53, 46, 3, 130000, 56),
(54, 46, 4, 135000, 67),
(55, 46, 5, 140000, 99),
(56, 46, 6, 145000, 123),
(57, 47, 3, 150000, 33),
(58, 47, 4, 155000, 45),
(59, 47, 5, 160000, 78),
(60, 47, 6, 165000, 55),
(61, 48, 3, 99000, 23),
(62, 48, 4, 110000, 26),
(63, 48, 5, 105000, 33),
(64, 48, 6, 110000, 66),
(65, 49, 3, 125000, 56),
(66, 49, 4, 130000, 345),
(67, 49, 5, 135000, 665),
(68, 49, 6, 140000, 987),
(69, 50, 3, 140000, 256),
(70, 50, 4, 145000, 546),
(71, 50, 5, 150000, 675),
(72, 50, 6, 155000, 999),
(77, 52, 3, 88000, 434),
(78, 52, 4, 95000, 565),
(79, 52, 5, 100000, 787),
(80, 52, 6, 105000, 564);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size`) VALUES
(3, 'S'),
(4, 'M'),
(5, 'L'),
(6, 'XL');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `email` text NOT NULL,
  `sdt` int(15) NOT NULL,
  `password` text NOT NULL,
  `img` text NOT NULL,
  `address` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `email`, `sdt`, `password`, `img`, `address`, `role`) VALUES
(1, 'admin', 'haduytinh21102004@gmail.com', 394562068, '1234567', './upload//99.25.jpg', 'Nam ddinh', 1),
(2, 'Linhktpph38553', 'linhktpph38553@fpt.edu.vn', 326890876, 'linhktph38553', './upload//79.beiu.jpg', 'Ha Noi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `giam` int(11) NOT NULL,
  `thoigian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `code`, `giam`, `thoigian`) VALUES
(1, 'ABC123', 20, '2023-12-21'),
(2, 'PRESEDEN', 30, '2023-12-22'),
(3, 'MERRYCHRISTMAS ', 15, '2023-12-26'),
(4, 'NOEL2023', 25, '2023-12-28'),
(5, 'FPOLY', 7, '2023-12-29'),
(6, 'GIANGSINHANLANH', 25, '2023-12-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_binhluan_sanpham` (`idsp`),
  ADD KEY `lk_binhluan_taikhoan` (`iduser`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_giohang_taikhoan` (`idtk`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_hoadon_taikhoan` (`iduser`);

--
-- Indexes for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replybinhluan`
--
ALTER TABLE `replybinhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_replybinhluan_binhluan` (`idbl`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `sanpham_shared`
--
ALTER TABLE `sanpham_shared`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_share_sanpham` (`idsp`),
  ADD KEY `lk_sanpham_shared_size` (`idsize`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `replybinhluan`
--
ALTER TABLE `replybinhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `sanpham_shared`
--
ALTER TABLE `sanpham_shared`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `lk_giohang_taikhoan` FOREIGN KEY (`idtk`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `lk_hoadon_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `replybinhluan`
--
ALTER TABLE `replybinhluan`
  ADD CONSTRAINT `lk_replybinhluan_binhluan` FOREIGN KEY (`idbl`) REFERENCES `binhluan` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);

--
-- Constraints for table `sanpham_shared`
--
ALTER TABLE `sanpham_shared`
  ADD CONSTRAINT `lk_sanpham_share_sanpham` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `lk_sanpham_shared_size` FOREIGN KEY (`idsize`) REFERENCES `size` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
