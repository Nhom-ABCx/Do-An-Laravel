<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Enums\TrangThaiHD;
use App\Http\Controllers\Admin\SanPhamController;
use App\Models\BinhLuan;
use App\Models\CT_SanPham;
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
        // $khuyenMai = CTChuongTrinhKM::join("chuong_trinh_khuyen_mais", "chuong_trinh_khuyen_mais.id", "=", "ct_chuong_trinh_kms.ChuongTrinhKhuyenMaiId")
        //     ->whereDate("chuong_trinh_khuyen_mais.FromDate", "<=", date('Y-m-d H:i:s'))
        //     ->whereDate("chuong_trinh_khuyen_mais.ToDate", ">=", date('Y-m-d H:i:s'))
        //     ->whereNull("chuong_trinh_khuyen_mais.deleted_at")
        //     ->limit(9)
        //     ->get("ct_chuong_trinh_kms.*");

        // return view('User.home', ["dsKhuyenMai" => $khuyenMai]);

        // $a = '<b>aaaaaaaaaaaasdasdasdasdasd</b><div><b>asadasd</b></div><div><b>asd</b></div><div><b>a</b></div><div><b>sd</b></div><div><b>as</b></div><div><b>daaaaaaaaaa</b><img src="asdasdasdasdasdasd"></div>';
        // echo strip_tags($a);


        //vi du
        //https://viblo.asia/p/use-mysql-json-field-in-laravel-OeVKBqk05kW
        $sanPham = SanPham::all()->first();
        foreach ($sanPham->ThuocTinh as $key => $value) {
            echo $key . " - " . $value . "</br>";
        }


        echo "</br> Tổ hợp sản phẩm </br></br>";


        foreach ($sanPham->CT_SanPham as $item) {
            collect($sanPham->ThuocTinhToHop)->each(function ($value, $key) use ($item) {
                echo " - " . $item->ThuocTinhValue[$key];
            });
            echo "</br></br>";
        }
        dump($sanPham->lstThuocTinh());

        $color = collect(["grey", "success", "warning", "danger", "info", "purple", "inverse", "pink", "yellow"]);
        echo $color->random();
    }
}
