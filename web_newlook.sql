-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 08:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_newlook`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_features`
--

CREATE TABLE `menu_features` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_features`
--

INSERT INTO `menu_features` (`id`, `name`, `url`, `icon`) VALUES
(20, 'Thống kê', 'index.php?action=1&query=them', 'fa-solid fa-house'),
(21, 'Danh mục sản phẩm', 'index.php?action=quanlydanhmucsanpham&query=them', 'fa-solid fa-list'),
(22, 'Sản phẩm', 'index.php?action=quanlysp&query=them', 'fa-solid fa-bag-shopping'),
(23, 'Danh mục bài viết', 'index.php?action=quanlydanhmucbaiviet&query=them', 'fa-solid fa-table-list'),
(24, 'Bài viết', 'index.php?action=quanlybaiviet&query=them', 'fa-solid fa-comment'),
(25, 'Tài khoản', 'index.php?action=taikhoan&query=them', 'fa-solid fa-user'),
(26, 'Quyền', 'index.php?action=quyen&query=them', 'fa-solid fa-user-gear'),
(27, 'Đơn hàng', 'index.php?action=quanlydonhang&query=lietke', 'fa-solid fa-tag'),
(28, 'Quản lý Website', 'index.php?action=quanlyweb&query=capnhat', 'fa-solid fa-globe');

-- --------------------------------------------------------

--
-- Table structure for table `role_features`
--

CREATE TABLE `role_features` (
  `role_feature_id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `feature_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_features`
--

INSERT INTO `role_features` (`role_feature_id`, `role_id`, `feature_id`) VALUES
(1, 27, 20),
(2, 27, 21),
(3, 27, 22),
(4, 27, 23),
(5, 27, 24),
(6, 27, 25),
(7, 27, 26),
(8, 27, 27),
(9, 27, 28),
(10, 28, 21),
(11, 28, 22),
(12, 28, 23),
(13, 28, 24),
(14, 28, 27),
(15, 30, 20),
(16, 30, 21),
(17, 30, 22),
(18, 30, 23),
(19, 30, 24),
(20, 30, 27),
(21, 30, 28),
(22, 31, 21),
(23, 31, 22),
(24, 32, 20),
(25, 32, 21),
(26, 32, 24);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', '25f9e794323b453885f5181f1b624d0b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id` int(11) NOT NULL,
  `tenbaiviet` varchar(255) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `noidung` longtext NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id`, `tenbaiviet`, `tomtat`, `noidung`, `id_danhmuc`, `tinhtrang`, `hinhanh`) VALUES
(7, 'Luffy đánh PhuLe', '<p>PhuLe-Tokuda</p>\r\n', '<p>Luffy, vị thuyền trưởng của băng hải tặc Mũ Rơm, đang t&igrave;m kiếm một vi&ecirc;n kẹo khổng lồ m&agrave; legend cho biết n&oacute; được giữ bởi một hải quỷ đầy sức mạnh tại h&ograve;n đảo xa x&ocirc;i &quot;Đảo Ngọt Ng&agrave;o&quot;. Tr&ecirc;n h&agrave;nh tr&igrave;nh, hắn v&agrave; đồng đội đ&atilde; phải đối mặt với nhiều thử th&aacute;ch, nhưng niềm tin v&agrave; quyết t&acirc;m của họ kh&ocirc;ng bao giờ phai mờ.</p>\r\n\r\n<p>Cuối c&ugrave;ng, họ đ&atilde; đến được đến đảo v&agrave; phải đương đầu với PhuLe, một hải quỷ đầy sức mạnh v&agrave; tay tr&ugrave;m của h&ograve;n đảo. PhuLe đ&atilde; biến h&ograve;n đảo n&agrave;y th&agrave;nh một nơi đầy rẫy c&aacute;c thử th&aacute;ch nguy hiểm, nhằm bảo vệ vi&ecirc;n kẹo khổng lồ của m&igrave;nh.</p>\r\n\r\n<p>Luffy kh&ocirc;ng ngần ngại tiến về ph&iacute;a PhuLe, sẵn s&agrave;ng chiến đấu để đạt được mục ti&ecirc;u của m&igrave;nh. Trận đấu giữa Luffy v&agrave; PhuLe bắt đầu, với cả hai ph&aacute;t ra những c&uacute; đấm v&agrave; chi&ecirc;u thức đầy sức mạnh.</p>\r\n\r\n<p>D&ugrave; PhuLe c&oacute; sức mạnh v&ocirc; c&ugrave;ng lớn, nhưng Luffy kh&ocirc;ng bao giờ từ bỏ. Với sự quyết t&acirc;m v&agrave; tinh thần chiến đấu bất khuất, Luffy đ&atilde; vượt qua mọi thử th&aacute;ch v&agrave; chiến thắng PhuLe.</p>\r\n\r\n<p>Sau khi đ&aacute;nh bại được PhuLe, Luffy v&agrave; đồng đội của m&igrave;nh đ&atilde; thu được vi&ecirc;n kẹo khổng lồ, v&agrave; họ tiếp tục cuộc h&agrave;nh tr&igrave;nh của m&igrave;nh, chinh phục những thử th&aacute;ch mới v&agrave; gặp gỡ những người bạn mới tr&ecirc;n biển rộng lớn.</p>\r\n', 7, 1, '1710227805_423619601_2512751495570843_203765653645746335_n (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) NOT NULL,
  `cart_payment` varchar(11) NOT NULL,
  `cart_shipping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`, `cart_payment`, `cart_shipping`) VALUES
(87, 15, '3806', 0, '2023-12-04 19:52:29', 'tienmat', 6),
(88, 15, '2114', 0, '2023-12-05 22:25:37', 'tienmat', 6),
(89, 15, '6317', 0, '2023-12-06 09:51:43', 'tienmat', 6),
(90, 16, '7726', 0, '2024-01-22 13:13:47', 'tienmat', 7),
(91, 16, '7510', 0, '2024-01-22 13:16:43', 'tienmat', 7),
(92, 16, '9784', 0, '2024-01-23 13:35:57', 'tienmat', 7),
(93, 20, '6629', 0, '2024-04-02 13:55:37', 'tienmat', 10),
(94, 21, '783', 0, '2024-04-02 15:17:08', 'tienmat', 11),
(95, 19, '6805', 0, '2024-04-02 15:50:11', 'tienmat', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(68, '4901', 12, 1),
(69, '4901', 10, 1),
(70, '1649', 12, 1),
(71, '6462', 12, 1),
(72, '5873', 12, 1),
(73, '1832', 12, 1),
(74, '6511', 43, 1),
(75, '5918', 43, 1),
(76, '5918', 39, 1),
(77, '8314', 43, 1),
(78, '8314', 39, 1),
(79, '9941', 43, 1),
(80, '5377', 33, 1),
(81, '9675', 33, 1),
(82, '9675', 12, 1),
(83, '9865', 33, 1),
(84, '9865', 12, 1),
(85, '9865', 43, 1),
(86, '6738', 33, 1),
(87, '6738', 12, 1),
(88, '6738', 43, 1),
(89, '1458', 43, 1),
(90, '860', 42, 1),
(91, '3203', 42, 1),
(92, '3846', 42, 1),
(93, '2411', 42, 1),
(94, '2488', 42, 1),
(95, '1245', 42, 1),
(96, '6762', 42, 1),
(97, '8336', 42, 1),
(98, '8336', 11, 1),
(99, '1440', 42, 1),
(100, '1440', 11, 1),
(101, '3063', 42, 1),
(102, '3063', 11, 1),
(103, '2270', 42, 1),
(104, '2270', 11, 1),
(105, '2566', 34, 1),
(106, '2688', 34, 1),
(107, '8117', 34, 1),
(108, '6815', 34, 1),
(109, '4847', 34, 2),
(110, '4847', 41, 1),
(111, '7444', 34, 2),
(112, '7444', 41, 1),
(113, '7444', 43, 1),
(114, '3213', 34, 2),
(115, '3213', 41, 1),
(116, '3213', 43, 1),
(117, '3213', 42, 1),
(118, '3812', 43, 1),
(119, '2205', 43, 1),
(120, '2407', 42, 1),
(121, '3355', 42, 1),
(122, '3806', 42, 1),
(123, '2114', 43, 1),
(124, '6317', 43, 1),
(125, '6317', 42, 1),
(126, '7726', 43, 1),
(127, '7510', 42, 1),
(128, '9784', 43, 2),
(129, '6629', 39, 1),
(130, '6629', 43, 1),
(131, '783', 33, 3),
(132, '6805', 33, 3),
(133, '6805', 35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`, `role_id`) VALUES
(15, 'Nguyễn Quang Nhật', 'nqnhatdz008@gmail.com', 'D2 Cư Xá Đồng Tiến, phường 14, quận 10', '25f9e794323b453885f5181f1b624d0b', '0948577175', 29),
(16, 'Nguyễn Quang Nhật', 'quangnhatdz008@gmail.com', 'D2 Cư Xá Đồng Tiến, phường 14, quận 10', 'e10adc3949ba59abbe56e057f20f883e', '0948577175', 29),
(18, 'Minh Nhật', 'minhnhat123@gmail.com', '123 xô viết nghệ tĩnh', 'e10adc3949ba59abbe56e057f20f883e', '0123456789', 29),
(19, 'Nguyễn Phan Minh Nhật', 'minhnhatnguyenphan1207@gmail.com', '159 abc', '42a87469192c67ce10bb1fefca6c77f7', '0938970465', 30),
(20, 'Trịnh Quang Long', 'longbede@gmail.com', '160 a', '25f9e794323b453885f5181f1b624d0b', '0123456789', 29),
(21, 'Nguyễn Văn A', 'minhnhat@gmail.com', '123 abc', '25d55ad283aa400af464c76d713c07ad', '03987456321', 29);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(6, 'Kính mát', 2),
(7, 'Túi đeo chéo', 1),
(8, 'Túi bao tử', 2),
(9, 'Túi tote', 4),
(10, 'Nón', 5),
(11, 'Balo. Túi du lịch', 6),
(12, 'abc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmucbaiviet`
--

CREATE TABLE `tbl_danhmucbaiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tendanhmuc_baiviet` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_danhmucbaiviet`
--

INSERT INTO `tbl_danhmucbaiviet` (`id_baiviet`, `tendanhmuc_baiviet`, `thutu`) VALUES
(6, 'ai mà biết', 2),
(7, 'One Piece chap 1090', 0),
(9, 'One Piece chap 1091', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id` int(11) NOT NULL,
  `thongtinlienhe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id`, `thongtinlienhe`) VALUES
(1, '<h3>★ NEWLOOK.FASHION ★</h3>\r\n\r\n<h3>- Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận B&igrave;nh Thạnh</h3>\r\n\r\n<h3>- Hotline: 0908.808.501</h3>\r\n\r\n<p>H&atilde;y li&ecirc;n hệ với Shop khi bạn c&oacute; vấn đề hoặc thắc mắc nh&eacute;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_momo`
--

CREATE TABLE `tbl_momo` (
  `id_momo` int(11) NOT NULL,
  `partner_code` varchar(50) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `order_info` varchar(50) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `trans_id` varchar(50) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_momo`
--

INSERT INTO `tbl_momo` (`id_momo`, `partner_code`, `order_id`, `amount`, `order_info`, `order_type`, `trans_id`, `pay_type`, `code_cart`) VALUES
(6, 'MOMOBKUN20180529', '1701673940', '249000', 'Thanh toán qua ATM', 'momo_wallet', '3105725161', 'napas', '6762'),
(7, 'MOMOBKUN20180529', '1701673940', '249000', 'Thanh toán qua ATM', 'momo_wallet', '3105725161', 'napas', '8336'),
(8, 'MOMOBKUN20180529', '1701673940', '249000', 'Thanh toán qua ATM', 'momo_wallet', '3105725161', 'napas', '1440'),
(9, 'MOMOBKUN20180529', '1701673940', '249000', 'Thanh toán qua ATM', 'momo_wallet', '3105725161', 'napas', '3063'),
(10, 'MOMOBKUN20180529', '1701673940', '249000', 'Thanh toán qua ATM', 'momo_wallet', '3105725161', 'napas', '2270'),
(11, 'MOMOBKUN20180529', '1701677723', '149000', 'Thanh toán qua ATM', 'momo_wallet', '3105666366', 'napas', '2566');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(20, 'TÚI ĐEO CHÉO NAM NỮ', '001', '99000', 14, '1700622610_3501ede25ffb3b026cdd030f7a202621.jpg', '<p>- Size: 18 x 13.5 x 4.5cm ( chiều d&agrave;i d&acirc;y 125cm ) - Chất liệu: vải d&ugrave; - M&agrave;u sắc: m&agrave;u đen</p>\r\n', '<p>Một chiếc t&uacute;i gọn nhẹ đơn giản m&agrave;u sắc đen trung t&iacute;nh...Nam Nữ th&iacute;ch tối giản l&agrave; đeo được hết nha...Nhỏ nhỏ nh&igrave;n cưng lắm lu&ocirc;n ^.^ . V&igrave; d&acirc;y đeo th&aacute;o ra được n&ecirc;n bạn c&oacute; thể l&agrave;m t&uacute;i cầm tay cũng okay lắm lu&ocirc;n ! --- - Size: 18 x 13.5 x 4.5cm ( chiều d&agrave;i d&acirc;y 125cm ) - Chất liệu: vải d&ugrave; - M&agrave;u sắc: m&agrave;u đen --- Lưu &yacute;: Sản phẩm được chụp tr&ecirc;n b&igrave;a trắng n&ecirc;n h&igrave;nh sao h&agrave;ng 100% giống vậy nh&eacute; ! ⚠️ N&Oacute;I KH&Ocirc;NG VỚI H&Igrave;NH GIẢ ⚠️ --- ★ NEWLOOK.FASHION ★ &bull; Địa chỉ: 23/13A Nguyễn Văn Lạc, P.21, Q.B&igrave;nh Thạnh &bull; Hotline: 0908 808 501 &bull; Facebook: Newlook.Fashion2012 &bull; Shopee: Newlook.Fashion</p>\r\n', 0, 7),
(21, 'TÚI CHÉO DA TRƠN', '002', '299000', 100, '1700623343_c2e3db15c274c97f9a33f92735ca7d0a.jpg', '<p>- Size : 22 x 15 x 7.5cm</p>\r\n\r\n<p>(1 ngăn ngo&agrave;i nắp gập + 1 ngăn lớn ch&iacute;nh + 1 ngăn nhỏ d&acirc;y k&eacute;o sau t&uacute;i)</p>\r\n\r\n<p>- Chất liệu: da tổng hợp mềm mịn đẹp</p>\r\n\r\n<p>- M&agrave;u sắc: Đen</p>\r\n', '<p>T&uacute;i với thiết kế đơn giản ph&ugrave; hợp cho cả Nam v&agrave; Nữ lu&ocirc;n ạ. Bạn n&agrave;o th&iacute;ch một chiếc t&uacute;i full đen th&igrave; đ&acirc;y l&agrave; sự lựa chọn ho&agrave;n hảo nh&eacute; ... đẹp từ chất da, c&aacute;i kho&aacute;, c&aacute;i d&acirc;y đeo !</p>\r\n\r\n<p>---</p>\r\n\r\n<p>- Size :</p>\r\n\r\n<p>+ Kho&aacute; nhựa : 22 x 15 x 7.5cm</p>\r\n\r\n<p>+ Kho&aacute; kim loại : 21 x 14 x 7cm</p>\r\n\r\n<p>(1 ngăn ngo&agrave;i nắp gập + 1 ngăn lớn ch&iacute;nh + 1 ngăn nhỏ d&acirc;y k&eacute;o sau t&uacute;i)</p>\r\n\r\n<p>- Chất liệu: da tổng hợp mềm mịn đẹp</p>\r\n\r\n<p>- M&agrave;u sắc: Đen</p>\r\n\r\n<p>---</p>\r\n\r\n<p>Lưu &yacute;: Sản phẩm được chụp tr&ecirc;n b&igrave;a trắng n&ecirc;n h&igrave;nh sao h&agrave;ng 100% giống vậy nh&eacute; !</p>\r\n\r\n<p>---</p>\r\n\r\n<p>★ NEWLOOK.FASHION ★</p>\r\n\r\n<p>&bull; Địa chỉ: 23/13A Nguyễn Văn Lạc, P.21, Q.B&igrave;nh Thạnh</p>\r\n\r\n<p>&bull; Hotline: 0908 808 501</p>\r\n\r\n<p>&bull; Facebook: Newlook.Fashion2012</p>\r\n\r\n<p>&bull; Shopee: Newlook.Fashion</p>\r\n', 1, 7),
(22, 'TÚI ĐEO CHÉO DA TRƠN ĐEN BÓNG', '003', '349000', 100, '1700623532_vn-11134207-7qukw-lil6695m5hw2e8.jpg', '<p>- Size: 22 x 15 x 7cm ( 2 ngăn lớn ch&iacute;nh v&agrave; 2 ngăn nhỏ phụ)</p>\r\n\r\n<p>- Chất liệu: da PU mềm mịn đẹp</p>\r\n\r\n<p>- M&agrave;u sắc: Đen</p>\r\n', '<p>T&uacute;i với thiết kế đơn giản ph&ugrave; hợp cho cả Nam v&agrave; Nữ lu&ocirc;n ạ...!</p>\r\n\r\n<p>- Size: 22 x 15 x 7cm ( 2 ngăn lớn ch&iacute;nh v&agrave; 2 ngăn nhỏ phụ)</p>\r\n\r\n<p>- Chất liệu: da PU mềm mịn đẹp</p>\r\n\r\n<p>- M&agrave;u sắc: Đen</p>\r\n\r\n<p>&mdash;&mdash;</p>\r\n\r\n<p>Lưu &yacute;: Sản phẩm được chụp tr&ecirc;n b&igrave;a trắng n&ecirc;n h&igrave;nh sao h&agrave;ng 100% giống vậy nh&eacute; !</p>\r\n\r\n<p>&mdash;&mdash;</p>\r\n\r\n<p>★ NEWLOOK.FASHION ★</p>\r\n\r\n<p>&bull; Địa chỉ: 23/13A Nguyễn Văn Lạc, P.21, Q.B&igrave;nh Thạnh</p>\r\n\r\n<p>&bull; Hotline: 0908 808 501</p>\r\n\r\n<p>&bull; Facebook: Newlook.Fashion2012</p>\r\n\r\n<p>&bull; Shopee: Newlook.Fashion</p>\r\n', 1, 7),
(23, 'TÚI ĐEO CHÉO NAM NỮ MÀU XÁM XI-MĂNG', '004', '279000', 100, '1700623635_9482d65fb3b0e58c091855f7a8b0a8e2.jpg', '<p>Size: 21 x 14 x 6.5cm</p>\r\n\r\n<p>( gồm 1 ngăn lớn + 2 ngăn phụ )</p>\r\n\r\n<p>- Chất liệu: da PU ( da c&ocirc;ng nghiệp nh&acirc;n tạo )</p>\r\n\r\n<p>- M&agrave;u sắc: x&aacute;m xi măng</p>\r\n', '<p>Th&iacute;ch em t&uacute;i n&agrave;y v&igrave; c&aacute;i m&agrave;u x&aacute;m giống chất xi-măng rất l&agrave; thời trang lu&ocirc;n...n&agrave;y x&agrave;i l&acirc;u xuống m&agrave;u th&igrave; th&agrave;nh x&aacute;m đậm cũng vẫn đẹp như thường...hihi</p>\r\n\r\n<p>- Size:</p>\r\n\r\n<p>&bull; Kho&aacute; kim loại : 21 x 14 x 6.5cm</p>\r\n\r\n<p>&bull; Kho&aacute; nhựa : 22 x 15 x 7cm</p>\r\n\r\n<p>( gồm 1 ngăn lớn + 2 ngăn phụ )</p>\r\n\r\n<p>- Chất liệu: da PU ( da c&ocirc;ng nghiệp nh&acirc;n tạo )</p>\r\n\r\n<p>- M&agrave;u sắc: x&aacute;m xi măng</p>\r\n\r\n<p>&mdash;&mdash;</p>\r\n\r\n<p>Lưu &yacute;: Sản phẩm được chụp tr&ecirc;n b&igrave;a trắng n&ecirc;n h&igrave;nh sao h&agrave;ng 100% giống vậy nh&eacute; !</p>\r\n\r\n<p>&mdash;&mdash;</p>\r\n\r\n<p>★ NEWLOOK.FASHION ★</p>\r\n\r\n<p>&bull; Địa chỉ: 23/13A Nguyễn Văn Lạc, P.21, Q.B&igrave;nh Thạnh</p>\r\n\r\n<p>&bull; Hotline: 0908 808 501</p>\r\n\r\n<p>&bull; Facebook: Newlook.Fashion2012</p>\r\n\r\n<p>&bull; Shopee: Newlook.Fashion</p>\r\n', 1, 7),
(24, 'TÚI ĐEO CHÉO NAM NỮ DA PU ĐEN TRƠN', '005', '299000', 100, '1700623811_75284b50d95cffd6234d2daa98ff8404.jpg', '<p>- Size: 25 x 16 x 7cm</p>\r\n\r\n<p>- Chất liệu: da PU d&agrave;y dặn chắc chắn</p>\r\n\r\n<p>- M&agrave;u sắc: Đen</p>\r\n', '<p>Kiểu d&aacute;ng rất rất rất đơn giản lu&ocirc;n...nh&igrave;n chung anh chị n&agrave;o th&iacute;ch tối giản chắc th&iacute;ch em t&uacute;i n&agrave;y...m&agrave;u đen lại dễ phối đồ hen ^.^</p>\r\n\r\n<p>---</p>\r\n\r\n<p>- Size: 25 x 16 x 7cm</p>\r\n\r\n<p>- Chất liệu: da PU d&agrave;y dặn chắc chắn</p>\r\n\r\n<p>- M&agrave;u sắc: Đen</p>\r\n\r\n<p>&mdash;&mdash;</p>\r\n\r\n<p>Lưu &yacute;: Sản phẩm được chụp tr&ecirc;n b&igrave;a trắng n&ecirc;n h&igrave;nh sao h&agrave;ng 100% giống vậy nh&eacute; !</p>\r\n\r\n<p>&mdash;&mdash;</p>\r\n\r\n<p>★ NEWLOOK.FASHION ★</p>\r\n\r\n<p>&bull; Địa chỉ: 23/13A Nguyễn Văn Lạc, P.21, Q.B&igrave;nh Thạnh</p>\r\n\r\n<p>&bull; Hotline: 0908 808 501</p>\r\n\r\n<p>&bull; Facebook: Newlook.Fashion2012</p>\r\n\r\n<p>&bull; Shopee: Newlook.Fashion</p>\r\n', 1, 7),
(25, 'TÚI ĐEO CHÉO DẠNG BẦU DA CARO', '006', '249000', 100, '1700624436_vn-11134207-7r98o-llacv6fpyhtid8.jpg', '<p>TH&Ocirc;NG TIN SẢN PHẨM</p>\r\n\r\n<p>- K&iacute;ch thước : 26 x 14 x 3cm ( ngang x cao x rộng )</p>\r\n\r\n<p>- M&agrave;u sắc : đen phối x&aacute;m</p>\r\n\r\n<p>- Chất liệu : da tổng hợp ( da PU ) loại tốt</p>\r\n\r\n<p>- Thiết kế : dạng bầu tr&ograve;n</p>\r\n', '<p>HƯỚNG DẪN BẢO QUẢN</p>\r\n\r\n<p>- Tr&aacute;nh tiếp x&uacute;c &aacute;nh nắng trực tiếp hoặc để trong cốp xe qu&aacute; n&oacute;ng.</p>\r\n\r\n<p>- Kh&ocirc;ng d&ugrave;ng h&oacute;a chất mạnh để tẩy rửa</p>\r\n\r\n<p>- Khi sản phẩm bị bẩn bạn chỉ cần d&ugrave;ng giẻ ẩm lau vết bẩn v&agrave; để v&iacute; ở nơi tho&aacute;ng m&aacute;t</p>\r\n\r\n<p>- Hạn chế cất trong tủ v&igrave; đặc t&iacute;nh da n&agrave;y c&agrave;ng x&agrave;i th&igrave; c&agrave;ng kh&oacute; bong ch&oacute;c.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>■ CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG</p>\r\n\r\n<p>- Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi</p>\r\n\r\n<p>- Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc )</p>\r\n\r\n<p>- Giao h&agrave;ng to&agrave;n quốc từ 2 - 4 ng&agrave;y t&ugrave;y khu vực</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>■ CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH</p>\r\n\r\n<p>- Hỗ trợ sửa chữa c&aacute;c lỗi kh&oacute;a, đường may, d&acirc;y k&eacute;o, ...</p>\r\n\r\n<p>- Kh&ocirc;ng bảo h&agrave;nh về da</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>★ NEWLOOK.FASHION ★</p>\r\n\r\n<p>- Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận B&igrave;nh Thạnh</p>\r\n\r\n<p>- Hotline: 0908.808.501</p>\r\n', 1, 8),
(26, 'TÚI BAO TỬ NY', '007', '349000', 100, '1700624676_71a413d2b394f602fadf1fa53e471da3.jpg', '<p>- Size: + T&uacute;i lớn : 30 x 13 x 7cm ( 1 ngắn lớn + 1 ngăn trước ) + T&uacute;i nhỏ : 10 x 6.5 x 2cm - Chất liệu: vải polyester dệt chi tiết, chữ th&ecirc;u nổi độ ho&agrave;n thiện cao. - M&agrave;u sắc: xanh dương ( tỉ lệ đạm nhạt c&oacute; thể thay đổi nhẹ do &aacute;nh s&aacute;ng l&uacute;c chụp h&igrave;nh )</p>\r\n', '<p>- Kiểu d&aacute;ng t&uacute;i bao tử kết hợp đeo ch&eacute;o hai ngăn thời trang - Chữ th&ecirc;u nổi chạm v&agrave;o th&iacute;ch ngay - Họa tiết chữ độc đ&aacute;o - Chất vải cao cấp d&agrave;y dặn - D&acirc;y đeo vải c&oacute; thể thay đổi k&iacute;ch thước - Kh&oacute;a k&eacute;o zip tiện lợi - Gam m&agrave;u hiện đại dễ d&agrave;ng phối với nhiều trang phục v&agrave; phụ kiện --- - Size: + T&uacute;i lớn : 30 x 13 x 7cm ( 1 ngắn lớn + 1 ngăn trước ) + T&uacute;i nhỏ : 10 x 6.5 x 2cm - Chất liệu: vải polyester dệt chi tiết, chữ th&ecirc;u nổi độ ho&agrave;n thiện cao. - M&agrave;u sắc: xanh dương ( tỉ lệ đạm nhạt c&oacute; thể thay đổi nhẹ do &aacute;nh s&aacute;ng l&uacute;c chụp h&igrave;nh ) &mdash;&mdash; Lưu &yacute;: cam kết 100% sản phẩm giống m&ocirc; tả &mdash;&mdash; ★ NEWLOOK.FASHION ★ &bull; Địa chỉ: 23/13A Nguyễn Văn Lạc, P.21, Q.B&igrave;nh Thạnh &bull; Hotline: 0908 808 501 &bull; Facebook: Newlook.Fashion2012 &bull; Shopee: Newlook.Fashion</p>\r\n', 1, 8),
(27, 'TÚI BAO TỬ ĐEO HÔNG', '008', '249000', 100, '1700624781_vn-11134207-7r98o-ll30z1v1ypqjc8.jpg', '<p>K&iacute;ch thước : 26 x 13 x 6cm ( ngang x cao x rộng )</p>\r\n\r\n<p>- M&agrave;u sắc : đen</p>\r\n\r\n<p>- Chất liệu : vải d&ugrave; chống thấm nhẹ</p>\r\n', '<p>TH&Ocirc;NG TIN SẢN PHẨM</p>\r\n\r\n<p>- K&iacute;ch thước : 26 x 13 x 6cm ( ngang x cao x rộng )</p>\r\n\r\n<p>- M&agrave;u sắc : đen</p>\r\n\r\n<p>- Chất liệu : vải d&ugrave; chống thấm nhẹ</p>\r\n\r\n<p>- Thiết kế :</p>\r\n\r\n<p>+ T&uacute;i được l&agrave;m bằng chất liệu chất lượng h&agrave;ng đầu. Từ polyester v&agrave; PU gi&uacute;p cho chiếc t&uacute;i n&agrave;y bền hơn nhiều v&agrave; c&oacute; cảm gi&aacute;c mềm mại khi chạm tay v&agrave;o.</p>\r\n\r\n<p>+ Nhiều ngăn ri&ecirc;ng biệt, đủ để đựng điện thoại, hộ chiếu, v&eacute;, v&iacute; nhỏ hoặc c&aacute;c vật dụng nhỏ kh&aacute;c. Bạn sẽ kh&ocirc;ng bao giờ cảm thấy cồng kềnh khi sử dụng chiếc t&uacute;i n&agrave;y</p>\r\n\r\n<p>+ T&uacute;i đeo thắt lưng chống nước khi bị rơi xuống nước, kh&ocirc;ng được ng&acirc;m trong nước</p>\r\n\r\n<p>+ D&acirc;y đeo c&oacute; thể điều chỉnh, ph&ugrave; hợp để sử dụng h&agrave;ng ng&agrave;y v&agrave; khi đi du lịch.</p>\r\n\r\n<p>+ Một ngăn ch&iacute;nh c&oacute; kh&oacute;a k&eacute;o k&eacute;p, hai t&uacute;i phụ ph&iacute;a trước. C&oacute; th&ecirc;m một t&uacute;i c&oacute; kh&oacute;a k&eacute;o ẩn ph&iacute;a sau c&oacute; thể giữ an to&agrave;n cho những vật dụng của bạn, chẳng hạn như thẻ ID, tiền mặt, thẻ t&iacute;n dụng, bằng l&aacute;i xe, v.v.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG</p>\r\n\r\n<p>- Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi</p>\r\n\r\n<p>- Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc )</p>\r\n\r\n<p>- Giao h&agrave;ng to&agrave;n quốc từ 2 - 4 ng&agrave;y t&ugrave;y khu vực</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH</p>\r\n\r\n<p>- Hỗ trợ sửa chữa c&aacute;c lỗi kh&oacute;a, đường may, d&acirc;y k&eacute;o, ...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>★ NEWLOOK.FASHION ★</p>\r\n\r\n<p>- Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận B&igrave;nh Thạnh</p>\r\n\r\n<p>- Hotline: 0908.808.501</p>\r\n', 1, 8),
(28, 'TÚI BAO TỬ ĐEO HÔNG NHỎ GỌN', '009', '149000', 100, '1700625083_a9f6100f9398a26787d5a21b2bbd55f7.jpg', '<p>- K&iacute;ch thước : 26 x 12 x 6cm - Chất liệu : da tổng hợp, hoặc vải d&ugrave; polyester - M&agrave;u sắc : Đen</p>\r\n', '<p>TH&Ocirc;NG TIN SẢN PHẨM - Thiết kế : trẻ trung đơn giản, ph&ugrave; hợp cho Nam v&agrave; Nữ, trọng lượng t&uacute;i nhẹ đeo thoải m&aacute;i trong mọi hoạt động, c&oacute; thể đeo ch&eacute;o hoặc đeo ngang h&ocirc;ng. T&uacute;i bảo tử nhỏ gọn tiện lợi, đựng c&aacute;c vật dụng c&aacute; nh&acirc;n hằng ng&agrave;y, th&iacute;ch hợp đi l&agrave;m hoặc khi đi chơi. - K&iacute;ch thước : 26 x 12 x 6cm - Chất liệu : da tổng hợp, hoặc vải d&ugrave; polyester - M&agrave;u sắc : Đen CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG - Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi - Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc ) - Giao h&agrave;ng to&agrave;n quốc từ 2 - 5 ng&agrave;y t&ugrave;y khu vực CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH - Hỗ trợ sửa chữa c&aacute;c lỗi kh&oacute;a, đường may, d&acirc;y k&eacute;o, ... ★ NEWLOOK.FASHION ★ &bull; Địa chỉ: 23/13A Nguyễn Văn Lạc, P.21, Q.B&igrave;nh Thạnh &bull; Hotline: 0908 808 501 &bull; Facebook: Newlook.Fashion2012 &bull; Shopee: Newlook.Fashion</p>\r\n', 1, 8),
(29, 'TÚI TOTE ĐEO VAI DA TỔNG', '010', '249000', 100, '1700626005_vn-11134207-7qukw-livbci9vsz4i14.jpg', '<p>► TH&Ocirc;NG TIN SẢN PHẨM</p>\r\n\r\n<p>- Thiết kế : kiểu d&aacute;ng đơn giản nổi bật chữ LOVE PEACE m&agrave;u trắng, t&uacute;i kh&ocirc;ng c&oacute; d&acirc;y d&agrave;i đeo ch&eacute;o, chỉ x&aacute;ch tay hoặc đeo vai, phom t&uacute;i h&igrave;nh như nhật</p>\r\n\r\n<p>- K&iacute;ch thước : 32 x 20 x rộng 9cm ( cao x ngang x rộng )</p>\r\n\r\n<p>- M&agrave;u sắc : m&agrave;u đen hơi b&oacute;ng nhẹ tr&ocirc;ng rất sang chảnh</p>\r\n\r\n<p>- Chất liệu : sử dụng da PU ( da tổng hợp ) chất lượng kh&aacute;c biệt so với da PU th&ocirc;ng thường , chống nước nhẹ.</p>\r\n\r\n<div class=\"ddict_btn\" style=\"top: 174px; left: 848.182px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n', '<p>► HƯỚNG DẪN BẢO QUẢN</p>\r\n\r\n<p>Một trong những ưu điểm của da PU l&agrave; bền đẹp v&agrave; dễ d&agrave;ng l&agrave;m sạch. Việc bảo quản rất đơn giản, bạn chỉ cần lưu &yacute; một số mẹo sau th&igrave; đảm bảo chiếc t&uacute;i của bạn lu&ocirc;n đẹp m&atilde;i theo thời gian:</p>\r\n\r\n<p>- Tr&aacute;nh tiếp x&uacute;c &aacute;nh nắng trực tiếp hoặc để trong cốp xe qu&aacute; n&oacute;ng.</p>\r\n\r\n<p>- Kh&ocirc;ng d&ugrave;ng h&oacute;a chất mạnh để tẩy rửa</p>\r\n\r\n<p>- Khi sản phẩm bị bẩn bạn chỉ cần d&ugrave;ng giẻ ẩm lau vết bẩn v&agrave; để v&iacute; ở nơi tho&aacute;ng m&aacute;t</p>\r\n\r\n<p>- Hạn chế cất trong tủ v&igrave; đặc t&iacute;nh da n&agrave;y c&agrave;ng x&agrave;i th&igrave; c&agrave;ng kh&oacute; bong ch&oacute;c.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG</p>\r\n\r\n<p>- Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi</p>\r\n\r\n<p>- Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc )</p>\r\n\r\n<p>- Giao h&agrave;ng to&agrave;n quốc từ 2 - 4 ng&agrave;y t&ugrave;y khu vực</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH</p>\r\n\r\n<p>- Hỗ trợ sửa chữa c&aacute;c lỗi kh&oacute;a, đường may, d&acirc;y k&eacute;o, ...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>★ NEWLOOK.FASHION ★</p>\r\n\r\n<p>- Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận B&igrave;nh Thạnh</p>\r\n\r\n<p>- Hotline: 0908.808.501</p>\r\n', 1, 9),
(30, 'TÚI TOTE VẢI LƯỚI', '011', '189000', 100, '1700626055_sg-11134201-22120-a9qzaz532kkvd3.jpg', '<p>► TH&Ocirc;NG TIN SẢN PHẨM</p>\r\n\r\n<p>- Thiết kế : t&uacute;i thiết kế dạng chữ nhật, k&iacute;ch thước si&ecirc;u to, l&agrave;m bằng vải lưới nhuyễn cao cấp đứng t&uacute;i trong suốt m&agrave;u đen in chữ trắng nổi bật, c&oacute; kho&aacute; h&iacute;t nam ch&acirc;m.</p>\r\n\r\n<p>- K&iacute;ch thước : 49 x 37 x 15cm ( ngang x cao x rộng )</p>\r\n\r\n<p>- Chất liệu : vải lưới nhuyễn cao cấp, đi viền vải d&ugrave; nylong</p>\r\n', '<p>► CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG</p>\r\n\r\n<p>- Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi</p>\r\n\r\n<p>- Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc )</p>\r\n\r\n<p>- Giao h&agrave;ng to&agrave;n quốc từ 2 - 4 ng&agrave;y t&ugrave;y khu vực</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH</p>\r\n\r\n<p>- Hỗ trợ sửa chữa c&aacute;c lỗi kh&oacute;a, đường may, d&acirc;y k&eacute;o, ...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>★ NEWLOOK.FASHION ★</p>\r\n\r\n<p>- Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận B&igrave;nh Thạnh</p>\r\n', 1, 9),
(31, 'TÚI TOTE VẢI NYLON', '012', '299000', 100, '1700626120_vn-11134207-7qukw-lil95yrdo3kcd6.jpg', '<p>► TH&Ocirc;NG TIN SẢN PHẨM</p>\r\n\r\n<p>T&uacute;i kh&aacute; to nhưng rất nhẹ, kiểu d&aacute;ng hot trend, m&agrave;u trang sang trọng, dễ phối đồ, x&aacute;ch tay hoặc đeo ch&eacute;o. Ph&iacute;a sau t&uacute;i c&oacute; th&ecirc;m 1 ngăn nhỏ tiện &iacute;ch</p>\r\n\r\n<p>- K&iacute;ch thước : 37 x 33 x 21cm ( d&agrave;i x ngang x rộng )</p>\r\n\r\n<p>- M&agrave;u sắc : m&agrave;u đen b&oacute;ng nhẹ sang trọng</p>\r\n\r\n<p>- Chất liệu : vải nylon</p>\r\n', '<p>► HƯỚNG DẪN BẢO QUẢN</p>\r\n\r\n<p>Việc bảo quản rất đơn giản, bạn chỉ cần lưu &yacute; một số mẹo sau th&igrave; đảm bảo chiếc t&uacute;i của bạn lu&ocirc;n đẹp m&atilde;i theo thời gian:</p>\r\n\r\n<p>- Tr&aacute;nh tiếp x&uacute;c &aacute;nh nắng trực tiếp hoặc để trong cốp xe qu&aacute; n&oacute;ng.</p>\r\n\r\n<p>- Kh&ocirc;ng d&ugrave;ng h&oacute;a chất mạnh để tẩy rửa</p>\r\n\r\n<p>- Khi sản phẩm bị bẩn bạn chỉ cần d&ugrave;ng giẻ ẩm lau vết bẩn v&agrave; để v&iacute; ở nơi tho&aacute;ng m&aacute;t</p>\r\n\r\n<p>- Hạn chế cất trong tủ v&igrave; đặc t&iacute;nh da n&agrave;y c&agrave;ng x&agrave;i th&igrave; c&agrave;ng kh&oacute; bong ch&oacute;c.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG</p>\r\n\r\n<p>- Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi</p>\r\n\r\n<p>- Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc )</p>\r\n\r\n<p>- Giao h&agrave;ng to&agrave;n quốc từ 2 - 4 ng&agrave;y t&ugrave;y khu vực</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH</p>\r\n\r\n<p>- Hỗ trợ sửa chữa c&aacute;c lỗi kh&oacute;a, đường may, d&acirc;y k&eacute;o, ...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>★ NEWLOOK.FASHION ★</p>\r\n\r\n<p>- Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận B&igrave;nh Thạnh</p>\r\n\r\n<p>- Hotline: 0908.808.501</p>\r\n', 1, 9),
(32, 'TÚI VẢI BỐ CANVAS', '013', '349000', 100, '1700626197_ea034739859c1188c4cc6ec68c114b69.jpg', '<p>► TH&Ocirc;NG TIN SẢN PHẨM - Thiết kế : t&uacute;i dạng h&igrave;nh chữ nhật, kh&ocirc;ng gian t&uacute;i rộng, chất vải bố d&agrave;y dặn cao cấp, m&agrave;u đen phối chữ trắng THE TOTE BAG thời trang, d&acirc;y đeo vải d&ugrave; th&aacute;o rời, tuy phom t&uacute;i mềm nhưng vẫn đứng t&uacute;i - K&iacute;ch thước : cao 25cm x ngang 31cm x rộng 17cm - M&agrave;u sắc : đen in chữ trắng - Chất liệu : vải canvas hay c&ograve;n gọi l&agrave; vải bố</p>\r\n', '<p>► HƯỚNG DẪN BẢO QUẢN Một số lưu &yacute; bảo quản t&uacute;i canvas vải bố 1.KH&Ocirc;NG SẤY T&Uacute;I : L&agrave;m kh&ocirc; t&uacute;i Canvas bằng c&aacute;ch sấy dưới nhiệt độ cao sẽ khiến cho t&uacute;i dễ bị cứng, r&ograve;n, từ đ&oacute; khiến t&uacute;i mau hỏng. H&atilde;y phơi t&uacute;i dưới &aacute;nh s&aacute;ng mặt trời tự nhi&ecirc;n, hoặc những kh&ocirc;ng gian rộng, cao v&agrave; h&uacute;t gi&oacute; để t&uacute;i lu&ocirc;n được mềm mại v&agrave; tr&aacute;nh bị mốc bẩn. 2KH&Ocirc;NG GẤP T&Uacute;I : C&aacute;c nếp gấp l&acirc;u ng&agrave;y sẽ khiến cho chất lượng vải kh&ocirc;ng c&ograve;n giữ được chất lượng như ban đầu v&agrave; g&acirc;y mất form t&uacute;i. N&ecirc;n đặt những chiếc t&uacute;i vải bố canvas ở nơi rộng r&atilde;i hoặc c&oacute; thể treo tr&ecirc;n tường, m&oacute;c treo quần &aacute;o hay tủ c&oacute; m&oacute;c treo để giữ cho những chiếc t&uacute;i kh&ocirc;ng bị cong v&ecirc;nh, bị gấp nếp. 3.KH&Ocirc;NG TREO T&Uacute;I NẶNG : Để qu&aacute; nhiều đồ trong t&uacute;i khi treo trong thời gian d&agrave;i sẽ khiến cho c&aacute;c đường chỉ t&uacute;i v&agrave; quai nhanh bị đứt v&agrave; r&aacute;ch chỉ. Bạn chỉ n&ecirc;n để những đồ d&ugrave;ng nhẹ nh&agrave;ng cần thiết tr&aacute;nh để những đồ qu&aacute; nặng v&agrave; n&ecirc;n lấy hết những vật nặng trong t&uacute;i ra ngo&agrave;i trước khi đeo t&uacute;i hoặc khi treo. 4. KH&Ocirc;NG GIẶT T&Uacute;I THƯỜNG XUY&Ecirc;N : Giặt thường xuy&ecirc;n sẽ l&agrave;m cho t&uacute;i nhanh ch&oacute;ng bị bạc m&agrave;u v&agrave; trở n&ecirc;n kh&ocirc;ng được đẹp mắt. Nếu t&uacute;i của c&oacute; vết bẩn th&igrave; thay v&igrave; nghĩ đến việc giặt t&uacute;i trước ti&ecirc;n th&igrave; bạn n&ecirc;n kiếm ngay một tờ giấy ướt hoặc t&igrave;m nơi c&oacute; nước sạch lau nhẹ l&ecirc;n bề mặt t&uacute;i xem sao nh&eacute;..Trong trường hợp vết bẩn cứng đầu bắt buộc phải giặt t&uacute;i th&igrave; h&atilde;y sử dụng nước lạnh v&agrave; x&agrave; ph&ograve;ng lo&atilde;ng để ng&acirc;m t&uacute;i. Tr&aacute;nh giặt t&uacute;i với nước n&oacute;ng l&agrave;m cho t&uacute;i bị bạc m&agrave;u. C&aacute;c thuốc tẩy c&oacute; chứa Clo cũng tuyệt đối kh&ocirc;ng n&ecirc;n sử dụng bởi n&oacute; sẽ l&agrave;m ảnh hưởng đến chất lượng của vải. 5. KH&Ocirc;NG GIẶT M&Aacute;Y GIẶT : Vệ sinh t&uacute;i vải canvas chỉ n&ecirc;n giặt bằng tay kh&ocirc;ng n&ecirc;n giặt bằng m&aacute;y v&igrave; giặt bằng m&aacute;y sẽ khiến cho t&uacute;i bị mất form t&uacute;i. B&ecirc;n cạnh đ&oacute; việc giặt t&uacute;i bằng m&aacute;y c&oacute; thể khiến những vết bẩn trong c&aacute;c kẽ t&uacute;i hoặc c&aacute;c nếp gấp của t&uacute;i kh&ocirc;ng thể l&agrave;m sạch ho&agrave;n to&agrave;n v&agrave; độ bền của t&uacute;i kh&ocirc;ng cao. ► CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG - Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi - Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc ) - Giao h&agrave;ng to&agrave;n quốc từ 2 - 4 ng&agrave;y t&ugrave;y khu vực ► CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH - Hỗ trợ sửa chữa c&aacute;c lỗi kh&oacute;a, đường may, d&acirc;y k&eacute;o, ... ★ NEWLOOK.FASHION ★ - Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận B&igrave;nh Thạnh - Hotline: 0908.808.501</p>\r\n', 1, 9),
(33, 'NÓN CHỮ B', '014', '169000', 100, '1700638339_vn-11134201-23030-oppefkbjhhov80.jpg', '<p>TH&Ocirc;NG TIN SẢN PHẨM</p>\r\n\r\n<p>+ Thiết kế :</p>\r\n\r\n<p>- Form d&aacute;ng chuẩn, chắc chắn</p>\r\n\r\n<p>- Thiết kế may th&ecirc;u tinh tế, sắc sảo v&agrave; thời trang</p>\r\n\r\n<p>- Phần mũi n&oacute;n &eacute;p cứng bo cong cứng c&aacute;p v&agrave; chắc chắn</p>\r\n\r\n<p>- Kiểu d&aacute;ng: ph&ugrave; hợp cả nam v&agrave; nữ. Đa phong c&aacute;ch, gọn nhẹ, năng động</p>\r\n\r\n<p>- Ph&iacute;a sau c&oacute; kh&oacute;a điều chỉnh gi&uacute;p ph&ugrave; hợp k&iacute;ch thước nhiều người</p>\r\n\r\n<p>- Ph&ugrave; hợp cho cả Nam v&agrave; Nữ</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>+ K&iacute;ch thước :</p>\r\n\r\n<p>- Chu vi n&oacute;n: 54 - 60cm</p>\r\n\r\n<p>- Độ d&agrave;i mũi n&oacute;n : 7cm</p>\r\n\r\n<p>- Độ s&acirc;u n&oacute;n t&iacute;nh từ đỉnh n&oacute;n tới ch&acirc;n n&oacute;n : 16cm</p>\r\n\r\n<p>- Chất liệu: vải nỉ c&oacute; g&acirc;n</p>\r\n\r\n<p>- Kh&oacute;a sau n&oacute;n : miếng d&aacute;n</p>\r\n', '<p>Ngo&agrave;i ra c&aacute;c Bạn c&ograve;n thắc mắc vấn đề g&igrave; cứ inbox trực tiếp cho m&igrave;nh nh&eacute; ... !</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► HƯỚNG DẪN BẢO QUẢN</p>\r\n\r\n<p>- Khi sản phẩm bị bẩn bạn chỉ cần d&ugrave;ng giẻ ẩm lau vết bẩn v&agrave; để n&oacute;n ở nơi tho&aacute;ng m&aacute;t</p>\r\n\r\n<p>- Hạn chế tối đa việc giặc n&oacute;n v&igrave; sẽ l&agrave;m tr&ocirc;i đi lớp keo tr&ecirc;n n&oacute;n dẫn tới việc n&oacute;n bị mất phom ... d&ugrave; bạn c&oacute; ủi lại đi chăng nữa th&igrave; n&oacute;n sẽ kh&ocirc;ng chuẩn phom như ban đầu</p>\r\n\r\n<p>- Kh&ocirc;ng d&ugrave;ng h&oacute;a chất mạnh để tẩy rửa</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG</p>\r\n\r\n<p>- Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi</p>\r\n\r\n<p>- Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc )</p>\r\n\r\n<p>- Giao h&agrave;ng to&agrave;n quốc từ 2 - 4 ng&agrave;y t&ugrave;y khu vực</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH</p>\r\n\r\n<p>- Hỗ trợ sửa chữa c&aacute;c lỗi kh&oacute;a, đường may, d&acirc;y k&eacute;o, ...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>★ NEWLOOK.FASHION ★</p>\r\n\r\n<p>- Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận B&igrave;nh Thạnh</p>\r\n\r\n<p>- Hotline: 0908.808.501</p>\r\n', 1, 10),
(34, 'NÓN LƯỠI TRAI ĐEN TRƠN', '015', '149000', 100, '1700638412_vn-11134201-23020-rouh44r2s2nv83.jpg', '<p>TH&Ocirc;NG TIN SẢN PHẨM</p>\r\n\r\n<p>+ Thiết kế :</p>\r\n\r\n<p>- Form d&aacute;ng chuẩn, chắc chắn</p>\r\n\r\n<p>- Phần mũi n&oacute;n &eacute;p cứng bo cong cứng c&aacute;p v&agrave; chắc chắn</p>\r\n\r\n<p>- Kiểu d&aacute;ng: ph&ugrave; hợp cả nam v&agrave; nữ. Đa phong c&aacute;ch, gọn nhẹ, năng động</p>\r\n\r\n<p>- Ph&iacute;a sau c&oacute; kh&oacute;a điều chỉnh gi&uacute;p ph&ugrave; hợp k&iacute;ch thước nhiều người</p>\r\n\r\n<p>- Ph&ugrave; hợp cho cả Nam v&agrave; Nữ</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>+ K&iacute;ch thước :</p>\r\n\r\n<p>- Chu vi n&oacute;n: 54 - 60cm</p>\r\n\r\n<p>- Độ d&agrave;i mũi n&oacute;n : 7cm</p>\r\n\r\n<p>- Độ s&acirc;u n&oacute;n t&iacute;nh từ đỉnh n&oacute;n tới ch&acirc;n n&oacute;n : 16cm</p>\r\n\r\n<p>- Chất liệu: vải kaki</p>\r\n\r\n<p>- Kh&oacute;a sau n&oacute;n : kho&aacute; g&agrave;i</p>\r\n', '<p>Ngo&agrave;i ra c&aacute;c Bạn c&ograve;n thắc mắc vấn đề g&igrave; cứ inbox trực tiếp cho m&igrave;nh nh&eacute; ... !</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► HƯỚNG DẪN BẢO QUẢN</p>\r\n\r\n<p>- Khi sản phẩm bị bẩn bạn chỉ cần d&ugrave;ng giẻ ẩm lau vết bẩn v&agrave; để n&oacute;n ở nơi tho&aacute;ng m&aacute;t</p>\r\n\r\n<p>- Hạn chế tối đa việc giặc n&oacute;n v&igrave; sẽ l&agrave;m tr&ocirc;i đi lớp keo tr&ecirc;n n&oacute;n dẫn tới việc n&oacute;n bị mất phom ... d&ugrave; bạn c&oacute; ủi lại đi chăng nữa th&igrave; n&oacute;n sẽ kh&ocirc;ng chuẩn phom như ban đầu</p>\r\n\r\n<p>- Kh&ocirc;ng d&ugrave;ng h&oacute;a chất mạnh để tẩy rửa</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG</p>\r\n\r\n<p>- Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi</p>\r\n\r\n<p>- Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc )</p>\r\n\r\n<p>- Giao h&agrave;ng to&agrave;n quốc từ 2 - 4 ng&agrave;y t&ugrave;y khu vực</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH</p>\r\n\r\n<p>- Hỗ trợ sửa chữa c&aacute;c lỗi kh&oacute;a, đường may, d&acirc;y k&eacute;o, ...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>★ NEWLOOK.FASHION ★</p>\r\n\r\n<p>- Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận B&igrave;nh Thạnh</p>\r\n\r\n<p>- Hotline: 0908.808.501</p>\r\n', 0, 10),
(35, 'MŨ LƯỠI TRAI THÊU CHỮ W', '016', '169000', 100, '1700638467_vn-11134201-23020-vjd5iavrt2nv95.jpg', '<p>TH&Ocirc;NG TIN SẢN PHẨM</p>\r\n\r\n<p>+ Thiết kế :</p>\r\n\r\n<p>- Form d&aacute;ng chuẩn, chắc chắn</p>\r\n\r\n<p>- Thiết kế may th&ecirc;u tinh tế, sắc sảo v&agrave; thời trang</p>\r\n\r\n<p>- Phần mũi n&oacute;n &eacute;p cứng bo cong cứng c&aacute;p v&agrave; chắc chắn</p>\r\n\r\n<p>- Kiểu d&aacute;ng: ph&ugrave; hợp cả nam v&agrave; nữ. Đa phong c&aacute;ch, gọn nhẹ, năng động</p>\r\n\r\n<p>- Ph&iacute;a sau c&oacute; kh&oacute;a điều chỉnh gi&uacute;p ph&ugrave; hợp k&iacute;ch thước nhiều người</p>\r\n\r\n<p>- Ph&ugrave; hợp cho cả Nam v&agrave; Nữ</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>+ K&iacute;ch thước :</p>\r\n\r\n<p>- Chu vi n&oacute;n: 54 - 60cm</p>\r\n\r\n<p>- Độ d&agrave;i mũi n&oacute;n : 7cm</p>\r\n\r\n<p>- Độ s&acirc;u n&oacute;n t&iacute;nh từ đỉnh n&oacute;n tới ch&acirc;n n&oacute;n : 16cm</p>\r\n\r\n<p>- Chất liệu: vải kaki</p>\r\n\r\n<p>- Kh&oacute;a sau n&oacute;n : kho&aacute; g&agrave;i</p>\r\n', '<p>HƯỚNG DẪN BẢO QUẢN</p>\r\n\r\n<p>- Khi sản phẩm bị bẩn bạn chỉ cần d&ugrave;ng giẻ ẩm lau vết bẩn v&agrave; để n&oacute;n ở nơi tho&aacute;ng m&aacute;t</p>\r\n\r\n<p>- Hạn chế tối đa việc giặc n&oacute;n v&igrave; sẽ l&agrave;m tr&ocirc;i đi lớp keo tr&ecirc;n n&oacute;n dẫn tới việc n&oacute;n bị mất phom ... d&ugrave; bạn c&oacute; ủi lại đi chăng nữa th&igrave; n&oacute;n sẽ kh&ocirc;ng chuẩn phom như ban đầu</p>\r\n\r\n<p>- Kh&ocirc;ng d&ugrave;ng h&oacute;a chất mạnh để tẩy rửa</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG</p>\r\n\r\n<p>- Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi</p>\r\n\r\n<p>- Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc )</p>\r\n\r\n<p>- Giao h&agrave;ng to&agrave;n quốc từ 2 - 4 ng&agrave;y t&ugrave;y khu vực</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH</p>\r\n\r\n<p>- Hỗ trợ sửa chữa c&aacute;c lỗi kh&oacute;a, đường may, d&acirc;y k&eacute;o, ...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>★ NEWLOOK.FASHION ★</p>\r\n\r\n<p>- Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận B&igrave;nh Thạnh</p>\r\n\r\n<p>- Hotline: 0908.808.501</p>\r\n', 1, 10),
(36, 'BALO HOẠ TIẾT VÂN PHỐI ĐINH', '017', '589000', 20, '1700638650_vn-11134207-7qukw-ljgg6n130rgicd.jpg', '<p>TH&Ocirc;NG TIN SẢN PHẨM - Size: 38 x 34 x 17cm ( vừa laptop 13inch trong ngăn đệm , 14inch ngo&agrave;i ngăn đệm ) - Chất liệu: da PU - M&agrave;u: đen</p>\r\n', '<p>HƯỚNG DẪN BẢO QUẢN Một trong những ưu điểm của da PU l&agrave; bền đẹp v&agrave; dễ d&agrave;ng l&agrave;m sạch. Việc bảo quản rất đơn giản, bạn chỉ cần lưu &yacute; một số mẹo sau th&igrave; đảm bảo chiếc t&uacute;i của bạn lu&ocirc;n đẹp m&atilde;i theo thời gian: - Tr&aacute;nh tiếp x&uacute;c &aacute;nh nắng trực tiếp hoặc để trong cốp xe qu&aacute; n&oacute;ng. - Kh&ocirc;ng d&ugrave;ng h&oacute;a chất mạnh để tẩy rửa - Khi sản phẩm bị bẩn bạn chỉ cần d&ugrave;ng giẻ ẩm lau vết bẩn v&agrave; để v&iacute; ở nơi tho&aacute;ng m&aacute;t - Hạn chế cất trong tủ v&igrave; đặc t&iacute;nh da n&agrave;y c&agrave;ng x&agrave;i th&igrave; c&agrave;ng kh&oacute; bong ch&oacute;c. ► CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG - Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi - Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc ) - Giao h&agrave;ng to&agrave;n quốc từ 2 - 4 ng&agrave;y t&ugrave;y khu vực ► CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH - Hỗ trợ sửa chữa c&aacute;c lỗi kh&oacute;a, đường may, d&acirc;y k&eacute;o, ... ★ NEWLOOK.FASHION ★ - Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận B&igrave;nh Thạnh - Hotline: 0908.808.501</p>\r\n', 1, 11),
(37, ' BALO MÀU XÁM XI MĂNG', '018', '549000', 20, '1700638755_vn-11134207-7qukw-ljgg6n12xybma4.jpg', '<p>Size: 42 x 27 x 15cm ( vừa laptop 13, 15inch ) - Chất liệu: da PU d&agrave;y dặn chắc chắn - M&agrave;u sắc: m&agrave;u x&aacute;m phối v&acirc;n đen giống chất liệu xi măng rất l&agrave; độc lạ lu&ocirc;n</p>\r\n', '<p>&bull; K&iacute;ch thước sản phẩm rộng r&atilde;i, được chia l&agrave;m nhiều ngăn tiện lợi. C&oacute; c&aacute;c ngăn lớn để đựng c&aacute;c vật dụng cần thiết v&agrave; nhiều ngăn nhỏ để đựng giấy tờ, tiền, v&iacute;&hellip; tiện d&ugrave;ng khi đi học, l&agrave;m việc hay c&aacute;c hoạt động d&atilde; ngoại... &bull; Thiết kế tinh tế, hiện đại mang phong c&aacute;ch H&agrave;n Quốc vừa thời trang vừa gọn nhẹ &bull; C&oacute; cổng usb kết hợp với cục sạc dụ ph&ograve;ng b&ecirc;n trong gi&uacute;p bạn dễ d&agrave;ng sạc pin điện thoại v&ocirc; tư chụp ảnh thoải m&aacute;i kh&ocirc;ng lo hết pin. --- - Kh&ocirc;ng đựng vật qu&aacute; nặng...Ba l&ocirc; được thiết kế ri&ecirc;ng cho việc đựng c&aacute;c vật dụng vừa v&agrave; nhỏ. V&igrave; vậy việc sử dụng ba l&ocirc; chứa c&aacute;c vật nặng hay nhồi nh&eacute;t qu&aacute; chật sẽ dẫn đến t&igrave;nh trạng balo bị bung chỉ, r&aacute;ch, t&eacute;t balo. Trong trường hợp đựng vật qu&aacute; cỡ sẽ g&acirc;y ra t&eacute;t đường d&acirc;y k&eacute;o - Chất liệu của sản phẩm kh&ocirc;ng chống thấm tuyệt đối n&ecirc;n bạn cần ch&uacute; &yacute; bảo vệ balo của m&igrave;nh khi đi trong thời tiết mưa gi&oacute;. --- - Size: 42 x 27 x 15cm ( vừa laptop 13, 15inch ) - Chất liệu: da PU d&agrave;y dặn chắc chắn - M&agrave;u sắc: m&agrave;u x&aacute;m phối v&acirc;n đen giống chất liệu xi măng rất l&agrave; độc lạ lu&ocirc;n &mdash;&mdash; Lưu &yacute;: Sản phẩm được chụp tr&ecirc;n b&igrave;a trắng n&ecirc;n h&igrave;nh sao h&agrave;ng 100% giống vậy nh&eacute; ! &mdash;&mdash; ★ NEWLOOK.FASHION ★ &bull; Địa chỉ: 23/13A Nguyễn Văn Lạc, P.21, Q.B&igrave;nh Thạnh &bull; Hotline: 0908 808 501 &bull; Facebook: Newlook.Fashion2012 &bull; Shopee: Newlook.Fashion</p>\r\n', 1, 11),
(38, 'TÚI DU LỊCH NGẮN NGÀY DẠNG TRỐNG', '019', '299000', 20, '1700638826_vn-11134207-7qukw-ljgg6n13260y71.jpg', '<p>TH&Ocirc;NG TIN SẢN PHẨM</p>\r\n\r\n<p>- Thiết kế : cuối c&ugrave;ng m&igrave;nh cũng t&igrave;m được một chiếc t&uacute;i đi gym du lịch ngắn hay ưng &yacute; cho anh em</p>\r\n\r\n<p>T&uacute;i thiết kế dạng trống vu&ocirc;ng n&ecirc;n kh&ocirc;ng gian rộng r&atilde;i, tận dụng tối đa</p>\r\n\r\n<p>Chất liệu vải d&ugrave; n&ecirc;n kh&aacute; l&agrave; nhẹ, c&oacute; ngăn để 1 đ&ocirc;i gi&agrave;y th&iacute;ch hợp cho mấy bạn gymer hoặc đi c&ocirc;ng t&aacute;c ngắn ng&agrave;y mang theo để thay đổi</p>\r\n\r\n<p>Đựng được tầm 3 - 5 bộ đồ xếp gọn t&ugrave;y loại d&agrave;y hay mỏng</p>\r\n\r\n<p>C&oacute; một ngăn theo m&igrave;nh l&agrave; để đồ l&oacute;t dơ sau khi gym xong .. tuyệt vời lu&ocirc;n.</p>\r\n\r\n<p>- K&iacute;ch thước : 46 x 24 x 24cm</p>\r\n\r\n<p>- M&agrave;u sắc : m&agrave;u đen phối d&acirc;y sọc</p>\r\n\r\n<p>- Chất liệu : vải d&ugrave; chống thấm nhẹ</p>\r\n', '<p>HƯỚNG DẪN BẢO QUẢN</p>\r\n\r\n<p>- Hạn chế đeo ch&eacute;o khi đựng nhiều đồ, m&agrave; h&atilde;y x&aacute;ch tay gi&uacute;p em nha !</p>\r\n\r\n<p>- Kh&ocirc;ng d&ugrave;ng h&oacute;a chất mạnh để tẩy rửa</p>\r\n\r\n<p>- Khi sản phẩm bị bẩn bạn chỉ cần d&ugrave;ng giẻ ẩm lau vết bẩn v&agrave; để v&iacute; ở nơi tho&aacute;ng m&aacute;t, hạn chế ng&acirc;m t&uacute;i trong nước v&igrave; sẽ l&agrave;m mất chất keo tr&ecirc;n vải dẫn tới t&uacute;i mất phom d&aacute;ng nh&eacute;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG</p>\r\n\r\n<p>- Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi</p>\r\n\r\n<p>- Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc )</p>\r\n\r\n<p>- Giao h&agrave;ng to&agrave;n quốc từ 2 - 4 ng&agrave;y t&ugrave;y khu vực</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH</p>\r\n\r\n<p>- Hỗ trợ sửa chữa c&aacute;c lỗi kh&oacute;a, đường may, d&acirc;y k&eacute;o, ...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>★ NEWLOOK.FASHION ★</p>\r\n\r\n<p>- Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận B&igrave;nh Thạnh</p>\r\n\r\n<p>- Hotline: 0908.808.501</p>\r\n', 1, 11),
(39, 'TÚI DU LỊCH XÁCH TAY ĐEO CHÉO', '020', '649000', 20, '1700638881_vn-11134207-7qukw-ljghp30ak2b8b8.jpg', '<p>TH&Ocirc;NG TIN SẢN PHẨM - Thiết kế : t&uacute;i du lịch dạng trống n&ecirc;n tận dụng tối đa kh&ocirc;ng gian t&uacute;i, đựng tầm 7 tới 10 bộ đồ xếp gọn t&ugrave;y loại, kiểu d&aacute;ng đơn giản sang trọng, da đan thủ c&ocirc;ng tỉ mỉ, b&ecirc;n trong c&oacute; l&oacute;t vải. &bull; LƯU &Yacute; : khuy&ecirc;n bạn n&ecirc;n x&aacute;ch tay nếu khối lượng đồ lớn hơn mức cho ph&eacute;p. - K&iacute;ch thước : ngang 45cm x cao 23cm x rộng 23cm - M&agrave;u sắc : m&agrave;u đen - Chất liệu : sử dụng da PU ( da tổng hợp ) d&agrave;y dặn, &eacute;p dưới &aacute;p xuất lớn, chất lượng kh&aacute;c biệt so với da PU th&ocirc;ng thường , chống nước nhẹ.</p>\r\n', '<p>► HƯỚNG DẪN BẢO QUẢN Một trong những ưu điểm của da PU l&agrave; bền đẹp v&agrave; dễ d&agrave;ng l&agrave;m sạch. Việc bảo quản rất đơn giản, bạn chỉ cần lưu &yacute; một số mẹo sau th&igrave; đảm bảo chiếc t&uacute;i của bạn lu&ocirc;n đẹp m&atilde;i theo thời gian: - Tr&aacute;nh tiếp x&uacute;c &aacute;nh nắng trực tiếp hoặc để trong cốp xe qu&aacute; n&oacute;ng. - Kh&ocirc;ng d&ugrave;ng h&oacute;a chất mạnh để tẩy rửa - Khi sản phẩm bị bẩn bạn chỉ cần d&ugrave;ng giẻ ẩm lau vết bẩn v&agrave; để v&iacute; ở nơi tho&aacute;ng m&aacute;t - Hạn chế cất trong tủ v&igrave; đặc t&iacute;nh da n&agrave;y c&agrave;ng x&agrave;i th&igrave; c&agrave;ng kh&oacute; bong ch&oacute;c. ► CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG - Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi - Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc ) - Giao h&agrave;ng to&agrave;n quốc từ 2 - 4 ng&agrave;y t&ugrave;y khu vực ► CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH - Hỗ trợ sửa chữa c&aacute;c lỗi kh&oacute;a, đường may, d&acirc;y k&eacute;o, ... ★ NEWLOOK.FASHION ★ - Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận B&igrave;nh Thạnh - Hotline: 0908.808.501</p>\r\n', 1, 11),
(40, 'KÍNH MÁT THỜI TRANG TRÒNG VUÔNG GỌNG KIM LOẠI', 'D054', '289000', 30, '1700662635_vn-11134207-7qukw-ljqkg9klybas27.jpg', '<p>TH&Ocirc;NG TIN SẢN PHẨM</p>\r\n\r\n<p>- Xuất xứ : Quảng Ch&acirc;u</p>\r\n\r\n<p>- Code : D054</p>\r\n\r\n<p>- Đối tượng : Unisex, c&aacute; t&iacute;nh, d&agrave;nh cho cả nam v&agrave; nữ đều được</p>\r\n', '<p>ĐẶC ĐIỂM CHI TIẾT</p>\r\n\r\n<p>- Chất liệu khung : kim loại si b&oacute;ng</p>\r\n\r\n<p>- C&oacute; lớp bảo vệ tia cực t&iacute;m UV400</p>\r\n\r\n<p>- Chiều d&agrave;i c&agrave;ng k&iacute;nh : 145 mm</p>\r\n\r\n<p>- Chiều rộng 2 mắt k&iacute;nh : 143 mm</p>\r\n\r\n<p>- Chiều ngang mắt k&iacute;nh : 55 mm</p>\r\n\r\n<p>- Chiều cao mắt k&iacute;nh : 50 mm</p>\r\n\r\n<p>- Chiều rộng cầu k&iacute;nh : 20 mm</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>■ SẢN PHẨM GỒM C&Oacute;</p>\r\n\r\n<p>- 1 hộp k&iacute;nh cao cấp</p>\r\n\r\n<p>- 1 t&uacute;i r&uacute;t kết hợp khăn lau</p>\r\n\r\n<p>- 1 v&iacute;t vặn ốc k&iacute;nh</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>■ LƯU &Yacute;</p>\r\n\r\n<p>- Khi đeo k&iacute;nh v&agrave;o v&agrave; lấy k&iacute;nh ra bằng 2 tay để k&iacute;nh ko bị rộng chật lệch</p>\r\n\r\n<p>- Tr&aacute;nh tiếp x&uacute;c với c&aacute;c vật dụng c&oacute; t&iacute;nh ăn m&ograve;n như thuốc chống c&ocirc;n tr&ugrave;ng, dụng cụ vệ sinh, mỹ phẩm, keo xịt t&oacute;c, thuốc&hellip; v&agrave; tr&aacute;nh để l&acirc;u dưới &aacute;nh nắng trực tiếp v&agrave; nhiệt độ cao</p>\r\n\r\n<p>- D&ugrave;ng khăn sạch lau k&iacute;nh, kh&ocirc;ng d&ugrave;ng &aacute;o để lau k&iacute;nh sẽ g&acirc;y trầy xước k&iacute;n do bụi bẩn li ti...</p>\r\n\r\n<p>- Khi kh&ocirc;ng đeo k&iacute;nh, vui l&ograve;ng bọc k&iacute;nh bằng vải v&agrave; cho v&agrave;o hộp đựng k&iacute;nh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>■ CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG</p>\r\n\r\n<p>- Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi</p>\r\n\r\n<p>- Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc )</p>\r\n\r\n<p>- Giao h&agrave;ng to&agrave;n quốc từ 2 - 4 ng&agrave;y t&ugrave;y khu vực</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>★ NEWLOOK.FASHION ★</p>\r\n\r\n<p>- Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận B&igrave;nh Thạnh</p>\r\n', 0, 6),
(41, 'KÍNH MÁT THỜI TRANG MÀU CAM NỔI BẬT', 'D5003', '249000', 30, '1700662752_632f38b0813c32577638ed74abc09b87.jpg', '<p>► TH&Ocirc;NG TIN SẢN PHẨM - Xuất xứ: Quảng Ch&acirc;u - Đối tượng: Unisex, d&agrave;nh cho cả nam v&agrave; nữ đều được - Mắt k&iacute;nh kiểu d&aacute;ng thời trang, s&agrave;nh điệu l&agrave; phụ kiện thời trang kh&ocirc;ng thể thiếu đi k&egrave;m trang phục. - Th&iacute;ch hợp cho việc sử dụng khi đi đường, d&atilde; ngoại&hellip; để tr&aacute;nh được bụi bặm hoặc &aacute;nh nắng mặt trời, gi&uacute;p bảo vệ đ&ocirc;i mắt của bạn. - Thiết kế vừa vặn với khu&ocirc;n mặt của bạn v&agrave; mang lại cảm gi&aacute;c dễ chịu khi sử dụng. - Ph&ugrave; hợp với phần lớn tất cả c&aacute;c gương mặt (Tr&ograve;n, tr&aacute;i xoan, to, nhỏ,&hellip;)</p>\r\n', '<p>► ĐẶC ĐIỂM CHI TIẾT - Chất liệu khung: nhựa cao cấp nhẹ bền đẹp - C&oacute; lớp bảo vệ tia cực t&iacute;m UV400 - Chiều d&agrave;i c&agrave;ng k&iacute;nh: 147mm - Chiều rộng cầu k&iacute;nh: 15mm - Chiều ngang mắt k&iacute;nh: 59mm - Chiều cao mắt k&iacute;nh: 53mm - Chiều rộng 2 mắt k&iacute;nh: 149mm - Trọng lượng: 25g ► SẢN PHẨM GỒM C&Oacute; - 1 hộp k&iacute;nh cao cấp - 1 t&uacute;i r&uacute;t kết hợp khăn lau - 1 v&iacute;t vặn ốc k&iacute;nh</p>\r\n\r\n<p>► LƯU &Yacute; - Khi đeo k&iacute;nh v&agrave;o v&agrave; lấy k&iacute;nh ra bằng 2 tay để k&iacute;nh ko bị rộng chật lệch - Tr&aacute;nh tiếp x&uacute;c với c&aacute;c vật dụng c&oacute; t&iacute;nh ăn m&ograve;n như thuốc chống c&ocirc;n tr&ugrave;ng, dụng cụ vệ sinh, mỹ phẩm, keo xịt t&oacute;c, thuốc&hellip; v&agrave; tr&aacute;nh để l&acirc;u dưới &aacute;nh nắng trực tiếp v&agrave; nhiệt độ cao - D&ugrave;ng khăn sạch lau k&iacute;nh, kh&ocirc;ng d&ugrave;ng &aacute;o để lau k&iacute;nh sẽ g&acirc;y trầy xước k&iacute;n do bụi bẩn li ti... - Khi kh&ocirc;ng đeo k&iacute;nh, vui l&ograve;ng bọc k&iacute;nh bằng vải v&agrave; cho v&agrave;o hộp đựng k&iacute;nh.</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG - Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi - Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc ) - Giao h&agrave;ng to&agrave;n quốc từ 2 - 4 ng&agrave;y t&ugrave;y khu vực ★ NEWLOOK.FASHION ★ - Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận B&igrave;nh Thạnh - Hotline: 0908.808.501</p>\r\n', 0, 6),
(42, 'KÍNH MÁT TRÒNG VUÔNG GỌNG BẠC', 'D006', '249000', 30, '1700662870_vn-11134207-7qukw-lkf2hugatzmw2d.jpg', '<p>► TH&Ocirc;NG TIN SẢN PHẨM - Xuất xứ: Quảng Ch&acirc;u - Đối tượng: Unisex, d&agrave;nh cho cả nam v&agrave; nữ đều được - Mắt k&iacute;nh kiểu d&aacute;ng thời trang, s&agrave;nh điệu l&agrave; phụ kiện thời trang kh&ocirc;ng thể thiếu đi k&egrave;m trang phục. - Th&iacute;ch hợp cho việc sử dụng khi đi đường, d&atilde; ngoại&hellip; để tr&aacute;nh được bụi bặm hoặc &aacute;nh nắng mặt trời, gi&uacute;p bảo vệ đ&ocirc;i mắt của bạn.</p>\r\n', '<p>► ĐẶC ĐIỂM CHI TIẾT - Size: 60 x 19 x 140mm - Chất liệu: nhựa chống tia UV - M&agrave;u: Đen . Trong . Trong viền đen ► SẢN PHẨM GỒM C&Oacute; - 1 hộp k&iacute;nh cao cấp - 1 t&uacute;i r&uacute;t kết hợp khăn lau - 1 v&iacute;t vặn ốc k&iacute;nh ► LƯU &Yacute; - Khi đeo k&iacute;nh v&agrave;o v&agrave; lấy k&iacute;nh ra bằng 2 tay để k&iacute;nh ko bị rộng chật lệch - Tr&aacute;nh tiếp x&uacute;c với c&aacute;c vật dụng c&oacute; t&iacute;nh ăn m&ograve;n như thuốc chống c&ocirc;n tr&ugrave;ng, dụng cụ vệ sinh, mỹ phẩm, keo xịt t&oacute;c, thuốc&hellip; v&agrave; tr&aacute;nh để l&acirc;u dưới &aacute;nh nắng trực tiếp v&agrave; nhiệt độ cao - D&ugrave;ng khăn sạch lau k&iacute;nh, kh&ocirc;ng d&ugrave;ng &aacute;o để lau k&iacute;nh sẽ g&acirc;y trầy xước k&iacute;n do bụi bẩn li ti... - Khi kh&ocirc;ng đeo k&iacute;nh, vui l&ograve;ng bọc k&iacute;nh bằng vải v&agrave; cho v&agrave;o hộp đựng k&iacute;nh. ► CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG - Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi - Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc ) - Giao h&agrave;ng to&agrave;n quốc từ 2 - 4 ng&agrave;y t&ugrave;y khu vực --- ★ NEWLOOK.FASHION ★ &bull; Địa chỉ: 23/13A Nguyễn Văn Lạc, P.21, Q.B&igrave;nh Thạnh &bull; Hotline: 0908 808 501 &bull; Facebook: Newlook.Fashion2012 &bull; Shopee: Newlook.Fashion</p>\r\n', 1, 6),
(43, 'KÍNH MÁT MẮT CHUỒN CHUỒN', 'S98154', '289000', 30, '1700663010_725da161309b4663b8f6dde1503cbcc3.jpg', '<p>► TH&Ocirc;NG TIN SẢN PHẨM</p>\r\n\r\n<p>- Xuất xứ: Quảng Ch&acirc;u</p>\r\n\r\n<p>- Code : S98154</p>\r\n\r\n<p>- Đối tượng: Unisex, d&agrave;nh cho cả nam v&agrave; nữ đều được</p>\r\n\r\n<p>- Mắt k&iacute;nh kiểu d&aacute;ng thời trang, tr&ograve;ng k&iacute;nh dạng mắt chuồn chuồn chất chơi, gọng k&iacute;nh l&agrave;m dạng tr&ograve;n, phần đầu c&oacute; chạm khắc nổi tạo n&eacute;t chấm ph&aacute; ri&ecirc;ng</p>\r\n\r\n<p>- Th&iacute;ch hợp cho việc sử dụng khi đi đường, d&atilde; ngoại&hellip; để tr&aacute;nh được bụi bặm hoặc &aacute;nh nắng mặt trời, gi&uacute;p bảo vệ đ&ocirc;i mắt của bạn.</p>\r\n\r\n<p>- Thiết kế vừa vặn với khu&ocirc;n mặt của bạn v&agrave; mang lại cảm gi&aacute;c dễ chịu khi sử dụng.</p>\r\n\r\n<p>- Ph&ugrave; hợp với phần lớn tất cả c&aacute;c gương mặt (Tr&ograve;n, tr&aacute;i xoan, to, nhỏ,&hellip;)</p>\r\n', '<p>► ĐẶC ĐIỂM CHI TIẾT</p>\r\n\r\n<p>- Chất liệu khung: nhựa cao cấp nhẹ bền đẹp</p>\r\n\r\n<p>- C&oacute; lớp bảo vệ tia cực t&iacute;m UV400</p>\r\n\r\n<p>- Chiều d&agrave;i c&agrave;ng k&iacute;nh: 141 mm</p>\r\n\r\n<p>- Chiều rộng 2 mắt k&iacute;nh: 147 mm</p>\r\n\r\n<p>- Chiều ngang mắt k&iacute;nh: 60 mm</p>\r\n\r\n<p>- Chiều cao mắt k&iacute;nh: 54 mm</p>\r\n\r\n<p>- Chiều rộng cầu k&iacute;nh: 21 mm</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► SẢN PHẨM GỒM C&Oacute;</p>\r\n\r\n<p>- 1 hộp k&iacute;nh cao cấp</p>\r\n\r\n<p>- 1 t&uacute;i r&uacute;t kết hợp khăn lau</p>\r\n\r\n<p>- 1 v&iacute;t vặn ốc k&iacute;nh</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► LƯU &Yacute;</p>\r\n\r\n<p>- Khi đeo k&iacute;nh v&agrave;o v&agrave; lấy k&iacute;nh ra bằng 2 tay để k&iacute;nh ko bị rộng chật lệch</p>\r\n\r\n<p>- Tr&aacute;nh tiếp x&uacute;c với c&aacute;c vật dụng c&oacute; t&iacute;nh ăn m&ograve;n như thuốc chống c&ocirc;n tr&ugrave;ng, dụng cụ vệ sinh, mỹ phẩm, keo xịt t&oacute;c, thuốc&hellip; v&agrave; tr&aacute;nh để l&acirc;u dưới &aacute;nh nắng trực tiếp v&agrave; nhiệt độ cao</p>\r\n\r\n<p>- D&ugrave;ng khăn sạch lau k&iacute;nh, kh&ocirc;ng d&ugrave;ng &aacute;o để lau k&iacute;nh sẽ g&acirc;y trầy xước k&iacute;n do bụi bẩn li ti...</p>\r\n\r\n<p>- Khi kh&ocirc;ng đeo k&iacute;nh, vui l&ograve;ng bọc k&iacute;nh bằng vải v&agrave; cho v&agrave;o hộp đựng k&iacute;nh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► CH&Iacute;NH S&Aacute;CH B&Aacute;N H&Agrave;NG &amp; GIAO H&Agrave;NG</p>\r\n\r\n<p>- Miễn ph&iacute; đổi trả trong v&ograve;ng 7 ng&agrave;y nếu sản phẩm c&oacute; lỗi</p>\r\n\r\n<p>- Giao h&agrave;ng nội th&agrave;nh Hồ Ch&iacute; Minh trong 2 giờ ( Hỏa Tốc )</p>\r\n\r\n<p>- Giao h&agrave;ng to&agrave;n quốc từ 2 - 4 ng&agrave;y t&ugrave;y khu vực</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>★ NEWLOOK.FASHION ★</p>\r\n\r\n<p>- Địa chỉ: Số 23/13A Nguyễn Văn Lạc, Phường 21, Quận B&igrave;nh Thạnh</p>\r\n\r\n<p>- Hotline: 0908.808.501</p>\r\n', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id_shipping` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id_shipping`, `name`, `phone`, `address`, `note`, `id_dangky`) VALUES
(6, 'Quang Nhat Nguyen', '0948577175', '159 Xo Viet Nghe Tinh, Dak Lak', 'giao nhanh nhé', 15),
(7, 'Quang Nhat Nguyen', '0948577175', '159 Xo Viet Nghe Tinh, Dak Lak', 'cảm ơn', 16),
(8, 'Quang Nhat Nguyen', '0948577175', '159 Xo Viet Nghe Tinh, Dak Lak', 'alo', 17),
(9, 'Quang Nhat Nguyen', '0948577175', '159 Xo Viet Nghe Tinh, Dak Lak', 'lll', 18),
(10, 'Nhật', '0938970465', 'abc', 'nhanh', 20),
(11, '', '', '', '', 21),
(12, 'Nhật', '032218556', '1234', 'abc', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(30) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(15, '2023-11-22', 3, '2165000', 2),
(16, '2023-12-03', 1, '289000', 1),
(17, '2023-12-04', 11, '2837000', 1),
(18, '2023-12-05', 1, '249000', 1),
(19, '2024-01-22', 4, '1365000', 1),
(20, '2024-01-23', 1, '289000', 2),
(21, '2024-04-02', 3, '1445000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vnpay`
--

CREATE TABLE `tbl_vnpay` (
  `id_vnpay` int(11) NOT NULL,
  `vnp_amount` varchar(50) NOT NULL,
  `vnp_bankCode` varchar(50) NOT NULL,
  `vnp_banktranno` varchar(50) NOT NULL,
  `vnp_cardtype` varchar(50) NOT NULL,
  `vnp_orderinfo` varchar(100) NOT NULL,
  `vnp_paydate` varchar(50) NOT NULL,
  `vnp_tmncode` varchar(50) NOT NULL,
  `vnp_transactionno` varchar(50) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbt_quyen`
--

CREATE TABLE `tbt_quyen` (
  `ID` int(11) NOT NULL,
  `Role` varchar(20) NOT NULL,
  `Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbt_quyen`
--

INSERT INTO `tbt_quyen` (`ID`, `Role`, `Description`) VALUES
(27, 'Admin', 'Quản lý tất cả mọi thứ trong hệ thống'),
(28, 'Staff', 'Quản lý danh mục về sản phẩm và bài viết, quản lý đơn hàng'),
(29, 'User', 'Khách hàng'),
(30, 'Manager', 'Quản lý thống kê doanh thu, danh mục về sản phẩm và bài viết, quản lý đơn hàng và quản lý cài đặt website'),
(31, 'a', 'ABC'),
(32, 'a', 'ầdd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_features`
--
ALTER TABLE `menu_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_features`
--
ALTER TABLE `role_features`
  ADD PRIMARY KEY (`role_feature_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `feature_id` (`feature_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Indexes for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`),
  ADD KEY `fk_role` (`role_id`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Indexes for table `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_momo`
--
ALTER TABLE `tbl_momo`
  ADD PRIMARY KEY (`id_momo`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id_shipping`);

--
-- Indexes for table `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  ADD PRIMARY KEY (`id_vnpay`);

--
-- Indexes for table `tbt_quyen`
--
ALTER TABLE `tbt_quyen`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_features`
--
ALTER TABLE `menu_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `role_features`
--
ALTER TABLE `role_features`
  MODIFY `role_feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_momo`
--
ALTER TABLE `tbl_momo`
  MODIFY `id_momo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  MODIFY `id_vnpay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbt_quyen`
--
ALTER TABLE `tbt_quyen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_features`
--
ALTER TABLE `role_features`
  ADD CONSTRAINT `role_features_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbt_quyen` (`ID`),
  ADD CONSTRAINT `role_features_ibfk_2` FOREIGN KEY (`feature_id`) REFERENCES `menu_features` (`id`);

--
-- Constraints for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`role_id`) REFERENCES `tbt_quyen` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
