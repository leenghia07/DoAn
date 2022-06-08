<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\nhanvien;
class khenthuong extends Model
{
    // use HasFactory;
    protected $table='khenthuong';
    protected $fillable=['Id_Khenthuong','Id_NhanVien','Ngay','MoTa','Thuong'];
    public $timestamps = false;
   
    public function nhanvien()
    {
        return $this->hasMany(nhanvien::class,'Id_NhanVien','Id_Khenthuong');
        // return $this->hasMany('App\nhanvien','Id_NhanVien','Id_Khenthuong');
    }
}
