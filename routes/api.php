<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
use App\Models\SanPham;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\AuthController;

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
Route::get('SanPham', [SanPhamController::class, "API_SanPham"]);

# api loại sản phẩm điện thoại
Route::get('dien-thoai', [SanPhamController::class, "API_SanPham_DT"]);

# api chi tiết sản phẩm điện thoại
Route::get('san-pham/{id}', [SanPhamController::class, "API_SanPham_DT_ChiTiet"]);

#api loại sản phẩm laptop
Route::get('get-all-latop', [SanPhamController::class, "API_SanPham_LapTop"]);

#api tìm kiếm sản phẩm
Route::post('/search-product', [SanPhamController::class, "API_SanPham_TimKiem"]);

# sản phẩm bán chạy
Route::get('san-pham-top', [SanPhamController::class, 'API_SanPham_Top']);

#api loại sản phẩm Camera
Route::get("get-all-camera", [SanPhamController::class, "API_SanPham_Camera"]);

Route::post('DangNhap', [KhachHangController::class, "API_DangNhap"]);
Route::post('DangKy', [KhachHangController::class, "API_DangKy"]);

Route::get('KhachHang/{khachHang}', [KhachHangController::class, "API_Get_KhachHang"]);
Route::put('KhachHang/{khachHang}', [KhachHangController::class, "API_Update_KhachHang"]);
Route::put('KhachHang/{khachHang}/updatePassword', [KhachHangController::class, "API_Update_KhachHang_MatKhau"]);
Route::patch('KhachHang/{id}', [KhachHangController::class, "API_Update_KhachHang_HinhAnh"]);

Route::post('TimKiem', [SanPhamController::class, "API_SanPham_TimKiem"]); #

# sản phẩm khuyên mãi
Route::get('get-all-product-sale', [SanPhamController::class, "API_SanPham_GiamGia"]);

# sản phẩm giá 1-3tr
Route::get('get-product-price-1/', [SanPhamController::class, "API_SanPham_Gia1_3tr"]);

# sản phẩm giá 3-7tr
Route::get('get-product-price-2/', [SanPhamController::class, "API_SanPham_Gia3_7tr"]);
# sản phẩm giá 3-7tr
Route::get('get-product-price-3/', [SanPhamController::class, "API_SanPham_Gia7tr"]);

//gui mail reset password
Route::post('sendEmail-User-Reset', [SendEmailController::class, 'userReset']);

Route::post('HoaDon/LapHoaDon', [HoaDonController::class, 'API_LapHoaDon']);
