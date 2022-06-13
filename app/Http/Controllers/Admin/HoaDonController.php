<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Enums\TrangThaiHD;
use App\Models\CT_HoaDon;
use App\Models\DiaChi;
use App\Models\GioHang;
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
use BenSampo\Enum\Rules\EnumValue;
use BenSampo\Enum\Rules\EnumKey;
use Barryvdh\DomPDF\Facade as PDF;
//use PDF;

class HoaDonController extends Controller
{
    // Đang chờ xác nhận 1 //lúc khách vừa đặt hàng, gọi điện cho khách để tránh tình trạng đặt bừa
    // Đang xử lý 2    //khách đặt hàng nhưng chưa soạn ra sản phẩm từ kho
    // Đã xử lý 3 //đã soạn ra sản phẩm, chuẩn bị đưa đến đơn vị vận chuyển
    // Đang giao 4 //shipper đang trong quá trình giao hàng
    // Giao thành cỏng  5 //đã ship hàng thành công
    // deleted_at   // khách đã hủy đơn
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = HoaDon::whereNotIn("TrangThai", [TrangThaiHD::DaGiao])->get();
        $catChuoi = explode(" - ", $request->input("NgayDat"));
        //neu' ko rong~ va` dung' dinh dang datetime thi` tim` kiem'
        if ((!empty($request->input("NgayDat"))) && date_create($catChuoi[0]) != false && date_create($catChuoi[1]) != false) {
            $data = HoaDon::whereDate("created_at", ">=", date_format(date_create($catChuoi[0]), 'Y-m-d'))
                ->whereDate("created_at", "<=", date_format(date_create($catChuoi[1]), 'Y-m-d'))
                ->whereNotIn("TrangThai", [TrangThaiHD::DaGiao])->get();
        }
        //unset de no' huy? bien' do~ ton' dung luong
        unset($catChuoi);
        if (!empty($request->input('PhuongThucThanhToan')))
            $data = $data->where('PhuongThucThanhToan', $request->input('PhuongThucThanhToan'));
        if (!empty($request->input('TrangThai')))
            $data = $data->where('TrangThai', $request->input('TrangThai'));
        //tra lai resquet ve cho view de hien thi lai tim` kiem' cu?
        return view('Admin.HoaDon.HoaDon-index', ["hoaDon" => $data, 'request' => $request]);
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
        $lichSuVanChuyen = LichSuVanChuyen::where("HoaDonId", $hoaDon->id)->orderBy('created_at')->get();
        return view('Admin.HoaDon.HoaDon-show', ["hoaDon" => $hoaDon, "dsChiTietHD" => $dsChiTietHD, "lichSuVanChuyen" => $lichSuVanChuyen]);
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
            ['TrangThai' => ['required', 'numeric', 'integer', Rule::in(TrangThaiHD::getValues()),]],
            [
                'required' => 'Không được để trống',
                'numeric' => 'Phải là số',
                'integer' => 'Chỉ được nhập số',
                'in' => 'Trạng thái sai theo chuẩn',
            ]
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
        if ($hoaDon->TrangThai == TrangThaiHD::DaGiao)
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
        $hoaDon = HoaDon::where("id", $hoaDon->id)
            ->whereNotIn("TrangThai", [TrangThaiHD::DangGiao, TrangThaiHD::DaGiao])
            ->first();

        if (!empty($hoaDon)) {
            $dsChiTietHD = $hoaDon->CT_HoaDon;
            //neu co bat ki` san pham nao duoc mua thi` hoa don do' chi xoa' tam
            if (count($dsChiTietHD)) {
                //hoan` lai so KHO
                foreach ($dsChiTietHD as $item) {
                    $sp = $item->SanPham;
                    $sp->fill([
                        'SoLuongTon' => $sp->SoLuongTon + $item->SoLuong,
                        "LuotMua" => $sp->LuotMua - 1,
                    ]);
                    $sp->save();
                }

                $hoaDon->delete();
                return Redirect::route("HoaDon.index");
            }
            //nguoc lai xoa' luon cai hoa' don do'
            $hoaDon->forceDelete();
            return Redirect::route('HoaDon.index');
        }
        return Redirect::back()->withErrors(['TrangThai' => 'Trạng thái nãy không thể hủy']);
    }
    public function HoaDonDaGiao(Request $request)
    {
        //y chang index khac' cai' where thang thai'
        $data = HoaDon::where("TrangThai", TrangThaiHD::DaGiao)->get();
        if (!empty($request->input("NgayDat"))) {
            $catChuoi = explode(" - ", $request->input("NgayDat"));

            $data = HoaDon::whereDate("created_at", ">=", date_format(date_create($catChuoi[0]), 'Y-m-d'))
                ->whereDate("created_at", "<=", date_format(date_create($catChuoi[1]), 'Y-m-d'))
                ->where("TrangThai", TrangThaiHD::DaGiao)->get();
        }
        if (!empty($request->input('PhuongThucThanhToan')))
            $data = $data->where('PhuongThucThanhToan', $request->input('PhuongThucThanhToan'));
        if (!empty($request->input('TrangThai')))
            $data = $data->where('TrangThai', $request->input('TrangThai'));
        //tra lai resquet ve cho view de hien thi lai tim` kiem' cu?
        return view('Admin.HoaDon.HoaDon-index', ["hoaDon" => $data, 'request' => $request]);
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
        return view('Admin.HoaDon.HoaDon-index', ["hoaDon" => $data, 'request' => $request]);
    }
    public function KhoiPhucHoaDon($id)
    {
        $hoaDon = HoaDon::onlyTrashed()->find($id);
        //khi bam khoi phuc thi` lai tru` so luong ton` cua san pham
        foreach ($hoaDon->CT_HoaDon as $item) {
            $sp = $item->SanPham;
            $sp->fill([
                'SoLuongTon' => $sp->SoLuongTon - $item->SoLuong,
                "LuotMua" => $sp->LuotMua + 1,
            ]);
            $sp->save();
        }
        $hoaDon->restore();
        return Redirect::route('HoaDon.DaHuy');
    }

    public function HoaDonPDF(HoaDon $hoaDon)
    {
        $dsChiTietHD = CT_HoaDon::where("HoaDonId", $hoaDon->id)->get();
        //return view("HoaDon.HoaDon-pdf",["hoaDon"=>$hoaDon,"dsChiTietHD" => $dsChiTietHD]);
        $pdf = PDF::loadView('Admin.HoaDon.HoaDon-pdf', ["hoaDon" => $hoaDon, "dsChiTietHD" => $dsChiTietHD]);
        return $pdf->stream();

        //return $pdf->download('file-pdf.pdf');
        //return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('HoaDon.HoaDon-pdf',[])->stream();
    }
    //API

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
    public function API_Delete_HoaDon(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'HoaDonId' => ['required', 'numeric', 'integer', 'exists:hoa_dons,id'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $hoaDon = HoaDon::where("id", $request["HoaDonId"])
            ->whereNotIn("TrangThai", [TrangThaiHD::DangGiao, TrangThaiHD::DaGiao])
            ->first();

        //kt neu du lieu ko rong~ thi tra ve`
        if (!empty($hoaDon)) {

            $dsChiTietHD = $hoaDon->CT_HoaDon;
            //neu co bat ki` san pham nao duoc mua thi` hoa don do' chi xoa' tam
            if (count($dsChiTietHD)) {
                //hoan` lai so KHO
                foreach ($dsChiTietHD as $item) {
                    $sp = $item->SanPham;
                    $sp->fill([
                        'SoLuongTon' => $sp->SoLuongTon + $item->SoLuong,
                        "LuotMua" => $sp->LuotMua - 1,
                    ]);
                    $sp->save();
                }

                $data = $hoaDon->delete();
                return response()->json($data, 200);
            }
            //nguoc lai xoa' luon cai hoa' don do'
            $data = $hoaDon->forceDelete();
            return response()->json($data, 200);
        }
        return response()->json($hoaDon, 404);
    }
    public function API_Restore_HoaDon(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'HoaDonId' => ['required', 'numeric', 'integer'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $hoaDon = HoaDon::onlyTrashed()->find($request["HoaDonId"]);

        //kt neu du lieu ko rong~ thi tra ve`
        if (!empty($hoaDon)) {
            //khi bam khoi phuc thi` lai tru` so luong ton` cua san pham
            foreach ($hoaDon->CT_HoaDon as $item) {
                $sp = $item->SanPham;
                $sp->fill([
                    'SoLuongTon' => $sp->SoLuongTon - $item->SoLuong,
                    "LuotMua" => $sp->LuotMua + 1,
                ]);
                $sp->save();
            }

            $data = $hoaDon->restore();
            return response()->json($data, 200);
        }
        return response()->json($hoaDon, 404);
    }
    public function API_San_Pham_Can_Danh_Gia(Request $request)
    {
        $dsCtHoaDonCanDanhGia = CT_HoaDon::join('hoa_dons', 'hoa_dons.id', 'HoaDonId')
            ->join("dia_chis", "dia_chis.id", "hoa_dons.DiaChiId")
            ->join('san_phams', 'san_phams.id', 'SanPhamId')
            ->where('dia_chis.KhachHangId', $request['KhachHangId'])
            ->where('hoa_dons.TrangThai', 5)
            ->where(function ($query) {
                $query->where('Star', 0)
                    ->orWhereNull('Star');
            })
            ->with("SanPham") //load theo khoa' ngoai cua CTHoaDon, no tu them vao`
            ->get("ct_hoa_dons.*");
        return response()->json($dsCtHoaDonCanDanhGia, 200);
    }
}
