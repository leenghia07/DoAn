<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\nhanvien;
use App\yeucau;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $InfoAdmin=nhanvien::where(['Id_NhanVien'=> session()->has('admin_id')])->get;
        // $test=nhanvien::where(['Id_NhanVien'=> session()->has('admin_id')])->get;
        // $test=nhanvien::where(['Id_NhanVien'=> session()->has('admin_id')]);
        // view()->share('key', $test);
        // View::share('InfoAdmin', $InfoAdmin);

        // thông tin admin
        view()->composer('*', function ($view) {
            $Admin=nhanvien::where(['Id_NhanVien'=> session()->has('admin_id')])->get();
            $text=yeucau::all();
            $view->with(['data'=>$Admin,'notify'=>$text]);
        });
        // thông báo 
        // view()->composer('*', function ($view) {
        //     // $notification=yeucau::all();
        //     // $view->with('data2 ', $notification);
        //     $test="cc";
        //     $view->with('data2 ', $test);
        // });
        // hộp nhắn thoại
    }
}
