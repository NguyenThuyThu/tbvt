-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 10, 2020 lúc 03:18 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thietbivienthong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_anhsanpham`
--

CREATE TABLE `tbl_anhsanpham` (
  `ma_anh` int(11) NOT NULL,
  `linkanh_sanpham` text COLLATE utf8_unicode_ci NOT NULL,
  `ma_sanpham` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_anhsanpham`
--

INSERT INTO `tbl_anhsanpham` (`ma_anh`, `linkanh_sanpham`, `ma_sanpham`) VALUES
(4, 'SP004.jpg', 'SP004'),
(5, 'SP005.jpg', 'SP005');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baohanh`
--

CREATE TABLE `tbl_baohanh` (
  `ma_baohanh` int(11) NOT NULL,
  `ngaynhan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytra` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `chiphi` decimal(10,0) NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci NOT NULL,
  `nguoibaohanh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nguoithuchien` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ma_sanpham` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binhluan`
--

CREATE TABLE `tbl_binhluan` (
  `ma_binhluan` int(11) NOT NULL,
  `noidung_binhluan` text COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_binhluan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `noidung_phanhoi` text COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_phanhoi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ma_taikhoan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ma_sanpham` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `ma_thanhvien` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ma_sanpham` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `thoigian` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ct_hoadon`
--

CREATE TABLE `tbl_ct_hoadon` (
  `ma_sanpham` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ma_hoadonmua` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `soluong_mua` int(10) NOT NULL,
  `giaban` decimal(10,0) NOT NULL,
  `tongtien` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_ct_hoadon`
--

INSERT INTO `tbl_ct_hoadon` (`ma_sanpham`, `ma_hoadonmua`, `soluong_mua`, `giaban`, `tongtien`) VALUES
('SP004', 'HDTK0031586456507', 10, '3150000', '31500000'),
('SP005', 'HDTK0031586456425', 10, '899000', '8990000'),
('SP005', 'HDTK0031586456456', 9, '899000', '8091000'),
('SP005', 'HDTK0031586456507', 10, '899000', '8990000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ct_phieunhap`
--

CREATE TABLE `tbl_ct_phieunhap` (
  `ma_sanpham` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ma_phieunhap` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `soluong_nhap` int(10) NOT NULL,
  `dongia_nhap` decimal(10,0) NOT NULL,
  `tongtien` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhgia`
--

CREATE TABLE `tbl_danhgia` (
  `ma_danhgia` int(11) NOT NULL,
  `sosao_danhgia` int(10) NOT NULL,
  `ma_sanpham` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ma_taikhoan` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc_sanpham`
--

CREATE TABLE `tbl_danhmuc_sanpham` (
  `ma_dmsanpham` int(11) NOT NULL,
  `ten_dmsanpham` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc_sanpham`
--

INSERT INTO `tbl_danhmuc_sanpham` (`ma_dmsanpham`, `ten_dmsanpham`) VALUES
(1, 'Thiết bị quang'),
(2, 'Thiết bị mạng'),
(3, 'Cáp mạng'),
(4, 'Cáp thông tin'),
(5, 'Cáp - bộ chuyển đổi tín hiệu'),
(6, 'Phụ kiện mạng'),
(7, 'Cáp quang các loại'),
(8, 'Dây nhảy quang'),
(9, 'Hộp phối quang ODF'),
(10, 'Phụ kiện quang'),
(11, 'Tủ mạng - thang máng cáp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_diachi`
--

CREATE TABLE `tbl_diachi` (
  `ma_diachi` int(11) NOT NULL,
  `ten_diachi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ma_thanhvien` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_diachi`
--

INSERT INTO `tbl_diachi` (`ma_diachi`, `ten_diachi`, `ma_thanhvien`) VALUES
(1, 'KTX A5 Pháp Vân - Quận Hoàn Mai - Hà Nội', 'TV001'),
(3, '96 Định Công - Thanh Xuân - Hà Nội', 'TV003'),
(4, 'Ninh Bình', 'TV004'),
(5, '96 Định Công, Thanh Xuân, Hà Nội', 'TV004'),
(15, 'Cung Kiệm', 'TV002'),
(20, 'Cung Kiệm, Nhân Hòa, Quễ Võ, Bắc Ninh', 'TV002');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donvitinh_sanpham`
--

CREATE TABLE `tbl_donvitinh_sanpham` (
  `ma_donvitinh` int(11) NOT NULL,
  `ten_donvitinh` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_donvitinh_sanpham`
--

INSERT INTO `tbl_donvitinh_sanpham` (`ma_donvitinh`, `ten_donvitinh`) VALUES
(1, 'Mét'),
(2, 'Gói');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hinhthucthanhtoan`
--

CREATE TABLE `tbl_hinhthucthanhtoan` (
  `ma_hinhthucthanhtoan` int(11) NOT NULL,
  `ten_hinhthucthanhtoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hinhthucthanhtoan`
--

INSERT INTO `tbl_hinhthucthanhtoan` (`ma_hinhthucthanhtoan`, `ten_hinhthucthanhtoan`) VALUES
(1, 'Thanh toán trực tiếp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadonmua`
--

CREATE TABLE `tbl_hoadonmua` (
  `ma_hoadonmua` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ngaylap` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chiphi_giao` decimal(10,0) DEFAULT NULL,
  `chiphi_lapdat` decimal(10,0) DEFAULT NULL,
  `ghichu` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_hinhthucthanhtoan` int(11) DEFAULT NULL,
  `nguoimuahang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nguoilap` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_trangthai_giaohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hoadonmua`
--

INSERT INTO `tbl_hoadonmua` (`ma_hoadonmua`, `ngaylap`, `chiphi_giao`, `chiphi_lapdat`, `ghichu`, `ma_hinhthucthanhtoan`, `nguoimuahang`, `nguoilap`, `ma_trangthai_giaohang`) VALUES
('HDTK0031586456425', '10/04/2020 01:20:25', NULL, NULL, 'ok', 1, 'TK003', NULL, 1),
('HDTK0031586456456', '10/04/2020 01:20:56', NULL, NULL, 'mua 9sản phẩm', 1, 'TK003', NULL, 1),
('HDTK0031586456507', '10/04/2020 01:21:47', NULL, NULL, 'Mua 2 sản phẩm', 1, 'TK003', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaisanpham`
--

CREATE TABLE `tbl_loaisanpham` (
  `ma_loaisanpham` int(11) NOT NULL,
  `ten_loaisanpham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ma_dmsanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loaisanpham`
--

INSERT INTO `tbl_loaisanpham` (`ma_loaisanpham`, `ten_loaisanpham`, `ma_dmsanpham`) VALUES
(1, 'Cáp mạng cat5e', 3),
(2, 'Cáp mạng cat6e', 3),
(3, 'Cáp đồng trục', 4),
(4, 'Cáp điều khiển', 4),
(5, 'Cáp điện thoại', 4),
(6, 'Bộ phát wifi - kích sóng wifi', 2),
(7, 'Switch chia mạng', 2),
(8, 'Cáp tín hiệu VGA', 5),
(9, 'Bộ lưu điện UPS', 6),
(10, 'Tủ mạng các loại', 11),
(11, 'Dao cắt sợi quang', 10),
(12, 'Hộp phối quang ngoài trời', 9),
(13, 'Dây nhảy quang SM', 8),
(14, 'Máy đo cáp quang', 1),
(15, 'Cáp quang Single Mode', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhacungcap`
--

CREATE TABLE `tbl_nhacungcap` (
  `ma_nhacungcap` int(11) NOT NULL,
  `ten_nhacungcap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `website` text COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhacungcap`
--

INSERT INTO `tbl_nhacungcap` (`ma_nhacungcap`, `ten_nhacungcap`, `diachi`, `sodienthoai`, `email`, `website`, `ghichu`) VALUES
(1, 'Công ty cổ phần Vintech', 'Số 14 Ngõ 74 Phố Nguyễn Lân – Thanh Xuân – Hà Nội', '  02473. 024 666', '', 'https://dienmayvienthong.com/', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phieunhap`
--

CREATE TABLE `tbl_phieunhap` (
  `ma_phieunhap` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_nhap` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci NOT NULL,
  `nguoilap` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nhacungcap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quyen`
--

CREATE TABLE `tbl_quyen` (
  `ma_quyen` int(11) NOT NULL,
  `ten_quyen` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_quyen`
--

INSERT INTO `tbl_quyen` (`ma_quyen`, `ten_quyen`) VALUES
(1, 'Admin'),
(2, 'Nhân viên'),
(3, 'Khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `ma_sanpham` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ten_sanpham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia_sanpham` decimal(10,0) NOT NULL,
  `xuatxu_sanpham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thoigianbaohanh_sanpham` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `thongsokythuat_sanpham` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai_dang_sanpham` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai_hot_sanpham` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nguoidang_sp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci NOT NULL,
  `ma_loaisanpham` int(11) NOT NULL,
  `ma_nhacungcap` int(11) NOT NULL,
  `ma_donvitinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`ma_sanpham`, `ten_sanpham`, `soluong`, `dongia_sanpham`, `xuatxu_sanpham`, `thoigianbaohanh_sanpham`, `thongsokythuat_sanpham`, `ngaydang`, `trangthai_dang_sanpham`, `trangthai_hot_sanpham`, `nguoidang_sp`, `ghichu`, `ma_loaisanpham`, `ma_nhacungcap`, `ma_donvitinh`) VALUES
('SP004', 'Cáp đồng trục HDPRO RG11 Đồng nguyên chất', 0, '3150000', 'HDPRO', '', '', '23/03/2020', '1', '1', 'TK001', '', 2, 1, 1),
('SP005', 'Bộ kick sóng wifi Linksys RE3000W N300', 110, '899000', 'Linksys', '15 tháng', '', '', '1', '1', 'TK001', '', 4, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_taikhoan`
--

CREATE TABLE `tbl_taikhoan` (
  `ma_taikhoan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ten_taikhoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `makhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydangky` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ma_thanhvien` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ma_quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_taikhoan`
--

INSERT INTO `tbl_taikhoan` (`ma_taikhoan`, `ten_taikhoan`, `makhau`, `ngaydangky`, `ma_thanhvien`, `ma_quyen`) VALUES
('TK001', 'admin', '356a192b7913b04c54574d18c28d46e6395428ab', '20/03/2020', 'TV001', 1),
('TK002', 'phuonganh', '356a192b7913b04c54574d18c28d46e6395428ab', '24/03/2020', 'TV004', 3),
('TK003', 'lambnck99', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '21/03/2020', 'TV002', 3),
('TK004', 'nam', '356a192b7913b04c54574d18c28d46e6395428ab', '21/03/2020', 'TV003', 2),
('TK89443', 'ha', '356a192b7913b04c54574d18c28d46e6395428ab', '2020/04/09 00:51:02', 'TV76811', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thanhvien`
--

CREATE TABLE `tbl_thanhvien` (
  `ma_thanhvien` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hoten_thanhvien` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thanhvien`
--

INSERT INTO `tbl_thanhvien` (`ma_thanhvien`, `hoten_thanhvien`, `ngaysinh`, `gioitinh`, `sodienthoai`, `email`) VALUES
('TV001', 'Admin', '1998-03-16', 'Nữ', '0968478845', 'nguyenthithuy6998@gmail.com'),
('TV002', 'Nguyễn Văn Lâm', '02/10/1999', 'Nam', '0968478845', 'vanlam99qv1@gmail.com'),
('TV003', 'Trần Văn Nam', '1996-03-23', 'Nam', '0361921234', 'namtran@gmail.com'),
('TV004', 'Nguyễn Phương Anh', '1997-03-02', 'Nữ', '0389234578', 'phuonganhnguyen@gmail.com'),
('TV76811', 'Trần Anh Hà', '2020-04-08', 'Nam', '0361256712', 'ahaha@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_trangthaigiaohang`
--

CREATE TABLE `tbl_trangthaigiaohang` (
  `ma_trangthai_giaohang` int(11) NOT NULL,
  `ten_trangthai_giaohang` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_trangthaigiaohang`
--

INSERT INTO `tbl_trangthaigiaohang` (`ma_trangthai_giaohang`, `ten_trangthai_giaohang`) VALUES
(1, 'Đang xử lý'),
(2, 'Đã xử lý'),
(3, 'Đang giao hàng'),
(4, 'Đã giao hàng'),
(5, 'Hủy đơn hàng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_anhsanpham`
--
ALTER TABLE `tbl_anhsanpham`
  ADD PRIMARY KEY (`ma_anh`,`ma_sanpham`),
  ADD KEY `fk_sanpham_image` (`ma_sanpham`);

--
-- Chỉ mục cho bảng `tbl_baohanh`
--
ALTER TABLE `tbl_baohanh`
  ADD PRIMARY KEY (`ma_baohanh`),
  ADD KEY `fk_khachhang_bh` (`nguoibaohanh`),
  ADD KEY `fk_nhanvien_thuchien` (`nguoithuchien`),
  ADD KEY `fk_sanpham_bh` (`ma_sanpham`);

--
-- Chỉ mục cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD PRIMARY KEY (`ma_binhluan`),
  ADD KEY `fk_nguoibinhluan` (`ma_taikhoan`),
  ADD KEY `fk_binhluan_sp` (`ma_sanpham`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`ma_thanhvien`,`ma_sanpham`);

--
-- Chỉ mục cho bảng `tbl_ct_hoadon`
--
ALTER TABLE `tbl_ct_hoadon`
  ADD PRIMARY KEY (`ma_sanpham`,`ma_hoadonmua`),
  ADD KEY `fk_cthd_hdm` (`ma_hoadonmua`);

--
-- Chỉ mục cho bảng `tbl_ct_phieunhap`
--
ALTER TABLE `tbl_ct_phieunhap`
  ADD PRIMARY KEY (`ma_sanpham`,`ma_phieunhap`),
  ADD KEY `fk_ctpn_pn` (`ma_phieunhap`);

--
-- Chỉ mục cho bảng `tbl_danhgia`
--
ALTER TABLE `tbl_danhgia`
  ADD PRIMARY KEY (`ma_danhgia`),
  ADD KEY `fk_nguoidanhgia` (`ma_taikhoan`),
  ADD KEY `fk_sp_danhgia` (`ma_sanpham`);

--
-- Chỉ mục cho bảng `tbl_danhmuc_sanpham`
--
ALTER TABLE `tbl_danhmuc_sanpham`
  ADD PRIMARY KEY (`ma_dmsanpham`);

--
-- Chỉ mục cho bảng `tbl_diachi`
--
ALTER TABLE `tbl_diachi`
  ADD PRIMARY KEY (`ma_diachi`),
  ADD KEY `fk_thanhvien` (`ma_thanhvien`);

--
-- Chỉ mục cho bảng `tbl_donvitinh_sanpham`
--
ALTER TABLE `tbl_donvitinh_sanpham`
  ADD PRIMARY KEY (`ma_donvitinh`);

--
-- Chỉ mục cho bảng `tbl_hinhthucthanhtoan`
--
ALTER TABLE `tbl_hinhthucthanhtoan`
  ADD PRIMARY KEY (`ma_hinhthucthanhtoan`);

--
-- Chỉ mục cho bảng `tbl_hoadonmua`
--
ALTER TABLE `tbl_hoadonmua`
  ADD PRIMARY KEY (`ma_hoadonmua`),
  ADD KEY `fk_htthanhtoan_hdmua` (`ma_hinhthucthanhtoan`),
  ADD KEY `fk_trangthaigiao_hdmua` (`ma_trangthai_giaohang`),
  ADD KEY `fk_nguoimua` (`nguoimuahang`),
  ADD KEY `fk_nguoilap` (`nguoilap`);

--
-- Chỉ mục cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  ADD PRIMARY KEY (`ma_loaisanpham`),
  ADD KEY `fk_dmsp_loaisp` (`ma_dmsanpham`);

--
-- Chỉ mục cho bảng `tbl_nhacungcap`
--
ALTER TABLE `tbl_nhacungcap`
  ADD PRIMARY KEY (`ma_nhacungcap`);

--
-- Chỉ mục cho bảng `tbl_phieunhap`
--
ALTER TABLE `tbl_phieunhap`
  ADD PRIMARY KEY (`ma_phieunhap`),
  ADD KEY `fk_phieunhap_ncc` (`ma_nhacungcap`),
  ADD KEY `fk_nguoilapphieu` (`nguoilap`);

--
-- Chỉ mục cho bảng `tbl_quyen`
--
ALTER TABLE `tbl_quyen`
  ADD PRIMARY KEY (`ma_quyen`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`ma_sanpham`),
  ADD KEY `fk_sp_loaisp` (`ma_loaisanpham`),
  ADD KEY `fk_sp_donvitinh` (`ma_donvitinh`),
  ADD KEY `fk_sp_nhacungcap` (`ma_nhacungcap`),
  ADD KEY `fk_nguoidangsp` (`nguoidang_sp`);

--
-- Chỉ mục cho bảng `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  ADD PRIMARY KEY (`ma_taikhoan`),
  ADD KEY `fk_tk_quyen` (`ma_quyen`),
  ADD KEY `fk_tk_thanhvien` (`ma_thanhvien`);

--
-- Chỉ mục cho bảng `tbl_thanhvien`
--
ALTER TABLE `tbl_thanhvien`
  ADD PRIMARY KEY (`ma_thanhvien`);

--
-- Chỉ mục cho bảng `tbl_trangthaigiaohang`
--
ALTER TABLE `tbl_trangthaigiaohang`
  ADD PRIMARY KEY (`ma_trangthai_giaohang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_anhsanpham`
--
ALTER TABLE `tbl_anhsanpham`
  MODIFY `ma_anh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_baohanh`
--
ALTER TABLE `tbl_baohanh`
  MODIFY `ma_baohanh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  MODIFY `ma_binhluan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_danhgia`
--
ALTER TABLE `tbl_danhgia`
  MODIFY `ma_danhgia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc_sanpham`
--
ALTER TABLE `tbl_danhmuc_sanpham`
  MODIFY `ma_dmsanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_diachi`
--
ALTER TABLE `tbl_diachi`
  MODIFY `ma_diachi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_donvitinh_sanpham`
--
ALTER TABLE `tbl_donvitinh_sanpham`
  MODIFY `ma_donvitinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_hinhthucthanhtoan`
--
ALTER TABLE `tbl_hinhthucthanhtoan`
  MODIFY `ma_hinhthucthanhtoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  MODIFY `ma_loaisanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_nhacungcap`
--
ALTER TABLE `tbl_nhacungcap`
  MODIFY `ma_nhacungcap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_quyen`
--
ALTER TABLE `tbl_quyen`
  MODIFY `ma_quyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_trangthaigiaohang`
--
ALTER TABLE `tbl_trangthaigiaohang`
  MODIFY `ma_trangthai_giaohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_anhsanpham`
--
ALTER TABLE `tbl_anhsanpham`
  ADD CONSTRAINT `fk_sanpham_image` FOREIGN KEY (`ma_sanpham`) REFERENCES `tbl_sanpham` (`ma_sanpham`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_baohanh`
--
ALTER TABLE `tbl_baohanh`
  ADD CONSTRAINT `fk_khachhang_baohanh` FOREIGN KEY (`nguoibaohanh`) REFERENCES `tbl_thanhvien` (`ma_thanhvien`),
  ADD CONSTRAINT `fk_nhanvien_baohanh` FOREIGN KEY (`nguoithuchien`) REFERENCES `tbl_thanhvien` (`ma_thanhvien`),
  ADD CONSTRAINT `fk_sanpham_baohanh` FOREIGN KEY (`ma_sanpham`) REFERENCES `tbl_sanpham` (`ma_sanpham`);

--
-- Các ràng buộc cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD CONSTRAINT `fk_binhluan_sp` FOREIGN KEY (`ma_sanpham`) REFERENCES `tbl_sanpham` (`ma_sanpham`),
  ADD CONSTRAINT `fk_nguoibinhluan` FOREIGN KEY (`ma_taikhoan`) REFERENCES `tbl_taikhoan` (`ma_taikhoan`);

--
-- Các ràng buộc cho bảng `tbl_ct_hoadon`
--
ALTER TABLE `tbl_ct_hoadon`
  ADD CONSTRAINT `fk_cthd_hdm` FOREIGN KEY (`ma_hoadonmua`) REFERENCES `tbl_hoadonmua` (`ma_hoadonmua`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cthd_sp` FOREIGN KEY (`ma_sanpham`) REFERENCES `tbl_sanpham` (`ma_sanpham`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_ct_phieunhap`
--
ALTER TABLE `tbl_ct_phieunhap`
  ADD CONSTRAINT `fk_ctpn_pn` FOREIGN KEY (`ma_phieunhap`) REFERENCES `tbl_phieunhap` (`ma_phieunhap`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ctpn_sp` FOREIGN KEY (`ma_sanpham`) REFERENCES `tbl_sanpham` (`ma_sanpham`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_danhgia`
--
ALTER TABLE `tbl_danhgia`
  ADD CONSTRAINT `fk_nguoidanhgia` FOREIGN KEY (`ma_taikhoan`) REFERENCES `tbl_taikhoan` (`ma_taikhoan`),
  ADD CONSTRAINT `fk_sp_danhgia` FOREIGN KEY (`ma_sanpham`) REFERENCES `tbl_sanpham` (`ma_sanpham`);

--
-- Các ràng buộc cho bảng `tbl_diachi`
--
ALTER TABLE `tbl_diachi`
  ADD CONSTRAINT `fk_thanhvien_diachi` FOREIGN KEY (`ma_thanhvien`) REFERENCES `tbl_thanhvien` (`ma_thanhvien`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_hoadonmua`
--
ALTER TABLE `tbl_hoadonmua`
  ADD CONSTRAINT `fk_htthanhtoan_hdmua` FOREIGN KEY (`ma_hinhthucthanhtoan`) REFERENCES `tbl_hinhthucthanhtoan` (`ma_hinhthucthanhtoan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nguoilap` FOREIGN KEY (`nguoilap`) REFERENCES `tbl_taikhoan` (`ma_taikhoan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nguoimua` FOREIGN KEY (`nguoimuahang`) REFERENCES `tbl_taikhoan` (`ma_taikhoan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_trangthaigiao_hdmua` FOREIGN KEY (`ma_trangthai_giaohang`) REFERENCES `tbl_trangthaigiaohang` (`ma_trangthai_giaohang`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  ADD CONSTRAINT `fk_dmsp_loaisp` FOREIGN KEY (`ma_dmsanpham`) REFERENCES `tbl_danhmuc_sanpham` (`ma_dmsanpham`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_phieunhap`
--
ALTER TABLE `tbl_phieunhap`
  ADD CONSTRAINT `fk_nguoilapphieu` FOREIGN KEY (`nguoilap`) REFERENCES `tbl_taikhoan` (`ma_taikhoan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_phieunhap_ncc` FOREIGN KEY (`ma_nhacungcap`) REFERENCES `tbl_nhacungcap` (`ma_nhacungcap`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `fk_nguoidangsp` FOREIGN KEY (`nguoidang_sp`) REFERENCES `tbl_taikhoan` (`ma_taikhoan`),
  ADD CONSTRAINT `fk_sp_donvitinh` FOREIGN KEY (`ma_donvitinh`) REFERENCES `tbl_donvitinh_sanpham` (`ma_donvitinh`),
  ADD CONSTRAINT `fk_sp_loaisp` FOREIGN KEY (`ma_loaisanpham`) REFERENCES `tbl_loaisanpham` (`ma_loaisanpham`),
  ADD CONSTRAINT `fk_sp_nhacungcap` FOREIGN KEY (`ma_nhacungcap`) REFERENCES `tbl_nhacungcap` (`ma_nhacungcap`);

--
-- Các ràng buộc cho bảng `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  ADD CONSTRAINT `fk_tk_quyen` FOREIGN KEY (`ma_quyen`) REFERENCES `tbl_quyen` (`ma_quyen`),
  ADD CONSTRAINT `fk_tk_thanhvien` FOREIGN KEY (`ma_thanhvien`) REFERENCES `tbl_thanhvien` (`ma_thanhvien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
