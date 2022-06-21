<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\HoaDonNhap;
use App\Models\CT_HoaDonNhap;
use App\Models\NhaCungCap;
use Illuminate\Support\Facades\Auth;
use App\Models\SanPham;
use App\Models\TaiKhoan;
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
        $data = HoaDonNhap::from(app(HoaDonNhap::class)->getTable());

        $this->filter($data, $request);

        $dsTaiKhoan = TaiKhoan::where('LoaiTaiKhoanId', 5)->get();
        $dsNhaCungCap = NhaCungCap::all();

        //tra lai resquet ve cho view de hien thi lai tim` kiem' cu?
        return view('Admin.HoaDon.HoaDonNhap-index', ["hoaDon" => $data, 'dsTaiKhoan' => $dsTaiKhoan, 'request' => $request, 'dsNhaCungCap' => $dsNhaCungCap]);
    }
    /**
     * ham` nay` co tac dung filter theo request
     *  chu? yeu' xai` lai ho index va` daxoa
     */
    public static function filter(&$data, Request $request)
    {
        $catChuoi = explode(" - ", $request->input("NgayDat"));
        //neu' ko rong~ va` dung' dinh dang datetime thi` tim` kiem'
        if ((!empty($request->input("NgayDat"))) && date_create($catChuoi[0]) != false && date_create($catChuoi[1]) != false) {
            $data = HoaDonNhap::whereDate("created_at", ">=", date_format(date_create($catChuoi[0]), 'Y-m-d'))
                ->whereDate("created_at", "<=", date_format(date_create($catChuoi[1]), 'Y-m-d'));
        }
        //unset de no' huy? bien' do~ ton' dung luong
        unset($catChuoi);
        if ($request->filled('TrangThai'))
            $data = $data->where('TrangThai', $request['TrangThai']);
        if (!empty($request->input('TaiKhoanId')))
            $data = $data->where('TaiKhoanId', $request->input('TaiKhoanId'));

        $data = $data->get();
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
        $request->validate(['NhaCungCapId' => ['required', 'numeric', 'integer', 'exists:nha_cung_caps,id']]);

        HoaDonNhap::create([
            'TaiKhoanId' => Auth::user()->id,
            'NhaCungCapId' => $request['NhaCungCapId'],
        ]);

        return Redirect::back()->with("themMoi", 'Thêm hoá đơn thành công');
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
            $sp["HangSanXuatId"] = $sp->HangSanXuat->TenHangSanXuat;
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

        $hoaDonNhap->update(['TrangThai' => $request['TrangThai']]);

        $this->updateSoLuong_GiaBanCuaHD($hoaDonNhap);

        return Redirect::route('HoaDonNhap.index');
    }
    private function updateSoLuong_GiaBanCuaHD(HoaDonNhap $hoaDonNhap)
    {
        //neu trang thai' thanh`cong thi cap nhat lai gia' ban' va so luong ton` cua san pham tuong ung'
        if ($hoaDonNhap->TrangThai) {
            $dsChiTietHD = $hoaDonNhap->CT_HoaDonNhap;
            if (count($dsChiTietHD)) {
                foreach ($dsChiTietHD as $item) {
                    $ctSanPham = $item->CT_SanPham;
                    $ctSanPham->update([
                        "GiaNhap" => $item->GiaNhap,
                        "SoLuongTon" => $ctSanPham->SoLuongTon + $item->SoLuong,
                    ]);
                }
            }
        }
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
            'pk' => ['required', 'numeric', 'integer', 'exists:ct_san_phams,id'],
            'value' => ['required', 'numeric', 'min:1'],
        ]);
        // //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);
        //neu ton` tai roi` thi update ngc lai thi` bao' loi~
        $ctHoaDonNhap = CT_HoaDonNhap::where("CTSanPhamId", $request["pk"])->where("HoaDonNhapId", $hoaDonNhap->id)->first();
        if (!empty($ctHoaDonNhap)) {
            $soLuong = ($request['name'] == "SoLuong") ? $request['value'] : $ctHoaDonNhap->SoLuong;
            $giaNhap = ($request['name'] == "GiaNhap") ? $request['value'] : $ctHoaDonNhap->GiaNhap;
            $ctHoaDonNhap->update([
                'SoLuong' => $soLuong,
                'GiaNhap' => $giaNhap,
                //thanh` tien` hoa don nhap trigger tu tinh'
                //'ThanhTien' => $soLuong * $giaNhap,
            ]);
        } else {
            return response()->json(["error" => "Không tìm thấy dữ liệu"], 404);
        }

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
        if (!empty($request->input('TaiKhoanId')))
            $data = $data->where('TaiKhoanId', $request->input('TaiKhoanId'));
        $dsTaiKhoan = TaiKhoan::all();
        //tra lai resquet ve cho view de hien thi lai tim` kiem' cu?
        return view('Admin.HoaDon.HoaDonNhap-index', ["hoaDon" => $data, 'dsTaiKhoan' => $dsTaiKhoan, 'request' => $request]);
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
                'CTSanPhamId' => $item,
            ]);
            $dsChiTietHD = Arr::add($dsChiTietHD, $i, $ctHoaDonNhap);
            $i++;
        }
        return response()->json($dsChiTietHD, 200);
    }
    public function XoaSanPham(HoaDonNhap $hoaDonNhap, Request $request)
    {
        if (!empty($hoaDonNhap)) {
            $hoaDonNhap->CT_HoaDonNhap->where("CTSanPhamId", $request["CTSanPhamId"])->first()->forceDelete();
            //tinh' lai TongSL voi TongTien
            return response()->json([], 200);
        }
        return response()->json(["error" => "Không tìm thấy"], 404);
    }
    public function CapNhatTrangThai(HoaDonNhap $hoaDonNhap)
    {
        if ($hoaDonNhap->TrangThai == 1)
            //if nay` de tranh' tinh` trang gui request ao?, voi thu~ nghiem luon withErrors
            return Redirect::back()->withErrors(['TrangThai' => 'Trạng thái đã thành công thì không thể cập nhật tiếp']);
        else {
            $hoaDonNhap->TrangThai = $hoaDonNhap->TrangThai + 1;
            $hoaDonNhap->save();

            $this->updateSoLuong_GiaBanCuaHD($hoaDonNhap);
        }
        return Redirect::route('HoaDonNhap.index');
    }
    public function showModal_ChonChiTietSP(Request $request)
    {
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'SanPhamId' => ['required', 'numeric', 'integer', 'exists:san_phams,id'],
            "HoaDonNhapId" => ['required', 'numeric', 'integer', 'exists:hoa_don_nhaps,id'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $ctSanPham = SanPham::find($request["SanPhamId"])->CT_SanPham;
        $hoaDonNhap = HoaDonNhap::find($request["HoaDonNhapId"]);

        return view("Admin.HoaDon.HoaDonNhap-show-modal", ["ctSanPham" => $ctSanPham, "hoaDonNhap" => $hoaDonNhap]);
    }
    //api
    public function API_HoaDonNhap_ChiTiet(HoaDonNhap $hoaDonNhap)
    {
        $dsChiTietHD = $hoaDonNhap->CT_HoaDonNhap;
        foreach ($dsChiTietHD as $ctHD) {
            SanPhamController::fixImage($ctHD->CT_SanPham->SanPham);
        }
        return response()->json($dsChiTietHD, 200);
    }
}
