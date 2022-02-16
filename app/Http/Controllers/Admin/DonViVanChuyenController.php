<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\BinhLuan;
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
        $data = DonViVanChuyen::all();
        return view('Admin.DonViVanChuyen.DonViVanChuyen-index', ['dvvc' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.DonViVanChuyen.DonViVanChuyen-create');
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
            'TenDonViVanChuyen' => 'required',
            'Website' => 'required',
            'Email' => 'required',
            'Phone' => 'required'
        ]);
        $dvvc = new DonViVanChuyen();
        $dvvc->fill([
            'TenDonViVanChuyen' => $request->input('TenDonViVanChuyen'),
            'Website' => $request->input('Website'),
            'Email' => $request->input('Email'),
            'Phone' => $request->input('Phone')
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
        return view('Admin.DonViVanChuyen.DonViVanChuyen-edit', ['dvvc' => $donViVanChuyen]);
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
            'TenDonViVanChuyen' => 'required',
            'Website' => 'required',
            'Email' => 'required',
            'Phone' => 'required'
        ]);
        $donViVanChuyen->fill([
            'TenDonViVanChuyen' => $request->input('TenDonViVanChuyen'),
            'Website' => $request->input('Website'),
            'Email' => $request->input('Email'),
            'Phone' => $request->input('Phone')
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
    public function DonViVanChuyenDaXoa(Request $request)
    {
        $data = DonViVanChuyen::onlyTrashed()->get();
        return view('Admin.DonViVanChuyen.DonViVanChuyen-index', ['dvvc' => $data, 'request' => $request]);
    }
    public function KhoiPhucDonViVanChuyen($id)
    {
        // dd($id);
        $dvvc = DonViVanChuyen::onlyTrashed()->find($id);

        $dvvc->restore();
        return Redirect::route('DonViVanChuyen.DaXoa');
    }
}
