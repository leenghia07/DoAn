<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daotao extends Model
{
    protected $table='daotao';
    protected $fillable=['Id_LoaiDaoTao','TenDaoTao','NgayBatDau','NgayKetThuc','ChiPhi','NoiDung','NoiDaoTao','TinhTrang'];
    public $timestamps = false;

    public function loaidaotao()
    {
        return $this->hasMany('App\loaidaotao','Id_LoaiDaoTao','Id_DaoTao');
    }
}
