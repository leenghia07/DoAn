<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\nhanvien;

class HomeController extends Controller
{
    public function homeadmin()
    {
        // $InfoAdmin=nhanvien::where(['Id_NhanVien'=> session()->has('admin_id')])->get();
        // return view('admin.home.index',compact('InfoAdmin'));
        return view('admin.home.index');
    }
    public function homeuser()
    {
        // $InfoAdmin=nhanvien::where(['Id_NhanVien'=> session()->has('admin_id')])->get();
        // return view('admin.home.index',compact('InfoAdmin'));
        // $InfoUser=test;
        return view('user.home.index');
    }
}
