<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//controller
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\ChuongTrinhKhuyenMaiController;
use App\Http\Controllers\HangSanXuatController;

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
Route::resource('HangSanXuat', HangSanXuatController::class, [
    'parameters' => [
        'HangSanXuat' => 'hangSanXuat'
    ]
]);
Route::get('Login', [AuthController::class,'index'])->name('Login.index');
Route::post('Login', [AuthController::class,'store'])->name('Login.store');
Route::delete('Login', [AuthController::class,'destroy'])->name('Login.destroy');
