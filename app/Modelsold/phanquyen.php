<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class phanquyen extends Model
{
    use Notifiable;
    protected $rowchucvu='TenQuyen';
    protected $primaryId='Id_PhanQuyen';
    protected $table='phanquyen';
}
