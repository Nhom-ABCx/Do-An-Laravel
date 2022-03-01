<?php

namespace App\Http\Controllers;

use App\Models\ThuocTinh;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreThuocTinhRequest;
use App\Http\Requests\UpdateThuocTinhRequest;

class ThuocTinhController extends Controller
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
     * @param  \App\Http\Requests\StoreThuocTinhRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThuocTinhRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ThuocTinh  $thuocTinh
     * @return \Illuminate\Http\Response
     */
    public function show(ThuocTinh $thuocTinh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ThuocTinh  $thuocTinh
     * @return \Illuminate\Http\Response
     */
    public function edit(ThuocTinh $thuocTinh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThuocTinhRequest  $request
     * @param  \App\Models\ThuocTinh  $thuocTinh
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThuocTinhRequest $request, ThuocTinh $thuocTinh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ThuocTinh  $thuocTinh
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThuocTinh $thuocTinh)
    {
        //
    }
}
