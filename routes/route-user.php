<?php

use Illuminate\Support\Facades\Route;
//controller
use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\User\UserGioHangController;
use App\Http\Controllers\User\UserTaiKhoanController;

//bo route User vo trong nay` cho de~
Route::name('User.')->group(function () {
    Route::get('/', [UserHomeController::class, "Index"])->name('home');
    Route::resource('GioHang', UserGioHangController::class, [
        'parameters' => [
            'GioHang' => 'gioHang'
        ]
    ]);
    Route::resource('TaiKhoan', UserTaiKhoanController::class, [
        'parameters' => [
            'TaiKhoan' => 'taiKhoan'
        ]
    ]);
});
