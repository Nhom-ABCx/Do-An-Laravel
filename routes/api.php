<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
use App\Models\SanPham;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\SendEmailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('SanPham', [SanPhamController::class,"API_SanPham"]);

# api loại sản phẩm điện thoại
Route::get('dien-thoai',[SanPhamController::class,"API_SanPham_DT"]);

# api chi tiết sản phẩm điện thoại
Route::get('san-pham/{id}',[SanPhamController::class,"API_SanPham_DT_ChiTiet"]);

#api loại sản phẩm laptop
Route::get('get-all-latop',[SanPhamController::class,"API_SanPham_LapTop"]);

#api tìm kiếm sản phẩm
Route::post('/search-product',[SanPhamController::class,"API_SanPham_TimKiem"]);

# sản phẩm bán chạy
Route::get('san-pham-top',[SanPhamController::class,'API_SanPham_Top']);

#api loại sản phẩm Camera
Route::get("get-all-camera",[SanPhamController::class,"API_SanPham_Camera"]);

Route::post('DangNhap', [KhachHangController::class,"API_DangNhap"]);
Route::post('DangKy', [KhachHangController::class,"API_DangKy"]);
Route::put('KhachHang/{khachHang}', [KhachHangController::class,"API_Update_KhachHang"]);

Route::post('TimKiem',[SanPhamController::class,"API_SanPham_TimKiem"]);#

# sản phẩm khuyên mãi
Route::get('get-all-product-sale',[SanPhamController::class,"API_SanPham_GiamGia"]);

//gui mail reset password
Route::post('sendEmail-User-Reset',[SendEmailController::class,'userReset']);
