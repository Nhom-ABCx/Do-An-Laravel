<?php

namespace App\Http\Controllers;

use App\Models\DiaChi;
use App\Http\Requests\StoreDiaChiRequest;
use App\Http\Requests\UpdateDiaChiRequest;

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
    public function API_GetAll_DiaChi()
    {
        $data = DiaChi::all();
        //return json_encode($data);
        return response()->json($data, 200);
    }

}
