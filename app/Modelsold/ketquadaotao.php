<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\nhanvien;
use App\Models\daotao;

class ketquadaotao extends Model
{
    protected $table='ketquadaotao';
    protected $fillable=['Id_KetQuaDT','Id_NhanVien','Id_DaoTao','KetQua','GhiChu'];
    public $timestamps = false;
   
    public function nhanvien()
    {
        return $this->hasMany(nhanvien::class,'Id_NhanVien','Id_KetQuaDT');
    }
    public function daotao()
    {
        return $this->hasMany(daotao::class,'Id_DaoTao','Id_KetQuaDT');
    }
}
