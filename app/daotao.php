<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daotao extends Model
{
    protected $table='daotao';
    protected $primary='Id_DaoTao';
    protected $fillable=['TenDaoTao','NgayBatDau','NgayKetThuc','ChiPhi','NoiDung','NoiDaoTao','TinhTrang'];

    public function nhanvien()
    {
        return $this->hasMany('App\nhanvien');
    }
    public function loaidaotao()
    {
        return $this->hasMany('App\loaidaotao');
    }
}
