<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//controller
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\ChuongTrinhKhuyenMaiController;
use App\Http\Controllers\CTChuongTrinhKMController;
use App\Http\Controllers\HangSanXuatController;

//composer dump-autoload

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

Route::get('/', [HomeController::class, "Index"]);
Route::resource('SanPham', SanPhamController::class, [
    'parameters' => [
        'SanPham' => 'sanPham'
    ]
]);
Route::resource('KhuyenMai', ChuongTrinhKhuyenMaiController::class, [
    'parameters' => [
        'KhuyenMai' => 'chuongTrinhKhuyenMai'
    ]
]);

// Route::resource('CTKhuyenMai',CTChuongTrinhKMController::class,[
//     'parameters' => [
//         'CTKhuyenMai/{Id}/{Id}' => 'cTChuongTrinhKM'
//     ]
// ]);
Route::get('/CTKhuyenMai',[CTChuongTrinhKMController::class,'index'])->name('CTKhuyenMai.index');//Chi tiết CTKM index
Route::get('/CTKhuyenMai/create',[CTChuongTrinhKMController::class,'create'])->name('CTKhuyenMai.create');//Chi tiết CTKM create
Route::post('/CTKhuyenMai.store',[CTChuongTrinhKMController::class,'store'])->name('CTKhuyenMai.store');//Chi tiết CTKM store
Route::get('/CTKhuyenMai/{ctid}/{spid}/edit',[CTChuongTrinhKMController::class,'edit'])->name('CTKhuyenMai.edit');//Chi tiết CTKM edit
Route::put('/CTKhuyenMai/{ctid}/{spid}',[CTChuongTrinhKMController::class,'update'])->name('CTKhuyenMai.update');//Chi tiết CTKM update
Route::delete('/CTKhuyenMai/{ctid}/{spid}',[CTChuongTrinhKMController::class,'destroy'])->name('CTKhuyenMai.destroy');//Chi tiết CTKM delete
Route::resource('HangSanXuat', HangSanXuatController::class, [
    'parameters' => [
        'HangSanXuat' => 'hangSanXuat'
    ]
]);
Route::get('Login', [AuthController::class,'index'])->name('Login.index'); //show trang login
Route::post('Login', [AuthController::class,'show'])->name('Login.show'); //xu ly dang nhap -> tra ve home
Route::delete('Login', [AuthController::class,'destroy'])->name('Login.destroy'); //dang xuat
//Route::put('Login', [AuthController::class,'create'])->name('Login.create'); //dang ky
//Route::post('Login', [AuthController::class,'store'])->name('Login.store');

