<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chinhtri extends Model
{
    public $timestamps = false;
   
    protected $fillable=['Id_ChinhTri','TrinhDo'];
}
