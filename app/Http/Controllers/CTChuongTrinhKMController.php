<?php

namespace App\Http\Controllers;

use App\Models\ChuongTrinhKhuyenMai;
use App\Models\CTChuongTrinhKM;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;

class CTChuongTrinhKMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CTChuongTrinhKM::all();
        $ctctkm = new CTChuongTrinhKM();
        return view('CTKhuyenMai.CTKhuyenMai-index', ['ctctkm' => $data, $ctctkm]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ctKhuyenMai = ChuongTrinhKhuyenMai::all();
        $sanPham = SanPham::all();
        return view('CTKhuyenMai.CTKhuyenMai-create', ['ctkm' => $ctKhuyenMai, 'sanPham' => $sanPham]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cTChuongTrinhKM = new CTChuongTrinhKM();
        $cTChuongTrinhKM->fill([
            'ChuongTrinhKhuyenMaiId' => $request->input('ChuongTrinhKhuyenMaiId'),
            'SanPhamId' => $request->input('SanPhamId'),
            'GiamGia' => $request->input('GiamGia'),
            'SoLuong' => $request->input('SoLuong')
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
    public function edit($ctId, $spId)
    {

        $query = CTChuongTrinhKM::where('ChuongTrinhKhuyenMaiId', $ctId)->where('SanPhamId', $spId)->get();
        
        $ctkm = ChuongTrinhKhuyenMai::find($ctId);
        $sanPham = SanPham::find($spId);
        //dd($ctctkm);
        return view('CTKhuyenMai.CTKhuyenMai-edit', ['ctctkm' => $query, 'ctkm' => $ctkm, 'sanPham' => $sanPham]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CTChuongTrinhKM  $cTChuongTrinhKM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ctId,$spId)
    {
        DB::update("update ct_chuong_trinh_kms set GiamGia=?, SoLuong=? where ChuongTrinhKhuyenMaiId=? and SanPhamId=? ",
        [$request->input('GiamGia'),$request->input('SoLuong'),$ctId,$spId]);
        return Redirect::route('CTKhuyenMai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CTChuongTrinhKM  $cTChuongTrinhKM
     * @return \Illuminate\Http\Response
     */
    public function destroy($ctId,$spId)
    {   
        CTChuongTrinhKM::where('ChuongTrinhKhuyenMaiId',$ctId)->where('SanPhamId',$spId)->delete();
        return Redirect::route('CTKhuyenMai.index');
    }
}
