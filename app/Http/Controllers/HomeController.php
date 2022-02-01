<?php

namespace App\Http\Controllers;

use App\Models\BinhLuan;
use App\Models\KhachHang;
use App\Models\HoaDon;
use App\Models\LoaiSanPham;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function Index(Request $request)
    {
        //mac dinh lay danh sach bat dau` tu` ngay` 1 trong thang' den' ngay` hien tai
        $dsBinhLuan = BinhLuan::whereDate("created_at", ">=", date_create(date("Y-m") . "-1"))->whereDate("created_at", "<=", date("Y-m-d"))->count();
        $dsHoaDon = HoaDon::whereDate("created_at", ">=", date_create(date("Y-m") . "-1"))->whereDate("created_at", "<=", date("Y-m-d"))
            ->orderByDesc("TongSoLuong")->get();


        $catChuoi = explode(" - ", $request->input("NgayDat"));
        //neu'co' thoi gian ko rong~ va` dung' dinh dang datetime thi` tim` kiem' theo moc' thoi gian
        if ((!empty($request->input("NgayDat"))) && date_create($catChuoi[0]) != false && date_create($catChuoi[1]) != false) {
            $dsBinhLuan = BinhLuan::whereDate("created_at", ">=", date_format(date_create($catChuoi[0]), 'Y-m-d'))
                ->whereDate("created_at", "<=", date_format(date_create($catChuoi[1]), 'Y-m-d'))->count();

            $dsHoaDon = HoaDon::whereDate("created_at", ">=", date_format(date_create($catChuoi[0]), 'Y-m-d'))
                ->whereDate("created_at", "<=", date_format(date_create($catChuoi[1]), 'Y-m-d'))
                ->orderByDesc("TongSoLuong")->get();
        }
        //unset de no' huy? bien' do~ ton' dung luong
        unset($catChuoi);


        //doanh thu nam 2019  select sum((b.giaban-b.gianhap)*b.soluong) from hoa_dons as a,ct_hoa_dons as b where a.id=b.hoadonid and year(a.created_at)=2019
        $doanhThu = DB::select(
            "select Year(a.created_at) as Year,sum((b.GiaBan-b.GiaNhap)*b.SoLuong) as DoanhThu
            from hoa_dons as a,ct_hoa_dons as b
            where a.id=b.hoadonid and a.deleted_at is null
            GROUP BY Year(a.created_at)"
        );
        //chuyen doi DB::select thanh` array
        $doanhThu = json_decode(json_encode($doanhThu), true);
        $danhGia = 0;
        $donGiaoThanhCong = 0;
        $thuNhap = 0;

        //lay ra danh sach loai san pham, them vao tat ca thuoc tinh LuotMua
        $dsLoaiSanPham = LoaiSanPham::all();
        foreach ($dsLoaiSanPham as $loaiSanPham)
            Arr::add($loaiSanPham, "LuotMua", 0);
        $soLuongChiTietHoaDon = 0; //dem xem co bao nhieu chi tiet hoa don

        $dsKhachHangMuaNhieuNhat = collect([]);
        $i = 0; //bien' ao? cho vong lap

        $dsSanPhamBanChay = collect([]);
        $j = 0; //bien' ao? cho vong lap
        foreach ($dsHoaDon as $hoaDon) {
            foreach ($hoaDon->CT_HoaDon as $ctHoaDon) {
                $sanPham=$ctHoaDon->SanPham;
                if ($ctHoaDon->Star != 0 || !empty($ctHoaDon->Star))
                $danhGia++;

                //tim xem san pham trong chi tiet hoa don thuoc loai san pham nao`, sau do' ++ len
                $loaiSanPham = $dsLoaiSanPham->where("id", $sanPham->LoaiSanPham->id)->first();
                $loaiSanPham->LuotMua++;
                $soLuongChiTietHoaDon++;

                //Neu san pham da ton` tai trong mang? thi` cong don` so' luot mua, nguoc lai them vao trong mang?
                $sp=$dsSanPhamBanChay->where("id",$sanPham->id)->first();
                if (empty($sp)) {
                    //ghi nhu vay` no van hieu la tu them vao` khoi can Arr::add
                    SanPhamController::fixImage($sanPham);
                    $sanPham["TongSoLuongBan"]=$ctHoaDon->SoLuong;
                    $dsSanPhamBanChay[$j]=$sanPham;
                    $j++;
                } else {
                    $sp["TongSoLuongBan"]+=$ctHoaDon->SoLuong;
                }
            }
            //neu da giao thanh` cong
            if ($hoaDon->TrangThai == 4) {
                $donGiaoThanhCong++;
                $thuNhap += ($ctHoaDon["GiaBan"] - $ctHoaDon["GiaNhap"]) * $ctHoaDon["SoLuong"];
            }
            //lap lai 10 lan`, top 10 khachHang
            if (count($dsKhachHangMuaNhieuNhat) <= 10) {
                $khachHang = $dsKhachHangMuaNhieuNhat->where("id", $hoaDon->DiaChi->KhachHang->id)->first();
                //neu' trong mang? khong ton` tai khachHang` do' thi` them moi khach hang`, nguoc lai ko them
                if (empty($khachHang)) {
                    //khuc' nay` la` ghi tat'
                    //them thuoc tinh' TongSoLuongMua vao trong khachHang, tu` do' them vao mang? dsKhachHang
                    $dsKhachHangMuaNhieuNhat = Arr::add($dsKhachHangMuaNhieuNhat, $i, Arr::add($hoaDon->DiaChi->KhachHang, "TongSoLuongMua", $hoaDon["TongSoLuong"]));
                    //them thuoc tinh TrangThaiHD hien tai vao trong mang?
                    $dsKhachHangMuaNhieuNhat = Arr::add($dsKhachHangMuaNhieuNhat, $i, Arr::add($hoaDon->DiaChi->KhachHang, "TrangThaiHDHienTai", $hoaDon["TrangThai"]));
                    $i++;
                } else {
                    //neu' da~ ton` tai thi` cong don` TongSoLuong cua hoa don do' vao trong danh sach'
                    $khachHang["TongSoLuongMua"] += $hoaDon["TongSoLuong"];
                    //neu'da~ ton` tai, so sanh' trang thai hoa don thap' nhat'(tuc' uu tien hien thi hoa don co trang thai thap')
                    if ($hoaDon["TrangThai"] < $khachHang["TrangThaiHDHienTai"])
                        $khachHang["TrangThaiHDHienTai"] = $hoaDon["TrangThai"];
                }
            }
        }
        //huy~ bien' ao? de giam? tai vung` nho'
        unset($i);
        unset($j);

        $thongKe = [
            "LuotBinhLuan" => $dsBinhLuan,
            "DonDatHang" => $dsHoaDon->count(),
            "LuotDanhGia" => $danhGia,
            "DonGiaoThanhCong" => $donGiaoThanhCong,
            "ThuNhap" => $thuNhap,
            //sap xep lai theo luot mua, chi lay 5 san pham
            "LoaiSanPham" => $dsLoaiSanPham->sortByDesc("LuotMua")->values()->take(5),
            "SoLuongChiTietHoaDon" => $soLuongChiTietHoaDon,
            //sap xep lai TongSoLuongMua
            "KhachHangMuaNhieuNhat" => $dsKhachHangMuaNhieuNhat->sortByDesc("TongSoLuongMua")->values(),
            "DoanhThu" => $doanhThu,
            //lay 10 sp ban chay
            "dsSanPhamBanChay"=>$dsSanPhamBanChay->sortByDesc("TongSoLuongBan")->values()->take(10),
        ];

        //truyen cai' bien' do' ra view
        return view('Home', ["thongKe" => $thongKe, "request" => $request]);
    }
    public function Susscess()
    {
        return view('Login.ResetPassword-Susscess', []);
    }
    public function Error()
    {
        return view('Login.Error-404');
    }
    public function Test()
    {
        $response = file_get_contents('https://randomuser.me/api/?results=50');
        $user = json_decode($response, true)["results"];
        dd($user);
        foreach ($user as $item) {
            KhachHang::firstOrCreate([
                'Email' => $item["email"]
            ], [
                'Username' => $item["login"]["username"],
                "Phone" => $item["phone"],
                'HoTen' => $item["name"]["title"] . '.' . $item["name"]["first"] . '_' . $item["name"]["last"],
                "NgaySinh" => date_create($item["dob"]["date"]),
                "GioiTinh" => ($item["gender"] == "male") ? 1 : 0,
                "MatKhau" => "password123",
                "DiaChi" => $item["location"]["street"]["name"] . ", " . $item["location"]["city"] . ", " . $item["location"]["country"],
                "HinhAnh" => $item["picture"]["large"],
            ]);
        }
    }
}
