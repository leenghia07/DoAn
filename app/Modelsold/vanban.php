<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vanban extends Model
{
    protected $table='vanban';
    // public $rowchucvu='';
    public $primaryId='Id_VanBan';
    protected $fillable=['soVB','TenVanBan','NoiDung'];
    public $timestamps = false;

    public function nhanvien()
    {
        return $this ->hasMany('App\nhanvien','Id_NhanVien','Id_YeuCau');
    }
    
    public function loaivanban()
    {
        return $this ->hasMany('App\loaiyeucau','Id_LoaiYeuCau','Id_YeuCau');
    }
}
