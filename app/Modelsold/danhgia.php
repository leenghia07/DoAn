<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhgia extends Model
{
    protected $table='danhgia';
    protected $fillable=['TongNgayLam','TongGioLam'];
    public $timestamps = false;


    public function nhanvien()
    {
        return $this->hasMany('App\nhanvien');
    }
}
