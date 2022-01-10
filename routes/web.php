<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//controller
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BinhLuanController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\ChuongTrinhKhuyenMaiController;
use App\Http\Controllers\CTChuongTrinhKMController;
use App\Http\Controllers\HangSanXuatController;
use App\Http\Controllers\DonViVanChuyenController;
use App\Http\Controllers\NguoiVanChuyenController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\KhachHangController;
use App\Models\BinhLuan;

//composer dump-autoload
//composer update

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
//bat buoc dang nhap
Route::middleware('auth')->group(function () {
    //viet route vao day de bat buoc dang nhap
    Route::get('/', [HomeController::class, "Index"])->name('Home.index');
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
    Route::get('/CTKhuyenMai', [CTChuongTrinhKMController::class, 'index'])->name('CTKhuyenMai.index'); //Chi tiết CTKM index
    Route::get('/CTKhuyenMai/create', [CTChuongTrinhKMController::class, 'create'])->name('CTKhuyenMai.create'); //Chi tiết CTKM create
    Route::post('/CTKhuyenMai/store', [CTChuongTrinhKMController::class, 'store'])->name('CTKhuyenMai.store'); //Chi tiết CTKM store
    Route::get('/CTKhuyenMai/{ctid}/{spid}/edit', [CTChuongTrinhKMController::class, 'edit'])->name('CTKhuyenMai.edit'); //Chi tiết CTKM edit
    Route::put('/CTKhuyenMai/{ctid}/{spid}', [CTChuongTrinhKMController::class, 'update'])->name('CTKhuyenMai.update'); //Chi tiết CTKM update
    Route::delete('/CTKhuyenMai/{ctid}/{spid}', [CTChuongTrinhKMController::class, 'destroy'])->name('CTKhuyenMai.destroy'); //Chi tiết CTKM delete
    Route::resource('HangSanXuat', HangSanXuatController::class, [
        'parameters' => [
            'HangSanXuat' => 'hangSanXuat'
        ]
    ]);
    Route::get('Logout', [AuthController::class, 'logout'])->name('Login.logout'); //dang xuat
    Route::resource('DonViVanChuyen', DonViVanChuyenController::class, [
        'parameters' => [
            'DonViVanChuyen' => 'donViVanChuyen'
        ]
    ]);
});
Route::get('Login', [AuthController::class, 'index'])->name('Login.index'); //show trang login
Route::post('Login', [AuthController::class, 'show'])->name('Login.show'); //xu ly dang nhap -> tra ve home
Route::get('Login/create', [AuthController::class, 'create'])->name('Login.create'); //dang ky
Route::post('Login/create', [AuthController::class, 'store'])->name('Login.store');

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

Route::get('/CTKhuyenMai', [CTChuongTrinhKMController::class, 'index'])->name('CTKhuyenMai.index'); //Chi tiết CTKM index
Route::get('/CTKhuyenMai/create', [CTChuongTrinhKMController::class, 'create'])->name('CTKhuyenMai.create'); //Chi tiết CTKM create
Route::post('/CTKhuyenMai.store', [CTChuongTrinhKMController::class, 'store'])->name('CTKhuyenMai.store'); //Chi tiết CTKM store
Route::get('/CTKhuyenMai/{ctid}/{spid}/edit', [CTChuongTrinhKMController::class, 'edit'])->name('CTKhuyenMai.edit'); //Chi tiết CTKM edit
Route::put('/CTKhuyenMai/{ctid}/{spid}', [CTChuongTrinhKMController::class, 'update'])->name('CTKhuyenMai.update'); //Chi tiết CTKM update
Route::delete('/CTKhuyenMai/{ctid}/{spid}', [CTChuongTrinhKMController::class, 'destroy'])->name('CTKhuyenMai.destroy'); //Chi tiết CTKM delete

Route::resource('HangSanXuat', HangSanXuatController::class, [
    'parameters' => [
        'HangSanXuat' => 'hangSanXuat'
    ]
]);

Route::get('Login', [AuthController::class, 'index'])->name('Login.index'); //show trang login
Route::post('Login', [AuthController::class, 'show'])->name('Login.show'); //xu ly dang nhap -> tra ve home
Route::delete('Login', [AuthController::class, 'destroy'])->name('Login.destroy'); //dang xuat
//Route::put('Login', [AuthController::class,'create'])->name('Login.create'); //dang ky
//Route::post('Login', [AuthController::class,'store'])->name('Login.store');
// //dang nhap social
Route::get('Login/{social}', [AuthController::class, 'social'])->name('Login.social');
Route::get('Login/{social}/Callback', [AuthController::class, 'social_callback'])->name('Login.social_callback');

Route::resource('DonViVanChuyen', DonViVanChuyenController::class, [
    'parameters' => [
        'DonViVanChuyen' => 'donViVanChuyen'
    ]
]);

Route::resource('NguoiVanChuyen', NguoiVanChuyenController::class, [
    'parameters' => [
        'NguoiVanChuyen' => 'nguoiVanChuyen'
    ]
]);

Route::get('sendEmail', [SendEmailController::class, 'send'])->name('send');
Route::get('sendEmail', [SendEmailController::class, 'send'])->name('send');
Route::get('KhachHang/{khachHang}/showResetPass', [KhachHangController::class, 'showResetPassword_KhachHang'])->name('KhachHang.showReset');
Route::put('KhachHang/{khachHang}/actionResetPass', [KhachHangController::class, 'actionResetPassword_KhachHang'])->name('KhachHang.actionReset');
Route::get('ResetPassword-Susscess', [HomeController::class, 'Susscess'])->name('Home.Susscess');