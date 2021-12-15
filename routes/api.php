<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
use App\Models\SanPham;
use App\Http\Controllers\KhachHangController;


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
Route::post('DangNhap', [KhachHangController::class,"API_DangNhap"]);
Route::post('DangKy', [KhachHangController::class,"API_DangKy"]);
