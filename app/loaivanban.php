<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaivanban extends Model
{
    protected $table='loaivanban';
    protected $primary='Id_LoaiVanBan';
    protected $rowtable='TenLoaiVanBan';
}
