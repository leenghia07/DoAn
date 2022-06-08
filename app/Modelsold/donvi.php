<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donvi extends Model
{
    protected $table='donvi';

    protected $fillable=['Id_DonVi','TenDonVi'];

    public $timestamps = false;

  
}
