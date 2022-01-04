<?php

namespace App\Http\Controllers;

use App\Models\BinhLuan;
use App\Models\KhachHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

class BinhLuanController extends Controller
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
     * @param  \App\Models\BinhLuan  $binhLuan
     * @return \Illuminate\Http\Response
     */
    public function show(BinhLuan $binhLuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BinhLuan  $binhLuan
     * @return \Illuminate\Http\Response
     */
    public function edit(BinhLuan $binhLuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BinhLuan  $binhLuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BinhLuan $binhLuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BinhLuan  $binhLuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(BinhLuan $binhLuan)
    {
        //
    }

    #api


    #api binh luan
    public function API_Get_BinhLuan_SanPham(SanPham $sanPham)
    {
        $data = DB::table("san_phams")
            ->join("binh_luans", "san_phams.id", "=", "binh_luans.SanPhamId")
            ->join("khach_hangs", "khach_hangs.id", "=", "binh_luans.KhachHangId")
            ->select("binh_luans.*","khach_hangs.Username","khach_hangs.HoTen","khach_hangs.HinhAnh")
            ->where("binh_luans.SanPhamId", $sanPham->id)
            ->where("san_phams.deleted_at", null)
            ->where("khach_hangs.deleted_at", null)
            ->where("binh_luans.deleted_at", null)
            ->get();
        if (!empty($data))
            return response()->json($data, 200);
        return response()->json($data, 404);
    }
    # thêm bình luân 
    public function API_Add_BinhLuan_SanPham(Request $request){
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'NoiDung' =>['required'],
            'KhachHangId' => ['required', 'numeric', 'integer', 'exists:khach_hangs,id'],
            "SanPhamId" => ['required', 'numeric', 'integer', 'exists:san_phams,id'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);
            
        $binhLuan = BinhLuan::firstOrCreate([
            'NoiDung'        =>$request['NoiDung'],
            'KhachHangId'     => $request['KhachHangId'],
            'SanPhamId'       => $request["SanPhamId"],
        ]);
        $data=$binhLuan;
        if (!empty($data))
            return response()->json($data, 200);
        return response()->json($data, 404);
    }
}