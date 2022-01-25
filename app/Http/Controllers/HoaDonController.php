<?php

namespace App\Http\Controllers;

use App\Models\CT_HoaDon;
use App\Models\DiaChi;
use App\Models\HoaDon;
use App\Models\SanPham;
use App\Models\KhachHang;
use App\Models\LichSuVanChuyen;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use PDF;

class HoaDonController extends Controller
{
    // Đang chờ xác nhận 0 //lúc khách vừa đặt hàng, gọi điện cho khách để tránh tình trạng đặt bừa
    // Đang xử lý 1    //khách đặt hàng nhưng chưa soạn ra sản phẩm từ kho
    // Đã xử lý 2 //đã soạn ra sản phẩm, chuẩn bị đưa đến đơn vị vận chuyển
    // Đang giao 3 //shipper đang trong quá trình giao hàng
    // Giao thành cỏng  4 //đã ship hàng thành công
    // deleted_at   // khách đã hủy đơn
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = HoaDon::whereNotIn("TrangThai", [4])->get();
        if (!empty($request->input("NgayDat"))) {
            $catChuoi = explode(" - ", $request->input("NgayDat"));

            $data = HoaDon::whereDate("created_at", ">=", date_format(date_create($catChuoi[0]), 'Y-m-d'))
                ->whereDate("created_at", "<=", date_format(date_create($catChuoi[1]), 'Y-m-d'))
                ->whereNotIn("TrangThai", [4])->get();
        }
        if (!empty($request->input('PhuongThucThanhToan')))
            $data = $data->where('PhuongThucThanhToan', $request->input('PhuongThucThanhToan'));
        if (!empty($request->input('TrangThai')))
            $data = $data->where('TrangThai', $request->input('TrangThai'));
        //tra lai resquet ve cho view de hien thi lai tim` kiem' cu?
        return view('HoaDon.HoaDon-index', ["hoaDon" => $data, 'request' => $request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HoaDon  $hoaDon
     * @return \Illuminate\Http\Response
     */
    public function show(HoaDon $hoaDon)
    {
        $dsChiTietHD = CT_HoaDon::where("HoaDonId", $hoaDon->id)->get();
        $lichSuVanChuyen=LichSuVanChuyen::where("HoaDonId",$hoaDon->id)->orderBy('created_at')->get();
        return view('HoaDon.HoaDon-show', ["hoaDon" => $hoaDon, "dsChiTietHD" => $dsChiTietHD,"lichSuVanChuyen"=>$lichSuVanChuyen]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HoaDon  $hoaDon
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, HoaDon $hoaDon)
    {
        //trang thai phai nam` trong 4 so', tranh truong` hop thay doi request tai giao dien
        $request->validate(
            ['TrangThai' => ['required', 'numeric', 'integer', Rule::in([0, 1, 2, 3, 4]),]]
        );

        $hoaDon->TrangThai = $request["TrangThai"];
        $hoaDon->save();
        return Redirect::route('HoaDon.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HoaDon  $hoaDon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HoaDon $hoaDon)
    {
        if ($hoaDon->TrangThai == 4)
            //if nay` de tranh' tinh` trang gui request ao?, voi thu~ nghiem luon withErrors
            return Redirect::back()->withErrors(['TrangThai' => 'Trạng thái đã giao thì không thể cập nhật']);
        else {
            $hoaDon->TrangThai = $hoaDon->TrangThai + 1;
            $hoaDon->save();
        }
        return Redirect::route('HoaDon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HoaDon  $hoaDon
     * @return \Illuminate\Http\Response
     */
    public function destroy(HoaDon $hoaDon)
    {
        $hoaDon->delete();
        if (count($hoaDon->CT_HoaDon)) {
            $hoaDon->delete();
            $hoaDon->save();
            return Redirect::route("HoaDon.index");
        }
        $hoaDon->forceDelete();
        return Redirect::route('HoaDon.index');
    }
    public function HoaDonDaGiao(Request $request)
    {
        //y chang index khac' cai' where thang thai'
        $data = HoaDon::where("TrangThai", 4)->get();
        if (!empty($request->input("NgayDat"))) {
            $catChuoi = explode(" - ", $request->input("NgayDat"));

            $data = HoaDon::whereDate("created_at", ">=", date_format(date_create($catChuoi[0]), 'Y-m-d'))
                ->whereDate("created_at", "<=", date_format(date_create($catChuoi[1]), 'Y-m-d'))
                ->where("TrangThai", 4)->get();
        }
        if (!empty($request->input('PhuongThucThanhToan')))
            $data = $data->where('PhuongThucThanhToan', $request->input('PhuongThucThanhToan'));
        if (!empty($request->input('TrangThai')))
            $data = $data->where('TrangThai', $request->input('TrangThai'));
        //tra lai resquet ve cho view de hien thi lai tim` kiem' cu?
        return view('HoaDon.HoaDon-index', ["hoaDon" => $data, 'request' => $request]);
    }
    public function HoaDonDaHuy(Request $request)
    {
        //y chang index khac' cai' select deleted_at
        $data = HoaDon::onlyTrashed()->get();
        if (!empty($request->input("NgayDat"))) {
            $catChuoi = explode(" - ", $request->input("NgayDat"));

            $data = HoaDon::onlyTrashed()->whereDate("created_at", ">=", date_format(date_create($catChuoi[0]), 'Y-m-d'))
                ->whereDate("created_at", "<=", date_format(date_create($catChuoi[1]), 'Y-m-d'))->get();
        }
        if (!empty($request->input('PhuongThucThanhToan')))
            $data = $data->where('PhuongThucThanhToan', $request->input('PhuongThucThanhToan'));
        if (!empty($request->input('TrangThai')))
            $data = $data->where('TrangThai', $request->input('TrangThai'));
        //tra lai resquet ve cho view de hien thi lai tim` kiem' cu?
        return view('HoaDon.HoaDon-index', ["hoaDon" => $data, 'request' => $request]);
    }
    public function KhoiPhucHoaDon($id)
    {
        $hoaDon = HoaDon::onlyTrashed()->find($id);
        $hoaDon->restore();
        return Redirect::route('HoaDon.DaHuy');
    }

    public function HoaDonPDF(HoaDon $hoaDon)
    {
        $dsChiTietHD = CT_HoaDon::where("HoaDonId", $hoaDon->id)->get();
        //return view("HoaDon.HoaDon-pdf",["hoaDon"=>$hoaDon,"dsChiTietHD" => $dsChiTietHD]);
        $pdf = PDF::loadView('HoaDon.HoaDon-pdf',["hoaDon"=>$hoaDon,"dsChiTietHD" => $dsChiTietHD]);
        return $pdf->stream();

        //return $pdf->download('file-pdf.pdf');
        //return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('HoaDon.HoaDon-pdf',[])->stream();
    }
    //API

    public function API_LapHoaDon(Request $request)
    {
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'DiaChiId' => ['required', 'numeric', 'integer', 'exists:dia_chis,id'],
            "Data.*.SanPhamId" => ['required', 'numeric', 'integer', 'exists:san_phams,id'],
            "Data.*.SoLuong" => ['required', 'numeric', 'integer', 'min:0'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $hoaDon = HoaDon::create([
            'DiaChiId'         => $request["DiaChiId"],
            "PhuongThucThanhToan" => 1, //ghi tammmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
            'TrangThai' => 0, //vua lap, dang cho xac nhan
            'TongSoLuong' => 0,
            'TongTien' => 0,
        ]);


        //---------------------------------------------
        //lay ra cac chi tiet khuyen mai dang giam gia'
        $dsCtChuongTrinhKM = ChuongTrinhKhuyenMaiController::danhSachChiTietChuongTrinhKM();
        //lay ra tat ca id san pham dang giam gia' luu vao trong mang?
        $idSanPhamGiamGia = [];
        $i = 0;
        foreach ($dsCtChuongTrinhKM as $ctkm) {
            $data = Arr::add($idSanPhamGiamGia, "$i", $ctkm->SanPhamId);
            $idSanPhamGiamGia = $data;
            $i++;
        }
        //---------------------------------------------

        //dd($request["Data"][0]["SanPhamId"]);
        $arrayRaw = json_decode($request->getContent(), true); //chuyen json thanh array de truy van
        //dd($arrayRaw["Data"][0]);
        foreach ($arrayRaw["Data"] as $item) {
            //echo $item["SanPhamId"] . "\n";
            $sp = SanPham::find($item["SanPhamId"]);
            //tru di so luong ton`, neu san pham do' co' so luong <=0
            if ($sp->SoLuongTon < $item["SoLuong"])
                continue; //thoat ra khoi vong lap
            else { //nguoc lai thi lap hoa don
                $sp->fill([
                    'SoLuongTon' => $sp->SoLuongTon - $item["SoLuong"],
                    "LuotMua"=>$sp->LuotMua+1,
                ]);
                $sp->save();


                $giaBan = $sp->GiaBan;
                if (in_array($sp->id, $idSanPhamGiamGia))
                    foreach ($dsCtChuongTrinhKM as $ctkm) {
                        if ($sp->id == $ctkm->SanPhamId)
                            $giaBan = $sp->GiaBan - $ctkm->GiamGia;
                    }
                $giaGiam = 0; //ma giam gia'voucher
                $thanhTien = $item["SoLuong"] * $giaBan - $giaGiam;

                CT_HoaDon::create([
                    'HoaDonId'       => $hoaDon->id,
                    'SanPhamId'       => $item["SanPhamId"],
                    'SoLuong'         => $item["SoLuong"],
                    'GiaNhap' => $sp->GiaNhap,
                    'GiaBan' => $giaBan,
                    'GiaGiam' => $giaGiam,
                    'ThanhTien' => $thanhTien,
                    'Star' => 0,
                ]);
            }
        }
        //neu ko co chi tiet hoa don nao duoc lap
        if (empty(CT_HoaDon::where('HoaDonId', $hoaDon->id)->first())) {
            $hoaDon->delete();
            return response()->json(["Sucssess" => false], 400);
        }
        //nguoc lai thi tinh' thanh` tien` cho hoa' don va` tra? ket qua ve 200
        $hoaDon->TongSoLuong = CT_HoaDon::where('HoaDonId', $hoaDon->id)->sum('SoLuong');
        $hoaDon->TongTien = CT_HoaDon::where('HoaDonId', $hoaDon->id)->sum('ThanhTien');
        $hoaDon->save();
        return response()->json(["Sucssess" => True], 200);
    }

    #them san pham vao chi tiet hoa don khi tra ve
    public static function API_Them_SanPham_To_CT_Hoa_Don($listChiTietHoaDon)
    {
        foreach ($listChiTietHoaDon as $item) {
            $sanPham = $item->SanPham;
            if (!empty($sanPham))
                Arr::add($item, "SanPham", $sanPham);
            else
                Arr::add($item, 'SanPham', null);
        }
    }

    #tra ve chi tiet hao don theo giai doan
    public function API_TraVe_CT_HoaDon_Theo_Tab(Request $request)
    {
        // $dsChiTietHD=DB::table("ct_hoa_dons")
        // ->join("hoa_dons","hoa_dons.id","=","ct_hoa_dons.HoaDonId")
        // ->join("dia_chis","dia_chis.id","=","hoa_dons.DiaChiId")
        // ->where("dia_chis.KhachHangId",$request["KhachHangId"])
        // ->where("hoa_dons.TrangThai",$request["TrangThai"])
        // ->whereNull("hoa_dons.deleted_at")
        // ->whereNull("ct_hoa_dons.deleted_at")
        // ->get("ct_hoa_dons.*");
        //y nhu nhau
        $dsChiTietHD = CT_HoaDon::join("hoa_dons", "hoa_dons.id", "=", "ct_hoa_dons.HoaDonId")
            ->join("dia_chis", "dia_chis.id", "=", "hoa_dons.DiaChiId")
            ->where("dia_chis.KhachHangId", $request["KhachHangId"])
            ->where("hoa_dons.TrangThai", $request["TrangThai"])
            ->whereNull("hoa_dons.deleted_at")
            ->whereNull("ct_hoa_dons.deleted_at")
            ->get("ct_hoa_dons.*");

        $this->API_Them_SanPham_To_CT_Hoa_Don($dsChiTietHD);
        return response()->json($dsChiTietHD, 200);
    }
    #update danh gia san pham
    public function API_Danh_Gia_SanPham(Request $request)
    {
        //dd($request->all());
        $data = CT_HoaDon::where("HoaDonId", $request["HoaDonId"])
            ->where("SanPhamId", $request["SanPhamId"])
            ->First();

        //dd($data->HoaDonId);
        if ($request["Star"] > 0) {
            $data->fill([
                'Star' => $request["Star"],
            ]);
            $data->save();
            return response()->json(["Sucsess" => true], 200);
        }
        //dd($data->HoaDonId);
        return response()->json(["Sucsess" => false], 405);
    }
}
