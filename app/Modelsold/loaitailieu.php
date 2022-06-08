<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaitailieu extends Model
{
    protected $table='loaitailieu';
    protected $primary='Id_LoaiTaiLieu';
    protected $rowtable='TenLoaiTaiLieu';
}
