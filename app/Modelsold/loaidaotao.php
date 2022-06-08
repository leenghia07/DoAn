<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaidaotao extends Model
{
    protected $table='loaidaotao';
    // protected $primary='Id_LoaiDaoTao';
    // protected $rowtable='TenLoaiDaoTao';
    protected $fillable=['Id_LoaiDaoTao','TenLoaiDaoTao'];
    public $timestamps = false;

}
