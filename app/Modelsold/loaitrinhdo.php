<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaitrinhdo extends Model
{
    protected $table='loaitrinhdo';
    protected $primary='Id_LoaiTrinhDo';
    protected $rowtable='TenLoaiTrinhDo';
    public $timestamps = false;

}
