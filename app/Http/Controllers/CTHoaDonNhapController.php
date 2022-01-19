<?php

namespace App\Http\Controllers;

use App\Models\CT_HoaDonNhap;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class CTHoaDonNhapController extends Controller
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
     * @param  \App\Http\Requests\StoreCT_HoaDonNhapRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CT_HoaDonNhap  $cT_HoaDonNhap
     * @return \Illuminate\Http\Response
     */
    public function show(CT_HoaDonNhap $cT_HoaDonNhap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CT_HoaDonNhap  $cT_HoaDonNhap
     * @return \Illuminate\Http\Response
     */
    public function edit(CT_HoaDonNhap $cT_HoaDonNhap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCT_HoaDonNhapRequest  $request
     * @param  \App\Models\CT_HoaDonNhap  $cT_HoaDonNhap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CT_HoaDonNhap $cT_HoaDonNhap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CT_HoaDonNhap  $cT_HoaDonNhap
     * @return \Illuminate\Http\Response
     */
    public function destroy(CT_HoaDonNhap $cT_HoaDonNhap)
    {
        //
    }
}
