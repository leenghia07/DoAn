<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tdchuyenmon extends Model
{
    protected $table='trinhdochuyenmon';
    protected $primary='Id_TDChuyenMon';
    protected $rowtable='TrinhDo';
    public $timestamps = false;

}
