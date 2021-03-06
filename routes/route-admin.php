<?php

use Illuminate\Support\Facades\Route;
//controller
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BinhLuanController;
use App\Http\Controllers\Admin\HoaDonController;
use App\Http\Controllers\Admin\HoaDonNhapController;
use App\Http\Controllers\Admin\SanPhamController;
use App\Http\Controllers\Admin\ChuongTrinhKhuyenMaiController;
use App\Http\Controllers\Admin\CTChuongTrinhKMController;
use App\Http\Controllers\Admin\HangSanXuatController;
use App\Http\Controllers\Admin\DonViVanChuyenController;
use App\Http\Controllers\Admin\NguoiVanChuyenController;
use App\Http\Controllers\Admin\LoaiSanPhamController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\HinhAnhController;
use App\Http\Controllers\Admin\TaiKhoanController;

//bat buoc dang nhap phan Admin
Route::group([
    'prefix' => 'Admin',
], function () {
    Route::get('Login', [AuthController::class, 'index'])->name('Login.index'); //show trang login
    Route::post('Login', [AuthController::class, 'show'])->name('Login.show'); //xu ly dang nhap -> tra ve home
    Route::get('Login/create', [AuthController::class, 'create'])->name('Login.create'); //dang ky
    Route::post('Login/create', [AuthController::class, 'store'])->name('Login.store');
    Route::delete('Login', [AuthController::class, 'destroy'])->name('Login.destroy'); //dang xuat
    Route::get('Login/{social}', [AuthController::class, 'social'])->name('Login.social');
    Route::get('Login/{social}/Callback', [AuthController::class, 'social_callback'])->name('Login.social_callback');
});
Route::group([
    'middleware' => 'auth',
    'prefix' => 'Admin',
], function () {
    //viet route vao day de bat buoc dang nhap
    Route::get('/', [HomeController::class, "Index"])->name('Home.index');
    Route::resource('SanPham', SanPhamController::class, [
        'parameters' => [
            'SanPham' => 'sanPham'
        ]
    ]);
    Route::get("SanPhamm/DaXoa", [SanPhamController::class, "DaXoa"])->name("SanPham.DaXoa");
    Route::post("SanPham/KhoiPhuc/{id}", [SanPhamController::class, "KhoiPhucSanPham"])->name("SanPham.KhoiPhuc");
    Route::delete("SanPham/XoaVinhVien/{id}", [SanPhamController::class, "XoaVinhVienSanPham"])->name("SanPham.XoaVinhVien");
    Route::post('SanPham-CrossJoin-Input/{sanPham?}', [SanPhamController::class, "SanPhamCrossJoin"])->name("SanPham.CrossJoin");
    Route::put("SanPham/{sanPham}/edit/TrangThai", [SanPhamController::class, "CapNhatTrangThaiSanPham"])->name("SanPham.CapNhatTrangThai");

    Route::resource('KhuyenMai', ChuongTrinhKhuyenMaiController::class, [
        'parameters' => [
            'KhuyenMai' => 'chuongTrinhKhuyenMai'
        ]
    ]);
    Route::get("KhuyenMaii/DaXoa", [ChuongTrinhKhuyenMaiController::class, "KhuyenMaiDaXoa"])->name("KhuyenMai.DaXoa");
    Route::post("KhuyenMai/KhoiPhuc/{id}", [ChuongTrinhKhuyenMaiController::class, "KhoiPhucKhuyenMai"])->name("KhuyenMai.KhoiPhuc");


    Route::get('/CTKhuyenMai', [CTChuongTrinhKMController::class, 'index'])->name('CTKhuyenMai.index'); //Chi ti???t CTKM index
    Route::get('/CTKhuyenMai/create', [CTChuongTrinhKMController::class, 'create'])->name('CTKhuyenMai.create'); //Chi ti???t CTKM create
    Route::post('/CTKhuyenMai/store', [CTChuongTrinhKMController::class, 'store'])->name('CTKhuyenMai.store'); //Chi ti???t CTKM store
    Route::get('/CTKhuyenMai/{ctid}/{spid}/edit', [CTChuongTrinhKMController::class, 'edit'])->name('CTKhuyenMai.edit'); //Chi ti???t CTKM edit
    Route::put('/CTKhuyenMai/{ctid}/{spid}', [CTChuongTrinhKMController::class, 'update'])->name('CTKhuyenMai.update'); //Chi ti???t CTKM update
    Route::delete('/CTKhuyenMai/{ctid}/{spid}', [CTChuongTrinhKMController::class, 'destroy'])->name('CTKhuyenMai.destroy'); //Chi ti???t CTKM delete
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
    Route::get("DonViVanChuyenn/DaXoa", [DonViVanChuyenController::class, "DonViVanChuyenDaXoa"])->name("DonViVanChuyen.DaXoa");
    Route::post("DonViVanChuyen/KhoiPhuc/{id}", [DonViVanChuyenController::class, "KhoiPhucDonViVanChuyen"])->name("DonViVanChuyen.KhoiPhuc");

    Route::resource('NguoiVanChuyen', NguoiVanChuyenController::class, [
        'parameters' => [
            'NguoiVanChuyen' => 'nguoiVanChuyen'
        ]
    ]);
    //binh luan
    Route::resource('BinhLuan', BinhLuanController::class, [
        'parameters' => [
            'BinhLuan' => 'binhLuan'
        ]
    ]);
    Route::get("BinhLuann/DaXoa", [BinhLuanController::class, "BinhLuanDaXoa"])->name("BinhLuan.DaXoa");
    Route::post("BinhLuan/KhoiPhuc/{id}", [BinhLuanController::class, "KhoiPhucBinhLuan"])->name("BinhLuan.KhoiPhuc");

    Route::resource('Message', MessageController::class, [
        'parameters' => [
            'Message' => 'message'
        ]
    ]);
    Route::resource('HoaDon', HoaDonController::class, [
        'parameters' => [
            'HoaDon' => 'hoaDon'
        ]
    ]);
    Route::get("HoaDonn/DaHuy", [HoaDonController::class, "HoaDonDaHuy"])->name("HoaDon.DaHuy");
    Route::post("HoaDon/KhoiPhuc/{id}", [HoaDonController::class, "KhoiPhucHoaDon"])->name("HoaDon.KhoiPhuc");
    Route::get("HoaDonn/DaGiao", [HoaDonController::class, "HoaDonDaGiao"])->name("HoaDon.DaGiao");
    Route::get("HoaDon/{hoaDon}/PDF", [HoaDonController::class, "HoaDonPDF"])->name("HoaDon.PDF");
    Route::resource('HoaDonNhap', HoaDonNhapController::class, [
        'parameters' => [
            'HoaDonNhap' => 'hoaDonNhap'
        ]
    ]);
    Route::get("HoaDonNhapp/DaHuy", [HoaDonNhapController::class, "HoaDonNhapDaHuy"])->name("HoaDonNhap.DaHuy");
    Route::post("HoaDonNhap/KhoiPhuc/{id}", [HoaDonNhapController::class, "KhoiPhucHoaDonNhap"])->name("HoaDonNhap.KhoiPhuc");
    Route::post("HoaDonNhap/ThemSanPham/{hoaDonNhap}", [HoaDonNhapController::class, "ThemSanPham"])->name("HoaDonNhap.ThemSanPham");
    Route::delete("HoaDonNhap/{hoaDonNhap}/XoaSanPham", [HoaDonNhapController::class, "XoaSanPham"])->name("HoaDonNhap.XoaSanPham");
    Route::patch("HoaDonNhap/CapNhatTrangThai/{hoaDonNhap}", [HoaDonNhapController::class, "CapNhatTrangThai"])->name("HoaDonNhap.CapNhatTrangThai");
    Route::get('HoaDonNhap/detail/{hoaDonNhap}', [HoaDonNhapController::class, "API_HoaDonNhap_ChiTiet"])->name("HoaDonNhap.APIChiTiet");
    Route::post('HoaDonNhap/showModal', [HoaDonNhapController::class, "showModal_ChonChiTietSP"])->name("HoaDonNhap.showModal");


    Route::get("WidgetThongBao", function () {
        return view("WidgetThongBao");
    });
    // khach hang
    Route::resource('TaiKhoan', TaiKhoanController::class, [
        'parameters' => [
            'TaiKhoan' => 'taiKhoan'
        ]
    ]);
    Route::get("TaiKhoang/dsden", [TaiKhoanController::class, "TaiKhoan_DS_Den"])->name("TaiKhoan.dsDen");
    Route::post("TaiKhoan/KhoiPhuc/{id}", [TaiKhoanController::class, "KhoiPhucTaiKhoan"])->name("TaiKhoan.KhoiPhuc");

    //Route s??? sao s???n ph???m
    Route::get("SanPham/Sao", [SanPhamController::class, "SoSao"])->name('SanPham.SoSao');
    Route::resource("LoaiSanPham", LoaiSanPhamController::class, [
        'parameters' => [
            'LoaiSanPham' => 'loaiSanPham'
        ]
    ]);
    Route::get("LoaiSanPhamm/DaXoa", [LoaiSanPhamController::class, "DaXoa"])->name("LoaiSanPham.DaXoa");
    Route::post("LoaiSanPham/KhoiPhuc/{id}", [LoaiSanPhamController::class, "KhoiPhucLoaiSanPham"])->name("LoaiSanPham.KhoiPhuc");

    //hinh`anh?
    Route::resource('HinhAnh', HinhAnhController::class, [
        'parameters' => [
            'HinhAnh' => 'hinhAnh'
        ]
    ]);
});
