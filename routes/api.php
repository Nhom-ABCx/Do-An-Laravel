<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BinhLuanController;
use App\Http\Controllers\YeuThichController;
use App\Http\Controllers\DiaChiController;

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
Route::get('SanPham/GiamGia', [SanPhamController::class, "API_SanPham_GiamGia"]);

Route::get('SanPham/GiaBan', [SanPhamController::class, "API_SanPham_GiaBan"]);

//gui mail reset password
Route::post('sendEmail-User-Reset', [SendEmailController::class, 'userReset']);

Route::post('HoaDon/LapHoaDon', [HoaDonController::class, 'API_LapHoaDon']);

Route::post('YeuThich/add', [YeuThichController::class, "API_Insert_KhachHang_YeuThich_SanPham"]);
Route::delete('YeuThich/delete', [YeuThichController::class, "API_Delete_KhachHang_YeuThich_SanPham"]);
Route::get('YeuThich/{khachHang}', [YeuThichController::class, "API_Get_YeuThich"]);
Route::get('SanPham/YeuThich', [YeuThichController::class, "API_Get_SanPham_YeuThich"]);

//dia chi
Route::get('DiaChi/{khachHang}', [DiaChiController::class, "API_GetAll_DiaChi"]);
Route::post('DiaChi/add', [DiaChiController::class, "API_Insert_DiaChi"]);
Route::delete('DiaChi/delete/{diaChi}', [DiaChiController::class, "API_Delete_DiaChi"]);
Route::put('DiaChi/update/{diaChi}', [DiaChiController::class, "API_Update_DiaChi"]);
# gia sale
Route::get('khuyen-mai/{SanPhamId}',[SanPhamController::class,"API_Gia_Khuyen_Mai"]);
#get binh luan
Route::get('binh-luan/{sanPham}', [BinhLuanController::class, 'API_Get_BinhLuan_SanPham']);

#tra ve san pham tk dang hap duoc binh luan
Route::get('binh-luan',[BinhLuanController::class, "API_Check_Auth_ProductComment"]);

#add binh luan
Route::post('binh-luan/add',[BinhLuanController::class, "API_Add_BinhLuan_SanPham"]);