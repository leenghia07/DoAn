create database DoAn
use DoAn

DROP DATABASE DoAn;

drop table loaitrinhdo;
drop table loaitrinhdo;

drop table chucvu;
drop table trinhdo;
drop table nhanvien;
drop table yeucau;
drop table chuyenmon;
drop table khenthuongkiluat;
drop table luong;
drop table danhgia;
drop table chamcong;

create table chucvu
(
	Id_ChucVu nvarchar(20),
	TenChucVu nvarchar(50),
	constraint fk_IdChucVu primary key(Id_ChucVu)
)

create table loaitrinhdo
(
	Id_LoaiTrinhDo nvarchar(20),
	TenLoaiTrinhDo nvarchar(50),
	constraint fk_IdLoaiTrinhDo primary key(Id_LoaiTrinhDo)
)

create table phanquyen
(
	Id_Quyen nvarchar(20),
	TenQuyen nvarchar(50),
	constraint fk_IdQuyen primary key(Id_Quyen)
)

create table trinhdo
(
	Id_TrinhDo int primary key,
	Id_LoaiTrinhDo nvarchar(20),
	TrinhDo nvarchar(50),
)
create table chuyenmon
(
	Id_chuyenMon  nvarchar(20),
	TenChuyenMon nvarchar(50),
	constraint fk_IdChuyenMon primary key(Id_chuyenMon)
)
create table bomon
(
	Id_BoMon  nvarchar(20),
	TenBoMon nvarchar(50),
	constraint fk_Idbomon primary key(Id_BoMon)
)
create table nhanvien
(
	MaNhanVien nvarchar(20),
	Id_TrinhDo int,
	Id_ChucVu nvarchar(20),
	Id_Quyen nvarchar(20),
	Id_ChuyenMon  nvarchar(20),
	Id_BoMon  nvarchar(20),
	Ho nvarchar(50),
	Ten nvarchar(20),
	NgaySinh Date,
	GioiTinh nvarchar(20),
	CMND nvarchar(20),
	DanToc nvarchar(20),
	SDT nvarchar(20),
	DiaChi nvarchar(20),
	QueQuan nvarchar(20),
	DonVi nvarchar(20),
	DaVaoDang bit,
	BienChe bit,
	BatDauCongTac date,
	NgayVaoTruong date,
	Email nvarchar(20),
	HinhAnh nvarchar(50),
	TenTK nvarchar(50),
	MatKhau nvarchar(50),
	constraint fk_MaNhanVien primary key(MaNhanVien)
)
create table loaivanban
(
	Id_LoaiVanBan  nvarchar(20),
	TenLoaiVanBan nvarchar(50),
	constraint fk_Idloaivanban primary key(Id_LoaiVanBan)
)
create table vanban
(
	Id_VanBan  nvarchar(20),
	MaNhanVien nvarchar(20),
	Id_LoaiVanBan  nvarchar(20),
	SoVB int,
	TenVanBan nvarchar(50),
	NoiDung nvarchar(225),
	constraint fk_Idvanban primary key(Id_VanBan)
)
create table khenthuongkiluat
(
	Id_KTKL int primary key,
	MaNhanVien nvarchar(20),
	TienKTKL float,
	Ngay date,
	NoiDung nvarchar(100)
)

create table loaiyeucau
(
	Id_LoaiYeuCau nvarchar(20),
	TenLoaiYeuCau nvarchar(50),
	constraint fk_Idloaiyeucau primary key(Id_LoaiYeuCau)

)

create table yeucau
(
	Id_YeuCau int primary key,
	Id_LoaiYeuCau nvarchar(20),
	MaNhanVien nvarchar(20),
	Ngay date,
	NoiDung	varchar(225)
)

create table loaidaotao
(
	Id_LoaiDaoTao nvarchar(20),
	TenLoaiDaoTao nvarchar(50),
	constraint fk_Idloaidaotao primary key(Id_LoaiDaoTao)

)
create table daotao
(
	Id_DaoTao int primary key,
	Id_LoaiDaoTao nvarchar(20),
	MaNhanVien nvarchar(20),
	TenDaoTao varchar(50),
	NgayBatDau date,
	NgayKetThuc date,
	ChiPhi float,
	NoiDung	varchar(225),
	NoiDaoTao nvarchar(50),
	TinhTrang bit
)
create table chamcong
(
	Id_ChamCong int primary key,
	MaNhanVien nvarchar(20),
	Ngay date,
	GioVao time,
	GioRa time,
	GioTangCa time,
	GioBS time
)
create table danhgia
(
	Id_DanhGia nvarchar(20),
	MaNhanVien nvarchar(20),
	TongGioLam time,
	TongNgayLam int
	constraint fk_Iddanhgia primary key(Id_DanhGia)
)
create table luong
(
	Id_Luong nvarchar(20),
	Id_DanhGia nvarchar(20),
	LuongCoBan float,
	HeSoLuong float,
	LuongLamThem float,
	TienKLTKL float,
	TongLuong float,
	constraint fk_Idluong primary key(Id_Luong)
)

/* NHAN VIEN START  */

/* NHAN VIEN VOI CHUC VU  */
ALTER TABLE nhanvien
 ADD CONSTRAINT fk_nhanvien_chucvu
   FOREIGN KEY (Id_ChucVu)
   REFERENCES chucvu (Id_ChucVu);
 
/* NHAN VIEN VOI TRINH DO  */
ALTER TABLE nhanvien
 ADD CONSTRAINT fk_nhanvien_trinhdo
   FOREIGN KEY (Id_TrinhDo )
   REFERENCES trinhdo (Id_TrinhDo );

   /* NHAN VIEN VOI QUYEN  */
ALTER TABLE nhanvien
 ADD CONSTRAINT fk_nhanvien_phanquyen
   FOREIGN KEY (Id_Quyen  )
   REFERENCES phanquyen (Id_Quyen  );

 /* NHAN VIEN VOI CHUYEN MON  */
ALTER TABLE nhanvien
 ADD CONSTRAINT fk_nhanvien_chuyenmon
   FOREIGN KEY (Id_ChuyenMon )
   REFERENCES chuyenmon (Id_ChuyenMon );

   /* NHAN VIEN VOI BO MON  */
ALTER TABLE nhanvien
 ADD CONSTRAINT fk_nhanvien_bomon
   FOREIGN KEY (Id_BoMon)
   REFERENCES bomon (Id_BoMon);

/* NHAN VIEN END  */

/* TRINH DO START*/

	 /* TRINH DO VOI BO LOAI TRINH DO  */
ALTER TABLE trinhdo
 ADD CONSTRAINT fk_trinhdo_loaitrinhdo
   FOREIGN KEY (Id_LoaiTrinhDo)
   REFERENCES loaitrinhdo (Id_LoaiTrinhDo);

/* TRINH DO END*/

/* VAN BAN START*/

	 /* VAN BAN VOI LOAI VAN BAN  */
ALTER TABLE vanban
 ADD CONSTRAINT fk_vanban_loaivanban
   FOREIGN KEY (Id_LoaiVanBan)
   REFERENCES loaivanban (Id_LoaiVanBan);

   	 /* VAN BAN VOI NHAN VIEN  */
ALTER TABLE vanban
 ADD CONSTRAINT fk_vanban_nhanvien
   FOREIGN KEY (MaNhanVien)
   REFERENCES nhanvien (MaNhanVien);
/* VAN BAN END*/


/* KHEN THUONG KI LUAT START*/

	 /* KHEN THUONG KI LUAT VOI NHAN VIEN  */

ALTER TABLE khenthuongkiluat
 ADD CONSTRAINT fk_khenthuongkiluat_nhanvien
   FOREIGN KEY (MaNhanVien)
   REFERENCES nhanvien (MaNhanVien);

/* KHEN THUONG KI LUAT END*/


/* YEU CAU START*/
	 /* YEU CAU VOI NHAN VIEN  */

ALTER TABLE yeucau
 ADD CONSTRAINT fk_yeucau_nhanvien
   FOREIGN KEY (MaNhanVien)
   REFERENCES nhanvien (MaNhanVien);
	
	/* YEU CAU VOI LOAI YEU CAU   */

ALTER TABLE yeucau
 ADD CONSTRAINT fk_yeucau_loaiyeucau
   FOREIGN KEY (Id_LoaiYeuCau)
   REFERENCES loaiyeucau (Id_LoaiYeuCau);
	
/* YEU CAU END*/

/* DAO TAO START*/

	/* DAO TAO VOI VOI NHAN VIEN   */

ALTER TABLE daotao
 ADD CONSTRAINT fk_daotao_nhanvien
   FOREIGN KEY (MaNhanVien)
   REFERENCES nhanvien (MaNhanVien);
	
	/* DAO TAO VOI VOI LOAI DAO TAO */

ALTER TABLE daotao
 ADD CONSTRAINT fk_daotao_loaidaotao
   FOREIGN KEY (Id_LoaiDaoTao )
   REFERENCES loaidaotao (Id_LoaiDaoTao );
	
/* DAO TAO END*/

/* CHAM CONG START*/

	/* CHAM CONG VOI NHAN VIEN */

ALTER TABLE chamcong
 ADD CONSTRAINT fk_chamcong_nhanvien
   FOREIGN KEY (MaNhanVien)
   REFERENCES nhanvien (MaNhanVien);

/* CHAM CONG END*/

/* DANH GIA START*/

	/* DANH GIA VOI NHAN VIEN  */

ALTER TABLE danhgia
 ADD CONSTRAINT fk_danhgia_nhanvien
   FOREIGN KEY (MaNhanVien )
   REFERENCES nhanvien (MaNhanVien );
		
/* DANH GIA END*/

/* LUONG START*/
	/* LUONG VOI DANH GIA*/

ALTER TABLE luong
 ADD CONSTRAINT fk_luong_danhgia
   FOREIGN KEY (Id_DanhGia)
   REFERENCES danhgia (Id_DanhGia);
	
/* LUONG END*/

