<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kyluat extends Model
{
    protected $table='kyluat';
    protected $primary='Id_KyLuat';
    protected $fillable=['Ngay','MoTa','Phat'];
    public $timestamps = false;
   
    public function nhanvien()
    {
        return $this->hasMany('App\nhanvien','Id_NhanVien','Id_KyLuat');
    }
}
