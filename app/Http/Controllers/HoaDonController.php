<?php

namespace App\Http\Controllers;

use App\Models\CT_HoaDon;
use App\Models\HoaDon;
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
        // $hoaDon = HoaDon::create([
        //     'Username'       => strip_tags($request['Username']),
        //     'Email'       => strip_tags($request['Email']),
        //     //'MatKhau'         => Hash::make($request['MatKhau']),
        //     'MatKhau'         => strip_tags($request['MatKhau']),
        //     'HoTen' => '', //cap nhat sau
        //     'NgaySinh' => date('Y-m-d H:i:s'),
        //     'GioiTinh' => 0,
        //     'DiaChi' => '',
        //     'HinhAnh' => '',
        // ]);

        // $data = $hoaDon;
        // //neu du lieu ko co rong~ thi tra ve voi status la 200
        // if (!empty($data))
        //     return response()->json($data, 200);
        // $cart = HoaDon::find(8);
        // dd($cart->CT_HoaDon);
        // $aa = $cart->CT_HoaDon;
        // dd($aa->SanPham);
    }
}
