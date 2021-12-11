<?php

namespace App\Http\Controllers;

use App\Models\DonViVanChuyen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DonViVanChuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DonViVanChuyen::all();
        return view('DonViVanChuyen.DonViVanChuyen-index',['dvvc'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DonViVanChuyen.DonViVanChuyen-create');
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
            'TenDonViVanChuyen'=>'required',
            'Website'=>'required',
            'Email'=>'required',
            'Phone'=>'required'
        ]);
        $dvvc= new DonViVanChuyen();
        $dvvc->fill([
            'TenDonViVanChuyen'=>$request->input('TenDonViVanChuyen'),
            'Website'=>$request->input('Website'),
            'Email'=>$request->input('Email'),
            'Phone'=>$request->input('Phone')
        ]);
        $dvvc->save();
        return Redirect::route('DonViVanChuyen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DonViVanChuyen  $donViVanChuyen
     * @return \Illuminate\Http\Response
     */
    public function show(DonViVanChuyen $donViVanChuyen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DonViVanChuyen  $donViVanChuyen
     * @return \Illuminate\Http\Response
     */
    public function edit(DonViVanChuyen $donViVanChuyen)
    {
        return view('DonViVanChuyen.DonViVanChuyen-edit',['dvvc'=>$donViVanChuyen]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DonViVanChuyen  $donViVanChuyen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DonViVanChuyen $donViVanChuyen)
    {
        $request->validate([
            'TenDonViVanChuyen'=>'required',
            'Website'=>'required',
            'Email'=>'required',
            'Phone'=>'required'
        ]);
        $donViVanChuyen->fill([
            'TenDonViVanChuyen'=>$request->input('TenDonViVanChuyen'),
            'Website'=>$request->input('Website'),
            'Email'=>$request->input('Email'),
            'Phone'=>$request->input('Phone')
        ]);
        $donViVanChuyen->save();
        return Redirect::route('DonViVanChuyen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DonViVanChuyen  $donViVanChuyen
     * @return \Illuminate\Http\Response
     */
    public function destroy(DonViVanChuyen $donViVanChuyen)
    {
        $donViVanChuyen->delete();
        return Redirect::route('DonViVanChuyen.index');
    }
}
