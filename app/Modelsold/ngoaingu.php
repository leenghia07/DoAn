<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ngoaingu extends Model
{
    protected $table='trinhdongoaingu';
    protected $primary='Id_NgoaiNgu';
    protected $rowtable='TrinhDo';
    public $timestamps = false;

}
