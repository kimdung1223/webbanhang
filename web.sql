-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 12, 2017 at 02:41 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluansp`
--

DROP TABLE IF EXISTS `binhluansp`;
CREATE TABLE IF NOT EXISTS `binhluansp` (
  `mablsp` char(10) NOT NULL,
  `makh` char(32) DEFAULT NULL,
  `masp` char(10) DEFAULT NULL,
  `ngayblsp` date DEFAULT NULL,
  `noidungblsp` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`mablsp`),
  KEY `masp` (`masp`),
  KEY `makh` (`makh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `binhluansp`
--

INSERT INTO `binhluansp` (`mablsp`, `makh`, `masp`, `ngayblsp`, `noidungblsp`) VALUES
('BL01', 'KH01', 'CD', '2017-06-21', 'B ơi bột này dùng ntn v?'),
('BL02', 'KH03', 'DCG', '2017-10-11', 'Dầu này công dụng gì v?');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

DROP TABLE IF EXISTS `chitietdonhang`;
CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `madh` char(10) DEFAULT NULL,
  `masp` char(10) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `dongia` int(11) DEFAULT NULL,
  `thanhtien` int(11) DEFAULT NULL,
  KEY `madh` (`madh`),
  KEY `masp` (`masp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`madh`, `masp`, `soluong`, `dongia`, `thanhtien`) VALUES
('DH01', 'CD', 2, 30000, 60000),
('DH01', 'CG', 5, 15000, 75000),
('DH01', 'KT', 1, 30000, 30000),
('DH02', 'BDDMN', 1, 25000, 25000),
('DH02', 'THT', 3, 35000, 105000),
('DH03', 'NG', 1, 50000, 50000),
('DH03', 'TX', 1, 40000, 40000),
('DH04', 'DD01', 10, 20000, 200000),
('DH05', 'DHNHO', 2, 23000, 46000),
('DH05', 'TDBH', 3, 45000, 135000),
('DH05', 'DHN', 5, 25000, 125000),
('DH05', 'TDSC', 1, 45000, 45000),
('DH05', 'DC02', 4, 25000, 100000),
('DH06', 'NHH', 2, 30000, 60000),
('DH06', 'TDHH', 1, 60000, 60000),
('DH06', 'CQMN', 2, 10000, 20000),
('DH06', 'NG', 2, 3, 6);

--
-- Triggers `chitietdonhang`
--
DROP TRIGGER IF EXISTS `capnhattongthanhtien`;
DELIMITER $$
CREATE TRIGGER `capnhattongthanhtien` AFTER INSERT ON `chitietdonhang` FOR EACH ROW update donhang set tongtien = tongtien+NEW.ThanhTien where MaDH = NEW.MaDH
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `capnhattt`;
DELIMITER $$
CREATE TRIGGER `capnhattt` BEFORE INSERT ON `chitietdonhang` FOR EACH ROW set new.thanhtien= new.soluong*new.dongia
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `cnttxoa`;
DELIMITER $$
CREATE TRIGGER `cnttxoa` AFTER DELETE ON `chitietdonhang` FOR EACH ROW update donhang set tongtien = 0
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `chitietkhuyenmai`
--

DROP TABLE IF EXISTS `chitietkhuyenmai`;
CREATE TABLE IF NOT EXISTS `chitietkhuyenmai` (
  `makm` char(10) DEFAULT NULL,
  `masp` char(10) DEFAULT NULL,
  `noidungkm` varchar(10000) DEFAULT NULL,
  `phantramgiamgia` int(11) DEFAULT NULL,
  KEY `makm` (`makm`),
  KEY `masp` (`masp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietkhuyenmai`
--

INSERT INTO `chitietkhuyenmai` (`makm`, `masp`, `noidungkm`, `phantramgiamgia`) VALUES
('KM01', 'CD', NULL, 30),
('KM01', 'DD01', NULL, 30),
('KM01', 'NG', NULL, 30),
('KM01', 'YM', NULL, 30),
('KM01', 'LA', NULL, 30),
('KM02', 'ST', NULL, 10),
('KM02', 'TDBH', NULL, 10),
('KM02', 'XPDD', NULL, 10),
('KM02', 'SS', NULL, 10),
('KM02', 'SK', NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `chitietphieunhap`
--

DROP TABLE IF EXISTS `chitietphieunhap`;
CREATE TABLE IF NOT EXISTS `chitietphieunhap` (
  `mapn` char(10) DEFAULT NULL,
  `masp` char(10) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `dongia` int(11) DEFAULT NULL,
  `thanhtien` int(11) DEFAULT NULL,
  KEY `mapn` (`mapn`),
  KEY `masp` (`masp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietphieunhap`
--

INSERT INTO `chitietphieunhap` (`mapn`, `masp`, `soluong`, `dongia`, `thanhtien`) VALUES
('PN01', 'CD', 100, 15000, 1500000),
('PN01', 'CG', 100, 5000, 500000),
('PN01', 'DD01', 100, 10000, 1000000),
('PN01', 'DN', 50, 8000, 400000),
('PN01', 'HH01', 100, 15000, 1500000),
('PN03', 'TTB', 500, 15000, 7500000),
('PN03', 'SS', 500, 25000, 12500000),
('PN02', 'DG', 200, 40000, 8000000),
('PN02', 'KT', 50, 15000, 750000);

--
-- Triggers `chitietphieunhap`
--
DROP TRIGGER IF EXISTS `capnhatthanhtien`;
DELIMITER $$
CREATE TRIGGER `capnhatthanhtien` BEFORE INSERT ON `chitietphieunhap` FOR EACH ROW set new.thanhtien= new.soluong*new.dongia
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `capnhattongtien`;
DELIMITER $$
CREATE TRIGGER `capnhattongtien` AFTER INSERT ON `chitietphieunhap` FOR EACH ROW update phieunhap set tongtien = tongtien+NEW.thanhtien where mapn = NEW.mapn
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `chitietphieuxuat`
--

DROP TABLE IF EXISTS `chitietphieuxuat`;
CREATE TABLE IF NOT EXISTS `chitietphieuxuat` (
  `mapx` char(10) DEFAULT NULL,
  `masp` char(10) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `dongia` double DEFAULT NULL,
  `thanhtien` double DEFAULT NULL,
  KEY `mapx` (`mapx`),
  KEY `masp` (`masp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietphieuxuat`
--

INSERT INTO `chitietphieuxuat` (`mapx`, `masp`, `soluong`, `dongia`, `thanhtien`) VALUES
('PX01', 'CD', 2, 30000, 60000),
('PX01', 'CG', 5, 15000, 75000),
('PX01', 'KT', 1, 30000, 30000),
('PX02', 'BDDMN', 1, 25000, 25000),
('PX02', 'THT', 3, 35000, 105000),
('PX03', 'NG', 1, 50000, 50000),
('PX03', 'TX', 1, 40000, 40000),
('PX04', 'DD01', 10, 20000, 200000),
('PX05', 'DHNHO', 2, 23000, 46000),
('PX05', 'TDBH', 3, 45000, 135000),
('PX05', 'DHN', 5, 25000, 125000),
('PX05', 'TDSC', 1, 45000, 45000),
('PX05', 'DC02', 4, 25000, 100000),
('PX06', 'NHH', 2, 30000, 60000),
('PX06', 'TDHH', 1, 60000, 60000),
('PX06', 'CQMN', 2, 10000, 20000);

--
-- Triggers `chitietphieuxuat`
--
DROP TRIGGER IF EXISTS `capnhatthanhtienpx`;
DELIMITER $$
CREATE TRIGGER `capnhatthanhtienpx` BEFORE INSERT ON `chitietphieuxuat` FOR EACH ROW set new.thanhtien= new.soluong*new.dongia
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `tongtien`;
DELIMITER $$
CREATE TRIGGER `tongtien` BEFORE INSERT ON `chitietphieuxuat` FOR EACH ROW update phieuxuat set tongtien = tongtien+NEW.thanhtien where mapx = NEW.mapx
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `madh` char(10) NOT NULL,
  `manv` char(10) DEFAULT NULL,
  `hotennguoinhan` varchar(100) DEFAULT NULL,
  `diachinguoinhan` varchar(100) DEFAULT NULL,
  `dienthoainguoinhan` char(12) DEFAULT NULL,
  `ngaylapdh` date DEFAULT NULL,
  `tongtien` int(11) NOT NULL DEFAULT '0',
  `tinhtrangdh` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`madh`),
  KEY `madh` (`madh`),
  KEY `manv` (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`madh`, `manv`, `hotennguoinhan`, `diachinguoinhan`, `dienthoainguoinhan`, `ngaylapdh`, `tongtien`, `tinhtrangdh`) VALUES
('DH01', 'NV01', 'Thoại Dương', '146 đống đa vĩnh lạc rạch giá kiên giang, Phường Vĩnh Lạc, Thành Phố Rạch Giá, Kiên Giang', '0961792305', '2016-11-16', 0, 'Đã xử lý'),
('DH02', 'NV02', 'Trương Bảo Trân', '33/2L Lò Siêu hường 16 quận 11', '0933523440', '2016-12-07', 0, 'Đã xử lý'),
('DH03', 'NV01', 'Trần Phương Thùy', '15 Hàng Khay, Quận Hoàn Kiếm, Hà Nội', '01653328117', '2017-02-22', 0, 'Đã xử lý'),
('DH04', 'NV01', 'Lê Thanh Tú', '195 Nguyễn Xí, phường 26 quận Bình Thạnh', '0938114792', '2017-06-19', 0, 'Đã xử lý'),
('DH05', 'NV02', 'Đỗ Thị hồng Diễm', '1875 Ấp hòa thạnh, Xã Bình Tân, Huyện Gò Công Tây, Tiền Giang', '0988420184', '2017-10-19', 0, 'Đã xử lý'),
('DH06', 'NV03', 'Nguyễn Thị Hoàng Linh', '32 Chế Lan Viên , phường Tây Thạnh, Quận Tân Phú', '01864382379', '2017-11-30', 0, 'Đã xử lý');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `makh` char(32) NOT NULL,
  `hotenkh` varchar(100) DEFAULT NULL,
  `gioitinh` tinyint(4) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `diachikh` varchar(100) DEFAULT NULL,
  `dienthoaikh` char(12) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `tendangnhap` char(32) DEFAULT NULL,
  `matkhau` char(32) DEFAULT NULL,
  PRIMARY KEY (`makh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `hotenkh`, `gioitinh`, `ngaysinh`, `diachikh`, `dienthoaikh`, `email`, `tendangnhap`, `matkhau`) VALUES
('KH01', 'Trương Bảo Trân', 1, '1999-06-12', '33/2L Lò Siêu hường 16 quận 11', '0933523440', 'truongbaotran@gmail.com', '', ''),
('KH02', 'Hứa Ngọc Hiền', 1, '1991-02-19', '236/17 Trần Phú, phường 9 quận 5', '01658752216', 'ngochien@gmail.com', '', ''),
('KH03', 'Lê Thảo', 1, '1894-11-26', '234A đường Lương Ngọc Quyến phường Quang Trung thành phố Thái Nguyên', '0869052900', 'lethao@gmail.com', '', ''),
('KH04', 'Đinh Thị Mai', 1, '1986-08-15', 'Khu Cường Thịnh 1, xã Thạch Kiệt, Huyện Tân Sơn, Phú Thọ', '0973522154', 'maimeo@gmail.com', '', ''),
('KH05', 'Lê Thanh Tú', 0, '1979-11-29', '195 Nguyễn Xí, phường 26 quận Bình Thạnh', '0938114792', 'tulee@gmail.com', 'tulee', '123456'),
('KH06', 'Nguyễn Thị Hoàng Linh', 1, '1993-07-07', '32 Chế Lan Viên , phường Tây Thạnh, Quận Tân Phú', '01864382379', 'linhhoang@gmail.com', 'hoanglinh', 'linhnguyen'),
('KH07', 'Lê Gia Huy', 0, '2000-11-25', 'nhà trọ Huy Ngọc. Đ15 - KCN Mĩ Phước 1 Phường Thới Hòa, Thị Xã Bến Cát, Bình Dương', '01212581533', 'huyle@gmail.com', 'lehuy', '456789'),
('KH08', 'Trần Tuyết Linh', 1, '1996-07-18', 'Đội 14 xã thanh chăn, Huyện Điện Biên, Điện Biên', '01254182969', 'linhtuyet@gmail.com', 'tuyettran', 'tuyetlinh'),
('KH09', 'Đỗ Thị hồng Diễm', 1, '1989-10-22', '1875 Ấp hòa thạnh, Xã Bình Tân, Huyện Gò Công Tây, Tiền Giang', '0988420184', 'dothihongdiem@gmail.com', 'hongdiem@gmail.com', 'diemhong'),
('KH10', 'Phạm Anh Thư ', 1, '1995-02-27', '549/7 Nguyễn Kiệm , phường 9, Quận Phú Nhuận', '0989184302', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

DROP TABLE IF EXISTS `khuyenmai`;
CREATE TABLE IF NOT EXISTS `khuyenmai` (
  `makm` char(10) NOT NULL,
  `tenkm` varchar(50) DEFAULT NULL,
  `ngaybd` date DEFAULT NULL,
  `ngaykt` date DEFAULT NULL,
  PRIMARY KEY (`makm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`makm`, `tenkm`, `ngaybd`, `ngaykt`) VALUES
('KM01', 'Deal sốc 50%', '2017-09-28', '2017-10-18'),
('KM02', 'Giảm giá 10%', '2017-12-06', '2017-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

DROP TABLE IF EXISTS `loaisanpham`;
CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `maloaisp` char(10) NOT NULL,
  `tenloaisp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`maloaisp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`maloaisp`, `tenloaisp`) VALUES
('BDD01', 'Bột dưỡng da thiên nhiên'),
('DDTD02', 'Dầu dưỡng - Tinh dầu'),
('K06', 'Sản phẩm khác'),
('MB03', 'Mascara - Bi lăn'),
('S04', 'Son - Tẩy tế bào'),
('XP05', 'Xà phòng');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `manv` char(10) NOT NULL,
  `hotennv` varchar(100) DEFAULT NULL,
  `gioitinh` tinyint(4) DEFAULT NULL,
  `ngaysinhnv` date DEFAULT NULL,
  `diachinv` varchar(100) DEFAULT NULL,
  `dienthoainv` char(12) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `chucvu` varchar(20) DEFAULT NULL,
  `luong` double DEFAULT NULL,
  `tendangnhap` char(20) DEFAULT NULL,
  `matkhau` char(10) DEFAULT NULL,
  PRIMARY KEY (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `hotennv`, `gioitinh`, `ngaysinhnv`, `diachinv`, `dienthoainv`, `email`, `chucvu`, `luong`, `tendangnhap`, `matkhau`) VALUES
('NV01', 'Nguyễn Kim Mỹ', 0, '1980-02-05', '53 Đường số 1, ấp Ông Nhiêu, phường Long Trường, quận 9', '0933315132', 'kimkimy@gmail.com', 'nhân viên bán hàng', 5000000, 'mykim', '123'),
('NV02', 'Trần Phương Thảo', 0, '1990-06-11', '148 Bùi Thị Xuân, phường 2, quận Tân Bình', '0926229228', 'phuongthaotran@gmail.com', 'nhân viên bán hàng', 5000000, 'tranthao', 'thaotran'),
('NV03', 'Lê Thị Linh', 0, '1984-07-20', '343/14H Tô Hiến Thành, phường 12, quận 10', '01688132341', 'linhthile@gmail.com', 'nhân viên bán hàng', 5000000, 'linhle', '456789'),
('NV04', 'Lương Thiên Phúc', 1, '1987-09-28', '1/3 Nguyễn Đình Khơi, phường 4, quận Tân Bình', ' 01252525348', 'luongthienphuc@gmail.com', 'nhân viên kho', 4500000, 'thienphuc', 'phucluong'),
('NV05', 'Dương Thị Thu Uyên', 0, '1894-12-22', '6 Đường số 14, Dương Quảng Hàm, phường 5, quận Gò Vấp', '0938596790', 'thuuyen@gmail.com', 'nhân viên quản lý', 7000000, 'thuyen', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi`
--

DROP TABLE IF EXISTS `phanhoi`;
CREATE TABLE IF NOT EXISTS `phanhoi` (
  `makh` char(32) DEFAULT NULL,
  `manv` char(10) DEFAULT NULL,
  `ngaynhantn` date DEFAULT NULL,
  `ngayguitn` date DEFAULT NULL,
  `noidungtngui` varchar(1000) DEFAULT NULL,
  `noidungtnnhan` varchar(1000) DEFAULT NULL,
  KEY `manv` (`manv`),
  KEY `makh` (`makh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phanhoi`
--

INSERT INTO `phanhoi` (`makh`, `manv`, `ngaynhantn`, `ngayguitn`, `noidungtngui`, `noidungtnnhan`) VALUES
('KH01', 'NV02', '2016-10-11', '2016-11-18', 'Dạ b trộn với mật ong hoặc sữa tươi không đường ạ\r\n', 'Chỉ m cách pha bột trị mụn ntn ạ?'),
('KH03', 'NV01', '2016-12-21', '2017-11-26', 'B lấy sữa tươi không đường massage nhẹ nhàng trong vài phút. Rửa mặt lại bằng nước ấm', 'Ban oi cho m hoi co cach ji dap tinh bot nghe ko bi vang da ko'),
('KH05', 'NV05', '2017-06-21', '2017-06-25', 'Dạ được ạ', 'bạn ơi than này dùng để đánh răng đc k nhỉ');

-- --------------------------------------------------------

--
-- Table structure for table `phieunhap`
--

DROP TABLE IF EXISTS `phieunhap`;
CREATE TABLE IF NOT EXISTS `phieunhap` (
  `mapn` char(10) NOT NULL,
  `manv` char(10) DEFAULT NULL,
  `ngaynhap` date DEFAULT NULL,
  `tongtien` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mapn`),
  KEY `mapn` (`mapn`),
  KEY `manv` (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phieunhap`
--

INSERT INTO `phieunhap` (`mapn`, `manv`, `ngaynhap`, `tongtien`) VALUES
('PN01', 'NV01', '2017-08-15', 49000000),
('PN02', 'NV03', '2017-09-15', 8750000),
('PN03', 'NV05', '2017-10-15', 20000000);

-- --------------------------------------------------------

--
-- Table structure for table `phieuxuat`
--

DROP TABLE IF EXISTS `phieuxuat`;
CREATE TABLE IF NOT EXISTS `phieuxuat` (
  `mapx` char(10) NOT NULL,
  `madh` char(10) DEFAULT NULL,
  `manv` char(10) DEFAULT NULL,
  `ngayxuat` date DEFAULT NULL,
  `tongtien` double DEFAULT '0',
  PRIMARY KEY (`mapx`),
  KEY `mapx` (`mapx`),
  KEY `madh` (`madh`),
  KEY `manv` (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phieuxuat`
--

INSERT INTO `phieuxuat` (`mapx`, `madh`, `manv`, `ngayxuat`, `tongtien`) VALUES
('PX01', 'DH01', 'NV01', '2016-11-18', 165006),
('PX02', 'DH02', 'NV02', '2016-12-08', 130000),
('PX03', 'DH03', 'NV01', '2017-02-23', 90000),
('PX04', 'DH04', 'NV01', '2017-06-21', 200000),
('PX05', 'DH05', 'NV02', '2017-10-22', 451000),
('PX06', 'DH06', 'NV03', '2017-12-02', 140004);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `maloaisp` char(10) DEFAULT NULL,
  `masp` char(10) NOT NULL,
  `tensp` varchar(50) DEFAULT NULL,
  `hinhanh` varchar(50) DEFAULT NULL,
  `motasp` varchar(10000) DEFAULT NULL,
  `dvt` varchar(10) DEFAULT NULL,
  `giatien` int(11) DEFAULT NULL,
  PRIMARY KEY (`masp`),
  KEY `masp` (`masp`),
  KEY `maloaisp` (`maloaisp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`maloaisp`, `masp`, `tensp`, `hinhanh`, `motasp`, `dvt`, `giatien`) VALUES
('K06', 'BDDMN', 'Bộ dụng cụ mặt nạ', 'bomask.jpg', 'BỘ ĐẮP MẶT NẠ\r\n    Bộ trộn mask chuyên dụng giúp việc trộn và đắp các mặt nạ thiên nhiên trở nên dễ dàng, tiện dụng, sạch sẽ, nhanh chóng hơn. \r\n    ✔ Một bộ gồm có:\r\n    1. Mask bowl (bát trộn) – đường kính 8cm, cao 5cm\r\n    2. Mask stick (que trộn) – dài 15cm\r\n    3. Mask brush (cọ quét) – sợi mềm, rất thích hợp quét các loại mask lỏng\r\n    4. Bộ 3 muỗng với 3 kích cỡ: 2,5ml – 5ml – 15ml Bộ trộn cực kỳ tiện lợi cho việc đắp mặt, nhỏ gọn     và nhiều màu sắc xinh yêu nữa. Sau khi dùng các bạn nhớ vệ sinh sạch sẽ nha.\r\n    ✔ Màu sắc: hồng, tím , cam, vàng, xanh lá, xanh dương \r\n    Giá : 25.000', 'bộ', 25000),
('MB03', 'Bi', 'Bi lăn dầu dừa', 'bi.jpg', 'BI LĂN DẦU DỪA\r\n    Thành Phần: 100% nguyên chất.\r\n    Công Dụng:\r\n    - Dưỡng môi hồng hào, tươi tắn\r\n    - Tẩy tế bào chết, trị khô và thâm môi.\r\n     - Làm mềm những vùng da khô ráp.\r\n    - Massage cơ thể \r\n    Giá : 20.000', 'chai', 20000),
('BDD01', 'CD', 'Bột củ dền', 'botcuden.jpg', 'BỘT CỦ DỀN\r\n    Thành Phần: 100% từ hạt củ dền nguyên chất.\r\n    Công Dụng:\r\n    - Dưỡng trắng hồng da.\r\n    - Cung cấp chất dinh dưỡng cho da.\r\n     - Có tác dụng chống lão hóa mạnh.\r\n    Giá : 30.000', 'chai', 30000),
('BDD01', 'CG', 'Cám gạo', 'botcamgao.jpg', 'BỘT CÁM GẠO\r\n    Thành Phần: 100% từ gạo xay nguyên chất.\r\n    Công Dụng:\r\n    - Dưỡng trắng hồng da.\r\n    - Giúp trị nám, tàn nhang..\r\n     - Cung cấp dưỡng chất tái tạo làn da, Trị mụn.\r\n    - Thích hợp với mọi loại da. \r\n    Giá : 15.000', 'chai', 15000),
('K06', 'CQMN', 'Cọ quét mặt nạ', 'coquet.jpg', 'CỌ QUÉT MẶT NẠ\r\n    Cọ mask cán nhựa cứng cáp, đầu cọ mềm, giúp việc trộn và đắp các mặt nạ thiên nhiên trở nên dễ dàng, tiện dụng, sạch sẽ, nhanh chóng hơn. \r\n    Giá : 10.000', 'cây', 10000),
('DDTD02', 'DC02', 'Dầu cọ', 'dauco.jpg', 'DẦU CỌ\r\n    Thành Phần: 100% nguyên chất.\r\n    Dầu cọ được sử dụng để ngăn ngừa thiếu vitamin A, ngăn chặn ung thư, bệnh về não, chống lão hóa, làm thuốc chữa bệnh sốt rét, huyết áp cao, cholesterol cao, ngăn chặn tình trạng thiếu vitamin A\r\n    Giá : 25.000', 'chai', 25000),
('DDTD02', 'DCG', 'Dầu cám gạo', 'daucamgao.jpg', 'DẦU CÁM GẠO\r\n    Thành Phần: 100% nguyên chất.\r\n     Dựa trên những nghiên cứu khoa học gần đây cho thấy, nhờ dưỡng chất gamma oryzanol (hiệu quả gấp 4 lần vitamin E), dầu gạo có khả năng đẩy lùi các gốc tự do - nguyên nhân gây lão hóa da. Bên cạnh đó, gamma oryzanol còn hiệu quả trong việc chống lại tia UVA (nguyên nhân khiến da bị lão hóa sớm) và tia UVB, giúp giảm nguy cơ da bị cháy nắng, sạm nám, hoặc ung thư da. Cùng với vitamin E, gamma oryzanol hiệu quả trong việc ngăn chặn quá trình lão hóa diễn ra sớm trước tuổi 30, đặc biệt đối với những người sống ở khu vực thành thị bị tác động thường xuyên bởi môi trường ô nhiễm, tình trạng căng thẳng, chế độ ăn uống và nghỉ ngơi không điều độ. Do đó, dầu gạo đang được phụ nữ trên toàn thế giới tin dùng như một liệu pháp thiên nhiên cho sắc đẹp hữu hiệu để dưỡng da mặt, dưỡng da toàn thân, chống nám, phục hồi da hư tổn, dưỡng ẩm, dưỡng tóc… Với những công dụng vượt trội nêu trên, không ngạc nhiên khi loại dầu chiết xuất từ hạt gạo nguyên cám nhỏ bé đã trở thành nguyên liệu quý giá có khả năng chinh phục những người tiêu dùng khó tính nhất, để từ đó dẫn đầu xu hướng chăm sóc sức khỏe và làm đẹp trên toàn thế giới.\r\n    Giá : 25.000', 'chai', 25000),
('BDD01', 'DD01', 'Bột đậu đỏ', 'botdaudo.jpg', 'BỘT ĐẬU ĐỎ\r\n    Thành Phần: 100% từ hạt đậu đỏ nguyên chất.\r\n    Công Dụng:\r\n    - Dưỡng trắng hồng da.\r\n    - Tẩy tế bào chết, làm sạch da.\r\n     - Cung cấp dưỡng chất tái tạo làn da, Trị mụn.\r\n    - Thích hợp với mọi loại da. \r\n    Giá : 20.000', 'chai', 20000),
('DDTD02', 'DD02', 'Dầu dừa', 'daudua.jpg', 'DẦU DỪA\r\n    Thành Phần: 100% nguyên chất.\r\n    Công Dụng:\r\n    - Có thể sử dụng dầu dừa làm son dưỡng môi , massage ,hoặc thoa trực tiếp lên tóc giúp tóc mượt và mau dài , tương tự ứng dụng cho mi mắt làm mascara dầu dừa..\r\n    - làm giảm vết thâm quầng, làm nước súc miệng.\r\n    Giá : 40.000', 'chai', 40000),
('DDTD02', 'DG', 'Dầu gấc', 'dau-gac2.jpg', 'DẦU GẤC\r\n    Thành Phần: 100% nguyên chất.\r\n    Được chiết xuất từ phần thịt và hạt gấc nguyên chất 100% không sử dụng thêm bất kỳ một loại phụ gia hay hóa chất nào. Hoàn toàn tự nhiên nên rất thân thiện, không dị ứng, phản ứng phụ nào cho người sử dụng.     Chứa một hàm lượng beta-caroten rất cao, hơn hẳn so với hàm lượng beta-caroten chứa trong cà rốt và dầu cá thu, ngoài ra dầu gấc còn chứa một hàm lượng vitamin A cao.\r\n    Công dụng:\r\n    - Sử dụng tinh dầu gấc giúp ngăn ngừa lão hóa hiệu quả, mang lại một làn da mịn màng, mềm mại, sáng màu và khỏe mạnh.\r\n    - Tinh dầu gấc còn giúp da mịn màng, se khít lỗ chân lông.\r\n    - Ngoài ra đối việc trị nám, dầu gấc tỏ ra rất hữu dụng.\r\n    Giá : 80.000', 'chai', 80000),
('DDTD02', 'DHN', 'Dầu hạnh nhân', 'dauhanhnhan.jpg', 'DẦU HẠNH NHÂN\r\n    Thành Phần: 100% nguyên chất.\r\n    Công Dụng:\r\n    - Trị nám da\r\n    - Xóa thâm quầng mắt \r\n    - Sử dụng phổ biến trong massage trị liệu do hấp thụ tốt qua da giúp da mềm mịn, không gây nhờn dính.\r\n    - Giúp trẻ hóa làn da, cải thiện màu sắc da làm da sáng hơn. Massage với dầu hạnh nhân giúp giảm mệt mỏi, đau nhức.\r\n    Giá : 25.000', 'chai', 25000),
('DDTD02', 'DHNHO', 'Dầu hạt nho', 'dauhatnho.jpg', 'DẦU HẠT NHO\r\n    \r\nThành Phần: 100% nguyên chất.\r\n    Công Dụng:\r\n    Công dụng dầu hạt nho Grape seed oil :\r\n    - Có nhiều chất chống oxy hóa hơn vitamin C và E. Dầu hạt nho là một chất chống oxy hóa rất mạnh.\r\n     Khoa học đã chứng minh mức độ chống oxy hóa của loại dầu này còn cao hơn những loại hoa quả      và thực phẩm chứa vitamin E và C.\r\n    - Giảm thiểu tối đa sự lão hóa da.\r\n    - Giảm quầng thâm mắt.\r\n    - Hạn chế tốc độ lão hóa da.\r\n     - Liệu pháp trị mụn tự nhiên.\r\n     - Chất lỏng không gây nhờn.\r\n     - Dễ dàng thấm nhanh qua da, giúp làm se lỗ chân lông dịu nhẹ.\r\n    - Không gây dị ứng da.\r\n    - Dầu hạt nho rất tốt cho những mái tóc mỏng, dễ gãy rụng và bị hư tổn, nuôi dưỡng từng sợi tóc, giúp tóc chắc khoẻ hơn.\r\n\r\n    Giá : 23.000', 'chai', 23000),
('BDD01', 'DN', 'Bột đậu nành', 'botdaunanh.jpg', 'BỘT ĐẬU NÀNH\r\n    Thành Phần: 100% từ hạt đậu nành nguyên chất.\r\n    Công Dụng:\r\n    - Dưỡng trắng hồng da.\r\n    - Tẩy tế bào chết, làm sạch da.\r\n     - Cung cấp dưỡng chất tái tạo làn da, Trị mụn.\r\n    - Thích hợp với da thường, da khô, da hỗn hợp. \r\n    Giá : 17.000', 'chai', 17000),
('BDD01', 'HH01', 'Bột hoa hồng', 'bothoahong.jpg', 'BỘT HOA HỒNG\r\n    Thành Phần: 100% từ hoa hồng nguyên chất.\r\n    Công Dụng:\r\n    - Tái tạo độ ẩm đàn hồi săn chắc da. Cân bằng độ PH cho da.\r\n    - Làm da trắng hồng, mịn màng. Mang lại sức khoẻ cho làn da.\r\n     - Ngăn chặn quá trình lão hoá của da, giảm nhăn nhiệi quả.\r\n    - Thích hợp với mọi loại da. \r\n    Giá : 35.000', 'chai', 35000),
('BDD01', 'KT', 'Bột khoai tây', 'botkhoaitay.jpg', 'BỘT KHOAI TÂY\r\n    Thành Phần: 100% từ khoai tây nguyên chất.\r\n    Công Dụng:\r\n    - Chứa nhiều vitamin C giúp da sáng trắng.\r\n    - Tạo độ săn chắc cho da, giúp ngăn ngừa lão hoá.\r\n     - Cung cấp dưỡng chất tái tạo làn da, Trị mụn.\r\n    - Chữa lành vết thương, vết rạn da. \r\n    Giá : 30.000', 'chai', 30000),
('BDD01', 'LA', 'Bột lá neem', 'botlaneem.jpg', 'BỘT LÁ NEEM\r\n    Thành Phần: 100% từ lá neem Ấn Độ nguyên chất.\r\n    Công Dụng:\r\n    - Dưỡng trắng hồng da.\r\n    - Tẩy tế bào chết, làm sạch da.\r\n     - Cung cấp dưỡng chất tái tạo làn da, Trị mụn.\r\n    - Thích hợp với mọi loại da. \r\n    Giá : 55.000', 'chai', 55000),
('S04', 'M', 'Muối Himalaya', 'muoihimalya.jpg', 'MUỐI HIMALAYA\r\n     ✔ TẠI SAO da bạn dưỡng mãi vẫn không lên tone?\r\n    ✔ TẠI SAO đã mua biết bao sản phẩm dưỡng trắng da chất lượng mà bạn vẫn không thấy hiệu quả như mong đợi?\r\nCÓ THỂ LÀ DO LÀN DA CỦA BẠN CHƯA ĐƯỢC CHĂM SÓC ĐÚNG CÁCH!\r\n    Mỗi ngày làn da của chúng ta tiếp xúc với nhiều bụi bẩn. Chúng bám trên da ngày qua ngày mà mắt thường khó nhìn thấy được. MUỐI HIMALAYA lấy đi những mảng bám, bụi bẩn, da chết giúp lỗ chân thông tháng, sáng mịn da, góp phần hấp thu dưỡng chất từ sản phẩm làm đẹp dễ dàng hơn.\r\n    Giá : 45.000', 'gói', 45000),
('MB03', 'Mas', 'Mascara dầu dừa', 'masc.jpg', 'MASCARA DẦU DỪA\r\n    Thành Phần: 100% nguyên chất.\r\n    Công Dụng:\r\n    - Dưỡng mi dài và dày.\r\n    Giá : 25.000', 'chai', 25000),
('BDD01', 'NG', 'Bột nghệ', 'bot-nghe.png', 'BỘT NGHỆ\r\n    Thành Phần: 100% từ củ nghệ nguyên chất.\r\n    Công Dụng:\r\n    - Giúp giảm cân, lưu thông và lọc máu.\r\n    - Giúp chống ung thư, kháng viêm, giảm nguy cơ nhiễm trùng.\r\n     - Giúp liền sẹo.\r\n    -Chữa bệnh viêm khớp, tiêu hóa. \r\n    Giá : 50.000', 'chai', 50000),
('BDD01', 'NHH', 'Ngũ hoa hạt', 'nguhoahat.jpg', 'NGŨ HOA HẠT\r\n    Thành Phần: 100% các loại hạt thảo dược nguyên chất.\r\n    Công Dụng:\r\n    - Làm mát da.\r\n    - Hút đi mủ trong mụn, kiểm soát lượng dầu.\r\n     - Giúp da mặt căng bóng, trắng sáng, .\r\n    Giá : 30.000', 'chai', 30000),
('S04', 'SD', 'Son dưỡng', 'sonduong.jpg', 'HŨ SON DƯỠNG\r\n    Thành Phần: 100% tự nhiên.\r\n     Son dưỡng môi không chỉ để dưỡng ẩm mà còn góp phần tăng sức đề kháng cho vùng da mỏng     manh của môi, chống lại các tác nhân gây hại từ bên ngoài cho môi như nắng nóng, khói bụi, ô nhiễm và     các loại son tạo màu chứa chì.\r\n    Giá : 22.000', 'cây', 22000),
('S04', 'SDKM', 'Son dưỡng không màu', 'sonkomau.jpg', 'SON KHÔNG MÀU\r\n    Thành Phần: 100% tự nhiên.\r\n     Son dưỡng môi không chỉ để dưỡng ẩm mà còn góp phần tăng sức đề kháng cho vùng da mỏng     manh của môi, chống lại các tác nhân gây hại từ bên ngoài cho môi như nắng nóng, khói bụi, ô nhiễm và     các loại son tạo màu chứa chì.\r\n    Giá : 20.000', 'cây', 20000),
('S04', 'SK', 'Son kem', 'sonkem.jpg', 'SON KEM\r\n    Thành Phần: 100% tự nhiên.\r\n     ✔ Son bền màu, lì màu, dưỡng môi, chống nắng, nguyên liệu thiên nhiên 100% không chì, không chất bảo quản \r\n     ✔Có 10 màu\r\n     - Đỏ cam\r\n     - Đỏ hồng\r\n     - Đỏ tươi\r\n     - Đỏ nude\r\n     - Cam đỏ\r\n     - Cam đào\r\n     - Cam đất\r\n     - Hồng ấn\r\n     - Hồng dưa hấu\r\n     - Hồng cam\r\n    Giá : 60.000', 'cây', 60000),
('S04', 'SS', 'Son sáp', 'son-sap.jpg', 'SON SÁP\r\n    Thành Phần: 100% tự nhiên.\r\n     ✔ Son bền màu, lì màu, dưỡng môi, chống nắng, nguyên liệu thiên nhiên 100% không chì, không chất bảo quản \r\n     ✔Có 10 màu\r\n     - Đỏ cam\r\n     - Đỏ hồng\r\n     - Đỏ tươi\r\n     - Đỏ nude\r\n     - Cam đỏ\r\n     - Cam đào\r\n     - Cam đất\r\n     - Hồng ấn\r\n     - Hồng dưa hấu\r\n     - Hồng cam\r\n    Giá : 35.000', 'cây', 35000),
('S04', 'ST', 'Son tươi', 'son-tuoi.jpg', 'SON TƯƠI\r\n    Thành Phần: 100% tự nhiên.\r\n     ✔ Son bền màu, lì màu, dưỡng môi, chống nắng, nguyên liệu thiên nhiên 100% không chì, không chất bảo quản \r\n     ✔Có 10 màu\r\n     - Đỏ cam - Đỏ hồng - Đỏ tươi - Đỏ nude\r\n     - Cam đỏ - Cam đào - Cam đất\r\n     - Hồng ấn - Hồng dưa hấu - Hồng cam\r\n    Giá : 90.000', 'cây', 90000),
('K06', 'ST06', 'Sữa tươi mini', 'suatuoi.jpg', 'SỮA TƯƠI MINI NGUYÊN KEM\r\n    Trong 100ml sữa chứa: 65 calories, 3.4g protein(đạm), 4.8 carbs, 3.6g rất tốt cho ai ăn kiêng hoặc muốn lên cơ,giảm mỡ.\r\n    Tác dụng của sữa bò nguyên chất tự nhiên: \r\n    ✔ Đắp mặt nạ dưỡng da\r\n    ✔ Pha với cà phê uống \r\n    ✔ Tẩy trang an toàn và hiệu quả.\r\n    Giá : 2.000', 'hũ', 2000),
('DDTD02', 'TDB', 'Tinh dầu bưởi', 'tdbuoi.jpg', 'TINH DẦU BƯỞI\r\n    Thành Phần: 100% nguyên chất.\r\n    Công Dụng:\r\n    - Tinh dầu bưởi có tác dụng thông lợi trừ đờm, hòa huyết, giảm đau, chống rụng và kích thích mọc tóc\r\n    Giá : 35.000', 'chai', 35000),
('DDTD02', 'TDBH', 'Tinh dầu bạc hà', 'tinhdaubacha.jpg', 'INH DẦU BẠC HÀ\r\n    Thành Phần: 100% nguyên chất.\r\n    Công Dụng:\r\n    - Trị hơi thở có mùi, xoa dịu chứng đau bao tử, giảm đau bụng, đầy hơi, nhức đầu, khó tiêu, ợ nóng. Ngoài ra tinh dầu bạc hà còn tăng sự phấn khích và giảm mệt mỏi\r\n    Giá : 45.000', 'chai', 45000),
('DDTD02', 'TDHH', 'Tinh dầu hoa hồng', 'tdhoahong.jpg', 'TINH DẦU HOA HỒNG\r\n    Thành Phần: 100% nguyên chất.\r\n    Công Dụng:\r\n    - Tinh dầu hoa hồng có tác dụng điều hòa các chức năng sinh học, giúp cân bằng hooc-mon, cải thiện sự trao đổi chất và lưu thông huyết mạch. \r\n    - Giảm tình trạng dị ứng da, giảm vết thâm nám, sạm da, vết nhăn , đồng thời làm trắng da và se khít lỗ chân lông.\r\n    Giá : 60.000', 'chai', 60000),
('DDTD02', 'TDSC', 'Tinh dầu sả chanh', 'tdsachanh.jpg', 'INH DẦU SẢ CHANH\r\n    Thành Phần: 100% nguyên chất.\r\n    Tinh dầu Sả Chanh giúp giảm đau, chống trầm cảm, chống nhiễm khuẩn, chống đầy hơi, khử mùi, lợi tiểu, giải nhiệt, diệt nấm mốc. Hương thơm giúp hưng phấn tinh thần, giải tỏa căng thẳng, lo âu. Dùng xông để sát khuẩn, khử mùi hôi tanh, đuổi muỗi và côn trùng rất hiệu quả.\r\n    Giá : 45.000', 'chai', 45000),
('BDD01', 'THT', 'Bột than tre', 'botthantre.jpg', 'BỘT THAN TRE\r\n    Thành Phần: 100% tự nhiên.\r\n    Công Dụng:\r\n    - Tẩy độc, thanh lọc da, khử vi khuẩn, khử mùi cơ thể.\r\n    -Trị mụn, kiềm nhờn, se khít lỗ chân lông.\r\n     - Làm mỹ phẩm..\r\n    - Thích hợp với mọi loại da. \r\n    Giá : 35.000', 'chai', 35000),
('S04', 'TTB', 'Tẩy tế bào', 'tttbc.jpg', 'TẨY TẾ BÀO\r\n    Thành Phần: 100% tự nhiên.\r\n    Công Dụng:\r\n    - Dưỡng môi hồng hào, tươi tắn.\r\n    - Tẩy tế bào chết, trị môi khô - nứt nẻ.\r\n    Giá : 25.000', 'hũ', 25000),
('BDD01', 'TX', 'Bột trà xanh', 'bottraxanh.jpg', 'BỘT TRÀ XANH\r\n    Thành Phần: 100% từ lá trà xanh nguyên chất.\r\n    Công Dụng:\r\n    - Giúp da mịn và tươi sáng.\r\n    -Tăng cường collagen, trị nám.\r\n     - Cung cấp dưỡng chất tái tạo làn da, Trị mụn.\r\n    - Thích hợp với mọi loại da. \r\n    Giá : 40.000', 'chai', 40000),
('XP05', 'XPDD', 'Xà phòng dầu dừa', 'daudua.jpg', 'XÀ PHÒNG DẦU DỪA\r\n    Thành phần chính từ: bơ hạt mỡ, bơ ca cao, dầu ô-liu, dầu dừa, dầu cám gạo, chiết xuất dầu jojoba nước cất, thuốc kiềm, tinh dầu hoắc hương,...\r\n    CÔNG DỤNG:\r\n    ✔ Giúp da trắng mịn, sáng hồng hào khỏe mạnh\r\n    ✔ Giữ ẩm tuyệt vời cho da khô, da nhạy cảm\r\n    ✔ Giảm mụn, ngăn ngừa lão hóa da\r\n    Giá : 60.000', 'bánh', 60000),
('XP05', 'XPHH', 'Xà phòng hoa hồng', 'hoahong.jpg', 'XÀ PHÒNG HOA HỒNG\r\n    Thành phần chính từ: bơ hạt mỡ, bơ ca cao, dầu ô-liu, dầu dừa, dầu cám gạo, chiết xuất dầu jojoba nước cất, thuốc kiềm, tinh dầu hoắc hương,...\r\n    CÔNG DỤNG:\r\n    ✔ Giúp da trắng mịn, sáng hồng hào khỏe mạnh\r\n    ✔ Giữ ẩm tuyệt vời cho da khô, da nhạy cảm\r\n    ✔ Giảm mụn, ngăn ngừa lão hóa da\r\n    Giá : 60.000', 'bánh', 60000),
('XP05', 'XPTT', 'Xà phòng than tre', 'than.jpg', 'À PHÒNG THAN TRE\r\n    Thành phần chính từ: bơ hạt mỡ, bơ ca cao, dầu ô-liu, dầu dừa, dầu cám gạo, chiết xuất dầu jojoba nước cất, thuốc kiềm, tinh dầu hoắc hương,...\r\n    CÔNG DỤNG:\r\n    ✔ Giúp da trắng mịn, sáng hồng hào khỏe mạnh\r\n    ✔ Giữ ẩm tuyệt vời cho da khô, da nhạy cảm\r\n    ✔ Giảm mụn, ngăn ngừa lão hóa da\r\n    Giá : 60.000', 'bánh', 60000),
('BDD01', 'YM', 'Bột yến mạch', 'botyenmach.jpg', 'BỘT YẾN MẠCH\r\n    Thành Phần: 100% từ hạt yến mạch nguyên chất.\r\n    Công Dụng:\r\n    - Dưỡng trắng hồng da.\r\n    - Tẩy tế bào chết, làm sạch da.\r\n     - Se khít lỗ chân lông, làm dịu da cháy nắng.\r\n    - Thích hợp với mọi loại da. \r\n    Giá : 25.000', 'chai', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

DROP TABLE IF EXISTS `tintuc`;
CREATE TABLE IF NOT EXISTS `tintuc` (
  `manv` char(10) DEFAULT NULL,
  `matt` char(10) NOT NULL,
  `tentt` varchar(50) DEFAULT NULL,
  `noidungtt` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`matt`),
  KEY `matt` (`matt`),
  KEY `manv` (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`manv`, `matt`, `tentt`, `noidungtt`) VALUES
('NV01', 'TT01', 'Công dụng của bột trà xanh', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluansp`
--
ALTER TABLE `binhluansp`
  ADD CONSTRAINT `binhluansp_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`),
  ADD CONSTRAINT `binhluansp_ibfk_3` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Constraints for table `chitietkhuyenmai`
--
ALTER TABLE `chitietkhuyenmai`
  ADD CONSTRAINT `chitietkhuyenmai_ibfk_1` FOREIGN KEY (`makm`) REFERENCES `khuyenmai` (`makm`),
  ADD CONSTRAINT `chitietkhuyenmai_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Constraints for table `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD CONSTRAINT `chitietphieunhap_ibfk_1` FOREIGN KEY (`mapn`) REFERENCES `phieunhap` (`mapn`),
  ADD CONSTRAINT `chitietphieunhap_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Constraints for table `chitietphieuxuat`
--
ALTER TABLE `chitietphieuxuat`
  ADD CONSTRAINT `chitietphieuxuat_ibfk_1` FOREIGN KEY (`mapx`) REFERENCES `phieuxuat` (`mapx`),
  ADD CONSTRAINT `chitietphieuxuat_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);

--
-- Constraints for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD CONSTRAINT `phanhoi_ibfk_2` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`),
  ADD CONSTRAINT `phanhoi_ibfk_3` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Constraints for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);

--
-- Constraints for table `phieuxuat`
--
ALTER TABLE `phieuxuat`
  ADD CONSTRAINT `phieuxuat_ibfk_1` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`),
  ADD CONSTRAINT `phieuxuat_ibfk_2` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloaisp`) REFERENCES `loaisanpham` (`maloaisp`);

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
