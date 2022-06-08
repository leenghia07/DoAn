<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tinhoc extends Model
{
    protected $table='trinhdotinhoc';
    protected $primary='Id_TinHoc';
    protected $rowtable='TrinhDo';
    public $timestamps = false;

}
