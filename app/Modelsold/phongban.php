<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\nhanvien;
use App\Models\lichlamviec;


class phongban extends Model
{
    protected $table='phongban';
    protected $fillable=['Id_PhongBan','TenPhongBan'];
    public $timestamps = false;

    public function nhanvien()
    {
        return $this->hasMany(nhanvien::class);
    }
    public function lichlamviec()
    {
        return $this->hasMany(lichlamviec::class);
    }
}
