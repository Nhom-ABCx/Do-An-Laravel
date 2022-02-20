<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Enums\TrangThaiHD;
use App\Http\Controllers\Admin\SanPhamController;
use App\Models\BinhLuan;
use App\Models\CTChuongTrinhKM;
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
        $khuyenMai = CTChuongTrinhKM::join("chuong_trinh_khuyen_mais", "chuong_trinh_khuyen_mais.id", "=", "ct_chuong_trinh_kms.ChuongTrinhKhuyenMaiId")
            ->whereDate("chuong_trinh_khuyen_mais.FromDate", "<=", date('Y-m-d H:i:s'))
            ->whereDate("chuong_trinh_khuyen_mais.ToDate", ">=", date('Y-m-d H:i:s'))
            ->whereNull("chuong_trinh_khuyen_mais.deleted_at")
            ->limit(9)
            ->get("ct_chuong_trinh_kms.*");

        return view('User.home', ["dsKhuyenMai" => $khuyenMai]);
    }
}
