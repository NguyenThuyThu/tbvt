-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 31, 2020 lúc 10:14 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tbvt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_anhsanpham`
--

CREATE TABLE `tbl_anhsanpham` (
  `ma_anh` bigint(20) NOT NULL,
  `linkanh_sanpham` text COLLATE utf8_unicode_ci NOT NULL,
  `ghichu_anh` text COLLATE utf8_unicode_ci NOT NULL,
  `douutien` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ma_sanpham` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_anhsanpham`
--

INSERT INTO `tbl_anhsanpham` (`ma_anh`, `linkanh_sanpham`, `ghichu_anh`, `douutien`, `ma_sanpham`) VALUES
(1, '1.jpg', '', '', 1),
(2, '42.jpg', '', '', 42),
(3, '43.jpg', '', '', 43),
(4, '44.jpg', '', '', 44),
(5, '46.jpg', '', '', 46),
(6, '47.jpg', '', '', 47),
(7, '48.jpg', '', '', 48),
(8, '49.jpg', '', '', 49),
(9, '50.jpg', '', '', 50),
(10, '51.jpg', '', '', 51),
(11, '52.jpg', '', '', 52),
(12, '54.jpg', '', '', 54),
(13, '55.jpg', '', '', 55),
(14, '56.jpg', '', '', 56),
(15, '57.jpg', '', '', 57);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baohanh`
--

CREATE TABLE `tbl_baohanh` (
  `ma_baohanh` bigint(20) NOT NULL,
  `ngaynhan_baohanh` datetime NOT NULL,
  `ngaytra_baohanh` datetime NOT NULL,
  `chiphi_baohanh` decimal(10,0) NOT NULL,
  `ghichu_baohanh` text COLLATE utf8_unicode_ci NOT NULL,
  `nguoican_baohanh` bigint(20) NOT NULL,
  `nguoithuchien_baohanh` bigint(20) NOT NULL,
  `ma_sanpham` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binhluan_sanpham`
--

CREATE TABLE `tbl_binhluan_sanpham` (
  `ma_binhluan` bigint(20) NOT NULL,
  `noidung_binhluan` text COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_binhluan` datetime NOT NULL,
  `noidung_phanhoi` text COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_phanhoi` datetime NOT NULL,
  `ma_taikhoan` bigint(20) NOT NULL,
  `ma_sanpham` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `ma_thanhvien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ma_sanpham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `thoigian` varchar(255) COLLATE utf8_unicode_ci NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitiet_hoadonmua`
--

CREATE TABLE `tbl_chitiet_hoadonmua` (
  `ma_chitiet_hoadonmua` bigint(20) NOT NULL,
  `soluong_mua` int(10) NOT NULL,
  `giaban` decimal(10,0) NOT NULL,
  `tongtien` decimal(10,0) NOT NULL,
  `ma_sanpham` bigint(20) NOT NULL,
  `ma_hoadonmua` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitiet_phieunhaphang`
--

CREATE TABLE `tbl_chitiet_phieunhaphang` (
  `ma_chitiet_phieunhap` bigint(20) NOT NULL,
  `soluong_nhap` int(10) NOT NULL,
  `dongia_nhap` decimal(10,0) NOT NULL,
  `ma_sanpham` bigint(20) NOT NULL,
  `ma_phieunhap` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhgia_sanpham`
--

CREATE TABLE `tbl_danhgia_sanpham` (
  `ma_danhgia` bigint(20) NOT NULL,
  `sosao_danhgia` int(10) NOT NULL,
  `ma_sanpham` bigint(20) NOT NULL,
  `ma_taikhoan` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc_sanpham`
--

CREATE TABLE `tbl_danhmuc_sanpham` (
  `ma_dmsanpham` int(10) NOT NULL,
  `ten_dmsanpham` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc_sanpham`
--

INSERT INTO `tbl_danhmuc_sanpham` (`ma_dmsanpham`, `ten_dmsanpham`) VALUES
(1, 'Thiết bị quang'),
(2, 'Thiết bị mạng'),
(3, 'Cáp mạng'),
(7, 'Cáp thông tin'),
(8, 'Cáp - bộ chuyển đổi tín hiệu'),
(9, 'Phụ kiện mạng'),
(10, 'Cáp quang các loại'),
(11, 'Dây nhảy quang'),
(12, 'Hộp phối quang ODF'),
(13, 'Phụ kiện quang'),
(14, 'Tủ mạng - thang máng cáp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donvitinh_sanpham`
--

CREATE TABLE `tbl_donvitinh_sanpham` (
  `ma_donvitinh` int(10) NOT NULL,
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
  `ma_hinhthucthanhtoan` int(10) NOT NULL,
  `ten_hinhthucthanhtoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadon_muahang`
--

CREATE TABLE `tbl_hoadon_muahang` (
  `ma_hoadonmua` bigint(20) NOT NULL,
  `ngaylap_hoadonmua` datetime NOT NULL,
  `chiphi_giaohang` decimal(10,0) NOT NULL,
  `chiphi_lapdat` decimal(10,0) NOT NULL,
  `ghichu_hoadonmua` text COLLATE utf8_unicode_ci NOT NULL,
  `ma_hinhthucthanhtoan` int(10) NOT NULL,
  `nguoimuahang` bigint(20) NOT NULL,
  `nguoilap_donhang` bigint(20) NOT NULL,
  `nguoigiao_donhang` bigint(20) NOT NULL,
  `ma_trangthai_giaohang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaisanpham`
--

CREATE TABLE `tbl_loaisanpham` (
  `ma_loaisanpham` int(10) NOT NULL,
  `ten_loaisanpham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ma_dmsanpham` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loaisanpham`
--

INSERT INTO `tbl_loaisanpham` (`ma_loaisanpham`, `ten_loaisanpham`, `ma_dmsanpham`) VALUES
(1, 'Cáp mạng cat5e', 3),
(2, 'Cáp mạng cat6e', 3),
(11, 'Cáp đồng trục', 7),
(12, 'Cáp điều khiển', 7),
(13, 'Cáp điện thoại', 7),
(14, 'Bộ phát wifi - kích sóng wifi', 2),
(15, 'Switch chia mạng', 2),
(16, 'Cáp tín hiệu VGA', 8),
(17, 'Bộ lưu điện UPS', 9),
(18, 'Tủ mạng các loại', 14),
(19, 'Dao cắt sợi quang', 13),
(20, 'Hộp phối quang ngoài trời', 12),
(21, 'Dây nhảy quang SM', 11),
(22, 'Máy đo cáp quang', 1),
(23, 'Cáp quang Single Mode ', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhacungcap`
--

CREATE TABLE `tbl_nhacungcap` (
  `ma_nhacungcap` int(10) NOT NULL,
  `ten_nhacungcap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi_nhacungcap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai_nhacungcap` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email_nhacungcap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `website_nhacungcap` text COLLATE utf8_unicode_ci NOT NULL,
  `ghichu_nhacungcap` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhacungcap`
--

INSERT INTO `tbl_nhacungcap` (`ma_nhacungcap`, `ten_nhacungcap`, `diachi_nhacungcap`, `sodienthoai_nhacungcap`, `email_nhacungcap`, `website_nhacungcap`, `ghichu_nhacungcap`) VALUES
(1, 'Công ty cổ phần Vintech', 'Số 14 Ngõ 74 Phố Nguyễn Lân – Thanh Xuân – Hà Nội', '02473. 024 666', '', 'https://dienmayvienthong.com/', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phieunhaphang`
--

CREATE TABLE `tbl_phieunhaphang` (
  `ma_phieunhap` bigint(20) NOT NULL,
  `thoigian_nhap` datetime NOT NULL,
  `ghichu_nhap` text COLLATE utf8_unicode_ci NOT NULL,
  `nguoilap_phieunhap` bigint(20) NOT NULL,
  `ma_nhacungcap` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quyen`
--

CREATE TABLE `tbl_quyen` (
  `ma_quyen` int(10) NOT NULL,
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
  `ma_sanpham` bigint(20) NOT NULL,
  `ten_sanpham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soluong_sanpham` int(20) NOT NULL,
  `dongia_sanpham` decimal(10,0) NOT NULL,
  `xuatxu_sanpham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thoigianbaohanh_sanpham` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `thongsokythuat_sanpham` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang_sanpham` datetime NOT NULL,
  `trangthai_dang_sanpham` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai_hot_sanpham` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nguoidang_sp` bigint(20) NOT NULL,
  `ghichu_sanpham` text COLLATE utf8_unicode_ci NOT NULL,
  `ma_loaisanpham` int(10) NOT NULL,
  `ma_nhacungcap` int(10) NOT NULL,
  `ma_donvitinh` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`ma_sanpham`, `ten_sanpham`, `soluong_sanpham`, `dongia_sanpham`, `xuatxu_sanpham`, `thoigianbaohanh_sanpham`, `thongsokythuat_sanpham`, `ngaydang_sanpham`, `trangthai_dang_sanpham`, `trangthai_hot_sanpham`, `nguoidang_sp`, `ghichu_sanpham`, `ma_loaisanpham`, `ma_nhacungcap`, `ma_donvitinh`) VALUES
(1, 'Cáp mạng Cat5e Commscope SFTP | PN : 219484-2', 120, '6490000', 'Việt Nam', '12 tháng', '', '2020-03-23 00:00:00', '1', '1', 1, '', 23, 1, 2),
(42, 'Cáp mạng Cat5e UTP COMMSCOPE PN: 1499418-1 – 25 Pa', 120, '18800000', 'COMMSCOPE', '12 tháng', 'Chất liệu:\r\n\r\nCáp mạng Cat5e UTP COMMSCOPE PN: 1499418-1 - 25 Pair\r\nCáp mạng Cat5e UTP COMMSCOPE PN: 1499418-1 – 25 Pair\r\nDây dẫn: đồng dạng solid, đường kính lõi 24 AWG.\r\nVỏ bọc cách điện: Polyethylene, 0.008in NOM.\r\nVỏ bọc: 0.032in nominal, PVC.\r\nNhiệt độ hoạt động: -20°C – 60°C.\r\nNhiệt độ lưu trữ: -20°C – 80°C.\r\nThông số lõi dây\r\n\r\nĐiện dung: 5.6 nF/100m.\r\nTrở kháng: 100 ohms +/-15%, 1 MHz to 200 MHz.\r\nĐiện trở dây dẫn: 9.38 ohms max/100m.\r\nĐiện áp : 300VAC hoặc VDC.\r\nĐộ trễ truyền: 538 ns/100 m max. @ 100 MHz.\r\nĐộ uốn cong: (4 X đường kính cáp) ≈ 2″.\r\nĐóng gói : 1000ft/ Wooden Reel (24 lbs/kft).\r\nBăng thông hỗ trợ tới 200MHz.\r\nThông tin thêm:\r\n\r\nThẩm tra độc lập bởi ETL SEMKO.\r\nBăng thông hỗ trợ tới 200 MHz.\r\nĐộ dày lõi 24 AWG, solid.\r\nVỏ cáp CM với nhiều chuẩn màu như : trắng, xám, xanh dương, vàng, được đóng gói dạng wooden reel, với chiều dài 1000 feet tương đương 305m.', '2020-03-28 00:00:00', '1', '1', 1, '', 1, 1, 2),
(43, 'Cáp mạng Cat6 UTP 4 pair Legrand chính hãng', 120, '2850000', 'Legrand', '12 tháng', 'Đường Kính dây dẫn\r\n0.5 mmt (24awg)\r\nChất Liệu\r\nĐồng\r\nVật Liệu cách nhiệt\r\nLSZH\r\nChe chắn Vật Liệu\r\nnhôm foil,\r\nChe chắn Bảo Hiểm\r\n100%,\r\nChất Liệu Vỏ Bọc\r\nPVC,\r\ncặp Nhận Dạng\r\ncặp 1: Xanh, Trắng/Màu Xanh;\r\nCặp 2: Cam, Trắng/Cam;\r\ncặp 3: Xanh, Trắng/Màu Xanh Lá Cây;\r\nCặp 4: Nâu, White/Brown.\r\nSố Cặp\r\n4 Cặp.\r\nGói\r\n305 m/hộp,\r\nTrọng lượng\r\nĐóng hộp 16kg', '2020-03-28 00:00:00', '1', '1', 1, '', 2, 1, 1),
(44, 'Cáp đồng trục HDPRO RG11 Đồng nguyên chất', 120, '3150000', 'HDPRO', '12 tháng', '– Bao gồm 2 lớp chống nhiễu.\r\n\r\n– Lớp dưới 168 x 0.16 mm sợi đồng chống nhiễu.\r\n\r\n– Đường kính lõi đồng 1.63 mm Solid BCCS.\r\n\r\n– Đóng gói: Dây đen 305m/Rulo gỗ.', '2020-03-28 00:00:00', '1', '1', 1, '', 11, 1, 1),
(46, 'Bộ kick sóng wifi Linksys RE3000W N300', 120, '899000', 'Linksys', '15 tháng', '– Cổng giao tiếp: 1 cổng Lan\r\n– Tốc độ LAN: 10/100Mbps\r\n– Tốc độ WIFI: Wifi 300Mbps\r\n– Angten: 2 ăng ten ngầm', '2020-03-28 00:00:00', '1', '1', 1, '', 14, 1, 2),
(47, 'Cáp VGA 30m Ugreen 11636', 100, '530000', 'Dtech', '12 tháng', 'Vỏ ngoài: Cao su ABS\r\nLõi cáp: Đồng nguyên chất\r\nĐầu vào, Đầu ra: VGA\r\nMàu Xanh, Đen\r\nHỗ trợ HD', '2020-03-28 00:00:00', '1', '1', 1, '', 16, 1, 1),
(48, 'Cáp quang chống sét OPGW loại 48-50-57-70-81-90-12', 120, '55000', 'Việt Nam', '12 tháng', 'Cáp quang OPGW50, OPGW57, OPGW70, OPGW81, OPGW90, OPGW120, OPGW130… với các loại chứa 12 sợi quang (12FO) , 24 sợi quang (24FO), 36 sợi quang (36FO), hoặc 48 sợi quang đơn mốt (single mode) theo tiêu chuẩn viễn thông ITU-G.652, ITU-G.652D, ITU-G.655 hoạt động ở bước sóng 1310nm và 1550nm', '2020-03-28 00:00:00', '1', '1', 1, '', 23, 1, 2),
(49, 'Cáp quang Single mode 4fo Commscope ngoài trời – P', 120, '35000', 'Commscope', '15 tháng', 'Cáp quang Single mode 4fo Commscope được Viễn Thông Xanh nhập khẩu đầy đủ CO, CQ. Sản phẩm cho tốc độ 10Gb và khoảng cách truyền lên tới 10km', '2020-03-28 00:00:00', '1', '1', 1, '', 23, 1, 2),
(50, 'Tủ Mạng 27U-D800, Tủ Rack 27U-D800', 120, '3450000', 'Việt Nam', '', 'Tủ Rack 27U D800 là nơi lắp đặt, bảo vệ các thiết bị viễn thông và giúp người sử dụng quản lý các thiết bị một cách khoa học, thuận tiện nhất', '2020-03-28 00:00:00', '1', '1', 1, '', 18, 1, 2),
(51, 'Dao cắt sợi quang Sumitomo FC-6S', 100, '8250000', 'Việt Nam', '12 tháng', 'Loại dao cắt: loại bán tự động, 4 thao tác cắt, tác động cắt đẩy tay.\r\nCông dụng: cắt sợi quang đơn hay cắt ribbon (nhiều sợi quang cùng 1 lúc)\r\nĐường kính sợi quang cắt: 125µm\r\nĐường kính sợi bao gồm lớp phủ: 250 ~ 900µm\r\nGóc cắt thành phẩm so với phương lằm ngang: 90° ± 0.5°\r\nChiều dài sợi thành phẩm: sợi đơn dao động 5 đến 20mm\r\nTuổi thọ lưỡi dao: 36,000 lần cắt\r\nCó thể điều chỉnh lưỡi dao theo chiều cao hay xoay vòng\r\nTrọng lượng: 430g', '2020-03-28 00:00:00', '1', '1', 1, '', 19, 1, 2),
(52, 'Hộp phối quang ODF 72FO ngoài trời', 100, '2520000', 'Việt Nam', '12 tháng', 'Chất liệu:  thép sơn tĩnh điện	\r\nChiều dài ống co nhiệt:   \r\nBảo vệ các mối hàn quang dài 60 x 1x2mm\r\nĐầu kết nối: SC,LC,ST,	\r\nAdapter: ST, SC,LC, FC …\r\nNhiệt độ: -5°C –> +60°C	\r\nSuy hao chèn: <= 0.2 dB\r\nĐộ ẩm tương đối: <=80% (ở 30°C)	\r\nSuy hao phản hồi: UPC ≥55dB, APC ≥65Db\r\nCao*Rộng*Sâu:	\r\nDây hàn quang: theo tùy chọn\r\nTrọng lượng :	\r\nỨng dụng: (FTTH), quang  LAN/ WAN, CATV', '2020-03-28 00:00:00', '1', '1', 1, '', 20, 1, 1),
(54, 'Dây nhảy quang Singlemode LC-LC', 100, '60000', 'Việt Nam', '12 tháng', 'Đầu kết nối SC\r\n LC/PC, SC/UPC hoặc SC/APC\r\n Đầu kết nối LC\r\n LC/PC, LC/UPC hoặc LC/APC\r\n Kiểu sợi quang\r\n Single-Mode 9/125µm\r\n Độ suy giảm tín hiệu\r\n ≤0.2 dB\r\n Bước sóng\r\n SM: 1300~1600nm\r\n Độ uốn cong\r\n R ≥ 3cm\r\n Lực căng lớn nhất\r\n ≤90N/cm\r\n Lực nghiền nát\r\n ≤550N/cm\r\n Đường kính vỏ ngoài\r\n 2.0mm hoặc 3.0mm\r\n Bề dày core\r\n SM: 9 microns\r\n Bề dầy Cladding\r\n 125 microns\r\n Vỏ\r\n PVC (OFNR-rated), SM: Mầu vàng\r\n Chiều dài\r\n 3m, 5m, 10m, 15m, 20m, 25m, 30m … hoặc theo đơn đặt hàng', '2020-03-28 00:00:00', '1', '1', 1, '', 21, 1, 1),
(55, 'Máy đo quang OTDR FTE-7000A 36/35dB Made in USA', 120, '95000000', 'OTDR', '12 tháng', 'Bước sóng	850, 1300, 1310, 1490,1550 and 1625 ±20nm\r\nDải động	27/26dB MM (Tùy chọn), 36/35/35/35dB SM\r\nĐộ rộng xung	5 – 20,000 ns\r\nĐơn vị tính	km, kf, mi\r\nVùng chết sự kiện	1m\r\nVùng chết suy hao	4m\r\nDữ liệu điểm lấy mẫu	up to 120,000\r\nĐộ phân giải	.125 – 32m\r\nSai số khoảng cách	±(0.75m + 0.005% x Distance + Sampling Resolution)\r\nKhoảng cài đặt	0.25-64km MM (Tùy chọn), 0.25-240km SM\r\nTốc độ làm mới thời gian thực	2 Hz\r\nChiết suất (GIR)	1.024 – 2.048\r\nĐộ tuyến tính	± .05 dB/dB\r\nDung lượng bộ nhớ	~1000\r\nLoại bộ nhớ	Internal\r\nNguồn cung cấp	Universal\r\npin	6 Hours\r\nNhiệt độ lưu trữ	-20° to 60°C\r\nDải nhiệt độ hoạt động	-10° to 50°C\r\nKích thước(w/out Rubber Boot)	7.62” L x 3.88” W x 1.56” H\r\n(194mm L x 99mm W x 40mm H)\r\nTrọng lượng	1.7 lbs (0.8 kg)\r\nCổng thông tin	USB and Bluetooth\r\nLoại đầu Connector	FC, ST, SC Interchangeable\r\nPhụ kiện cung cấp	Universal Power Adapter w/US, UK, Continental Europe, and Australian Plugs, Interchangeable FC/ST and SC Adapters, Android Application, Windows Compatible Software, Rubber Boot and Manual on CD', '2020-03-28 00:00:00', '1', '1', 1, '', 22, 1, 1),
(56, 'Máy đo công suất quang RY-M3207B dùng pin sạc', 120, '2500000', 'RuiYan', '12 tháng', '	RY-M3207B\r\nXuất xứ	RuiYan/Trung Quốc\r\nDải đo(dBm)	-70~+10 hoặc -50~+26\r\nĐộ ổn định (dB)	+0.2(5%)\r\nĐộ chính xác hiển thị (dB)	0,01\r\nBước sóng đo (nm)	850,980,1300,1310,1490,1550,1625\r\nNguồn phát laser	Công suất 10mw\r\nMàn hình	LCD 2.4TFT\r\nPin sạc	Lithium ion 1100mAh\r\nThời gian hoạt động của pin	>15 giờ liên tục\r\nNhiệt độ hoạt động	-10 ~ 60 ℃\r\nNhiệt độ lưu trữ	-25 ℃ ~ 70 ℃\r\nKích thước	190 * 100 * 48', '2020-03-28 00:00:00', '1', '1', 1, '', 22, 1, 1),
(57, 'Cáp đồng trục Golden Link RG59 đúc sẵn dây nguồn v', 120, '240000', 'Golden Link', '12 tháng', 'Chuyên dùng cho các loại camera CCTV và camera an ninh độ phân giải HD (HD-SDI cameras, AHD cameras, HD-TVI, and HD-CVI).\r\n– Có thể nối các sợi cáp Golden Link đúc sắn dây nguồn và jack BNC với nhau bằng đầu nối BNC double female để gia tăng khoảng cách sử dụng.', '2020-03-28 00:00:00', '1', '1', 1, '', 11, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_taikhoan`
--

CREATE TABLE `tbl_taikhoan` (
  `ma_taikhoan` bigint(20) NOT NULL,
  `ten_taikhoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `makhau_taikhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydangky_taikhoan` datetime NOT NULL,
  `ma_thanhvien` bigint(20) NOT NULL,
  `ma_quyen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_taikhoan`
--

INSERT INTO `tbl_taikhoan` (`ma_taikhoan`, `ten_taikhoan`, `makhau_taikhoan`, `ngaydangky_taikhoan`, `ma_thanhvien`, `ma_quyen`) VALUES
(1, 'admin', '356a192b7913b04c54574d18c28d46e6395428ab', '2020-03-24 00:00:00', 1, 1),
(17622, 'phuonganh', '356a192b7913b04c54574d18c28d46e6395428ab', '2020-03-23 18:41:14', 59180, 3),
(43246, 'nam', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '2020-03-23 18:42:42', 32124, 2),
(99576, 'lambnck99', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-03-30 06:44:29', 23559, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thanhvien`
--

CREATE TABLE `tbl_thanhvien` (
  `ma_thanhvien` bigint(20) NOT NULL,
  `hoten_thanhvien` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh_thanhvien` date NOT NULL,
  `gioitinh_thanhvien` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai_thanhvien` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email_thanhvien` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi_thanhvien` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thanhvien`
--

INSERT INTO `tbl_thanhvien` (`ma_thanhvien`, `hoten_thanhvien`, `ngaysinh_thanhvien`, `gioitinh_thanhvien`, `sodienthoai_thanhvien`, `email_thanhvien`, `diachi_thanhvien`) VALUES
(1, 'Admin', '1998-03-16', 'Nữ', '0968478845', 'nguyenthithuy6998@gmail.com', 'Nam Định'),
(23559, 'Nguyễn Văn Lâm', '0000-00-00', '', '', 'vanlam99qv1@gmail.com', ''),
(32124, 'Trần Văn Nam', '1996-03-23', 'Nam', '0361921234', 'namtran@gmail.com', 'Hà Nội'),
(59180, 'Nguyễn Phương Anh', '1997-03-02', 'Nữ', '0389234578', 'phuonganhnguyen@gmail.com', 'Ninh Bình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_trangthai_giaohang`
--

CREATE TABLE `tbl_trangthai_giaohang` (
  `ma_trangthai_giaohang` int(10) NOT NULL,
  `ten_trangthai_donhang` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_anhsanpham`
--
ALTER TABLE `tbl_anhsanpham`
  ADD PRIMARY KEY (`ma_anh`),
  ADD KEY `fk_anhsp_sp` (`ma_sanpham`);

--
-- Chỉ mục cho bảng `tbl_baohanh`
--
ALTER TABLE `tbl_baohanh`
  ADD PRIMARY KEY (`ma_baohanh`),
  ADD KEY `fk_khachhang_bh` (`nguoican_baohanh`),
  ADD KEY `fk_nhanvien_thuchien` (`nguoithuchien_baohanh`),
  ADD KEY `fk_sanpham_bh` (`ma_sanpham`);

--
-- Chỉ mục cho bảng `tbl_binhluan_sanpham`
--
ALTER TABLE `tbl_binhluan_sanpham`
  ADD PRIMARY KEY (`ma_binhluan`),
  ADD KEY `fk_nguoibinhluan` (`ma_taikhoan`),
  ADD KEY `fk_binhluan_sp` (`ma_sanpham`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`ma_thanhvien`,`ma_sanpham`);

--
-- Chỉ mục cho bảng `tbl_chitiet_hoadonmua`
--
ALTER TABLE `tbl_chitiet_hoadonmua`
  ADD PRIMARY KEY (`ma_chitiet_hoadonmua`),
  ADD KEY `fk_cthoadonmua_sp` (`ma_sanpham`),
  ADD KEY `fk_hdmua_cthoadonmua` (`ma_hoadonmua`);

--
-- Chỉ mục cho bảng `tbl_chitiet_phieunhaphang`
--
ALTER TABLE `tbl_chitiet_phieunhaphang`
  ADD PRIMARY KEY (`ma_chitiet_phieunhap`),
  ADD KEY `fk_ctphieunhap_sp` (`ma_sanpham`),
  ADD KEY `fk_phieunhap_ctphieunhap` (`ma_phieunhap`);

--
-- Chỉ mục cho bảng `tbl_danhgia_sanpham`
--
ALTER TABLE `tbl_danhgia_sanpham`
  ADD PRIMARY KEY (`ma_danhgia`),
  ADD KEY `fk_nguoidanhgia` (`ma_taikhoan`),
  ADD KEY `fk_sp_danhgia` (`ma_sanpham`);

--
-- Chỉ mục cho bảng `tbl_danhmuc_sanpham`
--
ALTER TABLE `tbl_danhmuc_sanpham`
  ADD PRIMARY KEY (`ma_dmsanpham`);

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
-- Chỉ mục cho bảng `tbl_hoadon_muahang`
--
ALTER TABLE `tbl_hoadon_muahang`
  ADD PRIMARY KEY (`ma_hoadonmua`),
  ADD KEY `fk_htthanhtoan_hdmua` (`ma_hinhthucthanhtoan`),
  ADD KEY `fk_trangthaigiao_hdmua` (`ma_trangthai_giaohang`),
  ADD KEY `fk_nguoigiao` (`nguoigiao_donhang`),
  ADD KEY `fk_nguoimua` (`nguoimuahang`),
  ADD KEY `fk_nguoilap` (`nguoilap_donhang`);

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
-- Chỉ mục cho bảng `tbl_phieunhaphang`
--
ALTER TABLE `tbl_phieunhaphang`
  ADD PRIMARY KEY (`ma_phieunhap`),
  ADD KEY `fk_phieunhap_ncc` (`ma_nhacungcap`),
  ADD KEY `fk_nguoilapphieu` (`nguoilap_phieunhap`);

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
-- Chỉ mục cho bảng `tbl_trangthai_giaohang`
--
ALTER TABLE `tbl_trangthai_giaohang`
  ADD PRIMARY KEY (`ma_trangthai_giaohang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_anhsanpham`
--
ALTER TABLE `tbl_anhsanpham`
  MODIFY `ma_anh` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_baohanh`
--
ALTER TABLE `tbl_baohanh`
  MODIFY `ma_baohanh` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_binhluan_sanpham`
--
ALTER TABLE `tbl_binhluan_sanpham`
  MODIFY `ma_binhluan` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_chitiet_hoadonmua`
--
ALTER TABLE `tbl_chitiet_hoadonmua`
  MODIFY `ma_chitiet_hoadonmua` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_chitiet_phieunhaphang`
--
ALTER TABLE `tbl_chitiet_phieunhaphang`
  MODIFY `ma_chitiet_phieunhap` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_danhgia_sanpham`
--
ALTER TABLE `tbl_danhgia_sanpham`
  MODIFY `ma_danhgia` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc_sanpham`
--
ALTER TABLE `tbl_danhmuc_sanpham`
  MODIFY `ma_dmsanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_donvitinh_sanpham`
--
ALTER TABLE `tbl_donvitinh_sanpham`
  MODIFY `ma_donvitinh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_hinhthucthanhtoan`
--
ALTER TABLE `tbl_hinhthucthanhtoan`
  MODIFY `ma_hinhthucthanhtoan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_hoadon_muahang`
--
ALTER TABLE `tbl_hoadon_muahang`
  MODIFY `ma_hoadonmua` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  MODIFY `ma_loaisanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tbl_nhacungcap`
--
ALTER TABLE `tbl_nhacungcap`
  MODIFY `ma_nhacungcap` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_phieunhaphang`
--
ALTER TABLE `tbl_phieunhaphang`
  MODIFY `ma_phieunhap` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_quyen`
--
ALTER TABLE `tbl_quyen`
  MODIFY `ma_quyen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `ma_sanpham` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `tbl_trangthai_giaohang`
--
ALTER TABLE `tbl_trangthai_giaohang`
  MODIFY `ma_trangthai_giaohang` int(10) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_anhsanpham`
--
ALTER TABLE `tbl_anhsanpham`
  ADD CONSTRAINT `fk_anhsp_sp` FOREIGN KEY (`ma_sanpham`) REFERENCES `tbl_sanpham` (`ma_sanpham`);

--
-- Các ràng buộc cho bảng `tbl_baohanh`
--
ALTER TABLE `tbl_baohanh`
  ADD CONSTRAINT `fk_khachhang_bh` FOREIGN KEY (`nguoican_baohanh`) REFERENCES `tbl_taikhoan` (`ma_taikhoan`),
  ADD CONSTRAINT `fk_nhanvien_thuchien` FOREIGN KEY (`nguoithuchien_baohanh`) REFERENCES `tbl_taikhoan` (`ma_taikhoan`),
  ADD CONSTRAINT `fk_sanpham_bh` FOREIGN KEY (`ma_sanpham`) REFERENCES `tbl_sanpham` (`ma_sanpham`);

--
-- Các ràng buộc cho bảng `tbl_binhluan_sanpham`
--
ALTER TABLE `tbl_binhluan_sanpham`
  ADD CONSTRAINT `fk_binhluan_sp` FOREIGN KEY (`ma_sanpham`) REFERENCES `tbl_sanpham` (`ma_sanpham`),
  ADD CONSTRAINT `fk_nguoibinhluan` FOREIGN KEY (`ma_taikhoan`) REFERENCES `tbl_taikhoan` (`ma_taikhoan`);

--
-- Các ràng buộc cho bảng `tbl_chitiet_hoadonmua`
--
ALTER TABLE `tbl_chitiet_hoadonmua`
  ADD CONSTRAINT `fk_cthoadonmua_sp` FOREIGN KEY (`ma_sanpham`) REFERENCES `tbl_sanpham` (`ma_sanpham`),
  ADD CONSTRAINT `fk_hdmua_cthoadonmua` FOREIGN KEY (`ma_hoadonmua`) REFERENCES `tbl_hoadon_muahang` (`ma_hoadonmua`);

--
-- Các ràng buộc cho bảng `tbl_chitiet_phieunhaphang`
--
ALTER TABLE `tbl_chitiet_phieunhaphang`
  ADD CONSTRAINT `fk_ctphieunhap_sp` FOREIGN KEY (`ma_sanpham`) REFERENCES `tbl_sanpham` (`ma_sanpham`),
  ADD CONSTRAINT `fk_phieunhap_ctphieunhap` FOREIGN KEY (`ma_phieunhap`) REFERENCES `tbl_phieunhaphang` (`ma_phieunhap`);

--
-- Các ràng buộc cho bảng `tbl_danhgia_sanpham`
--
ALTER TABLE `tbl_danhgia_sanpham`
  ADD CONSTRAINT `fk_nguoidanhgia` FOREIGN KEY (`ma_taikhoan`) REFERENCES `tbl_taikhoan` (`ma_taikhoan`),
  ADD CONSTRAINT `fk_sp_danhgia` FOREIGN KEY (`ma_sanpham`) REFERENCES `tbl_sanpham` (`ma_sanpham`);

--
-- Các ràng buộc cho bảng `tbl_hoadon_muahang`
--
ALTER TABLE `tbl_hoadon_muahang`
  ADD CONSTRAINT `fk_htthanhtoan_hdmua` FOREIGN KEY (`ma_hinhthucthanhtoan`) REFERENCES `tbl_hinhthucthanhtoan` (`ma_hinhthucthanhtoan`),
  ADD CONSTRAINT `fk_nguoigiao` FOREIGN KEY (`nguoigiao_donhang`) REFERENCES `tbl_taikhoan` (`ma_taikhoan`),
  ADD CONSTRAINT `fk_nguoilap` FOREIGN KEY (`nguoilap_donhang`) REFERENCES `tbl_taikhoan` (`ma_taikhoan`),
  ADD CONSTRAINT `fk_nguoimua` FOREIGN KEY (`nguoimuahang`) REFERENCES `tbl_taikhoan` (`ma_taikhoan`),
  ADD CONSTRAINT `fk_trangthaigiao_hdmua` FOREIGN KEY (`ma_trangthai_giaohang`) REFERENCES `tbl_trangthai_giaohang` (`ma_trangthai_giaohang`);

--
-- Các ràng buộc cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  ADD CONSTRAINT `fk_dmsp_loaisp` FOREIGN KEY (`ma_dmsanpham`) REFERENCES `tbl_danhmuc_sanpham` (`ma_dmsanpham`);

--
-- Các ràng buộc cho bảng `tbl_phieunhaphang`
--
ALTER TABLE `tbl_phieunhaphang`
  ADD CONSTRAINT `fk_nguoilapphieu` FOREIGN KEY (`nguoilap_phieunhap`) REFERENCES `tbl_taikhoan` (`ma_taikhoan`),
  ADD CONSTRAINT `fk_phieunhap_ncc` FOREIGN KEY (`ma_nhacungcap`) REFERENCES `tbl_nhacungcap` (`ma_nhacungcap`);

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
