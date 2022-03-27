<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\admin\EmployeeController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\admin\EvaluationCotroller;
use App\Http\Controllers\admin\TrainCotroller;
use App\Http\Controllers\admin\TimekeepingCotroller;
use App\Http\Controllers\admin\SalaryCotroller;
use App\Http\Controllers\admin\DocumentCotroller;
use App\Http\Controllers\admin\RequestController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
                // ĐĂNG NHẬP

Route::get('/',[loginController::class, 'index'])->name('index');
Route::post('login',[loginController::class, 'check'])->name('login');


                 // ĐĂNG XUẤT 
Route::get('logout',[loginController::class, 'logout'])->name('logout');


                 // Trang chủ ADMIN
Route::middleware(['Checklogin'])->prefix('admin')->group(function () {
                 
                // . trang chính 
    Route::get('/', [HomeController::class, 'homeadmin'])->name('trangchu');
                
                // .đổi mật khẩu admin
    Route::get('/changepassword',[LoginController::class, 'changepassword'])->name('change');
                
                // xuất file excel nhân viên
    Route::get('/excelemployee',[EmployeeController::class, 'export'])->name('excel');
                // quản lý nhân viên
    Route::prefix('employee')->group(function () {
      Route::get('/',[EmployeeController::class, 'index'])->name('listemployee');
      Route::get('/create',[EmployeeController::class, 'pagecreate'])->name('create');
      Route::post('/store',[EmployeeController::class, 'store'])->name('store');
      Route::get('/edit/{id}', [EmployeeController::class, 'pageedit']);
      Route::post('/update/{id}', [EmployeeController::class, 'update'])->name('update');
      Route::get('/delete/{id}', [EmployeeController::class, 'destroy']);

    
    });
                    // quản lý danh sách yêu cầu 

    Route::get('/request', [RequestController::class, 'index'])->name('request');

                    // Đánh giá

    Route::get('/evaluation',[EvaluationCotroller::class, 'index'])->name('evaluation');

                    // Quản lý đào tạo

    Route::get('/train',[TrainCotroller::class, 'index'])->name('train');

                    // Chấm Công

    Route::get('/timekeeping',[TimekeepingCotroller::class, 'index'])->name('timekeeping');

                    // Lương

    Route::get('/salary',[SalaryCotroller::class, 'index'])->name('salary');
                    // quản lý văn bản

    Route::get('/document',[DocumentCotroller::class, 'index'])->name('document');
});

  // Trang chủ USER

Route::prefix('user')->group(function () {
    Route::get('/', [HomeController::class, 'homeuser']);
});



// Route::get('/admin/trangchu', function () {
//     return view('trangchu','auth\loginController@checktrangchu');
// });

// Route::get('listemployee', function () {
//     return view('admin.listemployee.index');
// })->name('listemployee');
// Route::middleware(['trangchu'])->group(function() {
//     Route::get('/DSnhanvien','admin\nhanvienController@index')->name('home');
// });
// Admin Route
// Route::middleware()->prefix('admin')->group(function () {
//     Route::get('/','trangchu\trangchuController@index')->name('trangchu');
//     Route::get('/employee','admin\nhanvienController@index')->name('listemployee');

// });
// Route::get('/admin/trangchu','trangchu\trangchuController@index')->name('trangchu');
// Route::get('/admin/trangchu/listemployee','admin\nhanvienController@index')->name('listemployee');
