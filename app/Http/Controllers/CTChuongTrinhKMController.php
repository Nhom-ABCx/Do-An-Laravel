<?php

namespace App\Http\Controllers;

use App\Models\ChuongTrinhKhuyenMai;
use App\Models\CTChuongTrinhKM;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class CTChuongTrinhKMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=CTChuongTrinhKM::all();
        return view('CTKhuyenMai.CTKhuyenMai-index',['ctctkm'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ctKhuyenMai=ChuongTrinhKhuyenMai::all();
        $sanPham=SanPham::all();
        return view('CTKhuyenMai.CTKhuyenMai-create',['ctkm'=>$ctKhuyenMai,'sanPham'=>$sanPham]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cTChuongTrinhKM= new CTChuongTrinhKM();
        $cTChuongTrinhKM->fill([
            'ChuongTrinhKhuyenMaiId'=>$request->input('ChuongTrinhKhuyenMaiId'),
            'SanPhamId'=>$request->input('SanPhamId'),
            'GiamGia'=>$request->input('GiamGia'),
            'SoLuong'=>$request->input('SoLuong')
        ]);
        $cTChuongTrinhKM->save();
        return Redirect::route('CTKhuyenMai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CTChuongTrinhKM  $cTChuongTrinhKM
     * @return \Illuminate\Http\Response
     */
    public function show(CTChuongTrinhKM $cTChuongTrinhKM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CTChuongTrinhKM  $cTChuongTrinhKM
     * @return \Illuminate\Http\Response
     */
    public function edit(CTChuongTrinhKM $cTChuongTrinhKM)
    {
        
        dd($cTChuongTrinhKM);
       // return view('CTKhuyenMai.CTKhuyenMai-edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CTChuongTrinhKM  $cTChuongTrinhKM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CTChuongTrinhKM $cTChuongTrinhKM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CTChuongTrinhKM  $cTChuongTrinhKM
     * @return \Illuminate\Http\Response
     */
    public function destroy(CTChuongTrinhKM $cTChuongTrinhKM)
    {
        //
    }
}
