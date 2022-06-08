<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chamcong extends Model
{
    
    
    protected $fillable=['Ngay','GioVao','GioRa','GioTangCa','GiBS'];
    public $timestamps = false;
    
    public function nhanvien()
    {
        return $this->hasMany('App\nhanvien','Id_NhanVien','Id_ChamCong');
    }
}
