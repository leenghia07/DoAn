<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chuyenmon extends Model
{
    protected $table='chuyenmon';
    use Notifiable;
    public $timestamps = false;
   
    protected $fillable=['Id_ChuyenMon','TenChuyenMon'];
}
