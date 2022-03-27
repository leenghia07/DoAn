<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhgia extends Model
{
    protected $table='danhgia';
    protected $primary='Id_DanhGia';
    protected $fillable=['TongNgayLam','TongGioLam'];

    public function nhanvien()
    {
        return $this->hasMany('App\nhanvien');
    }
}
