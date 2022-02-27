<?php

namespace App\Http\Controllers;

use App\Models\MauSac;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMauSacRequest;
use App\Http\Requests\UpdateMauSacRequest;

class MauSacController extends Controller
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
     * @param  \App\Http\Requests\StoreMauSacRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMauSacRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MauSac  $mauSac
     * @return \Illuminate\Http\Response
     */
    public function show(MauSac $mauSac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MauSac  $mauSac
     * @return \Illuminate\Http\Response
     */
    public function edit(MauSac $mauSac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMauSacRequest  $request
     * @param  \App\Models\MauSac  $mauSac
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMauSacRequest $request, MauSac $mauSac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MauSac  $mauSac
     * @return \Illuminate\Http\Response
     */
    public function destroy(MauSac $mauSac)
    {
        //
    }
}
