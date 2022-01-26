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
    public function Index()
    {
        //lay ra het' tat ca du lieu tu modal SanPham luu vao trong bien'
        $dsSanPham = SanPham::all();
        //lay danh sach bat dau` tu` ngay` 1 trong thang' den' ngay` hien tai
        $dsBinhLuan = BinhLuan::whereDate("created_at", ">=", date_create(date("Y-m") . "-1"))->whereDate("created_at", "<=", date("Y-m-d"))->count();
        $dsHoaDon = HoaDon::whereDate("created_at", ">=", date_create(date("Y-m") . "-1"))->whereDate("created_at", "<=", date("Y-m-d"))
            ->orderByDesc("TongSoLuong")->get();

        //doanh thu nam 2019  select sum((b.giaban-b.gianhap)*b.soluong) from hoa_dons as a,ct_hoa_dons as b where a.id=b.hoadonid and year(a.created_at)=2019
        $doanhThu = DB::select(
            "select Year(a.created_at) as Year,sum((b.GiaBan-b.GiaNhap)*b.SoLuong) as DoanhThu
            from hoa_dons as a,ct_hoa_dons as b
            where a.id=b.hoadonid and a.deleted_at is null
            GROUP BY Year(a.created_at)"
        );
        //chuyen doi DB::select thanh` array
        $doanhThu=json_decode(json_encode($doanhThu), true);
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

        foreach ($dsHoaDon as $hoaDon) {
            foreach ($hoaDon->CT_HoaDon as $ctHoaDon) {
                if ($ctHoaDon->Star != 0 || !empty($ctHoaDon->Star))
                    $danhGia++;

                //tim xem san pham trong chi tiet hoa don thuoc loai san pham nao`, sau do' ++ len
                $loaiSanPham = $dsLoaiSanPham->where("id", $ctHoaDon->SanPham->LoaiSanPham->id)->first();
                $loaiSanPham->LuotMua++;

                $soLuongChiTietHoaDon++;
            }
            //neu da giao thanh` cong
            if ($hoaDon->TrangThai == 4) {
                $donGiaoThanhCong++;
                $thuNhap += ($ctHoaDon["GiaBan"] - $ctHoaDon["GiaNhap"]) * $ctHoaDon["SoLuong"];
            }
            //lap lai 5 lan`, top 5 khachHang
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

        //sap xep lai theo luot mua
        $dsLoaiSanPham = $dsLoaiSanPham->sortByDesc("LuotMua")->values();

        $thongKe = [
            "LuotBinhLuan" => $dsBinhLuan,
            "DonDatHang" => $dsHoaDon->count(),
            "LuotDanhGia" => $danhGia,
            "DonGiaoThanhCong" => $donGiaoThanhCong,
            "ThuNhap" => $thuNhap,
            "LoaiSanPham" => [
                0 => ["TenLoai" => $dsLoaiSanPham[0]->TenLoai, "LuotMua" => $dsLoaiSanPham[0]->LuotMua],
                1 => ["TenLoai" => $dsLoaiSanPham[1]->TenLoai, "LuotMua" => $dsLoaiSanPham[1]->LuotMua],
                2 => ["TenLoai" => $dsLoaiSanPham[2]->TenLoai, "LuotMua" => $dsLoaiSanPham[2]->LuotMua],
                3 => ["TenLoai" => $dsLoaiSanPham[3]->TenLoai, "LuotMua" => $dsLoaiSanPham[3]->LuotMua],
                4 => ["TenLoai" => $dsLoaiSanPham[4]->TenLoai, "LuotMua" => $dsLoaiSanPham[4]->LuotMua],
            ],
            "SoLuongChiTietHoaDon" => $soLuongChiTietHoaDon,
            "KhachHangMuaNhieuNhat" => $dsKhachHangMuaNhieuNhat,
            "DoanhThu"=>$doanhThu,
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
