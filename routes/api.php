<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
<<<<<<< HEAD
use App\Models\SanPham;
=======
>>>>>>> c8e90bfc96f3238f19753168f30bae80dc84b637
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
<<<<<<< HEAD

# api loại sản phẩm điện thoại 
Route::get('dien-thoai',[SanPhamController::class,"API_SanPham_DT"]);

# api chi tiết sản phẩm điện thoại
Route::get('san-pham/{id}',[SanPhamController::class,"API_SanPham_DT_ChiTiet"]);
=======
>>>>>>> c8e90bfc96f3238f19753168f30bae80dc84b637
Route::post('DangNhap', [KhachHangController::class,"API_DangNhap"]);
Route::post('DangKy', [KhachHangController::class,"API_DangKy"]);
