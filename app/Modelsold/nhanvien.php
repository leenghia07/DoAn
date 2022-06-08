<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\khenthuong;

class nhanvien extends model 
{
    // use HasFactory;
    protected $table='nhanvien';
    public $timestamps = false;
    protected $fillable=['Id_NhanVien','Id_ChucVu','Id_NgoaiNgu','Id_PhongBan','Id_TinHoc','Id_ChinhTri','Id_TDChuyenMon','Id_PhanQuyen','Id_ChuyenMon','Id_BoMon','Id_DonVi','Id_Khenthuong'
    ,'Ho','Ten','NgaySinh','GioiTinh','CMND','DanToc','SDT','DiaChi','NoiSinh','QueQuan',
    'DaVaoDang','BienChe','BatDauCongTac','NgayVaoTruong','Email','HinhAnh','TenTK','MatKhau','TinhTrang'];
    
    public function chucvu()
    {
        return $this->hasMany('App\chucvu','Id_ChucVu','Id_NhanVien');
        
    }
    public function phongban()
    {
        return $this->hasMany('App\phongban','Id_PhongBan','Id_NhanVien');
        
    }
    public function ngoaingu()
    {
        return $this->hasMany('App\ngoaingu','Id_NgoaiNgu','Id_NhanVien');
        
    }
    public function tinhoc()
    {
        return $this->hasMany('App\tinhoc','Id_TinHoc','Id_NhanVien');
        
    }   
    public function chinhtri()
    {
        return $this->hasMany('App\chinhtri','Id_ChinhTri','Id_NhanVien');
        
    }
    public function trinhdochuyenmon()
    {
        return $this->hasMany('App\tdchuyenmon','Id_TDChuyenMon','Id_NhanVien');
        
    }
    public function phanquyen()
    {
        return $this->hasMany('App\phanquyen','Id_PhanQuyen','Id_NhanVien');
    }
    public function chuyenmon()
    {
        return $this->hasMany('App\chuyenmon','Id_ChuyenMon','Id_NhanVien');
    }
    public function bomon()
    {
        return $this->hasMany('App\bomon','Id_BoMon','Id_NhanVien');
    }
    public function donvi()
    {
        return $this->hasMany('App\donvi','Id_DonVi','Id_NhanVien');
    }
    public function khenthuong()
    {
        return $this->belongsTo(khenthuong::class,' Id_Khenthuong ','Id_NhanVien');
    }
}
