<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Enums\TrangThaiHD;
use App\Http\Controllers\Admin\SanPhamController;
use App\Models\BinhLuan;
use App\Models\KhachHang;
use App\Models\HoaDon;
use App\Models\LoaiSanPham;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class UserHomeController extends Controller
{
    public function Index(Request $request)
    {
        $data = SanPham::where('SoLuongTon', '>', 0) //so luonhg ton >0
            ->orderByDesc('LuotMua')->take(8)->get(); //sap xep theo luot mua giam dan`
        foreach ($data as $item)
            SanPhamController::fixImage($item);

        return view('User.home', ["sanPham" => $data]);
    }
}
