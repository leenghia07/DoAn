<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaiyeucau extends Model
{
    protected $table='loaiyeucau';
    protected $primary='Id_LoaiYeuCau';
    protected $rowtable='TenLoaiYeuCau';
    public $timestamps = false;

}
