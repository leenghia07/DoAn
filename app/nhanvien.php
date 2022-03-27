<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class nhanvien extends model 
{
    protected $table='nhanvien';
    public $timestamps = false;
    // public $rowchucvu='';
    // public $primaryId='Id_NhanVien';
    protected $fillable=['Ho','Ten','NgaySinh','GioiTinh','CMND','DanToc','SDT','DiaChi','NoiSinh','QueQuan',
    'DaVaoDang','BienChe','BatDauCongTac','NgayVaoTruong','Email','HinhAnh','TenTK','MatKhau'];
    
    public function trinhdo()
    {
        return $this->hasMany('App\trinhdo','Id_TrinhDo','Id_NhanVien');
    }
    public function chucvu()
    {
        return $this->hasMany('App\chucvu','Id_ChucVu','Id_NhanVien');
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

   
}
