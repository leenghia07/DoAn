<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\nhanvien;
use App\bomon;
class test extends Controller
{
    public function test()
    {
        $test=nhanvien::all();
        foreach($test as $value)
        {
            echo $value->Ten;
            foreach($value->bomon as $value2)
            {
                echo $value2->TenBoMon;
            }
        }
        // return view('admin.test');
    }
}
