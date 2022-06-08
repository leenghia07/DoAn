<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaivanban extends Model
{
    protected $table='loaivanban';
    protected $fillable=['Id_LoaiVanBan','TenLoaiVanBan'];
    public $timestamps = false;

}
