<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trinhdo extends Model
{
    protected $table='trinhdo';
    protected $rowtable='TrinhDo';
    protected $primaryId='Id_TrinhDo';

    public function loaitrinhdo()
    {
        return $this->hasMany('App\loaitrinhdo');
    }
}
