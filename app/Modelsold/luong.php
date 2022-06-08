<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class luong extends Model
{
    protected $table='luong';
    protected $primary='Id_Luong';
    protected $fillable=['LuongCoBan','HeSoLuong','LuongLamThem','TienKTKL','TongLuong'];
    public $timestamps = false;
   
    public function nhanvien()
    {
        return $this->hasMany('App\nhanvien');
    }

}
