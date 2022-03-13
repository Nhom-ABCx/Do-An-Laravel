<?php

namespace App\Http\Controllers;

use App\Models\CT_SanPham;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCT_SanPhamRequest;
use App\Http\Requests\UpdateCT_SanPhamRequest;

class CTSanPhamController extends Controller
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
     * @param  \App\Http\Requests\StoreCT_SanPhamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCT_SanPhamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CT_SanPham  $cT_SanPham
     * @return \Illuminate\Http\Response
     */
    public function show(CT_SanPham $cT_SanPham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CT_SanPham  $cT_SanPham
     * @return \Illuminate\Http\Response
     */
    public function edit(CT_SanPham $cT_SanPham)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCT_SanPhamRequest  $request
     * @param  \App\Models\CT_SanPham  $cT_SanPham
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCT_SanPhamRequest $request, CT_SanPham $cT_SanPham)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CT_SanPham  $cT_SanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(CT_SanPham $cT_SanPham)
    {
        //
    }
}
