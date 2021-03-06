<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\ChuongTrinhKhuyenMai;
use App\Models\CTChuongTrinhKM;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

class ChuongTrinhKhuyenMaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ChuongTrinhKhuyenMai::all();
        return view('Admin.KhuyenMai.KhuyenMai-index', ['ctkm' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sanPhamId = SanPham::all();
        return view('Admin.KhuyenMai.KhuyenMai-create', ['sanPhamId' => $sanPhamId]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'TenChuongTrinh' => ['required', 'unique:chuong_trinh_khuyen_mais,TenChuongTrinh', 'max:255'],
            'MoTa' => ['required', 'max:255'],
            'date-range-picker' => ['required'],
        ]);
        $catChuoi = explode(" - ", $request->input("date-range-picker"));
        $CTkm = new ChuongTrinhKhuyenMai();
        $CTkm->fill([
            "TenChuongTrinh" => $request->input("TenChuongTrinh"),
            "MoTa" => $request->input("MoTa"),
            'FromDate' => date_format(date_create($catChuoi[0]), 'Y-m-d'),
            'ToDate' => date_format(date_create($catChuoi[1]), 'Y-m-d'),
        ]);
        $CTkm->save();
        return Redirect::route('KhuyenMai.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChuongTrinhKhuyenMai  $chuongTrinhKhuyenMai
     * @return \Illuminate\Http\Response
     */
    public function show(ChuongTrinhKhuyenMai $chuongTrinhKhuyenMai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChuongTrinhKhuyenMai  $chuongTrinhKhuyenMai
     * @return \Illuminate\Http\Response
     */
    public function edit(ChuongTrinhKhuyenMai $chuongTrinhKhuyenMai)
    {

        //$chuongTrinhKhuyenMai->FromDate = date('d-m-Y', strtotime($chuongTrinhKhuyenMai->FromDate));
        // dd($chuongTrinhKhuyenMai->FromDate);
        return view('Admin.KhuyenMai.KhuyenMai-edit', ['ctkm' => $chuongTrinhKhuyenMai]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChuongTrinhKhuyenMai  $chuongTrinhKhuyenMai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChuongTrinhKhuyenMai $chuongTrinhKhuyenMai)
    {
        $catChuoi = explode(" - ", $request->input("date-range-picker"));

        $chuongTrinhKhuyenMai->fill([
            'TenChuongTrinh' => $request->input('TenChuongTrinh'),
            'MoTa' => $request->input('MoTa'),
            'FromDate' => date_format(date_create($catChuoi[0]), 'Y-m-d'),
            'ToDate' => date_format(date_create($catChuoi[1]), 'Y-m-d'),

        ]);

        $chuongTrinhKhuyenMai->save();

        return Redirect::route('KhuyenMai.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChuongTrinhKhuyenMai  $chuongTrinhKhuyenMai
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChuongTrinhKhuyenMai $chuongTrinhKhuyenMai)
    {
        $chuongTrinhKhuyenMai->delete();
        return Redirect::route('KhuyenMai.index');
    }
    public function KhuyenMaiDaXoa(Request $request)
    {
        $data = ChuongTrinhKhuyenMai::onlyTrashed()->get();
        return view('Admin.KhuyenMai.KhuyenMai-index', ['ctkm' => $data, 'request' => $request]);
    }
    public function KhoiPhucKhuyenMai($id)
    {
        $data = ChuongTrinhKhuyenMai::onlyTrashed()->find($id);
        $data->restore();
        return Redirect::route('KhuyenMai.DaXoa');
    }
    /**
     * L???y ra h???t t???t c??? chi ti???t ch????ng tr??nh KM ??ang c??n hi???u l???c
     *
     * @return collect App\Models\CTChuongTrinhKM
     */
    public static function danhSachChiTietChuongTrinhKM()
    {
        $currentDate = date('Y-m-d H:i:s');
        return CTChuongTrinhKM::join("chuong_trinh_khuyen_mais", "chuong_trinh_khuyen_mais.id", "=", "ct_chuong_trinh_kms.ChuongTrinhKhuyenMaiId")
            ->whereDate("chuong_trinh_khuyen_mais.FromDate", "<=", $currentDate)
            ->whereDate("chuong_trinh_khuyen_mais.ToDate", ">=", $currentDate)
            ->whereNull("chuong_trinh_khuyen_mais.deleted_at")
            ->whereNull("ct_chuong_trinh_kms.deleted_at")
            ->get("ct_chuong_trinh_kms.*");
    }
}
