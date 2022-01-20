<?php

namespace App\Http\Controllers;

use App\Models\LoaiSanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PDO;

class LoaiSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = LoaiSanPham::all();
        return view('LoaiSanPham.LoaiSanPham-index', ['loaiSp' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("LoaiSanPham.LoaiSanPham-create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'TenLoai' => ['required', 'unique:loai_san_phams,TenLoai', 'max:255'],
            'MoTa' => ['max:255'],
        ]);
        $loaiSp = new LoaiSanPham();
        $loaiSp->fill([
            'TenLoai' => $request->input('TenLoai'),
            'MoTa' => $request->input('MoTa') ?? '',
        ]);
        $loaiSp->save();
        return Redirect::route('LoaiSanPham.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiSanPham $loaiSanPham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiSanPham $loaiSanPham)
    {
        return view('LoaiSanPham.LoaiSanPham-edit', ['loaiSanPham' => $loaiSanPham]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoaiSanPham $loaiSanPham)
    {
        // $request->validate(
        //     [
        //         "TenLoai" => $request["TenLoai"],
        //         "MoTa" => $request["MoTa"]
        //     ]
        // );
        $loaiSanPham->fill(
            [
                "TenLoai" => $request->input("TenLoai"),
                "MoTa" => $request->input("MoTa")
            ]
        );
        $loaiSanPham->save();
        return Redirect::route('LoaiSanPham.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoaiSanPham $loaiSanPham)
    {
        if (count($loaiSanPham->SanPham)) {
            $loaiSanPham->delete();
            $loaiSanPham->save();
            return Redirect::route("LoaiSanPham.index");
        }
        $loaiSanPham->forceDelete();
        return Redirect::route("LoaiSanPham.index");
    }
    public function LoaiSanPhamDaXoa(Request $request)
    {
        $data = LoaiSanPham::onlyTrashed()->get();
        return view("LoaiSanPham.LoaiSanPham-index", ['loaiSp' => $data]);
    }
    public function KhoiPhucLoaiSanPham($id)
    {
        $data = LoaiSanPham::onlyTrashed()->find($id);
        $data->restore();
        return Redirect::route('LoaiSanPham.DaXoa');
    }
}
