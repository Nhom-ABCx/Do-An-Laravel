<?php

namespace App\Http\Controllers;

use App\Models\Quyen;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuyenRequest;
use App\Http\Requests\UpdateQuyenRequest;

class QuyenController extends Controller
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
     * @param  \App\Http\Requests\StoreQuyenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuyenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quyen  $quyen
     * @return \Illuminate\Http\Response
     */
    public function show(Quyen $quyen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quyen  $quyen
     * @return \Illuminate\Http\Response
     */
    public function edit(Quyen $quyen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuyenRequest  $request
     * @param  \App\Models\Quyen  $quyen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuyenRequest $request, Quyen $quyen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quyen  $quyen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quyen $quyen)
    {
        //
    }
}
