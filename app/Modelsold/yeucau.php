<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class yeucau extends Model
{
    protected $table='yeucau';
    // public $rowchucvu='';
    public $primaryId='Id_YeuCau';
    protected $fillable=['Ngay','NoiDung'];
    public $timestamps = false;

    public function nhanvien()
    {
        return $this ->hasMany('App\nhanvien','Id_NhanVien','Id_YeuCau');
    }
    
    public function loaiyeucau()
    {
        return $this ->hasMany('App\loaiyeucau','Id_LoaiYeuCau','Id_YeuCau');
    }
}
