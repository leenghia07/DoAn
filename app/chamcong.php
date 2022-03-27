<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chamcong extends Model
{
    protected $table='chamcong';
    protected $primary='Id_ChamCong';
    protected $fillable=['Ngay','GioVao','GioRa','GioTangCa','GiBS'];

    public function nhanvien()
    {
        return $this->hasMany('App\nhanvien');
    }
}
