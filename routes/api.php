<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\Api\SanPhamController;
use App\Http\Controllers\Api\KhachHangController;
use App\Http\Controllers\Api\HoaDonController;
use App\Http\Controllers\Api\BinhLuanController;
use App\Http\Controllers\Api\YeuThichController;
use App\Http\Controllers\Api\DiaChiController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\HoaDonNhapController;
use App\Http\Controllers\Api\GioHangController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!


|Route::apiResource('SanPham', 'SanPhamController::class');
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
Route::get('san-pham-top', [SanPhamController::class, 'API_SanPham_Top'])->name("API.SanPham-top");

Route::post('DangNhap', [KhachHangController::class, "API_DangNhap"]);
Route::post('DangKy', [KhachHangController::class, "API_DangKy"]);
Route::post('DangKy/Social', [KhachHangController::class, "API_DangKy_Social"]);

//chua co token nen tam thoi` de la phuong thuc GET
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

//dia chi
Route::get('DiaChi/{khachHang}', [DiaChiController::class, "API_GetAll_DiaChi"]);
Route::post('DiaChi/add', [DiaChiController::class, "API_Insert_DiaChi"]);
Route::delete('DiaChi/delete/{diaChi}', [DiaChiController::class, "API_Delete_DiaChi"]);
Route::put('DiaChi/update/{diaChi}', [DiaChiController::class, "API_Update_DiaChi"]);
#get binh luan
Route::get('binh-luan/{sanPham}', [BinhLuanController::class, 'API_Get_BinhLuan_SanPham']);
#tra ve san pham tk dang nhap duoc binh luan
Route::get('binh-luan', [BinhLuanController::class, "API_Check_Auth_ProductToPay"]);
#add binh luan
Route::post('binh-luan/add', [BinhLuanController::class, "API_Add_BinhLuan_SanPham"]);
#Hoa don theo tap
Route::get('HoaDon/KhachHang/{khachHang}', [HoaDonController::class, "API_GET_HoaDon_KhachHang_Theo_TrangThai"]);
Route::get('HoaDon/KhachHang/{khachHang}/DaHuy', [HoaDonController::class, "API_GET_HoaDon_KhachHang_DaHuy"]);
Route::delete('HoaDon/delete', [HoaDonController::class, "API_Delete_HoaDon"]);
Route::post('HoaDon/restore', [HoaDonController::class, "API_Restore_HoaDon"]);

#ds san pham can danh gia
Route::get('san-pham-can-danh-gia', [HoaDonController::class, "API_San_Pham_Can_Danh_Gia"]);
# add danh gia cho san pham
Route::post('danh-gia-san-pham', [HoaDonController::class, "API_Danh_Gia_SanPham"]);
// api san pham moi
Route::get('san-pham-moi', [SanPhamController::class, 'API_SanPham_Moi'])->name("API.SanPham-moi");
//lay' het tin nhan ve tu` Admin, truyen` len KhachHangId
Route::post('Message', [MessageController::class, "API_GetAll_Message_Admin"]);
Route::post('Message/add', [MessageController::class, "API_Them_Message_Admin"]);
//gio hang
Route::post('GioHang/add', [GioHangController::class, "API_Insert_SanPham_GioHang"]);
Route::put('GioHang/update', [GioHangController::class, "API_Update_SanPham_GioHang"]);
Route::delete('GioHang/delete', [GioHangController::class, "API_Delete_SanPham_GioHang"]);
Route::delete('GioHang/delete', [GioHangController::class, "API_Delete_SanPham_GioHang"]);
Route::get('GioHang/{khachHang}', [GioHangController::class, "API_Get_GioHang"]);
Route::post('GioHang/addList', [GioHangController::class, "api_Insert_ListSanPham_GioHang"]);
//json ajax
Route::get('HoaDonNhap/{hoaDonNhap}', [HoaDonNhapController::class, "API_HoaDonNhap_ChiTiet"])->name("HoaDonNhap.APIChiTiet");
Route::post('SanPham-CrossJoin-Input/{sanPham}', [SanPhamController::class, "API_SanPham_CrossJoin"])->name("SanPham.CrossJoin");
