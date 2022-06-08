<?php

namespace App;
use HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Notifications\Notifiable;

class chucvu extends Model
{
    use Notifiable;
    public $timestamps = false;
   
    protected $fillable=['Id_ChucVu','TenChucVu'];

}
