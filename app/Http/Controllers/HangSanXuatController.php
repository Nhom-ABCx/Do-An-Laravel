<?php

namespace App\Http\Controllers;

use App\Models\HangSanXuat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HangSanXuatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=HangSanXuat::all();
        return view('HangSanXuat.HangSanXuat-index',['hsx'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HangSanXuat.HangSanXuat-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Hsx= new HangSanXuat();

        $Hsx->fill([
            "Ten"=>$request->input("Ten"),
            "DiaChi"=>$request->input("DiaChi"),
            "Email"=>$request->input("Email"),
            "Phone"=>$request->input("Phone")
        ]);
        $Hsx->save();
         return Redirect::route('HangSanXuat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HangSanXuat  $hangSanXuat
     * @return \Illuminate\Http\Response
     */
    public function show(HangSanXuat $hangSanXuat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HangSanXuat  $hangSanXuat
     * @return \Illuminate\Http\Response
     */
    public function edit(HangSanXuat $hangSanXuat)
    {
        return view('HangSanXuat.HangSanXuat-edit',['hsx'=>$hangSanXuat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HangSanXuat  $hangSanXuat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HangSanXuat $hangSanXuat)
    {
        $hangSanXuat->fill([
            'Ten'=>$request->input('Ten'),
            'DiaChi'=>$request->input('DiaChi'),
            'Email'=>$request->input('Email'),
            'Phone'=>$request->input('Phone'),
        ]);

        $hangSanXuat->save();

         return Redirect::route('HangSanXuat.index');
        //dd("adsd");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HangSanXuat  $hangSanXuat
     * @return \Illuminate\Http\Response
     */
    public function destroy(HangSanXuat $hangSanXuat)
    {
        //
    }
}
