<?php

use Illuminate\Support\Facades\Route;
//controller
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TaiKhoanController;

use App\Http\Controllers\CrawlData;

//composer dump-autoload
//composer update
//bo dau ; o php.ini  dong` ;extension=gd    khi bi loi~
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| chổ này nên để những route public
| tách ra để dễ quản lý
*/

Route::get('TaiKhoan/{token}/showResetPass', [TaiKhoanController::class, 'showResetPassword_TaiKhoan'])->name('TaiKhoan.showReset');
Route::put('TaiKhoan/{taiKhoan}/actionResetPass', [TaiKhoanController::class, 'actionResetPassword_TaiKhoan'])->name('TaiKhoan.actionReset');
Route::get('ResetPassword-Susscess', [HomeController::class, 'Susscess'])->name('Home.Susscess');
Route::get('Error', [HomeController::class, 'Error'])->name('Home.Error');
// Route::get('Test', [HomeController::class, 'Test'])->name('Home.Test');
//
// Route::get('CrawlData/{type}', [CrawlData::class, 'index'])->name('CrawlData.index');

//route dành riêng cho user
require "route-user.php";
//route dành riêng cho admin
require "route-admin.php";
