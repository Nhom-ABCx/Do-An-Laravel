<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//controller
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\ChuongTrinhKhuyenMaiController;
<<<<<<< HEAD
use App\Http\Controllers\CTChuongTrinhKMController;
=======
use App\Http\Controllers\HangSanXuatController;
>>>>>>> 84e15b2f1dec31940231adf050f0a009a7c8c659

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
<<<<<<< HEAD
Route::resource('CTKhuyenMai',CTChuongTrinhKMController::class,[
    'parameters' => [
        'CTKhuyenMai/{Id}/{Id}' => 'cTChuongTrinhKM'
    ]
]);
=======
Route::resource('HangSanXuat', HangSanXuatController::class, [
    'parameters' => [
        'HangSanXuat' => 'hangSanXuat'
    ]
]);
Route::get('Login', [AuthController::class,'index'])->name('Login.index');
Route::post('Login', [AuthController::class,'store'])->name('Login.store');
Route::delete('Login', [AuthController::class,'destroy'])->name('Login.destroy');
>>>>>>> 84e15b2f1dec31940231adf050f0a009a7c8c659
