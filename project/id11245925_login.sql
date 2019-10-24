-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 24, 2019 lúc 12:39 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id11245925_login`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `tieude` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tacgia` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaydangbai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanconggiangday`
--

CREATE TABLE `phanconggiangday` (
  `magiaovien` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `tengiaovien` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `malop` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenmon` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qllophoc`
--

CREATE TABLE `qllophoc` (
  `malop` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenlop` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenmon` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thoiluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlmonhoc`
--

CREATE TABLE `qlmonhoc` (
  `mamon` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenmon` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(11) DEFAULT 0,
  `sex` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`user`, `password`, `level`, `sex`, `birthday`, `address`, `email`, `phonenumber`) VALUES
('admin', '$2y$10$IPf9O.de2IVfC3FbmUWdDu32v071/LCqkjcGudztTGSW3N0W.UdUO', 1, 'Nữ', '1999-06-04', 'Nam Định', 'anhhtn72@wru.vn', '0359224746'),
('anh', '$2y$10$FjLIWC7ZgFjZe5IkwWw/l.0fZKUBHY0MdiIBIyejgoDSpgjmjFZnq', 0, 'Nữ', '2019-10-02', 'a', 'a', 'a'),
('anhanh', '$2y$10$Mm/0qZ.AnSXpD4mVhmkuCe.YZJjI0ZQrjs.t9xmBm24DkrPAaiwoC', 0, 'Nữ', '1999-06-04', 'Nam Định', 'hoanganhhuongduong1999@gmail.com', '0359224746'),
('baba', '$2y$10$7zhD/aT8PbFGjJ0vOaHSgOsDyrCDUwYaSoANSuiZGW0dHNVlkW80q', 0, 'Nữ', '2018-01-31', 'Nam Định', 'anhhtn72@wru.vn', '0399218680'),
('trang', '$2y$10$bnHXK2Qz3zsnQXl/qXzTx.uCMU95zobO0ybOQJ5HrwnNRk660708S', 0, 'Nữ', '1999-05-20', 'Hà Nội', 'htrang20599@gmail.com', '0363410510');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin`
--

CREATE TABLE `thongtin` (
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `messages` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtin`
--

INSERT INTO `thongtin` (`name`, `email`, `phone`, `birthday`, `messages`) VALUES
('hoanganh', 'anhhtn72@wru.vn', '0359224746', '1999-06-04', 'Hey!!!');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinkhoahoc`
--

CREATE TABLE `thongtinkhoahoc` (
  `idkhoahoc` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenkhoahoc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaybatdau` date DEFAULT NULL,
  `ngayketthuc` date DEFAULT NULL,
  `mota` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinkhoahoc`
--

INSERT INTO `thongtinkhoahoc` (`idkhoahoc`, `tenkhoahoc`, `ngaybatdau`, `ngayketthuc`, `mota`) VALUES
('CSE485', 'Công Nghệ Web', '2019-08-26', '2019-10-25', 'Xây dựng website trường đại học Nguyễn Tất Thành!');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`tieude`);

--
-- Chỉ mục cho bảng `phanconggiangday`
--
ALTER TABLE `phanconggiangday`
  ADD PRIMARY KEY (`magiaovien`),
  ADD KEY `malop` (`malop`);

--
-- Chỉ mục cho bảng `qllophoc`
--
ALTER TABLE `qllophoc`
  ADD PRIMARY KEY (`malop`);

--
-- Chỉ mục cho bảng `qlmonhoc`
--
ALTER TABLE `qlmonhoc`
  ADD PRIMARY KEY (`mamon`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`user`);

--
-- Chỉ mục cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  ADD PRIMARY KEY (`name`);

--
-- Chỉ mục cho bảng `thongtinkhoahoc`
--
ALTER TABLE `thongtinkhoahoc`
  ADD PRIMARY KEY (`idkhoahoc`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `phanconggiangday`
--
ALTER TABLE `phanconggiangday`
  ADD CONSTRAINT `phanconggiangday_ibfk_1` FOREIGN KEY (`malop`) REFERENCES `qllophoc` (`malop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
