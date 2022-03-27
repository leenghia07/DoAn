<?php

namespace App\Http\Controllers\thongtin;

use App\Http\Controllers\Controller;
use App\nhanvien;
use Illuminate\Http\Request;

class thongtinController extends Controller
{
    public function getTen()
    {
        $user=nhanvien::where()->get();
    }
}
