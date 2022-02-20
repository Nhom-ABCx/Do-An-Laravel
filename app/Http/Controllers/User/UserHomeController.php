<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Enums\TrangThaiHD;
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
        return view('User.Home');
    }
}
