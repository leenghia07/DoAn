<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chuyenmon extends Model
{
    protected $table='chuyenmon';
    protected $primary='Id_ChuyenMon';
    protected $rowtable='TenChuyenMon';
}
