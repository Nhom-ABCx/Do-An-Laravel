<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function Index()
    {
        //lay ra het' tat ca du lieu tu modal SanPham luu vao trong bien'
        $dsSanPham = SanPham::all();

        //lay danh sach don hang` bat dau` tu` ngay` 1 trong thang' den' ngay` hien tai
        $dsHoaDon = HoaDon::whereDate("created_at", ">=", date_create(date("Y-m") . "-1"))->whereDate("created_at", "<=", date("Y-m-d"))->count();
        $thongKe =
            [
                "DonDatHang" => $dsHoaDon,
            ];
        //truyen cai' bien' do' ra view
        return view('Home', ['dsSanPham' => $dsSanPham, "thongKe" => $thongKe]);
    }
    public function Susscess()
    {
        return view('Login.ResetPassword-Susscess', []);
    }
    public function Error()
    {
        return view('Login.Error-404');
    }
}
