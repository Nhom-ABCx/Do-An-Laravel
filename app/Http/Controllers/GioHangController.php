<?php

namespace App\Http\Controllers;

use App\Models\GioHang;
use App\Http\Controllers\Controller;
use App\Models\KhachHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Translation\Provider\Dsn;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class GioHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\GioHang  $gioHang
     * @return \Illuminate\Http\Response
     */
    public function show(GioHang $gioHang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GioHang  $gioHang
     * @return \Illuminate\Http\Response
     */
    public function edit(GioHang $gioHang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GioHang  $gioHang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GioHang $gioHang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GioHang  $gioHang
     * @return \Illuminate\Http\Response
     */
    public function destroy(GioHang $gioHang)
    {
        //
    }
    //API
    public function API_Get_GioHang(KhachHang $khachHang)
    {
        //lay ra cac chi tiet khuyen mai dang giam gia'
        $dsCtChuongTrinhKM = ChuongTrinhKhuyenMaiController::danhSachChiTietChuongTrinhKM();
        //lay ra tat ca id san pham dang giam gia' luu vao trong mang?
        $idSanPhamGiamGia = [];
        foreach ($dsCtChuongTrinhKM as $key => $ctkm) {
            $idSanPhamGiamGia = Arr::add($idSanPhamGiamGia, $key, $ctkm->SanPhamId);
        }


        //ghi v no tu them vo cot san_pham relations
        $dsGioHang = $khachHang->GioHang->load("SanPham");
        foreach ($dsGioHang as $item) {
            $giaBan = $item->SanPham->GiaBan;
            //neu' san pham id thuoc danh sach' id sp dang giam gia'
            if (in_array($item->SanPham->id, $idSanPhamGiamGia))
                //neu' san pham do' dang giam~ gia' thi` tru` tien` cua? giam gia'
                foreach ($dsCtChuongTrinhKM as $ctkm) {
                    if ($item->SanPham->id == $ctkm->SanPhamId)
                        $giaBan = $item->SanPham->GiaBan - $ctkm->GiamGia;
                }
            $item->SanPham->GiaBan = $giaBan;
        }
        return response()->json($dsGioHang, 200);
    }
    public function API_Insert_SanPham_GioHang(Request $request)
    {
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'KhachHangId' => ['required', 'numeric', 'integer', 'exists:khach_hangs,id'],
            "SanPhamId" => ['required', 'numeric', 'integer', 'exists:san_phams,id'],
            "SoLuong" => ['required', 'numeric', 'integer', 'min:1',],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);



        //neu' so luong trong gio hang` lon' hon so luong ton` trong kho thi`ko them vao duoc
        $sanPham = SanPham::find($request["SanPhamId"]);
        if ($request["SoLuong"] > $sanPham->SoLuongTon)
            return response()->json(["SoLuong" => "Maximum quantity in stock has been reached"], 400);



        $gioHang = GioHang::firstOrCreate([
            'KhachHangId'       => $request['KhachHangId'],
            'SanPhamId'       => $request["SanPhamId"],
        ], ['SoLuong'       => $request["SoLuong"],]);

        //neu da co san~ trong database thi` cong don` so luong len
        if (!$gioHang->wasRecentlyCreated) {
            $gioHang->SoLuong += 1;
            $gioHang->save();
        }
        //nguoc lai thi cong don` so luong len
        return response()->json($gioHang, 200);
    }
    public function API_Update_SanPham_GioHang(Request $request)
    {
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'KhachHangId' => ['required', 'numeric', 'integer', 'exists:khach_hangs,id'],
            "SanPhamId" => ['required', 'numeric', 'integer', 'exists:san_phams,id'],
            "SoLuong" => ['required', 'numeric', 'integer', 'min:1',],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $gioHang = GioHang::where("KhachHangId", $request["KhachHangId"])->where("SanPhamId", $request["SanPhamId"])->first();

        //neu co' gio~ hang` thi` cap nhat so luong
        if (!empty($gioHang)) {
            //neu' so luong trong gio hang` lon' hon so luong ton` trong kho thi`ko cap nhat duoc
            $sanPham = SanPham::find($request["SanPhamId"]);
            if ($request["SoLuong"] > $sanPham->SoLuongTon)
                return response()->json(["SoLuong" => "Maximum quantity in stock has been reached"], 400);


            $gioHang->SoLuong = $request["SoLuong"];
            $gioHang->save();
            return response()->json($gioHang, 200);
        }
        return response()->json($gioHang, 404);
    }
    public function API_Delete_SanPham_GioHang(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'KhachHangId' => ['required', 'numeric', 'integer', 'exists:khach_hangs,id'],
            "SanPhamId" => ['required', 'numeric', 'integer', 'exists:san_phams,id'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $gioHang = GioHang::where("KhachHangId", $request["KhachHangId"])->where("SanPhamId", $request["SanPhamId"])->first();

        if (!empty($gioHang)) {
            $data = $gioHang->delete();
            return response()->json($data, 200);
        }
        return response()->json($gioHang, 404);
    }
}
