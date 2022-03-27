-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 27, 2022 lúc 12:21 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbdoan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bomon`
--

CREATE TABLE `bomon` (
  `Id_BoMon` int(20) NOT NULL,
  `TenBoMon` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bomon`
--

INSERT INTO `bomon` (`Id_BoMon`, `TenBoMon`) VALUES
(1, 'Điện tử viễn thông\r\n'),
(2, 'Giải tích\r\n'),
(3, 'Những Nguyên lý cơ bản của Chủ nghĩa Mác - Lênin\r\n'),
(4, 'Kế toán\r\n'),
(5, 'Hệ thống thông tin\r\n'),
(6, 'Tin học Đại cương\r\n'),
(7, 'Khoa học máy tính\r\n'),
(8, 'Mạng, hệ thống máy tính và phương pháp dạy học Tin học\r\n'),
(9, 'Tiếng Anh\r\n'),
(10, 'Khoa học máy tính\r\n'),
(11, 'Tin học Đại cương\r\n'),
(12, 'Mạng, hệ thống máy tính và phương pháp dạy học Tin học\r\n'),
(13, 'Hệ thống thông tin\r\n'),
(14, 'Địa lý kinh tế xã hội và phương pháp dạy học\r\n'),
(15, 'Địa lý bản đồ\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chamcong`
--

CREATE TABLE `chamcong` (
  `Id_ChamCong` int(20) NOT NULL,
  `Id_NhanVien` int(11) NOT NULL,
  `Ngay` date NOT NULL,
  `GioVao` time NOT NULL,
  `GioRa` time NOT NULL,
  `GioTangCa` time NOT NULL,
  `GioBS` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chatbox`
--

CREATE TABLE `chatbox` (
  `Id_chat` int(11) NOT NULL,
  `Id_NhanVien` int(11) NOT NULL,
  `Id_LoaiChat` int(11) NOT NULL,
  `NoiDung` text NOT NULL,
  `ThoiGian` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `Id_ChucVu` int(20) NOT NULL,
  `TenChucVu` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`Id_ChucVu`, `TenChucVu`) VALUES
(1, 'test'),
(2, 'test2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyenmon`
--

CREATE TABLE `chuyenmon` (
  `Id_ChuyenMon` int(20) NOT NULL,
  `TenChuyenMon` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyenmon`
--

INSERT INTO `chuyenmon` (`Id_ChuyenMon`, `TenChuyenMon`) VALUES
(1, 'Điện - Điện tử\r\n'),
(2, 'Toán\r\n'),
(3, 'Kinh tế chính trị\r\n'),
(4, 'Tài chính - Ngân hàng\r\n'),
(5, 'Công nghệ thông tin\r\n'),
(6, 'Khoa học máy tính\r\n'),
(7, '\"Đảm bảo toán học \r\ncho máy tính và các \r\nhệ thống tính toán\"\r\n'),
(8, 'Mạng máy tính\r\n'),
(9, 'Đại số\r\n'),
(10, 'Công nghệ phần mềm\r\n'),
(11, 'Địa lý học (Địa lý kinh tế)\r\n'),
(12, 'Địa chính\r\n'),
(13, 'Địa lý tự nhiên\r\n'),
(14, 'Giáo dục thể chất\r\n'),
(15, 'Giáo dục quốc phòng\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `Id_DanhGia` int(11) NOT NULL,
  `Id_NhanVien` int(11) NOT NULL,
  `TongNgayLam` int(11) NOT NULL,
  `TongGioLam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `daotao`
--

CREATE TABLE `daotao` (
  `Id_DaoTao` int(20) NOT NULL,
  `Id_NhanVien` int(11) NOT NULL,
  `Id_LoaiDaoTao` int(11) NOT NULL,
  `TenDaoTao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayBatDau` date NOT NULL,
  `NgayKetThuc` date NOT NULL,
  `ChiPhi` double(8,2) NOT NULL,
  `NoiDung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDaoTao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TinhTrang` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvi`
--

CREATE TABLE `donvi` (
  `Id_DonVi` int(11) NOT NULL,
  `TenDonVi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donvi`
--

INSERT INTO `donvi` (`Id_DonVi`, `TenDonVi`) VALUES
(1, 'Ban Giám hiệu\r\n'),
(2, 'K. Công nghệ thông tin\r\n'),
(3, 'K. Địa lý - Địa chính\r\n'),
(4, 'K. GDTC - QP\r\n'),
(5, 'K. GDTH & MN\r\n	'),
(6, 'K. Hóa học\r\n'),
(7, 'K. Kinh tế & Kế toán\r\n'),
(8, 'K. Kỹ thuật & Công nghệ\r\n'),
(9, 'K. Lịch sử\r\n'),
(10, 'K. LLCT - HC\r\n'),
(11, 'K. Lý - KTCN\r\n'),
(12, 'K. Ngoại ngữ\r\n'),
(13, 'K. Ngữ văn\r\n'),
(14, 'K. TCNH & QTKD\r\n\r\n'),
(15, 'K. Sinh - KTNN\r\n\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khenthuongkiluat`
--

CREATE TABLE `khenthuongkiluat` (
  `Id_KTKL` int(11) NOT NULL,
  `Id_NhanVien` int(11) NOT NULL,
  `Ngay` date NOT NULL,
  `TienKTKL` float NOT NULL,
  `NoiDung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaichat`
--

CREATE TABLE `loaichat` (
  `Id_LoaiChat` int(11) NOT NULL,
  `TenChat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaidaotao`
--

CREATE TABLE `loaidaotao` (
  `Id_LoaiDaoTao` int(20) NOT NULL,
  `TenDaoTao` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitailieu`
--

CREATE TABLE `loaitailieu` (
  `Id_LoaiTaiLieu` int(11) NOT NULL,
  `TenLoaiTaiLieu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitrinhdo`
--

CREATE TABLE `loaitrinhdo` (
  `Id_LoaiTrinhDo` int(11) NOT NULL,
  `TenLoaiTrinhDo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaivanban`
--

CREATE TABLE `loaivanban` (
  `Id_LoaiVanBan` int(11) NOT NULL,
  `TenLoaiVanBan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiyeucau`
--

CREATE TABLE `loaiyeucau` (
  `Id_LoaiYeuCau` int(11) NOT NULL,
  `TenLoaiYeuCau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaiyeucau`
--

INSERT INTO `loaiyeucau` (`Id_LoaiYeuCau`, `TenLoaiYeuCau`) VALUES
(1, 'test');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luong`
--

CREATE TABLE `luong` (
  `Id_Luong` int(11) NOT NULL,
  `Id_NhanVien` int(11) NOT NULL,
  `Id_DanhGia` int(11) NOT NULL,
  `LuongCoBan` float NOT NULL,
  `HeSoLuong` float NOT NULL,
  `LuongLamThem` float NOT NULL,
  `TienKTKL` float NOT NULL,
  `TongLuong` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(94, '2014_10_12_000000_create_users_table', 1),
(95, '2014_10_12_100000_create_password_resets_table', 1),
(96, '2019_08_19_000000_create_failed_jobs_table', 1),
(97, '2022_03_11_063652_table_nhanvien', 1),
(98, '2022_03_11_063735_table_bomon', 1),
(99, '2022_03_11_063747_table_chamcong', 1),
(100, '2022_03_11_063811_table_chucvu', 1),
(101, '2022_03_11_063819_table_chuyenmon', 1),
(105, '2022_03_11_063850_table_loaidaotao', 1),
(110, '2022_03_11_063947_table_trinhdo', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `Id_NhanVien` int(20) NOT NULL,
  `Id_TrinhDo` int(11) NOT NULL,
  `Id_ChucVu` int(11) NOT NULL,
  `Id_ChuyenMon` int(11) NOT NULL,
  `Id_BoMon` int(11) NOT NULL,
  `Id_PhanQuyen` int(11) NOT NULL,
  `Id_DonVi` int(11) NOT NULL,
  `Ho` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CMND` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DanToc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiSinh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `QueQuan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DaVaoDang` tinyint(1) NOT NULL,
  `BienChe` tinyint(1) NOT NULL,
  `BatDauCongTac` date NOT NULL,
  `NgayVaoTruong` date NOT NULL,
  `Email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenTk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`Id_NhanVien`, `Id_TrinhDo`, `Id_ChucVu`, `Id_ChuyenMon`, `Id_BoMon`, `Id_PhanQuyen`, `Id_DonVi`, `Ho`, `Ten`, `NgaySinh`, `GioiTinh`, `CMND`, `DanToc`, `SDT`, `DiaChi`, `NoiSinh`, `QueQuan`, `DaVaoDang`, `BienChe`, `BatDauCongTac`, `NgayVaoTruong`, `Email`, `HinhAnh`, `TenTk`, `MatKhau`) VALUES
(1, 1, 1, 1, 1, 1, 1, 'Lê Trọng', 'Nghĩa', '2022-03-11', 'Nam', '215492052', 'kinh', '0353326143', 'quy nhon', 'binh dinh', 'binh dinh', 0, 0, '2022-03-01', '2022-03-09', 'lenghia09102000@gmail.com', 'anhthe2.jpg', 'trongnghia', '1'),
(14, 1, 1, 14, 14, 2, 14, 'le van', 'teo', '2022-03-03', 'Nam', 'asdas', '', 'dasd', '123', 'asd', 'binhf didnh', 1, 0, '2312-12-31', '2312-12-31', 'letrongnghia123@yahoo.com.vn', '', 'teo', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `Id_PhanQuyen` int(11) NOT NULL,
  `TenQuyen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`Id_PhanQuyen`, `TenQuyen`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tailieu`
--

CREATE TABLE `tailieu` (
  `Id_TaiLieu` int(11) NOT NULL,
  `Id_NhanVien` int(11) NOT NULL,
  `Id_LoaiTaiLieu` int(11) NOT NULL,
  `TaiLieu` text NOT NULL,
  `NoiDung` text NOT NULL,
  `Thoigian` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trinhdo`
--

CREATE TABLE `trinhdo` (
  `Id_TrinhDo` int(20) NOT NULL,
  `Id_LoaiTrinhDo` int(11) NOT NULL,
  `TrinhDo` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trinhdo`
--

INSERT INTO `trinhdo` (`Id_TrinhDo`, `Id_LoaiTrinhDo`, `TrinhDo`) VALUES
(1, 1, 'Cao đẳng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vanban`
--

CREATE TABLE `vanban` (
  `Id_VanBan` int(11) NOT NULL,
  `Id_NhanVien` int(11) NOT NULL,
  `Id_LoaiVanBan` int(11) NOT NULL,
  `soVB` int(11) NOT NULL,
  `TenVanBan` text NOT NULL,
  `NoiDung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeucau`
--

CREATE TABLE `yeucau` (
  `Id_YeuCau` int(11) NOT NULL,
  `Id_NhanVien` int(11) NOT NULL,
  `Id_LoaiYeuCau` int(11) NOT NULL,
  `Ngay` datetime NOT NULL,
  `NoiDung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `yeucau`
--

INSERT INTO `yeucau` (`Id_YeuCau`, `Id_NhanVien`, `Id_LoaiYeuCau`, `Ngay`, `NoiDung`) VALUES
(1, 1, 1, '2022-03-27 07:00:00', 'Ông Derek Chollet, Cố vấn Bộ Ngoại giao Mỹ, có buổi trao đổi với Zing khi giao tranh ở Ukraine vừa cán mốc một tháng. Ông khẳng định Mỹ đang làm tất cả để hỗ trợ quá trình hòa đàm.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bomon`
--
ALTER TABLE `bomon`
  ADD PRIMARY KEY (`Id_BoMon`);

--
-- Chỉ mục cho bảng `chamcong`
--
ALTER TABLE `chamcong`
  ADD PRIMARY KEY (`Id_ChamCong`),
  ADD KEY `PK_ChamCong_NhanVien` (`Id_NhanVien`);

--
-- Chỉ mục cho bảng `chatbox`
--
ALTER TABLE `chatbox`
  ADD PRIMARY KEY (`Id_chat`);

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`Id_ChucVu`);

--
-- Chỉ mục cho bảng `chuyenmon`
--
ALTER TABLE `chuyenmon`
  ADD PRIMARY KEY (`Id_ChuyenMon`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`Id_DanhGia`),
  ADD KEY `PK_DanhGia_NhanVien` (`Id_NhanVien`);

--
-- Chỉ mục cho bảng `daotao`
--
ALTER TABLE `daotao`
  ADD PRIMARY KEY (`Id_DaoTao`),
  ADD KEY `PK_DaoTao_NhanVien` (`Id_NhanVien`),
  ADD KEY `PK_LoaiDaoTao_NhanVien` (`Id_LoaiDaoTao`);

--
-- Chỉ mục cho bảng `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`Id_DonVi`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khenthuongkiluat`
--
ALTER TABLE `khenthuongkiluat`
  ADD PRIMARY KEY (`Id_KTKL`);

--
-- Chỉ mục cho bảng `loaichat`
--
ALTER TABLE `loaichat`
  ADD PRIMARY KEY (`Id_LoaiChat`);

--
-- Chỉ mục cho bảng `loaidaotao`
--
ALTER TABLE `loaidaotao`
  ADD PRIMARY KEY (`Id_LoaiDaoTao`);

--
-- Chỉ mục cho bảng `loaitailieu`
--
ALTER TABLE `loaitailieu`
  ADD PRIMARY KEY (`Id_LoaiTaiLieu`);

--
-- Chỉ mục cho bảng `loaitrinhdo`
--
ALTER TABLE `loaitrinhdo`
  ADD PRIMARY KEY (`Id_LoaiTrinhDo`);

--
-- Chỉ mục cho bảng `loaivanban`
--
ALTER TABLE `loaivanban`
  ADD PRIMARY KEY (`Id_LoaiVanBan`);

--
-- Chỉ mục cho bảng `loaiyeucau`
--
ALTER TABLE `loaiyeucau`
  ADD PRIMARY KEY (`Id_LoaiYeuCau`);

--
-- Chỉ mục cho bảng `luong`
--
ALTER TABLE `luong`
  ADD PRIMARY KEY (`Id_Luong`),
  ADD KEY `PK_Luong_NhanVien` (`Id_NhanVien`),
  ADD KEY `PK_Luong_DanhGia` (`Id_DanhGia`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`Id_NhanVien`),
  ADD KEY `PK_NhanVien_ChucVu` (`Id_ChucVu`),
  ADD KEY `PK_NhanVien_TrinhDo` (`Id_TrinhDo`),
  ADD KEY `PK_NhanVien_ChuyenMon` (`Id_ChuyenMon`),
  ADD KEY `PK_NhanVien_BoMon` (`Id_BoMon`),
  ADD KEY `PK_NhanVien_PhanQuyen` (`Id_PhanQuyen`),
  ADD KEY `PK_NhanVien_DonVi` (`Id_DonVi`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`Id_PhanQuyen`);

--
-- Chỉ mục cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  ADD PRIMARY KEY (`Id_TaiLieu`),
  ADD KEY `PK_TaiLieu_NhanVien` (`Id_NhanVien`),
  ADD KEY `PK_TaiLieu_LoaiTaiLieu` (`Id_LoaiTaiLieu`);

--
-- Chỉ mục cho bảng `trinhdo`
--
ALTER TABLE `trinhdo`
  ADD PRIMARY KEY (`Id_TrinhDo`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `vanban`
--
ALTER TABLE `vanban`
  ADD PRIMARY KEY (`Id_VanBan`),
  ADD KEY `PK_VanBan_NhanVien` (`Id_NhanVien`),
  ADD KEY `PK_VanBan_LoaiVanBan` (`Id_LoaiVanBan`);

--
-- Chỉ mục cho bảng `yeucau`
--
ALTER TABLE `yeucau`
  ADD PRIMARY KEY (`Id_YeuCau`),
  ADD KEY `PK_YeuCau_NhanVien` (`Id_NhanVien`),
  ADD KEY `PK_YeuCau_LoaiYeuCau` (`Id_LoaiYeuCau`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bomon`
--
ALTER TABLE `bomon`
  MODIFY `Id_BoMon` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `chamcong`
--
ALTER TABLE `chamcong`
  MODIFY `Id_ChamCong` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chatbox`
--
ALTER TABLE `chatbox`
  MODIFY `Id_chat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `Id_ChucVu` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chuyenmon`
--
ALTER TABLE `chuyenmon`
  MODIFY `Id_ChuyenMon` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `Id_DanhGia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `daotao`
--
ALTER TABLE `daotao`
  MODIFY `Id_DaoTao` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donvi`
--
ALTER TABLE `donvi`
  MODIFY `Id_DonVi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khenthuongkiluat`
--
ALTER TABLE `khenthuongkiluat`
  MODIFY `Id_KTKL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaichat`
--
ALTER TABLE `loaichat`
  MODIFY `Id_LoaiChat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaidaotao`
--
ALTER TABLE `loaidaotao`
  MODIFY `Id_LoaiDaoTao` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaitailieu`
--
ALTER TABLE `loaitailieu`
  MODIFY `Id_LoaiTaiLieu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaitrinhdo`
--
ALTER TABLE `loaitrinhdo`
  MODIFY `Id_LoaiTrinhDo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaivanban`
--
ALTER TABLE `loaivanban`
  MODIFY `Id_LoaiVanBan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaiyeucau`
--
ALTER TABLE `loaiyeucau`
  MODIFY `Id_LoaiYeuCau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `luong`
--
ALTER TABLE `luong`
  MODIFY `Id_Luong` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `Id_NhanVien` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `Id_PhanQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  MODIFY `Id_TaiLieu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `trinhdo`
--
ALTER TABLE `trinhdo`
  MODIFY `Id_TrinhDo` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `vanban`
--
ALTER TABLE `vanban`
  MODIFY `Id_VanBan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `yeucau`
--
ALTER TABLE `yeucau`
  MODIFY `Id_YeuCau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chamcong`
--
ALTER TABLE `chamcong`
  ADD CONSTRAINT `PK_ChamCong_NhanVien` FOREIGN KEY (`Id_NhanVien`) REFERENCES `nhanvien` (`Id_NhanVien`);

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `PK_DanhGia_NhanVien` FOREIGN KEY (`Id_NhanVien`) REFERENCES `nhanvien` (`Id_NhanVien`);

--
-- Các ràng buộc cho bảng `daotao`
--
ALTER TABLE `daotao`
  ADD CONSTRAINT `PK_DaoTao_NhanVien` FOREIGN KEY (`Id_NhanVien`) REFERENCES `nhanvien` (`Id_NhanVien`),
  ADD CONSTRAINT `PK_LoaiDaoTao_NhanVien` FOREIGN KEY (`Id_LoaiDaoTao`) REFERENCES `loaidaotao` (`Id_LoaiDaoTao`);

--
-- Các ràng buộc cho bảng `luong`
--
ALTER TABLE `luong`
  ADD CONSTRAINT `PK_Luong_DanhGia` FOREIGN KEY (`Id_DanhGia`) REFERENCES `danhgia` (`Id_DanhGia`),
  ADD CONSTRAINT `PK_Luong_NhanVien` FOREIGN KEY (`Id_NhanVien`) REFERENCES `nhanvien` (`Id_NhanVien`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `PK_NhanVien_BoMon` FOREIGN KEY (`Id_BoMon`) REFERENCES `bomon` (`Id_BoMon`),
  ADD CONSTRAINT `PK_NhanVien_ChucVu` FOREIGN KEY (`Id_ChucVu`) REFERENCES `chucvu` (`Id_ChucVu`),
  ADD CONSTRAINT `PK_NhanVien_ChuyenMon` FOREIGN KEY (`Id_ChuyenMon`) REFERENCES `chuyenmon` (`Id_ChuyenMon`),
  ADD CONSTRAINT `PK_NhanVien_DonVi` FOREIGN KEY (`Id_DonVi`) REFERENCES `donvi` (`Id_DonVi`),
  ADD CONSTRAINT `PK_NhanVien_PhanQuyen` FOREIGN KEY (`Id_PhanQuyen`) REFERENCES `phanquyen` (`Id_PhanQuyen`),
  ADD CONSTRAINT `PK_NhanVien_TrinhDo` FOREIGN KEY (`Id_TrinhDo`) REFERENCES `trinhdo` (`Id_TrinhDo`);

--
-- Các ràng buộc cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  ADD CONSTRAINT `PK_TaiLieu_LoaiTaiLieu` FOREIGN KEY (`Id_LoaiTaiLieu`) REFERENCES `loaitailieu` (`Id_LoaiTaiLieu`),
  ADD CONSTRAINT `PK_TaiLieu_NhanVien` FOREIGN KEY (`Id_NhanVien`) REFERENCES `nhanvien` (`Id_NhanVien`);

--
-- Các ràng buộc cho bảng `vanban`
--
ALTER TABLE `vanban`
  ADD CONSTRAINT `PK_VanBan_LoaiVanBan` FOREIGN KEY (`Id_LoaiVanBan`) REFERENCES `loaivanban` (`Id_LoaiVanBan`),
  ADD CONSTRAINT `PK_VanBan_NhanVien` FOREIGN KEY (`Id_NhanVien`) REFERENCES `nhanvien` (`Id_NhanVien`);

--
-- Các ràng buộc cho bảng `yeucau`
--
ALTER TABLE `yeucau`
  ADD CONSTRAINT `PK_YeuCau_LoaiYeuCau` FOREIGN KEY (`Id_LoaiYeuCau`) REFERENCES `loaiyeucau` (`Id_LoaiYeuCau`),
  ADD CONSTRAINT `PK_YeuCau_NhanVien` FOREIGN KEY (`Id_NhanVien`) REFERENCES `nhanvien` (`Id_NhanVien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
