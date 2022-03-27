<?php

namespace App;
use HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Notifications\Notifiable;

class chucvu extends Model
{
    use Notifiable;
    protected $rowchucvu='TenChucVu';
    protected $primaryId='Id_ChucVu';
    protected $table='chucvu';
}
