<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class bomon extends Model
{
    use Notifiable;
    public $timestamps = false;

    protected $table='bomon';
    protected $primary='Id_BoMon';
    protected $rowtable='TenBoMon';
    // public function bomon()
    // {
    //     return $this->belongsTo('App\nhanvien','');
    // }
}
