<?php

namespace App\Http\Controllers;

use App\Models\HoaDonNhap;
use App\Models\CT_HoaDonNhap;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\NhanVien;
use App\Models\SanPham;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class HoaDonNhapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = HoaDonNhap::all();
        if (!empty($request->input("NgayDat"))) {
            $catChuoi = explode(" - ", $request->input("NgayDat"));

            $data = HoaDonNhap::whereDate("created_at", ">=", date_format(date_create($catChuoi[0]), 'Y-m-d'))
                ->whereDate("created_at", "<=", date_format(date_create($catChuoi[1]), 'Y-m-d'))->get();
        }
        if (!empty($request->input('TrangThai')))
            $data = $data->where('TrangThai', $request->input('TrangThai'));
        if (!empty($request->input('NhanVienId')))
            $data = $data->where('NhanVienId', $request->input('NhanVienId'));
        $dsNhanVien = NhanVien::all();
        //tra lai resquet ve cho view de hien thi lai tim` kiem' cu?
        return view('HoaDon.HoaDonNhap-index', ["hoaDon" => $data, 'dsNhanVien' => $dsNhanVien, 'request' => $request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('HoaDon.HoaDonNhap-create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHoaDonNhapRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //xác thực đầu vào, xem các luật tại https://laravel.com/docs/8.x/validation#available-validation-rules
        $request->validate(['NhaCungCap' => ['required', 'max:255'],]);

        HoaDonNhap::create([
            'NhanVienId' => Auth::user()->id,
            'NhaCungCap' => $request->input('NhaCungCap'),
        ]);

        return Redirect::route('HoaDonNhap.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HoaDonNhap  $hoaDonNhap
     * @return \Illuminate\Http\Response
     */
    public function show(HoaDonNhap $hoaDonNhap)
    {
        $dsChiTietHD = CT_HoaDonNhap::where("HoaDonNhapId", $hoaDonNhap->id)->get();
        $dsSanPham = SanPham::all();
        foreach ($dsSanPham as $sp)
            SanPhamController::fixImage($sp);
        //gọi fixImage cho từng sp
        return view('HoaDon.HoaDonNhap-show', ["hoaDonNhap" => $hoaDonNhap, "dsChiTietHD" => $dsChiTietHD, "dsSanPham" => $dsSanPham]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HoaDonNhap  $hoaDonNhap
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, HoaDonNhap $hoaDonNhap)
    {
        //trang thai phai nam` trong 2 so', tranh truong` hop thay doi request tai giao dien
        $request->validate(
            ['TrangThai' => ['required', 'numeric', 'integer', Rule::in([0, 1])]]
        );

        $hoaDonNhap->TrangThai = $request["TrangThai"];
        $hoaDonNhap->save();

        //neu trang thai' thanh`cong thi cap nhat lai gia' ban' va so luong ton` cua san pham tuong ung'
        if ($hoaDonNhap->TrangThai) {
            $dsChiTietHD = $hoaDonNhap->CT_HoaDonNhap;
            if (count($dsChiTietHD)) {
                foreach ($dsChiTietHD as $item) {
                    $sanPham = $item->SanPham;
                    $sanPham->fill([
                        "GiaNhap" => $item->GiaNhap,
                        "SoLuongTon" => $sanPham->SoLuongTon + $item->SoLuong,
                    ]);
                    $sanPham->save();
                }
            }
        }
        return Redirect::route('HoaDonNhap.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHoaDonNhapRequest  $request
     * @param  \App\Models\HoaDonNhap  $hoaDonNhap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HoaDonNhap $hoaDonNhap)
    {
        //xác thực đầu vào, xem các luật tại https://laravel.com/docs/8.x/validation#available-validation-rules
        $request->validate([
            'SanPhamId' => ['required', 'numeric', 'integer', 'exists:san_phams,id'],
            'SoLuong' => ['required', 'numeric', 'integer', 'min:0', Rule::notIn([0])],
            'GiaNhap' => ['required', 'numeric', 'integer', 'min:0', Rule::notIn([0])],
        ]);

        $ctHoaDonNhap = CT_HoaDonNhap::where("SanPhamId", $request["SanPhamId"])->where("HoaDonNhapId", $hoaDonNhap->id)->first();
        if (!empty($ctHoaDonNhap)) {
            $soLuong = $ctHoaDonNhap->SoLuong + $request->input('SoLuong');
            $giaNhap = $ctHoaDonNhap->GiaNhap + $request->input('GiaNhap');
            $ctHoaDonNhap->fill([
                'SoLuong' => $soLuong,
                'GiaNhap' => $giaNhap,
                'ThanhTien' => $soLuong * $giaNhap,
            ]);
            $ctHoaDonNhap->save();
        } else {
            $thanhTien = $request->input('SoLuong') * $request->input('GiaNhap');
            $ctHoaDonNhap = CT_HoaDonNhap::create([
                'HoaDonNhapId' => $hoaDonNhap->id,
                'SanPhamId' => $request->input('SanPhamId'),
                'SoLuong' => $request->input('SoLuong'),
                'GiaNhap' => $request->input('GiaNhap'),
                'ThanhTien' => $thanhTien,
            ]);
        }

        $hoaDonNhap->TongSoLuong = CT_HoaDonNhap::where('HoaDonNhapId', $hoaDonNhap->id)->sum('SoLuong');
        $hoaDonNhap->TongTien = CT_HoaDonNhap::where('HoaDonNhapId', $hoaDonNhap->id)->sum('ThanhTien');
        $hoaDonNhap->save();

        return Redirect::route('HoaDonNhap.show', $hoaDonNhap);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HoaDonNhap  $hoaDonNhap
     * @return \Illuminate\Http\Response
     */
    public function destroy(HoaDonNhap $hoaDonNhap)
    {
        if (count($hoaDonNhap->CT_HoaDonNhap)) {
            $hoaDonNhap->delete();
            $hoaDonNhap->save();
            return Redirect::route("HoaDonNhap.index");
        }
        $hoaDonNhap->forceDelete();
        return Redirect::route('HoaDonNhap.index');

    }

    public function HoaDonNhapDaHuy(Request $request)
    {
        //y chang index khac' cai' select deleted_at
        $data = HoaDonNhap::onlyTrashed()->get();
        if (!empty($request->input("NgayDat"))) {
            $catChuoi = explode(" - ", $request->input("NgayDat"));

            $data = HoaDonNhap::whereDate("created_at", ">=", date_format(date_create($catChuoi[0]), 'Y-m-d'))
                ->whereDate("created_at", "<=", date_format(date_create($catChuoi[1]), 'Y-m-d'))->get();
        }
        if (!empty($request->input('TrangThai')))
            $data = $data->where('TrangThai', $request->input('TrangThai'));
        if (!empty($request->input('NhanVienId')))
            $data = $data->where('NhanVienId', $request->input('NhanVienId'));
        $dsNhanVien = NhanVien::all();
        //tra lai resquet ve cho view de hien thi lai tim` kiem' cu?
        return view('HoaDon.HoaDonNhap-index', ["hoaDon" => $data, 'dsNhanVien' => $dsNhanVien, 'request' => $request]);
    }
    public function KhoiPhucHoaDonNhap($id)
    {
        $hoaDon = HoaDonNhap::onlyTrashed()->find($id);
        $hoaDon->restore();
        return Redirect::route('HoaDonNhap.DaHuy');
    }
}
