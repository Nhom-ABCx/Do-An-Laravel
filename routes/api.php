<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
use App\Models\SanPham;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\YeuThichController;
use App\Models\YeuThich;

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

Route::get('SanPham/LoaiSanPham/{loaiSanPham}', [SanPhamController::class, "API_SanPham_LoaiSanPham"]);

# api chi tiết sản phẩm điện thoại
Route::get('san-pham/{id}', [SanPhamController::class, "API_SanPham_DT_ChiTiet"]);

#api tìm kiếm sản phẩm
Route::post('/search-product', [SanPhamController::class, "API_SanPham_TimKiem"]);

# sản phẩm bán chạy
Route::get('san-pham-top', [SanPhamController::class, 'API_SanPham_Top']);

Route::post('DangNhap', [KhachHangController::class, "API_DangNhap"]);
Route::post('DangKy', [KhachHangController::class, "API_DangKy"]);

Route::get('KhachHang/{khachHang}', [KhachHangController::class, "API_Get_KhachHang"]);
Route::put('KhachHang/{khachHang}', [KhachHangController::class, "API_Update_KhachHang"]);
Route::put('KhachHang/{khachHang}/updatePassword', [KhachHangController::class, "API_Update_KhachHang_MatKhau"]);
Route::patch('KhachHang/{id}', [KhachHangController::class, "API_Update_KhachHang_HinhAnh"]);

Route::post('TimKiem', [SanPhamController::class, "API_SanPham_TimKiem"]); #

# sản phẩm khuyên mãi
Route::get('get-all-product-sale', [SanPhamController::class, "API_SanPham_GiamGia"]);

Route::get('SanPham/GiaBan', [SanPhamController::class, "API_SanPham_GiaBan"]);

//gui mail reset password
Route::post('sendEmail-User-Reset', [SendEmailController::class, 'userReset']);

Route::post('HoaDon/LapHoaDon', [HoaDonController::class, 'API_LapHoaDon']);

Route::get('YeuThich/{khachHang}', [YeuThichController::class, "API_Get_YeuThich"]);
Route::get('SanPham/YeuThich/{khachHang}', [YeuThichController::class, "API_Get_SanPham_YeuThich"]);
Route::get('YeuThich', [YeuThichController::class, "API_Get_KhachHang_YeuThich_SanPham"]); //get with param
Route::post('YeuThich/add', [YeuThichController::class, "API_Insert_KhachHang_YeuThich_SanPham"]);
Route::delete('YeuThich/delete', [YeuThichController::class, "API_Delete_KhachHang_YeuThich_SanPham"]);
