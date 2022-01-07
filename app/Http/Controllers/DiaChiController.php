<?php

namespace App\Http\Controllers;

use App\Models\DiaChi;
use App\Http\Requests\StoreDiaChiRequest;
use App\Http\Requests\UpdateDiaChiRequest;
use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Translation\Provider\Dsn;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class DiaChiController extends Controller
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
     * @param  \App\Http\Requests\StoreDiaChiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiaChiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DiaChi  $diaChi
     * @return \Illuminate\Http\Response
     */
    public function show(DiaChi $diaChi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DiaChi  $diaChi
     * @return \Illuminate\Http\Response
     */
    public function edit(DiaChi $diaChi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiaChiRequest  $request
     * @param  \App\Models\DiaChi  $diaChi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiaChiRequest $request, DiaChi $diaChi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DiaChi  $diaChi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiaChi $diaChi)
    {
        //
    }
    //API
    public function API_GetAll_DiaChi(KhachHang $khachHang)
    {
        $data = $khachHang->DiaChiGiao;
        //return json_encode($data);
        return response()->json($data, 200);
    }
    public function API_Insert_DiaChi(Request $request)
    {
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'KhachHangId' => ['required', 'numeric', 'integer', 'exists:khach_hangs,id'],
            'TenNguoiNhan' => ['required', 'max:255'],
            'Phone' => ['required','numeric', 'integer'],
            'TinhThanhPho' => [],
            'QuanHuyen' => [],
            'PhuongXa' => [],
            'DiaChiChiTiet' => ['required'],
            'CodeTinhThanhPho' => [],
            'CodeQuanHuyen' => [],
            'CodePhuongXa' => [],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $diaChi = DiaChi::firstOrCreate([
            'KhachHangId' => $request['KhachHangId'],
            'TenNguoiNhan' => $request["TenNguoiNhan"],
            'Phone' => $request["Phone"],
            'TinhThanhPho' => $request["TinhThanhPho"],
            'QuanHuyen' => $request["QuanHuyen"],
            'PhuongXa' => $request["PhuongXa"],
            'DiaChiChiTiet' => $request["DiaChiChiTiet"],
            'CodeTinhThanhPho' => $request["CodeTinhThanhPho"],
            'CodeQuanHuyen' => $request["CodeQuanHuyen"],
            'CodePhuongXa' => $request["CodePhuongXa"],
        ]);

        $data = $diaChi;
        //neu du lieu ko co rong~ thi tra ve voi status la 200
        if (!empty($data))
            return response()->json($data, 200);
        return response()->json($data, 404);
    }
    public function API_Update_DiaChi(Request $request, DiaChi $diaChi)
    {
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'KhachHangId' => ['required', 'numeric', 'integer', 'exists:khach_hangs,id'],
            'TenNguoiNhan' => ['required', 'max:255'],
            'Phone' => ['required'],
            'TinhThanhPho' => [],
            'QuanHuyen' => [],
            'PhuongXa' => [],
            'DiaChiChiTiet' => ['required'],
            'CodeTinhThanhPho' => [],
            'CodeQuanHuyen' => [],
            'CodePhuongXa' => [],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $diaChi->fill([
            'KhachHangId' => $request['KhachHangId'],
            'TenNguoiNhan' => $request["TenNguoiNhan"],
            'Phone' => $request["Phone"],
            'TinhThanhPho' => $request["TinhThanhPho"],
            'QuanHuyen' => $request["QuanHuyen"],
            'PhuongXa' => $request["PhuongXa"],
            'DiaChiChiTiet' => $request["DiaChiChiTiet"],
            'CodeTinhThanhPho' => $request["CodeTinhThanhPho"],
            'CodeQuanHuyen' => $request["CodeQuanHuyen"],
            'CodePhuongXa' => $request["CodePhuongXa"],
        ]);
        $diaChi->save();

        $data = $diaChi;
        //neu du lieu ko co rong~ thi tra ve voi status la 200
        if (!empty($data))
            return response()->json($data, 200);
        return response()->json($data, 404);
    }

    public function API_Delete_DiaChi(DiaChi $diaChi)
    {
        if (!empty($diaChi)) {
            $data = $diaChi->delete();
            return response()->json($data, 200);
        }
        return response()->json($diaChi, 404);
    }
}
