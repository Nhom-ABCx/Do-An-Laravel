<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\HoaDonNhap;
use App\Models\CT_HoaDonNhap;
use Illuminate\Support\Facades\Auth;
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
        $catChuoi = explode(" - ", $request->input("NgayDat"));
        //neu' ko rong~ va` dung' dinh dang datetime thi` tim` kiem'
        if ((!empty($request->input("NgayDat"))) && date_create($catChuoi[0]) != false && date_create($catChuoi[1]) != false) {
            $data = HoaDonNhap::whereDate("created_at", ">=", date_format(date_create($catChuoi[0]), 'Y-m-d'))
                ->whereDate("created_at", "<=", date_format(date_create($catChuoi[1]), 'Y-m-d'))->get();
        }
        //unset de no' huy? bien' do~ ton' dung luong
        unset($catChuoi);
        if (!empty($request->input('TrangThai')))
            $data = $data->where('TrangThai', $request->input('TrangThai'));
        if (!empty($request->input('NhanVienId')))
            $data = $data->where('NhanVienId', $request->input('NhanVienId'));
        $dsNhanVien = NhanVien::all();
        //tra lai resquet ve cho view de hien thi lai tim` kiem' cu?
        return view('Admin.HoaDon.HoaDonNhap-index', ["hoaDon" => $data, 'dsNhanVien' => $dsNhanVien, 'request' => $request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('Admin.HoaDon.HoaDonNhap-create', []);
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
        $request->validate(['NhaCungCap' => ['required', 'max:255'], 'Phone' => ['required', 'numeric'],]);

        HoaDonNhap::create([
            'NhanVienId' => Auth::user()->id,
            'NhaCungCap' => $request->input('NhaCungCap'),
            'Phone' => $request->input('Phone'),
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
        $dsSanPham = SanPham::all();
        foreach ($dsSanPham as $sp) {
            SanPhamController::fixImage($sp);
            //sua lai luon de xai cho javascript
            $sp["HangSanXuatId"] = $sp->HangSanXuat->Ten;
            $sp["LoaiSanPhamId"] = $sp->LoaiSanPham->TenLoai;
        }
        //gọi fixImage cho từng sp
        return view('Admin.HoaDon.HoaDonNhap-show', ["hoaDonNhap" => $hoaDonNhap, "dsSanPham" => $dsSanPham]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HoaDonNhap  $hoaDonNhap
     * @return \Illuminate\Http\Response
     */
    //cap nhat lai trang thai cua hoa don nhap
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
    //them san pham vao trong chi tiet hoa don nhap
    public function update(Request $request, HoaDonNhap $hoaDonNhap)
    {
        //xác thực đầu vào, xem các luật tại https://laravel.com/docs/8.x/validation#available-validation-rules
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'pk' => ['required', 'numeric', 'integer', 'exists:san_phams,id'],
            'value' => ['required', 'numeric', 'min:0', Rule::notIn([0])],
        ]);
        // //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);
        //neu ton` tai roi` thi update ngc lai thi` bao' loi~
        $ctHoaDonNhap = CT_HoaDonNhap::where("SanPhamId", $request["pk"])->where("HoaDonNhapId", $hoaDonNhap->id)->first();
        if (!empty($ctHoaDonNhap)) {
            $soLuong = ($request['name'] == "SoLuong") ? $request['value'] : $ctHoaDonNhap->SoLuong;
            $giaNhap = ($request['name'] == "GiaNhap") ? $request['value'] : $ctHoaDonNhap->GiaNhap;
            $ctHoaDonNhap->fill([
                'SoLuong' => $soLuong,
                'GiaNhap' => $giaNhap,
                'ThanhTien' => $soLuong * $giaNhap,
            ]);
            $ctHoaDonNhap->save();
        } else {
            return response()->json(["error" => "Không tìm thấy dữ liệu"], 404);
        }

        $hoaDonNhap->TongSoLuong = CT_HoaDonNhap::where('HoaDonNhapId', $hoaDonNhap->id)->sum('SoLuong');
        $hoaDonNhap->TongTien = CT_HoaDonNhap::where('HoaDonNhapId', $hoaDonNhap->id)->sum('ThanhTien');
        $hoaDonNhap->save();

        return response()->json($ctHoaDonNhap, 200);
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
        return view('Admin.HoaDon.HoaDonNhap-index', ["hoaDon" => $data, 'dsNhanVien' => $dsNhanVien, 'request' => $request]);
    }
    public function KhoiPhucHoaDonNhap($id)
    {
        $hoaDon = HoaDonNhap::onlyTrashed()->find($id);
        $hoaDon->restore();
        return Redirect::route('HoaDonNhap.DaHuy');
    }
    public function ThemSanPham(Request $request, HoaDonNhap $hoaDonNhap)
    {
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'SanPhamId.*' => ['required', 'numeric', 'integer', 'exists:san_phams,id'],
        ]);
        // //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        //xem co' duoc tao ra hay ko de xu ly ben phan giao dien
        $dsChiTietHD = [];
        $i = 0;
        foreach ($request["SanPhamId"] as $item) {
            $ctHoaDonNhap = CT_HoaDonNhap::firstOrCreate([
                'HoaDonNhapId' => $hoaDonNhap->id,
                'SanPhamId' => $item,
            ]);
            $dsChiTietHD = Arr::add($dsChiTietHD, $i, $ctHoaDonNhap);
            $i++;
        }
        return response()->json($dsChiTietHD, 200);
    }
    public function XoaSanPham($id)
    {
        $ctHoaDonNhap = CT_HoaDonNhap::where("SanPhamId",$id)->first();
        if (!empty($ctHoaDonNhap)) {
            $ctHoaDonNhap->forceDelete();
            //tinh' lai TongSL voi TongTien
            $hoaDonNhap=$ctHoaDonNhap->HoaDonNhap;
            $hoaDonNhap->TongSoLuong = CT_HoaDonNhap::where('HoaDonNhapId', $hoaDonNhap->id)->sum('SoLuong');
            $hoaDonNhap->TongTien = CT_HoaDonNhap::where('HoaDonNhapId', $hoaDonNhap->id)->sum('ThanhTien');
            $hoaDonNhap->save();
            return response()->json([], 200);
        }
        return response()->json(["Error" => "Không tìm thấy"], 404);
    }
    public function CapNhatTrangThai(HoaDonNhap $hoaDonNhap)
    {
        if ($hoaDonNhap->TrangThai == 1)
            //if nay` de tranh' tinh` trang gui request ao?, voi thu~ nghiem luon withErrors
            return Redirect::back()->withErrors(['TrangThai' => 'Trạng thái đã thành công thì không thể cập nhật tiếp']);
        else {
            $hoaDonNhap->TrangThai = $hoaDonNhap->TrangThai + 1;
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
        }
        return Redirect::route('HoaDonNhap.index');
    }
    //api
    public function API_HoaDonNhap_ChiTiet(HoaDonNhap $hoaDonNhap)
    {
        $dsCT_HoaDonNhap = $hoaDonNhap->CT_HoaDonNhap;
        foreach ($dsCT_HoaDonNhap as $ctHoaDonNhap) {
            SanPhamController::fixImage($ctHoaDonNhap->SanPham);
        }
        return response()->json($dsCT_HoaDonNhap, 200);
    }
}
