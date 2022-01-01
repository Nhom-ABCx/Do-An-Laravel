<?php

namespace App\Http\Controllers;

use App\Models\CT_HoaDon;
use App\Models\HoaDon;
use App\Models\SanPham;
use App\Models\KhachHang;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HoaDonController extends Controller
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
     * @param  \App\Models\HoaDon  $hoaDon
     * @return \Illuminate\Http\Response
     */
    public function show(HoaDon $hoaDon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HoaDon  $hoaDon
     * @return \Illuminate\Http\Response
     */
    public function edit(HoaDon $hoaDon)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HoaDon  $hoaDon
     * @return \Illuminate\Http\Response
     */
    public function destroy(HoaDon $hoaDon)
    {
        //
    }

    //API

    public function API_LapHoaDon(Request $request)
    {
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'KhachHangId' => ['required', 'numeric', 'integer', 'exists:khach_hangs,id'],
            "Data.*.SanPhamId" => ['required', 'numeric', 'integer', 'exists:san_phams,id'],
            "Data.*.SoLuong" => ['required', 'numeric', 'integer', 'min:0'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $hoaDon = HoaDon::create([
            'NhanVienId'       => 1,
            'KhachHangId'       => $request['KhachHangId'],
            'DiaChiGiao'         => '',
            'TrangThai' => 0, //vua lap
            'TongTien' => 0,
        ]);

        //dd($request["Data"][0]["SanPhamId"]);
        $arrayRaw = json_decode($request->getContent(), true); //chuyen json thanh array de truy van
        //dd($arrayRaw["Data"][0]);
        foreach ($arrayRaw["Data"] as $item) {
            //echo $item["SanPhamId"] . "\n";
            $sp = SanPham::find($item["SanPhamId"]);

            $thanhTien=$item["SoLuong"] * $sp->GiaBan;

            CT_HoaDon::create([
                'HoaDonId'       => $hoaDon->id,
                'SanPhamId'       => $item["SanPhamId"],
                'SoLuong'         => $item["SoLuong"],
                'GiaBan' => $sp->GiaBan,
                'GiaGiam' => 0,
                'ThanhTien' => $thanhTien,
                'Star' => 0,
            ]);
            // $soLuong=SanPham::select('SoLuongTon')->get();
            // $cnSoLuong=$soLuong-$item["SoLuong"];
            // $sp=SanPham::find($item["SanPhamId"]);
            // $sp->SoLuongTon=$cnSoLuong;
            // $sp->update();
        }
        $hoaDon->TongTien=CT_HoaDon::where('HoaDonId',$hoaDon->id)->sum('ThanhTien');
        $hoaDon->save();

        return response()->json(["Sucssess" => True], 200);
    }
}