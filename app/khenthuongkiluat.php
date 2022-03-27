<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khenthuongkiluat extends Model
{
    protected $table='khenthuongkyluat';
    protected $primary='Id_KTKL';
    protected $fillable=['Ngay','TienKTKL','NoiDung'];

    
}
