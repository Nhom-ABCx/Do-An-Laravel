<?php

namespace App\Http\Controllers;

use App\Models\CT_HoaDon;
use App\Models\HoaDon;
use App\Models\SanPham;
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

    public function addCart(Request $request)
    {
        $hoaDon = HoaDon::create([
            'NhanVienId'       => 1,
            'KhachHangId'       => $request['KhachHangId'],
            'DiaChiGiao'         => '',
            'TrangThai' => 0, //them vao gio hang
            'TongTien' => 0,

        ]);
        $sanPhamId = $request['SanPhamId'];
        $sanPhamaa = SanPham::find($sanPhamId);
        $thanhTien = $request['SoLuong'] * $sanPhamaa->GiaBan;
        $CThoaDon = CT_HoaDon::create([
            'HoaDonId'       => $hoaDon->id,
            'SanPhamId'       => $request['SanPhamId'],
            'SoLuong'         => $request['SoLuong'],
            'GiaBan' => $sanPhamaa->GiaBan,
            'ThanhTien' => $thanhTien,
            'Star' => 0,

        ]);

        $data = [$hoaDon, $CThoaDon];
        //neu du lieu ko co rong~ thi tra ve voi status la 200
        if (!empty($data))
            return response()->json($data, 200);
    }
}
