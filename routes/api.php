<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\Api\ApiSanPhamController;
use App\Http\Controllers\Api\ApiSlideShowController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!


|Route::apiResource('SanPham', 'SanPhamController::class');
| document postman link: https://www.getpostman.com/collections/1ddc354c51892b2c86a8
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//gui mail reset password
Route::post('sendEmail-User-Reset', [SendEmailController::class, 'userReset']);

//vừa search vừa lấy het data
Route::group([
    'prefix' => 'search',
], function () {
    Route::get('san-pham', [ApiSanPhamController::class, "search"]);
});
Route::get('banner', [ApiSlideShowController::class, "getBanner"]);
